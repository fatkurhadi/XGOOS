<?php
if (isset($_SESSION['username'])) {
  header('location:main.php?cart');
}
else
{
require ('../koneksi.php');
include ('ip.php');
?>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
            </div>
            <!-- /.row -->
<?php
}
?>