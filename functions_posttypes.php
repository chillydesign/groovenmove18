<?php



    register_post_type('evenement', // Register Custom Post Type
    array(
        'labels' => array(
            'name' => __('Evenements', 'html5blank'), // Rename these to suit
            'singular_name' => __('Evenement', 'html5blank'),
            'add_new' => __('Ajouter', 'html5blank'),
            'add_new_item' => __('Add New Evenement', 'html5blank'),
            'edit' => __('Edit', 'html5blank'),
            'edit_item' => __('Edit Evenement', 'html5blank'),
            'new_item' => __('New Evenement', 'html5blank'),
            'view' => __('View Evenement', 'html5blank'),
            'view_item' => __('View Evenement', 'html5blank'),
            'search_items' => __('Search Evenement', 'html5blank'),
            'not_found' => __('No Evenements found', 'html5blank'),
            'not_found_in_trash' => __('No Evenement found in Trash', 'html5blank')
        ),
        'public' => true,
        'exclude_from_search' => false,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'thumbnail',
            'excerpt',
            'editor'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
            'event_cat'
        ) // Add Category and Post Tags support
    ));

    $labels_event_cat = array(
        'name'                       => 'Catégories',
        'singular_name'              => 'Catégorie',
        'menu_name'                  => 'Catégorie',
        'all_items'                  => 'Toutes les Catégories',
        'parent_item'                => 'Catégorie parente',
        'parent_item_colon'          => 'Catégorie parente:',
        'new_item_name'              => 'Nom de la nouvelle categorie',
        'add_new_item'               => 'Ajouter une categorie',
        'edit_item'                  => 'Modifier categorie',
        'update_item'                => 'Mettre à jur la categorie',
        'separate_items_with_commas' => 'Separer les categories avec des virgules',
        'search_items'               => 'Chercher dans les categories',
        'add_or_remove_items'        => 'Ajouter ou supprimer des categories',
        'choose_from_most_used'      => 'Choisir parmi les categories les plus utilisées',
    );
    $args_event_cat = array(
        'labels'                     => $labels_event_cat,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => false,
    );
    register_taxonomy( 'event_cat', array( 'evenement' ), $args_event_cat );




        register_post_type('lieu', // Register Custom Post Type
        array(
            'labels' => array(
                'name' => __('Lieux', 'html5blank'), // Rename these to suit
                'singular_name' => __('Lieu', 'html5blank'),
                'add_new' => __('Ajouter', 'html5blank'),
                'add_new_item' => __('Add New Lieu', 'html5blank'),
                'edit' => __('Edit', 'html5blank'),
                'edit_item' => __('Edit Lieu', 'html5blank'),
                'new_item' => __('New Lieu', 'html5blank'),
                'view' => __('View Lieu', 'html5blank'),
                'view_item' => __('View Lieu', 'html5blank'),
                'search_items' => __('Search Lieu', 'html5blank'),
                'not_found' => __('No Lieux found', 'html5blank'),
                'not_found_in_trash' => __('No Lieu found in Trash', 'html5blank')
            ),
            'public' => true,
            'exclude_from_search' => false,
            'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
            'has_archive' => true,
            'supports' => array(
                'title'
            ), // Go to Dashboard Custom HTML5 Blank post for supports
            'can_export' => true, // Allows export in Tools > Export
            'taxonomies' => array(
            ) // Add Category and Post Tags support
        ));



    ?>
