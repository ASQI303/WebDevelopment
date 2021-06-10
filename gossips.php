
<?php 
    $lamo = 'Events';
if(isset($_POST['input']) )
{
  include("connection.php");
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>StudentZone: <?php echo "$lamo" ?></title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />

</head>
<body>

<?php include './includes/header.php' ?>
<div class="page-wrap">
<div class="wrap3">  
  <div class=" leftcol">
  <div class="panel">
  	<div class="title">
  		<h1>Gossips </h1>
        <span>Student TU/e found dead in spacebox.</span>
    </div>
  	<div class="content">
        <p><imp>A 22-year-old TU/e student was found dead in one of the spaceboxes at the campus last Wednesday afternoon. The cause of his death has not been revealed</imp></p>
        <p>Bibin Isac was a master student of Embedded Systems.
        Isac Bibin was born in Oman. He studied electrical engineering at Vellore Institute in India. Bibin took the master Embedded Systems at TU/e since February this year.
        </p>
        
        <p><span><img src="images/Gossip.jpg"></span> </p>
        <p>His death comes as a big shock to his fellow students and the teachers of the master Embedded Systems and to the departments of Mathematics and Computer Science and Electrical Engineering. They remember Bibin "as a social, calm and hardworking young man who loved music a lot, and he will be missed dearly".</p>
        
        
        <p>In room MF3.140 on the third floor of MetaForum, a condolence book is available to anybody who would like to leave a personal message. Online the condolence registry can be found here.</p>
        
        <p><a href="www.cursor.tue.nl"> Source: www.cursor.tue.nl</a></p>
    </div>
  </div>	
  </div>
  
  <div class="rightcol">
  	<div class="panel">
  		<div class="title">
  		  <h1>Social Media Feeds</h1>
  		</div>
    	<div class="content">
        	<div class="icon"><img src="images/icon5.png" alt="icon" /></div>
            <spna>Chris Fernando </spna>
            <p>what a loss?...#RIP Biblin</p>
    	</div>
        <div class="content marTop40">
        	<div class="icon"><img src="images/icon5.png" alt="icon" /></div>
            <spna>Dona Jona </spna>
            <p>Arsenal win chelshit#EPLhaha</p>
        </div>
        <div class="content marTop40">
        	<div class="icon"><img src="images/icon5.png" alt="icon" /></div>
            <spna>Vesta Gadama</spna>
            <p>Philips career fair commences 4th of November</p>
            <div class="button marTop30"><a href="#">More Info</a></div>
        </div>
    </div>
  	<div class="panel marTop40">
  		<div class="title">
  		  <h1>Justin Bieber to perform at Fontys purple week</h1>
  		</div>
    	<div class="content">
    	  <p>The stage has been set to Justin beiber .</p>
    	  <ul>
           	<li><a href="#">-TU Eindhoven opens information point for Turkish students and staff</a></li>
                <li><a href="#">-Tue lunches independent news site</a></li>
                <li><a href="#">-Shell CEO: â€œWomen often look relieved when they hear that I have a life apart from my career as wellâ€</a></li>
                <li><a href="#">- Eindhoven students open â€˜worldâ€™s firstâ€™ drone cafe</a></li>
                <li class="bg-bottom"><a href="#">-Eindhoven wins design competition at Formula Student</a></li>
            </ul>
            <div class="button marTop30"><a href="#">More Info</a></div>
        </div>
    </div>
  </div>  
    
  <div class="clearing"></div>
</div>    
</div><!---page-wrap-End--->
<div class="footer-wrap">
  <div class="wrap">
    <div class="panel marRight30">
      <div class="title">
        <h1>Testimoniala</h1>
      </div>
      <div class="content">
        <div class="testimonials"> This website life much easier for me as a student as i have been able to overcome culture shock easily </div>
        <span>- Charlie Bate</span></div>
    </div>
    <div class="panel marRight30">
      <div class="title">
        <h1>Newsletter</h1>
      </div>
      <div class="content">
        <ul>
           <form name ="form1" action="gossips.php" method="post">
         <li>
            <input name="input" type="text" id="email"  class="input-newsletter"/>
          </li>
        <li> <input type="submit" class="button" id="validate" value="Signup" onclick="ValidateEmail(document.form1.input)" /></li>
          
            </form>
        </ul>
        <p id="msg">Subscribe to get all the latest student news and gossips with your email</p>
        <span><a href="#">Unsubscribe</a></span> </div>
        <script src="email_validation.js"></script>
    </div>
    <div class="panel">
      <div class="title">
        <h1>Contact us </h1>
      </div>
      <div class="cotact">
        <ul>
          <li><img src="images/icon6.png" alt="" />(000) 888 888888</li>
          <li><img src="images/icon7.png" /><a href="mailto:info@companyname.com">info@studentszone.com</a></li>
          <li><img src="images/icon8.png" alt="" />Ahmed Saed, Umo Duke</li>
        </ul>
      </div>
    </div>
    <div class="clearing"></div>
  </div>
</div><!---footer-wrap--->
<?php
	require_once './includes/footer.php';
?>