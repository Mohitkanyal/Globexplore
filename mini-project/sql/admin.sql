CREATE TABLE `packages` (
  `PackageId` int(11) NOT NULL AUTO_INCREMENT,
  `PackageName` varchar(200) DEFAULT NULL,
  `PackagePrice` int(11) DEFAULT NULL,
  `PackageFetures` varchar(255) DEFAULT NULL,
  `PackageDetails` mediumtext DEFAULT NULL,
  `PackageBestTime` mediumtext DEFAULT NULL,
  `PackageTtd1Name` varchar(100) DEFAULT NULL,
  `PackageTtd1Image` varchar(100) DEFAULT NULL,
  `PackageDay1` mediumtext DEFAULT NULL,
  `PackageDay2` mediumtext DEFAULT NULL,
  `PackageDay3` mediumtext DEFAULT NULL,
  `PackageDay4` mediumtext DEFAULT NULL,
  `PackageDay5` mediumtext DEFAULT NULL,
  `PackageTtd2Name` varchar(100) DEFAULT NULL,
  `PackageTtd2Image` varchar(100) DEFAULT NULL,
  `Package2Day1` mediumtext DEFAULT NULL,
  `Package2Day2` mediumtext DEFAULT NULL,
  `Package2Day3` mediumtext DEFAULT NULL,
  `Package2Day4` mediumtext DEFAULT NULL,
  `Package2Day5` mediumtext DEFAULT NULL,
  `PackageBgImage` varchar(100) DEFAULT NULL,
  `PackageImage` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`PackageId`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;







CREATE TABLE `international` (
  `PackageId` int(11) NOT NULL AUTO_INCREMENT,
  `PackageName` varchar(200) DEFAULT NULL,
  `PackagePrice` int(11) DEFAULT NULL,
  `PackageFetures` varchar(255) DEFAULT NULL,
  `PackageDetails` mediumtext DEFAULT NULL,
  `PackageBestTime` mediumtext DEFAULT NULL,
  `PackageTtd1Name` varchar(100) DEFAULT NULL,
  `PackageTtd1Image` varchar(100) DEFAULT NULL,
   `PackageDay1` mediumtext DEFAULT NULL,
  `PackageDay2` mediumtext DEFAULT NULL,
  `PackageDay3` mediumtext DEFAULT NULL,
  `PackageDay4` mediumtext DEFAULT NULL,
  `PackageDay5` mediumtext DEFAULT NULL,
  `PackageTtd2Name` varchar(100) DEFAULT NULL,
  `PackageTtd2Image` varchar(100) DEFAULT NULL,
   `Package2Day1` mediumtext DEFAULT NULL,
  `Package2Day2` mediumtext DEFAULT NULL,
  `Package2Day3` mediumtext DEFAULT NULL,
  `Package2Day4` mediumtext DEFAULT NULL,
  `Package2Day5` mediumtext DEFAULT NULL,
  `PackageBgImage` varchar(100) DEFAULT NULL,
  `PackageImage` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`PackageId`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;





-- admin user details


CREATE TABLE `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `password` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci