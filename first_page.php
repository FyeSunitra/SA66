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
        var x = ap_getObj(div); x.visibility = (flag) ? 'visible' : 'hidden'
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
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-437953730"></script>



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
                            <h2 class="title">เมนูหลัก</h2>
                        </div>
                        <div id="menu" class="style4">
                            <ul>


                                <li><A href="userInfo.php">ประวัติส่วนตัว</A></LI>
                                <li><A href="search.php">ค้นหากิจกรรม</a></li>
                                <li><A href="details.php">
                                        <font color='#0000EE'>ประวัติการเข้าร่วม</font>
                                    </A></LI>
                                <li><A href="req.php">ขอเกียรติบัตร</A></Li>
                                <li><A href="logout.php">ออกจากระบบ</A></Li>




                                <!-- Begin Page Detail -->
                    <td width="730" valign="top">
                        <div
                            style="border: 1px solid #dadada;padding: 5px 10px;border-radius: 4px;margin-bottom: 10px;background-color: #f5f5f5;">
                            ยินดีต้อนรับเข้าสู่ระบบบันทึกความเชี่ยวชาญนักศึกษา
                        </div>
                        <div style="margin: 10px 0px;box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.2);border-radius: 4px;">
                            <div
                                style="font-weight: bold;line-height: 1.3;background-color: #a73b23;color: #fff;border-top-left-radius: 4px;border-top-right-radius: 4px;padding: 10px;">
                                กิจกรรม
                            </div>
                            <div
                                style="padding: 10px;background-color: #fff;border-bottom-left-radius: 4px;border-bottom-right-radius: 4px;">

                                <!-- เริ่มโค้ด PHP สำหรับแสดงข้อมูลกิจกรรม -->
                                <?php
                                // การเชื่อมต่อกับฐานข้อมูล MySQL
                                $servername = "localhost"; // เปลี่ยนตามการกำหนดค่าของคุณ
                                $username = "root"; // เปลี่ยนตามการกำหนดค่าของคุณ
                                $password = ""; // เปลี่ยนตามการกำหนดค่าของคุณ
                                $dbname = "SA"; // เปลี่ยนตามการกำหนดค่าของคุณ
                                
                                $conn = new mysqli($servername, $username, $password, $dbname);

                                // ตรวจสอบการเชื่อมต่อ
                                if ($conn->connect_error) {
                                    die("การเชื่อมต่อกับฐานข้อมูลล้มเหลว: " . $conn->connect_error);
                                }

                                // คำสั่ง SQL สำหรับดึงข้อมูล
                                $sql = "SELECT News_name, News_description, News_date FROM News";

                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    // แสดงข้อมูลในตาราง HTML
                                    echo '<table>';
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<tr>';
                                        echo '<td style="color: #a73b23;padding: 10px;border-top: 1px solid #e6e6e6;border-left: 1px solid #e6e6e6;border-right: 1px solid #e6e6e6;border-bottom: 1px solid #e6e6e6;border-top-left-radius: 4px;border-top-right-radius: 4px;background-color: #f5f5f5;">';
                                        echo '<img style="width: 14px;height: 14px;margin-right: 5px;" src="icons/newspaper.svg" />';
                                        echo '<a style="text-decoration: none" href="http://registrar.kku.ac.th/docs/one-stop/online_request.pdf">' . $row['News_name'] . '</a>';
                                        echo '</td>';
                                        echo '</tr>';
                                        echo '<tr>';
                                        echo '<td style="padding: 10px;border-left: 1px solid #e6e6e6;border-right: 1px solid #e6e6e6">';
                                        echo 'รายละเอียด: ' . $row['News_description'] . '<br>';
                                        echo 'วันที่: ' . $row['News_date'];
                                        echo '</td>';
                                        echo '</tr>';
                                        echo '<tr style="height: 10px">';
                                        echo '<td></td>';
                                        echo '</tr>';
                                    }
                                    echo '</table>';
                                } else {
                                    echo "ไม่พบข้อมูลข่าว";
                                }

                                $conn->close();
                                ?>
                            </div>
                        </div>

                        <!-- End Page Detail -->
                </tr>
            </table>
</body>

</html>