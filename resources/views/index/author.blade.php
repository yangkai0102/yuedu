<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="all">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="description" content="作家专区是阅文集团致力于原创作家孵化、培育、创作、挖掘的网络文学平台，作家可以通过作家学院在线课程的学习，使用作家专区及作家助手移动端APP发布与管理小说、查看数据、与读者互动。">
    <meta name="keywords" content="写小说，作家学院，作家专区，原创文学，网络文学，网络小说，在线写作，作家助手，起点中文网，创世中文网，云起书院，起点女生网，起点文学网，阅文集团">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <title>
        首页-阅文作家专区</title>

    <link rel="shortcut icon" type="image/x-icon" href="/portal/public/images/favicon.ico">
    <link rel="Bookmark" type="image/x-icon" href="/portal/public/images/favicon.ico">
    <!--   <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />-->
    <link rel="stylesheet" href="static/css/reset.css">
    <link rel="stylesheet" href="static/css/index.css">
    <link rel="stylesheet" href="static/css/font.css">
    <link rel="stylesheet" href="static/css/module.css">
    <link rel="stylesheet" href="static/css/layout.css">
    <link rel="stylesheet" href="static/css/header.css">
    <link rel="stylesheet" href="static/css/footer.css">
    <link rel="stylesheet" href="static/css/dialog.css">



    <link rel="stylesheet" href="static/css/ui.css">
    <link rel="stylesheet" href="static/css/swiper.min.css">
    <link rel="stylesheet" href="static/css/plugin-drawer.css">




    <script type="text/javascript" src="static/js/aq_common.js"></script>
</head>
<body>


<div class="header " id="j-siteHeader">
    <div class="box-center cf">
        <!-- 未登录 -->
        <div class="no-login">

            <div class="btn-wrap dib-wrap">
                @if(empty(Session('user')))
                    <a class="btn-secondary" href="/login">登录</a>
                @else
                    <h3>{{Session('user')}}</h3>
                @endif

                <a class="btn-primary" href="{{url('/author_do')}}" >成为作家</a>
            </div>

        </div>
        <!-- 图标列表，包含用户信息 -->
        <div class="icon-list j-slideDownList">
            <ul>

                <li>
                    <a class="icon-font" href="javascript:">&#xe91f;</a>
                    <div class="slide-down-wrap list">
                        <cite><span><i></i></span></cite>
                        <dl>
                            <dd onclick="tucao()"><a href="javascript:;">意见反馈</a></dd>
                            <dd><a href="/contentv2/about/help_center.html" target="_blank">帮助中心</a></dd>
                        </dl>
                    </div>
                </li>

            </ul>
        </div>
        <!-- logo -->
        <div class="logo">
            <h1 title="阅文作家专区"><a href="/"></a></h1>

            <div class="nav-item j-slideDownList">
                <ul>
                    <li>

                        <div class="slide-down-wrap list">
                            <cite><span><i></i></span></cite>
                            <dl>
                                <dd><a href="/">首页</a></dd>
                                <dd><a href="/portal/article">文章</a></dd>
                                <dd><a href="/portal/spcolumn">专栏</a></dd>
                                <dd><a href="/portal/news">资讯</a></dd>
                            </dl>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script src="static/js/jquery.js"></script>
<script src="static/js/all.js"></script>

<div class="page-content">
    <div class="box-center">
        <div class="nav-header">
            <ul>
                <li class="act"><a href="/portal">首页</a></li>
                <li><a href="/portal/article">文章</a></li>
                <li><a href="/portal/spcolumn">专栏</a></li>
                <li><a href="/portal/news">资讯</a></li>
            </ul>
        </div>
        <div class="main-content cf">
            <!-- start 左侧 -->
            <div class="left-wrap fl">
                <!-- 轮播 -->
                <div class="focus-slider">
                    <!-- Swiper -->
                    <div class="swiper-container">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <a href="https://activity.qidian.com/noah/857269779" target="_blank"><img src="static/picture/5e6608893d4ae.jpg"></a>
                            </div>

                            <div class="swiper-slide">
                                <a href="https://yuedu.reader.qq.com/common/common/templateConfig/dist/index.html?actid=10000967" target="_blank"><img src="static/picture/5e7c91b3632fb.jpg"></a>
                            </div>

                            <div class="swiper-slide">
                                <a href="http://wwwploy.qidian.com/ploy/20150520qdsp/theme1.htm" target="_blank"><img src="static/picture/5cde50a532abc.png"></a>
                            </div>

                            <div class="swiper-slide">
                                <a href="http://images.xxsy.net/xxhtml/zuozhefulinew/index.html#page1" target="_blank"><img src="static/picture/5cde5124cacee.png"></a>
                            </div>

                            <div class="swiper-slide">
                                <a href="http://acts.book.qq.com/cssp/theme1.html" target="_blank"><img src="static/picture/5cde507510a17.png"></a>
                            </div>

                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next icon-left">&#xe90d;</div>
                        <div class="swiper-button-prev icon-right">&#xe90c;</div>
                    </div>
                </div>
                <!-- 智能课堂 -->

                <div class="plate-1 mb48">
                    <h3 class="plate-title">

                        <div class="control">
                            <a class="icon-class-left" href="javascript:">&#xe90c;</a>
                            <b class="classroom-pagination"></b>
                            <a class="icon-class-right" href="javascript:">&#xe90d;</a>
                        </div><i>智能课堂</i>
                    </h3>
                    <div id="intelligentList" class="classroom-list">
                        <div class="swiper-wrapper">



                            <div class="swiper-slide">
                                <ul>

                                    <li>
                                        <a href='/portal/intelligentlist?columeid=33434352557391624'>
                                            <img src="static/picture/5cde6ea8de95e.png">
                                            <div class="info-wrap">
                                                <h4>新手作家，如何进行创作？</h4>
                                                <p>7篇精选课程，助你快速入门，快去学习吧！</p>
                                                <span>7 篇文章</span>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href='/portal/intelligentlist?columeid=33434358485569666'>
                                            <img src="static/picture/5cde6e9f960b0.png">
                                            <div class="info-wrap">
                                                <h4>如何写出让用户喜欢的作品？</h4>
                                                <p>6篇精选课程，等你开启，快去学习吧！</p>
                                                <span>6 篇文章</span>
                                            </div>
                                        </a>
                                    </li>

                                </ul>
                            </div>

                            <div class="swiper-slide">
                                <ul>

                                    <li>
                                        <a href='/portal/intelligentlist?columeid=33434364643167193'>
                                            <img src="static/picture/5cde6e929f579.png">
                                            <div class="info-wrap">
                                                <h4>如何进阶为优秀作家？</h4>
                                                <p>7篇精选课程，提升写作技巧，快去学习吧！</p>
                                                <span>7 篇文章</span>
                                            </div>
                                        </a>
                                    </li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- 推荐文章 -->

                <div class="plate-2 mb48">
                    <h3 class="plate-title">
                        <a class="more" href="/portal/article">更多<em class="icon-arrow-right">&#xe90d;</em></a><i>推荐文章</i>
                    </h3>  <div class="article-list-wrap">

                        <ul>

                            <li>

                                <a class="asset-img" href='/portal/content?caid=16376634304675601&feedType=1&lcid=' target="_blank">

                                    <img src="static/picture/5e66fdc63a916.jpg">
                                </a>
                                <div class="info">
                                    <div class="title">


                                        推荐课程




                                    </div>
                                    <h3>

                                        <a href='/portal/content?caid=16376634304675601&feedType=1&lcid='  target="_blank">

                                            12000名作者参与，4000部抗疫题材网络文学为武汉加油
                                        </a>
                                    </h3>
                                    <p class="desc">

                                        <a href='/portal/content?caid=16376634304675601&feedType=1&lcid='  target="_blank">

                                            4000部网络文学作品上线 阅文集团“我们的力量”主题征文大赛自2月9日正式上线，起点中文网副总编辑李晓亮说，截至目前，阅文后台涌入12000多名作者报名参加，已有4000多部作品审核上线。 各路作者创作热情高涨，提交的书名中有《武汉我为你加油》、《武汉加油》、《在前线奋斗》这种直白表达的现实主义题材，有《急诊科的夜班故事》、《宅在家里的100天》等都市题材，也有《遇见未来拯救当下》这类的幻想题材小说。“这些作品风格，跟起点作品原有的风格区别明显，更贴近现实，更接地气”，李晓亮说。 参赛作者来自全国各地，既有大量的新生力量，也有成名获奖作者，如李开云曾凭借作品《二胎囧爸》获阅文第一届网络原创文学现实主义题材征文大赛二等奖，还有包子二爷等已有一定影响力的成熟作家。李晓亮说，一些传统作家也开始投身网站，写抗疫题材网文。 不少网文受到了热切关注。包子二爷的《你好普通人》致敬一线的工作人员，致敬每一个贡献力量的普通人。李开云的《国家战疫》写的是在口罩厂打工的王大强，无奈拿着老板给的用来抵工资的3万个口罩，踏上了一场嘀笑皆非的人间旅途。梦风的《一诺必达》写的是快递员为抗疫前线运送紧急物资的故事。 快速反应“挖坑”又“填坑” 作者梦风和妻子都是在上海工作的湖北人。“往年我们都回武汉，今年由于妻子在上海待产，所以没有回去。”梦风说，第一个孩子出生时，我的父亲在武汉去世。他第二个孩子出生时，家乡有很多人失去生命。这对他是非常难以接受的事情，也对他造成了巨大冲击。于是他一方面写文，一方面和朋友一起募捐、寻找口罩，尽自己的力量帮助家乡。 梦风是上海一家快递公司的管理人员，他所在的公司在这次疫情中投入了大量的人力、物力将各地的物资第一时间发住疫区。“和一线的医护人员相比，我们只是后勤保障人员，但是后勤保障成功与否也关系到前线的战士能否打胜仗。这激发了我以配送紧急物资为主线的创作灵感。”他说，一线员工每天都在路上跑，接触大量人群，尤其是武汉快递员，危险系数太大了，他们是用生命在搏一份职业。 这是一次从未有过的艰难写作。梦风从小区找家政人员，听说他是武汉人，谁也不敢来了。他只能奶爸月嫂作者一肩挑，一手抱着小婴儿，一手拿着手机写文，然后等两个孩子睡下再在电脑里更文。他说，创作过程中面临着痛楚，经常想喊两嗓子，但是又不敢喊。 身在山东聊城的包子二爷，和无数网络作家一样，每天刷微博微信关注疫情。征文启动后，包子二爷立刻与编辑讨论人设设定和故事大纲。这些天来，每天都更文6000字，至今已写完7万多字。她说，自己写了个普通人因为疫情而聚在一起的故事。包子二爷擅长故事铺垫和后期填坑，她前五章“挖坑”，到了5万字至10字，有一个小高潮，10万至15万字大高潮，15万字后则“填坑”。 作者李开云最多的时候日更8000字，他希望用喜剧的表现手法，来展现小人物之间的无助、无奈、温暖和力量。“小人物感受到的可能更多的是啼笑皆非、哭笑不得，我想记录小人物的喜怒哀乐。他们没有那么多口号，没有那么多高尚，他们的初衷就是想活下去。” “我只能描写亲历者1%的伤痛” “新闻、信息有点像调色盘的颜料，我是选取一些颜色进行融合。”梦风说，自己的东西可能不那么美，但相信会得到一些人的喜爱。 作者们坦言，新闻比小说更精彩，这对写作是个挑战。湖南农民郝进捐出15000只口罩，这是他去年在一家口罩厂务工，老板抵发成工资给他的。疫情爆发，他没有卖一个来换取自己的生活费。这个新闻深深触动了李开云，他虚构了王大强这个人物，“我发现了人物的闪光点，恨不得一口气，不停地把小说写完。” “但我用尽百分之百的努力，也只能描写出亲历者百分之一的伤痛。”电话中，李开云的声音显得沉痛，他说想去采访一些人，充实写作素材，增强真实感，但又不忍心去揭开他们的伤疤。“这是我在写作过程中最大的矛盾。” “硬往上拔高，脱离现实不行。”李开云说，因此他在文字的掌控上会很用心，每天要更文的时候，还会从头到尾捋一遍，把节奏把控好。“把人写哭容易，但是让人笑中带泪不容易。” 和李开云一样，梦风也写了很多幽默元素。但他认为，创作的度很难把握，既要给大家安慰、鼓劲，还不能玩笑开得太夸张。 作者们深深感到，和粉丝的互动在写作中依然起着巨大作用。“80 %情节按自己思路走，20%根据网友反馈。”梦风说，有一位网友阅文无数，他认为作品没有反派人物肯定不行。对于网友的建议，梦风很纠结，但他说，第七、第八章会适当针对网友意见进行修改。李开云也听取了网友的意见，原本一条线，变成了两条线，新增加的医生线索就是网友提出来的。 一次救赎和自我救赎的旅程 “创作写作是一场救赎与自我救赎的旅程。”李开云说，希望通过自己的作品温暖别人，给人以力量。 李开云的写作比征文启动得更早，新冠肺炎疫情刚一发生，他就决定要写点什么了，他是媒体记者出身，对新闻一向敏感。他说，在每天的写作过程中，与作品中的人物打交道，感受他们的喜怒哀乐，自己的压力、忧虑、悲伤、感动，也在作品中得到了呈现。“人生艰难，唯爱救赎。” 中国作协网络文学中心研究员及首席专家肖惊鸿认为，新冠肺炎疫情不要说作家，全体中国人民、甚至国际社会都在关注。那么对于网络作家而言，写下眼前发生的事件、写一写那些让人或感动、或唾弃的人物，就是非常自然的了。中南大学文学院教授欧阳友权认为，网络文学作家不仅人数众多，而且分布在社会的各个行业，他们最了解民众的疾苦，最关注社会的变化。这次疫情，他们及时、敏锐的反应是其社会责任感很强的一种表现，是其关注现实、关注民生的一种体现，这是令人感到欣慰和鼓舞的事情。 肖惊鸿还对此现象分析道，网络文学由民间性、草根性一路走来，无论是多达1400万的作者，还是4亿多的读者，网络文学汇聚了最广大的人民性。而网络作者在社会生活中，触角敏锐，想象丰富，复杂而广泛的社会生活会全景式地体现在他们的创作中。历经这次磨练，网络文学已当之无愧地成为当代文学的先锋，他们对信息掌握的即时性、广泛性、全面性都是过去时代的作家所不可比拟的。
                                        </a>
                                    </p>
                                    <div class="total">
                                        <a data-node="collectArticle" data-articleid="16376634304675601"
                                           class="fav " href="javascript:">

                                            <em class="icon-fav">&#xe92e;</em>
                                            <em class="icon-faved">&#xe92d;</em>

                                            <cite data-node="tip" class="icon-hover-tip">收藏</cite>
                                        </a>
                                        <span>2020-03-10 阅读 4.6 万 </span>
                                    </div>
                                </div>

                            </li>

                            <li>

                                <a class="asset-img" href='/portal/content?caid=16145705304193701&feedType=1&lcid=' target="_blank">

                                    <img src="static/picture/5e43c11bf2aab.jpg">
                                </a>
                                <div class="info">
                                    <div class="title">


                                        推荐课程




                                    </div>
                                    <h3>

                                        <a href='/portal/content?caid=16145705304193701&feedType=1&lcid='  target="_blank">

                                            春节网文阅读数据：医疗题材网文数据暴增
                                        </a>
                                    </h3>
                                    <p class="desc">

                                        <a href='/portal/content?caid=16145705304193701&feedType=1&lcid='  target="_blank">

                                            2020年超长春节期间，大量的娱乐需求自线下转至线上，看网文、玩游戏、刷剧集成为大量网民宅在家中的标配。据阅文集团旗下平台QQ阅读数据，从农历大年三十至农历正月十四两周内，在QQ阅读上打卡量最多的国内城市分别为北京、成都、深圳、重庆、广州、上海、杭州。值得注意的是，武汉市也处在全国网文用户活跃度前列，位居第9位。 其中， 都市、玄幻、言情三类依然是春节期间网文用户最热爱的作品品类，但受疫情影响，QQ阅读平台医疗题材的小说阅读数据涨幅明显。以阅文集团大神作家志鸟村的《大医凌然》为例，该作品以写实硬核的医学技术、具有张力的情节在2019年就受到众多读者追捧，春节期间仅在QQ阅读平台上阅读用户剧增40%；《手术直播间》的作者真熊初墨是阅文集团新晋知名作家，现实生活中更是一名三甲医院医生，其根据生活经验创作的这部网文，春节期间的阅读用户增长近3成。众多读者在书友圈自发评论“武汉加油”、“感谢医生的付出与辛勤”为武汉加油打气，成为这个春节阅读网文的独家回忆。 此外，防疫书籍也成为了网民宅在家中的重要读物。QQ阅读在春节期间上线的“科学防护 共度时艰”防疫专题，截至目前访问量已达近百万次。此外，QQ阅读还开放精品网文和图书资源，推出一系列限时免费阅读活动，上线至今，访问人数已超过20万人，点击量近100万次，文学类读物最受用户欢迎。
                                        </a>
                                    </p>
                                    <div class="total">
                                        <a data-node="collectArticle" data-articleid="16145705304193701"
                                           class="fav " href="javascript:">

                                            <em class="icon-fav">&#xe92e;</em>
                                            <em class="icon-faved">&#xe92d;</em>

                                            <cite data-node="tip" class="icon-hover-tip">收藏</cite>
                                        </a>
                                        <span>2020-02-12 阅读 2.6 万 </span>
                                    </div>
                                </div>

                            </li>

                            <li>

                                <a class="asset-img" href='/portal/content?caid=15886257404509701&feedType=1&lcid=' target="_blank">

                                    <img src="static/picture/5e1c2a6d03522.jpg">
                                </a>
                                <div class="info">
                                    <div class="title">


                                        推荐课程




                                    </div>
                                    <h3>

                                        <a href='/portal/content?caid=15886257404509701&feedType=1&lcid='  target="_blank">

                                            关于开展广东网络作家调查的启事
                                        </a>
                                    </h3>
                                    <p class="desc">

                                        <a href='/portal/content?caid=15886257404509701&feedType=1&lcid='  target="_blank">

                                            为深入学习贯彻习近平总书记关于文艺工作的重要论述，繁荣广东网络文学创作，服务好网络文学作家，广东网络作家协会拟开展广东网络作家协会会员作家和广东省网络文学作者调查，具体事项如下。 一、调查目的 建立广东网络作家数据库，进一步落实各项为网络作家服务的措施，推动网络文学繁荣发展。 二、调查方式 本次调查以调查问卷方式开展。 三、报送方式 广东网络作家协会会员作家填写《广东网络作家协会会员作家调查表》（见附件1）；请广东籍贯或在广东居住的非会员网络作者填写《广东省网络文学作者调查表》（见附件2）。填写完毕请发至邮箱：wlwxplbjb@163.com。联系人：王金芝；联系电话：020——38486160。 本会对调查信息严格保密，不对外泄露，不作任何商业用途。 广东网络作家协会 2019年12月20日 请点击以下官网链接获取表格： http://www.gdzuoxie.com/v/201912/11650.html
                                        </a>
                                    </p>
                                    <div class="total">
                                        <a data-node="collectArticle" data-articleid="15886257404509701"
                                           class="fav " href="javascript:">

                                            <em class="icon-fav">&#xe92e;</em>
                                            <em class="icon-faved">&#xe92d;</em>

                                            <cite data-node="tip" class="icon-hover-tip">收藏</cite>
                                        </a>
                                        <span>2020-01-13 阅读 3.6 万 </span>
                                    </div>
                                </div>

                            </li>

                        </ul>

                    </div>

                </div>

                <!-- 推荐专栏 -->

                <div class="plate-3 mb48">
                    <h3 class="plate-title"><a class="more" href="/portal/spcolumn">更多<em
                                    class="icon-arrow-right">&#xe90d;</em></a><i>推荐专栏</i>
                    </h3>
                    <div class="special-list">
                        <ul>


                            <li class="no1" data-url='/portal/columnlist?columeid=14279897415314737'>
                                <div class="column-img">
                                    <div class="bg"></div>
                                    <div class="info">
                                        <img src="static/picture/5cde8eb2d871e.png">
                                        <h4>新手专区</h4>
                                        <p>5.5 万 人关注</p>
                                        <a data-node="followedBtn" class="followed" href="javascript:" data-columnid="14279897415314737"
                                           style="display:none;" >已关注</a>
                                        <a data-node="followBtn" data-columnid="14279897415314737" class="follow" href="javascript:"
                                        >关注</a>
                                    </div>
                                </div>
                                <div class="detail">
                                    <dl>

                                        <dd><a data-channelcaid="5335793803072301"
                                               target="_blank"
                                               href="/portal/content?caid=5335793803072301&feedType=2&lcid=14279897415314737" target="_blank">写小说，可以YY什么？</a>
                                        </dd>

                                        <dd><a data-channelcaid="5335856703073701"
                                               target="_blank"
                                               href="/portal/content?caid=5335856703073701&feedType=2&lcid=14279897415314737" target="_blank">设定的“抄袭”</a>
                                        </dd>

                                        <dd><a data-channelcaid="5337117403202901"
                                               target="_blank"
                                               href="/portal/content?caid=5337117403202901&feedType=2&lcid=14279897415314737" target="_blank">玄幻小说创作入门指南</a>
                                        </dd>

                                    </dl>
                                    <p>38 篇文章</p>
                                </div>
                            </li>


                            <li class="no2" data-url='/portal/columnlist?columeid=14273726331923859'>
                                <div class="column-img">
                                    <div class="bg"></div>
                                    <div class="info">
                                        <img src="static/picture/5cde8edb303a3.png">
                                        <h4>写作技巧</h4>
                                        <p>4.3 万 人关注</p>
                                        <a data-node="followedBtn" class="followed" href="javascript:" data-columnid="14273726331923859"
                                           style="display:none;" >已关注</a>
                                        <a data-node="followBtn" data-columnid="14273726331923859" class="follow" href="javascript:"
                                        >关注</a>
                                    </div>
                                </div>
                                <div class="detail">
                                    <dl>

                                        <dd><a data-channelcaid="16405114605338201"
                                               target="_blank"
                                               href="/portal/content?caid=16405114605338201&feedType=2&lcid=14273726331923859" target="_blank">内心戏，心理描写，怎么写才不尴尬呢</a>
                                        </dd>

                                        <dd><a data-channelcaid="15356894205873501"
                                               target="_blank"
                                               href="/portal/content?caid=15356894205873501&feedType=2&lcid=14273726331923859" target="_blank">网文开头怎么写？</a>
                                        </dd>

                                        <dd><a data-channelcaid="5361857803722301"
                                               target="_blank"
                                               href="/portal/content?caid=5361857803722301&feedType=2&lcid=14273726331923859" target="_blank">题材分享——最强小学班级</a>
                                        </dd>

                                    </dl>
                                    <p>29 篇文章</p>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>

                <!-- 热门文章 -->

                <div class="plate-4 mb48">
                    <h3 class="plate-title"><a class="more" href="/portal/article?filterType=1">更多<em
                                    class="icon-arrow-right">&#xe90d;</em></a><i>热门文章</i>
                    </h3>
                </div>
                <div class="article-list-wrap">

                    <ul>

                        <li>

                            <a class="asset-img" href='/portal/content?caid=11359506303788601&feedType=2&lcid=14279897415314737' target="_blank">

                                <img src="static/picture/6a6bce70-7224-11e9-acdf-25361d94412a.png">
                            </a>
                            <div class="info">
                                <div class="title">

                                    <a data-columnid="14279897415314737" class="hover-info"
                                       href="/portal/columnlist?columeid=14279897415314737" >新手专区</a>



                                    -

                                    作家助手

                                    <div class="bubble-info">
                                        <cite><span><i></i></span></cite>
                                        <div class="info-box">
                                            <div class="info-head">
                                                <img src="static/picture/5cde8eb2d871e.png">
                                                <div class="info-data">
                                                    <h6><a href="/portal/columnlist?columeid=14279897415314737">新手专区</a></h6>
                                                    <p>5.5 万 人关注 38 篇文章</p>
                                                    <a data-node="followedBtn" data-columnid="14279897415314737" class="btn btn-blue-border disabled" href="javascript:" style="display:none;">已关注</a>
                                                    <a data-node="followBtn" data-columnid="14279897415314737" class="btn btn-blue-border" href="javascript:" >关注</a>
                                                </div>
                                            </div>
                                            <div class="info-bd">
                                                <p class="desc">专门为新手作者量身定做的创作指南，涵盖网络文学创作最基础的知识要点和最基本的注意事项，带你轻松入门写网文。</p>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                                <h3>

                                    <a
                                            href='/portal/content?caid=11359506303788601&feedType=2&lcid=14279897415314737'  target="_blank">

                                        嘿，编辑，你跟我说说，为啥我的书没人看啊
                                    </a>
                                </h3>
                                <p class="desc">

                                    <a
                                            href='/portal/content?caid=11359506303788601&feedType=2&lcid=14279897415314737'  target="_blank">

                                        嘿，编辑，你跟我说说，为啥我的书没人看啊 编辑，编辑，为什么只有我的书，订阅是一个数字，一个数字得涨？ 编辑，编辑，为什么我都那么努力，成绩怎么还是毫无变化？ 编辑，编辑，请告诉我，不是只有我一个人这样。。。。 千万次，我这样地问。 新书成绩不见起色，伤心到怀疑人生，且听听编辑们怎么说~~~ 新书不要太在意点击量，新书期这种情况很常见呀~剧情也还没展开，剧情展开后会好一些的~保持稳定更新，提高作品质量，慢慢积累读者～ 　　　　　　　　　　　　　　　　　　　　　　　　　 ——木棉　 新书点击率不太让人满意，自然是书的笔力和节奏还有待提高，具体的话就是看书大概内容指下不足之处。 　——北河 好好码字，稳定更新，玄幻大类，后期发力，网文路难，百万成神 　—夜宵 新人新书，这是很正常的，对于新人总是觉得这个行业很简单，自己就是下个土豆番茄。所以看到新书无人问津，特别着急。其实这是扑街的第一步，之后会扑更多的街。每个成名作者身后，殊不知有着多少惨痛的扑街经历，坚持住。。 ——虎牙 写书从来都是一个长期的过程，对于长篇小说来说，一切都刚刚开始，如果上过推荐之后数据还是很低，可以总结一下，是否稳定更新，书的内容是不是不好，是不是剧情设置的不合理，爽点没把握到位，多看火书，学习别人成功的地方，在随后的章节里，边写边改进。 最了解作品的还是作者本人，提高自己的手段其实就是多看多写多总结。扫榜单，扫火书，扫红书，学习他们的经验。 优质内容，不怕没有曝光率。没有不会总结的成功者，只有不断原地摔倒的失败者。 ——灰灰 如果字数少的话，写得长了就好了，重点是坚持。如果是长文，还不见起色的话，是不是要思考，文风跟所发的站点不匹配？可能最近流行XXX风的作品，而作者作品的风格却是比较成熟，文艺之类的，所以书城那边读者比较少 ，或者说直接推荐作者最近流行的题材，建议写写看。 ——松露 不要着急，所有的书，只要内容好，早点晚点，都会出成绩，要是字数少，就让他在等等。要是字数多，会问问他什么元素类型的，然后让他自己对比一些同类型，书比较火的。　 我会让作者看看，之后再找我说说，要是真的看了，就一直探讨一下，要是没看，基本就不会找我了。写书，编辑是引路人，但走得如何，还是看作者自己，连走都不想走，谁也没招。 ——　熊猫 任何书出成绩是有原因的，没有出成绩，也是有原因的，我会帮他看文章，分析他的哪些地方写的不好，同时，告诉他去看看某些类似的热销文。 ——星辰 写书从来都是一个长期的过程，对于长篇小说来说，一切都刚刚开始，所以一开始成绩不好，数据不好，文笔不好，内容不好，剧情不好，爽点不好，都没事！ 保持稳定更新，在随后的章节里，边写边改进即可，相信自己。 　　　　　　　　　　　　　　　　　　　　　　　　　　 　——麒麟 多看火书，多研究，质量上去了，自然就多了 ，从来都没有随随便便的成功，自怨自艾最没有用。 　　 ——晴天 要及时调整心态，刚开始，可以多花些心思在小说内容上，多看看热门书，不要太着急，刚开始建议抱着学习的态度，多积累写作经验。 ——汤圆 作者，心里素质一定要过硬。新书一般不要太在意数据（尤其是新作者新书，没有读者基础，这时候需要慢慢积累，从作品内容本身去思考），坚持稳定更新~可以检查，书名、简介、还有开篇，（多看好的作品，多多分析原因）。坚持就是胜利，在写作中，不断总结经验~，在写作中，进步。 ——水荇
                                    </a>
                                </p>
                                <div class="total">
                                    <a data-node="collectArticle" data-articleid="11359506303788601"
                                       class="fav " href="javascript:">

                                        <em class="icon-fav">&#xe92e;</em>
                                        <em class="icon-faved">&#xe92d;</em>

                                        <cite data-node="tip" class="icon-hover-tip">收藏</cite>
                                    </a>
                                    <span>2018-08-07 阅读 24.7 万 </span>
                                </div>
                            </div>

                        </li>

                        <li>

                            <a class="asset-img" href='/portal/content?caid=5371077404624601&feedType=1&lcid=' target="_blank">

                                <img src="static/picture/57d7ad36ab564.jpg">
                            </a>
                            <div class="info">
                                <div class="title">


                                    推荐课程




                                </div>
                                <h3>

                                    <a href='/portal/content?caid=5371077404624601&feedType=1&lcid='  target="_blank">

                                        如何判断作品是否已失败
                                    </a>
                                </h3>
                                <p class="desc">

                                    <a href='/portal/content?caid=5371077404624601&feedType=1&lcid='  target="_blank">

                                        如前一篇文章所说，判断成功容易，判断失败却很难。明明写得不错，完全可以成功的作品，因为一时的挫折而放弃，这当然很可惜，而明明彻底失败的作品，却因为不信邪而不断写下去，浪费大量的时间精力，这同样可惜。 那么，到底要怎么去判断作品是否已经失败呢？ 这个问题真的很难回答，因为哪怕是经验特别丰富的老编辑，他可以看到一本书时拍案叫绝，很喜欢这本书，或者他虽然不喜欢，但他可以认定隔壁小孩一定喜欢，同事老王一定喜欢，家里三婶婶一定喜欢……只要有一批人喜欢，书当然就是好的。 但反过来，如果老编辑自己不喜欢，隔壁小孩不喜欢，老王不喜欢，三婶婶不喜欢，书就一定不好么？这几个人真能代表全人类吗？凭什么街头的路人甲一定也不喜欢呢？而退一步说，哪怕这书当前真的全世界都不接受，又凭什么说后世的人们也不喜欢它呢？ 所以，严格意义上的判断失败，算是无解的。 好在，我相信各位作者并不是来较真的。如果以商业化为写作目的，在这个前提下，无论作品在后世会多红，无论地球某个角落的人们会多喜欢，只要它当前不被人接受，只要它连签约都签不了，其实就可以断定失败了。 而在这方面，我可以站在编辑的角度，从我们工作的流程、准则、心态出发，让各位作者，尤其是新人作者，能够了解编辑是怎么决定是否签约，是否给推荐的，从而帮助大家判断作品是否该被放弃。 首先说签约。 编辑提交签约，有主动和被动两种方式。 主动签约，就是编辑主动在后台扫书，审书，所有达到一定字数，进入编辑后台的作品，他们会抽空一本本看下来，觉得好的，他们就会主动提交签约，让签约编辑去找作者，而这时候，签不签就是由作者来决定了。 主动签约会有一定的随机性，因为编辑工作有时忙碌有时空闲，而每部作品进入后台的时间，更新速度，也并不一致，所以当编辑第一次审核到某部作品时，有可能只有两三万字，有可能达到四五万字，或者更多。 当他审到作品时，如果觉得作品尚可，他可能直接提交签约，也可能放在一边跟进关注，选择继续看看后续文章，继续观察一阵。 在这里需要额外说明几点。 1，每一部作品都会由多位责编交叉审核，责编的意见会反馈给主编，最终决定是否签约的是主编。而主编会很大程度上参考责编意见，尤其是建议签约的意见。所以，如果几位责编都不建议签约，主编有很大可能也放弃，但也有一定几率，因为他找到作品的某个闪光点，所以决定签约。而如果责编中有多位或者一位的意见是签约，一般来说，主编都会慎重考虑的，除非完全确定作品不行，否则他提交签约的概率是很高的。 2，在某些巧合下，作品会在两三万字甚至更短的时候，进入编辑后台，并刚好被审核到，第一时间提交签约。所以两万字就签约是完全可能的，但这完全不等于所有的作品都是两万字签约，更不等于两三万字不签就意味着编辑看不上，这时候，编辑都未必审核到呢。 3，编辑初次审核后，立即决定签约的作品，不代表一定比决定跟进关注的作品要强，或者说，晚签的未必不如早签的。两者的区别，只在于一个已经让编辑看清了，一个还没有。这就好比选美，一位选手走过来，我们看清了，认为颜值可以，就亮灯通过，另一位还在远处，朦朦胧胧没看清，想等她走近些看，这时候，说她不如前一位，可就言之过早。 说完了主动，再说被动签约。 对编辑来说是被动，对作者来说就是主动，主动去申请签约。当作品达到一定字数标准后，就获得了申请签约的资格，作者可以主动申请，让编辑审核。 和主动签约的随机性不同，被动签约有严格的规则限定，比如，作品申请后，不论是否通过，编辑都必须给予明确的答复，并且一定要在七个工作日内完成审核，不得拖延。 编辑主动审核时，一时无法判断的可以先放一放，继续观察，但当他遇到签约申请，就必须立即做出决定，要么签，要么不签，不可能有第三种答复。 所以，从这个角度看，作者主动申请是能够提高通过率的，因为编辑的选项从三个减少到两个，原本他选择跟进关注的那部分书，就一定要做个二选一，所以至少有一部分书，会直接通过审核。 另外，当作者申请签约时，编辑理论上是一定要进行审核的，哪怕他此前已经看过作品，已经做出了跟进关注或是不签的决定，他也得重新审核一遍。不过，因为审核工作毕竟是人工进行，多多少少会受主观因素的影响，如果他近期已经看过作品，并对它印象非常深刻，是有可能不再重看，直接做出决定的。 所以，如果作品经过了大修，或者有其它重要的变化，建议在申请时注明已大修过，免得编辑因为旧印象，直接做出失误的决定。 以上是两种签约方式，但不论是哪种，签约标准都是一致的，合约也都完全一样。 至于具体的签约标准是什么，编辑凭什么决定是否签约，这可以参考往期文章《签约标准到底是怎么定的》。 简单来说，就是编辑根据经验，判断作品是否有好看，是否有很多人会喜欢，是的话就会提交签约。而如果不是，那就看作品是否在某方面亮眼，比如创意特别出彩，文笔特别好，故事特别主旋律……是的话，也有很大可能提交签约。 在这方面，应该不难理解。作者们也完全可以换位思考，想想自己如果是编辑，会如何进行审核，如何进行判断。相信大家会得出差不多的结论。 签约申请是很容易判断成败的，因为只要主动申请一次，几天后就有结果了，成就是成，不成就是不成，毫不含糊。 而问题的关键，在于申请失败时，如何判断下一次申请是否有成功可能，或者说，当字数累积得更多时，能否增加签约成功率。 对此，我觉得要分两个阶段来看待问题。 第一阶段，是常规签约字数范围内。大体是30万字以内，尤其是20万字以内。 在这一阶段，签约失败，除了因为作品确实很差之外，也有很大的可能，是编辑还没下定签约决心，还想多关注一下。 毕竟，好到能让人一眼认定，或是差到让人直接放弃的作品，都算是少数，更多的还是两者之间，不上不下的那类。而对于这些作品，字数越多，签约的概率自然就越大。 因为字数增多，不代表作品更好，但在质量保持稳定的情况下，字数越多，自然就证明作者越稳定，不是只能写几万字，就后续乏力的类型。这样，当然能帮助编辑下决心去签。 所以，在这个阶段，字数越多越容易签，是成立的。如果作者本人无法判断作品成败，那么，在签约失败后，建议别轻易放弃，继续写下去才是上佳选择。如果你写到10万字时签约失败，那么继续写到20万就很可能成功了，但如果这时候换开新书，同样再写到10万字，失败的可能却很大，两个10万字，是不如一个20万字的。 第二阶段，自然是常规签约字数之外，30万字之上。 上面说过，当编辑无法下决心时，会继续关注，等作品字数更多时再看看。不过，这个跟进关注，不是无休止的，如果编辑跟进到三四十万字还下不了决心，那就成了笑话了。 到这个阶段，如果申请签约还失败，其实就可以认定编辑是放弃了。 那么，继续写下去，字数再多点，会不会增加成功概率呢？ 当然还是会的。因为上文也同样说了，商业价值不是决定签约的唯一依据，还会有其它因素决定，比如作者的毅力。如果有人能坚持写到百万字，两百万字，这毅力不说感天动地，但感动编辑还是很有可能的。 不过，问题在于性价比。 在第一阶段，字数的累积并不需要花费太大功夫。如果10万字签约失败，那么再写到15万，或者20万字，字数直接翻了一倍，成功率大增，但实际也就多写了5万字10万字而已。 但第二阶段则不同。如果作品已有30万字，那么再写10万字，甚至20万字，也没让人觉得增加了多少。尤其是，这是编辑已经放弃的情况下，是不再靠质量，而是靠字数砸人的时候，可以说，10万20万字，压根就砸不起多大的水花。 而要直接写到百万字，要花费多大的心力？更何况，写到百万也只是增加概率而已，并不代表百万就是终点，就是胜利。 所以，就我个人而言，觉得在这个阶段，想靠累积字数取胜，意义是不大的，至少不划算。 也正因为如此，如果常规字数范围内还没能签约，我觉得就可以判定失败了。 当然，如上一篇文章所述，判断失败不代表就要立即停更，我更建议先寻找原因，想好修改或开新书的计划，然后再停更不迟。 下面，再说下已签约作品的失败判断。 在几年前，还是PC时代的时候，判断失败是很容易的，一般来说，只要上完第一个小推荐，甚至只要在推荐上待一天，就能从数据表现上看出结果了。 但到了现在，情况可以说完全不同了。 一方面，现在进入了移动互联网时代，移动侧的推荐一般都需要在较高字数时发力，新书期编辑不会给重要推荐，而小推荐效果并不明显。 另一方面，现在各类渠道可以说五花八门，尤其是阅文这种拥有渠道最多的公司，作品能上的平台甚至都很难数清楚数量。而不同的平台，用户群体是有所区别的，在这里表现不好，不代表换个平台依旧不好。 此外，随着网络文学行业的崛起，作品也在电子销售之外，获得了更多的发展空间，电子成绩不好，也并不代表书就一定失败，没几个订阅却被影视公司看中的案例，虽然依旧罕见，但已经不是孤例了。 所以，在这种复杂的情况下，已经很难用一条两条规则来说清楚了。我的建议是，尽可能与责编多沟通，充分利用他的专业能力与经验，进行判断。 责编的判断未必百分百准确，作者也未必要听从他的意见，但至少，他的判断参考价值很高，可以作为自己判断的重要依据之一，尤其是当自己难以判断、难以抉择的时候，不妨就听取一下责编的建议，以此判断作品是否已经失败，决定后续的行动。 毕竟，签约作品的成绩，很大程度上也是取决于作品推荐。有了推荐，多多少少会有些成绩，而如果没推荐，有成绩自然不太可能。 至于编辑如何决定是否给予推荐，具体可以参考往期文章《关于推荐标准》一文。 简单来说，编辑会结合自己对作品的判断，以及作品的上推表现，以此为主，以作品更新等为辅，决定是否给予后续推荐。 如果编辑决定大力去推，那么无论作者是否自认失败，建议都继续更新下去，因为这是个难得的机会。 如果编辑认定作品失败，暂时不准备推了，那如果作者信他的判断，可以准备新书了，而不信邪的话，继续更新，凭稳定的更新以及积累的字数，也同样可以获得后续推荐，获得证明自己的机会。但同样的，这样做性价比并不太高。 而如果编辑觉得作品表现不好不坏，想继续给点小推观察，这种情况下，除非作者坚定地认为自己失败了，否则建议还是继续更新下去，给编辑一个观察的机会。 总而言之，对于已签约作品而言，建议多与编辑沟通，多参考他的意见。
                                    </a>
                                </p>
                                <div class="total">
                                    <a data-node="collectArticle" data-articleid="5371077404624601"
                                       class="fav " href="javascript:">

                                        <em class="icon-fav">&#xe92e;</em>
                                        <em class="icon-faved">&#xe92d;</em>

                                        <cite data-node="tip" class="icon-hover-tip">收藏</cite>
                                    </a>
                                    <span>2016-09-21 阅读 24.5 万 </span>
                                </div>
                            </div>

                        </li>

                        <li>

                            <a class="asset-img" href='/portal/content?caid=5335793803072301&feedType=2&lcid=14279897415314737' target="_blank">

                                <img src="static/picture/874620e0-7224-11e9-acdf-25361d94412a.png">
                            </a>
                            <div class="info">
                                <div class="title">

                                    <a data-columnid="14279897415314737" class="hover-info"
                                       href="/portal/columnlist?columeid=14279897415314737" >新手专区</a>



                                    -

                                    314

                                    <div class="bubble-info">
                                        <cite><span><i></i></span></cite>
                                        <div class="info-box">
                                            <div class="info-head">
                                                <img src="static/picture/5cde8eb2d871e.png">
                                                <div class="info-data">
                                                    <h6><a href="/portal/columnlist?columeid=14279897415314737">新手专区</a></h6>
                                                    <p>5.5 万 人关注 38 篇文章</p>
                                                    <a data-node="followedBtn" data-columnid="14279897415314737" class="btn btn-blue-border disabled" href="javascript:" style="display:none;">已关注</a>
                                                    <a data-node="followBtn" data-columnid="14279897415314737" class="btn btn-blue-border" href="javascript:" >关注</a>
                                                </div>
                                            </div>
                                            <div class="info-bd">
                                                <p class="desc">专门为新手作者量身定做的创作指南，涵盖网络文学创作最基础的知识要点和最基本的注意事项，带你轻松入门写网文。</p>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                                <h3>

                                    <a
                                            href='/portal/content?caid=5335793803072301&feedType=2&lcid=14279897415314737'  target="_blank">

                                        写小说，可以YY什么？
                                    </a>
                                </h3>
                                <p class="desc">

                                    <a
                                            href='/portal/content?caid=5335793803072301&feedType=2&lcid=14279897415314737'  target="_blank">

                                        有一些作者，写书时知道要YY，但除了让主角越来越强，打赢一次次战斗外，就不知道还有什么可以YY的了。 但其实，寻找YY点，真是非常容易的，用一句话来概括，就是“缺什么补什么”。 缺什么，这是针对于读者的，但作者也同样可以把自己当成读者的一员，看看自己缺少什么，在哪些方面还不如意，还希望在哪儿得到加强。 无疑，变强，战斗力提升，获得更强的力量，打架变得更厉害，这可以说是许多男性读者共同的愿望，这也是绝大多数作者都能想到的。 除此之外，变得更有钱，当然也是绝大多数读者共同的梦想。之所以不说是全部，因为估计王思聪这样的读者，不会太在意这点。 第三个比较容易想到的，该是女神/男神的青睐。正是因为得不到，所以才想得到，这也正是当前校花类作品盛行的一个原因。 以上三条，可以说是最基础的需求，但其实，除了这些，我们的需求，或者说我们得不到的遗憾，真是太多太多了。我随便列举一些。 尊重、理解，这是相对隐藏，但实际上也很基础的一种需求。 长生不老，无病无灾，这是国人数千年来，一直都有的梦想。 会飞行，拥有各种异能绝技，这也是我们少年时隐藏在心中愿望。 奇遇，不劳而获，这有点消极，但也是大众都不会拒绝的。 国家强盛，民族崛起，很多人或许觉得这愿望很傻很天真，觉得我自己活好就行，这关我屁事，但实际上，在内心深处，读者们又何尝不盼望着这个…… 正是这种种的缺憾，才造就了读者们强烈的阅读需求，也造就了一个又一个的经典类型。竞技、历史、玄幻、都市……这一个个类型，哪个不是因为这些需求而生？ 所以，当你不知道yy什么的时候，不妨多想一想，你从小到大，遇到过哪些遗憾，哪些不满足呢？
                                    </a>
                                </p>
                                <div class="total">
                                    <a data-node="collectArticle" data-articleid="5335793803072301"
                                       class="fav " href="javascript:">

                                        <em class="icon-fav">&#xe92e;</em>
                                        <em class="icon-faved">&#xe92d;</em>

                                        <cite data-node="tip" class="icon-hover-tip">收藏</cite>
                                    </a>
                                    <span>2016-09-22 阅读 24.1 万 </span>
                                </div>
                            </div>

                        </li>

                        <li>

                            <a class="asset-img" href='/portal/content?caid=10624769603945001&feedType=1&lcid=' target="_blank">

                                <img src="static/picture/5af9538ff175a.png">
                            </a>
                            <div class="info">
                                <div class="title">


                                    推荐课程




                                </div>
                                <h3>

                                    <a href='/portal/content?caid=10624769603945001&feedType=1&lcid='  target="_blank">

                                        阅读写作指导的正确姿势
                                    </a>
                                </h3>
                                <p class="desc">

                                    <a href='/portal/content?caid=10624769603945001&feedType=1&lcid='  target="_blank">

                                        前一阵在网上看到一篇游戏攻略，作者叫“勤兽初生”，除了正式攻略外，他还提到了几条阅读攻略的正确姿势，对此我深表赞同，并且，感到这些也同样适合于阅读写作指导，所以和大家分享一下。 姿势的第一条：看清攻略是否过期，是否还有效。勤兽初生还举了个例子，动物园湖泊很美，有人留言建议泛舟湖上，结果几年后，动物园在湖里投放了鳄鱼…… 这一条理解起来挺容易的，想当初，我自己写的那些写作指导，现在回头去看，也能说是错漏百出，但这并不意味着那时的我就在故意误人子弟，因为那时的我，哪知道后来的这些变化呢？比如，那时还在用诺基亚的我，可不知道现在大家都在用手机看书。 不过，说起来容易，实际操作中却没那么简单。如果是游戏攻略，还能对照着看游戏版本，但写作指导，可不会告诉你这是什么版本的，只能凭我们自己的感觉去判断。 那么，面对一份写作攻略，我们该怎么去判断它是否过期呢？ 没有太好的办法，但我们至少该记得三点。 第一，提醒自己，这份攻略有可能是过期产品，不要盲目信任。 第二，看时间，无论是攻略中提到的创作时间，还是文章的发表时间，都可以。时间近不代表攻略一定是近期的，因为可能是转载或者重发，但时间久，那就一定是久远的东西。 其实，除了具体的时间，还可以通过文章中提到的一些作品来判断，比如文中用来举例的都是近期的作品，那它不可能是很多年前写成的。 第三，根据自己的认知，看有没有不对劲的地方。如果明显感觉到有什么地方是落伍的，那也可以大致判定攻略过期。 姿势的第二条：看攻略的针对性和适用情况。 这一条同样适用于网文的写作指导，因为那些指导文和游戏攻略一样，也有泛用和小众之分。 比如我之前发过的那些文章，有许多是针对新作者的，但也有一些针对的是有一定经验的进阶级作者，如果搞错了文章的针对对象，那读起来也一定会很别扭，甚至干脆就被误导了。 举个最简单的例子，同样一个问题——选择哪个类型去写，对于不同层级的作者，答案其实是不同的。我们如果看到这类攻略，就必须弄清楚，我们自己是什么样的作者，这篇攻略又是针对着什么样的作者，必须确认这两者是否匹配。 至于怎么去判断写作指导的针对性，说实话，除了看作者自己有没有明确指出外，也没有太好的办法，而不那么好的方法，则是通过一些我们已知的信息去判断。 比如，我们看过这位作者此前的文章，十几篇都是针对女频的，那我们大致可以猜测，新的这一篇很可能也是针对女频。或者，我们了解到这位攻略的创作者自己都只是一名写作上的新人，那他写的指导，很有可能也是新人的感悟，针对的同样应该是新人。 姿势的第三条：充分思考，弄懂攻略作者的详细意思。 引用勤兽初生的原话：“有时攻略作者因为表达能力和写作水平原因并不能很清晰的表述自己的意思，或者表述时有缺失或错误，这就需要玩家自己有分析对错的能力。看攻略只看结论，甚至结论都看不仔细就急急忙忙去原样照搬去执行了，后果可想而知。还有一种情况，就像上面说到的，攻略也难免失误错漏的地方，这需要玩家有一定分析辨别能力，做你认为对的，验证你认为错的并提出给作者使其改正，这是我认为较好的看攻略方式。” 对于这一条，我觉得和写作指导还是有些不同的，因为能创作写作指导的，表述不清的该不多。但即便如此，我们阅读时，依旧得带上脑子，带着自己的判断去看。 一方面，如前两条说的，攻略可能过期，可能不适用，或者作者有时也会出错，另一方面，则是如这条中所说，我们得弄懂作者的本意，透过表面的文字，去分析他真正想表达的含义，只有这样，才能更好地读懂攻略。 总而言之，我们得去看攻略，但同时也必须知道，尽信攻略，则无攻略。写作这件事，真不是机器随随便便就能替代的，所以也别想着不动脑子，随便看几篇指导就能成为大师，多思考、多琢磨，才是成功的必经之路。 最后，感谢一下原攻略的作者勤兽初生，你的攻略挺实在的。
                                    </a>
                                </p>
                                <div class="total">
                                    <a data-node="collectArticle" data-articleid="10624769603945001"
                                       class="fav " href="javascript:">

                                        <em class="icon-fav">&#xe92e;</em>
                                        <em class="icon-faved">&#xe92d;</em>

                                        <cite data-node="tip" class="icon-hover-tip">收藏</cite>
                                    </a>
                                    <span>2018-05-14 阅读 22.8 万 </span>
                                </div>
                            </div>

                        </li>

                        <li>

                            <a class="asset-img" href='/portal/content?caid=5335950904795301&feedType=2&lcid=14279897415314737' target="_blank">

                                <img src="static/picture/874620e0-7224-11e9-acdf-25361d94412a.png">
                            </a>
                            <div class="info">
                                <div class="title">

                                    <a data-columnid="14279897415314737" class="hover-info"
                                       href="/portal/columnlist?columeid=14279897415314737" >新手专区</a>



                                    -

                                    314

                                    <div class="bubble-info">
                                        <cite><span><i></i></span></cite>
                                        <div class="info-box">
                                            <div class="info-head">
                                                <img src="static/picture/5cde8eb2d871e.png">
                                                <div class="info-data">
                                                    <h6><a href="/portal/columnlist?columeid=14279897415314737">新手专区</a></h6>
                                                    <p>5.5 万 人关注 38 篇文章</p>
                                                    <a data-node="followedBtn" data-columnid="14279897415314737" class="btn btn-blue-border disabled" href="javascript:" style="display:none;">已关注</a>
                                                    <a data-node="followBtn" data-columnid="14279897415314737" class="btn btn-blue-border" href="javascript:" >关注</a>
                                                </div>
                                            </div>
                                            <div class="info-bd">
                                                <p class="desc">专门为新手作者量身定做的创作指南，涵盖网络文学创作最基础的知识要点和最基本的注意事项，带你轻松入门写网文。</p>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                                <h3>

                                    <a
                                            href='/portal/content?caid=5335950904795301&feedType=2&lcid=14279897415314737'  target="_blank">

                                        写网络小说要有多少存稿？
                                    </a>
                                </h3>
                                <p class="desc">

                                    <a
                                            href='/portal/content?caid=5335950904795301&feedType=2&lcid=14279897415314737'  target="_blank">

                                        写书要存多少稿，这完全是因人而异的，不同的情况会有不同的存稿需求。不过，不管怎么样，有一点是肯定的，存稿，是根据个人需求来的，有了需求才需要存稿，如果没有任何需要存稿的原因，那它就是完全没必要的。 如果一味地增加存稿量，不仅会延误发书时间，还会直接地增加作品失败的风险，显然是不可取的。 那么，存稿会有哪些需求因素呢？ 第一个原因，也是最常见的原因，是预防断更，做一个保险。未来会有什么意外情况，谁都说不准，难保有哪些日子写作会受到影响，如果有一些存稿，那更新就不容易中断，对于作品成绩的好处是显而易见的。 当然，不同的作者，发生意外情况的可能性也是大不相同的。比如，某作者是兼职写作，他的本职工作繁忙，三天两头要加班、出差、开会……那显然，他断更的可能就更大，更需要存稿来支撑。而如果是一位生活异常规律的全职作者，这方面的存稿需求就大大降低了。 第二个原因，是为了上推荐做准备。有一些重要位置的推荐，是有存稿量的需求的，有了一定的存稿才能上，而即便编辑没有这样的要求，如果作者能自己多一些存稿，上推时爆发更新一下，推荐效果自然会更好。 所以，这方面的需求，自然是看未来上重要推荐的可能性有多大，如果作品成绩极差，几乎没有被推的可能，那就不需要太多存稿了，平时稳定更新就好。 第三个原因，与上面的类似，是作者个人的爆更需求。比如，他打算月初月末争月票，打算上架后爆发，打算……这些个人的加更需求，当然要存稿来支持。 第四个原因，则是作者的写作速度太慢。如果速度低于一定程度，比如连每天两更都做不到，这对于作品成绩的影响当然是巨大的，尤其对于新书来说。所以，如果速度太慢，但作者又希望能有个不错的成绩，就需要一定的存稿，来保证新书期的一天两更，直到上架之后一段时间，再逐步减少。 以上四条，是存稿的常见需求，除此之外，还可能有一些特殊的需求，比如版权改编的需求。 不管是什么样的作者，在考虑自己的存稿量时，其实无非就是看看自己是否有上述几条的需求，需求又有多大，然后结合自己的写作速度，来计算自己需要保持的存稿数量，以及存稿量的警戒线。 这样有目的的控制存稿量，可以很好地控制风险，增强作品的稳定性，达到利益的最大化。
                                    </a>
                                </p>
                                <div class="total">
                                    <a data-node="collectArticle" data-articleid="5335950904795301"
                                       class="fav " href="javascript:">

                                        <em class="icon-fav">&#xe92e;</em>
                                        <em class="icon-faved">&#xe92d;</em>

                                        <cite data-node="tip" class="icon-hover-tip">收藏</cite>
                                    </a>
                                    <span>2016-09-22 阅读 20.9 万 </span>
                                </div>
                            </div>

                        </li>

                    </ul>

                </div>

                <div class="article-btn-wrap">
                    <a href="/portal/article">查看全部文章</a>
                </div>

            </div>
            <!-- end 左侧 -->
            <!-- start 右侧 -->
            <div class="right-wrap fr">

                <!-- 作家资讯 -->

                <div class="news-wrap mb48">
                    <h3 class="plate-title"><a class="more" href="/portal/news/">更多<em
                                    class="icon-arrow-right">&#xe90d;</em></a><i>作家资讯</i>
                    </h3>
                    <ul>

                        <li>
                            <a href='/portal/newscontent?newsid=16214358205020801' target="_blank">

                                <img src="static/picture/5e4e3ade4ae68.jpg">

                                <p>阅文联合社科院发布《2019网络文学发展报告》</p>
                            </a>
                        </li>

                        <li>
                            <a href='/portal/newscontent?newsid=16145574205488801' target="_blank">

                                <img src="static/picture/5e43bbfdbf0be.jpg">

                                <p>网文传递正能量 阅文战“疫”在行动</p>
                            </a>
                        </li>

                        <li>
                            <a href='/portal/newscontent?newsid=15841893504051801' target="_blank">

                                <img src="static/picture/5e15657700690.png">

                                <p>2019网络文学“十二天王”名单公布</p>
                            </a>
                        </li>

                    </ul>
                </div>

                <!-- 金牌编辑团队 -->
                <div class="banner-wrap team-info mb48">
                    <div class="banner-content team-wrap">
                        <div id="carousel" class="carousel">
                            <div class="slides">

                                <div class="slideItem item1" style="display: block" >
                                    <a href="/portal/college/index" target="_blank"><img src="static/picture/pic01.png"></a>
                                </div>

                                <div class="slideItem item2" >
                                    <a href="/portal/college/index" target="_blank"><img src="static/picture/pic02.png"></a>
                                </div>

                                <div class="slideItem item3" >
                                    <a href="/portal/college/index" target="_blank"><img src="static/picture/pic03.png"></a>
                                </div>

                                <div class="slideItem item4" >
                                    <a href="/portal/college/index" target="_blank"><img src="static/picture/pic04.png"></a>
                                </div>

                                <div class="slideItem item5" >
                                    <a href="/portal/college/index" target="_blank"><img src="static/picture/pic05.png"></a>
                                </div>

                                <div class="slideItem item6" >
                                    <a href="/portal/college/index" target="_blank"><img src="static/picture/pic06.png"></a>
                                </div>

                                <div class="slideItem item7" >
                                    <a href="/portal/college/index" target="_blank"><img src="static/picture/pic07.png"></a>
                                </div>

                                <div class="slideItem item8" >
                                    <a href="/portal/college/index" target="_blank"><img src="static/picture/pic08.png"></a>
                                </div>

                                <div class="slideItem item9" >
                                    <a href="/portal/college/index" target="_blank"><img src="static/picture/pic09.png"></a>
                                </div>

                                <div class="slideItem item10" >
                                    <a href="/portal/college/index" target="_blank"><img src="static/picture/pic10.png"></a>
                                </div>

                                <div class="slideItem item11" >
                                    <a href="/portal/college/index" target="_blank"><img src="static/picture/pic11.png"></a>
                                </div>

                                <div class="slideItem item12" >
                                    <a href="/portal/college/index" target="_blank"><img src="static/picture/pic12.png"></a>
                                </div>

                                <div class="slideItem item13" >
                                    <a href="/portal/college/index" target="_blank"><img src="static/picture/pic14.png"></a>
                                </div>

                                <div class="slideItem item14" >
                                    <a href="/portal/college/index" target="_blank"><img src="static/picture/pic15.png"></a>
                                </div>

                                <div class="slideItem item15" >
                                    <a href="/portal/college/index" target="_blank"><img src="static/picture/pic16.png"></a>
                                </div>

                                <div class="slideItem item16" >
                                    <a href="/portal/college/index" target="_blank"><img src="static/picture/pic17.png"></a>
                                </div>

                                <div class="slideItem item17" >
                                    <a href="/portal/college/index" target="_blank"><img src="static/picture/pic18.png"></a>
                                </div>

                                <div class="slideItem item18" >
                                    <a href="/portal/college/index" target="_blank"><img src="static/picture/pic19.png"></a>
                                </div>

                                <div class="slideItem item19" >
                                    <a href="/portal/college/index" target="_blank"><img src="static/picture/pic20.png"></a>
                                </div>

                                <div class="slideItem item20" >
                                    <a href="/portal/college/index" target="_blank"><img src="static/picture/pic21.png"></a>
                                </div>

                                <div class="slideItem item21" >
                                    <a href="/portal/college/index" target="_blank"><img src="static/picture/pic22.png"></a>
                                </div>

                                <div class="slideItem item22" >
                                    <a href="/portal/college/index" target="_blank"><img src="static/picture/pic23.png"></a>
                                </div>

                                <div class="slideItem item23" >
                                    <a href="/portal/college/index" target="_blank"><img src="static/picture/pic25.png"></a>
                                </div>

                                <div class="slideItem item24" >
                                    <a href="/portal/college/index" target="_blank"><img src="static/picture/pic26.png"></a>
                                </div>

                                <div class="slideItem item25" >
                                    <a href="/portal/college/index" target="_blank"><img src="static/picture/pic32.png"></a>
                                </div>

                                <div class="slideItem item26" >
                                    <a href="/portal/college/index" target="_blank"><img src="static/picture/pic29.png"></a>
                                </div>

                                <div class="slideItem item27" >
                                    <a href="/portal/college/index" target="_blank"><img src="static/picture/pic30.png"></a>
                                </div>

                                <div class="slideItem item28" >
                                    <a href="/portal/college/index" target="_blank"><img src="static/picture/pic31.png"></a>
                                </div>

                                <!-- <div class="slideItem item1" style="display: block">
                                  <a href="javascript:" target="_blank"><img
                                      src="static/picture/50c056141fa34b46b02aae0810179fbc.gif"></a>
                                </div>
                                <div class="slideItem item2">
                                  <a href="javascript:" target="_blank"><img
                                      src="static/picture/50c056141fa34b46b02aae0810179fbc.gif"></a>
                                </div>
                                <div class="slideItem item3">
                                  <a href="javascript:" target="_blank"><img
                                      src="static/picture/50c056141fa34b46b02aae0810179fbc.gif"></a>
                                </div>
                                <div class="slideItem item4">
                                  <a href="javascript:" target="_blank"><img
                                      src="static/picture/50c056141fa34b46b02aae0810179fbc.gif"></a>
                                </div>
                                <div class="slideItem item5">
                                  <a href="javascript:" target="_blank"><img
                                      src="static/picture/50c056141fa34b46b02aae0810179fbc.gif"></a>
                                </div>
                                <div class="slideItem item6">
                                  <a href="javascript:" target="_blank"><img
                                      src="static/picture/50c056141fa34b46b02aae0810179fbc.gif"></a>
                                </div>
                                <div class="slideItem item7">
                                  <a href="javascript:" target="_blank"><img
                                      src="static/picture/50c056141fa34b46b02aae0810179fbc.gif"></a>
                                </div> -->
                            </div>
                            <div class="description">

                                <div class="desc-wrap item1" style="display: block">
                                    <a href="/portal/college/index" target="_blank">林庭锋 |
                                        宝剑锋</a>
                                </div>

                                <div class="desc-wrap item2" style="display: block">
                                    <a href="/portal/college/index" target="_blank">侯庆辰 |
                                        意者</a>
                                </div>

                                <div class="desc-wrap item3" style="display: block">
                                    <a href="/portal/college/index" target="_blank">杨晨 |
                                        314</a>
                                </div>

                                <div class="desc-wrap item4" style="display: block">
                                    <a href="/portal/college/index" target="_blank">周炳林 |
                                        小分队长</a>
                                </div>

                                <div class="desc-wrap item5" style="display: block">
                                    <a href="/portal/college/index" target="_blank">田志国 |
                                        TZG</a>
                                </div>

                                <div class="desc-wrap item6" style="display: block">
                                    <a href="/portal/college/index" target="_blank">杨沾 |
                                        雪夜</a>
                                </div>

                                <div class="desc-wrap item7" style="display: block">
                                    <a href="/portal/college/index" target="_blank">李晓亮 |
                                        胡说</a>
                                </div>

                                <div class="desc-wrap item8" style="display: block">
                                    <a href="/portal/college/index" target="_blank">邓鄂闽 |
                                        Zenk</a>
                                </div>

                                <div class="desc-wrap item9" style="display: block">
                                    <a href="/portal/college/index" target="_blank">罗熙 |
                                        安逸</a>
                                </div>

                                <div class="desc-wrap item10" style="display: block">
                                    <a href="/portal/college/index" target="_blank">韦必印 |
                                        长天</a>
                                </div>

                                <div class="desc-wrap item11" style="display: block">
                                    <a href="/portal/college/index" target="_blank">陈立波 |
                                        悟道</a>
                                </div>

                                <div class="desc-wrap item12" style="display: block">
                                    <a href="/portal/college/index" target="_blank">魏来 |
                                        锐利</a>
                                </div>

                                <div class="desc-wrap item13" style="display: block">
                                    <a href="/portal/college/index" target="_blank">许洪 |
                                        一索</a>
                                </div>

                                <div class="desc-wrap item14" style="display: block">
                                    <a href="/portal/college/index" target="_blank">杜剑波 |
                                        太山</a>
                                </div>

                                <div class="desc-wrap item15" style="display: block">
                                    <a href="/portal/college/index" target="_blank">郑德辉 |
                                        五月</a>
                                </div>

                                <div class="desc-wrap item16" style="display: block">
                                    <a href="/portal/college/index" target="_blank">胡海浪 |
                                        饼干</a>
                                </div>

                                <div class="desc-wrap item17" style="display: block">
                                    <a href="/portal/college/index" target="_blank">彭继侠 |
                                        绿豆</a>
                                </div>

                                <div class="desc-wrap item18" style="display: block">
                                    <a href="/portal/college/index" target="_blank">冯琦 |
                                        竹子</a>
                                </div>

                                <div class="desc-wrap item19" style="display: block">
                                    <a href="/portal/college/index" target="_blank">卢瑾 |
                                        豆腐</a>
                                </div>

                                <div class="desc-wrap item20" style="display: block">
                                    <a href="/portal/college/index" target="_blank">于莉 |
                                        蒜苗</a>
                                </div>

                                <div class="desc-wrap item21" style="display: block">
                                    <a href="/portal/college/index" target="_blank">吴筱 |
                                        笑笑</a>
                                </div>

                                <div class="desc-wrap item22" style="display: block">
                                    <a href="/portal/college/index" target="_blank">林家羽 |
                                        陆陆</a>
                                </div>

                                <div class="desc-wrap item23" style="display: block">
                                    <a href="/portal/college/index" target="_blank">易媛媛 |
                                        闲庭</a>
                                </div>

                                <div class="desc-wrap item24" style="display: block">
                                    <a href="/portal/college/index" target="_blank">吴亚玲 |
                                        狐小狸</a>
                                </div>

                                <div class="desc-wrap item25" style="display: block">
                                    <a href="/portal/college/index" target="_blank">朱娅娇 |
                                        乔乔</a>
                                </div>

                                <div class="desc-wrap item26" style="display: block">
                                    <a href="/portal/college/index" target="_blank">温旎 |
                                        花椒</a>
                                </div>

                                <div class="desc-wrap item27" style="display: block">
                                    <a href="/portal/college/index" target="_blank">高皓玥 |
                                        香菜</a>
                                </div>

                                <div class="desc-wrap item28" style="display: block">
                                    <a href="/portal/college/index" target="_blank">李晓辉 |
                                        韭芽</a>
                                </div>


                                <!-- <div class="desc-wrap item2">
                                  <a href="//book.qidian.com/info/1011471282" target="_blank">林庭2 | 宝剑2</a>
                                </div>
                                <div class="desc-wrap item3">
                                  <a href="//book.qidian.com/info/1011471282" target="_blank">林庭3 | 宝剑3</a>
                                </div>
                                <div class="desc-wrap item4">
                                  <a href="//book.qidian.com/info/1011471282" target="_blank">林庭4 | 宝剑4</a>
                                </div>
                                <div class="desc-wrap item5">
                                  <a href="//book.qidian.com/info/1011471282" target="_blank">林庭5 | 宝剑5</a>
                                </div>
                                <div class="desc-wrap item6">
                                  <a href="//book.qidian.com/info/1011471282" target="_blank">林庭6 | 宝剑6</a>
                                </div>
                                <div class="desc-wrap item7">
                                  <a href="//book.qidian.com/info/1011471282" target="_blank">林庭7 | 宝剑7</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <a href="/portal/college/index" target="_blank">
                        <h3>金牌编辑团队</h3>
                        <p>数百名专业编辑，助力你踏上写作之旅</p>
                    </a>
                </div>
                <!-- 作家福利体系 -->
                <div class="banner-wrap welfare-info mb48">
                    <div class="banner-content welfare">
                        <div class="three-slide-wrap" id="j-siteWrap">
                            <ul id="j-siteSlide" class="roundabout roundabout-holder" style="display: block; position: relative;">
                                <li class="site1 roundabout-moveable-item">
                                    <a href="http://pages.book.qq.com/pages/2015/cssp/theme1.html" target="_blank">
                                        <span class="cs-logo"></span>
                                    </a>
                                </li>
                                <li class="site2 roundabout-moveable-item">
                                    <a href="http://images.xxsy.net/xxhtml/zuozhefulinew/index.html" target="_blank">
                                        <span class="xxsy-logo"></span>
                                    </a>
                                </li>
                                <li class="site3 roundabout-moveable-item">
                                    <a href="https://acts.qidian.com/zt/ploy/20150520qdsp/theme1.htm" target="_blank">
                                        <span class="qd-logo"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="info-text" id="j-infoText">
                        <dl>
                            <dd>
                                <a href="http://pages.book.qq.com/pages/2015/cssp/theme1.html" target="_blank">
                                    <h3>作家福利体系</h3>
                                    <p>“创世中文网”签约作家福利体系介绍
                                    </p>
                                </a>
                            </dd>
                            <dd>
                                <a href="http://images.xxsy.net/xxhtml/zuozhefulinew/index.html" target="_blank">
                                    <h3>作家福利体系</h3>
                                    <p>“潇湘书院”签约作家福利体系介绍
                                    </p>
                                </a>
                            </dd>
                            <dd>
                                <a href="https://acts.qidian.com/zt/ploy/20150520qdsp/theme1.htm" target="_blank">
                                    <h3>作家福利体系</h3>
                                    <p>“起点中文网”签约作家福利体系介绍</p>
                                </a>
                            </dd>
                        </dl>
                    </div>
                </div>
                <!-- 下载作家助手-->
                <div class="banner-wrap app mb48">
                    <div class="qr-wrap">
                        <a href="https://a.app.qq.com/o/simple.jsp?pkgname=com.yuewen.authorapp" target="_blank">
                            <p>扫描二维码下载
                                <br>作家助手 APP</p>
                            <img src="static/picture/app_qr@2x.jpg">
                        </a>
                    </div>
                    <div class="banner-content">
                        <a href="javascript:"><img src="static/picture/app@2x.jpg"></a>
                    </div>
                    <h3>下载作家助手 <span class="icon-qr">&#xe907;</span></h3>
                    <p>随时随地，全民写作</p>
                </div>
                <!-- 微信公众号 -->
                <div class="mp-wrap">
                    <h3 class="plate-title"><i>微信公众号</i></h3>
                    <div class="mp-list">
                        <ul>
                            <li>
                                <img src="static/picture/author_ewm.jpg">
                                <div class="info">
                                    <h3>作家助手公众号</h3>
                                    <p>网文行业最权威的编辑团队提供全方位创作支持，各类咨询第一时间回复，定期分享业内最权威信息。</p>
                                </div>
                            </li>
                            <li>
                                <img src="static/picture/yc_ewm.jpg">
                                <div class="info">
                                    <h3>杨晨说网文公众号</h3>
                                    <p>杨晨笔名314，起点中文网总编，阅读原创行业分析、写作指导，更有机会与总编大大直接对话。</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end 右侧 -->
        </div>
    </div>
</div>
<div class="footer" id="j-siteFooter">
    <div class="box-center">
        <div class="footer-bd">
            <div class="box-center">
                <div class="site-list">
                    <h3>阅文集团旗下品牌</h3>
                    <ul>
                        <li><a href="//www.qidian.com" target="_blank">起点中文网</a></li>
                        <li><a href="//www.readnovel.com" target="_blank">小说阅读网</a></li>
                        <li><a href="//www.xxsy.net" target="_blank">潇湘书院</a></li>
                        <li><a href="http://yunqi.qq.com" target="_blank">云起书院</a></li>
                        <li><a href="https://www.yuewen.com/app.html#appqq" target="_blank">QQ阅读</a></li>
                        <li><a href="//www.qdmm.com" target="_blank">起点女生网</a></li>
                        <li><a href="https://www.yuewen.com/app.html#appwbn" target="_blank">起点海外版</a></li>
                        <li><a href="//www.tingbook.com" target="_blank">天方听书网</a></li>
                        <li><a href="//www.xs8.cn" target="_blank">言情小说吧</a></li>
                        <li><a href="https://www.yuewen.com/app.html#appqd" target="_blank">起点读书</a></li>
                        <li><a href="http://chuangshi.qq.com" target="_blank">创世中文网</a></li>
                        <li><a href="//www.hongxiu.com" target="_blank">红袖添香</a></li>
                        <li><a href="//www.lrts.me/" target="_blank">懒人听书</a></li>
                        <li><a href="http://yuedu.yuewen.com" target="_blank">阅文悦读</a></li>
                        <li><a href="https://www.yuewen.com/app.html#appzj" target="_blank">作家助手</a></li>
                    </ul>
                    <div class="foot-logo"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-ft">
        <div class="box-center cf">
            <p class="copy-right fr">© 2020 阅文集团 版权所有</p>
            <div class="footer-info">
                <a href="/contentv2/about/help_center.html" target="_blank">帮助中心</a>
                <a href="https://www.yuewen.com/service.html" target="_blank">联系我们</a>
                <a href="https://www.yuewen.com/#&copyright" target="_blank">关于我们</a>
                <a href="https://join.yuewen.com/" target="_blank">诚聘英才</a>
                <a href="/contentv2/about/copyright.html" target="_blank">版权信息</a>
            </div>
        </div>
    </div>
</div>

<div class="right-float-wrap" id="j-rightFloatWrap">
    <ul>

        <li id="j-goTop"><a class="icon-go-top">&#xe931;</a></li>
    </ul>
</div>

<!-- 公用js -->
<script src="static/js/jquery.js"></script>
<script src="static/js/jquery.cookie.js"></script>



<script src="static/js/util.js"></script>
<script src="static/js/dialog.js"></script>
<script src="static/js/ajax.js"></script>
<script src="static/js/header.js"></script>
<script src="static/js/common.js"></script>
<script src="static/js/qrcode.min.js"></script>
<script src="static/js/browser.js"></script>
<script src="static/js/tucao.js"></script>
<script>
    function tucao() {
        var cauthorid = ''
        if (cauthorid == null || cauthorid == '') {
            window.location.href = '/public/login.html?artidx=-100';
        } else {
            var _browser = CS.browser;

            var data = {
                "nickname": '',
                "avatar": "",
                "openid": '',
                "os": _browser.detectOS(),
                "clientInfo": _browser.browserType(),
                "clientVersion": _browser.browserType(),
                "customInfo": '' + ''
            };
            var productId = 1924;
            Tucao.request(productId, data);
        }
    }

</script>

<script src="static/js/ieversiondetect.js"></script>
<script>
    var islowversionie = IEVersion() < 10 && IEVersion() != -1;
    if (islowversionie) {
        new Dialog().alert('\
      <h6>浏览器需要升级</h6>\
      <p>你的浏览器版本较低，为保障页面的正常使用，请点击下方浏览器设置按钮查看具体步骤或下载使用<a class="ui-color-blue" target="_blank" href="https://www.google.cn/intl/zh-CN/chrome/">谷歌浏览器</a></p>'
            , {
                type: 'remind',
                buttons: [{
                    value: '浏览器设置',
                    events: function (event) {
                        window.location.href = '/portal/browserguide'
                    }
                }, {
                    value: '不再提醒',
                    events: function (event) {
                        event.data.dialog.remove()
                    }
                }]
            })
    }

</script>
<script src="static/js/detectbrowser1.js"></script>
<script>
    var browser = detectBrowser(navigator.userAgent);
    $.ajax({
        type: 'post',
        url: '/portal/domesticsite?service=writeqqindexservice&action=authorbrowserinfo',
        data: "{" +
            "\"browser\": \"" + browser.browser + "\"," +
            "\"device\": \"" + browser.device + "\"," +
            "\"engine\": \"" + browser.engine + "\"," +
            "\"language\": \"" + browser.language + "\"," +
            "\"os\": \"" + browser.os + "\"," +
            "\"osVersion\": \"" + browser.osVersion + "\"," +
            "\"version\": \"" + browser.version + "\"," +
            "\"allinfo\": \"" + navigator.userAgent + "\"" +
            "}",
        contentType: "application/json",
        dataType: 'json'
    });
</script>
<script src="static/js/swiper.min.js"></script>
<script src="static/js/carousel.js"></script>
<script src="static/js/roundabout.js"></script>
<script src="static/js/index.js"></script>

<script>
    window.yconfig = {
        isLogin: false
    }
</script>
<script type="text/javascript">
    var _mtac = {
        "performanceMonitor": 1
    };
    (function () {
        var mta = document.createElement("script");
        mta.src = "//pingjs.qq.com/h5/stats.js?v2.0.4";
        mta.setAttribute("name", "MTAH5");
        mta.setAttribute("sid", "500659219");
        mta.setAttribute("cid", "500664628");
        var s = document.getElementsByTagName("script")[0];
        s
            .parentNode
            .insertBefore(mta, s);
    })();
</script>
</body>
</html>