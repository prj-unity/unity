<?php
/**
 * @var \App\View\AppView $this
 */
?>
	<p id="pankuzu">
		<a href="<?= $this->Url->build(['controller' => 'Providers', 'action' => 'index']);?>">トップ</a> ＞
		<a href="<?= $this->Url->build(['controller' => 'Providers', 'action' => 'index']);?>">ジャンル</a> ＞
		<a href="<?= $this->Url->build(['controller' => 'Providers', 'action' => 'index']);?>">エリア</a>
	</p>

	<div id="resultWrapper" >
		<h2>ジャンル×エリアの検索結果</h2>
		<p id="resultLabel"><?=count($providers);?>件</p>
		<div id="resultRefineContainer">
			<p id="refineTitle">▼絞り込み検索</p>
			<div class="refineToggle" style="display: none">
				<h3>駅で絞り込む</h3>
				<div class="refineBox">
					<div class="refineLine">
						<span class="refineLineTitle">あ｜</span>
						<a href="/result.html"><span>駅名</span></a>
						<a href="/result.html"><span>駅名</span></a>
						<a href="/result.html"><span>駅名</span></a>
						<a href="/result.html"><span>駅名</span></a>
						<a href="/result.html"><span>駅名</span></a>
					</div>
					<div class="refineLine">
						<span class="refineLineTitle">か｜</span>
						<a href="/result.html"><span>駅名</span></a>
						<a href="/result.html"><span>駅名</span></a>
						<a href="/result.html"><span>駅名</span></a>
						<a href="/result.html"><span>駅名</span></a>
						<a href="/result.html"><span>駅名</span></a>
					</div>
					<div class="refineLine">
						<span class="refineLineTitle">さ｜</span>
						<a href="/result.html"><span>駅名</span></a>
						<a href="/result.html"><span>駅名</span></a>
						<a href="/result.html"><span>駅名</span></a>
						<a href="/result.html"><span>駅名</span></a>
						<a href="/result.html"><span>駅名</span></a>
					</div>
					<div class="refineLine">
						<span class="refineLineTitle">た｜</span>
						<a href="/result.html"><span>駅名</span></a>
						<a href="/result.html"><span>駅名</span></a>
						<a href="/result.html"><span>駅名</span></a>
						<a href="/result.html"><span>駅名</span></a>
						<a href="/result.html"><span>駅名</span></a>
					</div>
					<div class="refineLine">
						<span class="refineLineTitle">な｜</span>
						<a href="/result.html"><span>駅名</span></a>
						<a href="/result.html"><span>駅名</span></a>
						<a href="/result.html"><span>駅名</span></a>
						<a href="/result.html"><span>駅名</span></a>
						<a href="/result.html"><span>駅名</span></a>
					</div>
				</div>
				<div class="refineBox">
					<div class="refineLine">
						<span class="refineLineTitle">は｜</span>
						<a href="/result.html"><span>駅名</span></a>
						<a href="/result.html"><span>駅名</span></a>
						<a href="/result.html"><span>駅名</span></a>
						<a href="/result.html"><span>駅名</span></a>
						<a href="/result.html"><span>駅名</span></a>
					</div>
					<div class="refineLine">
						<span class="refineLineTitle">ま｜</span>
						<a href="/result.html"><span>駅名</span></a>
						<a href="/result.html"><span>駅名</span></a>
						<a href="/result.html"><span>駅名</span></a>
						<a href="/result.html"><span>駅名</span></a>
						<a href="/result.html"><span>駅名</span></a>
					</div>
					<div class="refineLine">
						<span class="refineLineTitle">や｜</span>
						<a href="/result.html"><span>駅名</span></a>
						<a href="/result.html"><span>駅名</span></a>
						<a href="/result.html"><span>駅名</span></a>
						<a href="/result.html"><span>駅名</span></a>
						<a href="/result.html"><span>駅名</span></a>
					</div>
					<div class="refineLine">
						<span class="refineLineTitle">ら｜</span>
						<a href="/result.html"><span>駅名</span></a>
						<a href="/result.html"><span>駅名</span></a>
						<a href="/result.html"><span>駅名</span></a>
						<a href="/result.html"><span>駅名</span></a>
						<a href="/result.html"><span>駅名</span></a>
					</div>
					<div class="refineLine">
						<span class="refineLineTitle">わ｜</span>
						<a href="/result.html"><span>駅名</span></a>
						<a href="/result.html"><span>駅名</span></a>
						<a href="/result.html"><span>駅名</span></a>
						<a href="/result.html"><span>駅名</span></a>
						<a href="/result.html"><span>駅名</span></a>
					</div>
				</div>
				<h3>フリーワードで絞り込む</h3>
				<form action="/result.html">
					<input type="text">
					<input type="submit">
				</form>
			</div>
		</div>
		<div id="refineButton">
			<p>▲</p>
		</div>

		<div class="resultButtonArea">
			<p>選択した企業に</p>
			<a href="<?= $this->Url->build(['controller' => 'Providers', 'action' => 'request']);?>" class="request_link_search">
				<input class="contactsButton" type="button" value="問い合わせる">
			</a>
			<input class="selectAllButton" type="button" value="全て選択する">
		</div>
<?php foreach ($providers as $provider): ?>
		<div class="resultBox clearfix" data-id="<?=$provider['id'];?>">
			<div>
				<img src="<?= $this->Url->image('company/' . $provider['image1']); ?>">
			</div>
			<div class="resultBoxCenter">
				<p class="cPhrase"><?=$provider['catchphrase'];?></p>
				<p class="cpName"><?=$provider['username'];?></p>
				<p>ジャンル: <span><?=$provider['genre'];?></span></p>
				<p>商圏エリア: <span><?=$provider['region'];?></span></p>
			</div>
			<div class="resultBoxRight">
				<a href="<?= $this->Url->build(['controller' => 'Providers', 'action' => 'detail', $provider['id']]);?>" class="post_link"><input type="button" value="詳しく見る"></a>
				<input class="select" type="button" value="選択する">
			</div>
			<div class="resultCheckBoxArea"> 
				<input type="checkbox">
			</div>
		</div>
<?php endforeach; ?>

		<div class="resultButtonArea">
			<p>選択した企業に</p>
			<a href="<?= $this->Url->build(['controller' => 'Providers', 'action' => 'request']);?>" class="request_link_search">
				<input class="contactsButton" type="button" value="問い合わせる">
			</a>
			<input class="selectAllButton" type="button" value="全て選択する">
		</div>


	</div>
	<input type="hidden" name="search_cond" value='<?= json_encode($searchCond, true);?>'>
