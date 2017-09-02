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

// $this->layout = false;

if (!Configure::read('debug')):
    throw new NotFoundException('Please replace src/Template/Pages/home.ctp with your own version.');
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
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
    <?= $this->Form->create('name', ['name' => 'search', 'type' => 'post', 'url' => ['controller' => 'users', 'action' => 'search']]);?>
    <input type="submit">
    <input type="hidden" name="test" value="testtest">
    <?= $this->Form->end();?>
</div>
