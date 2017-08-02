<?php // Text Box

$bgImage = (get_sub_field('bg_image') != '' ? ' style="background:url(' . get_sub_field('bg_image') . ') no-repeat center center; background-size:cover;"' : '');
$bgColor = (get_sub_field('bg_color') != '' ? ' style="background:' . get_sub_field('bg_color') . '";' : '');
$textCenter = (get_sub_field('text_center') == true ? ' text-center' : '');
$padClass = (get_sub_field('padding_class') != '' ? ' ' . get_sub_field('padding_class') : '');
$content = get_sub_field('text_area');
$full = (get_sub_field('full_width') == true ? '-fluid' : '');

?>

<?php if (empty($bgImage) && empty($bgColor)): ?>

	<section class="text-box<?php echo $padClass; ?>">
		<div class="container<?php echo $full; ?>">
			<div class="row">
				<div class="col-md-12<?php echo $textCenter; ?>">
					<?php echo $content; ?>
				</div>
			</div>
		</div>
	</section>

<?php elseif (empty($bgImage) && !empty($bgColor)): ?>

	<section class="text-box colored-bg<?php echo $padClass; ?>"<?php echo $bgColor; ?>>
		<div class="container<?php echo $full; ?>">
			<div class="row">
				<div class="col-md-12<?php echo $textCenter; ?>">
					<?php echo $content; ?>
				</div>
			</div>
		</div>
	</section>

<?php else: ?>

	<section class="text-box text-box-overlay<?php echo $padClass; ?> page-id-<?php the_ID(); ?>"<?php echo $bgImage; ?>>
		<div class="container<?php echo $full; ?>">
			<div class="row absolute-positioned">
				<div class="col-md-12<?php echo $textCenter; ?>">
					<?php echo $content; ?>
				</div>
			</div>
		</div>
	</section>

<?php endif; ?>