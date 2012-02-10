<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Returns the name of the month
 *
 * @access	public
 * @param	string month_nr
 * @param	string format
 * @return	string
 */
if (!function_exists('get_month'))
{  
    function get_month($month_nr, $format = 'long')
    {
        $months = array(
	        '01'=>'january',
	        '02'=>'february',
	        '03'=>'march',
	        '04'=>'april',
	        '05'=>'may',
	        '06'=>'iune',
	        '07'=>'july',
	        '08'=>'august',
	        '09'=>'september',
	        '10'=>'october',
	        '11'=>'november',
	        '12'=>'december');
        
        //return the name of the month
        if($format == 'short'){
        	return substr($months[$month_nr], 0, 3);
        }else{
        	return $months[$month_nr];
        }
    }
}

/* End of file month_helper.php */
/* Location: ./application/helpers/month_helper.php */