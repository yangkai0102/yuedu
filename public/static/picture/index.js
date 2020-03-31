$(function () {
  var _util = CS.util, // 通用工具
    _dialog = CS.dialog, // 对话框
    _ajax = CS.ajax // ajax请求

  // 首页轮播
  var swiper = new Swiper('.swiper-container', {
    centeredSlides: true,
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    }
  })

  // 智能课堂
  var swiper2 = new Swiper('.classroom-list', {
    centeredSlides: true,
    loop: true,
    pagination: {
      el: '.classroom-pagination',
      clickable: true,
      type: 'fraction'
    },
    navigation: {
      nextEl: '.icon-class-right',
      prevEl: '.icon-class-left'
    },
    on: {
      slideChangeTransitionEnd: function () {
      }
    }
  })

  // 金牌编辑团队
  $('#carousel').carousel({
    hAlign: 'center',
    vAlign: 'center',
    hMargin: 0.7,
    vMargin: 3,
    frontWidth: 76,
    frontHeight: 76,
    carouselWidth: 76,
    carouselHeight: 76,
    directionNav: false,
    buttonNav: '',
    autoplay: true,
    autoplayInterval: 2000,
    pauseOnHover: true,
    shadow: false,
    description: true,
    descriptionContainer: '.description'
  })
  $('#carousel').css('visibility', 'visible')

  // 智能课堂
  var $lastIntelligentGroup = $('#intelligentList').find('ul:last')
  // 最后一组的条目不满2个，补1个空li撑场面
  if ($lastIntelligentGroup.find('li').length < 2) {
    $lastIntelligentGroup.append('<li></li>')
  }

  // 站点3D轮播
  function roundaboutSite3d () {
    var siteSlide = $('#j-siteSlide')
    siteSlide.roundabout({
      shape: 'lazySusan',
      tilt: 0,
      bearing: 0.0,
      autoplay: true,
      autoplayDuration: 3000,
      autoplayPauseOnHover: true,
      responsive: true,
      minScale: 0.7,
      maxScale: 1,
      margin: 1.2,
      clickToFocusCallback: function () {
        switchTab()
      },
      autoplayCallback: function () {
        switchTab()
      }
    })

    $('#j-siteWrap').css('visibility', 'visible')

    function switchTab () {
      var current = siteSlide.find('li.roundabout-in-focus')
      var textWrap = $('#j-infoText').find('dd').hide()
      $(textWrap).eq($(current).index()).show()
    }
  }

  roundaboutSite3d()
})
