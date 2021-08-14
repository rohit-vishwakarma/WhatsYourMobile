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
            <img class="img-responsive" src="../../img/redmi/note7pro.jpg" alt="Xiaomi Redmi Note 7 Pro"><h3>Xiaomi Redmi Note 7 Pro</h3>
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
    <td>2019, February<br>Available. Released 2019, March<br><br></td>
  </tr>
  <tr>
      <td><b>BODY</b></td>
      <td>Dimensions<br>Weight<br>SIM<br><br></td>
      <td>159.2 x 75.2 x 8.1 mm (6.27 x 2.96 x 0.32 in)<br>186 g (6.56 oz)
          Front/back glass (Gorilla Glass 5)<br>Hybrid Dual SIM (Nano-SIM, dual stand-by)<br><br></td>
  </tr>
  <tr>
      <td><b>DISPLAY</b></td>
      <td>Type<br>Size<br>Resolution<br><br></td>
      <td>IPS LCD capacitive touchscreen, 16M colors<br>6.3 inches, 97.4 cm2 (~81.4% screen-to-body ratio)
          <br>1080 x 2340 pixels, 19.5:9 ratio (~409 ppi density)<br>Corning Gorilla Glass 5<br><br></td>
  </tr><tr>
      <td><b>PLATFORM</b></td>
      <td>OS<br>Chipset<br><br>CPU<br><br>GPU<br><br></td>
      <td>Android 9.0 (Pie); MIUI 10<br>Qualcomm SDM675 Snapdragon 675 (11 nm)<br>
          Octa-core (2x2.0 GHz Kryo 460 Gold & 6x1.7 GHz Kryo 460 Silver)<br>
          Adreno 612<br><br></td>
  </tr><tr>
      <td><b>MEMORY</b></td>
      <td>Card slot<br>	
          Internal<br><br></td>
      <td>microSD, up to 256 GB (uses shared SIM slot)<br>128 GB, 6 GB RAM or 64 GB, 4 GB RAM
          <br><br></td>
  </tr><tr>
      <td><b>MAIN CAMERA</b></td>
      <td>Dual<br><br>	
          Features<br>Video<br><br></td>
      <td>48 MP, f/1.8, 1/2", 0.8µm, PDAF<br>5 MP, f/2.4, depth sensor<br>
          Dual-LED flash, HDR, panorama<br>2160p@30fps, 1080p@30/60/120fps, (gyro-EIS)<br><br></td>
  </tr><tr>
      <td><b>SELFIE CAMERA</b></td>
      <td>Single<br>	
          Features<br>Video<br><br></td>
      <td>13 MP<br>HDR<br>1080p@30fps<br><br></td>
  </tr><tr>
      <td><b>SOUND</b></td>
      <td>Loudspeaker<br>	
          3.5mm jack<br><br><br></td>
      <td>Yes<br>Yes<br>Active noise cancellation with dedicated mic<br><br></td>
  </tr><tr>
      <td><b>COMMS</b></td>
      <td>WLAN<br>	
          Bluetooth<br>
          GPS<br>Infrared port<br>	
          Radio<br>USB<br><br></td>
      <td>Wi-Fi 802.11 a/b/g/n/ac, dual-band, Wi-Fi Direct, hotspot<br>5.0, A2DP, LE<br>
          Yes, with A-GPS, GLONASS, BDS<br>Yes<br>FM radio, recording<br>
          2.0, Type-C 1.0 reversible connector<br><br></td>
  </tr><tr>
      <td><b>FEATURES</b></td>
      <td>Sensors<br><br></td>
      <td>Fingerprint (rear-mounted), accelerometer, gyro, proximity, compass<br><br></td>
  </tr><tr>
      <td><b>BATTERY</b></td>
      <td><br>Charging<br><br></td>
      <td>Non-removable Li-Po 4000 mAh battery<br>Fast battery charging 18W (Quick Charge 4)<br><br></td>
  </tr><tr>
      <td><b>MISC</b></td>
      <td>Colors<br>Models<br>Price<br><br></td>
      <td>Nebula Red, Neptune Blue, Space Black<bR>Redmi Note 7 Pro<br>About 200 EUR<br><br></td>
  </tr>
</table>
        </div>
        <br><br><br><br><br><br> <br>
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




