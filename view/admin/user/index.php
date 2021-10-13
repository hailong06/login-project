<div class="container-fluid">
                    <h1 class="h3 mb-2 text-gray-800">Thông tin người dùng</h1>
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <a href="home/view_insert" class="btn btn-warning" style="margin-bottom:20px">Thêm người dùng</a>
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Username</th>
                                            <th>Fullname</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Address</th>
                                            <th>Chức vụ</th>
                                        </tr>
                                    </thead>
                                    <?php 
                                    if(isset($data["result"])){
                                        if($data["result"]=="true"){ ?>
                                            <h3 class="alert alert-success">
                                                <?php echo "Xóa thành công"; ?>
                                            </h3>
                                        <?php }else{?>
                                            <h3 class="alert alert-warning">
                                                <?php echo "Xóa thất bại"; ?>
                                            </h3>
                                        <?php }
                                    }
                                    ?>
                                    <tbody>
                                    <?php 
                                    $i=1;
                                        while($user= mysqli_fetch_array($data["user"])){ ?>
                                            
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $user["username"]; ?></td>
                                            <td><?php echo $user["fullname"]; ?></td>
                                            <td><?php echo $user["email"]; ?></td>
                                            <td><?php echo $user["phone"]; ?></td>
                                            <td><?php echo $user["address"]; ?></td>
                                            <td><?php echo $user["roll"]; ?></td>
                                            <th>
                                                <td><a href="home/edit/<?php echo $user["id_account"];  ?>" class="btn btn-primary">Edit</a></td>
                                            </th>
                                            <th>
                                                <td><a href="home/delete/<?php echo $user["id_account"];  ?>" class="btn btn-danger" name="home_delete">Delete</a></td>
                                            </th>
                                            <?php $i++; }
                                     ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>