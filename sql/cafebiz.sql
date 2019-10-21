/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : cafebiz

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-10-20 14:57:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `tieude` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidung` longtext COLLATE utf8_unicode_ci NOT NULL,
  `hinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_post`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of posts
-- ----------------------------
INSERT INTO `posts` VALUES ('7', 'Jack Ma: Mỗi ngày, Alibaba phải chống chịu 300 triệu lượt hack', '\r\nMa đã đề cập đến năng lực công nghệ tiên tiến của Alibaba, mà ông đặt tên là \"AI: Alibaba Intelligence\", lưu ý rằng máy móc vượt trội hơn con người trong việc sử dụng dữ liệu logic để ngăn chặn hành vi trực tuyến độc hại.', 'jackma.jpg', '2020-01-02 01:00:00');
INSERT INTO `posts` VALUES ('8', 'Cựu chuyên gia nghiên cứu của NASA', 'Tàu thăm dò Viking đã lên bề mặt Sao Hỏa hơn 40 năm trước, mang theo sứ mệnh khám phá Hành tinh Đỏ. Trên Viking là một thử nghiệm có tên Labeled Release (LR), với mục đích phát hiện dấu hiệu của sự sống.', 'nasa.jpg', '2019-01-01 01:00:00');
INSERT INTO `posts` VALUES ('9', 'UNIQLO Việt Nam đầu tiên sẽ khai trương vào cuối năm nay tại Sài Gòn', 'Hôm nay, UNIQLO, thương hiệu bán lẻ thời trang toàn cầu đến từ Nhật Bản, đã chính thức công bố địa điểm cửa hàng đầu tiên tại Việt Nam, dự kiến mở cửa vào cuối năm 2019 tại quận 1, trung tâm TP. Hồ Chí Minh. Tọa lạc trên góc đường Lê Thánh Tôn và Đồng Khởi,', 'uni.jpg', '2019-01-01 13:00:00');
INSERT INTO `posts` VALUES ('12', 'Doanh nghiệp thừa nhận dùng xe chở nước tưới cây đưa nước sạch miễn phí cho dân Hà Nội', 'Sáng 17/10, trả lời VTC News, Ban đại diện cư dân HH (khu đô thị Linh Đàm, Hoàng Mai, Hà Nội) cho biết, vào tối qua, đơn vị có buổi làm việc với các bên liên quan về việc nước sạch miễn phí cung cấp cho cư dân nơi đây có mùi hôi tanh, vẩn đục.', 'nuoc.jpg', '2021-01-01 01:00:00');
INSERT INTO `posts` VALUES ('13', 'Quế Ngọc Hải: \'Bốn năm rồi, tôi vẫn mong được gặp bầu Đức để cám ơn\'', 'Quế Ngọc Hải đã phải làm lại mọi thứ sau câu chuyện không vui về việc đền viện phí cho Anh Khoa. Ngọc Hải may mắn được bầu Đức “cứu” với việc hỗ trợ 400 triệu đồng, khi thời điểm đó CLB Đà Nẵng muốn có đủ 830 triệu đồng.', 'hai.jpg', '2021-01-01 01:00:00');
INSERT INTO `posts` VALUES ('14', 'Cha đẻ Firefox liên tục chia sẻ chuyện kinh dị về YouTube để yêu cầu Google minh bạch hơn', 'Chaslot là một cựu kỹ sư của Google, người đã điều tra các đề xuất của YouTube từ bên ngoài, sau khi anh rời công ty vào năm 2013. (YouTube nói rằng anh đã bị sa thải vì các vấn đề liên quan tới hiệu suất làm việc).', 'fire.jpg', '2021-01-01 01:00:00');
INSERT INTO `posts` VALUES ('15', 'Nghỉ việc tập đoàn lớn với mức lương cao để theo đuổi nghề Youtube nhiều bất ổn, vlogger đời đầu Nhật Anh Trắng: “Điều tốt nhất nên làm cho tuổi trẻ là đi làm thuê”', 'Khổ thì rất khổ nhưng sướng lại rất sướng. Sở dĩ, hiện tại, tôi là Youtuber toàn thời gian, hoàn toàn chỉ ở nhà', 'nghiviec.jpg', '2021-01-01 01:00:00');
INSERT INTO `posts` VALUES ('16', 'Vì sao những người không để ý tới tiền lương lại khiến ông chủ sợ nhất?', 'Một số người nói rằng những người không quan tâm đến tiền lương chính là những người mà ông chủ sợ nhất! Kiểu người này, khi thực tế không đáp ứng được kỳ vọng của họ, họ sẽ dứt khoát rời đi, gây ra tổn thất lớn cho công ty. Vậy tại sao càng là những người không quan tâm đến tiền lương', 'luong.png', '2021-01-01 01:00:00');
INSERT INTO `posts` VALUES ('17', 'Sư phụ truyền kì của Gia Cát Lượng, người bồi dưỡng nên một quân sư xuất chúng, từng nói 10 chữ dự đoán chính xác cuộc đời của Khổng Minh', 'Bất luận là từng đọc Tam Quốc hay xem các bộ phim về Tam Quốc, không ai không bị thuyết phục bởi tài thao lược thần kì của Gia Cát Lượng. Gia Cát Lượng sau khi đầu quân cho tập đoàn Lưu Bị luôn hết lòng với Lưu hoàng thúc', 'catluong.jpg', '2021-01-01 01:00:00');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('62', 'boss3', 'user@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '2021-01-01 01:00:00');
INSERT INTO `users` VALUES ('66', 'boss2', 'user1@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '2021-01-01 01:00:00');
INSERT INTO `users` VALUES ('67', 'boss1', 'user1@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '2021-01-01 01:00:00');
INSERT INTO `users` VALUES ('68', 'Nguyen Tat Tien', 'tien.nguyentat.1@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '2021-01-01 01:00:00');
