<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package WPCatchcode_Boat_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function wpcatchcode_boat_body_classes($classes)
{
    // Adds a class of hfeed to non-singular pages.
    if (! is_singular()) {
        $classes[] = 'hfeed';
    }

    // Adds a class of no-sidebar when there is no sidebar present.
    if (! is_active_sidebar('sidebar-1')) {
        $classes[] = 'no-sidebar';
    }

    return $classes;
}
add_filter('body_class', 'wpcatchcode_boat_body_classes');

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function wpcatchcode_boat_pingback_header()
{
    if (is_singular() && pings_open()) {
        printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
    }
}
add_action('wp_head', 'wpcatchcode_boat_pingback_header');

/**
 * Generate image with all srcset by attachment_id
 *
 * @param int $attachment_id Attachment ID of the image
 * @param string $size Image size
 * @param string $alt Alt text for the image
 * @param array $attr Additional attributes for the image tag
 *
 * @return string Generated image tag with srcset
 */
function get_image_with_srcset_by_id($attachment_id, $size, $alt = '', $attr = array())
{

    if (empty($attachment_id)) {
        return ''; // Return an empty string if the attachment ID is empty
    }

    $image_src = wp_get_attachment_image_src($attachment_id, $size);
    $image_url = $image_src[0];
    $image_width = $image_src[1];
    $image_height = $image_src[2];
    $srcset = '';
    $sizes = '';

    // Get all available image sizes
    $image_sizes = get_intermediate_image_sizes();

    // Loop through all available sizes and generate srcset and sizes attributes
    foreach ($image_sizes as $image_size) {
        $src = wp_get_attachment_image_src($attachment_id, $image_size);
        $srcset .= $src[0] . ' ' . $src[1] . 'w, ';
        $sizes .= '(max-width: ' . $src[1] . 'px) ' . $src[1] . 'px, ';
    }

    // Remove the trailing comma and space from the srcset and sizes attributes
    $srcset = rtrim($srcset, ', ');
    $sizes = rtrim($sizes, ', ');

    // Add srcset and sizes attributes to the image tag attributes array
    $attr['srcset'] = $srcset;
    $attr['sizes'] = $sizes;

    // Generate the image tag with srcset and sizes attributes
    $image_tag = '<img src="' . $image_url . '" width="' . $image_width . '" height="' . $image_height . '" alt="' . $alt . '"';

    foreach ($attr as $name => $value) {
        $image_tag .= ' ' . $name . '="' . esc_attr($value) . '"';
    }

    $image_tag .= ' />';

    return $image_tag;
}
