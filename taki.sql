# Host: localhost  (Version: 5.5.5-10.1.28-MariaDB)
# Date: 2018-01-11 22:16:00
# Generator: MySQL-Front 5.3  (Build 1.18)

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE */;
/*!40101 SET SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES */;
/*!40103 SET SQL_NOTES='ON' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

#
# Source for table "admin"
#

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `adsoy` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `sifre` int(11) DEFAULT NULL,
  `yetki` varchar(10) COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

#
# Data for table "admin"
#

INSERT INTO `admin` VALUES (1,'Gülfem Yücel','gulfemnur93@gmail.com',1234,'admin','aktif',NULL,'0000-00-00 00:00:00');

#
# Source for table "ayarlar"
#

DROP TABLE IF EXISTS `ayarlar`;
CREATE TABLE `ayarlar` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `keywords` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `smtpserver` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `smtpport` int(11) DEFAULT NULL,
  `smtpemail` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `password` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL,
  `adres` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  `sehir` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tel` varchar(15) COLLATE utf8_turkish_ci DEFAULT NULL,
  `fax` varchar(15) COLLATE utf8_turkish_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `hakkimizda` text COLLATE utf8_turkish_ci,
  `iletisim` text COLLATE utf8_turkish_ci,
  `facebook` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `twitter` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `instagram` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `pinterest` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

#
# Data for table "ayarlar"
#

INSERT INTO `ayarlar` VALUES (1,'gülfem','bj','hk','knk','',0,'','123','hürriyet','tdağ','654314',NULL,NULL,'','ergrtg','','','','');

#
# Source for table "hakkimizda"
#

DROP TABLE IF EXISTS `hakkimizda`;
CREATE TABLE `hakkimizda` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `adsoy` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tel` int(11) DEFAULT NULL,
  `adres` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama` longtext COLLATE utf8_turkish_ci,
  `resim` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

#
# Data for table "hakkimizda"
#

INSERT INTO `hakkimizda` VALUES (1,'GÜLFEM NUR YÜCEL','gulfemnur93@gmail.com',2147483647,'Hürriyet Mah. Yeşilyurt Cad. Mart Sok. Ferah Sitesi B Blok D:4 Süleymanpaşa/TEKİRDAĞ',NULL,NULL);

#
# Source for table "kampanya"
#

DROP TABLE IF EXISTS `kampanya`;
CREATE TABLE `kampanya` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

#
# Data for table "kampanya"
#

INSERT INTO `kampanya` VALUES (1,'kampanya1','yeni-taki-modelleri-108.jpg'),(2,'kampanya2','takivadisi-slider-2-1140x380.png'),(3,'kampanya3','cingene-ruhum.jpg'),(4,'kampanya4','4_14.10.2017_412ff4b.jpg');

#
# Source for table "kargosiparis"
#

DROP TABLE IF EXISTS `kargosiparis`;
CREATE TABLE `kargosiparis` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `urun_adi` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `adres` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `musteri` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `fiyat` float DEFAULT NULL,
  `durum` varchar(5) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

#
# Data for table "kargosiparis"
#


#
# Source for table "kategoriler"
#

DROP TABLE IF EXISTS `kategoriler`;
CREATE TABLE `kategoriler` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `adi` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `keywords` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

#
# Data for table "kategoriler"
#

INSERT INTO `kategoriler` VALUES (1,0,'Bileklik',NULL,NULL,'8694000166549-7-17-5-1_min.jpg','mevcut','0000-00-00 00:00:00'),(3,0,'Küpe',NULL,NULL,'3_boncuklu_kupe.jpg','mevcut','0000-00-00 00:00:00'),(4,0,'Kolye',NULL,NULL,'etnik_kolye.png','mevcut','0000-00-00 00:00:00'),(5,0,'Halhal',NULL,NULL,'boncuk_halhal.jpg','mevcut','0000-00-00 00:00:00'),(7,0,'Vücut Takısı',NULL,NULL,'tasli_vucuttakisi.jpg','mevcut','0000-00-00 00:00:00'),(8,0,'Yüzük',NULL,NULL,'eklem_yuzuk.jpg','mevcut','0000-00-00 00:00:00'),(9,0,'Şahmeran',NULL,NULL,'dantel_sahmeran.jpg','mevcut','0000-00-00 00:00:00');

#
# Source for table "mesajlar"
#

DROP TABLE IF EXISTS `mesajlar`;
CREATE TABLE `mesajlar` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `adsoy` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tel` int(11) DEFAULT NULL,
  `mesaj` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT NULL,
  `IP` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` varchar(10) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

#
# Data for table "mesajlar"
#

INSERT INTO `mesajlar` VALUES (6,'MELİS ÇETİNDAĞ','mc@gmail.com',6846,' yjtytjtf',NULL,'::1',NULL);

#
# Source for table "onaysiparis"
#

DROP TABLE IF EXISTS `onaysiparis`;
CREATE TABLE `onaysiparis` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `urun_adi` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `adres` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `musteri` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `fiyat` float DEFAULT NULL,
  `durum` varchar(5) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

#
# Data for table "onaysiparis"
#


#
# Source for table "tamamsiparis"
#

DROP TABLE IF EXISTS `tamamsiparis`;
CREATE TABLE `tamamsiparis` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `urun_adi` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `adres` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `musteri` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `fiyat` float DEFAULT NULL,
  `durum` varchar(5) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

#
# Data for table "tamamsiparis"
#


#
# Source for table "urunler"
#

DROP TABLE IF EXISTS `urunler`;
CREATE TABLE `urunler` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` varchar(150) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kodu` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `turu` int(11) DEFAULT NULL,
  `kategori` int(11) DEFAULT NULL,
  `afiyat` float DEFAULT NULL,
  `sfiyat` float DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `keywords` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `aciklama` text COLLATE utf8_turkish_ci,
  `durum` varchar(5) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT NULL,
  `resim` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `grubu` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

#
# Data for table "urunler"
#

INSERT INTO `urunler` VALUES (5,'Taşlı Sallantılı Küpe',NULL,NULL,3,2,5,NULL,NULL,NULL,'Taşlı Küpe','mevcu',NULL,'taslisallantili_kupe.jpg',NULL),(11,'Etnik Kolye',NULL,NULL,4,15,25,NULL,NULL,NULL,'Etnik Kolye\r\n','mevcu',NULL,'etnik_kolye.png',NULL),(14,'3lü Kolye',NULL,NULL,4,3,5,NULL,NULL,NULL,'3lü Boncuk Detaylı Kolye\r\n','mevcu',NULL,'1_3lü_kolye.jpg','yeni'),(15,'Chooker Kolye',NULL,NULL,4,2,5,NULL,NULL,NULL,'Chooker Dövme Kolye\r\n','mevcu',NULL,'2_chooker_kolye.jpg','yeni'),(16,'Boncuklu Küpe',NULL,NULL,3,2,5,NULL,NULL,NULL,'Boncuklu Halka Küpe\r\n','mevcu',NULL,'3_boncuklu_kupe.jpg','yeni'),(17,'Nazar Boncuklu Bileklik',NULL,NULL,1,5,10,NULL,NULL,NULL,'Nazar Boncuk Detaylı Raylı Bileklik','mevcu',NULL,'4_boncuklu_bileklik.jpg','yeni'),(18,'Arkadan Küpe',NULL,NULL,3,5,10,NULL,NULL,NULL,'Arkadan Küpe\r\n','mevcu',NULL,'5_arkadan_kupe.jpg','yeni'),(19,'Stil Yüzük',NULL,NULL,1,5,10,NULL,NULL,NULL,'Altın Rengi Stil Yüzükler\r\n','mevcu',NULL,'6_stil_yuzuk.jpg','yeni'),(20,'Gümüş Sallantılı Küpe',NULL,NULL,3,5,7.5,NULL,NULL,NULL,'Gümüş Renginde Uzun Sallantılı Küpe\r\n','mevcu',NULL,'7_gumus_kupe.jpg','yeni'),(21,'Siyah Otantik Kolye',NULL,NULL,4,15,25,NULL,NULL,NULL,'Siyah Renkli Otantik Küpe\r\n','mevcu',NULL,'8_otantik_kolye.jpg','yeni'),(22,'Taşlı Kalpli Bileklik',NULL,NULL,1,10,15,NULL,NULL,NULL,'Zirkon Taşlı Kalp Desenli Bileklik\r\n','mevcu',NULL,'kalpli_bileklik.jpg',NULL),(23,'Siyah Stil Yüzük',NULL,NULL,8,2,5,NULL,NULL,NULL,'Siayh Renkli Stil Yüzükleri\r\n','gelec',NULL,'xnv-mg-7290_min.jpg',NULL),(24,'Yıldızlı Zincir Kolye',NULL,NULL,4,5,10,NULL,NULL,NULL,'Zincirli Yıldız Detaylı Kolye\r\n','gelec',NULL,'xnv-mg-7411_min.jpg',NULL),(25,'Mavi Püsküllü Uzun Küpe',NULL,NULL,3,5,7,NULL,NULL,NULL,'MAvi Püsküllü Uzun Sallantılı Küpe\r\n','gelec',NULL,'xnv-mg-7441_min.jpg',NULL),(26,'3lü Zincir Kolye',NULL,NULL,4,5,10,NULL,NULL,NULL,'3lü Zincir Kolye\r\n','çok s',NULL,'zincir_kolye.jpg',NULL),(27,'Taşlı Şahmeran',NULL,NULL,9,10,15,NULL,NULL,NULL,'Zirkon Tek Sıra Taşlı Şahmeran\r\n','çok s',NULL,'zirkontasli_sahmeran.jpg',NULL),(28,'Taşlı Hayat Ağacı Yüzük',NULL,NULL,8,5,7,NULL,NULL,NULL,'Zirkon Taşlı Hayat Ağacı Desenli Yüzük\r\n','çok s',NULL,'hayatagaci_yuzuk.jpg',NULL),(29,'Taşlı Üçgen Şahmeran',NULL,NULL,9,5,7.5,NULL,NULL,NULL,'Üçgen Zirkon Taş Detaylı Şahmeran\r\n\r\n','mevcu',NULL,'tasli_sahmeran.jpg',NULL),(30,'Siyah Sallantılı Küpe',NULL,NULL,3,10,15,NULL,NULL,NULL,'Siayh Renkli Uzun Sallantılı Küpe\r\n','mevcu',NULL,'sallantili_kupe.jpg',NULL),(31,'Boncuklu Etnik Kolye',NULL,NULL,4,17,22,NULL,NULL,NULL,'Boncuklu Etnik Kolye\r\n','mevcu',NULL,'cingene_kolye.png',NULL),(32,'Nazar Boncuklu Halhal',NULL,NULL,5,3,5,NULL,NULL,NULL,'Nazar Boncuk Detaylı Halhal\n','mevcu',NULL,'nazar_halhal.jpg',NULL);

#
# Source for table "urunler_resim"
#

DROP TABLE IF EXISTS `urunler_resim`;
CREATE TABLE `urunler_resim` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `urun_id` int(11) DEFAULT NULL,
  `resim` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

#
# Data for table "urunler_resim"
#

INSERT INTO `urunler_resim` VALUES (2,3,'31.png'),(3,3,'42.png'),(5,3,'13.png'),(6,4,'14.png'),(8,4,'32.png'),(10,4,'43.png'),(11,7,'25.png'),(12,7,'34.png'),(13,5,'5_arkadan_kupe.jpg');

#
# Source for table "uyeler"
#

DROP TABLE IF EXISTS `uyeler`;
CREATE TABLE `uyeler` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `adsoy` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `sifre` int(11) DEFAULT NULL,
  `yetki` varchar(10) COLLATE utf8_turkish_ci DEFAULT NULL,
  `durum` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT NULL,
  `sehir` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `adres` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tel` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

#
# Data for table "uyeler"
#

INSERT INTO `uyeler` VALUES (1,'GÜLFEM NUR YÜCEL','gulfemnur93@gmail.com',1234,'admin','aktif',NULL,'0000-00-00 00:00:00','Karabük','Özyurttlar Kız ÖĞrenci Yurdu Safranbolu',506),(2,'MELİS ÇETİNDAĞ','mc@gmail.com',123,'Üye','Aktif',NULL,NULL,'Karabük','Üniv. Mah Park Suite Residance D:22',530),(3,'TAHSİN KONUK','tahsin@hotmail.com',456,'Üye','Aktif',NULL,NULL,'Karabük','100.Yıl Mah. Yeni Işık Kent Sitesi D:11 ',505),(4,'MUSTAFA KILIÇ','mk@hotmail.com',789,'Üye','Aktif',NULL,NULL,'Karabük','5000 Evler',505);

#
# Source for table "yenisiparis"
#

DROP TABLE IF EXISTS `yenisiparis`;
CREATE TABLE `yenisiparis` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `urun_adi` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `adres` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `musteri` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `fiyat` float DEFAULT NULL,
  `durum` varchar(5) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

#
# Data for table "yenisiparis"
#

INSERT INTO `yenisiparis` VALUES (1,'Küpe','Tekirdağ','Gülfem Nur Yücel',0,'var','0000-00-00 00:00:00');

#
# Source for table "yorumlar"
#

DROP TABLE IF EXISTS `yorumlar`;
CREATE TABLE `yorumlar` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `adsoy` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `mesaj` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tarih` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

#
# Data for table "yorumlar"
#

INSERT INTO `yorumlar` VALUES (2,'MELİS ÇETİNDAĞ','<p>Yeni kolye &ccedil;eşitleri ne zaman gelecek?</p>','0000-00-00 00:00:00');

/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
