
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
  		<h1>Events </h1>
       
   </div>
  	<div class="content";>
    <img src ="images/fieldtrip1.png" width="10%" height="10%">
        <h2>Field trip (30-Sep)</h2>
        <p>We are hosting an event to take new international students to Leeuwarden.So they can see other parts of Nederlands too.</p>
    <img src =images/sciencefair.png width=10% height=10%>
        <h2>Science Fair (5-Oct)</h2>
        <p>An amazing science fair is going to be held in TU/e for all tyoes of students avery body is invited to learn there. </p>
    <img src ="images/gamenight.jpg" width="10%">
        <h2>Game Night (9-Oct)</h2>
        <p>We are hosting a game night show in stratum for the gaming loving students.</p>
    <img src =images/meet.jpg width=10% height=10%>
        <h2>Meet and Greet (12-Oct)</h2>
        <p>There will be meet and greet oppurtunity with different companies representatives with whichyou ca get knowledge about your future jobs.</p>
    </div>
  </div>	
  </div>
  
   
    
  <div class="clearing"></div>
</div>    
</div><!---page-wrap-End--->
<?php
	require_once './includes/footer.php';
?>