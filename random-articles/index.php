<!DOCTYPE html>
<html>

<head>
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

            .mobile-hide {
                display: none;
            }
        }
    </style>
    <title>Random Articles - Georgen's Tech Resources</title>
    <link rel="icon" href="favicon.ico" />
</head>

<body>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/navbar.php";
    include_once($path);
    ?>
    <div class="w3-display-container w3-text-white header w3-center">
        <div class="w3-display-middle w3-large">
            <h1 style="font-size:4vw;color:black;"><b>Random Articles</b></h1>
        </div>
    </div>
    <div class="w3-margin">
        <hr style="margin-right:15%;margin-left:15%" class="w3-border-grey w3-topbar">
        <h2 class="w3-center">Posts</h2>
        <hr style="margin-right:15%;margin-left:15%" class="w3-border-grey w3-topbar">
        <div style="margin-right:15%;margin-left:15%">
            <div class="w3-cell w3-container">
                <img src="/random-articles/crouton_icon.png" class="mobile-hide" width="200px" height="200px" />
            </div>
            <div class="w3-cell w3-container">
                <h2 class="w3-center"><a href="https://www.howtogeek.com/162120/how-to-install-ubuntu-linux-on-your-chromebook-with-crouton/">How to Install Ubuntu Linux on Your ChromeBook with Crouton</a></h2>
                <p>Chromebooks aren’t “just a browser”—they’re Linux laptops. You can easily install a full Linux desktop alongside alongside Chrome OS...<a href="https://www.howtogeek.com/162120/how-to-install-ubuntu-linux-on-your-chromebook-with-crouton/">[Read More]</a></p>
            </div>
            <br>
            <hr class="w3-border-grey">
            <br>
            <div class="w3-cell w3-container">
                <img src="/random-articles/vmware_vs_virtualbox_icon.jpg" class="mobile-hide" width="200px" />
            </div>
            <div class="w3-cell w3-container">
                <h2 class="w3-center"><a href="https://www.google.com/url?q=https%3A%2F%2Ftechnologyadvice.com%2Fblog%2Finformation-technology%2Fvmware-vs-virtualbox%2F&sa=D&sntz=1&usg=AFQjCNEFKqs1zYvZe5TLqvoHGLLn9AhVrQ">VMWare vs. VirtualBox: Which is Better for Virtualization</a></h2>
                <p>In the modern IT environment, desktop virtualization can be extremely useful. The ability to run multiple, simultaneous operating systems as VMs...<a href="https://www.google.com/url?q=https%3A%2F%2Ftechnologyadvice.com%2Fblog%2Finformation-technology%2Fvmware-vs-virtualbox%2F&sa=D&sntz=1&usg=AFQjCNEFKqs1zYvZe5TLqvoHGLLn9AhVrQ">[Read More]</a></p>
            </div>
            <br>
            <hr class="w3-border-grey">
            <br>
            <div class="w3-cell w3-container">
                <img src="/random-articles/best_browser_icon.jpg" class="mobile-hide" width="200px" />
            </div>
            <div class="w3-cell w3-container">
                <h2 class="w3-center"><a href="https://www.google.com/url?q=https%3A%2F%2Fwww.techradar.com%2Fbest%2Fbrowser&sa=D&sntz=1&usg=AFQjCNEPVqoYdu6xJfJGQQyRZDTRl9fWrg">The Best Web Browser for 2019</a></h2>
                <p>The right web browser can make a huge difference to your everyday browsing – whether your priority is faster performance, better security...<a href="https://www.google.com/url?q=https%3A%2F%2Fwww.techradar.com%2Fbest%2Fbrowser&sa=D&sntz=1&usg=AFQjCNEPVqoYdu6xJfJGQQyRZDTRl9fWrg">[Read More]</a></p>
            </div>
            <br>
            <hr class="w3-border-grey">
            <br>
            <div class="w3-cell w3-container">
                <img src="/random-articles/terminal_icon.jpg" class="mobile-hide" width="200px" />
            </div>
            <div class="w3-cell w3-container">
                <h2 class="w3-center"><a href="http://www.informit.com/blogs/blog.aspx?b=2e1a39cd-e73b-4f8d-82f2-5f9b769132e1">The 10 Most Important Linux Commands</a></h2>
                <p>You're new to the Linux Command Line and truth be told, you might be a little intimidated. Coming from the comfort of a PC or Mac desktop, the Linux...<a href="http://www.informit.com/blogs/blog.aspx?b=2e1a39cd-e73b-4f8d-82f2-5f9b769132e1">[Read More]</a></p>
            </div>
            <br>
            <hr class="w3-border-grey">
            <br>
            <div class="w3-cell w3-container">
                <img src="/random-articles/virtualization_fedora.png" class="mobile-hide" width="200px" />
            </div>
            <div class="w3-cell w3-container">
                <h2 class="w3-center"><a href="https://docs.fedoraproject.org/en-US/quick-docs/getting-started-with-virtualization/">Getting Started with Virtualization on Fedora</a></h2>
                <p>Virtualization is a way to run an operating system in an isolated environment...<a href="https://docs.fedoraproject.org/en-US/quick-docs/getting-started-with-virtualization/">[Read More]</a></p>
            </div>
            <br>
            <hr class="w3-border-grey">
            <br>
            <div class="w3-cell w3-container">
                <img src="/random-articles/arch-logo.png" class="mobile-hide" width="200px" />
            </div>
            <div class="w3-cell w3-container">
                <h2 class="w3-center"><a href="https://itsfoss.com/install-arch-linux/">How to Install Arch Linux</a></h2>
                <p>Arch Linux is a x86-64 general-purpose Linux distribution which has been popular among the...<a href="https://itsfoss.com/install-arch-linux/">[Read More]</a></p>
            </div>
            <br>
            <hr class="w3-border-grey">
            <br>
            <div class="w3-cell w3-container">
                <img src="/random-articles/windows_terminal_icon.jpg" class="mobile-hide" width="200px" />
            </div>
            <div class="w3-cell w3-container">
                <h2 class="w3-center"><a href="https://devblogs.microsoft.com/commandline/introducing-windows-terminal/">Introducing Windows Terminal</a></h2>
                <p>We are beyond excited to announce Windows Terminal! Windows Terminal is a new, modern...<a href="https://devblogs.microsoft.com/commandline/introducing-windows-terminal/">[Read More]</a></p>
            </div>
            <br>
            <hr class="w3-border-grey">
            <br>
            <div class="w3-cell w3-container">
                <img src="/random-articles/arch_logo.jpeg" class="mobile-hide" width="200px" />
            </div>
            <div class="w3-cell w3-container">
                <h2 class="w3-center"><a href="https://itsfoss.com/best-aur-helpers/">Yaourt is Dead! Use These Alternatives for AUR in Arch Linux</a></h2>
                <p>Brief: Yaourt had been the most popular AUR helper, but it is not being developed anymore. In this article, we list out some of the best...<a href="https://itsfoss.com/best-aur-helpers/">[Read More]</a></p>
            </div>
            <br>
            <hr class="w3-border-grey">
            <br>
            <div class="w3-cell w3-container">
                <img src="/random-articles/sudo.jpg" class="mobile-hide" width="200px" />
            </div>
            <div class="w3-cell w3-container">
                <h2 class="w3-center"><a href="https://www.digitalocean.com/community/tutorials/how-to-edit-the-sudoers-file-on-ubuntu-and-centos">How To Edit the Sudoers File on Ubuntu, CentOS, and Arch</a></h2>
                <p>Privilege separation is one of the fundamental security paradigms implemented in Linux and Unix-like operating systems...<a href="https://www.digitalocean.com/community/tutorials/how-to-edit-the-sudoers-file-on-ubuntu-and-centos">[Read More]</a></p>
            </div>
            <br>
            <hr class="w3-border-grey">
            <br>
            <div class="w3-cell w3-container">
                <img src="/random-articles/sign_drivers.png" class="mobile-hide" width="200px" />
            </div>
            <div class="w3-cell w3-container">
                <h2 class="w3-center"><a href="https://kb.vmware.com/s/article/2146460">How to Sign Kernel Drivers in Linux</a></h2>
                <p>On linux, some operating systems and virtual machine softwares require you to sign a kernel driver when secure boot is enabled...<a href="https://kb.vmware.com/s/article/2146460">[Read More]</a></p>
            </div>
            <br>
            <hr class="w3-border-grey">
            <br>
            <div class="w3-cell w3-container">
                <img src="/random-articles/win_update.ico" class="mobile-hide" width="200px" />
            </div>
            <div class="w3-cell w3-container">
                <h2 class="w3-center"><a href="https://www.techradar.com/news/microsoft-keeps-breaking-windows-10-apple-should-learn-from-its-mistakes">Microsoft keeps breaking Windows 10 – Apple should learn from its mistakes</a></h2>
                <p>Apple has just released macOS Catalina, its latest update to the operating system powering Macs and MacBooks, and while the launch...<a href="https://www.techradar.com/news/microsoft-keeps-breaking-windows-10-apple-should-learn-from-its-mistakes">[Read More]</a></p>
            </div>
            <br>
            <hr class="w3-border-grey">
            <br>
            <div class="w3-cell w3-container">
                <img src="/random-articles/secure-boot.png" class="mobile-hide" width="200px" />
            </div>
            <div class="w3-cell w3-container">
                <h2 class="w3-center"><a href="https://wiki.archlinux.org/index.php/Secure_Boot">How to Enable Secure Boot with Linux</a></h2>
                <p>How to sign your bootloader and linux kernel to protect your system from root kits and other viruses on Arch or other linux distros...<a href="https://wiki.archlinux.org/index.php/Secure_Boot">[Read More]</a></p>
            </div>
            <br>
            <hr class="w3-border-grey">
            <br>
            <div class="w3-cell w3-container">
                <img src="/random-articles/crouton_icon.png" class="mobile-hide" width="200px" />
            </div>
            <div class="w3-cell w3-container">
                <h2 class="w3-center"><a href="https://itsfoss.com/best-linux-desktop-environments/">The 7 Best Desktop Environments For Linux</a></h2>
                <p>Chromebooks aren’t “just a browser”—they’re Linux laptops. You can easily install a full Linux desktop alongside alongside Chrome OS...<a href="https://itsfoss.com/best-linux-desktop-environments/">[Read More]</a></p>
            </div>
            <br>
            <br>
        </div>
    </div>
</body>

</html>