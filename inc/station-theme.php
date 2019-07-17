<?php 

// Include the station-pro-radio_Theme_Options class.
require_once get_template_directory() . '/core/classes/class-theme-options.php';

$odin_theme_options = new Odin_Theme_Options(
    'theme-settings',  
    __( 'Theme Settings', 'station-pro-radio' ),  
    'manage_options'  
);

// Odin Getfields


$home_page = get_option( 'odin_general' );
$section = get_option( 'home_section' );
$slider = get_option( 'slider_home' );
$newsletter = get_option( 'newsletter_form' );

// Odin tabs

$odin_theme_options->set_tabs(
    array(
        array(
            'id' => 'odin_general', // ID da aba e nome da entrada no banco de dados.
            'title' => __( 'Settings', 'station-pro-radio' ), // Título da aba.
        ),
        array(
            'id' => 'home_section',
            'title' => __( 'Section FrontPage', 'station-pro-radio' )
        ),
        array(
            'id' => 'slider_home',
            'title' => __( 'Slider and Brands', 'station-pro-radio' )
        ),
        array(
            'id' => 'newsletter_form',
            'title' => __( 'Newsletter form', 'station-pro-radio' )
        )
    )
);

// station-pro-radio fields


$odin_theme_options->set_fields(
    array(
        'general_section' => array(
            'tab'   => 'odin_general', // Sessão da aba odin_general
            'title' => __( 'Settings Home Page', 'station-pro-radio' ),
            
            'fields' => array(

                array(
                    'id' => 'title_home',
                    'label' => __( 'Title Home:', 'station-pro-radio' ),
                    'type' => 'text',
                    'default' => 'Posuere lorem Ipsum',
                    'description' => __( 'Add the title ', 'station-pro-radio' )
                ),

                
                array(
                    'id'          => 'description_home', // Obrigatório
                    'label'       => __( 'Description and action', 'station-pro-radio' ), // Obrigatório
                    'type'        => 'editor', // Obrigatório
                    'default'     => '  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas esse eos, recusandae in incidunt fugiat nulla itaque,
                     <p>[button type="primary" size="lg" link="http://mypage.com" ]Download[/button]</p>', // Opcional
                    'options'     => array( // Opcional (aceita argumentos do wp_editor)
                        'textarea_rows' => 5,
                        'media_buttons' => false
                    ),
                ),
                array(
                    'id'          => 'image_home', // Required
                    'label'       => __( 'Image', 'station-pro-radio' ), // Required
                    'type'        => 'image', // Required
                    'default'     => '29',
                    'description' => __( 'Upload home image banner home with 1900 by 775 pixels', 'station-pro-radio' ) // Optional
                ),

            
            )

        ),


        'general_section_two' => array(
            'tab'   => 'odin_general', // Sessão da aba odin_general
            'title' => __( 'Section home', 'station-pro-radio' ),
            
            'fields' => array(

                array(
                    'id' => 'section_home',
                    'label' => __( 'Section Action', 'station-pro-radio' ),
                    'type' => 'editor',
                    'default' => '<h2>Vivamus laoreet</h2>
                    <p> Auctor augue mauris augue neque. Posuere lorem ipsum dolor sit amet consectetur adipiscing. Porta non
                        pulvinar neque laoreet. Viverra ipsum nunc aliquet bibendum. Iaculis urna id volutpat lacus. Turpis
                        egestas pretium aenean pharetra magna ac. Id cursus metus aliquam eleifend mi. </p>
                    <a href="./download.html" title="" class="btn btn-primary btn-lg">Download</a>',
                    'options'     => array( // Opcional (aceita argumentos do wp_editor)
                        'textarea_rows' => 5,
                        'media_buttons' => false
                    ),

                    'description' => __( 'Session Home Action', 'station-pro-radio' )
                ),

                )
            ),

    // Section Features

            'general_section_tree' => array(
                'tab'   => 'odin_general', // Sessão da aba odin_general
                'title' => __( 'Section Features', 'station-pro-radio' ),
                
                'fields' => array(

                    array(
                        'id' => 'features_image',
                        'label' => __( 'Features Images ', 'station-pro-radio' ),
                        'type' => 'image',
                        'default' => '28'
                        
                    ),
    
                    array(
                        'id' => 'features',
                        'label' => __( 'Section Spotlight', 'station-pro-radio' ),
                        'type' => 'editor',
                        'default' => '<ul class="features"> <li>
                        <h3>Dui augue</h3>
                        <p>Auctor augue mauris augue neque. Posuere lorem ipsum dolor sit amet consectetur adipiscing.
                        </p>
                    </li>
                    <li>
                        <h3>Malesuada</h3>
                        <p>Auctor augue mauris augue neque. Posuere lorem ipsum dolor sit amet consectetur adipiscing.
                        </p>
                    </li>
                    <li>
                        <h3>Bibendum</h3>
                        <p>Auctor augue mauris augue neque. Posuere lorem ipsum dolor sit amet consectetur adipiscing.
                        </p>
                    </li></ul>',
                        'options'     => array( // Opcional (aceita argumentos do wp_editor)
                            'textarea_rows' => 5,
                            'media_buttons' => false
                        ),
    
                        'description' => __( 'Class "features" is required for <ul class="features">', 'station-pro-radio' )
                    ),
    
                    )
                ),



        // General Four

        'newsletter_add' => array(
            'tab'   => 'newsletter_form', // Sessão da aba odin_general
            'title' => __( 'Newsletter', 'station-pro-radio' ),
            
            'fields' => array(

          
              array(
                    'id' => 'code_newsletter',
                    'label' => __( 'Newsletter Form', 'station-pro-radio' ),
                    'type' => 'textarea',
                    'default' => '        <div class="col-md-4">
                    <h4>Subscribe to newsletter</h4>
                    
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control footer-input-text">
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-primary btn-newsletter ">OK</button>
                            </div>
                        </div>
                    </div>
              </div>',
                    'options'     => array( // Opcional (aceita argumentos do wp_editor)
                        'textarea_rows' => 5,
                        'media_buttons' => false
                    ),

                    'description' => __( 'Add newsletter form code for your templete', 'station-pro-radio' )
                ),

                )
            ),



        // sections tabs 
 

       'section_container' => array(
            'tab'   => 'home_section',  
            'title' => __( 'Section Icons and Text', 'station-pro-radio' ),
            'fields' => array(
                array(
                    'id' => 'title',
                    'label' => __( 'Title Section', 'station-pro-radio' ),
                    'type' => 'text',
                    'default' => 'Vivamus laoreet',
                    
                ),
                array(
                    'id' => 'description',
                    'label' => __( 'Description Section 1', 'station-pro-radio' ),
                    'default' => 'Auctor augue mauris augue neque. Posuere lorem ipsum dolor sit amet consectetur adipiscing.
                    Porta non pulvinar neque laoreet. Viverra ipsum nunc aliquet bibendum.',
                    'type' => 'editor',
                    'options'     => array( // Opcional (aceita argumentos do wp_editor)
                        'textarea_rows' => 5,
                        'media_buttons' => false
                    ),

                
                )
            )
        ),
        

  
        
        //  Section Home One
        
        'home_section1' => array(
            'tab'   => 'home_section', // Sessão da aba station-pro-radio_adsense
            'title' => __( 'Blocks Section One', 'station-pro-radio' ),
            'fields' => array(
                array(
                    'id' => 'title_1',
                    'label' => __( 'Title ', 'station-pro-radio' ),
                    'type' => 'text',
                    'default' => 'Consectetur'
                ),
                array(
                    'id' => 'descricao_1',
                    'label' => __( 'Description ', 'station-pro-radio' ),
                    'type' => 'textarea',
                    'default' => 'Auctor augue mauris augue neque. Posuere lorem ipsum dolor sit amet consectetur adipiscing. Porta
                    non pulvinar neque laoreet. Viverra ipsum nunc aliquet bibendum. Iaculis urna id volutpat lacus.
                    Turpis egestas pretium aenean pharetra magna ac'
                ),
                array(
                    'id' => 'icon_1',
                    'label' => __( 'Icon ', 'station-pro-radio' ),
                    'type' => 'text',
                    'default' => 'comment-o',
                    'description' => __( 'Use the font-awesome without the fa for icon ex: comment-0', 'station-pro-radio' )
                ),
               
            )
        ),
         

        //  Section Hom Two
        'home_section2' => array(
            'tab'   => 'home_section', // Sessão da aba station-pro-radio_adsense
            'title' => __( 'Blocks Section Two', 'station-pro-radio' ),
            'fields' => array(
                array(
                    'id' => 'title_2',
                    'label' => __( 'Title ', 'station-pro-radio' ),
                    'type' => 'text',
                    'default' => 'Malesuada'
                    
                ),
                array(
                    'id' => 'descricao_2',
                    'label' => __( 'Description ', 'station-pro-radio' ),
                    'type' => 'textarea',
                    'default' => 'Auctor augue mauris augue neque. Posuere lorem ipsum dolor sit amet consectetur adipiscing. Porta
                    non pulvinar neque laoreet. Viverra ipsum nunc aliquet bibendum. Iaculis urna id volutpat lacus.
                    Turpis egestas pretium aenean pharetra magna ac'
                ),
                array(
                    'id' => 'icon_2',
                    'label' => __( 'Icon ', 'station-pro-radio' ),
                    'type' => 'text',
                    'default' => 'heart-o',
                    'description' => __( 'Use the font-awesome without the fa for icon ex: heart-o', 'station-pro-radio' )
                ),
               
            )
        ),

        // Section Home 3

        'home_section3' => array(
            'tab'   => 'home_section', // Sessão da aba station-pro-radio_adsense
            'title' => __( 'Blocks Section Tree', 'station-pro-radio' ),
            'fields' => array(
                array(
                    'id' => 'title_3',
                    'label' => __( 'Title ', 'station-pro-radio' ),
                    'type' => 'text',
                    'default' => 'Phasellus'
                    
                ),
                array(
                    'id' => 'descricao_3',
                    'label' => __( 'Description ', 'station-pro-radio' ),
                    'type' => 'textarea',
                    'default' => 'Auctor augue mauris augue neque. Posuere lorem ipsum dolor sit amet consectetur adipiscing. Porta
                    non pulvinar neque laoreet. Viverra ipsum nunc aliquet bibendum. Iaculis urna id volutpat lacus.
                    Turpis egestas pretium aenean pharetra magna ac'
                ),
                array(
                    'id' => 'icon_3',
                    'label' => __( 'Icon ', 'station-pro-radio' ),
                    'type' => 'text',
                    'default' => 'bell-o',
                    'description' => __( 'Use the font-awesome without the fa for icon ex: bell-o ', 'station-pro-radio' )
                ),
            
            )
        ),


        'slider' => array(
            'tab'   => 'slider_home', // Sessão da aba station-pro-radio_adsense
            'title' => __( 'Slider Front Page', 'station-pro-radio' ),
            'fields' => array(
 
                array(
                    'id' => 'image1',
                    'label' => __( 'Slider 1 ', 'station-pro-radio' ),
                    'type' => 'image',
                    'default' => '26'
                    
                ),
                array(
                    'id' => 'image2',
                    'label' => __( 'Slider 2', 'station-pro-radio' ),
                    'type' => 'image',
                    'default' => '27'
                    
                ),
                array(
                    'id' => 'image3',
                    'label' => __( 'Slider 3 ', 'station-pro-radio' ),
                    'type' => 'image',
                    'default' => '28'
                    
                ),
                
            
            )
        ),

        'brands' => array(
            'tab'   => 'slider_home', // Sessão da aba station-pro-radio_adsense
            'title' => __( 'Brands Front Page', 'station-pro-radio' ),
            'fields' => array(
 
                array(
                    'id' => 'brand',
                    'label' => __( 'Brand 1 ', 'station-pro-radio' ),
                    'type' => 'image_plupload',
                    'default' => '26'
                    
                ),
             
                
            
            )
        ),





        // end Settings Pages

    )
);



 
add_action( 'init', 'theme_settings', 1 );

?>