<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head() ?>
    <title>Peter Miller</title>
</head>

<body <?php body_class(); ?>>

    <!-- Scroll to top div - TO DO - Add this to the WP Head file -->
    <div class="scroll__top-btn"><span class="arrow"></span></div>

    <!-- Dropdown mobile nav - HIDDEN ON ALL VIEWS EXCEPT MOBILE/TABLET -->
    <div class="main__nav">
        <!-- Add line height to center vertically -->
        <div class="main__logo">
            <a href="#!">
                <!-- TO DO - Update path to use Uploads folder -->
                <img src="wp-content/themes/petem/assets/skullimagesmall.jpg" alt="navigation logo">
            </a>
        </div>
        <div class="main__collapse">
            <ul class="main__nav-items">
                <li><a href="#!">Main</a></li>
                <li><a href="#!">About</a></li>
                <li><a href="#!">Shows</a></li>
                <li><a href="#!">Bands</a></li>
                <li><a href="#!">Production</a></li>
            </ul>
        </div>
    </div>