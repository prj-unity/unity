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
			<div>company name<img src="../img/batsu-gray.jpg"></div>
			<div>company name<img src="../img/batsu-gray.jpg"></div>
			<div>company name<img src="../img/batsu-gray.jpg"></div>
			<input type="button" form="addCompany" value="追加">
		</div>
		
		<h3>タイトル</h3>
		<div><input type="text"></div>
		
		<h3>依頼内容</h3>
		<div><textarea rows="7"></textarea></div>
		
		<h3>回答期限</h3>
		<div id="replyDateArea"><input type="text" id="datepicker"></div>
		
	</form>
	<form id="addCompany" action="#"></form>
	
