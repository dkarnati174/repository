<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="http://library.marist.edu/images/jac-m.png"/>
    <link rel="shortcut icon" href="http://library.marist.edu/images/jac.png" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Honor's Thesis Repository</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="http://library.marist.edu/css/bootstrap.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="http://library.marist.edu/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<link href="http://library.marist.edu/css/library.css" rel="stylesheet">
	<link href="http://library.marist.edu/css/menuStyle.css" rel="stylesheet">
	<link href="styles/main.css" rel="stylesheet">
	<link href="styles/processstatus.css" rel="stylesheet">
    <link href="styles/repository.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script type="text/javascript" src="http://library.marist.edu/js/libraryMenu.js"></script>
	<script type="text/javascript" src="http://library.marist.edu/crrs/js/jquery-ui.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

</head>

<body>
<div id="headerContainer">
    <div id="header">
    </div>
    <!-- /header -->
</div>
<a class="menu-link" href="#menu"><img src="http://library.marist.edu/images/r-menu.png" style="width: 20px; margin-top: 4px;" /></a>
<div id="menu">
    <div id="menuItems"></div>
</div>
<div id="miniMenu" style="width: 100%;border: 1px solid black; border-bottom: none;">

</div>

</br></br>
<!-- /menu -->
<div id="passcode" style="margin-top:0px; margin-left: auto; margin-right: auto; width: 300px; height: 0px;">
    <strong>PASSCODE: </strong>
    <input type="password" name='passcode' id='passcode' style="height:23px; margin-left: 10px;"/><br/>
    <input type="button" class="btn" id="submit" value="Submit" style="margin-left:95px; margin-top:10px; width:100px;"/>
</div></br>
<div id="container" class="container">
</div></br>

<div class="bottom_container">
    <p class = "foot">
        James A. Cannavino Library, 3399 North Road, Poughkeepsie, NY 12601; 845.575.3199
        <br />
        &#169; Copyright 2007-2016 Marist College. All Rights Reserved.

        <a href="http://www.marist.edu/disclaimers.html" target="_blank" >Disclaimers</a> | <a href="http://www.marist.edu/privacy.html" target="_blank" >Privacy Policy</a> | <a href="http://library.marist.edu/ack.html?iframe=true&width=50%&height=62%" rel="prettyphoto[iframes]">Acknowledgements</a>
    </p>
</div>

<script>
    $(document).ready(function(){
        $("#passcode").css('visibility','visible');
        //      $("#container").css('visibility', 'hidden');


    });
    $("input#submit").click(function() {

        var pcode = $("input#passcode").val();
        $.post("<?php echo base_url("?c=repository&m=admin_verify&pass=");?>"+pcode, {

        }).done(function (authorized) {
            if (authorized == 1) {
                $("#passcode").css('visibility', 'hidden');
                var url = "<?php echo base_url("?c=repository&m=getPapers") ?>";
                $("#container").load(url);
                //  $("#container").css('visibility', 'visible');

            } else {
                $("input#passcode").css('border', '3px solid red');
                setTimeout(function () {
                    $("input#passcode").css('border', '1px solid grey');
                }, 2000)
            }
        });
    });
    $('#passcode').keypress(function(e){
        var key = e.which;
        if(key == 13){
            var pcode = $("input#passcode").val();
            $.post("<?php echo base_url("?c=repository&m=admin_verify&pass=");?>"+pcode, {

            }).done(function (authorized) {
                if (authorized == 1) {
                    $("#passcode").css('visibility', 'hidden');
                    var url = "<?php echo base_url("?c=repository&m=getPapers&pass=") ?>"+pcode;
                    $("#container").load(url);
                    //   $("#container").css('visibility', 'visible');

                } else {
                    $("input#passcode").css('border', '3px solid red');
                    setTimeout(function () {
                        $("input#passcode").css('border', '1px solid grey');
                    }, 2000)
                }
            });
        }
    });

    $("body").on("click", ".pagination a", function() {
        var url = $(this).attr('href');
        $("#the-content").load(url);
        return false;
    });


</script>

</body>
</html>