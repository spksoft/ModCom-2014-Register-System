<!-- <!DOCTYPE html>
<html>
<head><title>Simple Webcam!</title>
</head>
<body>
<form method="POST" action="/group" id="form">
<video id="video" width="640" height="480" autoplay style="display:block"></video>
<canvas id="canvas" width="640" height="480" style="display:none"></canvas>
<input type="hidden" name="imgdata" value="" id="imgdata">
<input type="hidden" name="student_id" value="<?php echo $student_id; ?>" id="student_id">
</form>
<button id="snap">Snap Photo</button>
<button id="reset" style="display:none">RESET</button>
<button id="submit" style="display:none">Submit</button>
<script>

		// Put event listeners into place
		window.addEventListener("DOMContentLoaded", function() {
			// Grab elements, create settings, etc.
			var canvas = document.getElementById("canvas"),
				context = canvas.getContext("2d"),
				video = document.getElementById("video"),
				videoObj = { "video": true },
				errBack = function(error) {
					console.log("Video capture error: ", error.code); 
				};
			var btnsnap = document.getElementById("snap");
			var btnreset = document.getElementById("reset");
			var btnsubmit = document.getElementById("submit");
			var form = document.getElementById("form");
			// Put video listeners into place
			if(navigator.getUserMedia) { // Standard
				navigator.getUserMedia(videoObj, function(stream) {
					video.src = stream;
					video.play();
				}, errBack);
			} else if(navigator.webkitGetUserMedia) { // WebKit-prefixed
				navigator.webkitGetUserMedia(videoObj, function(stream){
					video.src = window.webkitURL.createObjectURL(stream);
					video.play();
				}, errBack);
			} else if(navigator.mozGetUserMedia) { // WebKit-prefixed
				navigator.mozGetUserMedia(videoObj, function(stream){
					video.src = window.URL.createObjectURL(stream);
					video.play();
				}, errBack);
			}

			// Trigger photo take
			btnsnap.addEventListener("click", function() {
				context.drawImage(video, 0, 0, 640, 480);
				var imgdata = document.getElementById("imgdata");
				imgdata.value = canvas.toDataURL('image/png');
				console.log(canvas.toDataURL('image/png'));
				video.style.display = 'none';
				canvas.style.display = 'block';
				btnsnap.style.display = 'none';
				btnreset.style.display = 'block';
				btnsubmit.style.display = 'block';
			});
			btnreset.addEventListener("click", function() {
				video.style.display = 'block';
				canvas.style.display = 'none';
				btnsnap.style.display = 'block';
				btnreset.style.display = 'none';
				btnsubmit.style.display = 'none';
			});
			btnsubmit.addEventListener("click", function() {
				form.submit();
			});
		}, false);

	</script>
</body>
</html> -->
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ModCom Casino</title>
<style type="text/css">
@font-face {
    font-family: myFont;
    src: url(<?php echo asset('TrajanPro-Regular.otf') ?>);
}
body {
	background-image: url(<?php echo asset('image/bg.jpg') ?>);
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
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
border-radius:5px;"><table width="100%" border="0" >
      <tr>
        <td width="200"><table width="100%" border="0" style="margin-left: 5px; margin-top: 10px; margin-right: 5px; margin-bottom: 5px;">
          <tr>
            <td><img src="<?php echo asset('image/btn1.png') ?>" width="174" height="55"  alt=""/ ><br>&nbsp;</td>
          </tr>
          <tr>
            <td><img src="<?php echo asset('image/btn2s.png') ?>" width="174" height="55"  alt=""/><br>&nbsp;</td>
          </tr>
          <tr>
            <td><img src="<?php echo asset('image/btn3.png') ?>" width="174" height="55"  alt=""/><br>&nbsp;</td>
          </tr>
          <tr>
            <td><img src="<?php echo asset('image/btn4.png') ?>" width="174" height="55"  alt=""/></td>
          </tr>
        </table></td>
        <td width="790" valign="middle" align="center" ><table width="95%" border="0" style="background-color: rgba(255, 255, 0, 0.3); margin-left: 5px; margin-top: 10px; margin-right: 5px; margin-bottom: 5px; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; text-align: justify;">
          <tr>
            <td width="63%" height="302" align="right">
		<form method="POST" action="/group" id="form">
			<video id="video" width="320" height="240" autoplay style="display:block"></video>
			<canvas id="canvas" width="320" height="240" style="display:none"></canvas>
			<input type="hidden" name="imgdata" value="" id="imgdata">
			<input type="hidden" name="student_id" value="<?php echo $student_id; ?>" id="student_id">
		</form>
	</td>
            <td width="37%"><table width="100%" border="0">
              <tr>
                <td align="center"><img src="<?php echo asset('image/take.png') ?>" id="snap" width="170" height="64"  alt=""/><img src="<?php echo asset('image/reset.png') ?>" id="reset" width="170" height="64"  alt="" style="display:none"/></td>
              </tr>
              <tr>
                <td align="center"><img src="<?php echo asset('image/submit.png') ?>" id="submit" width="170" height="64"  alt="" style="display:none"/></td>
              </tr>
              <tr>
                <td align="center"></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><p style="color:#CCC">&copy; 2014 Computer Engineering #27 @ KMUTT</p></td>
  </tr>
</table>
<script>

		// Put event listeners into place
		window.addEventListener("DOMContentLoaded", function() {
			// Grab elements, create settings, etc.
			var canvas = document.getElementById("canvas"),
				context = canvas.getContext("2d"),
				video = document.getElementById("video"),
				videoObj = { "video": true },
				errBack = function(error) {
					console.log("Video capture error: ", error.code); 
				};
			var btnsnap = document.getElementById("snap");
			var btnreset = document.getElementById("reset");
			var btnsubmit = document.getElementById("submit");
			var form = document.getElementById("form");
			// Put video listeners into place
			if(navigator.getUserMedia) { // Standard
				navigator.getUserMedia(videoObj, function(stream) {
					video.src = stream;
					video.play();
				}, errBack);
			} else if(navigator.webkitGetUserMedia) { // WebKit-prefixed
				navigator.webkitGetUserMedia(videoObj, function(stream){
					video.src = window.webkitURL.createObjectURL(stream);
					video.play();
				}, errBack);
			} else if(navigator.mozGetUserMedia) { // WebKit-prefixed
				navigator.mozGetUserMedia(videoObj, function(stream){
					video.src = window.URL.createObjectURL(stream);
					video.play();
				}, errBack);
			}

			// Trigger photo take
			btnsnap.addEventListener("click", function() {
				context.drawImage(video, 0, 0, 320, 240);
				var imgdata = document.getElementById("imgdata");
				imgdata.value = canvas.toDataURL('image/png');
				console.log(canvas.toDataURL('image/png'));
				video.style.display = 'none';
				canvas.style.display = 'block';
				btnsnap.style.display = 'none';
				btnreset.style.display = 'block';
				btnsubmit.style.display = 'block';
			});
			btnreset.addEventListener("click", function() {
				video.style.display = 'block';
				canvas.style.display = 'none';
				btnsnap.style.display = 'block';
				btnreset.style.display = 'none';
				btnsubmit.style.display = 'none';
			});
			btnsubmit.addEventListener("click", function() {
				form.submit();
			});
		}, false);

	</script>
</body>
</html>