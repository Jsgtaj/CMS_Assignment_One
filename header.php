<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */

?>
<!doctype html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="
	<?php echo esc_url(home_url('wp-content/themes/assignmentone/assets/css/custom-style.css'))?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
		<article>
		<a href="<?php echo esc_url(home_url())?>">
			<img class="logo" src="<?php echo esc_url(home_url('wp-content/uploads/2021/02/logo.png'))?>"
			 alt="Logo">
		</a>
		</article>
	</header>
