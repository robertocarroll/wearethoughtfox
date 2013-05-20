<?php

/*
| -------------------------------------------------------------------
|Custom taxonomies
| -------------------------------------------------------------------
| 
| */


add_action( 'init', 'create_my_taxonomies', 0 );

function create_my_taxonomies() {
	register_taxonomy( 'type', 'post', array( 'hierarchical' => false, 'label' => 'Type of work', 'query_var' => true, 'rewrite' => true ) );
}


function rw_get_the_term_list($id = null, $taxonomy, $parent = true, $before = '', $sep = ', ', $after = '') {

	$id = empty($id) ? get_the_ID() : $id;

	$terms = get_the_terms($id, $taxonomy);

	$html = array();

	if(!empty($terms)) {

	foreach ($terms as $term) {

		if (($parent && 0 == $term->parent) || (!$parent && $term->parent)) {

			$term_name = $term->name;
			$term_short = mb_strimwidth($term_name, 0, 20, '...');

			$html[] = '<a href="' . get_term_link($term, $taxonomy) . '">' . $term_short . '</a>';

		}

	}

	return $before . implode($sep, $html) . $after;

	}

}