<div class="container-fluid">
                    <h1 class="h3 mb-2 text-gray-800">Edit News</h1>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 style="color: red">Lưu ý (*): Bắt buộc nhập</h6>
                            <a href="news" class="btn btn-success" style="margin-top:20px">Trở về danh sách</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <?php
                                while ($news = mysqli_fetch_array($data["edit"])) { ?>
                                <form action="news/update/<?php echo $news["id_product"]; ?>" method="POST">
                                    <div class="form-group">
                                        <label>Title *</label>
                                        <input type="text" name="title" class="form-control"  required value="<?php echo $news["title_product"]; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Giá thành *</label>
                                        <input type="number" name="price" class="form-control"  required value="<?php echo $news["price_product"]; ?>">
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
                                        <input type="file" name="img" class="form-control" value="<?php echo '<img src="public/img/'.$news["img_product"].'" width="100px;" height="100px;">' ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Mô tả *</label>
                                        <input type="text" name="desc" class="form-control"  required value="<?php echo $news["title_product"]; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Trạng thái *</label>
                                        <input type="varchar" name="status" class="form-control"  required value="<?php echo $news["status"]; ?>">
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