<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="description" content="Desenvolvimento web focada em Python, web2py, JavaScript e plataformas de computação em nuvem." />
    <meta name="keywords" content="front-end, desenvolvedor, programador, freela, python, javascript, jquery, web2py, developer, freelancer, portifólio." />
    <!-- http://dev.w3.org/html5/markup/meta.name.html -->
    <meta name="application-name" content="Gustavo de Souza Lima" />
    <meta name = "viewport" content = "width=device-width, maximum-scale = 1, minimum-scale=1">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" type="image/x-icon">
    <title><?php
        /*
         * Print the <title> tag based on what is being viewed.
         */
        global $page, $paged;

        wp_title( '|', true, 'right' );

        // Add the blog name.
        bloginfo( 'name' );

        // Add the blog description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
            echo " | $site_description";

        // Add a page number if necessary:
        if ( $paged >= 2 || $page >= 2 )
            echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

        ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link media="all" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link media="all" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/prettyPhoto.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.main.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/retina.js"></script>
    <!--[if gte IE 9]>
    <style type="text/css">.gradient { filter: none;}</style>
    <![endif]--> <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body>
    <div class="wrapper">
       <div class="pagewidth">
            <header class="site-header">
                <div class="pagewidth">
                    <!-- <img alt="Chamfer" class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" width="149" height="25" /> -->
                    <nav class="main-navigation">
                        <a class="opener" href="#">Open menu</a>
                        <ul>
                            <li class="active opt-default"><a href="#home" title="Home">HOME</a></li>
                            <li><a href="#about" title="About">SOBRE</a></li>
                            <li><a href="#portfolio" title="Portfolio">PORTIFÓLIO</a></li>
                            <li><a href="#testimonials" title="TestimonialS">BLOG</a></li>
                            <li><a href="#contacts" title="Contact">CONTATO</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
            <section class="site-content">
                <section class="block blue" id="home">
                    <div class="block-holder">
                        <div class="visual">
                        <div class="picture">
                        <div class="holder">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/img01.jpg" alt="" width="380" height="380" >                              </div>                          </div>                      </div>
                        <div class="intro">
                            <h1><?php echo bloginfo( 'name' ); ?></h1>
                            <span class="title"><?php echo $site_description; ?></span>
                            <a href="#contacts" title="HIRE ME NOW" class="btn-red">ENTRE EM CONTATO AGORA</a>
                            <a href="#portfolio" title="PORTFOLIO" class="btn-green">PORTIFÓLIO</a>
                        </div>
                    </div>
                </section>
            <section class="block orange" id="about">
                <div class="block-holder">
                    <div class="skills">
                        <h2>Habilidades</h2>
                        <div class="skill">
                            <h3>HTML5/CSS3</h3>
                            <div class="bar">
                                <span class="value">9/10</span>
                                <div class="progressbar">
                                    <div class="progressbar-value" style="width:90%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="skill">
                            <h3>Jquery</h3>
                            <div class="bar">
                                <span class="value">9/10</span>
                                <div class="progressbar">
                                    <div class="progressbar-value" style="width:90%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="skill">
                        <h3>Cloud computing platforms</h3>
                            <div class="bar">
                                <span class="value">9/10</span>
                                <div class="progressbar">
                                    <div class="progressbar-value" style="width:90%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="skill">
                            <h3>Javascript</h3>
                            <div class="bar">
                                <span class="value">5/10</span>
                                <div class="progressbar">
                                    <div class="progressbar-value" style="width:50%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="skill">
                            <h3>Python</h3>
                            <div class="bar">
                                <span class="value">5/10</span>
                                <div class="progressbar">
                                    <div class="progressbar-value" style="width:50%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="skill">
                        <h3>Framework Web2py</h3>
                            <div class="bar">
                                <span class="value">8/10</span>
                                <div class="progressbar">
                                    <div class="progressbar-value" style="width:80%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="experience">
                        <h2>Experiência</h2>
                        <ul class="experience-list">
                            <li>
                                <span class="year">2013 - atual</span>
                                <h3>Front End - Freelance</h3>
                                <p>Desenvolvimento ágil com framework Web2py, Jquery e Twitter Bootstrap.</p>
                            </li>
                            <li>
                                <span class="year">2009 - 2013</span>
                                <h3>Web Developer - Agência X4</h3>
                                <p>Desenvolvi diversos projetos onde pude aprimorar meus conhecimentos como Front-end em Javascript, Jquery e Python.</p>
                            </li>
                            <li>
                                <span class="year">2007 - 2009</span>
                                <h3>Sys Admin - X4IDS Informatica</h3>
                                <p>Administrador de Servidores Windows, Linux e Email Marketing.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>