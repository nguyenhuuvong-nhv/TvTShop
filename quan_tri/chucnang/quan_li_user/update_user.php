<?php
if (isset($_GET['id'])) {
    $sqlquery = "select * from nguoidung where user=?" ;
    $stmt = $db->prepare($sqlquery);
    $stmt->bindParam(1, $_GET['id']);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    $resultSet = $stmt->fetchAll();
    foreach ($resultSet as $row) {

        ?>

        <div class="user-info">
            <h2>THÔNG TIN TÀI KHOẢN</h2>
            <form action="?menu=exec_update_user&id=<?php echo $row['user']; ?>" method="POST">
                <div class="container">
                    <h1>Khách hàng: <?php echo $row['hoten'] ?></h1>
                    <hr>

                    <label for="user"><b>Tên Đăng Nhập</b></label>
                    <input type="text" style="background: #555;color: #ddd" disabled="" name="username" required placeholder="Nhập Tên Đăng Nhập ..." value="<?php echo $row['user'] ?>">

                    <label for="hoten"><b>Họ Và Tên</b></label>
                    <input type="text"  name="hoten" required placeholder="Nhập Họ Tên Đầy Đủ Của Bạn" value="<?php echo $row['hoten'] ?>"> 

                    <label for="gioitinh"><b>Giới Tính</b></label>
                    <select class="form-control" name="gioitinh" title="Giới tính">
                        <option value="Nam"<?php if($row['gioitinh']=='Nam'){echo 'selected="selected"';} ?> > Nam</option>
                        <option  value="Nữ"<?php if($row['gioitinh']=='Nữ'){echo 'selected="selected"';} ?>> Nữ</option>
                        <option  value="Khác"<?php if($row['gioitinh']=='Khác'){echo 'selected="selected"';} ?>> Khác</option> 
                    </select><br><br>
                    
                    <label for="sdt"><b>Số Điện Thoại</b></label>
                    <input type="text"  name="sdt" required placeholder="Nhập Số Điện Thoại ..." value="<?php echo $row['sdt'] ?>">

                    <label for="email"><b>Email</b></label>
                    <input type="text"  name="email" required placeholder="Nhập Số email ..." value="<?php echo $row['email'] ?>">

                    <label for="diachi"><b>Địa Chỉ</b></label>
                    <input type="text"  name="diachi" required placeholder="Nhập Địa Chỉ ..." value="<?php echo $row['diachi'] ?>">

                    <label for="stt"><b>Trạng Thái</b></label>
                    <select class="form-control" name="stt" title="Giới tính">
                        <option value="0" <?php if($row['trangthai']=='0'){echo 'selected="selected"';} ?>> Khóa</option>
                        <option  value="1"<?php if($row['trangthai']=='1'){echo 'selected="selected"';} ?>> Hoạt động</option>
                    </select>

                    <hr>

                    <button  type="submit" class="registerbtn" name="submit">Cập Nhật</button>
                </div>
            </form>
        </div>
    <?php
    }
}
?>
