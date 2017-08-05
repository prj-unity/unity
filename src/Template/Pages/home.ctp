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
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')):
    throw new NotFoundException('Please replace src/Template/Pages/home.ctp with your own version.');
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
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
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
</head>
<body class="home">

<div id="header" class="clearfix">
	<div id="headerLeft">
		<h1>お仕事マッチングサイト｜Unity</h1>
		<img id="headerLogo" src="img/img_logo01.png">
	</div>
	<div id="headerRight">
		<ul>
			<li><a href="#">マイページ</a></li>
			<li><a href="#">Unityについて</a></li>
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
	<div id="searchTop">
		<h2>あなたの「やりたい」がきっと見つかる</h2>
		<div id="searchTopMain">
			<div id="item1">
				<a href="#"><img src="img/btn_top01.png"></a>
			</div>
			<div id="item2">
				<a href="#"><img src="img/btn_top02.png"></a>
			</div>
		</div>
	</div>
	
	<div class="searchContainer">
		<h3>①ジャンルから探す</h3>
		<div class="clearfix">
			<div class="searchGenreBox">
				<div class="searchGenreBoxTop">
					<img src="">
					<div>
						<p>ジャンル</p>
						<p>ジャンル</p>
						<p>ジャンル</p>
						<p>ジャンル</p>
						<p>ジャンル</p>
					</div>
				</div>
				<div class="searchGenreBoxBottom">
					<p>大分類名</p>
				</div>
			</div>
			<div class="searchGenreBox">
				<div class="searchGenreBoxTop">
					<img src="">
					<div>
						<p>ジャンル</p>
						<p>ジャンル</p>
						<p>ジャンル</p>
						<p>ジャンル</p>
						<p>ジャンル</p>
					</div>
				</div>
				<div class="searchGenreBoxBottom">
					<p>大分類名</p>
				</div>
			</div>
			<div class="searchGenreBox">
				<div class="searchGenreBoxTop">
					<img src="">
					<div>
						<p>ジャンル</p>
						<p>ジャンル</p>
						<p>ジャンル</p>
						<p>ジャンル</p>
						<p>ジャンル</p>
					</div>
				</div>
				<div class="searchGenreBoxBottom">
					<p>大分類名</p>
				</div>
			</div>
			<div class="searchGenreBox">
				<div class="searchGenreBoxTop">
					<img src="">
					<div>
						<p>ジャンル</p>
						<p>ジャンル</p>
						<p>ジャンル</p>
						<p>ジャンル</p>
						<p>ジャンル</p>
					</div>
				</div>
				<div class="searchGenreBoxBottom">
					<p>大分類名</p>
				</div>
			</div>
			<div class="searchGenreBox">
				<div class="searchGenreBoxTop">
					<img src="">
					<div>
						<p>ジャンル</p>
						<p>ジャンル</p>
						<p>ジャンル</p>
						<p>ジャンル</p>
						<p>ジャンル</p>
					</div>
				</div>
				<div class="searchGenreBoxBottom">
					<p>大分類名</p>
				</div>
			</div>
			<div class="searchGenreBox">
				<div class="searchGenreBoxTop">
					<img src="">
					<div>
						<p>ジャンル</p>
						<p>ジャンル</p>
						<p>ジャンル</p>
						<p>ジャンル</p>
						<p>ジャンル</p>
					</div>
				</div>
				<div class="searchGenreBoxBottom">
					<p>大分類名</p>
				</div>
			</div>
		</div>
		
		
		<p class="searchBigLabel">または</p>
	
		<h3>①フリーワードで探す</h3>
		<input type="text">
	
	</div>
	
	<div class="searchContainer">
		<h3>②エリアを指定する</h3>
		<select>
			<option>地域</option>
		</select>
		<select>
			<option>都道府県</option>
		</select>
		<select>
			<option>市区町村</option>
		</select>
	</div>
	
	<div id="searchButtonArea">
		<input type="submit">
	</div>
	
</div>

</body>
</html>
