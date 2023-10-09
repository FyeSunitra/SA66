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
    function gtag() { dataLayer.push(arguments); }
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
                        var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", { imgDown: "style/popupmenu/SpryMenuBarDown.gif", imgRight: "style/popupmenu/SpryMenuBarRight.gif" });
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
                                    <TD COLSPAN=4>ค้นหากิจกรรม <BR>
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
                                        ?>
                                        รหัสกิจกรรม <INPUT Class=NormalDetail TYPE=TEXT NAME=activity_id SIZE=20><BR>
                                        ชื่อกิจกรรม <INPUT Class=NormalDetail TYPE=TEXT NAME=activity_name SIZE=20><BR>

                                        <select name="departmentid" style="width: 100%">
                                            <option value="all" selected>สาขา</option>
                                            <?php
                                            $sql = "SELECT department_name FROM Department";
                                            echo 'สาขา'; // เพิ่มบรรยายด้านบนที่นี่
                                            $result = $conn->query($sql);

                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
                                                    echo '<option value="' . $row['department_name'] . '">' . $row['department_name'] . '</option>';
                                                }
                                            }
                                            ?>
                                        </select>

                                        <select name="facultyid" style="width: 100%">
                                            <option value="all" selected>คณะ</option>
                                            <?php
                                            $sql = "SELECT faculty_name FROM Faculty";
                                            $result = $conn->query($sql);

                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
                                                    echo '<option value="' . $row['faculty_name'] . '">' . $row['faculty_name'] . '</option>';
                                                }
                                            }
                                            ?>
                                        </select>

                                        <INPUT Class=Button TYPE=submit VALUE=ค้นหา>
                                    </TD>
                                </TR>
                            </FORM>
                        </TABLE>
                        <Br><Br>
                        <TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0 Class=NormalDetail>
                            <FORM AUTOCOMPLETE=OFF METHOD=POST ACTION="">
                                <TR VALIGN=TOP>
                                    <TD COLSPAN=4>
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

                                        // ตรวจสอบการส่งค่ารหัสกิจกรรมและชื่อกิจกรรมมาจากผู้ใช้
                                        if (isset($_POST['coursename']) && !empty($_POST['coursename'])) {
                                            $coursename = $_POST['coursename'];
                                            // ใช้ $coursename ในการคิวรี่หากมีการกรอกข้อมูลรหัสกิจกรรม
                                        } else {
                                            $coursename = "";
                                        }

                                        // ตรวจสอบการส่งค่าสาขาและคณะมาจากผู้ใช้
                                        if (isset($_POST['departmentid']) && $_POST['departmentid'] != "all") {
                                            $departmentid = $_POST['departmentid'];
                                            // ใช้ $departmentid ในการคิวรี่หากมีการเลือกสาขา
                                        } else {
                                            $departmentid = "";
                                        }

                                        if (isset($_POST['facultyid']) && $_POST['facultyid'] != "all") {
                                            $facultyid = $_POST['facultyid'];
                                            // ใช้ $facultyid ในการคิวรี่หากมีการเลือกคณะ
                                        } else {
                                            $facultyid = "";
                                        }

                                        // ตรวจสอบการส่งรหัสกิจกรรมและชื่อกิจกรรม
                                        $coursename_id = (isset($_POST['activity_id']) && !empty($_POST['activity_id'])) ? $_POST['activity_id'] : "";
                                        $coursename_name = (isset($_POST['activity_name']) && !empty($_POST['activity_name'])) ? $_POST['activity_name'] : "";

                                        // ตรวจสอบการส่งค่าสาขาและคณะ
                                        $departmentid = (isset($_POST['departmentid']) && $_POST['departmentid'] != "all") ? $_POST['departmentid'] : "";
                                        $facultyid = (isset($_POST['facultyid']) && $_POST['facultyid'] != "all") ? $_POST['facultyid'] : "";

                                        // ตรวจสอบการส่งค่ารหัสกิจกรรมและชื่อกิจกรรมมาจากผู้ใช้
                                        $coursename_id = (isset($_POST['activity_id']) && !empty($_POST['activity_id'])) ? $_POST['activity_id'] : "";
                                        $coursename_name = (isset($_POST['activity_name']) && !empty($_POST['activity_name'])) ? $_POST['activity_name'] : "";

                                        // สร้าง SQL query เพื่อค้นหาข้อมูล
                                        $sql = "SELECT a.activity_id, a.activity_name, d.department_name, f.faculty_name, ad.activitydata_date
FROM Activity a
LEFT JOIN Department d ON a.department_id = d.department_id
LEFT JOIN Faculty f ON a.faculty_id = f.faculty_id
LEFT JOIN ActivityData ad ON a.activity_id = ad.activity_id
WHERE 1=1";

                                        if (!empty($coursename_id)) {
                                            $sql .= " AND a.activity_id LIKE '%$coursename_id%'";
                                        }

                                        if (!empty($coursename_name)) {
                                            $sql .= " AND a.activity_name LIKE '%$coursename_name%'";
                                        }

                                        if (!empty($departmentid)) {
                                            $sql .= " AND d.department_name LIKE '%$departmentid%'";
                                        }

                                        if (!empty($facultyid)) {
                                            $sql .= " AND f.faculty_name LIKE '%$facultyid%'";
                                        }

                                        $result = $conn->query($sql);
                                        ?>

                                        <!-- ตารางที่แสดงข้อมูล -->
                                        <table BORDER=0 CELLSPACING=0 CELLPADDING=0 Class=NormalDetail>
                                            <FORM AUTOCOMPLETE=OFF METHOD=POST
                                                ACTION="class_info_1.asp?avs279740299=26&backto=adddrop">
                                                <TR VALIGN=TOP>
                                                    <TD COLSPAN=4>
                                                <tr>
                                                    <th>รหัสกิจกรรม</th>
                                                    <th>ชื่อกิจกรรม</th>
                                                    <th>สาขาวิชา</th>
                                                    <th>คณะ</th>
                                                    <th>วันที่</th>
                                                </tr>
                                                <?php
                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {
                                                        echo '<tr>';
                                                        echo '<td><a href="regActivity.php?activity_id='.$row['activity_id'].'">' . $row['activity_id'] . '</a></td>';
                                                        echo '<td>' . $row['activity_name'] . '</td>';
                                                        echo '<td>' . $row['department_name'] . '</td>';
                                                        echo '<td>' . $row['faculty_name'] . '</td>';
                                                        echo '<td>' . $row['activitydata_date'] . '</td>';
                                                        echo '</tr>';
                                                    }
                                                } else {
                                                    echo '<tr><td colspan="5">ไม่พบข้อมูล</td></tr>';
                                                }
                                                ?>
                                            </FORM>
                                    </TD>
                                </TR>
                </TR>
            </table>
            </FORM>
            </TD>
            </TR>
            </TABLE>

            </TD>
            </TR>

            </TABLE>


            <!-- End Page Detail -->
            </tr>
            </table>


</body>

</html>