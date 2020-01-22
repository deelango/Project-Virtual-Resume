<!-- author: Deepak Raj Elango -->
<!-- Page: Contact Page -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Contact </title>

  <style>
  * {box-sizing: border-box}
  body{
    margin: 0;
    padding: 0;
    background-color: white;
  }
  html{
    font-size: 10px;
    font-family: "Roboto Cn", sans-serif;
  }

  a{
    text-decoration: none;
    color: black;
  }

  header{
    width: 100%;
    height: 100vh;
    background-size: cover;
    position: fixed;
    /* overflow: hidden; */
  } 

  .container{
    max-width: 120rem;
    width: 90%;
    margin: 0 auto;
  }

  .menu-toggle{
    position: fixed;
    top: 2.5rem;
    right: 2.5rem;
    color: #eeeeee;
    font-size: 3rem;
    cursor: pointer;
    z-index: 1000;
    display: none;
  }

  nav{
    padding-top: 5rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    text-transform: uppercase;
    font-size: 1.6rem;
  }

  .brand{
    font-size: 3rem;
    font-weight: 300;
    transform: translateX(-100rem);
    animation: slideIn .5s forwards;
  }

  .brand span{
    color: green;
  }

  nav ul{
    display: flex;
  }

  nav ul li{
    list-style: none;
    transform: translateX(100rem);
    animation: slideIn .5s forwards;
  }

  nav ul li:nth-child(1){
    animation-delay: 0s;
  }

  nav ul li:nth-child(2){
    animation-delay: .5s;
  }

  nav ul li:nth-child(3){
    animation-delay: 1s;
  }

  nav ul li:nth-child(4){
    animation-delay: 1.5s;
  }

  nav ul li a{
    padding: 1rem 0;
    margin: 0 3rem;
    position: relative;
    letter-spacing: 2px;
  }

  nav ul li a:last-child{
    margin-right: 0;
  }

  nav ul li a::before,
  nav ul li a::after{
    content: '';
    position: absolute;
    width: 100%;
    height: 2px;
    background-color: green;
    left: 0;
    transform: scaleX(0);
    transition: all .5s;
  }

  nav ul li a::before{
    top: 0;
    transform-origin: left;
  }

  nav ul li a::after{
    bottom: 0;
    transform-origin: right;
  }

  .overlay{
    background-color: rgba(0,0,0,.95);
    position: fixed;
    right: 0;
    left: 0;
    top: 0;
    bottom: 0;
    transition: opacity 650ms;
    transform: scale(0);
    opacity: 0;
    display: none;
  }

  nav ul li a:hover::before,
  nav ul li a:hover::after{
    transform: scaleX(1);
  }

  @keyframes slideIn {
    from{

    }
    to{
      transform: translateX(0);
    }
  }

  @media screen and (max-width: 700px){

    .menu-toggle{
      display: block;
    }

    nav{
      padding-top: 0;
      display: none;
      flex-direction: column;
      justify-content: space-evenly;
      align-items: center;
      height: 100vh;
      text-align: center;
    }
    nav ul{
      flex-direction: column;
    }
    nav ul li{
      margin-top: 5rem;
    }
    nav ul li a{
      margin: 0;
      font-size: 2.5rem;
    }
    .brand{
      font-size: 5rem;
    }
    .overlay.menu-open,
    nav.menu-open{
      display: flex;
      transform: scale(1);
      opacity: 1;
    }
  }
  /* Left and Right Module styling apparatus */

  /* Institutions Tab  */
  .box2{
    width: 100%;
    height: 80vh;
  }
  .container2{
    float: left;
    width: 50%;
    padding: 10px;
    height: 100%;
  }
  .box2:after{
    content: "";
    display: table;
    clear: both;
  }
  .left{
    background-color: white;
  }
  .company{
    background-image: url('img1.jpg');
    max-width: 100%;
    height: 100%;
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-position: 15% 50%;
    box-sizing: border-box;
  }
  .company2{
    background-image: url('img1.jpg');
    max-width: 100%;
    height: 100%;
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-position: 25% 50%;
    box-sizing: border-box;
  }
  .right{
    background-color: white;
  }
  /* Future word in title of form */
  .wordtitle{
    font-size: 2rem;
    font-weight: 100;
    transform: translateX(-100rem);
    animation: slideIn .5s forwards;
    line-height: 19px;
    padding-left: 20px;
  }
  .word{
    font-size: 1.50rem;
    font-weight: 100;
    transform: translateX(-100rem);
    animation: slideIn .5s forwards;
    line-height: 15px;
    padding-left: 20px;
  }

  .word span{
    color: green;
  }
  /* Collapsible tab content styling */
  .tabcontent {
    display: none;
    padding: 6px 12px;
    border: 3px solid rgb(29, 153, 58);
    border-style: outset;
    border-top: none;
    border-bottom-color: transparent;
    border-right-color: transparent;
  }
  .tab button.active {
    background-color: white;
  }
  .tab button:hover {
    background-color: rgb(29, 153, 58);
  }
  .tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
  }
  .tab {
    overflow: hidden;
    border: 3px rgb(29, 153, 58);
    border-style:  inset;
    border-top-color: transparent;
    border-left-color: transparent;
    background-color: white;
  }

  /* Information about form styling */
  .formContainer{
    padding-left: 20px;
    background-color: white;
    width: 500px;
    height: 500px;
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
  }
  input[type=text], input[type=password] {
    width: 75%;
    padding: 12px 20px;
    margin: 8px 0;
    display: block;
    /* border-color: green; */
    box-sizing: border-box;
    background: white;
  }
  input[type=text]:focus, input[type=password]:focus {
    background-color: white;
    outline: none;
  }
  .btn {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    margin: 8px 0;
    /* border-color: green; */
    cursor: pointer;
    width: 75%;
    opacity: 0.9;
    line-height: 20px;
  }
  .btn:hover {
    opacity: 0.5;
  }
  </style>
</head>
<body>

  <header>
    <div class="overlay"></div>
    <div class="container">
      <nav>
        <h1 class="brand"><a href="contact.html">C<span>on</span>tact</a></h1>
        <ul>
          <li><a href="/Pages/Home page/update.html#">Home</a></li>
          <li><a href="/Pages/Education/education.html#">Education</a></li>
          <li><a href="/Pages/Experience/experience.html#">Experience</a></li>
          <li><a href="/Pages/Lifestyle/lifestyle.html#">Lifestyle</a></li>
          <li><a href="/Pages/Contact/contact.html#">Contact</a></li>
        </ul>
      </nav>


      <!-- LEFT CONTAINER -->
      <div class="box2">
        <div class="container2 left">
          <div class="company"></div>
        </div>
        <!-- RIGHT CONTAINER -->
        <div class="container2 right">
          <br>
          <br>
          <h1 class="wordtitle"> <strong> Get in Touch </strong> </h1>
          <h2 class="word"> Let us build the <strong> <span> FUTURE </span> </strong> we envision...</h2>

          <!-- Tab settings -->
          <div class="tab">
            <button class="tablinks" onclick="tabOpen(event, 'email')" id="defaultemail">Email</button>
            <button class="tablinks" onclick="tabOpen(event, 'phone')">Phone</button>
          </div>
          <!-- Email Content -->
          <div id="email" class="tabcontent">

            <!-- Form for php link  -->
            <div class="formContainer">
              <form class="contact-form" action="contactform.php" method="post">

                <input type="text" name="name" placeholder="Full name">
                <input type="text" name="mail" placeholder="Your E-Mail">
                <input type="text" name="subject" placeholder="Subject">

                <textarea rows="10" cols="66" name="message"  placeholder="Message"></textarea>

                <button type="submit" class="btn" name="submit">Send Mail</button>

              </form>
            </div>
          </div>
          <!-- Phone Content -->
          <div id="phone" class="tabcontent">
            <h3>Enter Phone Number</h3>
          </div>
        </div>
      </div>
      </div>
    </header>

    <script>
    function tabOpen(evt, itemName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(itemName).style.display = "block";
      evt.currentTarget.className += " active";
    }
    document.getElementById("defaultemail").click();
    </script>


</body>
</html>
