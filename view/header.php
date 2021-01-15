<?php session_start();
include('database/connect.php');?>
<div id="header">
    <div id="header">
        <div id="header-top">
            <div class="container">
                <div class="row clearfix">
                    <div class="col-md-6" id="header-text">
                        <a>GVHD: Ngô Lê Quân</a>
                    </div>
                    <div class="col-md-6">
                        <nav id="header-nav-top">
                            <ul class="list-inline pull-right" id="headermenu">
                                <li> <?php if (!isset($_SESSION['username'])) { ?>
                                        <a href="?menu=dang_nhap"><i class="fa fa-unlock"></i> Login</a> <?php } ?>
                                </li>
                                <li>
                                    <a href=""><i class="fa fa-user"></i> Tài khoản <i class="fa fa-caret-down"></i></a>
                                    <ul id="header-submenu">
                                        <?php if (isset($_SESSION['username'])) { ?>
                                            <li><a href="?menu=my_user">Thông tin</a></li>
                                            <li><a href="?menu=theo_doi_dh">Đơn hàng</a></li>
                                            <li><a href="?menu=logout">Đăng xuất</a></li>   <?php } ?> 
                                        <li><a href="?menu=dang_ky">Đăng ký</a></li>
                                        
                                    </ul>

                                </li>
                                <li> 
                                    <?php if (isset($_SESSION['username'])) { ?>
                                        <a href="?menu=my_user">Xin Chào <?php 
                                        
                                        $sqlquery = "select * from nguoidung where user = ?"  ;
                                        $stmt = $db->prepare($sqlquery);
                                        $stmt->bindParam(1, $_SESSION['username']);
                                        $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                        $stmt->execute();
                                        $resultSet = $stmt->fetchAll();
                                        foreach ($resultSet as $row) {
                                            echo $row['hoten']; } ?></a>

                                        <?php
                                    } else {
                                        echo 'Mời đăng nhập !';
                                    }
                                    ?>

                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row" id="header-main">
                <div class="col-md-5">
                    <form action="?menu=search" class="form-inline">
                        <div class="form-group">
                            <label>
                                <?php
                                $sqlquery = "select * from danhmucsp";
                                $stmt = $db->prepare($sqlquery);
                                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                $stmt->execute();
                                $resultSet = $stmt->fetchAll(); ?>
                                <select name = "category" class = "form-control">
                                    <option> All Category</option>

                                <?php  foreach ($resultSet as $row) {?>
                                    <option> <?php echo $row['tendanhmuc'] ?> </option>
                                <?php } ?>
                                </select> 
                            </label>
                            <input type="text" name="keywork" placeholder=" Nhập từ khóa..." class="form-control" required>
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <a href="index.php" >
                        <img height="45dp" width="200dp"  src="images/img_logo.png">
                    </a>
                </div>
                <div class="col-md-3" id="header-right">
                    <div class="pull-right">
                        <div class="pull-right">
                            <p id="hotline">HOTLINE</p>
                            <p>099999999</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--MENUNAV-->
    <div id="menunav">
        <div class="container">
            <nav>
                <div class="home pull-left">
                    <a href="index.php">Trang chủ</a>
                </div>
                <!--menu main-->
                <ul id="menu-main">
                    <li>
                        <a href="?menu=san_pham">Sản Phẩm</a>
                    </li>
                    <?php
                    $sqlquery = "select * from navbar";
                    $stmt = $db->prepare($sqlquery);
                    $stmt->setFetchMode(PDO::FETCH_ASSOC);
                    $stmt->execute();
                    $resultSet = $stmt->fetchAll();
                    foreach ($resultSet as $row) {
                        ?>
                        <li><a href="?menu=nav&id=<?php echo $row['id']; ?>"><?php echo $row['navitemname']; ?></a></li>
                    <?php } ?>
                </ul>
                <!-- end menu main-->

                <!--Shopping-->
                <ul class="pull-right" id="main-shopping">
                    <li>
                        <a href="?menu=gio_hang"><i class="fa fa-shopping-basket"></i> Giỏ Hàng (<?php if(isset($_SESSION['giohang'])){
				$cart= count($_SESSION['giohang']);
				echo $cart;
                                } 
                                else { $cart=0;
                                    echo $cart;} ?>)</a>
                    </li>
                </ul>
                <!--end Shopping-->
            </nav>
        </div>
    </div>

