<?php

namespace User\Model;

class User {
	protected $_id;
	protected $_name;
	protected $_email;
	protected $_password;
	
	public function exchangeArray($data) {
		if (isset($data['name'])) {
			$this->setName($data['name']);
		}
		if (isset($data['email'])) {
			$this->_email = $data['email'];
		}
		if (isset($data["password"])) {
			$this->setPassword($data["password"]);
		}
	}
	
	public function setId($id) {
		$this->_id = $id;
	}
	
	public function getId() {
		return $this->_id;
	}
	
	public function setName($name) {
		$this->_name = $name;
	}
	
	public function getName() {
		return $this->_name;
	}
	
	public function setEmail($email) {
		$this->_email = $email;
	}
	
	public function getEmail() {
		return $this->_email;
	}
	
	public function setPassword($password) {
		$this->_password = sha1($password);
	}
	
	public function getPassword() {
		return $this->_password;
	}
}