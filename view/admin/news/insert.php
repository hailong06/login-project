<div class="container-fluid">
                    <h1 class="h3 mb-2 text-gray-800">Add News</h1>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 style="color: red">Lưu ý (*): Bắt buộc nhập</h6>
                            <a href="news" class="btn btn-success" style="margin-top:20px">Trở về danh sách</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <?php 
                                    if(isset($data["result"])){
                                        if($data["result"]=="true"){ ?>
                                            <h3 class="alert alert-success">
                                                <?php echo "Thêm thành công"; ?>
                                            </h3>
                                        <?php }else{?>
                                            <h3 class="alert alert-warning">
                                                <?php echo "Thêm thất bại"; ?>
                                            </h3>
                                        <?php }
                                    }
                                 ?>
                                <form action="news/insert" method="POST">
                                    <div class="form-group">
                                        <label>Title *</label>
                                        <input type="text" name="title" class="form-control" placeholder="Nhập tên bài" required 
                                        >
                                    </div>
                                    <div class="form-group">
                                        <label>Giá thành *</label>
                                        <input type="number" name="price" class="form-control" placeholder="Nhập Giá thành" required 
                                        >
                                    </div>
                                    <?php 
                                        $sever = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $dbName = "tbl_magazine";
                                        
                                        $conn = new mysqli($sever, $username, $password, $dbName);


                                        $sql = "SELECT * FROM `tbl_category_product`";
                                        $kq = mysqli_query($conn, $sql);
                                        if (mysqli_num_rows($kq) >0 ) {
                                            ?>
                                            <div class="form-group">
                                                <label>Thể loại *</label>
                                                <select name="type" id="" class="form-control">
                                                    <option value="">Chọn thể loại </option>
                                                    <?php  
                                                        foreach ($kq as $key) {
                                                        ?>
                                                        <option value=" <?php echo $key['id_category_product'];?>"><?php echo $key['title_category_product']; ?></option>
                                                        <?php } ?>
                                                </select>
                                            </div>        
                                            <?php          
                                        }else{
                                            echo "Khong có gì cả";
                                        }

                                        ?> 
                                    <div class="form-group">
                                        <label>Hình ảnh *</label>
                                        <input type="file" name="img" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Mô tả *</label>
                                        <input type="text" name="desc" class="form-control" placeholder="Nhập thông tin mô tả" required 
                                        >
                                    </div>
                                    <div class="form-group">
                                        <label>Trạng thái *</label>
                                        <input type="varchar" name="status" class="form-control" placeholder="Nhập thông tin trạng thái sản phẩm" required 
                                        >
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="submit" class="form-control btn btn-warning" value="Add" 
                                        >
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>