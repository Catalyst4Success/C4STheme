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
    <div class="contribute">
        <h1><center>How to contribute</center></h1>
    </div>
    <br>
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <center><h4 class="fa fa-pencil-square-o"> Check</h4></center>
            </div>
            <p style="padding-left:40px">   Payable to Catalyst for Success<br><br>Mail to:<br>Catalyst for Success<br>5940 Pacific Mesa Ct. Suite 202<br>San Diego, CA 92121<br></p>

        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <center><h4 class="fa fa-money"> Cash</h4></center>
            </div>
            <p style="padding-left:40px">(contact us at info@catalyst4success.org)</p>

        </div>
    </div><br><br>
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <center><h4 class="fa fa-credit-card"> Credit Card</h4></center>
            </div>
            <p style="padding-left:40px">(contact us at info@catalyst4success.org)</p>

        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <center><h4 class="fa fa-laptop"> Online</h4></center>
            </div>
            <p style="padding-left:40px">(Follow the Paypal below)<br><br>PayPal - The safer, easier way to pay online!</p>

        </div>

    </div>
</div>
<br><br><br><br><br>
<div class="footer" style="position:absolute; bottom:0;">
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
