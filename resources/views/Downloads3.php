<?php
//adding external connection file
require_once('connection.php');

?>
<!DOCTYPE html>
<html lang="en">
<?php include('Head.php'); ?>

<body>
    <style>
        .Downloads {
            margin-top: 20px;
        }

    </style>
    <?php include('Top.php');?>
    <div class="ui stackable grid">
        <div class="Downloads contentBox" style="width: 100%;">
            <div class="heading">
                <h1 class="ui horizontal divider header">
                    Downloads
                </h1>
            </div>
            <!--/heading-->

            <div class="ui horizontal divider"></div>

            <div class="downloadsBox">

                <table border="0" cellspacing="0" cellpadding="0" width="100%">
                    <tr>
                        <td height="31" colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                        <!--td width="22%" height="275">&nbsp;
                            <div align="center"><a class="vlightbox0" href="Signal/PDF/Signal Apr, May 2014.pdf" title="Dowload Latest Edition of Signal"><img src="Signal/Thumbnail/signal latest.jpg" alt="" width="128" height="171" border="0" /></a> </div>
                            <p align="center"><span class="style2"><a href="signal.php" title="Click Here to view old editions">SIGNAL MAGAZINE</a></span></p>
                        </td-->
                        <!--td width="22%" height="275">&nbsp;
                            <div align="center"><a href="Signal/PDF/NL Jul, Aug 2014.pdf" title="Download Latest Edition of Newsletter"><img src="Signal/Thumbnail/Newsletter latest.jpg" alt="" name="Newsletter" width="128" height="171" border="0" id="Newsletter" /></a> </div>
                            <p align="center">&nbsp;<span class="style2"><a href="Newsletter.php" title="Click Here to view old editions"> NEWSLETTER</a></span></p>
                        </td-->
                    </tr>
                    <tr>
                        <td height="222">
                            <div align="center"><a href="Signal/PDF/Highway_Code_Book.pdf" title="Download Highway Code Book"><img src="Signal/Thumbnail/Code book.jpg" alt="" name="CodeBook" width="128" height="158" border="0" id="CodeBook" /></a> </div>
                            <p align="center"><span class="style4"><a href="Signal/PDF/Highway_Code_Book.pdf" class="style2" title="Download Highway Code Book">HIGHWAY CODE BOOK</a></span></p>
                        </td>
                        <td height="222">
                            <div align="center"><a href="books.php"><img src="Signal/Thumbnail/book.png" alt="" name="" width="128" height="156" border="0" /></a> </div>
                            <p align="center"><span class="style2"><a href="books.php">LAW / USEFULL BOOKS</a></span></p>
                        </td>
                    </tr>
                </table>
            </div>
            <!--/Downloads-->
        </div>
        <!--/Downloads ContentBox-->
    </div>
    <br>
    <?php include('Footer.php');?>

    <!--LiveChat Script(powered by mylivechat.com)-->
    <script type="text/javascript">
        function add_chatinline() {
            var hccid = 13875899;
            var nt = document.createElement("script");
            nt.async = true;
            nt.src = "https://mylivechat.com/chatinline.aspx?hccid=" + hccid;
            var ct = document.getElementsByTagName("script")[0];
            ct.parentNode.insertBefore(nt, ct);
        }
        add_chatinline();

    </script>
    <!--/LiveChat Script-->
</body>

</html>
