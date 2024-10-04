<?php
/** 
 * All Macbeth custom functions
 * @package Macbeth
**/

namespace Macbeth\Custom;

class Macbeth_Functions
{
    /**
     * register default hooks and actions for WordPress
     * @return
     */
    public function register()
    {
        add_action('init', array( $this, 'page_type' ) );
        add_filter('siteorigin_panels_row_style_fields', array( $this, 'macbeth_so_style_fields' ) );
        add_action('siteorigin_panels_row_classes', array( $this, 'macbeth_so_add_class_to_row' ), 10, 2);
        add_filter('siteorigin_panels_before_row', array( $this, 'macbeth_before_row' ),  10, 2);
        add_filter('siteorigin_panels_after_row', array( $this, 'macbeth_after_row' ),  10, 2);
        add_action('wp', array( $this,'dynamic_scss'));
        add_action('init', array( $this, 'register_new_terms_page_type'));
        add_action('init', array( $this, 'macbeth_details') );
        add_action('wp', array( $this, 'macbeth_footer_details') );
    }

    /**
     * Page Type (Custom Taxonomy)
     */
    public function page_type() 
    {

        $pageTypeLabel = array(
            'name'              => _x( 'Page Type', 'macbeth' ),
            'singular_name'     => _x( 'Page Type', 'macbeth' ),
            'search_items'      => __( 'Search Page Type', 'macbeth' ),
            'all_items'         => __( 'All Page Type', 'macbeth' ),
            'parent_item'       => __( 'Parent Page Type', 'macbeth' ),
            'parent_item_colon' => __( 'Parent Page Type:', 'macbeth' ),
            'edit_item'         => __( 'Edit Page Type', 'macbeth' ),
            'update_item'       => __( 'Update Page Type', 'macbeth' ),
            'add_new_item'      => __( 'Add New Page Type', 'macbeth' ),
            'new_item_name'     => __( 'New Page Type Name', 'macbeth' ),
            'menu_name'         => __( 'Page Type', 'macbeth' ),
        );

        $pageTypeArgs = array(
            'hierarchical'      => true,
            'labels'            => $pageTypeLabel,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array( 'slug' => 'page_type' ),
        );

        register_taxonomy( 'page_type', array( 'page' ), $pageTypeArgs );
    }

    public function macbeth_so_add_class_to_row( $row_classes, $row ) 
    {
        if( isset( $row['style']['mainrowclass'] ) ) {
            $row_classes[] =  $row['style']['mainrowclass'];
        }
        return $row_classes;
    }

    public function macbeth_so_style_fields($fields) 
    {
        $fields['mainrowclass'] = array(
          'name'        => __('Main Row Class', 'siteorigin-panels'),
          'type'        => 'text',
          'group'       => 'attributes',
          'description' => __('Main Row Class.', 'siteorigin-panels'),
          'priority'    => 4,
        );

        $fields['topdivclass'] = array(
            'name'        => __('Top Div Class', 'siteorigin-panels'),
            'type'        => 'text',
            'group'       => 'attributes',
            'description' => __('Top Div Class.', 'siteorigin-panels'),
            'priority'    => 4,
        );
  
        $fields['topdivbackground'] = array(
            'name'        => __('Top Div Background Color', 'siteorigin-panels'),
            'type'        => 'color',
            'group'       => 'design',
            'description' => __('Top Div Background Color.', 'siteorigin-panels'),
            'priority'    => 4,
        );
      
        return $fields;
    }

    public function macbeth_before_row($panels_data, $attributes)
    {
        if( isset( $attributes['style']['topdivbackground'] ) && isset( $attributes['style']['topdivclass'] ) ) {
            $returnString = '<div class="' . $attributes['style']['topdivclass'] . '" style="background-color:' . $attributes['style']['topdivbackground'] . '">';
        }elseif(isset( $attributes['style']['topdivbackground'] )){
            $returnString = '<div style="background-color:' . $attributes['style']['topdivbackground'] . '">';
        }elseif(isset( $attributes['style']['topdivclass'] )){
            $returnString = '<div class="' . $attributes['style']['topdivclass'] . '">';
        }else{
            $returnString = '<div>';
        }

        return  $returnString;
    }
      
    public function macbeth_after_row()
    {
        return '</div>';
    }

    /* Dynamic Page Color */
    public function dynamic_scss()
    {
        $file = get_template_directory() . '/assests/scss/page-color.scss';

        if(file_exists($file)){
            $output = "";

            $commercialColor = get_theme_mod( 'macbeth_commercial_color' );
            $privateColor = get_theme_mod( 'macbeth_private_color' );
            $sectorColor = get_theme_mod( 'macbeth_sector_color' );
            $pageColor = '#badc14'; // Default, Don't remove

            if(is_page()) :

                global $post;
                $pageTermObj = wp_get_post_terms($post->ID, 'page_type');

                if(!empty($pageTermObj)) :
                    $pageTermSlug = wp_list_pluck($pageTermObj, 'slug', 'taxonomy');
                    $pageTerm = $pageTermSlug['page_type'];

                    switch ($pageTerm) {
                        case "commercial-product":
                            $pageColor = ($commercialColor != '')?$commercialColor:'#badc14';
                            break;
                        case "private-product":
                            $pageColor = ($privateColor != '')?$privateColor:'#badc14';
                            break;
                        case "sectors":
                            $pageColor = ($sectorColor != '')?$sectorColor:'#badc14';
                            break;
                        default:
                            $pageColor = '#badc14';
                    }

                endif;
            endif;

            $output .= '$cat_color: ' . $pageColor . ';' . PHP_EOL;
            file_put_contents($file, $output, FILE_TEXT ) or die('<br />Error writing to custom options CSS file');
        }
    }

    /* Default Terms for Pages (Page Type) */
    public function register_new_terms_page_type() {
        $taxonomy = 'page_type';
        $terms = array (
            '0' => array (
                'name'          => 'Commercial Product',
                'slug'          => 'commercial-product',
                'description'   => '',
            ),
            '1' => array (
                'name'          => 'Private Product',
                'slug'          => 'private-product',
                'description'   => '',
            ),
            '2' => array (
                'name'          => 'Sectors',
                'slug'          => 'sectors',
                'description'   => '',
            ),
        );  
      
        foreach ( $terms as $term_key=>$term) {
            wp_insert_term(
                $term['name'],
                $taxonomy, 
                array(
                    'description'   => $term['description'],
                    'slug'          => $term['slug'],
                )
            );
            unset( $term ); 
        }
    }

    /* Detail's for Macbeth */
    public function macbeth_details() {
        global $macbeth;
        $macbeth = array(
            'email'         => (get_theme_mod('macbeth-contact-email') != '')   ? get_theme_mod('macbeth-contact-email')    :'',
            'facebook'      => (get_theme_mod('macbeth-social-facebook') != '') ? get_theme_mod('macbeth-social-facebook')  :'',
            'twitter'       => (get_theme_mod('macbeth-social-twitter') != '')  ? get_theme_mod('macbeth-social-twitter')   :'',
            'linkedin'      => (get_theme_mod('macbeth-social-linkedin') != '') ? get_theme_mod('macbeth-social-linkedin')  :'',
        );
    }

    /** 
     * Macbeth Footer Menu 
     * Note: Option will not work directly on footer
     * for this global variable has been created
     */
    public function macbeth_footer_details() {
        global $footerMenu;
        $footerMenu = array(
            'footerMenu' => (get_field('footer_page_menu') != '') ? get_field('footer_page_menu') :'',
        );
    }
    
}