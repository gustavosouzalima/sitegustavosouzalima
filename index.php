<?php get_header(); // Load the header.php template. ?>

    <section class="block green" id="portfolio">
        <div class="block-holder">
            <div class="col">
                <h2>Portifólio</h2>
                <ul class="tabset">
                    <li class="active"><a data-filter="" title="Show all" href="#">Mostrar todos</a></li>
                    <li><a data-filter=".Comercial" title="Show all" href="#">Comercial</a></li>
                    <li><a data-filter=".OpenSource" title="Show all" href="#">OpenSource</a></li>
                    <li><a data-filter=".Pessoal" title="Show all" href="#">Pessoal</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <ul class="images">
                    <li class="OpenSource">
                        <div class="image">
                            <a class="prettyPhoto[OpenSource]" href="<?php echo get_template_directory_uri(); ?>/img/scrumforme_full.jpg"><img alt="" src="<?php echo get_template_directory_uri(); ?>/img/scrumforme.jpg"></a>
                        </div>
                        <strong class="name"><span>Scrumforme</span></strong>
                        <p>OpenSource</p>
                    </li>
                    <li class="Comercial">
                        <div class="image">
                            <a class="prettyPhoto[Comercial]" href="<?php echo get_template_directory_uri(); ?>/img/meutrampo_full.jpg"><img alt="" src="<?php echo get_template_directory_uri(); ?>/img/meutrampo.png"></a>
                        </div>
                        <strong class="name"><span>Meutrampo</span></strong>
                        <p>Comercial</p>
                    </li>
                    <li class="OpenSource">
                        <div class="image">
                            <a class="prettyPhoto[OpenSource]" href="<?php echo get_template_directory_uri(); ?>/img/kolaborativa_full.jpg"><img alt="" src="<?php echo get_template_directory_uri(); ?>/img/kolaborativa.jpg"></a>
                        </div>
                        <strong class="name"><span>Rede Kolaborativa</span></strong>
                        <p>OpenSource</p>
                    </li>
                    <li class="Comercial">
                        <div class="image">
                            <a class="prettyPhoto[Comercial]" href="<?php echo get_template_directory_uri(); ?>/img/plugow_full.jpg"><img alt="" src="<?php echo get_template_directory_uri(); ?>/img/plugow.jpg"></a>
                        </div>
                        <strong class="name"><span>Plugow</span></strong>
                        <p>Comercial</p>
                    </li>
                    <li class="Comercial">
                        <div class="image">
                            <a class="prettyPhoto[Comercial]" href="<?php echo get_template_directory_uri(); ?>/img/lapachamama_full.jpg"><img alt="" src="<?php echo get_template_directory_uri(); ?>/img/lapachamama.jpg"></a>
                        </div>
                        <strong class="name"><span>Lapachamama</span></strong>
                        <p>Comercial</p>
                    </li>
                    <li class="OpenSource">
                        <div class="image">
                            <a class="prettyPhoto[OpenSource]" href="<?php echo get_template_directory_uri(); ?>/img/web2canvas_full.jpg"><img alt="" src="<?php echo get_template_directory_uri(); ?>/img/web2canvas.jpg"></a>
                        </div>
                        <strong class="name"><span>Web2canvas</span></strong>
                        <p>OpenSource</p>
                    </li>
                    <li class="OpenSource">
                        <div class="image">
                            <a class="prettyPhoto[OpenSource]" href="<?php echo get_template_directory_uri(); ?>/img/protestabrasil_full.jpg"><img alt="" src="<?php echo get_template_directory_uri(); ?>/img/protestabrasil.jpg"></a>
                        </div>
                        <strong class="name"><span>Protestabrasil</span></strong>
                        <p>OpenSource</p>
                    </li>
                    <li class="Pessoal">
                        <div class="image">
                            <a class="prettyPhoto[Pessoal]" href="<?php echo get_template_directory_uri(); ?>/img/polisonic_full.jpg"><img alt="" src="<?php echo get_template_directory_uri(); ?>/img/polisonic.jpg"></a>
                        </div>
                        <strong class="name"><span>Polisonic</span></strong>
                        <p>Pessoal</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="block pink" id="testimonials">
        <div class="block-holder">
            <h2>Últimos Posts</h2>
            <div class="gallery">
                <div class="mask">
                    <ul class="slider">
                        <?php
                            $recentPosts = new WP_Query();
                            $recentPosts->query('showposts=1');
                        ?>
                        <?php if (have_posts()) : while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>

                            <li>
                                <cite><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></cite>
                                <blockquote class="text">
                                    <p><?php the_excerpt(); ?></p>
                                </blockquote>
                            </li>

                        <?php endwhile; ?>

                        </div>
                            <a href="#" title="prev" class="prev">prev</a>
                            <a href="#" title="next" class="next">next</a>
                        </div>

                        <?php else : ?>

                            <li>
                                <blockquote class="text">
                                    <h1>Sem posts</h1>
                                </blockquote>
                            </li>

                        <?php endif; ?>
                    </ul>
        </div>
    </section>

<?php include_once("analyticstracking.php") // Load the analytics tracking. ?>

<?php get_footer(); // Load the footer.php template. ?>