<div class="container-fluid">
                    <h1 class="h3 mb-2 text-gray-800">Nội dung bài đăng</h1>
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <a href="news/view_insert" class="btn btn-warning" style="margin-bottom:20px">Thêm Bài đăng</a>
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Title</th>
                                            <th>Giá thành</th>
                                            <th>Thể loại</th>
                                            <th>Hình ảnh</th>
                                            <th>Mô tả</th>
                                            <th>Trạng thái</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    <?php 
                                    $i=1;
                                        while($news= mysqli_fetch_array($data["news"])){ ?>
                                            
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $news["title_product"]; ?></td>
                                            <td><?php echo $news["price_product"]; ?></td>
                                            <td><?php echo $news["id_category_product"]; ?></td>
                                            <td><?php echo '<img src="public/img/'.$news["img_product"].'" width="100px;" height="100px;" alt="img">' ?></td>
                                            <td><?php echo $news["desc_category_product"]; ?></td>
                                            <td><?php echo $news["status"]; ?></td>
                                            <th>
                                                <td><a href="news/edit/<?php echo $news["id_product"];  ?>" class="btn btn-primary">Edit</a></td>
                                            </th>
                                            <th>
                                                <td><a href="news/delete/<?php echo $news["id_product"];  ?>" class="btn btn-danger">Delete</a></td>
                                            </th>
                                            <?php $i++; }
                                     ?>
                                    </tbody>
                                       

                                    
                                </table>
                            </div>
                        </div>
                    </div>

                </div>