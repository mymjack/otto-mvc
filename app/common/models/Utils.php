<?php

class Utils extends CI_Model {

	public $adminName = 'admin';

    public function __construct()
    {
            parent::__construct();
            // Your own constructor code
    }


	// Takes a list of variables. Return true iff any is not set/empty
	public function hasEmpty($lst) 
	{
		foreach ($lst as $elm) {
			if (!isset($elm) || empty($elm))
				return true;
		}
		return false;
	}


	// Check if user has logged in
	public function loginCheck() {
		if (isset($_SESSION['login_user'])) {
			$un = $_SESSION['login_user'];
			$row = $this->db->query($db,"SELECT username FROM admin WHERE username = '$un' ");
			if ($row && mysqli_num_rows($row) == 1) {
				return true;
			}
		}
		return false;
	}

	// Redirect user to login if they haven't.
	public function loginRequired($errorMsg, $urlAfterLogin) {
		if (!loginCheck()) {
			$_SESSION['redirectError'] = isset($errorMsg) ? $errorMsg : "请先登录再访问此网页";
			$_SESSION['urlAfterLogin'] = $urlAfterLogin;
			header("location:login.php");
		}
	}

	public function getAirport($code) {
		switch ($code) {
	    case 'YYZ':
	        $result = "YYZ - Toronto Pearson Airport";
	        break;
			case 'YTZ':
					$result = "YTZ - Billy Bishop Airport";
					break;
			case 'SHA':
					$result = "SHA - Shanghai Pudong Airport";
					break;
			case 'PEK':
					$result = "PEK - Beijing Capital Airport";
					break;
		}
		return $result;
	}

}