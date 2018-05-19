<?php
/**
  * @var \App\View\AppView $this
  */
?>
	
	<p id="pankuzu">
		<a href="<?= $this->Url->build(['controller' => 'Providers', 'action' => 'index']);?>">トップ</a> ＞ お問い合わせ
	</p>
	
	<form id="newrequestWrapper" action="#">
		<h2>新規依頼作成</h2>
		
		<h3>依頼先</h3>
		<div id="selectCompany">
<?php foreach ($providers as $provider): ?>
			<div data-id="<?= $provider['id'];?>"><?= $provider['username']; ?><img src="../img/batsu-gray.jpg"></div>
<?php endforeach; ?>
			<input type="button" form="addCompany" value="追加">
		</div>
		
		<h3>タイトル</h3>
		<div><input type="text"></div>
		
		<h3>依頼内容</h3>
		<div><textarea rows="7"></textarea></div>
		
		<h3>回答期限</h3>
		<div id="replyDateArea"><input type="text" id="datepicker"></div>
		
<!-- 天城直接導入部分 -->
		<input type="button" value="新規依頼送信">
		
<!-- 直接導入END -->
		
		
	</form>
	<form id="addCompany" action="#"></form>
	
