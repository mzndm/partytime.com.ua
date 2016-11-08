<?php

// exit if accessed directly
if( ! defined( 'ABSPATH' ) ) exit;

//Saving the gallery image ids into the database postmeta table in the same order.
function acf_photo_gallery_save( $post_id ){
	// If this is a revision, get real post ID
	if ( $parent_id = wp_is_post_revision( $post_id ) )
	$post_id = $parent_id;
	// unhook this function so it doesn't loop infinitely
	remove_action( 'save_post', 'acf_photo_gallery_save' );
	$field = isset($_POST['acf-photo-gallery-field'])? $_POST['acf-photo-gallery-field']: null;
	$field_id = isset($_POST['acf-photo-gallery-field-id'])? $_POST['acf-photo-gallery-field-id']: null;
	$ids = !empty($field)? $_POST[$field_id]: null;		
	if( !empty($ids) ){
		$ids = implode(',', $ids);
		update_post_meta( $post_id, $field_id, $ids );
	}
	// re-hook this function
	add_action( 'save_post', 'acf_photo_gallery_save' );
}
add_action( 'save_post', 'acf_photo_gallery_save' );

//Remove photo from the database array
function acf_photo_gallery_remove_photo(){
	if( wp_verify_nonce( $_GET['_wpnonce'], 'nonce_acf_photo_gallery') and !empty($_GET['post']) and !empty($_GET['photo']) and !empty($_GET['field']) ){		
		$field = $_GET['field'];
		$post = $_GET['post'];
		$photo = $_GET['photo'];
		$photo = preg_replace('/\D/', '', $photo);		
		$id = str_replace('acf-field-', '', $_GET['id']);
		$meta = get_post_meta($post, $id, true);
		$meta_arr = explode(',', $meta);
		if( in_array($photo, $meta_arr) ){
			foreach($meta_arr as $key => $value){
				if( $photo == $value ){
					unset($meta_arr[$key]);
					if( count($meta_arr) > 0 ){
						$meta_arr = implode(',', $meta_arr);
						update_post_meta( $post, $id, $meta_arr );
					} else {
						delete_post_meta( $post, $id );
					}
				}
			}
		}
	}
	die();
}
add_action( 'wp_ajax_nopriv_acf_photo_gallery_remove_photo', 'acf_photo_gallery_remove_photo' );
add_action( 'wp_ajax_acf_photo_gallery_remove_photo', 'acf_photo_gallery_remove_photo' );

//Editing and saving photo details
function acf_photo_gallery_edit_save(){
	if( wp_verify_nonce( $_POST['nonce'], 'acf_photo_gallery_edit_save') and !empty($_POST['field']) and !empty($_POST['post'])  and !empty($_POST['attachment']) ){		
		
		file_put_contents(dirname(__FILE__) . '/filename.php', var_export($_POST, true));
		
		$field = sanitize_text_field($_POST['field']);
		$post = sanitize_text_field($_POST['post']);
		$attachment = sanitize_text_field($_POST['attachment']);
		$url = sanitize_text_field($_POST['url']);
		$target = sanitize_text_field($_POST['target']);
		$title = sanitize_text_field($_POST['title']);
		$caption = sanitize_text_field($_POST['caption']);

		$post = array('ID' => $attachment, 'post_title' => $title, 'post_content' => $caption);
		wp_update_post( $post );
		if( !empty($url) ){ update_post_meta( $attachment, $field . '_url', $url); } else { delete_post_meta( $attachment, $field . '_url'); }
		if( !empty($target) ){ update_post_meta( $attachment, $field . '_target', $target); } else { delete_post_meta( $attachment, $field . '_url'); }
	}
	die();
}
add_action( 'wp_ajax_nopriv_acf_photo_gallery_edit_save', 'acf_photo_gallery_edit_save' );
add_action( 'wp_ajax_acf_photo_gallery_edit_save', 'acf_photo_gallery_edit_save' );

//Metabox for the photo edit
function acf_photo_gallery_edit($field, $nonce, $attachment, $url = '', $title, $caption, $target = 0){ ?>
	<div id="acf-photo-gallery-metabox-edit-<?php echo $attachment; ?>" class="acf-edit-photo-gallery">
    <h3>Edit Image</h3>
    <input type="hidden" name="acf-field" value="<?php echo $field; ?>"/>
    <input type="hidden" name="acf-edit-save-nonce" value="<?php echo $nonce; ?>"/>
    <label>URL</label><input type="text" name="url" value="<?php echo $url; ?>"/>
    <label><input type="checkbox" name="target" value="1" <?php if( $target == 'true' ){?> checked<?php } ?>/>Open in new tab</label>
    <label>Title</label><input type="text" name="title" value="<?php echo $title; ?>"/>
    <label>Caption</label><textarea name="caption"><?php echo $caption; ?></textarea>
    <button class="button button-primary button-large" type="submit" data-id="<?php echo $attachment; ?>">Save Changes</button>
    <button class="button button-large button-close" type="button" data-close="<?php echo $attachment; ?>">Close</button>
	</div>
<?php }

// check if class already exists
if( !class_exists('acf_field_photo_gallery') ) :

class acf_field_photo_gallery extends acf_field {
	
	// vars
	var $settings, // will hold info such as dir / path
		$defaults; // will hold default field options
		
		
	/*
	*  __construct
	*
	*  Set name / label needed for actions / filters
	*
	*  @since	3.6
	*  @date	23/01/13
	*/
	
	function __construct( $settings )
	{
		// vars
		$this->name = 'photo_gallery';
		$this->label = __('Photo Gallery');
		$this->category = __("Content",'acf'); // Basic, Content, Choice, etc
		$this->defaults = array(
			// add default here to merge into your field. 
			// This makes life easy when creating the field options as you don't need to use any if( isset('') ) logic. eg:
			//'preview_size' => 'thumbnail'
		);
		
		
		// do not delete!
    	parent::__construct();
    	
    	
    	// settings
		$this->settings = $settings;

	}
	
	
	/*
	*  create_field()
	*
	*  Create the HTML interface for your field
	*
	*  @param	$field - an array holding all the field's data
	*
	*  @type	action
	*  @since	3.6
	*  @date	23/01/13
	*/
	
	function create_field( $field )
	{
		// create Field HTML
		global $post;
		$nonce_acf_photo_gallery = wp_create_nonce( 'nonce_acf_photo_gallery' );
		$_name = get_post_meta($post->ID, str_replace('acf-field-', '', $field['id']), true );
	?>
		<div id="acf-photo-gallery-metabox">
    		<input type="hidden" name="acf-photo-gallery-field" value="<?php echo $field['key']; ?>"/>
    		<input type="hidden" name="acf-photo-gallery-field-id" value="<?php echo str_replace('acf-field-', '', $field['id']); ?>"/>
        <div id="acf-photo-gallery-metabox-edit">
        	<?php 
						if( $_name ):
							$acf_photo_gallery_attachments =  $_name;
							$acf_photo_gallery_attachments = explode(',', $acf_photo_gallery_attachments);
							$args = array( 'post_type' => 'attachment', 'posts_per_page' => -1, 'post__in' => $acf_photo_gallery_attachments ); 
							$acf_photo_gallery_attachments = get_posts( $args );
							$nonce = wp_create_nonce('acf_photo_gallery_edit_save');
							foreach($acf_photo_gallery_attachments as $attachment):
								$id = $attachment->ID;
								$url = get_post_meta($id, $field['_name'] . '_url', true);
								$target = get_post_meta($id, $field['_name'] . '_target', true);
								$title = $attachment->post_title;
								$caption = $attachment->post_content;
								acf_photo_gallery_edit($field['_name'], $nonce, $id, $url, $title, $caption, $target);	
							endforeach;
						endif;				
					?>
        </div>
      	<ul id="acf-photo-gallery-metabox-list">
        	<?php
						if( $_name ):
							$acf_photo_gallery_attachments =  $_name;
							$acf_photo_gallery_attachments = explode(',', $acf_photo_gallery_attachments);
							foreach($acf_photo_gallery_attachments as $image):
					?>
        	<li id="acf-photo-gallery-mediabox-<?php echo $image; ?>">
          	<a class="dashicons dashicons-edit" href="#" title="Edit" data-id="<?php echo $image; ?>"></a>
          	<a class="dashicons dashicons-dismiss" href="<?php echo admin_url('admin-ajax.php'); ?>?action=acf_photo_gallery_remove_photo&_wpnonce=<?php echo $nonce_acf_photo_gallery; ?>&post=<?php echo $post->ID; ?>&photo=<?php echo $image; ?>&field=<?php echo $field['key']; ?>&id=<?php echo $field['id']; ?>" data-id="<?php echo $image; ?>" title="Remove this photo from the gallery"></a>
          	<input type="hidden" name="<?php echo $field['_name']; ?>[]" value="<?php echo $image; ?>"/>
            <img src="<?php echo wp_get_attachment_thumb_url( $image ); ?>"/>
           </li>
           <?php endforeach; else: ?>
					 <li class="acf-photo-gallery-media-box-placeholder"><span class="dashicons dashicons-format-image"></span></li>
					 <?php endif; ?>
        </ul>
        <button class="button button-primary button-large" id="acf-photo-gallery-metabox-add-images" type="button" data-id="<?php echo $field['_name']; ?>">Add Images</button>
      </p>
		</div>
		<?php
	}
	
	
	/*
	*  input_admin_enqueue_scripts()
	*
	*  This action is called in the admin_enqueue_scripts action on the edit screen where your field is created.
	*  Use this action to add CSS + JavaScript to assist your create_field() action.
	*
	*  $info	http://codex.wordpress.org/Plugin_API/Action_Reference/admin_enqueue_scripts
	*  @type	action
	*  @since	3.6
	*  @date	23/01/13
	*/

	function input_admin_enqueue_scripts()
	{
		// Note: This function can be removed if not used
		
		
		// vars
		$url = $this->settings['url'];
		$version = $this->settings['version'];
		
		
		// register & include JS
		wp_register_script( 'acf-input-photo_gallery', "{$url}assets/js/input.js", array('acf-input'), $version );
		wp_enqueue_script('acf-input-photo_gallery');
		
		
		// register & include CSS
		wp_register_style( 'acf-input-photo_gallery', "{$url}assets/css/input.css", array('acf-input'), $version );
		wp_enqueue_style('acf-input-photo_gallery');
		
	}

}


// initialize
new acf_field_photo_gallery( $this->settings );


// class_exists check
endif;

?>