<!-- <script>
function imgclick(id) {
	id.src = "<?php echo asset('img/card_'.$imgid.'.jpg'); ?>"
	for(i = 1;i<=4;i++) {
		document.getElementById('card' + i).style.pointerEvents = 'none';
	}
}
</script>
<img src="<?php echo asset('img/card_back.png') ?>" id='card1' onclick="imgclick(this)" />
<img src="<?php echo asset('img/card_back.png') ?>" id='card2' onclick="imgclick(this)" />
<img src="<?php echo asset('img/card_back.png') ?>" id='card3' onclick="imgclick(this)" />
<img src="<?php echo asset('img/card_back.png') ?>" id='card4' onclick="imgclick(this)" />

-->
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ModCom Casino</title>
<script>
function imgclick(id) {
	id.src = "<?php echo asset('image/c'.$imgid.'.png'); ?>"
	for(i = 1;i<=4;i++) {
		document.getElementById('card' + i).style.pointerEvents = 'none';
	}
	document.getElementById('menu3').src="<?php echo asset('image/btn3.png') ?>";
	document.getElementById('menu4').src="<?php echo asset('image/btn4s.png') ?>";
	document.getElementById('count').style.display = 'block';
	countredirect();
}
</script>
<style type="text/css">
@font-face {
    font-family: myFont;
    src: url(<?php echo asset('TrajanPro-Regular.otf') ?>);
}
body {
	background-image: url(<?php echo asset('image/bg.jpg') ?>);
	margin:0; 
	font-family: myFont;
	
}
.imgClass { 
    background-image: url(<?php echo asset('image/submit.png') ?>) no-repeat;
    width: 186px;
    height: 53px;
    border: none;
}
.shadow { 
	-moz-box-shadow: 2px 2px 2px #333333;
	-webkit-box-shadow: 2px 2px 2px #333333;
	 box-shadow: 2px 2px 2px #333333;
}
.kob {
	-webkit-border-radius:5px;
	-moz-border-radius:5px;
	border-radius:5px;
	background-color:#ffed8f;
}
.white { color: white; }
.point { cursor: pointer; }
*{
  transtion: all 1s linear; 
  -webkit-transition: all 1s linear;
  -moz-transition: all 1s linear;
  -o-transition: all 1s linear;
}

</style>
</head>

<body>
<table width="1100" border="0" align="center">
  <tr>
    <td><img src="<?php echo asset('image/header.png') ?>" width="1100" height="200"  alt=""/></td>
  </tr>
  <tr>
    <td style="background-color: rgba(0, 0, 0, 0.17); -webkit-border-radius:5px;
-moz-border-radius:5px;
border-radius:5px;"><table width="100%" border="0">
      <tr>
        <td width="200"><table width="100%" border="0" style="margin-left: 5px; margin-top: 10px; margin-right: 5px; margin-bottom: 5px;">
          <tr>
            <td><img src="<?php echo asset('image/btn1.png') ?>" width="174" height="55"  alt=""/ ><br>&nbsp;</td>
          </tr>
          <tr>
            <td><img src="<?php echo asset('image/btn2.png') ?>" width="174" height="55"  alt=""/><br>&nbsp;</td>
          </tr>
          <tr>
            <td><img src="<?php echo asset('image/btn3s.png') ?>" id="menu3" width="174" height="55"  alt=""/><br>&nbsp;</td>
          </tr>
          <tr>
            <td><img src="<?php echo asset('image/btn4.png') ?>" id="menu4" width="174" height="55"  alt=""/></td>
          </tr>
        </table></td>
        <td width="80%" valign="middle"><table width="98%" border="0" style="background-color: rgba(255, 255, 0, 0.3); margin-left: 5px; margin-top: 10px; margin-right: 5px; margin-bottom: 5px; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; text-align: justify;">
          <tr>
            <td height="314" align="center"><img class="point" src="<?php echo asset('image/card_back.png') ?>" width="156" height="224"  alt=""  id='card1' onclick="imgclick(this)"/></td>
            <td align="center"><img class="point" src="<?php echo asset('image/card_back.png') ?>" width="156" height="224"  alt=""  id='card2' onclick="imgclick(this)"/></td>
            <td align="center"><img class="point" src="<?php echo asset('image/card_back.png') ?>" width="156" height="224"  alt=""  id='card3' onclick="imgclick(this)"/></td>
            <td><img class="point" src="<?php echo asset('image/card_back.png') ?>" width="156" height="224"  alt=""  id='card4' onclick="imgclick(this)"/></td>
            <td align="center"><table width="100%" border="0">
              <tr>
                <td align="center"><div style="color:#9E1825">
                  <p><b>Please Select </b></p>
                  <p><b>One Card</b></p>
                </div></td>
              </tr>
              <tr>
                <td align="center">&nbsp;</td>
              </tr>
            </table></td>
          </tr>
          <tr>
          	<td align="center" colspan="5">
          		<div id="count" style="display:none">
                <p class="white">
            ลงทะเบียนเสร็จเรียบแล้วนะครับ
          </p>
					<b class="white">Redirected to the Form page in <b id="redirect2" class="white"></b> seconds</b>


					<script>
					<!--

					/*
					Count down then redirect script
					By JavaScript Kit (http://javascriptkit.com)
					Over 400+ free scripts here!
					*/

					//change below target URL to your own
					var targetURL="/"
					//change the second to start counting down from
					var countdownfrom=10
					document.getElementById('redirect2').innerHTML = countdownfrom+1;
					var currentsecond=countdownfrom+1;
					function countredirect(){
					if (currentsecond!=1){
					currentsecond-=1
					document.getElementById('redirect2').innerHTML = currentsecond;
					}
					else{
					window.location=targetURL
					return
					}
					setTimeout("countredirect()",1000)
					}


					//-->
					</script>
				</div>
          	</td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><p style="color:#CCC">&copy; 2014 Computer Engineering #27 @ KMUTT</p></td>
  </tr>
</table>
</body>
</html>