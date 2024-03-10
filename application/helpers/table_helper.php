<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * CodeIgniter Array Helpers
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		EllisLab Dev Team
 * @link		https://codeigniter.com/userguide3/helpers/array_helper.html
 */

// ------------------------------------------------------------------------

if ( ! function_exists('table'))
{
    function gettabledata($result=array(),$tablename=''){
        $tabledata='<table id="'.$tablename.'">';
        $tabledata.='<thead><tr><td>Id</td><td>Name</td><td>Email Address</td></tr></thead>';
        $tabledata.='<tbody><tr><td>1</td><td>Kooshana</td><td>Testgmail@gmail.com</td></tr></tbody>';
        $tabledata.='</table>';
        return $tabledata;
    }

    function formatPhoneNumber($input) {
        // Remove all non-numeric characters
        $input = preg_replace('/[^0-9]/', '', $input);
    
        // Format as (XXX) XXX-XXXX
        return preg_replace('/(\d{3})(\d{3})(\d{4})/', '($1) $2-$3', $input);
    }
}

if ( ! function_exists('formatPhoneNumber'))
{    

    function formatPhoneNumber($input) {
        // Remove all non-numeric characters
        $input = preg_replace('/[^0-9]/', '', $input);
    
        // Format as (XXX) XXX-XXXX
        return preg_replace('/(\d{3})(\d{3})(\d{4})/', '($1) $2-$3', $input);
    }
}
?>