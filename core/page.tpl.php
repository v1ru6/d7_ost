<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/garland.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?>

<?php 

/* LAYOUTS

LEFT CONTENT RIGHT (full)
CONTENT RIGHT
LEFT CONTENT
CONTENT (plain)

*/

/*
$thecontent = '';
$thecontent .= '<div class="content">';
$thecontent .= $messages;
$thecontent .= render($page['help']);
if ($action_links) {
  $thecontent .= '<ul class="action-links">'.render($action_links).'</ul>';
}
if ($title) {
  $thecontent .= '<h1>'.$title.'</h1>';
}
$thecontent .= render($tabs);
$thecontent .= render($page['content']);
$thecontent .= '</div>';

$thepage = '';
if ($page['sidebar_left'] && $page['sidebar_right']) {
  $thepage = '
    <div class="layout-full">
    <div class="page-left">'.render($page['sidebar_left']).'</div>
    <div class="page-content">'.$thecontent.'</div>
    <div class="page-right">'.render($page['sidebar_right']).'</div>
    </div>
  ';
} elseif (!$page['sidebar_left'] && $page['sidebar_right']) {
  $thepage = '
    <div class="layout-right">
    <div class="page-content">'.$thecontent.'</div>
    <div class="page-right">'.render($page['sidebar_right']).'</div>
    </div>
  ';
} elseif ($page['sidebar_left'] && !$page['sidebar_right']) {
  $thepage = '
    <div class="layout-left">
    <div class="page-left">'.render($page['sidebar_left']).'</div>
    <div class="page-content">'.$thecontent.'</div>
    </div>
  ';
} elseif (!$page['sidebar_left'] && !$page['sidebar_right']) {
  $thepage = '
    <div class="layout-plain">
    <div class="page-content">'.$thecontent.'</div>
    </div>
  ';
}
*/
?>

<div id="root">
  <div id="header-wrap">
    <div id="header"></div>
  </div>
  <div id="nav-wrap">
    <!--<?php //$logo = 'http://localhost/sites/thenewboston/sites/all/themes/thenewboston/logo.gif'; ?>-->
    <div id="nav">
      <?php print theme('links', array('links' => $main_menu)); ?>
    </div>
  </div>
  <div id="logo-wrap">
    <div id="logo"><?php print '<a href="/"><img src="' . $logo . '" alt="'.variable_get('site_name', '').'" /></a>'; ?></div> <!-- or use <?php //print render ($page['logo']); ?> -->
  </div>
  <div id="body-wrap">
    <div id="body">
      <div id="page-left-wrap">
        <div id="page-left"><?php print render($page['sidebar_left']); ?></div>
      </div>
      <div id="page-right-wrap">
        <div id="page-right">
          <div id="img"><?php print render($page['content']); ?></div>
          <div id="content-left-wrap">
            <div id="content-left"><?php print render($page['content_left']); ?></div>
          </div>
          <div id="content-right-wrap">
            <div id="content-right"><?php print render($page['content_right']); ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="sub-footer-wrap">
    <div id="sub-footer"></div>
  </div>
  <div id="footer-wrap">
    <div id="footer"><?php print render($page['content_footer']); ?></div>
  </div>
</div>


 