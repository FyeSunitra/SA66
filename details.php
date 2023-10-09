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
</script><!--
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-73311925-2', 'auto');
  ga('send', 'pageview');

</script>
-->



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

                                </TR>
                            </FORM>
                        </TABLE>
                        <Br><Br>
                        <TABLE BORDER=0 CELLSPACING=0 CELLPADDING=0 Class=NormalDetail>
                            <FORM AUTOCOMPLETE=OFF METHOD=POST ACTION="">
                                <TR VALIGN=TOP>
                                    <h1>ประวัติการเข้าร่วม</h1>
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


                                        $sql = "SELECT a.activity_id, ad.activitydata_description, d.department_name, f.faculty_name, ad.activitydata_date
                                        FROM ActivityData ad 
                                        INNER JOIN Activity a ON ad.activity_id = a.activity_id 
                                        INNER JOIN Department d ON a.department_id = d.department_id 
                                        INNER JOIN Faculty f ON d.faculty_id = f.faculty_id 
                                        WHERE ad.student_id = ?";

                                        $stmt = $conn->prepare($sql);
                                        $stmt->bind_param("s", $student_id);
                                        $stmt->execute();
                                        $result = $stmt->get_result();

                                        $stmt->close();
                                        ?>


                                        <!-- ตารางที่แสดงข้อมูล -->
                                        <table BORDER=0 CELLSPACING=0 CELLPADDING=0 Class=NormalDetail>
                                            <FORM AUTOCOMPLETE=OFF METHOD=POST ACTION="class_info_1.asp?avs279740299=26&backto=adddrop">
                                                <TR VALIGN=TOP>
                                                <tr>
                                                    <th>รหัสกิจกรรม</th>
                                                    <th>ชื่อกิจกรรม</th>
                                                    <th>สาขาวิชา</th>
                                                    <th>คณะ</th>
                                                    <th>วันที่</th>
                                                </tr>
                                                <?php
                                                while ($row = $result->fetch_assoc()) {
                                                    echo "<tr>";
                                                    echo "<td>" . $row['activity_id'] . "</td>";
                                                    echo "<td>" . $row['activitydata_description'] . "</td>";
                                                    echo "<td>" . $row['department_name'] . "</td>";
                                                    echo "<td>" . $row['faculty_name'] . "</td>";
                                                    echo "<td>" . $row['activitydata_date'] . "</td>";
                                                    echo "</tr>";
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