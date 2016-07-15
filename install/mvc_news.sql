-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 07 月 14 日 14:05
-- 服务器版本: 5.5.44-MariaDB
-- PHP 版本: 5.4.16

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `mvc_news`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'root', 'root'),
(3, 'administrator', '586748264');

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `author` varchar(20) NOT NULL,
  `from` varchar(20) NOT NULL,
  `content` text NOT NULL,
  `date` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`id`, `title`, `author`, `from`, `content`, `date`) VALUES
(7, '习近平对马克思主义政治经济学的新贡献', '学习中国', '中央党校', '马克思主义政治经济学从诞生至今已有150年，以其为基础理论指导的新中国经济建设也走过了67个春秋，在此期间，我们取得了实践和理论双丰收。我们造就了经济总量增长5610倍的人类奇迹，特别是38年的改革开放为世界树立了经济转型发展的最好榜样；我们总结新实践、发现新规律，不断拓展和创新当代中国马克思主义理论，为人类发展创建新的科学理论。党的十八大以来，以习近平同志为总书记的党中央，深入研究世界经济和我国经济面临的新情况新问题新规律，并不断进行理论提升，为马克思主义政治经济学的创新发展贡献出中国智慧，开拓了马克思主义政治经济学新境界，逐步形成了当代中国特色社会主义政治经济学。7月8日，习近平在主持经济形势专家座谈会时指出：“坚持和发展中国特色社会主义政治经济学，要以马克思主义政治经济学为指导，总结和提炼我国改革开放和社会主义现代化建设的伟大实践经验，同时借鉴西方经济学的有益成分。中国特色社会主义政治经济学只能在实践中丰富和发展，又要经受实践的检验，进而指导实践。要加强研究和探索，加强对规律性认识的总结，不断完善中国特色社会主义政治经济学理论体系，推进充分体现中国特色、中国风格、中国气派的经济学科建设。”请随“学习中国”小编一起学习。\r\n[图一、2015年12月31日，新年前夕，国家主席习近平通过中国国际广播电台、中央人民广播电台、中央电视台发表二〇一六年新年贺词。.png]\r\n\r\n图为：2015年12月31日，新年前夕，国家主席习近平通过中国国际广播电台、中央人民广播电台、中央电视台发表二〇一六年新年贺词。\r\n　　一、明确了根本立场\r\n　　马克思主义政治经济学从不隐晦自己的立场和价值取向，这就是无产阶级和广大人民群众的立场，就是为最广大人民谋福利的价值取向。践行以人民为中心的发展思想，是党的十八届五中全会首次提出来的，体现了我们党全心全意为人民服务的根本宗旨，体现了人民是推动发展的根本力量的唯物史观。习近平指出：“要坚持以人民为中心的发展思想，这是马克思主义政治经济学的根本立场。要坚持把增进人民福祉、促进人的全面发展、朝着共同富裕方向稳步前进作为经济发展的出发点和落脚点,部署经济工作、制定经济政策、推动经济发展都要牢牢坚持这个根本立场。”\r\n　　马克思的政治经济学虽然以资本主义作为研究对象，但它一开始就根植于无产阶级解放运动的土壤中，服务于人民，因而具有鲜明的人民主体性。中国特色社会主义政治经济学脱胎于马克思主义政治经济学，流淌的是马克思主义政治经济学的血液，因而，以人民为中心的发展思想也是其根本立场。以人民为中心的发展思想，是指全体人民都是社会主义物质文明、精神文明、社会文明和生态文明的参与者、建设者、推动者，同时又是平等分享经济社会发展成果的主人。脱离以人民为中心的发展思想，中国特色社会主义政治经济学就不是马克思主义的，也肯定不是社会主义性质的。\r\n[插图一.jpg]\r\n　　历史唯物主义认为，“历史活动是群众的事业”，决定历史发展的是“行动着的群众”。中国特色社会主义的一切实践必须以人民为中心。党的十八大以来，习近平总书记站在新的历史起点，多次强调以人民为中心的根本立场。关于坚持以人民为中心的重大意义，他指出，“坚持人民主体地位，充分调动人民积极性，始终是我们党立于不败之地的强大根基”；关于人民群众的巨大力量，他指出，“人民是历史的创造者，群众是真正的英雄。人民群众是我们力量的源泉”；关于保障人民主体地位，他指出，“要随时随刻倾听人民呼声、回应人民期待，保证人民平等参与、平等发展权利，维护社会公平正义”；关于维护人民群众利益，他指出，要“使发展成果更多更公平惠及全体人民”，“让人民更有获得感”；关于我们党和人民群众的关系，他指出，“人民对美好生活的向往就是我们的奋斗目标”，“我们党的最大政治优势是密切联系群众，党执政后的最大危险是脱离群众。”这些重要论述体现了我们党对于坚持以人民为中心的发展思想的清醒认识和一贯坚持，铸就了中国特色社会主义政治经济学的本质规定。', 1468304123),
(8, '在南苏丹遇袭、受伤的四级军士长杨树朋抢救无效牺牲', 'admin', '央视', '\r\n\r\n央视快讯：当地时间10日9点24分，在南苏丹遇袭的中国维和战士、受伤的四级军士长杨树朋，因抢救无效牺牲。\r\n\r\n当地时间7月10日，南苏丹首都朱巴市区交火持续进行，中国维和步兵营在外执勤分队执行联合国维和任务期间，突然遭受袭击，造成一名人员牺牲，6名人员受伤，其中3人重伤、3人轻伤。\r\n\r\n在这次遭受武装分子袭击中，中国维和步兵营下士李磊光荣牺牲，上士姚道祥、中士吴乐、下士宋晓辉、下士霍亚会、上士陈英受伤，四级军士长杨树朋抢救无效牺牲。\r\n\r\n早前报道：\r\n\r\n人民网北京7月11日电  据国防部新闻局官方微博“国防部发布”消息，7月10日，南苏丹政府军与反政府军继续在首都朱巴交火。当地时间18时39分，我赴南苏丹维和步兵营1辆装甲车在联南苏团总部营地执行难民营警戒任务时，突遭一发炮弹袭击，造成中国维和人员1人牺牲、3人重伤、3人轻伤。\r\n\r\n中国军队对上述袭击深感震撼并予以强烈谴责，对牺牲人员深感悲痛并深表哀悼，对受伤人员及上网人员家属表示诚挚慰问。\r\n\r\n事件发生后，中国军队立即启动应急机制，我维和分队已经组织对伤员全力抢救，并进一步加强安全防范措施。\r\n\r\n据中央电视台新闻中心官方微博报道，在这次遭受武装分子袭击中，中国维和步兵营下士李磊头部胸部重伤，抢救无效牺牲。上士姚道祥、中士吴乐、下士宋晓辉、下士霍亚会、上士陈英、四级军士长杨树朋受伤。 \r\n\r\n《解放军报》法人微博也发布消息，让我们深切缅怀在南苏丹首都执行维和任务中不幸牺牲的战友李磊——来自第20集团军杨根思生前所在部队的一名优秀士兵。英雄一路走好！我们和您的家人一样悲痛！今日中国由大向强，彰显大国担当，维和世界和平，李磊战友用生命书写了中国军人的担当！\r\n', 1468304121),
(9, '洪灾致长江流域4900多万人受灾 222人死亡失踪', 'administrator', '新华网', '新华社北京7月11日电 记者11日从长江防总防汛新闻发布会上了解到，今年入汛以来，长江流域经历多轮强降雨，多地发生严重洪涝灾害，截至目前已经造成4900多万人受灾，222人因灾死亡失踪。\n&lt;p&gt;　　长江防汛抗旱总指挥部办公室副主任陈敏在发布会上通报，今年3月入汛以来，长江流域共发生27次较强的降雨过程，流域降雨较多年同期均值偏多近\n两成，而长江下游干流地区则偏多1倍，持续强降雨造成长江流域140条河流发生过超警戒以上洪水，其中19条河流发生超保证水位。&lt;/p&gt;\n&lt;p&gt;　　7月1日和3日，长江1号洪峰和2号洪峰先后在长江上游和中下游形成。其中2号洪水期间，长江中下游干流监利至大通江段水位全线超警戒，这是1999年以来第一次出现中下游干流全线超警现象。&lt;/p&gt;&lt;div class=&quot;ad250x250 fLeft marRig10&quot; id=&quot;adPp&quot;&gt;\n\n\n\n	\n	\n	\n	\n\n\n	\n\n\n&lt;/div&gt;\n\n&lt;p&gt;　　截至7月10日，长江流域湖北、安徽、湖南、江西、重庆、四川、贵州、江苏、云南、陕西等10个省(市)的625个县(市、区)遭受洪涝灾害，\n受灾人口约4919万，倒塌房屋11万间，农作物受灾面积4167多千公顷。水利设施损毁严重，大中型水库受损4座，小型水库受损403座，小(2)型水\n库垮坝2座。因洪涝灾害造成161人死亡，61人失踪，主要原因是强降雨导致的房屋倒塌和中小河流洪水、山洪灾害。\n&lt;/p&gt;&lt;p&gt;　　据陈敏介绍，这些损失超过六成主要集中在6月30日至7月10日期间。截至目前，流域内相关省市累计紧急转移危险区群众289万人，解救洪水围困群众87万人，有效避免了更多的人员伤亡。\n&lt;/p&gt;&lt;p&gt;　　根据长江水文局长江水文情报预报中心介绍，13日开始长江流域将迎来新一轮强降雨过程，而主雨区集中在中下游流域，这将加剧当前防汛形势。目前，长江中下游五省共有400万人坚守在长江干堤一线，其中普通群众370万人，机关干部20万人，部队官兵约10万人。\n&lt;/p&gt;&lt;p&gt;　　今年以来，长江中下游沿江各地全民动员，共同抵御洪灾，已经累计投入抢险人数600多万人次，投入动力15万台班，编织袋4030万条，沙石料、木材累计700万立方米，钢材2550吨等，总物资消耗折算资金26亿元。\n&lt;/p&gt;&lt;p&gt;　　台风“尼伯特”已经远去，但是由于太湖流域和山塘水库继续高水位，加之未来几日雨情可能导致水位继续上涨，浙江省防汛抗旱指挥部11日维持防汛Ⅲ级应急响应。\n&lt;/p&gt;&lt;p&gt;　　4月以来浙江持续降雨，全省平均降雨量达842毫米，比常年同期偏多43.5%，其中杭嘉湖地区平均降雨量比同期偏多88%，加上台风“尼伯特”带来的增雨，太湖水位超保证并持续上涨。杭州杭嘉湖东部平原水位自4月7日以来普遍超警，嘉兴站累计超警已达两月余。\n&lt;/p&gt;&lt;p&gt;　　尽管抓住台风过后短暂降雨停歇时机全力排水，但是太湖水位回落缓慢。11日8时太湖水位4.82米，继续维持高水位。未来雨情并不乐\n观，来自浙江省气象台的最新预测显示，11－14日浙北地区仍有分散性的阵雨天气，15日起自北而南还有较明显降雨。太湖局预报，由于未来几天的降雨情\n况，太湖水位可能继续上涨，接近历史最高水位4.97米。\n&lt;/p&gt;&lt;p&gt;　　湖州、嘉兴两地积极采取措施，环湖大堤都已按“百米一人”制度开展巡查，袋类、桩木、水泵、机动船等防汛物资装备也已准备就绪。杭嘉湖南排工程超常规调度，全力做好预排预泄及涝水抢排工作，当前正以每天3200万立方米的强度外排。\n&lt;/p&gt;&lt;p&gt;　　记者从11日下午召开的黑龙江省2016年第一次防汛新闻发布会上获悉，根据黑龙江省气象、水文部门的分析预测，今年黑龙江省嫩江干流下游、松花江干流上游不排除发生流域性洪水的可能性，受异常天气影响，需防范局地突降暴雨引发的山洪、中小河流洪水、城市内涝等灾害。\n&lt;/p&gt;&lt;p&gt;　　目前，黑龙江省水利厅抽调163名工作人员成立防汛工作机构。黑龙江全省已清除围堤878公里，防汛物资储备总值达到3.11亿元。\n&lt;/p&gt;&lt;p&gt;　　内&lt;a href=&quot;http://country.huanqiu.com/mongolia&quot; class=&quot;linkAbout&quot; target=&quot;_blank&quot; title=&quot;蒙古&quot;&gt;蒙古&lt;/a&gt;呼和浩特11日出现暴雨天气。截至16时，暴雨致呼和浩特多个位置出现内涝。气象部门发布暴雨红色预警，3小时内呼和浩特西部降雨量将达到100毫米以上。\n&lt;/p&gt;　　目前，暴雨天气已致呼和浩特白塔机场8架次航班备降外场，致呼和浩特站、包头站17趟列车晚点。内蒙古气象部门提醒，需做好防暴雨准备工作及排涝工作。（记者 黄艳、屈凌燕、王建、王靖、冯源、俞菀）\n                        ', 1468302160),
(10, 'Smarty 3.1.25 发布，PHP 模板引擎', 'root', '开源中国社区', 'Smarty 3.1.25 发布，主要是 Bug 修复、代码优化。详细更新内容请看更新日志，下载：https://github.com/smarty-php/smarty/releases/tag/v3.1.25。\r\n\r\nsmarty 是一个基于PHP开发的PHP模板引擎。它提供了逻辑与外在内容的分离，简单的讲，目的就是要使 用PHP程序员同美工分离,使用的程序员改变程序的逻辑内容不会影响到美工的页面设计，美工重新修改页面不会影响到程序的程序逻辑，这在多人合作的项目中 显的尤为重要。', 1468304460);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
