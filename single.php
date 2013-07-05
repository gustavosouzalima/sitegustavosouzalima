<?php include("header_blog.php"); ?>

<div id="coreContent">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


      <div class="post single hentry">
        <div class="postContent">
          <h3 class="entry-title"><?php the_title(); ?></h3>
          <h4 class="vcard author">por <span class="fn"><?php the_author(); ?></span></h4>
          <div class="entry-content">
              <?php the_content(); ?>
          </div>
        </div>
        <div class="postMeta">
          <?php
          $arc_year = get_the_time('Y');
          $arc_month = get_the_time('m');
          $arc_day = get_the_time('d');
          ?>

          <div class="postDate"><span>Publicado:</span> <abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO'); ?>"><a href="<?php echo get_day_link("$arc_year", "$arc_month",
          "$arc_day"); ?>"><?php the_time('F j, Y'); ?></a></abbr></div>
        	<div class="categories"><span>Categoria:</span> <?php the_category(', '); ?></div>
        	<?php the_tags('<span>Tags:</span> ', ' : ', ''); ?>



        </div>
      </div>

      <?php
      /*
      <div class="googleAd">

        <!-- You Ad Code Here -->

      </div>
      */
      ?>

	<?php comments_template(); ?>

  <div class="pageNav">
    <div class="prev"><?php previous_post_link('%link', '&laquo; Post Anterior'); ?></div>
    <div class="next"><?php next_post_link('%link', 'Próximo Post &raquo;') ?></div>
  </div>


	<?php endwhile; else: ?>

		<p>Desculpe, o resultado não corresponde às postagens.</p>

<?php endif; ?>

</div>


<?php include("footer_blog.php"); ?>