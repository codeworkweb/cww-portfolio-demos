<?php
$data = array(

    'main' => array(
        'categories'        => array( 'Main Demo','cww-portfolio' ),
        'preview_url'       => 'https://demo.codeworkweb.com/cww-portfolio/main/',
        'xml_file'          => 'content.xml',
        'theme_settings'    => 'customizer.dat',
        'widgets_file'      => 'widgets.wie',
        'home_title'        => 'Home',
        'blog_title'        => 'Blogs',
        'posts_to_show'     => '5',
        'is_shop'           => false,
        'menus'             => array(
            'menu-1'   => 'Main Menu'
        ),
        'required_plugins'  => array(
            'free'          => array(
               
                array(
                    'slug'    => 'contact-form-7',
                    'init'    => 'contact-form-7/wp-contact-form-7.php',
                    'name'    => 'Contact Form 7',
                ),
            ),
        ),
    ),


    


);
$file = json_encode($data);
print_r($file);