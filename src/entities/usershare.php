<?php
include_once 'src/globalvars.php';
class UserShare{
	private $userid;
	private $shareid;
	private $sharelabel;
	private $setting;
	private $settinglabel;
	/**
	 * @return the $userid
	 */
	public function getUserid() {
		return $this->userid;
	}

	/**
	 * @return the $shareid
	 */
	public function getShareid() {
		return $this->shareid;
	}

	/**
	 * @return the $sharelabel
	 */
	public function getSharelabel() {
		return $this->sharelabel;
	}

	/**
	 * @return the $setting
	 */
	public function getSetting() {
		return $this->setting;
	}

	/**
	 * @return the $settinglabel
	 */
	public function getSettinglabel() {
		return $this->settinglabel;
	}

	/**
	 * @param field_type $userid
	 */
	public function setUserid($userid) {
		$this->userid = $userid;
	}

	/**
	 * @param field_type $shareid
	 */
	public function setShareid($shareid) {
		$this->shareid = $shareid;
	}

	/**
	 * @param field_type $sharelabel
	 */
	public function setSharelabel($sharelabel) {
		$this->sharelabel = $sharelabel;
	}

	/**
	 * @param field_type $setting
	 */
	public function setSetting($setting) {
		$this->setting = $setting;
	}

	/**
	 * @param field_type $settinglabel
	 */
	public function setSettinglabel($settinglabel) {
		$this->settinglabel = $settinglabel;
	}

	
	
	
}