CREATE TABLE `members` (
  `memberID` varchar(12) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type`  int(2) NOT NULL,
  `resetToken` varchar(255) DEFAULT NULL,
  `resetComplete` varchar(3) DEFAULT 'No',
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

CREATE TABLE `esite` (
  `eId` int(11) NOT NULL AUTO_INCREMENT,
  `eName` varchar(255) NOT NULL,
  `eFile` varchar(255) NOT NULL,
  `username` varchar(200) NOT NULL,
  PRIMARY KEY (`eId`)
  )
  ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;


CREATE TABLE `gallery` (
  `picId` int(11) NOT NULL AUTO_INCREMENT,
  `picName` varchar(255) NOT NULL,
  `picPath` varchar(255) NOT NULL,
  `username` varchar(200) NOT NULL,
  PRIMARY KEY (`picId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

CREATE TABLE `job` (
  `jobId` int(11) NOT NULL AUTO_INCREMENT,
  `jobName` varchar(255) NOT NULL,
  `jobPath` varchar(255) NOT NULL,
  `username` varchar(200) NOT NULL,
  PRIMARY KEY (`jobId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

CREATE TABLE `event`(
`eventID` int(11) NOT NULL AUTO_INCREMENT,
`eventName` varchar(200) NOT NULL,
`eventpath` varchar(200) NOT NULL,
`year` int(30) NOT NULL,
`month` int(30) NOT NULL,
`dates` int(30) NOT NULL,
`username` varchar(200) NOT NULL,
PRIMARY KEY (`eventId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;