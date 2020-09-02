
<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="header">
<div class="flex-container">
        <div class="logo">
            <a href="<?php echo site_url() ?>">
            <h3><span>Fictional</span> University</h3>
        </a>
            
        </div>
        <div class="nav">
            <ul>
                <a href="<?php echo site_url('/about-us') ?>"><li >About us</li></a>
                <li>Programs</li>
                <li>Events</li>
                <li>Campuses</li>
                <li>Blog</li>
                <li><a href="" class = "button green">Login</a></li>
                <li><a href="" class="button red">Sign Up</a></li>
            </ul>
        </div>
    </div>
    </div>
