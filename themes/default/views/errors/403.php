<?php
/**
 * Custom Error 403 - Forbidden
 */
?>
<div>
	<h1 class="error">Forbidden!</h1>
	<p>You do not have access to this page.</p>
	<?php Event::run('yuriko.403_error_view'); ?>
</div>
