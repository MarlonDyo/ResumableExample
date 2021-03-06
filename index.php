<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="thirdparty/resumable.js/resumable.js"> </script>
	<script src="thirdparty/jquery-3.4.1.js"></script>
</head>
<body>
	<div class="row">
		<div class="large-12 columns">
			<p class="lead">Select files to upload</p>
			<button class="inverse small" id="browseButton">+ Add Files</button>
			<button class="danger small" id="uploadFiles">Start Upload</button>
			<div class="alert-box alert" data-nothingToUpload>Error Nothing To Upload, Please Add Some Files</div>
			<div id="dragHere" class="panel drop-zone">Drag &amp; Drop Here</div>
			<div id="results" class="panel"></div>Status:
			<div class="alert-box secondary"></div>
		</div>
	</div>
	<script src="script.js"> </script>
</body>
</html>