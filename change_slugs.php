/*
CHANGE SLUGS OF CUSTOM POST TYPES
*/

function change_post_types_slug( $args, $post_type ) {

   /*item post type slug*/   
   if ( 'program' === $post_type ) {
      $args['rewrite']['slug'] = 'place';
   }

   return $args;
}
add_filter( 'register_post_type_args', 'change_post_types_slug', 10, 2 );

/*
CHANGE SLUGS OF TAXONOMIES, slugs used for archive pages
*/

function change_taxonomies_slug( $args, $taxonomy ) {

   /*item category*/
   if ( 'program-category' === $taxonomy ) {
      $args['rewrite']['slug'] = 'locations';
   }

   return $args;
}
add_filter( 'register_taxonomy_args', 'change_taxonomies_slug', 10, 2 );
