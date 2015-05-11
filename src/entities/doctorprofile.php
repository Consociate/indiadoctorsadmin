<?php

	class DoctorProfile{
		private $userid;
		private $name;
		private $email;
		private $mobileno;
		private $address;
		private $gender;
		private $profileimageurlpath;
		private $recievenewsletter;
		private $mci;
		
		
		/**
	 * @return the $mci
	 */
	public function getMci() {
		return $this->mci;
	}

		/**
	 * @param field_type $mci
	 */
	public function setMci($mci) {
		$this->mci = $mci;
	}

	/**
	 * @return the $userid
	 */
	public function getUserid() {
		return $this->userid;
	}

		/**
	 * @return the $name
	 */
	public function getName() {
		return $this->name;
	}

		/**
	 * @return the $email
	 */
	public function getEmail() {
		return $this->email;
	}

		/**
	 * @return the $mobileno
	 */
	public function getMobileno() {
		return $this->mobileno;
	}

		/**
	 * @return the $address
	 */
	public function getAddress() {
		return $this->address;
	}

		/**
	 * @return the $gender
	 */
	public function getGender() {
		return $this->gender;
	}

		/**
	 * @return the $profileimageurlpath
	 */
	public function getProfileimageurlpath() {
		return $this->profileimageurlpath;
	}

		/**
	 * @return the $recievenewsletter
	 */
	public function getRecievenewsletter() {
		return $this->recievenewsletter;
	}

		/**
	 * @param field_type $userid
	 */
	public function setUserid($userid) {
		$this->userid = $userid;
	}

		/**
	 * @param field_type $name
	 */
	public function setName($name) {
		$this->name = $name;
	}

		/**
	 * @param field_type $email
	 */
	public function setEmail($email) {
		$this->email = $email;
	}

		/**
	 * @param field_type $mobileno
	 */
	public function setMobileno($mobileno) {
		$this->mobileno = $mobileno;
	}

		/**
	 * @param field_type $address
	 */
	public function setAddress($address) {
		$this->address = $address;
	}

		/**
	 * @param field_type $gender
	 */
	public function setGender($gender) {
		$this->gender = $gender;
	}

		/**
	 * @param field_type $profileimageurlpath
	 */
	public function setProfileimageurlpath($profileimageurlpath) {
		$this->profileimageurlpath = $profileimageurlpath;
	}

		/**
	 * @param field_type $recievenewsletter
	 */
	public function setRecievenewsletter($recievenewsletter) {
		$this->recievenewsletter = $recievenewsletter;
	}

		
		
	}
?>