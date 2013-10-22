<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

class efgFormId extends Backend
{
	public function createFormId($arrSubmitted, $arrFiles, $intOldRecordId, $arrFormConfig) 
	{
		//ermitteln, welche Tabelle überhaupt abgefragt werden soll
		/*$table = $this->Database->prepare->("SELECT targetTable FROM tl_form WHERE id = ?")
								->limit(1)
								->execute(substr($arrSubmitted['FORM_SUBMIT'],10));
								
		$id = $this->Database->prepare->("SHOW TABLE STATUS LIKE '?'")
								 ->execute($table['targetTable']);*/
		
		$arrSubmitted['formId'] = 988; //$id['Auto_increment'];
		
		return $arrSubmitted;
	}
}