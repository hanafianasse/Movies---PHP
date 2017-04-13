<?php
	
	/**
	* 	this class is used to store connected user data
	*/
	class User {

		private $name;
		private $login;
		private $password;
		private $roles;

		public function __construct($name,$login,$password,$roles){
			$this->name = $name;
			$this->password = $password;
			$this->login = $login;
			$this->roles = array();
			$this->setRoles($roles);
		}

		public function getName(){
			return $this->name;
		}

		public function getLogin(){
			return $this->login;
		}

		public function getPassword(){
			return $this->password;
		}

		public function getRole(){
			return $this->roles;
		}

		public function setName($name){
			$this->name = $name;
		}

		public function setLogin($login){
			$this->login = $login;
		}

		public function setPassword($password){
			$this->password = $password;
		}

		public function setRoles($roles){
			for($i = 0 ; $i < count($roles) ; $i++){
				array_push($this->roles,$roles[$i]);
			}
		}

		public function addRole($role){
			array_push($this->roles,$role);
		}

	}

?>