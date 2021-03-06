
<div id="footer">
	<div class="wrapper">
        <div class="container"
		<div class="row">

			<?php
			global $wp_customize;
			if ( !empty( $wp_customize ) && $wp_customize->is_preview() && !get_theme_mod( 'flexi_content_set', false ) ) {
				the_widget(
					'WP_Widget_Text', array(
						'title' => 'TEXT WIDGET',
						'text'  => 'Lorem ipsum dolor sit amet, <a href="#">consectetur adipiscing elit</a>. Etiam aliquam, risus non vehicula vestibulum, purus tortor tempor mauris, consectetur semper tortor dolor sed mauris. Morbi nunc ipsum' ),
					array(
						'before_widget' => '<div class="col-1-4"><div class="wrap-col"><div class="footerwidget">',
						'after_widget'  => '</div></div></div>',
						'before_title'  => '<h6 class="widget-title">',
						'after_title'   => '</h6>',
					) );

				the_widget(
					'WP_Widget_Text', array(
						'title' => 'TEXT WIDGET',
						'text'  => 'Lorem ipsum dolor sit amet, <a href="#">consectetur adipiscing elit</a>. Etiam aliquam, risus non vehicula vestibulum, purus tortor tempor mauris, consectetur semper tortor dolor sed mauris. Morbi nunc ipsum' ),
					array(
						'before_widget' => '<div class="col-1-4"><div class="wrap-col"><div class="footerwidget">',
						'after_widget'  => '</div></div></div>',
						'before_title'  => '<h6 class="widget-title">',
						'after_title'   => '</h6>',
					) );
				the_widget(
					'WP_Widget_Text', array(
						'title' => 'TEXT WIDGET',
						'text'  => 'Lorem ipsum dolor sit amet, <a href="#">consectetur adipiscing elit</a>. Etiam aliquam, risus non vehicula vestibulum, purus tortor tempor mauris, consectetur semper tortor dolor sed mauris. Morbi nunc ipsum' ),
					array(
						'before_widget' => '<div class="col-1-4"><div class="wrap-col"><div class="footerwidget">',
						'after_widget'  => '</div></div></div>',
						'before_title'  => '<h6 class="widget-title">',
						'after_title'   => '</h6>',
					) );

				the_widget(
					'WP_Widget_Text', array(
						'title' => 'TEXT WIDGET',
						'text'  => 'Lorem ipsum dolor sit amet, <a href="#">consectetur adipiscing elit</a>. Etiam aliquam, risus non vehicula vestibulum, purus tortor tempor mauris, consectetur semper tortor dolor sed mauris. Morbi nunc ipsum' ),
					array(
						'before_widget' => '<div class="col-1-4"><div class="wrap-col"><div class="footerwidget">',
						'after_widget'  => '</div></div></div>',
						'before_title'  => '<h6 class="widget-title">',
						'after_title'   => '</h6>',
					) );
			} else if ( is_active_sidebar( 'flexi-footer' ) ) {
				dynamic_sidebar( 'flexi-footer' );
			}
			?>
		</div>

	</div>



<div id="bottom">
	<div class="wrapper">
		<?php
		$flexi_display_footer_logo = get_theme_mod( 'flexi_footer_logo_show', 'no' );
		if ( $flexi_display_footer_logo === 'yes' ) {
			echo '<a href="' . home_url() . '"><img src="' . esc_url( get_theme_mod( 'flexi_footer_logo_image' ) ) . '" class="bottomlogo"></a>';
			echo '<span class="bottomlogo" style="display: none;">&nbsp;</span>';
		} else {
			echo '<a href="' . home_url() . '" style="display: none;"><img src="' . esc_url( get_theme_mod( 'flexi_footer_logo_image' ) ) . '" class="bottomlogo"></a>';
			echo '<span class="bottomlogo">&nbsp;</span>';
		}
		?>
		<p class="bottomtext">
			&copy; <?php bloginfo( 'name' ); ?> <?php echo date( 'Y' ); ?> 
		</p>
	</div>
	<!-- End wrapper -->
</div>
</div>
</div>
<?php wp_footer() ?>
</body>
</html>