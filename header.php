<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>
    <?php wp_title('|', true, 'right'); ?>
  </title>

  <?php wp_head(); ?>
</head>

<body>
  <?php get_template_part('partials/content', 'header'); ?>
  <main>