<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <title>GIMP - Georgen's Tech Resources</title>
</head>
<style>
  .header {
    width: 100%;
    height: 35vh;
    background-image: url("https://www.georgenswebsite.com/background.jpg");
    background-size: cover;
  }

  a {
    text-align: center
  }

  @media screen and (max-width: 600px) {
    h1 b {
      font-size: 10vw;
      text-align: center;
    }
  }
</style>

<body>
  <?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/navbar.php";
  include_once($path);
  ?>
  <div class="w3-display-container w3-text-white header w3-center">
    <div class="w3-display-middle w3-large">
      <h1 style="font-size:4vw;color:black;"><b>GIMP</b></h1>
    </div>
  </div>
  <div class="w3-margin">
    <br>
    <br>
    <div class="w3-cell-row">

      <div class="w3-container w3-cell">
        <img src="/multimedia/gimp.png" style="width: 40vw;" />
      </div>
      <div class="w3-container w3-cell">
        <h5 class="w3-center" style="text-decoration:underline;"><b>GIMP</b></h5>
        <p>GIMP is an open-source program similar to Photoshop. Gimp also supports Photoshop formats and is available for Windows, Mac OS X, and Linux. GIMP stands for GNU Image Manipulation Program.</p>
      </div>
    </div>
    <br>
    <br>
    <br>
    <div class="w3-cell-row">

      <div class="w3-container w3-cell">
        <h5 class="w3-center" style="text-decoration: underline;"><b>System Requirements</b></h5>
        <ul>
          <li>Operating System: Windows 7 / 8 / 10</li>
        </ul>
      </div>
      <div class="w3-container w3-cell">
        <img src="/multimedia/gimp2.jpg" style="width: 40vw;float:right;" />
      </div>
    </div>
    <br>
    <br>
    <br>
    <h1 class="w3-center">Downloads</h1>
    <br>
    <div class="w3-container w3-cell w3-center w3-mobile w3-third">
      <h3 class="w3-center w3-mobile" style="text-decoration: underline;"><b>Windows</b></h3>
      <a class="w3-button w3-cyan" href="https://download.gimp.org/mirror/pub/gimp/v2.10/windows/gimp-2.10.20-setup.exe">32 Bits or 64 Bits .exe <i class="fa fa-download"></i></a>
    </div>
    <div class="w3-container w3-cell w3-mobile w3-center w3-third">
      <h3 class="w3-center" style="text-decoration: underline;"><b>Mac</b></h3>
      <a class="w3-button w3-cyan" href="https://download.gimp.org/mirror/pub/gimp/v2.10/osx/gimp-2.10.14-x86_64-1.dmg">64 Bits Only .dmg <i class="fa fa-download"></i></a>
    </div>
    <div class="w3-container w3-cell w3-mobile w3-center w3-third">
      <h3 class="w3-center" style="text-decoration: underline;"><b>Linux</b></h3>
      <a class="w3-button w3-cyan" href="https://flathub.org/repo/appstream/org.gimp.GIMP.flatpakref">32 Bits or 64 Bits .flatpakref <i class="fa fa-download"></i></a>
      <br>
      <br>
    </div>
  </div>
</body>

</html>