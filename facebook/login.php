<?php 
ob_start();
session_start();
include_once('src/facebook.php');
include('header.php');
include('sidebar.php');
$params = array(
    'appId' => '458086794383584',
    'secret' => '760a513033ddbf86528b7c190d18da46',
);
$facebook = new Facebook($params);
$log = $facebook->getLoginUrl(array('scope' => 'user_photos'));
?>
<style>
.box-content {
	display: inline-block;
	width: 200px;
    padding: 10px;
}

.bottom {
	border-bottom: 1px solid #ccc;
}

.right {
	border-right: 1px solid #ccc;
}
</style>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

					 <h2>Login with Facebook</h2>
                               	
						<div class="row right">
							<div class="col-md-12">
		                  <hr style="size: 10px;"/>
                                <?php
                                  echo "<a class='btn btn-info' href='".$log."'>Sign in with Facebook</a>";
                                ?>

                     </div>
	               </div>						
				</div>	
			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap-select.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery.dataTables.min.js"></script>
	<script src="../js/dataTables.bootstrap.min.js"></script>
	<script src="../js/Chart.min.js"></script>
	<script src="../js/fileinput.js"></script>
	<script src="../js/chartData.js"></script>
	<script src="../js/main.js"></script>

</body>

</html>

