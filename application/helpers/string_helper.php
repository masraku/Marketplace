<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Create a URL-friendly slug from a string.
 *
 * @param string $string The input string.
 * @return string The generated slug.
 */
if (!function_exists('create_slug')) {
    function create_slug($string) {
        // Hapus karakter spesial
        $string = preg_replace('/[^A-Za-z0-9-]+/', '-', strtolower($string));
        // Hapus tanda minus berlebih
        return trim($string, '-');
    }
}


/**
 * Limit the length of a string and add ellipsis if exceeded.
 *
 * @param string $string The input string.
 * @param int $limit The character limit.
 * @return string The truncated string with ellipsis.
 */
function limit_string($string, $limit = 100) {
    if (strlen($string) > $limit) {
        return substr($string, 0, $limit) . '...';
    }
    return $string;
}

/**
 * Convert a string to camel case.
 *
 * @param string $string The input string.
 * @return string The string in camel case.
 */
function to_camel_case($string) {
    $string = str_replace(' ', '', ucwords(str_replace(['-', '_'], ' ', strtolower($string))));
    $string[0] = strtolower($string[0]);
    return $string;
}

/**
 * Convert a string to snake case.
 *
 * @param string $string The input string.
 * @return string The string in snake case.
 */
function to_snake_case($string) {
    return strtolower(preg_replace('/[A-Z]/', '_$0', lcfirst(str_replace(' ', '', $string))));
}

/**
 * Remove all spaces from a string.
 *
 * @param string $string The input string.
 * @return string The string without spaces.
 */
function remove_spaces($string) {
    return str_replace(' ', '', $string);
}

/**
 * Generate a random alphanumeric string.
 *
 * @param int $length The desired length of the random string.
 * @return string The random string.
 */
function random_string($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $random_string = '';
    for ($i = 0; $i < $length; $i++) {
        $random_string .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $random_string;
}

/**
 * Clean a string from HTML tags and special characters.
 *
 * @param string $string The input string.
 * @return string The cleaned string.
 */
function clean_string($string) {
    $string = strip_tags($string);
    $string = htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
    return $string;
}

/**
 * Convert a string to a human-readable format.
 *
 * @param string $string The input string.
 * @return string The human-readable string.
 */
function humanize_string($string) {
    $string = str_replace(['-', '_'], ' ', $string);
    return ucwords($string);
}

/**
 * Replace the nth occurrence of a substring in a string.
 *
 * @param string $search The substring to search for.
 * @param string $replace The replacement string.
 * @param string $subject The string to search in.
 * @param int $occurrence The nth occurrence to replace.
 * @return string The modified string.
 */
function replace_nth_occurrence($search, $replace, $subject, $occurrence) {
    $pattern = '/(?:' . preg_quote($search, '/') . ')/';
    $matches = [];
    preg_match_all($pattern, $subject, $matches, PREG_OFFSET_CAPTURE);

    if (isset($matches[0][$occurrence - 1])) {
        $pos = $matches[0][$occurrence - 1][1];
        return substr_replace($subject, $replace, $pos, strlen($search));
    }
    return $subject;
}

/**
 * Capitalize the first letter of each word in a string.
 *
 * @param string $string The input string.
 * @return string The string with capitalized words.
 */
function capitalize_words($string) {
    return ucwords(strtolower($string));
}
