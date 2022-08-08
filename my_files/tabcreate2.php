<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-7" />
</head>
<body>
  <?php
  include 'dbconnect.php';
    $sql = "
CREATE TABLE IF NOT EXISTS `tblcomment` (
  `commentid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `movieid` int(11) NOT NULL,
  `comment` text CHARACTER SET greek NOT NULL,
  `commentdate` date NOT NULL,
  PRIMARY KEY (`commentid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
	"; /* query */
    $conn->query($sql);
	
	    $sql = "
CREATE TABLE IF NOT EXISTS `tblmark` (
  `markid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `movieid` int(11) NOT NULL,
  `mark` int(11) NOT NULL,
  `commentdate` date NOT NULL,
  PRIMARY KEY (`markid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
	"; /* query */
    $conn->query($sql);
	
	    $sql = "
CREATE TABLE IF NOT EXISTS `tbluser` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) CHARACTER SET greek NOT NULL,
  `lname` varchar(100) CHARACTER SET greek NOT NULL,
  `job` varchar(100) CHARACTER SET greek NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(100) CHARACTER SET greek NOT NULL,
  `username` varchar(100) CHARACTER SET greek NOT NULL,
  `password` varchar(100) CHARACTER SET greek NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
	"; /* query */
    $conn->query($sql);	
    $conn->close();
  ?>
</body>
</html>
