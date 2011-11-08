<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Get asset URL
 *
 * @access	public
 * @return	string
 */
if (!function_exists('asset_url'))
{  
    function asset_url($type)
    {
        //get an instance of CI so we can access our configuration
        $CI =& get_instance();  
        //return the full asset path to the type of resource
        return base_url() . $CI->config->item($type.'_'.'path');
    }
}

/* End of file path_helper.php */
/* Location: ./application/helpers/path_helper.php */