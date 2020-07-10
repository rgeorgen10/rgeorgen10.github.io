<!DOCTYPE html>
<html>
<base href="https://www.georgenswebsite.com">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/4e6fb82c0f.js" crossorigin="anonymous"></script>
<style>
    .mobile-nav {
        display: none;
    }

    .mobile-nav-list {
        display: none;
    }

    .hidden {
        display: none;
    }

    @media screen and (max-width: 620px) {
        .large-screen-nav {
            display: none;
        }

        .mobile-nav {
            display: block;
        }

        .show-menu {
            display: block;
        }
    }
</style>

<body>
    <div class="w3-bar w3-light-blue w3-large mobile-nav">
        <a href="" style="text-decoration: none;" class="w3-bar-item"><strong>Georgens' Tech Resources</strong></a>
        <a href="javascript:void();" onclick="mobileNavList();" class="w3-button w3-bar-item w3-right"><i id="mobile-menu-button" class="fa">&#xf0c9;</i></a>
    </div>
    <div id="mobile-nav-list" class="w3-bar w3-light-blue w3-large mobile-nav-list">
        <a href="" id="link1" class="w3-button w3-bar-item w3-mobile">Home</a>
        <a href="office-utilities" id="link2" class="w3-button w3-bar-item w3-mobile">Office Utilities</a>
        <a href="multimedia" id="link3" class="w3-button w3-bar-item w3-mobile">Multimedia</a>
        <a href="operating-systems" id="link4" class="w3-button w3-bar-item w3-mobile">Operating Systems</a>
        <a href="development-software" id="link5" class="w3-button w3-bar-item w3-mobile">Development Software</a>
        <a href="other-software" id="link6" class="w3-button w3-bar-item w3-mobile">Other Software</a>
        <a href="random-articles" id="link7" class="w3-button w3-bar-item w3-mobile">Random Articles</a>
        <button onclick="search();" class="w3-button w3-bar-item w3-right"><i class="fas fa-search"></i></button>
    </div>
    </div>
    <div id="large-screen-nav" class="w3-bar w3-light-blue w3-large large-screen-nav">
        <a href="" style="text-decoration: none;" class="w3-bar-item"><strong>Georgens' Tech Resources</strong></a>
        <a href="" id="home" class="w3-button w3-bar-item">Home</a>
        <a href="office-utilities" id="ou" class="w3-button w3-bar-item">Office Utilities</a>
        <a href="multimedia" id="mm" class="w3-button w3-bar-item">Multimedia</a>
        <a href="operating-systems" id="os" class="w3-button w3-bar-item">Operating Systems</a>
        <a href="development-software" id="dev" class="w3-button w3-bar-item">Development Software</a>
        <a href="other-software" id="other" class="w3-button w3-bar-item">Other Software</a>
        <a href="random-articles" id="ra" class="w3-button w3-bar-item">Random Articles</a>
        <div class="w3-dropdown-hover">
            <button id="button" class="w3-button">More <i class="fa fa-caret-down"></i></button>
            <div id="dropdown" class="w3-dropdown-content w3-bar-block">
                <a href="other-software" class="w3-button w3-bar-item">Other Software</a>
                <a href="random-articles" id="ra2" class="w3-button w3-bar-item">Random Articles</a>
            </div>
        </div>
        <button onclick="search();" class="w3-button w3-bar-item w3-right"><i class="fas fa-search"></i></button>
    </div>
    <div id="search" class="w3-bar w3-indigo w3-large hidden">
        <script async src="https://cse.google.com/cse.js?cx=009859184671082778631:ghnbgjdkqs0"></script>
        <div class="gcse-search"></div>
    </div>
</body>
<script>
    if (window.innerWidth <= "800") {
        var ra = document.getElementById("ra");
        ra.remove();
        var other = document.getElementById("other");
        other.remove();
        var dev = document.getElementById("dev");
        dev.remove();
        var link = document.createElement("a");
        var text = document.createTextNode("Development Software");
        link.appendChild(text);
        link.href = "development-software";
        link.classList.add("w3-button");
        link.setAttribute("id", "os2");
        var div = document.getElementById("dropdown");
        var ra2 = document.getElementById("ra2");
        div.insertBefore(link, ra2);
        var os = document.getElementById("os");
        os.remove();
        var link2 = document.createElement("a");
        var text2 = document.createTextNode("Operating Systems");
        link2.appendChild(text2);
        link2.href = "operating-systems";
        link2.classList.add("w3-button");
        link2.setAttribute("id", "os2");
        var os2 = document.getElementById("os2");
        div.insertBefore(link2, os2);
        var mm = document.getElementById("mm");
        mm.remove();
        var link3 = document.createElement("a");
        var text3 = document.createTextNode("Multimedia");
        link3.appendChild(text3);
        link3.href = "multimedia";
        link3.classList.add("w3-button");
        link3.setAttribute("id", "mm2");
        var mm2 = document.getElementById("mm2");
        div.insertBefore(link3, mm2);
    } else if (window.innerWidth <= "965") {
        var ra = document.getElementById("ra");
        ra.remove();
        var other = document.getElementById("other");
        other.remove();
        var dev = document.getElementById("dev");
        dev.remove();
        var link = document.createElement("a");
        var text = document.createTextNode("Development Software");
        link.appendChild(text);
        link.href = "development-software";
        link.classList.add("w3-button");
        link.setAttribute("id", "os2");
        var div = document.getElementById("dropdown");
        var ra2 = document.getElementById("ra2");
        div.insertBefore(link, ra2);
        var os = document.getElementById("os");
        os.remove();
        var link2 = document.createElement("a");
        var text2 = document.createTextNode("Operating Systems");
        link2.appendChild(text2);
        link2.href = "operating-systems";
        link2.classList.add("w3-button");
        var os2 = document.getElementById("os2");
        div.insertBefore(link2, os2);
    } else if (window.innerWidth <= "1172") {
        var ra = document.getElementById("ra");
        ra.remove();
        var other = document.getElementById("other");
        other.remove();
        var dev = document.getElementById("dev");
        dev.remove();
        var link = document.createElement("a");
        var text = document.createTextNode("Development Software");
        link.appendChild(text);
        link.href = "development-software";
        link.classList.add("w3-button");
        var div = document.getElementById("dropdown");
        var ra2 = document.getElementById("ra2");
        div.insertBefore(link, ra2);
    } else if (window.innerWidth <= "1370") {
        var ra = document.getElementById("ra");
        ra.remove();
        var other = document.getElementById("other");
        other.remove();
    } else {
        document.getElementById("button").classList.add("hidden");
    }

    function mobileNavList() {
        document.getElementById("mobile-nav-list").classList.toggle("show-menu");
    }

    function search() {
        document.getElementById("search").classList.toggle("hidden");
    }
    if (window.location.pathname == "/") {
        document.getElementById("home").classList.add("w3-cyan");
        document.getElementById("link1").classList.add("w3-cyan");
    } else if (window.location.pathname == "/office-utilities/") {
        document.getElementById("ou").classList.add("w3-cyan");
        document.getElementById("link2").classList.add("w3-cyan");
    } else if (window.location.pathname == "/multimedia/") {
        document.getElementById("mm").classList.add("w3-cyan");
        document.getElementById("link3").classList.add("w3-cyan");
    } else if (window.location.pathname == "/operating-systems/") {
        document.getElementById("os").classList.add("w3-cyan");
        document.getElementById("link4").classList.add("w3-cyan");
    } else if (window.location.pathname == "/development-software/") {
        document.getElementById("dev").classList.add("w3-cyan");
        document.getElementById("link5").classList.add("w3-cyan");
    } else if (window.location.pathname == "/other-software/") {
        document.getElementById("other").classList.add("w3-cyan");
        document.getElementById("link6").classList.add("w3-cyan");
    } else if (window.location.pathname == "/random-articles/") {
        document.getElementById("ra").classList.add("w3-cyan");
        document.getElementById("link7").classList.add("w3-cyan");
    }
</script>

</html>