<?php
/**
 * @package WordPress
 * @subpackage Agrilife
 */
?>

<div id="sidebar">
    <div class="sidebar-box">	    
        <label for="s" class="search"><?php _e('Search:'); ?></label>
        <form id="sitesearch" method="get" action="<?php bloginfo('home'); ?>/">
        <fieldset>
            <input type="text" name="s" id="s" maxlength="256" onfocus="this.value=''; this.onfocus=null;" value="Search" class="search-box" />
<<<<<<< HEAD
            <input type="image" src="<?php echo THEME_TEMPLATEURL;?>/images/searchbutton.gif" value="<?php esc_attr_e('Search'); ?>" alt="Search" name="search" class="search-button"/>
=======
            <input type="image" src="<?php bloginfo('template_directory'); ?>/images/searchbutton.gif" value="<?php esc_attr_e('Search'); ?>" alt="Search" name="search" class="search-button"/>
>>>>>>> 166bb97bc5f5a0bfa6752e6952cc33775b9c6981
        </fieldset>
        </form>
        
        
        
<<<<<<< HEAD
        <?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  
        The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
		
		<div id="sitenav">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('main-right-sidebar') ) : ?>
		
		<?php wp_nav_menu( array( 'container' => '' , 'theme_location' => 'primary' ) ); ?>
        
        <?php endif; //dynamic_sidebar ?>
        </div>
                
=======
        <?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
		<div id="sitenav">
		<?php wp_nav_menu( array( 'container' => '' , 'theme_location' => 'primary' ) ); ?>
        </div>
        
        <!--
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('main-right-sidebar') ) : ?>
        <ul id="sitenav">
			<?php wp_list_pages('title_li=&depth=3&sort_column=menu_order');  ?>
        </ul>
        <?php endif; //dynamic_sidebar ?>
        -->
        
>>>>>>> 166bb97bc5f5a0bfa6752e6952cc33775b9c6981
        <?php 
           GLOBAL $options; 
           if ( $options['feedBurner'] <> "" ) : ?>
        	<a href="<?php echo $options['feedBurner']; ?>" class="rss-sidebar" rel="alternate" type="application/rss+xml"><img src="<?php bloginfo('template_directory'); ?>/images/RSS-16x16.png" alt="Subscribe to Our RSS Feed" /></a>&nbsp;<a href="<?php echo $options['feedBurner']; ?>" rel="alternate" type="application/rss+xml">Subscribe Via RSS</a>
        <?php endif; ?>
        
        <div class="banner"></div>
    </div><!-- #sidebar-box -->
    
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('below-right-sidebar') ) : ?> 
    <?php endif; ?>
</div><!-- #sidebar -->

    
	
    
<!-- #sidebar -->