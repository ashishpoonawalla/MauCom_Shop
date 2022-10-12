/*
SQLyog - Free MySQL GUI v5.0
Host - 5.5.16-log : Database - maucomshop
*********************************************************************
Server version : 5.5.16-log
*/


create database if not exists `maucomshop`;

USE `maucomshop`;

/*Table structure for table `country1` */

DROP TABLE IF EXISTS `country1`;

CREATE TABLE `country1` (
  `country_name` varchar(128) NOT NULL,
  `iso_code_2` varchar(2) NOT NULL,
  `iso_code_3` varchar(3) NOT NULL,
  PRIMARY KEY (`country_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `country1` */

insert into `country1` values 
('Afghanistan','AF','AFG'),
('Albania','AL','ALB'),
('Algeria','DZ','DZA'),
('American Samoa','AS','ASM'),
('Andorra','AD','AND'),
('Angola','AO','AGO'),
('Anguilla','AI','AIA'),
('Antarctica','AQ','ATA'),
('Antigua and Barbuda','AG','ATG'),
('Argentina','AR','ARG'),
('Armenia','AM','ARM'),
('Aruba','AW','ABW'),
('Australia','AU','AUS'),
('Austria','AT','AUT'),
('Azerbaijan','AZ','AZE'),
('Bahamas','BS','BHS'),
('Bahrain','BH','BHR'),
('Bangladesh','BD','BGD'),
('Barbados','BB','BRB'),
('Belarus','BY','BLR'),
('Belgium','BE','BEL'),
('Belize','BZ','BLZ'),
('Benin','BJ','BEN'),
('Bermuda','BM','BMU'),
('Bhutan','BT','BTN'),
('Bolivia','BO','BOL'),
('Bosnia and Herzegovina','BA','BIH'),
('Botswana','BW','BWA'),
('Bouvet Island','BV','BVT'),
('Brazil','BR','BRA'),
('British Indian Ocean Territory','IO','IOT'),
('Brunei Darussalam','BN','BRN'),
('Bulgaria','BG','BGR'),
('Burkina Faso','BF','BFA'),
('Burundi','BI','BDI'),
('Cambodia','KH','KHM'),
('Cameroon','CM','CMR'),
('Canada','CA','CAN'),
('Cape Verde','CV','CPV'),
('Cayman Islands','KY','CYM'),
('Central African Republic','CF','CAF'),
('Chad','TD','TCD'),
('Chile','CL','CHL'),
('China','CN','CHN'),
('Christmas Island','CX','CXR'),
('Cocos (Keeling) Islands','CC','CCK'),
('Colombia','CO','COL'),
('Comoros','KM','COM'),
('Congo','CG','COG'),
('Cook Islands','CK','COK'),
('Costa Rica','CR','CRI'),
('Cote D\'Ivoire','CI','CIV'),
('Croatia','HR','HRV'),
('Cuba','CU','CUB'),
('Cyprus','CY','CYP'),
('Czech Republic','CZ','CZE'),
('Denmark','DK','DNK'),
('Djibouti','DJ','DJI'),
('Dominica','DM','DMA'),
('Dominican Republic','DO','DOM'),
('East Timor','TL','TLS'),
('Ecuador','EC','ECU'),
('Egypt','EG','EGY'),
('El Salvador','SV','SLV'),
('Equatorial Guinea','GQ','GNQ'),
('Eritrea','ER','ERI'),
('Estonia','EE','EST'),
('Ethiopia','ET','ETH'),
('Falkland Islands (Malvinas)','FK','FLK'),
('Faroe Islands','FO','FRO'),
('Fiji','FJ','FJI'),
('Finland','FI','FIN'),
('France, Metropolitan','FR','FRA'),
('French Guiana','GF','GUF'),
('French Polynesia','PF','PYF'),
('French Southern Territories','TF','ATF'),
('Gabon','GA','GAB'),
('Gambia','GM','GMB'),
('Georgia','GE','GEO'),
('Germany','DE','DEU'),
('Ghana','GH','GHA'),
('Gibraltar','GI','GIB'),
('Greece','GR','GRC'),
('Greenland','GL','GRL'),
('Grenada','GD','GRD'),
('Guadeloupe','GP','GLP'),
('Guam','GU','GUM'),
('Guatemala','GT','GTM'),
('Guinea','GN','GIN'),
('Guinea-Bissau','GW','GNB'),
('Guyana','GY','GUY'),
('Haiti','HT','HTI'),
('Heard and Mc Donald Islands','HM','HMD'),
('Honduras','HN','HND'),
('Hong Kong','HK','HKG'),
('Hungary','HU','HUN'),
('Iceland','IS','ISL'),
('India','IN','IND'),
('Indonesia','ID','IDN'),
('Iran (Islamic Republic of)','IR','IRN'),
('Iraq','IQ','IRQ'),
('Ireland','IE','IRL'),
('Israel','IL','ISR'),
('Italy','IT','ITA'),
('Jamaica','JM','JAM'),
('Japan','JP','JPN'),
('Jordan','JO','JOR'),
('Kazakhstan','KZ','KAZ'),
('Kenya','KE','KEN'),
('Kiribati','KI','KIR'),
('North Korea','KP','PRK'),
('Korea, Republic of','KR','KOR'),
('Kuwait','KW','KWT'),
('Kyrgyzstan','KG','KGZ'),
('Lao People\'s Democratic Republic','LA','LAO'),
('Latvia','LV','LVA'),
('Lebanon','LB','LBN'),
('Lesotho','LS','LSO'),
('Liberia','LR','LBR'),
('Libyan Arab Jamahiriya','LY','LBY'),
('Liechtenstein','LI','LIE'),
('Lithuania','LT','LTU'),
('Luxembourg','LU','LUX'),
('Macau','MO','MAC'),
('FYROM','MK','MKD'),
('Madagascar','MG','MDG'),
('Malawi','MW','MWI'),
('Malaysia','MY','MYS'),
('Maldives','MV','MDV'),
('Mali','ML','MLI'),
('Malta','MT','MLT'),
('Marshall Islands','MH','MHL'),
('Martinique','MQ','MTQ'),
('Mauritania','MR','MRT'),
('Mauritius','MU','MUS'),
('Mayotte','YT','MYT'),
('Mexico','MX','MEX'),
('Micronesia, Federated States of','FM','FSM'),
('Moldova, Republic of','MD','MDA'),
('Monaco','MC','MCO'),
('Mongolia','MN','MNG'),
('Montserrat','MS','MSR'),
('Morocco','MA','MAR'),
('Mozambique','MZ','MOZ'),
('Myanmar','MM','MMR'),
('Namibia','NA','NAM'),
('Nauru','NR','NRU'),
('Nepal','NP','NPL'),
('Netherlands','NL','NLD'),
('Netherlands Antilles','AN','ANT'),
('New Caledonia','NC','NCL'),
('New Zealand','NZ','NZL'),
('Nicaragua','NI','NIC'),
('Niger','NE','NER'),
('Nigeria','NG','NGA'),
('Niue','NU','NIU'),
('Norfolk Island','NF','NFK'),
('Northern Mariana Islands','MP','MNP'),
('Norway','NO','NOR'),
('Oman','OM','OMN'),
('Pakistan','PK','PAK'),
('Palau','PW','PLW'),
('Panama','PA','PAN'),
('Papua New Guinea','PG','PNG'),
('Paraguay','PY','PRY'),
('Peru','PE','PER'),
('Philippines','PH','PHL'),
('Pitcairn','PN','PCN'),
('Poland','PL','POL'),
('Portugal','PT','PRT'),
('Puerto Rico','PR','PRI'),
('Qatar','QA','QAT'),
('Reunion','RE','REU'),
('Romania','RO','ROM'),
('Russian Federation','RU','RUS'),
('Rwanda','RW','RWA'),
('Saint Kitts and Nevis','KN','KNA'),
('Saint Lucia','LC','LCA'),
('Saint Vincent and the Grenadines','VC','VCT'),
('Samoa','WS','WSM'),
('San Marino','SM','SMR'),
('Sao Tome and Principe','ST','STP'),
('Saudi Arabia','SA','SAU'),
('Senegal','SN','SEN'),
('Seychelles','SC','SYC'),
('Sierra Leone','SL','SLE'),
('Singapore','SG','SGP'),
('Slovak Republic','SK','SVK'),
('Slovenia','SI','SVN'),
('Solomon Islands','SB','SLB'),
('Somalia','SO','SOM'),
('South Africa','ZA','ZAF'),
('South Georgia &amp; South Sandwich Islands','GS','SGS'),
('Spain','ES','ESP'),
('Sri Lanka','LK','LKA'),
('St. Helena','SH','SHN'),
('St. Pierre and Miquelon','PM','SPM'),
('Sudan','SD','SDN'),
('Suriname','SR','SUR'),
('Svalbard and Jan Mayen Islands','SJ','SJM'),
('Swaziland','SZ','SWZ'),
('Sweden','SE','SWE'),
('Switzerland','CH','CHE'),
('Syrian Arab Republic','SY','SYR'),
('Taiwan','TW','TWN'),
('Tajikistan','TJ','TJK'),
('Tanzania, United Republic of','TZ','TZA'),
('Thailand','TH','THA'),
('Togo','TG','TGO'),
('Tokelau','TK','TKL'),
('Tonga','TO','TON'),
('Trinidad and Tobago','TT','TTO'),
('Tunisia','TN','TUN'),
('Turkey','TR','TUR'),
('Turkmenistan','TM','TKM'),
('Turks and Caicos Islands','TC','TCA'),
('Tuvalu','TV','TUV'),
('Uganda','UG','UGA'),
('Ukraine','UA','UKR'),
('United Arab Emirates','AE','ARE'),
('United Kingdom','GB','GBR'),
('United States','US','USA'),
('United States Minor Outlying Islands','UM','UMI'),
('Uruguay','UY','URY'),
('Uzbekistan','UZ','UZB'),
('Vanuatu','VU','VUT'),
('Vatican City State (Holy See)','VA','VAT'),
('Venezuela','VE','VEN'),
('Viet Nam','VN','VNM'),
('Virgin Islands (British)','VG','VGB'),
('Virgin Islands (U.S.)','VI','VIR'),
('Wallis and Futuna Islands','WF','WLF'),
('Western Sahara','EH','ESH'),
('Yemen','YE','YEM'),
('Democratic Republic of Congo','CD','COD'),
('Zambia','ZM','ZMB'),
('Zimbabwe','ZW','ZWE'),
('Montenegro','ME','MNE'),
('Serbia','RS','SRB'),
('Aaland Islands','AX','ALA'),
('Bonaire, Sint Eustatius and Saba','BQ','BES'),
('Curacao','CW','CUW'),
('Palestinian Territory, Occupied','PS','PSE'),
('South Sudan','SS','SSD'),
('St. Barthelemy','BL','BLM'),
('St. Martin (French part)','MF','MAF'),
('Canary Islands','IC','ICA'),
('Ascension Island (British)','AC','ASC'),
('Kosovo, Republic of','XK','UNK'),
('Isle of Man','IM','IMN'),
('Tristan da Cunha','TA','SHN'),
('Guernsey','GG','GGY'),
('Jersey','JE','JEY');

/*Table structure for table `newscomment` */

DROP TABLE IF EXISTS `newscomment`;

CREATE TABLE `newscomment` (
  `commentID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `newscomment` varchar(1000) DEFAULT NULL,
  `date` varchar(30) DEFAULT NULL,
  `userimage` varchar(200) DEFAULT NULL,
  `postID` int(11) DEFAULT NULL,
  PRIMARY KEY (`commentID`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `newscomment` */

insert into `newscomment` values 
(15,'ashish@gmail.com','An upcoming Apple Watch app will enable the wearer to switch a lightbulb on.','23.Mar','img_profile/ashish@gmail.com.JPG',14),
(16,'sachin@gmail.com','Sony has launched PumpX','23.Mar','img_profile/sachin@gmail.com.JPG',14),
(17,'sachin@gmail.com','testing..','23.Mar','img_profile/sachin@gmail.com.JPG',12),
(18,'sachin@gmail.com','hello !','23.Mar','img_profile/sachin@gmail.com.JPG',11),
(19,'ashish@gmail.com','what is this..','23.Mar','img_profile/ashish@gmail.com.JPG',15);

/*Table structure for table `newspost` */

DROP TABLE IF EXISTS `newspost`;

CREATE TABLE `newspost` (
  `postID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `news` varchar(1000) NOT NULL,
  `date` varchar(30) DEFAULT NULL,
  `userimage` varchar(200) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `walllink` varchar(100) DEFAULT NULL,
  `comments` varchar(10) DEFAULT NULL,
  `likecount` int(11) DEFAULT NULL,
  PRIMARY KEY (`postID`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `newspost` */

insert into `newspost` values 
(11,'ashish@gmail.com','hi','23.Mar','img_profile/ashish@gmail.com.JPG','Ashish Omar',NULL,' ',0),
(12,'ashish@gmail.com','this is first testing. ..this is first testing. ..this is first testing. ..this is first testing. ..this is first testing. ..this is first testing. ..this is first testing. ..this is first testing. ..','23.Mar','img_profile/ashish@gmail.com.JPG','Ashish Omar',NULL,' ',0),
(13,'sachin@gmail.com','Hi i am here','23.Mar','img_profile/sachin@gmail.com.JPG','Sachin Tendulker',NULL,' ',0),
(14,'maucom.in@gmail.com','Handset maker Karbonn entered the mobile accessories business and said its revenues from this vertical may touch Rs 100 crore by March 2016.','23.Mar','img_profile/maucom.in@gmail.com.JPG','MauCom Solutions',NULL,' ',0),
(15,'maucom.in@gmail.com','British doctors have welcomed the initiative. but caution that the information needs to be edited to become suitable for local markets.','23.Mar','img_profile/maucom.in@gmail.com.JPG','MauCom Solutions',NULL,' ',0),
(16,'sachin@gmail.com','hi buddy','20.Apr','img_profile/sachin@gmail.com.JPG','Sachin Tendulker',NULL,' ',0);

/*Table structure for table `tblbanner` */

DROP TABLE IF EXISTS `tblbanner`;

CREATE TABLE `tblbanner` (
  `bannerid` int(11) NOT NULL AUTO_INCREMENT,
  `bannerimg` varchar(250) DEFAULT NULL,
  `productid` int(11) DEFAULT NULL,
  PRIMARY KEY (`bannerid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tblbanner` */

insert into `tblbanner` values 
(1,'image_shop/banner/slide1.jpg',7),
(2,'image_shop/banner/slide2.jpg',5);

/*Table structure for table `tblbrand` */

DROP TABLE IF EXISTS `tblbrand`;

CREATE TABLE `tblbrand` (
  `brandid` varchar(50) NOT NULL,
  `branddetail` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`brandid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tblbrand` */

insert into `tblbrand` values 
('All Brand',NULL),
('Apple',NULL),
('Canon',NULL),
('HP',NULL),
('HTC',NULL),
('Nikon',NULL),
('Samsung',NULL),
('Sony',NULL);

/*Table structure for table `tblcategory` */

DROP TABLE IF EXISTS `tblcategory`;

CREATE TABLE `tblcategory` (
  `categoryID` varchar(50) NOT NULL,
  `cat_detail` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`categoryID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tblcategory` */

insert into `tblcategory` values 
('Camera',''),
('Desktop',''),
('Laptop',''),
('Mobile',''),
('Music Player',''),
('Tablet','');

/*Table structure for table `tblcustomer` */

DROP TABLE IF EXISTS `tblcustomer`;

CREATE TABLE `tblcustomer` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `address1` varchar(100) DEFAULT NULL,
  `address2` varchar(100) DEFAULT NULL,
  `ccity` varchar(50) DEFAULT NULL,
  `pinorzip` varchar(10) DEFAULT NULL,
  `cstate` varchar(50) DEFAULT NULL,
  `ccountry` varchar(50) DEFAULT NULL,
  `email1` varchar(100) DEFAULT NULL,
  `mobile1` varchar(15) DEFAULT NULL,
  `landline1` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tblcustomer` */

insert into `tblcustomer` values 
('aa1@aa.com','0','Ashish','Omar','FL. No. 2, Ganesh Chanber','BalajiNagar, Dhankawadi','Pune','411043','Maharastra','India','aa1@aa.com','7276116725',NULL),
('angel1@gmail.com','1111','aa','aa','54654','456','55','456','54654','India','angel1@gmail.com','54',NULL);

/*Table structure for table `tblmail` */

DROP TABLE IF EXISTS `tblmail`;

CREATE TABLE `tblmail` (
  `mailid` int(11) NOT NULL AUTO_INCREMENT,
  `smail` varchar(75) DEFAULT NULL,
  `sname` varchar(50) DEFAULT NULL,
  `smessage` varchar(1000) DEFAULT NULL,
  `sdate` varchar(45) DEFAULT NULL,
  `sstatus` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`mailid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tblmail` */

/*Table structure for table `tblorder` */

DROP TABLE IF EXISTS `tblorder`;

CREATE TABLE `tblorder` (
  `orderid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `address1` varchar(100) DEFAULT NULL,
  `address2` varchar(100) DEFAULT NULL,
  `ccity` varchar(50) DEFAULT NULL,
  `pinorzip` varchar(10) DEFAULT NULL,
  `cstate` varchar(50) DEFAULT NULL,
  `ccountry` varchar(50) DEFAULT NULL,
  `email1` varchar(100) DEFAULT NULL,
  `mobile1` varchar(15) DEFAULT NULL,
  `landline1` varchar(15) DEFAULT NULL,
  `fname_delivery` varchar(50) DEFAULT NULL,
  `lname_delivery` varchar(50) DEFAULT NULL,
  `address1_delivery` varchar(100) DEFAULT NULL,
  `address2_delivery` varchar(100) DEFAULT NULL,
  `ccity_delivery` varchar(50) DEFAULT NULL,
  `pinorzip_delivery` varchar(10) DEFAULT NULL,
  `cstate_delivery` varchar(50) DEFAULT NULL,
  `ccountry_delivery` varchar(50) DEFAULT NULL,
  `mobile1_delivery` varchar(15) DEFAULT NULL,
  `landline1_delivery` varchar(15) DEFAULT NULL,
  `comments_buyer` varchar(300) DEFAULT NULL,
  `status1` varchar(20) DEFAULT NULL,
  `total` decimal(15,2) DEFAULT NULL,
  `dateoforder` varchar(15) DEFAULT NULL,
  `session_id1` varchar(75) DEFAULT NULL,
  `deliveryoption` varchar(45) DEFAULT NULL,
  `dateofdelivered` varchar(15) DEFAULT NULL,
  `comments_saler` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`orderid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tblorder` */

/*Table structure for table `tblorder_detail` */

DROP TABLE IF EXISTS `tblorder_detail`;

CREATE TABLE `tblorder_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orderid` int(11) DEFAULT NULL,
  `productid` int(11) DEFAULT NULL,
  `quantity1` int(11) DEFAULT NULL,
  `price1` decimal(15,2) DEFAULT NULL,
  `amount1` decimal(15,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tblorder_detail` */

/*Table structure for table `tblproducts` */

DROP TABLE IF EXISTS `tblproducts`;

CREATE TABLE `tblproducts` (
  `productid` int(11) NOT NULL AUTO_INCREMENT,
  `productName` varchar(100) DEFAULT NULL,
  `descriptions` varchar(2000) DEFAULT NULL,
  `price` decimal(15,2) DEFAULT NULL,
  `categoryID` varchar(50) DEFAULT NULL,
  `sku` varchar(20) DEFAULT NULL,
  `show_homepage` varchar(5) DEFAULT NULL,
  `tax` decimal(15,2) DEFAULT NULL,
  `discount` decimal(15,2) DEFAULT NULL,
  `image1` varchar(250) DEFAULT NULL,
  `image2` varchar(250) DEFAULT NULL,
  `image3` varchar(250) DEFAULT NULL,
  `brand` varchar(50) DEFAULT NULL,
  `productcode` varchar(50) DEFAULT NULL,
  `availableinstock` varchar(20) DEFAULT NULL,
  `stockcount` int(11) DEFAULT NULL,
  PRIMARY KEY (`productid`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `tblproducts` */

insert into `tblproducts` values 
(1,'Canon EOS 5D','Canon\'s press material for the EOS 5D states that it \'defines (a) new D-SLR category\', while we\'re not typically too concerned with marketing talk this particular statement is clearly pretty accurate. The EOS 5D is unlike any previous digital SLR in that it combines a full-frame (35 mm sized) high resolution sensor (12.8 megapixels) with a relatively compact body (slightly larger than the EOS 20D, although in your hand it feels noticeably \'chunkier\'). The EOS 5D is aimed to slot in between the EOS 20D and the EOS-1D professional digital SLR\'s, an important difference when compared to the latter is that the EOS 5D doesn\'t have any environmental seals. While Canon don\'t specifically refer to the EOS 5D as a \'professional\' digital SLR it will have obvious appeal to professionals who want a high quality digital SLR in a body lighter than the EOS-1D. It will also no doubt appeal to current EOS 20D owners (although lets hope they\'ve not bought too many EF-S lenses...)','4000.00','Camera','Pcs','YES','0.00','0.00','image_shop/canon_eos_5d_1.jpg','image_shop/canon_eos_5d_2.jpg','image_shop/canon_eos_5d_3.jpg','Canon','Product 3','YES',0),
(2,'Nikon D300','Engineered with pro-level features and performance, the 12.3-effective-megapixel D300 combines brand new technologies with advanced features inherited from Nikon\'s newly announced D3 professional digital SLR camera to offer serious photographers remarkable performance combined with agility.','3600.00','Camera','Pcs','NO','0.00','0.00','image_shop/nikon_d300_1.jpg','image_shop/nikon_d300_2.jpg','image_shop/nikon_d300_3.jpg','Nikon','Product 4','YES',0),
(3,'iMac','Just when you thought iMac had everything, now there´s even more. More powerful Intel Core 2 Duo processors. And more memory standard. Combine this with Mac OS X Leopard and iLife ´08, and it´s more all-in-one than ever. iMac packs amazing performance into a stunningly slim space.','50000.00','Desktop','Pcs','YES','0.00','0.00','image_shop/imac_1.jpg','image_shop/imac_2.jpg','image_shop/imac_3.jpg','Apple','Product 1','YES',0),
(4,'HP LP3065','Stop your co-workers in their tracks with the stunning new 30-inch diagonal HP LP3065 Flat Panel Monitor. This flagship monitor features best-in-class performance and presentation features on a huge wide-aspect screen while letting you work as comfortably as possible - you might even forget you\'re at the office','35000.00','Laptop','Pcs','NO','0.00','0.00','image_shop/hp_1.jpg','image_shop/hp_2.jpg','image_shop/hp_3.jpg','HP','Product 2','YES',0),
(5,'MacBook Air','MacBook Air is ultrathin, ultraportable, and ultra unlike anything else. But you don’t lose inches and pounds overnight. It’s the result of rethinking conventions. Of multiple wireless innovations. And of breakthrough design. With MacBook Air, mobile computing suddenly has a new standard.','90000.00','Laptop','Pcs','YES','2.00','10.00','image_shop/macbook_air_1.jpg','image_shop/macbook_air_2.jpg','image_shop/macbook_air_3.jpg','Apple','Product 5','YES',0),
(6,'Samsung Galaxy Tab 10.1','Samsung Galaxy Tab 10.1, is the world’s thinnest tablet, measuring 8.6 mm thickness, running with Android 3.0 Honeycomb OS on a 1GHz dual-core Tegra 2 processor, similar to its younger brother Samsung Galaxy Tab 8.9. Samsung Galaxy Tab 10.1 gives pure Android 3.0 experience, adding its new TouchWiz UX or TouchWiz 4.0 – includes a live panel, which lets you to customize with different content, such as your pictures, bookmarks, and social feeds, sporting a 10.1 inches WXGA capacitive touch screen with 1280 x 800 pixels of resolution, equipped with 3 megapixel rear camera with LED flash and a 2 megapixel front camera, HSPA+ connectivity up to 21Mbps, 720p HD video recording capability, 1080p HD playback, DLNA support, Bluetooth 2.1, USB 2.0, gyroscope, Wi-Fi 802.11 a/b/g/n, micro-SD slot, 3.5mm headphone jack, and SIM slot, including the Samsung Stick – a Bluetooth microphone that can be carried in a pocket like a pen and sound dock with powered subwoofer. Samsung Galaxy Tab 10.1 will come in 16GB / 32GB / 64GB verities and pre-loaded with Social Hub, Reader’s Hub, Music Hub and Samsung Mini Apps Tray – which gives you access to more commonly used apps to help ease multitasking and it is capable of Adobe Flash Player 10.2, powered by 6860mAh battery that gives you 10hours of video-playback time. ','10000.00','Tablet','Pcs','YES','0.00','0.00','image_shop/samsung_tab_1.jpg','image_shop/samsung_tab_2.jpg','image_shop/samsung_tab_3.jpg','Samsung','Product 6','YES',0),
(7,'iPhone','iPhone is a revolutionary new mobile phone that allows you to make a call by simply tapping a name or number in your address book, a favorites list, or a call log. It also automatically syncs all your contacts from a PC, Mac, or Internet service. And it lets you select and listen to voicemail messages in whatever order you want just like email.','50000.00','Mobile','Pcs','YES','0.00','0.00','image_shop/iphone_1.jpg','image_shop/iphone_2.jpg','image_shop/iphone_3.jpg','Apple','Product 7','YES',0),
(8,'HTC Touch HD','HTC Touch - in High Definition. Watch music videos and streaming content in awe-inspiring high definition clarity for a mobile experience you never thought possible. Seductively sleek, the HTC Touch HD provides the next generation of mobile functionality, all at a simple touch. Fully integrated with Windows Mobile Professional 6.1, ultrafast 3.5G, GPS, 5MP camera, plus lots more - all delivered on a breathtakingly crisp 3.8\" WVGA touchscreen - you can take control of your mobile world with the HTC Touch HD. <br>Features<br>Processor Qualcomm® MSM 7201A™ 528 MHz','30000.00','Mobile','Pcs','YES','0.00','0.00','image_shop/htc_touch_hd_1.jpg','image_shop/htc_touch_hd_2.jpg','image_shop/htc_touch_hd_3.jpg','HTC','Product 8','YES',0),
(9,'iPod Classic','With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go. Browse through your music collection by flipping through album art. Select an album to turn it over and see the track list. Experience a whole new way to browse and view your music and video. Beautiful, durable, and sleeker than ever, iPod classic now features an anodized aluminum and polished stainless steel enclosure with rounded edges.','8000.00','Music Player','Pcs','YES','0.00','0.00','image_shop/ipod_classic_1.jpg','image_shop/ipod_classic_2.jpg','image_shop/ipod_classic_3.jpg','Apple','Product 9','YES',0),
(10,'iPod Shuffle','Clip on the worlds most wearable music player and take up to 240 songs with you anywhere. Choose from five colors including four new hues to make your musical fashion statement. With iTunes autofill, iPod shuffle can deliver a new musical experience every time you sync. For more randomness, you can shuffle songs during playback with the slide of a switch. Charge and sync with the included USB dock. Operate the iPod shuffle controls with one hand. Enjoy up to 12 hours straight of skip-free music playback.','5000.00','Music Player','Pcs','YES','0.00','0.00','image_shop/ipod_shuffle_1.jpg','image_shop/ipod_shuffle_2.jpg','image_shop/ipod_shuffle_3.jpg','Apple','Product 10','YES',0);

/*Table structure for table `user1` */

DROP TABLE IF EXISTS `user1`;

CREATE TABLE `user1` (
  `username` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `profileimage` varchar(200) DEFAULT NULL,
  `mobileno` varchar(12) DEFAULT NULL,
  `sequrityQuestion` varchar(50) DEFAULT NULL,
  `answer` varchar(50) DEFAULT NULL,
  `shopname` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `address1` varchar(100) DEFAULT NULL,
  `pinorzip` varchar(8) DEFAULT NULL,
  `emailverify` varchar(5) DEFAULT NULL,
  `mobileverify` varchar(5) DEFAULT NULL,
  `dateofcreation` varchar(15) DEFAULT NULL,
  `membertype` varchar(10) DEFAULT NULL,
  `shoplogo` varchar(250) DEFAULT NULL,
  `email1` varchar(100) DEFAULT NULL,
  `visitors` int(11) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user1` */

insert into `user1` values 
('angel@gmail.com','1111','Angel Omar','img_profile/angel@gmail.com.JPG',NULL,NULL,NULL,'Angel Mega Mart','Pune','Deccan','411001',NULL,'YES',NULL,NULL,'img_profile/angel@gmail.comlogo.JPG',NULL,NULL),
('arti@gmail.com','1111','Arti Omar','img_profile/arti@gmail.com.JPG',NULL,NULL,NULL,'Arti Electroinics','Pune','Balaji Nagar','411043',NULL,'YES',NULL,NULL,'img_profile/arti@gmail.comlogo.JPG',NULL,NULL),
('ashish@gmail.com','1111','Ashish Omar','img_profile/ashish@gmail.com.JPG','9800000011','',NULL,'Ganesh Store','Pune','Balaji Nagar','411043',NULL,'YES',NULL,NULL,'img_profile/ashish@gmail.comlogo.JPG',NULL,7);

/*Table structure for table `zz9800000011banner` */

DROP TABLE IF EXISTS `zz9800000011banner`;

CREATE TABLE `zz9800000011banner` (
  `bannerid` int(11) NOT NULL AUTO_INCREMENT,
  `bannerimg` varchar(250) DEFAULT NULL,
  `productid` int(11) DEFAULT NULL,
  PRIMARY KEY (`bannerid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `zz9800000011banner` */

insert into `zz9800000011banner` values 
(1,'image_shop/banner/slide1.jpg',7),
(2,'image_shop/banner/slide2.jpg',5);

/*Table structure for table `zz9800000011brand` */

DROP TABLE IF EXISTS `zz9800000011brand`;

CREATE TABLE `zz9800000011brand` (
  `brandid` varchar(50) NOT NULL,
  `branddetail` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`brandid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `zz9800000011brand` */

insert into `zz9800000011brand` values 
('All Brand',NULL),
('Apple',NULL),
('Canon',NULL),
('HP',NULL),
('HTC',NULL),
('Nikon',NULL),
('Samsung',NULL),
('Sony',NULL);

/*Table structure for table `zz9800000011category` */

DROP TABLE IF EXISTS `zz9800000011category`;

CREATE TABLE `zz9800000011category` (
  `categoryID` varchar(50) NOT NULL,
  `cat_detail` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`categoryID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `zz9800000011category` */

insert into `zz9800000011category` values 
('Camera',''),
('Desktop',''),
('Laptop',''),
('Mobile',''),
('Music Player',''),
('Tablet','');

/*Table structure for table `zz9800000011mail` */

DROP TABLE IF EXISTS `zz9800000011mail`;

CREATE TABLE `zz9800000011mail` (
  `mailid` int(11) NOT NULL AUTO_INCREMENT,
  `smail` varchar(75) DEFAULT NULL,
  `sname` varchar(50) DEFAULT NULL,
  `smessage` varchar(1000) DEFAULT NULL,
  `sdate` varchar(45) DEFAULT NULL,
  `sstatus` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`mailid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `zz9800000011mail` */

insert into `zz9800000011mail` values 
(2,'maucom.in@gmail.com','Angel ','Hi, i am sending a test messag\'s.','1-5-2015','unread'),
(3,'raj@gmail.com','Rajesh Khanna','Please send us order confirmation..','1-5-2015','unread'),
(4,'mukesh@gmail.com','Mukesh Khanna','Hi i like your product..','02-05-2015','unread');

/*Table structure for table `zz9800000011order` */

DROP TABLE IF EXISTS `zz9800000011order`;

CREATE TABLE `zz9800000011order` (
  `orderid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `address1` varchar(100) DEFAULT NULL,
  `address2` varchar(100) DEFAULT NULL,
  `ccity` varchar(50) DEFAULT NULL,
  `pinorzip` varchar(10) DEFAULT NULL,
  `cstate` varchar(50) DEFAULT NULL,
  `ccountry` varchar(50) DEFAULT NULL,
  `email1` varchar(100) DEFAULT NULL,
  `mobile1` varchar(15) DEFAULT NULL,
  `landline1` varchar(15) DEFAULT NULL,
  `fname_delivery` varchar(50) DEFAULT NULL,
  `lname_delivery` varchar(50) DEFAULT NULL,
  `address1_delivery` varchar(100) DEFAULT NULL,
  `address2_delivery` varchar(100) DEFAULT NULL,
  `ccity_delivery` varchar(50) DEFAULT NULL,
  `pinorzip_delivery` varchar(10) DEFAULT NULL,
  `cstate_delivery` varchar(50) DEFAULT NULL,
  `ccountry_delivery` varchar(50) DEFAULT NULL,
  `mobile1_delivery` varchar(15) DEFAULT NULL,
  `landline1_delivery` varchar(15) DEFAULT NULL,
  `comments_buyer` varchar(300) DEFAULT NULL,
  `status1` varchar(20) DEFAULT NULL,
  `total` decimal(15,2) DEFAULT NULL,
  `dateoforder` varchar(15) DEFAULT NULL,
  `session_id1` varchar(75) DEFAULT NULL,
  `deliveryoption` varchar(45) DEFAULT NULL,
  `dateofdelivered` varchar(15) DEFAULT NULL,
  `comments_saler` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`orderid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `zz9800000011order` */

insert into `zz9800000011order` values 
(1,'','Ashish','Omar','Balaji Nagar','','Pune','411043','Maharastra','India','info@maucom.co.in','7667667766','02088374747','Ashish','Omar','Balaji Nagar','','Pune','411043','Maharastra','India','7667667766','02088374747','contact me before delivery','Order Pending','50000.00','02-05-2015','49noppos1gpcpt4htf9fpf3np01430553848','Cash On Delivery',NULL,NULL),
(2,'','Manoj','Kumar','Deccan','','Pune','411001','Maharastra','India','manoj@gmail.com','7722772277','0208848848848','Manoj','Kumar','Deccan','','Pune','411001','Maharastra','India','7722772277','0208848848848','no comment','Order Pending','25000.00','02-05-2015','49noppos1gpcpt4htf9fpf3np01430555640','Cash On Delivery',NULL,NULL);

/*Table structure for table `zz9800000011order_detail` */

DROP TABLE IF EXISTS `zz9800000011order_detail`;

CREATE TABLE `zz9800000011order_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orderid` int(11) DEFAULT NULL,
  `productid` int(11) DEFAULT NULL,
  `quantity1` int(11) DEFAULT NULL,
  `price1` decimal(15,2) DEFAULT NULL,
  `amount1` decimal(15,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `zz9800000011order_detail` */

insert into `zz9800000011order_detail` values 
(1,1,3,1,'50000.00','50000.00'),
(2,2,6,2,'10000.00','20000.00'),
(3,2,10,1,'5000.00','5000.00');

/*Table structure for table `zz9800000011products` */

DROP TABLE IF EXISTS `zz9800000011products`;

CREATE TABLE `zz9800000011products` (
  `productid` int(11) NOT NULL AUTO_INCREMENT,
  `productName` varchar(100) DEFAULT NULL,
  `descriptions` varchar(2000) DEFAULT NULL,
  `price` decimal(15,2) DEFAULT NULL,
  `categoryID` varchar(50) DEFAULT NULL,
  `sku` varchar(20) DEFAULT NULL,
  `show_homepage` varchar(5) DEFAULT NULL,
  `tax` decimal(15,2) DEFAULT NULL,
  `discount` decimal(15,2) DEFAULT NULL,
  `image1` varchar(250) DEFAULT NULL,
  `image2` varchar(250) DEFAULT NULL,
  `image3` varchar(250) DEFAULT NULL,
  `brand` varchar(50) DEFAULT NULL,
  `productcode` varchar(50) DEFAULT NULL,
  `availableinstock` varchar(20) DEFAULT NULL,
  `stockcount` int(11) DEFAULT NULL,
  PRIMARY KEY (`productid`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `zz9800000011products` */

insert into `zz9800000011products` values 
(1,'Canon EOS 5D','Canon\'s press material for the EOS 5D states that it \'defines (a) new D-SLR category\', while we\'re not typically too concerned with marketing talk this particular statement is clearly pretty accurate. The EOS 5D is unlike any previous digital SLR in that it combines a full-frame (35 mm sized) high resolution sensor (12.8 megapixels) with a relatively compact body (slightly larger than the EOS 20D, although in your hand it feels noticeably \'chunkier\'). The EOS 5D is aimed to slot in between the EOS 20D and the EOS-1D professional digital SLR\'s, an important difference when compared to the latter is that the EOS 5D doesn\'t have any environmental seals. While Canon don\'t specifically refer to the EOS 5D as a \'professional\' digital SLR it will have obvious appeal to professionals who want a high quality digital SLR in a body lighter than the EOS-1D. It will also no doubt appeal to current EOS 20D owners (although lets hope they\'ve not bought too many EF-S lenses...)','4000.00','Camera','Pcs','YES','0.00','0.00','image_shop/canon_eos_5d_1.jpg','image_shop/canon_eos_5d_2.jpg','image_shop/canon_eos_5d_3.jpg','Canon','Product 3','YES',0),
(2,'Nikon D300','Engineered with pro-level features and performance, the 12.3-effective-megapixel D300 combines brand new technologies with advanced features inherited from Nikon\'s newly announced D3 professional digital SLR camera to offer serious photographers remarkable performance combined with agility.','3600.00','Camera','Pcs','NO','0.00','0.00','image_shop/nikon_d300_1.jpg','image_shop/nikon_d300_2.jpg','image_shop/nikon_d300_3.jpg','Nikon','Product 4','YES',0),
(3,'iMac','Just when you thought iMac had everything, now there´s even more. More powerful Intel Core 2 Duo processors. And more memory standard. Combine this with Mac OS X Leopard and iLife ´08, and it´s more all-in-one than ever. iMac packs amazing performance into a stunningly slim space.','50000.00','Desktop','Pcs','YES','0.00','0.00','image_shop/imac_1.jpg','image_shop/imac_2.jpg','image_shop/imac_3.jpg','Apple','Product 1','YES',0),
(4,'HP LP3065','Stop your co-workers in their tracks with the stunning new 30-inch diagonal HP LP3065 Flat Panel Monitor. This flagship monitor features best-in-class performance and presentation features on a huge wide-aspect screen while letting you work as comfortably as possible - you might even forget you\'re at the office','35000.00','Laptop','Pcs','NO','0.00','0.00','image_shop/hp_1.jpg','image_shop/hp_2.jpg','image_shop/hp_3.jpg','HP','Product 2','YES',0),
(5,'MacBook Air','MacBook Air is ultrathin, ultraportable, and ultra unlike anything else. But you don’t lose inches and pounds overnight. It’s the result of rethinking conventions. Of multiple wireless innovations. And of breakthrough design. With MacBook Air, mobile computing suddenly has a new standard.','90000.00','Laptop','Pcs','YES','2.00','10.00','image_shop/macbook_air_1.jpg','image_shop/macbook_air_2.jpg','image_shop/macbook_air_3.jpg','Apple','Product 5','YES',0),
(6,'Samsung Galaxy Tab 10.1','Samsung Galaxy Tab 10.1, is the world’s thinnest tablet, measuring 8.6 mm thickness, running with Android 3.0 Honeycomb OS on a 1GHz dual-core Tegra 2 processor, similar to its younger brother Samsung Galaxy Tab 8.9. Samsung Galaxy Tab 10.1 gives pure Android 3.0 experience, adding its new TouchWiz UX or TouchWiz 4.0 – includes a live panel, which lets you to customize with different content, such as your pictures, bookmarks, and social feeds, sporting a 10.1 inches WXGA capacitive touch screen with 1280 x 800 pixels of resolution, equipped with 3 megapixel rear camera with LED flash and a 2 megapixel front camera, HSPA+ connectivity up to 21Mbps, 720p HD video recording capability, 1080p HD playback, DLNA support, Bluetooth 2.1, USB 2.0, gyroscope, Wi-Fi 802.11 a/b/g/n, micro-SD slot, 3.5mm headphone jack, and SIM slot, including the Samsung Stick – a Bluetooth microphone that can be carried in a pocket like a pen and sound dock with powered subwoofer. Samsung Galaxy Tab 10.1 will come in 16GB / 32GB / 64GB verities and pre-loaded with Social Hub, Reader’s Hub, Music Hub and Samsung Mini Apps Tray – which gives you access to more commonly used apps to help ease multitasking and it is capable of Adobe Flash Player 10.2, powered by 6860mAh battery that gives you 10hours of video-playback time. ','10000.00','Tablet','Pcs','YES','0.00','0.00','image_shop/samsung_tab_1.jpg','image_shop/samsung_tab_2.jpg','image_shop/samsung_tab_3.jpg','Samsung','Product 6','YES',0),
(7,'iPhone','iPhone is a revolutionary new mobile phone that allows you to make a call by simply tapping a name or number in your address book, a favorites list, or a call log. It also automatically syncs all your contacts from a PC, Mac, or Internet service. And it lets you select and listen to voicemail messages in whatever order you want just like email.','50000.00','Mobile','Pcs','YES','0.00','0.00','image_shop/iphone_1.jpg','image_shop/iphone_2.jpg','image_shop/iphone_3.jpg','Apple','Product 7','YES',0),
(8,'HTC Touch HD','HTC Touch - in High Definition. Watch music videos and streaming content in awe-inspiring high definition clarity for a mobile experience you never thought possible. Seductively sleek, the HTC Touch HD provides the next generation of mobile functionality, all at a simple touch. Fully integrated with Windows Mobile Professional 6.1, ultrafast 3.5G, GPS, 5MP camera, plus lots more - all delivered on a breathtakingly crisp 3.8\" WVGA touchscreen - you can take control of your mobile world with the HTC Touch HD. <br>Features<br>Processor Qualcomm® MSM 7201A™ 528 MHz','30000.00','Mobile','Pcs','YES','0.00','0.00','image_shop/htc_touch_hd_1.jpg','image_shop/htc_touch_hd_2.jpg','image_shop/htc_touch_hd_3.jpg','HTC','Product 8','YES',0),
(9,'iPod Classic','With 80GB or 160GB of storage and up to 40 hours of battery life, the new iPod classic lets you enjoy up to 40,000 songs or up to 200 hours of video or any combination wherever you go. Browse through your music collection by flipping through album art. Select an album to turn it over and see the track list. Experience a whole new way to browse and view your music and video. Beautiful, durable, and sleeker than ever, iPod classic now features an anodized aluminum and polished stainless steel enclosure with rounded edges.','8000.00','Music Player','Pcs','YES','0.00','0.00','image_shop/ipod_classic_1.jpg','image_shop/ipod_classic_2.jpg','image_shop/ipod_classic_3.jpg','Apple','Product 9','YES',0),
(10,'iPod Shuffle','Clip on the worlds most wearable music player and take up to 240 songs with you anywhere. Choose from five colors including four new hues to make your musical fashion statement. With iTunes autofill, iPod shuffle can deliver a new musical experience every time you sync. For more randomness, you can shuffle songs during playback with the slide of a switch. Charge and sync with the included USB dock. Operate the iPod shuffle controls with one hand. Enjoy up to 12 hours straight of skip-free music playback.','5000.00','Music Player','Pcs','YES','0.00','0.00','image_shop/ipod_shuffle_1.jpg','image_shop/ipod_shuffle_2.jpg','image_shop/ipod_shuffle_3.jpg','Apple','Product 10','YES',0);
