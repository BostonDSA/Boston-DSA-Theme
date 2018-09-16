<?php
function my_theme_enqueue_styles() {

    $parent_style = 'understrap-styles'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/css/theme.min.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/stylesheets/screen.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

add_filter( 'wp_mail_content_type', 'set_html_content_type' );


 require_once(get_stylesheet_directory() . '/class-wp-bootstrap-navwalker.php');

register_nav_menus( array(
  'primary' => __( 'Primary Menu', 'UNDERSTRAP' ),
) );

/**
 * Set the HTML content type
 */
function set_html_content_type()
{
    return 'text/html';
}

add_action('user_register', 'handle_user_register', 10, 1);
function handle_user_register($user_id) {
  /*
  * When a new user registers, write all POST values to user_meta.
  * This way, they're accessible on when the new-user email is sent through wp_mail.
  * Otherwise values like first & last name aren't accessible in the email
  */
  foreach ($_POST as $key => $val) {
    update_user_meta($user_id, $key, $_POST[$key]);
  }
}

add_filter('wp_mail', 'handle_wp_mail');
function handle_wp_mail($args) {
  if ($args['subject'] == '[Boston Democratic Socialists of America] Your username and password info') {
    $wpdb = $GLOBALS['wpdb'];
    $email = $args['to'];
    $user = get_user_by('email', $email);


    
    //Generate a new user_activation_key (eg password reset key)
    //This allows us to create a link that a new user can click to set their initial password
    $key = wp_generate_password(20, false);
    require_once(ABSPATH . WPINC . '/class-phpass.php');
    $hasher = new PasswordHash(8, true);
    $hashed = time() . ':' . $hasher->HashPassword($key);
    $wpdb->update($wpdb->users, ['user_activation_key' => $hashed], ['user_login' => $user->user_login]);

    $regUrl = network_site_url("wp-login.php?action=rp&key=$key&login=" . rawurlencode($user->user_login), 'login');

    $newSubject = <<<EOT
Welcome to Boston Democratic Socialists of America!
EOT;
    
    $newMessage = <<<EOT
<h2>Welcome to Boston Democratic Socialists of America!</h2>
<p>Dear {$userMeta['first_name'][0]},</p>
<p>Welcome to the Boston chapter of the Democratic Socialists of America! As a member, you are provided with an account for accessing member’s only information on our website, <a href="https://www.bostondsa.org">bostondsa.org.</a></p>

<p>Once logged in, check out the <a href="https://www.bostondsa.org/members-page">membership documents page</a>.</p>

<p><a href="$regUrl">Click here to set your password.</a></p>
EOT;

    $newMail = [
      'to' => $args['to'],
      'subject' => $newSubject,
      'headers' => $args['headers'],
      'attachments' => $args['attachments'],
      'message' => $newMessage,
    ];
    
    return $newMail;
  }
}

?>
