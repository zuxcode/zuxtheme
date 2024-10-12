<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-white text-gray-900 antialiased' ); ?>>

	<?php do_action( 'zuxtheme_site_before' ); ?>

	<div id="page" class="relative flex min-h-svh flex-col">

		<div class="hero-bg-effect-circle absolute bottom-0 left-1/2 z-20 translate-x-[-50%] rounded-full"></div>

		<div class="hero-section h-svh">
			<?php do_action( 'zuxtheme_header' ); ?>

			<header>
				<nav class="container mx-auto">
					<div
						class="rounded-full bg-white px-4 py-6 drop-shadow-xl lg:flex lg:items-center lg:justify-between">
						<div class="flex items-center justify-between">
							<div>
								<?php if ( has_custom_logo() ) { ?>
									<?php the_custom_logo(); ?>
								<?php } else { ?>
									<a href="<?php echo get_bloginfo( 'url' ); ?>" class="text-lg font-extrabold uppercase">
										<?php echo get_bloginfo( 'name' ); ?>
									</a>

									<p class="text-sm font-light text-gray-600">
										<?php echo get_bloginfo( 'description' ); ?>
									</p>

								<?php } ?>
							</div>

							<div class="lg:hidden">
								<a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
									<svg viewBox="0 0 20 20" class="inline-block h-6 w-6" version="1.1"
										xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
										<g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
											<g id="icon-shape">
												<path
													d="M0,3 L20,3 L20,5 L0,5 L0,3 Z M0,9 L20,9 L20,11 L0,11 L0,9 Z M0,15 L20,15 L20,17 L0,17 L0,15 Z"
													id="Combined-Shape"></path>
											</g>
										</g>
									</svg>
								</a>
							</div>
						</div>

						<?php
						wp_nav_menu(
							array(
								'container_id' => 'primary-menu',
								'container_class' => 'hidden bg-gray-100 mt-4 p-4 lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
								'menu_class' => 'lg:flex lg:-mx-4',
								'theme_location' => 'primary',
								'li_class' => 'lg:mx-4',
								'fallback_cb' => false,
							)
						);
						?>
					</div>
				</nav>


			</header>

			<div id="content" class="site-content flex-grow">
				<?php if ( is_front_page() ) { ?>
					<div class="container mx-auto flex">
						<div class="w-2/4">
							<div class="flex h-full flex-col place-content-center">
								<h1 class="mb-6 text-3xl font-extrabold tracking-tight text-white lg:text-6xl">Transform
									Your
									<span class="text-secondary">
										Brand
									</span> with <span class="text-secondary">Precision & Impact</span>
								</h1>

								<p class="mb-10 text-xl font-medium text-white">At <strong>PHCI</strong>, we are a
									performance-driven digital marketing and brand development company. Our mission is to
									elevate
									your business through innovative strategies, data-driven insights, and creative
									solutions.
								</p>
								<button class="inline-flex items-start">
									<a href="#services"
										class="w-full flex-none rounded-xl border border-transparent bg-gray-900 px-6 py-3 text-lg font-semibold leading-6 text-white transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-gray-900 focus:ring-offset-2 focus:ring-offset-white sm:w-auto">Explore
										Our Services
									</a>
								</button>
							</div>
						</div>

						<div class="flex w-2/4 justify-end">
							<div class="block h-auto w-[85%]">
								<?php
								$temp_dir = get_template_directory();
								$svg_file = $temp_dir . '/resources/assets/svgs/Digital-lifestyle-pana.svg';

								$svgContent = file_get_contents( $svg_file );

								echo $svgContent;
								?>
							</div>
						</div>

					</div>
					<!-- End introduction -->
				<?php } ?>

			</div>
		</div>
		<?php do_action( 'zuxtheme_content_start' ); ?>

		<main>