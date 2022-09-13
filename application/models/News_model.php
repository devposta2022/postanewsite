<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class News_model extends CI_Model
{
	public function getAllPosts()
	{

		$query = $this->db->get('website_news');
		if($query)
		{
			return $query->result();
		}
	}

	// public function insertProduct($products)
	// {
	// 	$query = $this->db->insert('products',$products);

	// 	if($query)
	// 	{
	// 		return true;
	// 	}
	// 	else
	// 	{
	// 		return false;
	// 	}
	// }
	// public function editSingleProduct($id)
	// {
	// 	$this->db->where('id',$id);
	// 	$query = $this->db->get('products');

	// 	if($query)
	// 	{
	// 		return $query->row();
	// 	}
	// 	else
	// 	{
	// 		return false;
	// 	}
	// }

	// public function updateProduct($data,$id)
	// {
	// 	$this->db->where('id',$id);
	// 	$query = $this->db->update('products',$data);

	// 	if($query)
	// 	{
	// 		return true;
	// 	}
	// 	else
	// 	{
	// 		return false;
	// 	}
	// }

	// public function deleteItem($id)
	// {
	// 	$this->db->where('id',$id);
	// 	$query = $this->db->delete('products');

	// 	if($query)
	// 	{
	// 		return true;
	// 	}
	// 	else
	// 	{
	// 		return false;
	// 	}
	// }
}
?>



