<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
$email_to = "brando5393@yahoo.com";
 
    $email_subject = "Message from brandontwilliams.info";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['first_name']) ||
 
        !isset($_POST['last_name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['telephone']) ||
 
        !isset($_POST['comments'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $first_name = $_POST['first_name']; // required
 
    $last_name = $_POST['last_name']; // required
 
    $email_from = $_POST['email']; // required
 
    $telephone = $_POST['telephone']; // not required
 
    $comments = $_POST['comments']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  }
 
  if(!preg_match($string_exp,$last_name)) {
 
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
 
  }
 
  if(strlen($comments) < 2) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
 
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
 
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
<!-- include your own success html here -->
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <!--[if IE]>
        <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <title>Global Healing Circles</title>

        <!--[if lt IE 9]>
        <script type="text/javascript" src="js/ie-fixes.js"></script>
        <link rel="stylesheet" href="css/ie-fixes.css">
        <script type="text/javascript" src="js/_respond.min.js"></script>
        <![endif]-->

        <meta name="description" content="Global Healing Circles">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--- This should placed first off all other scripts -->


        <link rel="stylesheet" href="css/bootstrap.min.css">

        <link rel="stylesheet" href="css/normalize.css">

        <link rel="stylesheet" href="css/font-awesome-ie7.css">
        <link rel="stylesheet" href="css/font-awesome-ie7.min.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/revolution_settings.css">
        <link rel="stylesheet" href="css/eislider.css">
        <link rel="stylesheet" href="css/tipsy.css">
        <link rel="stylesheet" href="css/prettyPhoto.css">
        <link rel="stylesheet" href="css/isotop_animation.css">

<meta http-equiv="refresh" content="1; url=http://globalhealingcircles.com/site/index.php" />
        <link href='css/style.css' rel='stylesheet' type='text/css'>
        <link href='css/responsive.css' rel='stylesheet' type='text/css'>


        <link href="css/skins/mixed-flat-colors.css" rel='stylesheet' type='text/css' id="skin-file">


        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Cuprum:400,400italic,700italic,700' rel='stylesheet'
              type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,600,200,300' rel='stylesheet' type='text/css'>

    </head>
    <body class="bgpattern-p4">


        <!-- Sticky Nav -->
        <div class="sticky-navigation" id="sticky-navigation"></div>
        <!-- Sticky Nav -->


        <div id="wrapper" class="boxed">

            <div class="top_wrapper">

                <!-- Header -->
                <header class="top-header shadow">
                    <div class="container">
                        <div class="row header">

                            <!-- Logo -->
                            <div class="col-md-2 col-sm-4 col-xs-4 logo">
                                <a href="index.php">
                                    <img src="images/logo.png" alt="ARWA Responsive HTML5 Theme"/>
                                </a>
                            </div>
                            <!-- //Logo// -->


                            <?php include "nav.php";?>

                        </div>


                    </div>
                </header>
                <!-- //Header// -->
                
            </div>
				<div class="body-wrapper">
					<div class="container">
					<!--Content goes here-->
				 <h1>Thank you for contacting us. We will be in touch with you very soon.</h1>
					<!--Content goes here-->
					</div>
				</div>           
            <?php include 'footer.php'; ?>

        </div>
        <!-- wrapper end -->


        <script type="text/javascript" src="js/_jq.js"></script>
        <script type="text/javascript" src="js/_jquery.placeholder.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>


        <script src="js/activeaxon_menu.js" type="text/javascript"></script>
        <script src="js/animationEnigne.js" type="text/javascript"></script>
        <script src="js/arwa.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/ie-fixes.js" type="text/javascript"></script>
        <script src="js/jquery.base64.js" type="text/javascript"></script>
        <script src="js/jquery.carouFredSel-6.2.1-packed.js" type="text/javascript"></script>
        <script src="js/jquery.cycle.js" type="text/javascript"></script>
        <script src="js/jquery.cycle2.carousel.js" type="text/javascript"></script>
        <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
        <script src="js/jquery.easytabs.js" type="text/javascript"></script>
        <script src="js/jquery.eislideshow.js" type="text/javascript"></script>
        <script src="js/jquery.isotope.js" type="text/javascript"></script>
        <script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
        <script src="js/jquery.themepunch.plugins.min.js" type="text/javascript"></script>
        <script src="js/jquery.themepunch.revolution.js" type="text/javascript"></script>
        <script src="js/jquery.tipsy.js" type="text/javascript"></script>
        <script src="js/jquery.validate.js" type="text/javascript"></script>
        <script src="js/jQuery.XDomainRequest.js" type="text/javascript"></script>
        <script src="js/retina.js" type="text/javascript"></script>
        <script src="js/timeago.js" type="text/javascript"></script>
        <script src="js/tweetable.jquery.js" type="text/javascript"></script>
    </body>
</html> 
<?php
}
?>