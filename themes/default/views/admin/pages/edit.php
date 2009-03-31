<div>
	<h1>Edit Page: <?php echo $page->name; ?></h1>
	<?php echo form::open(); ?>
	<fieldset>
		<input type="hidden" name="edit_content_page" value="TRUE" />
		<legend>Page Info</legend>
		<label for="page.name">
			Name: <input type="text" id="page.name" name="name" value="<?php echo $page->name; ?>" />
		</label>
		<label for="page.alias">
			Alias: <input type="text" id="page.alias" name="alias" value="<?php echo $page->alias; ?>" />
		</label>
		<button type="submit" name="save" value="save">Save</button>
	</fieldset>
	<?php echo form::close(); ?>
	<h2>Content Nodes</h2>
	<table class="admin">
		<tr>
			<th>Section</th>
			<th>Node</th>
			<th>Delete</th>
		</tr>
		<?php foreach($objects as $obj): ?>
		<tr>
			<td><?php echo $obj->content_section->name; ?></td>
			<td><?php echo $obj->content_node->name; ?> ( <?php echo $obj->content_node->alias; ?> )</td>
			<td><?php echo html::anchor('admin/pages/remove_node/'.$obj->id.'?height=200&width=300',
				html::image('media/images/fam_silk/bin.png', 'Remove'),
				array('class' => 'thickbox')); ?></td>
		</tr>
		<?php endforeach; ?>
		<tr>
			<th colspan="3"><?php echo html::anchor('admin/pages/add_node/'.$page->id.'?height=200&width=300',
				'Add a Node',
				array('class' => 'thickbox')); ?></th>
		</tr>
	</table>
</div>