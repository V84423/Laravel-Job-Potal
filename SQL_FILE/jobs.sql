/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.20-MariaDB : Database - professional
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`professional` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `professional`;

/*Table structure for table `admins` */

DROP TABLE IF EXISTS `admins`;

CREATE TABLE `admins` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `admins` */

/*Table structure for table `categories` */

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `cat_desc` text NOT NULL,
  `font` varchar(200) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4;

/*Data for the table `categories` */

/*Table structure for table `company` */

DROP TABLE IF EXISTS `company`;

CREATE TABLE `company` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `bg_image` varchar(255) DEFAULT NULL,
  `found_at` date DEFAULT NULL,
  `capital` int(100) DEFAULT NULL,
  `ceo` varchar(255) DEFAULT NULL,
  `employee` int(10) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `retriv` int(10) DEFAULT NULL,
  `post_jobs` int(10) DEFAULT NULL,
  `created_by_id` int(10) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `status` int(1) DEFAULT 0,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `company` */

insert  into `company`(`id`,`name`,`url`,`phone`,`bg_image`,`found_at`,`capital`,`ceo`,`employee`,`address`,`details`,`retriv`,`post_jobs`,`created_by_id`,`created_at`,`status`) values 
(2,'シンプリス','https://www.dr-reve.jp','13212342123','public/bg/GJR1G4skeONOYOgpKBiKrKyqPJrDQzktLjVrrwVD.jpg','2021-12-22',324,'asdfasdf',26,'〒106-0044東京都港区東麻布1-8-1 東麻布ISビル4F','1489741321 hjkhih bjkhjkb jkbkjbvj vb',NULL,NULL,24,'2022-03-02 05:53:33',0),
(3,'株式会社STYZ','https://notahotel.com/','03-1234-5678','public/bg/n1G05jwbXHzdTGo765bKaekIjVplxotu33n3Issw.jpg','2022-01-05',100,'鈴木　尚栄',13,'東京・日本橋・大手町','株式会社STYZは民間からの社会保障創出をミッションに、日本最大の寄付プラットフォームSyncableの運営を行っています。\r\n\r\n社会課題解決事業の他に、システム開発事業も併せて提供しています。\r\n\r\nネイティブアプリ開発、ウェブアプリケーション開発、ウェブシステム開発など幅広い案件の実績があります。\r\n\r\n主要取引先として大手商社、大手EC事業提供会社など多数の上場企業との取引があります。\r\n\r\nランサーズでは主に開発事業での募集をさせていただきます。\r\n\r\nどうぞよろしくお願いいたします。',NULL,NULL,29,'2022-01-26 02:00:37',0),
(4,'メイプルマーケット','https://notahotel.com/','03-1234-5678','public/bg/GJR1G4skeONOYOgpKBiKrKyqPJrDQzktLjVrrwVD.jpg','2022-01-06',256,'鈴木　尚栄',22,'品川・三田・浜松町',NULL,NULL,NULL,30,'2022-01-26 02:27:25',0),
(5,'メイプルマーケット','https://notahotel.com/','03-1234-5678','public/bg/GJR1G4skeONOYOgpKBiKrKyqPJrDQzktLjVrrwVD.jpg','2022-01-07',233,'鈴木　尚栄',55,'秋葉原・神田・御茶ノ水','創業18年の会社で、不動産の開発、管理、売買のほか、飲食店、宿泊施設の開発運営を行なっています。',NULL,NULL,31,'2022-01-26 02:42:19',0),
(6,'テスト会社','https://yahoo.co.jp','03-1234-1234','public/bg/BB616Cy7Rkl0wBetLQGgFyczVlAcj81rSvKBcZfA.png','2021-12-08',500,'松本',10,'東京都新宿区','会社概要テスト',NULL,NULL,32,'2022-01-31 11:52:54',0);

/*Table structure for table `emails` */

DROP TABLE IF EXISTS `emails`;

CREATE TABLE `emails` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `job_id_email` int(4) NOT NULL,
  `to_user` varchar(200) NOT NULL,
  `from_user` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=268 DEFAULT CHARSET=utf8mb4;

/*Data for the table `emails` */

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `footprint` */

DROP TABLE IF EXISTS `footprint`;

CREATE TABLE `footprint` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `retriv_id` int(10) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by_id` int(10) DEFAULT NULL,
  `status` int(1) DEFAULT 0,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

/*Data for the table `footprint` */

insert  into `footprint`(`id`,`retriv_id`,`content`,`created_at`,`created_by_id`,`status`) values 
(1,4,'project','2022-01-07 08:00:16',22,1),
(2,4,'project','2022-01-07 08:02:34',22,0),
(3,29,'company','2022-01-26 03:18:03',31,0),
(4,31,'company','2022-01-31 11:20:12',25,1),
(5,13,'project','2022-01-31 11:27:12',25,1),
(6,30,'company','2022-01-31 11:27:18',25,1),
(7,30,'company','2022-01-31 11:27:33',25,1),
(8,4,'project','2022-02-28 09:38:45',22,0),
(9,4,'project','2022-02-28 04:19:53',24,0),
(10,4,'project','2022-02-28 04:25:18',24,0),
(11,4,'project','2022-02-28 04:45:43',24,0),
(12,4,'project','2022-02-28 08:13:43',24,0),
(13,4,'project','2022-02-28 08:30:17',24,0),
(14,22,'talent','2022-02-28 08:30:44',24,0),
(15,4,'project','2022-02-28 08:31:25',24,0),
(16,4,'project','2022-02-28 10:51:40',24,0),
(17,4,'project','2022-03-01 09:36:59',24,0),
(18,5,'project','2022-03-01 09:37:02',24,0),
(19,4,'project','2022-03-01 09:43:53',24,0),
(20,4,'project','2022-03-01 09:45:03',24,0),
(21,4,'project','2022-03-01 09:45:49',24,0),
(22,5,'project','2022-03-01 01:02:14',24,0),
(23,6,'project','2022-03-01 01:02:39',24,0),
(24,7,'project','2022-03-01 01:02:49',24,0),
(25,8,'project','2022-03-01 01:02:52',24,0),
(26,9,'project','2022-03-01 01:03:00',24,0),
(27,10,'project','2022-03-01 01:03:02',24,0),
(28,11,'project','2022-03-01 01:03:04',24,0),
(29,12,'project','2022-03-01 01:03:08',24,0),
(30,13,'project','2022-03-01 01:03:10',24,0),
(31,14,'project','2022-03-01 01:03:18',24,0),
(32,15,'project','2022-03-01 01:03:19',24,0),
(33,16,'project','2022-03-01 01:03:21',24,0),
(34,17,'project','2022-03-01 01:03:24',24,0),
(35,8,'project','2022-03-01 01:05:20',24,0),
(36,13,'project','2022-03-01 01:06:21',24,0),
(37,17,'project','2022-03-01 01:06:38',24,0),
(38,22,'talent','2022-03-01 01:33:00',24,0),
(39,22,'talent','2022-03-01 01:33:50',24,0),
(40,30,'company','2022-03-15 11:17:23',25,1),
(41,30,'company','2022-03-15 11:27:38',25,1),
(42,25,'talent','2022-03-15 02:09:59',25,1),
(43,31,'company','2022-03-15 02:10:33',25,1),
(44,29,'company','2022-03-15 02:10:44',25,1),
(45,16,'project','2022-03-15 02:11:14',25,1),
(46,24,'company','2022-03-19 04:14:31',25,1),
(47,24,'company','2022-03-19 04:15:23',25,1),
(48,16,'project','2022-03-19 04:16:45',25,1),
(49,15,'project','2022-03-19 04:17:00',25,1),
(50,15,'project','2022-03-19 04:20:54',25,1),
(51,30,'company','2022-03-19 04:21:13',25,1),
(52,30,'company','2022-03-19 04:21:51',25,1);

/*Table structure for table `jobs` */

DROP TABLE IF EXISTS `jobs`;

CREATE TABLE `jobs` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `user_id` int(12) NOT NULL,
  `email` varchar(200) NOT NULL,
  `jobtitle` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `region` varchar(200) NOT NULL,
  `jobtype` varchar(200) NOT NULL,
  `jobcategory` varchar(200) NOT NULL,
  `jobdesc` text NOT NULL,
  `vacancy` int(2) NOT NULL,
  `ex` int(2) NOT NULL,
  `sal` int(3) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `respon` text NOT NULL,
  `edu` text NOT NULL,
  `ben` text NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `image` varchar(200) NOT NULL,
  `companyname` varchar(200) NOT NULL,
  `website` varchar(200) NOT NULL,
  `linkedin` varchar(200) NOT NULL,
  `month` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8mb4;

/*Data for the table `jobs` */

/*Table structure for table `major` */

DROP TABLE IF EXISTS `major`;

CREATE TABLE `major` (
  `id` int(4) DEFAULT NULL,
  `major` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `major` */

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `project_footprint` */

DROP TABLE IF EXISTS `project_footprint`;

CREATE TABLE `project_footprint` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `project_id` int(10) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by_id` int(10) DEFAULT NULL,
  `status` int(1) DEFAULT 0,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `project_footprint` */

/*Table structure for table `projects` */

DROP TABLE IF EXISTS `projects`;

CREATE TABLE `projects` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `projectType` text DEFAULT NULL,
  `positions` text DEFAULT NULL,
  `details` text DEFAULT NULL,
  `skills` text DEFAULT NULL,
  `estimate` varchar(255) DEFAULT NULL,
  `mates` int(10) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `during` text DEFAULT NULL,
  `wkdays` varchar(255) DEFAULT NULL,
  `schedule` text DEFAULT NULL,
  `created_by_id` int(4) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `status` int(1) DEFAULT 1,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

/*Data for the table `projects` */

insert  into `projects`(`id`,`title`,`projectType`,`positions`,`details`,`skills`,`estimate`,`mates`,`address`,`during`,`wkdays`,`schedule`,`created_by_id`,`created_at`,`status`) values 
(4,'Vue3 ライブラリ開発','フリーランス（業務委託契約）','WEBデザイナー','Vue3を用いた最新のオープンソース 及び 有償のライブラリを開発しています。\r\nVue3に関する出版を予定しています。\r\n開発されたVue3ライブラリを用いて、チームのパフォーマンスを最大化するサービスを開始します。\r\n\r\nライブラリ開発やドキュメント作成のサポートをしていただける方を募集しています。\r\nパターンをお伝えさせていただきます。\r\nそのパターンを適用していく作業になります。\r\n\r\nWEBサイト、WEBアプリケーション開発など\r\nペースにあわせて作業をお願いします。\r\n\r\nオンライン作業可能な方を募集しています。','HTML / CSS,JavaScript,jQuery,PHP,Python,react,Vue.js','250-300',2,'京都府','2022/1/4-2022/3/31',NULL,'【 注意事項 】\r\n当方が用意する仮想環境内にて作業していただきます。\r\n作業画面は常時共有させていただきます。\r\nチャットの他、音声通話を多用させていただきます。\r\n\r\n待機時間、環境準備時間は報酬支払の対象となりません。\r\nタスク終了時の報告、次のタスク確認など\r\nチャットや音声などで積極的にコミュニケーションをお願いしています。\r\n\r\n【 利用予定のアプリ 】\r\nDISCORD\r\nリモートデスクトップ接続\r\n（詳細は別途ご案内させていただきます）\r\n\r\n【 依頼内容 】\r\n・会社概要\r\n　　・情報システム研究開発 （保有特許１件）\r\n　　・プログラミングスクール運営\r\n　　・楽天、アマゾン、Yahooなどに出店するインターネット通販事業\r\n\r\n・主にお願いしたい業務\r\n　　Vueライブラリ、コンポーネント作成　\r\n　　ドキュメント作成\r\n\r\n・下記業務内容にも対応していただける場合は\r\n　依頼時間を増やせる可能性が高くなります\r\n　　\r\n【 期間 】\r\n長期間続けていただける方を募集\r\n会社は年中無休です。\r\nご希望の日時に作業していただけます',24,'2021-12-29 06:34:47',1),
(5,'保険サービスの開発案件','フリーランス（業務委託契約）','WEBディレクター・PM','大手生命保険会社の開発案件となります。\r\n2月1日から3月31日までの開発期間中、チケットベースでタスクをアサインさせていただき、実装をしていただくような開発です。\r\n\r\n3月以降の案件継続は現状未定ですが、2月中には継続の有無が決まるため、今後も継続的にご一緒できる方を希望しています。','react,JavaScript','50 〜 100',1,'東京・日本橋・大手町','1月 〜7月','週4日（112-144h）〜週5日（140-180h）','4月、5月は現状開発が一時的に停止する可能性もありますが、\r\n6月以降は再度開発スタートの目処が立っているため、\r\n長期的な案件としてお付き合いいただけるかと存じます。',29,'2022-01-26 02:10:16',1),
(6,'別荘、Hotel切り替え運用システムの開発','フリーランス（業務委託契約）','WEBデザイナー','https://notahotel.com/\r\n\r\n上記と同様のサービスの展開を考えています。\r\nユーザーが使用する画面から管理画面までの開発\r\n\r\n建設前のホテルのパースを公開し購入者が決定してから建設を開始します。','Android Java,ASP.net,Figma,JAVA','60 〜 90',1,'渋谷・原宿・代官山','2022/1/4〜2022/3/31','週4日（112-144h）〜週5日（140-180h）','所有者は自分の所有した物件をアプリ上で、自分が使用する期間だけ設定すると、\r\nそれ以外の期間はホテルとして一般に貸し出すことができ、\r\nその収益を得ることができる。',31,'2022-01-26 02:13:11',1),
(7,'飲食店や教育、エンタメ向けのアプリ開発会社のフロント開発業務','フリーランス（業務委託契約）','アーキテクチャエンジニア','・受託しているアプリ・WEBサービスのフロント開発に携わっていただきます。\r\n・主にオンラインチャットの機能開発や管理画面の開発をお任せする予定です。','JavaScript,Vue.js','〜 70',1,'田町駅（山手線、京浜東北線）','2月〜3月末（短期）','週5日（140〜180h/月）','・大ヒット作のスマホアプリをリリースされていたり、人気になるスマホアプリのノウハウなども学べるかもしれません。\r\n・フリーランスの方で月180時間を超えることはないようで、稼働も比較的安定しています。',30,'2022-01-26 02:29:51',1),
(8,'WEBマーケティング会社のEC開発業務','フリーランス（業務委託契約）','QAエンジニア/テストエンジニア','・クライアントの音楽系ECサイトの開発業務に携わっていただきます。\r\n・主に開発の改善業務から保守対応いった業務を中心にお任せし、\r\nご経験によってはPHPのバージョンアップの業務も想定しております。','JavaScript,Vue.js,PHP','〜 70',3,'渋谷駅（山手線、埼京線、湘南新宿ライン、東横線、田園都市線、銀座線、半蔵門線、副都心線）','即日〜（長期を想定）','週5日（140〜180h/月）','・WEB制作からマーケティング、管理システムの開発と幅広く事業を展開している企業様の開発案件となります。\r\n・オフィスも渋谷から徒歩5分以内と通勤も快適となり、リモート勤務も可能で開発メンバーもアットホームな雰囲気ですので、エンジニアの方にとって働きやすい環境だと思います。',24,'2022-01-26 02:33:16',1),
(9,'EC関連システムのQA業務','フリーランス（業務委託契約）','QAエンジニア/テストエンジニア','・Saasサービスを中心としたECシステムのQAエンジニアとして携わっていただきます。\r\n・開発メンバーとコミュニケーションを取りながら、テスト設計から実施まで幅広く対応し、障害の分析から改善、報告まで行っていただきます。','Scala','〜 50',6,'目黒駅（JR山手線、東急目黒線、東京メトロ南北線、都営地下鉄三田線）','即日〜（長期を想定）','週4日（112-144h）〜週5日（140-180h）','・ご経験ややる気次第で決済部分、ビックデータ、インフラ面まで幅広く挑戦することも可能そうですので、スキルアップやキャリアアップを考えられている方にも向いているかと思います。\r\n・アメリカにも開発体制があり、海外メンバーと一緒に開発できるチャンスもあるかもしれません。',31,'2022-01-26 02:44:40',1),
(10,'求人メディア運営会社でのデザイン制作','フリーランス（業務委託契約）','WEBデザイナー','・求人メディアを運営している企業のマーケティング部門でデザイン制作に携わっていただきます。\r\n・主に法人のサービス利用促進に向けた制作を中心にサイトやLPの作成から改善、更新、QA、バナー、チラシなどの広告制作までお任せする予定です。\r\n・他にも登壇スライドやダウンロード資料、展示ブースでのデザイン業務などもございます。','HTML / CSS,JavaScript,Android Java,Photoshop / Illustrator','〜 60',1,'渋谷駅（山手線、埼京線、湘南新宿ライン、東横線、田園都市線、銀座線、半蔵門線、副都心線）','即日〜（長期を想定）','週5日（140〜180h/月）','・CMなど露出を増やしている企業の有名サービスであり、優秀なエンジニアと一緒にスピード感を持って開発できるため、やりがい・成長を実感できる環境です。\r\n・渋谷勤務のためアクセス・周辺環境共に良く、オフィスも綺麗です。',30,'2022-01-26 02:48:02',1),
(11,'IP系ゲーム開発の運営業務','フリーランス（業務委託契約）','インフラエンジニア','・複数の作品のキャラクターたちが活躍するタイムライン制コマンドバトルRPGゲームの運営業務に携わっていただきます。\r\n・主に各施策のプランニングを中心に行っていただき、データ入力の業務までお任せする予定です。','C#,C++,ASP.net,Android Java','90〜120',4,'目黒駅（JR山手線、東急目黒線、東京メトロ南北線、都営地下鉄三田線）','即日〜（長期を想定）','週5日（140〜180h/月）','・周りのエンジニアの方もスキルが高い方が多く、技術習得やスキルアップを考えると良い環境だと思います。\r\n・オフィスもカフェがあったり、きれいで作業も捗りそうです。また時差出勤やリモート勤務も可能なので、柔軟な働き方が実現出来ます。',31,'2022-01-26 02:51:31',1),
(12,'IP系ゲーム開発の運営業務','フリーランス（業務委託契約）','インフラエンジニア','・複数の作品のキャラクターたちが活躍するタイムライン制コマンドバトルRPGゲームの運営業務に携わっていただきます。\r\n・主に各施策のプランニングを中心に行っていただき、データ入力の業務までお任せする予定です。','C#,C++,ASP.net,Android Java','90〜120',4,'目黒駅（JR山手線、東急目黒線、東京メトロ南北線、都営地下鉄三田線）','即日〜（長期を想定）','週5日（140〜180h/月）','・周りのエンジニアの方もスキルが高い方が多く、技術習得やスキルアップを考えると良い環境だと思います。\r\n・オフィスもカフェがあったり、きれいで作業も捗りそうです。また時差出勤やリモート勤務も可能なので、柔軟な働き方が実現出来ます。',24,'2022-01-26 02:51:35',1),
(13,'IP系ゲーム開発の運営業務','フリーランス（業務委託契約）','インフラエンジニア','・複数の作品のキャラクターたちが活躍するタイムライン制コマンドバトルRPGゲームの運営業務に携わっていただきます。\r\n・主に各施策のプランニングを中心に行っていただき、データ入力の業務までお任せする予定です。','C#,C++,ASP.net,Android Java','90〜120',4,'目黒駅（JR山手線、東急目黒線、東京メトロ南北線、都営地下鉄三田線）','即日〜（長期を想定）','週5日（140〜180h/月）','・周りのエンジニアの方もスキルが高い方が多く、技術習得やスキルアップを考えると良い環境だと思います。\r\n・オフィスもカフェがあったり、きれいで作業も捗りそうです。また時差出勤やリモート勤務も可能なので、柔軟な働き方が実現出来ます。',29,'2022-01-26 02:51:38',1),
(14,'IP系ゲーム開発の運営業務','フリーランス（業務委託契約）','インフラエンジニア','・複数の作品のキャラクターたちが活躍するタイムライン制コマンドバトルRPGゲームの運営業務に携わっていただきます。\r\n・主に各施策のプランニングを中心に行っていただき、データ入力の業務までお任せする予定です。','C#,C++,ASP.net,Android Java','90〜120',4,'目黒駅（JR山手線、東急目黒線、東京メトロ南北線、都営地下鉄三田線）','即日〜（長期を想定）','週5日（140〜180h/月）','・周りのエンジニアの方もスキルが高い方が多く、技術習得やスキルアップを考えると良い環境だと思います。\r\n・オフィスもカフェがあったり、きれいで作業も捗りそうです。また時差出勤やリモート勤務も可能なので、柔軟な働き方が実現出来ます。',31,'2022-01-26 02:51:42',1),
(15,'IP系ゲーム開発の運営業務','フリーランス（業務委託契約）','インフラエンジニア','・複数の作品のキャラクターたちが活躍するタイムライン制コマンドバトルRPGゲームの運営業務に携わっていただきます。\r\n・主に各施策のプランニングを中心に行っていただき、データ入力の業務までお任せする予定です。','C#,C++,ASP.net,Android Java','90〜120',4,'目黒駅（JR山手線、東急目黒線、東京メトロ南北線、都営地下鉄三田線）','即日〜（長期を想定）','週5日（140〜180h/月）','・周りのエンジニアの方もスキルが高い方が多く、技術習得やスキルアップを考えると良い環境だと思います。\r\n・オフィスもカフェがあったり、きれいで作業も捗りそうです。また時差出勤やリモート勤務も可能なので、柔軟な働き方が実現出来ます。',30,'2022-01-26 02:51:55',1),
(16,'IP系ゲーム開発の運営業務','フリーランス（業務委託契約）','インフラエンジニア','・複数の作品のキャラクターたちが活躍するタイムライン制コマンドバトルRPGゲームの運営業務に携わっていただきます。\r\n・主に各施策のプランニングを中心に行っていただき、データ入力の業務までお任せする予定です。','C#,C++,ASP.net,Android Java','90〜120',4,'目黒駅（JR山手線、東急目黒線、東京メトロ南北線、都営地下鉄三田線）','即日〜（長期を想定）','週5日（140〜180h/月）','・周りのエンジニアの方もスキルが高い方が多く、技術習得やスキルアップを考えると良い環境だと思います。\r\n・オフィスもカフェがあったり、きれいで作業も捗りそうです。また時差出勤やリモート勤務も可能なので、柔軟な働き方が実現出来ます。',29,'2022-01-26 02:51:58',1),
(17,'IP系ゲーム開発の運営業務','フリーランス（業務委託契約）','インフラエンジニア','・複数の作品のキャラクターたちが活躍するタイムライン制コマンドバトルRPGゲームの運営業務に携わっていただきます。\r\n・主に各施策のプランニングを中心に行っていただき、データ入力の業務までお任せする予定です。','C#,C++,ASP.net,Android Java','90〜120',4,'目黒駅（JR山手線、東急目黒線、東京メトロ南北線、都営地下鉄三田線）','即日〜（長期を想定）','週5日（140〜180h/月）','・周りのエンジニアの方もスキルが高い方が多く、技術習得やスキルアップを考えると良い環境だと思います。\r\n・オフィスもカフェがあったり、きれいで作業も捗りそうです。また時差出勤やリモート勤務も可能なので、柔軟な働き方が実現出来ます。',24,'2022-01-26 02:52:03',1);

/*Table structure for table `projects_req` */

DROP TABLE IF EXISTS `projects_req`;

CREATE TABLE `projects_req` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `project_id` int(10) DEFAULT NULL,
  `created_by_id` int(10) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `status` int(1) DEFAULT 0,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `projects_req` */

/*Table structure for table `receivemessage` */

DROP TABLE IF EXISTS `receivemessage`;

CREATE TABLE `receivemessage` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `send_id` int(10) DEFAULT NULL,
  `sendMail` varchar(255) DEFAULT NULL,
  `receive_id` int(10) DEFAULT NULL,
  `receiveMail` varchar(255) DEFAULT NULL,
  `mailText` text DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `status` int(1) DEFAULT 0,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `receivemessage` */

/*Table structure for table `savedjobs` */

DROP TABLE IF EXISTS `savedjobs`;

CREATE TABLE `savedjobs` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `user_id` int(12) NOT NULL,
  `job_id` int(12) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `job_title` varchar(200) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `region` varchar(200) NOT NULL,
  `job_type` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=670 DEFAULT CHARSET=utf8mb4;

/*Data for the table `savedjobs` */

/*Table structure for table `searches` */

DROP TABLE IF EXISTS `searches`;

CREATE TABLE `searches` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `keyword` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4;

/*Data for the table `searches` */

/*Table structure for table `sendmessage` */

DROP TABLE IF EXISTS `sendmessage`;

CREATE TABLE `sendmessage` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `project_id` int(10) DEFAULT NULL,
  `send_id` int(10) DEFAULT NULL,
  `receive_id` int(10) DEFAULT NULL,
  `mailText` text DEFAULT NULL,
  `filenames` text DEFAULT NULL,
  `files` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `status` int(1) DEFAULT 0,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;

/*Data for the table `sendmessage` */

insert  into `sendmessage`(`id`,`project_id`,`send_id`,`receive_id`,`mailText`,`filenames`,`files`,`created_at`,`status`) values 
(57,4,22,24,'フロントエンドエンジニアとして、4年程スマートフォンアプリやWebアプリケーションの開発に携わっています。\r\n使用したことがある言語やライブラリは\r\nHTML/CSS/JavaScript/React/Vue/ReactNative/TypeScript/Javaです。\r\n某プログラミングスクールにて講師経験もあります。フロントエンドが得意です。\r\nまた、新しいことに挑戦することが好きです。','resume_012.pdf','public/messages/n4xDlIeOw2gbD7c22HktZfKBwUHPWZLKYvFdBsr5.pdf','2021-12-29 06:40:26',1),
(58,4,24,22,'スキル、実績についてお知らせください。\r\nどのような日程で業務可能かお知らせくだっさい。\r\n\r\nご質問がありましたら、気軽にお問い合わせください。','','','2021-12-29 06:42:13',1),
(59,4,22,24,'・金融系システム開発\r\n・オンラインクレーンゲーム開発\r\n・CMS開発\r\n・医療機器ビューワー開発\r\nに携わった経験があります。\r\n特にオンラインクレーンゲームの案件では私1人でフルリニューアルから不具合対応、リリースまで進めていました。','','','2021-12-29 06:43:44',1),
(60,4,24,22,'Okay!','','','2021-12-29 06:55:32',1),
(61,4,22,24,'テスト','','','2022-01-01 11:17:45',1),
(62,4,22,24,'dfsgsdfg','','','2022-02-21 04:30:39',1),
(63,4,22,24,'asfdsdfs','','','2022-02-28 03:28:29',1),
(64,4,22,24,'sdfsdfsfsdff','','','2022-02-28 03:31:00',1),
(65,4,24,22,'asdfsfasfasfd','','','2022-02-28 03:31:54',1),
(66,15,25,30,'dasfadsfasdfdsaf','','','2022-03-19 04:21:36',0);

/*Table structure for table `skill_languages` */

DROP TABLE IF EXISTS `skill_languages`;

CREATE TABLE `skill_languages` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) DEFAULT NULL,
  `language` varchar(255) DEFAULT NULL,
  `state` int(1) DEFAULT 1,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;

/*Data for the table `skill_languages` */

insert  into `skill_languages`(`id`,`type`,`language`,`state`) values 
(1,'engineer','Ruby',1),
(2,'engineer','PHP',1),
(3,'engineer','JAVA',1),
(4,'engineer','Scala',1),
(5,'engineer','Python',1),
(6,'engineer','CSharp',1),
(7,'engineer','C',1),
(8,'engineer','C++',1),
(9,'engineer','ASP',1),
(10,'engineer','GO',1),
(11,'engineer','SQL',1),
(12,'engineer','MongoDB',1),
(13,'engineer','ObjectC',1),
(14,'engineer','Swift',1),
(15,'engineer','IONIC',1),
(16,'engineer','Xamarin',1),
(17,'engineer','Kotlin',1),
(18,'engineer','Android',1),
(19,'engineer','Unity',1),
(20,'engineer','Unreal',1),
(21,'engineer','VBA',1),
(22,'engineer','Access',1),
(23,'engineer','Github',1),
(24,'engineer','Gitlab',1),
(25,'engineer','Amazon',1),
(26,'engineer','Azure',1),
(27,'engineer','Kingtone',1),
(28,'web','Ruby',1),
(29,'web','PHP',1),
(30,'web','JAVA',1),
(31,'web','Scala',1),
(32,'web','Python',1),
(33,'web','CSharp',1),
(34,'web','C++',1),
(35,'web','C',1),
(36,'web','ASP',1),
(37,'web','NET',1),
(38,'web','JSP',1),
(39,'web','MySQL',1),
(40,'web','Javascript',1),
(41,'web','Illustrator',1),
(42,'web','XD',1),
(43,'web','CSS',1),
(44,'web','CSS3',1),
(45,'web','HTML',1),
(46,'web','HTML5',1),
(47,'web','Canvas',1),
(48,'web','MySQL',1),
(49,'web','MongoDB',1),
(50,'web','Go',1),
(51,'web','Photoshop',1);

/*Table structure for table `skills` */

DROP TABLE IF EXISTS `skills`;

CREATE TABLE `skills` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `birthday` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `expYear` varchar(255) DEFAULT NULL,
  `wUnit` varchar(255) DEFAULT NULL,
  `wArea` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `category` int(1) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `filenames` text DEFAULT NULL,
  `files` text DEFAULT NULL,
  `engineerDevelopmentPhase` text DEFAULT NULL,
  `engineerLanguageTools` text DEFAULT NULL,
  `webDevelopmentPhase` text DEFAULT NULL,
  `webDevelopmentTools` text DEFAULT NULL,
  `pmDevelopmentPhase` text DEFAULT NULL,
  `pmDevelopmentProduct` text DEFAULT NULL,
  `details` text DEFAULT NULL,
  `created_by_id` int(10) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

/*Data for the table `skills` */

insert  into `skills`(`id`,`birthday`,`gender`,`country`,`expYear`,`wUnit`,`wArea`,`status`,`category`,`phone`,`filenames`,`files`,`engineerDevelopmentPhase`,`engineerLanguageTools`,`webDevelopmentPhase`,`webDevelopmentTools`,`pmDevelopmentPhase`,`pmDevelopmentProduct`,`details`,`created_by_id`,`created_at`) values 
(10,'2022-03-11','男性','Barbados','10年以上','Lancers','Tokyo','⾄急',2,'2243238312','','','基本設計,開発マネジメント','PHP,SQL,Kotlin','','Illustrator,JavaScript,','UXデザイン,インフラ設計,顧客折衝','ウェブアプリ,','132113216545054545 hjkhjkh jkhj hh jkh jhkjh jh kj',22,'2022-03-01 11:05:57'),
(11,'2021-05-15','男性','Japan','6年','100','東京周辺','探し中',1,'08012345678','','','','Ruby,PHP','','','','',NULL,25,'2022-03-15 10:46:30'),
(12,'2021-1-1','男性','Japan','3年',NULL,NULL,'探し中',3,'+74013541978','','','要件定義,基本設計,詳細設計,実装・単体テスト,結合テスト,保守・運用,開発マネジメント','Ruby,PHP,Python,CSharp,C,C++,GO,ObjectC,Swift,IONIC','企画提案,UIUXデザイン,ビジュアルデザイン,デザイン進行管理,顧客との直接コミュニケーション','C++,ASP,NET,JSP,HTML,Go','企画提案,UXデザイン,UIデザイン,ワイヤーフレーム作成,画面仕様書作成,テスト仕様書作成,インフラ設計,DB設計,API設計,バッチ処理設計,グロースハック,ツールを使った数値分析','ウェブアプリ,スマホ・タブレット,ゲーム','sdfsacvcxvdafsg s asdaf sdaf sdaf \r\nsdf \r\ndasf\r\n sd\r\nf sd\r\nf asdf sdaf sda\r\nf sdaf dasf adsf asdf dsa\r\nf asdf asdf adsf dasf \r\nadsf \r\nadsf\r\n asd\r\nf sadf asd',27,'2022-03-19 03:47:49');

/*Table structure for table `type` */

DROP TABLE IF EXISTS `type`;

CREATE TABLE `type` (
  `id` int(11) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `type` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `lastname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname_kana` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname_kana` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int(4) DEFAULT 0,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_title` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cv` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id`,`lastname`,`firstname`,`lastname_kana`,`firstname_kana`,`company`,`role`,`email`,`type`,`user_desc`,`mobile`,`photo`,`job_title`,`location`,`facebook`,`linkedin`,`link`,`twitter`,`cv`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) values 
(22,'長田','みか','みか','みか',NULL,0,'admin@gmail.com','jobSeeker',NULL,NULL,'public/photos/UwRFkk7IZRqs781py2ckTRuBuJWQv7lDFEUcFUKu.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'25f9e794323b453885f5181f1b624d0b','YGlZeeCoKEksGDJi6MKra1WKmuxUlzvm9UqFPQ4kECnVCE0K30Wc9eL9Hm0q9D02','2021-12-29 17:17:57','2021-12-29 17:17:57'),
(24,'佐野','浩司',NULL,NULL,'シンプリス',1,'company@gmail.com','company','楽天、アマゾン、Yahooなどショッピングモールでの通信販売、店舗運営\r\nWEBシステムの研究開発','03-1234-5678','public/photos/VjaMvesWwOvpDjuEOkXgWisPYm9NOgs96nBkmVWp.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'25f9e794323b453885f5181f1b624d0b','6lxNE7WpC6uDH90RbR15ywVLfdgCsCjiFT4UKDtbW4t6okRqBJaUJhdfA4Dubu0n','2021-12-29 17:50:53','2021-12-29 17:50:53'),
(25,'松本','雄貴','マツモト','ユウキ',NULL,0,'mycb750@gmail.com','jobSeeker',NULL,NULL,'public/photos/SyRDKStSnSQlD2M2QV9sQzYlG99HQ0gT41UYwXLT.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'25f9e794323b453885f5181f1b624d0b','HffcKzcpOXDYJMFgn695DHlIDO23kOZzJ0pUoh9bW5tuVi8me8YIxcsMXYQK39dN','2022-01-01 11:24:44','2022-01-01 11:24:44'),
(26,'大樹','鈴木',NULL,NULL,'インテック株式会社',1,'company1@gmail.com','company','東京を拠点に小売業とシステム開発を営んでおります。\r\nご依頼の際はリモートでの打ち合わせ可能です。\r\n都内でしたらご指定の場所で打ち合わせをすることも可能です。\r\nお気軽にご連絡ください。\r\n\r\n幼稚園やスクール向けにLINE公式アカウントをカスタマイズ\r\n会員システムの連携、チャットサービス、決済サービス連動、etc....\r\n\r\nまた、遊技場向けの設備やサービスを提供しております。\r\n中古機、景品、清掃、youtuea広告運用など','03-1234-5678','public/photos/CaMYS3vpgLGhaxl1e0VRNyUadqxGCTm2a2Q0MLad.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'25f9e794323b453885f5181f1b624d0b','g1nLWAJnPz8emoM7KSitVQVBtENyQHRXJKMu2qp4h18IJGw3rXacmw7lU6DZN6y0','2022-01-13 09:11:58','2022-01-13 09:11:58'),
(27,'わかめ','わかめ','わかめ','わかめ',NULL,0,'admin1@gmail.com','jobSeeker',NULL,NULL,'public/photos/cGH1mlCm4bdrTO3PYdzynoLMlyZL6nHXAgLV7hlq.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'25f9e794323b453885f5181f1b624d0b','SDfG0qMnGU5lCOzCtdIQrNOOYCEa4z1nxWZulozjCid4fsVK8mU1khSxxL2N77bU','2022-01-13 09:22:48','2022-01-13 09:22:48'),
(28,'山田','太郎',NULL,NULL,'テスト会社',1,'test@yahoo.co.jp','company','test','03-1234-1234',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5f4dcc3b5aa765d61d8327deb882cf99','GkSt7jkaDo30g1hAvqwKbTLOeJZbPVjrqU2thbEujTmfsJx4ypvKUUSBtKRAEFau','2022-01-15 04:35:06','2022-01-15 04:35:06'),
(29,'長田','鈴木',NULL,NULL,'株式会社STYZ',1,'company2@gmail.com','company','株式会社STYZは民間からの社会保障創出をミッションに、日本最大の寄付プラットフォームSyncableの運営を行っています。\r\n\r\n社会課題解決事業の他に、システム開発事業も併せて提供しています。\r\n\r\nネイティブアプリ開発、ウェブアプリケーション開発、ウェブシステム開発など幅広い案件の実績があります。\r\n\r\n主要取引先として大手商社、大手EC事業提供会社など多数の上場企業との取引があります。\r\n\r\nランサーズでは主に開発事業での募集をさせていただきます。\r\n\r\nどうぞよろしくお願いいたします。','03-1234-5678','public/photos/NgTV06YKVprJqYkejA7EUkr3W9vcAcIrgCkvWTu6.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'25f9e794323b453885f5181f1b624d0b','0YhpFljcVWou8e1eYm8iDcXrHUbuRJFd8XyUxSC5XWRdhGEzQxIA1TFcLJI5ayvr','2022-01-26 13:49:03','2022-01-26 13:49:03'),
(30,'佐藤','鈴木',NULL,NULL,'株式会社メイプルマーケット',1,'company3@gmail.com','company',NULL,'03-1234-5678','public/photos/2ZaWLmcqzq5PPfxVLqzEcxSHCKuWbx1LeBbPNn2S.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'25f9e794323b453885f5181f1b624d0b','lkzlmBVvKZ7eVFyfVJNz5Wvu6nHXliT0vN1KOIGeeHq2Dvlpu9wNwQrj8z1d38GJ','2022-01-26 14:23:37','2022-01-26 14:23:37'),
(31,'大樹','鈴木',NULL,NULL,'株式会社メイプルマーケット',1,'company4@gmail.com','company',NULL,'03-1234-5678','public/photos/KQ4QvJqFlE0tymB4FhYCDyrTe7xOJqs3xfAE8nd9.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'25f9e794323b453885f5181f1b624d0b','Ceo7nBrtUmdZUYegGZsg8Dq8FGCLpWKoIj5lbUFrYZ1DkqcpJ7mY7tU3sNPOqFaY','2022-01-26 14:38:26','2022-01-26 14:38:26'),
(32,'松本','会社',NULL,NULL,'テスト会社',1,'mycb750+c@gmail.com','company','test','03-1234-5678',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'5f4dcc3b5aa765d61d8327deb882cf99','QPmm0Gb2k31NJSjTMpa39sk9vns9IVoa23wpAQLnfTQ565Q5JwkDosz3dz2LYUqk','2022-01-31 11:40:49','2022-01-31 11:40:49'),
(33,'Evgeni','Plushenco',NULL,NULL,NULL,0,'aiko0430@hotmail.com','jobSeeker',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'032a77715bbf4e1cd4a677558e14f822','tyR0W35yOtp5w8hFQNbNPFUeL5FxYq8lyvTLpSsP5n6j3ksPrLJ10wuMh7t7ogg5','2022-02-25 02:57:25','2022-02-25 02:57:25');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
