<?php 
/*
|--------------------------------------------------------------------------
| MY Custom Layouts
|--------------------------------------------------------------------------
|
| specify the name of the layouts and their fields associated with them
*/

$config['default_layout'] = 'main';

$config['layouts_folder'] = '_layouts';

$config['hidden'] = array();

$config['layouts']['main'] = array(
	//'file' 		=> $config['layouts_path'].'main',
	// 'class'		=> 'Main_layout',
	// 'filepath' => 'libraries',
	// 'filename' => 'Main_layout.php',
	
	
	'fields'	=> array(
		'Header' => array('type' => 'fieldset', 'label' => 'Header', 'class' => 'tab'),
		'page_title' => array('label' => lang('layout_field_page_title')),
		'meta_description' => array('label' => lang('layout_field_meta_description')),
		'meta_keywords' => array('label' => lang('layout_field_meta_keywords')),
		'Body' => array('type' => 'fieldset', 'label' => 'Body', 'class' => 'tab'),
		'heading' => array('label' => lang('layout_field_heading')),
		'body' => array('label' => lang('layout_field_body'), 'type' => 'textarea', 'description' => lang('layout_field_body_description')),
		'body_class' => array('label' => lang('layout_field_body_class')),
		'template' => array('type' => 'template', 'repeatable' => TRUE, 'fields' => array('subtemplate' => array('type' => 'template', 'fields' => array('test1'=> array('type' => 'keyval')))))
	)
);

$config['layouts']['home'] = array(
    'fields' => array(
        'Header' => array('type' => 'fieldset', 'label' => 'Header', 'class' => 'tab'),
        'page_title' => array('label' => lang('layout_field_page_title')),
        'meta_description' => array('label' => lang('layout_field_meta_description')),
        'meta_keywords' => array('label' => lang('layout_field_meta_keywords')),
        'Body' => array('type' => 'fieldset', 'label' => 'Body', 'class' => 'tab'),
        'heading' => array('label' => lang('layout_field_heading')),
        'body' => array('label' => lang('layout_field_body'), 'type' => 'textarea', 'description' => lang('layout_field_body_description')),
        'Brands' => array('type' => 'fieldset', 'label' => 'Brands', 'class' => 'tab'), 
	'brand_list'=>array('display_label' => false,
			'add_extra' => FALSE,
			'init_display' => 'block', 									
			'repeatable' => TRUE,
			'type' => 'template',
			'label' => 'Brands',
			'title_field' => 'brands',
			'fields' => array(
			'brand' => array('label' => lang('brand'),'required' => TRUE),
			'brand_image' => array('label' => lang('brand_image'),
			'required' => TRUE,
			'is_image' => TRUE,
			'multiple' => FALSE,
			'accept' => '.jpg|.png',
                        'readonly' => TRUE,
			'display_preview' => TRUE,
			'encrypt_name' => TRUE,
			'hide_options' => TRUE,
			'subfolder' => 'brand',
			),
			)), 
        'Services' => array('type' => 'fieldset', 'label' => 'Services', 'class' => 'tab'), 
        'service_list'=>array('display_label' => false,
			'add_extra' => FALSE,
			'init_display' => 'block', 									
			'repeatable' => TRUE,
			'type' => 'template',
			'label' => 'Brands',
			'title_field' => 'brands',
			'fields' => array(
			'name' => array('label' => lang('name'),'required' => TRUE),
                        'intro' => array('label' => lang('intro_text'),'required' => TRUE,'type' => 'textarea'),    
			'image' => array('label' => lang('image'),
			'required' => TRUE,
			'is_image' => TRUE,
			'multiple' => FALSE,
			'accept' => '.jpg|.png',
                        'readonly' => TRUE,
			'display_preview' => TRUE,
			'encrypt_name' => TRUE,
			'hide_options' => TRUE,
			'subfolder' => 'service',
			),
			)), 
        //'buy_now' => array('label' => 'Buy Now', 'type' => 'link'),
        'body_class' => array('label' => lang('layout_field_body_class')),
    )
);
$config['layouts']['innerpages'] = array(
    'fields' => array(
        'Header' => array('type' => 'fieldset', 'label' => 'Header', 'class' => 'tab'),
        'page_title' => array('label' => lang('layout_field_page_title')),
        'meta_description' => array('label' => lang('layout_field_meta_description')),
        'meta_keywords' => array('label' => lang('layout_field_meta_keywords')),
        'Body' => array('type' => 'fieldset', 'label' => 'Body', 'class' => 'tab'),
        'heading' => array('label' => lang('layout_field_heading')),
        'body' => array('label' => lang('layout_field_body'), 'type' => 'textarea', 'description' => lang('layout_field_body_description')),
        'caption' => array('label' => 'Caption', 'type' => 'textarea', 'description' => 'caption for banner'),
        'body_class' => array('label' => lang('layout_field_body_class')),
    )
);
$config['layouts']['listingpages'] = array(
    'fields' => array(
        'Header' => array('type' => 'fieldset', 'label' => 'Header', 'class' => 'tab'),
        'page_title' => array('label' => lang('layout_field_page_title')),
        'meta_description' => array('label' => lang('layout_field_meta_description')),
        'item_per_page' => array('type' => 'number','label' => lang('Item Per Page'),'required' => TRUE),
        'meta_keywords' => array('label' => lang('layout_field_meta_keywords')),
        'Body' => array('type' => 'fieldset', 'label' => 'Body', 'class' => 'tab'),
        'heading' => array('label' => lang('layout_field_heading')),
        
        'content'=>array('display_label' => True,
			'add_extra' => FALSE,
			'init_display' => 'block', 									
			'repeatable' => TRUE,
			'type' => 'template',
			'label' => 'Topics',
			'title_field' => 'topics',
			'fields' => array(
			'title' => array('label' => lang('title'),'required' => TRUE),
			'intro_image' => array('label' => lang('intro_image'),
			'required' => TRUE,
			'is_image' => TRUE,
			'multiple' => FALSE,
			'accept' => '.jpg|.png',
                        'readonly' => TRUE,
			'display_preview' => TRUE,
			'encrypt_name' => TRUE,
			'hide_options' => TRUE,
			'subfolder' => 'topic_image',
			),
			'intro' => array('label' => lang('intro_text'),'required' => TRUE,'type' => 'textarea'),
			'target_page' => array('label' => lang('page_link'),
                            'required' => TRUE,
                            'type' => 'select2', 
                            'options' => get_page_listselect(),
                            ),
			)),
         
        //'buy_now' => array('label' => 'Buy Now', 'type' => 'link'),
        
    )
);

$config['layouts']['contactus'] = array(
    'fields' => array(
        'Header' => array('type' => 'fieldset', 'label' => 'Header', 'class' => 'tab'),
        'page_title' => array('label' => lang('layout_field_page_title')),
        'meta_description' => array('label' => lang('layout_field_meta_description')),
        'meta_keywords' => array('label' => lang('layout_field_meta_keywords')),
        'Body' => array('type' => 'fieldset', 'label' => 'Body', 'class' => 'tab'),
        'heading' => array('label' => lang('layout_field_heading')),
        'body' => array('label' => lang('layout_field_body'), 'type' => 'textarea', 'description' => lang('layout_field_body_description')),
        'caption' => array('label' => 'Caption', 'type' => 'textarea', 'description' => 'caption for banner'),
        'body_class' => array('label' => lang('layout_field_body_class')),
    )
);

/* End of file MY_fuel_layouts.php */
/* Location: ./application/config/MY_fuel_layouts.php */