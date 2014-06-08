<!DOCTYPE html>
<!-- saved from url=(0030)http://bootswatch.com/default/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>Catalyst 4 Success</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="custom/custom-bootstrap.css" media="screen">
<link rel="stylesheet" href="files/styles.css" media="screen">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="../bower_components/html5shiv/dist/html5shiv.js"></script>
      <script src="../bower_components/respond/dest/respond.min.js"></script>
    <![endif]-->
<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
</head>
<body>
   <?php include("navbar.php") ?>
<br>
<div class="localchapters">
    <center>
        <h1 style="color:#FF0000">LOCAL CHAPTERS</h1>
        <p>Find your nearest Catalyst chapter to book an event or to get involved!</p>
    </center><br>
</div>
<div class="container" style="width:70%">
    <div class="row" style="width:100%;">
        <div class="col-md-3 col-md-offset-1" style="padding-right:0px">
        <ul id="row" class="nav nav-pills nav-stacked">
            <li class="active"><a href="#"><center>Westview High School</center></a></li>
            <li><a href="#"><center>Del Norte High School</center></a></li>
            <li><a href="#"><center>Rancho Bernardo High School</center></a></li>
            <li><a href="#"><center>Francis Parker High School</center></a></li>
            <li><a href="#"><center>Patrick Henry High School</center></a></li>
            <li style="border-bottom:1px solid black;"><a href="#"><center>Upper Dublin High School</center></a></li>
        </ul>
        </div>
        <div class="col-md-7" id="map" style="border:1px solid black; border-left:0px; background-color:#7DCBE5 ">
        </div>
    </div>
</div>
<br><br><br><br><br><br><br><br>
<div class="footer">
    <div class="row">
        <div class="col-md-4">
            <img src="files/logotransparent.png" width="25%"><br>
            <h3 style="font-family:Lato">Catalyst for Success &copy; 2014</h3>
        </div>
        <div class="col-md-1 col-md-offset-6" style="padding-top:2%">
            <b>Contact Us</b><br>858-610-0232<br><u>info.catalyst4success.org</u>
        </div>
        <div class="col-md-1">
            <img src="files/flask.png" width="60%">
        </div>
    </div>
</div>
<script src="./Bootswatch  Default_files/jquery-1.10.2.min.js"></script>
<script src="./Bootswatch  Default_files/bootstrap.min.js"></script>
<script src="./Bootswatch  Default_files/bootswatch.js"></script>
<script>
    $(window).on("load", function(){
        var rowheight = $("#row").innerHeight();
        console.log("test");
        $("#map").height(rowheight - 2);
    });

    $(window).on('resize', function() {
        var rowheight = $("#row").innerHeight();
        console.log("test");
        $("#map").height(rowheight - 2);

        });

</script>

<script>
var width = $(window).width();
var hoverover;
$(document).ready( function(){

        navbarCollapseCheck();
        $(".hover-active-dropdown").hover(
            function() { $(this).attr("class", "dropdown hover-active-dropdown active")},
            function() { $(this).attr("class", "dropdown hover-active-dropdown")}
            );

        $(".hover-active").hover(
            function() { $(this).attr("class", "hover-active active")},
            function() { $(this).attr("class", "hover-active")}
            );
        });

function navbarCollapseCheck(){
    var width = $(window).width();
    if(width < 767){
        $(".dropdown-toggle").attr("data-toggle", "dropdown"); 
        $("#navbar").prop('class', 'navbar navbar-default navbar-fixed-top');
    }
    else{
        $(".dropdown-toggle").attr("data-toggle", " "); 
        $("#navbar").prop('class', 'navbar navbar-default');
    }
}


$(window).on('resize', function() {
        navbarCollapseCheck();
        });

</script>

</body></html>
