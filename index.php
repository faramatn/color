<html>
	<head>
		<style type="text/css">
		.box{
			float:right;
			width:calc(5% - 1px);
			margin:1px 1px 0 0;
			height:40px;
		}
		</style>
		<title>COLOR 0.01</title>
	</head>
	<body style="padding:0; margin:0">
		<?php
			for($a=0;$a<16;$a++){
				for($b=0;$b<16;$b++){
					for($c=0;$c<16;$c++){
						$color= "#".dechex($a).dechex($b).dechex($c);
						echo "<div class='box' style='color:".$color.";background:".$color."'>".$color."</div>";
					}
				}
			}
		?>
	</body>
</html>
