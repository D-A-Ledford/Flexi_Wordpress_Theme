<?php
/**
 * The page template file.
 *
 * @package flexi
 */

get_header('page');
?>
<div class="insideposts">

<div class="wrapper">
<div class="row">
		<div class="col-1-1"><div class="wrap-col test postcontent">
        
        <div id="content">       
<?php woocommerce_content(); ?>
        <br>
</div>
</div></div></div></div>
<?php get_footer();