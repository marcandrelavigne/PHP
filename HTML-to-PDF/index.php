<html>
	<body>
		<h1>Generate a PDF with the Textarea value</h1>
		<form action="generate.php" method="post">
			<textarea name="content" id="content"><div style="background:yellow; padding: 20px;"><h1>HelloWorld</h1><b style="color: blue;">This is my first test.</b></div></textarea>
			<button>Generate PDF</button>
		</form>

		<style>
			textarea {
				display: block;
				width: 400px;
				height: 100px;
				margin-bottom: 10px;
				padding: 10px;
			}
			button {
				border: none;
				background: blue;
				color: white;
				padding: 10px 20px;
			}
		</style>
	</body>
</html>