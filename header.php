<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link href="wp-content/themes/american-elections/css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="wp-content/themes/american-elections/style.css" type="text/css" media="screen">
<script src="wp-content/themes/american-elections/js/jquery.min.js"></script>
<script type="text/javascript" src="wp-content/themes/american-elections/js/jquery.maphilight.js"></script>
<script src="wp-content/themes/american-elections/js/bootstrap.js"></script>
<script type="text/javascript">$(function() {
			$('.map').maphilight();
		});
</script>

		<style>
			body {
	
				}
			.modal{
			/*--	position:absolute;--*/
				z-index:1050;
				overflow:hidden;}
			.modal-body{
				position:relative;
				width:94%;
			}
			
			</style>


<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>


<body <?php body_class(); ?>>
<header>
<h1><?php bloginfo( 'name' ); ?></h1>
<h2><?php bloginfo( 'description' ); ?></h2>
</header>
<?php
 while ( have_posts() ) : the_post();
 		
foreach((get_the_category()) as $cat) {
  if (!($cat->slug=='voting-laws') && !($cat->slug=='voter-id-law') && !($cat->slug=='changes') && !($cat->slug=='states-that-pre-register-soon-to-be-voters-in-high-school') && !($cat->slug=='rules-governing-groups-registering-voters') && !($cat->slug=='early-voting') && !($cat->slug=='absentee-voting') && !($cat->slug=='uncategorized')) $category = $cat->slug;
}

				
				
				echo '<div class="modal hide" id="' . $category . '" role="dialog" style="clear:both;">
						<div class="modal-header">
							<a href="#" class="btn btn-danger close" data-dismiss="modal">&times;</a>
							<h3>';
							the_title();
					  echo ' <small>posted by ';
						the_author();
						echo '</small></h3>
					  </div>
					  <div class="modal-body">';
						the_content();
				echo'</div>
				<div class="modal-footer"></div>
			</div>';
endwhile;?>
<div class="well layer-options">
<p><strong>View with Layers</strong></p>
<form class="layer-options-form">
<div style="float:left;margin-right:5px; padding:5px 10px; width:35%;">
<label class="radio layer-option ">
  <input type="radio" name="layers" id="no-layer" value="no-layer" checked>
  <span class="no-layer-label">None</span>
</label>
<label class="radio layer-option ">
  <input type="radio" name="layers" id="absentee" value="absentee">
  <span class="absentee-label">Absentee voting</span>
</label>
<label class="radio layer-option ">
  <input type="radio" name="layers" id="earlyvoting" value="earlyvoting">
  <span class="earlyvoting-label">Early voting</span>
</label>
<label class="radio layer-option ">
  <input type="radio" name="layers" id="groups" value="groups">
  <span class="groups-label">Rules governing groups registering voters</span>
</label>
</div>
<div style="float:left; margin-left:5px; padding:5px 10px; border-left:1px solid #efefef;">
<label class="radio layer-option ">
  <input type="radio" name="layers" id="preregister" value="preregister">
  <span class="preregister-label">States that pre-register soon-to-be voters in high school</span>
</label>
<label class="radio layer-option ">
  <input type="radio" name="layers" id="voterid" value="voterid">
  <span class="voterid-label">Voter ID laws</span>
</label>

<label class="radio layer-option ">
  <input type="radio" name="layers" id="swing2004" value="swing2004">
  <span class="swing2004-label">2004 Swing States</span>
</label>
<label class="radio layer-option ">
  <input type="radio" name="layers" id="swing2008" value="swing2008">
  <span class="swing2008-label">2008 Swing States</span>
</label>
</div>
<div style="clear:both;"></div>
</form>
</div>
<script>
$(".modal").on('show',function() {
	$("canvas").css("display", "none");
});
$(".modal").on('hidden',function() {
	$("canvas").css("display", "block");
});
$("#no-layer").click(function() {
	$(".absentee-label").css("font-weight", "normal");
	$(".earlyvoting-label").css("font-weight", "normal");
	$(".groups-label").css("font-weight", "normal");
	$(".preregister-label").css("font-weight", "normal");
	$(".voterid-label").css("font-weight", "normal");
	$(".swing2004-label").css("font-weight", "normal");
	$(".swing2008-label").css("font-weight", "normal");
	$(".no-layer-label").css("font-weight", "bold");
	$(".map").css("background-image", "url(wp-content/themes/american-elections/img/USA-greyscale.png)");
	$(".maphilighted").attr("src", "wp-content/themes/american-elections/img/USA-greyscale.png");
});
$("#absentee").click(function() {
	$(".absentee-label").css("font-weight", "bold");
	$(".earlyvoting-label").css("font-weight", "normal");
	$(".groups-label").css("font-weight", "normal");
	$(".preregister-label").css("font-weight", "normal");
	$(".voterid-label").css("font-weight", "normal");
	$(".swing2004-label").css("font-weight", "normal");
	$(".swing2008-label").css("font-weight", "normal");
	$(".no-layer-label").css("font-weight", "normal");
	$(".map").css("background-image", "url(wp-content/themes/american-elections/img/Map_of_USA_Absentee.png)");
	$(".maphilighted").attr("src", "wp-content/themes/american-elections/img/Map_of_USA_Absentee.png");
});
$("#earlyvoting").click(function() {
	$(".absentee-label").css("font-weight", "normal");
	$(".earlyvoting-label").css("font-weight", "bold");
	$(".groups-label").css("font-weight", "normal");
	$(".preregister-label").css("font-weight", "normal");
	$(".voterid-label").css("font-weight", "normal");
	$(".swing2004-label").css("font-weight", "normal");
	$(".swing2008-label").css("font-weight", "normal");
	$(".no-layer-label").css("font-weight", "normal");
	$(".map").css("background-image", "url(wp-content/themes/american-elections/img/Map_of_USA_EarlyVoting.png)");
	$(".maphilighted").attr("src", "wp-content/themes/american-elections/img/Map_of_USA_EarlyVoting.png");
});
$("#groups").click(function() {
	$(".absentee-label").css("font-weight", "normal");
	$(".earlyvoting-label").css("font-weight", "normal");
	$(".groups-label").css("font-weight", "bold");
	$(".preregister-label").css("font-weight", "normal");
	$(".voterid-label").css("font-weight", "normal");
	$(".swing2004-label").css("font-weight", "normal");
	$(".swing2008-label").css("font-weight", "normal");
	$(".no-layer-label").css("font-weight", "normal");
	$(".map").css("background-image", "url(wp-content/themes/american-elections/img/Map_of_USA_GroupsRegistered.png)");
	$(".maphilighted").attr("src", "wp-content/themes/american-elections/img/Map_of_USA_GroupsRegistered.png");
});
$("#preregister").click(function() {
	$(".absentee-label").css("font-weight", "normal");
	$(".earlyvoting-label").css("font-weight", "normal");
	$(".groups-label").css("font-weight", "normal");
	$(".preregister-label").css("font-weight", "bold");
	$(".voterid-label").css("font-weight", "normal");
	$(".swing2004-label").css("font-weight", "normal");
	$(".swing2008-label").css("font-weight", "normal");
	$(".no-layer-label").css("font-weight", "normal");
	$(".map").css("background-image", "url(wp-content/themes/american-elections/img/Map_of_USA_HighSchool.png)");
	$(".maphilighted").attr("src", "wp-content/themes/american-elections/img/Map_of_USA_HighSchool.png");
});
$("#voterid").click(function() {
	$(".absentee-label").css("font-weight", "normal");
	$(".earlyvoting-label").css("font-weight", "normal");
	$(".groups-label").css("font-weight", "normal");
	$(".preregister-label").css("font-weight", "normal");
	$(".voterid-label").css("font-weight", "bold");
	$(".swing2004-label").css("font-weight", "normal");
	$(".swing2008-label").css("font-weight", "normal");
	$(".no-layer-label").css("font-weight", "normal");
	$(".map").css("background-image", "url(wp-content/themes/american-elections/img/Map_of_USA_VoterID.png)");
	$(".maphilighted").attr("src", "wp-content/themes/american-elections/img/Map_of_USA_VoterID.png");
});
$("#swing2008").click(function() {
	$(".absentee-label").css("font-weight", "normal");
	$(".earlyvoting-label").css("font-weight", "normal");
	$(".groups-label").css("font-weight", "normal");
	$(".preregister-label").css("font-weight", "normal");
	$(".voterid-label").css("font-weight", "normal");
	$(".swing2004-label").css("font-weight", "normal");
	$(".swing2008-label").css("font-weight", "bold");
	$(".no-layer-label").css("font-weight", "normal");
	$(".map").css("background-image", "url(wp-content/themes/american-elections/img/USA-2008-swingstates.png)");
	$(".maphilighted").attr("src", "wp-content/themes/american-elections/img/USA-2008-swingstates.png");
});
$("#swing2004").click(function() {
	$(".absentee-label").css("font-weight", "normal");
	$(".earlyvoting-label").css("font-weight", "normal");
	$(".groups-label").css("font-weight", "normal");
	$(".preregister-label").css("font-weight", "normal");
	$(".voterid-label").css("font-weight", "normal");
	$(".swing2004-label").css("font-weight", "bold");
	$(".swing2008-label").css("font-weight", "normal");
	$(".no-layer-label").css("font-weight", "normal");
	$(".map").css("background-image", "url(wp-content/themes/american-elections/img/USA-2004-swingstates.png)");
	$(".maphilighted").attr("src", "wp-content/themes/american-elections/img/USA-2004-swingstates.png");
});
</script>
<div id="main" class="container">