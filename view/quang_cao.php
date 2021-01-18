<div class="container" style="margin-top: 20px">
    <?php
    $sqlquery = "select * from slideshow where loai='qc' limit 0,3";
    $stmt = $db->prepare($sqlquery);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    $resultSet = $stmt->fetchAll();
    foreach ($resultSet as $row) {
        ?>
    <div class="col-md-4 bottom-content">
        <a href=""><img src="images/slideshow/<?php echo $row['name']; ?>"></a>
    </div>
    <?php }?> 
</div>