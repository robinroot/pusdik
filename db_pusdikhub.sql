-- MySQL dump 10.13  Distrib 5.7.25, for Linux (x86_64)
--
-- Host: localhost    Database: db_pusdikhub
-- ------------------------------------------------------
-- Server version	5.7.25-0ubuntu0.16.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `berita`
--

DROP TABLE IF EXISTS `berita`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_kategori_berita` int(11) NOT NULL,
  `slug_berita` varchar(255) NOT NULL,
  `nama_berita` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `jenis_berita` varchar(20) NOT NULL,
  `status_berita` varchar(20) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `count` int(11) NOT NULL,
  PRIMARY KEY (`id_berita`),
  KEY `id_kategori_berita_2` (`id_kategori_berita`),
  KEY `id_kategori_berita_3` (`id_kategori_berita`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `berita`
--

LOCK TABLES `berita` WRITE;
/*!40000 ALTER TABLE `berita` DISABLE KEYS */;
INSERT INTO `berita` VALUES (6,1,4,'test-berita-1','test berita satu','<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32</p>\r\n','Berita','Publish','travel.png','2018-12-17 17:16:04','2019-03-22 07:12:56',3),(7,1,3,'berita-kodam','berita kodam','<p>berita satuan</p>\r\n','Berita','Publish','sttb.png','2018-12-17 17:18:30','2019-03-22 07:11:32',7),(8,1,1,'test-berita-2','test berita 2','<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32</p>\r\n','Berita','Publish','ss.png','2018-12-17 17:25:29','2019-03-22 07:11:50',7),(9,1,5,'bentuk-karakter-anak-usia-dini-kodim-0817gresik-kenalkan-baris-berbaris-kepada-ratusan-murid-tk','Bentuk Karakter Anak Usia Dini, Kodim 0817/Gresik Kenalkan Baris-Berbaris kepada ratusan murid TK','<p>JAKARTA. tniad.mil.id – Dalam membentuk karakter dan kedisiplinan anak di usia dini, Kodim 0817/Gresik bekerja sama dengan pihak, memberikan pengenalan baris-berbaris kepada murid Taman Kanak-Kanak (TK) Muslimat NU 29 Mahkota Gresik. Tersebut disampaikan Dandim 0817/Gresik Letkol Inf Budi Handoko, S.Sos dalam rilis tertulisnya, di Gresik, Jawa Timur, Rabu (22/1/2019).</p>\r\n\r\n<p>Dijelaskan Dandim, kegiatan yang dilaksanakannya tersebut merupakan dari program pembinaan generasi muda dari mulai usia dini.</p>\r\n\r\n<p>“Ini penting kita lakukan bagi anak-anak, agar sikap,mental dan karakter mereka tidak tergerus dari dampak globalisasi dan perluasan informasi yang demikian masif,” tegasnya.</p>\r\n\r\n<p>“Dapat kita lihat bersama, hampir di berbagai kesempatan, anak-anak kita sekarang banyak yang terbuai oleh permainan online. Demikian juga dengan konten di media televisi dan internet banyak menyajikan hal-hal yang vulgar dan tidak sesuai dengan karakter dan budaya bangsa Indonesia,” ungkap Letkol Inf Budi Handoko.</p>\r\n\r\n<p>Maka dengan dasar pertimbangan tersebut, pihak Kodim 0817/Gresik mulai menyasar berbagai program pembinaan karakter dari mulai anak-anak usia dini.</p>\r\n\r\n<p>“Seperti saat ini, dengan didampingi guru-gurunya, melalui latihan baris-berbaris, kita tanamkan kedalam sikap dan mental serta cara berfikir anak-anak tentang nilai kerapihan, kedisiplinan, kebersamaan, loyalitas dan lain sebagainya,” terang Budi Handoko.</p>\r\n\r\n<p>“Ya, memang di usianya saat ini, kegiatan ini terlihat seperti permainan bagi mereka. Namun jika ditelaah lebih jauh, keceriaan dan antusias serta keseriusan mereka itu telah menunjukan secercah harapan masa depan mereka, yaitu generasi muda yang memiliki karakter unggul dan berdisiplin tinggi,” imbuhnya.</p>\r\n\r\n<p>Lebih lanjut, Budi Handoko mengatakan bahwa kemasan kegiatan yang diselingi hiburan tersebut, semata-mata agar selaras dengan usia perkembangan anak-anak yang masih berusia dibawah lima (5) tahun.</p>\r\n\r\n<p>“Yaitu, bermain sambil belajar,” tandasnya.</p>\r\n\r\n<p>“Oleh karenanya, kita tidak boleh begitu saja memaksakan cara berpikir kita kepada mereka. Akan tetapi, justru kita yang harus dipaksa mengikuti cara berfikir dan bertindak selayaknya mereka, agar apa yang kita berikan dapat dipahami dan dilaksanakan dengan baik,” tandasnya.</p>\r\n\r\n<p>Sedangkan untuk penanaman wawasan kebangsaan dan kecintaan terhadap tanah air, selain dengan pelajaran dikelas, menurutnya juga dapat dilakukan kegiatan-kegiatan kunjungan ke satuan-satuan militer seperti yang dilakukannya saat ini.</p>\r\n\r\n<p>“Kami ingin generasi penerus bangsa ini memiliki karakter maupun kepribadian yang disiplin dan berwawasan, sekaligus mencintai negaranya,”ujar Budi Handoko.</p>\r\n\r\n<p>“Sebagai Satuan Teritorial, kami berkewajiban menjaga kondusivitas di wilayah tugas kami dan terutama pembinaan kepada masyarakat, khususnya warga Gresik,” tambahnya.</p>\r\n\r\n<p>Sementara itu, Lulu (29), salah satu guru pembimbing TK Muslimat NU mengakui, jika pihak pengurus TK Muslimat NU ke Kodim 0817/Gresik sebagai lokasi sasaran kunjungan para muridnya saat ini.</p>\r\n\r\n<p>Dikatakannya, kunjungan ke markas militer dinilai sangat bermanfaat dan memberikan motivasi kepada para muridnya untuk meraih prestasi dan mengejar cita-cita setinggi mungkin.</p>\r\n\r\n<p>“Kami berharap, kunjungan ini mampu memotivasi semangat murid-murid untuk meraih cita-citanya,” tuturnya. (Dispenad)</p>\r\n','Berita','Publish','5a-1-12.jpeg','2019-02-01 06:48:15','2019-03-22 07:12:07',6),(10,1,3,'satgas-pamtas-ri-rdtl-sektor-timur-kembali-amankan-860-liter-bbm-dari-upaya-penyelundupan','Satgas Pamtas RI-RDTL Sektor Timur Kembali Amankan 860 Liter BBM Dari Upaya Penyelundupan','<p>JAKARTA, tniad.mil.id – Satuan Tugas Pengamanan Perbatasan (Satgas Pamtas) RI-RDTL Sektor Timur, Yonif Raider 408/Sbh kembali berhasil mengamankan Bahan Bakar Minyak (BBM) jenis minyak tanah sebanyak 860 liter yang ditimbun pihak yang tidak bertanggung jawab untuk kemudian akan diselundupkan ke Timor Leste. Tersebut disampaikan Dansatgas Yonif Raider 408/Sbh Mayor Inf Joni Eko Prasetyo, dalam rilisnya di Belu, Nusa Tenggara Timur, Kamis (23/1/2019).</p>\r\n\r\n<p>Dijelaskan Dansatgas, penggagalan penyelundupan BBM ini berlokasi di 2 (dua) tempat yang berbeda, pertama oleh Pos Nunura Kipur 2 di Desa Tohe, Kecamatan Raihat, Kabupaten Belu. Sedangkan yang kedua oleh Pos Damar Kipur 1 di Dusun Beilaka, Desa Silawan, Kecamatan Tastim, Kabupaten Belu.</p>\r\n\r\n<p>Lebih lanjut, dirinya mengungkapkan bahwa tindakan yang dilakukan tersebut semata-mata karena adanya pengaduan dari masyarakat melalui salah satu pos yang terdekat, yaitu Nunura dan Damar.</p>\r\n\r\n<p>“Bermula dari informasi dan pengaduan masyarakat kepada anggota Pos tentang tempat penimbunan BBM. Menurut kami, ini tidak lepas dari kesadaran dan kepedulian masyarakat dalam hal menjaga lingkungannya,” terang Mayor Joni Eko Prasetyo.</p>\r\n\r\n<p>“Selain itu, tentunya dikarenakan kedekatan dan kepercayaan masyarakat kepada Satgas untuk bersama-sama mencegah berbagai tindakan yang merugikan dan membahayakan mereka,”sambungnya</p>\r\n\r\n<p>Terkait dengan keberhasilannya dalam menggagalkan upaya penyelundupan 860 liter BBM tersebut, menurut Joni Eko, merupakan akumulasi yang dilakukan satuan jajarannya selama 1 minggu.</p>\r\n\r\n<p>“Yang berhasil kita amankan berupa BBM minyak tanah, masing-masing oleh Pos Nunura kita mengamankan sebanyak 420 liter dan di Pos Damar sebanyak 460 liter. Kemudian an setelah di inventarisir, barang bukti tersebut kita serahkan ke pihak kepolisian untuk proses lebih lanjut.” jelasnya.</p>\r\n\r\n<p>“Terkait pelakunya sendiri saat ini masih kita dalami dan telusuri bersama dengan aparat kepolisian dan masyarakat. Tentu, ini juga kita laporkan ke Komando Atas sebagai bahan pertimbangan maupun upaya tindaklanjut pimpinan,” tegasnya.</p>\r\n\r\n<p>Disampaikannya, kehadiran Satgas Yonif Raider 408/Sbh di perbatasan RI-RDTL salah satu upaya untuk mencegah terjadinya berbagai kegiatan ilegal di wilayah tersebut.</p>\r\n\r\n<p>“Termasuk tindak kejahatan yang bersifat lintas negara. Kami berkomitmen akan terus membantu masyarakat dan pemerintah serta berbagai instansi terkait lainnya dari berbagai upaya kejahatan atau kegiatan ilegal lainnya yang melalui lintas batas negara,” tegasnya.</p>\r\n\r\n<p>Sementara itu Danpos Nunura Letda Inf Nur Rosidi menyampaikan bahwa tindakan yang pengamanan atas BBM yang akan diselundupkan ke Timor Leste tersebut dilakukan dengan melibatkan dan kerjasama dengan masyarakat di sekitar Pos.</p>\r\n\r\n<p>“Kita senantiasa bersama-sama dengan masyarakat, karena sesungguhnya tugas pengamanan di wilayah perbatasan ini dapat berjalan dengan baik, jika melibatkan masyarakat maupun berbagai instansi terkait lainnya,” pungkas Nur Rosidi. (Dispenad)</p>\r\n','Berita','Publish','1a-1-4.jpeg','2019-01-24 11:50:41','2019-03-22 07:12:04',3),(13,1,4,'coba-layour','coba layour','<p>coba layout</p>\r\n','Berita','Publish','kv11.jpg','2019-01-30 19:32:45','2019-03-22 07:11:13',2),(22,1,4,'prajurit-tni-selamatkan-bayi-5-bulan-yang-terjebak-banjir-di-jayapura-papua','Prajurit TNI Selamatkan Bayi 5 Bulan Yang Terjebak Banjir di Jayapura, Papua','<p>Prajurit Yonif RK 751/ VJS melaksanakan penyelamatan terhadap seorang bayi berumur 5 bulan suku asli Papua yang sudah terjebak banjir di kolong rumah selama kurang lebih 6 jam di Kampung Taruna, Jl Sosial Taruna, Sentani, Kabupaten Jayapura, Papua.</p>\r\n\r\n<p>Pada Minggu (17/3) pukul 08.00 WIT, tim penyisir dari Yonif 751 teridiri dari Sertu Hanafi, Sertu Samsi, Prada Yacob, Prada Yusril, dan Prada Syahril melaksanakan penanggulangan bencana banjir di sekitar kampung Taruna.</p>\r\n\r\n<p>“Saat melaksanakan penyisiran, seorang prajurit TNI a.n Prada Syahril menemukan bayi (umur 5 bulan) di kolong rumah masyarakat dengan posisi terjepit kayu runtuhan rumah,” ujar Kapendam Cenderawasih, Kolonel Inf Muhammad Aidi, Minggu (17/3).</p>\r\n\r\n<p>Prada Syahril dibantu rekan lainnya melaksanakan pemyelamatan dengan menggunakan 2 buah gergaji untuk memotong kayu yang menjepit badan bayi tersebut.</p>\r\n\r\n<p>“Bayi yang orang tuanya belum bisa diidentifikasi itu dikeluarkan dari jepitan kayu dalam keadaan selamat. Prada Syahril menggendong bayi tersebut selanjutnya dilarikan ke Puskesmas terdekat dengan sepeda motor. Namun di tengah jalan berpapasan dengan ambulans sehingga bayi berhasil dievakuasi ke Puskesmas Sentani,” lanjut Kolonel Aidi.</p>\r\n\r\n<p>Hingga Minggu (17/3) pukul 08.30 WIB, tercatat dampak banjir bandang sebanyak 42 orang meninggal dunia dan 21 orang luka-luka.</p>\r\n\r\n<p>Kerusakan meliputi 9 rumah rusak terdampak banjir di BTN Doyo Baru, 1 mobil rusak atau hanyut, serta jembatan Doyo dan Kali Ular mengalami kerusakan.</p>\r\n\r\n<p>Sekitar 150 rumah terendam di BTN Bintang Timur Sentani dan ada kerusakan 1 pesawat jenis Twin Otter di Lapangan Terbang Adventis Doyo Sentani.</p>\r\n','Berita','Publish','FB_IMG_1552871575834-678x3811.jpg','2019-03-20 01:23:35','2019-03-22 07:12:02',5);
/*!40000 ALTER TABLE `berita` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `captcha`
--

DROP TABLE IF EXISTS `captcha`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `captcha` (
  `captcha_id` bigint(13) unsigned NOT NULL AUTO_INCREMENT,
  `captcha_time` bigint(10) unsigned NOT NULL,
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `word` varchar(20) NOT NULL,
  PRIMARY KEY (`captcha_id`),
  KEY `word` (`word`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `captcha`
--

LOCK TABLES `captcha` WRITE;
/*!40000 ALTER TABLE `captcha` DISABLE KEYS */;
/*!40000 ALTER TABLE `captcha` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategori_berita`
--

DROP TABLE IF EXISTS `kategori_berita`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategori_berita` (
  `id_kategori_berita` int(11) NOT NULL AUTO_INCREMENT,
  `slug_kategori_berita` varchar(255) NOT NULL,
  `nama_kategori_berita` varchar(255) NOT NULL,
  `keterangan` text,
  `urutan` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_kategori_berita`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori_berita`
--

LOCK TABLES `kategori_berita` WRITE;
/*!40000 ALTER TABLE `kategori_berita` DISABLE KEYS */;
INSERT INTO `kategori_berita` VALUES (1,'ekonomi','Ekonomi','Ekonomi',1),(3,'satuan','satuan','berita satuan',3),(4,'publikasi','publikasi','berita publik',4),(5,'berita-kodam','berita kodam','berita kodam',4);
/*!40000 ALTER TABLE `kategori_berita` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `komentar`
--

DROP TABLE IF EXISTS `komentar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `komentar` (
  `id_comment` int(7) NOT NULL AUTO_INCREMENT,
  `id_berita` int(5) DEFAULT NULL,
  `isi` text,
  `status` varchar(30) DEFAULT NULL,
  `pengirim` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  PRIMARY KEY (`id_comment`),
  KEY `kode_content` (`id_berita`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `komentar`
--

LOCK TABLES `komentar` WRITE;
/*!40000 ALTER TABLE `komentar` DISABLE KEYS */;
INSERT INTO `komentar` VALUES (7,22,'ulalalalala','publish','kang janu','janu@gmail.com','2019-02-04 20:35:29'),(9,19,'You can copy and paste your text with the characters to count in the text area above, or you can type your characters and words into the text area. The counter will be updated instantly, displaying the amount of characters, words, sentences, paragraphs and whitespace in your text, not to mention that the keyword density (which you can configure from the options menu) is also displayed.\r\n\r\nWhich Devices Does The Counter Work On?','publish','ragil','ragil@yahoo.com','2019-02-06 20:52:10'),(10,10,'semangattt','publish','agam','ragil@yahoo.com','2019-02-06 22:50:54'),(11,21,'nyoba komen','pending','michelle risser','eoszerus@gmail.com','2019-02-11 11:03:33');
/*!40000 ALTER TABLE `komentar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `konfigurasi`
--

DROP TABLE IF EXISTS `konfigurasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT,
  `home_setting` varchar(20) NOT NULL,
  `namaweb` varchar(200) NOT NULL,
  `tagline` varchar(200) DEFAULT NULL,
  `tentang` varchar(500) DEFAULT NULL,
  `gambar` text,
  `video` varchar(50) DEFAULT NULL,
  `yacht` text NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `alamat` varchar(400) DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `hp` varchar(50) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `keywords` varchar(400) DEFAULT NULL,
  `metatext` text,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `google_map` text,
  `judul_1` varchar(200) DEFAULT NULL,
  `pesan_1` varchar(200) DEFAULT NULL,
  `judul_2` varchar(200) DEFAULT NULL,
  `pesan_2` varchar(200) DEFAULT NULL,
  `judul_3` varchar(200) DEFAULT NULL,
  `pesan_3` varchar(200) DEFAULT NULL,
  `judul_4` varchar(200) DEFAULT NULL,
  `pesan_4` varchar(200) DEFAULT NULL,
  `judul_5` varchar(200) DEFAULT NULL,
  `pesan_5` varchar(200) NOT NULL,
  `judul_6` varchar(200) DEFAULT NULL,
  `pesan_6` varchar(200) NOT NULL,
  `id_user` int(11) NOT NULL,
  `quotes` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_konfigurasi`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `konfigurasi`
--

LOCK TABLES `konfigurasi` WRITE;
/*!40000 ALTER TABLE `konfigurasi` DISABLE KEYS */;
INSERT INTO `konfigurasi` VALUES (1,'Image','PUSDIKHUB','CIGHRA APTA NIRBHAYA','Integrated Farming','Seven_Seas_Upper_Deck1.jpg','fsH_KhUWfho','<p>Through the adoption of a proactive stance, the astute manager can adopt a position at the vanguard. In order to build a shared view of what can be improved, to experience a profound paradigm shift, that will indubitably lay the firm foundations for any leading company. Exploitation of core competencies as an essential enabler, exploiting the productive lifecycle by moving executive focus from lag financial indicators to more actionable lead indicators.</p>\r\n<p>An investment program where cash flows exactly match shareholders\' preferred time patterns of consumption defensive reasoning, the doom loop and doom zoom highly motivated participants contributing to a valued-added outcome. In order to build a shared view of what can be improved, in a collaborative, forward-thinking venture brought together through the merging of like minds. Combined with optimal use of human resources, from binary cause and effect to complex patterns, working through a top-down, bottom-up approach. Maximization of shareholder wealth through separation of ownership from management measure the process, not the people. While those at the coal face don\'t have sufficient view of the overall goals.</p>\r\n<p>Whenever single-loop learning strategies go wrong, to focus on improvement, not cost, in order to build a shared view of what can be improved. An important ingredient of business process reengineering that will indubitably lay the firm foundations for any leading company the new golden rule gives enormous power to those individuals and units. Whenever single-loop learning strategies go wrong, building a dynamic relationship between the main players. Organizations capable of double-loop learning, through the adoption of a proactive stance, the astute manager can adopt a position at the vanguard.</p>\r\n<p>To ensure that non-operating cash outflows are assessed. An important ingredient of business process reengineering big is no longer impregnable to experience a profound paradigm shift. The new golden rule gives enormous power to those individuals and units, while those at the coal face don\'t have sufficient view of the overall goals. Taking full cognizance of organizational learning parameters and principles, working through a top-down, bottom-up approach, an investment program where cash flows exactly match shareholders\' preferred time patterns of consumption. Big is no longer impregnable in a collaborative, forward-thinking venture brought together through the merging of like minds.</p>\r\n<p>Through the adoption of a proactive stance, the astute manager can adopt a position at the vanguard. The three cs - customers, competition and change - have created a new world for business motivating participants and capturing their expectations, organizations capable of double-loop learning. To focus on improvement, not cost, exploiting the productive lifecycle taking full cognizance of organizational learning parameters and principles. Presentation of the process flow should culminate in idea generation, the balanced scorecard, like the executive dashboard, is an essential tool quantitative analysis of all the key ratios has a vital role to play in this.</p>\r\n<p> </p>','https://pusdikhub.kodiklat-tniad.mil.id','admin@pusdikhub.kodiklat-tniad.mil.id','Cimahi, Bandung Indonesia','021-xxxxxxx','08xxxxxxxxx',' 021-xxxxxxx','LOGO-TRANSPACIFIC.png','worm_cartoon-2.png','PT Trans Pasific Global','','https://facebook.com/pusdikhub','https://twitter.com/pusdikhub','https://instagram.com/pusdikhub','<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.796601287678!2d106.82206981477015!3d-6.420175095354896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ebd4856caaa7%3A0x916d6e8dc4e74cd9!2sJl.+Romo%2C+Tirtajaya%2C+Sukmajaya%2C+Kota+Depok%2C+Jawa+Barat+16412!5e0!3m2!1sid!2sid!4v1474512157953\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>','MEMBANGUN BUDAYA PERUSAHAAN','BUDAYA','MEMBANGUN BUDAYA PELAYANAN','TEPAT WAKTU','MENINGKATKAN PELAYANAN CALL CENTER','HEMAT','PROGRAM PENDIDIKAN KHUSUS','MURAH','PROGRAM SEMITAINMENT TRAINING','DIJAMIN BISA','JUNGGLE SURVIVAL TRAINING','YA SUDAHLAH',1,'','2019-03-22 04:08:49');
/*!40000 ALTER TABLE `konfigurasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profil`
--

DROP TABLE IF EXISTS `profil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profil` (
  `id_profile` int(11) NOT NULL,
  `sejarah` text NOT NULL,
  `visimisi` text NOT NULL,
  `tugaspokok` text NOT NULL,
  PRIMARY KEY (`id_profile`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profil`
--

LOCK TABLES `profil` WRITE;
/*!40000 ALTER TABLE `profil` DISABLE KEYS */;
INSERT INTO `profil` VALUES (0,'<p><strong>CIKAL BAKAL PUSDIKHUB</strong></p>\r\n\r\n<p>Organisasi Pusdikhub TNI AD bersumber dari 3 (tiga) organisasi yaitu Depot Lager Verbinding Tropen, pendidikan Batalyon 4 Siliwangi di lembang dan bagian pendidikan pada Inspektorat Perhubungan Angkatan Perang di Ngarso Puro Solo. Peleburan unsur - unsur ketiga organisasi tersebut khususnya Depot Lager Verbinding Tropen yang diserahkan kepada Dinas Pendidikan Angkatan Darat (DPAD) pada tanggal 1 Mei 1950, merupakan cikal bakal organisasi Pusat Pendidikan Perhubungan.</p>\r\n\r\n<p><strong>Depot Perhubungan Angkatan Darat.</strong></p>\r\n\r\n<p>Selanjutnya tanggal 5 Mei 1950, dibentuk Depot Perhubungan Angkatan Darat DPHBAD, yang berfungsi sebagai Lembaga Pendidikan Perhubungan Angkatan Darat sehingga tanggal tersebut dijadikan sebagai hari jadi Pusat Pendidikan Perhubungan TNI AD. Pendidikan pertama dilakukan pada tanggal 1 September 1950 yaitu Pendidikan Dasar Perhubungan untuk Perwira dan Bintara, dengan tenaga pelatih dari Ex KNIL dan MMB ( Misi Militer Belanda). Sejak itu disamping Pendidikan yang bersifat teknis dari MMB, mulai diajarkan / ditanamkan landasan jiwa keprajuritan TNI seperti yang diamanatkan oleh Jendral Soedirman. Pada tanggal 10 Nopember 1957 mulai diberikan Pendidikan berjenjang bagi Perwira dan Bintara yang berasal dari seluruh Wilayah Indonesia.</p>\r\n\r\n<p><strong>Sekolah Bintara Corps Perhubungan Angkatan Darat.</strong></p>\r\n\r\n<p>Pada tanggal 20 Desember 1952 berdasarkan Ketetapan Direktur Perhubungan Angkatan Darat Nomor : 441 nama DPHBAD diganti menjadi Sekolah Bintara Corps Perhubungan Angkatan Darat (CPHB AD). Sejak itu mulai dilaksanakan pula Pendidikan Sekolah Bawahan di BTC (Beatle Training Center) Surabaya. Sedangkan pendidikan untuk Perwira berada di Lembang namun hal ini belum pernah terlaksana.</p>\r\n\r\n<p>Pusat Pendidikan Perhubungan Angkatan Darat (PPHB AD).<br>\r\nPada tanggal 1 Januari 1953 berdasarkan Skep Kasad Nomor : 93 / KSAD / KPTS / 1952, nama Sekolah Bintara Corps Perhubungan diganti dengan Pusat Pendidikan Perhubungan Angkatan Darat ( PPPHBAD). Pada tanggal 7 Juni 1956 PPPHBAD diserah terimakan oleh Direktur Corps Perhubungan AD kepada Inspektorat Jendral Pendidikan dan Latihan dengan status BP terus menerus.</p>\r\n\r\n<p><strong>Resimen Induk Perhubungan.</strong></p>\r\n\r\n<p>Pada tanggal 24 Nopember 1959 PPPHBAD diganti menjadi Resimen Induk Perhubungan (Rinhub) dan menggunakan Bagde Mabad. Sejak saat itu dikumandangkan bahwa Rinhub adalah Almamater bagi seluruh warga Hubad. Pada tanggal 8 Pebruari 1960 Sekolah Bawahan di Surabaya diserah terimakan kepada Itjen Pendidikan dan Latihan kemudian pada tanggal 23 Juli 1960 Sekolah Bawahan di Surabaya diganti namanya menjadi Sekolah Tamtama Perhubungan.</p>\r\n','<p><strong>VISI</strong></p>\r\n\r\n<p>MENJADI LEMBAGA  PENDIDIKAN KEBANGGAAN  KORPS  PERHUBUNGAN  TNI  ANGKATAN  DARAT  YANG <br>\r\nPROFESIONAL,   BERDEDIKASI,  MODERN  DAN  BERWAWASAN TEKNOLOGI DALAM MEMBENTUK POSTUR <br>\r\nPRAJURIT HUBAD YANG CENDEKIA, TANGGUH DAN BIJAKSANA</p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>MISI</strong></p>\r\n\r\n<p>1.    MENYELENGGARAKAN  PENDIDIKAN  UNTUK   MENCETAK   PRAJURIT   HUBAD   YANG  PROFESIONAL DIBIDANGNYA.<br>\r\n2.   MEWUJUDKAN    PUSAT       PENDIDIKAN   PERHUBUNGAN   TNI   ANGKATAN  DARAT SEBAGAI PUSAT <br>\r\nPENGEMBANGAN   DOKTRIN,    ILMU  PENGETAHUAN   DAN   TEHNOLOGI   DIBIDANG  KOMUNIKASI DAN ELEKTRONIKA.<br>\r\n3.   MENGEMBANGKAN KEMAMPUAN SERTA JIWA JUANG GADIK DAN GAPENDIK DALAM MELAKSANAKAN <br>\r\nTUGAS PENGAJARAN.<br>\r\n4.   MEWUJUDKAN PUSAT  PENDIDIKAN  PERHUBUNGAN  SEBAGAI  ALMAMATER KEBANGGAAN PRAJURIT <br>\r\nPERHUBUNGAN.</p>\r\n','<p>ini tugas pokok ku</p>\r\n');
/*!40000 ALTER TABLE `profil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `quote`
--

DROP TABLE IF EXISTS `quote`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `quote` (
  `id_quote` int(11) NOT NULL AUTO_INCREMENT,
  `quote` text NOT NULL,
  `quote1` text NOT NULL,
  `quote2` text NOT NULL,
  `quote3` text NOT NULL,
  PRIMARY KEY (`id_quote`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `quote`
--

LOCK TABLES `quote` WRITE;
/*!40000 ALTER TABLE `quote` DISABLE KEYS */;
INSERT INTO `quote` VALUES (1,'Satu-satunya hak milik nasional Republik Indonesia yang masih tetap utuh tidak berubah-ubah meskipun harus menghadapi segala macam soal dan perubahan adalah hanya Tentara Nasional Indonesia','Pelihara TNI, pelihara angkatan perang kita, jangan sampai TNI dikuasai oleh partai politik manapun juga.','Tentara hanya mempunyai kewajiban satu, ialah mempertahankan kedaulatan negara dan menjaga keselamatannya, sudah cukup kalau tentara teguh memegang kewajiban ini, lagi pula sebagai tentara, disiplin harus dipegang teguh.','empat');
/*!40000 ALTER TABLE `quote` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `akses_level` varchar(20) NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Bagas','robinroot@backboxindonesia.or.id','bagas','104a194c141d0eacdc1faec97abfdf5a','Admin'),(2,'staff','tirtahijaufarm@gmail.com','staff','12345','Admin');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `video`
--

DROP TABLE IF EXISTS `video`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `video` (
  `id_video` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(200) NOT NULL,
  `posisi` varchar(20) NOT NULL,
  `keterangan` text,
  `video` varchar(200) NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_video`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `video`
--

LOCK TABLES `video` WRITE;
/*!40000 ALTER TABLE `video` DISABLE KEYS */;
INSERT INTO `video` VALUES (1,'ada','Homepage',NULL,'dTA3-GxQyks',1,1,'2016-10-13 02:14:41'),(2,'Video tutorial','Homepage',NULL,'uNdvaTZiOHo',1,1,'2016-10-13 02:14:46');
/*!40000 ALTER TABLE `video` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `visitor`
--

DROP TABLE IF EXISTS `visitor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `visitor` (
  `no` int(7) NOT NULL AUTO_INCREMENT,
  `ip` varchar(40) DEFAULT NULL,
  `os` varchar(40) DEFAULT NULL,
  `browser` varchar(40) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=358 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `visitor`
--

LOCK TABLES `visitor` WRITE;
/*!40000 ALTER TABLE `visitor` DISABLE KEYS */;
INSERT INTO `visitor` VALUES (24,'::1','Linux','Chrome 72.0.3626.81','2019-02-07 08:43:42'),(25,'127.0.0.1','Linux','Chrome 72.0.3626.81','2019-02-07 08:45:23'),(26,'::1','Linux','Chrome 72.0.3626.81','2019-02-07 08:54:18'),(27,'192.168.100.9','Linux','Chrome 72.0.3626.81','2019-02-07 09:12:59'),(28,'192.168.100.2','Android','Chrome 71.0.3578.99','2019-02-07 09:14:29'),(29,'192.168.100.9','Linux','Firefox 65.0','2019-02-07 10:43:00'),(30,'192.168.100.9','Linux','Chrome 72.0.3626.96','2019-02-10 09:55:23'),(31,'::1','Linux','Chrome 72.0.3626.96','2019-02-11 10:55:05'),(32,'::1','Linux','Chrome 72.0.3626.96','2019-02-11 11:02:58'),(33,'::1','Linux','Chrome 72.0.3626.96','2019-02-12 16:32:09'),(34,'127.0.0.1','Linux','Firefox 65.0','2019-02-12 16:48:43'),(35,'::1','Linux','Chrome 72.0.3626.96','2019-02-14 17:41:52'),(36,'103.119.55.8','Linux','Chrome 73.0.3683.75','2019-03-20 01:03:06'),(37,'47.94.40.114','','Unidentified User Agent','2019-03-20 01:20:56'),(38,'47.94.40.114','','Unidentified User Agent','2019-03-20 01:20:57'),(39,'95.142.47.213','Windows 7','Internet Explorer 10.0','2019-03-20 01:22:51'),(40,'47.94.45.219','','Unidentified User Agent','2019-03-20 01:23:22'),(41,'47.94.45.219','','Unidentified User Agent','2019-03-20 01:23:23'),(42,'47.94.40.125','','Unidentified User Agent','2019-03-20 01:24:25'),(43,'47.94.40.125','','Unidentified User Agent','2019-03-20 01:24:28'),(44,'47.94.40.111','','Unidentified User Agent','2019-03-20 01:40:51'),(45,'47.94.40.111','','Unidentified User Agent','2019-03-20 01:40:53'),(46,'47.94.40.125','','Unidentified User Agent','2019-03-20 01:50:50'),(47,'47.94.40.125','','Unidentified User Agent','2019-03-20 01:50:52'),(48,'47.94.40.114','','Unidentified User Agent','2019-03-20 01:51:57'),(49,'47.94.40.114','','Unidentified User Agent','2019-03-20 01:51:59'),(50,'47.94.45.219','','Unidentified User Agent','2019-03-20 02:03:26'),(51,'47.94.45.219','','Unidentified User Agent','2019-03-20 02:03:28'),(52,'223.155.164.203','','Unidentified User Agent','2019-03-20 02:07:32'),(53,'223.155.164.203','','Unidentified User Agent','2019-03-20 02:07:45'),(54,'47.94.40.111','','Unidentified User Agent','2019-03-20 02:15:20'),(55,'47.94.40.111','','Unidentified User Agent','2019-03-20 02:15:22'),(56,'47.94.40.125','','Unidentified User Agent','2019-03-20 02:23:28'),(57,'47.94.40.125','','Unidentified User Agent','2019-03-20 02:23:30'),(58,'47.94.40.114','','Unidentified User Agent','2019-03-20 02:33:31'),(59,'47.94.40.114','','Unidentified User Agent','2019-03-20 02:33:33'),(60,'47.94.45.219','','Unidentified User Agent','2019-03-20 02:36:08'),(61,'47.94.45.219','','Unidentified User Agent','2019-03-20 02:36:10'),(62,'47.94.40.125','','Unidentified User Agent','2019-03-20 02:43:21'),(63,'47.94.40.125','','Unidentified User Agent','2019-03-20 02:43:23'),(64,'120.229.232.20','','Unidentified User Agent','2019-03-20 02:46:07'),(65,'120.229.232.20','','Unidentified User Agent','2019-03-20 02:46:27'),(66,'47.94.40.111','','Unidentified User Agent','2019-03-20 02:49:05'),(67,'47.94.40.111','','Unidentified User Agent','2019-03-20 02:49:06'),(68,'47.94.40.125','','Unidentified User Agent','2019-03-20 03:03:28'),(69,'47.94.40.125','','Unidentified User Agent','2019-03-20 03:03:30'),(70,'223.155.164.203','','Unidentified User Agent','2019-03-20 03:03:41'),(71,'223.155.164.203','','Unidentified User Agent','2019-03-20 03:03:43'),(72,'47.94.40.114','','Unidentified User Agent','2019-03-20 03:06:39'),(73,'47.94.40.114','','Unidentified User Agent','2019-03-20 03:06:41'),(74,'47.94.45.219','','Unidentified User Agent','2019-03-20 03:09:53'),(75,'47.94.45.219','','Unidentified User Agent','2019-03-20 03:09:55'),(76,'47.94.40.125','','Unidentified User Agent','2019-03-20 03:28:55'),(77,'47.94.40.125','','Unidentified User Agent','2019-03-20 03:28:57'),(78,'47.94.40.111','','Unidentified User Agent','2019-03-20 03:32:24'),(79,'47.94.40.111','','Unidentified User Agent','2019-03-20 03:32:26'),(80,'223.155.164.203','','Unidentified User Agent','2019-03-20 03:35:17'),(81,'223.155.164.203','','Unidentified User Agent','2019-03-20 03:35:19'),(82,'47.94.40.114','','Unidentified User Agent','2019-03-20 03:39:33'),(83,'47.94.40.114','','Unidentified User Agent','2019-03-20 03:39:35'),(84,'47.94.45.219','','Unidentified User Agent','2019-03-20 03:48:31'),(85,'47.94.45.219','','Unidentified User Agent','2019-03-20 03:48:33'),(86,'47.94.40.125','','Unidentified User Agent','2019-03-20 03:54:55'),(87,'47.94.40.125','','Unidentified User Agent','2019-03-20 03:54:56'),(88,'192.3.135.183','Unknown Platform','Mozilla 5.0','2019-03-20 04:06:02'),(89,'47.94.40.111','','Unidentified User Agent','2019-03-20 04:06:41'),(90,'47.94.40.111','','Unidentified User Agent','2019-03-20 04:06:43'),(91,'47.94.40.114','','Unidentified User Agent','2019-03-20 04:14:10'),(92,'47.94.40.114','','Unidentified User Agent','2019-03-20 04:14:12'),(93,'223.155.164.203','','Unidentified User Agent','2019-03-20 04:17:58'),(94,'223.155.164.203','','Unidentified User Agent','2019-03-20 04:18:00'),(95,'47.94.40.125','','Unidentified User Agent','2019-03-20 04:21:43'),(96,'47.94.40.125','','Unidentified User Agent','2019-03-20 04:21:44'),(97,'107.6.169.250','Windows 10','Chrome 66.0.3359.117','2019-03-20 04:26:02'),(98,'46.224.247.250','','Unidentified User Agent','2019-03-20 04:26:03'),(99,'46.224.247.250','','Unidentified User Agent','2019-03-20 04:26:03'),(100,'47.94.45.219','','Unidentified User Agent','2019-03-20 04:28:47'),(101,'47.94.45.219','','Unidentified User Agent','2019-03-20 04:28:49'),(102,'47.94.40.125','','Unidentified User Agent','2019-03-20 04:41:40'),(103,'47.94.40.125','','Unidentified User Agent','2019-03-20 04:41:42'),(104,'47.94.40.114','','Unidentified User Agent','2019-03-20 04:48:36'),(105,'47.94.40.114','','Unidentified User Agent','2019-03-20 04:48:38'),(106,'47.94.40.111','','Unidentified User Agent','2019-03-20 04:51:16'),(107,'47.94.40.111','','Unidentified User Agent','2019-03-20 04:51:18'),(108,'47.94.40.125','','Unidentified User Agent','2019-03-20 04:54:31'),(109,'47.94.40.125','','Unidentified User Agent','2019-03-20 04:54:33'),(110,'108.161.144.57','','Unidentified User Agent','2019-03-20 05:10:40'),(111,'47.94.45.219','','Unidentified User Agent','2019-03-20 05:11:10'),(112,'47.94.45.219','','Unidentified User Agent','2019-03-20 05:11:12'),(113,'223.155.164.203','','Unidentified User Agent','2019-03-20 05:13:23'),(114,'223.155.164.203','','Unidentified User Agent','2019-03-20 05:13:43'),(115,'47.94.40.114','','Unidentified User Agent','2019-03-20 05:16:15'),(116,'47.94.40.114','','Unidentified User Agent','2019-03-20 05:16:41'),(117,'47.94.40.125','','Unidentified User Agent','2019-03-20 05:26:09'),(118,'47.94.40.125','','Unidentified User Agent','2019-03-20 05:26:18'),(119,'37.47.52.14','','Unidentified User Agent','2019-03-20 05:30:22'),(120,'47.94.40.111','','Unidentified User Agent','2019-03-20 05:34:10'),(121,'47.94.40.111','','Unidentified User Agent','2019-03-20 05:34:12'),(122,'198.108.66.16','Unknown Platform','Mozilla 5.0','2019-03-20 05:40:42'),(123,'47.94.45.219','','Unidentified User Agent','2019-03-20 05:41:58'),(124,'47.94.45.219','','Unidentified User Agent','2019-03-20 05:42:31'),(125,'47.94.40.114','','Unidentified User Agent','2019-03-20 05:48:03'),(126,'47.94.40.114','','Unidentified User Agent','2019-03-20 05:48:05'),(127,'47.94.40.125','','Unidentified User Agent','2019-03-20 05:52:55'),(128,'95.142.47.213','Windows 7','Internet Explorer 10.0','2019-03-20 05:53:10'),(129,'223.155.164.203','','Unidentified User Agent','2019-03-20 05:54:14'),(130,'223.155.164.203','','Unidentified User Agent','2019-03-20 05:54:43'),(131,'47.94.40.125','','Unidentified User Agent','2019-03-20 05:58:12'),(132,'47.94.40.125','','Unidentified User Agent','2019-03-20 05:58:13'),(133,'47.94.40.111','','Unidentified User Agent','2019-03-20 06:15:02'),(134,'47.94.40.111','','Unidentified User Agent','2019-03-20 06:15:04'),(135,'47.94.40.125','','Unidentified User Agent','2019-03-20 06:18:10'),(136,'47.94.40.125','','Unidentified User Agent','2019-03-20 06:18:12'),(137,'47.94.40.114','','Unidentified User Agent','2019-03-20 06:20:17'),(138,'47.94.40.114','','Unidentified User Agent','2019-03-20 06:20:19'),(139,'64.233.173.143','Android','Chrome 73.0.3683.75','2019-03-20 06:23:48'),(140,'47.94.45.219','','Unidentified User Agent','2019-03-20 06:23:56'),(141,'47.94.45.219','','Unidentified User Agent','2019-03-20 06:23:58'),(142,'66.220.149.9','Windows 10','Chrome 72.0.3626.121','2019-03-20 06:44:11'),(143,'47.94.40.125','','Unidentified User Agent','2019-03-20 06:44:17'),(144,'47.94.40.125','','Unidentified User Agent','2019-03-20 06:44:19'),(145,'47.94.40.111','','Unidentified User Agent','2019-03-20 06:48:03'),(146,'47.94.40.111','','Unidentified User Agent','2019-03-20 06:48:05'),(147,'47.94.45.219','','Unidentified User Agent','2019-03-20 06:48:28'),(148,'47.94.45.219','','Unidentified User Agent','2019-03-20 06:48:29'),(149,'47.94.40.114','','Unidentified User Agent','2019-03-20 06:58:08'),(150,'47.94.40.114','','Unidentified User Agent','2019-03-20 06:58:10'),(151,'47.94.45.219','','Unidentified User Agent','2019-03-20 07:13:25'),(152,'47.94.45.219','','Unidentified User Agent','2019-03-20 07:13:52'),(153,'47.94.40.114','','Unidentified User Agent','2019-03-20 07:30:36'),(154,'47.94.40.114','','Unidentified User Agent','2019-03-20 07:30:38'),(155,'47.94.40.111','','Unidentified User Agent','2019-03-20 07:31:35'),(156,'47.94.40.111','','Unidentified User Agent','2019-03-20 07:31:37'),(157,'47.94.40.125','','Unidentified User Agent','2019-03-20 07:37:28'),(158,'47.94.40.125','','Unidentified User Agent','2019-03-20 07:37:30'),(159,'47.94.45.219','','Unidentified User Agent','2019-03-20 07:54:46'),(160,'47.94.45.219','','Unidentified User Agent','2019-03-20 07:54:53'),(161,'47.94.40.114','','Unidentified User Agent','2019-03-20 07:57:09'),(162,'47.94.40.114','','Unidentified User Agent','2019-03-20 07:57:11'),(163,'95.142.47.213','Windows 7','Internet Explorer 10.0','2019-03-20 08:03:11'),(164,'47.94.40.125','','Unidentified User Agent','2019-03-20 08:03:28'),(165,'47.94.40.125','','Unidentified User Agent','2019-03-20 08:03:32'),(166,'64.233.173.145','Android','Chrome 73.0.3683.75','2019-03-20 08:09:50'),(167,'35.177.129.233','','Unidentified User Agent','2019-03-20 08:13:12'),(168,'35.177.129.233','','Unidentified User Agent','2019-03-20 08:13:13'),(169,'47.94.40.111','','Unidentified User Agent','2019-03-20 08:14:37'),(170,'47.94.40.111','','Unidentified User Agent','2019-03-20 08:14:39'),(171,'192.3.135.183','Unknown Platform','Mozilla 5.0','2019-03-20 08:14:50'),(172,'192.168.100.72','Windows 10','Firefox 65.0','2019-03-20 08:20:27'),(173,'192.168.200.192','Windows 10','Firefox 65.0','2019-03-20 08:27:17'),(174,'192.168.100.72','Windows 10','Firefox 66.0','2019-03-20 08:30:03'),(175,'47.94.45.219','','Unidentified User Agent','2019-03-20 08:30:33'),(176,'47.94.45.219','','Unidentified User Agent','2019-03-20 08:30:35'),(177,'64.233.173.144','Android','Chrome 73.0.3683.75','2019-03-20 08:31:53'),(178,'47.94.40.114','','Unidentified User Agent','2019-03-20 08:33:02'),(179,'47.94.40.114','','Unidentified User Agent','2019-03-20 08:33:03'),(180,'64.233.173.144','Android','Chrome 72.0.3626.121','2019-03-20 08:37:19'),(181,'47.94.40.125','','Unidentified User Agent','2019-03-20 08:37:38'),(182,'47.94.40.125','','Unidentified User Agent','2019-03-20 08:37:40'),(183,'192.168.100.72','Windows 10','Chrome 72.0.3626.121','2019-03-20 08:43:54'),(184,'192.168.200.192','Windows 10','Firefox 65.0','2019-03-20 08:45:13'),(185,'114.4.78.25','iOS','Safari 604.1','2019-03-20 08:48:52'),(186,'192.168.100.13','Windows 10','Firefox 66.0','2019-03-20 08:49:11'),(187,'114.124.173.53','Android','Firefox 65.0','2019-03-20 08:50:31'),(188,'47.94.40.111','','Unidentified User Agent','2019-03-20 08:50:35'),(189,'47.94.40.111','','Unidentified User Agent','2019-03-20 08:50:37'),(190,'64.233.173.144','Android','Chrome 73.0.3683.75','2019-03-20 08:58:21'),(191,'47.94.40.125','','Unidentified User Agent','2019-03-20 09:10:05'),(192,'47.94.40.125','','Unidentified User Agent','2019-03-20 09:10:06'),(193,'47.94.40.114','','Unidentified User Agent','2019-03-20 09:11:00'),(194,'47.94.40.114','','Unidentified User Agent','2019-03-20 09:11:02'),(195,'47.94.40.111','','Unidentified User Agent','2019-03-20 09:24:18'),(196,'47.94.40.111','','Unidentified User Agent','2019-03-20 09:24:22'),(197,'213.183.59.130','','Unidentified User Agent','2019-03-20 09:25:17'),(198,'47.94.40.125','','Unidentified User Agent','2019-03-20 09:38:06'),(199,'47.94.40.125','','Unidentified User Agent','2019-03-20 09:38:22'),(200,'47.94.40.114','','Unidentified User Agent','2019-03-20 09:45:14'),(201,'47.94.40.114','','Unidentified User Agent','2019-03-20 09:45:22'),(202,'47.94.45.219','','Unidentified User Agent','2019-03-20 09:46:50'),(203,'47.94.45.219','','Unidentified User Agent','2019-03-20 09:46:52'),(204,'47.94.40.111','','Unidentified User Agent','2019-03-20 09:59:05'),(205,'47.94.40.111','','Unidentified User Agent','2019-03-20 09:59:07'),(206,'103.89.124.170','Linux','Chrome 73.0.3683.75','2019-03-20 10:00:19'),(207,'47.94.40.125','','Unidentified User Agent','2019-03-20 10:09:32'),(208,'47.94.40.125','','Unidentified User Agent','2019-03-20 10:09:33'),(209,'47.94.40.114','','Unidentified User Agent','2019-03-20 10:12:46'),(210,'47.94.40.114','','Unidentified User Agent','2019-03-20 10:12:48'),(211,'47.94.45.219','','Unidentified User Agent','2019-03-20 10:22:25'),(212,'47.94.45.219','','Unidentified User Agent','2019-03-20 10:22:27'),(213,'103.71.9.18','Windows 7','Firefox 66.0','2019-03-20 10:30:41'),(214,'47.94.40.111','','Unidentified User Agent','2019-03-20 10:43:09'),(215,'47.94.40.111','','Unidentified User Agent','2019-03-20 10:43:10'),(216,'47.94.40.125','','Unidentified User Agent','2019-03-20 10:43:43'),(217,'47.94.40.125','','Unidentified User Agent','2019-03-20 10:43:45'),(218,'77.220.214.27','Windows 8','Chrome 68.0.3440.106','2019-03-20 10:44:28'),(219,'47.94.40.114','','Unidentified User Agent','2019-03-20 10:44:58'),(220,'47.94.40.114','','Unidentified User Agent','2019-03-20 10:44:59'),(221,'47.94.45.219','','Unidentified User Agent','2019-03-20 11:05:57'),(222,'47.94.45.219','','Unidentified User Agent','2019-03-20 11:05:59'),(223,'47.94.40.125','','Unidentified User Agent','2019-03-20 11:11:45'),(224,'47.94.40.125','','Unidentified User Agent','2019-03-20 11:11:47'),(225,'125.163.68.154','Linux','Chrome 73.0.3683.75','2019-03-20 11:15:42'),(226,'125.163.68.154','Windows 10','Firefox 65.0','2019-03-20 11:18:02'),(227,'47.94.40.114','','Unidentified User Agent','2019-03-20 11:18:40'),(228,'47.94.40.114','','Unidentified User Agent','2019-03-20 11:18:42'),(229,'140.213.25.46','Unknown Platform','Unidentified User Agent','2019-03-20 11:20:43'),(230,'103.71.9.18','Windows 10','Firefox 65.0','2019-03-20 11:22:57'),(231,'47.94.40.111','','Unidentified User Agent','2019-03-20 11:24:33'),(232,'47.94.40.111','','Unidentified User Agent','2019-03-20 11:24:35'),(233,'47.94.40.125','','Unidentified User Agent','2019-03-20 11:50:09'),(234,'47.94.40.125','','Unidentified User Agent','2019-03-20 11:50:11'),(235,'47.94.40.114','','Unidentified User Agent','2019-03-20 11:52:05'),(236,'47.94.40.114','','Unidentified User Agent','2019-03-20 11:52:10'),(237,'113.117.57.197','','Unidentified User Agent','2019-03-20 11:52:12'),(238,'113.117.57.197','','Unidentified User Agent','2019-03-20 11:52:14'),(239,'47.94.45.219','','Unidentified User Agent','2019-03-20 11:56:25'),(240,'47.94.45.219','','Unidentified User Agent','2019-03-20 11:56:27'),(241,'64.233.172.134','Linux','Chrome 49.0.2623.75','2019-03-20 11:59:32'),(242,'47.94.40.111','','Unidentified User Agent','2019-03-20 12:04:39'),(243,'47.94.40.111','','Unidentified User Agent','2019-03-20 12:04:41'),(244,'95.142.47.213','Windows 7','Internet Explorer 10.0','2019-03-20 12:18:46'),(245,'64.233.173.145','Android','Chrome 73.0.3683.75','2019-03-20 12:21:38'),(246,'47.94.40.114','','Unidentified User Agent','2019-03-20 12:24:36'),(247,'47.94.40.114','','Unidentified User Agent','2019-03-20 12:24:38'),(248,'47.94.40.125','','Unidentified User Agent','2019-03-20 12:25:39'),(249,'47.94.40.125','','Unidentified User Agent','2019-03-20 12:25:41'),(250,'47.94.40.111','','Unidentified User Agent','2019-03-20 12:30:10'),(251,'47.94.40.111','','Unidentified User Agent','2019-03-20 12:30:12'),(252,'47.94.45.219','','Unidentified User Agent','2019-03-20 12:38:48'),(253,'47.94.45.219','','Unidentified User Agent','2019-03-20 12:38:49'),(254,'64.233.172.130','Android','Chrome 38.0.1025.166','2019-03-20 12:46:50'),(255,'64.233.172.134','Android','Chrome 38.0.1025.166','2019-03-20 12:46:55'),(256,'64.233.172.132','Android','Chrome 38.0.1025.166','2019-03-20 12:46:55'),(257,'64.233.172.130','Android','Chrome 38.0.1025.166','2019-03-20 12:46:55'),(258,'47.94.40.111','','Unidentified User Agent','2019-03-20 12:48:02'),(259,'47.94.40.111','','Unidentified User Agent','2019-03-20 12:48:04'),(260,'64.233.173.144','Android','Chrome 73.0.3683.75','2019-03-20 12:48:41'),(261,'47.94.40.114','','Unidentified User Agent','2019-03-20 12:59:35'),(262,'47.94.40.114','','Unidentified User Agent','2019-03-20 12:59:37'),(263,'47.94.40.125','','Unidentified User Agent','2019-03-20 12:59:48'),(264,'47.94.40.125','','Unidentified User Agent','2019-03-20 12:59:49'),(265,'192.168.100.100','Windows 10','Firefox 66.0','2019-03-20 14:07:42'),(266,'47.94.40.111','','Unidentified User Agent','2019-03-20 14:11:31'),(267,'47.94.40.111','','Unidentified User Agent','2019-03-20 14:11:33'),(268,'47.94.40.125','','Unidentified User Agent','2019-03-20 14:30:03'),(269,'47.94.40.125','','Unidentified User Agent','2019-03-20 14:30:04'),(270,'47.94.40.114','','Unidentified User Agent','2019-03-20 14:33:44'),(271,'47.94.40.114','','Unidentified User Agent','2019-03-20 14:33:46'),(272,'192.168.100.100','Windows 10','Firefox 66.0','2019-03-20 14:53:44'),(273,'114.5.146.17','Android','Chrome 73.0.3683.75','2019-03-20 14:59:06'),(274,'47.94.40.114','','Unidentified User Agent','2019-03-20 15:37:04'),(275,'47.94.40.114','','Unidentified User Agent','2019-03-20 15:37:07'),(276,'192.168.200.192','Linux','Chrome 73.0.3683.75','2019-03-20 16:13:59'),(277,'140.213.20.244','Android','Chrome 72.0.3626.121','2019-03-20 16:18:34'),(278,'114.124.171.4','Android','Chrome 73.0.3683.75','2019-03-20 16:19:38'),(279,'114.124.171.4','Unknown Platform','Unidentified User Agent','2019-03-20 16:24:22'),(280,'192.168.100.100','Windows 10','Firefox 66.0','2019-03-20 16:26:17'),(281,'192.168.100.100','Windows 10','Firefox 65.0','2019-03-20 16:30:10'),(282,'192.168.100.100','Windows 10','Firefox 65.0','2019-03-20 16:30:32'),(283,'103.71.9.18','Windows 10','Edge 17.17134','2019-03-20 16:38:27'),(284,'103.71.9.18','Windows 10','Firefox 66.0','2019-03-20 16:39:06'),(285,'114.124.138.225','iOS','Safari 604.1','2019-03-20 17:11:59'),(286,'103.71.9.18','Mac OS X','Chrome 67.0.3396.87','2019-03-20 17:13:48'),(287,'114.124.146.215','Android','Chrome 67.0.3396.87','2019-03-20 17:18:09'),(288,'103.71.9.18','Mac OS X','Chrome 67.0.3396.87','2019-03-20 17:20:38'),(289,'103.71.9.18','Windows 10','Chrome 55.0.2883.87','2019-03-20 17:21:17'),(290,'180.248.76.78','Windows 7','Firefox 66.0','2019-03-20 19:01:47'),(291,'180.253.246.99','Android','Chrome 73.0.3683.75','2019-03-20 19:23:05'),(292,'159.89.128.242','iOS','Safari 604.1','2019-03-20 20:05:56'),(293,'120.188.39.148','Android','Chrome 73.0.3683.75','2019-03-20 20:51:29'),(294,'180.253.246.99','Windows 10','Firefox 66.0','2019-03-20 21:27:30'),(295,'182.0.233.107','Android','Chrome 67.0.3396.87','2019-03-21 07:28:57'),(296,'182.0.234.130','Android','Chrome 73.0.3683.75','2019-03-21 07:59:24'),(297,'103.71.9.18','Windows 10','Firefox 66.0','2019-03-21 08:20:55'),(298,'103.71.9.18','Windows 10','Firefox 66.0','2019-03-21 08:21:49'),(299,'114.124.214.96','iOS','Safari 604.1','2019-03-21 08:24:28'),(300,'103.71.9.80','Mac OS X','Chrome 67.0.3396.87','2019-03-21 08:39:25'),(301,'182.0.233.59','Android','Chrome 73.0.3683.75','2019-03-21 09:09:11'),(302,'192.168.200.2','Mac OS X','Safari 605.1.15','2019-03-21 09:10:00'),(303,'114.124.179.45','Android','Chrome 72.0.3626.121','2019-03-21 10:05:58'),(304,'64.233.172.159','Linux','Chrome 56.0.2924.87','2019-03-21 10:29:03'),(305,'114.124.179.45','Unknown Platform','Unidentified User Agent','2019-03-21 10:30:15'),(306,'192.168.200.2','Android','Chrome 72.0.3626.121','2019-03-21 10:35:11'),(307,'114.142.169.63','Android','Chrome 72.0.3626.121','2019-03-21 10:42:43'),(308,'114.142.169.63','Unknown Platform','Unidentified User Agent','2019-03-21 10:43:09'),(309,'192.168.100.9','Windows 10','Chrome 72.0.3626.121','2019-03-21 12:10:25'),(310,'192.168.2.1','Windows 10','Chrome 72.0.3626.121','2019-03-21 12:11:28'),(311,'114.124.233.136','Mac OS X','Safari 605.1.15','2019-03-21 12:31:40'),(312,'182.0.200.204','Android','Chrome 73.0.3683.75','2019-03-21 12:34:26'),(313,'114.124.179.45','Unknown Platform','Unidentified User Agent','2019-03-21 13:05:37'),(314,'114.124.150.119','Android','Chrome 59.0.3071.125','2019-03-21 13:16:16'),(315,'114.5.145.4','Unknown Platform','Unidentified User Agent','2019-03-21 13:53:31'),(316,'109.201.154.250','Unknown Platform','Uptimebot','2019-03-21 16:26:31'),(317,'36.71.234.137','Windows 10','Chrome 73.0.3683.86','2019-03-21 16:54:33'),(318,'114.124.200.56','Android','Chrome 67.0.3396.87','2019-03-21 18:17:49'),(319,'36.71.234.137','Windows 10','Chrome 73.0.3683.86','2019-03-21 18:32:42'),(320,'202.80.214.48','Linux','Chrome 71.0.3578.98','2019-03-21 18:48:40'),(321,'66.220.149.17','Unknown Platform','Unidentified User Agent','2019-03-21 19:14:41'),(322,'66.220.149.17','Unknown Platform','Unidentified User Agent','2019-03-21 19:14:42'),(323,'182.0.234.51','Android','Chrome 73.0.3683.75','2019-03-21 19:18:04'),(324,'36.71.234.137','Windows 10','Chrome 73.0.3683.86','2019-03-21 20:56:51'),(325,'180.245.245.190','Android','Chrome 73.0.3683.75','2019-03-21 21:41:33'),(326,'103.119.55.8','Windows 10','Chrome 73.0.3683.86','2019-03-21 22:05:42'),(327,'180.245.245.190','Windows 10','Firefox 66.0','2019-03-21 22:42:11'),(328,'180.245.245.190','Windows 10','Firefox 66.0','2019-03-21 22:57:57'),(329,'180.245.245.190','Windows 10','Chrome 72.0.3626.121','2019-03-21 23:00:27'),(330,'103.119.55.8','Windows 10','Chrome 73.0.3683.86','2019-03-21 23:19:48'),(331,'192.168.200.2','Windows 7','Chrome 72.0.3626.121','2019-03-22 01:47:38'),(332,'109.201.152.232','Unknown Platform','Uptimebot','2019-03-22 03:41:19'),(333,'114.124.134.200','Android','Chrome 73.0.3683.75','2019-03-22 03:48:41'),(334,'114.124.134.200','Unknown Platform','Unidentified User Agent','2019-03-22 06:14:12'),(335,'120.188.92.127','Android','Chrome 73.0.3683.75','2019-03-22 06:35:13'),(336,'120.188.95.230','Android','Chrome 73.0.3683.75','2019-03-22 07:17:50'),(337,'120.188.95.230','Android','Chrome 73.0.3683.75','2019-03-22 07:18:09'),(338,'114.124.179.75','Android','Chrome 73.0.3683.75','2019-03-22 07:38:36'),(339,'103.89.124.170','Windows 7','Chrome 72.0.3626.121','2019-03-22 08:07:13'),(340,'114.124.179.75','Android','Chrome 73.0.3683.75','2019-03-22 08:45:30'),(341,'114.124.179.75','Android','Firefox 65.0','2019-03-22 08:46:54'),(342,'64.233.172.158','Linux','Chrome 49.0.2623.75','2019-03-22 09:31:04'),(343,'103.119.55.8','Linux','Firefox 66.0','2019-03-22 10:04:56'),(344,'114.142.169.10','Android','Chrome 72.0.3626.121','2019-03-22 10:43:23'),(345,'114.124.179.75','Android','Chrome 63.0.3239.111','2019-03-22 11:02:44'),(346,'103.89.124.170','Linux','Firefox 60.0','2019-03-22 11:06:07'),(347,'103.119.55.8','Android','Chrome 72.0.3626.121','2019-03-22 11:13:24'),(348,'103.89.124.170','Android','Chrome 73.0.3683.75','2019-03-22 11:22:52'),(349,'66.249.69.2','Android','Googlebot','2019-03-22 14:10:07'),(350,'66.249.69.30','Android','Googlebot','2019-03-22 14:11:13'),(351,'66.249.69.30','Android','Googlebot','2019-03-22 14:11:32'),(352,'66.249.69.30','Android','Googlebot','2019-03-22 14:11:50'),(353,'66.249.69.31','Android','Googlebot','2019-03-22 14:12:02'),(354,'66.249.69.2','Android','Googlebot','2019-03-22 14:12:04'),(355,'66.249.69.31','Android','Googlebot','2019-03-22 14:12:07'),(356,'66.249.69.30','Android','Googlebot','2019-03-22 14:12:56'),(357,'103.71.9.18','Windows 10','Chrome 73.0.3683.86','2019-03-22 14:41:56');
/*!40000 ALTER TABLE `visitor` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-03-22 15:31:59
