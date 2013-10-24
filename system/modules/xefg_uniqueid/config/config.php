<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

$GLOBALS['TL_HOOKS']['processEfgFormData']['myCallback'] = array('efgFormId', 'createFormId');