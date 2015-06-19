<html>
<?php
include("./lang.php");
?>
<head>
		<meta charset="utf-8">
		<title>DEAL WIFI</title>
		<link rel="stylesheet" type="text/css" href="css/main.css?version=1">
		<link rel="icon" href="http://img.rafomedia.com/dealwifi/images/favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="http://img.rafomedia.com/dealwifi/images/favicon.ico" type="image/x-icon">
	</head>
	<body>
		<div class="wf_first">
			<div class="wf_content wf_fr_box">
				<div class="logo">
					<a href="#"><img src="http://img.rafomedia.com/dealwifi/images/logo.png"></a>
				</div>
				<h1 class="wf_fr_title"><?php echo getString(0);?></h1>
				<div class="wf_fr_txt">
					<?php echo getString(1);?>
				</div>
				
				<div class="wf_fr_down">
					<a class="wf_down_btn" href="./WIFI_setup.exe"><?php echo getString(2);?></a>
				</div>
				<div class="version">
					<?php echo getString(3);?>: 1.0.4.25491
				</div>
			</div>
		</div>
		
		<div class="wf_second">
			<div class="wf_content wf_scd_box">
				<div class="description">
					<div>
						<h1><?php echo getString(1);?></h1>
					<p><?php echo getString(4);?></p>
					</div>
				</div>
				<img src="http://img.rafomedia.com/dealwifi/images/tu1.png">
			</div>
		</div>
		
		<div class="wf_three">
			<div class="wf_content wf_tr_box">
				<div class="description">
					<div>
						<h1><?php echo getString(5);?></h1>
					<p><?php echo getString(6);?></p>
					</div>
				</div>
				<img src="http://img.rafomedia.com/dealwifi/images/tu2_<?php echo strtoupper($country_code)?>.png">
			</div>
		</div>
		
		<div class="wf_second">
			<div class="wf_content wf_scd_box wf_four_box">
				<div class="description">
					<div>
						<h1><?php echo getString(11);?></h1>
					<p><?php echo getString(12);?></p>
					</div>
				</div>
				<img src="http://img.rafomedia.com/dealwifi/images/tu3.png">
			</div>
		</div>
		
		<div class="wf_five">
			<div class="wf_content wf_tr_box">
				<div class="description">
					<div>
						<h1><?php echo getString(13);?></h1>
					<p><?php echo getString(14);?></p>
					</div>
				</div>
				<img src="http://img.rafomedia.com/dealwifi/images/tu4.png">
			</div>
		</div>

		

		<div class="wf_six">
			<div class="wf_content wf_six_box">
				<div class="wf_fr_down">
					<a class="wf_down_btn" href="./WIFI_setup.exe"><?php echo getString(2);?></a>
				</div>
				
			</div>
		</div>
		
		<div class="footer">
			<?php echo getString(15);?><br>
			<a href="./about.php"><?php echo getString(16);?></a>  |  <a href="./privacy.php"><?php echo getString(27);?></a>   |  <a href="./terms.php">Eula</a>   |  <a href="./uninstall.php"><?php echo getString(21);?></a> 
		</div>
	

</body></html>
