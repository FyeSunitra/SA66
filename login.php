<?php
session_start();
?>
<?php
// Database connection & form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $servername = "localhost";
    $username = "root";
    $dbPassword = ""; // ระวังการใช้ชื่อตัวแปรที่ซ้ำกัน
    $dbname = "sa";

    $conn = new mysqli($servername, $username, $dbPassword, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("SELECT * FROM student WHERE student_username = ? AND student_password = ?");
    $stmt->bind_param("ss", $_POST['username'], $_POST['password']);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
		$row = $result->fetch_assoc();
		$_SESSION['student_id'] = $row['student_id']; // ตัวอย่างเก็บ student_id
        header("Location: first_page.php");
        exit();
    } else {
        echo "Login failed";
    }

    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2//EN">
<html>
<head>
	<title>มหาวิทยาลัยขอนแก่น</title>
	<meta http-equiv=Content-Type content="text/html; charset=windows-874">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="google-site-verification" content="m0Eg0sEUEEW1HjezVyZFuTZ4WIzqPFXSDXWz0QRMunU" />
	<link rel="stylesheet" type="text/css" href="style/STYLE.css">
	<link rel="stylesheet" type="text/css" href="images/App_Themes/Aqua/Web/stylesx.css" />
	<link rel="stylesheet" type="text/css" href="images/App_Themes/HatchedGray/Web/stylesx.css" />
	<script src="style/popupmenu/SpryMenuBar.js" type="text/javascript"></script>
	<link href="style/popupmenu/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />

	<link rel="stylesheet" type="text/css" href="style/default.css" />
	<link rel="stylesheet" type="text/css" href="style/font.css" />
	<link rel="stylesheet" type="text/css" href="style/form.css" />
	
	<script type="text/javascript">
		function onDocumentLoaded () {
			var menu = document.getElementById('menu').cloneNode(true);
			menu.removeAttribute('id');
			menu.className = "menu";

			var header = document.getElementById('header')
			var wrapper = header.getElementsByClassName('wrapper')[0]
			wrapper.append(menu)

			var footer = document.createElement("div");
			footer.id = "footer";

			var wrapper = document.createElement("div");
			wrapper.className = "wrapper";

			var logo = document.createElement("img");
			logo.setAttribute("src", "images/logo.png");

			var headline = document.createElement("div")
			headline.className = "headline"
			headline.innerHTML = "มหาวิทยาลัยขอนแก่น"

			var detail = document.createElement("div");
			detail.className = "detail"
			detail.append(headline.cloneNode(true))
			detail.append("123.. หมู่ 16 ถ.มิตรภาพ ต.ในเมือง อ.เมือง จ.ขอนแก่น 40002\nอีเมล expert@kku.ac.th")

			var detailMobile = document.createElement("div");
			detailMobile.className = "detail-mobile"
			detailMobile.append(headline.cloneNode(true))
			detailMobile.append("123-- หมู่ 16 ถ.มิตรภาพ ต.ในเมือง\nอ.เมือง จ.ขอนแก่น 40002\nอีเมล expert@kku.ac.th")

			wrapper.appendChild(logo);
			wrapper.appendChild(detail);
			wrapper.appendChild(detailMobile)

			footer.appendChild(wrapper);
			document.body.appendChild(footer);
		}
		
		if (document.readyState === 'loading') {
			document.addEventListener('DOMContentLoaded', onDocumentLoaded);
		} else {
			onDocumentLoaded();
		}
	</script>
	<script type="module" src="https://pdp.kku.ac.th/api/v1/widget"></script>
</head>
<div id="waitDiv" style="position:absolute;visibility:hidden"><img id="waitIMG" src=images/common/misc/Loading.gif></div>
<script type="text/javascript">

			function chk_lang(langid,xpage){
					var i_lang=langid; 
					var x = xpage;
						
													
						
						document.cookie = "CKLANG=" +i_lang+ ";";
						document.FRM_LANG.submit();
						

					}   
		</script><!--
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-73311925-1', 'auto');
  ga('send', 'pageview');

</script>
-->

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-437953730"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-437953730');
</script>



<form method="post" action="" name="FRM_LANG"></form>
<div id="header">
	<div class="wrapper">
		<div class="menu_button">
			<img src="icons/menu.svg" onclick="document.getElementById('header').classList.toggle('show-menu')" />
		</div>
		<div class="language">
			<a href="#" onclick="chk_lang(0,'login.asp')">ไทย</a>
			<span>|</span>
			<a href="#" onclick="chk_lang(1,'login.asp')">ENG</a>
		</div>
		<a class="logo" href="#">
			<img src="images/kku_logo.png" />
		</a>
	</div>
</div>
<div align="center">
<div id="wrapper">
<table style="padding: 0px 20px">
<tr>

<script type="text/javascript">
	var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"style/popupmenu/SpryMenuBarDown.gif", imgRight:"style/popupmenu/SpryMenuBarRight.gif"});
</script>

<style>
button.btnExternal{
    padding: 1px 6px 1px 40px;
	width:80%;
	text-align:left;
}
button.btnExternal img{
    
}
button.btnExternal > * {  
    vertical-align: middle;  	
	
}

</style>

<script language='javascript'>
function showEmail(obj)
{
   //   alert(obj.value);
   //if(obj.value==null || obj.value==undefinded) return ;
   if( obj.value==1) 
   {
     document.getElementById('spEmail').innerHTML='KKU-Net Account.';
   }else if(obj.value=2){
     document.getElementById('spEmail').innerHTML='';
   }
   document.getElementsByName('f_uid')[0].focus();
}
</script>
<td width="200px">
	<div id="menu" class="style4">
		<ul>
		<li><A HREF="#">หน้าเริ่มต้น</a></li>		
		</ul>
	</div>	
</td>
<td>

<table border='0'>
<tr>
<td>
<div style="text-align: center;color: red;font-weight: bold"></div>
<form method="POST" action="">
    
<table>

	<tr>
		<td style="vertical-align: middle">Username</td>
		<td>
			<input type="text" id="username" name="username" required style="width: 100%" value="">
			<small><span id='spEmail'></span></small>
		</td>
	</tr>
	<tr>
		<td style="vertical-align: middle"><span id="ASPxRoundPanel1_RPHT">Password</span></td>
		<td>
			<input type="password" id="password" name="password" required style="width: 100%" />
			<input type="hidden" name="BUILDKEY" value="47822" />
			<input type="hidden" name="stdreportstudentcode" value="" />
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
			<a href='https://reg1.kku.ac.th/apps/resetPw/?r=home/main' target='_reg'> ลืมรหัสผ่านระบบทะเบียน / Forgot reg password.</a>
		</td>
	</tr>	
    
	<tr>
		<td></td>
		<td>
			<input type="submit" style="width: 100%" value="เข้าสู่ระบบ">
		</td>
	</tr>
	<!-- By SAM
	<tr>
		<td>เลือก Login</td>
		<td>
			<input type="radio" id="PASSWORDLDAP" name="CheckAuth" value="1" onclick="showEmail(this)" /><label for="PASSWORDLDAP">รหัสผ่านอินเตอร์เน็ต KKU Net Account</label><br/>
			<input type="radio" id="PASSWORDREG" name="CheckAuth" value="2" onclick="showEmail(this)" checked /><label for="PASSWORDREG">รหัสผ่านงานทะเบียน</label>
		</td>
	<tr> -->
	
	
</table>
</form>

</td>

</tr><tr>

<td style="text-align:center;vertical-align: middle;border-top: solid 1px #000;border-bottom: solid 1px #000;  " >
	-- OR -- 	
</td>

</tr>

<tr><td style="vertical-align: top;height:100% " >
	<form autocomplete="off" method="post" action="ssoPost.asp"> 
		<table  width='100%'>
		<tr>
			<td width='20%' style="vertical-align: middle">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			<td width='80%'>
				
				<button  type='submit'  class="btnExternal" type="submit" >
					<img src='images/mail-142.png' height='32'>
					<span>&nbsp;&nbsp;KKU Email</span>					
				</button>&nbsp;
			</td>
		</tr>
		</table>
	</form>
</td></tr>


</table>

<!-- End  Modal -->

<!--  By Sam
<div style="border-top:solid 1px #dfdfdf;margin-top: 10px;font-weight: normal">
	<ul>
		<li>KKU Net: ใช้สำหรับอีเมล @kku.ac.th, kku-wifi-s, KKU-Net@Home นักศึกษา และอาจารย์ประจำ</li>
		<li>รหัสผ่านงานทะเบียน : สำหรับ กลุ่มผู้ปกครอง อาจารย์พิเศษ นักศึกษา หรือ อาจารย์ประจำ จากระบบเดิม</li>
		<li>ระบบไม่รองรับ รหัสการใช้งาน @kkumail</li>
	</ul>
</div>
-->
<!-- End Page Detail -->
</tr>
</table>
</body>
</html>
