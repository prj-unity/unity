<?php
/**
  * @var \App\View\AppView $this
  */
?>
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
                <img src="img/pic_genre01.jpg">
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
                <img src="img/pic_genre02.jpg">
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
                <img src="img/pic_genre03.jpg">
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
                <img src="img/pic_genre04.jpg">
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
                <img src="img/pic_genre05.jpg">
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
                <img src="img/pic_genre06.jpg">
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

<?= $this->Form->create('name', ['name' => 'search', 'type' => 'post', 'url' => ['controller' => 'users', 'action' => 'search']]);?>
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
    <option value="<?=$data;?>"><?=$data;?></option>
<?php endforeach; ?>
    </select>
    <select name="addr_1">
        <option value="">市区町村</option>
<?php foreach ($datas['addr_1'] as $data): ?>
    <option value="<?=$data;?>"><?=$data;?></option>
<?php endforeach; ?>
    </select>
</div>

<div id="searchButtonArea">
    <input type="submit">
</div>
<?= $this->Form->end();?>
