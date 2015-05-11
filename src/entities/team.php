<?php
class Team{
	private $name;
	private $description;
	private $status;
	private $orderonwebsite;
	private $memberid;
	
	
	/**
	 * @return the $memberid
	 */
	public function getMemberid() {
		return $this->memberid;
	}

	/**
	 * @param field_type $memberid
	 */
	public function setMemberid($memberid) {
		$this->memberid = $memberid;
	}

	/**
	 * @return the $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @return the $description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * @return the $status
	 */
	public function getStatus() {
		return $this->status;
	}

	/**
	 * @return the $orderonwebsite
	 */
	public function getOrderonwebsite() {
		return $this->orderonwebsite;
	}

	/**
	 * @param field_type $name
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * @param field_type $description
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * @param field_type $status
	 */
	public function setStatus($status) {
		$this->status = $status;
	}

	/**
	 * @param field_type $orderonwebsite
	 */
	public function setOrderonwebsite($orderonwebsite) {
		$this->orderonwebsite = $orderonwebsite;
	}

	
	
}