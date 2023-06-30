<?php
//create custom endpoint for wordpress api

add_action('rest_api_init', 'register_api');

function register_api()
{
  register_rest_route('wp/v2', '/siteSettings', array(
    'methods' => 'GET',
    'callback' => 'get_siteSetting',
  ));
  register_rest_route('wp/v2', '/siteMenu/(?P<menuName>[a-zA-Z0-9-]+)', array(
    'methods' => 'GET',
    'callback' => 'get_menu',
  ));
}
function get_siteSetting()
{
  $siteSetting = array();
  $siteSetting['siteTitle'] = get_bloginfo('name');
  $siteSetting['siteDescription'] = get_bloginfo('description');
  $siteSetting['siteUrl'] = get_bloginfo('url');
  $siteSetting['frontPage'] =  get_option('page_on_front');;

  return $siteSetting;
}

function get_menu($data)
{
  //$data['menuName']
  return  wp_get_nav_menu_items('main-menu');
}
