<!DOCTYPE html><head><meta http-equiv="Content-Type"
                           content="text/html; charset=utf-8"/><meta id="ctl00_metaKeywords"
                                                                     content="小说,小说网,言情小说,青春小说,玄幻小说,武侠小说,都市小说,历史小说,网络小说,原创网络文学"
                                                                     name="keywords"><meta id="ctl00_metaDescription"           content="小说
阅读,精彩小说尽在腾讯文学。云起小说提供玄幻小说,武侠小说,原创小说,网游小说,都市小说,言情小说,青春小说,历史小说,军事小说,网游小说,
科幻小说,恐怖小说,首发小说最新章节免费小说阅读,精彩尽在云起小说！ver:022122热门小说:莽荒纪,绝世唐门,天骄无双,胜者为王,醉枕
江山。"           name="description"><!-- 360安全游览器使用webkit极速核 --><meta
            name="renderer" content="webkit"/><meta name="description" content="神医
少奶奶又洗白了独家首发最新章节由chuangshi.qq.com云起书院提供,并提供txt小说下载,云起书院最新小说速度第一."/><met
            a name="keywords" content="神医少奶奶又洗白了最新章节_神医少奶奶又洗白了txt下载_神医少奶奶又洗白了无弹框_神
医少奶奶又洗白了独家首发_云起书院"/><!-- IE使用它支持的最高模式 --><meta http-equiv="X-UA-
Compatible" content="IE=edge" /><meta name="baidu-site-verification"
                                      content="3R33MUNLCM" /><title>神医少奶奶又洗白了最新章节_神医少奶奶又洗白了txt下载_神医少奶奶又洗白了无弹
        框_神医少奶奶又洗白了独家首发_云起书院</title><link
            href="http://img1.chuangshi.qq.com/yunqi/p1/ico/bookqq.ico"
            type="image/x-icon" rel="shortcut icon"><link
            href="http://img1.chuangshi.qq.com/yunqi/p1/ico/bookqq.ico"
            type="image/x-icon" rel="Bookmark"><link rel="stylesheet"
                                                     type="text/css" href="static/css/base.css" /><script
            type="text/javascript" src="static/js/base.js"></script><!-- prevent
dom xss --><script type="text/javascript"
                   src="static/js/aq_common.js"></script><script type="text/javascript">
        var userLang = "zhs",             webSite = "yunqi";

        var addToBookshelfAjaxUrl = "/public/addToBookshelf.html",
            setAutoBuyAjaxUrl = "/booktake/setAutoBuy.html";

        var getLoginStatusAjaxUrl =
                "http://book.qq.com/ywlogin/getStatus.html",
            sendYWLoginStatusAjaxUrl =
                "http://book.qq.com/ywlogin/logined.html",
            logoutYWSsoAjaxUrl = "http://yunqi.qq.com/public/logout.html",
            checkTokenAjaxUrl = "/api/checkTokenYw.html";

        $(function () {             //未登录时，更新登录状态
            CS.ssoLogin.init(getLoginStatusAjaxUrl,sendYWLoginStatusAjaxUrl,
                logoutYWSsoAjaxUrl, checkTokenAjaxUrl, webSite);
            CS.ssoLogin.getLoginStatus();

            //书架             CS.bookshelf.init(addToBookshelfAjaxUrl,
            setAutoBuyAjaxUrl);

        //页面特定链接/按钮点击分析
        $.getScript("http://pingjs.qq.com/tcss.ping.js");         });
    </script></head><body><link rel="stylesheet" type="text/css"
                                href="static/css/bookmain.css" /><!-- 顶部导航 --><div id="topNav"
                                                                                   class="topNav"></div><!-- 顶部导航的模板 --><textarea id="topNavBarTpl"
                                                                                                                                  style="display:none;"><div class="pageCenter"><!--顶部左边区块--><div
                class="topLeft cf"><ul><li class="navNormal authority"><span><a
                                class="topLink" href="http://book.qq.com"
                                target="_blank">QQ阅读</a><b></b></span><div class="topSubList
client"><a class="bookIntnet" href="http://www.qq.com" target="_blank"
           onclick="pgvSendClick({hottag:'ISD.SHOW.INDEX.LINK02'});">腾讯网首页</a><a
                                class="bookIntnet" href="https://yuedu.reader.qq.com/common/common/dow
n/dist/index.html?actid=11822" target="_blank">客户端下载</a><!-- <a
class="bookIos" href="http://book.qq.com/act/reader/index.html"
target="_blank">IOS下载</a><a class="bookAndroid"
href="http://book.qq.com/act/reader/index.html"
target="_blank">安卓端下载</a> --></div></li></ul></div><!--登录前后容器--><div
                class="loginBox"><%if isLogin%><div class="login_after"><span
                        class="navline">|</span><a class="exit" attr="click:ywlogout;"
                                                   href="javascript:;">退出</a><a class="userName" href="http://account.boo
k.qq.com/usercenter/index.html">欢迎您，<%=userInfo.Nickname ?
userInfo.Nickname : ''%></a></div><%else%><div
class="login_before"><span class="navline">|</span><!-- <a class="reg"
target="_blank" href="http://zc.qq.com/chs/index.html?from=pt">注册</a>
--><a class="login" attr="click:openLoginPopup;"
href="javascript:;">登录/注册</a></div><%/if%></div><!--顶部右边区块--><div
class="topRight"><%if isLogin%><a class="myreader" href="http://accoun
t.book.qq.com/userfavorite/index.html">我的书架<b></b></a><%else%><a
class="myreader" href="javascript:;">最近阅读<b></b></a><%/if%><a
class="user_center"
href="http://account.book.qq.com">个人中心<b></b></a><a
class="author_Zone"
href="https://write.qq.com/?siteid=4">作家专区</a><span
class="navline">|</span><a class="pay"
href="http://account.book.qq.com/public/recharge.html"
target="_blank">充值</a><!-- 我的书架的下拉列表 --><div class="bookrack"><%if
isLogin%><p><span class="ccc">书架藏书：<%=userInfo.collectBookNum ?
userInfo.collectBookNum : 0%>本</span></p><div class="nav_hover_list
cf"><a href="http://account.book.qq.com/userfavorite/index.html?booksh
elf_show=2">最近阅读</a><%if userInfo.bookshelfList &&
userInfo.bookshelfList.length%><%each userInfo.bookshelfList as
bookshelf i%><a class="a_nobg" href="http://account.book.qq.com/userfa
vorite/index.html?Favoriteid=<%=bookshelf.groupId%>"><%=bookshelf.grou
pName%></a><%/each%><%/if%></div><%else%><!-- 最近阅读列表 --><div
class="nav_hover_list cf"><%if userInfo.recentReadList &&
userInfo.recentReadList.length%><%each userInfo.recentReadList as book
i%><a class="a_nobg" href="<%=book.bookUrl%>"><%=book.bookName%></a><%
/each%><%/if%></div><%if !userInfo.recentReadList ||
userInfo.recentReadList.length ===
0%><p>最近没有阅读书</p><%/if%><%/if%></div><!-- 个人中心的下拉列表 --><div
class="user_menu"><div class="nav_hover_list cf"><a
href="http://account.book.qq.com/userfavorite/index.html">我的书架</a><a
href="http://account.book.qq.com/usercenter/index.html">账户设置</a><a
class="a_nobg"
href="http://account.book.qq.com/usermoney/index.html">账务中心 </a><a
class="a_nobg"
href="https://write.qq.com/?siteid=4">作家专区</a></div></div><!--
个人短信数量--><div id="pointy_msg"></div></div></div></textarea><script
type="text/javascript">    var getUserInfoAjaxUrl =
"/public/showhead.html"; //获取用户信息     var searchUrl =
"/search/searchindex/type/p1/wd/p2.html";

    $(function () {         //顶部导航条
CS.topNav.init(getUserInfoAjaxUrl);         //各页面通用
CS.common.init();         //初始化搜索框
CS.searchInput.init(searchUrl, 'p_navtit_hover');     });
</script><div class="wrap"><div class="pageCenter"><div
class="mainnav"><a class="red2" href="http://yunqi.qq.com">首页</a><a
href="/bk">书库</a><a href="/search/index.html">搜书</a><a
href="/ranklist/index.html">排行榜</a><a class="dotted"
href="http://yunqi.qq.com/bk/nxhyq">玄幻仙侠</a><a
href="http://yunqi.qq.com/bk/ngdyq">古代言情</a><a
href="http://yunqi.qq.com/bk/nxdyq">现代言情</a><a
href="http://yunqi.qq.com/bk/nlmqc">浪漫青春</a><!--<a class="dotted"
href="http://yunqi.qq.com/bk/xxqy">仙侠奇缘</a>--><a  class="dotted"
href="http://yunqi.qq.com/bk/nkhly">悬疑</a><a
href="http://yunqi.qq.com/bk/nkhly">科幻空间</a><a
href="http://yunqi.qq.com/bk/yxjj">游戏竞技</a><a class="dotted red2"
href="http://yunqi.qq.com/help/zzfl.html">作家福利</a><a
href="http://yunqi.qq.com/help/zzqk.html">写作指引</a><a class="dotted"
href="http://yunqi.qq.com/help/index.html">帮助</a></div><div
class="topbanner"><a href="http://chuangshi.qq.com/news/75383131.html"
target="_blank" class=""><img
src="static/picture/1f31677ffa7c47e2967fa82924da177f.gif" class=""
alt="" title="" height="90" width="1002"></a></div></div><div
class="mainbox"><!--书名及搜索--><div class="main1"><div class="title"><i
class="grey"><img class="qqredaer_tit" src="static/picture/qqread.png"
title="神医少奶奶又洗白了" width="25"                  height="25"/></i><a
href="http://yunqi.qq.com/bk/xdyq/25857070.html"            title="神医少
奶奶又洗白了官网"><b>&nbsp;神医少奶奶又洗白了</b></a><i>已完结</i><!--<span>|</span>--><!-
-<i>--><!----><!--<a href="/bookreader/all/25857070/1.html"
title="神医少奶奶又洗白了全文阅读">全文阅读</a>--><!----><!--</i>--></div><div
class="tag"><div class="y"><a href="javascript:void(0)"
title="神医少奶奶又洗白了">签约作品</a></div><div class="y"><a
href="javascript:void(0)" title="神医少奶奶又洗白了">付费作品</a></div></div><div
class="auther">        书号：25857070</div><div class="tablist"><ul><li
class="this" ><a
href="http://yunqi.qq.com/bk/xdyq/25857070.html">介绍</a></li><li  ><a
href="http://yunqi.qq.com/bk/xdyq/AGoEMV1oVjIAPVRkATYBZA-l.html"
class="active">目录</a></li><li class="midline">|</li><li><a
target='_blank' href="http://account.book.qq.com/bk/author/ADZQOAdrWWt
cMQtoV2FTZgA%25252FWzg%25253D" class="active">作者</a></li><li
class="midline">|</li><li  ><a
href="http://yunqi.qq.com/bk/xdyq/25857070-f.html"
class="active">粉丝</a></li><li class="midline">|</li></ul></div><div
class="searchbox"><div class="inp"><span id="searchType" type="all"
class="search_tit" style="margin:2px 0 0 2px;">全部</span><input
id="searchInput" class="searchinput" type="text" maxlength="20" style
="margin-top:4px;" /><!--搜索下拉小菜单--><div id="searchTypeDropdown"
class="index_sub_serach" style="top:32px;left:2px;"><a
href="javascript:" type="all">全部</a><a href="javascript:"
type="chuangshi">创世</a><a href="javascript:" type="yunqi">云起</a><a
href="javascript:" type="dushu">图书</a></div></div><div class="btn"><a
id="searchBtn" class="search_btn" href="javascript:">搜
索</a></div></div></div><!--书名及搜索end--><!--作品简介和作者--><div
class="main2"><div class="left"><div class="cover"><!-- 限时免费的提示
--><cite id="discountTag" style="display:none;"></cite><em
id="discountTime" style="display:none;"></em><a
href="http://yunqi.qq.com/bk/xdyq/AGoEMV1oVjIAPVRkATYBZA-l.html"
class="bookcover"><img src="static/picture/t5_25857070.jpg"
width="204" height="255" alt="神医少奶奶又洗白了"></a></div><div
class="button1"><table width="216" height="100" border="0"><tr><td><a
href="javascript:;" class="but01"
id="addtobookshelf">加入书架</a></td><td><a id="readNow"
href="http://yunqi.qq.com/bk/xdyq/AGoEMV1oVjIAPVRkATYBZA-l.html"
alt=",最新章节,目录" class="but02">立即阅读</a></td></tr><tr><td><a
id="openRewardPopupBtn" href="javascript:;" class="but03
btnDashang">打赏作者</a></td><td><a id="openRecommendPopupBtn"
href="javascript:;" class="but04
btnTuijian">投推荐票</a></td></tr></table></div><div class="title"><a
href="http://yunqi.qq.com">首页</a>&gt;         <a
href="http://yunqi.qq.com/bk/xdyq/">现代言情</a>&gt;         <a
href="http://yunqi.qq.com/bk/xdyq/xx30028/">豪门世家</a>&gt;
<strong><a href="http://yunqi.qq.com/bk/xdyq/AGoEMV1oVjIAPVRkATYBZA-l.
html">神医少奶奶又洗白了</a></strong><a class="quickLink"
href="/public/downShortcut/bid/25857070.html">保存快捷方式</a></div><div
class="num"></div><div class="info"><p class="f900">【【2019云起华语文学征文大赛】参
赛作品】</p><p>作为第一杀手，雪云蓁穿书了，成了恶毒女。</p><p>看着已经被前身打断腿的男主，想到书中被男主杀死的结局，她欲哭无泪
。</p><p>为了任务，她一个杀手使出浑身解数攻略男主。</p><p>可是谁知攻略过头了，男主黑化了，“蓁蓁，招惹了我，还想全身而退，嗯？
”</p><p>他是权势滔天，芝兰玉树的帝少容魅夜，后来他的偏执他的占有欲也是为她。</p><p>“蓁蓁还要什么，心都给你，命都给你，好不好
？”</p><p>“我……我只想回家！”</p><p>“蓁蓁，除非我死，否则你是不能离开我的！”</p><p>说好的协议结婚，约法三章的是他
，可是入夜，是谁温柔又凶狠的宠她？</p></div><div class="tags">      作品标签：
爽文、总裁、专情、女强、豪门</div><!--植树节活动 奇迹树 弹框 start--><div class="arborDay"
id="noveltreedetail" style="display:none;"></div><!-- 奇迹树 弹框 end
--></div><div class="right"><div class="autherinfo"><a href="http://ac
count.book.qq.com/bk/author/ADZQOAdrWWtcMQtoV2FTZgA%25252FWzg%25253D"
class="head"><img src="static/picture/default-avatar.png" width="48"
height="48"></a><div class="au_name"><p id='textauthor'>作者：</p><p><a
href="http://account.book.qq.com/bk/author/ADZQOAdrWWtcMQtoV2FTZgA%252
52FWzg%25253D">凤元糖果</a></p></div><div class="shortintro"><p>希望书友们相互转告，
帮忙广告，你们的支持就是我的力量！求点击、求推荐、求书评，各种求！</p></div></div><!-- 奇迹树小图 start
--><div class="treeLink" id="novelTreemin"><a href="javascript:"
class="treebox level1" title="培养奇迹树"></a></div><!-- 奇迹树小图 end
--></div></div><!-- 最新章节、作品信息、隆重推荐、作者其他作品 --><div class="main3"><div
class="middle"><!-- 页签 --><div id="newChapterTabBox" class="tab"><!--
tms id 533 特殊标记 xiexinzhong--><h1 class="tab2left choice"
style="width: 222px;"><a id="newChapterTab" listid="newChapterList"
href="javascript:" title="神医少奶奶又洗白了最新章节">最新章节</a></h1><!-- tms id 533
特殊标记 xiexinzhong--><div class="tabnext"><!--一键加群 chenjie--><!--一键加群
chenjie--></div><!-- 分享按钮 --><div id="bdshare" class="bdshare_b"
style="float:none; position:absolute; top:7px; right:2px;"><img
width="135" height="24" src="static/picture/type-
button-1.jpg"/></div></div><!-- 最新章节 --><div id="newChapterList"
class="swishlist"><div class="chaptername"><b><a
href="http://yunqi.qq.com/bk/xdyq/AGoEMV1oVjIAPVRkATYBZA-r-586.html" c
lass="green">番外完结</a></b><span>&nbsp;&nbsp;VIP&nbsp;&nbsp;</span>(更新时间
：2019-12-15 15:54:31)         </div><div class="chapternev"><a
href="http://yunqi.qq.com/bk/xdyq/AGoEMV1oVjIAPVRkATYBZA-r-586.html" r
el="nofollow"><p>容吟眼中的光芒那么的璀璨明亮。</p><p>因为这样的目光，容吟整个人身上都仿佛多了动人的神彩。</p><
p>看着这样的容吟，苏陌初眼睛也是跟着一亮。</p><p>其实容吟自己都没注意到，她身上的气息很容易感染到旁人的。</p><p>其实来到这个
世界，每次看到苏陌初，想到苏陌初，容吟整个人都仿佛充满着无限的力量。</p><p>……</p><p>六年后</p><p>苏陌初如同历史上的那
样，三元及第，成为最年轻的状元。</p><p>十八岁的苏陌初，俊美又尊贵，而且才华横溢，前途无量。</p><p>这时候的容吟也是十四岁了。<
/p></a></div><div class="btnlist"><a
href="http://yunqi.qq.com/bk/xdyq/AGoEMV1oVjIAPVRkATYBZA-r-586.html"
alt="神医少奶奶又洗白了最新章节" class="read">阅读此章节</a><a
href="http://yunqi.qq.com/bk/xdyq/AGoEMV1oVjIAPVRkATYBZA-l.html"
class="index" alt="神医少奶奶又洗白了,神医少奶奶又洗白了最新章节,目录">目录</a></div></div><!--
作品信息 --><div id="novelInfo" class="swishlist"
style="display:none"></div></div><div class="right"><div
id="authorBookBox" class="authorRec"><div class="otherbook"><div
id="authorBookTabList" class="tab"><h1 class="tableft choice"
style="width: 203px;"><a href="javascript:">作者其他作品</a></h1></div><div
class="otherList" id="theAuthorBest"><ul><li><a
href="http://yunqi.qq.com/bk/xdyq/18805211.html"
class="green">帝国君少又黑化了</a></li><li><a
href="http://yunqi.qq.com/bk/xdyq/22523064.html"
class="green">少奶奶超甜超强的</a></li><li><a
href="http://yunqi.qq.com/bk/xdyq/27512049.html"
class="green">豪门权少又黑化了</a></li><li><a
href="http://yunqi.qq.com/bk/xdyq/1000875951.html" class="green">豪门第一少
奶奶</a></li></ul></div></div></div></div></div><script
type="text/javascript">    $(function () {         // 切换最新章节、作品信息的页签
$('#newChapterTab, #novelInfoTab').on('click', function () {
var $this = $(this);

            $('#newChapterTabBox h1').removeClass('choice');
$this.parent().addClass('choice');

            $('#newChapterList, #novelInfo').hide();             $('#'
+ $this.attr('listid')).show();         });     }); </script><!-- 分享按钮
--><script type="text/javascript" id="bdshare_js"
data="type=button&amp;mini=1&amp;uid=6730035"></script><script
type="text/javascript" id="bdshell_js"></script><script
type="text/javascript">    document.getElementById("bdshell_js").src =
"http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" +
Math.ceil(new Date() / 3600000); </script><!-- 互动中心
--></div></div><div class="footer"><div class="footer_main
cf"><span>阅文旗下</span><div id="friendlink" class="link_a"><a
href="https://www.qidian.com/" target="_blank">起点中文网</a>&nbsp;  <a
href="https://www.qdmm.com/" target="_blank">起点女生网</a>&nbsp;  <a
href="http://chuangshi.qq.com/" target="_blank">创世中文网</a>&nbsp;   <a
href="http://yunqi.qq.com/" target="_blank">云起书院</a>&nbsp;  <a
href="https://www.hongxiu.com/" target="_blank">红袖添香</a>&nbsp;  <a
href="https://www.readnovel.com/" target="_blank">小说阅读网</a>&nbsp;   <a
href="https://www.xs8.cn/" target="_blank">言情小说吧</a>&nbsp;  <a
href="http://www.xxsy.net/" target="_blank">潇湘书院</a>&nbsp;  <a
href="http://www.tingbook.com/" target="_blank">天方听书网</a>&nbsp;   <a
href="http://www.lrts.me/" target="_blank">懒人听书</a>&nbsp;   <a
href="http://yuedu.yuewen.com/" target="_blank">阅文悦读</a>&nbsp;  <a
href="https://www.yuewen.com/app.html#appqq"
target="_blank">QQ阅读</a>&nbsp;   <a
href="https://www.yuewen.com/app.html#appqd"
target="_blank">起点读书</a>&nbsp;   <a
href="https://www.yuewen.com/app.html#appzj"
target="_blank">作家助手</a>&nbsp;   <a href="https://www.webnovel.com/"
target="_blank">起点国际版</a>&nbsp;     </div><div class="user
clearfix"><dl class="cooperate_dl"><dt></dt><dd><p>外部渠道联系：张小姐 <a href=
"mailto:zhanglin@yuewen.com">zhanglin@yuewen.com</a></p><p>腾讯内部联系：卢小姐
<a href="mailto:luxiaoyun@yuewen.com">luxiaoyun@yuewen.com</a></p></dd
></dl></div><div class="foot"><p><a href="http://www.tencent.com/"
target="_blank" rel="nofollow">关于腾讯</a><a
href="http://www.tencent.com/index_e.shtml" target="_blank"
rel="nofollow">About Tencent</a><a
href="http://www.qq.com/contract.shtml" target="_blank"
rel="nofollow">服务协议</a><a href="http://open.qq.com/" target="_blank"
rel="nofollow">开放平台</a><a href="http://www.tencentmind.com/"
target="_blank" rel="nofollow">广告服务</a><a
href="http://hr.tencent.com/" target="_blank"
rel="nofollow">腾讯招聘</a><a href="http://gongyi.qq.com/" target="_blank"
rel="nofollow">腾讯公益</a><a href="https://www.yuewen.com/service.html"
target="_blank" rel="nofollow">客服中心</a><a class="nobroder"
href="http://www.qq.com/map/" target="_blank"
rel="nofollow">网站导航</a></p><p> Copyright&nbsp;&nbsp;&copy;&nbsp;1998&n
bsp;-&nbsp;2020&nbsp;Tencent.&nbsp;All&nbsp;Rights&nbsp;Reserved</p><p
>腾讯公司&nbsp;版权所有</p><p>粤府新函[2001]87号 粤网文[2011]0483-070号 网络视听许可证1904073号
网站备案/许可证号：<a style="border-right: 0 solid #CCC;"
href="http://beian.miit.gov.cn/publish/query/indexFirst.action"
rel="noreferrer" target="_blank">粤B2-20090059
B2-20090028</a></p></div><div id="icp"><a
href="http://www.cyberpolice.cn/wfjb/" target="_blank" rel="external
nofollow"><img src="static/picture/footer_img1.png" width="122"
height="52"></a><a href="http://www.cyberpolice.cn/wfjb/"
target="_blank" rel="external nofollow"><img
src="static/picture/footer_img2.png" width="122" height="52"></a><a
href="http://beian.miit.gov.cn/state/outPortal/loginPortal.action"
target="_blank" rel="external nofollow"><img
src="static/picture/footer_img3.png" width="122" height="52"></a><a
href="http://www.12377.cn/" target="_blank" rel="external
nofollow"><img src="static/picture/footer_img4.png" width="122"
height="52"></a><a href="http://www.wenming.cn/" target="_blank"
rel="external nofollow"><img src="static/picture/footer_img5.png"
width="122" height="52"></a><a href="http://www.shjbzx.cn/"
target="_blank" rel="external nofollow"><img
src="static/picture/footer_img6.png" width="122"
height="52"></a></div></div></div><a id="goTopBtn" class="go_top"
href="javascript:"></a><script type="text/javascript"> $(function(){
var requestStatLogUrl =
"http://account.book.qq.com/statlog/index.html",
requestStatLogData = {                 'site' : "yq",
'url' : "ACtVNAJqBnhQawNzBSpUaVIyAG1WZVRkUj8HNFU1XiJRPVUiBWtXag",
'bid' : '25857070',                 'uuid' : '0',
'encrypt' : 1,             };

		// var refreshKeyUrl =
		// "http://book.qq.com/ywlogin/refreshkey.html";

		function _requestStatLog(){     var params = [], url = '';

            $.each(requestStatLogData, function(name, val){
params.push(name +'='+ encodeURIComponent(val));             });
url = requestStatLogUrl +'?'+ params.join('&');

            if(document.referrer){                 url += '&ref='+
encodeURIComponent(document.referrer);             }

            new Image().src = url;         }

		// function _refreshKey(){     new Image().src =
		// refreshKeyUrl; }

		_requestStatLog(); // setInterval(_refreshKey, 1800000);
		//每30分钟刷新一次key

                    //public
$.getScript("http://tajs.qq.com/stats?sId=34321758");
//yunqi.qq.com
$.getScript("http://tajs.qq.com/stats?sId=34321509", function() {
//点击流
$.getScript("http://pingjs.qq.com/ping_tcss_ied.js", function() {
if (typeof(pgvMain) === 'function') {
pgvMain();                     }                 });             });
}); </script><!-- 好原创活动的投票浮层 --><div id="goodOriginalVotePopup"
class="iframeWrap" style="display:none; background:#FFF;"><a
class="closeBtn" href="javascript:;" title="关闭"></a><iframe src=""
width="584" height="619" scrolling="no"
frameborder="0"></iframe></div><script type="text/javascript"
src="static/js/novel_index.js"></script><script
type="text/javascript">    var bid = "25857070";     var isEpubNovel =
0;

    // 简介     var getPersonalAjaxUrl = "/novel/getPersonal.html";
//互动中心     var interactionCenterTabIndex = "0",         isVipNovel =
1,         getInteractionCenterAjaxUrl = "/novel/interactCenter.html",
submitSurveyAjaxUrl = "/novel/surveyvote.html",
getSurveyResultAjaxUrl = "/novel/surveyresult.html";

    //书评列表     var novel_pic = "//wfqqreader-1252317822.image.myqcloud
.com/cover/70/25857070/t5_25857070.jpg",         verifyImgUrl =
"/novel/verify.html",         faceImgPath =
"http://img1.chuangshi.qq.com/yunqi/p1", //书评表情组件使用
getCommentListAjaxUrl = "/novelcomment/index.html",         up_ajaxUrl
= "/novelcomment/up.html",         applyHelper_ajaxUrl =
"/novelcomment/applyHelper.html",         submitComment_ajaxUrl =
"/novelcomment/addComment.html";

    //读者互动组件的必填参数     var readerInteractParams = {
'bookName': "神医少奶奶又洗白了",           'bid': bid,
'getInteractonContent_ajaxUrl': "/novel/getInteractonTabContent.html",
'submitReward_ajaxUrl': "/novel/dashang.html",
'submitRecommend_ajaxUrl': "/novel/recommend.html",
'submitMonthTicket_ajaxUrl': "/novel/Monthly.html",
'is_reward': "1",         },         //读者互动组件的可选配置
readerInteractOptions = {             'showMonthTicket': isVipNovel,
//是否显示投月票页签 1:开启 0：关闭.             'showRecommend': 1 //是否显示推荐票页签
(1:开启 0：关闭)         };

    //奇迹树     var getTreeAjaxUrl = "/tree/getnoveltree.html",
checkUserFeedToolAjaxUrl = "/tree/checkUserFeed.html",
feedTreeAjaxUrl = "/tree/useFeed.html";

    //好原创活动     var authorId =
"ADZQOAdrWWtcMQtoV2FTZgA%25252FWzg%25253D",         getVoteNumAjaxUrl
= "https://pages.book.qq.com/jinjianpan/votenumweb.html",
votePopupUrl = "https://pages.book.qq.com/jinjianpan/voteshoweb.html";

    $(function () {         //互动中心初始化
CS.page.interactionCenter.init(bid, isVipNovel,
interactionCenterTabIndex, getInteractionCenterAjaxUrl,
submitSurveyAjaxUrl, getSurveyResultAjaxUrl);         //读者互动
CS.readerInteract.init(readerInteractParams, readerInteractOptions);
//书评列表         CS.page.intro.comment.init(bid, novel_pic,
verifyImgUrl, faceImgPath, getCommentListAjaxUrl, up_ajaxUrl,
applyHelper_ajaxUrl, submitComment_ajaxUrl);         //书介绍页
CS.page.intro.main.init(bid, isEpubNovel, getPersonalAjaxUrl);
//奇迹树         CS.page.intro.tree.init(bid, getTreeAjaxUrl,
feedTreeAjaxUrl, checkUserFeedToolAjaxUrl);         //好原创活动
CS.activity.goodOriginal.init(bid, authorId, getVoteNumAjaxUrl,
votePopupUrl);     }); </script></body></html>
