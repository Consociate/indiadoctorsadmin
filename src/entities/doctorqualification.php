<?php
class DoctorQualification{
	private $userid;
	private $tid;
	private $qualification;
	private $year;
	/**
	 * @return the $userid
	 */
	public function getUserid() {
		return $this->userid;
	}

	/**
	 * @return the $tid
	 */
	public function getTid() {
		return $this->tid;
	}

	/**
	 * @return the $qualification
	 */
	public function getQualification() {
		return $this->qualification;
	}

	/**
	 * @return the $year
	 */
	public function getYear() {
		return $this->year;
	}

	/**
	 * @param field_type $userid
	 */
	public function setUserid($userid) {
		$this->userid = $userid;
	}

	/**
	 * @param field_type $tid
	 */
	public function setTid($tid) {
		$this->tid = $tid;
	}

	/**
	 * @param field_type $qualification
	 */
	public function setQualification($qualification) {
		$this->qualification = $qualification;
	}

	/**
	 * @param field_type $year
	 */
	public function setYear($year) {
		$this->year = $year;
	}

	
	
}