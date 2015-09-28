<?php

namespace Impelsys\DemoLib\Auth;

class UserAuthService implements AuthService {
	protected $db;
	protected $user;

	public function __construct($db) {
		$this->db = $db;
		$this->user = new User($db);
	}

	public function login($email, $password) {
		if (!empty($email) && !empty($password)) {
			return 1;
		}

		return false;

		//$user = $this->user->check($email,$password));

		// if ($user) {
		// 	$this->user = $user;

		// 	//set sessions

		// 	return $user->getId();
		// }
		// return false;
	}

	public function getUser() {
		return $this->user;
	}
}
