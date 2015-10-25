<?php
                // Custom post_type
                $labels = array(
                  'name' => 'Team',
                   'all_items' => 'Toute la team',
                  'singular_name' => 'Membre',
                  'add_new' => 'Ajouter',
                  'add_new_item' => 'Ajouter un membre',
                  'edit_item' => 'Editer un membre',
                  'new_item' => 'Nouveau membre',
                  'view_item' => 'Voir le membre',
                  'search_items' => 'Rechercher un membre de la team',
                  'not_found' =>  'Aucun membre',
                   
                  'not_found_in_trash' => 'Aucun membre supprimé',
                  'parent_item_colon' => '',
                  'menu_name' => 'Team'
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
                register_post_type('team',$args);

