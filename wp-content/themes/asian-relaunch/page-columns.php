<?php
/**
 * Template Name: Page Columns
 */
global $wp_query;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$page = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : get_query_var( 'page' );
$itemsPerPage = isset($_GET['columns_view']) ? $_GET['columns_view'] : 35;
//$movie_region = isset($_GET['movie_region']) ?  $_GET['_region'] : '';
//$newsfeed_begin_with = isset($_GET['movie_begin_with']) ? $_GET['movie_begin_with'] : '';
//$movie_genre = isset($_GET['movie_genre']) ? $_GET['movie_genre'] : _CATE_ID_MOVIES;
 
?>
<?php get_header() ?>
	<?php echo PfBase::getBlock('blocks'.DS.'form_search_operator.php') ?>	
	<div class="main_content">
		<h1><?php echo get_the_title(); ?></h1>
		
        
                
	    //<?php echo PfBase::getBlock('blocks'.DS.'list_movies_by_cate.php', array('cate_id' => $movie_genre, 'movie_region'=>$movie_region, 'movie_begin_with' => $movie_begin_with,  'showFilter' => 1, 'pagination' => 1, 'page' => $page, 'itemsPerPage' => $itemsPerPage, 'numItemsPerRow' => _NUM_ITEM_PER_ROW_MOVIE_GENRE, 'cacheLifetime' => 60*30)) ?>	    
	  

<?php get_footer() ?>
