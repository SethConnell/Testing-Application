<!DOCTYPE html>
<html>
<head>
<title>Title of the document</title>
<style>
	img {
		margin: auto;
	}
			input {
			color: black;
		}
	*{
		text-align: center;
		color: white;
	}
	.searchbox {
		margin: auto;
		margin-bottom: 20px;
		height: 20px;
		border-radius: 15px;
		border-width: 1px 1px 1px 1px;
		text-align: center;
		outline: none;
		color: #4CC2EF;
		}
	html {
		height: 100%
	}
	option {
		color: black;
	}

	body {
		width: 100%;
		height: 100%;
		background-color: #25AADF;
	}

	.message {
		text-align: center;
		font-family: 'Josefin Sans', sans-serif;
		font-size: 40px;
		color: white;
	}

	.boxy {
		width: 35%;
		margin: auto;
		background-color: #4CC2EF;
		-webkit-box-shadow: 0px 0px 25px 6px rgba(26,128,173,0.66);
		-moz-box-shadow: 0px 0px 25px 6px rgba(26,128,173,0.66);
		box-shadow: 0px 0px 25px 6px rgba(26,128,173,0.66);
	}
	.results {
		width: 100%;
		margin: auto;
		background-color: white;
		color: #4CC2EF;
	}

	.searchbutton, input[type=submit] {
		width: 100px;
		display: flex-box;
		text-align: center;
		margin-bottom: 20px;
		color: #4CC2EF;
		background-color: white;
		border-style: solid;
		border-width: 2px 2px 2px 2px;
		height: 45px;
		line-height: 40px;
		margin-top: 25px;
	}
	
	.name {
		transition-duration: 1.5s;
		width: 200px;
		display: flex-box;
		text-align: center;
		margin-bottom: 20px;
		color: #4CC2EF;
		background-color: white;
		border-style: solid;
		border-width: 2px 2px 2px 2px;
		height: 40px;
		line-height: 40px;
		margin-top: 25px;
		font-size: 20px;
	}
		.name:focus {
			transition-duration: 1.5s;
			border-radius: 35px;
			outline:none;
		}
	
	.searchbutton, input[type=submit] {
		border-color: white;
		background-color: white;
		color: #4CC2EF;
		transition-duration: 1.5s;
		font-size: 20px;
	}

		

	.searchbutton:hover, input[type=submit]:hover {
		border-radius: 15px;
		transition-duration: 1.5s;
	}

	.catagory {
		font-size: 30px;
		font-family: sans-serif;
	}

	.value {
		font-size: 15px;
		font-family: sans-serif;
	}
		
	.error {
		color: red;
		font-size: 100px;
		font-family: cursive;
		text-align: center;
	}
		
	a {
		text-decoration: none;
	}
		
</style>
</head>

<body>
<img src="pictures/sad.png" alt="Smiley face" height="200" width="200">
<h1 class = "message">There has been an error!</h1>
<div class = 'boxy' style = 'height: 100px'><a href = 'home.php'><h3 style = 'line-height: 100px; font-size: 40px; text-align: center;'>Go Back to Safety</h3></a></div>
</body>

</html>