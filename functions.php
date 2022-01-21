<?php
function mermaid_register_nav_menu(){
        register_nav_menus( array(
            'primary-menu' => __( 'Górne Menu', 'text_domain' ),
            'footer-menu'  => __( 'Menu Stopki', 'text_domain' ),
        ) );
    }
add_action( 'after_setup_theme', 'mermaid_register_nav_menu', 0 );

function my_acf_init() {
	
	acf_update_setting('google_api_key', 'AIzaSyDDrjxQ96TovOAKFTJd1MWwvD_HIhZQoB8');
}

add_action('acf/init', 'my_acf_init');

function theme_scripts() {
    wp_enqueue_style( 'slick-style', get_theme_file_uri( '/bower_components/slick-carousel/slick/slick.css' ), array(), file_exists( get_theme_file_path('/bower_components/slick-carousel/slick/slick.css') ) ? filemtime( get_theme_file_path('/bower_components/slick-carousel/slick/slick.css') ) : '0.0' );
    wp_enqueue_style( 'slick-theme-style', get_theme_file_uri( '/bower_components/slick-carousel/slick/slick-theme.css' ), array(), file_exists( get_theme_file_path('/bower_components/slick-carousel/slick/slick-theme.css') ) ? filemtime( get_theme_file_path('/bower_components/slick-carousel/slick/slick-theme.css') ) : '0.0' );
	wp_enqueue_style( 'lightbox-style', get_theme_file_uri( '/bower_components/lightbox2/dist/css/lightbox.min.css' ), array(), file_exists( get_theme_file_path('/bower_components/lightbox2/dist/css/lightbox.min.css') ) ? filemtime( get_theme_file_path('/bower_components/lightbox2/dist/css/lightbox.min.css') ) : '0.0' );
    wp_deregister_script('jquery');
    wp_deregister_script('google-recaptcha');
    wp_enqueue_script( 'jquery', get_theme_file_uri( '/bower_components/jquery/dist/jquery.min.js' ), array(), file_exists( get_theme_file_path('/bower_components/jquery/dist/jquery.min.js') ) ? filemtime( get_theme_file_path('/bower_components/jquery/dist/jquery.min.js') ) : '0.0', false );

    wp_enqueue_script( 'slick', get_theme_file_uri( '/bower_components/slick-carousel/slick/slick.min.js' ), array(), file_exists( get_theme_file_path('/bower_components/slick-carousel/slick/slick.min.js') ) ? filemtime( get_theme_file_path('/bower_components/slick-carousel/slick/slick.min.js') ) : '0.0', false );
	wp_enqueue_script( 'lightbox', get_theme_file_uri( '/bower_components/lightbox2/dist/js/lightbox.min.js' ), array(), file_exists( get_theme_file_path('/bower_components/lightbox2/dist/js/lightbox.min.js') ) ? filemtime( get_theme_file_path('/bower_components/lightbox2/dist/js/lightbox.min.js') ) : '0.0', true );

    wp_enqueue_style( 'scss', get_theme_file_uri( '/public/css/app.css' ), array(), file_exists( get_theme_file_path('/public/css/app.css') ) ? filemtime( get_theme_file_path('/public/css/app.css') ) : '0.0' );

     wp_enqueue_style( 'twd-googlefonts', 'https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', array(), null );
     
     wp_enqueue_style( 'slickslidercss', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), null );

     wp_enqueue_script( 'slicksliderjs', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), '1.0.0', true);

     wp_enqueue_script( 'googlemap', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDDrjxQ96TovOAKFTJd1MWwvD_HIhZQoB8', NULL, '1.0.0', true);

    
     wp_enqueue_script( 'js', get_theme_file_uri( '/public/js/app.js' ), array('jquery'), '0.0.0', false );

     wp_enqueue_script( 'smoothscroll', 'https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js', array('jquery'), '0.0.0', false );


     wp_enqueue_script( 'samplejs', get_theme_file_uri( '/public/js/header.js' ), array(), file_exists( get_theme_file_path('/public/js/header.js') ) ? filemtime( get_theme_file_path('/public/js/header.js') ) : '0.0', true );
     
     wp_enqueue_script( 'googlemapjs', get_theme_file_uri( '/public/js/googlemap.js' ), array(), file_exists( get_theme_file_path('/public/js/googlemap.js') ) ? filemtime( get_theme_file_path('/public/js/googlemap.js') ) : '0.0', true );
     wp_enqueue_script('popper_js', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', false, '', true );
     wp_enqueue_script('isotop', '//cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js', array('jquery'), false, true);

}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );



function fajnietu_post_type() {
    

    register_post_type( 'slider', array(
        'label'               => __( 'Slajdy', 'textdomain' ),
        'public'              => true,
        'exclude_from_search' => false,
        'show_in_nav_menus'   => false,
        'menu_icon'           => 'dashicons-images-alt',
        'supports'            => array( 'title', 'thumbnail', 'page-attributes' ),
        'rewrite'             => [
            'slug' => 'slider'
        ],
        'has_archive'           => false,
        'hierarchical'          => false,
        'publicly_queryable'  => true,
        'menu_position' => 20,
        
    ));


       

        register_post_type( 'aktualnosci', array(
            'label'               => __( 'Aktualności', 'textdomain' ),
            'public'              => true,
            'exclude_from_search' => false,
            'show_in_nav_menus'   => false,
            'show_in_rest' => true,
            'menu_icon'           => 'dashicons-welcome-widgets-menus',
            'supports'            => array( 'title', 'editor', 'thumbnail', 'custom-fields','excerpt'  ),
            'rewrite'             => [
                'slug' => 'aktualnosci'
            ],
            'has_archive'           => false,
            'hierarchical'          => false,
            'publicly_queryable'  => true,
            'menu_position' => 20,
            
        ));
        $labels = array(
            'name' => _x( 'Kategorie Aktualnosci', 'taxonomy general name' ),
            'singular_name' => _x( 'Kategorie Aktualności', 'taxonomy singular name' ),
            'search_items' =>  __( 'Szukaj aktualności' ),
            'all_items' => __( 'Wszystkie aktualności' ),
            'parent_item' => __( 'Parent Type' ),
            'parent_item_colon' => __( 'Parent Type:' ),
            'edit_item' => __( 'Edytuj' ), 
            'update_item' => __( 'Edytuj' ),
            'add_new_item' => __( 'Nowa kategoria' ),
            'new_item_name' => __( 'New Type Name' ),
            'menu_name' => __( 'Kategorie Aktualności' ),
          ); 	
         
          register_taxonomy('newscategory',array('aktualnosci'), array(
            'hierarchical' => true,
            'labels' => $labels,
            'show_ui' => true,
            'show_admin_column' => true,
            'query_var' => true,
            'rewrite' => array( 'slug' => 'newscategory' ),
            ));


            $labels = array(
                'name'                  => 'Zespół',
                'singular_name'         => 'Członek zespołu',
                'menu_name'             => 'Członkowie zespołu',
                'name_admin_bar'        => 'Członkowie zespołu',
                'parent_item_colon'     => 'Parent Item:',
                'all_items'             => 'Zespół',
                'add_new'               => 'Nowy członek zespołu',
                'new_item'              => 'Nowy członek zespołu',
                'edit_item'             => 'Edytuj członka zespołu',
                'update_item'           => 'Edytuj członka zespołu',
            );
            $args = array(
                'label'                 => 'Zespół',
                'description'           => 'Post Type Description',
                'labels'                => $labels,
                'show_in_rest' => true,
                'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'excerpt' ),
                'taxonomies'            => array(),
                'hierarchical'          => false,
                'public'                => true,
                'show_ui'               => true,
                'show_in_menu'          => true,
                'menu_position'         => 5,
                'show_in_admin_bar'     => true,
                'show_in_nav_menus'     => true,
                'can_export'            => true,
                'has_archive'           => false,
                'exclude_from_search'   => false,
                'publicly_queryable'    => true,
                'menu_icon'           => 'dashicons-groups',
                'capability_type'       => 'post',
            );
            register_post_type( 'zespol', $args );
}

add_action('init', 'fajnietu_post_type');



flush_rewrite_rules( false );



function theme_prefix_rewrite_flush() {
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'theme_prefix_rewrite_flush' );



function breadcrumbs() {
	if( !is_404() ) {
		$post_type = get_post_type();
		$id = get_the_ID();
		$title = get_the_title();
		$items = [
			['url' => false, 'name' => $title]
		];

		if ($post_type == 'page') {
			$child_id = $id;

			while ($parent_id = wp_get_post_parent_id($child_id)) {
				$parent = get_post($parent_id);

				$items[] = array(
					'name' => $parent->post_title,
					'url' => get_permalink($parent)
				);

				$child_id = $parent_id;
			}

		} else {

			$post_type_data = get_post_type_object($post_type);
			$post_type_slug = $post_type_data->rewrite['slug'];
			$parentPage = get_page_by_path($post_type_slug);
			if ($parentPage && false) {

				$items[] = array(
					'name' => $parentPage->post_title,
					'url' => get_permalink($parentPage)
				);

			} else {
				$items[] = array(
					'name' => $post_type_data->label,
					'url' => home_url() . '/' . $post_type_slug
				);
			}


		}
	}else{
		$items = [];
	}

	$items[] = array(
			'url' => esc_url(home_url('/')),
			'name' => __("Strona główna")
	);

	$backLink = esc_url(home_url('/'));
	if( isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] != '' ){
		if( !strpos($_SERVER['HTTP_REFERER'],$_SERVER['HTTP_HOST']) )
			$backLink = isset( $items[1] ) ? $items[1]['url'] : esc_url(home_url('/'));//$_SERVER['HTTP_REFERER'];
		else
			$backLink = "javascript:history.back();";
	}

	$items = array_reverse($items);
	?>
	<ul class="breadcrumbs fixclear">
		<?php foreach($items as $item): ?>
			<li class="breadcrumbs-item">
				<?php if( $item['url'] ): ?>
					<a class="breadcrumbs-link" href="<?php echo $item['url']; ?>"><?php echo $item['name']; ?></a>
				<?php else: ?>
					<span><?php echo $item['name'] ; ?></span>
				<?php endif; ?>
			</li>
		<?php endforeach; ?>
	</ul>
	<?php
}



if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Opcje stopki',
		'menu_title'	=> 'Opcje stopki',
		'menu_slug' 	=> 'theme-footer-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

    acf_add_options_page(array(
		'page_title' 	=> 'Opcje motywu',
		'menu_title'	=> 'Opcje motywu',
		'menu_slug' 	=> 'theme-header-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	
	
}

function df_disable_comments_post_types_support() {
	$post_types = get_post_types();
	foreach ($post_types as $post_type) {
		if(post_type_supports($post_type, 'comments')) {
			remove_post_type_support($post_type, 'comments');
			remove_post_type_support($post_type, 'trackbacks');
		}
	}
}
add_action('admin_init', 'df_disable_comments_post_types_support');

// Close comments on the front-end
function df_disable_comments_status() {
	return false;
}
add_filter('comments_open', 'df_disable_comments_status', 20, 2);
add_filter('pings_open', 'df_disable_comments_status', 20, 2);

// Hide existing comments
function df_disable_comments_hide_existing_comments($comments) {
	$comments = array();
	return $comments;
}
add_filter('comments_array', 'df_disable_comments_hide_existing_comments', 10, 2);

// Remove comments page in menu
function df_disable_comments_admin_menu() {
	remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'df_disable_comments_admin_menu');

// Redirect any user trying to access comments page
function df_disable_comments_admin_menu_redirect() {
	global $pagenow;
	if ($pagenow === 'edit-comments.php') {
		wp_redirect(admin_url()); exit;
	}
}
add_action('admin_init', 'df_disable_comments_admin_menu_redirect');

// Remove comments metabox from dashboard
function df_disable_comments_dashboard() {
	remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
}
add_action('admin_init', 'df_disable_comments_dashboard');

// Remove comments links from admin bar
function df_disable_comments_admin_bar() {
	if (is_admin_bar_showing()) {
		remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
	}
}
add_action('init', 'df_disable_comments_admin_bar');

add_action( 'admin_bar_menu', 'clean_admin_bar', 999 );
function clean_admin_bar( $wp_admin_bar ) {
    $wp_admin_bar->remove_node( 'comments' );
}

add_action( 'admin_menu', 'remove_default_post_type' );

function remove_default_post_type() {
    remove_menu_page( 'edit.php' );
}