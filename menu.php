<?php
$page = basename($_SERVER['PHP_SELF']);
?>

<div>
<ul id=navigation class=slimmenu>
<li style=line-height:0;spacing:0;margin:0><a style=padding:0;margin-right:5px href=index.php id=bottom></a></li>
<li><a <?php if ($page=="index.php"){ echo 'class=active';}?> data-scroll>COMOSA2025</a></li>
<li><a  href=index.php data-scroll>Call For Papers</a></li>	
<li><a <?php if ($page=="organizers.php"){ echo 'class=active';}?> href=organizers.php data-scroll>Organizations </a></li>
<li><a <?php if ($page=="keynote.php"){ echo 'class=active';}?> href=keynote.php data-scroll>Keynote</a></li>
<li><a <?php if ($page=="cameraready.php"){ echo 'class=active';}?> href=cameraready.php data-scroll>Camera Ready</a></li>
<li><a <?php if ($page=="programs.php"){ echo "class=active";}?> href=programs.php data-scroll>Programs</a></li>
<li><a <?php if ($page=="acceptedpapers.php"){ echo 'class=active';}?> href=acceptedpapers.php data-scroll>Accepted Papers</a></li>
<li><a <?php if ($page=="registration.php"){ echo 'class=active';}?> href=registration.php data-scroll>Registration</a></li>
<li><a <?php if ($page=="venue.php"){ echo 'class=active';}?> href=venue.php data-scroll>Conference Venue</a></li>
<li><a <?php if ($page=="contact.php"){ echo 'class=active';}?> href=contact.php data-scroll>Contact</a></li>
</ul>
</div>
