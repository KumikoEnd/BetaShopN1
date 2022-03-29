<?php
$menudb = "SELECT name, link, type FROM menu";
$menucon = $conn->query($menudb);
?>
<ul class="menu">
<?php
while($menu = $menucon->fetch_assoc()){
	if($menu["type"] == 1){
		echo "<li><a href='".$rlink. $menu["link"]. "'>". $menu["name"]."</a></li>";
	}else if($menu["type"] == 2){
		echo "<li><a href='http://".$conf["host"]."/". $menu["link"]. "'>". $menu["name"]."</a></li>";
	}
}
?>
	</ul>