<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="main-header">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-sm-6 text-sm-left text-center">
        <a href="/">
          <?php echo (get_field('logo','options')) ? '<img src="'.get_field('logo','options')['url'].'" />':''; ?>
        </a>
      </div>
			<div class="col-12 col-sm-6 text-sm-right text-center">
				<?php echo (get_field('phone_number','options')) ? '<a href="tel:'.get_field('phone_number','options').'" class="top-phone" fs-data="1">'.get_field('phone_number','options').'</a>':''; ?>
			</div>
    </div>
  </div>
</div>
