
<?php
session_start();
include 'dbconnect.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-7" />
<title>Ηλεκτρονική Ταινιοθήκη</title>
<meta name="keywords" content="Ταινίες, πληροφορίες για ταινίες" />
<meta name="description" content="Ιστοσελίδα με πληροφορίες για ταινία" />
<link href="style.css" rel="stylesheet" type="text/css" />
 
 		<script type="text/javascript">

<!-- 


function checklog() 
{      

	error="";    

     	if (document.newform.name.value == "") 
		 error+="Username, ";
     	if (document.newform.pwd.value == "") 
		 error+="password, ";
 
	if (error!="")
	{	error="Παρακαλώ εισάγετε τιμή σε"+error;
            alert(error); 
		return false;
	}
	else
		return true;

} 


//-->
</script>


</head>
<body>

<div id="ergasia_wrapper">

	<div id="ergasia_header">
    
    	<div id="site_title"> 
		</div>
        
        <div id="ergasia_menu" class="ddsmoothmenu">
            <ul>
              	<li><a href="index.php" >Αρχική</a></li>
          		<li><a href="register.php">Εγγραφή</a></li>
				<li><a href="login.php" class="selected">Είσοδος</a></li>
            </ul>
            <br style="clear: left" />
        </div> <!-- end of ergasia_menu -->
        
    </div> <!-- end of header -->

    
    <div id="ergasia_main">
    	<div class="col_fw">
        	<div class="col_w660 float_l">
            	<h2>Ηλεκτρονική Ταινιοθήκη</h2>
                <div class="cleaner h20"></div>
				<h4>Είσοδος Χρήστη</h4>
                <div class="cleaner h20"></div>
                <p>
		<FORM name="newform" onsubmit="return checklog();" action="loginuser.php" method="post" >
                  			<TABLE class=Data width="100%" border=0 >
                    				<TBODY>
                    				<TR>
                      					<TD class=bt colSpan=2>Username:
								</TD>
							</TR>
                    				<TR>
                      					<TD colSpan=2><INPUT id="name" name="name" value="" size="20">
								</TD>
							</TR>
                 				<TR>
                      					<TD class=bt colSpan=2>Password:</TD></TR>
                   				<TR>
                      					<TD colSpan=2>
                      					<INPUT type="password" id="pwd" name="pwd" size="40" value="">
								</TD>
							</TR>
							
                    				<TR>
                      					<TD align="left" colSpan=2><INPUT type="submit" height=32 width=103 value="Εισοδος">
								</TD>
							</TR>
	
							</TBODY>
						</TABLE>
						</FORM>
				</p>
                <div class="cleaner h20"></div>

            </div>

            <div class="cleaner"></div>
		</div>

        <div class="cleaner"></div>
        </div>
    </div>
    
    <div class="cleaner"></div>

<div id="ergasia_footer_wrapper">
    <div id="ergasia_footer">
        Copyright © 2016  <a href="#" target="_parent">Ηλεκτρονική Ταινιοθήκη</a> | 
        Designed by <a href="#" target="_parent">Ηλεκτρονική Ταινιοθήκη</a>
        <div class="cleaner"></div>
    </div>
</div> 
  
</body>
</html>