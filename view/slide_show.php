<section id="slide" class="text-center" >
    <script type="text/javascript">

    $(document).ready(function() {
        document.title = 'Trang chủ';
    });

</script>
<div id="carousel-id" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<?php 
			$sqlquery= "select * from slideshow";
			$stmt = $db->prepare($sqlquery);
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$stmt->execute();
			$resultSet = $stmt->fetchAll();
			$num=0;
			foreach ($resultSet as $row) {
				$num = $num +1;
		}
			for($i=1; $i<=$num; $i++){
		?>
		<li data-target="#carousel-id" data-slide-to="<?php echo $i; ?>" class=""></li>
		<?php } ?>
	</ol>
  
	<div class="carousel-inner">
		<?php 
			
			$sqlquery= "select * from slideshow";
			$stmt = $db->prepare($sqlquery);
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$stmt->execute();
			$resultSet = $stmt->fetchAll();
			foreach ($resultSet as $row){
		?>
		<div class="item <?php echo $row['note']; ?>">
                    <a href="<?php echo ""; ?>"><img class="img-responsive" src="images/slideshow/<?php echo $row['name']; ?>"></a>
		</div>
		<?php } ?>
	</div>
	<a class="left carousel-control" href="#carousel-id" data-slide="prev"></a>
	<a class="right carousel-control" href="#carousel-id" data-slide="next"></a>
</div>
</section>