<?php defined('BASEPATH') OR exit('No direct script access allowed');
	
	
require_once(APPPATH . 'third_party/smarty/libs/Smarty.class.php');


	
class Mysmarty extends Smarty {
	
function __construct() {
	
    parent::__construct();
	
	//global $RTR;
	//$dirmod = $this->_module = $RTR->fetch_module();
	
	$routeval =& load_class('Router', 'core');
	//echo $RTR->fetch_module();
	$templete1 =  APPPATH.'/modules/'.$routeval->fetch_module().'/views';
	// $templete2=  APPPATH.'/modules/'.ADMINURL.'/'.$routeval->fetch_module().'/views';
	
	
	$this->setTemplateDir(array($templete1));
	//$this->setTemplateDirAdmin(APPPATH.'/modules/nsaccess/'.$routeval->fetch_module().'/views');
    // Define directories, used by Smarty:
   	//$this->setTemplateDir(APPPATH . '/views');
    $this->setCompileDir(APPPATH . '/cache/smarty_templates_cache');
    $this->setCacheDir(APPPATH . '/cache/smarty_cache');
// Enable Smarty debugging
// $this->debugging = true;

}


}

?>