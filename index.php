<?php 

get_header();


while( have_posts() ){

	//global $post
	the_post(); // goi cai post object cua tung bai 1 trong list  bai 
?>
	
	<h1><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1>

	<div class="post">
		<?php the_content(); ?>
	</div>

<?php 
}


get_footer();