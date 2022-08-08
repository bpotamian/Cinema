


CREATE TABLE IF NOT EXISTS `tblcategory` (
  `categoryid` int(11) NOT NULL AUTO_INCREMENT,
  `categoryname` varchar(100) NOT NULL,
  PRIMARY KEY (`categoryid`)
) ENGINE=InnoDB  DEFAULT CHARSET=greek AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`categoryid`, `categoryname`) VALUES
(1, 'Δρασης'),
(2, 'Κωμωδια'),
(3, 'Δραμα'),
(4, 'Επιστημονικη Φαντασια');

-- --------------------------------------------------------

--
-- Table structure for table `tblcomment`
--

CREATE TABLE IF NOT EXISTS `tblcomment` (
  `commentid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `movieid` int(11) NOT NULL,
  `comment` text CHARACTER SET greek NOT NULL,
  `commentdate` date NOT NULL,
  PRIMARY KEY (`commentid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblmark`
--

CREATE TABLE IF NOT EXISTS `tblmark` (
  `markid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `movieid` int(11) NOT NULL,
  `mark` int(11) NOT NULL,
  `commentdate` date NOT NULL,
  PRIMARY KEY (`markid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblmovie`
--

CREATE TABLE IF NOT EXISTS `tblmovie` (
  `movieid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) CHARACTER SET greek NOT NULL,
  `category` int(11) NOT NULL,
  `summary` text CHARACTER SET greek NOT NULL,
  `productiondate` date NOT NULL,
  `director` varchar(150) NOT NULL,
  `actors` text CHARACTER SET greek NOT NULL,
  `duration` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`movieid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tblmovie`
--

INSERT INTO `tblmovie` (`movieid`, `title`, `category`, `summary`, `productiondate`, `director`, `actors`, `duration`, `image`) VALUES
(1, 'The BFG', 4, 'A girl named Sophie encounters the Big Friendly Giant who, despite his intimidating appearance, turns out to be a kindhearted soul who is considered an outcast by the other giants because, unlike them, he refuses to eat children.', '2016-06-08', ' Steven Spielberg', ' Mark Rylance, Rebecca Hall, Bill Hader, Jemaine Clement', 117, 'bfg.jpg'),
(2, 'The Purge: Election Year', 1, 'Two years after choosing not to kill the man who killed his son, former police sergeant Barnes has become head of security for Senator Charlene Roan, the front runner in the next Presidential election due to her vow to eliminate the Purge.', '2016-06-07', 'James DeMonaco', ' Elizabeth Mitchell, Frank Grillo, Mykelti Williamson, Kimberly Howe', 105, 'purge.jpg'),
(3, 'The Legend of Tarzan ', 1, 'Tarzan, having acclimated to life in London, is called back to his former home in the jungle to investigate the activities at a mining encampment.', '2016-06-15', 'David Yates', 'Margot Robbie, Alexander Skarsg?rd, Ella Purnell, Samuel L. Jackson', 109, 'tarzan.jpg'),
(4, 'Our Kind of Traitor', 1, 'A couple find themselves lured into a Russian oligarch''s plans to defect are soon positioned between the Russian Mafia and the British Secret Service, neither of whom they can trust.', '2016-06-22', 'Susanna White', ' Ewan McGregor, Stellan Skarsg?rd, Damian Lewis, Naomie Harris', 105, 'traitor.jpg'),
(5, 'The Innocents', 1, 'In 1945 Poland, a young French Red Cross doctor who is sent to assist the survivors of the German camps discovers several nuns in advanced states of pregnancy during a visit to a nearby convent.', '2016-05-20', 'Anne Fontaine', 'Lou de La?ge, Agata Buzek, Agata Kulesza, Vincent Macaigne', 105, 'innocents.jpg'),
(6, 'Life, Animated', 3, 'A coming of age story about a boy and his family who overcame great challenges by turning Disney animated movies into a language to express love, loss, kinship and brotherhood.', '0000-00-00', 'Roger Ross Williams', 'Jonathan Freeman, Gilbert Gottfried, Owen Suskind, Ron Suskind', 107, 'life.jpg'),
(7, 'Satanic ', 4, 'Four friends on their way to Coachella stop off in Los Angeles to tour true-crime occult sites, only to encounter a mysterious young runaway who puts them on a terrifying path to ultimate horror', '2016-06-23', 'Jeffrey G. Hunt', 'Sarah Hyland, Marc Barnes, Justin Chon, Devanny Pinn', 100, 'satanic.jpg'),
(8, 'Finding Dory', 2, 'The friendly-but-forgetful blue tang fish begins a search for her long-lost parents, and everyone learns a few things about the real meaning of family along the way.', '2016-06-15', 'Andrew Stanton | Angus MacLane', 'Ellen DeGeneres, Albert Brooks, Ed O''Neill, Kaitlin Olson', 114, 'dory.jpg'),
(9, 'Central Intelligence', 2, 'After he reunites with an old school pal through Facebook, a mild-mannered accountant is lured into the world of international espionage.\r\n', '2016-06-01', 'Rawson Marshall Thurber', 'Dwayne Johnson, Kevin Hart, Danielle Nicolet, Amy Ryan', 106, 'central.jpg'),
(10, 'X-Men: Apocalypse', 4, 'With the emergence of the world''s first mutant, Apocalypse, the X-Men must unite to defeat his extinction level plan.\r\n', '2016-06-22', 'Bryan Singer', 'James McAvoy, Michael Fassbender, Jennifer Lawrence, Nicholas Hoult', 112, 'xmen.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

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


