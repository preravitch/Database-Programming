<!DOCTYPE html>
<html lang="en">
  <head>
    <title>User-Information - Database_LAB_Project</title>
    <meta
      property="og:title"
      content="User-Information - Database_LAB_Project"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />

    <style data-tag="reset-style-sheet">
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
    </style>
    <style data-tag="default-style-sheet">
      html {
        font-family: Inter;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-gray-black);
        background-color: var(--dl-color-gray-white);

      }
    </style>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
      data-tag="font"
    />
    <!--This is the head section-->
    <!-- <style> ... </style> -->
    <style data-section-id="dropdown">
      [data-thq="thq-dropdown"]:hover > [data-thq="thq-dropdown-list"] {
          display: flex;
        }

        [data-thq="thq-dropdown"]:hover > div [data-thq="thq-dropdown-arrow"] {
          transform: rotate(90deg);
        }
    </style>
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <div>
      <link href="./user-information.css" rel="stylesheet" />

      <div class="user-information-container">
        <img
          alt="image"
          src="https://cdn.discordapp.com/attachments/919631518907900015/1044596893847654470/HOME__3_-removebg-preview.png"
          class="user-information-image"
        />
        <a href="payment.php" class="user-information-navlink button">next</a>
        <div class="user-information-container1"></div>
        <span class="user-information-text">Passenger Information</span>
        <form action="user-information.php" method ="POST">
        <input
          type="text"
          name="Firstname"
          placeholder="Firstname"
          class="user-information-firstname input"
        />
        <input
          type="tel"
          name="p_id"
          placeholder="Passsport ID"
          class="user-information-passsport-i-d input"
        />
        <input
          type="text"
          name="Lastname"
          placeholder="Lastname"
          class="user-information-lastname input"
        />
        <input
          type="text"
          name="Gender"
          placeholder="Gender"
          class="user-information-gender input"
        />
        <input
          type="number"
          name="Age"
          placeholder="Age"
          class="user-information-age input"
        />
        <input
          type="text"
          name="Nationality"
          placeholder="Nationality"
          class="user-information-nationality input"
        />
        <div class="user-information-container2">
          <div class="user-information-container3">
            <img
              alt="image"
              src="https://cdn.discordapp.com/attachments/919631518907900015/1044596893847654470/HOME__3_-removebg-preview.png"
              class="user-information-image1"
            />
          </div>
          <div class="user-information-container4">
            <a href="index.html" class="user-information-link">Home</a>
          </div>
          <div class="user-information-container5">
            <a href="contract-us.html" class="user-information-navlink1">
              Contract
            </a>
          </div>
          <div class="user-information-container6">
            <a href="select-airline.php" class="user-information-link1">
              <span>Booking</span>
              <br />
            </a>
          </div>
          <div class="user-information-container7">
            <a href="select-airline.php" class="user-information-navlink2">
              <img
                alt="image"
                src="https://cdn.discordapp.com/attachments/919631518907900015/1044601619775488000/1669122730796-removebg-preview.png"
                class="user-information-image2"
              />
            </a>
          </div>
        </div>
        <input
          type="text"
          name="Addresses"
          placeholder="Addresses"
          class="user-information-address input"
        />
        <input
          type="number"
          name="Postcode"
          placeholder="Postcode"
          class="user-information-postcode input"
        />
        <input
          type="email"
          name="email"
          placeholder="Email"
          class="user-information-email input"
        />
        
        <input type="submit" class="user-information-button button" value="submit" name="submit">
      </form>
      </div>
    </div>
    <script
      data-section-id="navbar"
      src="https://unpkg.com/@teleporthq/teleport-custom-scripts"
    ></script>
    </body>
    </html>
    <?php
    
// Connect to the database




if (isset($_POST["submit"])){
  $mysqli = new mysqli("localhost", "root", '', "project1");

if ($mysqli->connect_errno) {
  echo $mysqli->connect_error;
}

  $FName = $_POST['Firstname'];
  $Passport = $_POST['p_id'];
  $LName = $_POST['Lastname'];
  $Gender = $_POST['Gender'];
  $Age = $_POST['Age'];
  $Nation = $_POST['Nationality'];
  $Address = $_POST['Addresses'];
  $PC = $_POST['Postcode'];
  $Email = $_POST['email'];
  
  $q = "INSERT INTO passenger (Passport_ID,First_Name,Last_Name,Gender,Age,Nationalities,Email,Address,Postcode)
   VALUES ('$Passport','$FName','$LName','$Gender','$Age','$Nation','$Email','$Address','$PC')";
  mysqli_query($mysqli, $q);
}
?>

  

