<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="<?=base_url()?>res/css/app.css?t=<?=time()?>" />
	<script type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
	<style type="text/css">
		body {
		  font-size: 62.5%;
		  padding: 3% 2%;
		  position: relative;
		}
		img{
			vertical-align: middle;
		}
		.tips {
		  font-size: 1.4rem;
		  position: absolute;
		  right: 3%;
		}
		.tips img {
		  width: 2rem;
		}
		.tips span {
		  color: #251716;
		  margin-left: 1.5rem;
		  vertical-align: middle;
		}
		.item_one_key {
		  background-color: #fff;
		  font-size: 16px;
		  padding: 1.5rem 0;
		  text-align: center;
		  margin-top: 15%;
		}
		.item_one_key .info {
		  margin-left: 50%;
		  position: relative;
		  text-align: left;
		  width: 12rem;
		}
		.item_one_key .info img {
		  left: -4rem;
		  position: absolute;
		  top: -.4rem;
		  width: 3rem;
		}
		.item_one_key .info .h_1 {
		  height: 2.4rem;
		  line-height: 2.4rem;
		}
		.item_one_key .info .h_2 {
		  color: #898989;
		  font-size: 1.2rem;
		  height: 2rem;
		  line-height: 2rem;
		}
		.item_tip_title {
		  background-color: #fff;
		  border-left: 0.5rem solid #212227;
		  font-size: 1.6rem;
		  margin: 1rem 0;
		  padding: 1rem;
		}
		.item_tip_list {
		  background-color: #fff;
		  color: #898989;
		  font-size: 1.2rem;
		  padding: 2rem 1rem;
		}
		.item_tip_list li {
		  padding: 0.5rem;
		}
		.item_tip_list li img {
		  height: 1.6rem;
		}
		.item_tip_list li span {
		  margin-left: 1rem;
		  vertical-align: middle;
		}
	</style>
	<script src="<?=base_url()?>res/js/jquery-1.9.1.min.js"></script>
	<script src="<?=base_url()?>res/js/app.js?t=<?=time()?>"></script> 
	
		 
</head>
<body style="background-color:#f3f3f3;">
<!-- <div id="togetherp">
</div> -->
<div class="tips">
	<img alt="点这里" src="/res/images/share_btn.png"><span>点这里，点这里</span>
</div>
<div class="item_one_key">
	<div class="info" style="margin-left:41%;">
		<img style="top: .4rem;" alt="" src="/res/images/one_key_btn.png">
		<div class="h_1">转赠给好友</div>
		<p style="font-size:12px;">好友、微信群、朋友圈</p>
	</div>
</div>
<div class="item_tip_title">使用小贴士</div>
<div class="item_tip_list">
	<ul>
		<li><img alt="" src="/res/images/t1_btn.png"><span>点击手机屏幕右上角的菜单按钮<img alt="" src="/res/images/list_btn_1.png">或<img alt="" src="/res/images/list_btn_2.png"></span></li>
		<li><img alt="" src="/res/images/t2_btn.png"><span>找到分享按钮</span><img alt="" src="/res/images/wx_share_btn.png" style="margin: 0 0.2rem"></li>
		<li><img alt="" src="/res/images/t3_btn.png"><span>在好友列表中找到小伙伴，点击发送</span></li>
	</ul>
</div>


<script type="text/javascript">
		wx.config({
		    debug: false, 
		    appId: '<?= $appid ?>',
			timestamp: <?=$timestamp?>,
			nonceStr: '<?=$noncestr?>',
			signature: '<?=$signature?>',
		    jsApiList: [
		    	'onMenuShareTimeline',
		    	'onMenuShareAppMessage',
				'onMenuShareQQ',
				'onMenuShareQZone',
		    ]
		});



		wx.ready(function(){
			wx.onMenuShareAppMessage({
		      title: '<?=$fron_name?>给你发红包啦~',
		      desc: '<?=$description?>',
		      link: '<?=$give_url?>',
		      imgUrl: base_url+'res/images/red1.jpg',
                success: function (res) {
		        //alert('已分享');
                    var par = {"rid": <?= $rid?>};
                    $.post(base_url + "index.php/api/red/increase_forwarding_number", par,
                        function (obj) {}, "json");
		         },
		         cancel: function (res) {
		        //alert('已取消');
		         },
		          fail: function (res) {
		          alert(JSON.stringify(res));
		            }
		    });

		    wx.onMenuShareTimeline({
				title: '<?=$fron_name?>给你发红包啦~',
				desc: '<?=$description?>',
				link: '<?=$give_url?>', // 分享出去的链接
				imgUrl: base_url+'res/images/red1.jpg', //分享是的图片
				    success: function (res) {
                    var par = {"rid": <?= $rid?>};
                    $.post(base_url + "index.php/api/red/increase_forwarding_number", par,
                        function (obj) {}, "json");	
                },
			        cancel: function (res) {
			},
		        	fail: function (res) {
				    alert(JSON.stringify(res));
			}
            });
            
            wx.onMenuShareQQ({
                title: '<?=$fron_name?>给你发红包啦~',
                desc: '<?=$description?>',
                link: '<?=$give_url?>', // 分享出去的链接
                imgUrl: base_url+'res/images/red1.jpg', //分享是的图片
                    success: function (res) {
                    var par = {"rid": <?= $rid?>};
                    $.post(base_url + "index.php/api/red/increase_forwarding_number", par,
                        function (obj) {}, "json");   
                    },
                     cancel: function (res) {
                     },
                    fail: function (res) {
                     alert(JSON.stringify(res));
                     }
        }); 
            wx.onMenuShareQZone({
                title: '<?=$fron_name?>给你发红包啦~',
                desc: '<?=$description?>',
                link: '<?=$give_url?>', // 分享出去的链接
                imgUrl: base_url+'res/images/red1.jpg', //分享是的图片
                success: function (res) {
                    var par = {"rid": <?= $rid?>};
                    $.post(base_url + "index.php/api/red/increase_forwarding_number", par,
                        function (obj) {}, "json");   
                },
                cancel: function (res) {
            },
                fail: function (res) {
                alert(JSON.stringify(res));
             }
        });


		});

	</script>
	
</body>
</html>
