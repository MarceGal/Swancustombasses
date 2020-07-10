<?php 

function scb_enqueue_styles() {
	
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css', array('font-awesome'));

    if ( is_rtl() ) 
   		wp_enqueue_style(  'salient-rtl',  get_template_directory_uri(). '/rtl.css', array(), '1', 'screen' );
}

function scb_add_googleAdsenseScript() {
    echo '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>';
	echo '<script>  (adsbygoogle = window.adsbygoogle || []).push({		google_ad_client: "ca-pub-8298323151003936",		enable_page_level_ads: true	  });	</script>' ;
}


function scb_add_cliengoScript() {
    echo "<script>(function(){var ldk=document.createElement('script'); ldk.type='text/javascript'; ldk.async=true; ldk.src='https://s.cliengo.com/weboptimizer/5aba214de4b02f576d7560a4/5aba214fe4b02f576d7560a7.js' ; var s=document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ldk, s);})();</script>";
}

function scb_add_fonts(){ 

?>

<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">

<?php }

function scb_add_favicon(){ 

?>
    <!-- Custom Favicons -->	
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo get_stylesheet_directory_uri();?>/favicons/apple-icon-57x57.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri();?>/favicons/apple-icon-114x114.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri();?>/favicons/apple-icon-72x72.png" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri();?>/favicons/apple-icon-144x144.png" />
	<link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php echo get_stylesheet_directory_uri();?>/favicons/apple-icon-60x60.png" />
	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo get_stylesheet_directory_uri();?>/favicons/apple-icon-120x120.png" />
	<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo get_stylesheet_directory_uri();?>/favicons/apple-icon-76x76.png" />
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo get_stylesheet_directory_uri();?>/favicons/apple-icon-152x152.png" />
	
	<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri();?>/favicons/favicon-196x196.png" sizes="196x196" />
	<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri();?>/favicons/favicon-96x96.png" sizes="96x96" />
	<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri();?>/favicons/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri();?>/favicons/favicon-16x16.png" sizes="16x16" />
	<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri();?>/favicons/favicon-128.png" sizes="128x128" />
	
	<meta name="msapplication-square70x70logo" content="<?php echo get_stylesheet_directory_uri();?>/favicons/mstile-70x70.png" />
	<meta name="msapplication-square150x150logo" content="<?php echo get_stylesheet_directory_uri();?>/favicons/mstile-150x150.png" />
	<meta name="msapplication-wide310x150logo" content="<?php echo get_stylesheet_directory_uri();?>/favicons/mstile-310x150.png" />
	<meta name="msapplication-square310x310logo" content="<?php echo get_stylesheet_directory_uri();?>/favicons/mstile-310x310.png" />
	
	<link rel="manifest" href="<?php echo get_stylesheet_directory_uri();?>/favicons/manifest.json">
	
	<meta name="application-name" content="SCB"/>
	<meta name="msapplication-TileColor" content="#00b894">
	<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri();?>/favicons/ms-icon-144x144.png">
	<meta name="theme-color" content="#00b894">



<?php }

function scb_add_googleTagManagerScript(){
	
?>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WQJQ86V');</script>
<!-- End Google Tag Manager -->

<?php

}

function scb_add_googleAnalyticsScript(){

?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-148509814-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-148509814-1');
</script>

<?php

}

function scb_add_googleTagManagerFooter(){

?>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WQJQ86V"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php

}

function scb_add_facebookPixelScript(){

?>

<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '242080206560811');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=242080206560811&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<?php

}

//*****************************************************
//**ALLOW MOBILE ZOOMING  *****************************
//*****************************************************

/**
 *
 * @package   Definitely_allow_mobile_zooming
 * @author    Martin Stehle <shop@stehle-internet.de>
 * @license   GPL-2.0+
 * @link      http://stehle-internet.de/
 * @copyright 2014 Martin Stehle
 *
 * @wordpress-plugin
 * Plugin Name:       Definitely allow mobile zooming
 * Plugin URI:        http://wordpress.org/plugins/definitely-allow-mobile-zooming/
 * Description:       This tiny plugin adds the viewport meta tag with zooming permission to give your users the ability to zoom in your website with mobile browsers.
 * Version:           1.3
 * Author:            Martin Stehle
 * Author URI:        http://stehle-internet.de/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
*/

function definitely_allow_mobile_zooming() {
	print '<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, minimum-scale=0.1, maximum-scale=10.0">';
	print "\n";
}
add_action( 'wp_head', 'definitely_allow_mobile_zooming', 9999999 );


//*****************************************************
//**SVG UPLOAD SUPPORT ********************************
//*****************************************************

function cc_mime_types($mimes) {
 $mimes['svg'] = 'image/svg+xml';
 return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
 
//*****************************************************
//**USER AGENT DETECTION UTILITIES *********************
//*****************************************************


function getBrowser() 
{ 
    $u_agent = $_SERVER['HTTP_USER_AGENT']; 
    $bname = 'Unknown';
    $platform = 'Unknown';
    $version= "";

    //First get the platform?
    if (preg_match('/linux/i', $u_agent)) {
        $platform = 'linux';
    }
    elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
        $platform = 'mac';
    }
    elseif (preg_match('/windows|win32/i', $u_agent)) {
        $platform = 'windows';
    }
    
    // Next get the name of the useragent yes seperately and for good reason
    if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent)) 
    { 
        $bname = 'Internet Explorer'; 
        $ub = "MSIE"; 
    } 
    elseif(preg_match('/Firefox/i',$u_agent)) 
    { 
        $bname = 'Mozilla Firefox'; 
        $ub = "Firefox"; 
    } 
    elseif(preg_match('/Chrome/i',$u_agent)) 
    { 
        $bname = 'Google Chrome'; 
        $ub = "Chrome"; 
    } 
    elseif(preg_match('/Safari/i',$u_agent)) 
    { 
        $bname = 'Apple Safari'; 
        $ub = "Safari"; 
    } 
    elseif(preg_match('/Opera/i',$u_agent)) 
    { 
        $bname = 'Opera'; 
        $ub = "Opera"; 
    } 
    elseif(preg_match('/Netscape/i',$u_agent)) 
    { 
        $bname = 'Netscape'; 
        $ub = "Netscape"; 
    } 
    
    // finally get the correct version number
    $known = array('Version', $ub, 'other');
    $pattern = '#(?<browser>' . join('|', $known) .
    ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
    if (!preg_match_all($pattern, $u_agent, $matches)) {
        // we have no matching number just continue
    }
    
    // see how many we have
    $i = count($matches['browser']);
    if ($i != 1) {
        //we will have two since we are not using 'other' argument yet
        //see if version is before or after the name
        if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
            $version= $matches['version'][0];
        }
        else {
            $version= $matches['version'][1];
        }
    }
    else {
        $version= $matches['version'][0];
    }
    
    // check if we have a number
    if ($version==null || $version=="") {$version="?";}
    
    return array(
        'userAgent' => $u_agent,
        'name'      => $bname,
        'version'   => $version,
        'platform'  => $platform,
        'pattern'    => $pattern
    );
} 

//*****************************************************
//**ADD JS THEME FUNCION**********************
//*****************************************************

function scb_scripts() 
{
	/*	*/
	$ua = getBrowser();
	//$yourbrowser= "Your browser: " . $ua['name'] . " " . $ua['version'] . " on " .$ua['platform'] . " reports: <br >" . $ua['userAgent'];
	//print_r($yourbrowser);
	
	//if($ua['name'] == "Google Chrome") wp_enqueue_script( 'nicescroll', get_bloginfo('stylesheet_directory') .  '/js/jquery.nicescroll.min.js', array(), '1.0.0', true );
	
	
	wp_enqueue_script( 'scb-script', get_bloginfo('stylesheet_directory') .  '/js/script.js', array(), '2.0.0', true );
}


add_action('wp_enqueue_scripts', 'scb_enqueue_styles');
add_action('wp_head','scb_add_favicon');
add_action('wp_head','scb_add_fonts');
add_action('wp_head','scb_add_googleAnalyticsScript');
//add_action('wp_head','scb_add_facebookPixelScript');

// add_action('wp_head','scb_add_googleAdsenseScript');
// add_action('wp_head','scb_add_googleTagManagerScript');
//add_action('wp_footer','scb_add_googleTagManagerFooter');
//add_action('wp_footer', 'scb_add_cliengoScript', 100 );

add_action( 'wp_enqueue_scripts', 'scb_scripts' );

//*****************************************************
//**THEME TRANSLATION INTEGRATION**********************
//*****************************************************

function scb_setup() {
	/*
	 * Makes available for translation.
	 *
	 * Translations can be added to the /lang/ directory.
	 */
	$my_theme = wp_get_theme();
	load_child_theme_textdomain( $my_theme->get( 'Name' ), get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'scb_setup' );

//*****************************************************
//******BLOCK ADMINISTRATION LOGIN AND DASHBOARD*******
//*****************************************************
 
// http://natko.com/block-access-to-wp-admin-and-wordpress-dashboard/ 
 
/*
Si el usuario ingresó, se intenta abrir el dashboard, el usuario no puede editar entradas y el ingreso no es una llamada ajax, redirijimos a "mis paginas" 
*/   
function block_dashboard() {
       
    //$referrer = $_SERVER['HTTP_REFERER'];
       
    $file = basename($_SERVER['PHP_SELF']);
	if (is_user_logged_in() && is_admin() && !current_user_can('edit_posts') && $file != 'admin-ajax.php'){
        wp_redirect( '//dsbox.com.ar/clientes/dashboard/');
		//wp_redirect( home_url() );
        exit();
    }
}
 
function block_on_login_failed( $user ) {
        // check what page the login attempt is coming from
        $referrer = $_SERVER['HTTP_REFERER'];
 
        //die ( $referrer );
               
        // check that were not on the default login page
        if ( !empty($referrer) && !strstr($referrer,'wp-login') && !strstr($referrer,'wp-admin') && $user!=null ) {
                // make sure we don't already have a failed login attempt
                if ( !strstr($referrer, '?login=failed' )) {
				// Redirect to the login page and append a querystring of login failed
                wp_redirect( $referrer . '?login=failed');
            } else {
				wp_redirect( $referrer );
            }
 
            exit;
        }
}

function block_on_blank_login( $user )
{
        function get_page_by_name($pagename)
        {
                $pages = get_pages();
                foreach ($pages as $page) if ($page->post_name == $pagename) return $page;
                return false;
        }
 
        $page = get_page_by_name('log-in');
		
        if (empty($page)) $page = get_page_by_name('ingresar');
       
        // check what page the login attempt is coming from
        $referrer = $_SERVER['HTTP_REFERER'];
 
        $error = false;
       
        if($page && !isset($_POST['pwd']) && !isset($_POST['log']))
        {
			
			wp_redirect( home_url() );
			exit();
        }
 
        if($_POST['log'] == '' || $_POST['pwd'] == '')
        {
                $error = true;
        }
       
        // check that were not on the default login page
        if ( !empty($referrer) && !strstr($referrer,'wp-login') && !strstr($referrer,'wp-admin') && !strstr($referrer,'admin') && $error ) {
			// make sure we don't already have a failed login attempt
        if ( !strstr($referrer, '?login=failed') ) {
			// Redirect to the login page and append a querystring of login failed
			wp_redirect( $referrer . '?login=failed' );
        } else {
			wp_redirect( $referrer );
        }
 
		exit;
 
        }
}

 
add_action('init', 'block_dashboard');
add_action( 'wp_login_failed', 'block_on_login_failed' ); // hook failed login
add_action( 'authenticate', 'block_on_blank_login'); //Shortcode para login donde quieras


//*****************************************************
//**PORTFOLIO WIDGET***********************************
//*****************************************************

 
 /**
 * Register our sidebars and widgetized areas.
 *
 */
function producto_widgets_init() {

	register_sidebar( array(
		'name'          => 'Producto',
		'id'            => 'producto_common_area_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'producto_widgets_init' );


//*****************************************************
//**LOGGIN WIDGET*********************************
//*****************************************************

 
// Creating the widget 
class scb_widget extends WP_Widget {
 
	function __construct() {
		parent::__construct(
		 
		// Base ID of your widget
		'scb_widget', 
		 
		// Widget name will appear in UI
		__('Log-in Widget (DSB)', 'scb_login_widget'), 
		 
		// Widget description
		array( 'description' => __( 'Mostrar formulario de ingreso', 'scb_login_widget' ), ) 
		);
	}
	 
	// Creating widget front-end
	 
	public function widget( $args, $instance ) {
		
		$title = apply_filters( 'widget_title', $instance['title'] );
		 
		// before and after widget arguments are defined by themes
		echo $args['before_widget'];

		// This is where you run the code and display the output
		// echo __( 'Hello, World!', 'scb_login_widget' );
		?>
		
		
		<?php if (is_user_logged_in()) { 
			
			?>
		
			<a href="<?php echo wp_logout_url($_SERVER['REQUEST_URI'])?>"><?php _e( 'Log Out' )?></a>
			
			<?php } else { 
			
				
				if ( ! empty( $title ) ) echo $args['before_title'] . $title . $args['after_title'];
		
				?>
			
				<form action="<?php echo wp_login_url($_SERVER['REQUEST_URI'])?>" method="post">
					
					<?php _e('Username')?><br />
					
					<input type="text" size="20" name="log"/>
					
					<br /><br />
					
					<?php _e('Password')?><br />
					
					<input type="password" size="20" name="pwd"/>
					
					<br /><br />
					
					<input type="submit" value="<?php esc_attr_e('Log In')?>" name="wp-submit">
					<input type="hidden" value="forever" name="rememberme"/>
					
				</form>
				
		<?php 
		
			// echo '<br />';
			// echo '<a href="'.site_url('wp-login.php?action=register', 'login').'">'._e('Register').'</a>';
			// echo ' | <a href="'.site_url('wp-login.php?action=lostpassword', 'login').'">'._e('Lost your password?').'</a>';
				
		
		} 
		
		echo $args['after_widget'];

	}
			 
	// Widget Backend 
	public function form( $instance ) {
		
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		} else {
			$title = __( 'Iniciar Sesión', 'scb_login_widget' );
		}
		
		
		// Widget admin form
		?>

		<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>

		<?php 
	}
			 
	// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}
	
} // Class scb_widget ends here


// Register and load the widget
function scb_load_widget() {
    register_widget( 'scb_widget' );
}
add_action( 'widgets_init', 'scb_load_widget' );

//*****************************************************
//**LOG OUTPUT*****************************************
//*****************************************************

/**
 * Add new body class.
 *
 * Testing what is in the $post variable.
 */
 /*
function add_body_class_cb( $classes ) {
    global $post;
    echo '<pre>' . get_locale() . '</pre>' ;
}

add_filter( 'body_class', 'add_body_class_cb' );
*/

//die ( get_locale() );

//*****************************************************
//**LOG OUTPUT*****************************************
//*****************************************************

function mobile_redirect() {
     
    
	if ( wp_is_mobile() AND is_front_page() ) {
		wp_redirect( get_permalink( 72 ) ); // pagina producto
		exit;
	}

     
}

//add_action( 'template_redirect', 'mobile_redirect' );
        
?>