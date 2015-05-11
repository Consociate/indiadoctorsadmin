<?php
class DoctorWorkplace{
	private $userid;
	private $organization;
	private $fromdate;
	private $tilldate;
	private $tid;
	/**
	 * @return the $userid
	 */
	public function getUserid() {
		return $this->userid;
	}

	/**
	 * @return the $organization
	 */
	public function getOrganization() {
		return $this->organization;
	}

	/**
	 * @return the $fromdate
	 */
	public function getFromdate() {
		return $this->fromdate;
	}

	/**
	 * @return the $tilldate
	 */
	public function getTilldate() {
		return $this->tilldate;
	}

	/**
	 * @return the $tid
	 */
	public function getTid() {
		return $this->tid;
	}

	/**
	 * @param field_type $userid
	 */
	public function setUserid($userid) {
		$this->userid = $userid;
	}

	/**
	 * @param field_type $organization
	 */
	public function setOrganization($organization) {
		$this->organization = $organization;
	}

	/**
	 * @param field_type $fromdate
	 */
	public function setFromdate($fromdate) {
		$this->fromdate = $fromdate;
	}

	/**
	 * @param field_type $tilldate
	 */
	public function setTilldate($tilldate) {
		$this->tilldate = $tilldate;
	}

	/**
	 * @param field_type $tid
	 */
	public function setTid($tid) {
		$this->tid = $tid;
	}

	
	
	
}