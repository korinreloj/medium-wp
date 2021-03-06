<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width,initial-scale=1.0" />

    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/styles.css?v=<?php echo date('timestamp]'); ?>">

    <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Open+Sans:400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  </head>

  <body <?php body_class(); ?> >
    
  <header class="header">
    <div class="header__content">
      <a class="header__link-left" href="#0">Become a member</a>
      <h1>Medium</h1>

      <div class="header__link">
        <i class="fa fa-search"></i>
        <a class="header__link-right" href="#0">Sign in</a>
       <button class="header__button">Get Started</button>
      </div>
    </div>
  </header>
  <main>