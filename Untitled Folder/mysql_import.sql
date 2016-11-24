
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` tinytext NOT NULL,
  `product_img_name` varchar(60) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_code` (`product_code`)
) AUTO_INCREMENT=1 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `price`) VALUES
(1, 'PD1001', 'Coolpad', '5 Mb front cam-8 Mb rear cam-3000 mAh', 'coolpad.jpg', 10000);
(2, 'PD1002', 'Geonee S6', '8 Mb front cam-16 Mb rear cam-3000 mAh', 'geonees6.jpg', 8000);
(3, 'PD1003', 'Intex', '8 Mb front cam-16 Mb rear cam-4000 mAh', 'intex.jpg', 116000);
(4, 'PD1004', 'Lava', '8 Mb front cam-16 Mb rear cam-3000 mAh', 'lava.JPG', 10200);
(5, 'PD1005', 'Lenovo Vibe', '8 Mb front cam-16 Mb rear cam-3500 mAh', 'lenovo_vibe.jpg', 11900);
(6, 'PD1006', 'Moto-G', '8 Mb front cam-16 Mb rear cam-2000 mAh', 'motog.jpg', 14500);
