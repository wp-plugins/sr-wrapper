<?php
/*
Plugin Name: SR-Wrapper Shortcode
Plugin URI: http://scottierocket.com/wordpress-stuff/sr-childpages
Description: This plugin allows page authors to easily demonstrate shortcodes in their posts and pages by wrapping them inside a shortcode that does -- well, nothing.  It's a NOOP.
Version: 0.2
Author: Neil Mickelson
Author URI: http://scottierocket.com
*/

/*  Copyright 2008  Neil Mickelson  (email : wordpress-stuff@scottierocket.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/*  Version History:

    0.2 - 05 May 2008
    - First version to be hosted at wordpress.org/extend/plugins
    - Confirmed compatible with WordPress 2.5.1
    - Minor documentation updates; no functional changes
    
    0.1 - 24 Apr 2008
    - Initial release
*/

function sr_wrapper_handler( $atts, $content = null ) {
    return $content;
}

add_shortcode('wrapper', 'sr_wrapper_handler');
?>
