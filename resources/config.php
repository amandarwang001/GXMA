 <?php
/**
 * Created by Dijatek, LLC
 */


/*Here we set up the base URL and base path constants*/

//this is base url for local environment
if ($_SERVER['HTTP_HOST'] == 'localhost'){
    $basePath = $_SERVER['DOCUMENT_ROOT'] . '/GXMA/public_html/';
    $baseUrl = '/GXMA/public_html/';
    define('CSS_URL',   $baseUrl. 'assets/css/');
    define('JS_URL',    $baseUrl . 'assets/js/');
}

//this is live base url
if ($_SERVER['HTTP_HOST'] == 'guoxingmartialarts.com') {
    $basePath = $_SERVER['DOCUMENT_ROOT'] . '/';
    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $baseUrl = $protocol . 'guoxingmartialarts.com/';
}

 //this is heroku url
 if ($_SERVER['HTTP_HOST'] == 'gxma.herokuapp.com') {
     $basePath = $_SERVER['DOCUMENT_ROOT'] . '/';
     $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
     $baseUrl = $protocol . 'gxma.herokuapp.com/';
     define('CSS_URL', 'assets/css/');
     define('JS_URL',  'assets/js/');
 }

// Set commonly used paths
/*Includes path contains the html for each page*/
define('INCLUDES_PATH', $basePath . 'includes/');
define('SERVICES_INCLUDES_PATH', INCLUDES_PATH . 'services/');
define('LANDING_INCLUDES_PATH', INCLUDES_PATH . 'landingpages/');

//Path for blog
define('BLOG_PATH', $basePath . 'blog/');
// Set common links for localhost
define('CSS_URL', 'assets/css/');
define('JS_URL',  'assets/js/');



/**
 * Set image links:
 *  layout - used for site layout and won't be changed much
 *  content - used for consumer uploaded content -- should be part of .gitignore
 */
define('IMAGE_URL', $baseUrl . 'assets/img/');

// Define the array allowing redirect pretty URLS, topLevelPages are usually what is on the nav bar
// Each page must match a file in the includes folder for example: home.php, services.php, aboutus.php....
$topLevelPages = array(
    'Home' => 'Home',
    'Videos' => 'Videos',
    'AboutUs' => 'AboutUs',
    'ContactUs' => 'ContactUs',
);

/*servicesPages are for any other pages on the site and anything from a dropdown on the nav bar*/
// Each page must match a file in the includes folder for example: coding.php....
 $subLevelPages = array(
     'Classes' => 'classes',
     'Blog' => 'blog',
 );

 $landingPages = array(
     'SampleLanding' => 'samplelanding'
 );

/*This description array sets up the meta description and title tag for each page identified in the topLevelPages or subLevelPages array*/
$description = array (
    "Home" => array(
        "meta_desc" => "This is the home page of test site.",
        "title" => "Home | Guo Xing Martial Arts School"
    ),
    "AboutUs" => array(
        "meta_desc" => "Information about Guo Xing Martial Arts School and the Bagua Taiji Wellness and Martial Arts Association.",
        "title" => "About | Guo Xing Martial Arts School"
    ),

    "ContactUs" => array(
        "meta_desc" => "This is the contact page",
        "title" => "Contact | Guo Xing Martial Arts School"

    ),
    "Videos" => array(
        "meta_desc" => "Videos from Guo Xing Martial Arts School.",
        "title" => "Videos | Guo Xing Martial Arts School"

    ),  
    "classes" => array(
        "meta_desc" => "Bagua Zhang, Xingyi Quan, Taiji, Northern Shaolin Kung Fu, and Qi Family Tongbei classes from 
        Guo Xing Martial Arts School in Brisbane (Kuraby), Australia, and Orlando, FL",
        "title" => "Classes | Guo Xing Martial Arts School"
    ), 
    "blog" => array(
        "meta_desc" => "This is our blog",
        "title" => "Blog | Guo Xing Martial Arts School"
    ),
    "samplelanding" => array(
        "meta_desc" => "This is our landing page.",
        "title" => "Campaign Title"
    )
);