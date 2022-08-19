<?php 
// my functions page!

function my_excerpt_length() {
return 35;
}

add_filter('excerpt_length' , 'my_excerpt_length') ;
set_post_thumbnail_size(200,200);
add_theme_support('post-thumbnails');

// Register my navigation
register_nav_menus(array('primary' => 'Primary Menu', 
'footer' => 'Footer Menu'));

// engueuing my script
function my_theme_scripts() {
    wp_enqueue_script( 'astuteo', get_template_directory_uri() . '/js/astuteo.js', '1.0.0', false );
    }
    add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );

    // my widgets

    function init_widgets() {
        register_sidebar(array(
        'name' => 'Sidebar Blog',
        'id' => 'sidebar-blog',
        'before_widget' => '<div class="inner-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
        ));

        register_sidebar(array(
            'name' => 'Sidebar About',
            'id' => 'sidebar-about',
            'before_widget' => '<div class="inner-widget">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
            ));

            register_sidebar(array(
                'name' => 'Sidebar Food',
                'id' => 'sidebar-food',
                'before_widget' => '<div class="inner-widget">',
                'after_widget' => '</div>',
                'before_title' => '<h3>',
                'after_title' => '</h3>'
                ));

                register_sidebar(array(
                    'name' => 'Sidebar Food Specials',
                    'id' => 'sidebar-food-specials',
                    'before_widget' => '<div class="inner-specials">',
                    'after_widget' => '</div>',
                    'before_title' => '<h3>',
                    'after_title' => '</h3>'
                    ));

                register_sidebar(array(
                    'name' => 'Sidebar Footer',
                    'id' => 'sidebar-footer',
                    'before_widget' => '<div class="row">',
                    'after_widget' => '</div>',
                    'before_title' => '<h3>',
                    'after_title' => '</h3>'
                    ));

                    register_sidebar(array(
                        'name' => 'Sidebar Copyright',
                        'id' => 'sidebar-copyright',
                        'before_widget' => '<div class="row">',
                        'after_widget' => '</div>',
                        'before_title' => '<h3>',
                        'after_title' => '</h3>'
                        ));


                register_sidebar(array(
                    'name' => 'Sidebar Contact',
                    'id' => 'sidebar-contact',
                    'before_widget' => '<div class="inner-widget">',
                    'after_widget' => '</div>',
                    'before_title' => '<h3>',
                    'after_title' => '</h3>'
                    ));

                    register_sidebar(array(
                        'name' => 'Sidebar Buy',
                        'id' => 'sidebar-buy',
                        'before_widget' => '<div class="inner-buy">',
                        'after_widget' => '</div>',
                        'before_title' => '<h2>',
                        'after_title' => '</h2>'
                        ));

    } // end function init widgets
        // add action AFTER the function
        add_action('widgets_init', 'init_widgets');

//  Functions to display a list of all the shortcodes
function diwp_get_list_of_shortcodes(){
 
    // Get the array of all the shortcodes
    global $shortcode_tags;
     
    $shortcodes = $shortcode_tags;
     
    // sort the shortcodes with alphabetical order
    ksort($shortcodes);
     
    $shortcode_output = "<ul>";
     
    foreach ($shortcodes as $shortcode => $value) {
        $shortcode_output = $shortcode_output.'<li>['.$shortcode.']</li>';
    }
     
    $shortcode_output = $shortcode_output. "</ul>";
     
    return $shortcode_output;
 
}
add_shortcode('get-shortcode-list', 'diwp_get_list_of_shortcodes');
       
function seller_disclaimer() {
    return '<p><small>Before you buy one serving of syrniki (2 pieces),please, be sure that you are not hungry because you may not have time (sold out)to buy a second serving
    </small></p>';
}

add_shortcode('disclaimer', 'seller_disclaimer');

function specials() {
    // add a switch
    // if today is Sunday, show me Sunday's specials
    if(isset($_GET['today'])) {
        $today = $_GET['today'];
    } else{
        $today = date('l');
    }

    switch($today) {
        case 'Sunday':
            $content = 'Today\'s specials try us Ukrainian borscht! Let\'s add some information about this delicious dish. 
            To learn more about Ukrainian cuisine, click <a href="">here!</a>';

            case 'Monday':
                $content = 'Today\'s specials try us Ukrainian solyanka! Let\'s add some information about this delicious dish. 
                To learn more about Ukrainian cuisine, click <a href="">here!</a>';
    
                case 'Tuesday':
                    $content = 'Today\'s specials try us Ukrainian syrniki! Let\'s add some information about this delicious dish. 
                    To learn more about Ukrainian cuisine, click <a href="">here!</a>';

                    case 'Wednesday':
                        $content = 'Today\'s specials try us Ukrainian Olivye salad! Let\'s add some information about this delicious dish. 
                        To learn more about Ukrainian cuisine, click <a href="">here!</a>';

                        case 'Thursday':
                            $content = 'Today\'s specials try us Ukrainian pyroshki! Let\'s add some information about this delicious dish. 
                            To learn more about Ukrainian cuisine, click <a href="">here!</a>';

                            case 'Friday':
                                $content = 'Today\'s specials try us Ukrainian shashlik with horilka(Ukrainian vodka)! Let\'s add some information about this delicious dish. 
                                To learn more about Ukrainian cuisine, click <a href="">here!</a>';

                                case 'Saturday':
                                    $content = 'Today\'s specials try us Ukrainian Kyiv Cake (Ukrainian tort)! Let\'s add some information about this delicious dish. 
                                    To learn more about Ukrainian cuisine, click <a href="">here!</a>';
}

return $content;
}

add_shortcode('today_specials', 'specials');

function today_date() {
    return date('l\, F jS Y');
}

add_shortcode('current_date', 'today_date');

add_filter('widget_text' , 'do_shortcode');

//Page Slug Body Class
function add_slug_body_class( $classes ) {
    global $post;
    if ( isset( $post ) ) {
    $classes[] = $post->post_name;
    }
    return $classes;
    }
    add_filter( 'body_class', 'add_slug_body_class' );