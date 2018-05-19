<?php
/**
 * @var \App\View\AppView $this
 */
?>
<!-- ＋＋＋＋検索のトップ部分を非表示にします。＋＋＋＋
<div id="searchTop">
	<h2>あなたの「やりたい」がきっと見つかる</h2>
	<div id="searchTopMain">
		<div id="leftItem">
			<a href="#"><img src="img/btn_top01.png"></a>
		</div>
		<div id="rightItem">
			<a href="#"><img src="img/btn_top02.png"></a>
		</div>
	</div>
</div>
	＋＋＋＋＋＋　非表示END　＋＋＋＋＋＋ -->

<div class="searchContainer">
	<h3>ジャンルから探す</h3>
	<div class="clearfix">
<?php $cnt = 0; ?>
<?php foreach ($largeGenres as $largeGenre): ?>
		<div class="searchGenreBox">
			<div class="searchGenreBoxTop">
				<img src="img/pic_genre0<?= $cnt % 6 + 1; ?>.jpg">
				<div>
<?php foreach ($largeGenre['genres'] as $genre): ?>
					<p><?= $genre['genre_name']; ?></p>
<?php endforeach; ?>
				</div>
			</div>
			<p class="searchGenreBoxBottom"><?= $largeGenre['large_genre_name']; ?></p>
		</div>
<?php $cnt++;?>
<?php endforeach; ?>
	</div>

	<p class="searchBigLabel">または</p>

	<h3>フリーワードで探す</h3>



<?= $this->Form->create('name', ['name' => 'search', 'type' => 'post', 'url' => ['controller' => 'Providers', 'action' => 'search']]);?>
	
	<input type="text" name="freeword"><input type="submit">
	
<!-- ＋＋＋＋＋　エリア指定を非表示にします　＋＋＋＋＋
<div class="searchContainer">
	<h3>②エリアを指定する</h3>
	<select name="region">
		<option value="">地域</option>
<?php foreach ($datas['region'] as $data): ?>
	<option value="<?=$data;?>"><?=$data;?></option>
<?php endforeach; ?>
	</select>
	<select name="pref">
		<option value="">都道府県</option>
<?php foreach ($datas['pref'] as $data): ?>
	<option value="<?=$data;?>"><?=$this->User->getPrefName($data);?></option>
<?php endforeach; ?>
	</select>
	<select name="addr_1">
		<option value="">市区町村</option>
<?php foreach ($datas['addr_1'] as $data): ?>
	<option value="<?=$data;?>"><?=$data;?></option>
<?php endforeach; ?>
	</select>
</div>
	＋＋＋＋＋＋＋　非表示END　＋＋＋＋＋＋＋ -->

<!-- ＋＋＋＋＋　検索 大ボタンを非表示にします　＋＋＋＋＋
<div id="searchButtonArea">
	<input type="submit">
</div>
	＋＋＋＋＋＋＋　非表示END　＋＋＋＋＋＋＋ -->

<?= $this->Form->end();?>
</div>
