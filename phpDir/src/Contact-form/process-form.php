<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Submission Result</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="styleProcess.css">
</head>
<body>
<?php include "../header.php"?>
	<div class="container">
		<h1>Form Submission Results</h1>
		<div class="result">
			<h2>Name:</h2>
			<p><?php echo htmlspecialchars($_POST['name']); ?></p>
			<h2>Email:</h2>
			<p><?php echo htmlspecialchars($_POST['email']); ?></p>
			<h2>Subject:</h2>
			<p><?php echo htmlspecialchars($_POST['subject']); ?></p>
			<h2>Message:</h2>
			<p><?php echo htmlspecialchars($_POST['message']); ?></p>
		</div>
	</div>
	<footer>Team Cyber Dogs 2023 &copy;</footer>
</body>
</html>
