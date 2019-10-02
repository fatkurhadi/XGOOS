<script type="text/javascript">
function showTime() {
    var a_p = "";
    var today = new Date();
    var curr_hour = today.getHours();
    var curr_minute = today.getMinutes();
    var curr_second = today.getSeconds();
    if (curr_hour < 12) {
        a_p = "AM";
    } else {
        a_p = "PM";
    }
    if (curr_hour == 0) {
        curr_hour = 12;
    }
    if (curr_hour > 12) {
        curr_hour = curr_hour - 12;
    }
    curr_hour = checkTime(curr_hour);
    curr_minute = checkTime(curr_minute);
    curr_second = checkTime(curr_second);
    document.getElementById('time').innerHTML=" " + curr_hour + ":" + curr_minute + " " + a_p;
}
 
function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}
setInterval(showTime, 500);
</script>
<?php
require ('../koneksi.php');
$user = $_SESSION['username'];

$sql = mysqli_query($conf, "SELECT * from `users` WHERE `username`= '$user'") or die(mysqli_error($conf));
$row = mysqli_fetch_array($sql);
?>
            <div class="row">
                <div class="col-lg-12">
<?php
if ($row['aktif'] == "N"){
?>
					<div class="page-header"></div>
                    <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.
                    </div>
<?php
}else{
?>
					<div class="page-header"></div>
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.
                    </div>
<?php
}
?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Profile Information
                        </div>
                        <div class="panel-body">
                            <div class="col-lg-2 col-xs-4">
								<img src="../images/xgoos.png" width="100%" height="auto" alt="">
							</div>
                            <div class="col-lg-1 col-xs-1">
                            </div>
                            <div class="col-lg-4 col-xs-7">
                                <p>Hello <?php echo $row['nama'];?>, welcome to XGOOS. Complete your information so you can use the service easily.</p>
                                <p><i class="fa">@</i><?php echo $row['username'];?></p>
								<p><i class="fa fa-envelope"> <?php echo $row['email'];?></i></p>
								<p><i class="fa fa-phone"> <?php echo $row['telpon'];?></i></p>
                                <h6>
                                    <span><i class="fa fa-clock-o" id="time"></i></span>
                                    <span><i class="fa fa-calendar-o" id="date"></i></span>
<script type="text/javascript">
var date = new Date();
var day = date.getDate();
var month = date.getMonth();
var yy = date.getYear();
var year = (yy < 1000) ? yy + 1900 : yy;

document.getElementById('date').innerHTML=" " + day + "." + month + "." + year;
</script>
                                </h6>
                            </div>
                            <div class="col-lg-2 col-xs-12">
                            </div>
                            <div class="col-lg-3 col-xs-12">
                                <ul>
                                    <li>
                                        <i class="fa fa-map-marker fa-2x"> </i><br>		  
										<?php echo $row['alamat'];?>, <?php echo $row['kota'];?> <?php echo $row['provinsi'];?>. <?php echo $row['pos'];?>
                                    </li>
								</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->