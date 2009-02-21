<?php
/*
 *
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="/media/reset.css" />
<link rel="stylesheet" type="text/css" href="/media/styles.css" />
<link rel="stylesheet" type="text/css" href="/media/960.css" />
<link rel="stylesheet" type="text/css" href="/media/typography.css" />
<link rel="stylesheet" type="text/css" href="/media/kohana.css" />

<script type="text/javascript" src="/media/js/jquery-1.3.min.js"></script>

<link rel="stylesheet" type="text/css" href="/themes/views/default/styles.css" />

<title>Zeelot's Special Sandbox!</title>
</head>

<body>
    <div class="container_16" id="main_frame">
		<div class="grid_16">
			<?php echo notice::render(); ?>
		</div>
        <div class="grid_4">
			<?php echo widget::get('user_info'); ?>
			<p>
				<a href="http://validator.w3.org/check?uri=referer" class="noicon">
				<img
					src="http://www.w3.org/Icons/valid-xhtml10"
					alt="Valid XHTML 1.0 Transitional" />
				</a>
			</p>
			<p>
				<a href="http://jigsaw.w3.org/css-validator" class="noicon">
				<img
					src="http://jigsaw.w3.org/css-validator/images/vcss"
					alt="Valid CSS!" />
				</a>
			</p>
        </div>
        <div class="grid_12">
            <?php echo (isset($content))? $content : null; ?>
        </div>
		<div class="clear"></div>
    </div>
</body>
</html>