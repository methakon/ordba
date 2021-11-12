<?php 
/*
|--------------------------------------------------------------------------
| MY Custom Modules
|--------------------------------------------------------------------------
|
| Specifies the module controller (key) and the name (value) for fuel
*/


/*********************** EXAMPLE ***********************************

$config['modules']['quotes'] = array(
	'preview_path' => 'about/what-they-say',
);

$config['modules']['projects'] = array(
	'preview_path' => 'showcase/project/{slug}',
	'sanitize_images' => FALSE // to prevent false positives with xss_clean image sanitation
);

*********************** /EXAMPLE ***********************************/



/*********************** OVERWRITES ************************************/

$config['module_overwrites']['categories']['hidden'] = TRUE; // change to FALSE if you want to use the generic categories module
$config['module_overwrites']['tags']['hidden'] = TRUE; // change to FALSE if you want to use the generic tags module
$config['modules']['contact'] = array('model_name' => 'Contacts_model',
    'exportable' => true,
    'rows_selectable'=>FALSE,
    
    'displayonly'=>TRUE,
    'advanced_search'=>TRUE,
    'table_actions'=>array('VIEW'),
    'item_actions'=>array('view')
    );	


/*********************** /OVERWRITES ************************************/
$config['modules']['posts'] = array(
	'preview_path' => '', // put in the preview path on the site e.g products/{slug}
	'model_location' => '', // put in the advanced module name here
     
);
