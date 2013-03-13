-- phpMyAdmin SQL Dump
-- version 3.4.3.2
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 03 月 13 日 18:15
-- 服务器版本: 5.1.52
-- PHP 版本: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `itquaner`
--

-- --------------------------------------------------------

--
-- 表的结构 `i_artical`
--

CREATE TABLE IF NOT EXISTS `i_artical` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` char(255) NOT NULL DEFAULT '' COMMENT '标题',
  `img` char(255) NOT NULL DEFAULT '' COMMENT '缩略图',
  `source` char(255) NOT NULL DEFAULT '' COMMENT '来源地址',
  `user_id` int(11) NOT NULL DEFAULT '0' COMMENT '用户id',
  `user_name` char(30) NOT NULL DEFAULT '' COMMENT '昵称',
  `add_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '添加时间',
  `update_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP COMMENT '最后更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- 转存表中的数据 `i_artical`
--

INSERT INTO `i_artical` (`id`, `title`, `img`, `source`, `user_id`, `user_name`, `add_time`, `update_time`) VALUES
(1, '动点科技', 'http://m2.img.libdd.com/farm4/2013/0306/15/52DF8FAB489B83F3C4E263695C155027D95035650E67B_300_200.JPEG', 'http://cn.technode.com/', 1, 'admin', '0000-00-00 00:00:00', '2013-03-07 09:24:59'),
(2, '1个多月10万用户！“对爱”告诉你如何借势微信', 'http://m2.img.libdd.com/farm5/2013/0304/23/63D6EB1C4C21BCB14BDB70222D7AD29473F2CA839700C_248_238.PNG', 'http://cn.technode.com/post/2013-03-04/40048869699', 1, 'zhangli', '2011-12-31 16:00:00', '2013-03-07 10:23:44'),
(3, '', '', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '啊', '', 'http://www.lamper.cn', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, '啊', '', 'http://www.lamper.cn', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, '啊', '', 'http://www.lamper.cn', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, '啊', '', 'http://www.lamper.cn', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, '啊', '', 'http://www.lamper.cn', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, '啊', '', 'http://www.lamper.cn', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, '啊', '', 'http://www.lamper.cn', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, '啊', '', 'http://www.lamper.cn', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, '啊', '', 'http://www.lamper.cn', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, '啊', '', 'http://www.lamper.cn', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, '啊', '', 'http://www.lamper.cn', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, '啊', '', 'http://www.lamper.cn', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, '阿里巴巴新CEO——陆兆禧', '', 'http://t.cn/zY3wKKm', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'aaa', '', 'http://www.lamper.cn', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'aaa', '', 'http://www.lamper.cn', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'aaa', '', 'http://www.lamper.cn', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Yii笔记十三 filters 程序流程', '', 'http://www.lamper.cn', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, '的', '', 'http://www.lamper.cn', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'asdfsa', '', 'http://www.lamper.cn', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'asdfasd', 'asdfasf', 'http://www.lamper.cn', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, '的', '', 'http://www.lamper.cn', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, ' 查看宝贝详情', '', 'http://www.lamper.cn', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `i_artical_content`
--

CREATE TABLE IF NOT EXISTS `i_artical_content` (
  `artical_id` int(11) NOT NULL DEFAULT '0',
  `content` text NOT NULL,
  PRIMARY KEY (`artical_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='文章内容';

--
-- 转存表中的数据 `i_artical_content`
--

INSERT INTO `i_artical_content` (`artical_id`, `content`) VALUES
(1, 'Windows Phone 8原创应用大赛是由微软、诺基亚和芬兰阿斯托大学共同举办的全球移动应用加速项目AppCampus的一部分。\r\n\r\n \r\n\r\nAppCampus是全球最大的移动应用加速项目，微软和诺基亚将在未来3年内为该项目投资约1800万欧元，奖励那些在Windows Phone平台上开发独特创新应用且具有高度影响力的移动应用开发者。\r\n\r\n \r\n\r\nWindows Phone 8原创应用大赛将评选出一等奖1名（奖金7万欧元），二等奖2名（奖金5万欧元），三等奖2名（奖金2万欧元），优胜奖15名（Windows Phone 8手机一部）。'),
(2, '编者：对爱是位于杭州的一家婚恋网站，2011年8月上线。在2013年之前，它在线上婚恋市场中一直处于追赶者角色。\r\n\r\n \r\n\r\n2013年1月17日登录微信平台后，短短一个多月的时间，对爱就获得了近10万订阅用户，其联合创始人郑志诚甚至称“微信拯救了对爱”。关于对爱在微信平台的玩法可参见我们之前的首发报道。\r\n\r\n \r\n\r\n下面的文章即来自郑志诚，分享了他们在微信平台的经验和收获。\r\n\r\n \r\n\r\n先入为主\r\n\r\n \r\n\r\n对爱从2011年8月开始，已经努力了一年半时间，中间历经网站、开放平台、APP三个终端，虽然也取得了一点成绩，但做得很辛苦，一直跟在先行者后面苦苦追赶。\r\n\r\n \r\n\r\n而直到微信对爱推出之后，才真真切切感受到当先行者的好处。具体来说，一个平台上的先行者能在四个方面占到不小的便宜：\r\n\r\n \r\n\r\n1）媒体报道：自从对爱公众账号推出之后，我们在短短一个月时间就获得了动点科技、36kr、雷锋网、凤凰科技等32家新老媒体的报道，这比我们之前一年半时间获得报道次数都多。\r\n\r\n \r\n\r\n2)用户增长：受益于媒体的广泛报道和交友需求的刚性。微信对爱上线第一周，微信粉丝即突破两万。每天用户发过来几万条信息，最高一天用户增长近万，一度还因为粉丝增长异常被微信封号。\r\n\r\n \r\n\r\n3)品牌传播：在我们的努力和众多朋友的支持下，对爱已经初步树立起微信交友应用中的佼佼者地位，相信后面会对我们争取到微信平台的资源扶持有所助力。\r\n\r\n \r\n\r\n4)融资助益：在我们推出微信对爱之前，鲜有投资人问津，但光上周就有7名投资人找上门来，比过去一年加起来还多。\r\n\r\n \r\n\r\n这里想分享的经验就是“先入为主”，先是天时，主是地利，如果再能争取到平台的资源扶持，那就是人和。在一个新兴平台上创业的好处在于，能通过先行进入，将天时转化为地利，然后就能积累更多的资源以将地利转化为人和，而当天时、地利、人和都具备的时候，你想不成功都难。\r\n\r\n \r\n\r\n从我们自己的案例想开去，以后Wechat App Store上，会不会出现微信版的世纪佳缘、大众点评、知乎乃至微信版的口袋购物、墨迹天气、唱吧等等呢？\r\n\r\n \r\n\r\n我们觉得非常有可能，因为用户在这里，需求就在这里，需求还未得到满足，创业者的机会就在这里。\r\n\r\n \r\n\r\n靠产品说话\r\n\r\n \r\n\r\n机会在这里，但是能不能把握住，还要靠产品说话。\r\n\r\n \r\n\r\n如果只是把现有网站或应用照搬过来，一点机会也没有，因为之前的东西是反微信平台特性的。比如说，微信平台很大的一个特点是用户输入手段很丰富，但应用输出手段相对单一，用户输入的可以是表情、图片、视频、位置、语音等等，但我们回复给用户却只能是图文等，这跟网页和应用恰恰相反。\r\n\r\n \r\n\r\n微信平台的特性有很多，如果不能对这些特性善加利用，肯定会重蹈平台变革期一些巨头的覆辙。以腾讯自己为例子，手机QQ的没落，是因为它在用网页的思维做手机应用。举个简单的细节，手机QQ的导航最初是在上部，有那么好几次，我就为了点那个导航而致使手机掉在了地上。每当此时，我就暗暗咒骂这样逆天的产品不被淘汰，简直是天理不容！后面也确实如此。\r\n\r\n \r\n\r\n你是不是准备用网页端的思维去把握微信中的新机会？还是准备用手机APP的思维去把握？抑或是让我们的产品去适应微信平台的特性，以求得新生？\r\n\r\n '),
(5, '啊'),
(6, '啊'),
(7, '啊'),
(10, '订单'),
(11, '订单啊啊啊'),
(12, '订单啊啊啊'),
(13, '订单啊啊啊'),
(14, '啊'),
(15, '阿斯顿发斯蒂芬'),
(16, '【阿里巴巴新CEO——陆兆禧】阿里巴巴集团董事局刚刚宣布宣布，2013年5月10日起，集团首席数据官陆兆禧将接任阿里巴巴集团CEO一职。恭喜！比较购物搜索引擎"一起搜"http://t.cn/zY3wKKm'),
(18, 'asdfsdf'),
(19, 'asdfsdf'),
(20, '个方法没有做什么实质性的动作，它只是把你将要执行的过滤方法方法名或者过滤类的类名返回给CController。 我们先看使用方法的方式，也即上面代码里的’inlineFilterName’含义，这个inlineFilterName意思是在当前控制器的类中有一个inlineFilterName(）方法，该方法里就是你要执行的过滤规则，比如：当前在TestController里：'),
(21, 'sadfasdf'),
(22, 'asdfasdf'),
(23, 'asdfasdf'),
(24, 'asdfasdf'),
(25, ' 查看宝贝详情\r\nLES男鞋林弯弯鞋潮流板鞋时尚英伦松糕鞋休闲鞋 男 陈冠希潮鞋子\r\n颜色分类: L012-墨绿尺码: 40 (标准码数买就送男士短\r\n	');

-- --------------------------------------------------------

--
-- 表的结构 `i_user`
--

CREATE TABLE IF NOT EXISTS `i_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `nickname` char(32) NOT NULL DEFAULT '' COMMENT 'nickname',
  `password` char(128) NOT NULL DEFAULT '' COMMENT 'password',
  `avaster` char(100) NOT NULL DEFAULT '' COMMENT '头像',
  `email` char(100) NOT NULL DEFAULT '' COMMENT '邮箱',
  `gender` tinyint(4) NOT NULL DEFAULT '0' COMMENT '性别1男2女',
  `talented` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否达人',
  `description` text NOT NULL COMMENT '个人介绍',
  `tags` char(255) NOT NULL DEFAULT '' COMMENT '标签',
  `login_time` int(11) NOT NULL DEFAULT '0' COMMENT '最后登录时间',
  `add_time` int(11) NOT NULL DEFAULT '0' COMMENT '注册时间',
  `email_status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '邮箱验证状态 0为验证 1已验证',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '用户状态 正常 屏蔽',
  `type` tinyint(4) NOT NULL DEFAULT '0' COMMENT '用户类型：0普通注册用户 1地产用户 2马甲用户',
  PRIMARY KEY (`id`),
  UNIQUE KEY `nickname` (`nickname`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='user' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `i_user`
--

INSERT INTO `i_user` (`id`, `nickname`, `password`, `avaster`, `email`, `gender`, `talented`, `description`, `tags`, `login_time`, `add_time`, `email_status`, `status`, `type`) VALUES
(1, '1', '1', '1', '1', 0, 0, '1', '1', 0, 0, 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
