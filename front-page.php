<?php
get_header();
?>


    <div id="main-banner">
    <object type="application/x-shockwave-flash" data="<?php echo get_template_directory_uri()?>/res/head_6.swf"
            width="100%" height="100%">
        <param name="movie" value="<?php echo get_template_directory_uri()?>/res/head_6.swf" />
        <param name="wmode" value="transparent" />
    </object>
</div>


	<a href="<?php hd()?>menu1"><img src="<?php echo get_template_directory_uri()?>/img/content-1.png" ></a>
    <a href="<?php hd()?>menu2"><img src="<?php echo get_template_directory_uri()?>/img/content-2.png" ></a>
    <a href="<?php hd()?>menu3"><img src="<?php echo get_template_directory_uri()?>/img/content-3.png" ></a>


<?php
get_footer();
