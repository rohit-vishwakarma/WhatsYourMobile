<?php
session_start();
?>
<html>
    <head>
          <title>WhatsYourMobile</title>
          <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"  >
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css" >
    <script src="../../bootstrap/js/jquery-3.3.1.min.js"></script>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
        <link href="../../css2.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="header navbar navbar-inverse navbar-fixed-top"> 
        <div class="navbar-header"> 
            <div type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> 
                  <span class="icon-bar"></span> 
                      <span class="icon-bar"></span> 
                          <span class="icon-bar"></span> 
              </div> 
            <a href="../../index.php"><img src="../../img/Whatsyourmobile.png"
                                                               height="50px" width="260px"  ></a></div> 
                <div class="collapse navbar-collapse" id="myNavbar"> 
              <ul class="nav navbar-nav navbar-right"> 
                 <?php 
                 if (isset($_SESSION['email'])) 
                 { 
                 ?>  
                   <li><a href="../../mobile.php" class="header-link"><span class="glyphicon glyphicon-phone"></span> Mobile</a></li> 
                   <li><a href="../../setting.php" class="header-link"><span class="glyphicon glyphicon-menu-hamburger"></span> Setting</a></li> 
                  <li><a href="../../logout.php" class="header-link"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li> 
                 
                  <?php 
                 }else { 
                     ?> 
                  <li><a href="../../mobile.php" class="header-link"><span class="glyphicon glyphicon-phone"></span> Mobile</a></li> 
                  <li><a href="../../Signup.php" class="header-link"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> 
                  <li><a href="../../login.php" class="header-link"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> 
                <?php 
                 } 
                 ?> 
              </ul> 
                </div></div><br>
        <div class="container">
             <div>
            <img class="img-responsive" src="../../img/samsung/a80.jpg" alt="Samsung Galaxy A80"><h3>Samsung Galaxy A80</h3>
        </div>
        <table style="width:100%" class="table-bordered table-hover">
  
  <tr>
      <td><b>NETWORK</b></td>
      <td>Technology<br><br></td> 
    <td>GSM / HSPA / LTE<br><br></td>
  </tr>
  <tr>
    <td><b>LAUNCH</b></td>
    <td>Announced<br>Status<br><br></td> 
    <td>2019, April<br>released 2019, May 29<br><br></td>
  </tr>
  <tr>
      <td><b>BODY</b></td>
      <td>Dimensions<br>Weight<br>SIM<br><br></td>
      <td>165.2 x 76.5 x 9.3 mm (6.50 x 3.01 x 0.37 in)<br>-<br>Front/back glass, aluminum frame<br>
          Single SIM (Nano-SIM) or Dual SIM (Nano-SIM, dual stand-by)<br><br></td>
  </tr>
  <tr>
      <td><b>DISPLAY</b></td>
      <td>Type<br>Size<br>Resolution<br><br></td>
      <td>Super AMOLED capacitive touchscreen, 16M colors<br>6.7 inches, 108.4 cm2 (~85.8% screen-to-body ratio)<br>
          1080 x 2400 pixels (~393 ppi density)<br><br></td>
  </tr><tr>
      <td><b>PLATFORM</b></td>
      <td>OS<br>Chipset<br><br>CPU<br><br>GPU<br><br></td>
      <td>Android 9.0 (Pie); One UI<br>Qualcomm SDM730 Snapdragon 730 (8 nm)<br>
          Octa-core (2x2.2 GHz Kryo 470 Gold & 6x1.7 GHz Kryo 470 Silver)<br>
          Adreno 618<br><br></td>
  </tr><tr>
      <td><b>MEMORY</b></td>
      <td>Card slot<br>	
          Internal<br><br></td>
      <td>No<br>128 GB, 8 GB RAM<br><br></td>
  </tr><tr>
      <td><b>MAIN CAMERA</b></td>
      <td>Triple<br><br><br>	
          Features<br>Video<br><br></td>
      <td>48 MP, f/2.0, PDAF<br>8 MP, f/2.2, 12mm (ultrawide)<br>
          TOF 3D camera<br>LED flash, panorama, HDR<br>
          2160p@30fps, 1080p@30fps<br><br></td>
  </tr><tr>
      <td><b>SELFIE CAMERA</b></td>
      <td>Triple<br>	
          Features<br>Video<br><br></td>
      <td>Motorized pop-up rotating main camera module<br>LED flash, panorama, HDR<br>
          2160p@30fps, 1080p@30fps<br><br></td>
  </tr><tr>
      <td><b>SOUND</b></td>
      <td>Loudspeaker<br>	
          3.5mm jack<br><br><br><br></td>
      <td>Yes<br>No<br>Active noise cancellation with dedicated mic<br>Dolby Atmos sound<br><br></td>
  </tr><tr>
      <td><b>COMMS</b></td>
      <td>WLAN<br>	
          Bluetooth<br>
          GPS<br>	
          Radio<br>USB<br><br></td>
      <td>Yes<br>Yes<br>Yes, with A-GPS, GLONASS, GALILEO, BDS<br>FM radio<br>
          2.0, Type-C 1.0 reversible connector<br><br></td>
  </tr><tr>
      <td><b>FEATURES</b></td>
      <td>Sensors<br><br></td>
      <td>Fingerprint (under display), accelerometer, gyro, proximity, compass<br>ANT+<br><br></td>
  </tr><tr>
      <td><b>BATTERY</b></td>
      <td><br>Charging<br><br></td>
      <td>Non-removable Li-Po 3700 mAh battery<br>Fast battery charging 25W<br><br><br></td>
  </tr><tr>
      <td><b>MISC</b></td>
      <td>Colors<br>Models<br>Price<br><br></td>
      <td>Angel Gold, Ghost White, Phantom Black<br>SM-A805F<br>About 650 EUR<br><br></td>
  </tr>
</table>
        </div>
        <br><br> <br><br><br><br><br> 
         <footer>
          
               <div class="navbar navbar-inverse navbar-fixed-bottom">  
                   <div class="header">
            <div class="collapse navbar-collapse" id="myNavbar">                
                <ul class="navbar-nav nav">
                    <li> <a  href="../../index.php"><span class="glyphicon glyphicon-home"></span> HOME</a> </li>
                    <li><a  href="../../contact.php"><span class="glyphicon glyphicon-list"></span> CONTACT</a></li>
                </ul>
                </div>
                    <center>  <p>This website is developed by Rohit Vishwakarma.</p></center>
                   </div></div>
                   
       </footer>
    </body>
</html>




