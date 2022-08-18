<?php
	if (SUPRA !== 1) die('not way!');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="pragma" content="no-cache">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,viewport-fit=cover">
	<title>Supra Pagebuilder</title>

	<link rel="icon" href="images/favicons/favicon.png" type="image/x-icon"/>
	<link rel="apple-touch-icon" href="images/favicons/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/favicons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/favicons/apple-touch-icon-114x114.png">

	<link rel="stylesheet" href="css/lib/bootstrap.min.css" />
    <link rel="stylesheet" href="css/lib/fx.css" />
	<link rel="stylesheet" href="css/lib/spectrum.css" />
	<link rel="stylesheet" href="css/lib/codemirror.css" />
    <link rel="stylesheet" href="css/fonts.css" />
	<link rel="stylesheet" href="css/main.css" />
	<link rel="stylesheet" href="css/preloader.css" />
</head>
<body class="first-show">
<script src="js/lib/jquery-2.1.4.min.js"></script>
<style id="builder-style"></style>
<div class="supra-preloader">
	<img src="images/logo.png" srcset="images/logo@2x.png 2x" alt="suprapagebuilder"/>
	<div class="progress-bar-s">
		<div class="progress"><div class="load"></div></div>
	</div>
	<div class="rights">
		<p>&#169; 2018 <a href="http://multifour.com/" target="_blank">Multifour.com</a><br/>SUPRA 5.2.1</p>
	</div>
</div>
<aside class="left supra black"></aside>
<aside class="control-panel supra black">
	<div class="title d-flex justify-content-between align-items-center">
		<h3>Sections</h3>
		<i class="supra bookmark"></i>
	</div>
	<ul class="sections">
		<?php
			foreach ($this->groups as $group_name => $value) {
				echo "<li data-group=\"$group_name\">"
				     .$value['name'].
				     "</li>";
			}
		?>
	</ul>
</aside>
<div id="modal-thumb" class="supra">
    <div class="title">Page modals</div>
    <div class="container-thumb"></div>
</div>
<div class="wrap-iframe d-flex justify-content-center align-items-center">
	<div class="wrap viewing-desctop">
		<label>
			<span class="width" contenteditable="true"></span> x <span class="height" contenteditable="true"></span>
			<i class="rotate icon-blr-lg-mobile"></i>
		</label>
        <iframe id="main" src="./main.html"></iframe>
	</div>
</div>
<div id="modal-container" class="supra"></div>
<div id="modal-project-container" class="supra"></div>
<div id="modal-form-container" class="supra font-style-supra"></div>

<script>
	<?php
    //TODO: this need for limiting the output of PHP's echo
    if (count($this->groups) > 10) {
        $part1 = array_slice($this->groups, 0, 10);
        $part2 = array_slice($this->groups, 10, count($this->groups));
        echo "sectionsPreview=".json_encode($part1).";\n";
        echo "sectionsPreview1=".json_encode($part2).";\n";
        echo "sectionsPreview = Object.assign(sectionsPreview, sectionsPreview1);\n";
    } else {
        echo "sectionsPreview=".json_encode($this->groups).";\n";
    }
	echo "typographyFonts=".json_encode($this->fontsDropdown).";\n";
    echo "overAllJs=".json_encode($this->overAllJs).";\n";
	?>
</script>
<script src="js/lib/popper.min.js"></script>
<script src="js/lib/jquery.nicescroll.min.js"></script>

<script src="js/lib/tether.min.js"></script>
<script src="js/lib/bootstrap.min.js"></script>
<script src="js/lib/spectrum.js"></script>

<script src="js/lib/codemirror.js"></script>
<script src="js/lib/javascript.js"></script>
<script src="js/lib/css.js"></script>
<script src="js/lib/htmlmixed.js"></script>
<script src="js/lib/xml.js"></script>

<script src="js/options.js"></script>
<script src="js/download.js"></script>
<script src="js/builder.min.js"></script>
</body>
</html>