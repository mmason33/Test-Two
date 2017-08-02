<?php 

$bgImage = get_field('bg_image');
$bgPosition = get_field('bg_position');
$textCenter = (get_field('text_center') == true ? ' text-center' : '');
$content = get_field('content');
$half = get_field('half');
$bgColor = (get_field('bg_color') != '' ? ' style="background-color:' . get_field('bg_color') . ';"' : '');

?>

<?php if ($half == true): ?>

<section class="hero half-n-half">
	<div class="hero-image" style="background: url(<?php echo $bgImage; ?>)no-repeat <?php echo $bgPosition; ?>;background-size: cover;">
	</div>
	<div class="hero-content container"<?php echo $bgColor; ?>>
		<div class="row">
			<div class="head col-md-12<?php echo $textCenter; ?>">
				<?php echo $content; ?>
			</div>
		</div>
	</div>
</section>

<?php else: ?>

<section class="hero" style="background: url(<?php echo $bgImage; ?>)no-repeat <?php echo $bgPosition; ?>;background-size: cover;">

	<div class="hero-content container">
		<div class="row">
			<div class="head col-md-12<?php echo $textCenter; ?>">
				<?php echo $content; ?>
			</div>
		</div>
	</div>
</section>

<?php endif; ?>
