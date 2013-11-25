<?php

if ( !defined( 'BASEPATH' ) )
    exit( 'No direct script access allowed' );

/**
 * Overriding the codeigniter's default Pagination class
 * @author Charanjit + Manish
 * @since 26-Sep-2011
 * @version 1.0
 * @package DDSLogic
 */
class MY_Pagination extends CI_Pagination
{

    private $_ci;
    public $allowedPerPage;
    public $defaultPerPage;
    public $perPageTagOpen = '<div class="perPageWrap">';
    public $perPageTagClose = '</div>';
    public $perPageText = 'Results per page ';

    public function __construct()
    {
        $this->allowedPerPage = config_item( 'per_page' ) === FALSE ? array( '3' => '3',
            '5' => '5',
            '10' => '10',
            '20' => '20',
            '30' => '30' ) : config_item( 'per_page' );
        $this->defaultPerPage = ( config_item( 'default_ppage' ) === FALSE ? reset( $this->allowedPerPage )
                            : ( in_array( config_item( 'default_ppage' ), $this->allowedPerPage )
                                    ? config_item( 'default_ppage' ) : reset( $this->allowedPerPage ) ) );

        $this->_ci = & get_instance();
        $this->_ci->load->helper( 'cookie' );

        $tempPP = $this->_ci->input->get_post( 'per_page' );
        $cookiePP = get_cookie( 'per_page' );

        if ( !empty( $tempPP ) && in_array( $tempPP, $this->allowedPerPage ) )
        {
            $this->setPerPage( $tempPP );
        }
        else if ( empty( $cookiePP ) || !in_array( $cookiePP, $this->allowedPerPage ) )
        {
            $this->setPerPage( $this->defaultPerPage );
        }
        else
        {
            $this->per_page = $cookiePP;
        }

        parent::__construct();
    }

    /**
     * This function is used to set the total number of records on a page as
     * well as set a cookie for it.
     *
     * @param int $perPage Number of results to be displayed on a single page
     */
    public function setPerPage( $perPage = NULL )
    {
        if ( !empty( $perPage ) && in_array( $perPage, $this->allowedPerPage ) )
        {
            set_cookie( 'per_page', $perPage, '604800' );
            $this->per_page = $perPage;
        }
    }

    public function showPerPage( $includePost = TRUE )
    {
        // Add the default function index in the URL if it does not exists
        $currentURL = preg_match( '/\//', uri_string() ) == TRUE ? current_url()
                    : trim( current_url(), '/' ) . '/index';

        if ( $includePost )
        {
            $postArray = $this->_ci->input->post();
            $params = '';

            if ( !empty( $postArray ) )
            {
                $params = '/';

                foreach ( $postArray as $key => $value )
                {
                    //Skip $_POST index x and y which are created in case of input type image
                    if ( preg_match( '/^(per_page|x|y)$/i', $key ) )
                    {
                        continue;
                    }

                    // If this key is in the current url then remove it
                    if ( preg_match( '/\/(' . addcslashes( $key, '[](){}^-.?+*' ) . ')\/?/i', $currentURL ) )
                    {
                        $currentURL = preg_replace( '/\/(' . addcslashes( $key, '[](){}^-.?+*' ) . ')\/[^\/]+/i', '', $currentURL );
                    }

                    if ( is_array( $value ) )
                    {
                        $value = array_unique( $value );
                        $value = array_filter( $value );
                        sort( $value );

                        if ( count( $value ) > 0 )
                        {
                            $params .= $key . '/' . implode( '+', $value ) . '/';
                        }
                    }
                    elseif ( !empty( $value ) )
                    {
                        $params .= $key . '/' . $value . '/';
                    }
                }
            }
        }

        $action = preg_match( '/\/(per_page|page|x|y)\/?/i', $currentURL ) == TRUE
                    ? preg_replace( '/\/(per_page|page|x|y)\/\d+/i', '', $currentURL )
                    : $currentURL;

        $action = trim( $action, '/' ) . rtrim( $params, '/' ) . '/per_page/';


        $attributes = 'id="paginationPerPage" onchange="document.forms[\'paginationPerPageForm\'].action+=this.value;document.forms[\'paginationPerPageForm\'].submit(true);"';
        $output = $this->perPageTagOpen;
        $output .= '<form name="paginationPerPageForm" method="post" action="' . $action . '" id="paginationPerPageForm">';
        $output .= $this->perPageText;
        $output .= form_dropdown( 'per_page', $this->allowedPerPage, $this->per_page, $attributes );
        $output .= '</form>';
        $output .= $this->perPageTagClose;
        return ( $this->total_rows > 0 ) ? $output : '';
    }

}