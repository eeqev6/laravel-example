<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:50px;
			font-family:'Lato', sans-serif;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	</style>
</head>
<body>
  <h1>Welcome</h1>
  <p>This is an example Laravel application. It doesn't do much but it returns a list of randoms from a database. Here's that list...</p>
  <ul>
    <? foreach ($users as $user) { ?>
    <li><?=$user->name?></li>
    <? } ?>
  </ul>
</body>
</html>
