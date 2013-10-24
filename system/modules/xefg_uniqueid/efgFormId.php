<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

class efgFormId extends Backend
{
	public function createFormId($arrSubmitted, $arrFiles, $intOldRecordId, $arrFormConfig) 
	{
		$id = substr($arrSubmitted['FORM_SUBMIT'],10);
		
		$this->Database
				->prepare("UPDATE tl_form SET uniqueid = uniqueid + 1 WHERE id = ?")
				->execute($id);
		
		$f = $this->Database
					->prepare("SELECT uniqueid FROM tl_form WHERE id = ?")
					->limit(1)
					->execute($id);
		
		$arrSubmitted['formId'] = $arrSubmitted['formId'].str_pad($f->uniqueid,5,'0',STR_PAD_LEFT);
		
		return $arrSubmitted;
	}
}