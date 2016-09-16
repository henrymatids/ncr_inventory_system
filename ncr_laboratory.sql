--
-- Database: `ncr_laboratory`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `brand_model` varchar(30) NOT NULL,
  `date_acquired` int(11) NOT NULL,
  `remarks` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `qty`, `item_name`, `brand_model`, `date_acquired`, `remarks`) VALUES
(1, 11, 'keyboard', 'Dell PS/2', 2009, 'due for TDA(TNS)'),
(2, 20, 'mouse', 'A4Tech', 2020, 'does not exists');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
