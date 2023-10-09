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





<!-- Google tag (gtag.js) -->
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
                                <li><a href="first_page.php">ถอยกลับ</a></li>
                            </ul>
                        </div>
                    </td>
                    <!-- End Menu -->
                    <!-- Begin Page Detail -->
                    <td width="730" valign="top">
                        <TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0 Class=NormalDetail>
                            <FORM AUTOCOMPLETE=OFF METHOD=POST ACTION="">
                                <TR VALIGN=TOP>
                                    <TD COLSPAN=4>ร้องขอเกียรติบัตร <BR>
                                        <?php
                                        $servername = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbname = "sa";

                                        $conn = new mysqli($servername, $username, $password, $dbname);

                                        // ตรวจสอบการเชื่อมต่อ
                                        if ($conn->connect_error) {
                                            die("การเชื่อมต่อกับฐานข้อมูลล้มเหลว: " . $conn->connect_error);
                                        }

                                        $student_id = $_SESSION['student_id'];

                                        $sql = "SELECT s.*, f.faculty_name 
                                        FROM Student s 
                                        JOIN Faculty f ON s.faculty_id = f.faculty_id 
                                        WHERE s.student_id = ?";

                                        $stmt = $conn->prepare($sql);
                                        $stmt->bind_param("s", $student_id);
                                        $stmt->execute();
                                        $student_data = $stmt->get_result()->fetch_assoc();
                                        $stmt->close();

                                        echo "ชื่อ - " . $student_data['student_fname'] . " " . $student_data['student_lname'];
                                        echo "<br>รหัสนักศึกษา - " . $student_data['student_id'];
                                        echo "<br>คณะ - " . $student_data['faculty_name'];
                                        ?>

                                        <select name="activity_id" style="width: 100%">
                                            <option value="all" selected>ข้อมูลกิจกรรม</option>
                                            <?php
                                            $sql = "SELECT activitydata_description, activity_id FROM ActivityData WHERE student_id = ?";
                                            $stmt = $conn->prepare($sql);
                                            $stmt->bind_param("s", $student_id);
                                            $stmt->execute();
                                            $result = $stmt->get_result();

                                            while ($row = $result->fetch_assoc()) {
                                                echo '<option value="' . $row['activity_id'] . '">' . $row['activity_id'] . ' : ' . $row['activitydata_description'] . '</option>';
                                            }
                                            $stmt->close();
                                            ?>
                                        </select>
                 
                                        <INPUT Class=Button TYPE=submit VALUE=ร้องขอเกียรติบัตร onclick="alert('ส่งคำร้องขอเสร็จสิ้น');">

                                    </TD>
                                </TR>
                            </FORM>
                        </TABLE>
                        <Br><Br>
                </tr>
            </table>


</body>


</html>