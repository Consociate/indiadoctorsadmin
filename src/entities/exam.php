<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
 class Exam{
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
     private $option1;
     private $option2;
     private $option3;
     private $option4;
     private $correctanswer;
     private $explanation;
     
     
     
     

     /**
	 * @return the $explanation
	 */
	public function getExplanation() {
		return $this->explanation;
	}

	/**
	 * @param field_type $explanation
	 */
	public function setExplanation($explanation) {
		$this->explanation = $explanation;
	}

	/**
	 * @return the $option1
	 */
	public function getOption1() {
		return $this->option1;
	}

	/**
	 * @return the $option2
	 */
	public function getOption2() {
		return $this->option2;
	}

	/**
	 * @return the $option3
	 */
	public function getOption3() {
		return $this->option3;
	}

	/**
	 * @return the $option4
	 */
	public function getOption4() {
		return $this->option4;
	}

	/**
	 * @return the $correctanswer
	 */
	public function getCorrectanswer() {
		return $this->correctanswer;
	}

	/**
	 * @param field_type $option1
	 */
	public function setOption1($option1) {
		$this->option1 = $option1;
	}

	/**
	 * @param field_type $option2
	 */
	public function setOption2($option2) {
		$this->option2 = $option2;
	}

	/**
	 * @param field_type $option3
	 */
	public function setOption3($option3) {
		$this->option3 = $option3;
	}

	/**
	 * @param field_type $option4
	 */
	public function setOption4($option4) {
		$this->option4 = $option4;
	}

	/**
	 * @param field_type $correctanswer
	 */
	public function setCorrectanswer($correctanswer) {
		$this->correctanswer = $correctanswer;
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
