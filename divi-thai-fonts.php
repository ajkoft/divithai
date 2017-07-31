<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
/* 

Plugin Name: Divi Thai Fonts
Author: Koftkoft
Version: 1.0
Description: Add Thai fonts based on Google Fonts to Divi Theme or plugin
*/

add_filter( 'et_google_fonts', 'et_koft_add_thai_fonts'  );
add_filter( 'et_builder_google_fonts', 'et_koft_add_thai_fonts' );


function et_koft_add_thai_fonts ($google_fonts) {


	$newfont = array( 
			'----THAI FONT----'             => array(
				'styles' 		=> '400',
				'character_set' => 'thai',
				'type'			=> 'sans-serif',
			),
			'Prompt'             => array(
				'styles' 		=> '300italic,400italic,600italic,700italic,800italic,400,300,600,700,800',
				'character_set' => 'thai',
				'type'			=> 'sans-serif',
			),
			'Kanit'             => array(
				'styles' 		=> '300italic,400italic,600italic,700italic,800italic,400,300,600,700,800',
				'character_set' => 'thai',
				'type'			=> 'sans-serif',
			),
			'Trirong'             => array(
				'styles' 		=> '300italic,400italic,600italic,700italic,800italic,400,300,600,700,800',
				'character_set' => 'thai',
				'type'			=> 'sans-serif',
			),
			'Taviraj'             => array(
				'styles' 		=> '300italic,400italic,600italic,700italic,800italic,400,300,600,700,800',
				'character_set' => 'thai',
				'type'			=> 'sans-serif',
			),
			'Itim'             => array(
				'styles' 		=> '300italic,400italic,600italic,700italic,800italic,400,300,600,700,800',
				'character_set' => 'thai',
				'type'			=> 'sans-serif',
			),
			'Pridi'             => array(
				'styles' 		=> '300italic,400italic,600italic,700italic,800italic,400,300,600,700,800',
				'character_set' => 'thai',
				'type'			=> 'sans-serif',
			),
			'Mitr'             => array(
				'styles' 		=> '300italic,400italic,600italic,700italic,800italic,400,300,600,700,800',
				'character_set' => 'thai',
				'type'			=> 'sans-serif',
			),
			'Maitree'             => array(
				'styles' 		=> '300italic,400italic,600italic,700italic,800italic,400,300,600,700,800',
				'character_set' => 'thai',
				'type'			=> 'sans-serif',
			),
			'Chonburi'             => array(
				'styles' 		=> '300italic,400italic,600italic,700italic,800italic,400,300,600,700,800',
				'character_set' => 'thai',
				'type'			=> 'sans-serif',
			),
			'Athiti'             => array(
				'styles' 		=> '300italic,400italic,600italic,700italic,800italic,400,300,600,700,800',
				'character_set' => 'thai',
				'type'			=> 'sans-serif',
			),
			'Sriracha'             => array(
				'styles' 		=> '300italic,400italic,600italic,700italic,800italic,400,300,600,700,800',
				'character_set' => 'thai',
				'type'			=> 'sans-serif',
			),
			'Pattaya'             => array(
				'styles' 		=> '300italic,400italic,600italic,700italic,800italic,400,300,600,700,800',
				'character_set' => 'thai',
				'type'			=> 'sans-serif',
			),
			'----THAI FONT----'             => array(
				'styles' 		=> '400',
				'character_set' => 'thai',
				'type'			=> 'sans-serif',
			)

	);

	return array_merge($google_fonts, $newfont);

}