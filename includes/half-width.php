<?php 


$bgImage = (get_sub_field('bg_image') != '' ? ' style="background:url(' . get_sub_field('bg_image') . ') no-repeat center center; background-size:cover;"' : '');
$bgColor = (get_sub_field('bg_color') != '' ? ' style="background:' . get_sub_field('bg_color') . '";' : '');
$content = get_sub_field('content');


?>


<section class="half-section">
	<div class="half-image"<?php echo $bgImage; ?>>
	</div>
	<div class="half-content container"<?php echo $bgColor; ?>>
		<div class="row">
			<div class="head col-md-12<?php echo $textCenter; ?>">
				<?php echo $content; ?>
			</div>
		</div>
	</div>
</section>