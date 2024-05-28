-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 28, 2024 at 12:21 PM
-- Server version: 10.6.16-MariaDB-0ubuntu0.22.04.1
-- PHP Version: 8.1.2-1ubuntu2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `********************`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `title`, `content`, `author`, `created_at`) VALUES
(1, 'Beşiktaş: Tarihin Işığında Kara Kartal', 'Türk futbolunun köklü kulüplerinden biri olan Beşiktaş, hem ulusal hem de uluslararası alanda önemli başarılara imza atmıştır. İstanbul\'un Avrupa yakasında yer alan bu kulüp, taraftarlarıyla olan benzersiz bağı ve tarihi başarılarıyla tanınır.\r\n\r\nBeşiktaş\'ın temelleri, 1903 yılında kurulan Osmanlı futbol takımıyla atıldı. Ancak resmi olarak Beşiktaş Jimnastik Kulübü adını alması 1911 yılına dayanır. Kulüp, ilk yıllarında özellikle futbol ve jimnastik alanında faaliyet gösterdi, ancak zamanla futbolun öne çıkan branşı haline geldi.\r\n\r\nKulübün sembolü \"Kara Kartal\" olarak bilinir ve bu sembol, gücü, cesareti ve kararlılığı temsil eder. Beşiktaş\'ın renkleri siyah ve beyazdır, bu da kulübün kara kartal kimliğine vurgu yapar.\r\n\r\nBeşiktaş, Türk futbolunun en başarılı takımlarından biri olarak kabul edilir. Süper Lig\'de birçok şampiyonluk kazanan kulüp, aynı zamanda Türkiye Kupası ve Türkiye Süper Kupa gibi önemli turnuvalarda da başarılı olmuştur. Avrupa\'da da UEFA kupalarında boy gösteren Beşiktaş, UEFA Avrupa Ligi\'nde önemli başarılar elde etmiştir.\r\n\r\nKulüp, sadece futbol alanında değil, aynı zamanda diğer spor dallarında da etkin bir rol oynamıştır. Basketbol, voleybol, yüzme ve diğer spor branşlarında da önemli başarılar elde eden Beşiktaş, geniş bir spor yelpazesine sahiptir.\r\n\r\nAncak Beşiktaş\'ın en büyük gücü, sadık ve tutkulu taraftarlarıdır. Kara Kartal\'ın maçlarına gelen taraftarlar, tribünleri coşkuyla doldurur ve takımlarına destekleriyle onları ileriye taşırlar. Bu tutku ve bağlılık, Beşiktaş\'ı sadece bir futbol kulübü olmaktan öteye taşır, onu bir yaşam tarzı haline getirir.\r\n\r\nSonuç olarak, Beşiktaş sadece futbolun değil, Türk sporunun da önemli bir parçasıdır. Tarihi başarıları, tutkulu taraftarları ve güçlü kimliğiyle, Kara Kartal her zaman Türk sporunun önemli bir figürü olmaya devam edecektir.', 'illanmusk', '2024-05-27 17:14:43'),
(2, 'Satranç: Strateji ve Zeka Oyununun Tahtı', 'Satranç, binlerce yıldır oynanan strateji ve zeka oyunlarının kralı olarak kabul edilir. Kökenleri eski Hindistan\'a dayanan bu oyun, günümüzde dünya çapında milyonlarca insan tarafından tutkuyla oynanmaktadır.\r\n\r\nSatranç, iki oyuncu arasında oynanan bir masa oyunudur. Her oyuncunun birbirine karşı sahip olduğu taşlarla oynandığı bu oyun, strateji, planlama ve öngörü yeteneklerini geliştirmeye yöneliktir. Satranç, sadece bir oyun olarak değil, aynı zamanda bir sanat ve bilim olarak da kabul edilir.\r\n\r\nBir satranç oyununda, her oyuncunun amacı rakibin kralını mat etmektir. Bunun için taşlarını dikkatli bir şekilde hareket ettirmeli, rakibin hamlelerini önceden tahmin etmeli ve kendi stratejilerini uygulamalıdır. Satranç, bu nedenle sabır, dikkat ve analitik düşünme gerektiren bir oyundur.\r\n\r\nSatranç, birçok farklı seviyede oynanabilir. Acemi oyuncular için temel kuralları öğrenmek kolaydır, ancak ustalık seviyesine ulaşmak yıllar alabilir. Profesyonel satranç oyuncuları, hamlelerini hesaplayarak, rakibin taktiklerini çözerek ve oyunu kontrol altında tutarak zafer kazanır.\r\n\r\nAncak satranç sadece rekabetçi bir oyundan ibaret değildir. Aynı zamanda zihinsel sağlık için de bir araç olarak kabul edilir. Satranç oynamak, hafıza, konsantrasyon, problem çözme ve karar verme becerilerini geliştirebilir. Ayrıca, sosyal etkileşimi teşvik eder ve oyuncular arasında dostluk ve saygı bağlarını güçlendirir.\r\n\r\nSonuç olarak, satranç yüzyıllardır insanları büyüleyen bir oyun olmuştur. Strateji, zeka ve öngörüyü bir araya getiren bu oyun, hem zihinsel hem de sosyal açıdan pek çok fayda sağlar. Satranç, sadece bir oyun değil, aynı zamanda bir yaşam tarzı ve bir düşünce biçimidir.', 'berkanazor', '2024-05-27 17:17:13'),
(3, 'Kuru Otlar Üstüne: Umutsuzluğun ve İnsanlık Hâlinin Yansıması', 'Kuru Otlar Üstüne, sinema dünyasında bir dönüm noktası olarak kabul edilir. Film, İranlı yönetmen Abbas Kiarostami\'nin ustalığıyla çarpıcı bir şekilde beyaz perdeye taşınırken, izleyicilere unutulmaz bir deneyim sunuyor.\r\n\r\nYoksulluk ve Umutsuzluk Arasında İnsanlık Hâli\r\n\r\nFilm, İran\'ın kırsal kesiminde geçen bir hikâyeyi anlatır. Ana karakterlerimiz, yaşamlarını sürdürebilmek için kuru ot toplamak zorunda kalan iki çocuktur. Bu çocukların hikâyesi, yoksulluk ve umutsuzlukla mücadele eden milyonlarca insanın hikâyesini temsil eder. Ancak, film bu zorlu koşullara rağmen insanlığın içsel gücünü ve dayanıklılığını da vurgular.\r\n\r\nDoğanın ve İnsanın Acımasızlığı\r\n\r\nKuru Otlar Üstüne, doğanın acımasızlığını ve insanın içsel çatışmalarını ustalıkla ele alır. Kuru otlar arasında yaşam savaşı veren çocuklar, hem doğanın zorlu koşullarıyla hem de insanların duyarsızlığıyla mücadele etmek zorundadır. Film, bu acımasız gerçekleri doğal ve çarpıcı bir dille aktarır.\r\n\r\nSinematografi ve Görsel Anlatım\r\n\r\nAbbas Kiarostami\'nin yönetmenliğinde, film görsel bir şölen sunar. Sinematografi ve çekim teknikleri, izleyiciyi kuru ot tarlalarının ortasına çeker ve onları karakterlerin deneyimlerine derinlemesine sokar. Minimalist yaklaşımıyla dikkat çeken Kiarostami, her sahnede güçlü bir duygusal etki yaratmayı başarır.\r\n\r\nSonuç: İzleyiciyi Düşündüren Bir Başyapıt\r\n\r\nKuru Otlar Üstüne, izleyiciyi sadece bir film izleme deneyiminden öteye taşır. Derinlikli karakter analizleri, çarpıcı görsel anlatım ve evrensel temalarıyla film, izleyicide derin duygusal ve düşünsel izler bırakır. Sonuç olarak, Kuru Otlar Üstüne, sinema tarihinde unutulmaz bir iz bırakan bir başyapıttır ve her izleyicide iz bırakan derin düşünceler uyandırır.', 'haticenur', '2024-05-27 17:20:09'),
(4, 'Takıların Sihirli Dünyası: Anlam, Estetik ve Tarih', 'Takılar, insanlık tarihi boyunca kişilerin kendilerini ifade etmelerinin ve güzelliklerini vurgulamalarının bir yolu olmuştur. Değerli metallerden ve taşlardan yapılan bu küçük parçalar, sadece estetik değil aynı zamanda sembolik anlamlar taşır. İşte takıların sihirli dünyasına bir bakış:\r\n\r\n1. Estetik Zarafet: Takılar, kadim zamanlardan beri güzellik ve zarafetin bir sembolü olmuştur. İncelikle işlenmiş altın, gümüş veya platin parçaları, insanların dikkatini çeker ve onlara benzersiz bir görünüm kazandırır. Farklı kültürlerdeki takı tasarımları, o toplumun değerlerini ve estetik anlayışını yansıtır.\r\n\r\n2. Kişisel İfade: Takılar, kişisel tarzın ve benliğin bir ifadesidir. Bir kişi, kullandığı takılar aracılığıyla duygularını, tutkularını ve hayat görüşünü yansıtabilir. Bir parça takı seçmek, kişinin kendisini ifade etme biçimlerinden biridir ve bu seçimler genellikle kişinin kimliğiyle derin bir şekilde bağlantılıdır.\r\n\r\n3. Tarih ve Kültür: Takılar, tarih boyunca farklı kültürlerde önemli bir rol oynamıştır. Antik medeniyetlerden günümüze, takılar sosyal statünün, dinin, evliliğin ve başka birçok ritüelin sembolü olmuştur. Her kültürde farklı takılar, farklı anlamlar taşır ve bu takılar genellikle nesiller boyunca miras olarak aktarılır.\r\n\r\n4. Anlam ve Sembolizm: Takılar, taşıyıcısına özel anlamlar yükleyebilir. Bir nişan yüzüğü, birlikte geçirilecek ömür boyu bir bağın sembolü olabilirken, bir aile mirası olan bir kolye, sevgi ve bağlılığın nesilden nesile aktarılmasını temsil edebilir. Aynı şekilde, semboller, motifler ve figürler de takılarda kullanılarak derin anlamlar ifade edilebilir.\r\n\r\n5. İnanç ve Spiritüel Bağlantı: Bazı takılar, inanç ve spiritüel uygulamalarla derin bir bağlantıya sahiptir. Örneğin, birçok kültürde kullanılan tespihler, manevi düşünceye odaklanmayı teşvik ederken, koruyucu semboller ve amuletler de ruhsal koruma ve güç arayışını yansıtır.\r\n\r\nSonuç olarak, takılar sadece süs eşyası değil, aynı zamanda insanlığın kolektif hafızasını, kültürel mirasını ve kişisel hikayelerini yansıtan önemli nesnelerdir. Estetik güzellikleri ve sembolik anlamlarıyla, takılar her zaman insanların hayatlarında önemli bir yer tutmuştur ve bundan sonra da tutmaya devam edeceklerdir.', 'ssevvalyavuz', '2024-05-27 17:21:51'),
(6, 'Yeni Keşfedilen Sıradışı Bir Tür: Karakaşlı Boynuz Balinaları', 'Üçte biri sular ile kaplı dünyamızın derin okyanusları aslında içinde gün yüzüne çıkmayı bekleyen sırlar saklıyor. Öyle ki günümüz Oseonologlarına göre ise bu derin okyanuslarda daha keşfedilmemiş yüz binlerce farkı tür canlı yaşıyor olabilir. Okyanuslarda kapsamlı çalışmalar gerçekleştiren uzmanlar nisan ayında yayınladıkları bir makale ile bu türlerden eşsiz bir tanesini Marina Çukuru\'nun derinliklerinde keşfettiklerini duyurdular, hem de çok büyük ve ilginç bir tür. Katil Balinalar ile 3.dereceden akraba bu türe ismini Amerika Okyanus ve Derin Sular Araştırma Birliği (ADORA) başkan yardımcısı ve aynı zamanda bu türü keşfeden araştırma takımının başı Ord. Prof. F. D. Roosevelt vermiş durumda. Karakaşlı Boynuz Balinaları ilk defa nisan ayının ilk haftalarında bir dişi ve yavrusu gezmeye çıkmışken görüldü. Saptanan balinanın boyu 1,2 × 10^5 hektometre, ağırlığı ise 567,14 kg × g (g=9.80665m/s^2) olarak ölçüldü. En dikkat çekici uzuvları olan boynuzları ise yaklaşık 734000mm, bu boynuzu savunma, eğlence, konuşma ve çoğunlukla beslenme amacı ile kullanıyorlar. Beslenme alışkanlıkları da dikkat ile izlenen balinalar, gözlemlere göre birbirlerinin sütü ile besleniyor. Bu sütten elde etmeyi başaran araştırma takımından Dr. Sylvia Plath\'ten ise sütun tadına baktığından beri haber alınamadı. 7/24 takibe alınan balinaların çok sosyal olduğu görüldü, öyle ki arkadaş olarak gördüğü balinadan ilgi görmeyen balinaların odalarına çekilip ağladığı gözlendi. Onun dışında zamanlarını birbirleriyle eğlenceli oyunlar oynamak ile geçiren balinalar, özellikle kedi (balığı) kovalamayı çok seviyor. Aynı zamanda yüzme yarışı da yapan balinaların sonuncu olanlarını köpüşbalıklarına yem ettiği de gözlendi. Bu keşfin yüzyılın en önemli şeyi olduğunu belirten ABD başkanı Barack Obama, bu keşif şerefine Beyaz Saray\'da bütün Washington halkının davetli olduğu bir balina çorbası ziyafeti sunuyor. Hepinize afiyet olsun!', 'xXx_harko121_xXx', '2024-05-27 18:52:21'),
(7, 'Tarot', 'Tarot, çok eski zamanlardan beri insanlar geleceklerini merak etmiştir ve türlü yollarla fikir sahibi olmaya çalışmıştır. Mesela eski dinlerden şamanizmdeki ayinler, hatta M.Ö 500lerde babil’lerle beraber yıldız falları bakılmaya başlanmış . Astrolojide böyle ortaya çıkmış yıldızların o anki konumu gezegenlerin hızları dünyaya göre yerleri insanın doğduğu ana göre farklı etkiler yaratır ama ben bugün astrolojiden değil en eski fallardan biri olan tarottan bahsedicem. Eski romandan beri devam eden bi fal aslında tarot. Ben falansa enerji demeyi tercih ediyorum senin yaydığın enerjiyle kartlar arasında bi bağ oluşur ve sorduğun soru seni doğru karta yönlendirir. Tarota inanmayan biri kapalı olduğu için falı muhtemelen yanlış çıkar. Bide şuan değinmek istiyorum fal bakan için de bu böyle enerji ve bağ olayı zaman zaman tarot bakan insanların uzaklaşıp tekrar dönemsi bu yüzden bağ zayıfladığında ne bakabilirsin ne içinden gelir ama bazen de kartlar seni çeker. Her tarotçunun yorumu karta yüklediği anlam farklılık gösterebilir bakım şekilde bu kartın tarotçıya verdiği enerji uyumla alakalıdır . ', 'ccigdem', '2024-05-27 20:10:23');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `fullName` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`, `fullName`, `phone`) VALUES
(3, 'haticenur', 'haticenur@gmail.com', '$2y$10$TQQIAm/M.V3QAoSmEzlwgeLfWcWakrbia72vEmHgPKUbe0NwTjNHm', '2024-05-27 17:17:37', 'haticenur yalman', '123-45-678'),
(4, 'ssevvalyavuz', 'ssevvalyavuz@icloud.com', '$2y$10$EJ0JrwVZMklVPevYUbNI3uLolhPkoMY2t.QTGWqwhgQ3d0b//Zmi6', '2024-05-27 17:20:55', 'Şevval Yavuz', '12369700029'),
(5, 'admin', 'admin@gmail.com', '$2y$10$3WfHGLU9ZgIiTxF25fJvwOFI5JPpGKCHt3NdKMqEallOz.G0XkWEe', '2024-05-27 17:51:47', 'admin', '123-45-678'),
(6, 'xXx_harko121_xXx', 'heyheyho1234566@gmail.com', '$2y$10$m.FhbRtvcuSP72Wk8/LBEeEPxpYw13Gi1SW6A7LWzvwyytPGzrZm.', '2024-05-27 17:55:36', 'Memed Dağdeviren', '01123121133'),
(7, 'ccigdem', 'ccigdemavci4@gmail.com', '$2y$10$bWbob4sem9QroVT6cLxpqOm2N9KqiQBBWjYbmK8F/sYHVlNcwsoia', '2024-05-27 19:57:51', 'Çiğdem Avcı', '05304452006'),
(8, 'illanmusk', 'illanmusk@recomai.com', '$2y$10$KrMc5geamgeVjdH4ZWemBuhauEWwKhTSjkGSix7AsqbcjHX8uRLMy', '2024-05-28 11:58:51', 'İlhan Emre ADAK', '123-45-678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
