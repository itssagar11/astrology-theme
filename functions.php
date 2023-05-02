<?php 

register_nav_menus(
    array('primary-menu'=>'Header Menu')
);
function mytheme_enqueue_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array('jquery'), '1.14.7', true);
    wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery', 'popper'), '4.3.1', true);
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_scripts');


add_theme_support('post-thumbnails');
add_theme_support('custom-header');




function custom_post_type() {
    $args = array(
      'public' => true,
      'label'  => 'Horoscopes',
      'supports' => array( 'editor'),
    );
    register_post_type( 'horoscope', $args );
  }
  add_action( 'init', 'custom_post_type' );

  function add_horoscope_fields() {
    register_meta( 'post', 'horoscope_date', array(
      'type' => 'string',
      'description' => 'Horoscope Date',
      'single' => true,
      'show_in_rest' => true,
    ) );
  
    register_meta( 'post', 'horoscope_description', array(
      'type' => 'string',
      'description' => 'Horoscope Description',
      'single' => true,
      'show_in_rest' => true,
    ) );
  }
  add_action( 'init', 'add_horoscope_fields' );
  
function add_horoscope_meta_box() {

  echo "sddsfsdfdsfs";
    add_meta_box(
      'horoscope_fields',
      'Horoscope Fields',
      'render_horoscope_fields',
      'horoscope',
      'normal',
      'default'
    );
  }
  add_action( 'add_meta_boxes', 'add_horoscope_meta_box' );
  
  function render_horoscope_fields( $post ) {
    wp_nonce_field( 'horoscope_meta_box', 'horoscope_meta_box_nonce' );
  
    $horoscope_date = get_post_meta( $post->ID, 'horoscope_date', true );
    $horoscope_description = get_post_meta( $post->ID, 'horoscope_description', true );
    ?>
    <div class="form-group">
      <label for="horoscope_date">Horoscope Date:</label>
      <input type="date" id="horoscope_date" name="horoscope_date" class="form-control" value="<?php echo esc_attr( $horoscope_date ); ?>" required  />
    </div>
    <div class="form-group">
      <label for="horoscope_description">Horoscope Description:</label>
      <textarea id="horoscope_description" name="horoscope_description" class="form-control"><?php echo esc_html( $horoscope_description ); ?></textarea>
    </div>
    <?php
  }
  function save_horoscope_fields( $post_id ) {
    // Check if nonce is set and verified
    if ( ! isset( $_POST['horoscope_meta_box_nonce'] ) || ! wp_verify_nonce( $_POST['horoscope_meta_box_nonce'], 'horoscope_meta_box' ) ) {
      return;
    }
  
    // Check if user has permissions to edit post
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
      return;
    }
  
    // Check if autosave
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
      return;
    }
  
    // Check if post type is horoscope
    if ( isset( $_POST['post_type'] ) && 'horoscope' != $_POST['post_type'] ) {
      return;
    }
  
    // Get the horoscope date and category
    $horoscope_date = isset( $_POST['horoscope_date'] ) ? sanitize_text_field( $_POST['horoscope_date'] ) : '';
    $horoscope_category = isset( $_POST['post_category'] ) ? (int) $_POST['post_category'] : 0;
  
    // Check if a horoscope post with the same date and category already exists
    $existing_post = get_posts( array(
      'post_type' => 'horoscope',
      'post_status' => 'publish',
      'meta_query' => array(
        array(
          'key' => 'horoscope_date',
          'value' => $horoscope_date,
          'compare' => '=',
        ),
      ),
      'tax_query' => array(
        array(
          'taxonomy' => 'category',
          'field' => 'term_id',
          'terms' => $horoscope_category,
        ),
      ),
      'exclude' => array( $post_id ),
    ) );
  
    // If a post with the same date and category already exists, display an error message and don't save the post
    if ( ! empty( $existing_post ) ) {
      wp_die( __( 'A horoscope post with the same date and category already exists.', 'textdomain' ) );
    }
  
    // Save horoscope date
    if ( isset( $_POST['horoscope_date'] ) ) {
      update_post_meta( $post_id, 'horoscope_date', $horoscope_date );
    } else {
      delete_post_meta( $post_id, 'horoscope_date' );
    }
  
    // Save horoscope description
    if ( isset( $_POST['horoscope_description'] ) ) {
      update_post_meta( $post_id, 'horoscope_description', sanitize_text_field( $_POST['horoscope_description'] ) );
    } else {
      delete_post_meta( $post_id, 'horoscope_description' );
    }
  }
  add_action( 'save_post_horoscope', 'save_horoscope_fields' );
  
?>