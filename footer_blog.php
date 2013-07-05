</div>

<div id="footer">

  <!-- Footer Links -->

  <ul class="elsewhere">
    <?php wp_list_bookmarks('categorize=0&title_li=&category_name=footer&show_images=0'); ?>
  </ul>

  <!-- Search Field -->

  <div class="footerContent">
    <form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
      <div id="search">
        <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
        <input type="submit" id="searchsubmit" value="Buscar" />
      </div>
    </form>


  </div>
</div>

<?php wp_footer(); ?>

</body>
</html>
