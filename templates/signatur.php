<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
	</head>
	<body>
<style>
@import url(http://fonts.googleapis.com/css?family=Roboto:400,700);
.name {
	font-family: 'Roboto', arial, sans-serif;
	font-weight: bold;
	font-size: 15px;

	color: #7f7e7e;
	line-height: 20px;
	letter-spacing: 1px;
}
.position {
	font-family: 'Roboto', arial, sans-serif;
	font-weight: bold;
	font-size: 12px;

	color: #6d1243;
}
.contact-details {
	margin-top: 18px;

	font-family: 'Roboto', arial, sans-serif;
	font-weight: normal;
	font-size: 12px;

	color: #6d1243;
}
.contact-details td {
	padding-right: 30px;
}
.contact-details .icon {
	margin-right: 15px;
	margin-bottom: -2px;
}

.company-details {
	width: 520px;
	margin-top: 10px;
	background: #6d1243;

	font-family: 'Roboto', arial, sans-serif;
	font-weight: normal;
	font-size: 11px;
	color: #FFFFFF;
}
.company-details .logoDetails {
	width: 173px;
	padding: 15px;
	padding-left: 15px;
	padding-right: 10px;

	position: relative;
}
.company-details .details {
	padding-top: 15px;
	padding-right: 15px;
	padding-bottom: 10px;
}
.company-contact-details {
	font-family: 'Roboto', arial, sans-serif;
	font-weight: normal;
	font-size: 12px;
	color: #FFFFFF;	
	margin-top: 2px;
}
.company-contact-details td {
	padding-right: 20px;
}
.company-contact-details .icon {
	margin-right: 5px;
	margin-bottom: -2px;
}
.company-social {
	width: 102px;
	position: absolute;
	bottom: -15px;
}

</style>
<div class="name"><?= $_POST['name']; ?></div>
<div class="position"><?= $_POST['position']; ?></div>
<table class="contact-details">
	<tr>
		<td>
			<img class="icon" src="assets/phone-colored.png" alt="" />
			<?= $_POST['telephone']; ?>
		</td>
		<td>
			<img class="icon" src="assets/envelope-colored.png" alt="" />
			<?= $_POST['email']; ?>
		</td>
		<? if(!empty($_POST['twitter'])): ?>
		<td>
			<img class="icon" src="assets/twitter-colored.png" alt="" />
			@<?= $_POST['twitter']; ?>
		</td>
		<? endif; ?>
	</tr>
</table>
<table class="company-details">
	<tr>
		<td class="logoDetails" valign="top">
			<img class="logo" src="assets/logo.png" alt="" />
			<table class="company-social">
				<tr>
					<td>
						<a href="<?= $config['twitter'] ?>">
							<img class="rounded" src="assets/twitter-rounded.png" alt="" />
						</a>
					</td>
					<td>
						<a href="<?= $config['facebook'] ?>">
							<img class="rounded" src="assets/facebook-rounded.png" alt="" />
						</a>
					</td>
					<td>
						<a href="<?= $config['gplus'] ?>">
							<img class="rounded" src="assets/gplus-rounded.png" alt="" />
						</a>
					</td>
					<td>
						<a href="<?= $config['youtube'] ?>">
							<img class="rounded" src="assets/youtube-rounded.png" alt="" />
						</a>
					</td>
				</tr>
			</table>
		</td>
		<td class="details" valign="top">
			<b><?= $config['name'] ?></b><br />
			<?= $config['adress'] ?>
			<table class="company-contact-details">
				<tr>
					<td>
						<img class="icon" src="assets/phone-white.png" alt="" />
						<?= $config['telephone'] ?>
					</td>
					<td>
						<img class="icon" src="assets/envelope-white.png" alt="" />
						<?= $config['email'] ?>
					</td>
					<td>
						<img class="icon" src="assets/earth-white.png" alt="" />
						<?= $config['web'] ?>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
</body>
</html>