  CREATE DATABASE IF NOT EXISTS test;
  USE test;


  CREATE TABLE users (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
  );
  INSERT INTO `USERS` (`firstname`, `lastname`, `email`, `username` , `password`) VALUES ('f_NAME','l_Name','bob@bob.com','FIRST','FIRST');
  INSERT INTO `USERS` (`firstname`, `lastname`, `email`, `username` , `password`) VALUES ('Sec','Sec_Name','bob@bob.com','SECOND','SECOND');

    SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
    SET AUTOCOMMIT = 0;
    START TRANSACTION;
    SET time_zone = "+00:00";

    CREATE TABLE `tblproducts` (
      `itemid` int(11) NOT NULL,
      `itemname` varchar(255) NOT NULL,
      `itemimage` varchar(255) NOT NULL,
      `itemprice` double(10,2) NOT NULL
    ) ENGINE=MyISAM DEFAULT CHARSET=latin1;

    INSERT INTO `tblproducts` (`itemid`, `itemname`, `itemimage`, `itemprice`) VALUES
    (1, 'Apples', '1.jpg', 11),
    (2, 'Oranges', '2.jpg', 45),
    (3, 'Bananas', '3.jpg', 32),
    (10, 'Grapes', '4.jpg', 12);

    ALTER TABLE `tblproducts`
      ADD PRIMARY KEY (`itemid`);

      ALTER TABLE `tblproducts`
        MODIFY `itemid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;