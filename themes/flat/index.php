<?php

function accordions_themes_flat($post_id)
	{
		
		
		$accordions_themes = get_post_meta( $post_id, 'accordions_themes', true );		
		$accordions_bg_img = get_post_meta( $post_id, 'accordions_bg_img', true );
		$accordions_icons = get_post_meta( $post_id, 'accordions_icons', true );


		
		$accordions_default_bg_color = get_post_meta( $post_id, 'accordions_default_bg_color', true );	
		$accordions_active_bg_color = get_post_meta( $post_id, 'accordions_active_bg_color', true );
		
		$accordions_items_title_color = get_post_meta( $post_id, 'accordions_items_title_color', true );			
		$accordions_items_title_font_size = get_post_meta( $post_id, 'accordions_items_title_font_size', true );		

		$accordions_items_content_color = get_post_meta( $post_id, 'accordions_items_content_color', true );
		$accordions_items_content_font_size = get_post_meta( $post_id, 'accordions_items_content_font_size', true );

		
		$accordions_items_thumb_size = get_post_meta( $post_id, 'accordions_items_thumb_size', true );
		$accordions_items_thumb_max_hieght = get_post_meta( $post_id, 'accordions_items_thumb_max_hieght', true );
		
		$accordions_ribbon_name = get_post_meta( $post_id, 'accordions_ribbon_name', true );		
		
		$accordions_content_title = get_post_meta( $post_id, 'accordions_content_title', true );	
		$accordions_content_body = get_post_meta( $post_id, 'accordions_content_body', true );
		
		
		$accordions_body = '';
		$accordions_body = '<style type="text/css"></style>';
		
		
		
		$accordions_body .= '
		<div id="accordions-'.$post_id.'"  class="accordions-container accordions-'.$accordions_themes.'" style="background-image:url('.$accordions_bg_img.')">';
		
		

		$accordions_body.= '<ul class="responsive-accordion responsive-accordion-default">';
		
		
		
		foreach ($accordions_content_title as $index => $accordions_title)
		{
				$accordions_body.= '<li>';
				$accordions_body.= '<div class="responsive-accordion-head">'.$accordions_title.'<i class="responsive-accordion-icons responsive-accordion-plus '.$accordions_icons.'"></i><i class="responsive-accordion-icons responsive-accordion-minus '.$accordions_icons.'"></i></div>';
				$accordions_body.= '<div style="font-size:'.$accordions_items_content_font_size.';color:'.$accordions_items_content_color.'" class="responsive-accordion-panel">'.$accordions_content_body[$index];

				$accordions_body.= '</div>';	
				$accordions_body.= '</li>';
			}
			
								
		$accordions_body.= '</ul>';

		$accordions_body .= '</div>';
		
		
		$accordions_body .= '<style type="text/css">
		
		#accordions-'.$post_id.' .responsive-accordion-head{
			color:'.$accordions_items_title_color.';
			font-size:'.$accordions_items_title_font_size.';
			background:'.$accordions_default_bg_color.';
			border-bottom: 1px solid'.accordions_paratheme_dark_color($accordions_default_bg_color).';
			}		
		
		#accordions-'.$post_id.' .responsive-accordion-head.active{
			background: '.$accordions_active_bg_color.';

			}
		
		
		</style>';		
		
		
		
		$accordions_body .= "<script type='text/javascript'>
		
		</script>";		

		
		
		return $accordions_body;
		
		    
		
		
		
		
		
		
		
		
		
		
		
		
	}