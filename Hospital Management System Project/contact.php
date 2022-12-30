<?php
include_once('hms/include/config.php');
include_once('hms/include/main_header.php');
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$dscrption=$_POST['description'];
$query=mysqli_query($con,"insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
echo "<script>alert('Your information succesfully submitted');</script>";
echo "<script>window.location.href ='contact.php'</script>";

}

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>KCH | Contact us</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
	</div>
		    <div class="clear"> </div>
		   <div class="wrap">
		   	<div class="contact">
		   	<div class="section group">				
				<div class="col span_1_of_3">
					
      			<div class="company_address">
				     	<h2>Hospital Address  :</h2>
						    	<p>500/II, Floor KD Tower,</p>
						   		<p>22-56-2-9 Sit Eastern Road, New Delhi,</p>
						   		<p>India</p>
				   		<p>Phone:(+91) 982 666 4444</p>
				   		<p>Fax: (011) 220 33 666</p>
				 	 	<p>Email: <span>info@kchospital.com</span></p>
				   	
				   </div>
				</div>
				<div class="col span_1_of_2" style="position: absolute; left: 5px; top: 350px; height: 380px; width: 430px;"><img src="images/buildingkch.jpg"></div>	

				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h2>Contact Us</h2>
					    <form name="contactus" method="post">
					    	<div>
						    	<span><label>NAME</label></span>
						    	<span><input type="text" name="fullname" required="true" value=""></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input type="email" name="emailid" required="ture" value=""></span>
						    </div>
						    <div>
						     	<span><label>MOBILE.NO</label></span>
						    	<span><input type="text" name="mobileno" required="true" value=""></span>
						    </div>
						    <div>
						    	<span><label>Description</label></span>
						    	<span><textarea name="description" required="true"> </textarea></span>
						    </div>
						   <div>
						   		<span><input type="submit" name="submit" value="Submit"></span>
						  </div>
					    </form>
				    </div>
  				</div>

  				
  				<div class="col span_2_of_4" style="position: absolute;z-index: -1; top: 280px; right: 100px;"><img src="images/kch10.png" style="opacity: 0.5; height:100%; width: 100%;"></div>			
			  </div>
			  	 <div class="clear"> </div>
	</div>
	<div class="clear"> </div>
			</div>
	      <div class="clear"> </div>
<footer  id="footer-wrap">			
				<div class="footer-top-container">
					<div class="footer-top-contant">
						<div class="footer-nav">
						<a href="index.php"><img class="footer-nav-logo" src="images/logo.png"></a>
						<a href="index.php" style=" position:absolute; color:#989898; top:80px; font-family:'times new roman',sans-serif;">Kidney Care Hospital</a>
						<div class="social-icon">
			  			<a href="https://www.facebook.com" class="fa fa-facebook"></a>
			    		<a href="https://www.twitter.com" class="fa fa-twitter"></a>
			     		<a href="https://www.youtube.com" class="fa fa-youtube"></a>							
			     		<a href="https://www.pinterest.com" class="fa fa-pinterest"></a>
			     		<a href="https://www.rss.com" class="fa fa-rss"></a>
			     		<a href="https://www.googleplus.com" class="fa fa-google"></a>
			   			</div>

						</div>
						<div class="footer-subnav">
							<div class="footer-subnav-contant">
								<div class="dp-child">
                					<div><a href="index.php">Home</a></div>
            					</div>
            					<div class="dp-child">
                					<div><a href="/careers">About Us</a></div>
           						</div>
            					<div class="dp-child">
          	    					<div><a href="contact.php">Contact us</a></div>
            					</div> 
            				</div>
           						<div class="owner">
									<div class="dplogo"><a>Devloped By</a></div> 
									<div class="dplogo"> <a><img src="images/dplogo.png" height="20" width="70"></a></div>
								</div>
								<div class="COPYRIGHT">Copyright@ 2020 KCHOSPITAL.COM All Rights Reserved</div>
							
						</div>
					</div>
				</div>	
		     
		   
		   	<div class="clear"> </div>
		   	</footer> 
		<!--end-wrap-->
	</body>
</html>

