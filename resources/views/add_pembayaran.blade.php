<!DOCTYPE html>
<html lang="en">

@include('partials.header')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('partials.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('partials.topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Pembayaran</h1>
                    </div>

                    <!-- Form add house -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Pembayaran</h6>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Nama Lengkap</label>
                                            <select name="name" id="" class="form-control" required>
                                                <option selected disabled>--Pilih Status--</option>
                                                <option>Suprapto</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Nomor Telepon</label>
                                            <select name="name" id="" class="form-control" required>
                                                <option selected disabled>--Pilih Status--</option>
                                                <option>nama, 085232325342</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="kebersihan">Pembayaran Kebersihan</label>
                                            <select class="form-control" name="kebersihan" id="" required>
                                                <option selected disabled>--Pilih Status--</option>
                                                <option>Lunas</option>
                                                <option>Belum Lunas</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="keamanan">Pembayaran Keamanan</label>
                                            <select class="form-control" name="keamanan" id="" required>
                                                <option selected disabled>--Pilih Status--</option>
                                                <option>Lunas</option>
                                                <option>Belum Lunas</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <a class="btn btn-outline-danger" href="" type="button">Cancel</a>
                                <button class="btn btn-primary" type="submit" name="submit">Save Data</button>
                            </form>
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
    @include('partials.logout')

    <!-- Bootstrap core JavaScript-->
    @include('partials.script')

</body>

</html>
