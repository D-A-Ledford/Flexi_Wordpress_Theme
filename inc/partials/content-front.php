<?php
/**
 * @package flexi
 */
?>
<div class="row">
		<div class="col-1-1"><div class="wrap-col test postcontent">
        
       <?php the_post_thumbnail( 'flexi-frontpage-blog' ); ?>
        <div id="content">


<h1 class="postcontenttitle"><?php the_title() ?></h1>
        
<?php
		the_content();
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'flexi' ),
			'after'  => '</div>',
		) );
		
		edit_post_link( __( 'Edit', 'flexi' ), '<span class="edit-link">', '</span>' );
		?>
        <br>
     
</div>

</div>
</div></div>