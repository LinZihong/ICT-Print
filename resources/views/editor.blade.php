<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/styles/simditor.css" />
	<script type="text/javascript" src="/scripts/jquery.min.js"></script>
	<script type="text/javascript" src="/scripts/module.js"></script>
	<script type="text/javascript" src="/scripts/hotkeys.js"></script>
	<script type="text/javascript" src="/scripts/uploader.js"></script>
	<script type="text/javascript" src="/scripts/simditor.js"></script>

</head>

<body>
	<h1>Simditor Quick Start Guide</h1>
	<form method="post" action="/outputPDF">
		<textarea name="html" id="editor" placeholder="Balabala" autofocus></textarea>
		<input type="submit" value="Submit">
	</form>
	<script>
	var editor = new Simditor({
		textarea: $('#editor')
		//optional options
	});
	</script>
</body>
</html>
