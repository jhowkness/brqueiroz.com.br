<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
	<link rel="stylesheet"" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"/>
	<link href="style-monitor.css" rel="stylesheet">
	<title>BRQ - Monitor</title>
	
</head>

<?php
$profpic = "img/bg-header.jpg";
?>

<style type="text/css">

body {
background-image: url('<?php echo $profpic;?>');
}
</style>

<body class="dark" style="">
	
	<div id="" class="container-fluid row text-center" style="padding-top:10%">

		<iframe class="col-6" width=50% height=500 frameborder="1"
				src="https://brqmonitor.brazilsouth.cloudapp.azure.com/public/mapshow.htm?id=2097&mapid=DD68CAA8-3882-4CF2-8E53-0C741B8DD71A">
		</iframe>
		<iframe class="col-6" width=50% height=500 frameborder="1"
				src="http://186.224.97.38:8081/public/mapshow.htm?id=2287&mapid=79835DD1-DE03-432D-80B7-8012F93E46BF">
		</iframe>
		<iframe class="col-6" width=50% height=500 frameborder="1"
				src="http://186.224.97.38:8081/public/mapshow.htm?id=2289&mapid=B21B6E92-6EEC-4966-86A7-5AD68D189BA6">
		</iframe>
		<iframe class="col-6" width=50% height=500 frameborder="1"
				src="http://186.224.97.38:8081/public/mapshow.htm?id=2290&mapid=AAD6A08A-0D9E-423A-95FF-3A27D080E6E3">
		</iframe>
	</div>
</body>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src="media/js/bootstrap.min.js"></script>
<script src="media/js/script-monitor.js"></script>
</html>