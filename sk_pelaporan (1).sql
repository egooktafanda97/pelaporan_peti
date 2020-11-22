-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Agu 2020 pada 13.46
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sk_pelaporan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `id_hail` int(11) NOT NULL,
  `id_pelapor` int(11) NOT NULL,
  `id_laporan` int(11) NOT NULL,
  `hasil_laporan` text NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `imgs`
--

CREATE TABLE `imgs` (
  `id` int(11) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lapor`
--

CREATE TABLE `lapor` (
  `kode` varchar(15) NOT NULL,
  `kode_user` varchar(15) NOT NULL,
  `masalah` varchar(100) NOT NULL,
  `terduga` varchar(100) DEFAULT NULL,
  `bukti` varchar(200) DEFAULT NULL,
  `lokasi` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `pesan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lapor`
--

INSERT INTO `lapor` (`kode`, `kode_user`, `masalah`, `terduga`, `bukti`, `lokasi`, `deskripsi`, `status`, `pesan`, `created_at`, `updated_at`) VALUES
('C7O4K1GM0N', 'PQOQH5ACMO', 'peti di marsawah', '-', '1596621631_71e4cc3717801671def7.png', '0.5308416,101.4464512', '-', 'Penyelidikan', 'Lpoaran Di Selidiki', '2020-08-11 11:43:55', '2020-08-10 23:43:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `thumbnail` varchar(200) NOT NULL,
  `text` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id`, `title`, `thumbnail`, `text`, `created_at`, `updated_at`) VALUES
(3, 'pembakarab peti di marsawah', '1596541079_109b6245851cf6e1760b.jpeg', '<p>xcbjjc</p>\n\n<p>zdbckjdsc</p>\n\n<p>sdckjsd c</p>\n\n<p>ds</p>\n\n<p><img alt=\"\" src=\"http://localhost:8080/public/imgs/1596540991_7674e87169d5a6d75c04.jpeg\" style=\"height:379px; width:675px\" /></p>\n\n<p>,m nmkb</p>\n\n<p>&nbsp;</p>\n\n<p>asjdkjnka</p>\n', '2020-08-03 23:38:01', '2020-08-03 23:38:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `sejarah` text NOT NULL,
  `struktur_organisasi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`visi`, `misi`, `sejarah`, `struktur_organisasi`) VALUES
('<p>Terwujudnya postur Polres Bojonegoro yang Profesional, Modern dan Terpercaya sebagai pelindung, pengayom serta pelayan masyarakat yang terpercaya dalam memelihara Kamtibmas dan menegakkan hukum</p>\r\n', '<ol>\r\n	<li>Memberikan perlindungan, pengayoman dan pelayanan kepada masyarakat sehingga masyarakat merasa aman, tentram dalam kehidupan sehari-hari;</li>\r\n	<li>Memberikan bimbingan kepada masyarakat melalui upaya preemtif dan preventif yang dapat meningkatkan kesadaran dan kekuatan serta kepatuhan hukum masyarakat;</li>\r\n	<li>Menegakkan hukum secara profesional dan proporsional dengan menjunjung tinggi supremasi hukum dan hak asasi manusia menuju kepada adanya kepastian hukum dan rasa keadilan;</li>\r\n	<li>Memelihara keamanan dan ketertiban masyarakat dengan tetap memperhatikan norma-norma dan nilai-nilai yang berlaku dalam bingkai integritas wilayah hukum Polres Bojonegoro;</li>\r\n	<li>Mengelola profesionalisme sumberdaya manusia dengan dukungan sarana prasarana serta meningkatkan upaya konsolidasi dan soliditas Polres Bojonegoro untuk mewujudkan keamanan di wilayah Bojonegoro sehingga dapat mendorong meningkatnya gairah kerja guna mencapai kesejahteraan masyarakat; dan</li>\r\n	<li>Polres Bojonegoro berkomitmen melayani dengan hati, tulus, ikhlas&nbsp; dan simpatik.</li>\r\n</ol>\r\n', '<p><strong>Jaman Kerajaan</strong><br />\r\nPada zaman Kerajaan Majapahit patih Gajah Mada membentuk pasukan pengamanan yang disebut dengan Bhayangkara yang bertugas melindungi raja dan kerajaan.</p>\r\n\r\n<p><strong>Masa kolonial Belanda</strong><br />\r\nPada masa kolonial Belanda, pembentukan pasukan keamanan diawali oleh pembentukan pasukan-pasukan jaga yang diambil dari orang-orang pribumi untuk menjaga aset dan kekayaan orang-orang Eropa di Hindia Belanda pada waktu itu. Pada tahun 1867 sejumlah warga Eropa di Semarang, merekrut 78 orang pribumi untuk menjaga keamanan mereka.</p>\r\n\r\n<p>Wewenang operasional kepolisian ada pada residen yang dibantu asisten residen. Rechts politie dipertanggungjawabkan pada procureur generaal (jaksa agung). Pada masa Hindia Belanda terdapat bermacam-macam bentuk kepolisian, seperti veld politie (polisi lapangan) , stands politie (polisi kota), cultur politie (polisi pertanian), bestuurs politie (polisi pamong praja), dan lain-lain.</p>\r\n\r\n<p>Sejalan dengan administrasi negara waktu itu, pada kepolisian juga diterapkan pembedaan jabatan bagi bangsa Belanda dan pribumi. Pada dasarnya pribumi tidak diperkenankan menjabat hood agent (bintara), inspekteur van politie, dan commisaris van politie. Untuk pribumi selama menjadi agen polisi diciptakan jabatan seperti mantri polisi, asisten wedana, dan wedana polisi.</p>\r\n\r\n<p>Kepolisian modern Hindia Belanda yang dibentuk antara tahun 1897-1920 adalah merupakan cikal bakal dari terbentuknya Kepolisian Negara Republik Indonesia saat ini.</p>\r\n\r\n<p><strong>Masa pendudukan Jepang</strong><br />\r\nPada masa ini Jepang membagi wiliyah kepolisian Indonesia menjadi Kepolisian Jawa dan Madura yang berpusat di Jakarta, Kepolisian Sumatera yang berpusat di Bukittinggi, Kepolisian wilayah Indonesia Timur berpusat di Makassar dan Kepolisian Kalimantan yang berpusat di Banjarmasin.</p>\r\n\r\n<p>Tiap-tiap kantor polisi di daerah meskipun dikepalai oleh seorang pejabat kepolisian bangsa Indonesia, tapi selalu didampingi oleh pejabat Jepang yang disebut sidookaan yang dalam praktik lebih berkuasa dari kepala polisi.</p>\r\n\r\n<p><strong>Awal Kemerdekaan Indonesia</strong></p>\r\n\r\n<hr />\r\n<p><strong>Periode 1945-1950</strong><br />\r\nTidak lama setelah Jepang menyerah tanpa syarat kepada Sekutu, pemerintah militer Jepang membubarkan Peta dan Gyu-Gun, sedangkan polisi tetap bertugas, termasuk waktu Soekarno-Hatta memproklamasikan kemerdekaan Indonesia pada tanggal 17 Agustus 1945. Secara resmi kepolisian menjadi kepolisian Indonesia yang merdeka.</p>\r\n\r\n<p>Inspektur Kelas I (Letnan Satu) Polisi Mochammad Jassin, Komandan Polisi di Surabaya, pada tanggal 21 Agustus 1945 memproklamasikan Pasukan Polisi Republik Indonesia sebagai langkah awal yang dilakukan selain mengadakan pembersihan dan pelucutan senjata terhadap tentara Jepang yang kalah perang, juga membangkitkan semangat moral dan patriotik seluruh rakyat maupun satuan-satuan bersenjata yang sedang dilanda depresi dan kekalahan perang yang panjang. Sebelumnya pada tanggal 19 Agustus 1945 dibentuk Badan Kepolisian Negara (BKN) oleh Panitia Persiapan Kemerdekaan Indonesia (PPKI). Pada tanggal 29 September 1945 Presiden Soekarno melantik R.S. Soekanto Tjokrodiatmodjo menjadi Kepala Kepolisian Negara (KKN).</p>\r\n\r\n<p>Pada awalnya kepolisian berada dalam lingkungan Kementerian Dalam Negeri dengan nama Djawatan Kepolisian Negara yang hanya bertanggung jawab masalah administrasi, sedangkan masalah operasional bertanggung jawab kepada Jaksa Agung.</p>\r\n\r\n<p>Kemudian mulai tanggal 1 Juli 1946 dengan Penetapan Pemerintah tahun 1946 No. 11/S.D. Djawatan Kepolisian Negara yang bertanggung jawab langsung kepada Perdana Menteri. Tanggal 1 Juli inilah yang setiap tahun diperingati sebagai Hari Bhayangkara hingga saat ini.</p>\r\n\r\n<p>Sebagai bangsa dan negara yang berjuang mempertahankan kemerdekaan maka Polri di samping bertugas sebagai penegak hukum juga ikut bertempur di seluruh wilayah RI. Polri menyatakan dirinya &ldquo;combatant&rdquo; yang tidak tunduk pada Konvensi Jenewa. Polisi Istimewa diganti menjadi Mobile Brigade, sebagai kesatuan khusus untuk perjuangan bersenjata, seperti dikenal dalam pertempuran 10 November di Surabaya, di front Sumatera Utara, Sumatera Barat, penumpasan pemberontakan PKI di Madiun, dan lain-lain.</p>\r\n\r\n<p>Pada masa kabinet presidential, pada tanggal 4 Februari 1948 dikeluarkan Tap Pemerintah No. 1/1948 yang menetapkan bahwa Polri dipimpin langsung oleh presiden/wakil presiden dalam kedudukan sebagai perdana menteri/wakil perdana menteri.</p>\r\n\r\n<p>Pada masa revolusi fisik, Kapolri Jenderal Polisi R.S. Soekanto telah mulai menata organisasi kepolisian di seluruh wilayah RI. Pada Pemerintahan Darurat RI (PDRI) yang diketuai Mr. Sjafrudin Prawiranegara berkedudukan di Sumatera Tengah, Jawatan Kepolisian dipimpin KBP Umar Said (tanggal 22 Desember 1948).</p>\r\n\r\n<p>Hasil Konferensi Meja Bundar antara Indonesia dan Belanda dibentuk Republik Indonesia Serikat (RIS), maka R.S. Sukanto diangkat sebagai Kepala Jawatan Kepolisian Negara RIS dan R. Sumanto diangkat sebagai Kepala Kepolisian Negara RI berkedudukan di Yogyakarta.</p>\r\n\r\n<p>Dengan Keppres RIS No. 22 tahun 1950 dinyatakan bahwa Jawatan Kepolisian RIS dalam kebijaksanaan politik polisional berada di bawah perdana menteri dengan perantaraan jaksa agung, sedangkan dalam hal administrasi pembinaan, dipertanggungjawabkan pada menteri dalam negeri.</p>\r\n\r\n<p>Umur RIS hanya beberapa bulan. Sebelum dibentuk Negara Kesatuan RI pada tanggal 17 Agustus 1950, pada tanggal 7 Juni 1950 dengan Tap Presiden RIS No. 150, organisasi-organisasi kepolisian negara-negara bagian disatukan dalam Jawatan Kepolisian Indonesia. Dalam peleburan tersebut disadari adanya kepolisian negara yang dipimpin secara sentral, baik di bidang kebijaksanaan siasat kepolisian maupun administratif, organisatoris.</p>\r\n\r\n<p><strong>Periode 1950-1959</strong><br />\r\nDengan dibentuknya negara kesatuan pada 17 Agustus 1950 dan diberlakukannya UUDS 1950 yang menganut sistem parlementer, Kepala Kepolisian Negara tetap dijabat R.S. Soekanto yang bertanggung jawab kepada perdana menteri/presiden.</p>\r\n\r\n<p>Waktu kedudukan Polri kembali ke Jakarta, karena belum ada kantor digunakan bekas kantor Hoofd van de Dienst der Algemene Politie di Gedung Departemen Dalam Negeri. Kemudian R.S. Soekanto merencanakan kantor sendiri di Jalan Trunojoyo 3, Kebayoran Baru, Jakarta Selatan, dengan sebutan Markas Besar Djawatan Kepolisian Negara RI (DKN) yang menjadi Markas Besar Kepolisian sampai sekarang. Ketika itu menjadi gedung perkantoran termegah setelah Istana Negara.</p>\r\n\r\n<p>Sampai periode ini kepolisian berstatus tersendiri antara sipil dan militer yang memiliki organisasi dan peraturan gaji tersendiri. Anggota Polri terorganisir dalam Persatuan Pegawai Polisi Republik Indonesia (P3RI) tidak ikut dalam Korpri, sedangkan bagi istri polisi semenjak zaman revolusi sudah membentuk organisasi yang sampai sekarang dikenal dengan nama Bhayangkari tidak ikut dalam Dharma Wanita ataupun Dharma Pertiwi. Organisasi P3RI dan Bhayangkari ini memiliki ketua dan pengurus secara demokratis dan pernah ikut Pemilu 1955 yang memenangkan kursi di Konstituante dan Parlemen. Waktu itu semua gaji pegawai negeri berada di bawah gaji angkatan perang, namun P3RI memperjuangkan perbaikan gaji dan berhasil melahirkan Peraturan Gaji Polisi (PGPOL) di mana gaji Polri relatif lebih baik dibanding dengan gaji pegawai negeri lainnya (mengacu standar PBB).</p>\r\n\r\n<p><strong>Masa Orde Lama</strong><br />\r\nDengan Dekrit Presiden 5 Juli 1959, setelah kegagalan Konstituante, Indonesia kembali ke UUD 1945, namun dalam pelaksanaannya kemudian banyak menyimpang dari UUD 1945. Jabatan Perdana Menteri (Alm. Ir. Juanda) diganti dengan sebutan Menteri Pertama, Polri masih tetap di bawah pada Menteri Pertama sampai keluarnya Keppres No. 153/1959, tertanggal 10 Juli di mana Kepala Kepolisian Negara diberi kedudukan Menteri Negara ex-officio.</p>\r\n\r\n<p>Pada tanggal 13 Juli 1959 dengan Keppres No. 154/1959 Kapolri juga menjabat sebagai Menteri Muda Kepolisian dan Menteri Muda Veteran. Pada tanggal 26 Agustus 1959 dengan Surat Edaran Menteri Pertama No. 1/MP/RI1959, ditetapkan sebutan Kepala Kepolisian Negara diubah menjadi Menteri Muda Kepolisian yang memimpin Departemen Kepolisian (sebagai ganti dari Djawatan Kepolisian Negara).</p>\r\n\r\n<p>Waktu Presiden Soekarno menyatakan akan membentuk ABRI yang terdiri dari Angkatan Perang dan Angkatan Kepolisian, R.S. Soekanto menyampaikan keberatannya dengan alasan untuk menjaga profesionalisme kepolisian. Pada tanggal 15 Desember 1959 R.S. Soekanto mengundurkan diri setelah menjabat Kapolri/Menteri Muda Kepolisian, sehingga berakhirlah karier Bapak Kepolisian RI tersebut sejak 29 September 1945 hingga 15 Desember 1959.</p>\r\n\r\n<p>Dengan Tap MPRS No. II dan III tahun 1960 dinyatakan bahwa ABRI terdiri atas Angkatan Perang dan Polisi Negara. Berdasarkan Keppres No. 21/1960 sebutan Menteri Muda Kepolisian ditiadakan dan selanjutnya disebut Menteri Kepolisian Negara bersama Angkatan Perang lainnya dan dimasukkan dalam bidang keamanan nasional.</p>\r\n\r\n<p>Tanggal 19 Juni 1961, DPR-GR mengesahkan UU Pokok kepolisian No. 13/1961. Dalam UU ini dinyatakan bahwa kedudukan Polri sebagai salah satu unsur ABRI yang sama sederajat dengan TNI AD, AL, dan AU.</p>\r\n\r\n<p>Dengan Keppres No. 94/1962, Menteri Kapolri, Menteri/KASAD, Menteri/KASAL, Menteri/KSAU, Menteri/Jaksa Agung, Menteri Urusan Veteran dikoordinasikan oleh Wakil Menteri Pertama bidang pertahanan keamanan. Dengan Keppres No. 134/1962 menteri diganti menjadi Menteri/Kepala Staf Angkatan Kepolisian (Menkasak).</p>\r\n\r\n<p>Kemudian Sebutan Menkasak diganti lagi menjadi Menteri/Panglima Angkatan Kepolisian (Menpangak) dan langsung bertanggung jawab kepada presiden sebagai kepala pemerintahan negara. Dengan Keppres No. 290/1964 kedudukan, tugas, dan tanggung jawab Polri ditentukan sebagai berikut :</p>\r\n\r\n<ul>\r\n	<li>Alat Negara Penegak Hukum.</li>\r\n	<li>Koordinator Polsus.</li>\r\n	<li>Ikut serta dalam pertahanan.</li>\r\n	<li>Pembinaan Kamtibmas.</li>\r\n	<li>Kerkaryaan</li>\r\n	<li>Sebagai alat revolusi.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Berdasarkan Keppres No. 155/1965 tanggal 6 Juli 1965, pendidikan AKABRI disamakan bagi Angkatan Perang dan Polri selama satu tahun di Magelang. Sementara pada tahun 1964 dan 1965, pengaruh PKI bertambah besar karena politik NASAKOM Presiden Soekarno, dan PKI mulai menyusupi memengaruhi sebagian anggota ABRI dari keempat angkatan.</p>\r\n\r\n<p><strong>Masa Orde Baru</strong><br />\r\nKarena pengalaman yang pahit dari peristiwa G30S/PKI yang mencerminkan tidak adanya integrasi antar unsur-unsur ABRI, maka untuk meningkatkan integrasi ABRI, tahun 1967 dengan SK Presiden No. 132/1967 tanggal 24 Agustus 1967 ditetapkan Pokok-Pokok Organisasi dan Prosedur Bidang Pertahanan dan Keamanan yang menyatakan ABRI merupakan bagian dari organisasi Departemen Hankam meliputi AD, AL, AU , dan AK yang masing-masing dipimpin oleh Panglima Angkatan dan bertanggung jawab atas pelaksanaan tugas dan kewajibannya kepada Menhankam/Pangab. Jenderal Soeharto sebagai Menhankam/Pangab yang pertama.</p>\r\n\r\n<p>Setelah Soeharto dipilih sebagai presiden pada tahun 1968, jabatan Menhankam/Pangab berpindah kepada Jenderal M. Panggabean. Kemudian ternyata betapa ketatnya integrasi ini yang dampaknya sangat menyulitkan perkembangan Polri yang secara universal memang bukan angkatan perang.</p>\r\n\r\n<p>Pada tahun 1969 dengan Keppres No. 52/1969 sebutan Panglima Angkatan Kepolisian diganti kembali sesuai UU No. 13/1961 menjadi Kepala Kepolisian Negara RI, namun singkatannya tidak lagi KKN tetapi Kapolri. Pergantian sebutan ini diresmikan pada tanggal 1 Juli 1969.</p>\r\n', '1596680481_d396099d530e8ad36c74.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `kode` varchar(15) NOT NULL,
  `nik` varchar(18) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `kebangsaan` varchar(15) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_hp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`kode`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `pekerjaan`, `kebangsaan`, `agama`, `alamat`, `email`, `no_hp`) VALUES
('410EMU2K0M', '657765', 'jhghj', 'jgjh', '2020-08-10', 'bc', 'WNI', 'Islam', 'hchg', 'ego97@gmail.com', '98700'),
('PQOQH5ACMO', '656758', 'priska anugrah', 'lubuk jambi', '2020-08-19', 'kpkpk', 'WNI', 'Islam', 'hgfh', 'priska@gmail.com', '9870');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_hail`);

--
-- Indeks untuk tabel `imgs`
--
ALTER TABLE `imgs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lapor`
--
ALTER TABLE `lapor`
  ADD PRIMARY KEY (`kode`);

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`kode`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id_hail` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `imgs`
--
ALTER TABLE `imgs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
