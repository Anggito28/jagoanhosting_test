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
                        <h1 class="h3 mb-0 text-gray-800">Rumah</h1>
                    </div>

                    <!-- Form add house -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Rumah</h6>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="no_home">Nomor Rumah</label>
                                            <input type="text" name="no_home" class="form-control" placeholder="B2"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="penghuni">Nama Penghuni</label>
                                            <select class="form-control" name="name" id="" required>
                                                <option selected disabled>--Pilih Penghuni--</option>
                                                <option>Suprapto</option>
                                                <option>Setoyo</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Status Penghuni</label>
                                            <select class="form-control" name="fill_house" id="" required>
                                                <option selected disabled>-- Pilih Status --</option>
                                                <option>Berpenghuni</option>
                                                <option>Tidak Berpenghuni</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Status Pembayaran Rumah</label>
                                            <select class="form-control" name="purchase" id="" required>
                                                <option selected disabled>-- Pilih Status --</option>
                                                <option>Lunas</option>
                                                <option>Belum Lunas</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="information">Keterangan</label>
                                            <textarea name="information" class="form-control" id="" cols="30" rows="5"></textarea>
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
            @include('partials.footer')
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
