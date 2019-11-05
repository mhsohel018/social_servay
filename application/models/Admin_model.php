<?php
/**
* 
*/
class Admin_model extends CI_Model
{
	
	function __construct() {
        parent::__construct();
    }
    public function get_homePage_best_product()
    {
    	$d=$this->db->query('select * from home_best_product join product on home_best_product.productID=product.id order by home_best_product.id desc limit 6');
    	return $d->result();
    }
    public function get_homePage_featured_product()
    {
    	$d=$this->db->query('select * from home_featured_product join product on home_featured_product.productID=product.id order by home_featured_product.id desc limit 4');
    	return $d->result();
    }
    
}