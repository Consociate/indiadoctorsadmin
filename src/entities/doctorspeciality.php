<?php
class DoctorSpeciality{
	private $userid;
	private $specialityid;
	private $specialitylabel;
	private $tid;
	/**
	 * @return the $userid
	 */
	public function getUserid() {
		return $this->userid;
	}

	/**
	 * @return the $specialityid
	 */
	public function getSpecialityid() {
		return $this->specialityid;
	}

	/**
	 * @return the $specialitylabel
	 */
	public function getSpecialitylabel() {
		return $this->specialitylabel;
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
	 * @param field_type $specialityid
	 */
	public function setSpecialityid($specialityid) {
		$this->specialityid = $specialityid;
	}

	/**
	 * @param field_type $specialitylabel
	 */
	public function setSpecialitylabel($specialitylabel) {
		$this->specialitylabel = $specialitylabel;
	}

	/**
	 * @param field_type $tid
	 */
	public function setTid($tid) {
		$this->tid = $tid;
	}

	
	
}