<?php
 
add_action('init', 'industry_toolkit_kc_addons', 99 );
 
function industry_toolkit_kc_addons() {
 
	if (function_exists('kc_add_map')) 
	{ 
	    kc_add_map(
	        array(

	            'industry_section_title' => array(
	                'name' => 'Section Title',
	                'description' => __('Use this addons displaying section title', 'KingComposer'),
	                'icon' => 'sl-paper-plane',
	                'category' => 'Industry',
	                'params' => array(
	                    array(
	                        'name' => 'sub_title',
	                        'label' => 'Sub Title',
	                        'type' => 'text',
	                        'description' => 'Type sub title section',
	                    ),

	                     array(
	                        'name' => 'title',
	                        'label' => 'Title',
	                        'type' => 'text',
	                        'description' => 'Type title section',
	                    ),

	                      array(
	                        'name' => 'description',
	                        'label' => 'Description',
	                        'type' => 'textarea',
	                        'description' => 'Type Description section',
	                    ),
	                   
	                    
	                )
	            ),  // End of elemnt kc_icon 

	        )
	    ); // End add map	   

	    kc_add_map(
	        array(

	            'industry_slider' => array( //Must add your short code
	                'name' => 'Industry Slider',
	                'description' => __('Use this addons displaying slides', 'KingComposer'),
	                'icon' => 'sl-paper-plane',
	                'category' => 'Industry',
	                'params' => array(
	                    array(
	                        'name' => 'count',
	                        'label' => 'Slides Count',
	                        'type' => 'text',
	                        'description' => '',
	                        'value' => 3,
	                    ), 
	                    array(
	                        'name' => 'loop',
	                        'label' => 'Loop',
	                        'type' => 'select',
	                        	'options' => array(  // THIS FIELD REQUIRED THE PARAM OPTIONS
								'true' => 'Yes',
								'false' => 'No',								
							),	                        
	                        'value' => 'true',                    
	                        
	                    ),
	                    array(
	                        'name' => 'dots',
	                        'label' => 'Dots',
	                        'type' => 'select',
	                        	'options' => array(  // THIS FIELD REQUIRED THE PARAM OPTIONS
								'true' => 'Yes',
								'false' => 'No',								
							),	                        
	                        'value' => 'true',                    
	                        
	                    ), 
	                    array(
	                        'name' => 'nav',
	                        'label' => 'Nav',
	                        'type' => 'select',
	                        	'options' => array(  // THIS FIELD REQUIRED THE PARAM OPTIONS
								'true' => 'Yes',
								'false' => 'No',								
							),	                        
	                        'value' => 'true',                    
	                        
	                    ),       
	                    array(
	                        'name' => 'autoplay',
	                        'label' => 'Autoplay',
	                        'type' => 'select',
	                        	'options' => array(  // THIS FIELD REQUIRED THE PARAM OPTIONS
								'true' => 'Yes',
								'false' => 'No',								
							),	                        
	                        'value' => 'true',                    
	                        
	                    ),                    
	                   array(
	                        'name' => 'autoplayTimeout',
	                        'label' => 'autoplay Timeout',
	                        'type' => 'text',
	                        'description' => 'Type slider Time',
	                        'value' => 5000,  
	                        'relation' => array(
						        'parent'    => 'autoplay',
						        'show_when' => 'true'
						        // 'hide_when' => 'yes'
						        // hide_when has the opposite effect
						        // NOTICE: Only use one show_when or hide_when in the same time
						        // 'show_when' => 'yes,ok,right'
						        // 'show_when' => array( 'yes', 'ok', 'right' )
						    ),
	                    ),                    
	                   
	                    
	                )
	            ),  // End of elemnt kc_icon 

	        )
	    ); // End add map	

	    	kc_add_map(
	        array(
	            'industry_service_box' => array(
	                'name' => 'Service Box Title',
	                'description' => __('Use this addons displaying Service Box', 'KingComposer'),
	                'icon' => 'sl-paper-plane',
	                'category' => 'Industry',
	                'params' => array(
	                    array(
	                        'name' => 'icon_type',
	                        'label' => 'Service Icon',
	                        'type' => 'select',
	                        	'options' => array(  // THIS FIELD REQUIRED THE PARAM OPTIONS
								'1' => 'Select Icon',
								'2' => 'Upload Icon',								
							),
	                        'description' => 'Select service box icon',
	                        'value' => 1,
	                    ),
	                     array(
	                        'name' => 'fa_icon',
	                        'label' => 'Fontawesome Icon',
	                        'type' => 'icon_picker',
	                        'description' => 'Select Service box Fontawesome Icon',
	                        'relation' => array(
						        'parent'    => 'icon_type',
						        'show_when' => '1'
						        // 'hide_when' => 'yes'
						        // hide_when has the opposite effect
						        // NOTICE: Only use one show_when or hide_when in the same time
						        // 'show_when' => 'yes,ok,right'
						        // 'show_when' => array( 'yes', 'ok', 'right' )
						    ),
	                    ),
	                     array(
	                        'name' => 'img_icon',
	                        'label' => 'Image Icon',
	                        'type' => 'attach_image',  // USAGE ATTACH_IMAGE TYPE
	                        'description' => 'Select Service box Image Icon',
	                        'relation' => array(
						        'parent'    => 'icon_type',
						        'hide_when' => '1'
						        // 'hide_when' => 'yes'
						        // hide_when has the opposite effect
						        // NOTICE: Only use one show_when or hide_when in the same time
						        // 'show_when' => 'yes,ok,right'
						        // 'show_when' => array( 'yes', 'ok', 'right' )
						    ),
	                    ),
	                     array(
	                        'name' => 'title',
	                        'label' => 'Title',
	                        'type' => 'text',
	                        'description' => 'Type Service box title section',
	                    ),
	                      array(
	                        'name' => 'description',
	                        'label' => 'Description',
	                        'type' => 'textarea',
	                        'description' => 'Type Service box Description section',
	                    ),
	                   
	                    
	                )
	            ),  // End of elemnt kc_icon 
	        )
	    ); // End add map 

//Service Box2
	    kc_add_map(
	        array(
	            'industry_service_box2' => array(
	                'name' => 'Service Box Title 2',
	                'description' => __('Use this addons displaying Service Box 2', 'KingComposer'),
	                'icon' => 'sl-paper-plane',
	                'category' => 'Industry',
	                'params' => array(                    
	                     
	                     array(
	                        'name' => 'img_box2',
	                        'label' => 'Service Image 2',
	                        'type' => 'attach_image',  // USAGE ATTACH_IMAGE TYPE
	                        'description' => 'Select Service box Image 2',
	                        'relation' => array(
						        'parent'    => 'icon_type',
						        'hide_when' => '1'
						        // 'hide_when' => 'yes'
						        // hide_when has the opposite effect
						        // NOTICE: Only use one show_when or hide_when in the same time
						        // 'show_when' => 'yes,ok,right'
						        // 'show_when' => array( 'yes', 'ok', 'right' )
						    ),
	                    ),
	                     array(
	                        'name' => 'title',
	                        'label' => 'Title',
	                        'type' => 'text',
	                        'description' => 'Type Service box title section',
	                    ),
	                      array(
	                        'name' => 'description',
	                        'label' => 'Description',
	                        'type' => 'textarea',
	                        'description' => 'Type Service box Description section',
	                    ),
	                      array(
	                        'name' => 'link',
	                        'label' => 'Link',
	                        'type' => 'link',
	                        'description' => 'Enter Your link',
	                    ),
	                   
	                    
	                )
	            ),  // End of elemnt kc_icon 
	        )
	    ); // End add map   
	  
	
	} // End if

}  
 
?>