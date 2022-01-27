<!DOCTYPE html>
<html>
<head>
<title>居住地選択</title>
<link rel="stylesheet" href="residence.css">
</head>
<ul class="townList">
    <li>
      <div>居住地</div>
      <ul>
      <li>
        <!-- 静岡県内の市町村をラジオボタンにて表示 -->
        <div>静岡県内</div>
        <ul>
        <li>
        <div>西部地域</div>
          <ul>
          <li>
			    <input type="radio" class="btn_input" id="hamamatsu" name="residence" value="浜松市" onclick="townChange();">
			    <label for=hamamatsu class="btn_label">浜松市
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input" id="iwata" name="residence" value="磐田市" onclick="townChange();">
          <label for=iwata class="btn_label">磐田市
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input" id="kakegawa" name="residence" value="掛川市" onclick="townChange();">
			    <label for=kakegawa class="btn_label">掛川市
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input" id="fukuroi" name="residence" value="袋井市" onclick="townChange();">
			    <label for=fukuroi class="btn_label">袋井市
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input" id="kosai" name="residence" value="湖西市" onclick="townChange();">
			    <label for=kosai class="btn_label">湖西市
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input" id="omaezaki" name="residence" value="御前崎市" onclick="townChange();">
			    <label for=omaezaki class="btn_label">御前崎市
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input" id="kikugawa" name="residence" value="菊川市" onclick="townChange();">
          <label for=kikugawa class="btn_label">菊川市
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input" id="mori" name="residence" value="森町" onclick="townChange();">
			    <label for=mori class="btn_label">森町
		      </label>
          </li>
          </ul>
        <li>
        <div>中部地域</div>
          <ul>
          <li>
			    <input type="radio" class="btn_input" id="shizuoka" name="residence" value="静岡市" onclick="townChange();">
			    <label for=shizuoka class="btn_label">静岡市
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input" id="shimada" name="residence" value="島田市" onclick="townChange();">
			    <label for=shimada class="btn_label">島田市
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input" id="yaidu" name="residence" value="焼津市" onclick="townChange();">
			    <label for=yaidu class="btn_label">焼津市
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input" id="fujieda" name="residence" value="藤枝市" onclick="townChange();">
			    <label for=fujieda class="btn_label">藤枝市
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input" id="makinohara" name="residence" value="牧之原市" onclick="townChange();">
			    <label for=makinohara class="btn_label">牧之原市
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input" id="yoshida" name="residence" value="吉田町" onclick="townChange();">
			    <label for=yoshida class="btn_label">吉田町
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input" id="kawane" name="residence" value="川根本町" onclick="townChange();">
			    <label for=kawane class="btn_label">川根本町
		      </label>
          </li>
          </ul>
        <li>
        <div>東部地域①</div>
          <ul>
          <li>
			    <input type="radio" class="btn_input" id="numadu" name="residence" value="沼津市" onclick="townChange();">
			    <label for=numadu class="btn_label">沼津市
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input" id="atami" name="residence" value="熱海市" onclick="townChange();">
			    <label for=atami class="btn_label">熱海市
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input" id="mishima" name="residence" value="三島市" onclick="townChange();">
			    <label for=mishima class="btn_label">三島市
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input" id="fujinomiya" name="residence" value="富士宮市" onclick="townChange();">
			    <label for=fujinomiya class="btn_label">富士宮市
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input" id="ito" name="residence" value="伊東市" onclick="townChange();">
			    <label for=ito class="btn_label">伊東市
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input" id="fuji" name="residence" value="富士市" onclick="townChange();">
			    <label for=fuji class="btn_label">富士市
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input" id="gotenba" name="residence" value="御殿場市" onclick="townChange();">
			    <label for=gotenba class="btn_label">御殿場市
		      </label>
          </li>
          </ul>
        </li>
        <li>
        <div>東部地域②</div>
          <ul>
          <li>
			    <input type="radio" class="btn_input" id="susono" name="residence" value="裾野市" onclick="townChange();">
			    <label for=susono class="btn_label">裾野市
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input" id="izu" name="residence" value="伊豆市" onclick="townChange();">
			    <label for=izu class="btn_label">伊豆市
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input" id="izunokuni" name="residence" value="伊豆の国市" onclick="townChange();">
			    <label for=izunokuni class="btn_label">伊豆の国市
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input" id="kannnami" name="residence" value="函南町" onclick="townChange();">
			    <label for=kannnami class="btn_label">函南町
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input" id="shimizu" name="residence" value="清水町" onclick="townChange();">
			    <label for=shimizu class="btn_label">清水町
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input" id="nagaizumi" name="residence" value="長泉町" onclick="townChange();">
			    <label for=nagaizumi class="btn_label">長泉町
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input" id="oyama" name="residence" value="小山町"  onclick="townChange();">
			    <label for=oyama class="btn_label">小山町
		      </label>
          </li>
          </ul>
        </li>
        <li>
        <div>賀茂地域</div>
          <ul>
          <li>
			    <input type="radio" class="btn_input" id="shimoda" name="residence" value="下田市"  onclick="townChange();">
			    <label for=shimoda class="btn_label">下田市
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input" id="higashiizu" name="residence" value="東伊豆町"  onclick="townChange();">
			    <label for=higashiizu class="btn_label">東伊豆町
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input" id="kawadu" name="residence" value="河津町"  onclick="townChange();">
			    <label for=kawadu class="btn_label">河津町
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input" id="minamiizu" name="residence" value="南伊豆町"  onclick="townChange();">
			    <label for=minamiizu class="btn_label">南伊豆町
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input" id="matsuzaki" name="residence" value="松崎町"  onclick="townChange();">
			    <label for=matsuzaki class="btn_label">松崎町
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input" id="nishiizu" name="residence" value="西伊豆町"  onclick="townChange();">
			    <label for=nishiizu class="btn_label">西伊豆町
		      </label>
          </li>
          </ul>
        </li>
        </ul>
      <li>
        <!-- 静岡県外は一択のみのラジオボタンで表示 -->
        <div>静岡県外</div>
          <ul>
          <li>
			    <input type="radio" class="btn_input" id="kengai" name="residence" value="静岡県外" onclick="townChange();">
			    <label for=kengai class="btn_label">静岡県外
		      </label>
          </li>
          </ul>
      <li>
        <!-- 海外は一択のみのラジオボタンで表示 -->
        <div>海外</div>
          <ul>
          <li>
			    <input type="radio" class="btn_input" id="kaigai" name="residence" value="海外" onclick="townChange();">
			    <label for=kaigai class="btn_label">海外
		      </label>
          </li>
          </ul>
      </li>
      </ul>
    </li>
</ul>

<!-- ラジオボタンが選択されたとき選択された項目をJavaScriptにて表示 -->
<!-- ラジオボタンが選択されていない場合はJavaScriptにて非表示 -->
<div id="town0" class="townname">
  <p>居住地:浜松市</p>
</div>

<div id="town1" class="townname">
  <p>居住地:磐田市</p>
</div>

<div id="town2" class="townname">
  <p>居住地:掛川市</p>
</div>

<div id="town3" class="townname">
  <p>居住地:袋井市</p>
</div>

<div id="town4" class="townname">
  <p>居住地:湖西市</p>
</div>

<div id="town5" class="townname">
  <p>居住地:御前崎市</p>
</div>

<div id="town6" class="townname">
  <p>居住地:菊川市</p>
</div>

<div id="town7" class="townname">
  <p>居住地:森町</p>
</div>

<div id="town8" class="townname">
  <p>居住地:静岡市</p>
</div>

<div id="town9" class="townname">
  <p>居住地:島田市</p>
</div>

<div id="town10" class="townname">
  <p>居住地:焼津市</p>
</div>

<div id="town11" class="townname">
  <p>居住地:藤枝市</p>
</div>

<div id="town12" class="townname">
  <p>居住地:牧之原市</p>
</div>

<div id="town13" class="townname">
  <p>居住地:吉田町</p>
</div>

<div id="town14" class="townname">
  <p>居住地:川根本町</p>
</div>

<div id="town15" class="townname">
  <p>居住地:沼津市</p>
</div>

<div id="town16" class="townname">
  <p>居住地:熱海市</p>
</div>

<div id="town17" class="townname">
  <p>居住地:三島市</p>
</div>

<div id="town18" class="townname">
  <p>居住地:富士宮市</p>
</div>

<div id="town19" class="townname">
  <p>居住地:伊東市</p>
</div>

<div id="town20" class="townname">
  <p>居住地:富士市</p>
</div>

<div id="town21" class="townname">
  <p>居住地:御殿場市</p>
</div>

<div id="town22" class="townname">
  <p>居住地:裾野市</p>
</div>

<div id="town23" class="townname">
  <p>居住地:伊豆市</p>
</div>

<div id="town24" class="townname">
  <p>居住地:伊豆の国市</p>
</div>

<div id="town25" class="townname">
  <p>居住地:函南町</p>
</div>

<div id="town26" class="townname">
  <p>居住地:清水町</p>
</div>

<div id="town27" class="townname">
  <p>居住地:長泉町</p>
</div>

<div id="town28" class="townname">
  <p>居住地:小山町</p>
</div>

<div id="town29" class="townname">
  <p>居住地:下田市</p>
</div>

<div id="town30" class="townname">
  <p>居住地:東伊豆町</p>
</div>

<div id="town31" class="townname">
  <p>居住地:河津町</p>
</div>

<div id="town32" class="townname">
  <p>居住地:南伊豆町</p>
</div>

<div id="town33" class="townname">
  <p>居住地:松崎町</p>
</div>

<div id="town34" class="townname">
  <p>居住地:西伊豆町</p>
</div>

<div id="town35" class="townname">
  <p>居住地:静岡県外</p>
</div>

<div id="town36" class="townname">
  <p>居住地:海外</p>
</div>

<!-- JavaScriptの読み込み -->
<script type="text/javascript" src="js\residence_indication.js"></script>

</html>
