<!-- <form action="/takephoto" method="post">
  Student ID: <input type="text" name="student_id"><br>
  Nickname: <input type="text" name="nickname"><br>
  First name: <input type="text" name="name"><br>
  Surname: <input type="text" name="surname"><br>
  Age: <input type="text" name="age"><br>
  Birthday <input type="date" name="birthday"><br>
  Address: <input type="text" name="address"><br>
  Email: <input type="text" name="email"><br>
  Home Tel: <input type="text" name="hometel"><br>
  Mobile: <input type="text" name="mobile"><br>
  Ailment: <input type="text" name="ailment"><br>
  Allergies: <input type="text" name="allergies"><br>
  <input type="submit" value="Submit">
</form> -->
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ModCom Casino</title>
<style type="text/css">
@font-face {
    font-family: myFont;
    src: url(<?php echo asset('TrajanPro-Regular.otf'); ?>);
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
@font-face {
    font-family: myFont;
    src: url(<?php echo asset('TrajanPro-Regular.otf'); ?>);
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
*{ outline: none; }
input { border: none; }
textarea {border: none;}
</style>
</head>



<body>
<table width="1100" border="0" align="center">
  <tr>
    <td><img src="<?php echo asset('image/header.png'); ?>" width="1100" height="200"  alt=""/></td>
  </tr>
  <tr>
    <td style="background-color: rgba(0, 0, 0, 0.17); -webkit-border-radius:5px;
-moz-border-radius:5px;
border-radius:5px;"><table width="100%" border="0">
      <tr>
        <td width="200"><table width="100%" border="0" style="margin-left: 5px; margin-top: 10px; margin-right: 5px; margin-bottom: 5px;">
          <tr>
            <td><img src="<?php echo asset('image/btn1s.png') ?>" width="174" height="55"  alt=""/ ><br>&nbsp;</td>
          </tr>
          <tr>
            <td><img src="<?php echo asset('image/btn2.png'); ?>" width="174" height="55"  alt=""/><br>&nbsp;</td>
          </tr>
          <tr>
            <td><img src="<?php echo asset('image/btn3.png'); ?>" width="174" height="55"  alt=""/><br>&nbsp;</td>
          </tr>
          <tr>
            <td><img src="<?php echo asset('image/btn4.png'); ?>" width="174" height="55"  alt=""/></td>
          </tr>
        </table></td>
        <td width="790" valign="top"><!-- Start content --><form action="/takephoto" method="post" name="register"><table width="97%" border="0" style="background-color: rgba(255, 255, 0, 0.3); margin-left: 5px; margin-top: 10px; margin-right: 5px; margin-bottom: 5px; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; text-align: justify;">
          <tr>
            <td><table width="100%" border="0">
              <tr>
                <td align="right" valign="top"><div style="color:#9E1825"><b>Nickname: </b></div></td>
                <td valign="top">&nbsp;<input type="text" name="nickname" style="-webkit-border-radius:5px;
-moz-border-radius:5px; border-radius:5px; background-color:#ffed8f;" required><br>&nbsp;</td>
              </tr>
              <tr>
                <td align="right" valign="top"><div style="color:#9E1825"><b>Name (TH): </b></div></td>
                <td valign="top">&nbsp;<input type="text" name="name_th" style="-webkit-border-radius:5px;
-moz-border-radius:5px; border-radius:5px; background-color:#ffed8f"; " required><br>&nbsp;</td>
              </tr>
              <tr>
                <td align="right" valign="top"><div style="color:#9E1825"><b>Surname (TH): </b></div></td>
                <td valign="top">&nbsp;<input type="text" name="surname_th" style="-webkit-border-radius:5px;
-moz-border-radius:5px; border-radius:5px; background-color:#ffed8f; " required><br>&nbsp;</td>
              </tr>
              <tr>
                <td align="right" valign="top"><div style="color:#9E1825"><b>Name (EN): </b></div></td>
                <td valign="top">&nbsp;<input type="text" name="name_en" style="-webkit-border-radius:5px;
-moz-border-radius:5px; border-radius:5px; background-color:#ffed8f;" required><br>&nbsp;</td>
              </tr>
              <tr>
                <td align="right" valign="top"><div style="color:#9E1825"><b>Surname (EN): </b></div></td>
                <td valign="top">&nbsp;<input type="text" name="surname_en" min="15" max="30" style="-webkit-border-radius:5px;
-moz-border-radius:5px; border-radius:5px; background-color:#ffed8f;" required><br>&nbsp;</td>
              </tr>
              <tr>
                <td align="right" valign="top"><div style="color:#9E1825"><b>Student ID: </b></div></td>
                <td valign="top">&nbsp;<input type="text" name="student_id" style="-webkit-border-radius:5px;
-moz-border-radius:5px; border-radius:5px; background-color:#ffed8f;" required><br>&nbsp;</td>
              </tr>
            </table></td>
            <td><table width="100%" border="0">
            <tr>
                <td align="right" valign="top"><div style="color:#9E1825"><b>Age: </b></div></td>
                <td valign="top">&nbsp;<input type="number" name="age" min="15" max="30" style="-webkit-border-radius:5px;
-moz-border-radius:5px; border-radius:5px; background-color:#ffed8f;" required><br>&nbsp;</td>
              </tr>
              <tr>
                <td align="right" valign="top"><div style="color:#9E1825"><b>Birth Day: </b></div></td>
                <td valign="top">&nbsp;<input type="date" name="birthday" min="15" max="30" style="-webkit-border-radius:5px;
-moz-border-radius:5px; border-radius:5px; background-color:#ffed8f;" required><br>&nbsp;</td>
              </tr>
              <tr>
                <td align="right" valign="top"><div style="color:#9E1825"><b>ADDRESS: </b></div></td>
                <td valign="top">&nbsp;<textarea rows="7" cols="17" name="address" style="-webkit-border-radius:5px;
-moz-border-radius:5px; border-radius:5px; background-color:#ffed8f; " required></textarea><br>&nbsp;</td>
              </tr>
              <tr>
                <td align="right" valign="top"><div style="color:#9E1825"><b>E-mail: </b></div></td>
                <td valign="top">&nbsp;<input type="email" name="email" style="-webkit-border-radius:5px;
-moz-border-radius:5px; border-radius:5px; background-color:#ffed8f;"><br>&nbsp;</td>
              </tr>
              
            </table></td>
            <td><table width="100%" border="0">
            <tr>
                <td align="right" valign="top"><div style="color:#9E1825"><b>Home Tel: </b></div></td>
                <td valign="top">&nbsp;<input type="text" name="hometel" style="-webkit-border-radius:5px;
-moz-border-radius:5px; border-radius:5px; background-color:#ffed8f;" ><br>&nbsp;</td>
              </tr>
              <tr>
                <td align="right" valign="top"><div style="color:#9E1825"><b>Mobile: </b></div></td>
                <td valign="top">&nbsp;<input type="text" name="mobile" style="-webkit-border-radius:5px;
-moz-border-radius:5px; border-radius:5px; background-color:#ffed8f;" required><br>&nbsp;</td>
              </tr>
              <tr>
                <td align="right" valign="top"><div style="color:#9E1825"><b>Ailment: </b></div></td>
                <td valign="top">&nbsp;<textarea rows="2" cols="17" name="ailment" style="-webkit-border-radius:5px;
-moz-border-radius:5px; border-radius:5px; background-color:#ffed8f; " ></textarea><br>&nbsp;</td>
              </tr>
              <tr>
                <td align="right" valign="top"><div style="color:#9E1825"><b>Allergies: </b></div></td>
                <td valign="top">&nbsp;<textarea rows="2" cols="17" name="allergies" style="-webkit-border-radius:5px;
-moz-border-radius:5px; border-radius:5px; background-color:#ffed8f; " ></textarea><br>&nbsp;</td>
              </tr>
              <tr>
                <td></td>
                <td align="center"><input type="image" src="<?php echo asset('image/submit.png'); ?>" height="50px" width="150px" name="submit" /></td>
              </tr>
            </table></td>
          </tr>
        <!-- end of content --></table></form></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center"><p style="color:#CCC">&copy; 2014 Computer Engineering #27 @ KMUTT</p></td>
  </tr>
</table>
</body>
</html>
