<?php
class Speciality{
	private $specialityid;
	private $specialitylabel;
	private $status;
	
	
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

	
}
?>