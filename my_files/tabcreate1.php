<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-7" />
</head>
<body>
  <?php
  include 'dbconnect.php';
    $sql = "
	CREATE TABLE IF NOT EXISTS `tblcategory` (
  `categoryid` int(11) NOT NULL AUTO_INCREMENT,
  `categoryname` varchar(100) NOT NULL,
  PRIMARY KEY (`categoryid`)
) ENGINE=InnoDB  DEFAULT CHARSET=greek AUTO_INCREMENT=5 ;
	"; /* query */
    $conn->query($sql);
	
	    $sql = "
INSERT INTO `tblcategory` (`categoryid`, `categoryname`) VALUES
(1, 'Δρασης'),
(2, 'Κωμωδια'),
(3, 'Δραμα'),
(4, 'Επιστημονικη Φαντασια');
	"; /* query */
    $conn->query($sql);
    $conn->close();
  ?>
</body>
</html>
