<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type = "text/javascript" >
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
</script>
<!--<script language="Javascript" type="text/javascript">
var stateObject = {
    "1": {
	"1st": ["icp", "math1", "phy1","eca", "pnc"] ,
    "2nd": ["phy2", "ds", "dismaths", "bedc", "gncp"]
	},
	"2":{
	"3rd": ["dbms", "de", "eco", "maths2", "oops", "unix"],
	"4th": ["foa", "evs", "fm", "maths4", "mpc", "mml", "ss"]
			},
	"3":{
	"5th": ["os", "cs", "se", "sli", "toc", "webtech"],
	"6th": ["pm", "cn", "cd", "ms","snplab"]
			},
	"4":{
	"7th": ["hss", "oops", "phy"],
	"8th": ["icp", "training", "phy"]
			}
			}
			
window.onload = function () {
    var year = document.getElementById("year"),
        sem = document.getElementById("sem"),
        subject = document.getElementById("subject");
    for (var state in stateObject) {
        year.options[year.options.length] = new Option(state, state, state, state);
    }
    year.onchange = function () {
        sem.length = 1; // remove all options bar first
        subject.length = 1; // remove all options bar first
        if (this.selectedIndex < 1) return; // done   
        for (var county in stateObject[this.value]) {
            sem.options[sem.options.length] = new Option(county, county);
        }
    }
    year.onchange(); // reset in case page is reloaded
    sem.onchange = function () {
        subject.length = 1; // remove all options bar first
        if (this.selectedIndex < 1) return; // done   
        var cities = stateObject[year.value][this.value];
        for (var i = 0; i < cities.length; i++) {
            subject.options[subject.options.length] = new Option(cities[i], cities[i], cities[i], cities[i], cities[i], cities[i], cities[i]);
        }
    }
}
</script>-->
<meta charset="UTF-8" />
<link rel="stylesheet" type="text/css" href="jquery.jscrollpane.custom.css" />
<style>
/* Content Flip Style */
.bb-bookblock {
	width: 400px;
	height: 300px;
	position: relative;
	background: #fff;
	z-index: 100;
}

.bb-page {
	width: 50%;
	height: 100%;
	left: 50%;
	position: absolute;

	-webkit-transform-style: preserve-3d;
	-moz-transform-style: preserve-3d;
	-o-transform-style: preserve-3d;
	-ms-transform-style: preserve-3d;
	transform-style: preserve-3d;

	-webkit-transform-origin: left center;
	-moz-transform-origin: left center;
	-o-transform-origin: left center;
	-ms-transform-origin: left center;
	transform-origin: left center;
}

.bb-page > div,
.bb-outer,
.bb-content {
	position: absolute;
	height: 100%;
	top: 0;
	left: 0;
}

.bb-content {
	background: #fff;
}

.bb-inner {
	position: relative;
	width: 100%;
	height: 100%;
}

.bb-overlay, .bb-outer {
	-webkit-backface-visibility: hidden;
	-moz-backface-visibility: hidden;
	-o-backface-visibility: hidden;
	-ms-backface-visibility: hidden;
	backface-visibility: hidden;
}

.bb-page > div {
	width: 100%;
	-webkit-transform-style: preserve-3d;
	-moz-transform-style: preserve-3d;
	-o-transform-style: preserve-3d;
	-ms-transform-style: preserve-3d;
	transform-style: preserve-3d;

	-webkit-backface-visibility: hidden;
	-moz-backface-visibility: hidden;
	-o-backface-visibility: hidden;
	-ms-backface-visibility: hidden;
	backface-visibility: hidden;
}

.bb-back {
	-webkit-transform: rotateY(-180deg);
	-moz-transform: rotateY(-180deg);
	-o-transform: rotateY(-180deg);
	-ms-transform: rotateY(-180deg);
	transform: rotateY(-180deg);
}

.bb-outer {
	width: 100%;
	overflow: hidden;
	z-index: 999;
}

.bb-overlay, 
.bb-flipoverlay {
	background-color: rgba(0, 0, 0, 0.7);
	position: absolute;
	top: 0px;
	left: 0px;
	width: 100%;
	height: 100%;
	opacity: 0;
	z-index: 1000;
}

.bb-flipoverlay {
	background-color: rgba(0, 0, 0, 0.2);
}

.bb-bookblock > div.bb-page:first-child,
.bb-bookblock > div.bb-page:first-child .bb-back {
	-webkit-transform: rotateY(180deg);
	-moz-transform: rotateY(180deg);
	-o-transform: rotateY(180deg);
	-ms-transform: rotateY(180deg);
	transform: rotateY(180deg);
}

.js .bb-item {
	width: 100%;
	height: 100%;
	position: absolute;
	top: 0;
	left: 0;
	display: none;
	background: #fff;
}
/*@import url(http://fonts.googleapis.com/css?family=Lato:300,400,700);*/

html { height: 100%; }

*,
*:after,
*:before {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	padding: 0;
	margin: 0;
}

body {
	font-family:Courier New;
	background: #990;
	font-weight: 700;
	font-size: 100%;
	color: #990;
	height: 100%;
}

.js body {
	overflow: hidden;
}

a {
	color: #666;
	text-decoration: none;
	outline: none;
}

a:hover {
	color: #990;
}

.container,
.bb-custom-wrapper,
.bb-bookblock {
	width: 100%;
	height: 100%;
}

.container {
	position: relative;
	left: 0px;
	-webkit-transition: left 0.3s ease-in-out;
	-o-transition: left 0.3s ease-in-out;
	transition: left 0.3s ease-in-out;
}

.slideRight {
	left: 240px;
}

.no-js .container {
	padding-left: 240px;
}

.menu-panel {
	background: #666;
	width: 240px;
	height: 100%;
	position: fixed;
	z-index: 1000;
	top: 0;
	left: 0;
	text-shadow: 0 1px 1px rgba(0,0,0,0.1);
}

.js .menu-panel {
	position: absolute;
	left: -240px;
}

.menu-panel h3 {
	font-size: 1.8em;
	padding: 20px;
	font-weight: 300;
	color: #fff;
	box-shadow: inset 0 -1px 0 rgba(0,0,0,0.05);
} 

.menu-toc {
	list-style: none;
}

.menu-toc li a {
	display: block;
	color: #fff;
	font-size: 1.1em;
	line-height: 3.5;
	padding: 0 20px;
	cursor: pointer;
	background: #666;
	border-bottom: 1px solid #fff;
}

.menu-toc li a:hover,
.menu-toc li.menu-toc-current a{
	background: #990;
}

.menu-panel div {
	margin-top: 20px;
}

.menu-panel div a {
	text-transform: uppercase;
	font-size: 0.7em;
	line-height: 1;
	padding: 5px 20px;
	display: block;
	border: none;
	color: #bc0b0b;
	letter-spacing: 1px;
	font-weight: 800;
	text-shadow: 0 1px rgba(255,255,255,0.2);
} 

.menu-panel div a:hover {
	background: inherit;
	color: #fff;
	text-shadow: none;
}

.bb-custom-wrapper nav {
	top: 20px;
	left: 60px;
	position: absolute;
	z-index: 1000;
}

.bb-custom-wrapper nav span,
.menu-button {
	position: absolute;
	width: 32px;
	height: 32px;
	top: 0;
	left: 0;
	background: #666;
	border-radius: 50%;
	color: #fff;
	line-height: 30px;
	text-align: center;
	speak: none;
	font-weight: bold;
	cursor: pointer;
}

.bb-custom-wrapper nav span:hover,
.menu-button:hover {
	background: #990;
}

.bb-custom-wrapper nav span:last-child {
	left: 40px;
}

.menu-button {
	z-index: 1000;
	left: 20px;
	top: 20px;
	text-indent: -9000px;
}

.menu-button:after {
	position: absolute;
	content: '';
	width: 50%;
	height: 2px;
	background: #fff;
	top: 50%;
	margin-top: -1px;
	left: 25%;
	box-shadow: 0 -4px #fff, 0 4px #fff;
}

.no-js .bb-custom-wrapper nav span,
.no-js .menu-button {
	display: none;
}

.js .content {
	position: absolute;
	top: 60px;
	left: 0;
	width: 100%;
	bottom: 50px;
	overflow: hidden;
	-webkit-font-smoothing: subpixel-antialiased;
}

.scroller {
	padding: 10px 5% 10px 5%;
}

.js .content:before,
.js .content:after {
	content: '';
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 20px;
	z-index: 100;
	pointer-events: none;
	background: -webkit-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(255,255,255,0) 100%);
	background: -moz-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(255,255,255,0) 100%);
	background: -o-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(255,255,255,0) 100%);
	background: linear-gradient(to bottom, rgba(255,255,255,1) 0%, rgba(255,255,255,0) 100%);
}

.js .content:after {
	top: auto;
	bottom: 0;
	background: -webkit-linear-gradient(bottom, rgba(255,255,255,1) 0%, rgba(255,255,255,0) 100%);
	background: -moz-linear-gradient(bottom, rgba(255,255,255,1) 0%, rgba(255,255,255,0) 100%);
	background: -o-linear-gradient(bottom, rgba(255,255,255,1) 0%, rgba(255,255,255,0) 100%);
	background: linear-gradient(to top, rgba(255,255,255,1) 0%, rgba(255,255,255,0) 100%);
}

.content h2 {
	font-weight: 300;
	font-size: 4em;
	padding: 0 0 10px;
	color: #333;
	margin: 0 1% 40px;
	text-align: left;
	box-shadow: 0 10px 0 rgba(0,0,0,0.02);
	text-shadow: 0 0 2px #fff;
}

.no-js .content h2 {
	padding: 40px 1% 20px;
}

.content p {
	font-size: 1.2em;
	line-height: 1.6;
	font-weight: 300;
	padding: 5px 8%;
	text-align: justify;
}

@media screen and (max-width: 800px){
	.no-js .menu-panel {
		display: none;
	}

	.no-js .container {
		padding: 0;
	}
}

@media screen and (max-width: 400px){
	.menu-panel,
	.content {
		font-size: 75%;
	}
}
</style>
<script src="modernizr.custom.79639.js"></script>
</head>
<body>
<div id="container" class="container">	

			<div class="menu-panel">
			<br>
<br>
<br>
				<ul id="menu-toc" class="menu-toc">
					<li class="menu-toc-current"> <a href="#item1">NEW ASSIGNMENTS</a></li>
                 
                    
					<li><a href="#item2">SUBMIT ASSIGNMENTS</a></li>
					<li><a href="#item3">NOTICE</a></li>
					<li><a href="#item4">LOG OUT</a></li>
            
				</ul>
				
			</div>
<div class="bb-custom-wrapper">
				<div id="bb-bookblock" class="bb-bookblock">
					<div class="bb-item" id="item1">
						<div class="content">
							<div class="scroller">
								<h2>NEW ASSIGNMENTS</h2>
								<?php include ('stuup.php'); ?>
					</div>
						</div>
					</div>
					<div class="bb-item" id="item2">
						<div class="content">
							<div class="scroller">
								<h2>SUBMITTING ASSIGNMENTS</h2><!--<form action="add_file.php" method="post" enctype="multipart/form-data">-->
     <form action="addfilestu.php" method="post" enctype="multipart/form-data">
SUBJECT: <input type="text" name = "subject" placeholder="subject" required="required"><BR>
    <BR>
    <BR>
    UPLOAD:    <input type="file" name="uploaded_file" required="required"><br><BR>
        <input type="submit" value="Upload file"><br><br>
       </form>
	</div></div></div>
				<div class="bb-item" id="item3">
						<div class="content">
							<div class="scroller">
								<h2>ANY notice</h2>
								<p>any notice posted by the teacher.</p>
                                <?php  include ('noticesmain.php') ?>
</div></div></div>
				
                <div class="bb-item" id="item4">
						<div class="content">
							<div class="scroller">
								<h2>ARE YOU SURE?</h2>
                                 <form action="logout.php">
                            <button type="submit" value="logout" > logout </button></form>
</div></div></div>
					
                    </div>			<nav>
					<span id="bb-nav-prev">&larr;</span>
					<span id="bb-nav-next">&rarr;</span>
				</nav>
<span id="tblcontents" class="menu-button">Table of Contents</span>
</div>
</div><!-- /container -->
<script src="jquery.min.js"></script>
		<script src="jquery.mousewheel.js"></script>
		<script src="jquery.jscrollpane.min.js"></script>
		<script src="jquerypp.custom.js"></script>
		<script src="jquery.bookblock.js"></script>
		<script src="page.js"></script>
		<script>
			$(function() {
Page.init();
});
		</script>
        
</body>
</html>
