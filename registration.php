<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="headbar.css" />
  <link rel="stylesheet" href="registration.css" />
  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
  <div class="headbar">
      <header>
        <div class="mainnavbar">
          <div class="logoclass">
            <p>Trip</p>
          </div>
          <div class="icons" name="icbar">
            <i class="fa-solid fa-bars"></i>
            <i class="fa-solid fa-x" name="Xbar"></i>
          </div>
        </div>
        <nav class="navclass">
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="index.html">Photos</a></li>
            <li><a href="index.html">Details</a></li>
            <li><a href="index.html">Contact</a></li>
          </ul>
        </nav>
      </header>
    <div class="mainbody">
      <div class="inCointainer">
        <h1 class="regclass">Registration Form</h1>
        <form
          action="connect.php"
          method="post"
          class="form"
          enctype="multipart/form-data"
        >
          <div class="input-box">
            <label for="fullname"><b>Full Name</b></label>
            <input
              type="text"
              placeholder=" Enter Full name"
              id="fullname"
              name="fullname"
              require
            />
          </div>
          <div class="input-box">
            <label for="rollno"><b>Roll No.</b></label>
            <input type="text" id="rollno" placeholder=" Enter Roll No." name="rollno" required/>
          </div>
          <div class="input-box">
            <label for="phoneno"><b>Phone No.</b></label>
            <input type="tel" id="phoneno" placeholder=" Enter Phone No."  name="phoneno" required/>
          </div>
          <div class="input-box">
            <label for="email"><b>Email</b></label>
            <input type="email" id="email" placeholder="Enter Email"  name="email" required/>
          </div>
          <div class="input-box">
            <label for="transactionid"><b>Transaction ID</b></label>
            <input type="text" id="transactionid" placeholder=" Transaction ID" name="transactionid" required />
          </div>
          <div class="input-box">
            <label for="file"><b>Photo</b></label>
            <input type="file" id="file" style="width: 200px" name="stdimg" required />
          </div>
          <div class="input-submit">
            <input type="submit" value="Submit"  />
           <a href="index.php"> <input type="button" value="Back"  /></a>
          </div>
          
        </form>
      </div>
    </div>
  </body>
  <script src="headbar.js"></script>
</html>
