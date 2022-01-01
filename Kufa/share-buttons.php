/*
 * Prepend Facebook, Twitter and Google+ social share buttons to the post's content
 *
 */
function add_share_buttons_before_content( $content ) {

    global $post;

    // Get the post's URL that will be shared
    $post_url   = urlencode( esc_url( get_permalink($post->ID) ) );
    
    // Get the post's title
    $post_title = urlencode( $post->post_title );

    // Compose the share links for Facebook, Twitter and Google+
    $facebook_link    = sprintf( 'https://www.facebook.com/sharer/sharer.php?u=%1$s', $post_url );
    $twitter_link     = sprintf( 'https://twitter.com/intent/tweet?text=%2$s&url=%1$s', $post_url, $post_title );
    $google_plus_link = sprintf( 'https://plus.google.com/share?url=%1$s', $post_url );

    // Wrap the buttons
    $output = '<div id="share-buttons">';
    
        // Add the links inside the wrapper
        $output .= '<a target="_blank" href="' . $facebook_link . '" class="share-button facebook">Facebook</a>';
        $output .= '<a target="_blank" href="' . $twitter_link . '" class="share-button twitter">Twitter</a>';
        $output .= '<a target="_blank" href="' . $google_plus_link . '" class="share-button google-plus">Google+</a>';
        
    $output .= '</div>';

    // Return the buttons and the original content
    return $output . $content;

}
add_filter( 'the_content', 'add_share_buttons_before_content' );