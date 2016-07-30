<!DOCTYPE html>
<html>
<head>
	<title>OOClan Events</title>
</head>
<body>
	<div class='sidebar'>
		<!-- ooclan icon -->
		<img class='sidebar-icon' src='image/iconwithname_white.png' height=9% />
		<div class='seperation-line'></div>
		<a class='sidebar-link' href=''>Upcoming events</a>
		<a class='sidebar-link' href=''>Request an event</a>
		<div class='login-container'></div>
		<div class='seperation-line' style='background: #7289DA !important; bottom: 3em;'></div>
		<div class='credit-container'>

			<img src='image/discordlogo_white.png' height=85% style='margin-top: 0.25em;' />
		</div>
	</div>
	<div class='pagecontent'></div>
</body>
</html>

<style>
	@font-face { font-family: Whitney Bold; src: url(font/whitney-bold.ttf); }

	html, body { margin: 0; padding: 0; width: 100%; height: 100%; font-family: Whitney Bold; }

	.sidebar {
		width: 20%;
		height: 100%;

		display: inline-block;
		position: relative;

		float: left;

		background: #7289DA;
	}

	.sidebar-icon {
		display: block;

		margin-top: 1em;
		margin-left: auto;
		margin-right: auto;
		margin-bottom: 1em;
	}

	.seperation-line {
		position: absolute;

		width: 100%;
		height: 5px;

		background: #51619A;
	}

	.sidebar-link {
		display: inline-block;

		width: 100%;
		height: 3.6em;

		text-align: center;
		text-transform: uppercase;
		line-height: 3.6em;

		margin-top: 2em;

		background: #51619A;
	}

	.sidebar-link:hover {
		/*box-shadow: inset 0 0 5px #2C2F33;*/
		background: #2C2F33;
	}

	.login-container {
		position: absolute;

		bottom: calc(3em + 5px);

		width: 100%;
		height: 12em;

		background: #51619A;
	}

	.credit-container {
		position: absolute;

		bottom: 0;

		width: 100%;
		height: 3em;

		text-align: center;

		background: #51619A;
	}

	.pagecontent {
		width: 80%;
		height: 100%;

		display: inline-block;
		position: relative;

		float: right;

		background: #2C2F33;
	}

	a {
		color: #fff;
		text-decoration: none;
	}

	a:visited {
		color: #fff;
		text-decoration: none;
	}
</style>