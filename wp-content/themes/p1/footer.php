<div class="main-footer">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-md-4 col-xl-3 text-center text-md-left">
        <a href="/">
          <?php echo (get_field('footer_logo','options')) ? '<img src="'.get_field('footer_logo','options')['url'].'" />':''; ?>
        </a>
      </div>
      <div class="col-12 col-md-8 col-xl-6 footer-menu text-md-right text-xl-left text-center mb-3 mb-md-0">
        <?php wp_nav_menu(array('menu'=>'Footer Menu')); ?>
      </div>
      <?php if(have_rows('social_media','options')):  ?>
        <div class="col-12 col-xl-3 footer-social text-center text-xl-right">
          <ul>
            <?php while(have_rows('social_media','options')): the_row();
              $smedia = strtolower(get_sub_field('name'));
            ?>
              <li>
                <a href="<?php the_sub_field('link'); ?>" target="_blank">
                  <?php echo ($smedia == 'instagram')? '<span class="'.$smedia.'"><i class="fa fa-'.$smedia.'"></i></span>': '<i class="fa fa-'.$smedia.'">'.$media.'</i>'; ?>
                </a>
              </li>
            <?php endwhile; ?>
          </ul>
        </div>
      <?php endif; ?>
      <div class="col-12 copyright text-center pt-3">
        <p><?php the_field('copyright','options'); ?></p>
      </div>
    </div>
  </div>
</div>
<div class="side-control">
  <div class="row align-items-center h-100">
    <ul>
      <li>
        <a href="#" class="active"></a>
      </li>
      <li>
        <a href="#" class=""></a>
      </li>
      <li>
        <a href="#" class=""></a>
      </li>
      <li>
        <a href="#" class=""></a>
      </li>
      <li>
        <a href="#" class=""></a>
      </li>
    </ul>
  </div>
</div>

<div class="ladom">
  <div class="container w-100 h-100">
    <div class="row w-100 h-100 align-items-center text-center">
      <div class="ladom-box">
        <a href="javascript:void(0)" onclick="closeLomad()">close</a>
        <div class="ladom-header"></div>
        <div class="ladom-container"></div>

        <div class="d-none sec5-content">
          <div class="ladom-sc5-header" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/images/about-us-bg.jpg)">
            <?php echo (get_field('rcp_header')) ? '<h4 fs-data="1">'.get_field('rcp_header').'</h4>' : ''; ?>
            <p><?php the_field('rcp_sub_header') ?></p>
          </div>
          <div class="ladom-sc5-content">
            <?php the_field('rcp_content'); ?>
          </div>
        </div>

      </div>

    </div>
  </div>
</div>

<?php wp_footer(); ?>

</body>
</html>
