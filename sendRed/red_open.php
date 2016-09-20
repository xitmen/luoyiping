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
    <title>商户名称</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>res/css/styles.css?t=<?= time() ?>">
    <script src="<?= base_url() ?>res/js/jquery-1.9.1.min.js"></script>
    <script src="<?= base_url() ?>res/js/device-width.js"></script>
    <script src="<?= base_url() ?>res/js/red.js?_=v1.1"></script>
</head>
<body class="black-bg" id="openRed">
    <input type="hidden" id="wid" value="<?= $wid ?>">
    <input type="hidden" id="rid" value="<?= $rid ?>">
    <div class="open-banner" style="background-image:url(<?= base_url() ?>res/images/12.jpg)"></div>
    <div class="send-msg">
        <?= $red['description']?>
    </div>

    <div class="red-info hide">
        <h3>xx个谷币</h3>
        <p>红包已放入账户xx<br />注册会员后通过微信点单使用</p>
        <a href="#" class="red-btn" id="register">立即注册</a>
    </div>

    <?php if( $status == 2 ) { ?>

    <div class="red-info">
            <h3><?=$my_get['virtual_money'] ?>个谷币</h3>
        <p>红包已放入账户<?= $my_get['name'] ?><br />注册会员后通过微信点单使用</p>
        <?php if(!$is_member) { ?>
        <a href="#" class="red-btn" id="register">立即注册</a>
        <?php } ?>
    </div>
    <?php } ?>
    <?php if($status == 5) { ?>
    <div class="get-red-bag">
        <button class="red-btn" id="getRed">马上领取</button>
    </div>
    <?php } ?>
    <?php if($status == 3) { ?>
    <div class="get-red-bag">
        <button class="gray-btn">手慢无，红包被派完了</button>
    </div>
    <?php } ?>
    <?php if($status == 4) { ?>
    <div class="get-red-bag">
            <button class="gray-btn">红包已超过24小时，不能被领取</button>
        </div>
    <?php } ?>
    <?php if($status == 2) { ?>
    <div class="get-red-tips">这是一个已抢过的红包哦~</div>
    <?php } ?>
    <div class="list">
        <h3><span>看大伙手气如何</span></h3>
        <div class="user-list">
            <?php if(!empty($list)) { 
            foreach ($list as $key => $value){
            ?>
            <dl>
                <dt><img src="<?=$value['headimgurl']?>" /></dt>
                <dd class="name"><?= $value['name'] ?><em><?= date("m.d H:i",$value['add_time']) ?></em></dd>
                <dd class="text"><?= $value['say']?></dd>
                <dd class="price"><?= $value['virtual_money']?>个</dd>
            </dl>
            <?php }
            } else{ ?>
                <p>暂无小伙伴领取</p>
            <?php } ?>

        </div>
    </div>
</body>
</html>