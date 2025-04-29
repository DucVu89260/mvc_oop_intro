<h1>Course List</h1>
<a href="?action=create">Add more course</a>
<table border="1" width="100%">
	<tr>
		<th>Id</th>
		<th>Course name</th>
		<th>Major</th>
		<th></th>
		<th></th>
	</tr>
	<?php foreach ($array as $each): ?>
	<tr>
		<td><?php echo $each->get_id() ?></td>
		<td><?php echo $each->get_name() ?></td>
		<td><?php echo $each->get_major() ?></td>
		<td>
			<a href="?action=edit&id=<?php echo $each->get_id() ?>">Edit</a>
		</td>
		<td>
			<a href="?action=delete&id=<?php echo $each->get_id() ?>">Delete</a>
		</td>
	</tr>
	<?php endforeach ?>
</table>