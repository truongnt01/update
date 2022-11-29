-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2022 lúc 02:54 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `xshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id_bl` int(11) NOT NULL,
  `id_kh` int(11) NOT NULL,
  `id_hh` int(11) NOT NULL,
  `noi_dung` varchar(255) NOT NULL,
  `ngay_bl` date NOT NULL DEFAULT current_timestamp(),
  `anhbl` text DEFAULT 'sp4.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`id_bl`, `id_kh`, `id_hh`, `noi_dung`, `ngay_bl`, `anhbl`) VALUES
(1, 1, 13, '        Phủ nhôm bóng đẹp có đệm đỡ laptop và đệm dưới chân giúp khi xê dịch không bị trầy xước\r\nChất lượng sản phẩm: đẹp, đã mua lần 2 và sẽ mua lại nhiều\"\r\n     ', '2022-10-12', 'sp14.png'),
(2, 3, 15, '        Sản phẩm này chất lượng nha\r\nKhông có tiếc tiền nha cả nhà \"\r\n     ', '2022-10-12', 'sp5.png'),
(3, 3, 14, 'Sản phẩm này chất lượng nha\r\nKhông có tiếc tiền nha cả nhà ', '2022-10-12', 'sp6.png'),
(4, 1, 14, '         Phủ nhôm bóng đẹp có đệm đỡ laptop và đệm dưới chân giúp khi xê dịch không bị trầy xướcChất lượng sản phẩm: đẹp, đã mua lần 2 và sẽ mua lại nhiều lắm\r\n\r\n    \r\n          ', '2022-10-12', 'sp14.png'),
(13, 1, 16, '        hàng quá chất lượng nhưng web bịp vlaa aa\r\n               ', '2022-10-18', 'sp4.png'),
(14, 1, 33, '        hàng chất lượng ae nên mua nha ', '2022-10-18', 'sp4.png'),
(15, 1, 17, 'hàng sịn vl ae nên mua nhưng web bịp đấy ', '2022-10-18', 'sp4.png'),
(18, 1, 13, 'sản phẩm quá tuyệt vời ', '2022-10-19', 'sp4.png'),
(19, 1, 17, 'máy tính quấ chất lunnnnnnnnnnnnnn', '2022-10-20', 'sp4.png'),
(20, 4, 18, 'hàng xịn sò lắm \r\n', '2022-10-21', 'sp4.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `id_hh` int(11) NOT NULL,
  `ten_hh` varchar(255) NOT NULL,
  `don_gia` float NOT NULL,
  `giam_gia` int(11) DEFAULT NULL,
  `hinh` varchar(255) NOT NULL,
  `id_loai` int(11) NOT NULL,
  `dac_biet` int(1) NOT NULL DEFAULT 0 COMMENT '1 là đặc biệt',
  `da_ban` float NOT NULL,
  `ngay_nhap` date NOT NULL DEFAULT current_timestamp(),
  `mo_ta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hang_hoa`
--

INSERT INTO `hang_hoa` (`id_hh`, `ten_hh`, `don_gia`, `giam_gia`, `hinh`, `id_loai`, `dac_biet`, `da_ban`, `ngay_nhap`, `mo_ta`) VALUES
(13, 'Giá đỡ Laptop , Giá kê MacBook , Ultrabook chất liệu bằng nhôm điều chỉnh độ cao , chống mỏi cổ, dễ gấp gọn', 27000000, 580000, 'sp10.png', 10, 1, 19, '2022-10-11', '                                                                                * Do ánh sáng khi chụp nên sản phẩm thực tế sẽ có đôi chút khác màu so với ảnh mình chụp , mong các bạn thông cảm ( sản phẩm thực tế màu sẽ sáng hơn nhiều\r\n\r\n*Vì là phân khúc giá rẻ nên lúc gia công cơ khí sẽ không tránh khỏi sai số khi khoan lỗ chốt dẫn đến tình trạng sẽ có các chốt chặn, khớp nối bị lỏng, đôi khi gia công bị trầy xước nhưng shop cam kết hoàn toàn không ảnh hưởng đến trải nghiệm khi kê máy lên sử dụng - CAM KẾT KHÔNG BỊ BẬP BÊNH, RUNG LẮC KHI SỬ DỤNG.\r\n\r\n- SẢN PHẨM ĐI KÈM TÚI ĐỰNG NHƯNG CHẤT LIỆU TÚI VÀ MÀU SẮC SẼ TÙY ĐỢT HÀNG NHÉ.    yyy                                              '),
(14, '[Mã ELMALL4 giảm 4% đơn 1TR2] Màn Hình LG 24MK600M-B 24', 3650000, 4490000, 'sp4.png', 9, 1, 10, '2022-10-11', '        Thông số kỹ thuật Màn hình máy tính IPS LG 23.8\" 24MK600M-B - Hàng chính hãng:\r\nKích thước: 23.8\" không viền 3 cạnh\r\nĐộ phân giải: 1920 x 1080 ( 16:9 )\r\nTấm nền: IPS\r\nKiểu màn hình: Màn hình phẳng\r\nThời gian phản hồi: 5 ms\r\nĐộ sáng: 250 cd/m2\r\nGóc nhìn: 178 (H) / 178 (V)\r\nKhả năng hiển thị màu sắc: 16.7 triệu màu\r\nĐộ tương phản tĩnh: 1,000:1\r\nBề mặt: Màn hình chống lóa     '),
(15, 'Laptop ASUS ROG Flow Z13 (GZ301ZC-LD110W) i7-12700H |GeForce®RTX™ 3050 4GB', 44990000, 51990000, 'sp5.png', 10, 1, 19, '2022-10-11', '                        Thông số ASUS ROG Flow Z13 GZ301ZC-LD110W\r\n\r\n•	CPU	Intel Core i7-12700H 3.6GHz up to 4.9GHz 24MB\r\n\r\n•	RAM	16GB (8x2) LPDDR5X 5200MHz Onboard\r\n\r\n•	Ổ cứng	512GB M.2 2230 NVMe™ PCIe® 4.0 SSD (1 slot)\r\n\r\n•	Card đồ họa	NVIDIA GeForce RTX 3050 4GB GDDR6 With ROG Boost: 1107.5MHz* at 40W (1057.5MHz Boost Clock+50MHz OC, 35W+5W Dynamic Boost)\r\n\r\n•	Màn hình	13.4\" WUXGA (1920 x 1200) 16:10, Touch, 120Hz, 500nits 100% sRGB, Pantone Validated, AdaptiveSync, Gorilla Glass\r\n\r\n•	Cổng giao tiếp	1x Thunderbolt™ 4 support DisplayPort™ / power delivery\r\n\r\n•	1x USB 3.2 Gen 2 Type-C support DisplayPort™ / power delivery / G-SYNC\r\n\r\n•	1x USB 2.0 Type-A\r\n\r\n•	1x ROG XG Mobile Interface\r\n\r\n•	1x HDMI 2.0b               '),
(16, 'Microsoft Surface Laptop Studio i5 ram16gb ssd256gb New Hàng nhập khẩu', 43700000, 51990000, 'sp6.png', 6, 1, 9, '2022-10-11', '                Kích thước: 323,28 mm x 228,32 mm x 18,94 mm\r\nMàn hình: Màn hình hiển thị PixelSense 14.4 inch\r\nTần số quét: 120Hz\r\nĐộ phân giải: 2400 x 1600 pixels (201 PPI)\r\nTỷ lệ khung hình 3:2\r\nTỷ lệ tương phản 1500:1\r\nCảm ứng 10 điểm chạm\r\nCông nghệ Dolby Vision 3\r\nRam: 16GB\r\nBộ nhớ trong: 512GB SSD\r\nCPU: Intel Core H35 i5-11300H thế hệ 11\r\nBảo mật: Windows Hello\r\nTrọng lượng: 1,742,9 gram\r\nBút tương thích: Surface Pen hoặc Surface Slim Pen 2\r\nCard đồ họa: Intel Iris X e          '),
(17, '[Trả góp 0%] Apple Macbook Pro 14.2-inch M1 Pro (2021) 8C CPU/14C GPU/16GB/521GB- Hàng Chính Hãng [Futureworld- APR]', 47990000, 52990000, 'sp7.png', 10, 1, 6, '2022-10-11', 'MacBook Pro mới mang đến hiệu năng cao ấn tượng cho người dùng pro. Lựa chọn M1 Pro mạnh mẽ hay M1 Max còn mạnh hơn thế để tăng tốc xử lý các luồng công việc đẳng cấp pro cùng thời lượng pin đáng kinh ngạc.1 Với màn hình Liquid Retina XDR 14 inch sống động và nhiều cổng kết nối chuyên nghiệp, bạn có thể làm được nhiều việc hơn bao giờ hết với MacBook Pro.2\r\n\r\nTính năng nổi bật\r\n\r\n• Chip M1 Max hoặc M1 Pro do Apple thiết kế tạo ra một cú nhảy vọt về hiệu năng máy học, CPU và GPU\r\n\r\n• CPU lên đến 10 lõi cho hiệu năng nhanh hơn đến 3.7x, xử lý các luồng công việc chuyên nghiệp nhanh hơn bao giờ hết3\r\n\r\n• GPU lên đến 32 lõi với tốc độ xử lý đồ họa nhanh hơn đến 13x cho các ứng dụng và game có đồ họa khủng3\r\n\r\n• Neural Engine 16 lõi cho hiệu năng máy học nhanh hơn đến 11x3'),
(18, 'Chuột ko dây Bluetooth tự sạc pin SIDOTECH M1P ko tiếng click sạc 1 lần dùng 8 tuần cho laptop MCBook PC Tablet PAD', 150000, 115000, 'sp8.png', 8, 1, 4, '2022-10-11', 'CHUỘT KHÔNG DÂY - Chuột wireless  là dòng sản phẩm ngoại vi kế nối không dây rất phổ biến được nhiều người dùng yêu thích vì tính tiện lợi, dễ sử dụng, thẩm mỹ cao và đặc biệt hơn hết là mẫu mã vô cùng đa dạng.\r\n\r\nChuột chơi game không dây cũng đang nổi lên như một sự lựa chọn tối ưu khi khắc phục hoàn toàn sự delay và tiệm cận các dòng chuột máy tính có dây chuyên dụng\r\n\r\nCác thiết bị gaming kết nối không dây ngày một cải tiếng với nhiều thương hiệu, mẫu mã. Mang đến cho người tiêu dùng nhiều sự lựa chọn từ những dòng chuột văn phòng cho đến các dòng chuột gaming\r\n\r\n\r\n\r\nChuột Wireless - CHUỘT KHÔNG DÂY led RGB\r\n\r\nBên cạnh những nhược điểm cơ bản, CHUỘT KHÔNG DÂY không thua kém so với những con chuột có dây truyền thống. Với những tiện ích nổi bật như gọn gàng, dễ dàng kết nối và sử dụng. Người sử dụng có thể mang đi học, đi làm hay đi bất cứ đâu vô cùng dễ dàng.'),
(19, 'Bàn phím không dây Bluetooth Logitech K380 - giảm ồn, gọn nhẹ, đa thiết bị, Mac/ PC', 689000, 609000, 'sp9.png', 8, 1, 2, '2022-10-11', 'CHú ý: Bàn phím Logitech K380 sử dụng hoàn toàn bằng sóng bluetooth không có đầu thu USB đi kèm. nên vui lòng cân nhắc trước khi mua hoặc liên hệ với shop qua khung CHAT để được tư vấn)\r\n\r\nBàn phím không dây Bluetooth Logitech K380 - Kết nối 3 thiết bị, giảm ồn, nhỏ gọn, giảm ồn, pphù hợp PC/ Laptop/ Điện thoạ, tương thích Mac/ iOS/ iPad/ Windows, thời lượng pin lâu\r\n\r\nTHÔNG TIN CHI TIẾT\r\n\r\nLoại kết nối: Bluetooth Cổ điển (3.0)\r\n\r\nPhạm vi không dây: 10 m (33 ft) - 1 Phạm vi không dây có thể thay đổi tùy theo điều kiện môi trường và sử dụng máy tính\r\n\r\nHỗ trợ phần mềm:\r\n\r\n- Logitech Options dành cho Windows 10 trở lên\r\n\r\n- Logitech Options dành cho Mac (OS X 10.8 trở lên)\r\n\r\n- Logitech Flow\r\n\r\nPin: 2 x AAA'),
(20, '(Bản mới nhất Pro - Youth ) Đèn treo màn hình bảo vệ mắt Baseus i-work Series DGIWK-P01,Chống Cận', 540000, 680000, 'sp10.png', 4, 1, 2, '2022-10-11', '        \r\nThường xuyên phải làm việc khuya trên máy tính nhưng bạn không muốn mở đèn vì ảnh hưởng đến người xung quanh, bạn cần tìm một phụ kiện vừa chiếu sáng vừa không gây hại đến mắt thì Đèn Treo Màn Hình Baseus i-Wok Series Youth Edition sẽ là sự lựa chọn phù hợp cho bạn với thiết kế dạng treo trên màn hình nhỏ gọn tiết kiệm không gian bàn làm việc, còn mang lại vẻ tính tế cho góc làm việc của bạn.\r\n\r\nĐược thiết kế nhỏ gọn, kẹp chắc chắn, chống rung, chiếu sáng theo hướng, tập trung vào chiếu sáng màn hình nền không bị chói mắt giúp bảo vệ mắt tốt hơn.\r\n\r\nVới 3 chế độ sáng tích hợp 80 hạt đèn chất lượng cao giúp giảm nguy cơ ánh sáng xanh, không có ánh sáng nhấp nháy giúp bảo vệ mắt tốt hơn.\r\n\r\nĐiều chỉnh độ sáng theo ý muốn bằng cách chạm vào nút để điều chỉnh độ sáng phù hợp với nhu cầu của bạn.\r\n\r\nThích hợp cho màn hình có độ dày 6mm-28mm.\r\n\r\nĐèn chiếu sáng dạng treo trên màn hình máy tính bằng cơ chế thăng bằng, tiết kiệm diện tích\r\nCó 3 loại ánh sáng với dải màu khác nhau: Trắng 5000K, Trung tính 4000K, Ấm 2900K phù hợp với mọi nhu cầu sử dụng của người dùng: Từ làm việc cho đến đọc sách, học tập, chơi game\r\nĐiều chỉnh độ sáng của đèn linh hoạt bằng nút xoay bên phải của đèn\r\nCung cấp điện bằng cáp USB, có thể sử dụng nguồn điện từ máy tính, củ sạc điện thoại, pin dự phòng     '),
(21, '[Mã ELMALL4 giảm 4% đơn 1TR2] Màn Hình LG 24MP60G-B 23.8\' Full HD IPS AMD FreeSync™ - Hàng Chính Hãng', 4590000, 5900000, 'sp11.png', 7, 0, 2, '2022-10-11', '        Màn hình IPS Full HD\r\nMàu sắc chân thực ở góc rộng.\r\nMàn hình LG với công nghệ IPS làm nổi bật hiệu suất của màn hình tinh thể lỏng. Rút ngắn thời gian phản hồi, cải thiện khả năng tái tạo màu sắc và người dùng có thể xem ở các góc rộng.\r\n\r\nMàn hình hầu như không có đường viền 3 cạnh\r\nThiết kế viền 3 cạnh siêu mỏng.\r\nHòa mình cùng nội dung.\r\nSở hữu thiết kế viền mỏng ở ba cạnh cùng hình ảnh chính xác đến kinh ngạc, màn hình giúp người xem tập trung vào nội dung. Ngoài ra, màn hình còn có khả năng điều chỉnh độ nghiêng thuận tiện cho phép bạn bố trí một môi trường làm việc tối ưu.\r\n\r\nEye care\r\nFlicker Safe - Reader Mode.\r\nChế độ xem chăm sóc đôi mắt.\r\nGiúp đôi mắt thoải mái hơn khi làm việc cường độ cao và đọc các văn bản dài trên màn hình vi tính. Chế độ đọc sách (Reader Mode) điều chỉnh nhiệt độ màu và độ sáng tương tự như khi đọc trên giấy tạo cảm giác thoải mái khi nhìn lâu. Chế độ chống nháy (Flicker Safe) giảm thiểu hiện tượng nhấp nháy không nhìn thấy trên màn hình, mang lại môi trường làm việc thoải mái, giảm mỏi mắt.\r\n\r\n1ms Motion Blur Reduction\r\nGiành chiến thắng với tốc độ đáng kinh ngạc.\r\n1ms MBR giúp chơi game mượt mà, không bị nhòe hay bóng mờ. Các vật thể chuyển động nhiều và có tốc độ nhanh trong lúc thao tác có thể mang lại lợi thế cạnh tranh cho game thủ.     '),
(22, '[Mã ELHAOCT giảm 15% đơn 50K] Giá Đỡ VGA Coolmoon Led RGB Độ Dài 25cm - Đồng Bộ Hub Coolmoon / Auto', 105000, 165000, 'sp7.png', 3, 0, 19, '2022-10-11', '                Sản phẩm mới của Coolmoon với thiết kế độc đáo giúp nâng đỡ VGA và tạo thêm điểm nhấn cho máy tính của bạn!\r\n- Thông số kỹ thuật:\r\n+ Kích thước: 250x52mm ( Card 2 Fan )\r\n+ Chất kiệu: Mica cứng\r\n+ Dây nguồn 4 pin dài 50cm ( Đồng bộ hub coolmoon )\r\n+ Kiểu Dáng: Asus ROG hoặc Gigabyte Aorus (Tùy chọn khi mua)\r\n* Ducanpc.vn cam kết:\r\n- Giao hàng đúng mẫu khách đặt\r\n- Test và bọc kỹ trước khi gửi\r\n- Bảo hành 6 tháng          '),
(23, 'Màn Hình Máy Tính Glowy 19 inch GL19 16,7 triệu màu 1440x900p, Màn hình giá rẻ chất lượng - Bảo hành 12 tháng', 2500000, 165000, 'sp13.png', 4, 0, 12, '2022-10-11', '-Màn hình thiết kế nhỏ gọn 1440x900,60-75Hz ,16,7 triệu màu.\r\n-Màn hình Glowy 19 inch.\r\n-Là sự hoàn hảo trong phân khúc bình dân.\r\n-Nếu bạn đang cần 1 chiếc màn hình: Giá rẻ, ổn định, dễ nhìn thì Glowy 19 inch là sự lựa chọn tuyệt vời của bạn. Màn hình sử dụng công nghệ đèn led với 16 triệu màu, độ sáng màn hình 250(Typ), 200(min) cd/m2, góc nhìn 178/178 tạo lên những hình ảnh rõ nét, cảm giác thoải mái khi sử dụng. Màn có thời gian đáp ứng 6ms, tần số 60.\r\n-75HZ hỗ trợ tốt\r\n-Phụ Kiện, Cổng kết nối : Màn hình Glowy được trang bị 2 cổng giao tiếp Hdmi và VGA – những cổng giao tiếp phổ biến và tốt nhất hiện nay, màn có 1 jac căm nguồn vào nhỏ gọn cạnh cổng giao tiếp HDMI và VG.\r\n'),
(25, 'Chuột ko dây Bluetooth tự sạc pin SIDOTECH M1P ko tiếng click sạc 1 lần dùng 8 tuần cho laptop MCBook PC Tablet PAD', 199000, 250000, 'ctsp1.png', 6, 0, 12, '2022-10-16', '        CHUỘT KHÔNG DÂY - Chuột wireless  là dòng sản phẩm ngoại vi kế nối không dây rất phổ biến được nhiều người dùng yêu thích vì tính tiện lợi, dễ sử dụng, thẩm mỹ cao và đặc biệt hơn hết là mẫu mã vô cùng đa dạng.\r\n\r\nChuột chơi game không dây cũng đang nổi lên như một sự lựa chọn tối ưu khi khắc phục hoàn toàn sự delay và tiệm cận các dòng chuột máy tính có dây chuyên dụng\r\n\r\nCác thiết bị gaming kết nối không dây ngày một cải tiếng với nhiều thương hiệu, mẫu mã. Mang đến cho người tiêu dùng nhiều sự lựa chọn từ những dòng chuột văn phòng cho đến các dòng chuột gaming     '),
(33, '[CHÍNH HÃNG] Đèn led Ambilight USB theo màu màn hình kết hợp 100 hiệu ứng nháy theo nhạc (Hàng chất lượng)', 250000, 450000, 'sp13.png', 8, 0, 12, '2022-10-16', '                                                                                                                                                                                                                                                                Led Ambilight là đèn đã được nhiều báo điện tử lớn trong đó có báo tinhte.vn review và đánh giá cao về tính hữu dụng và dễ dàng lắp đặt. Hiện nay Rainbow Music Led xin mang lại phiên bản cải tiến hơn, đầy đủ hơn, nhiều chức năng hơn.\r\n\r\nChức năng cơ bản led ambilight usb: Led theo màu màn hình (là led dán xung quanh mặt sau màn hình sáng giống màu hình ảnh trong màn hình)\r\n\r\nHƯỚNG DẪN SỬ DỤNG: https://rainbowmusicled.com/huong-dan\r\n\r\n200+ VIDEO REVIEW ĐÈN: https://rainbowmusicled.com/video\r\n\r\nHệ ĐH: Win 10, 11, Mac (intel, M1), Linux\r\n                                                                                                                                                                '),
(44, 'Chuột ko dây Bluetooth tự sạc pin SIDOTECH M1P ko tiếng click sạc 1 lần dùng 8 tuần cho laptop MCBook PC Tablet PAD', 45000, 500000, 'sp12.png', 9, 0, 12, '2022-10-18', '        Chuột máy tính - Phụ kiện không thể thiếu cho máy tính\r\n\r\nHàng ngày khi sử dụng máy tính, đặc biệt là máy tính bàn, chúng ta đều dùng đến chuột máy tính, vậy thực chất chuột máy tính là gì? chuột máy tính là một thiết bị ngoại vi của máy tính, hay còn gọi là phụ kiện máy tính dùng để điều khiển và làm việc với máy tính. Có nhiều loại chuột cho máy tính của bạn.Tùy theo nhu cầu và mục đích sử dụng cũng điều kiện kinh tế mà bạn có thể lựa chọn con chuột phù hợp nhất\r\n\r\nChuột gaming chơi game chủ yếu được lựa chọn bởi các game thủ chuyên nghiệp yêu cầu độ nhạy cao, tốc độ phản hồi nhanh không bị delay     '),
(48, 'Laptop Asus Vivobook OLED M1503QA-L1028W R5-5600H|8GB|512GB|LED Keyboard|15.6\'\' FHD', 16286000, 18000000, 'sp16.png', 3, 0, 1, '2022-10-20', 'OS: Windows 11 Home \r\n\r\nCPU: AMD Ryzen™ 5 5600H (6 nhân/12 luồng, bộ nhớ đệm 19MB, tăng tốc hiệu năng tối đa lên tới 4,2 GHz)\r\n\r\nCard đồ họa: AMD Radeon™ Graphics\r\n\r\nMàn hình: 15,6 inch, FHD (1920 x 1080) OLED, 16:9, 0,2 ms, Độ sáng tối đa 600 nit, Dải màu DCI-P3 100%, 1,000,000:1.\r\n\r\nRAM: 8GB DDR4 trên bo mạch\r\n\r\nỔ lưu trữ: SSD 512GB M.2 NVMe™ PCIe® 3.0\r\n\r\nCổng kết nối I/O:\r\n\r\n1x USB 2.0 Loại A\r\n\r\n1x USB 3.2 Thế hệ 1 Loại C\r\n\r\n2x USB 3.2 Thế hệ 1 Loại A');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `id_kh` int(11) NOT NULL,
  `ho_ten` varchar(255) NOT NULL,
  `ten_dang_nhap` varchar(220) NOT NULL,
  `mat_khau` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hinh` text DEFAULT 'user.jpeg',
  `kich_hoat` int(1) NOT NULL DEFAULT 0 COMMENT '0 là chưa kích hoạt',
  `vai_tro` int(1) NOT NULL DEFAULT 0 COMMENT '0 là khách hàng thường'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`id_kh`, `ho_ten`, `ten_dang_nhap`, `mat_khau`, `email`, `hinh`, `kich_hoat`, `vai_tro`) VALUES
(1, 'Nguyễn Lộc', 'admin1', 'abc123', 'locntph23497@fpt.edu.vn', 'admin2.jpg', 1, 1),
(3, 'Nguyễn Đạt', 'admin2', 'abc123', 'locntph23497@fpt.edu.vn', 'admin2.jpg', 1, 1),
(4, 'khách hàng ', 'khachhang1', 'abc123', 'locntph23497@fpt.edu.vn', 'admin2.jpg', 1, 0),
(7, 'bán hoa quả ', 'mvc', '123', 'locntph23497@fpt.edu.vn', 'user.jpeg', 1, 0),
(8, 'Nguyễn Linh ', 'linhlinh', 'abc123', 'locntph23497@fpt.edu.vn', 'user.jpeg', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `id_loai` int(11) NOT NULL,
  `ten_loai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`id_loai`, `ten_loai`) VALUES
(3, 'Laptop'),
(4, 'Màn hình máy tính'),
(6, 'Máy Tính Bàn'),
(7, 'Màn Hình'),
(8, 'Linh Kiện Máy Tính'),
(9, 'Thiết Bị Lưu Trữ'),
(10, 'Phụ Kiện Máy Tính');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id_bl`);

--
-- Chỉ mục cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`id_hh`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`id_kh`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`id_loai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `id_hh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `id_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `id_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
