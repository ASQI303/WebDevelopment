

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
<title>StudentsZone</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />

</head>
<body>
<?php include 'header.php' ?>


<div class="banner-wrap">
	<div class="banner">
    	<div class="banner-img">
            
            <img src="images/big/fontys11.png" alt=""; class = "img">
            <img src="images/test8.jpg"; class ="img">
            <img src="images/test7.jpg";class = "img">
            
                
            
    </div>
    </div>
    <div class="shadow"></div>
</div><!---banner-wrap-End--->
<div class="page-wrap">
<div class="wrap">
	<div class="box">
    	<div class="panel marRight30">
    		<div class="title">
             	<span><img src="images/icon1.png" alt="icon" /></span>
            	<h1>Latest Gists</h1>
            </div>
            <div class="content">
              <p>Thomas Nite club voted best hangout by Eindhoven student at the latest online poll carried out.</p>
              <div class="button marTop30"><a href="#">More Info</a></div>
            </div>
        </div>
    </div>
    
    <div class="box marRight30">
    	<div class="panel">
    		<div class="title">
             	<span><img src="images/icon2.png" alt="icon" /></span>
            	<h1>Headlines</h1>
          </div>
            <div class="content">
              <p>David win Fontys ICT / Proxy table tennis championshion.</p>
              <div class="button marTop30"><a href="#">More Info</a></div>
            </div>
        </div>
    </div>
    
    <div class="box">
    	<div class="panel">
    		<div class="title">
             	<span><img src="images/icon3.png" alt="icon" /></span>
             	<h1>Notice Board</h1>
    		</div>
            <div class="content">
              <p>List of Fontys student scheduled for company visit has been uploaded on sharepoint.</p>
              <div class="button marTop30"><a href="#">More Info</a></div>
            </div>
        </div>
    </div>
</div>

<div class="wrap2">
	<div class="panel">
    <div class="content">
    	<div class="icon"><img src="images/icon4.png" alt="icon" /></div>
    	<h1>Up to 60% discount on purchases for students!!! Visit www.studentenkorting.nl</h1>
    </div>
    <div class="button"><a href="#">Click here</a></div>
    </div>
</div><!---wrap3-End--->
<div class="clearing"></div>
<div class="wrap3">  
  	<div class="panel marRight30">
  		<div class="title">
  		  <h1>Latest Videos<br />
	      </h1>
  		  <p>&nbsp;</p>
  		</div>
    	<div class="content">
        	<iframe width="300" height="300" src="https://www.youtube.com/embed/rGcDQMxwjbk" frameborder="0" allowfullscreen></iframe>
       	  <p>Fontys ICT General Session with Jared Stein in Colorodo, USA</p>
       	  <p><a href="www.tue.nl">TuE student wins Netherlands innovation price</a></p>
       	  <div class="button marTop20"><a href="#">More Info</a></div>
        </div>
    </div>
    <div class="panel marRight30">
  		<div class="title"><h1>Social Media <br /> Feeds</h1></div>
    	<div class="content">
       	  <div class="icon"><img src="images/icon5.png" alt="icon" /></div>
          <spna>Shina Rambo </spna>
            <p>hey guy anyone down for a cup of coffee?</p>
    	</div>
        <div class="content marTop40">
        	<div class="icon"><img src="images/icon5.png" alt="icon" /></div>
            <spna>Demi Moore</spna>
            <p>Anyone know where i can get cheap bicycles?</p>
        </div>
        <div class="content marTop40">
        	<div class="icon"><img src="images/icon5.png" alt="icon" /></div>
            <spna> Luther Agasi</spna>
            <p>Holy moly! how did i get here?</p>
            <div class="button marTop30"><a href="#">More Info</a></div>
        </div>
    </div>
    <div class="panel">
  		<div class="title"><h1>Upcoming Events/<br />Calendar</h1></div>
    	<div class="content">
            <ul>
            <iframe src="https://calendar.google.com/calendar/embed?height=200&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=umoduke%40gmail.com&amp;color=%2329527A&amp;ctz=Europe%2FAmsterdam" style="border-width:0" width="210" height="200" frameborder="0" scrolling="no"></iframe>
            </ul>
            <div class="button marTop30"><a href="#">More Info</a></div>
        </div>
    </div>
  <div class="clearing"></div>
</div>    
</div><!---page-wrap-End--->

<?php
	require_once './footer.php';
?>

    
    
  
