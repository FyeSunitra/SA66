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

    <script src="https://unpkg.com/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/sweetalert2@11/dist/sweetalert2.min.css">


    <script type="text/javascript">
        function onDocumentLoaded() {
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
<div id="waitDiv" style="position:absolute;visibility:hidden"><img id="waitIMG" src=images/common/misc/Loading.gif>
</div>
<script type="text/javascript">
    function windowwidth() {
        if (navigator.userAgent.indexOf("MSIE") > 0) w = document.body.clientWidth;
        else w = window.outerWidth;
        return w;
    }

    function windowheight() {
        if (navigator.userAgent.indexOf("MSIE") > 0) h = document.body.clientHeight;
        else h = window.outerHeight;
        return h;
    }
    var DHTML = (document.getElementById || document.all || document.layers);
    if (DHTML) {
        var obj = document.getElementById("waitDiv");
        obj.style.left = (windowwidth() - waitIMG.width) / 2;
        obj.style.top = (windowheight() - waitIMG.height) / 2;
    }

    function ap_getObj(name) {
        if (document.getElementById) {
            return document.getElementById(name).style;
        } else if (document.all) {
            return document.all[name].style;
        } else if (document.layers) {
            return document.layers[name];
        }
    }

    function ap_showWaitMessage(div, flag) {
        if (!DHTML) return;
        var x = ap_getObj(div);
        x.visibility = (flag) ? 'visible' : 'hidden'
    }

    ap_showWaitMessage('waitDiv', 1); //แสดงในครั้งแรก
</script>
<script type="text/javascript">
    function chk_lang(langid, xpage) {
        var i_lang = langid;
        var x = xpage;



        document.cookie = "CKLANG=" + i_lang + ";";
        document.FRM_LANG.submit();


    }
</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=G-487Q7SNYC7"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-487Q7SNYC7');
</script>



<body onload="ap_showWaitMessage('waitDiv', 0);">

    <kku-cookie-widget></kku-cookie-widget>

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
                        var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {
                            imgDown: "style/popupmenu/SpryMenuBarDown.gif",
                            imgRight: "style/popupmenu/SpryMenuBarRight.gif"
                        });
                    </script>


                    <!-- Begin Menu -->
                    <td width="200px">
                        <div id="title" class="boxed">
                            <h1 class="title">เมนูหลัก</h1>
                        </div>
                        <div id="menu" class="style4">
                            <ul>
                                <li><a href="search.php">ถอยกลับ</a></li>
                            </ul>
                        </div>
                    </td>
                    <!-- End Menu -->
                    <!-- Begin Page Detail -->
                    <td width="730" valign="top">
                        <TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0 Class=NormalDetail>
                            <FORM AUTOCOMPLETE=OFF METHOD=POST ACTION="">
                                <TR VALIGN=TOP>
                                    <TD COLSPAN=4>ลงทะเบียนกิจกรรม <BR>
                                        <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "sa";

                                        $conn = new mysqli($servername, $username, $password, $dbname);

                                        if ($conn->connect_error) {
                                            die("การเชื่อมต่อกับฐานข้อมูลล้มเหลว: " . $conn->connect_error);
                                        }

                                        

                                        $activity_id = $_POST['activity_id'] ?? $_GET['activity_id'] ?? '';

                                        if (!empty($activity_id)) {
                                            $stmt = $conn->prepare("SELECT a.activity_id, a.activity_name, d.department_name, f.faculty_name
                                                FROM Activity a
                                                LEFT JOIN Department d ON a.department_id = d.department_id
                                                LEFT JOIN Faculty f ON a.faculty_id = f.faculty_id
                                                WHERE activity_id = ?");
                                            $stmt->bind_param("s", $activity_id);
                                            $stmt->execute();
                                            $activityResult = $stmt->get_result();

                                            if ($activityResult->num_rows > 0) {
                                                $activity = $activityResult->fetch_assoc();
                                            }
                                            $stmt->close();
                                        }
                                        ?>

                                        <form method="POST" action="">
                                            รหัสกิจกรรม <INPUT Class=NormalDetail TYPE=TEXT NAME=activity_id SIZE=20 value="<?php echo $activity_id; ?>"><BR>
                                            ชื่อกิจกรรม <INPUT Class=NormalDetail TYPE=TEXT NAME=activity_name SIZE=20 value="<?php echo $activity['activity_name'] ?? ''; ?>"><BR>
                                            สาขา <INPUT Class=NormalDetail TYPE=TEXT NAME=department_name SIZE=20 value="<?php echo $activity['department_name'] ?? ''; ?>"><BR>
                                            คณะ <INPUT Class=NormalDetail TYPE=TEXT NAME=faculty_name SIZE=20 value="<?php echo $activity['faculty_name'] ?? ''; ?>"><BR>

                                            <INPUT Class=Button TYPE=submit VALUE=ยืนยัน>
                                        </form>

                                        <?php
                                        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_SESSION['student_id'])) {
                                            $student_id = $_SESSION['student_id'];
                                        
                                            // รับค่าที่ส่งมาจากฟอร์ม
                                            $activity_name_posted = $activity['activity_name'];
                                            $activity_id_posted = $activity_id;
                                        
                                            // เตรียมคำสั่ง SQL สำหรับการเพิ่มข้อมูลลงในตาราง ActivityData
                                            $sql = "INSERT INTO ActivityData (activitydata_id, activitydata_description, activitydata_participate, activitydata_date, activity_id, student_id)
                                                    VALUES (NULL, ?, 1, CURDATE(), ?, ?)"; 
                                        
                                            $stmt = $conn->prepare($sql);
                                            $stmt->bind_param("sss", $activity_name_posted, $activity_id_posted, $student_id);
                                        
                                            if ($stmt->execute()) {
                                                // บันทึกข้อมูลสำเร็จ
                                                echo '<script>
                                                    alert("บันทึกข้อมูลสำเร็จ");
                                                    // ทำการ redirect หรือทำอื่นๆ ตามที่ต้องการหลังจากบันทึกข้อมูล
                                                </script>';
                                            } else {
                                                // บันทึกข้อมูลไม่สำเร็จ
                                                echo '<script>
                                                    alert("เกิดข้อผิดพลาดในการบันทึกข้อมูล");
                                                </script>';
                                            }
                                            $stmt->close();
                                        }
                                        ?>
                                    </TD>

                                </TR>
                            </FORM>
                        </TABLE>
                        <Br><Br>
                    </td>
                </tr>
            </table>
        </div>
</body>
<script>
    document.querySelector(".Button").addEventListener("click", function(e) {
        e.preventDefault();

        Swal.fire({
            title: 'ยืนยันการลงทะเบียน?',
            text: "คุณต้องการลงทะเบียนกิจกรรมนี้หรือไม่?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ยืนยัน',
            cancelButtonText: 'ยกเลิก'
        }).then((result) => {
            if (result.isConfirmed) {
                document.querySelector("form").submit();
            }
        });
    });
</script>

</html>