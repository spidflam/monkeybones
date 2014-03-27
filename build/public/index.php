<?php
// Form test for The Monkeys (https://tackk.com/kgwyc7)
// Form processing to take place here...
// Set variables if form has been submitted:

if (isset($_GET["sent"])) {
    $sent = $_GET["sent"];
  } else {
    $sent = "";
  }

if (isset($_GET["first_name"])) {
    $first_name = "<p>First name: " . $_GET["first_name"] . "</p>";
  } else {
    $first_name = "";
  }

if (isset($_GET["surname"])) {
    $surname = "<p>Surname: " . $_GET["surname"] . "</p>";
  } else {
    $surname = "";
  }

if (isset($_GET["email_address"])) {
    $email_address = "<p>Email address: " . $_GET["email_address"] . "</p>";
  } else {
    $email_address = "";
  }

if (isset($_GET["phone_number"])) {
    $phone_number = "<p>Phone number: " . $_GET["phone_number"] . "</p>";
  } else {
    $phone_number = "";
  }

if (isset($_GET["address"])) {
    $address = "<p>Address: " . $_GET["address"] . "</p>";
  } else {
    $address = "";
  }

if (isset($_GET["phone_number"])) {
    $phone_number = "<p>Phone number: " . $_GET["phone_number"] . "</p>";
  } else {
    $phone_number = "";
  }

if (isset($_GET["state"])) {
    $state = "<p>State: " . $_GET["state"] . "</p>";
  } else {
    $state = "";
  }

if (isset($_GET["postcode"])) {
    $postcode = "<p>Postcode: " . $_GET["postcode"] . "</p>";
  } else {
    $postcode = "";
  }

if (isset($_GET["enquiry_type"])) {
    $enquiry_type = "<p>Enquiry type: " . $_GET["enquiry_type"] . "</p>";
  } else {
    $enquiry_type = "";
  }

if (isset($_GET["product_name"])) {
    $product_name = "<p>Product name: " . $_GET["product_name"] . "</p>";
  } else {
    $product_name = "";
  }

if (isset($_GET["product_size"])) {
    $product_size = "<p>Product size: " . $_GET["product_size"] . "</p>";
  } else {
    $product_size = "";
  }

if (isset($_GET["use_by_date"])) {
    $use_by_date = "<p>Use by date: " . $_GET["use_by_date"] . "</p>";
  } else {
    $use_by_date = "";
  }

if (isset($_GET["batch_code"])) {
    $batch_code = "<p>Batch code: " . $_GET["batch_code"] . "</p>";
  } else {
    $batch_code = "";
  }

if (isset($_GET["enquiry"])) {
    $enquiry = "<p>Enquiry: " . $_GET["enquiry"] . "</p>";
  } else {
    $enquiry = "";
  }

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>The Monkeys - Happy Form</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/css/overrides.css">
        <script src="/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

  <div class="content">

    <?php
      if ($sent == "yes") {
        print '<div class="results">';
        print $first_name;
        print $surname;
        print $email_address;
        print $phone_number;
        print $address;
        print $phone_number;
        print $state;
        print $postcode;
        print $enquiry_type;
        print $product_name;
        print $product_size;
        print $use_by_date;
        print $batch_code;
        print $enquiry;
        print '<a href="/">OK, got it now leave this page!</a>';
        print '</div>';
        print '<div class="overlay">';
        print '</div>';
      }
    ?>

    <form action="index.php" method="get" name="the_form" id="the_form">
      <input type="hidden" name="sent" value="yes">
      <div class="first-section">
        <div class="form-element">
          <label for="first_name">First Name: </label>
          <input type="text" name="first_name" class="clearfix" required>
        </div>

        <div class="form-element">
          <label for="surname">Surname: </label>
          <input type="text" name="surname" required>
        </div>

        <div class="form-element">
          <label for="email_address">Email address: </label>
          <input type="email" name="email_address" required>
        </div>
      </div>
      <!-- /.first-section -->

      <div class="second-section">
        <div class="form-element">
          <label for="phone_number">Daytime contact number: </label>
          <input type="tel" name="phone_number" required>
        </div>

        <div class="form-element">
          <label for="address">Address: </label>
          <input type="text" name="address" required>
        </div>

        <div class="form-element">
          <label for="suburb">Suburb: </label>
          <input type="text" name="phone_number" required>
        </div>

        <div class="form-element">
          <label for="state">State: </label>
          <select name="state" required>
            <option>-- select --</option>
            <option value="ACT">ACT</option>
            <option value="NSW">NSW</option>
            <option value="NT">NT</option>
            <option value="QLD">QLD</option>
            <option value="SA">SA</option>
            <option value="TAS">TAS</option>
            <option value="VIC">VIC</option>
            <option value="WA">WA</option>
          </select>
        </div>

        <div class="form-element">
          <label for="postcode">Postcode: </label>
          <input type="text" name="postcode" required>
        </div>
      </div>
      <!-- /.second-section -->

      <div class="third-section">
        <div class="form-element">
          <label for="enquiry_type">Enquiry type: </label>
          <select name="enquiry_type" id="enquiry_type" onselect="check_form" required>
            <option>-- select --</option>
            <option value="value1">General enquiry</option>
            <option value="value2">Product feedback or enquiry</option>
            <option value="value3">Product complaint</option>
          </select>
        </div>

        <!-- Hide values unless submitting a complaint -->
        <div id="complaint" style="display: none">
          <div class="form-element">
            <label for="product_name">Product name: </label>
            <input type="text" name="product_name" id="product_name">
          </div>

          <div class="form-element">
            <label for="product_size">Product size: </label>
            <input type="text" name="product_size" id="product_size">
          </div>

          <div class="form-element">
            <label for="use_by_date">Use-by date: </label>
            <input type="date" name="use_by_date" id="use_by_date">
          </div>

          <div class="form-element">
            <label for="batch_code">Batch code: </label>
            <input type="text" name="batch_code" id="batch_code">
          </div>
        </div>
        <!-- END Complaint details -->

        <div class="form-element">
          <label for="enquiry">Enquiry: </label>
          <textarea name="enquiry" id="enquiry" rows="4" cols="50"></textarea>
        </div>

        <input type="submit" class="btn right" value="SUBMIT">
        <div class="clearfix"></div>
      </div>
      <!-- /.third-section -->

    </form>
  </div>
  <!-- /.content -->
        <!-- For local development, use this script line along with "grunt dev" to load modules asynchronously -->
        <!--<script data-main="/js/main.js" src="/js/vendor/require.js"></script>-->

        <!-- In production, use this script line along with "grunt" (the default task does a production build) to
             concatenate and minify all javascript sources into one file -->
        <script src="/js/main.js"></script>
        <script src="/js/verify.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-27321432-5');ga('send','pageview');
        </script>
    </body>
</html>
