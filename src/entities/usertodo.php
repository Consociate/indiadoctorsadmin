<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class UserToDo{
    private $userid;
    private $tasklabel;
    private $fromdate;
    private $tilldate;
    private $fromtime;
    private $tilltime;
    private $tid;

    public function getUserid() {
        return $this->userid;
    }

    public function setUserid($userid) {
        $this->userid = $userid;
    }

    public function getTasklabel() {
        return $this->tasklabel;
    }

    public function setTasklabel($tasklabel) {
        $this->tasklabel = $tasklabel;
    }

    public function getFromdate() {
        return $this->fromdate;
    }

    public function setFromdate($fromdate) {
        $this->fromdate = $fromdate;
    }

    public function getTilldate() {
        return $this->tilldate;
    }

    public function setTilldate($tilldate) {
        $this->tilldate = $tilldate;
    }

    public function getFromtime() {
        return $this->fromtime;
    }

    public function setFromtime($fromtime) {
        $this->fromtime = $fromtime;
    }

    public function getTilltime() {
        return $this->tilltime;
    }

    public function setTilltime($tilltime) {
        $this->tilltime = $tilltime;
    }

    public function getTid() {
        return $this->tid;
    }

    public function setTid($tid) {
        $this->tid = $tid;
    }

    

}
?>
