<div class="container-fluid">
                    <h1 class="h3 mb-2 text-gray-800">Edit User</h1>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 style="color: red">Lưu ý (*): Bắt buộc nhập</h6>
                            <a href="home" class="btn btn-success" style="margin-top:20px">Trở về danh sách</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <?php
                                while ($user = mysqli_fetch_array($data["edit"])) { ?>
                                <form action="home/update/<?php echo $user["id_account"]; ?>" method="POST">
                                    <div class="form-group">
                                        <label>Username *</label>
                                        <input type="text" name="username" class="form-control" placeholder="Nhập Username" required value="<?php echo $user["username"]; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Password *</label>
                                        <input type="Password" name="password" class="form-control" placeholder="Nhập mật khẩu" required value="<?php echo $user["username"]; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Fullname *</label>
                                        <input type="text" name="fullname" class="form-control" placeholder="Nhập đẩy đủ họ và tên" required value="<?php echo $user["fullname"]; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Email *</label>
                                        <input type="Email" name="email" class="form-control" placeholder="Nhập thông tin Email" required value="<?php echo $user["email"]; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Phone *</label>
                                        <input type="number" name="phone" class="form-control" placeholder="Nhập thông tin Số điện thoại" required value="<?php echo $user["phone"]; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Address *</label>
                                        <input type="text" name="address" class="form-control" placeholder="Nhập thông tin Địa chỉ" required value="<?php echo $user["address"]; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Chức vụ *</label>
                                        <select name="roll" id="" class="form-control" value="<?php echo $user["roll"]; ?>">
                                            <option value="admin">Admin</option>
                                            <option value="user">User</option>
                                       </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="submit" class="form-control btn btn-warning" value="Update" 
                                        >
                                    </div>
                                </form>
                                <?php  }
                                 ?>
                                 <?php 
                                    if(isset($data["result"])){
                                        if($data["result"]=="true"){ ?>
                                            <h3 class="alert alert-success">
                                                <?php echo "Sửa thành công"; ?>
                                            </h3>
                                        <?php }else{?>
                                            <h3 class="alert alert-warning">
                                                <?php echo "Sửa thất bại"; ?>
                                            </h3>
                                        <?php }
                                    }
                                 ?>
                            </div>
                        </div>
                    </div>

                </div>