<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="sample2.css">
</head>
<ul class="townList2">
    <li>
      <div>出身地</div>
      <ul>
      <li>
        <!-- 静岡県内の市町村をラジオボタンにて表示 -->
        <div>静岡県内</div>
        <ul>
        <li>
        <div>西部地域</div>
          <ul>
          <li>
			    <input type="radio" class="btn_input2" id="hamamatsu2" name="birth_place" value="浜松市" onclick="townChange2();">
			    <label for=hamamatsu2 class="btn_label2">浜松市
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input2" id="iwata2" name="birth_place" value="磐田市" onclick="townChange2();">
          <label for=iwata2 class="btn_label2">磐田市
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input2" id="kakegawa2" name="birth_place" value="掛川市" onclick="townChange2();">
			    <label for=kakegawa2 class="btn_label2">掛川市
		      </label>
          </li>
          <li>
          <input type="radio" class="btn_input2" id="fukuroi2" name="birth_place" value="袋井市" onclick="townChange2();">
          <label for=fukuroi2 class="btn_label2">袋井市
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input2" id="kosai2" name="birth_place" value="湖西市" onclick="townChange2();">
			    <label for=kosai2 class="btn_label2">湖西市
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input2" id="omaezaki2" name="birth_place" value="御前崎市" onclick="townChange2();">
			    <label for=omaezaki2 class="btn_label2">御前崎市
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input2" id="kikugawa2" name="birth_place" value="菊川市" onclick="townChange2();">
          <label for=kikugawa2 class="btn_label2">菊川市
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input2" id="mori2" name="birth_place" value="森町" onclick="townChange2();">
			    <label for=mori2 class="btn_label2">森町
		      </label>
          </li>
          </ul>
        <li>
        <div>中部地域</div>
          <ul>
          <li>
			    <input type="radio" class="btn_input2" id="shizuoka2" name="birth_place" value="静岡市" onclick="townChange2();">
			    <label for=shizuoka2 class="btn_label2">静岡市
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input2" id="shimada2" name="birth_place" value="島田市" onclick="townChange2();">
			    <label for=shimada2 class="btn_label2">島田市
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input2" id="yaidu2" name="birth_place" value="焼津市" onclick="townChange2();">
			    <label for=yaidu2 class="btn_label2">焼津市
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input2" id="fujieda2" name="birth_place" value="藤枝市" onclick="townChange2();">
			    <label for=fujieda2 class="btn_label2">藤枝市
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input2" id="makinohara2" name="birth_place" value="牧之原市" onclick="townChange2();">
			    <label for=makinohara2 class="btn_label2">牧之原市
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input2" id="yoshida2" name="birth_place" value="吉田町" onclick="townChange2();">
			    <label for=yoshida2 class="btn_label2">吉田町
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input2" id="kawane2" name="birth_place" value="川根本町" onclick="townChange2();">
			    <label for=kawane2 class="btn_label2">川根本町
		      </label>
          </li>
          </ul>
        <li>
        <div>東部地域①</div>
          <ul>
          <li>
			    <input type="radio" class="btn_input2" id="numadu2" name="birth_place" value="沼津市" onclick="townChange2();">
			    <label for=numadu2 class="btn_label2">沼津市
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input2" id="atami2" name="birth_place" value="熱海市" onclick="townChange2();">
			    <label for=atami2 class="btn_label2">熱海市
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input2" id="mishima2" name="birth_place" value="三島市" onclick="townChange2();">
			    <label for=mishima2 class="btn_label2">三島市
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input2" id="fujinomiya2" name="birth_place" value="富士宮市" onclick="townChange2();">
			    <label for=fujinomiya2 class="btn_label2">富士宮市
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input2" id="ito2" name="birth_place" value="伊東市" onclick="townChange2();">
			    <label for=ito2 class="btn_label2">伊東市
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input2" id="fuji2" name="birth_place" value="富士市" onclick="townChange2();">
			    <label for=fuji2 class="btn_label2">富士市
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input2" id="gotenba2" name="birth_place" value="御殿場市" onclick="townChange2();">
			    <label for=gotenba2 class="btn_label2">御殿場市
		      </label>
          </li>
          </ul>
        </li>
        <li>
        <div>東部地域②</div>
          <ul>
          <li>
			    <input type="radio" class="btn_input2" id="susono2" name="birth_place" value="裾野市" onclick="townChange2();">
			    <label for=susono2 class="btn_label2">裾野市
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input2" id="izu2" name="birth_place" value="伊豆市" onclick="townChange2();">
			    <label for=izu2 class="btn_label2">伊豆市
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input2" id="izunokuni2" name="birth_place" value="伊豆の国市" onclick="townChange2();">
			    <label for=izunokuni2 class="btn_label2">伊豆の国市
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input2" id="kannnami2" name="birth_place" value="函南町" onclick="townChange2();">
			    <label for=kannnami2 class="btn_label2">函南町
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input2" id="shimizu2" name="birth_place" value="清水町" onclick="townChange2();">
			    <label for=shimizu2 class="btn_label2">清水町
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input2" id="nagaizumi2" name="birth_place" value="長泉町" onclick="townChange2();">
			    <label for=nagaizumi2 class="btn_label2">長泉町
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input2" id="oyama2" name="birth_place" value="小山町"  onclick="townChange2();">
			    <label for=oyama2 class="btn_label2">小山町
		      </label>
          </li>
          </ul>
        </li>
        <li>
        <div>賀茂地域</div>
          <ul>
          <li>
			    <input type="radio" class="btn_input2" id="shimoda2" name="birth_place" value="下田市"  onclick="townChange2();">
			    <label for=shimoda2 class="btn_label2">下田市
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input2" id="higashiizu2" name="birth_place" value="東伊豆町"  onclick="townChange2();">
			    <label for=higashiizu2 class="btn_label2">東伊豆町
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input2" id="kawadu2" name="birth_place" value="河津町"  onclick="townChange2();">
			    <label for=kawadu2 class="btn_label2">河津町
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input2" id="minamiizu2" name="birth_place" value="南伊豆町"  onclick="townChange2();">
			    <label for=minamiizu2 class="btn_label2">南伊豆町
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input2" id="matsuzaki2" name="birth_place" value="松崎町"  onclick="townChange2();">
			    <label for=matsuzaki2 class="btn_label2">松崎町
		      </label>
          </li>
          <li>
			    <input type="radio" class="btn_input2" id="nishiizu2" name="birth_place" value="西伊豆町"  onclick="townChange2();">
			    <label for=nishiizu2 class="btn_label2">西伊豆町
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
			    <input type="radio" class="btn_input2" id="kengai2" name="birth_place" value="静岡県外" onclick="townChange2();">
			    <label for=kengai2 class="btn_label2">静岡県外
		      </label>
          </li>
          </ul>
      <li>
        <!-- 海外は一択のみのラジオボタンで表示 -->
        <div>海外</div>
          <ul>
          <li>
			    <input type="radio" class="btn_input2" id="kaigai2" name="birth_place" value="海外" onclick="townChange2();">
			    <label for=kaigai2 class="btn_label2">海外
		      </label>
          </li>
          </ul>
      </li>
      </ul>
    </li>
</ul>

<!-- ラジオボタンが選択されたとき選択された項目をJavaScriptにて表示 -->
<!-- ラジオボタンが選択されていない場合はJavaScriptにて非表示 -->
<div id="town02" class="townname2">
  <p>出身地:浜松市</p>
</div>

<div id="town12_" class="townname2">
  <p>出身地:磐田市</p>
</div>

<div id="town22_" class="townname2">
  <p>出身地:掛川市</p>
</div>

<div id="town32_" class="townname2">
  <p>出身地:袋井市</p>
</div>

<div id="town42" class="townname2">
  <p>出身地:湖西市</p>
</div>

<div id="town52" class="townname2">
  <p>出身地:御前崎市</p>
</div>

<div id="town62" class="townname2">
  <p>出身地:菊川市</p>
</div>

<div id="town72" class="townname2">
  <p>出身地:森町</p>
</div>

<div id="town82" class="townname2">
  <p>出身地:静岡市</p>
</div>

<div id="town92" class="townname2">
  <p>出身地:島田市</p>
</div>

<div id="town102" class="townname2">
  <p>出身地:焼津市</p>
</div>

<div id="town112" class="townname2">
  <p>出身地:藤枝市</p>
</div>

<div id="town122" class="townname2">
  <p>出身地:牧之原市</p>
</div>

<div id="town132" class="townname2">
  <p>出身地:吉田町</p>
</div>

<div id="town142" class="townname2">
  <p>出身地:川根本町</p>
</div>

<div id="town152" class="townname2">
  <p>出身地:沼津市</p>
</div>

<div id="town162" class="townname2">
  <p>出身地:熱海市</p>
</div>

<div id="town172" class="townname2">
  <p>出身地:三島市</p>
</div>

<div id="town182" class="townname2">
  <p>出身地:富士宮市</p>
</div>

<div id="town192" class="townname2">
  <p>出身地:伊東市</p>
</div>

<div id="town202" class="townname2">
  <p>出身地:富士市</p>
</div>

<div id="town212" class="townname2">
  <p>出身地:御殿場市</p>
</div>

<div id="town222" class="townname2">
  <p>出身地:裾野市</p>
</div>

<div id="town232" class="townname2">
  <p>出身地:伊豆市</p>
</div>

<div id="town242" class="townname2">
  <p>出身地:伊豆の国市</p>
</div>

<div id="town252" class="townname2">
  <p>出身地:函南町</p>
</div>

<div id="town262" class="townname2">
  <p>出身地:清水町</p>
</div>

<div id="town272" class="townname2">
  <p>出身地:長泉町</p>
</div>

<div id="town282" class="townname2">
  <p>出身地:小山町</p>
</div>

<div id="town292" class="townname2">
  <p>出身地:下田市</p>
</div>

<div id="town302" class="townname2">
  <p>出身地:東伊豆町</p>
</div>

<div id="town312" class="townname2">
  <p>出身地:河津町</p>
</div>

<div id="town322" class="townname2">
  <p>出身地:南伊豆町</p>
</div>

<div id="town332" class="townname2">
  <p>出身地:松崎町</p>
</div>

<div id="town342" class="townname2">
  <p>出身地:西伊豆町</p>
</div>

<div id="town352" class="townname2">
  <p>出身地:静岡県外</p>
</div>

<div id="town362" class="townname2">
  <p>出身地:海外</p>
</div>

<!-- JavaScriptの読み込み -->
<script type="text/javascript" src="js\display2.js"></script>

</html>
