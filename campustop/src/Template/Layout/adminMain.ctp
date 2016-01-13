
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administration </title>

	
	<link href="<?= SITEURL; ?>webroot/css/bootstrap.css" type="text/css" rel="stylesheet">
	<link href="<?= SITEURL; ?>webroot/css/font-awesome.css" type="text/css" rel="stylesheet">
	
	<link href="<?= SITEURL; ?>webroot/css/custom-styles.css" type="text/css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	<link href="<?= SITEURL; ?>webroot/js/dataTables/dataTables.bootstrap.css" type="text/css" rel="stylesheet">



	



	
	<link href="<?= SITEURL; ?>webroot/js/dataTables/dataTables.bootstrap.js" type="text/javascript" >
    
   	<script src="<?= SITEURL; ?>webroot/js/jquery-1.10.2.js"></script>
   		
  
   		<script src="<?= SITEURL; ?>webroot/js/dataTables/jquery.dataTables.js"></script>
    <script src="<?=SITEURL; ?>webroot/js/bootstrap.min.js"></script>
    <script src="<?=SITEURL; ?>webroot/js/jquery.metisMenu.js"></script>
    <script src="<?=SITEURL; ?>webroot/js/morris/morris.js"></script>

    <script src="<?php echo SITEURL; ?>webroot/js/morris/raphael-2.1.0.min.js"></script>
  
    
    <!--<script src="<?= SITEURL; ?>webroot/js/custom.js"></script>-->
  

	<?php
		
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>

<body>
    <div id="wrapper">
        <?= $this->element('headeradmin') ?>
        <?= $this->element('sidebaradmin') ?>
       	<div id="page-wrapper">
       	 	<div id="page-inner">
       	 		<?= $this->fetch('content'); ?>
			</div>
				
			<?= $this->element('footeradmin'); ?>
		</div>
    </div>
</body>

</html>