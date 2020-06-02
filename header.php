<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php bloginfo( 'name' ); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Lato|Roboto:400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">    
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/lib/prettify/skins/sunburst.css">
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/lib/prettify/run_prettify.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var pres = document.querySelectorAll('pre');
            pres.forEach(pre => {
                pre.classList.add('prettyprint', 'sunburst')
            });
        });
    </script>
    <?php wp_head(); ?>
</head>
<body onload="PR.prettyPrint()">