<?

cdgmu_listblogs() {

	$bcount = get_blog_count();
	
	global $wpdb;
	$blogs = $wpdb->get_results($wpdb->prepare("SELECT * FROM $wpdb->blogs WHERE spam = '0' AND deleted = '0' and archived = '0' and public='1'"));
	if(!empty($blogs)){
	    ?><ul class="menu"><?php
	    foreach($blogs as $blog){
	        $details = get_blog_details($blog->blog_id);
	        if($details != false){
	            $addr = $details->siteurl;
	            $name = $details->blogname;
	            if(!(($blog->blog_id == 1)&&($show_main != 1))){
	                ?>
	                <li class="menu-item<?php if($counter == get_current_blog_id()){ echo ' current-menu-item';}?>">
	                    <a href="<?php echo $addr; ?>"><?php echo $name;?></a>
	                </li>
	                <?php
	            }
	        }
	    }
	    ?></ul><?php
	}

}

add_shortcode('listblogs','cdgmu_listblogs');