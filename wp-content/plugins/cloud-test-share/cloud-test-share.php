<?php
/*
Plugin Name: Cloud Challenge Social Sharing
Description: Generates Social Share Buttons
Author: Janndel Mark Rosario
Author URI: https://janndelrosario.com/
Version: 1.1
License: GPL2
Text Domain: generate-socials
*/

class Cloud_Test_Share{

    public function __construct() {
		add_action( 'wp_enqueue_scripts', array( $this, 'getAllAssets' ) );
		add_shortcode( 'generate_socials', array( $this, 'shortcode' ) );
    }

    public function getAllAssets() {
		wp_enqueue_style( 'generate-socials-style', plugin_dir_url( __FILE__ ) . '/css/style.css' );
    }

    public function shortcode( $atts ) {
		extract(shortcode_atts(array(
            'social' => 'true',
        ), $atts));
		ob_start();
		$this->social_links($social);
		$output_string = ob_get_contents();
		ob_end_clean();
		return $output_string;
    }
    
    public function social_links($social){
      if(is_front_page()){
            $post_ID = 20;
        ?>
        <div class="socialShareFlexWrapper">
            <div>
                <p>Share this Product on:</p>
            </div>
            <div>
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink($post_ID);?>&t=<?php echo get_the_title($post_ID);?>" class="sharingButton" target="_blank"><img src="<?php echo plugin_dir_url( __FILE__ ) . '/icons/facebook-logo.png'; ?>"></a>
                <a class="twitter-share-button"
  href="https://twitter.com/intent/tweet?text=<?php echo get_the_title($post_ID);?>& url=<?php echo get_permalink($post_ID);?>"
  data-size="large">
<img src="<?php echo plugin_dir_url( __FILE__ ) . '/icons/twitter-logo.png'; ?>"></a>
            </div>
        </div>
        <?php
      }
    }

}
new Cloud_Test_Share();

?>