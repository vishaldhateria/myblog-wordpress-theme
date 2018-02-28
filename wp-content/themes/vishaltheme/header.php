<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Header</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<?php 

if (is_home()) :
    $awesome_classes = array('awesome-class', 'my-class');
else :
    $awesome_classes = array('no-awesome-class');
endif;

?>
<body <?php body_class(); ?>>
		<!-- <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" /> -->
    <header class="header">
      <!-- Main Navbar-->
      <nav class="navbar navbar-expand-lg">
        <div class="search-area">
          <div class="search-area-inner d-flex align-items-center justify-content-center">
            <div class="close-btn"><i class="icon-close"></i></div>
            <div class="row d-flex justify-content-center">
              <div class="col-md-8">
                <form action="#">
                  <div class="form-group">
                    <input type="search" name="search" id="search" placeholder="What are you looking for?">
                    <button type="submit" class="submit"><i class="icon-search-1"></i></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <!-- Navbar Brand -->
          <div class="navbar-header d-flex align-items-center justify-content-between">
            <!-- Navbar Brand --><a href="index.html" class="navbar-brand">Vishal Dhateria</a>
            <!-- Toggle Button-->
            <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span></span><span></span><span></span></button>
          </div>
          <!-- Navbar Menu -->
          <div id="navbarcollapse" class="collapse navbar-collapse">
          
            	<?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'navbar-nav ml-auto',
            ));
            ?>
            <div class="navbar-text"><a href="#" class="search-btn"><i class="icon-search-1"></i></a></div>
            <ul class="langs navbar-text"><a href="#" class="active">EN</a><span>           </span><a href="#">ES</a></ul>
          </div>
        </div>
      </nav>
    </header>