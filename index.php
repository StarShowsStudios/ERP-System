<!DOCTYPE html>
<html>
<head>
<title>Project Loader - StarShows Studio</title>
</head>
<body>

<h1>Apache loaded successfully.</h1>
<h2>StarShows Studios Web Server.</h2>

<a href="/erp/aibwp/"><div class="BigButton"><h1> Click here to load the ERP system. </h1></div></a>

<a href="/Project/"><div class="BigButton"><h1> Choose a project by directory.</h1></div></a>
<p> Or quick load a project </p>

<select onchange="location = this.options[this.selectedIndex].value;">
	<option> Please select an option </option>
	<option value="/erp/aibwp/">ERP System</option>
	<option value="/Project/AgeCalc/index.php">Age Calculator</option>
	<option value="/project/PortfolioSite/index.php">Portfolio Website</option>
	




</select>


</body>


<?php
// This page was written by Avi Tannenbaum.

// Include this page to display credits at any page.

echo '<div class="FooterClass"><br> <br> Copyrite - All rites reserved to Avi Tannenbaum 2016 </div>';

?>
