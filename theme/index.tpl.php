<!doctype html>
<html lang='<?=$lang?>'>
<head>
	<meta charset='utf-8'/>
	<title><?=get_title($title)?></title>
	<?php if(isset($favicon)): ?><link rel='shortcut icon' href='<?=$favicon?>'/><?php endif; ?>
	<link rel='stylesheet' type='text/css' href='<?=$stylesheet?>'/>
	<?php if(isset($stylesheets)): ?>
	<?php foreach($stylesheets as $val): ?>
	<link rel='stylesheet' type='text/css' href='<?=$val?>'/>
	<?php endforeach; ?>
	<?php endif; ?>
</head>
<body>
	<div id='header'><?=$header?>
		<div class='container'><?=$navmenu?></div>
	</div>
	<div id='main'><?=$main?></div>
	<div id='footer'><?=$footer?></div>
</div>
</body>
</html>