<?php
$menudb = "SELECT * FROM menu";
			$m = $conn->query($menudb);
			while($m2 = $m->fetch_assoc()){
					if($m2['type'] == 5){
						echo "<li class='lista-li'><a href='".$rlink."ucp/". $m2["link"]. "'>". $m2["name"]."</a></li>";
					}else if($m2["type"] == 10 && $usuario['privilegio']>8){
						echo "<li class='lista-li'><a href='".$rlink."ucp/". $m2["link"]. "'>". $m2["name"]."</a></li>";
					}
			}
?>