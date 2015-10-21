<?php
require TEMPLATEPATH.'/Framework/theme.php';
$theme = new Theme(array(
    'menus'=>array(
        'nav' =>'Onglets'
        

    ),
    'types'=>array('Education','custom_meta'),

    'sidebar' => array(
                'top' => array(
                    'before_widget' => '',
                    'after_widget'  => '',
                    'before_title'  => '',
                    'after_title'   => ''
                )
            ),
));
