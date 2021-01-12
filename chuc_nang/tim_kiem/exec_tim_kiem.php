<?php
include('database/connect.php');
if (isset($_GET['category'])) {
    $search = $_GET['keywork'];
    if ($_GET['category'] == "All Category") { 
        $sqlQuery= "select * from san_pham where tensp like '%".$search."%'";
	$stmt = $db->prepare($sqlQuery);
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	$stmt->execute();
	$resultSet = $stmt->fetchAll();
        if($resultSet==NULL){ ?>
            <h3 class="title-main" style="text-align: center;">Không tìm thấy sản phẩm !</h3>
        <?php
        } else {
            
        ?>
            <h3 class="title-main" style="text-align: center;"><?php echo 'Kết quả tìm kiếm cho từ khóa "'.$search. '" là:'    ; ?></h3>
        <?php
        foreach ($resultSet as $row){ ?>
            
            <tr>
			<td>
			<div style="height:auto; padding-bottom: 15px;" class="sp img-thumbnail col-xs-12 col-sm-6 col-md-12 col-lg-12">
				<div style="width: 110px; height: 120px;" class="img col-xs-12 col-sm-12 col-md-6 col-lg-2">
					<img style="width: 100px; height: 120px; margin-left:32px; margin-top: 10px; margin-bottom: 10px;" src="images/<?php echo $row['img']; ?>" alt="">
				</div>
				<div style="padding-top: 10px; padding-left: 40px;" class="text-left col-xs-12 col-sm-12 col-md-6 col-lg-10">
					<div class="title col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<a style="font-size: 18px;" href="?menu=product_info&masp=<?php echo $row['masp']; ?>"><?php echo $row['tensp']; ?></a>
					</div>
					<div class="cost col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <span style="color: red"><?php echo number_format($row['giasp'],0,",",".")."đ"; ?></span>
					</div>
					<div class="buy col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<a class="btn btn-primary" href="?menu=product_info&masp=<?php echo $row['masp']; ?>">Chi tiết</a>
						<a class="btn btn-warning" href="?menu=add_cart&masp=<?php echo $row['masp']; ?>&soluong=1"><b class="fa fa-cart-plus"></b></a>
					</div>
				</div>
			</div>
			</td>
		</tr>
            
            
            
            
        <?php }}
    }else{
        $ctgr=$_GET['category'];
        $sqlQuery= "select * from san_pham join danhmucsp on loaisp=id where tensp like '%".$search."%' and tendanhmuc ='$ctgr' ";

	$stmt = $db->prepare($sqlQuery);
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	$stmt->execute();
	$resultSet = $stmt->fetchAll();
         if($resultSet==NULL){?>
            <h3 class="title-main" style="text-align: center;">Không tìm thấy sản phẩm !</h3>
        <?php
        } else {
        foreach ($resultSet as $row){ ?>
            
            <tr>
			<td>
			<div style="height:auto; padding-bottom: 15px;" class="sp img-thumbnail col-xs-12 col-sm-6 col-md-12 col-lg-12">
				<div style="width: 110px; height: 120px;" class="img col-xs-12 col-sm-12 col-md-6 col-lg-2">
					<img style="width: 100px; height: 120px; margin-left:32px; margin-top: 10px; margin-bottom: 10px;" src="images/<?php echo $row['img']; ?>" alt="">
				</div>
				<div style="padding-top: 10px; padding-left: 40px;" class="text-left col-xs-12 col-sm-12 col-md-6 col-lg-10">
					<div class="title col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<a style="font-size: 18px;" href="?menu=product_info&masp=<?php echo $row['masp']; ?>"><?php echo $row['tensp']; ?></a>
					</div>
					<div class="cost col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<span><?php echo number_format($row['giasp'],0,",",".")."đ"; ?></span>
					</div>
					<div class="buy col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<a class="btn btn-primary" href="?menu=product_info&masp=<?php echo $row['masp']; ?>">Chi tiết</a>
						<a class="btn btn-warning" href="?menu=add_cart&masp=<?php echo $row['masp']; ?>&soluong=1"><b class="fa fa-cart-plus"></b></a>
					</div>
				</div>
			</div>
			</td>
		</tr>
                
        <?php }
}}
}
?>
