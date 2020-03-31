(function ($) {
  'use strict'
  var defaults, internalData, methods
  $.extend({
    roundaboutShapes: {
      def: 'lazySusan',
      lazySusan: function (r, a, t) {
        return {
          x: Math.sin(r + a),
          y: (Math.sin(r + 3 * Math.PI / 2 + a) / 8) * t,
          z: (Math.cos(r + a) + 1) / 2,
          scale: (Math.sin(r + Math.PI / 2 + a) / 2) + 0.5
        }
      }
    }
  })
  defaults = {
    margin: 0.5,
    bearing: 0.0,
    tilt: 0.0,
    minZ: 100,
    maxZ: 280,
    minOpacity: 0.8,
    maxOpacity: 1.0,
    minScale: 0.4,
    maxScale: 1.0,
    duration: 600,
    btnNext: null,
    btnNextCallback: function () {},
    btnPrev: null,
    btnPrevCallback: function () {},
    btnToggleAutoplay: null,
    btnStartAutoplay: null,
    btnStopAutoplay: null,
    easing: 'swing',
    clickToFocus: true,
    clickToFocusCallback: function () {},
    focusBearing: 0.0,
    shape: 'lazySusan',
    debug: false,
    childSelector: 'li',
    startingChild: null,
    reflect: false,
    floatComparisonThreshold: 0.001,
    autoplay: false,
    autoplayDuration: 1000,
    autoplayPauseOnHover: false,
    autoplayCallback: function () {
      autoplayCallback()
    },
    autoplayInitialDelay: 0,
    enableDrag: false,
    dropDuration: 600,
    dropEasing: 'swing',
    dropAnimateTo: 'nearest',
    dropCallback: function () {},
    dragAxis: 'x',
    dragFactor: 4,
    triggerFocusEvents: true,
    triggerBlurEvents: true,
    responsive: false
  }
  internalData = {
    autoplayInterval: null,
    autoplayIsRunning: false,
    autoplayStartTimeout: null,
    animating: false,
    childInFocus: -1,
    touchMoveStartPosition: null,
    stopAnimation: false,
    lastAnimationStep: false
  }
  methods = {
    init: function (options, callback, relayout) {
      var settings, now = (new Date()).getTime()
      options = (typeof options === 'object') ? options : {}
      callback = ($.isFunction(callback)) ? callback : function () {}
      callback = ($.isFunction(options)) ? options : callback
      settings = $.extend({},
        defaults, options, internalData)
      return this.each(function () {
        var self = $(this),
          childCount = self.children(settings.childSelector).length,
          period = 360.0 / childCount,
          startingChild = (settings.startingChild && settings.startingChild > (childCount - 1)) ? (childCount - 1) : settings.startingChild,
          startBearing = (settings.startingChild === null) ? settings.bearing : 360 - (startingChild * period),
          holderCSSPosition = (self.css('position') !== 'static') ? self.css('position') : 'relative'
        self.css({
          padding: 0,
          position: holderCSSPosition
        }).addClass('roundabout-holder').data('roundabout', $.extend({},
          settings, {
            startingChild: startingChild,
            bearing: startBearing,
            oppositeOfFocusBearing: methods.normalize.apply(null, [settings.focusBearing - 180]),
            dragBearing: startBearing,
            period: period,
            setMargin: settings.margin
          }))
        if (relayout) {
          self.unbind('.roundabout').children(settings.childSelector).unbind('.roundabout')
        } else {
          if (settings.responsive) {
            $(window).bind('resize',
              function () {
                methods.stopAutoplay.apply(self)
                methods.relayoutChildren.apply(self)
              })
          }
        }
        if (settings.clickToFocus) {
          self.children(settings.childSelector).each(function (i) {
            $(this).bind('click.roundabout',
              function () {
                var degrees = methods.getPlacement.apply(self, [i])
                if (!methods.isInFocus.apply(self, [degrees])) {
                  methods.stopAnimation.apply($(this))
                  if (!self.data('roundabout').animating) {
                    methods.animateBearingToFocus.apply(self, [degrees, self.data('roundabout').clickToFocusCallback])
                  }
                  return false
                }
              })
          })
        }
        if (settings.btnNext) {
          $(settings.btnNext).bind('click.roundabout',
            function () {
              if (!self.data('roundabout').animating) {
                methods.animateToNextChild.apply(self, [self.data('roundabout').btnNextCallback])
              }
              return false
            })
        }
        if (settings.btnPrev) {
          $(settings.btnPrev).bind('click.roundabout',
            function () {
              methods.animateToPreviousChild.apply(self, [self.data('roundabout').btnPrevCallback])
              return false
            })
        }
        if (settings.btnToggleAutoplay) {
          $(settings.btnToggleAutoplay).bind('click.roundabout',
            function () {
              methods.toggleAutoplay.apply(self)
              return false
            })
        }
        if (settings.btnStartAutoplay) {
          $(settings.btnStartAutoplay).bind('click.roundabout',
            function () {
              methods.startAutoplay.apply(self)
              return false
            })
        }
        if (settings.btnStopAutoplay) {
          $(settings.btnStopAutoplay).bind('click.roundabout',
            function () {
              methods.stopAutoplay.apply(self)
              return false
            })
        }
        if (settings.autoplayPauseOnHover) {
          self.bind('mouseenter.roundabout.autoplay',
            function () {
              methods.stopAutoplay.apply(self, [true])
            }).bind('mouseleave.roundabout.autoplay',
            function () {
              methods.startAutoplay.apply(self)
            })
        }
        if (settings.enableDrag) {
          if (!$.isFunction(self.drag)) {
            if (settings.debug) {
              alert('You do not have the drag plugin loaded.')
            }
          } else if (!$.isFunction(self.drop)) {
            if (settings.debug) {
              alert('You do not have the drop plugin loaded.')
            }
          } else {
            self.drag(function (e, properties) {
              var data = self.data('roundabout'),
                delta = (data.dragAxis.toLowerCase() === 'x') ? 'deltaX' : 'deltaY'
              methods.stopAnimation.apply(self)
              methods.setBearing.apply(self, [data.dragBearing + properties[delta] / data.dragFactor])
            }).drop(function (e) {
              var data = self.data('roundabout'),
                method = methods.getAnimateToMethod(data.dropAnimateTo)
              methods.allowAnimation.apply(self)
              methods[method].apply(self, [data.dropDuration, data.dropEasing, data.dropCallback])
              data.dragBearing = data.period * methods.getNearestChild.apply(self)
            })
          }
          self.each(function () {
            var element = $(this).get(0),
              data = $(this).data('roundabout'),
              page = (data.dragAxis.toLowerCase() === 'x') ? 'pageX' : 'pageY',
              method = methods.getAnimateToMethod(data.dropAnimateTo)
            if (element.addEventListener) {
              element.addEventListener('touchstart',
                function (e) {
                  data.touchMoveStartPosition = e.touches[0][page]
                },
                false)
              element.addEventListener('touchmove',
                function (e) {
                  var delta = (e.touches[0][page] - data.touchMoveStartPosition) / data.dragFactor
                  e.preventDefault()
                  methods.stopAnimation.apply($(this))
                  methods.setBearing.apply($(this), [data.dragBearing + delta])
                },
                false)
              element.addEventListener('touchend',
                function (e) {
                  e.preventDefault()
                  methods.allowAnimation.apply($(this))
                  method = methods.getAnimateToMethod(data.dropAnimateTo)
                  methods[method].apply($(this), [data.dropDuration, data.dropEasing, data.dropCallback])
                  data.dragBearing = data.period * methods.getNearestChild.apply($(this))
                },
                false)
            }
          })
        }
        methods.initChildren.apply(self, [callback, relayout])
      })
    },
    initChildren: function (callback, relayout) {
      var self = $(this),
        data = self.data('roundabout')
      callback = callback ||
                function () {}
      self.children(data.childSelector).each(function (i) {
        var startWidth, startHeight, startFontSize, degrees = methods.getPlacement.apply(self, [i])
        if (relayout && $(this).data('roundabout')) {
          startWidth = $(this).data('roundabout').startWidth
          startHeight = $(this).data('roundabout').startHeight
          startFontSize = $(this).data('roundabout').startFontSize
        }
        $(this).addClass('roundabout-moveable-item').css('position', 'absolute')
        $(this).data('roundabout', {
          startWidth: startWidth || $(this).width(),
          startHeight: startHeight || $(this).height(),
          startFontSize: startFontSize || parseInt($(this).css('font-size'), 10),
          degrees: degrees,
          backDegrees: methods.normalize.apply(null, [degrees - 180]),
          childNumber: i,
          currentScale: 1,
          parent: self
        })
      })
      methods.updateChildren.apply(self)
      if (data.autoplay) {
        data.autoplayStartTimeout = setTimeout(function () {
          methods.startAutoplay.apply(self)
        },
        data.autoplayInitialDelay)
      }
      self.trigger('ready')
      callback.apply(self)
      return self
    },
    updateChildren: function (margin) {
      return this.each(function () {
        var self = $(this),
          data = self.data('roundabout'),
          inFocus = -1,
          info = {
            bearing: data.bearing,
            tilt: data.tilt,
            stage: {
              width: Math.floor($(this).width() * data.setMargin || margin),
              height: Math.floor($(this).height() * data.setMargin || margin)
            },
            animating: data.animating,
            inFocus: data.childInFocus,
            focusBearingRadian: methods.degToRad.apply(null, [data.focusBearing]),
            shape: $.roundaboutShapes[data.shape] || $.roundaboutShapes[$.roundaboutShapes.def]
          }
        info.midStage = {
          width: info.stage.width / 2,
          height: info.stage.height / 2
        }
        info.nudge = {
          width: info.midStage.width + (info.stage.width * 0.05),
          height: info.midStage.height + (info.stage.height * 0.05)
        }
        info.zValues = {
          min: data.minZ,
          max: data.maxZ,
          diff: data.maxZ - data.minZ
        }
        info.opacity = {
          min: data.minOpacity,
          max: data.maxOpacity,
          diff: data.maxOpacity - data.minOpacity
        }
        info.scale = {
          min: data.minScale,
          max: data.maxScale,
          diff: data.maxScale - data.minScale
        }
        self.children(data.childSelector).each(function (i) {
          if (methods.updateChild.apply(self, [$(this), info, i,
            function () {
              $(this).trigger('ready')
            }]) && (!info.animating || data.lastAnimationStep)) {
            inFocus = i
            $(this).addClass('roundabout-in-focus')
          } else {
            $(this).removeClass('roundabout-in-focus')
          }
        })
        if (inFocus !== info.inFocus) {
          if (data.triggerBlurEvents) {
            self.children(data.childSelector).eq(info.inFocus).trigger('blur')
          }
          data.childInFocus = inFocus
          if (data.triggerFocusEvents && inFocus !== -1) {
            self.children(data.childSelector).eq(inFocus).trigger('focus')
          }
        }
        self.trigger('childrenUpdated')
      })
    },
    updateChild: function (childElement, info, childPos, callback) {
      var factors, self = this,
        child = $(childElement),
        data = child.data('roundabout'),
        out = [],
        rad = methods.degToRad.apply(null, [(360.0 - data.degrees) + info.bearing])
      callback = callback ||
                function () {}
      rad = methods.normalizeRad.apply(null, [rad])
      factors = info.shape(rad, info.focusBearingRadian, info.tilt)
      factors.scale = (factors.scale > 1) ? 1 : factors.scale
      factors.adjustedScale = (info.scale.min + (info.scale.diff * factors.scale)).toFixed(4)
      factors.width = (factors.adjustedScale * data.startWidth).toFixed(4)
      factors.height = (factors.adjustedScale * data.startHeight).toFixed(4)
      child.css({
        left: ((factors.x * info.midStage.width + info.nudge.width) - factors.width / 2.0).toFixed(0) + 'px',
        top: ((factors.y * info.midStage.height + info.nudge.height) - factors.height / 2.0).toFixed(0) + 'px',
        width: factors.width + 'px',
        height: factors.height + 'px',
        opacity: (info.opacity.min + (info.opacity.diff * factors.scale)).toFixed(2),
        zIndex: Math.round(info.zValues.min + (info.zValues.diff * factors.z)),
        fontSize: (factors.adjustedScale * data.startFontSize).toFixed(1) + 'px'
      })
      data.currentScale = factors.adjustedScale
      if (self.data('roundabout').debug) {
        out.push('<div style="font-weight: normal; font-size: 10px; padding: 2px; width: ' + child.css('width') + '; background-color: #FFC;">')
        out.push('<strong style="font-size: 12px; white-space: nowrap;">Child ' + childPos + '</strong><br />')
        out.push('<strong>left:</strong> ' + child.css('left') + '<br />')
        out.push('<strong>top:</strong> ' + child.css('top') + '<br />')
        out.push('<strong>width:</strong> ' + child.css('width') + '<br />')
        out.push('<strong>opacity:</strong> ' + child.css('opacity') + '<br />')
        out.push('<strong>height:</strong> ' + child.css('height') + '<br />')
        out.push('<strong>z-index:</strong> ' + child.css('z-index') + '<br />')
        out.push('<strong>font-size:</strong> ' + child.css('font-size') + '<br />')
        out.push('<strong>scale:</strong> ' + child.data('roundabout').currentScale)
        out.push('</div>')
        child.html(out.join(''))
      }
      child.trigger('reposition')
      callback.apply(self)
      return methods.isInFocus.apply(self, [data.degrees])
    },
    setBearing: function (bearing, callback) {
      callback = callback ||
                function () {}
      bearing = methods.normalize.apply(null, [bearing])
      this.each(function () {
        var diff, lowerValue, higherValue, self = $(this),
          data = self.data('roundabout'),
          oldBearing = data.bearing
        data.bearing = bearing
        self.trigger('bearingSet')
        methods.updateChildren.apply(self)
        diff = Math.abs(oldBearing - bearing)
        if (!data.animating || diff > 180) {
          return
        }
        diff = Math.abs(oldBearing - bearing)
        self.children(data.childSelector).each(function (i) {
          var eventType
          if (methods.isChildBackDegreesBetween.apply($(this), [bearing, oldBearing])) {
            eventType = (oldBearing > bearing) ? 'Clockwise' : 'Counterclockwise'
            $(this).trigger('move' + eventType + 'ThroughBack')
          }
        })
      })
      callback.apply(this)
      return this
    },
    adjustBearing: function (delta, callback) {
      callback = callback ||
                function () {}
      if (delta === 0) {
        return this
      }
      this.each(function () {
        methods.setBearing.apply($(this), [$(this).data('roundabout').bearing + delta])
      })
      callback.apply(this)
      return this
    },
    setTilt: function (tilt, callback) {
      callback = callback ||
                function () {}
      this.each(function () {
        $(this).data('roundabout').tilt = tilt
        methods.updateChildren.apply($(this))
      })
      callback.apply(this)
      return this
    },
    adjustTilt: function (delta, callback) {
      callback = callback ||
                function () {}
      this.each(function () {
        methods.setTilt.apply($(this), [$(this).data('roundabout').tilt + delta])
      })
      callback.apply(this)
      return this
    },
    animateToBearing: function (bearing, duration, easing, passedData, callback) {
      var now = (new Date()).getTime()
      callback = callback ||
                function () {}
      if ($.isFunction(passedData)) {
        callback = passedData
        passedData = null
      } else if ($.isFunction(easing)) {
        callback = easing
        easing = null
      } else if ($.isFunction(duration)) {
        callback = duration
        duration = null
      }
      this.each(function () {
        var timer, easingFn, newBearing, self = $(this),
          data = self.data('roundabout'),
          thisDuration = (!duration) ? data.duration : duration,
          thisEasingType = (easing) || data.easing || 'swing'
        if (!passedData) {
          passedData = {
            timerStart: now,
            start: data.bearing,
            totalTime: thisDuration
          }
        }
        timer = now - passedData.timerStart
        if (data.stopAnimation) {
          methods.allowAnimation.apply(self)
          data.animating = false
          return
        }
        if (timer < thisDuration) {
          if (!data.animating) {
            self.trigger('animationStart')
          }
          data.animating = true
          if (typeof $.easing.def === 'string') {
            easingFn = $.easing[thisEasingType] || $.easing[$.easing.def]
            newBearing = easingFn(null, timer, passedData.start, bearing - passedData.start, passedData.totalTime)
          } else {
            newBearing = $.easing[thisEasingType]((timer / passedData.totalTime), timer, passedData.start, bearing - passedData.start, passedData.totalTime)
          }
          if (methods.compareVersions.apply(null, [$().jquery, '1.7.2']) >= 0 && !($.easing['easeOutBack'])) {
            newBearing = passedData.start + ((bearing - passedData.start) * newBearing)
          }
          newBearing = methods.normalize.apply(null, [newBearing])
          data.dragBearing = newBearing
          methods.setBearing.apply(self, [newBearing,
            function () {
              setTimeout(function () {
                methods.animateToBearing.apply(self, [bearing, thisDuration, thisEasingType, passedData, callback])
              },
              0)
            }])
        } else {
          data.lastAnimationStep = true
          bearing = methods.normalize.apply(null, [bearing])
          methods.setBearing.apply(self, [bearing,
            function () {
              self.trigger('animationEnd')
            }])
          data.animating = false
          data.lastAnimationStep = false
          data.dragBearing = bearing
          callback.apply(self)
        }
      })
      return this
    },
    animateToNearbyChild: function (passedArgs, which) {
      var duration = passedArgs[0],
        easing = passedArgs[1],
        callback = passedArgs[2] ||
                    function () {}
      if ($.isFunction(easing)) {
        callback = easing
        easing = null
      } else if ($.isFunction(duration)) {
        callback = duration
        duration = null
      }
      return this.each(function () {
        var j, range, self = $(this),
          data = self.data('roundabout'),
          bearing = (!data.reflect) ? data.bearing % 360 : data.bearing,
          length = self.children(data.childSelector).length
        if (!data.animating) {
          if ((data.reflect && which === 'previous') || (!data.reflect && which === 'next')) {
            bearing = (Math.abs(bearing) < data.floatComparisonThreshold) ? 360 : bearing
            for (j = 0; j < length; j += 1) {
              range = {
                lower: (data.period * j),
                upper: (data.period * (j + 1))
              }
              range.upper = (j === length - 1) ? 360 : range.upper
              if (bearing <= Math.ceil(range.upper) && bearing >= Math.floor(range.lower)) {
                if (length === 2 && bearing === 360) {
                  methods.animateToDelta.apply(self, [ -180, duration, easing, callback])
                } else {
                  methods.animateBearingToFocus.apply(self, [range.lower, duration, easing, callback])
                }
                break
              }
            }
          } else {
            bearing = (Math.abs(bearing) < data.floatComparisonThreshold || 360 - Math.abs(bearing) < data.floatComparisonThreshold) ? 0 : bearing
            for (j = length - 1; j >= 0; j -= 1) {
              range = {
                lower: data.period * j,
                upper: data.period * (j + 1)
              }
              range.upper = (j === length - 1) ? 360 : range.upper
              if (bearing >= Math.floor(range.lower) && bearing < Math.ceil(range.upper)) {
                if (length === 2 && bearing === 360) {
                  methods.animateToDelta.apply(self, [180, duration, easing, callback])
                } else {
                  methods.animateBearingToFocus.apply(self, [range.upper, duration, easing, callback])
                }
                break
              }
            }
          }
        }
      })
    },
    animateToNearestChild: function (duration, easing, callback) {
      callback = callback ||
                function () {}
      if ($.isFunction(easing)) {
        callback = easing
        easing = null
      } else if ($.isFunction(duration)) {
        callback = duration
        duration = null
      }
      return this.each(function () {
        var nearest = methods.getNearestChild.apply($(this))
        methods.animateToChild.apply($(this), [nearest, duration, easing, callback])
      })
    },
    animateToChild: function (childPosition, duration, easing, callback) {
      callback = callback ||
                function () {}
      if ($.isFunction(easing)) {
        callback = easing
        easing = null
      } else if ($.isFunction(duration)) {
        callback = duration
        duration = null
      }
      return this.each(function () {
        var child, self = $(this),
          data = self.data('roundabout')
        if (data.childInFocus !== childPosition && !data.animating) {
          child = self.children(data.childSelector).eq(childPosition)
          methods.animateBearingToFocus.apply(self, [child.data('roundabout').degrees, duration, easing, callback])
        }
      })
    },
    animateToNextChild: function (duration, easing, callback) {
      return methods.animateToNearbyChild.apply(this, [arguments, 'next'])
    },
    animateToPreviousChild: function (duration, easing, callback) {
      return methods.animateToNearbyChild.apply(this, [arguments, 'previous'])
    },
    animateToDelta: function (degrees, duration, easing, callback) {
      callback = callback ||
                function () {}
      if ($.isFunction(easing)) {
        callback = easing
        easing = null
      } else if ($.isFunction(duration)) {
        callback = duration
        duration = null
      }
      return this.each(function () {
        var delta = $(this).data('roundabout').bearing + degrees
        methods.animateToBearing.apply($(this), [delta, duration, easing, callback])
      })
    },
    animateBearingToFocus: function (degrees, duration, easing, callback) {
      callback = callback ||
                function () {}
      if ($.isFunction(easing)) {
        callback = easing
        easing = null
      } else if ($.isFunction(duration)) {
        callback = duration
        duration = null
      }
      return this.each(function () {
        var delta = $(this).data('roundabout').bearing - degrees
        delta = (Math.abs(360 - delta) < Math.abs(delta)) ? 360 - delta : -delta
        delta = (delta > 180) ? -(360 - delta) : delta
        if (delta !== 0) {
          methods.animateToDelta.apply($(this), [delta, duration, easing, callback])
        }
      })
    },
    stopAnimation: function () {
      return this.each(function () {
        $(this).data('roundabout').stopAnimation = true
      })
    },
    allowAnimation: function () {
      return this.each(function () {
        $(this).data('roundabout').stopAnimation = false
      })
    },
    startAutoplay: function (callback) {
      return this.each(function () {
        var self = $(this),
          data = self.data('roundabout')
        callback = callback || data.autoplayCallback ||
                    function () {}
        clearInterval(data.autoplayInterval)
        data.autoplayInterval = setInterval(function () {
          methods.animateToNextChild.apply(self, [callback])
        },
        data.autoplayDuration)
        data.autoplayIsRunning = true
        self.trigger('autoplayStart')
      })
    },
    stopAutoplay: function (keepAutoplayBindings) {
      return this.each(function () {
        clearInterval($(this).data('roundabout').autoplayInterval)
        $(this).data('roundabout').autoplayInterval = null
        $(this).data('roundabout').autoplayIsRunning = false
        if (!keepAutoplayBindings) {
          $(this).unbind('.autoplay')
        }
        $(this).trigger('autoplayStop')
      })
    },
    toggleAutoplay: function (callback) {
      return this.each(function () {
        var self = $(this),
          data = self.data('roundabout')
        callback = callback || data.autoplayCallback ||
                    function () {}
        if (!methods.isAutoplaying.apply($(this))) {
          methods.startAutoplay.apply($(this), [callback])
        } else {
          methods.stopAutoplay.apply($(this), [callback])
        }
      })
    },
    isAutoplaying: function () {
      return (this.data('roundabout').autoplayIsRunning)
    },
    changeAutoplayDuration: function (duration) {
      return this.each(function () {
        var self = $(this),
          data = self.data('roundabout')
        data.autoplayDuration = duration
        if (methods.isAutoplaying.apply(self)) {
          methods.stopAutoplay.apply(self)
          setTimeout(function () {
            methods.startAutoplay.apply(self)
          },
          10)
        }
      })
    },
    normalize: function (degrees) {
      var inRange = degrees % 360.0
      return (inRange < 0) ? 360 + inRange : inRange
    },
    normalizeRad: function (radians) {
      while (radians < 0) {
        radians += (Math.PI * 2)
      }
      while (radians > (Math.PI * 2)) {
        radians -= (Math.PI * 2)
      }
      return radians
    },
    isChildBackDegreesBetween: function (value1, value2) {
      var backDegrees = $(this).data('roundabout').backDegrees
      if (value1 > value2) {
        return (backDegrees >= value2 && backDegrees < value1)
      } else {
        return (backDegrees < value2 && backDegrees >= value1)
      }
    },
    getAnimateToMethod: function (effect) {
      effect = effect.toLowerCase()
      if (effect === 'next') {
        return 'animateToNextChild'
      } else if (effect === 'previous') {
        return 'animateToPreviousChild'
      }
      return 'animateToNearestChild'
    },
    relayoutChildren: function () {
      return this.each(function () {
        var self = $(this),
          settings = $.extend({},
            self.data('roundabout'))
        settings.startingChild = self.data('roundabout').childInFocus
        methods.init.apply(self, [settings, null, true])
      })
    },
    getNearestChild: function () {
      var self = $(this),
        data = self.data('roundabout'),
        length = self.children(data.childSelector).length
      if (!data.reflect) {
        return ((length) - (Math.round(data.bearing / data.period) % length)) % length
      } else {
        return (Math.round(data.bearing / data.period) % length)
      }
    },
    degToRad: function (degrees) {
      return methods.normalize.apply(null, [degrees]) * Math.PI / 180.0
    },
    getPlacement: function (child) {
      var data = this.data('roundabout')
      return (!data.reflect) ? 360.0 - (data.period * child) : data.period * child
    },
    isInFocus: function (degrees) {
      var diff, self = this,
        data = self.data('roundabout'),
        bearing = methods.normalize.apply(null, [data.bearing])
      degrees = methods.normalize.apply(null, [degrees])
      diff = Math.abs(bearing - degrees)
      return (diff <= data.floatComparisonThreshold || diff >= 360 - data.floatComparisonThreshold)
    },
    getChildInFocus: function () {
      var data = $(this).data('roundabout')
      return (data.childInFocus > -1) ? data.childInFocus : false
    },
    compareVersions: function (baseVersion, compareVersion) {
      var i, base = baseVersion.split(/\./i),
        compare = compareVersion.split(/\./i),
        maxVersionSegmentLength = (base.length > compare.length) ? base.length : compare.length
      for (i = 0; i <= maxVersionSegmentLength; i++) {
        if (base[i] && !compare[i] && parseInt(base[i], 10) !== 0) {
          return 1
        } else if (compare[i] && !base[i] && parseInt(compare[i], 10) !== 0) {
          return -1
        } else if (base[i] === compare[i]) {
          continue
        }
        if (base[i] && compare[i]) {
          if (parseInt(base[i], 10) > parseInt(compare[i], 10)) {
            return 1
          } else {
            return -1
          }
        }
      }
      return 0
    }
  }
  $.fn.roundabout = function (method) {
    if (methods[method]) {
      return methods[method].apply(this, Array.prototype.slice.call(arguments, 1))
    } else if (typeof method === 'object' || $.isFunction(method) || !method) {
      return methods.init.apply(this, arguments)
    } else {
      $.error('Method ' + method + ' does not exist for jQuery.roundabout.')
    }
  }
})(jQuery)
