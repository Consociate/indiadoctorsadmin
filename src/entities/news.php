<?php
class News{
	private $tid;
	private $userid;
	private $post;
	private $postlabel;
	private $views;
	private $dateofaddition;
	private $status;
	private $createdby;
	
	
	
	
	/**
	 * @return the $createdby
	 */
	public function getCreatedby() {
		return $this->createdby;
	}

	/**
	 * @param field_type $createdby
	 */
	public function setCreatedby($createdby) {
		$this->createdby = $createdby;
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
	 * @return the $tid
	 */
	public function getTid() {
		return $this->tid;
	}

	/**
	 * @return the $userid
	 */
	public function getUserid() {
		return $this->userid;
	}

	/**
	 * @return the $post
	 */
	public function getPost() {
		return $this->post;
	}

	/**
	 * @return the $postlabel
	 */
	public function getPostlabel() {
		return $this->postlabel;
	}

	/**
	 * @return the $views
	 */
	public function getViews() {
		return $this->views;
	}

	/**
	 * @return the $dateofaddition
	 */
	public function getDateofaddition() {
		return $this->dateofaddition;
	}

	/**
	 * @param field_type $tid
	 */
	public function setTid($tid) {
		$this->tid = $tid;
	}

	/**
	 * @param field_type $userid
	 */
	public function setUserid($userid) {
		$this->userid = $userid;
	}

	/**
	 * @param field_type $post
	 */
	public function setPost($post) {
		$this->post = $post;
	}

	/**
	 * @param field_type $postlabel
	 */
	public function setPostlabel($postlabel) {
		$this->postlabel = $postlabel;
	}

	/**
	 * @param field_type $views
	 */
	public function setViews($views) {
		$this->views = $views;
	}

	/**
	 * @param field_type $dateofaddition
	 */
	public function setDateofaddition($dateofaddition) {
		$this->dateofaddition = $dateofaddition;
	}

	
	
}
?>