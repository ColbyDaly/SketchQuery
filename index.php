<!DOCTYPE html>
<html>
<head>
	<title>SketchQuery | Home</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway" rel="stylesheet">

	<style type="text/css">
		body {
			background-image: url('img/backdrop.jpg');
			background-size: cover;
			background-repeat: no-repeat;
		}

		* {
			color: #fff;
			font-family: 'Raleway', sans-serif;
		}

		h1 {
			font-family: 'Open Sans', sans-serif;
			font-size: 4.5em;
			margin-top: 100px;
		}

		h1, h2, p {
			text-align: center;
		}

		.sidebar {
			position: absolute;
			left: 0;
			width: 100%;
			top: 0;
			height: 100%;
			background-color: rgba(0, 0, 0, .75);
		}

		.float-text {
			margin-top: 200px;
			padding: 50px;
		}

		button {
			margin-top: 100px;
			height: 45px;
			width: 115px;
			border: 1px solid #fff;
			background-color: rgba(0, 0, 0, .3);
			border-radius: 15px;
			cursor: pointer;
			text-transform: uppercase;
			font-size: 1.1em;
			margin-left: 45%;
		}

		button:hover {
			background-color: rgba(255, 255, 255, .8);
			color: #000;
		}

		nav {
			text-align: center;
			word-spacing: 60px;
			letter-spacing: 10px;
			position: absolute;
			bottom: 0;
			width: 100%;
			height: 50px;
			left: 0;
		}

		a {
			text-decoration: none;
		}

		nav a {
			text-decoration: none;
			text-transform: capitalize;
			font-size: 1.1em;
		}
	</style>
</head>
<body>

<div class="sidebar">
		<a href="index.php"><h1>Welcome</h1></a>
		<h2>Get started and create your site today</h2>
		<p>100% free and always will be</p>

		<a href="tutorial.php"><button>create</button></a>
</div>
<nav>
	<a href="index.php">home</a>
	<a href="about.php">about</a>
	<a href="contact.php">contact</a>
	<a href="create.php">tutorials</a>
	<a href="https://bitbucket.org/KeysJ/site_sketchquery">code</a>
</nav>
</body>
</html>