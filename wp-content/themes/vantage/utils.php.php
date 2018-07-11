<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package vantage
 * @since vantage 1.0
 * @license GPL 2.0
 */

get_header(); ?>

<div id="primary" class="content-area">

	<div id="content" class="site-content" role="main">

    <p>this is a test</p>
    <?php 
        function UpdatePosts()
        {
				$filename = "\satview_update1.csv";
				$delimiter=',';
				$enclosure = '"';
				
				define('BASE_PATH', realpath(dirname(__FILE__)));
				$filename = BASE_PATH . $filename;

				$fp = fopen($filename, "r");
				//var_dump($fp);
				
				$i = 0;
				while (!feof($fp) ) {
						//$line_of_text[] = fgetcsv($file_handle, 1024);
						$data = fgetcsv($fp, 1024, $delimiter, $enclosure); //  $escape only got added in 5.3.0
						//var_dump($data[$i][0]);
						$post_current = get_post( $data[0], ARRAY_A );
						$title = $post_current['post_title'];
						$post_current['post_content'] = $data[1];
						wp_update_post( $post_current );
						var_dump($title);
						
						$i++;
					}
					fclose($fp);
				//var_dump($data);
				}
                
        function CreateNewPosts()
        {
				  $filename = "\satview_new.csv";
				  $delimiter=',';
				  $enclosure = '"';
				
				  define('BASE_PATH', realpath(dirname(__FILE__)));
				  $filename = BASE_PATH . $filename;

				  $fp = fopen($filename, "r");
				          
				  $i = 0;
				  while (!feof($fp) ) {
						  //$line_of_text[] = fgetcsv($file_handle, 1024);
						  $data = fgetcsv($fp, 1024, $delimiter, $enclosure); //  $escape only got added in 5.3.0
						  
						  //new
						  $my_post = array(
							  'post_title' => $data[0] . ' Satview DSTV Installer ('. $data[2] .')',
							  'post_date' => '',
							  'post_content' => $data[1],
							  'post_status' => 'publish',
							  'post_type' => 'page'
						  );
              
						  $the_post_id = wp_insert_post( $my_post );
						  $i++;
					  }
					  fclose($fp);
				  //var_dump($data);
				}
        CreateNewPosts();
?>


  </div><!-- #content .site-content -->

</div><!-- #primary .content-area -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>