<?php require_once "../service/person_service.php"; ?>


<?php
session_start();
?>

<table width="70%" height="50%" cellspacing="0" cellpadding="10" border="1" align="center">
    <tr>
        <td colspan="2" valign="middle" height="30">
            <table width="100%">
                <tr>
                    <td>
                        <a href="../user_dashboard.php" target="contentFrame">
                            <img alt="SHEBA" width="130" height="70" src="../Capture.png">
                        </a>
                    </td>
                    <td align="right">
                    	<font size="4">
                        Logged in as <a href="profile.php" target="contentFrame"> <?= $_SESSION['uName']; ?> </a>&nbsp;|
                        <a href="../settings.html" target="contentFrame">Settings</a>&nbsp;|
                        <a href="../web_index.html">Logout</a>
                    	</font>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td width="200" valign="top">
        	<font size="4">
        	<ul>
        	<li><a href="../medical_news.html" target="contentFrame"><label>Medical News</label></a></li><br>
            <li><a href="medicine_list.php" target="contentFrame"><label>Medicine List</label></a></li><br>
            <li><a href="../healthTips.html" target="contentFrame"><label>Health Tips</label></a></li><br>
            <li><a href="../Black_Listed_Medicines.html" target="contentFrame"><label>Black Listed Drugs</label></a></li><br>
            <li><a href="../Blood_Bank.html" target="contentFrame"><label>Blood Bank</label></a></li><br>
            <li><a href="other_products.html" target="contentFrame"><label>Other Products</label></a></li>
        	</ul>
        </font>
        </td>
        <td valign="top">
            <iframe name="contentFrame" frameborder="0" width="100%" height="530" src="../user_dashboard.php"></iframe>
        </td>
    </tr>
    <tr>
        <td colspan="2" align="center">
            Copyright &copy; 2017
        </td>
    </tr>
</table>