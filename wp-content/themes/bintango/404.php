<?php
/**
 * The template for displaying the 404 template in the Twenty Twenty theme.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

//get_header();
?>

<!-- <main id="site-content">

	<div class="section-inner thin error404-content container">

		

		<h1 class="entry-title"><?php _e( 'Page Not Found', 'twentytwenty' ); ?></h1>

		<div class="intro-text"><p><?php _e( 'The page you were looking for could not be found. It might have been removed, renamed, or did not exist in the first place.', 'twentytwenty' ); ?></p></div>


	</div>
	.section-inner -->

<!--</main>-->
<!-- #site-content -->
<?php
$actual_link = $_SERVER['REQUEST_URI'];
?>
<main id="primary" class="site-main">

<iframe src="https://fan.bintango.com<?php echo $actual_link;?>" width="100%" height="100%"></iframe>

</main>

<?php
//get_footer();
