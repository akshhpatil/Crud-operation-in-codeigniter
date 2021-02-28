<?php
class exam_model extends CI_Model 
{
	/*Insert*/
	public function insert($name,$email,$password,$phone,$address)
	{

    $query="insert into example values('','$name','$email','$password','$phone','$address')";
	$this->db->query($query);
	}


/*View*/
	function display_records()
	{
		
	$query=$this->db->query("select * from example");
	return $query->result();
	}

//*Delete*/
	function deleterecords($id)
	{
	$this->db->query("delete  from example where id='".$id."'");
	
	}


	//update

   function displayrecordsById($id)
	{
	$query=$this->db->query("select * from example where id='".$id."'");
	return $query->result();
	}
	/*Update*/
	function update_records($name,$email,$password,$phone,$address,$id)
	{
	$query=$this->db->query("update example SET name='$name',email='$email',password='$password',phone='$phone',address='$address' where id='$id'");
	}

}
?>
