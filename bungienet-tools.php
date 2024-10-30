<?php
/*
Plugin Name: Bungie.net Tools
Plugin URI: http://ryanmarkel.com/bungietools/
Description: Series of shortcodes for inserting Bungie.net and Halo stuff into WordPress sites.
Version: 0.4
Author: Ryan Markel
Author URI: http://ryanmarkel.com
*/

/*  This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

/*
	Bungie Pro render output shortcode.
	[bungievideo id="movie_guid"]
	The width and height are fixed by Bungie. The GUID can be found in the embed code for the rendered film.
	Yes, it's completely lame that this is in an iframe and uses Silverlight and WMV.
	http://www.bungie.net/Stats/Reach/FileSearch.aspx?fc=5
*/

add_shortcode( 'bungievideo', 'bungievideo_shortcode' );

function bungievideo_shortcode( $atts ) {
	extract(shortcode_atts( array(
		'id' => 'false',
		), $atts));
		
		// Viper007Bond gave me a lesson in validating user input. This can be done here by checking to make sure the ID is an integer.
		
		$atts = array_map( 'absint', $atts );
		
		if ( ! $atts['id'] )
			return '<!-- Invalid Bungie rendered film ID. -->';
			
		return '<iframe src="http://www.bungie.net/Silverlight/bungiemediaplayer/embed.aspx?fid=' . esc_attr( $atts['id'] ) . '" scrolling="no" style="padding:0;margin:0;border:0;" width="640" height="360" ></iframe>';
}

/*
	Halo 3 Identity Bungie Cards shortcode.
	[halo3forumid gamertag="xboxlive_gamertag" size="type_of_card"]
	The Xbox Live Gamertag value accepts spaces; they are converted automatically.
	Size defaults to small, and becomes the large size if the value is either "large" or invalid. I think I'd like to change this in the future.
	http://www.bungie.net/Account/bcard.aspx
*/

add_shortcode( 'halo3id', 'halo3id_shortcode' );

function halo3id_shortcode( $atts ) {
	extract(shortcode_atts( array(
		'gamertag' => 'false',
		'size' => 'small',
		), $atts));

		if ( $atts['size'] == 'small' ) {
			return '<a href="http://www.bungie.net/stats/halo3/default.aspx?player=' . esc_attr( $atts['gamertag'] ) . '"><img src="http://www.bungie.net/card/halo3sm/' . esc_attr( $atts['gamertag'] ) . '.ashx"/></a>';
		} else {
			return '<a href="http://www.bungie.net/stats/halo3/default.aspx?player=' . esc_attr( $atts['gamertag'] ) . '"><img src="http://www.bungie.net/card/halo3/' . esc_attr( $atts['gamertag'] ) . '.ashx"/></a>';
		}
}		
		
?>