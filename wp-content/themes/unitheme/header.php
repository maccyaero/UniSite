<!DOCTYPE html>
<html lang="en">

<head>

    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body onkeypress="keySearch(event)">

    <div class="header">
        <div class="flex-container">
            <div class="logo">
                <a href="<?php echo site_url() ?>">
                    <h3><span>Fictional</span> University</h3>
                </a>

            </div>
            <div class="nav">
                <ul>
                    <a href="<?php echo site_url('/about-us') ?>">
                        <li>About us</li>
                    </a>
                    <a href="<?php echo get_post_type_archive_link('program') ?>">
                        <li>Programs</li>
                    </a>
                    <a href="<?php echo site_url('/event') ?>">
                        <li>Events</li>
                    </a>
                    <a href="<?php echo site_url('/campuses') ?>">
                        <li>Campuses</li>
                    </a>
                    <a href="<?php echo site_url('/blog') ?>">
                        <li>Blog</li>
                    </a>
                    <li><a href="" class="button green">Login</a></li>
                    <li><a href="" class="button red">Sign Up</a></li>
                    <button id="search-button" onclick="search1.on()"><img id="search-logo" src="/WordpressProjects/UniSite/wp-content/themes/unitheme/images/magnifying-glass.png">
                    </button>
                </ul>
            </div>
        </div>
        <!-- THIS IS THE OVERLAY WHICH APPEARS ONCE USER CLICKS ON THE SEARCH ICON IN THE HEADER  -->
        <div id="overlay">
            <div class="search-bar">
                <div class="search-bar-icon">
                    <div style="display:block;padding-top:45px;width:50px;left:140px;top:10px;">
                        <img src="/WordpressProjects/UniSite/wp-content/themes/unitheme/images/magnifying-glass.png" alt="" id="magnify">
                    </div>
                </div>


                <div class="search-box">
                    <input type="text" placeholder="  What are you looking for ?" id="search-box" onkeyup="search1.keyboardLogic()">
                </div>
            </div>

                <button id="close-overlay" onclick="search1.off()">
                    <img src="https://img.favpng.com/18/6/25/computer-icons-x-mark-symbol-check-mark-png-favpng-KF9mksfZDGP8dja06HKW7LdMd.jpg" alt="" id="cross">
                </button>

 
            <div class="search-area">
                    <div class="loader"></div>
                    <div class="search-results"><p>These Are the Results</p></div>

            </div>
        </div>

    </div>