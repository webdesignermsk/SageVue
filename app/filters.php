<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'sage') . '</a>';
});

add_filter('body_class', function (array $classes) {
    if (WP_DEBUG === true) {
        $classToAdd = ['debug-screens'];
        $classes = array_merge($classes, [$classToAdd]);
    }
    return $classes;
});
