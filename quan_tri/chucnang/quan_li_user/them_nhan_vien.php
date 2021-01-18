<div class="user-info">
            
            <form action="?menu=exec_them_nhan_vien" method="POST">
                <div class="container">
                    <h2>THÔNG TIN TÀI KHOẢN</h2>
                    <label for="user"><b>Tên Đăng Nhập</b></label>
                    <input type="text"  name="username" required placeholder="Nhập Tên Đăng Nhập ..." ">

                    <label for="hoten"><b>Họ Và Tên</b></label>
                    <input type="text"  name="hoten" required placeholder="Nhập Họ Tên..." "> 

                    <label for="gioitinh"><b>Giới Tính</b></label>
                    <select class="form-control" name="gioitinh" title="Giới tính">
                        <option value="Nam"> Nam</option>
                        <option  value="Nữ"> Nữ</option>
                        <option  value="Khác"> Khác</option> 
                    </select><br><br>
                    
                    <label for="sdt"><b>Số Điện Thoại</b></label>
                    <input type="text"  name="sdt" required placeholder="Nhập Số Điện Thoại ..." >

                    <label for="email"><b>Email</b></label>
                    <input type="text"  name="email" required placeholder="Nhập Số email ..." >

                    <label for="diachi"><b>Địa Chỉ</b></label>
                    <input type="text"  name="diachi" required placeholder="Nhập Địa Chỉ ..." >
                    <label for="user"><b>Mật khẩu</b></label>
                    <input type="password"  name="pass" required placeholder="Nhập mật khẩu" ">
                    <button  type="submit" class="registerbtn" name="submit">Thêm</button>
                </div>
            </form>
        </div>