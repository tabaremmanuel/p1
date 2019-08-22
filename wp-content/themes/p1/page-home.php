<?php
/*Template Name: Home*/
get_header();
?>
<?php if( have_rows('slides') ): ?>
	<div class="top-banner section" id="section-1">
		<div class="glide">
			<div data-glide-el="track" class="glide__track">
				<ul class="glide__slides">
					<?php while ( have_rows('slides') ) : the_row(); ?>
						<li class="glide__slide">
							<div class="top-banner-item" style="background-image:url(<?php echo get_sub_field('background')['url']; ?>);">
								<div class="container banner-content">
									<div class="row align-items-center">
										<div class="col-12 text-center">
											<?php the_sub_field('content'); ?>
											<a href="<?php echo (get_sub_field('button_link')) ? get_sub_field('button_link') : '#'; ?>" class="btn"><?php the_sub_field('button_label'); ?></a>
										</div>
									</div>
								</div>
							</div>
						</li>
				  <?php endwhile; ?>
				</ul>
			</div>
			<div class="glide__bullets" data-glide-el="controls[nav]">
				<?php $ctr = 0; while ( have_rows('slides') ) : the_row(); ?>
					<button class="glide__bullet" data-glide-dir="=<?php echo $ctr; ?>"></button>
				<?php $ctr++; endwhile; ?>
			</div>
		</div>
		<a href="javascript:void(0)" class="scroll-down">
			Scroll Down
		</a>
	</div>
<?php endif; ?>
<!-- ABOUT US -->
<div class="section" id="section-2" style="background-image:url(<?php echo get_field('about_us_background')['url']; ?>)">
	<div class="container">
		<div class="row align-items-center text-center py-4 py-sm-0">
			<div class="col-12">
				<?php the_field('content'); ?>
				<a href="<?php echo (get_field('about_us_button_link')) ? get_field('about_us_button_link') : '#'; ?>" class="btn"><?php the_field('about_us_button_label'); ?></a>
			</div>
		</div>
	</div>
</div>
<!-- PRODUCTS and SERVICES -->
<div class="section py-5" id="section-3">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12">
				<div class="row">
					<div class="col-12 col-lg-6 offset-lg-1">
						<?php the_field('pns_content'); ?>
					</div>
					<div class="col-12 col-lg-4">
						<?php echo (get_field('pns_title')) ? '<h3 fs-data="1" class="pl-lg-3">'.get_field('pns_title').'</h3>' : ''; ?>
					</div>
				</div>
			</div>
			<?php if(have_rows('pns_items')): ?>
			<div class="col-12 mt-4">
				<div class="glide">
				  <div data-glide-el="track" class="glide__track">
				    <ul class="glide__slides">
							<?php while(have_rows('pns_items')): the_row(); ?>
					      <li class="glide__slide">
									<div class="row align-items-end" style="background-image:url(<?php echo get_sub_field('background')['url'] ?>);">
										<div class="col-12 text-center">
											<div class="pt-3 pb-5">
												<h4><?php the_sub_field('name'); ?></h4>
												<p><?php the_sub_field('sub_text') ?></p>
												<a href="#" class="btn"><?php echo (get_sub_field('button_label')) ? get_sub_field('button_label') : 'Button'; ?></a>
											</div>
										</div>
									</div>

									<div class="ladom-copy d-none">
										<?php the_sub_field('hidden_content'); ?>
									</div>
								</li>
							<?php endwhile; ?>
				    </ul>
				  </div>
					<div class="glide__bullets text-center mt-4" data-glide-el="controls[nav]">
						<?php $ctr = 0; while(have_rows('pns_items')): the_row(); ?>
					    <button class="glide__bullet" data-glide-dir="=<?php echo $ctr; ?>"></button>
						<?php $ctr++; endwhile; ?>
				  </div>
				</div>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<div class="section py-5" id="section-4">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12">
				<div class="row">
					<div class="col-12 col-xl-3 offset-xl-1">
						<?php echo (get_field('cs_title')) ? '<h3 fs-data="1">'.get_field('cs_title').'</h3>' : ''; ?>
					</div>
					<div class="col-12 col-xl-7">
						<?php the_field('cs_content'); ?>
					</div>
					<?php if(have_rows('case_studies')): ?>
					<div class="col-12 pt-5 px-lg-5 glide-row">
						<div class="glide">
						  <div class="glide__track" data-glide-el="track">
						    <ul class="glide__slides">
									<?php while(have_rows('case_studies')): the_row(); ?>
							      <li class="glide__slide">
											<div class="row">
												<div class="col-12 col-lg-7 side-bg" style="background-image:url(<?php echo get_sub_field('image')['url'] ;?>);">
												</div>
												<div class="col-12 col-lg-5 side-desc">
													<div class="px-xl-5 px-md-3 px-3 py-5">
														<h4><?php the_sub_field('title') ?></h4>
														<?php the_sub_field('short_content'); ?>
														<a href="#" class="btn"><?php the_sub_field('button_label'); ?></a>
													</div>
												</div>
											</div>
											<div class="ladom-copy d-none">
												<?php the_sub_field('content') ?>
											</div>
										</li>
									<?php endwhile; ?>
						    </ul>
						  </div>
							<div class="glide__arrows" data-glide-el="controls">
						    <button class="glide__arrow glide__arrow--left square" data-glide-dir="<"></button>
						    <button class="glide__arrow glide__arrow--right square" data-glide-dir=">"></button>
						  </div>
						</div>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="section py-5 py-md-0" id="section-5" style="background-image:url(<?php echo get_field('rc_background')['url']; ?>">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12 text-center">
				<?php echo (get_field('rc_header')) ? '<h3 fs-data="1">'.get_field('rc_header').'</h3>' : ''; ?>
				<p><?php the_field('rcp_sub_header'); ?></p>
				<a href="#" class="btn"><?php the_field('rc_button_label'); ?></a>
			</div>
		</div>
	</div>
</div>
<?php get_footer();
