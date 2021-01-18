 <!-- Begin Page Content -->
 <div class="container-fluid">

   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
     <h1 class="h3 mb-0 text-gray-800">Thống Kê</h1>
   </div>

   <!-- Content Row -->
   <div class="row">

     <!-- Earnings (Monthly) Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-left-success shadow h-100 py-2">
         <div class="card-body">
           <div class="row no-gutters align-items-center">
             <div class="col mr-2">
                  <?php  
                $date= getdate();
                $sqlquery = "select * from hoa_don where month(ngay_mua)=".$date['mon'];
		$stmt = $db->prepare($sqlquery);
		$stmt->execute();
		$resultSet = $stmt->fetchAll();
                $dtt =0;
		foreach ($resultSet as $row) {
                        $dtt +=$row['tong_tien'];
                     }?>
               <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Danh thu tháng này</div>
               <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo number_format($dtt,0,",",".")."đ"; ?></div>
             </div>
             <div class="col-auto">
               <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
             </div>
           </div>
         </div>
       </div>
     </div>
     <!-- Earnings (Monthly) Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-left-success shadow h-100 py-2">
         <div class="card-body">
           <div class="row no-gutters align-items-center">
             <div class="col mr-2">
                 <?php  
                 $sqlquery = "select * from hoa_don where year(ngay_mua)=".$date['year'];
		$stmt = $db->prepare($sqlquery);
		$stmt->execute();
		$resultSet = $stmt->fetchAll();
                $dtn =0;
		foreach ($resultSet as $row) {
                        $dtn +=$row['tong_tien'];
                     }?>
               <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Doanh thu năm nay</div>
               <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo number_format($dtn,0,",",".")."đ"; ?></div>
             </div>
             <div class="col-auto">
               <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
             </div>
           </div>
         </div>
       </div>
     </div>

     <!-- Earnings (Monthly) Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-left-primary shadow h-100 py-2">
         <div class="card-body">
           <div class="row no-gutters align-items-center">
             <div class="col mr-2">
               <?php  $sqlquery = "select * from nguoidung where ma_quyen = 3";
		$stmt = $db->prepare($sqlquery);
		$stmt->execute();
		$resultSet = $stmt->fetchAll();
                $kh =0;
		foreach ($resultSet as $row) {
			$kh +=1;
                     }?>
               <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Khách hàng</div>
               <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $kh; ?></div>
             </div>
             <div class="col-auto">
               <i class="fas fa-calendar fa-2x text-gray-300"></i>
             </div>
           </div>
         </div>
       </div>
     </div>

     <!-- Earnings (Monthly) Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-left-primary shadow h-100 py-2">
         <div class="card-body">
           <div class="row no-gutters align-items-center">
             <div class="col mr-2">
                 <?php  $sqlquery = "select * from nguoidung where ma_quyen = 2";
		$stmt = $db->prepare($sqlquery);
		$stmt->execute();
		$resultSet = $stmt->fetchAll();
                $nv =0;
		foreach ($resultSet as $row) {
			$nv +=1;
                     }?>
               <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Nhân viên</div>
               <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $nv; ?></div>
             </div>
             <div class="col-auto">
               <i class="fas fa-calendar fa-2x text-gray-300"></i>
             </div>
           </div>
         </div>
       </div>
     </div>


   </div>

   <div class="row">

   <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-left-info shadow h-100 py-2">
         <div class="card-body">
           <div class="row no-gutters align-items-center">
             <div class="col mr-2">
                 <?php  $sqlquery = "select * from san_pham ";
		$stmt = $db->prepare($sqlquery);
		$stmt->execute();
		$resultSet = $stmt->fetchAll();
                $dt =0;
		foreach ($resultSet as $row) {
                        $dt +=1;
                     }?>
               <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Điện thoại</div>
               <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $dt; ?></div>
             </div>
             <div class="col-auto">
               <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
             </div>
           </div>
         </div>
       </div>
     </div>

     

     <!-- Pending Requests Card Example -->
     <div class="col-xl-3 col-md-6 mb-4">
       <div class="card border-left-warning shadow h-100 py-2">
         <div class="card-body">
           <div class="row no-gutters align-items-center">
             <div class="col mr-2">
                 <?php  $sqlquery = "select * from hoa_don where xu_ly = 'Chưa xử lý' ";
		$stmt = $db->prepare($sqlquery);
		$stmt->execute();
		$resultSet = $stmt->fetchAll();
                $hd =0;
		foreach ($resultSet as $row) {
                        $hd +=1;
                     }?>
               <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Hóa đơn chưa duyệt</div>
               <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $hd; ?></div>
             </div>
             <div class="col-auto">
               <i class="fas fa-comments fa-2x text-gray-300"></i>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>

 </div>
 <!-- /.container-fluid -->