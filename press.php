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

<div class="container" style="width:55%">
<?php
   if(isset($_GET['id'])){
     include "pressreleases/release" .  $_GET['id'] . ".html";
   }
   else{
     include "pressreleases/release1.html";
   }
?>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php include("footer.php") ?>


$(document).ready( function(){
        var welctop = $("#welcome").offset().top;
        var welcbottom = welctop + $("#welcome").height();
        $(window).scroll(function(){
            var top = $(window).scrollTop();
            var bottom = top + $(window).height();
            if(top > welcbottom || $(window).width() < 767){
            $("#navbar").prop('class', 'navbar navbar-default navbar-fixed-top');
            }
            else{
            $("#navbar").prop('class', 'navbar navbar-default');
            }
            });
        });
</script>
<script>
function goToByScroll(id){
    // Scroll
    $('html,body').animate({
scrollTop: $("#"+id).offset().top},
'slow');
    // Scroll
}

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
