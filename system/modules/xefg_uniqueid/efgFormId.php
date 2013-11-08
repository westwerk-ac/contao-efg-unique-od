<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

class efgFormId extends Backend
{
	public function createFormId($arrSubmitted, $arrFiles, $intOldRecordId, $arrFormConfig) 
	{
		$isFormId = strpos($arrSubmitted['FORM_SUBMIT'], "auto_form");
		$id = substr($arrSubmitted['FORM_SUBMIT'],($isFormId === false ? 5 : 10));
		
		$this->Database
				->prepare("UPDATE tl_form SET uniqueid = uniqueid + 1 WHERE ".($isFormId === false ? "formID" : "id")." = ?")
				->execute($id);
										
		$f = $this->Database
					->prepare("SELECT uniqueid FROM tl_form WHERE ".($isFormId === false ? "formID" : "id")." = ?")
					->limit(1)
					->execute($id);
		
		$arrSubmitted['uniqueid'] = $arrSubmitted['uniqueid'].str_pad($f->uniqueid,1,'0',STR_PAD_LEFT);			
		
		return $arrSubmitted;
	}
}