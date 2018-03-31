<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
	<?= $this->Html->charset() ?>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="Content-Style-Type" content="text/css" />
	<meta http-equiv="Content-Script-Type" content="text/javascript" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		UNITY
	</title>

	<?= $this->Html->meta('icon') ?>
	<?= $this->Html->css('reset.css') ?>
	<?= $this->Html->css('common.css') ?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
</head>
<body class="home">

<div id="header" class="clearfix">
	<div id="headerLeft">
		<h1>お仕事マッチングサイト｜Unity</h1>
		<a href="/unity/"><img id="headerLogo" src="<?=$this->Url->build('/');?>img/img_logo01.png"></a>
	</div>
	<div id="headerRight">
		<ul>
			<li><a href="#">マイページ</a></li>
			<li><a href="#">Unityについて</a></li>
			<li>
				<?= $this->Form->create('name', ['name' => 'form', 'type' => 'post', 'url' => ['controller' => 'users', 'action' => 'logout']]);?>
				<a href="#" onclick="document.form.submit()">ログアウト</a>
				<?= $this->Form->end();?>
			</li>
		</ul>
		<form id="headerSearch">
			<input class="textbox" type="text"><span>×</span><input class="textbox" type="text"><input class="button" type="submit">
		</form>
	</div>
</div><!-- END header -->
<div id="gMenu">
	<ul>
		<li><a href="#">Menu</a></li>
		<li><a href="#">Menu</a></li>
		<li><a href="#">Menu</a></li>
		<li><a href="#">Menu</a></li>
		<li><a href="#">Menu</a></li>
	</ul>
</div>
<div id="contentWrapper">
	<?= $this->fetch('content') ?>
</div>

<div id="footer">
    <p>Copyright(c) 2017 Unity. All Rights Reserved.</p>
</div>

</body>
</html>
