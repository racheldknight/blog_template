<!DOCTYPE html>
<html>
<head>
<title></title>
<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
</head>

<body>
    <div class="container">
        <header class="row">
            <div class="twelve columns">
                <a href="<?php $url = home_url('/'); echo $url; ?>"><h1>RK</h1></a>
            </div>
        </header>

<!-- Add Menu Here -->
    <div class="row">
        <div class="twelve columns">
            <?php wp_nav_menu(array(
                'sort_column' => 'menu_order', 
                'container_class' => 'blank-menu-header'
                ));?>
        </div>
    </div>

<!-- END OF HEADER -->