<?php
$navigation = array (
    'Link' => array('index.php','gossips.php','noticeboard.php','events.php','Gallery.php','contact.php','addUser.php'),
    'Name' => array('Home','Gossip','Notice','Events','Gallery','Contact','Sign Up'));
?>
<div class="header-wrap">
	<div class="logo">
		<h1>Students Zone</h1>
    </div>
</div><!---header-wrap-End--->

<div class="menu-wrap">
	<div class="menu">
		<ul>
<?php
            //echo "<li><a href=\"".$navigation['Link'][0].">".$navigation['Name'][0]."</a></li>";
     
       for($i = 0; $i<count($navigation['Link']); $i++)
      {
           
           
           echo "<li><a href='".$navigation['Link'][$i]."'>".$navigation['Name'][$i]."</a></li>";
          
                           
       }
    ?>
        </ul>
    </div>
    
    <div class="socia-wrap">
	<div class="socail">
		<ul>
        	<li><a href="#"><img src="images/aim.png" alt="" /></a></li>
        	<li><a href="#"><img src="images/facebook.png" alt="" /></a></li>
            <li><a href="#"><img src="images/twwtter.png" alt="" /></a></li>
            <li><a href="#"><img src="images/linkedin.png" alt="" /></a></li>
		</ul>
	</div>
</div>
</div><!---menu-wrap-End--->