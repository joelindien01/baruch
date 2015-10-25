<?php
require TEMPLATEPATH.'/Framework/theme.php';
$theme = new Theme(array(
    'menus'=>array(
        'nav' =>'Onglets'
        

    ),
    'types'=>array('Education','custom_meta'),
    'types'=>array('Team','custom_meta'),

    'sidebar' => array(
                'top' => array(
                    'before_widget' => '',
                    'after_widget'  => '',
                    'before_title'  => '',
                    'after_title'   => ''
                )
            ),
));

if ( function_exists( 'add_theme_support' ) ) {

    // additional image sizes
    // delete the next line if you do not need additional image sizes
    add_image_size( 'media-object', 80, 80 ); //300 pixels wide (and unlimited height)
    add_image_size( 'accueil', 240, 240 ); //300 pixels wide (and unlimited height)
}

function new_excerpt_more( $more ) {
    return ' (...) <br/> <a class="btn btn-rw btn-primary mt10" href="' . get_permalink( get_the_ID() ) . '">' . __( 'Lire la suite', 'your-text-domain' ) . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );