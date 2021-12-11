-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2021 at 07:25 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ooo`
--

-- --------------------------------------------------------

--
-- Table structure for table `bahandasar`
--

CREATE TABLE `bahandasar` (
  `idbahan` bigint(20) UNSIGNED NOT NULL,
  `namabahan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambarbahan` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `pantangan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `manfaat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bahandasar`
--

INSERT INTO `bahandasar` (`idbahan`, `namabahan`, `gambarbahan`, `pantangan`, `created_at`, `updated_at`, `manfaat`) VALUES
(1, 'Kacang', 'https://cdn.discordapp.com/attachments/906163180328325130/906354771626176602/Kacang.jpg', 'penderita asma---Konsumsi kacang awalnya bisa menyebabkan sesak nafas, rasa panas di perut, mual dan muntah. Dalam waktu singkat racun dari kacang yang memicu alergi bisa membuat penderita asma tidak bisa bernafas.', NULL, NULL, '1. Membangun dan memperbaiki sel-sel tubuh---2. Mencegah kolesterol tinggi---3. Melancarkan pencernaan---4. Menurunkan berat badan---5. Mengelola kadar gula darah---6. Menjaga kesehatan jantung---7. Pencegahan batu empedu---8. Mencegah bayi lahir cacat---9. Mencegah anemia---10. Menjaga kesehatan kulit\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n'),
(2, 'Kopi', 'https://cdn.discordapp.com/attachments/906163180328325130/906354818346536960/Kopi.jpg', 'penderita asam lambung---Kopi dapat meningkatkan asam lambung dan memicu maag kronis, refluks asam dan iritasi lambung', NULL, NULL, '1. Menurunkan risiko kanker---2. Menurunkan berat badan---3. Murunkan risiko diabetes tipe 2---4. Mengurangi risiko terjangkit alzheimer---5. Melindungi organ hati---6. Meningkatkan energi dan fungsi otak---7. Meningkatkan suasana hati(mood)\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n'),
(3, 'Tepung', 'https://cdn.discordapp.com/attachments/906163180328325130/906354901368590447/Tepung.jpg', 'Bagi Penderita diabetes tipe 2---Apabila mengkonsumsi makanan dari tepung yang mengandung karbohidrat rafinasi, beberapa resiko kesehatan lain yang dapat terjadi adalah obesitas,  dan penyakit jantung', NULL, NULL, '1. membantu pembentukan gluten dan mempercepan pematangan---2. Membantu pembentukan energi dari karbohidrat dan lemak---3. Meningkatkan protein dan menghasilkan gluten dengan kualitas istimewa---4. Menaikkan level gula darah'),
(4, 'Talas', 'https://cdn.discordapp.com/attachments/906163180328325130/906354859547177040/Talas.jpg', 'Penderita obesitas---Dalam 100 gram talas terkandung 112 kalori sehingga bisa menjadi masalah buat mereka yang ingin menurunkan berat badan. Kadar karbohidrat talas juga lebih tinggi dari kentang. Jadi terlalu banyak makan talas bisa membuat gemuk.', NULL, NULL, '1. Menjaga kesehatan pencernaan---2. Membantu menurunkan berat badan---3. Meningkatkan kesehatan jantung---4. Mengendalikan tekanan darah---5. Mengontrol kadar gula darah---6. Kaya akan antioksidan---7. Membantu memenuhi kebutuhan seng'),
(5, 'Cabai', 'https://cdn.discordapp.com/attachments/906163180328325130/919055589697552404/Cabai.jpg', 'Penderita asam lambung---Konsumsi caba sebaiknya dilakukan setelah makan. Konsumsi cabai yang berlebihan dapat mengakibatkan maag dan peradangan pada usus.', NULL, NULL, '1. Meringankan rasa sakit---2. Menurunkan berat badan---3. Memelihara kesehatan pencernaan---4. Menjaga kadar gula darah---5. Mengurangi risiko penyakit jantung dan pembuluh darah---6. Menurunkan risiko kanker---7. Melancarkan pernapasan---8. Menjaga kesehatan mata'),
(6, 'Jahe', 'https://cdn.discordapp.com/attachments/906163180328325130/918198110935715921/Jahe.jpg', 'Ibu hami---Dosis yang aman mengonsumsi jahe bagi ibu hamil sebanyak 1500 mg dalam sehari. Jika dikonsumsi lebih dari itu, ahli kandungan memperingatkan bahwa jahe bisa menimbulkan risiko terjadinya pendarahan hingga keguguran\r\n', NULL, NULL, '1. Anti Penuaan dan Kanker---2. Meredakan Nyeri Haid---3. Menurunkan Glukosa Darah sampai Kolesterol---4. Memperkuat Sistem Imun---5. Menangkal Infeksi Bakteri dan Virus---6. Meredakan Sakit Otot---7. Meredakan Morning Sickness---8. Mengatasi Masalah Pencernaan'),
(7, 'Buah-buahan', 'https://cdn.discordapp.com/attachments/906163180328325130/918540381967233054/Buah.jpeg', 'Penderita asam lambung---Memakan buah-buahan yang masam dengan berlebih dapat menyebabkan peningkatan asam lambung', NULL, NULL, '1. Mengurangi terkena risiko penyakit jantung, diabetes tipe 2, obesitas, stroke, kanker, dan sebagainya---2. Memenuhi Asupan Vitamin, Nutrisi dan Mineral---3. Memerangi Radikal Bebas---4. Menjaga Tubuh Tetap Bugar---5. Menjaga Kesehatan Tulang---6. Meningkatkan Kinerja Otak---7. Menghidrasi Tubuh---8. Menjaga Kesehatan Kulit---9. Memberikan Energi---10. Menjaga Kesehatan Sistem Pencernaan---11. Menurunkan Berat Badan'),
(8, 'Jamur', 'https://cdns.klimg.com/merdeka.com/i/w/news/2020/12/06/1250450/670x335/15-jenis-jenis-jamur-yang-bisa-dikonsumsi-beserta-manfaatnya-bagi-kesehatan.jpeg', 'Penderita alergi jamur---Bagi orang-orng tertentu yng menderita lergi jamur, mengkonsumsi jamur dapat menyebabkan kelelahan, sakit perut, alergi kulit, sensasi kesemutan, sakit kepala dan perasaan cemas.', NULL, NULL, '1. Mencegah kanker---2. Menjaga kesehatan jantung---3. Meningkatkan kekebalan tubuh---4. Menurunkan kadar kolesterol dalam darah---5. Menjaga kesehatan otot dan saraf---6. Menjaga kesehatan tulang---7. Menurunkan risiko diabetes'),
(9, 'Tahu', 'https://cdn.discordapp.com/attachments/906163180328325130/917472030117490698/Tahu.jpg', 'Penderita asam urat---Pengidap asam urat pantang untuk mengonsumsi makanan yang terbuat dari kedelai, seperti tahu dan tempe. Kandungan purin dalam tahu dan tempe dapat memicu kekambuhan asam urat pada sendi.', NULL, NULL, '1. Mencegah risiko serangan jantung---2. Mengurangi risiko kanker---3. Menurunkan berat badan---4. Melancarkan pencernaan---5. Mencegah risiko diabetes tipe 2---6. Mengurangi gejala menopause---7. Mencegah osteoporosis---8. Menjaga fungsi kognitif otak---9. Mengurangi penuaan kulit---10. Menurunkan kolesterol---11. Menjaga fungsi ginjal'),
(10, 'Gandum', 'https://cdn.discordapp.com/attachments/906163180328325130/918198089418932224/Gandum.jpg', 'Penderita celiac---Memakan makanan yang mengandung gluten seperti gandum dengan berlebih dapat menyebabkan gangguan pada usus kecil serta gangguan pada otak seperti epilepsi', NULL, NULL, '1. Mencegah dan mengatasi sembelit---2. Mendukung fungsi sistem pencernaan yang sehat dengan membantu menghilangkan bakteri jahat di usus---3. Menurunkan risiko penyakit kronis, seperti jantung, stroke, obesitas, dan diabetes tipe 2---4. Mengurangi peradangan kronis---5. Mengurangi risiko terkena kanker usus besar---6. Mendukung program diet dan membuat tubuh merasa kenyang lebih lama'),
(11, 'Beras', 'https://cdn.discordapp.com/attachments/906163180328325130/918198065335246908/Beras.jpg', 'Penderita diabetes melitus---Penentuan jenis beras harus disesuaikan dengan kandungan amilosa tinggi dan Indeks Glikemik (IG) rendah.', NULL, NULL, '1. Menyediakan energi---2. Mencegah obesitas---3. Mengontrol tekanan darah---4. Mencegah penyakit kanker---5. Perawatan kulit---6. Mencegah penyakit Alzheimer---7. Meningkatkan kualitas diuretik dan digestif---8. Meningkatkan metabolisme---9. Meningkatkan kesehatan kardiovaskular'),
(12, 'Ubi', 'https://cdn.discordapp.com/attachments/906163180328325130/918205230171176970/Ubi.jpg', 'Penderita tipes---tekstur ubi yang berserat ini  akan berdampak buruk terhadap kelangsungan pemulihan kesehatan penyakit tipes. Jika penderita tipes tetap memaksa memakannya, dikhawatirkan penyakit bisa semakin parah.', NULL, NULL, '1. Mencegah penyakit jantung---2. Menjaga berat badan---3. Mencegah kanker---4. Menjaga kesehatan mata---5. Mengurangi risiko terjadinya peradangan'),
(13, 'Kepiting', 'https://cdn.discordapp.com/attachments/906163180328325130/917471931521970236/Kepiting.jpg', 'penderita hipertensi---kepiting mengandung kadar natrium yang tinggi, sehingga disarankan untuk membatasi makan kepiting agar tidak berlebihan.', NULL, NULL, '1. Baik bagi kesehatan tulang---2. Meningkatkan kognisi dan fungsi keseluruhan sistem saraf---3. Menghilangkan peradangan---4. Menetralisir radikal bebas---6. Meningkatkan fungsi keseluruhan ginjal dan hati---7. Meningkatkan produksi sel darah merah'),
(14, 'Ikan', 'https://cdn.discordapp.com/attachments/906163180328325130/918181325138178088/Ikan.jpg', 'Penderita asam urat---Ikan memiliki kandungan purin yang cukup tinggi sehingga tidak baik untuk dikonsumsi bagi penderta asam urat. ', NULL, NULL, '1. Baik untuk perkembangan mata dan otak---2. meningkatkan kesehatan otak---3. Mencegah sekaligus mengatasi depresi---4. Mengurangi risiko penyakit autoimun---5. Menurunkan risiko stroke dan serangan jantung---6. Mencegah asma pada anak---7. Meningkatkan kualitas tidur---8. Mengurangi risiko lahir prematur'),
(15, 'Pisang', 'https://cdn.discordapp.com/attachments/906163180328325130/917471964355002398/Pisang.jpg', 'Penderita diabetes---Pisang mengandung gula dan karbohidrat yang tinggi. Hal ini dapat membuat kadar gula penderita melewati batas normal apabila dikonsumsi berlebihan.---Penderita maag---Pisang termasuk makanan yang mengandung kadar gas tinggi sehingga dapat memicu asam lambung naik dan menyebabkan gejala maag.', NULL, NULL, '1. Menjaga kesehatan jantung---2. Melancarkan sistem pencernaan---3. Menurunkan tekanan darah tinggi---4. Baik untuk anemia---5. Menyembuhkan luka bekas jerawat---6. membuat pikiran bahagia---8. Menstabilkan gula darah---10. Meningkatkan sensitivitas insulin---11. Menghindari penyakit ginjal---12. Meredakan mual dan muntah selama kehamilan---13. Mendukung perkembangan sistem saraf bayi'),
(16, 'Singkong', 'https://cdn.discordapp.com/attachments/906163180328325130/918181308423884850/Singkong.jpg', 'Penderita penyakit ginjal---Kadar gula dan kadar protein yang tinggi dapat menimbulkan rasa haus setelah mengkonsumsinya.', NULL, NULL, '1. Meningkatkan kesehatan usus---2. Membuat tulang lebih kuat---3. Menurunkan tekanan darah---4. Mencegah diabetes---5. Sumber energi'),
(17, 'Susu', 'https://cdn.discordapp.com/attachments/906163180328325130/918181282259812392/Susu.jpg', 'Penderita autoimun---produk susu tidak baik untuk dikonsumsi karena dapat merangsang respons imun', NULL, NULL, '1. Menguatkan tulang dan gigi---2. Mengoptimalkan pertumbuhan anak---3. Menetralisir racun di dalam tubuh---4. Mengurangi stress---5. Menjaga berat badan---6. Mengendalikan tekanan darah---7. Meningkatkan kesuburan---8. Menjaga dan membentuk otot---9. Menambah energi---10. Menjaga kesehatan kulit'),
(18, 'Bawang', 'https://cdn.discordapp.com/attachments/906163180328325130/906805541655969822/bawang.jpg', 'Penderita asam lambung---Bawang mengandung asam sehingga dapat berdampak pada naiknya asam lambung', NULL, NULL, '1. Baik untuk jantung---2. Cegah kanker---3. Baik untuk tulang dan darah---4. Baik untuk sistem pencernaan'),
(19, 'Daging Merah', 'https://cdn.discordapp.com/attachments/906163180328325130/918181260915011684/DagingSapi.jpg', 'Bagi penderita penyakit ginjal---Daging merah mengadung protein hewani yang sangat tinggi sehingga sulit untuk disaring oleh tubuh penderita penyakit ginjal---Bagi penderita asam lambung---Daging merah tergolong ke bahan makanan tinggi lemak yang tidak baik dikonsumsi karena dapat memicu naiknya asam lambung', NULL, NULL, '1. Mengobati anemia---2. Menaikkan kadar hemoglobin---3. Mengurangi kelelahan---4. Mendorong imunitas---5. Membuat individu bisa beristirahat lebih baik'),
(20, 'Cokelat', 'https://cdn.discordapp.com/attachments/906163180328325130/917467933540773948/Cokelat.jpg', 'Penderita asam lambung---Cokelat dapat menyebabkan penderita asam lambung menjadi semakin rentan terhadap refluks asam karena mengandung banyak lemak dan kafein', NULL, NULL, '1. Meningkatkan mood---2. Mengendalikan nafsu makan---3. Menjaga kesehatan jantung dan pembuluh darah---4.Mengontrol kadar gula darah---5. Menurunkan kadar kolesterol---6. Memelihara fungsi dan kesehatan otak---7. Menghambat pertumbuhan sel kanker'),
(21, 'Telur', 'https://cdn.discordapp.com/attachments/906163180328325130/918335371119591444/Telur.jpg', 'Penderita penyakit ginjal---Telur kaya akan protein sehingga membuat ginjal sulit untuk menyaringnya. Makanan berprotein yang tidak dapat disaring akan menumpuk menjadi racun bagi organ ginjal---Penderita autoimun---Telur dapat memicu peradangan dan memperparah gejala autoimun', NULL, NULL, '1. Membentuk jaringan tubuh dan membantu fungsinya---2. Menjaga kesehatan mata---3.Menjaga kesehatan otak---4.Menurunkan kadar kolesterol jahat---5. Membantu menurunkan risiko penyakit jantung---6. Membantu menjaga berat badan---7. Menguatkan sistem imun');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favorit`
--

CREATE TABLE `favorit` (
  `idfavorit` bigint(20) UNSIGNED NOT NULL,
  `idoleh` bigint(20) UNSIGNED NOT NULL,
  `id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favorit`
--

INSERT INTO `favorit` (`idfavorit`, `idoleh`, `id`) VALUES
(5, 5, 2),
(8, 7, 2),
(13, 1, 2),
(14, 6, 2),
(15, 4, 2);

--
-- Triggers `favorit`
--
DELIMITER $$
CREATE TRIGGER `hapusfavorit` BEFORE DELETE ON `favorit` FOR EACH ROW UPDATE `varianoleh` SET favorit_count=favorit_count-1
            WHERE idoleh=OLD.idoleh
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tambahfavorit` BEFORE INSERT ON `favorit` FOR EACH ROW UPDATE `varianoleh` SET favorit_count=favorit_count+1
            WHERE idoleh=NEW.idoleh
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `jenisoleh`
--

CREATE TABLE `jenisoleh` (
  `idjenis` bigint(20) UNSIGNED NOT NULL,
  `namajenis` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsijenis` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambarjenis` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenisoleh`
--

INSERT INTO `jenisoleh` (`idjenis`, `namajenis`, `deskripsijenis`, `gambarjenis`, `created_at`, `updated_at`) VALUES
(1, 'Kacang-kacangan', 'Kacang adalah salah satu bahan makanan yang kaya nutrisi. Memiliki cita rasa yang gurih, kacang kerap diolah menjadi camilan nikmat untuk teman bersantai. ', 'https://cdn.discordapp.com/attachments/906163180328325130/906354771626176602/Kacang.jpg', NULL, NULL),
(2, 'Keripik', 'Keripik atau kripik adalah sejenis makanan ringan berupa irisan tipis dari umbi-umbian, buah-buahan, atau sayuran yang digoreng di dalam minyak nabati. Untuk menghasilkan rasa yang gurih dan renyah biasanya dicampur dengan adonan tepung yang diberi bumbu rempah tertentu.', 'https://cdn.discordapp.com/attachments/906163180328325130/906197474551672892/Renyah.jpg', NULL, NULL),
(3, 'Kue kering', 'Kue kering adalah kue dengan kadar air yang minimal, sehingga dapat tahan disimpan lebih lama daripada kue basah. Kue kering biasanya bertekstur keras tetapi renyah karena dibuat dengan cara dipanggang memakai oven. Kue kering memiliki daya tahan yang cukup lama. Bahan yang umum digunakan untuk pembuatan kue kering di antaranya tepung beras, tepung ketan, terigu, ataupun sagu. Kue kering lebih dikategorikan sebagai kue yang dipanggang mirip seperti kukis.', 'https://cdn.discordapp.com/attachments/906163180328325130/906197653568774174/Kering.jpg', NULL, NULL),
(4, 'Kue Basah', 'Kue basah merupakan makanan kecil yang bisa dijadikan alternatif camilan. Biasa disantap di pagi atau sore hari. Kue basah umumnya empuk, lembut, dan tidak bertahan lama (hanya bertahan beberapa hari). Biasanya terbuat dari tepung terigu, sagu, gula, bahkan ada yang berbahan santan atau ketan. Kue basah umumnya empuk, bertekstur lembut, dan tidak dapat bertahan lama (hanya bertahan beberapa hari atau kurang). Hal ini karena umumnya kue tradisional terbuat dari tepung beras, gula, dan santan, sehingga lekas basi. Kue basah biasanya dimasak dengan cara dikukus, direbus, atau digoreng. Kebanyakan kue tradisional Nusantara adalah kue basah, dan umumnya dapat ditemui di pasar tradisional di Indonesia.', 'https://cdn.discordapp.com/attachments/906163180328325130/906197896968429618/Basah.jpg', NULL, NULL),
(5, 'Manisan', 'Manisan adalah buah-buahan yang direndam dalam larutan gula selama beberapa waktu. Manisan biasanya dimakan sebagai hidangan pelengkap untuk merangsang nafsu makan. Teknologi membuat manisan merupakan salah satu cara pengawetan makanan yang sudah diterapkan sejak dahulu kala. Perendamanan manisan akan membuat kadar gula dalam buah meningkat dan kadar airnya berkurang.', 'https://cdn.discordapp.com/attachments/906163180328325130/906458761324036126/Manisan.jpg', NULL, NULL),
(6, 'Sambal', '\"adalah istilah besar yang dalam kuliner Indonesia merujuk pada saus maupun kondimen pedas. Secara garis besar, sambal berbahan utama cabai yang dilumatkan sehingga keluar kandungan sari cabai dan ditambah bahan-bahan lain seperti garam dan terasi. \r\n\r\nSambal merupakan salah satu unsur khas hidangan Indonesia. Ada bermacam-macam variasi sambal yang berasal dari berbagai daerah.\"', 'https://cdn.discordapp.com/attachments/906163180328325130/906457965161234442/Sambal.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `idlokasi` bigint(20) UNSIGNED NOT NULL,
  `kota` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambarlokasi` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`idlokasi`, `kota`, `provinsi`, `gambarlokasi`, `created_at`, `updated_at`) VALUES
(1, 'Banda Aceh', 'Aceh', 'https://cdn.discordapp.com/attachments/906163180328325130/906471250845638746/Banda_Aceh.jpg', NULL, NULL),
(2, 'Langsa', 'Aceh', 'https://cdn.discordapp.com/attachments/906163180328325130/906471449986990090/Langsa.jpg', NULL, NULL),
(3, 'Lhokseumawe', 'Aceh', 'https://cdn.discordapp.com/attachments/906163180328325130/906471823011639376/Lhokseumawe.jpg', NULL, NULL),
(4, 'Sabang', 'Aceh', 'https://cdn.discordapp.com/attachments/906163180328325130/906472137374720010/Sabang.jpg', NULL, NULL),
(5, 'Subulussalam', 'Aceh', 'https://cdn.discordapp.com/attachments/906163180328325130/906743720999780372/Sabulussalam.jpg', NULL, NULL),
(6, 'Medan', 'Sumatra Utara', 'https://cdn.discordapp.com/attachments/906163180328325130/906473015422894110/Medan.jpg', NULL, NULL),
(7, 'Binjai', 'Sumatra Utara', 'https://cdn.discordapp.com/attachments/906163180328325130/906473466193141760/Binjai.jpg', NULL, NULL),
(8, 'Gunungsitoli', 'Sumatra Utara', 'https://cdn.discordapp.com/attachments/906163180328325130/906473991819132979/Gunungsitoli.jpg', NULL, NULL),
(9, 'Padangsidempuan', 'Sumatra Utara', 'https://cdn.discordapp.com/attachments/906163180328325130/906474249294860328/Padangsidempuan.jpg', NULL, NULL),
(10, 'Pematangsiantar', 'Sumatra Utara', 'https://cdn.discordapp.com/attachments/906163180328325130/906475082493333524/Pematangsiantar.jpg', NULL, NULL),
(11, 'Sibolga', 'Sumatra Utara', 'https://cdn.discordapp.com/attachments/906163180328325130/906475413939814400/Sibolga.jpeg', NULL, NULL),
(12, 'Tanjungbalai', 'Sumatra Utara', 'https://cdn.discordapp.com/attachments/906163180328325130/906475799564144690/Tanjungbalai.jpg', NULL, NULL),
(13, 'Tebing Tinggi', 'Sumatra Utara', 'https://irs1.4sqi.net/img/general/600x600/7826560_LP4xM9woSvEUPL1O-LEoeHZMqLTFmTrzs9pGxas0Qfw.jpg', NULL, NULL),
(14, 'Palembang', 'Sumatra Selatan', 'https://cdn.discordapp.com/attachments/906163180328325130/906504712994570250/Palembang.jpg', NULL, NULL),
(15, 'Lubuklinggau', 'Sumatra Selatan', 'https://cdn.discordapp.com/attachments/906163180328325130/906504761463963688/Lubuklinggau.jpg', NULL, NULL),
(16, 'Pagar Alam', 'Sumatra Selatan', 'https://cdn.discordapp.com/attachments/906163180328325130/906505529931759626/Pagar_Alam.jpg', NULL, NULL),
(17, 'Prabumulih', 'Sumatra Selatan', 'https://cdn.discordapp.com/attachments/906163180328325130/906505596835090432/Prabumulih.jpg', NULL, NULL),
(18, 'Padang', 'Sumatra Barat', 'https://cdn.discordapp.com/attachments/906163180328325130/906506104081641492/Padang.jpg', NULL, NULL),
(19, 'Bukittingi', 'Sumatra Barat', 'https://cdn.discordapp.com/attachments/906163180328325130/906506164508954674/Bukittinggi.jpg', NULL, NULL),
(20, 'Padangpanjang', 'Sumatra Barat', 'https://cdn.discordapp.com/attachments/906163180328325130/906506627392352256/Padangpanjang.jpeg', NULL, NULL),
(21, 'Payakumbuh', 'Sumatra Barat', 'https://cdn.discordapp.com/attachments/906163180328325130/906506696992632922/Payakumbuh.jpg', NULL, NULL),
(22, 'Sawahlunto', 'Sumatra Barat', 'https://cdn.discordapp.com/attachments/906163180328325130/906507461521973278/Sawahlunto.jpg', NULL, NULL),
(23, 'Solok', 'Sumatra Barat', 'https://cdn.discordapp.com/attachments/906163180328325130/906507604564537374/Solok.jpg', NULL, NULL),
(24, 'Pariaman', 'Sumatra Barat', 'https://cdn.discordapp.com/attachments/906163180328325130/906508200495423548/Pariaman.jpg', NULL, NULL),
(25, 'Bengkulu', 'Bengkulu', 'https://cdn.discordapp.com/attachments/906163180328325130/906573575723556864/Bengkulu.jpg', NULL, NULL),
(26, 'Tanjung Pinang', 'Kepulauan Riau', 'https://cdn.discordapp.com/attachments/906163180328325130/906573868431446016/Tanjung_Pinang.jpg', NULL, NULL),
(27, 'Batam', 'Kepulauan Riau', 'https://cdn.discordapp.com/attachments/906163180328325130/906574201740222494/Batam.jpg', NULL, NULL),
(28, 'Dumai', 'Riau', 'https://cdn.discordapp.com/attachments/906163180328325130/906574432368214026/Dumai.jpg', NULL, NULL),
(29, 'Pekanbaru', 'Riau', 'https://cdn.discordapp.com/attachments/906163180328325130/906574838112600094/Pekanbaru.jpg', NULL, NULL),
(30, 'Jambi', 'Jambi', 'https://cdn.discordapp.com/attachments/906163180328325130/906575075392765972/Jambi.jpg', NULL, NULL),
(31, 'Sungai Penuh', 'Jambi', 'https://cdn.discordapp.com/attachments/906163180328325130/906575385637027942/Sungai_Penuh.jpg', NULL, NULL),
(32, 'Bandar Lampung', 'Lampung', 'https://cdn.discordapp.com/attachments/906163180328325130/906576280558911488/Bandar_Lampung.jpg', NULL, NULL),
(33, 'Metro', 'Lampung', 'https://cdn.discordapp.com/attachments/906163180328325130/906576641675898880/Metro.jpg', NULL, NULL),
(34, 'Pangkal Pinang', 'Bangka Belitung', 'https://cdn.discordapp.com/attachments/906163180328325130/906578962237501520/Pangkal_Pinang.jpg', NULL, NULL),
(35, 'Pontianak', 'Kalimantan Barat', 'https://cdn.discordapp.com/attachments/906163180328325130/906579704121794570/Pontianak.jpg', NULL, NULL),
(36, 'Singkawang', 'Kalimantan Barat', 'https://cdn.discordapp.com/attachments/906163180328325130/906580075451940904/Singkawang.jpg', NULL, NULL),
(37, 'Samarinda', 'Kalimantan Timur', 'https://cdn.discordapp.com/attachments/906163180328325130/906580309770911834/Samarinda.jpg', NULL, NULL),
(38, 'Bontang', 'Kalimantan Timur', 'https://cdn.discordapp.com/attachments/906163180328325130/906581131271491584/Bontang.jpg', NULL, NULL),
(39, 'Balikpapan', 'Kalimantan Timur', 'https://cdn.discordapp.com/attachments/906163180328325130/906581978118250506/Balikpapan.jpg', NULL, NULL),
(40, 'Banjarmasin', 'Kalimantan Selatan', 'https://cdn.discordapp.com/attachments/906163180328325130/906582876831756359/Banjarmasin.jpg', NULL, NULL),
(41, 'Banjarbaru', 'Kalimantan Selatan', 'https://cdn.discordapp.com/attachments/906163180328325130/906583239605506098/Banjarbaru.jpeg', NULL, NULL),
(42, 'Palangkaraya', 'Kalimantan Tengah', 'https://cdn.discordapp.com/attachments/906163180328325130/906583539645026354/Palangkaraya.jpg', NULL, NULL),
(43, 'Tanjung Selor', 'Kalimantan Utara', 'https://cdn.discordapp.com/attachments/906163180328325130/906583771606843462/Tanjung_Selor.jpg', NULL, NULL),
(44, 'Tarakan', 'Kalimantan Utara', 'https://cdn.discordapp.com/attachments/906163180328325130/906584180438237224/Tarakan.jpg', NULL, NULL),
(45, 'Serang', 'Banten', 'https://tse3.mm.bing.net/th?id=OIP.F3U8bGGpMyllYUTzUaYkxAHaE7&pid=Api', NULL, NULL),
(46, 'Tangerang', 'Banten', 'https://cdn.discordapp.com/attachments/906163180328325130/906584871378501632/Tangerang.jpeg', NULL, NULL),
(47, 'Tangerang Selatan', 'Banten', 'https://ik.imagekit.io/tvlk/image/imageResource/2019/05/18/1558208793111-0dac6e323d5a491c72604ed7108a57f1.jpeg?tr=q-70', NULL, NULL),
(48, 'Cilegon', 'Banten', 'https://cdn.discordapp.com/attachments/906163180328325130/906590065520672778/Cilegon.jpg', NULL, NULL),
(49, 'Jakarta', 'DKI Jakarta', 'https://cdn.discordapp.com/attachments/906163180328325130/906590177089175602/Jakarta.jpg', NULL, NULL),
(50, 'Bandung', 'Jawa Barat', 'https://cdn.discordapp.com/attachments/906163180328325130/906590251865210900/Bandung.jpg', NULL, NULL),
(51, 'Banjar', 'Jawa Barat', 'https://cdn.discordapp.com/attachments/906163180328325130/906590361726648340/Banjar.jpg', NULL, NULL),
(52, 'Bekasi', 'Jawa Barat', 'https://cdn.discordapp.com/attachments/906163180328325130/906590865147973652/Bekasi.jpg', NULL, NULL),
(53, 'Bogor', 'Jawa Barat', 'https://cdn.discordapp.com/attachments/906163180328325130/906591637008961586/Bogor.jpeg', NULL, NULL),
(54, 'Cimahi', 'Jawa Barat', 'https://cdn.discordapp.com/attachments/906163180328325130/906591587457466438/Cimahi.jpg', NULL, NULL),
(55, 'Cirebon', 'Jawa Barat', 'https://cdn.discordapp.com/attachments/906163180328325130/906592001611407360/Cirebon.jpeg', NULL, NULL),
(56, 'Depok', 'Jawa Barat', 'https://cdn.discordapp.com/attachments/906163180328325130/906592278271909938/Depok.jpg', NULL, NULL),
(57, 'Sukabumi', 'Jawa Barat', 'https://cdn.discordapp.com/attachments/906163180328325130/906592571013341234/Sukabumi.jpg', NULL, NULL),
(58, 'Tasikmalaya', 'Jawa Barat', 'https://cdn.discordapp.com/attachments/906163180328325130/906592822008897576/Tasikmalaya.jpg', NULL, NULL),
(59, 'Semarang', 'Jawa Tengah', 'https://cdn.discordapp.com/attachments/906163180328325130/906593159058956368/Semarang.jpg', NULL, NULL),
(60, 'Tegal', 'Jawa Tengah', 'https://cdn.discordapp.com/attachments/906163180328325130/906593475045253130/Tegal.jpg', NULL, NULL),
(61, 'Surakarta', 'Jawa Tengah', 'https://cdn.discordapp.com/attachments/906163180328325130/906593722488217660/Surakarta.jpg', NULL, NULL),
(62, 'Salatiga', 'Jawa Tengah', 'https://cdn.discordapp.com/attachments/906163180328325130/906594048557580288/Salatiga.jpg', NULL, NULL),
(63, 'Pekalongan', 'Jawa Tengah', 'https://cdn.discordapp.com/attachments/906163180328325130/906594290992578630/Pekalongan.jpg', NULL, NULL),
(64, 'Magelang', 'Jawa Tengah', 'https://cdn.discordapp.com/attachments/906163180328325130/906594807361716266/Magelang.jpg', NULL, NULL),
(65, 'Yogyakarta', 'DI Yogyakarta', 'https://cdn.discordapp.com/attachments/906163180328325130/906594888685076500/Yogyakarta.jpg', NULL, NULL),
(66, 'Surabaya', 'Jawa Timur', 'https://cdn.discordapp.com/attachments/906163180328325130/906595139730944040/Surabaya.jpg', NULL, NULL),
(67, 'Batu', 'Jawa Timur', 'https://cdn.discordapp.com/attachments/906163180328325130/906595522490556486/Batu.jpg', NULL, NULL),
(68, 'Blitar', 'Jawa Timur', 'https://cdn.discordapp.com/attachments/906163180328325130/906595739612901426/Blitar.jpg', NULL, NULL),
(69, 'Kediri', 'Jawa Timur', 'https://cdn.discordapp.com/attachments/906163180328325130/906595913538076722/Kediri.jpg', NULL, NULL),
(70, 'Madiun', 'Jawa Timur', 'https://tse2.mm.bing.net/th?id=OIP.mRQQ_0yvNvT6riWNQ1V0vwHaE7&pid=Api', NULL, NULL),
(71, 'Malang', 'Jawa Timur', 'https://cdn.discordapp.com/attachments/906163180328325130/906596455177932871/Malang.jpg', NULL, NULL),
(72, 'Mojokerto', 'Jawa Timur', 'https://cdn.discordapp.com/attachments/906163180328325130/906602602261807154/Mojokerto.jpeg', NULL, NULL),
(73, 'Probolinggo', 'Jawa Timur', 'https://cdn.discordapp.com/attachments/906163180328325130/906602602261807154/Mojokerto.jpeg', NULL, NULL),
(74, 'Denpasar', 'Bali', 'https://cdn.discordapp.com/attachments/906163180328325130/906605444221521950/Denpasar.jpg', NULL, NULL),
(75, 'Kupang', 'Nusa Tenggara Timur', 'https://cdn.discordapp.com/attachments/906163180328325130/906605939623358484/Kupang.jpg', NULL, NULL),
(76, 'Bima', 'Nusa Tenggara Barat', 'https://cdn.discordapp.com/attachments/906163180328325130/906606245132243034/Bima.jpg', NULL, NULL),
(77, 'Mataram', 'Nusa Tenggara Barat', 'https://cdn.discordapp.com/attachments/906163180328325130/906606702584037416/Mataram.jpg', NULL, NULL),
(78, 'Gorontalo', 'Gorontalo', 'https://cdn.discordapp.com/attachments/906163180328325130/906607019811811358/Gorontalo.jpg', NULL, NULL),
(79, 'Mamuju', 'Sulawesi Barat', 'https://cdn.discordapp.com/attachments/906163180328325130/906607221121626152/Mamuju.jpg', NULL, NULL),
(80, 'Palu', 'Sulawesi Tengah', 'https://cdn.discordapp.com/attachments/906163180328325130/906607795116339290/Palu.jpg', NULL, NULL),
(81, 'Manado', 'Sulawesi Utara', 'https://cdn.discordapp.com/attachments/906163180328325130/906608015350853663/Manado.jpg', NULL, NULL),
(82, 'Bitung', 'Sulawesi Utara', 'https://cdn.discordapp.com/attachments/906163180328325130/906608622396653568/Bitung.jpg', NULL, NULL),
(83, 'Kotamobagu', 'Sulawesi Utara', 'https://cdn.discordapp.com/attachments/906163180328325130/906608622396653568/Bitung.jpg', NULL, NULL),
(84, 'Tomohon', 'Sulawesi Utara', 'https://cdn.discordapp.com/attachments/906163180328325130/906609088463511582/Tomohon.jpg', NULL, NULL),
(85, 'Kendari', 'Sulawesi Tenggara', 'https://cdn.discordapp.com/attachments/906163180328325130/906609667659145276/Kendari.jpg', NULL, NULL),
(86, 'Baubau', 'Sulawesi Tenggara', 'https://cdn.discordapp.com/attachments/906163180328325130/906609847762567178/Baubau.jpg', NULL, NULL),
(87, 'Makassar', 'Sulawesi Selatan', 'https://cdn.discordapp.com/attachments/906163180328325130/906610047520489472/Makassar.png', NULL, NULL),
(88, 'Palopo', 'Sulawesi Selatan', 'https://cdn.discordapp.com/attachments/906163180328325130/906610315578462218/Palopo.jpg', NULL, NULL),
(89, 'Parepare', 'Sulawesi Selatan', 'https://cdn.discordapp.com/attachments/906163180328325130/906610646156709898/Pare_Pare.jpg', NULL, NULL),
(90, 'Ternate', 'Maluku Utara', 'https://cdn.discordapp.com/attachments/906163180328325130/906611034914172968/Ternate.png', NULL, NULL),
(91, 'Tidore', 'Maluku Utara', 'https://cdn.discordapp.com/attachments/906163180328325130/906740346715795456/Tidore.jpg', NULL, NULL),
(92, 'Ambon', 'Maluku', 'https://cdn.discordapp.com/attachments/906163180328325130/906740554103156736/Ambon.jpg', NULL, NULL),
(93, 'Tual', 'Maluku', 'Maluku	https://cdn.discordapp.com/attachments/906163180328325130/906741383593861120/Tual.jpg', NULL, NULL),
(94, 'Manokwari', 'Papua Barat', 'https://cdn.discordapp.com/attachments/906163180328325130/906741701371117608/Manokwari.jpg', NULL, NULL),
(95, 'Sorong', 'Papua Barat', 'https://cdn.discordapp.com/attachments/906163180328325130/906742081035337778/Sorong.jpg', NULL, NULL),
(96, 'Jayapura', 'Papua', 'https://cdn.discordapp.com/attachments/906163180328325130/906742354118082590/Jayapura.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `masak`
--

CREATE TABLE `masak` (
  `idmasak` bigint(20) UNSIGNED NOT NULL,
  `namamasak` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambarmasak` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `masak`
--

INSERT INTO `masak` (`idmasak`, `namamasak`, `gambarmasak`, `created_at`, `updated_at`) VALUES
(1, 'Dipanggang', 'https://cdn.discordapp.com/attachments/906163180328325130/906200479996968960/Dipanggang.jpg', NULL, NULL),
(2, 'Direbus', 'https://cdn.discordapp.com/attachments/906163180328325130/906200719277821962/Direbus.jpeg', NULL, NULL),
(3, 'Dikukus', 'https://cdn.discordapp.com/attachments/906163180328325130/906200537861603358/Dikukus.jpg', NULL, NULL),
(4, 'Digoreng', 'https://cdn.discordapp.com/attachments/906163180328325130/906200860084805632/Digoreng.jpg', NULL, NULL),
(5, 'Disangrai', 'https://cdn.discordapp.com/attachments/906163180328325130/906456515660115968/Disangrai.jpg', NULL, NULL),
(6, 'Direduksi', 'https://cdn.discordapp.com/attachments/906163180328325130/906457320794497054/Direduksi.jpg', NULL, NULL),
(7, 'Difermentasi', 'https://cdn.discordapp.com/attachments/906163180328325130/906200975033917450/Difermentasi.jpg', NULL, NULL),
(8, 'Digiling', 'https://cdn.discordapp.com/attachments/906163180328325130/906803300832268318/mengulek.jpg', NULL, NULL),
(9, 'Diperas', 'https://cdn.discordapp.com/attachments/906163180328325130/909673509507194910/diperas.jpg', NULL, NULL),
(10, 'Dibekukan', 'https://cdn.discordapp.com/attachments/906163180328325130/915619505064009749/Dibekukan.jpg', NULL, NULL),
(11, 'Dipresto', 'https://cdn.discordapp.com/attachments/906163180328325130/918385443261808680/Dipresto.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(12, '2021_11_01_050540_create_tipeoleh_table', 1),
(13, '2021_11_01_050653_create_lokasi_table', 1),
(14, '2021_11_01_050712_create_bahandasar_table', 1),
(15, '2021_11_01_050732_create_mitra_table', 1),
(16, '2021_11_01_050756_create_rasa_table', 1),
(17, '2021_11_01_050810_create_masak_table', 1),
(18, '2021_11_01_050821_create_tekstur_table', 1),
(19, '2021_11_01_051404_create_varianoleh_table', 1),
(20, '2021_11_01_051422_create_tempatbeli_table', 1),
(21, '2021_11_10_140709_perubahan_pada_tipeoleh', 2),
(22, '2021_11_10_142222_create_varian_jenis_table', 3),
(23, '2021_11_10_142339_penambahan_foreignkey', 4),
(24, '2021_11_10_144052_perbaikan_foreign_kedua', 5),
(25, '2021_11_10_145109_anu_anu_foreinkey', 6),
(26, '2021_11_10_164207_nambah_kolom_tempatbeli', 7),
(28, '2014_10_12_200000_add_two_factor_columns_to_users_table', 8),
(29, '2021_11_13_140257_create_sessions_table', 8),
(30, '2014_10_12_100000_create_password_resets_table', 9),
(31, '2019_08_19_000000_create_failed_jobs_table', 9),
(32, '2014_10_12_000000_create_users_table', 10),
(33, '2019_12_14_000001_create_personal_access_tokens_table', 11),
(34, '2021_11_15_085807_nambah_kolom', 12),
(35, '2021_11_16_071602_create_favorit_table', 13),
(36, '2021_11_18_072138_create_trigger_tambah_favorit_count', 14),
(37, '2021_11_18_074537_create_trigger_hapusfavorit', 15),
(38, '2021_11_22_043733_nambah_column_tempatbeli', 16),
(39, '2021_11_27_063230_nambah_kolom_oleh_tmpatbli', 17),
(40, '2021_11_27_071427_nambah_kolom_mitra', 18),
(41, '2021_11_28_071011_create_produk_mitra_table', 19),
(42, '2021_12_05_074245_ubah_kolom_kolom', 20),
(43, '2021_12_05_152409_nambah_kolomz', 21),
(44, '2021_12_09_081623_nambah_kolom_lokasi', 22);

-- --------------------------------------------------------

--
-- Table structure for table `mitra`
--

CREATE TABLE `mitra` (
  `idmitra` bigint(20) UNSIGNED NOT NULL,
  `namamitra` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontak` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idlokasi` bigint(20) UNSIGNED NOT NULL,
  `foto_mitra` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsimitra` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cicip` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gmap_mitra` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_mitra` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jam_buka_mitra` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mitra`
--

INSERT INTO `mitra` (`idmitra`, `namamitra`, `kontak`, `idlokasi`, `foto_mitra`, `deskripsimitra`, `created_at`, `updated_at`, `cicip`, `gmap_mitra`, `alamat_mitra`, `jam_buka_mitra`, `link`) VALUES
(1, 'Sanjai Amak Haji', '(0752) 35480', 19, 'https://cdn.discordapp.com/attachments/906163180328325130/914050025682771978/lokasi_mitra.png', 'Sudah berdiri sejak 1984, usaha ini menjual produk oleh – oleh khas Sumatera Barat yaitu keripik sanjai beserta makanan khas lain seperti kue kering dan olahan manisan lainnya. Pembeli utama dari usaha ini adalah wisatawan yang datang ke toko fisik di kota Bukittinggi. ', NULL, NULL, 'Ada', '<div class=\"mapouter\"><div class=\"gmap_canvas\"><iframe width=\"640\" height=\"360\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=Jl.%20Mr.%20Asa\'at%20No.33,%20Manggis%20Ganting,%20Kec.%20Mandiangin%20Koto%20Selayan,%20Kota%20Bukittinggi,%20Sumatera%20Barat%2026117&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><a href=\"https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/\"></a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=\"https://www.embedgooglemap.net\">google maps on your website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>', 'Jl. Mr. Asa\'at No.33, Manggis Ganting, Kec. Mandiangin Koto Selayan', '06.00–21.00 WIB Setiap Hari', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produk_mitra`
--

CREATE TABLE `produk_mitra` (
  `id_produk_mitra` bigint(20) UNSIGNED NOT NULL,
  `nama_produk_mitra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_produk_mitra` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_produk_mitra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_produkmitra` bigint(20) NOT NULL,
  `idoleh` bigint(20) UNSIGNED DEFAULT NULL,
  `idmitra` bigint(20) UNSIGNED NOT NULL,
  `best_seller` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produk_mitra`
--

INSERT INTO `produk_mitra` (`id_produk_mitra`, `nama_produk_mitra`, `gambar_produk_mitra`, `harga_produk_mitra`, `status_produkmitra`, `idoleh`, `idmitra`, `best_seller`) VALUES
(1, 'Sanjai Balado Merah', 'https://cdn.discordapp.com/attachments/906163180328325130/914381869657780234/Sanjai_Balado_merah.jpg', 'Rp 12.000', 1, NULL, 1, 1),
(2, 'Sanjai Balado Hijau', 'https://cdn.discordapp.com/attachments/906163180328325130/914381976214061116/Sanjai_Balado_Hijau.jpg', 'Rp 12.000', 1, NULL, 1, 1),
(5, 'Kipang Kacang', 'https://cdn.discordapp.com/attachments/906163180328325130/914381510876987402/Kipang_Kacang.jpg', 'Rp 10.000', 0, NULL, 1, NULL),
(6, 'Rakik Maco (Persegi)', 'https://cdn.discordapp.com/attachments/906163180328325130/914381675004297246/Rakik_Macho.jpg', 'Rp 10.000', 0, NULL, 1, NULL),
(7, 'Sanjai Balado Panjang', 'https://cdn.discordapp.com/attachments/906163180328325130/914382100357074944/Sanjai_Balado_Panjang.jpg', 'Rp 12.000', 1, NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rasa`
--

CREATE TABLE `rasa` (
  `idrasa` bigint(20) UNSIGNED NOT NULL,
  `namarasa` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambarasa` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rasa`
--

INSERT INTO `rasa` (`idrasa`, `namarasa`, `gambarasa`, `created_at`, `updated_at`) VALUES
(1, 'Manis', 'https://cdn.discordapp.com/attachments/906163180328325130/906204580084318208/Manis.jpg', NULL, NULL),
(2, 'Pedas', 'https://cdn.discordapp.com/attachments/906163180328325130/906204482491265054/Pedas.jpg', NULL, NULL),
(3, 'Asin', 'https://cdn.discordapp.com/attachments/906163180328325130/906204762825965638/Asin.jpg', NULL, NULL),
(4, 'Asam', 'https://cdn.discordapp.com/attachments/906163180328325130/906204674846261339/Asam.jpg', NULL, NULL),
(5, 'Pahit', 'https://cdn.discordapp.com/attachments/906163180328325130/906204820904505404/Pahit.jpeg', NULL, NULL),
(6, 'Hambar', 'https://cdn.discordapp.com/attachments/906163180328325130/906205196005290064/Pahit.jpeg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tekstur`
--

CREATE TABLE `tekstur` (
  `idtekstur` bigint(20) UNSIGNED NOT NULL,
  `namatekstur` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambartekstur` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tekstur`
--

INSERT INTO `tekstur` (`idtekstur`, `namatekstur`, `gambartekstur`, `created_at`, `updated_at`) VALUES
(1, 'Kenyal', 'https://cdn.discordapp.com/attachments/906163180328325130/906197171295113306/Kenyal.jpg', NULL, NULL),
(2, 'Keras', 'https://cdn.discordapp.com/attachments/906163180328325130/906199202810462288/Keras.jpg', NULL, NULL),
(3, 'Lembut', 'https://cdn.discordapp.com/attachments/906163180328325130/906197283081703454/Lembut.jpg', NULL, NULL),
(4, 'Renyah', 'https://cdn.discordapp.com/attachments/906163180328325130/906197474551672892/Renyah.jpg', NULL, NULL),
(5, 'Lengket', 'https://cdn.discordapp.com/attachments/906163180328325130/906197959887179776/Lengket.jpg', NULL, NULL),
(6, 'Lembek', 'https://cdn.discordapp.com/attachments/906163180328325130/906198675259281448/Lembek.jpg', NULL, NULL),
(7, 'Berminyak', 'https://cdn.discordapp.com/attachments/906163180328325130/906197595666391040/Berminyak.jpg', NULL, NULL),
(8, 'Kering', 'https://cdn.discordapp.com/attachments/906163180328325130/906197653568774174/Kering.jpg', NULL, NULL),
(9, 'Basah', 'https://cdn.discordapp.com/attachments/906163180328325130/906197896968429618/Basah.jpg', NULL, NULL),
(10, 'Berair', 'https://cdn.discordapp.com/attachments/906163180328325130/906197811014553610/Berair.png', NULL, NULL),
(11, 'Kental', 'https://cdn.discordapp.com/attachments/906163180328325130/906197368213479424/Kental.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tempatbeli`
--

CREATE TABLE `tempatbeli` (
  `idtempatbeli` bigint(20) UNSIGNED NOT NULL,
  `merk` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambarproduk` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `varianjual` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `idoleh` bigint(20) UNSIGNED NOT NULL,
  `idlokasi` bigint(20) UNSIGNED NOT NULL,
  `idmitra` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bundle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kemasan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_map` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jambuka` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rentang_harga` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `best_seller` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `satuan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bpom` tinyint(1) DEFAULT NULL,
  `cara_bayar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sosmed` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tempatbeli`
--

INSERT INTO `tempatbeli` (`idtempatbeli`, `merk`, `gambarproduk`, `varianjual`, `idoleh`, `idlokasi`, `idmitra`, `created_at`, `updated_at`, `bundle`, `kemasan`, `alamat`, `link`, `google_map`, `jambuka`, `rentang_harga`, `best_seller`, `satuan`, `bpom`, `cara_bayar`, `sosmed`) VALUES
(1, 'Bolu Meranti Toko Pusat', 'https://cdn.discordapp.com/attachments/906163180328325130/906167937151430656/BoluMeranti_1.jpg', 'Topping Keju Rasa Keju--- Topping Kacang Rasa Keju', 1, 6, NULL, NULL, NULL, '3 in 1 Pack---All in One', 'Kotak,kardus', 'Jl. Kruing simpang Razak No.7C', 'https://www.bolumeranti.co.id/', '<div class=\"mapouter\"><div class=\"gmap_canvas\"><iframe width=\"640\" height=\"360\" id=\"gmap_canvas\" src=\"https://maps.google.com/maps?q=Jl.%20Kruing%20simpang%20Razak%20No.7C%20Medan%20Sumatra%20Utara,%20Indonesia&t=&z=13&ie=UTF8&iwloc=&output=embed\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\"></iframe><a href=\"https://123movies-to.org\">123movies</a><br><style>.mapouter{position:relative;text-align:right;height:360px;width:640px;}</style><a href=\"https://www.embedgooglemap.net\">embedgooglemap.net</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:360px;width:640px;}</style></div></div>', '07.00 - 20.00 WIB (Setiap Hari)', '80000---115000', 'Keju---Double Cokelat---Topping Cokelat Rasa Keju', 'Roll', 0, 'Cash, credit, debit', 'Instagram---bolumerantimedan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pernah_wisata` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `photo`, `remember_token`, `created_at`, `updated_at`, `pernah_wisata`) VALUES
(2, 'test', 'test@testing.com', NULL, '$2y$10$6wsjpsExTE/Ah9BUC/JFS.eeHLwgVyJp2M8BwYfWUXxWFf7hsjeG.', 'https://ui-avatars.com/api/?name=test&background=7F9CF5&color=EBF4FF', NULL, '2021-11-14 06:38:15', '2021-11-14 06:38:15', NULL),
(3, 'Farhan Septiadi', 'septiadifarhan26@gmail.com', NULL, '$2y$10$2qS4C5TOeQU/EuBG2bpAXO5xM0u87.4H9ObYB55Doq2jyDUne2NuS', 'https://ui-avatars.com/api/?name=Farhan+Septiadi&background=7F9CF5&color=EBF4FF', NULL, '2021-12-10 04:20:44', '2021-12-10 04:20:44', NULL),
(4, 'Eula Lawrance', 'eulawangy@genshin.impact.com', NULL, '$2y$10$q7VMO3cCM9VTSLYuEIvwWOmFCKp6pmHsn9xy/SUdfkmPFUEYpdnRy', 'https://ui-avatars.com/api/?name=Eula+Lawrance&background=7F9CF5&color=EBF4FF', NULL, '2021-12-10 04:23:21', '2021-12-10 04:23:21', 'Jakarta,Padang,Surabaya'),
(5, 'Keqing', 'keqing@wangy.com', NULL, '$2y$10$NPLz/Cdx1NbSO90QjeQiSey8InHxV5G49Bm80nVQnEfkSkUUSJM1q', 'https://ui-avatars.com/api/?name=Keqing&background=7F9CF5&color=EBF4FF', NULL, '2021-12-10 05:10:29', '2021-12-10 05:10:29', 'Bukittingi,Jakarta,Bogor');

-- --------------------------------------------------------

--
-- Table structure for table `varianjenis`
--

CREATE TABLE `varianjenis` (
  `id_varian` bigint(20) UNSIGNED NOT NULL,
  `namavarian` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsivarian` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambarvarian` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `idjenis` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `varianjenis`
--

INSERT INTO `varianjenis` (`id_varian`, `namavarian`, `deskripsivarian`, `gambarvarian`, `idjenis`, `created_at`, `updated_at`) VALUES
(1, 'Bolu', 'Merupakan kue berbahan dasar tepung (umumnya tepung terigu), gula, dan telur. Kue bolu dan cake umumnya dimatangkan dengan cara dipanggang di dalam oven, walaupun ada juga bolu yang dikukus, misalnya: bolu kukus atau brownies kukus. Cake yang dihias dengan lapisan (icing) dari krim mentega (buttercream), fondant, atau marzipan disebut kue tart (kue tarcis).', 'https://cdn.discordapp.com/attachments/906163180328325130/906357941228146719/Bolu_Meranti_4.jpg', 4, NULL, NULL),
(2, 'Lapis', 'Lapis ini biasanya terdiri dari dua warna yang berlapis-lapis, ini yang memberi nama kue ini. Kue ini dibuat dari tepung beras, tepung kanji, santan, gula pasir, garam dan pewarna. Kue ini dikukus setiap lapisannya sebelum kemudian lapisan di atasnya ditambahkan. Kue ini banyak ditemui di daerah-daerah di Indonesia.', 'https://cdn.discordapp.com/attachments/906163180328325130/906172268223270912/LapisTalasBogor_1.jpg', 4, NULL, NULL),
(3, 'Pie', 'makanan yang terdiri dari kulit kue kering dan isi yang beraneka ragam. Isi pastei dapat berupa buah, daging, ikan, sayur, keju, coklat, kustar, kacang, dan lain-lain. Pastei yang berisi buah biasanya berupa cairan kental yang dimaniskan mirip selai atau dipotong-potong dadu lalu dipanggang bersamaan dengan kulit pasteinya.', 'https://cdn.discordapp.com/attachments/906163180328325130/906171879868473364/PieSusu_1.jpg', 4, NULL, NULL),
(4, 'Kopi', 'Kopi adalah minuman hasil seduhan biji kopi yang telah disangrai dan dihaluskan menjadi bubuk.Kopi merupakan salah satu komoditas di dunia yang dibudidayakan lebih dari 50 negara. Dua spesies pohon kopi yang dikenal secara umum yaitu Kopi Robusta (Coffea canephora) dan Kopi Arabika (Coffea arabica).', 'https://cdn.discordapp.com/attachments/906163180328325130/906354818346536960/Kopi.jpg', NULL, NULL, NULL),
(5, 'Kacang goreng', 'Kacang goreng adalah makanan keluarga yang memiliki sejarah turun-temurun sebagai pemersatu hari perayaan di berbagai daerah di Indonesia. Bahkan di Manado Sulawesi Utara, kacang goreng sempat menjadi salah satu bisnis yang bagus di tahun 2001. Terutama menjelang hari raya, karena semua orang suka dengan kacang goreng.', 'https://cdn.discordapp.com/attachments/906163180328325130/906354771626176602/Kacang.jpg', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `varianoleh`
--

CREATE TABLE `varianoleh` (
  `idoleh` bigint(20) UNSIGNED NOT NULL,
  `namaoleh` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namalain` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambarutama` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambaroleh` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsioleh` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `idrasa` bigint(20) UNSIGNED NOT NULL,
  `idtekstur` bigint(20) UNSIGNED NOT NULL,
  `idbahan` bigint(20) UNSIGNED NOT NULL,
  `komposisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idmasak` bigint(20) UNSIGNED NOT NULL,
  `idlokasi` bigint(20) UNSIGNED NOT NULL,
  `harga` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statushalal` tinyint(1) NOT NULL,
  `kadarluarsa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carapenyimpanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carapenyajian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trivia` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `namacocok` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idmitra` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_varian` bigint(20) UNSIGNED DEFAULT NULL,
  `idjenis` bigint(20) UNSIGNED DEFAULT NULL,
  `favorit_count` bigint(20) DEFAULT 0,
  `satuan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hargamin` int(11) DEFAULT NULL,
  `hargamax` int(11) DEFAULT NULL,
  `vegan` tinyint(1) DEFAULT NULL,
  `vegetarian` tinyint(1) DEFAULT NULL,
  `gluten_free` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `varianoleh`
--

INSERT INTO `varianoleh` (`idoleh`, `namaoleh`, `namalain`, `gambarutama`, `gambaroleh`, `deskripsioleh`, `idrasa`, `idtekstur`, `idbahan`, `komposisi`, `idmasak`, `idlokasi`, `harga`, `statushalal`, `kadarluarsa`, `carapenyimpanan`, `carapenyajian`, `trivia`, `namacocok`, `idmitra`, `created_at`, `updated_at`, `id_varian`, `idjenis`, `favorit_count`, `satuan`, `hargamin`, `hargamax`, `vegan`, `vegetarian`, `gluten_free`) VALUES
(1, 'Bolu Medan', 'Bolu gulung', 'https://cdn.discordapp.com/attachments/906163180328325130/906167937151430656/BoluMeranti_1.jpg', 'https://cdn.discordapp.com/attachments/906163180328325130/906167937151430656/BoluMeranti_1.jpg---https://cdn.discordapp.com/attachments/906163180328325130/906357833220653076/BoluMeranti_2.jpg --- https://cdn.discordapp.com/attachments/906163180328325130/906357879282475029/BoluMeranti_3.jpg---https://cdn.discordapp.com/attachments/906163180328325130/906357941228146719/Bolu_Meranti_4.jpg---https://cdn.discordapp.com/attachments/906163180328325130/906358000825008138/BoluMeranti_5.jpg---https://cdn.discordapp.com/attachments/906163180328325130/906358046261915698/BoluMeranti_6.jpg ', 'Bolu Meranti merupakan oleh - oleh kue yang khas dari kota Melayu Deli.---Bolu Meranti kerap menjadi kudapan saat arisan, hajatan dan acara kantor sehingga oleh - oleh ini cocok untuk diberikan kepada kolega.---Oleh - oleh ini hadir dengan berbagai varian rasa yang dapat diminati oleh orang dari berbagai kalangan umur sehingga cocok menjadi oleh - oleh keluarga.', 1, 3, 3, 'Tepung, Gula, Telur, Mentega, Topping Pilihan', 1, 6, '80000---115000', 1, '3 hari (suhu ruang)---10 hari (suhu kulkas)', 'Bisa disimpan di kulkas', 'Potong menjadi beberapa bagian, sajikan di atas piring kecil', 'Asal Usul---Bolu Meranti merupakan oleh - oleh yang khas dari Medan. Oleh - oleh ini bermula dari hobi Nyonya Ai Ling, pendiri Bolu Meranti yang memiliki hobi membuat kue yang dijual ke teman dan tetangganya sejak muda dan saat berumah tangga.', 'Kolega---Keluarga', NULL, NULL, NULL, 1, 4, 1, 'Roll', 80000, 115000, 0, 0, 0),
(2, 'Medan Napoleon', NULL, 'https://cdn.discordapp.com/attachments/906163180328325130/906359442705108992/MedanNapoleon_2.jpg', 'https://cdn.discordapp.com/attachments/906163180328325130/906359442705108992/MedanNapoleon_2.jpg---https://cdn.discordapp.com/attachments/906163180328325130/906169302720344095/MedanNapoleon_1.jpg', 'Kue Napoleon merupakan makanan manis sejenis Bolu Gulung (roll cake) tipis panjang yang didalamnya berisi kue pastri. Pada bagian atasnya dihiasi taburan coklat atau remah-remahan agar terlihat menarik dan unik.---Kue Napoleon cocok untuk menjadi oleh - oleh keluarga karena memiliki varian rasa bermacam yang dapat disesuaikan dengan preferensi keluarga, daya tahan yang singkat dan ukuran yang cukup besar sehingga dapat dibagi bersama dengan anggota keluarga.', 1, 3, 3, 'Tepung, Gula, Telur, Mentega, Topping Pilihan', 1, 6, '52000---55000', 1, '3 hari (suhu ruang)---10 hari (suhu kulkas)', 'Bisa disimpan di kulkas', 'Potong menjadi beberapa bagian, sajikan di atas piring kecil', 'Asal Usul---Hari ini sudah lebih dari 100 tahun hengkangnya pasukan Napoleon dari bumi Rusia, ia pergi meninggalkan kota bersama cerita-cerita simpang siur di sudut kotanya. Salah satunya adalah makanan khas turunan dari keluarga bangsawannya di Perancis, Ia adalah anak ke dua dari keluarga bangsawan terhormat di seluruh daratan Perancis hingga ke Swiss, Ibunya yang bernama Maria Letizia Ramolino selalu menghadirkan roti berisikan pastry sebagai makanan pembuka di pagi hari untuk mereka, yang selalu akan di dampingi coklat hangat ataupun kopi kental panas.Sedangkan, kala itu hampir lebih dari ribuan masyarakat miskin mati kelaparan sebab kedinginan dan penindasan.Jendral Mikhail Kutuzov adalah pahlawan yang sanggup mengusir Napoleon bersama sekutunya, dan bertekuk lutut untuk tidak menginvensi Rusia dari sisi ekonomi maupun kebijakan liberalisasi yang di bawa olehnya.Hengkangnya Napoleon di dengar hingga ujung rusia dan pesta di rayakan dari berbagai lapisan masyarakat, seorang mantan juru masak keluarga Bonaparte yang berwarga negara Rusia pun menyalurkan bahagianya dengan membuat Roti Pastry keluarga Napoleon sebagai bentuk terimakasihnya dan di bagi-bagi pada masyarakat miskin dan kelaparan.', 'Keluarga', NULL, NULL, NULL, 1, 4, 0, NULL, 52000, 55000, NULL, NULL, NULL),
(3, 'Mantau', NULL, 'https://cdn.discordapp.com/attachments/906163180328325130/906356985228832768/Mantau_2.jpg', 'https://cdn.discordapp.com/attachments/906163180328325130/906356985228832768/Mantau_2.jpg---https://cdn.discordapp.com/attachments/906163180328325130/906463876990787604/Mantau_3.jpeg---https://cdn.discordapp.com/attachments/906163180328325130/906169613123993600/Mantau_1.jpg', 'Mantau merupakan makanan yang sering disantap oleh warga kota Minyak saat sarapan di pagi hari ditemani dengan kopi susu ataupun di sore hari dengan lauk lainnya.---Oleh  - oleh ini cocok menjadi oleh - oleh untuk keluarga karena dapat disantap oleh seluruh kalangan umur dan dapat disesuaikan ingin disajikan sendiri atau dengan makanan tambahan.', 1, 3, 3, 'Tepung Terigu, Fermipan, Gula, Garam, Air, Susu, Ragi, Mentega Putih', 3, 39, '3000---5000', 1, '7 hari (suhu ruang)---14 hari (suhu kulkas)', 'Harus disimpan di kulkas', 'Goreng atau kukus mantau lalu sajikan di atas piring. Untuk mantau yang digoreng, potong mantau menjadi 3 bagian kemudian sajikan dengan daging sapi lada hitam di atas piring', 'Asal Usul---Mantau atau roti sepan sebenarnya adalah makanan khas Tiongkok yang telah mengalami proses akulturasi sehingga menjadi makanan khas Balikpapan. Mantau memiliki bentuk seperti bakpao, bedanya roti ini tidak diisi daging, cokelat atau apapun seperti bakpao. Mantau hanya roti murni biasa yang terbuat dari tepung terigu pilihan yang diolah sedemikian rupa sehingga menciptakan tekstur rasa yang lembut. Selain itu, penyajian roti mantau digoreng, tidak dikukus seperti bakpao.', 'Keluarga', NULL, NULL, NULL, NULL, 4, 0, NULL, 3000, 5000, 0, 1, 0),
(4, 'Strudel Bogor', NULL, 'https://cdn.discordapp.com/attachments/906163180328325130/906170747700006972/StrudelBogor_1.jpg', 'https://cdn.discordapp.com/attachments/906163180328325130/906170684105965588/StrudelBogor_2.jpg---https://cdn.discordapp.com/attachments/906163180328325130/906170747700006972/StrudelBogor_1.jpg', 'Strudel Bogor memiliki topping isian pada Strudel Bogor ini memunculkan rasa unik yang khas. Sekali gigit, akan membuat anda ketagihan dan ingin mencoba lagi.---Strudel Bogor ini berukuran panjang ±25 cm, kira-kira bisa dipotong menjadi 8 potongan. Dengan packaging rapi, ukuran yang cukup besar dan waktu kadaluarsa relatif singkat, produk ini cocok untuk dibagikan kepada kolega dan keluarga.', 1, 4, 3, 'Pastry, Topping', 1, 53, '45000---50000', 1, '3 hari (suhu ruang)---10 hari (suhu kulkas)', 'Bisa disimpan di kulkas', 'Potong menjadi beberapa bagian, sajikan di atas piring kecil', 'Asal Usul---Strudel sendiri adalah sebuah jenis pastri berlapis yang biasanya diisi dengan manisan. Strudel sudah populer sejak abad ke-16 dan selalu dikaitkan dengan makanan dari Austria. Strudel Bogor adalah modifikasi atas makanan pastry strudel dengan isian berbahan dasar khas Bogor.', 'Keluarga', NULL, NULL, NULL, NULL, 4, 1, NULL, 45000, 50000, 0, 0, 0),
(5, 'Pie Susu Bali', 'egg tart', 'https://cdn.discordapp.com/attachments/906163180328325130/906171879868473364/PieSusu_1.jpg', 'https://cdn.discordapp.com/attachments/906163180328325130/906171879868473364/PieSusu_1.jpg', '\"Pie susu ini merupakan salah satu jenis cemilan kekinian yang sedang tren di Indonesia. Kue ini seringkali disajikan sebagai kudapan arisan, isian snack box kantor, hajatan dan juga dijual di pasar tradisional maupun toko kue modern.---Pie Susu Bali hadir dalam bentuk kemasan kotak dengan jumlah besar sehingga mudah untuk dibawa. Satu potong pie susu sudah dikemas dalam plastik sehingga mudah untuk dibagikan. Cemilan ini cocok untuk dijadikan jamuan pada kegiatan seperti arisan, rapat sehingga dapat dijadikan oleh - oleh bagi kolega dan keluarga.\r\n\"', 1, 3, 3, 'Cream Susu, Fla, Tepung Terigu, Mentega, Telur, Susu, Tepung Maizena, Gula Halus', 1, 74, '2000---3000', 1, '5 hari (suhu ruang)---12 hari (suhu kulkas)', 'Bisa disimpan di kulkas', 'Sajikan di atas piring kecil', 'Asal Usul---Pie susu merupakan modifikasi dari Egg Tart yang bermula di Portugal pada abad ke-19 di Biara Jerónimos di distrik Lisbon di Belém. Para biarawan memiliki kebiasaan membuat kue tart custard kecil dengan campuran gula, tepung dan kuning telur yang dikaramelkan dalam oven untuk menciptakan penampilan khas dan rasa yang lezat.', 'Kolega---Keluarga', NULL, NULL, NULL, 3, 4, 1, NULL, 2000, 3000, 0, 1, 0),
(6, 'Lapis Talas Bogor', NULL, 'https://cdn.discordapp.com/attachments/906163180328325130/906172268223270912/LapisTalasBogor_1.jpg', 'https://cdn.discordapp.com/attachments/906163180328325130/906172268223270912/LapisTalasBogor_1.jpg', 'Lapis Talas dengan cita rasa talas yang dominan dipadukan dengan toping parutan keju, sehingga menghasilkan varian Lapis talas yang enak untuk semua penyuka Talas Bogor.---Lapis Talas Bogor cocok untuk menjadi oleh - oleh keluarga karena memiliki daya tahan yang singkat dan hadir dengan varian rasa bermacam - macam sehingga dapat disesuaikan dengan rasa favorit keluarga.', 1, 3, 4, 'Tepung terigu, Tepung talas, Telur ayam, Gula, Susu, Pengembang kue, Keju', 3, 53, '32000---38000', 1, '4 hari (suhu ruang)---7 hari (suhu kulkas)', 'Harus disimpan di kulkas', 'Potong menjadi beberapa bagian, sajikan di atas piring kecil', 'Asal Usul---Komoditas talas di Bogor cukup berlimpah, itulah sebabnya berbagai macam makanan dan cemilan khas Bogor terbuat dari umbi talas. Talas diolah sedemikian rupa sehingga menghasilkan cita rasa yang khas dan enak pada lapis talas asal Bogor. Lapis talas biaya terdiri dari dua lapis dan taburi berbagai macam topping di atasnya.', 'Keluarga', NULL, NULL, NULL, NULL, 4, 1, NULL, 32000, 38000, 0, 1, 0),
(7, 'Kacang bawang padang', 'Kacang wibu', 'https://cdn.discordapp.com/attachments/906163180328325130/906354771626176602/Kacang.jpg', 'https://cdn.discordapp.com/attachments/906163180328325130/906354771626176602/Kacang.jpg', 'Kacang bawang padang adalah makanan ringan yang sangat umum dijumpai di padang terutama pada perayaan hari lebaran atau tahun baru atau kegiatan yang berhubungan dengan perayaan adat atau keagamaan serta Perkawinan', 3, 2, 1, 'Kacang, Garam, Minyak', 4, 18, '8000---11500', 1, '3 hari (suhu ruang)---10 hari (suhu kulkas)', 'Bisa disimpan di kulkas', 'Sajikan diatas piring atau didalam toples', 'Asal usul---Kacang bawang berasal dari kacang tanah yang mendapat perlakuan khusus, dengan penambahan berbagai macam bumbu yang menjadikan kacang tersebut memiliki rasa yang spesifik. Kacang tanah yang telah dikupas kulitnya direndam dalam air panas untuk menghilangkan kulit arinya dan membuat kacang tersebut lunak. Setelah kulit ari kacang tersebut terkelupas, kacang yang telah kehilangan kulit arinya ditiriskan untuk kemudian digoreng dengan menggunakan minyak kelapa yang tua dengan penambahan bumbu berupa bawang putih yang diiris tipis-tipis dan garam sebagai penyedap. Setelah kacang yang digoreng tersebut berwarna coklat terang dan berbau harum, maka kacang harus segera diangkat dan ditiriskan untuk selanjutnya sudah dapat dihidangkan dengan nama kacang bawang. Saat ini memproses kacang tidak selalu dengan digoreng atau direbus saja akan tetapi kacang bawang juga dapat diolah dengan menggunakan oven', 'Kolega---Keluarga', NULL, NULL, NULL, 5, 1, 1, NULL, 8000, 11500, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahandasar`
--
ALTER TABLE `bahandasar`
  ADD PRIMARY KEY (`idbahan`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `favorit`
--
ALTER TABLE `favorit`
  ADD PRIMARY KEY (`idfavorit`),
  ADD KEY `favorit_idoleh_foreign` (`idoleh`),
  ADD KEY `favorit_id_foreign` (`id`);

--
-- Indexes for table `jenisoleh`
--
ALTER TABLE `jenisoleh`
  ADD PRIMARY KEY (`idjenis`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`idlokasi`);

--
-- Indexes for table `masak`
--
ALTER TABLE `masak`
  ADD PRIMARY KEY (`idmasak`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`idmitra`),
  ADD KEY `mitra_idlokasi_foreign` (`idlokasi`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `produk_mitra`
--
ALTER TABLE `produk_mitra`
  ADD PRIMARY KEY (`id_produk_mitra`),
  ADD KEY `produk_mitra_idoleh_foreign` (`idoleh`),
  ADD KEY `produk_mitra_idmitra_foreign` (`idmitra`);

--
-- Indexes for table `rasa`
--
ALTER TABLE `rasa`
  ADD PRIMARY KEY (`idrasa`);

--
-- Indexes for table `tekstur`
--
ALTER TABLE `tekstur`
  ADD PRIMARY KEY (`idtekstur`);

--
-- Indexes for table `tempatbeli`
--
ALTER TABLE `tempatbeli`
  ADD PRIMARY KEY (`idtempatbeli`),
  ADD KEY `tempatbeli_idoleh_foreign` (`idoleh`),
  ADD KEY `tempatbeli_idlokasi_foreign` (`idlokasi`),
  ADD KEY `tempatbeli_idmitra_foreign` (`idmitra`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `varianjenis`
--
ALTER TABLE `varianjenis`
  ADD PRIMARY KEY (`id_varian`),
  ADD KEY `varian_jenis_idjenis_foreign` (`idjenis`);

--
-- Indexes for table `varianoleh`
--
ALTER TABLE `varianoleh`
  ADD PRIMARY KEY (`idoleh`),
  ADD KEY `varianoleh_idrasa_foreign` (`idrasa`),
  ADD KEY `varianoleh_idtekstur_foreign` (`idtekstur`),
  ADD KEY `varianoleh_idbahan_foreign` (`idbahan`),
  ADD KEY `varianoleh_idmasak_foreign` (`idmasak`),
  ADD KEY `varianoleh_idlokasi_foreign` (`idlokasi`),
  ADD KEY `varianoleh_idmitra_foreign` (`idmitra`),
  ADD KEY `varianoleh_id_varian_foreign` (`id_varian`),
  ADD KEY `varianoleh_idjenis_foreign` (`idjenis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bahandasar`
--
ALTER TABLE `bahandasar`
  MODIFY `idbahan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favorit`
--
ALTER TABLE `favorit`
  MODIFY `idfavorit` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `jenisoleh`
--
ALTER TABLE `jenisoleh`
  MODIFY `idjenis` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `idlokasi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `masak`
--
ALTER TABLE `masak`
  MODIFY `idmasak` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `mitra`
--
ALTER TABLE `mitra`
  MODIFY `idmitra` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk_mitra`
--
ALTER TABLE `produk_mitra`
  MODIFY `id_produk_mitra` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rasa`
--
ALTER TABLE `rasa`
  MODIFY `idrasa` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tekstur`
--
ALTER TABLE `tekstur`
  MODIFY `idtekstur` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tempatbeli`
--
ALTER TABLE `tempatbeli`
  MODIFY `idtempatbeli` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `varianjenis`
--
ALTER TABLE `varianjenis`
  MODIFY `id_varian` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `varianoleh`
--
ALTER TABLE `varianoleh`
  MODIFY `idoleh` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favorit`
--
ALTER TABLE `favorit`
  ADD CONSTRAINT `favorit_id_foreign` FOREIGN KEY (`id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `favorit_idoleh_foreign` FOREIGN KEY (`idoleh`) REFERENCES `varianoleh` (`idoleh`);

--
-- Constraints for table `mitra`
--
ALTER TABLE `mitra`
  ADD CONSTRAINT `mitra_idlokasi_foreign` FOREIGN KEY (`idlokasi`) REFERENCES `lokasi` (`idlokasi`);

--
-- Constraints for table `produk_mitra`
--
ALTER TABLE `produk_mitra`
  ADD CONSTRAINT `produk_mitra_idmitra_foreign` FOREIGN KEY (`idmitra`) REFERENCES `mitra` (`idmitra`),
  ADD CONSTRAINT `produk_mitra_idoleh_foreign` FOREIGN KEY (`idoleh`) REFERENCES `varianoleh` (`idoleh`);

--
-- Constraints for table `tempatbeli`
--
ALTER TABLE `tempatbeli`
  ADD CONSTRAINT `tempatbeli_idlokasi_foreign` FOREIGN KEY (`idlokasi`) REFERENCES `lokasi` (`idlokasi`),
  ADD CONSTRAINT `tempatbeli_idmitra_foreign` FOREIGN KEY (`idmitra`) REFERENCES `mitra` (`idmitra`),
  ADD CONSTRAINT `tempatbeli_idoleh_foreign` FOREIGN KEY (`idoleh`) REFERENCES `varianoleh` (`idoleh`);

--
-- Constraints for table `varianjenis`
--
ALTER TABLE `varianjenis`
  ADD CONSTRAINT `varian_jenis_idjenis_foreign` FOREIGN KEY (`idjenis`) REFERENCES `jenisoleh` (`idjenis`);

--
-- Constraints for table `varianoleh`
--
ALTER TABLE `varianoleh`
  ADD CONSTRAINT `varianoleh_id_varian_foreign` FOREIGN KEY (`id_varian`) REFERENCES `varianjenis` (`id_varian`),
  ADD CONSTRAINT `varianoleh_idbahan_foreign` FOREIGN KEY (`idbahan`) REFERENCES `bahandasar` (`idbahan`),
  ADD CONSTRAINT `varianoleh_idjenis_foreign` FOREIGN KEY (`idjenis`) REFERENCES `jenisoleh` (`idjenis`),
  ADD CONSTRAINT `varianoleh_idlokasi_foreign` FOREIGN KEY (`idlokasi`) REFERENCES `lokasi` (`idlokasi`),
  ADD CONSTRAINT `varianoleh_idmasak_foreign` FOREIGN KEY (`idmasak`) REFERENCES `masak` (`idmasak`),
  ADD CONSTRAINT `varianoleh_idmitra_foreign` FOREIGN KEY (`idmitra`) REFERENCES `mitra` (`idmitra`),
  ADD CONSTRAINT `varianoleh_idrasa_foreign` FOREIGN KEY (`idrasa`) REFERENCES `rasa` (`idrasa`),
  ADD CONSTRAINT `varianoleh_idtekstur_foreign` FOREIGN KEY (`idtekstur`) REFERENCES `tekstur` (`idtekstur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
