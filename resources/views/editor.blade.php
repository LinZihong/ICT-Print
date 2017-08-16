<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="/styles/simditor.css" />
	<script type="text/javascript" src="/scripts/jquery.min.js"></script>
	<script type="text/javascript" src="/scripts/module.js"></script>
	<script type="text/javascript" src="/scripts/hotkeys.js"></script>
	<script type="text/javascript" src="/scripts/uploader.js"></script>
	<script type="text/javascript" src="/scripts/simditor.js"></script>
	<link type="text/css" rel="stylesheet" href="//cdn.bootcss.com/materialize/0.98.0/css/materialize.min.css"
		  media="screen,projection"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<style>
		#T
		{
			font-size:36px
		}
	</style>
</head>


<body>
	<nav class="top-nav">
		<div class="container">
			<div class="nav-wrapper">
				<a class="page-title col-offset-1" id="T" >
					小抄机
				</a>
			</div>
		</div>
	</nav>
	<form method="post" action="/outputPDF">
		<textarea name="html" id="editor" placeholder="客官，今天考什么？打小抄吗？" autofocus></textarea>
		<br>
		<div class="container" align="center">
			<button class="waves-effect waves-light btn" type="submit" name="action">
				Submit
				<i class="material-icons right">send</i>
			</button>
		</div>
	</form>
	<script>
	var editor = new Simditor({
		textarea: $('#editor')
		//optional options
	});
	</script>
</body>
</html>
