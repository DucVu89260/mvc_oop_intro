<h1>Update insert course</h1>
<form method="post" action="?action=update">
	<table>
		<input type="hidden" name="id" value="<?php echo $each->get_id() ?>"
		<tr>
			<td>Course name</td>
			<td><input type="text" name="name" value="<?php echo $each->get_name() ?>"></td>
		</tr>
		<tr>
			<td>Major</td>
			<td><input type="text" name="major" value="<?php echo $each->get_major() ?>"></td>
		</tr>
		<tr><td colspan="2">
			<button>Update</button>
		</td></tr>
	</table>
</form>