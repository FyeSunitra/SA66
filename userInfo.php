<?php
session_start();
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
			detail.append("123.. หมู่ 16 ถ.มิตรภาพ ต.ในเมือง อ.เมือง จ.ขอนแก่น 40002\nอีเมล reg@kku.ac.th")

			var detailMobile = document.createElement("div");
			detailMobile.className = "detail-mobile"
			detailMobile.append(headline.cloneNode(true))
			detailMobile.append("123-- หมู่ 16 ถ.มิตรภาพ ต.ในเมือง\nอ.เมือง จ.ขอนแก่น 40002\nอีเมล reg@kku.ac.th")

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
		</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-487Q7SNYC7"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-487Q7SNYC7');
</script>





<form method="post" action="" name="FRM_LANG"></form>
<div id="header">
	<div class="wrapper">
		<div class="menu_button">
			<img src="icons/menu.svg" onclick="document.getElementById('header').classList.toggle('show-menu')" />
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


<!-- Begin Menu -->
<td width="200px">
	 <div id="title" class="boxed">
		 <h1 class="title">เมนูหลัก</h1> 		
	 </div> 
		<div id="menu" class="style4">
			<ul>
				<li><a href="first_page.php">ถอยกลับ</a></li>
			</ul>
	</div>			
</td>
<!-- End Menu -->
<!-- Begin Page Detail -->
<?php

if (!isset($_SESSION['student_id'])) {
    die("กรุณาเข้าสู่ระบบ");
}

$student_id = $_SESSION['student_id'];


$servername = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "sa";

$conn = new mysqli($servername, $username, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("การเชื่อมต่อกับฐานข้อมูลล้มเหลว: " . $conn->connect_error);
}

// สร้างคำสั่ง SQL โดยใช้ placeholder แทนที่ที่ต้องการใส่ค่า
$sql = "SELECT Student.*, Faculty.faculty_name, Department.department_name, Professor.professor_fname, Professor.professor_lname
FROM Student
LEFT JOIN Faculty ON Student.faculty_id = Faculty.faculty_id
LEFT JOIN Department ON Student.department_id = Department.department_id
LEFT JOIN Advisor ON Student.student_id = Advisor.student_id
LEFT JOIN Professor ON Advisor.professor_id = Professor.professor_id
WHERE Student.student_id = ?";

$stmt = $conn->prepare($sql);

// ผูกพารามิเตอร์ กับค่าที่จะป้อนเข้าไป
$stmt->bind_param("s", $student_id);

// ทำการ execute
$stmt->execute();

// รับผลลัพธ์
$result = $stmt->get_result();


$stmt->close();
$conn->close();
?>

<td width="730" valign="top">
    <TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0 Class=NormalDetail>
		<FORM AUTOCOMPLETE=OFF METHOD=POST ACTION="">
			<TD COLSPAN=4>ข้อมูลนักศึกษา <BR>
				<center>
					<IMG SRC=images/userImg.jpg WIDTH=165>
					<IMG SRC=images/graph.png WIDTH=165><BR>
					ความเชี่ยวชาญ  
				</center>
				<BR>
				<?php

				if ($result->num_rows > 0) {
					// มีข้อมูลนักศึกษา
					$row = $result->fetch_assoc();
					?>
					<table>
					<tr>
					<td>รหัสนักศึกษา:</td>
					<td><?php echo $row['student_id']; ?></td>
				</tr>
				<tr>
					<td>ชื่อ-สกุล:</td>
					<td><?php echo $row['student_fname'] . ' ' . $row['student_lname']; ?></td>
				</tr>
				<tr>
					<td>ชื่อ-สกุล (ภาษาอังกฤษ):</td>
					<td><?php echo $row['student_fname_eng'] . ' ' . $row['student_lname_eng']; ?></td>
				</tr>
				<tr>
					<td>คณะ:</td>
					<td><?php echo $row['faculty_name']; ?></td>
				</tr>
				<tr>
					<td>หลักสูตร:</td>
					<td><?php echo $row['department_name']; ?></td>
				</tr>
				<tr>
					<td>ระดับการศึกษา:</td>
					<td><?php echo $row['student_education_level']; ?></td>
				</tr>
				<tr>
					<td>ปีการศึกษา:</td>
					<td><?php echo $row['student_year_entered']; ?></td>
				</tr>
				<tr>
					<td>สถานภาพ:</td>
					<td><?php echo $row['student_status']; ?></td>
				</tr>
				<tr>
					<td>อาจารย์ที่ปรึกษา:</td>
					<td><?php echo $row['professor_fname'] . ' ' . $row['professor_lname']; ?></td>
				</tr>
					</table>
					<?php
				} else {
					
					echo "ไม่พบข้อมูลนักศึกษา";
				}
				?>
				<INPUT Class=Button TYPE=submit VALUE="แก้ไขข้อมูล" >
			</TD>    
		</FORM>
	</TABLE>
    <Br><Br>


        
<!-- End Page Detail -->
</tr>
</table>


</body>
</html>