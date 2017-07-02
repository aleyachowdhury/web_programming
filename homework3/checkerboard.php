<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset = "utf-8">
	<title>checkerboard</title>
</head>
<link rel="stylesheet" type="text/css" href="checkerboard.css">
<body>
		<?php
		     echo "<table>";
				for($rows=1; $rows<=8; $rows++){
					echo "<tr>";
					for($cols=1; $cols<=8; $cols++){
						$i=$rows+$cols;
				
						if($i % 2== 0){
							echo '<td id="black"></td>';
							
						}
						else{
							echo '<td id="red"></td>';
						
						}
					}
				echo "</tr>";
				}
		    echo "</table>";
?>
</body>
</html>