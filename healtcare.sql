-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2024 at 03:55 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healtcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'saipul@gmail.com', 'saipul keren');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tgl_isi` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id`, `nama`, `foto`, `isi`, `tgl_isi`) VALUES
(2, 'Dr.Sutardi Santosa', 'dokter_1716920115_dr.sutardi.jpg', '<p>hbshjjsh<br></p>', '2024-05-28 18:15:15'),
(3, 'Dr.Sinta', 'dokter_1716920477_dr.sinta.jpg', '<p>jhdhgjd<br></p>', '2024-05-28 18:21:17');

-- --------------------------------------------------------

--
-- Table structure for table `halaman`
--

CREATE TABLE `halaman` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `kutipan` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tgl_isi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `halaman`
--

INSERT INTO `halaman` (`id`, `judul`, `kutipan`, `isi`, `tgl_isi`) VALUES
(13, 'HealthCare', 'Sistem Informasi Kesehatan', '<p><img style=\"width: 50%; float: left;\" src=\"../gambar/85d8ce590ad8981ca2c8286f79f59954.jpg\" class=\"note-float-left\"><span style=\"color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, \" color=\"\">Healthcare\r\n adalah platform kesehatan yang dirancang untuk memberikan Anda tips dan informasi kesehatan terkini. Kami percaya bahwa kesehatan adalah kunci \r\nkebahagiaan, dan tujuan kami adalah membantu Anda menjalani hidup yang \r\nlebih sehat dan bahagia. Kami menyadari bahwa di tengah banyaknya \r\ninformasi yang beredar, menemukan sumber yang terpercaya bisa menjadi \r\ntantangan. Oleh karena itu, Healthcare hadir untuk memastikan Anda \r\nmendapatkan informasi kesehatan yang benar-benar bermanfaat dan dapat \r\ndiandalkan.<br><br>Kami percaya bahwa kesehatan adalah kunci \r\nkebahagiaan. Tanpa kesehatan yang baik, sulit untuk menikmati kehidupan \r\nsepenuhnya. Kesehatan yang optimal memungkinkan kita untuk melakukan \r\naktivitas sehari-hari dengan lebih baik, menjalin hubungan yang lebih \r\nkuat, dan meraih berbagai impian serta tujuan hidup. Dengan pemahaman \r\nini, kami berkomitmen untuk menyediakan informasi yang dapat membantu \r\nAnda menjaga dan meningkatkan kesehatan Anda.<br><br>Tujuan kami adalah \r\nmembantu Anda menjalani hidup yang lebih sehat dan bahagia. Melalui \r\nberbagai artikel, tips, dan panduan yang kami tawarkan, kami berharap \r\ndapat memberikan pengetahuan yang Anda butuhkan untuk membuat keputusan \r\nyang tepat mengenai kesehatan Anda. Kami juga ingin menjadi sumber \r\ninspirasi bagi Anda untuk memulai dan mempertahankan gaya hidup sehat. \r\nSetiap langkah kecil menuju kesehatan yang lebih baik adalah pencapaian \r\nyang berarti, dan kami ada di sini untuk mendukung perjalanan Anda.<br><br>Di\r\n Healthcare, kami memahami bahwa setiap individu memiliki kebutuhan \r\nkesehatan yang unik. Oleh karena itu, kami berusaha untuk menyajikan \r\ninformasi yang beragam dan sesuai dengan berbagai kondisi serta situasi.\r\n Apakah Anda sedang mencari cara untuk meningkatkan pola makan, tips \r\nuntuk olahraga yang efektif, atau informasi tentang kondisi kesehatan \r\ntertentu, Anda akan menemukan sumber daya yang Anda butuhkan di sini. \r\nKami ingin memastikan bahwa Anda merasa didukung dan mendapatkan panduan\r\n yang jelas untuk setiap aspek kesehatan Anda. <br><br><br></span></p><p><span style=\"color: rgb(13, 13, 13); font-family: Söhne, ui-sans-serif, system-ui, -apple-system, \" color=\"\"><br></span></p>', '2024-05-22 02:06:28'),
(15, '5 Tanda Pekerjaan dan Kehidupan Pribadi Tak Lagi Seimbang', 'Stres dan Depresi', '<div class=\"sc-7cea6e75-3 sc-7cea6e75-5 sc-7cea6e75-6 opQHl fKJHnB WahgO body-content article-content-wrapper\" data-size=\"small\"><img style=\"width: 50%; float: left;\" src=\"../gambar/b73ce398c39f506af761d2277d853a92.jpg\" class=\"note-float-left\"></div><div class=\"sc-7cea6e75-3 sc-7cea6e75-5 sc-7cea6e75-6 opQHl fKJHnB WahgO body-content article-content-wrapper\" data-size=\"small\"><p><span>Saat Anda cenderung lebih mementingkan pekerjaan daripada kehidupan pribadi, ini tandanya keseimbangan hidup dan kerja alias </span><i><span>work-life balance</span></i><span> Anda sudah terganggu. Jika\r\n hal ini dibiarkan terlalu lama, kesehatan fisik dan mental bisa menjadi\r\n taruhannya. Oleh karena itu, kenali tanda-tandanya agar Anda dapat \r\nmembuat perubahan dalam hidup Anda.</span></p><h2 id=\"apa-itu-work-life-balance\" data-title=\"Definisi\">Apa itu <i>work-life balance</i>?</h2><div class=\"sc-7cea6e75-3 sc-7cea6e75-5 sc-7cea6e75-6 opQHl fKJHnB WahgO body-content article-content-wrapper\" data-size=\"small\"><div class=\"percentages-5-of-article\"></div></div><div><div class=\"article-mobile-ad ad-afterimage mantine-1avyp1d\"><div class=\"sc-9b0c3e79-1 kUgqki article-mobile-ad ad-afterimage\" style=\"line-height: 0; margin: 0px auto;\" data-no-wrapper=\"true\" data-header-bottom=\"false\"><div style=\"position: relative; width: fit-content; height: fit-content; overflow: hidden; max-width: 100%; display: flex; align-items: center; justify-content: center;\"><div id=\"div-gpt-ad-afterimage-207448\" data-google-query-id=\"CKaqqo2Jn4YDFZkJgwMdv4sH_g\"><div id=\"google_ads_iframe_/21682272649/HelloSehatDesktop/HelloSehatDesktop_Mental/Stres_5__container__\" style=\"border: 0pt;\"></div></div></div></div></div></div><div class=\"sc-7cea6e75-3 sc-7cea6e75-5 sc-7cea6e75-6 opQHl fKJHnB WahgO body-content article-content-wrapper\" data-size=\"small\"><p><span>Istilah </span><i><span>work-life balance </span></i><span>secara harfiah dapat diartikan sebagai keseimbangan antara kehidupan dan pekerjaan.Lebih lengkapnya, </span><i><span>work-life balance</span></i><span> adalah keseimbangan antara waktu dan energi yang Anda habiskan untuk memenuhi kewajiban pekerjaan dan menjalani kehidupan pribadi.</span></p> <p><span>Konsep ini menekankan pentingnya membagi waktu dengan adil antara tuntutan pekerjaan dan aspek-aspek kehidupan lainnya, seperti keluarga dan kesehatan. Dengan menjaga keseimbangan ini, Anda bisa meningkatkan kualitas hidup, mengurangi stres, dan mencegah kelelahan akibat kerja alias </span>burnout<span>. Pada akhirnya, hidup dan kerja yang seimbang akan menciptakan lingkungan kerja yang sehat dan produktif. Hal ini memungkinkan Anda untuk mencapai kesuksesan di dalam kerja tanpa mengorbankan kebahagiaan dalam menjalani kehidupan.</span></p><p><span><b><br></b></span></p><p><b><span style=\"font-size: 36px; font-family: \" comic=\"\" sans=\"\" ms\";\"=\"\">﻿</span><span><span style=\"font-size: 36px; font-family: \" comic=\"\" sans=\"\" ms\";\"=\"\" ms\";=\"\" font-size:=\"\" 24px;\"=\"\">Tanda-tanda hidup dan kerja tidak seimbang</span><br></span></b><span>Menyeimbangkan antara hak dan kewajiban di dalam dan luar kantor memang sulit. Ada masanya orang merasa “gila kerja” yang berdampak pada kehidupannya sehari-hari.Supaya tidak kebablasan, inilah tanda-tanda </span><i><span>work-life balance </span></i><span>Anda sudah tidak seimbang.<br></span></p><ol><li><span></span><span style=\"font-size: 18px;\"><b>Lupa menjaga diri</b><br></span><span>Orang-orang yang lebih mementingkan pekerjaan biasanya cenderung cuek atau masa bodoh dengan kondisi tubuhnya sendiri. Mereka cenderung menjalani pola hidup tidak sehat, seperti sering bergadang, jarang berolahraga, atau lebih sering mengonsumsi </span><i><span>junk food </span></i><span>karena dianggap lebih praktis. </span><span>Jika hal-hal tersebut sudah terjadi, itu tandanya ada yang tidak beres dengan pola hidup Anda. Kesibukan pekerjaan membuat Anda hanya memikirkan</span><i><span> deadline</span></i><span> dan target tanpa ingat bahwa kesejahteraan diri Anda sendiri juga patut diperhatikan.</span></li><li><span></span><span style=\"font-size: 18px;\"><b>Cepat stres, mudah marah, dan gelisah</b><br></span><span>Saat hidup dan kerja sudah tidak lagi seimbang, bukan hanya kesehatan fisik yang tergerogoti, tetapi juga </span>kesehatan mental<span> Anda.Mengurus pekerjaan tanpa kenal waktu dapat membuat Anda berisiko mengalami </span><span>stres</span><span> berkepanjangan. Akibatnya, Anda akan lebih mudah mengalami marah, gelisah, dan panik yang merupakan gejala depresi. Lagi-lagi, hal ini muncul ketika otak Anda hanya memikirkan soal pekerjaan. Sebuah studi dalam</span> <a data-event-label=\"https://www.mdpi.com/1660-4601/16/24/4980\" data-event-action=\"International Journal of Environmental\" data-event-category=\"Internal Link Click on Article\" rel=\"nofollow noopener\" target=\"_blank\" href=\"https://www.mdpi.com/1660-4601/16/24/4980\"><i><span>International Journal of Environmental</span></i></a><a data-event-label=\"https://www.mdpi.com/1660-4601/16/24/4980\" data-event-action=\"International Journal of Environmental\" data-event-category=\"Internal Link Click on Article\" rel=\"nofollow noopener\" target=\"_blank\" href=\"https://www.mdpi.com/1660-4601/16/24/4980\"><i><span>Research and Public Health</span></i><span> (2019)</span></a><span> menemukan bekerja lebih dari 60 jam per minggu meningkatkan risiko depresi hingga 1,4 kali lipat.</span></li><li><span></span><span style=\"font-size: 18px;\"><b>Merasa tidak kompeten</b><br></span><span>Faktanya, makin lama waktu bekerja, makin besar pula kekhawatiran Anda terhadap pekerjaan.&nbsp; Pada akhirnya, </span><i><span>work-life balance </span></i><span>yang terganggu kerap kali membuat Anda merasa bahwa apa yang sudah dilakukan tidak pernah cukup. Anda selalu merasa kualitas kerja Anda menurun. Padahal, ini mungkin hanyalah kekhawatiran berlebih yang muncul karena Anda merupakan seorang </span>workaholic<span>.</span></li><li><span></span><span style=\"font-size: 18px;\"><b>Sering merasa kesepian<br></b></span><span>Saat hidup dan kerja mulai tidak seimbang, Anda akan mulai merasa kesepian. Ini karena Anda kehilangan banyak sekali waktu dengan keluarga dan orang-orang yang dicintai. </span><span>Meskipun sempat datang ke acara keluarga atau berkumpul dengan teman, Anda sudah kehabisan energi untuk berinteraksi. Akibatnya, Anda hanya diam dan mendengarkan tanpa banyak bicara. </span><span>Hal ini membuat Anda lama-kelamaan merasa tersisih dan </span>kesepian<span>. Bahkan, hubungan Anda dengan orang-orang terdekat pun bisa mulai merenggang.</span></li><li><span></span><span style=\"font-size: 18px;\"><b>Tidak ada batasan jelas antara urusan pekerjaan dan rumah<br></b></span><span>Salah satu tanda yang mudah terlihat ketika urusan hidup dan kerja tidak seimbang yaitu Anda membawa pekerjaan ke rumah.&nbsp; Maksudnya, Anda masih menerima panggilan dan membuka</span><i><span> e-mail</span></i><span> terkait pekerjaan di rumah. </span><span>Anda merasa harus siap siaga sepanjang waktu. Akibatnya, Anda justru tidak dapat menikmati waktu istirahat sebagaimana mestinya.</span></li></ol></div><div class=\"sc-7cea6e75-3 sc-7cea6e75-5 sc-7cea6e75-6 opQHl fKJHnB WahgO body-content article-content-wrapper\" data-size=\"small\"><div class=\"sc-7cea6e75-3 sc-7cea6e75-5 sc-7cea6e75-6 opQHl fKJHnB WahgO body-content article-content-wrapper\" data-size=\"small\"><h2 id=\"solusi-menjaga-keseimbangan-kehidupan-dan-pekerjaan\" data-title=\"Solusi\"><span style=\"font-family: \" comic=\"\" sans=\"\" ms\";=\"\" font-weight:=\"\" normal;\"=\"\">Solusi menjaga keseimbangan kehidupan dan pekerjaan</span></h2><p><span>Apabila Anda mengalami tanda-tanda di atas, sudah saatnya Anda melakukan tips-tips di bawah ini untuk memperbaikinya dan mencapai </span><i><span>work-life balance</span></i><span>.</span><b><span style=\"font-size: 18px;\"><br></span></b></p><ol><li><b><span style=\"font-size: 18px;\">Buat manajemen waktu<br></span></b><span>Dari 24 jam yang Anda miliki dalam sehari, cobalah mengatur waktu</span><span> tersebut sesuai dengan daftar kewajiban yang perlu Anda lakukan. Pastikan Anda membagi porsinya secara adil. Buatlah perencanaan setiap harinya dan jangan lupa untuk mencatatnya pada kalendar harian. Tujuannya agar Anda tahu kapan harus bekerja dan kapan perlu makan, tidur, serta bersosialisasi. Jika tidak terencana, waktu Anda akan mudah diambil oleh pekerjaan.</span></li><li><span></span><span style=\"font-size: 18px;\"><b>Belajar untuk mengatakan tidak<br></b></span><span>Tidak jarang, seseorang bekerja berlebihan karena tidak enak menolak permintaan atasan untuk mengerjakan pekerjaan lain di luar tugasnya.&nbsp; Jika Anda ingin punya hidup dan kerja yang lebih seimbang, belajarlah untuk mengatakan tidak. Jangan selalu mengiyakan kewajiban lain yang dirasa akan mengacaukan waktu di luar kantor. Tidak ada salahnya mengatakan tidak karena bagaimanapun, Anda berhak menikmati waktu luang.</span></li><li><span></span><b>Jangan membawa pekerjaan ke rumah<br></b><span>Sebaiknya jangan membawa pekerjaan ke rumah. Tidak perlu mengecek </span><i><span>e-mail </span></i><span>atau menerima telepon mengenai pekerjaan saat Anda berada di rumah.&nbsp; Gunakanlah waktu di rumah untuk beristirahat atau mengerjakan hal lain yang tidak berhubungan dengan pekerjaan. Itu sebabnya, Anda perlu menyelesaikan semua pekerjaan di kantor.Atur waktu kerja Anda di kantor supaya tidak terbuang sia-sia. Agar lebih efisien, coba matikan ponsel untuk meminimalkan gangguan akibat terlalu sering mengeceknya. Namun, bila memang ada pekerjaan yang harus dilanjutkan di rumah, curilah waktu istirahat sesekali. Akan tetapi, jangan </span>bekerja terlalu berlebihan<span> hingga Anda tidak mampu membatasinya.</span></li></ol><div class=\"sc-7cea6e75-3 sc-7cea6e75-5 sc-7cea6e75-6 opQHl fKJHnB WahgO body-content article-content-wrapper\" data-size=\"small\"><p><span style=\"font-size: 18px;\"><b>Kesimpulan<br></b></span><span><em>-Work-life balance</em> adalah keseimbangan antara waktu dan energi yang dihabiskan untuk melakukan pekerjaan dan menjalani kehidupan pribadi.<br></span><span>-Sejumlah tanda hidup dan kerja tidak seimbang yakni lupa menjaga diri, kerap merasa kesepian, menganggap diri tidak kompeten, serta lebih cepat stres dan mudah marah.<br></span><span>-Supaya pekerjaan Anda tidak berdampak negatif pada kesehatan, cobalah untuk melakukan manajemen waktu yang baik, berani berkata tidak, dan hindari membawa pekerjaan ke rumah.</span></p><div class=\"unique-content\"><div class=\"insert-content-container content-key-takeaways\"><div class=\"content\"> </div></div></div></div><p></p><p></p><p></p></div><p></p> </div></div>', '2024-06-05 05:14:48');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `tgl_isi` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id`, `nama`, `foto`, `isi`, `tgl_isi`) VALUES
(3, '9 Faktor yang Meningkatkan Resiko Penularan Pneumonia', 'informasi_1716348759_Screenshot 2024-05-22 103004.png', '<div class=\"sc-7cea6e75-3 sc-7cea6e75-5 sc-7cea6e75-6 opQHl fKJHnB WahgO body-content article-content-wrapper\" data-size=\"small\"><p>Pneumonia adalah penyakit peradangan paru-paru yang bisa disebabkan oleh bakteri, virus, maupun jamur. Penyakit ini bisa menyerang siapa pun, tetapi ada beberapa faktor yang bisa meningkatkan risiko Anda untuk terkena pneumonia. Faktor-faktor inilah yang sering kali justru terlupakan dan membuat seseorang terlambat menyadari keberadaan pneumonia. Supaya Anda bisa lebih waspada, kenali berbagai faktor risiko berikut!</p><p><span style=\"font-size: 18px; font-weight: normal;\"><b>Apa saja faktor</b> <b>risiko pneumonia?</b></span></p><p>Virus, jamur, dan bakteri penyebab <a href=\"https://hellosehat.com/pernapasan/pneumonia/pengertian-pneumonia/\" data-event-label=\"https://hellosehat.com/pernapasan/pneumonia/pengertian-pneumonia/\" data-event-action=\"pneumonia\" data-event-category=\"Internal Link Click on Article\">pneumonia </a>dapat\r\n dengan mudah ditemukan di udara. Jika jumlahnya masih dalam batas \r\nwajar, sistem kekebalan tubuh mampu mengatasinya. Namun, jika jumlah \r\nvirus sudah terlalu banyak, sistem kekebalan tubuh akan kewalahan \r\nsehingga terjadilah infeksi pada paru-paru Anda. Nah, berikut adalah \r\nbeberapa faktor yang membuat Anda lebih mudah terkena atau tertular \r\npneumonia.</p></div><div class=\"sc-7cea6e75-3 sc-7cea6e75-5 sc-7cea6e75-6 opQHl fKJHnB WahgO body-content article-content-wrapper\" data-size=\"small\"><div class=\"percentages-5-of-article\"></div></div><div><div class=\"article-mobile-ad ad-afterimage mantine-1avyp1d\"><div class=\"sc-9b0c3e79-1 kUgqki article-mobile-ad ad-afterimage\" style=\"line-height: 0; margin: 0px auto;\" data-no-wrapper=\"true\" data-header-bottom=\"false\"><div style=\"position: relative; width: fit-content; height: fit-content; overflow: hidden; max-width: 100%; display: flex; align-items: center; justify-content: center;\"><div id=\"div-gpt-ad-afterimage-422368\" style=\"\" data-google-query-id=\"CM3Kq5uboIYDFdfNPAIdtqYNYQ\"><div id=\"google_ads_iframe_/21682272649/HelloSehatDesktop/HelloSehatDesktop_Pernapasan/Pneumonia_5__container__\" style=\"border: 0pt;\"></div></div></div></div></div></div><br><h3><span style=\"font-weight: normal; font-size: 18px;\"><b>1. Bekerja di lingkungan yang rawan</b> <b>penularan</b></span></h3><p>Tahukah Anda bahwa pekerjaan bisa menjadi salah satu faktor yang meningkatkan risiko pneumonia?</p> <p>Penyakit yang bisa menyebabkan paru-paru terisi cairan ini lebih berisiko menyebar jika Anda bekerja di tempat dengan polusi udara atau asap beracun. Selain itu, seseorang yang bekerja di pusat pengolahan ayam, toko hewan peliharaan, atau klinik hewan juga memiliki risiko serupa. Ini bisa terjadi karena beberapa kuman <a href=\"https://hellosehat.com/pernapasan/pneumonia/penyebab-pneumonia/\" data-event-label=\"https://hellosehat.com/pernapasan/pneumonia/penyebab-pneumonia/\" data-event-action=\"penyebab pneumonia\" data-event-category=\"Internal Link Click on Article\">penyebab pneumonia</a> dapat menginfeksi burung dan hewan lainnya, kemudian menular ke Anda melalui udara.</p><h3><span style=\"font-size: 18px; font-weight: normal;\"><b>2. Berasal dari kelompok usia tertentu</b></span></h3>  <p>Laman <a data-event-label=\"https://www.nhlbi.nih.gov/health/pneumonia\" data-event-action=\"National Heart, Lung, and Blood Institute\" data-event-category=\"Internal Link Click on Article\" rel=\"nofollow noopener\" target=\"_blank\" href=\"https://www.nhlbi.nih.gov/health/pneumonia\">National Heart, Lung, and Blood Institute</a>&nbsp;menyebutkan bahwa bayi, anak-anak di bawah dua tahun, dan lansia di atas 65 tahun berisiko lebih tinggi terkena pneumonia. Anak-anak dinilai lebih berisiko karena kekebalan tubuhnya yang belum sempurna. Sementara itu, lansia dinilai lebih berisiko karena kekebalan tubuhnya yang sudah menurun. Selain itu, anak-anak dan orang tua yang belum mendapatkan <a href=\"https://hellosehat.com/pernapasan/pneumonia/vaksin-pneumonia/\" data-event-label=\"https://hellosehat.com/pernapasan/pneumonia/vaksin-pneumonia/\" data-event-action=\"vaksin untuk mencegah pneumonia\" data-event-category=\"Internal Link Click on Article\">vaksin untuk mencegah pneumonia</a> juga akan mengalami peningkatan risiko.</p><p></p><p></p><h3></h3><h3><span style=\"font-size: 18px; font-weight: normal;\"><b>3.Memiliki sistem kekebalan tubuh yang</b> <b>lemah</b></span></h3>  <p>Beberapa kondisi berikut dapat membuat sistem kekebalan tubuh melemah sehingga risiko terkena penyakit menular, termasuk pneumonia, turut meningkat.</p> <ul><li aria-level=\"1\">Hamil.</li><li aria-level=\"1\"><a href=\"https://hellosehat.com/seks/hivaids/penyakit-hiv-aids/\" data-event-label=\"https://hellosehat.com/seks/hivaids/penyakit-hiv-aids/\" data-event-action=\"HIV/AIDS\" data-event-category=\"Internal Link Click on Article\">HIV/AIDS</a> atau masalah kesehatan lain yang menyerang sistem imun.</li><li aria-level=\"1\">Transplantasi organ atau sumsum tulang.</li><li aria-level=\"1\">Kemoterapi.</li><li aria-level=\"1\">Penggunaan obat steroid dalam jangka panjang.</li></ul><div class=\"sc-7cea6e75-3 sc-7cea6e75-5 sc-7cea6e75-6 opQHl fKJHnB WahgO body-content article-content-wrapper\" data-size=\"small\"><div class=\"percentages-50-of-article\"></div></div><div class=\"sc-7cea6e75-3 sc-7cea6e75-5 sc-7cea6e75-6 opQHl fKJHnB WahgO body-content article-content-wrapper\" data-size=\"small\"><h3><span style=\"font-weight: normal; font-size: 18px;\"><b>4. Memiliki kebiasaan</b> <b>merokok</b></span></h3>  <p>Tembakau dalam rokok dapat merusak kemampuan paru-paru dalam melawan infeksi. Oleh karena itu, perokok merupakan salah satu kelompok yang berisiko tinggi mengidap pneumonia. Penelitian yang dipublikasikan dalam jurnal <a data-event-label=\"https://journals.plos.org/plosone/article?id=10.1371/journal.pone.0220204\" data-event-action=\"Plos One\" data-event-category=\"Internal Link Click on Article\" rel=\"nofollow noopener\" target=\"_blank\" href=\"https://journals.plos.org/plosone/article?id=10.1371/journal.pone.0220204\"><em>Plos One</em></a> (2019) menemukan bahwa paparan asap tembakau sangat terkait dengan perkembangan <em>community-acquired pneumonia</em> (CAP) atau pneumonia yang didapat dari komunitas. Pneumonia bahkan tidak hanya mengintai perokok aktif. Perokok pasif, terutama yang berusia di atas 65 tahun, juga berisiko lebih tinggi terkena penyakit paru ini.</p></div><h3></h3><p></p>', '2024-05-22 03:45:58');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `tanggal` datetime NOT NULL,
  `id_topik` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `komentar`, `tanggal`, `id_topik`, `id_user`) VALUES
(1, 'Assalamualaikum wr.wb dok saya mau nanya saya sakit perut sudah 4 hari terasa sakit melilit dan ketika di tepuk2 perut saya kembung juga dokter. kira-kira obat sakit perut melilit karena kembung apa dok?', '2024-05-29 04:43:17', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `logindokter`
--

CREATE TABLE `logindokter` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logindokter`
--

INSERT INTO `logindokter` (`id`, `email`, `password`) VALUES
(1, 'dokterjohnny@gmail.com', 'johnny keren');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `jeniskelamin` set('pria','wanita') NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `email`, `age`, `jeniskelamin`, `password`) VALUES
(1, 'rafli@gmail.com', 'Rafli Fachrin Kardiansyah', 0, 'pria', ''),
(2, 'raka@gmail.com', 'Mahardika Naufal Nugroho ', 0, 'pria', ''),
(3, 'bila@gmail.com', 'Nabila Annisa Ryanthika ', 0, 'pria', ''),
(4, 'Nabila Annisa', '', 19, '', 'bila'),
(5, 'bil', 'bil@gmail.com', 19, '', 'hh'),
(9, 'bbb', 'bbb@gmail.com', 18, '', 'hhh'),
(10, 'hhh', 'hhh', 14, '', 'hhh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `halaman`
--
ALTER TABLE `halaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logindokter`
--
ALTER TABLE `logindokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `halaman`
--
ALTER TABLE `halaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logindokter`
--
ALTER TABLE `logindokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
