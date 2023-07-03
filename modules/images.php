<?php
add_action('acf/include_fields', function () {
  if (!function_exists('acf_add_local_field_group')) {
    return;
  }

  acf_add_local_field_group(array(
    'key' => 'group_649db88a383b4',
    'title' => 'Test',
    'fields' => array(
      array(
        'key' => 'field_649dc5632cb51',
        'label' => 'Page Builder',
        'name' => 'page_builder',
        'aria-label' => '',
        'type' => 'flexible_content',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'layouts' => array(
          'layout_649dc588e177d' => array(
            'key' => 'layout_649dc588e177d',
            'name' => 'hero',
            'label' => 'Hero',
            'display' => 'block',
            'sub_fields' => array(
              array(
                'key' => 'field_649db88a17b33',
                'label' => 'Title',
                'name' => 'title',
                'aria-label' => '',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                  'width' => '',
                  'class' => '',
                  'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
              ),
              array(
                'key' => 'field_649dc5c72cb52',
                'label' => 'Image',
                'name' => 'image',
                'aria-label' => '',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                  'width' => '',
                  'class' => '',
                  'id' => '',
                ),
                'return_format' => 'array',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
                'preview_size' => 'medium',
              ),
            ),
            'min' => '',
            'max' => '',
          ),
        ),
        'min' => '',
        'max' => '',
        'button_label' => 'Add Row',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'page',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'acf_after_title',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => array(
      0 => 'the_content',
      1 => 'discussion',
      2 => 'comments',
      3 => 'revisions',
      4 => 'author',
      5 => 'format',
      6 => 'send-trackbacks',
    ),
    'active' => true,
    'description' => '',
    'show_in_rest' => 1,
  ));
});
