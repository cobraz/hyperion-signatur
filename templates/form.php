<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
	</head>
	<body>
		<form method="post">
			<b>Navn</b>:<br />
			<input type="text" name="name" /><br />
			<b>Stilling</b>:<br />
			<input type="text" name="position" /><br />
			<br />
			<br />
			<b>Telefon</b>:<br />
			<input type="text" name="telephone" /><br />
			<b>E-post</b>:<br />
			<input type="text" name="email" /><br />
			<b>Twitter</b>:<br />
			<input type="text" name="twitter" /><br />
			<br />
			<br /><b>Forening</b>:<br />
			<select name="config">
				<? foreach($configs as $filename => $config): ?>
				<option value="<?=$filename?>"><?=$config['name']?></option>
				<? endforeach; ?>
			</select><br /><br />
			<input type="submit" value="Få signatur!" /><br />
		</form>
	</body>
</html>