<div class="wrap">
	<?php echo "<h2>".__(accordions_plugin_name.' Help')."</h2>";
	
    $accordions_customer_type = get_option('accordions_customer_type');
    $accordions_version = get_option('accordions_version');
	
	
	?>
    <br />



    <div class="para-settings">
        <ul class="tab-nav"> 
            <li nav="1" class="nav1 active">Help & Upgrade</li>
        </ul> <!-- tab-nav end -->  
        
		<ul class="box">
        
            <li style="display: block;" class="box1 tab-box active">
<div class="option-box">
                    <p class="option-title">Need Help ?</p>
                    <p class="option-info">Feel free to contact with any issue for this plugin, Ask any question via forum <a href="<?php echo accordions_qa_url; ?>"><?php echo accordions_qa_url; ?></a> <strong style="color:#139b50;">(free)</strong><br />
                    
                    
                    

    <?php


    if($accordions_customer_type=="free")
        {
    
            echo 'You are using <strong> '.$accordions_customer_type.' version  '.$accordions_version.'</strong> of <strong>'.accordions_plugin_name.'</strong>, To get more feature you could try our premium version. ';
            
            echo '<br /><a href="'.accordions_pro_url.'">'.accordions_pro_url.'</a>';
            
        }
    else
        {
    
            echo 'Thanks for using <strong> premium version  '.$accordions_version.'</strong> of <strong>'.accordions_plugin_name.'</strong> ';	
            
            
        }
    
     ?>       

           
                    
                    
                    
                    </p>
                    
                    
                    
                </div>
                
                
				<div class="option-box">
                    <p class="option-title">Submit Reviews...</p>
                    <p class="option-info">We are working hard to build some awesome plugins for you and spend thousand hour for plugins. we wish your three(3) minute by submitting five star reviews at wordpress.org. if you have any issue please submit at forum.</p>
                	<img class="accordions-pro-pricing" src="<?php echo accordions_plugin_url."css/five-star.png";?>" /><br />
                    <a target="_blank" href="<?php echo accordions_wp_reviews; ?>">
                		<?php echo accordions_wp_reviews; ?>
               		</a>
                    
                    
                    
                </div>
                
				<div class="option-box">
                    <p class="option-title">Please Share</p>
                    <p class="option-info">If you like this plugin please share with your social share network.</p>
                    <?php
                    
						echo accordions_share_plugin();
					?>
                </div>
                

               

                
                
            </li>        
        
        
    
    </div>

        
</div> <!-- wrap end -->