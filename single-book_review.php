<?php

/*
 * Template Name: Book Review
 * This template displays Book Review Details
 

add_action('genesis_post_content', 'child_get_book_review_field'); //display meta-box content after the content

//Function to show the content
function child_get_book_review_field() {
        echo '<div class="book-page"><p><strong>Title:</strong><em> '. genesis_get_custom_field( '_cmb_wjc_book_title' ) .'</strong></em></br>';
			echo '<strong>Author: </strong><em>'. genesis_get_custom_field( '_cmb_wjc_book_author' ) .'</em></br>';
				echo '<strong>Amazon Link: </strong><em>'. genesis_get_custom_field( '_cmb_wjc_book_website' ) .'</em></p>';
						echo '<p><strong>Summary:</strong><em> '. genesis_get_custom_field( '_cmb_wjc_book_summary' ) .'</em></p></div>';
						echo '<div class="book-page2"><img class="alignright" src="'. genesis_get_custom_field( '_cmb_wjc_book_image' ) .'" /></div>';
						//echo '<p>'. genesis_get_custom_field( '_cmb_ds_artist_bio' ) .'</p><hr>';
}






/** Add the after post section 
add_action( 'genesis_after_post_content', 'wjc_after_book_review' );
function wjc_after_book_review() {
   if ( ! is_singular(array( 'book_review' ) ) )
       return;
   genesis_widget_area( 'after-post', array(
       'before' => '<div class="after-post widget-area">',
   ) );

}

 */
genesis(); // requires Genesis 1.3+  