<?php header('Content-type: text/plain; charset=utf-8');


  if(isset($_POST['submit'])) {

  $email_to = "bp@mechancial-associates.com";
  $email_subject = "Contact Us Feedback";

  function died($error) {
     echo "Your feedback could not be sent because of the following reasons:";
     echo $error."";
     echo "Please go back and fix these errors.";
     die();
  }

  // data validation
  if(!isset($_POST['full_name']) ||
     !isset($_POST['email_address']) ||
     !isset($_POST['feedback_area'])) {
      died('There appears to be a problem with your feedback.');
  }

  $full_name = $_POST['full_name']; // required
  $email_address = $_POST['email_address']; //of course this is required. Are you kidding me?
  $feedback_area = $_POST['feedback_area']; //LMAO WHY SEND IN EMPTY FEEDBACK ANYWAYS?

  $error_message = "";

  $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$first_name)) {
   $error_message .= "The name you entered does not appear to be valid.";
  }

  $email_exp = "/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/";
  if(!preg_match($email_exp,$email_from)) {
   $error_message .= "The email address you entered does not appear to be valid.";
  }

  if(strlen($feedback_area) < 2) {
   $error_message .= "Your feedback is too short to understand.";
  }

  if(strlnen($error_message) > 0) {
   $error_message .= "Something appears to be wrong here.";
  }

  $email_message = "Here's the lastest feedback. \n\n";

  function clean_string($string) {
    $bad = array("content-type", "bcc:", "to:", "cc:", "href");

    return str_replace($bad,"",$string);
  }

  $email_message .= "Full Name: ".clean_string($full_name)."\n";
  $email_message .= "Email: ".clean_string($email_address)."\n";
  $email_message .= "Feedback".clean_string($feedback_area)."\n";

  //create email header
  $headers = 'From: '.$email_from."\r\n".
    'Reply-To: '.$email_from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
  mail($email_to, $email_subject, $email_message, $headers);

}
  ?>

<!DOCTYPE html>
<html lang=en>
  <head>
    <meta charset="UTF-8">
    <title>Contact Us | Mechanical Associates</title>
      <!-- CSS stuff -->
      <link type="text/css" rel="stylesheet" href="MainCSS.css">
      <link type="text/css" rel="stylesheet" href="jquery.qtip.css">
      <link type="text/css" rel="stylesheet" href="jquery.qtip.min.css">

      <!-- JavaScript Code -->
      <script src="javaScript/jquery-1.12.3.js"></script>
      <script type="text/javascript" src="javaScript/jquery.qtip.js"></script>
      <script type="text/javascript" src="javaScript/jquery.qtip.min.js"></script>
      <script type="text/javascript" src="javaScript/states.js"></script>

       <!-- Google+ -->
      <script src="https://apis.google.com/js/platform.js" async defer></script>

      <!-- MORE SCRIPT -->
      <script type="text/javascript">
      // mobile call
          <!--
          if (screen.width <= 699) {
          document.location = "mobileContact.html";
          } else if (screen.width >= 700 && screen.width <= 1074) {
            document.location = "tabletContact.html";
          } else if (screen.width <= 1518 && screen.width >= 1073) {
            document.location = "MAcontactUs.html";
          }
          //-->

          // Twitter things
          window.twttr = (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0],
              t = window.twttr || {};
            if (d.getElementById(id)) return t;
            js = d.createElement(s);
            js.id = id;
            js.src = "https://platform.twitter.com/widgets.js";
            fjs.parentNode.insertBefore(js, fjs);

            t._e = [];
            t.ready = function(f) {
              t._e.push(f);
            };

            return t;
          }(document, "script", "twitter-wjs"));
    </script>
  </head>
  <body>
    <!-- Facebook -->
      <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
          fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
      </script>
<!-- Start up the actual body stuff cause OH MY GOD ALL THIS CODE -->
    <section id="header">
        <div id="header_navigation">
            <span class="company_logo">
                 <a href="index.html" title="Mechanical Associates"><img src="PictureRefs/MechanicalAssociates_Logo.png" height="70px";></img></a>
            </span>
            <span class="links">
                <ul class="actualnavigation">
                    <a href="index.html" title="Home" alt="Home">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                    <a href="AboutUs.html" title="About Us" alt="About Us">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;About Us&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                    <a href="Products.html" title="Products" alt="Products">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Products&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                    <a href="TrainingVideos.html" title="Videos" alt="Training Videos">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Videos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                    <a href="ContactUs.html" title="Contact Us" alt="Contact Us">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact Us&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                </ul>
            </span>
        </div>
    </section>
    <div id="banner">
            <img src="PictureRefs/Overhead.png"></img>
    </div>
    <section id="main_content">
      <div class="social_feed">
            <a class="twitter-timeline"  href="https://twitter.com/MechAssociates" data-widget-id="725324857672486912">Tweets by @MechAssociates</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            <div class="fb-page" data-href="https://www.facebook.com/Mechanical-Associates-818192508251677" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
      </div>
        <div class="content" style="position: relative; height: 500px;">
          <h1>Contact Us</h1>
            <hr>
                <!-- <div id="ContactForm">
                <form name="feedbackForm" method="post" id="feedbackForm" style="float: left; padding-left: 45px; margin: auto; padding-right: 175px; border-right: 2px solid #0E7DC2; z-index: 50;">
                <input type="hidden" name="Alavar" value="login"></input>
                <b><u style="color: #b30000;">A field marked with (*) is required</u></b>

              <p><label for="full_name">*Full Name: </label><br/>
              <input type="text" size="10" name="full_name" ></input>
              <p>

              <label for="email_address">*Email Address:</label><br/>
              <input type="text" size="10" name="email_address"></input>
              <p>

              <label for="foundWebsite">How did you find us?</label><br/>
                <select name="wordOfMouth">
                  <option selected="">-- Please Select --</option>
                  <option>Google/Google+</option>
                  <option>Facebook</option>
                  <option>LinkedIn</option>
                  <option>Twitter</option>
                  <option>Representative</option>
                  <option>Other</option>
                </select><p>

              <label for="feedback_area">*Feedback (Comments, Questions, etc.):</label><br/>
              <textarea name="comments" rows="5" cols="50" name="feedback_area"></textarea>
              <p>

              <input type="submit" value="Submit" name="submit" action="send_form_email.php"></input><p></p>

            </form>
          </div> -->
                <div style="text-align: center; margin: auto; width: auto; border-left: 100px; padding-top: 30px;">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="PictureRefs/MA-Logo-Full_Color.png" style="width: 300px; padding-right: 85px;"></img><p>
              <b>Mechanical Associates</b><br/>
              745 Broadway Street<br/>
              Fresno, CA 93721<br/>
              <i>phone: 559-272-8157</i><br/>
              <i>email: sales@mechanical-associates.com</i><p>
            </div>
            <div id="mini-content">
              <p style="text-align: center;">
                <b>Or contact your local representative!</b>
              </p>
            </div>
      </div>

         <div class="content" style="background-color: rgba(53, 87, 109, 0.7);">
             <center><img src="PictureRefs/UnitedStates.gif" width="718" height="539" id="map" alt="Mechanical Associates Representative Map" usemap="#USA"></img></center>
         </div>
         <div>
                    <map name="USA" class="popup_div">
                      <!-- North Eastern Region -->
                        <area shape="poly" coords=" 650,86, 658,115, 662,119, 664,108, 668,104, 674,101, 677,94, 685,90, 692,86, 693,77, 689,76, 686,70, 683,68, 680,63, 676,52, 671,47, 669,47, 664,49, 660,49, 660,47, 657,54, 654,65, 655,74, 652,80, 650,85" href="http://www.bauhopkins.com" id="Maine"/>
                        <area shape="poly" coords=" 649,87, 647,86, 645,91, 646,99, 643,105, 643,114, 643,127, 662,122, 650,90" href="http://www.bauhopkins.com" id="NewHampshire"/>
                        <area shape="poly" coords=" 644,92, 626,97, 630,118, 635,131, 642,128, 644,96" href="http://www.bauhopkins.com" id="Vermont"/>
                        <area shape="poly" coords=" 636,134, 636,142, 656,137, 665,143, 677,137, 663,131, 664,125, 635,134" href="http://www.bauhopkins.com" id="Massachusetts"/>
                        <area shape="poly" coords=" 658,136, 654,137, 658,149, 666,143, 660,139" href="http://www.bauhopkins.com" id="RhodeIsland"/>
                        <area shape="poly" coords=" 656,148, 638,158, 637,145, 654,141, 656,148" href="http://www.bauhopkins.com" id="Connecticut"/>
                        <area shape="poly" coords=" 623,204, 618,188, 621,187, 631,202, 626,204" href="http://www.AandEAssociates.com" id="Delaware"/>
                        <area shape="poly" coords=" 626,97, 606,102, 600,115, 595,117, 598,124, 584,134, 575,131, 568,138, 571,144, 562,155, 615,148, 620,155, 634,159, 638,156, 635,136, 635,130, 630,117, 627,100" href="#" id="NewYork"/>
                        <area shape="poly" coords=" 618,184, 631,192, 637,174, 633,166, 634,161, 622,155, 621,167, 628,175, 619,183" href="http://www.AandEAssociates.com" id="NewJersey"/>
                        <area shape="poly" coords=" 616,185, 577,191, 577,197, 597,194, 606,200, 606,207, 616,211, 628,211, 630,203, 623,202, 617,188" href="http://www.AandEAssociates.com" id="Maryland"/>
                        <area shape="poly" coords=" 552,234, 541,218, 544,210, 550,201, 557,196, 558,187, 564,193, 573,192, 574,199, 589,190, 595,195, 578,210, 572,212, 568,228, 555,233" href="#" id="WestVirginia"/>
                        <area shape="poly" coords=" 541,248, 624,234, 624,229, 619,228, 616,224, 619,221, 615,211, 602,208, 604,202, 599,198, 594,196, 587,195, 581,208, 575,211, 568,229, 551,235, 541,247" href="#" id="Virginia"/>
                        <area shape="poly" coords=" 563,155, 566,158, 613,148, 622,156, 620,169, 627,175, 621,183, 618,182, 616,185, 562,194, 554,161, 563,154" href="http://www.AandEAssociates.com" id="Pennsylvania"/>
                        <area shape="poly" coords=" 552,161, 533,173, 521,169, 507,171, 512,212, 524,217, 534,215, 540,219, 544,209, 552,202, 558,195, 560,193, 553,165" href="http://www.wpkolens.com" id="Ohio"/>

                      <!-- Middle Region -->
                        <area shape="poly" coords=" 453,282, 459,262, 463,259, 550,247, 529,267, 524,270, 521,277, 456,283" href="#" id="Tennessee"/>
                        <area shape="poly" coords=" 464,258, 463,250, 477,236, 515,213, 526,217, 534,216, 539,219, 540,224, 548,233, 535,248, 477,254, 474,257, 467,259" href="#" id="Kentucky"/>
                        <area shape="poly" coords=" 479,175, 507,173, 512,211, 505,220, 494,230, 478,234, 481,215, 479,175" href="#" id="Indiana"/>
                        <area shape="poly" coords=" 471,165, 442,167, 437,185, 432,199, 439,211, 448,225, 448,233, 458,241, 461,247, 468,248, 472,240, 474,230, 479,220, 477,213, 475,175, 472,168" href="#" id="Illinois"/>
                        <area shape="poly" coords=" 497,107, 494,116, 485,124, 483,136, 486,150, 488,161, 483,172, 522,168, 527,156, 529,144, 524,132, 515,139, 511,137, 518,126, 515,117, 516,114, 502,107, 501,104, 512,102, 502,95, 497,96, 492,92, 475,98, 462,93, 457,93, 463,86, 460,84, 439,98, 468,111, 471,116, 476,110, 485,107, 492,103, 498,107" href="#" id="Michigan"/>
                        <area shape="poly" coords=" 470,162, 440,164, 435,160, 431,147, 430,143, 413,130, 413,117, 419,109, 421,100, 430,94, 438,99, 466,111, 468,119, 463,128, 473,124, 469,138, 468,152, 470,161" href="#" id="Wisconsin"/>
                        <area shape="poly" coords=" 366,65, 383,63, 383,59, 390,59, 390,67, 441,78, 433,83, 418,98, 416,108, 410,115, 410,129, 421,138, 428,143, 429,149, 373,150, 370,115, 366,81, 366,68" href="#" id="Minnesota"/>
                        <area shape="poly" coords=" 429,149, 432,159, 443,171, 434,182, 430,196, 383,196, 372,168, 373,150, 430,149" href="#" id="Iowa"/>
                        <area shape="poly" coords=" 393,261, 383,196, 427,195, 429,200, 438,215, 443,220, 446,227, 444,231, 456,241, 457,246, 462,255, 456,259, 455,267, 452,267, 448,261, 445,259, 396,262" href="#" id="Missouri"/>
                        <area shape="poly" coords=" 400,308, 394,306, 393,262, 444,259, 449,263, 448,267, 455,267, 451,276, 450,283, 445,287, 442,294, 438,307, 438,315, 402,317, 399,311" href="#" id="Arkansas"/>
                        <area shape="poly" coords=" 392,253, 303,252, 304,207, 387,209, 393,253" href="#" id="Kansas"/>
                        <area shape="poly" coords=" 384,206, 305,204, 304,189, 284,187, 286,157, 347,161, 371,169, 384,206" href="#" id="Nebraska"/>
                        <area shape="poly" coords=" 368,165, 356,162, 346,158, 286,154, 290,108, 367,115, 370,123, 370,165" href="#" id="SouthDakota"/>
                        <area shape="poly" coords=" 290,60, 363,63, 363,78, 369,112, 290,108, 292,63" href="#" id="NorthDakota"/>
                        <area shape="poly" coords=" 300,251, 215,243, 222,181, 302,189, 300,251" href="#" id="Colorado"/>
                        <area shape="poly" coords=" 151,233, 166,157, 201,164, 199,177, 221,181, 212,242, 154,233" href="#" id="Utah"/>
                        <area shape="poly" coords=" 285,126, 210,117, 199,174, 280,186, 285,129" href="#" id="Wyoming"/>
                        <area shape="poly" coords=" 169,43, 289,60, 285,123, 207,114, 207,117, 188,117, 181,97, 175,97, 180,82, 171,69, 167,57, 168,48, 169,46" href="#" id="Montana"/>

                      <!-- Southern Region -->
                        <area shape="poly" coords=" 526,278, 527,272, 553,247, 624,235, 621,243, 630,244, 627,253, 623,254, 622,260, 602,282, 577,271, 556,268, 526,277" href="#" id="NorthCarolina"/>
                        <area shape="poly" coords=" 577,314, 599,281, 585,271, 572,272, 567,268, 561,268, 553,269, 540,274, 549,286, 576,314" href="#" id="SouthCarolina"/>
                        <area shape="poly" coords=" 539,274, 511,281, 526,342, 564,342, 565,337, 571,337, 571,332, 576,317, 566,302, 549,288, 538,278" href="#" id="Georgia"/>
                        <area shape="poly" coords=" 496,353, 493,347, 525,342, 560,342, 565,344, 565,337, 571,338, 580,359, 590,371, 589,376, 601,392, 601,407, 600,419, 593,422, 583,413, 581,412, 576,406, 568,399, 564,390, 564,383, 560,384, 560,366, 554,364, 541,353, 534,353, 524,360, 518,355, 514,353, 504,351, 498,353" href="#" id="Florida"/>
                        <area shape="poly" coords=" 482,354, 492,353, 489,344, 522,339, 521,326, 522,318, 519,314, 509,282, 478,284, 480,343, 482,354" href="#" id="Alabama"/>
                        <area shape="poly" coords=" 463,357, 458,346, 435,347, 435,338, 442,326, 440,318, 441,308, 448,289, 454,285, 475,285, 476,330, 479,354, 466,357" href="#" id="Mississippi">
                        <area shape="poly" coords=" 402,316, 438,316, 443,326, 437,335, 436,347, 459,346, 462,357, 471,375, 438,370, 432,365, 426,370, 405,368, 406,357, 407,343, 401,330, 402,319" href="http://www.coastalculvert.com" id="Louisiana"/>
                        <area shape="poly" coords=" 288,259, 324,262, 325,292, 335,295, 348,299, 389,304, 401,308, 404,369, 390,372, 356,403, 358,428, 331,417, 325,401, 313,380, 291,364, 278,376, 258,361, 255,350, 233,327, 235,325, 280,329, 288,260" href="http://www.wwatertechinc.com" id="Texas"/>
                        <area shape="poly" coords=" 288,251, 392,254, 393,305, 328,291, 327,262, 289,258, 288,253" href="http://www.wwatertechinc.com" id="Ohklahoma"/>
                        <area shape="poly" coords=" 214,244, 288,252, 279,328, 235,325, 232,328, 213,325, 212,333, 200,331, 213,245" href="http://www.HennesyMech.com" id="NewMexico"/>
                        <area shape="poly" coords=" 153,233, 212,244, 199,332, 172,327, 128,300, 133,296, 131,290, 136,282, 142,274, 138,261, 141,246, 148,247, 152,234" href="http://www.HennesyMech.com" id="Arizona"/>

                      <!-- Western Region -->
                        <area shape="poly" coords=" 99,140, 166,155, 148,246, 141,245, 138,260, 87,187, 98,141" href="http://www.muniquipllc.com" id="Nevada"/>
                        <area shape="poly" coords=" 80,216, 81,222, 106,217, 87,184, 99,139, 50,127, 52,135, 42,151, 47,165, 43,174, 48,186, 49,192, 54,197, 51,201, 53,208, 56,226, 73,224, 79,216" href="http://www.muniquipllc.com" id="NorCal"/>
                        <area shape="poly" coords=" 74,231, 79,217, 86,229, 77,232" href="http://mechanicalassociates.github.io/Website" id="OG"/>
                        <area shape="poly" coords=" 138,263, 108,220, 86,224, 87,232, 76,234, 75,227, 58,229, 62,249, 78,263, 88,270, 97,280, 100,294, 129,298, 133,295, 131,287, 134,284, 136,279, 142,275, 137,265" href="#" id="SoCal"/>
                        <area shape="poly" coords=" 52,126, 52,113, 75,64, 83,69, 83,77, 146,85, 151,93, 136,110, 142,114, 132,146, 55,127" href="http://www.correctequipment.com" id="Oregon"/>
                        <area shape="poly" coords=" 76,29, 95,39, 98,26, 155,42, 146,85, 86,76, 85,68, 75,63, 75,30" href="http://www.correctequipment.com" id="Washington"/>
                        <area shape="poly" coords=" 155,40, 167,41, 162,56, 166,63, 164,68, 177,81, 172,95, 139,110, 150,92, 147,86, 147,79, 155,43" href="http://www.correctequipment.com" id="NorIdaho"/>

                      <!-- Islands -->
                        <area shape="poly" coords=" 144,399, 105,384, 76,396, 87,416, 76,411, 64,413, 66,421, 82,430, 78,437, 67,436, 58,449, 81,478, 51,495, 78,491, 97,477, 109,466, 131,468, 149,473, 183,500, 167,474, 146,466, 145,402" href="#" id="Alaska"/>
	                      <area shape="poly" coords=" 214,446, 214,461, 239,463, 279,488, 300,517, 316,507, 319,494, 292,474, 268,458, 240,451, 229,446, 215,445" href="#" id="Hawaii"/>
                    </center>
            </div>

        <div id="footer">
            <span class="footer_links">
                <ul class="footer_navigation">
                    <a href="index.html" title="Home" alt="Home">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                    <a href="AboutUs.html" title="About Us" alt="About Us">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;About Us&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                    <a href="Products.html" title="Products" alt="Products">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Products&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                    <a href="TrainingVideos.html" title="Videos" alt="Training Videos">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Videos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                    <a href="ContactUs.html" title="Contact Us" alt="Contact Us">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact Us&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                </ul>
            </span>
            <div id="social_media">
                <!-- Facebook -->
                    <div class="fb-like" data-href="https://www.facebook.com/Mechanical-Associates-818192508251677/" data-width="100" data-layout="button" data-action="like" data-show-faces="true" data-share="true" style="padding-left: 15px;"></div>
                <!-- LinkedIn -->
                    <script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
                    <script type="IN/FollowCompany" data-id="10624641"></script>
                <!-- Twitter -->
                    <a href="https://twitter.com/MechAssociates" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">Follow @MechAssociates</a>
                      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                <!-- YouTube -->

                <!-- Google+ -->
                    <div class="g-plusone" data-annotation="inline" data-width="300"></div>
            </div>
             <div id="Logo_Only">
                <div class="Logo" style="text-align: right; padding-right: 25px;">
                    <img src="PictureRefs/LOGOONLY2.png" width="85"; height="50";></img><br/>
                </div>
            </div>
            <div class="copyright" style="text-align: right; width: 100%; margin: auto;">
                    Copyright &copy; 2013 Mechanical Associates<br/>
                    All Rights Reserved.
                </div>
        </div>
    </section>

  </body>
</html>
