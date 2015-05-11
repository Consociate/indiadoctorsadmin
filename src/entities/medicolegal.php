<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class MedicoLegal{
    private $userid;
    private $createdby;
    private $dateofaddition;
    private $post;
    private $status;
    private $specialityid;
    private $specialitylabel;
    private $views;
    private $postlabel;
	private $tid;
	private $pathurl;
	private $docpath;
	
	
	
	
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
	 * @return the $tid
	 */
	public function getTid() {
		return $this->tid;
	}

	/**
	 * @param field_type $tid
	 */
	public function setTid($tid) {
		$this->tid = $tid;
	}

	public function getPostlabel() {
        return $this->postlabel;
    }

    public function setPostlabel($postlabel) {
        $this->postlabel = $postlabel;
    }

    

    public function getUserid() {
        return $this->userid;
    }

    public function setUserid($userid) {
        $this->userid = $userid;
    }

    public function getCreatedby() {
        return $this->createdby;
    }

    public function setCreatedby($createdby) {
        $this->createdby = $createdby;
    }

    public function getDateofaddition() {
        return $this->dateofaddition;
    }

    public function setDateofaddition($dateofaddition) {
        $this->dateofaddition = $dateofaddition;
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

    public function getSpecialityid() {
        return $this->specialityid;
    }

    public function setSpecialityid($specialityid) {
        $this->specialityid = $specialityid;
    }

    public function getSpecialitylabel() {
        return $this->specialitylabel;
    }

    public function setSpecialitylabel($specialitylabel) {
        $this->specialitylabel = $specialitylabel;
    }

    public function getViews() {
        return $this->views;
    }

    public function setViews($views) {
        $this->views = $views;
    }



    public function getDocpath()
    {
        return $this->docpath;
    }

    public function setDocpath($docpath)
    {
        $this->docpath = $docpath;
    }
}
?>
