<?php
                // Custom post_type
                $labels = array(
                  'name' => 'Education',
                   'all_items' => 'Toute les écoles',
                  'singular_name' => 'parcours',
                  'add_new' => 'nouveau parcours',
                  'add_new_item' => 'Ajouter un parcours',
                  'edit_item' => 'Editer un parcours',
                  'new_item' => 'Nouveau parcours',
                  'view_item' => 'Voir le parcours',
                  'search_items' => 'Rechercher un parcours',
                  'not_found' =>  'Aucun parcours',
                   
                  'not_found_in_trash' => 'Aucun parcours supprimé',
                  'parent_item_colon' => '',
                  'menu_name' => 'Education'
                );

                $args = array(
                  'labels' => $labels,
                  'public' => true,
                  'publicly_queryable' => true,
                  'show_ui' => true,
                  'show_in_menu' => true,
                  'query_var' => true,
                  'rewrite' => true,
                  'capability_type' => 'post',
                  'has_archive' => true,
                  'hierarchical' => false,
                     'taxonomies' => array('category'),
                  'menu_position' => 5,
                  'supports' => array('title','editor','thumbnail')
                );
                register_post_type('education',$args);

                
