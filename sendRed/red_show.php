<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-touch-fullscreen" content="yes" />
    <meta name="format-detection" content="telphone=no" />
    <title>发谷币红包</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>res/css/styles.css?t=<?= time() ?>">
    <script src="<?= base_url() ?>res/js/jquery-1.9.1.min.js"></script>
    <script src="<?= base_url() ?>res/js/device-width.js"></script>
    <script src="<?= base_url() ?>res/js/red.js?_=v1.1"></script>
</head>
<body class="gary-bg" id="sendRed">
    <ul class="nav">
        <li class="on" type="1">随机红包</li>
        <li type="2">普通红包</li>
    </ul>
    <div class="red-box">
        <ul>
            <li><label class="number">红包个数</label><input type="text" name="number" placeholder="整数">个</li>
            <li><label class="total">虚拟币个数</label><input type="text" name="total" placeholder="整数">元</li>
        </ul>
        <p class="tips">小伙伴领取的金额随机的</p>
        <p class="msg">
            <input type="text" name="description" placeholder="恭喜发财,大吉大利" />
        </p>
        <button class="red-btn" id="sendRedBag">生成红包</button>
    </div>
    <div class="pop">
        <p class="pop-tips"></p>
    </div>
</body>
</html>