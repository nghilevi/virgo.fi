

if ( have_posts() ) { 
    the_post(); 
    $image_url = wp_get_attachment_url();
}

header('Location: '.$image_url);

?>
