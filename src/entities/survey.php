<?php
class Survey{
	private $userid;
    private $createdby;
    private $dateofaddition;
    private $postlabel;
    private $status;
    private $views;
	private $tid;
	private $surveyoptions;
	/**
	 * @return the $userid
	 */
	public function getUserid() {
		return $this->userid;
	}

	/**
	 * @return the $createdby
	 */
	public function getCreatedby() {
		return $this->createdby;
	}

	/**
	 * @return the $dateofaddition
	 */
	public function getDateofaddition() {
		return $this->dateofaddition;
	}

	/**
	 * @return the $postlabel
	 */
	public function getPostlabel() {
		return $this->postlabel;
	}

	/**
	 * @return the $status
	 */
	public function getStatus() {
		return $this->status;
	}

	/**
	 * @return the $views
	 */
	public function getViews() {
		return $this->views;
	}

	/**
	 * @return the $tid
	 */
	public function getTid() {
		return $this->tid;
	}

	/**
	 * @return the $surveyoptions
	 */
	public function getSurveyoptions() {
		return $this->surveyoptions;
	}

	/**
	 * @param field_type $userid
	 */
	public function setUserid($userid) {
		$this->userid = $userid;
	}

	/**
	 * @param field_type $createdby
	 */
	public function setCreatedby($createdby) {
		$this->createdby = $createdby;
	}

	/**
	 * @param field_type $dateofaddition
	 */
	public function setDateofaddition($dateofaddition) {
		$this->dateofaddition = $dateofaddition;
	}

	/**
	 * @param field_type $postlabel
	 */
	public function setPostlabel($postlabel) {
		$this->postlabel = $postlabel;
	}

	/**
	 * @param field_type $status
	 */
	public function setStatus($status) {
		$this->status = $status;
	}

	/**
	 * @param field_type $views
	 */
	public function setViews($views) {
		$this->views = $views;
	}

	/**
	 * @param field_type $tid
	 */
	public function setTid($tid) {
		$this->tid = $tid;
	}

	/**
	 * @param field_type $surveyoptions
	 */
	public function setSurveyoptions($surveyoptions) {
		$this->surveyoptions = $surveyoptions;
	}

	

	
	
	
}
?>