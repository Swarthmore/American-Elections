<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

		<div id="site-generator">
				<p>This resource was created at <a href="http://www.swarthmore.edu/" target="_blank" title="">Swarthmore College</a>. Maps are based on a freely-available SVG found at <a href="http://en.wikipedia.org/wiki/File:Blank_US_Map.svg" target="_blank" title="blank US map">Wikipedia</a>. Map functionality based on <a href="http://davidlynch.org/projects/maphilight/docs" target="_blank" title="Maphilight">Maphilight</a> plugin by <a href="http://davidlynch.org" target="_blank" title="David Lynch">David Lynch</a>.</p></div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>

 <script type="text/javascript">
 	jQuery(function() {
		jQuery.preload( '<?php echo get_stylesheet_directory_uri() . '/img/Map_of_USA_Absentee.png'; ?>',
          '<?php echo get_stylesheet_directory_uri() . '/img/Map_of_USA_EarlyVoting.png'; ?>',
          '<?php echo get_stylesheet_directory_uri() . '/img/Map_of_USA_GroupsRegistered.png'; ?>',
		  '<?php echo get_stylesheet_directory_uri() . '/img/Map_of_USA_HighSchool.png'?>',
          '<?php echo get_stylesheet_directory_uri() . '/img/Map_of_USA_VoterID.png' ?>',
		  '<?php echo get_stylesheet_directory_uri() . '/img/USA-2008-swingstates.png'?>',
		  '<?php echo get_stylesheet_directory_uri() . '/img/USA-2004-swingstates.png'?>'
        );
		});
 </script>

</body>
</html>
