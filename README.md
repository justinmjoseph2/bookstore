This is a PHP web project that is relatively small in size. However, the CSS used in this project is quite complex, and debugging it might take some time as per your styling preferences. Additionally, the project has not been optimized to fit different screen sizes. 
It is essentially a local bookstore system that enables users to download books for free. The database structure has been provided below, and all necessary validations have been completed.

DATABASE NAME: manybook
Tables:
1. tbl_registration

  CREATE TABLE IF NOT EXISTS `tbl_registration` (
  `user_id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` text NOT NULL,
  `phno` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `user_up_date` date DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `phno` (`phno`),
  UNIQUE KEY `email` (`email`) USING HASH
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

3. pdfs

CREATE TABLE IF NOT EXISTS `pdfs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `author` varchar(20) NOT NULL,
  `description` varchar(5000) DEFAULT NULL,
  `genre` varchar(50) DEFAULT NULL,
  `file_path` varchar(255) NOT NULL,
  `img_path` varchar(255) NOT NULL,
  `publ_date` date NOT NULL,
  `up_date` date NOT NULL,
  `rating` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=95 DEFAULT CHARSET=latin1;

5. contact

  CREATE TABLE IF NOT EXISTS `contact` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `mail` text NOT NULL,
  `message` text DEFAULT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

7. request

CREATE TABLE IF NOT EXISTS `request` (
  `req_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `author` varchar(50) NOT NULL,
  `req_date` date NOT NULL,
  PRIMARY KEY (`req_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;



Create these tables on your local server and copy the entire manybooks folder to the appropriate localhost directory. 
now you are all set to go...
