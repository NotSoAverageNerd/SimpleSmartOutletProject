<?php
  include 'config.php';
?>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="bootstrap/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script rel="script" src="main.js"></script>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $websiteTabLabel ?></title>
  </head>
  <body style="background-color: <?php echo $websiteBackgroundColor; ?>">
    <center>
      <h1 style="width: <?php echo $websiteHeaderWidth; ?>; font-size:<?php echo $websiteHeaderFontSize ?>; font-style: <?php echo $websiteHeaderFontStyle ?>; color: <?php echo $websiteHeaderFontColor ?>;"><?php echo $mainWebsiteLabel; ?></h1>
      </br>
      </br>
      </br>
      <h3 style="width: <?php echo $websiteParagraphWidth; ?>; font-size:<?php echo $websiteParagraphFontSize ?>; font-style: <?php echo $websiteParagraphFontStyle ?>; color: <?php echo $websiteParagraphFontColor ?>;"><?php echo $websiteInformationalParagraph; ?></h3>
      </br>
      </br>
      <h3 style="width: <?php echo $websiteParagraphWidth; ?>; font-size:<?php echo $websiteParagraphFontSize ?>; font-style: <?php echo $websiteParagraphFontStyle ?>; color: <?php echo $websiteParagraphFontColor ?>;"><?php echo $websiteInformationalParagraph2; ?></h3>
      </br>
      </br>
      </br>
      <button id="button1" type="button" class="btn btn-secondary btn-lg" style="width: <?php echo $buttonWidth; ?>; font-size:<?php echo $buttonFontSize ?>"><?php echo $buttonTitleONE; ?></button>
      </br>
      </br>
      <button id="button2" type="button" class="btn btn-secondary btn-lg" style="width: <?php echo $buttonWidth; ?>; font-size:<?php echo $buttonFontSize ?>"><?php echo $buttonTitleTWO; ?></button>
      </br>
      </br>
      <button id="button3" type="button" class="btn btn-secondary btn-lg" style="width: <?php echo $buttonWidth; ?>; font-size:<?php echo $buttonFontSize ?>"><?php echo $buttonTitleTHREE; ?></button>
      </br>
      </br>
      <button id="button4" type="button" class="btn btn-secondary btn-lg" style="width: <?php echo $buttonWidth; ?>; font-size:<?php echo $buttonFontSize ?>"><?php echo $buttonTitleFOUR; ?></button>
    </center>
  </body>
</html>
