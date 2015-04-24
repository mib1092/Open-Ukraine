<?php
/**
 * @file
 * Contains the theme's functions to manipulate Drupal's default markup.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728096
 */


/**
 * Override or insert variables into the maintenance page template.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("maintenance_page" in this case.)
 */
/* -- Delete this line if you want to use this function
function open_preprocess_maintenance_page(&$variables, $hook) {
  // When a variable is manipulated or added in preprocess_html or
  // preprocess_page, that same work is probably needed for the maintenance page
  // as well, so we can just re-use those functions to do that work here.
  open_preprocess_html($variables, $hook);
  open_preprocess_page($variables, $hook);
}
// */

/**
 * Override or insert variables into the html templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("html" in this case.)
 */
/* -- Delete this line if you want to use this function
function open_preprocess_html(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');

  // The body tag's classes are controlled by the $classes_array variable. To
  // remove a class from $classes_array, use array_diff().
  //$variables['classes_array'] = array_diff($variables['classes_array'], array('class-to-remove'));
}
// */

/**
 * Override or insert variables into the page templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("page" in this case.)
 */
/* -- Delete this line if you want to use this function
function open_preprocess_page(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the node templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("node" in this case.)
 */
/* -- Delete this line if you want to use this function
function open_preprocess_node(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');

  // Optionally, run node-type-specific preprocess functions, like
  // open_preprocess_node_page() or open_preprocess_node_story().
  $function = __FUNCTION__ . '_' . $variables['node']->type;
  if (function_exists($function)) {
    $function($variables, $hook);
  }
}
// */

/**
 * Override or insert variables into the comment templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("comment" in this case.)
 */
/* -- Delete this line if you want to use this function
function open_preprocess_comment(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the region templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("region" in this case.)
 */
/* -- Delete this line if you want to use this function
function open_preprocess_region(&$variables, $hook) {
  // Don't use Zen's region--sidebar.tpl.php template for sidebars.
  //if (strpos($variables['region'], 'sidebar_') === 0) {
  //  $variables['theme_hook_suggestions'] = array_diff($variables['theme_hook_suggestions'], array('region__sidebar'));
  //}
}
// */

/**
 * Override or insert variables into the block templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("block" in this case.)
 */
/* -- Delete this line if you want to use this function
function open_preprocess_block(&$variables, $hook) {
  // Add a count to all the blocks in the region.
  // $variables['classes_array'][] = 'count-' . $variables['block_id'];

  // By default, Zen will use the block--no-wrapper.tpl.php for the main
  // content. This optional bit of code undoes that:
  //if ($variables['block_html_id'] == 'block-system-main') {
  //  $variables['theme_hook_suggestions'] = array_diff($variables['theme_hook_suggestions'], array('block__no_wrapper'));
  //}
}
// */

function open_preprocess_page(&$variables, $hook) {
    drupal_add_css('http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,700',
        array('type' => 'external'));
    drupal_add_css('http://fonts.googleapis.com/css?family=Montserrat:700,400',
        array('type' => 'external'));

    drupal_add_js('http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js',
      array('type' => 'external', 'scope' => 'footer', 'weight' => 1));
    drupal_add_js(drupal_get_path('theme','open') . '/js/jquery.placeholder.js',
      array('type' => 'file', 'scope' => 'footer', 'weight' => 2));
    drupal_add_js(drupal_get_path('theme','open') . '/js/uisearch.js',
      array('type' => 'file', 'scope' => 'footer', 'weight' => 3));
    drupal_add_js(drupal_get_path('theme','open') . '/js/smoothscroll.js',
      array('type' => 'file', 'scope' => 'footer', 'weight' => 4));
    drupal_add_js(drupal_get_path('theme','open') . '/js/commonJs.js',
      array('type' => 'file', 'scope' => 'footer', 'weight' => 5));
    drupal_add_js(drupal_get_path('theme','open') . '/js/popup.js',
      array('type' => 'file', 'scope' => 'footer', 'weight' => 6));


    if (drupal_is_front_page()) {
        drupal_add_css(drupal_get_path('theme','open') . '/css/responsiveslides.css');

        drupal_add_js(drupal_get_path('theme','open') . '/js/responsiveslides.min.js',
            array('type' => 'file', 'scope' => 'footer', 'weight' => 3));
    }

    if (!drupal_is_front_page()) {
        drupal_add_css(drupal_get_path('theme','open') . '/css/slick.css');
        drupal_add_css(drupal_get_path('theme','open') . '/css/slick-theme.css');

        drupal_add_js(drupal_get_path('theme','open') . '/js/slick.min.js',
            array('type' => 'file', 'scope' => 'footer', 'weight' => 3));
    }


    // Primary nav.
    $variables['primary_nav'] = FALSE;
    if ($variables['main_menu']) {
        // Build links.
        $variables['primary_nav'] = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
        // Provide default theme wrapper function.
        $variables['primary_nav']['#theme_wrappers'] = array('menu_tree__primary');
    }

  // Custom error-pages
  $status = drupal_get_http_header("status");
  if($status == "404 Not Found") {
      $variables['theme_hook_suggestions'][] = 'page__404';
  }

  if($status == "403 Forbidden") {
      $variables['theme_hook_suggestions'][] = 'page__403';
  }

  // Custom confirm form
    $variables['confirmation'] = FALSE;
    if (isset($_GET['confirmation']) && ($_GET['confirmation'] == 'yes')) {
        $variables['confirmation'] = TRUE;
        $variables['confirmation_msg'] = '<p>Your letter sent. Thank you!</p>';
    }
}

/**
* Customize search-form
**/
function open_form_alter(&$form, &$form_state, $form_id) {
    if ($form_id == 'search_block_form') {
        $form['search_block_form']['#title'] = t(''); // Меняем текст заголовка
        $form['search_block_form']['#title_display'] = 'invisible'; // Выключаем отображение заголовка
        $form['search_block_form']['#size'] = 20;  // Задаем размер поля ввода
        $form['actions']['submit']['#value'] = t(''); // Меняем текст кнопки поиска
        $form['search_block_form']['#class'] = 'search-input';  // CSS-class текстового поля

        $searchtext = 'Search'; // Задаем текст внутри поля. Здесь я использую английское значение, его можно легко перевести в админке. Можно писать и по-русски. Помещаем его в переменную, чтобы было удобно с ним работать
        // Альтернативный (HTML5) атрибут, вместо использования javascript
        $form['search_block_form']['#attributes']['placeholder'] = t($searchtext);
    }
}

/**
* Theme wrapper function for the primary menu links
*/
function open_menu_tree__primary(&$variables) {
  return '<ul>' . $variables['tree'] . '</ul>';
}

//function open_menu_tree($variables) {
//  return '<ul class="sub-menu">' . $variables['tree'] . '</ul>';
//}
//
//function open_menu_link(array $variables) {
//  $element = $variables['element'];
//  $sub_menu = '';
//
//  if ($element['#below']) {
//    $sub_menu = drupal_render($element['#below']);
//  }
//  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
//  return '<li>' . $output . $sub_menu . "</li>\n";
//}


/**
 * Implements hook_preprocess_search_results().
 */
function open_preprocess_search_results(&$vars) {
    // search.module shows 10 items per page (this isn't customizable)
    $itemsPerPage = 10;

    // Determine which page is being viewed
    // If $_REQUEST['page'] is not set, we are on page 1
    $currentPage = (isset($_REQUEST['page']) ? $_REQUEST['page'] : 0) + 1;

    // Get the total number of results from the global pager
    $total = $GLOBALS['pager_total_items'][0];

    // Determine which results are being shown ("Showing results x through y")
    $start = (10 * $currentPage) - 9;
    // If on the last page, only go up to $total, not the total that COULD be
    // shown on the page. This prevents things like "Displaying 11-20 of 17".
    $end = (($itemsPerPage * $currentPage) >= $total) ? $total : ($itemsPerPage * $currentPage);

    // If there is more than one page of results:
    if ($total > $itemsPerPage) {
        $vars['search_totals'] = t('About <b>!total !results_label</b> found', array(
            '!start' => $start,
            '!end' => $end,
            '!total' => $total,
            '!results_label' => format_plural($total, 'result', 'results'),
        ));
    }
    else {
        // Only one page of results, so make it simpler
        $vars['search_totals'] = t('About <b>!total !results_label</b> found', array(
            '!total' => $total,
            // Be smart about labels: show "result" for one, "results" for multiple
            '!results_label' => format_plural($total, 'result', 'results'),
        ));
    }
}

function get_current_search_terms() {
// only do this once per request
    static $return;
    if (!isset($return)) {
        // extract keys from path
        $path = explode('/', $_GET['q'], 3);
        // only if the path is search (if you have a different search url, please modify)
        if(count($path) == 3 && $path[0]=="search") {
            $return = $path[2];
        } else {
            $keys = empty($_REQUEST['keys']) ? '' : $_REQUEST['keys'];
            $return = $keys;
        }
    }
    return $return;
}

function phptemplate_preprocess_custom_pager(&$vars) {
    // if we're at the end, the nav_array item for this (eg first) is NULL;
    // no need to compare it to current index.
    $vars['first'] = empty($vars['nav_array']['first']) ? '' : l('first', 'node/' . $vars['nav_array']['first']);
    $vars['last'] = empty($vars['nav_array']['last']) ? '' : l('last', 'node/' . $vars['nav_array']['last']);
}