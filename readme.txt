=== Plugin Name ===
Contributors: mickelsn1
Tags: shortcode, wrapper
Requires at least: 2.5
Tested up to: 2.5
Stable tag: 0.1

This plugin allows page authors to easily demonstrate shortcodes in their posts and pages by wrapping them inside a shortcode that does -- well, nothing.  It's a NOOP.

== Usage ==

Just wrap the shortcode you're trying to demonstrate in enclosing [wrapper] shortcodes, like this:

[wrapper][shortcode_example][/wrapper]

== Installation ==

To start using the [wrapper] shortcode, install it by uploading the sr-wrapper folder to your wp-content/plugins directory and then activate the plugin through the 'Plugins' menu in WordPress.  Then just start using the shortcode in your pages!

== Frequently Asked Questions ==

= Why did you do this? =

Because when I tried writing instructions for my first shortcode plugin, I realized that describing its usage in a post or a page was going to be difficult, because WordPress kept trying to process it.  So I wrote this plugin to take advantage of the fact that shortcode processing is not recursive, making it easy to write the instructions for my first plugin!
