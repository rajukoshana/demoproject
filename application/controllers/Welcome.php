<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	 function __construct() {
		parent::__construct();
		$this->load->helper(array('table','date'));
		$this->load->database();
		
	}

	public function index()
	{
		//$triggerlist=$this->db->query("select trigger_name from triggers where  TRIGGER_NAME='ins_emp_phone'")->result();
		//print_r($triggerlist);
			$query="CALL fetch_users(1)";
			$result=$this->db->query($query)->result();
			print_r($result);
			exit;
		
		
		$this->db->query("
			CREATE PROCEDURE fetch_users(IN id int) \r\n
			BEGIN
			SELECT * FROM employee WHERE id=id order by id desc;
			END;		
			"
		);
		$employeelist=$this->db->query("select emailaddress from employee")->result();
		if(sizeof($employeelist)==0){
			/*$this->db->query("
			CREATE TRIGGER  ins_emp_phone 
			BEFORE INSERT ON employee \r\n
			FOR EACH ROW \r\n SET 
			new.phonenumber='9177774735'		
			");*/
			
			//Working trigger
			/*$this->db->query("
			CREATE TRIGGER sum_rating 
			AFTER INSERT ON startrating
			FOR EACH ROW
			BEGIN
			UPDATE employee SET rating=rating+new.rating where id=new.employeeid;
			END;
			
			");*/
			//Working stored procedures
			/*$this->db->query(
				"DELIMITER \r\n
				CREATE PROCEDURE fetch_users(IN id int,IN tablename varchar) \r\n
				BEGIN
				SELECT * FROM tablename WHERE id=id order by id desc;
				END //
				DELIMITER ;
				"
			);*/
			
		}
		
	
		$this->load->view('welcome_message');		
	}
}
