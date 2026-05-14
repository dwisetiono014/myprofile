

    <?php include('Template/header.php');?>
    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include('Template/sidebar.php');?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <marquee behavior="" direction="" Scrolldelay=100 style="width:900px; margin-left:30px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam eius adipisci vel sapiente debitis odio, recusandae odit error vitae accusantium eaque nemo ullam nihil dolorem non dicta illum obcaecati. Quasi.</marquee>
                            </a>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Halo Admin !</span>
                                <img class="img-profile rounded-circle"
                                    src="../assets/img/admin_logo.png">
                            </a>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="col-lg-12 mb-4">
                        <!-- Illustrations -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3" style="display: flex; flex-wrap: nowrap;">
                                <div class="col-sm-6">
                                    <h6 class="m-0 font-weight-bold text-primary">Upload Dokumen</h6>
                                </div>
                                 <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                                    
                                </div>
                                
                                <div class="card-body">
                                    <form action="<?php echo base_url('index.php/add_upload');?>" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Judul</label>
                                            <input style="width:350px;" type="text" name='judul' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Judul" value="<?php echo $data['judul'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Upload</label>
                                            <input style="width:350px; height:43px;" name='files' type="file" class="form-control">
                                            <a href="<?php echo $data['file']?>" download><img src="<?php echo $data['gambar_file']?>" alt=""></a>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-check-label" for="exampleCheck1">Status &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" class="form-check-input" name="status" id="exampleCheck1" value="<?php echo $data['status']?>" <?php echo $data['chck']?>></label>
                                            
                                        </div>
                                        <table>
                                            <tr>
                                                <td>
                                                    <a href="<?php echo base_url('index.php/list_upload');?>" class="d-none d-sm-inline-block btn btn-xl btn-primary shadow-sm" > Close</a>
                                                </td>
                                                <td>
                                                    <button type="submit" class="btn btn-primary" name="action_submit" value="submit">Submit</button>
                                                </td>
                                            </tr>
                                        </table>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout_admin.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
<?php include("Template/footer.php");?>