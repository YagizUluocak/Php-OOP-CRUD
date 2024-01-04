-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 04 Oca 2024, 19:57:11
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `veritabani`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_baslik` varchar(100) NOT NULL,
  `blog_icerik` text NOT NULL,
  `blog_durum` tinyint(1) NOT NULL,
  `blog_keywords` varchar(255) NOT NULL,
  `blog_description` varchar(300) NOT NULL,
  `blog_resim` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_baslik`, `blog_icerik`, `blog_durum`, `blog_keywords`, `blog_description`, `blog_resim`) VALUES
(1, 'Lorem Ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, 'blog,keywords', 'Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'istockphoto-1042404662-170667a.jpg'),
(2, 'Where does it come from?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 1, 'keywords,blog,blog2,lorem,ipsum', 'Contrary to popular belief, Lorem Ipsum is not simply random text.', 'manzara_05_tam35-blogspot-com.jpg'),
(3, 'Where can I get some?', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 1, 'blog3,keywords,lorem,ipsum', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', 'manzara-doga-fotografciligi.jpg'),
(12, 'TEST', 'TEST', 1, 'TEST', 'TEST', 'wallpapersden.com_small-memory_3840x2160.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hizmetler`
--

CREATE TABLE `hizmetler` (
  `hizmet_id` int(11) NOT NULL,
  `hizmet_baslik` varchar(100) NOT NULL,
  `hizmet_icerik` text NOT NULL,
  `hizmet_durum` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `hizmetler`
--

INSERT INTO `hizmetler` (`hizmet_id`, `hizmet_baslik`, `hizmet_icerik`, `hizmet_durum`) VALUES
(0, 'Hizmet 1', 'Hizmet 1\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vulputate eu scelerisque felis imperdiet proin fermentum leo vel orci. Morbi non arcu risus quis varius. Ut consequat semper viverra nam libero justo. Nec ullamcorper sit amet risus. Cursus eget nunc scelerisque viverra mauris in aliquam. Sodales ut eu sem integer vitae justo eget magna fermentum. Volutpat est velit egestas dui. Vitae et leo duis ut diam quam nulla porttitor. Quisque egestas diam in arcu cursus. Cursus euismod quis viverra nibh cras pulvinar mattis. Nibh mauris cursus mattis molestie a iaculis at erat. Vel eros donec ac odio tempor orci dapibus ultrices. Id velit ut tortor pretium viverra suspendisse. Quisque non tellus orci ac auctor. Morbi enim nunc faucibus a. Tristique et egestas quis ipsum suspendisse ultrices. Viverra aliquet eget sit amet tellus cras adipiscing.', 0),
(2, 'Hizmet 2', 'Hizmet 2\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Diam phasellus vestibulum lorem sed risus ultricies. Consectetur lorem donec massa sapien faucibus et molestie ac feugiat. Etiam sit amet nisl purus. Eget egestas purus viverra accumsan in nisl nisi scelerisque eu. Quisque id diam vel quam elementum. Phasellus egestas tellus rutrum tellus pellentesque eu tincidunt tortor aliquam. Sem et tortor consequat id porta. Tortor aliquam nulla facilisi cras fermentum odio. Nunc eget lorem dolor sed viverra.', 1),
(3, 'Hizmet 3', 'Hizmet 3\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elit ut aliquam purus sit. At consectetur lorem donec massa. Donec ultrices tincidunt arcu non. Eleifend mi in nulla posuere sollicitudin aliquam ultrices. Tortor dignissim convallis aenean et tortor at. Urna neque viverra justo nec ultrices dui sapien eget mi. Elit sed vulputate mi sit amet mauris commodo. Nisl nisi scelerisque eu ultrices vitae auctor. Risus pretium quam vulputate dignissim suspendisse in. Sed odio morbi quis commodo odio aenean sed. Pellentesque habitant morbi tristique senectus. Amet consectetur adipiscing elit ut aliquam purus sit.', 0),
(4, 'Hizmet 4', 'Hizmet 4\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pellentesque eu tincidunt tortor aliquam nulla facilisi. Eleifend mi in nulla posuere sollicitudin. Posuere sollicitudin aliquam ultrices sagittis. Blandit massa enim nec dui nunc mattis enim. Ipsum nunc aliquet bibendum enim facilisis. Sem nulla pharetra diam sit amet nisl suscipit. Odio facilisis mauris sit amet. Consequat nisl vel pretium lectus quam id leo in vitae. Elit sed vulputate mi sit amet mauris commodo. Egestas dui id ornare arcu odio. Nulla facilisi cras fermentum odio.', 1),
(5, 'Hizmet 5', 'Hizmet 5\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pellentesque eu tincidunt tortor aliquam nulla facilisi. Eleifend mi in nulla posuere sollicitudin. Posuere sollicitudin aliquam ultrices sagittis. Blandit massa enim nec dui nunc mattis enim. Ipsum nunc aliquet bibendum enim facilisis. Sem nulla pharetra diam sit amet nisl suscipit. Odio facilisis mauris sit amet. Consequat nisl vel pretium lectus quam id leo in vitae. Elit sed vulputate mi sit amet mauris commodo. Egestas dui id ornare arcu odio. Nulla facilisi cras fermentum odio.', 0),
(6, 'Hizmet 6', 'Hizmet 6\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pellentesque eu tincidunt tortor aliquam nulla facilisi. Eleifend mi in nulla posuere sollicitudin. Posuere sollicitudin aliquam ultrices sagittis. Blandit massa enim nec dui nunc mattis enim. Ipsum nunc aliquet bibendum enim facilisis. Sem nulla pharetra diam sit amet nisl suscipit. Odio facilisis mauris sit amet. Consequat nisl vel pretium lectus quam id leo in vitae. Elit sed vulputate mi sit amet mauris commodo. Egestas dui id ornare arcu odio. Nulla facilisi cras fermentum odio.', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_adi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_adi`) VALUES
(1, 'Mont'),
(2, 'Ayakkabı'),
(3, 'Bere'),
(4, 'Kazak'),
(5, 'Gömlek'),
(6, 'Hoodie'),
(7, 'Pantolon'),
(8, 'Etek'),
(9, 'Ceket'),
(10, 'T-Shirt'),
(11, 'Pijama');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `urun_id` int(11) NOT NULL,
  `urun_adi` varchar(100) NOT NULL,
  `urun_aciklama` text NOT NULL,
  `urun_fiyat` int(11) NOT NULL,
  `urun_durum` tinyint(1) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `urun_resim` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`urun_id`, `urun_adi`, `urun_aciklama`, `urun_fiyat`, `urun_durum`, `kategori_id`, `urun_resim`) VALUES
(1, 'Air Jordan', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pellentesque eu tincidunt tortor aliquam nulla facilisi. Eleifend mi in nulla posuere sollicitudin.', 3200, 1, 2, 'ayakkabı.jpg'),
(2, 'Air Jordan-2', 'Posuere sollicitudin aliquam ultrices sagittis. Blandit massa enim nec dui nunc mattis enim. Ipsum nunc aliquet bibendum enim facilisis. Sem nulla pharetra diam sit amet nisl suscipit. Odio facilisis mauris sit amet.', 2800, 0, 1, 'ayakkabı-2.jpg'),
(3, 'Kaft Bere', 'Consequat nisl vel pretium lectus quam id leo in vitae. Elit sed vulputate mi sit amet mauris commodo. Egestas dui id ornare arcu odio. Nulla facilisi cras fermentum odio.', 320, 1, 3, 'bere.jpg'),
(4, 'Bomber Ceket', 'Faucibus pulvinar elementum integer enim neque. Sagittis id consectetur purus ut faucibus pulvinar elementum integer enim. At tellus at urna condimentum mattis pellentesque id nibh tortor. Lectus mauris ultrices eros in cursus turpis.', 500, 1, 9, 'bomber-ceket.jpg'),
(5, 'Suni Deri Ceket', 'Tellus at urna condimentum mattis. Nunc mi ipsum faucibus vitae aliquet. Bibendum est ultricies integer quis auctor elit sed vulputate. Nam libero justo laoreet sit. Sed adipiscing diam donec adipiscing tristique risus nec feugiat.', 4500, 1, 9, 'ceket-2.jpg'),
(6, 'Siyah Etek', 'Sed adipiscing diam donec adipiscing tristique risus nec feugiat. Velit scelerisque in dictum non consectetur a erat nam at. Augue neque gravida in fermentum et.', 320, 1, 8, 'etek.jpeg'),
(7, 'Vakko Gömlek', 'Ac tortor vitae purus faucibus ornare suspendisse sed. Et malesuada fames ac turpis egestas integer. Iaculis urna id volutpat lacus laoreet. Mattis rhoncus urna neque viverra justo nec ultrices dui. Tincidunt praesent semper feugiat nibh.', 450, 1, 5, 'gomlek.jpg'),
(8, 'Burberry Hoodie', 'Enim diam vulputate ut pharetra sit amet. Tincidunt ornare massa eget egestas. Mattis vulputate enim nulla aliquet. Ultricies mi eget mauris pharetra et ultrices neque ornare aenean. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.', 550, 1, 6, 'hoodie.jpg'),
(9, 'Basic Kazak', 'Elementum tempus egestas sed sed risus pretium quam. Accumsan tortor posuere ac ut consequat semper viverra. Tincidunt nunc pulvinar sapien et ligula ullamcorper malesuada. Aliquam id diam maecenas ultricies.', 220, 1, 4, 'kazak.jpg'),
(10, 'Kot Pantolon', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 250, 1, 7, 'pantolon.jpg'),
(11, 'Şişme Erkek Mont', 'Eleifend quam adipiscing vitae proin sagittis nisl rhoncus mattis rhoncus. Nec feugiat nisl pretium fusce. Facilisis magna etiam tempor orci eu lobortis elementum.', 780, 1, 1, 'sisme-mont.jpg'),
(12, 'Şişme Kadın Mont', 'Pellentesque habitant morbi tristique senectus et. Placerat duis ultricies lacus sed turpis. Imperdiet dui accumsan sit amet. Tellus orci ac auctor augue mauris augue neque gravida. Dis parturient montes nascetur ridiculus mus mauris.', 750, 1, 1, 'sisme-mont-2.jpg'),
(13, 'Basic T-shirt', 'Amet massa vitae tortor condimentum. Egestas congue quisque egestas diam in. In massa tempor nec feugiat nisl pretium fusce.', 150, 1, 10, 't-shirt.jpg'),
(14, 'Erkek Pijama', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 120, 1, 11, 'gecelik.jpg');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Tablo için indeksler `hizmetler`
--
ALTER TABLE `hizmetler`
  ADD PRIMARY KEY (`hizmet_id`);

--
-- Tablo için indeksler `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`urun_id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `hizmetler`
--
ALTER TABLE `hizmetler`
  MODIFY `hizmet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `urun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `urunler`
--
ALTER TABLE `urunler`
  ADD CONSTRAINT `urunler_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`kategori_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
