<!DOCTYPE html>
<html>
    <head>
        <style>
        body {
            font-family:Verdana, Geneva, Tahoma, sans-serif;
        }
        .header {
            position: relative;
            text-align: center;
            color: Black;
        }
        .imgtext {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 75px;
            font-family:Verdana, Geneva, Tahoma, sans-serif;
        }
        h3 {
            color: #09164a;
        }
        hr {
            margin-right: 200px;
            margin-left: 200px;
            height: 10px;
            color: #e6e6e6;
            background-color: #e6e6e6;
            border: none;
        }
        .logo {
            float: left;
            margin-right: 75px;
        }
        .list {
            margin-left: 15%;
            margin-right: 15%;
        }
        p {
          text-align: center;
          margin-left: 17.5%;
          margin-right: 17.5%;
        }
        .download {
          display: flex;
          flex-direction: row;
          justify-content: space-between;
          width: 50%;
          margin: 0 auto;
        }

      .flex-item {
        width: 100px;
        height: 200px;
        }
        .button {
          text-decoration: none;
          background-color: #09164a;
          text-align: center;
          padding: 10px 12px;
          color: white;
        }
        .requirements {
          margin-left: 17.5%;
        }
        .center-image{text-align:center;}
        @media screen and (max-width: 900px) {
            .list {
                margin-left: 3%;
                margin-right: 3%;
            }
            .logo {
                float: center;
                margin-right: 0px;
            }
            hr {
                margin-right: 10px;
                margin-left: 10px;
            }
            .download {
              width: 95%;
            }
        }

        </style>
        <title>Category - Georgen's Tech Resources</title>
        <link rel="icon" href="favicon.ico"/>
    </head>
    <body>
        <?php
                $path = $_SERVER['DOCUMENT_ROOT'];
                $path .= "/navbar.php";
                include_once($path);
        ?>
        <div class="header">
            <img src="https://www.georgenswebsite.com/background.jpg" width="100%" height="500px"/>
            <div class="imgtext"><strong>Page Heading</strong></div>
        </div>
        <br>
        <p>Paragraph</p>
        <br>
        <div class="center-image">
          <img style="text-align:center;" src="https://www.solidbackgrounds.com/images/2560x1440/2560x1440-aqua-solid-color-background.jpg" width="65%"/>
        </div>
        <br>
        <div class="requirements">
        <h3>System Requirements</h3>
        <ul>
          <li></li>
        </ul>
      </div>
        <br>
        <h2 style="text-align:center;">Download</h2>
        <br>
        <br>
        <div class="download">
          <div class="windows flex-item">
            <a class="button" href="#">Win 32</a>
            <br>
            <br>
            <br>
            <br>
            <a class="button" href="#">Win 64</a>
          </div>
          <div class="mac flex-item">
            <a class="button" href="#">Mac 32</a>
            <br>
            <br>
            <br>
            <br>
            <a class="button" href="#">Mac 64</a>
          </div>
          <div class="deb flex-item">
            <a class="button" href="#">Deb 32</a>
            <br>
            <br>
            <br>
            <br>
            <a class="button" href="#">Deb 64</a>
          </div>
          <div class="rpm flex-item">
            <a class="button" href="#">Rpm 32</a>
            <br>
            <br>
            <br>
            <br>
            <a class="button" href="#">Rpm 64</a>
          </div>
        </div>
    </body>
</html>
