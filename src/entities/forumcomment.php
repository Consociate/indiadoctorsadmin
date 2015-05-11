<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class ForumComment{
    private $postid;
    private $userid;
    private $commentid;
    private $dateofcomment;
    private $status;
    private $comment;
    private $createdBy;
    
    

    /**
	 * @return the $createdBy
	 */
	public function getCreatedBy() {
		return $this->createdBy;
	}

	/**
	 * @param field_type $createdBy
	 */
	public function setCreatedBy($createdBy) {
		$this->createdBy = $createdBy;
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

    public function getCommentid() {
        return $this->commentid;
    }

    public function setCommentid($commentid) {
        $this->commentid = $commentid;
    }

    public function getDateofcomment() {
        return $this->dateofcomment;
    }

    public function setDateofcomment($dateofcomment) {
        $this->dateofcomment = $dateofcomment;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function getComment() {
        return $this->comment;
    }

    public function setComment($comment) {
        $this->comment = $comment;
    }

    

}
?>
