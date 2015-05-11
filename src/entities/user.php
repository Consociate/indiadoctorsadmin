<?php
class User{
	private $username;
	private $userid;
	private $accounttype;
	private $status;
	private $name;
	
	
	
	/**
	 * @return the $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @param field_type $name
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * @return the $status
	 */
	public function getStatus() {
		return $this->status;
	}

	/**
	 * @param field_type $status
	 */
	public function setStatus($status) {
		$this->status = $status;
	}

	/**
	 * @return the $username
	 */
	public function getUsername() {
		return $this->username;
	}

	/**
	 * @return the $userid
	 */
	public function getUserid() {
		return $this->userid;
	}

	/**
	 * @return the $accounttype
	 */
	public function getAccounttype() {
		return $this->accounttype;
	}

	/**
	 * @param field_type $username
	 */
	public function setUsername($username) {
		$this->username = $username;
	}

	/**
	 * @param field_type $userid
	 */
	public function setUserid($userid) {
		$this->userid = $userid;
	}

	/**
	 * @param field_type $accounttype
	 */
	public function setAccounttype($accounttype) {
		$this->accounttype = $accounttype;
	}

	
	
}