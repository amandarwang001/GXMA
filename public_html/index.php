<!DOCTYPE html>
<html lang="en">
<?php
/**
 * Created by Dijatek, LLC
 * User: Daniel Kaltenbaugh <d.a.kaltenbaugh@gmail.com>
 * Date: 1/1/2017
 * Time: 8:50 PM
 */

/*  .htaccess in this directory redirects everything to index.php adding the page as a parameter
 *      referenced by page.  Each page that is allowed is either in the $topLevelPages array or
 *      $subLevelPages as defined in resources/config.php.  If the page is found in one of those
 *      two arrays, then that page is included as the main body.  While home is one of the allowed
 *      pages in the array, it is also used as the default should nothing else be passed in that
 *      is recognized as a page.
 */
include('../resources/config.php');

$meta_desc = $description["Home"]["meta_desc"];
$title = $description["Home"]["title"];
//  Set the default page to home if nothing is passed in as a parameter
if (isset($_GET['page'])) {
    $page = $_GET['page'];
//    echo $page;
    $meta_desc = $description[$page]["meta_desc"];
    $title =  $description[$page]["title"];
} elseif (isset($_GET['blogtitle'])) {
	$blogtitle = $_GET['blogtitle'];
    $page = 'blog';
    $title = 'Blog Post';
}
else {
    $page = 'home';
};

if ($page == 'blog' || isset($blogtitle)) {
    include(INCLUDES_PATH. 'blogheader.php');
    include(SERVICES_INCLUDES_PATH. strtolower("blog.php"));
    include(INCLUDES_PATH. 'footer.php');
}
else {
    //  Set site constants, variables, arrays and other such housekeeping items.
    // Find the page in the array and include it or use home.php as the default if the page is not found.
    if (in_array($page, $topLevelPages)) {
        include(INCLUDES_PATH. 'header.php');
        include(INCLUDES_PATH. strtolower("$page.php"));
    }
    elseif (in_array($page, $subLevelPages)) {
        include(INCLUDES_PATH. 'header.php');
        include(SERVICES_INCLUDES_PATH. strtolower("$page.php"));
    }
    elseif (in_array($page, $landingPages)){
        include(LANDING_INCLUDES_PATH. 'landingheader.php');
        include(LANDING_INCLUDES_PATH. strtolower("$page.php"));
    }
    else {
        include(INCLUDES_PATH. 'header.php');
        include(INCLUDES_PATH. 'home.php');
    }

    //  FOOTER (/includes/footer.php)
    include(INCLUDES_PATH. 'footer.php');
}
?>
</html>