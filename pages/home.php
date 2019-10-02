<?php
include ('../koneksi.php');
?>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
<?php
$qc = mysqli_query($conf, "select * from kategori order by id_kategori");
while($rc = mysqli_fetch_array($qc)){
?>
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <a href="?ca=<?php echo $rc['id_kategori'];?>">
                    <div class="panel panel-default" align="center">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12">
                                    <i class="fa fa-5x <?php echo $rc['icon'];?>"></i>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <div class="clearfix"><?php echo $rc['nama_kategori'];?></div>
                        </div>
                    </div>
                    </a>
                </div>
<?php
}
?>
            </div>
            <!-- /.row -->
            <div class="row">
<?php
$qs = mysqli_query($conf, "select * from stuff limit 16 order by tgl_masuk desc");
while($rs = mysqli_fetch_array($qs)){
?>
                <div class="col-lg-3 col-md-4 col-xs-12" style="margin-top:12px;">
                    <a href="?stuff=<?php echo $rs['id_stuff'];?>">
                    <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px; height:350px;" align="center">
						<div style="height:155px;"><img src="../stuff/<?php echo $rs['photo']; ?>" class="img-responsive" /></div><br />
						<h4 class="text-info"><?php echo $rs['nama_stuff']; ?></h4>
						<h4 class="text-danger">Rp.&nbsp; <?php echo number_format($rs['harga'],0,".",","); ?></h4>
					</div>
                    </a>
                </div>
<?php
}
?>
            </div>
            <!-- /.row -->