<?php

class SurveyOptions{
	private $surveyid;
	private $optionid;
	private $optionlabel;
	/**
	 * @return the $surveyid
	 */
	public function getSurveyid() {
		return $this->surveyid;
	}

	/**
	 * @return the $optionid
	 */
	public function getOptionid() {
		return $this->optionid;
	}

	/**
	 * @return the $optionlabel
	 */
	public function getOptionlabel() {
		return $this->optionlabel;
	}

	/**
	 * @param field_type $surveyid
	 */
	public function setSurveyid($surveyid) {
		$this->surveyid = $surveyid;
	}

	/**
	 * @param field_type $optionid
	 */
	public function setOptionid($optionid) {
		$this->optionid = $optionid;
	}

	/**
	 * @param field_type $optionlabel
	 */
	public function setOptionlabel($optionlabel) {
		$this->optionlabel = $optionlabel;
	}

	
	
}