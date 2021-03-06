<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Ferguson Up-To-Code</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <!-- Web Application Manifest -->
    <link rel="manifest" href="manifest.json">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Web Starter Kit">
    <link rel="icon" sizes="192x192" href="images/touch/chrome-touch-icon-192x192.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Web Starter Kit">
    <link rel="apple-touch-icon" href="images/touch/apple-touch-icon.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#2F3BA2">

    <!-- Color the status bar on mobile devices -->
    <meta name="theme-color" content="#2F3BA2">
    <!-- JS -->
    <!-- please note: Other JavaScript files are loaded in the footer to speed up page construction -->

    <!-- CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">    
<link href="<?php echo URL; ?>/css/style.css" rel="stylesheet">
<link href="<?php echo URL; ?>/css/style_more.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <!-- logo -->
    <div class="container-fluid logo-strip">
        <div class="row">
            <div class="logo col-xs-6 col-sm-4 col-md-3">
                <img src="<?php echo URL; ?>/images/Ferguson_Enterprises_Logo.svg.png" alt="Ferguson Logo" class="img-responsive">
            </div>
            <div class="pull-right">                                               
                <?php if ($this->current_user) { ?>                        
                    <div class="dropdown inline">
                        <a href="#" class="btn btn-primary current-user-link" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="<?php echo URL; ?>/<?php echo $this->current_user->photo; ?>" class="img-circle loggedin-user-image" />
                            <span class="hidden-xs"><?php echo $this->current_user->firstname . ' ' . $this->current_user->lastname; ?></span>
                            <span class="caret"></span>
                        </a>                    
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        	<li><a href="<?php echo URL; ?>/">Home</a></li>
                        	<li><a href="<?php echo URL; ?>/map">Map</a></li>
						    <li><a href="<?php echo URL; ?>/home/logout">Logout</a></li>                       
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <?php if (strpos($_GET['url'], 'map') === false) { ?>
    <div class="container-fluid content-body">
        <div id="main" class="row">
    <?php } ?>