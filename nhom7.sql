-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 06, 2022 lúc 06:58 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nhom7`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `article_list`
--

CREATE TABLE `article_list` (
  `id_baiviet` int(11) NOT NULL,
  `tendanhmuc_baiviet` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `article_list`
--

INSERT INTO `article_list` (`id_baiviet`, `tendanhmuc_baiviet`) VALUES
(7, 'Khuyến mãi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id_sp` int(11) NOT NULL,
  `id_KH` int(11) NOT NULL,
  `code_cart` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cart_status` int(11) NOT NULL,
  `cart_date` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id_sp`, `id_KH`, `code_cart`, `cart_status`, `cart_date`) VALUES
(85, 68, '7615', 1, ''),
(84, 68, '8801', 1, ''),
(83, 68, '2372', 1, ''),
(82, 68, '2894', 1, ''),
(77, 67, '6028', 1, ''),
(78, 67, '1984', 1, ''),
(79, 67, '4067', 1, ''),
(80, 67, '589', 1, ''),
(81, 68, '4249', 1, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart_detail`
--

CREATE TABLE `cart_detail` (
  `id_cart_details` int(11) NOT NULL,
  `code_cart` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart_detail`
--

INSERT INTO `cart_detail` (`id_cart_details`, `code_cart`, `id_sanpham`, `soluong`) VALUES
(92, '6028', 23, 1),
(93, '6028', 29, 1),
(94, '6028', 40, 1),
(95, '1984', 29, 1),
(96, '1984', 19, 1),
(97, '4067', 28, 1),
(98, '589', 29, 1),
(99, '4249', 40, 1),
(100, '2894', 40, 1),
(101, '2372', 10, 1),
(102, '2372', 17, 1),
(103, '8801', 40, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detaill_category`
--

CREATE TABLE `detaill_category` (
  `id_detali_category` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `ten_baiviet` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `tomtat` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `image_baiviet` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `detaill_category`
--

INSERT INTO `detaill_category` (`id_detali_category`, `id_danhmuc`, `ten_baiviet`, `tomtat`, `noidung`, `image_baiviet`) VALUES
(11, 7, 'Ưu Đãi Lớn Chỉ Có Trong Tháng 12', 'Chương Trình Ưu Đãi Mùa Tựu Trường - Dành Cho Khách Hàng Mua Samsung Galaxy Note 20 Ultra', '1. Nội dung chương trình:\r\na. Thời gian áp dụng: \r\nÁp dụng từ 20.08 đến 19.09.2021 khi mua Samsung Galaxy Note 20 Ultra tại các siêu thị Điện Máy Chợ Lớn\r\n\r\nb. Thể lệ chương trình:\r\n\r\n- Khi mua Galaxy A22, A32 khách hàng sẽ được giảm giá 1.000.000VND cho đơn hàng tiếp theo nếu khách hàng mua các Sản Phẩm được thể hiện trên: https://sshop.vn/galaxygift\r\n\r\n- Đối với các sản phẩm A22, A32 chính hãng được mua và mở máy, kích hoạt EULA trong khoảng thời gian từ 20/08/2021 đến 19/09/2021\r\n\r\n- Đối với ', 'khuyenmai1.jpg'),
(12, 7, 'Sửa Thoải Mái - Nhận 3 Ưu Đãi', 'Có lẽ từ sau thành công của chương trình tháng 12 vừa chính thức tung ra một chương trình ưu đãi tháng vô cùng mạnh mẽ khác mang tên là Sửa thoải mái – Nhận ba ưu đãi.', 'Thay pin iPhone “Chai bao nhiêu – Giảm bấy nhiêu”\r\n\r\nChương trình đã gây sốc ngay từ những ngày đầu xuất hiện. Theo đó, khi thực hiện thay pin iPhone với các loại pin chính hãng như Pisen hay Remax thì bạn sẽ nhận được những ưu đãi hấp dẫn, được giảm giá trực tiếp dựa trên năng lượng pin đã chai và được tặng kèm theo dán cường lực chất lượng cao.\r\n\r\nVí dụ: Điện thoại iPhone 6s Plus của bạn, sau khi kiểm tra đã chai hết 30% pin, chỉ còn 70%. Khi đó, bạn sẽ được giảm giá ngay 30.000 đồng.\r\n\r\nModel', 'khuyenmai3.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `manufactures`
--

CREATE TABLE `manufactures` (
  `manu_id` int(11) NOT NULL,
  `manu_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `soluong_manu` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `manufactures`
--

INSERT INTO `manufactures` (`manu_id`, `manu_name`, `soluong_manu`) VALUES
(1, 'Apple', 8),
(2, 'Samsung', 11),
(3, 'Asus', 1),
(4, 'Oppo', 2),
(5, 'Sony', 7),
(6, 'Canon', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `username` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `member`
--

INSERT INTO `member` (`id_member`, `username`, `password`) VALUES
(68, 'dung', '123'),
(67, 'nhu', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `manu_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `pro_image` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `feature` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `manu_id`, `type_id`, `price`, `pro_image`, `description`, `feature`, `created_at`) VALUES
(1, 'Iphone 12 Pro', 1, 1, 19999000, 'Iphone12.jpg', 'iPhone 12 ra mắt với vai trò mở ra một kỷ nguyên hoàn toàn mới. Tốc độ mạng 5G siêu tốc, bộ vi xử lý A14 Bionic nhanh nhất thế giới smartphone, màn hình OLED tràn cạnh tuyệt đẹp và camera siêu chụp đêm, tất cả đều có mặt trên iPhone 12.\r\n\r\nThiết kế mỏng nhẹ, nhỏ gọn và đẳng cấp\r\niPhone 12 đã có sự đột phá về thiết kế với kiểu dáng mới vuông vắn, mạnh mẽ và sang trọng hơn. Không chỉ vậy, iPhone 12 mỏng hơn 11%, nhỏ gọn hơn 15% và nhẹ hơn 16% so với thế hệ trước iPhone 11.\r\n\r\nBất ngờ hơn nữa là dù gọn hơn đáng kể nhưng iPhone 12 vẫn có màn hình 6,1 inch như iPhone 11 mà không hề bị cắt giảm. Phần viền màn hình thu hẹp tối đa cùng sự nỗ lực trong thiết kế đã tạo nên điều kỳ diệu ở iPhone 12.', NULL, NULL),
(4, 'Oppo Reno6 5G', 4, 1, 12990000, '637641009301320775_oppo-reno6-dd-bh2nam.jpg', 'Không chỉ đưa bạn đến những trải nghiệm đầy phấn khích của mạng 5G siêu tốc, OPPO Reno6 Z 5G còn là chiếc điện thoại tuyệt vời để lưu giữ cảm xúc. Chụp ảnh và quay video chân dung chưa bao giờ thú vị đến thế với loạt tính năng chuyên nghiệp, đầy nghệ thuật.\r\nQuay video chân dung làm đẹp khuôn mặt tự nhiên\r\n\r\nGiờ đây bạn có thể tự tin xuất hiện trong mọi khung hình khi OPPO Reno6 Z 5G tích hợp thuật toán thông minh để vừa làm đẹp khuôn mặt, lại vừa xóa phông hoàn hảo trong những đoạn video làm đẹp chân dung. Bên cạnh đó, OPPO Reno6 Z 5G còn rất nhiều tính năng quay video hấp dẫn khác như video hiển thị kép – ghi lại hành trình thú vị của bạn bằng cách sử dụng cùng lúc cả camera trước và sau để quay video; video khóa nét chủ thể, lấy nét chính xác từng chuyển động trong khung hình.', NULL, NULL),
(2, 'Samsung Galaxy Note 20 Ultra', 2, 1, 19999000, 'Samsung Galaxy Note 20 Ultra.jpg', 'Chiếc Galaxy Note màn hình lớn nhất, bút S Pen thông minh nhất và những tính năng mạnh mẽ nhất đã xuất hiện. Samsung Galaxy Note 20 Ultra sẽ định nghĩa lại smartphone, thay đổi những trải nghiệm của bạn theo cách thú vị hơn bao giờ hết.\r\nKiệt tác công nghệ với màu sắc huyền bí\r\nSamsung Galaxy Note 20 Ultra được chế tác từ những vật liệu cao cấp hàng đầu hiện nay, với sự tỉ mỉ và chất lượng gia công thượng thừa, tạo nên chiếc điện thoại đẹp hơn những gì bạn có thể tưởng tượng. Không chỉ có kiểu dáng thanh lịch, màn hình không viền Infinity-O quyến rũ, Galaxy Note20 Ultra còn thể hiện sự cao cấp ở từng chi tiết nhỏ như các phần viền cạnh sáng bóng, họa tiết phay xước độc đáo trên khung máy, mang đến niềm cảm hứng cho người dùng ở mọi góc cạnh.\r\n\r\nthiết kế Samsung Galaxy Note 20 Ultra\r\n\r\nBên cạnh phần thân kim loại, chất liệu chính làm nên Note 20 Ultra là kính cường lực Corning Gorilla Glass Victus, có khả năng chịu lực tốt nhất thế giới smartphone hiện nay. Màu sắc cũng là điều bạn sẽ yêu thích trên Note 20 Ultra khi điện thoại có 3 lựa chọn màu là Trắng huyền bí, Đen huyền bí và màu đặc biệt Đồng huyền bí chỉ có trên Galaxy Note 20 series.\r\n\r\nHiển thị tuyệt đẹp, mượt mà đến khó tin\r\nNote 20 Ultra chắc chắn là mẫu smartphone có màn hình đẹp bậc nhất thế giới hiện nay. Trước mắt bạn là một màn hình cực lớn 6,9 inch tràn cạnh Infinity-O, độ phân giải QHD+ siêu nét, hỗ trợ HDR10+ và công nghệ màn hình Dynamic AMOLED 2X. Mọi thứ đều hiển thị lớn, sống động, đẹp rực rỡ và độ chi tiết hoàn hảo. Không chỉ đẹp, màn hình này còn có độ mượt mà vượt trội với tần số quét 120Hz, cho những thao tác vuốt chạm của bạn phản hồi ngay lập tức, đưa hiệu quả công việc và giải trí lên tối đa.\r\n\r\nmàn hình Samsung Galaxy Note 20 Ultra\r\n\r\nBút S Pen cải tiến mạnh mẽ trên Note 20 Ultra\r\nBạn sẽ được trải nghiệm cây bút cảm ứng cho nét bút tự nhiên, chân thực và mượt mà nhất từ trước đến nay với S Pen mới trên Galaxy Note 20 Ultra. Nhờ độ nhạy vượt trội và màn hình tần số quét 120Hz, thao tác ghi chú của S Pen gần như không có độ trễ, mọi thứ giống như bạn ghi chép trên giấy. Luôn sẵn sàng ghi chú và ghi chú ở bất cứ đâu, từ màn hình khóa cho đến ảnh chụp, S Pen mang đến cho bạn cuộc sống tiện lợi và dễ dàng hơn.\r\n\r\nbút S Pen Samsung Galaxy Note 20 Ultra\r\n\r\nGhi chú đồng bộ và liền mạch\r\nVới ứng dụng Samsung Notes trên cả điện thoại, máy tính bảng và máy tính, những ghi chú của bạn có thể được đồng bộ, chỉnh sửa dễ dàng trên mọi thiết bị. Ghi chú nhanh chóng trên điện thoại, sau đó xem và chỉnh sửa ở máy tính bảng hoặc máy tính để có màn hình lớn cùng nhiều công cụ hơn, Galaxy Note 20 Ultra giúp mọi thứ liền mạch, hoàn hảo hơn bao giờ hết.\r\n\r\nghi chú Samsung Galaxy Note 20 Ultra\r\n\r\nKhám phá sức mạnh hàng đầu\r\nLà thiết bị cao cấp nhất thế giới smartphone hiện tại, không có gì ngạc nhiên khi Samsung Galaxy Note 20 Ultra mang trên mình cấu hình đáng kinh ngạc. Bạn sẽ có bộ vi xử lý Exynos 990 sản xuất trên tiến trình 7nm+ tiên tiến nhất hiện nay; 8GB RAM và 256GB bộ nhớ trong cho sức mạnh tương đương máy tính để bàn. Samsung còn trang bị hệ thống làm mát nâng cao để luôn đảm bảo hiệu năng tốt nhất cho thiết bị. Kết hợp thêm màn hình 120Hz siêu mượt, Note 20 Ultra sẽ phát huy hết sức mạnh từ những tác vụ sử dụng thường ngày cho đến những tựa game đồ họa nặng.\r\n\r\ncấu hình Samsung Galaxy Note 20 Ultra\r\n\r\nTuyệt tác camera 108MP của Note 20 Ultra\r\nĐộ sắc nét của những bức ảnh trên Samsung Galaxy Note 20 Ultra đã vượt xa mọi giới hạn với camera chính độ phân giải lên tới 108MP hỗ trợ chống rung quang học OIS. Ngoài ra Note 20 Ultra còn có camera 12MP Tele OIS, camera 12MP góc siêu rộng và cảm biến lấy nét Laser. Kết quả là bạn sẽ có những bức ảnh sắc nét, chân thực như những gì mắt người chứng kiến. Ấn tượng hơn nữa, tính năng siêu zoom cho phép phóng to ảnh tới 50 lần, đưa cảnh vật từ rất xa đến ngay trước mắt bạn một cách đầy kỳ diệu.\r\n\r\ncamera Samsung Galaxy Note 20 Ultra\r\n\r\nQuay phim chuẩn điện ảnh\r\nBạn đã sẵn sàng sáng tạo những bộ phim chuyên nghiệp, chuẩn điện ảnh ngay trên chiếc điện thoại Samsung Galaxy Note 20 Ultra của mình. Khả năng quay video độ phân giải lên tới 8K, sắc nét gấp 4 lần chuẩn UltraHD 4K, mang đến những thước phim sắc nét, chi tiết đến bất ngờ. Các tùy chọn tỉ lệ 16:9 và 21:9 đa dạng tạo nên trải nghiệm điện ảnh đích thực. Hơn nữa, chế độ Pro cho phép bạn điều chỉnh tốc độ thu phóng trong khi quay, tạo nên những góc quay ấn tượng.\r\n\r\nquay video Samsung Galaxy Note 20 Ultra\r\n\r\nHiệu ứng video cực đỉnh từ Note 20 Ultra\r\nMức độ hoàn thiện video đã lên một tầm cao mới ở Note 20 Ultra. Bạn có thể quay phim 120fps, làm chậm khung hình mượt mà; quay video xóa phông với các hiệu ứng đầy nghệ thuật. Tất nhiên không thể không nhắc đến khả năng quay video chống rung siêu ổn định với tính năng Super Steady. Cảm biến camera cao cấp, công nghệ chống rung quang học OIS, ổn định hình ảnh AI nâng cao giúp những cảnh quay hành động nhanh trở nên mượt mà và sắc nét.\r\n\r\nTrải nghiệm trọn vẹn suốt cả ngày\r\nBạn hoàn toàn có thể tin tưởng vào thời lượng pin của Samsung Galaxy Note 20 Ultra. Viên pin dung lượng cao 4500mAh được tối ưu thông minh dựa trên thói quen sử dụng người dùng sẽ mang đến thời lượng pin thoải mái suốt cả ngày. Tha hồ làm việc, giải trí liền mạch, không sợ gián đoạn trên Note 20 Ultra.\r\n\r\npin Samsung Galaxy Note 20 Ultra\r\n\r\nSạc nhanh siêu tốc, tràn đầy năng lượng\r\nNhanh chóng sạc đầy và tiếp tục trải nghiệm nhờ bộ sạc siêu nhanh 25W có sẵn trong hộp. Bạn sẽ chỉ mất 30 phút để sạc được 50% pin cho Samsung Galaxy Note 20 Ultra, giúp chiếc điện thoại luôn tràn đầy năng lượng.\r\n\r\nsạc nhanh Samsung Galaxy Note 20 Ultra\r\n\r\n', NULL, NULL),
(3, 'Laptop Asus Zenbook UX325EA KG363T', 3, 2, 24299000, '637643785649708743_asus-zenbook-ux325-xam-dd-oled.jpg', 'Siêu phẩm ZenBook 13 giờ đây đã được nâng tầm với màn hình OLED, cho bạn trải nghiệm màn hình đẹp nhất từ trước đến nay trên một chiếc laptop siêu nhỏ gọn. Với trọng lượng chỉ 1,14kg, độ mỏng chỉ 1,39cm nhưng vẫn đầy đủ sức mạnh và các cổng kết nối, ASUS ZenBook UX325EA KG363T OLED là sự lựa chọn hoàn hảo cho cuộc sống năng động.\r\nTrải nghiệm sự chân thực của màu sắc\r\nZenBook 13 OLED sở hữu màn hình 13,3 inch OLED NanoEdge đáng kinh ngạc với màu sắc chính xác tuyệt đối, hiển thị sống động như những gì bạn chứng kiến trong cuộc sống ngoài đời thực. Màn hình này có độ phân giải Full HD, cực sáng với độ sáng tối đa lên tới 400 nits, thiết kế viền mỏng 4 cạnh tuyệt đẹp, hỗ trợ HDR và đặc biệt là chuẩn màu 100% DCI-P3. Công nghệ OLED còn mang đến màu đen sâu thẳm, cho bạn đắm chìm trong những bộ phim bom tấn đầy hấp dẫn. Chưa hết, khả năng phản hồi siêu tốc giúp mọi thứ đều trở nên mượt mà hơn. Cuối cùng, màn hình hỗ trợ công nghệ lọc ánh sáng xanh bảo vệ mắt đã được chứng nhận chuẩn TUV Rheinland, an toàn cho đôi mắt của bạn.', NULL, NULL),
(5, 'Tai nghe  choàng đầu có mic SONY MDR - ZX110AP\r\n', 5, 3, 560000, '637695674664494745_MDR-ZX110APBCE-01.jpg', 'Là một trong những mẫu tai nghe choàng đầu có mic gọn nhẹ bậc nhất trên thị trường, Sony MDR - ZX110AP được sáng tạo dành cho những ai yêu trải nghiệm âm nhạc và thường xuyên dịch chuyển. Với thiết kế headband có thể nới rộng hoặc thu gọn tùy thích, bạn sẽ thoải mái mang theo sản phẩm trong những chuyến đi xa.\r\nCơ động hơn, linh hoạt hơn với cơ chế xoay gập\r\nBạn sẽ dễ dàng mang theo Sony MDR - ZX110AP bên mình mọi lúc mọi nơi nhờ thiết kế thông minh của sản phẩm. Các kỹ sư của Sony đã cho thấy sự tinh tế khi thiết kế vành tai xoay linh hoạt để bảo quản dễ dàng, từ đó gia tăng tính cơ động khi người dùng muốn đặt tai nghe vào va-li, túi xách để mang theo thiết bị bên mình mà không cần đắn đo quá nhiều về vấn đề không gian bảo quản.', NULL, NULL),
(6, 'Apple Watch Series 6 GPS 40mm viền nhôm dây cao su\r\n', 1, 4, 9479000, '637369904317142085_apple-watch-series-6-gps-40mm-dd.jpg', 'Tương lai của sức khỏe nằm ngay trên cổ tay bạn. Apple Watch Series 6 với tính năng đo nồng độ oxy trong máu, đo điện tâm độ mọi lúc mọi nơi và khả năng hỗ trợ tập luyện hoàn hảo, sẽ mang đến cho bạn cuộc sống khỏe mạnh và năng động hơn.\r\nĐo nồng độ oxy trong màu, thông tin quan trọng cho sức khỏe\r\nNồng độ oxy trong máu SpO2 là một chỉ số rất quan trọng trong sức khỏe tổng quát của bạn. Nó cho biết cơ thể bạn đang hấp thụ oxy có hiệu quả không và lượng oxy cung cấp cho cơ thể. Với cảm biến hiện đại tạo thành từ 4 cụm đèn LED và 4 điốt quang, chiếu sáng xuyên thẳng vào mạch máu ở cổ tay bạn sau đó đo lượng ánh sáng phản xạ trở lại, các thuật toán trên Apple Watch Series 6 sẽ tính toán và đưa ra thông số chính xác nồng độ SpO2. Từ đó bạn có thể thấy được tình trạng sức khỏe bản thân và sớm liên hệ bác sĩ nếu lượng oxy trong máu có dấu hiệu bất ổn.', NULL, NULL),
(7, 'Loa di động SONY SRS-XB12\r\n', 5, 5, 1290000, '636952527392663389_Loa-sony-dd.jpg', 'Có thiết kế nhỏ nhắn nhưng ẩn chứa sức mạnh âm thanh đầy nội lực, chiếc loa di động Sony SRS-XB12 được tích hợp công nghệ EXTRA BASS, hứa hẹn đem tới trải nghiệm nhạc sống động và sâu lắng. Ngoài ra, điểm nhấn của sản phẩm còn nằm ở thời lượng pin kéo dài tới 16 tiếng và khả năng kháng nước, kháng bụi phòng ngừa hư hại hiệu quả trong quá trình sử dụng.\r\nKhơi nguồn cảm hứng với EXTRA BASS\r\nSony cho thấy sự chăm chút của hãng khi đem tới cho chiếc loa bluetooth này EXTRA BASS – công nghệ giúp tối ưu hóa âm trầm trở nên sắc nét và mạnh mẽ hơn.\r\n\r\nNhờ vậy, chủ nhân của Sony SRS-XB12 có thể tận hưởng không gian âm nhạc đầy cảm hứng qua những bản nhạc sôi động, quên đi mọi căng thẳng trong cuộc sống và xả stress một cách hiệu quả.', NULL, NULL),
(8, 'Tai nghe Samsung Galaxy Buds Pro\r\n', 2, 3, 3990000, '637463843342400354_00734221-den-dd.jpg', 'Kế thừa và phát huy trọn vẹn những ưu điểm từ các thế hệ trước, tai nghe không dây Galaxy Buds Pro có thiết kế thông minh với kiểu dáng in-ear cách âm tốt. Sản phẩm đi kèm hộp sạc vuông nhỏ gọn bo tròn các góc và được tích hợp công nghệ chống ồn chủ động ANC linh hoạt với chất âm hàng đầu thị trường.\r\nKhử ồn hiệu quả với cơ chế ANC thông minh\r\nCông nghệ chống ồn chủ động ANC trên Galaxy Buds Pro có thể loại bỏ tới 99% tạp âm từ môi trường. Để làm được điều này, Samsung đã tích hợp cho sản phẩm tới ba micro bố trí tại những vị trí bên trong và bên ngoài tai nghe để đạt hiệu quả theo dõi tiếng ồn nhạy bén nhất. Sản phẩm đem tới ba mức khử ồn khác nhau gồm Cao – Trung Bình – Thấp để bạn tùy chỉnh linh hoạt.', NULL, NULL),
(9, 'Samsung Galaxy Watch 4\r\n', 2, 4, 6490000, '637655667503189019_samsung-galaxy-watch-4-hong-small-dd.jpg', 'Không chỉ là chiếc đồng hồ thông minh đầy đủ cả tính năng công nghệ và vẻ đẹp thời trang, Samsung Galaxy Watch 4 còn là một người bạn đồng hành luôn luôn thấu hiểu sức khỏe và những gì bạn cần, cùng bạn hoàn thiện bản thân mỗi ngày.\r\nThấu hiểu cơ thể của bạn\r\nGalaxy Watch 4 có khả năng phân tích thành phần cơ thể khi cung cấp thông tin về tỷ lệ mỡ, cơ xương, lượng nước trong cơ thể và nhiều thông tin quan trọng khác. Cảm biến Samsung BioActive mới có thể đo các thành phần trong cơ thể bạn theo thời gian thực, giúp bạn luôn luôn kiểm soát và biết cần phải tập luyện, bổ sung những gì để có được sức khỏe và hình thể như ý.', NULL, NULL),
(10, 'MacBook Pro 13\" 2020 Touch Bar M1 Ram 16GB\r\n', 1, 2, 39499000, '637408530311831907_mbp-2020-m1-gray-dd-1.jpg', 'Với MacBook Pro 13 inch 2020, Apple phát hành hai phiên bản khác nhau không chỉ về số lượng cổng Thunderbolt mà còn khác cả về dòng CPU được trang bị. Trong bài viết này, sẽ đánh giá chi tiết về phiên bản 4 Thunderbolt được trang bị bộ xử lý Intel thế hệ 10 mới nhất.\r\nVới phiên bản cao cấp 4 Thunderbolt, phiên bản cấu hình cơ bản của sản phẩm đã được trang bị bộ xử lý Intel Core i5 Ice Lake (i5-1038NG7), 16GB RAM LPDDR4X 3733MHz và 512GB SSD. Đây cũng là cấu hình được sử dụng để đánh giá trong bài viết. Mức giá dự kiến khi lên kệ của cấu hình trên sẽ vào khoảng 48 triệu đồng.', NULL, NULL),
(11, 'Máy ảnh Canon Powershot SX620 HS/ Trắng ', 6, 6, 6990000, 'may-anh-canon-powershot-sx620-hs-trang-nhap-khau.jpg', '- Cảm biến: CMOS 20.2 megapixels\r\n- Bộ xử lý hình ảnh Digic 4+\r\n- Màn hình 3.0inch \r\n- Zoom Quang học 25x (25-625mm) Zoomplus 50x\r\n- Khẩu độ: F/3.2- F/9.0 (W), F/6.6- F/18.0 (T)\r\n- Độ nhạy sáng: ISO 800-1600\r\n- Tốc độ màn trập: 15 - 1/2000giây\r\n- Tốc độ chụp 2.5 ảnh/giây \r\n- Quay phim Full HD 1920x1080\r\n- Tích hợp Wifi & NFC\r\n- Trọng lượng: 158g\r\n- Pin tương thích NB-13LH\r\n- Phụ kiện đi kèm: Pin, Sạc pin, Dây đeo, Cataloge, Phiếu bảo hành', NULL, NULL),
(12, 'Máy ảnh Sony Alpha ILCE-1/ A1 Body', 5, 6, 155990000, 'may-anh-sony-alpha-a1.jpg', '- Loại cảm biến: BSI-CMOS\r\n- Bộ xử lý: Bionz XR kép\r\n- Gắn ống kính: Sony E\r\n- Số điểm lấy nét: 759\r\n- Độ dài tiêu cự mult.: 1 ×\r\n- Tốc độ màn trập tối đa: 1/8000 giây\r\n- Độ phân giải tối đa: 8640 x 5760\r\n- Kích thước cảm biến: Toàn khung (35,9 x 24 mm)\r\n- ISO: Tự động, 100-32000 (mở rộng thành 50-102400)\r\n- Trọng lượng (bao gồm pin): 737 g \r\n- Kích thước: 129 x 97 x 70 mm', NULL, NULL),
(13, 'Máy ảnh Sony Alpha ILCE-6000/ A6000 Body/ Đen', 5, 6, 11490000, 'may-anh-sony-alpha-ilce6000-a6000-body-den.jpg', '- Cảm biến Exmor APS-C CMOS 24.3 megapixels\r\n- Bộ xử lý BIONZ X&trade\r\n- Màn hình cảm ứng 3.0 inch lật 180 độ\r\n- Khung ngắm điện tử 1.0 cm\r\n- Lấy nét tự động Fast Hybird\r\n - Độ nhạy sáng ISO 100-25600 (mở rộng 51200)\r\n- Tốc độ màn chập 30 - 1/1400 giây\r\n- Tốc độ chụp liên tiếp 11 ảnh/giây \r\n- Quay phim full HD \r\n- Tích hợp Wifi/ NFC\r\n- Pin tương thích NP-FW50\r\n- Trọng lượng 285g\r\n- Phụ kiện đi kèm: Pin NP-FW50, Adapter nguồn, Dây đeo, Cáp Micro USB, Dây nguồn, Eyecup, Cataloge', NULL, NULL),
(14, 'Máy ảnh Canon Ixus 185/ Đen', 6, 6, 4290000, 'canon-ixus-185-den(1).jpg', '- Cảm biến CCD 20 megapixels \r\n- Bộ xử lý hình ảnh Digic 4+\r\n- Màn hình 2.7inch \r\n- Zoom quang học 8x (28-224mm) ZoomPlus 16x\r\n- Khẩu độ F/3.0- F/9.0 (W), F/6.9- F/20.0 (T)\r\n- Độ nhạy sáng ISO 100-800\r\n- Tốc độ màn chập 15 - 1/2000 giây\r\n- Tốc độ chụp 0,8 ảnh/giây (ở chế độ Auto, chế độ P)\r\n- Quay phim HD \r\n- Pin tương thích NB-11LH\r\n- Trọng lượng 111g\r\n- Phụ kiện đi kèm: Pin, Sạc pin, Dây đeo, Cataloge, Phiếu bảo hành', NULL, NULL),
(15, 'Máy ảnh Canon Powershot G7 X Mark II', 6, 6, 12490000, 'may-anh-canon-powershot-g7-x-mark-ii(1).jpg', '- Cảm biến CMOS 1 inch 20.1 megapixels\r\n- Bộ xử lý hình ảnh Digic 7\r\n- Màn hình 3.0inch (lật 180 độ)\r\n- Zoom Quang học 4.2x (24-100mm) Zoomplus 8.4x\r\n- Khẩu độ F/1.8 – F/2.8 - Chống rung 5 trục\r\n- Độ nhạy sáng ISO 125-12800\r\n- Tốc độ màn chập 15 - 1/2000giây\r\n- Tốc độ chụp 8 ảnh/giây \r\n- Quay phim Full HD 1920 x 1080\r\n- Tích hợp Wifi / NFC\r\n- Trọng lượng 319g\r\n- Pin tương thích NB-13L\r\n- Phụ kiện đi kèm: Pin, Sạc pin, Dây đeo, Cataloge, Phiếu bảo hành', NULL, NULL),
(16, 'iPhone 13 Pro Max', 1, 1, 33490000, 'iphone-13-pro-max-graphite-600x600.jpg', 'iPhone 13 Pro Max 256GB - siêu phẩm mang trên mình bộ vi xử lý Apple A15 Bionic hàng đầu, màn hình Super Retina XDR 120 Hz, cụm camera khẩu độ f/1.5 cực lớn, tất cả sẽ mang lại cho bạn những trải nghiệm tuyệt vời chưa từng có.\r\nThiết kế đẳng cấp, sang trọng\r\niPhone 13 Pro Max vẫn sẽ kế thừa thiết kế đặc trưng của iPhone 12 Series, vẫn là một sản phẩm với khung viền được hoàn thiện từ thép không gỉ, hai mặt trước sau được trang bị kính cường lực bóng bẩy.\r\nĐắm chìm trong không gian màn hình lớn cực đã\r\nDù là giải trí khi xem phim, chơi game hay kiểm tra email, đọc tài liệu thì màn hình lớn tới 6,7 inch của iPhone 13 Pro Max cũng luôn cho trải nghiệm tuyệt vời nhất.\r\n', NULL, NULL),
(17, 'Samsung Galaxy Z Flip3 5G 128GB', 2, 1, 23990000, 'samsung-galaxy-z-flip-3-cream-1-600x600.jpg', 'Trong sự kiện Galaxy Unpacked hồi 11/8, Samsung đã chính thức trình làng mẫu điện thoại màn hình gập thế hệ mới mang tên Galaxy Z Flip3 5G 128GB. Đây là một siêu phẩm với màn hình gập dạng vỏ sò cùng nhiều điểm cải tiến và thông số ấn tượng, sản phẩm chắc chắn sẽ thu hút được rất nhiều sự quan tâm của người dùng, đặc biệt là phái nữ.\r\nThiết kế hiện đại cùng màu sắc thời trang\r\nGalaxy Z Flip 3 sở hữu cơ cấu gập theo chiều dọc xịn sò, tạo ra chiếc smartphone khác biệt so với phần còn lại, có thể đóng lại gọn gàng khi không sử dụng để bạn thuận tiện mang theo bên mình.', NULL, NULL),
(18, 'MacBook Pro 16 M1 Pro 2021/16 core-GPU', 1, 2, 69990000, 'apple-macbook-pro-16-m1-pro-2021-10-core-cpu-600x600.jpg', 'Không còn quá xa lạ với sự đẳng cấp đến từ các sản phẩm của nhà Apple bởi lối thiết kế dẫn đầu xu hướng sang trọng, thời thượng và sức mạnh cấu hình ngoài mong đợi, nhưng còn đặc biệt hơn khi chiếc laptop MacBook Pro 16 M1 Pro 2021 này sẽ là phiên bản nâng cấp với con chip Apple M1 Pro mạnh mẽ, xử lý ấn tượng các tác vụ chuyên sâu.\r\nSức mạnh bộc phá với CPU phiên bản nâng cấp vượt trội', NULL, NULL),
(19, 'Samsung Galaxy Book Flex Alpha 13.3\" QLED Touch Screen 256GB SSD Intel i5 8GB', 2, 2, 16557000, 's-l1600.jpg', 'Samsung - Galaxy Book Flex2 Alpha 13.3 \"Máy tính xách tay màn hình cảm ứng QLED - Intel Core i5 - Bộ nhớ 8GB - SSD 256GB - Màu bạc hoàng gia\r\nMọi thứ bạn yêu thích trong PC Galaxy và hơn thế nữa. Galaxy Book Flex2 đứng đầu trong phân khúc với các tính năng chất lượng cao tương xứng. Được trang bị công nghệ mới nhất của chúng tôi, thiết kế sáng tạo, màn hình hiển thị sống động và bộ xử lý tốc độ cao sẽ làm mê mẩn các giác quan của bạn đồng thời vượt qua mọi mong đợi.\r\n\r\nMọi thứ bạn yêu thích trong PC Galaxy và hơn thế nữa. Galaxy Book Flex2 đứng đầu trong phân khúc với các tính năng chất lượng cao tương xứng. Được trang bị công nghệ mới nhất của chúng tôi, thiết kế sáng tạo, màn hình hiển thị sống động và bộ xử lý tốc độ cao sẽ đánh lừa các giác quan của bạn đồng thời vượt qua mọi mong đợi. Màn hình QLED siêu sống động của nó có hàng triệu màu được thực hiện ở 100% khối lượng màu, thích ứng với môi trường của bạn để bạn có trải nghiệm xem dễ dàng bất kể ánh sáng. Chọn chế độ xem của bạn với thiết kế siêu mỏng 2 trong 1 có thể chuyển đổi từ máy tính xách tay thành máy tính bảng. Thêm bộ xử lý Intel Core i5 / i7 thế hệ thứ 11 mới nhất và công việc, giải trí và giải trí của bạn tiếp tục từ sáng đến tối. Tận hưởng các tính năng tích hợp được bổ sung như khả năng Màn hình thứ hai và kết nối nâng cao với mọi thứ trong hệ sinh thái Galaxy, từ máy tính bảng đến máy tính bảng và hơn thế nữa. Thêm,', NULL, NULL),
(20, 'Samsung Galaxy Book Pro (2021) - CORE I5 1135G7 / 8GB / 512GB SSD / INTEL IRIS XE / FHD AMOLED TOUCH', 2, 2, 27000000, 'Samsung-Galaxy-Book-Pro-2021-H1.jpg', 'Samsung Galaxy Book Pro được thiết kế dựa trên nhu cầu và thói quen của những người dùng ưu tiên thiết bị di động hiện đại, được thiết kế để giúp trải nghiệm hàng ngày của bạn trở nên đơn giản, mượt mà và trực quan hơn bao giờ hết. Đây là những chiếc Galaxy Book linh động nhất của Samsung từ trước đến nay, với Galaxy Book Pro 15 inch chỉ nặng 1,15kg và mỏng chỉ 13,3mm. Thiết kế nhỏ gọn này giúp người dùng có thể dễ dàng để nó vào balo hay túi xách.', NULL, NULL),
(21, 'Tai nghe Bluetooth AirPods Pro MagSafe Charge Apple MLWK3', 1, 3, 6790000, 'bluetooth-airpods-pro-magsafe-charge-apple-mlwk3-avatar-600x600.jpg', 'Vẻ ngoài thời trang, kiểu dáng nhỏ gọn, đeo chắc chắn với 3 size nút tai. \r\nTái tạo âm thanh sống động, phù hợp với ống tai bạn nhờ chip H1, công nghệ Adaptive EQ.\r\nKiểm soát âm thanh tai nghe hiệu quả với công nghệ chống ồn chủ động (Active Noise Cancellation) cùng xuyên âm (Transparency mode).\r\nSử dụng tai nghe liên tục trong 4.5 giờ, kết hợp hộp sạc thêm 24 giờ. \r\nHỗ trợ sạc nhanh trong 5 phút có 1 giờ sử dụng. \r\nSạc không dây tiện lợi với bộ sạc Magsafe, chuẩn không dây Qi. \r\nAn tâm khi gặp mưa nhỏ, luyện tập ra nhiều mồ hôi với chuẩn chống nước IPX4.\r\nSản phẩm chính hãng Apple, nguyên seal 100%.', NULL, NULL),
(22, 'Tai nghe EP Bluetooth Sony WI-1000XM2', 5, 3, 6291000, 'tai-nghe-ep-bluetooth-sony-wi-1000xm2-avatar-1-600x600.jpg', 'Nhỏ gọn, kiểu vòng cổ silicone thoải mái, có nút đệm tai và thiết kế có độ tạo góc sử dụng chắc chắn, êm ái.\r\nTrang bị công nghệ chống ồn tiên tiến HD QN1.\r\nÂm thanh độ phân giải cao kết hợp cơ chế tăng cường âm thanh kỹ thuật số HX (DSEE HX™).\r\nDễ dàng tùy chỉnh tác vụ nghe nhạc, gọi rảnh tay, tương tác với Google Assistant, Siri.\r\nĐiều khiển thông minh, tiện lợi với Google Assistant, Amazon Alexa và Siri.\r\nHỗ trợ ứng dụng Sony | Headphones Connect kiểm soát và điều chỉnh âm lượng thông minh tự động hoặc theo sở thích.\r\nKết nối Bluetooth 5.0 với khoảng cách 10 m, đường truyền ổn định.\r\nSạc 3.5 giờ cho thời gian dùng đến 10 giờ, sạc nhanh 10 phút sử dụng đến 80 phút.', NULL, NULL),
(23, 'Tai nghe Bluetooth True Wireless Samsung Galaxy Buds Live R180 Gold', 2, 3, 1791000, 'true-wireless-samsung-galaxy-buds-live-r180-141021-103922-600x600.jpg', 'Ngoại hình độc đáo, mới lạ, chất âm tốt.\r\nĐàm thoại được cải thiện rõ rệt.\r\nKết nối tiện lợi với Bluetooth 5.0 .\r\nTương thích với hệ sinh thái Galaxy.\r\nHiệu quả chống ồn đạt 97%.\r\nTận hưởng âm nhạc cùng bạn bè qua Buds Together.\r\nTrợ lý ảo Bixby, kháng nước IPX2.\r\nNghe nhạc 6 giờ liên tục (21 giờ nếu kết hợp hộp sạc).\r\n5 phút sạc sử dụng đuợc 1 giờ nghe nhạc.\r\nĐiều khiển cảm ứng dừng/phát, trả lời cuộc gọi.', NULL, NULL),
(24, 'Sony SmartWatch 3 & Thông số', 5, 4, 2499000, 'uploaded_8f561d291b9baf2c9938db82d09e3167.jpg', 'Đồng hồ thông minh Sony SmartWatch 3 ra mắt năm 2014 với mức giá từ 5.000.000 VNĐ. Sony SmartWatch 3 có kích thước màn hình 1.6 inches dáng chữ nhật với độ phân giải 320 x 320pixels, thời lượng pin 48h. Sony SmartWatch 3 mang cho mình thân máy chất liệu thép không gỉ, dây đồng hồ chất liệu Silicon đi cùng trọng lượng thân máy 45g.\r\nThiết kế của Sony Smartwatch 3 sở hữu màn hình hiển thị có kích thước 1.6 inch, độ phân giải 320 x 320 pixels với mặt đồng hồ vuông vức, tạo điểm nhấn sắc nét cho người chiêm ngưỡng từ cái nhìn đầu tiên. Kiểu dáng thể thao của Smartwatch 3 sẽ tạo nên cá tính chất “lừ” cho những anh chàng theo đuổi phong cách năng động và mạnh mẽ.\r\n\r\nMặt đồng hồ thông minh Smartwatch 3 có thể tháo rời khỏi dây đeo để tùy biến phong cách của riêng mình với lựa chọn chất liệu từ cao su đến kim loại. Dây kim loại của Smartwatch 3 có thiết kế chất lượng và độ hoàn thiện rất ổn, mắt xích được làm bằng nhôm có bề mặt nhám, nối với nhau bằng khớp động đem đến độ chắc chắn tuyệt vời cho sản phẩm.', NULL, NULL),
(25, 'Đồng Hồ Samsung Galaxy Watch3 Bluetooth', 2, 4, 9990000, 'tải xuống.png', 'Thiết kế cổ điển, vòng bezel xoay vật lý độc đáo\r\nĐồng hồ thông minh Galaxy Watch 3 45 mm sở hữu phong cách thiết kế thanh lịch, cổ điển với viền mặt bằng thép và chất liệu dây da. Dây da được chế tác một cách tinh xảo, mang lại vẻ đẹp sang trọng cho thiết bị.\r\nBên cạnh đó, thao tác điều khiển độc đáo bằng cách xoay viền mặt đồng hồ đã quay trở lại trên smartwatch Samsung.\r\nMặc dù màn hình có kích thước lớn 45 mm, nhưng tổng thể thiết bị vẫn thanh thoát và gọn gàng. Trọng lượng thiết bị chỉ nhẹ 48.2 gram.\r\n\r\n', NULL, NULL),
(26, 'Apple Watch Series 6 44mm (4G) Viền Thép Dây Thép | Chính Hãng VN/A', 1, 4, 19500000, 'apple-watch-series-6-44mm-4g-vien-thep-day-thep-1_1_1_3.jpg', 'Apple Watch Series 6 44mm 4G viền thép dây thép - Smartwatch cao cấp phiên bản dây thép cứng cáp\r\nHỗ trợ tính năng đo nhịp tim và nhiều chế độ sức khỏe khác nhau, Apple Watch S6 44mm 4G viền thép dây thép là chiếc đồng hồ thông minh sang trọng phù hợp cho các iFan lẫn vận động viên thể thao. Sự bổ sung dây đeo bằng thép càng làm tăng thêm vẻ sang trọng cho chiếc smartwatch này.', NULL, NULL),
(27, 'Loa Tháp Samsung MX-T70/XV', 2, 5, 6690000, 'samsung-mx-t70-xv-6-300x300.jpg', 'Thiết kế 2 mặt loa vát cạnh độc đáo, âm thanh đa hướng sống động\r\nLoa Tháp Samsung MX-T70/XV sở hữu thiết kế hình tháp độc đáo cùng 2 mặt loa tạo ra âm thanh đa hướng sống động, lan tỏa mạnh mẽ lấp đầy một không gian rộng lớn cho bạn tận hưởng thế giới âm nhạc đầy sắc màu và những trải nghiệm âm thanh thật hoàn hảo.', NULL, NULL),
(28, 'Loa Sony MHC V43D', 5, 5, 8990000, 'loa-bluetooth-sony-mhc-v43d-thumb-G4958-1600152875826.jpg', '- Loa bluetooth Sony MHC V43D thiết kế cứng cáp, đáp ứng hát karaoke, nghe nhạc, biểu diễn...\r\n- Gồm loa bass 25 cm, 2 loa mid đường kính 8 cm và 2 loa treble tái tạo âm thanh mọi dải tần.\r\n- Chế độ Live Sound với công nghệ DSP cho âm thanh chân thực.\r\n- Ánh sáng đèn LED rực rỡ nhịp nhàng theo giai điệu.\r\n- Kết nối bluetooth không dây, tương thích với các thiết bị thông minh.\r\n- Ứng dụng độc quyền Sony|Music Center.', NULL, NULL),
(29, 'Loa thông minh Apple HomePod', 1, 5, 6899000, 'shopping.png', 'HomePod dùng chip A8, một loa trầm lớn và 7 loa tweeter. Apple cho hay HomePod có thể tự động cảm nhận cách bài trí của mỗi căn phòng để điều chỉnh và tối ưu hóa âm thanh.\r\n\r\nHãng khuyến khích người dùng sử dụng HomePod với dịch vụ âm nhạc Apple Music (giá 9,99 USD/tháng tại Mỹ), cho phép chơi 40 triệu bản nhạc trong danh mục. Siri cũng có thể trả lời những câu hỏi sâu liên quan đến các bản nhạc này. Nếu không dùng Apple Music, HomePod có thể stream Beats 1, podcast hoặc bất cứ bài hát, album nào bạn đã mua trên iTunes.', NULL, NULL),
(30, 'Loa thanh Samsung HW-Q950T', 2, 5, 33990000, 'samsung-hw-q950t-300x300.png', 'Thiết kế màu đen sang trọng, tinh tế \r\nLoa thanh Samsung HW-Q950T có đường nét thiết kế gọn gàng, mang phong cách tối giản nhưng rất hiện đại, phù hợp trang trí ở mọi không gian.\r\nĐem đến trải nghiệm âm thanh tuyệt vời sống động như nhật của những bộ phim hay chương trình giải trí yêu thích của bạn với Loa Soundbar Samsung HW-Q950A - Chiếc loa vòm 11.1.4 kênh đỉnh cao mới nhất năm 2021 của hãng SAMSUNG\r\nLoa Soundbar Samsung HW-Q950A hiện đang rất được các gia đình tại Việt Nam yêu thích sử dụng, sản phẩm được bán chính hãng với giá tốt nhất kèm nhiều ưu đãi tại HDRADIO', NULL, NULL),
(40, 'Điện Thoại Oppo A92 128Gb', 4, 1, 2200000, 'oppo-a92-23.jpg', 'Màn hình chấm O tinh tế, hiệu năng mạnh mẽ, 4 camera AI 48MP và viên pin dung lượng cực “khủng”, bạn sẽ hoàn toàn hài lòng về OPPO A92, chiếc điện thoại siêu mượt mà, đầy đẳng cấp.\r\nOPPO A92 được trang bị cho mình con chip Snapdragon 665 mạnh mẽ cho hiệu năng cao, điện thoại chơi game tốt các tựa game mobile hiện hành cũng như xử lý đa nhiệm mượt mà.\r\nĐi kèm với đó là GPU Adreno 610 giúp máy vừa xử lý thông tin, dữ liệu nhanh chóng vừa đảm bảo tiết kiệm điện năng tối đa.', NULL, NULL),
(41, 'SamSung Galaxy A52S', 2, 1, 10520000, 'samsung-galaxy-a52s-5g-mint-gc-org.jpg', 'Trải nghiệm kỷ nguyên 5G hoàn toàn mới, nơi là người làm chủ tốc độ và dẫn đầu cuộc chơi, Samsung Galaxy A52s 5G với kết nối 5G siêu tốc, sức mạnh hiệu năng tuyệt đỉnh cùng bộ tứ camera chống rung quang học OIS vượt trội sẽ đưa bạn đến từ bất ngờ này đến bất ngờ khác.\r\nSức mạnh hiệu năng ưu việt\r\nTrên Samsung Galaxy A52s 5G, bạn sẽ không bao giờ phải chờ đợi khi mọi thao tác, ứng dụng đều phản hồi ngay lập tức. Với bộ vi xử lý Snapdragon 778G 5G đi cùng 8GB RAM, Samsung Galaxy A52s 5G cho tốc độ cực nhanh, khả năng đa nhiệm mượt mà, chơi tốt mọi game nặng trên kho ứng dụng Google Play. Bộ nhớ trong 128GB cùng thẻ nhớ microSD hỗ trợ mở rộng thêm tối đa 1TB, cho bạn thỏa sức lưu trữ mà không lo đầy bộ nhớ.', NULL, NULL),
(54, 'Samsung', 2, 1, 6, '637463843342400354_00734221-den-dd.jpg', 'ádasd', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `protypes`
--

CREATE TABLE `protypes` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `soluong_types` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `protypes`
--

INSERT INTO `protypes` (`type_id`, `type_name`, `soluong_types`) VALUES
(1, 'SmartPhone', 7),
(2, 'Laptop', 5),
(3, 'HeadPhone', 5),
(4, 'Watch', 5),
(5, 'MegaPhone', 5),
(6, 'Camera', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reviews`
--

CREATE TABLE `reviews` (
  `id_review` int(11) NOT NULL,
  `products_id` int(10) NOT NULL,
  `yourname` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `your_review` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `rating` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `reviews`
--

INSERT INTO `reviews` (`id_review`, `products_id`, `yourname`, `email`, `your_review`, `rating`) VALUES
(1, 3, 'quynhnhu', 'quynhnhu@gmail.com', 'good', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongke`
--

CREATE TABLE `thongke` (
  `id` int(11) NOT NULL,
  `ngaydat` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `donhang` int(11) NOT NULL,
  `doanhthu` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `soluongban` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thongke`
--

INSERT INTO `thongke` (`id`, `ngaydat`, `donhang`, `doanhthu`, `soluongban`) VALUES
(1, '2021-10-23', 61, '15000000', 20),
(2, '2021-10-22', 52, '10000000', 10),
(3, '2021-10-21', 49, '500000', 5),
(4, '2021-10-20', 63, '30000000', 25);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `role_id`) VALUES
(1, 'quynhnhu', 'd9d59f0763247de34b21ebe924824319', 1),
(2, 'user', 'd9d59f0763247de34b21ebe924824319', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `article_list`
--
ALTER TABLE `article_list`
  ADD PRIMARY KEY (`id_baiviet`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_sp`);

--
-- Chỉ mục cho bảng `cart_detail`
--
ALTER TABLE `cart_detail`
  ADD PRIMARY KEY (`id_cart_details`);

--
-- Chỉ mục cho bảng `detaill_category`
--
ALTER TABLE `detaill_category`
  ADD PRIMARY KEY (`id_detali_category`);

--
-- Chỉ mục cho bảng `manufactures`
--
ALTER TABLE `manufactures`
  ADD PRIMARY KEY (`manu_id`);

--
-- Chỉ mục cho bảng `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `protypes`
--
ALTER TABLE `protypes`
  ADD PRIMARY KEY (`type_id`);

--
-- Chỉ mục cho bảng `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id_review`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Chỉ mục cho bảng `thongke`
--
ALTER TABLE `thongke`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `article_list`
--
ALTER TABLE `article_list`
  MODIFY `id_baiviet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT cho bảng `cart_detail`
--
ALTER TABLE `cart_detail`
  MODIFY `id_cart_details` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT cho bảng `detaill_category`
--
ALTER TABLE `detaill_category`
  MODIFY `id_detali_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `manufactures`
--
ALTER TABLE `manufactures`
  MODIFY `manu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT cho bảng `protypes`
--
ALTER TABLE `protypes`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `thongke`
--
ALTER TABLE `thongke`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
