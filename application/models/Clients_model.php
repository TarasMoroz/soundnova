<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 *
 *
 * project:		tour-weekend
 * author:		Moroz Taras
 * email:	    tarik_alka@mail.ru
 *
*/
class Clients_model extends CI_Model
{
	public $table = 'clients';		// table name
	public $id_key = 'id';	// id column name

	public function __construct()
	{
		parent::__construct();
	}

	// return an array of defined service, selecting by ID
	public function get($id)
	{
		$this->db->where($this->id_key, $id);
		$query = $this->db->get($this->table);

		return $query->row_array();
	}

	// return array of all in DB
	public function get_all()
	{
		$this->db->order_by($this->id_key, 'DESC');
		$query = $this->db->get($this->table);

		return $query->result();
	}

	//
	public function get_where_track($track)
	{
		$this->db->where('track', $track);
		$query = $this->db->get($this->table);
		return $query->row_array();
	}

	// updating information in affected row, using Array of data and ID
	public function update($obj_id, $data)
	{
		$this->db->where($this->id_key, $obj_id);

		if($this->db->update($this->table, $data))
			return TRUE;
		else return FALSE;
	}

	// inserting new row into DB, and returning new ID or 0 (in false case)
	public function insert($data)
	{
		if($this->db->insert($this->table, $data)){
			$newId = $this->db->insert_id(); // getting id of the last inserted comment

			return $newId;
		}
		else{
			return 0;
		}
	}

	// checking rows similarity by ID
	public function isset_id($obj_id)
	{
		$this->db->from($this->table);
		$this->db->where($this->id_key, $obj_id);

		if($this->db->count_all_results() > 0)
			return TRUE;
		else return FALSE;
	}

	// returning count of all questions
	public function count_all()
	{
		$this->db->from($this->table);

		return $this->db->count_all_results();
	}

	// deleting row
	public function delete($obj)
	{
		$this->db->where($this->id_key, $obj);
		$this->db->delete($this->table);

		return true;
	}

}

/*
	End of file
	Location: ./application/models/Reviews_model.php
*/
