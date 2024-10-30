=== Bungie.net Tools ===
Contributors: markel
Tags: Bungie.net, Halo, games, video games
Requires at least: 2.9.2
Tested up to: 3.0.1
Stable tag: trunk

A series of shortcodes for adding information from Bungie.net to WordPress sites.

== Description ==

This plugin adds a handful of shortcodes to your WordPress site to make it easier to add things from Bungie.net to your site. For now, it's limited to things that are easily embedded into sites, but there are plans in the future for additional functionality.

= How to Add a Bungie Card =

For your Halo 3 career record, there is a pair of Bungie Cards available to show your emblem, your rank, and some other stats from your career.

You can add these to any post or page by inserting this shortcode:

`[halo3id gamertag="xboxlive_gamertag" size="type_of_card"]`

* The "gamertag" value accepts any Xbox Live gamertag. Spaces are fine and will be converted automatically.
* The "size" can be either "small" or "large". The small size is a good one to fit into most sidebars; the large size is really intended for forum signatures and will take up a good chunk of the width of a page.

= How to Add a Rendered Bungie.net Video =

If you are a Bungie Pro member, you can spend your Render Minutes to create embeddable videos of your Halo 3 and Halo Reach file share clips.

You can insert them into your WordPress posts or pages with this shortcode:

`[bungievideo id="movie_guid"]`

The movie GUID can be grabbed from the embed code you are given on Bungie.net. A few things you should know about the video playback:

* Videos are locked to 640x360. If you try to change the size of the embed, the video is clipped instead of scaled.
* The embed takes the form of an iframe-inserted page that runs a Silverlight-based video player.

There doesn't appear to be any way around these restrictions, unfortunately.

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload `bungienet-tools.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Use shortcodes at will

== Frequently Asked Questions ==

= Are there Bungie Cards for Halo Reach? =

Not yet. Hopefully soon.

= Can I insert or access my stats? =

So far, no.

The Halo Reach Stats API is currently closed and isn't accepting new applications. If you have a great idea on how the stats API could be used with this plugin in the future, by all means, let me know.

== Changelog ==

= 0.4 =
* First version in the WordPress Plugin Repository.
* Changed the Bungie Cards shortcodes to have a single shortcode for the two Halo 3 ID sizes.

= 0.3 =
* First completed version.
* Support for the Forum size Halo 3 Bungie Card and video embeds.