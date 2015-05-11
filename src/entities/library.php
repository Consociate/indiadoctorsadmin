<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
 class Library{
     private $postid;
     private $userid;
     private $post;
     private $status;
     private $dateofaddition;
     private $approvedby;
     private $specialityid;
     private $views;
     private $postlabel;
     private $createby;
     private $pathurl;
     
     
     

     /**
	 * @return the $pathurl
	 */
	public function getPathurl() {
		return $this->pathurl;
	}

	/**
	 * @param field_type $pathurl
	 */
	public function setPathurl($pathurl) {
		$this->pathurl = $pathurl;
	}

	/**
	 * @return the $createby
	 */
	public function getCreateby() {
		return $this->createby;
	}

	/**
	 * @param field_type $createby
	 */
	public function setCreateby($createby) {
		$this->createby = $createby;
	}

	public function getPostlabel() {
         return $this->postlabel;
     }

     public function setPostlabel($postlabel) {
         $this->postlabel = $postlabel;
     }

     
     
     public function getPostid() {
         return $this->postid;
     }
     
     public function setPostid($postid) {
         $this->postid = $postid;
     }
     
     public function getUserid() {
         return $this->userid;
     }
     
     public function setUserid($userid) {
         $this->userid = $userid;
     }
     
     public function getPost() {
         return $this->post;
     }
     
     public function setPost($post) {
         $this->post = $post;
     }
     
     public function getStatus() {
         return $this->status;
     }
     
     public function setStatus($status) {
         $this->status = $status;
     }
     
     public function getDateofaddition() {
         return $this->dateofaddition;
     }
     
     public function setDateofaddition($dateofaddition) {
         $this->dateofaddition = $dateofaddition;
     }
     
     public function getApprovedby() {
         return $this->approvedby;
     }
     
     public function setApprovedby($approvedby) {
         $this->approvedby = $approvedby;
     }
     
     public function getSpecialityid() {
         return $this->specialityid;
     }
     
     public function setSpecialityid($specialityid) {
         $this->specialityid = $specialityid;
     }
     
     public function getViews() {
         return $this->views;
     }
     
     public function setViews($views) {
         $this->views = $views;
     }
     
     
 }

?>
