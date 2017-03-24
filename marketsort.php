<?php
$host = "localhost";
$user = "id1044514_enggprojects3";
$password = "superbatwomen";
$db = "id1044514_agridoctor";

$conn = new mysqli($host, $user, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if (isset($_POST['submit'])){

$product = $conn->real_escape_string($_POST['product']);
$dist = $conn->real_escape_string($_POST['dist']);

$sql = $conn->query("SELECT * FROM market WHERE product='$product' and District='$dist'");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <style>
table{
     border: 3px solid black;
	padding: 10px
	
}
 .td1 
 {  
    padding-top: 5px;
    padding-right: 40px;
    padding-bottom: 5px;
    padding-left: 40px;
	 border: 2px solid black;
	
	
 }

.tdRed{
color:black;
padding-top: 5px;
    padding-right: 40px;
    padding-bottom: 10px;
    padding-left: 5px;
	 border: 2px solid black;
	
}
.tdgreen
{
	color:green;
}
</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AgriDr</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href="css/prettyPhoto.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" />	
    
  </head>
  <body>
	<header>		
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="navigation">
				<div class="container">					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
							<a href="index.html"><img src="images/logo1.png"></a>
						</div>
					</div>
					
					<div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="index.html">Home</a></li>
								<li role="presentation"><a href="about.html">About Us</a></li>
								<li role="presentation"><a href="services.html">Tutorials</a></li>								
								<li role="presentation"><a href="portfolio.html" class="active">Donation</a></li>
							
								<li role="presentation"><a href="contact.html">ChatBox</a></li>

<li role="presentation">
<br>
<div id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'hi,mr', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</li>						
							</ul>
						</div>
					</div>						
				</div>
			</div>	
		</nav>		
	</header>
	
	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="index.html">Home</a></li>
				<li><a href="market1.php">Market</li>			
			</div>		
			
		</div>
	</div>
	<br>
	<br>
	
	<div class="container-fluid text-center">
  <div class="row content">
	<div class="col-sm-2 sidenav" style="padding top: 80px; padding-height: 240px; height: 240px;">
	
	</div>
  <div class="col-sm-8 ">
<div class="container-fluid">
<div class="container-fluid text-left">
  

 <?php 

if ($sql->num_rows > 0) {
  echo"<table class=td1>
   <thead class=tdgreen>
      <tr >
       <th class=td1>ID</th>
       <th class=td1>Product</th>
        <th class=td1>District</th>
		 <th class=td1>Address</th>
			 <th class=td1>Contact Number</th>
 </tr>
    </thead>";
    // output data of each row
   while($row =mysqli_fetch_array($sql, MYSQLI_ASSOC)) {
		 echo"<tbody>";
      echo "<tr >
        <td  class='tdRed'>".$row["Id"]."</td>
       <td class='tdRed'>".$row["product"]."</td>
	   <td class='tdRed'>".$row["District"]."</td>
	     <td class='tdRed'>".$row["adresss"]."</td>
	   <td class='tdRed'>".$row["Contactno"]."</td>";
		
		
    echo "</tr>";
      
	  
    echo"</tbody>";
       
    }
    echo "</table>";
} 

else {
    echo "0 results";
}
}
$conn->close();
?>
 
    
  </table>
</div>
    </div>
	</div>
   </div>
   </div>
   <br>
	

	<footer>
		<div class="footer">
			<div class="container">
				<div class="social-icon">
					<div class="col-md-4">
						<ul class="social-network">
							<li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
						</ul>	
					</div>
				</div>
				
				<div class="col-md-4 col-md-offset-4">
					<div class="copyright">
						.
                        <div class="credits">
                            <!-- 
                                All the links in the footer should remain intact. 
                                You can delete the links only if you purchased the pro version.
                                Licensing information: https://bootstrapmade.com/license/
                                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Company
                            -->
                            <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Big oh Group (Algorihm 3.0)</a> by <a href="https://bootstrapmade.com/">Big oh Group</a>
                        </div>
					</div>
				</div>						
			</div>
			
			<div class="pull-right">
				<a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
			</div>		
		</div>
	</footer>

	
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-2.1.1.min.js"></script>	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>  
	<script src="js/wow.min.js"></script>
	<script src="js/functions.js"></script>
	
</body>
</html>