drop database if exists test;
create database test ;

use test;


CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `product_price` float NOT NULL,
  `product_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_quantity`) VALUES
(1, 'Car', 10, 11),
(2, 'Accessories', 30, 31),
(3, 'Bike', 189, 21),
(4, 'Bike', 189, 21),
(7, 'Bike', 189, 21),
(8, 'Bike', 189, 21);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;