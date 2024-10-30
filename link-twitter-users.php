<?php
/**
 * Link twitter users
 *
 * Automatically link twitter users
 *
 * @package   Link twitter users
 * @author    Joan Boluda Name <joan@boluda.com>
 * @license   GPL-2.0+
 * @link      http://boluda.com
 * @copyright 2013 boluda.com
 *
 * @wordpress-plugin
 * Plugin Name: Link twitter users
 * Plugin URI:  http://boluda.com/
 * Description: Automatically link twitter users
 * Version:     1.6
 * Author:      Joan Boluda
 * Author URI:  http://boluda.com
 * Text Domain: boluda-ltu
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /lang
 */

//Automatically link twitter users
function twtreplace($content) {
	$twtreplace = preg_replace('/([^a-zA-Z0-9-_&])@([0-9a-zA-Z_]+)/',"$1<a href=\"http://twitter.com/$2\" target=\"_blank\" rel=\"nofollow\">@$2</a>",$content);
	return $twtreplace;
}
add_filter('the_content', 'twtreplace');   
add_filter('comment_text', 'twtreplace');