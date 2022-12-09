<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Membership - Database_LAB_Project</title>
    <meta property="og:title" content="Membership - Database_LAB_Project" />
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
      <link href="./membership.css" rel="stylesheet" />

      <div class="membership-container">
        <div class="membership-container1">
          <div class="membership-container2">
            <img
              alt="image"
              src="https://cdn.discordapp.com/attachments/919631518907900015/1044596893847654470/HOME__3_-removebg-preview.png"
              class="membership-image"
            />
          </div>
          <div class="membership-container3">
            <a href="index.html" class="membership-link">Home</a>
          </div>
          <div class="membership-container4">
            <a href="contract-us.html" class="membership-navlink">Contract</a>
          </div>
          <div class="membership-container5">
            <a href="select-airline.php" class="membership-link1">
              <span>Booking</span>
              <br />
            </a>
          </div>
          <div class="membership-container6">
            <a href="select-airline.php" class="membership-navlink1">
              <img
                alt="image"
                src="https://cdn.discordapp.com/attachments/919631518907900015/1044601619775488000/1669122730796-removebg-preview.png"
                class="membership-image1"
              />
            </a>
          </div>
        </div>
        <img
          alt="image"
          src="https://cdn.discordapp.com/attachments/919631518907900015/1044596893847654470/HOME__3_-removebg-preview.png"
          class="membership-image2"
        />
        <textarea
          name="Name"
          placeholder="Name"
          class="membership-name textarea"
        ></textarea>
        <textarea
          name="Reg_date"
          placeholder="Reg_date"
          class="membership-regdate textarea"
        ></textarea>
        <textarea
          name="Exp_date"
          placeholder="Exp_date"
          class="membership-expdate textarea"
        ></textarea>
        <a href="checking-email.php" class="membership-navlink2">
          <img
            alt="image"
            src="https://media.discordapp.net/attachments/919631518907900015/1045321163959709716/image.png"
            class="membership-image3"
          />
        </a>
      </div>
    </div>
    <script
      data-section-id="navbar"
      src="https://unpkg.com/@teleporthq/teleport-custom-scripts"
    ></script>
  </body>
</html>
