<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head>
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

    <title><?php wp_title(':', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link media="all" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style_blog.css">

  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

  </script>
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<div id="siteWrapper">

  <h1 class="vcard author">
    <img src="<?php echo get_template_directory_uri(); ?>/img/img02.jpg" class="avatar_photo" alt="Gustavo de Souza Lima Pereira" />
    <br />
    <a href="<?php echo get_option('home'); ?>/" title="Home" class="fn">
    <?php  bloginfo('name');?>
    </a>
  </h1>

<?php wp_nav_menu( array( 'container' => '' ) ); ?>

    <?php
      if($post->post_parent)
      $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
      else
      $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
      if ($children) { ?>
      <div id="subNav">
      <ul>
      <?php echo $children; ?>
      </ul>
      </div>
      <?php } ?>

  <div id="siteDescription">
    <?php  bloginfo('description'); ?>
  </div>
