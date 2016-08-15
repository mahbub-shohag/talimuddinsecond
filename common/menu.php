<a id="responsive-menu-button" href="#swipe-menu">
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>		
			</a>	

            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse" id="swipe-menu-responsive">


<?php
	include('configFolder/conn.php');

	try{
	$DB = new PDO(DSN, USERNAME, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );
}
catch(PDOException $e){
	echo $e->getMessage();
}

try{
	$sql = "select * from postcategory";
	$result = $DB->query($sql);
	$row_count = $result->rowCount();
	if($row_count){
		$rows=$result->fetchAll(PDO::FETCH_ASSOC);
	}
}
catch(PDOException $e){
	echo $e->getMessage();
}

$items = $rows;
$id='';
echo '<ul class="nav">';

?>

<li>
<span id="close-menu">
	<a href="#" class="close-this-menu">Close</a>
		<script type="text/javascript">
			jQuery('a.sidr-class-close-this-menu').click(function(){
				jQuery('div.sidr').css({
					'right': '-476px'
				});
				jQuery('body').css({
				'right': '0'
				});							
			});
		</script>
	
</span>
</li>
<li><a href="index.php"><img src="images/home.png" alt="Magazine"></a></li>

<?php
foreach ($items as $item) {
	if($item['parent_id'] == 1){
		echo '<li class="dropdown"><a href="#">'.$item['caption'].'</a>';
		$id=$item['id'];
		sub($items, $id);
		echo "</li>";
	}
}

echo "</ul>";
function sub($items, $id){

	echo '<ul class="sub-menu">';
	foreach ($items as $item) {
		if($item['parent_id'] == $id){
			echo '<li><a href="#">'.$item['caption'].'</a>';				
			sub($items, $item['id']);				
			echo "</li>";
			
		}
	}
	echo "</ul>";
}


?>

</div><!--/.nav-collapse -->