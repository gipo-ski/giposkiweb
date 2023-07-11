
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>formverify_php</title>
    <style>
    .error {color: #FF0000;}
    <link rel="stylesheet" href="/OneDrive/Documents/giposkiweb/css/styles.login.css">
    </style>
  </head>
  <body>
    <?php
      include "file:///C:/Users/guy_p/OneDrive/Documents/giposkiweb/html/accountregistration.html"
    ?>
    <hr><br>
    <!-- <?php
      include 'headerheader.php';
    ?> -->

    <!-- <?php
      include 'form.php';
    ?> -->

    <main>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>


<main>

   <section class="flex-container-formsection">

      <form id="newcustomerreg" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
         <h1>New Customer Registration Form</h1>
         <h4>Quick and Secure signup.</h4>
         <p>All fields are rquired except where otherwise stated.</p>
         <label for="titleselect">Title</label><br>
         <select name="title" id="titleselect" value="<?php echo $title;?>">
            <option value="miss">Miss</option>
            <option value="mrs">Mrs</option>
            <option value="ms">Ms</option>
            <option value="mr">Mr</option>
            <option value="reverend">Reverend</option>
            <option value="sir">Sir</option>
            <option value="dr">Dr</option>
         </select><br>
         <label for="fname">Firstname</label><br>
         <input type="text" id="fname" name="fname" value="<?php echo $fname;?>" placeholder="Enter Firstname:" required><br>
         <label for="mname">Middlename</label><br>
         <input type="text" id="mname" name="mname" value="<?php echo $mname;?>" placeholder="Enter Middlename:"><br>
         <label for="fname">Lastname</label><br>
         <input type="text" id="lname" name="lname" value="<?php echo $lname;?>" placeholder="Enter Lastname:" required><br>
         <label for="gender">Gender</label>*<span class="error"><?php echo $genderErr;?></span>
         <input type="radio" id="male" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male" required>Male
         <input type="radio" id="female" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female" required>Female<br>
         <label for="password">Password</label><br>
         <input type="password" id="pswd" name="password" value="<?php echo $password;?>" placeholder="Create Password" required><br>
         <label for="repassword">Re-enter Password</label><br>
         <input type="password" id="repswd" name="repassword" value="<?php echo $repassword;?>" placeholder="Re-enter Password" required><br>
         <label for="email">E-mail Address</label><br>
         <input type="email" id="email" name="emailaddress" value="<?php echo $emailaddress;?>" placeholder="Enter E-mail:" required><br>

         <label for="dob">Date of Birth</label><br>
         <input type="date" id="dob" name="dob" value="<?php echo $dob;?>" placeholder="Enter Date of Birth: DD/MM/YYYY" required><br>
         <label for="phone">Telephone</label><br>
         <input type="tel" id="phone" name="phone" value="<?php echo $phone;?>" placeholder="Enter Contact Telephone Number:" required><br>

         <label for="houseno">House Number or Name</label><br>
         <input type="text" id="address" name="address" value="<?php echo $address;?>" placeholder="Enter House Number or Name:" required><br>
         <label for="postcode">Postcode</label><br>
         <input type="text" id="postcode" name="postcode" value="<?php echo $postcode;?>" placeholder="Enter Postcode:" required><br><br>
         <hr><br>

         <div id="formtandcs">
            <p>Tick the relevant box if you DO NOT wish to receive sale and other information relating to GIPOSKI Online Shop.</p>
            <br>
            <div id="notsubscribe" value="<?php echo $notsubscribe;?>">
               <label for="post">Post<input type="checkbox" name="topost" <?php if (isset($topost) && $topost=="post") echo "checked";?> value="post"></label>
               <label for="telephone">Telephone <input type="checkbox" name="totelephone" <?php if (isset($totelephone) && $totelephone=="telephone") echo "checked";?> value="telephone"></label>
               <label for="sms">SMS<input type="checkbox" name="tosms" <?php if (isset($tosms) && $tosms=="sms") echo "checked";?> value="sms"></label>
               <label for="email">E-mail<input type="checkbox" name="toemail" <?php if (isset($toemail) && $toemail=="email") echo "checked";?> value="email"></label>
            </div>
            <br><br>

            <p id="hearus" >We’d love to keep in touch with the latest info about GIPOSKI including news of store events, offers, promotions
               and sales,
               by email, telephone, SMS or post. We’ll keep your information safe and won’t share it with other companies for
               their marketing purposes.
               You can ask us to stop at any time using the unsubscribe link in all of our messages or by changing your
               preferences in ‘My Account’.
               If you don’t want to hear from us you can tick the boxes above. To find out more, see our Privacy and Cookie
               Policy.</p>
         </div>
         <p>Clicking 'Register My Account' you agree to the Terms and Conditions and Privacy and Cookie Policy</p>
         <input type="button" class="gbuttons" name="submit" id="regmyacct" value="Register My Account"><br>
      </form>

      <?php
      // echo "<br><h1>Here's what you told us:</h1><br>";
      // echo "<h2>Review your input. Satisfied, click submit.</h2><br>";
      echo $title;
      echo "<br>";
      echo $fname;
      echo "<br>";
      echo $mname;
      echo "<br>";
      echo $lname;
      echo "<br>";
      echo $gender;
      echo "<br>";
      echo $password;
      echo "<br>";
      echo $repassword;
      echo "<br>";
      echo $emailaddress;
      echo "<br>";
      echo $dob;
      echo "<br>";
      echo $phone;
      echo "<br>";
      echo $address;
      echo "<br>";
      echo $postcode;
      echo "<br>";
      echo $notsubscribe;
      ?>


   </section>


</main>


    </main>

    <!-- <?php
      include 'footerfooter.php';
    ?> -->
  </body>
</html>
