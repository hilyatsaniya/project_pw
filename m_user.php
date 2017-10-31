<?php 
/**
* 
*/
class m_user extends CI_Model
{
	
	function __construct()
	{
		 $this->load->database();
	}

	public function login($data) {

        $condition = "username =" . "'" . $data['username'] . "' AND " . "password =" . "'" . $data['password'] . "'";
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where($condition);
        //$this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    // Membaca data dari database
    public function read_user_information($username) {
        $condition = "username =" . "'" . $username . "'";
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where($condition);
        //$this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function new_user($data)
    {
        $this->db->insert('user',$data);
    }
    

}
 ?>