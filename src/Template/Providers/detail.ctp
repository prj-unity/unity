<?php
/**
  * @var \App\View\AppView $this
  */
?>
	<a href="<?= $this->Url->build(['controller' => 'Providers', 'action' => 'index']);?>">トップ</a> ＞
	<a href="<?= $this->Url->build(['controller' => 'Providers', 'action' => 'index']);?>">ジャンル</a> ＞
	<a href="<?= $this->Url->build(['controller' => 'Providers', 'action' => 'index']);?>">エリア</a> ＞
	<a href="#"><?=$provider['username'];?></a>
	<div class="resultBox companyBox noBorder clearfix">
		<div>
			<img src="img/company001.jpg">
		</div>
		<div class="resultBoxCenter">
			<p class="cPhrase"><?=$provider['catchphrase'];?></p>
			<p class="cpName"><?=$provider['username'];?></p>
			<p>ジャンル<span>小ジャンル</span><span>小ジャンル</span><span>小ジャンル</span></p>
			<p>商圏エリア<span>エリア</span><span>エリア</span><span>エリア</span></p>
		</div>
		<div class="resultBoxRight">
			<input type="button" value="問い合わせる">
			<input type="button" value="選択して検索結果に戻る">
		</div>
	</div>
	<div class="companyContainer clearfix">
		<h2>プロフィール</h2>
		<p class="companyText"><?=$provider['profile1'];?></p>
		<img src="/image/" class="companyImage">
	</div>
	<div class="companyContainer clearfix">
		<h2>弊社の強み</h2>
		<div class="clearfix">
			<div class="companyStrongContainer">
				<div class="n1"><h3>キャッチフレーズ１</h3></div>
				<p>TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT</p>
			</div>
			<div class="companyStrongContainer">
				<div class="n2"><h3>キャッチフレーズ２</h3></div>
				<p>TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT</p>
			</div>
		</div>
		<div class="clearfix">
			<div class="companyStrongContainer">
				<div class="n3"><h3>キャッチフレーズ３</h3></div>
				<p>TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT</p>
			</div>
			<div class="companyStrongContainer">
				<div class="n4"><h3>キャッチフレーズ４</h3></div>
				<p>TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT</p>
			</div>
		</div>
	</div>
	<div class="companyContainer clearfix">
		<h2>事例紹介</h2>
		<p class="companyText">TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT </p>
		<img src="/image/" class="companyImage">
	</div>
	<div class="companyButtonArea">
		<input type="button" value="問い合わせる">
		<input type="button" value="選択して検索結果に戻る">
	</div>
	<div class="companyContainer clearfix">
		<h2>基本情報</h2>
		<table>
			<tr>
				<th>企業名</th>
				<td><?=$provider['username'];?></td>
			</tr>
			<tr>
				<th>所在地</th>
				<td><?=$this->User->getPrefName($provider['pref']) . $provider['addr_1'] . $provider['addr_2'];?></td>
			</tr>
			<tr>
				<th>最寄り駅</th>
				<td></td>
			</tr>
			<tr>
				<th>電話番号</th>
				<td><?=$provider['tel'];?></td>
			</tr>
			<tr>
				<th>ホームページURL</th>
				<td></td>
			</tr>
			<tr>
				<th>営業時間</th>
				<td></td>
			</tr>
		</table>
	</div>
