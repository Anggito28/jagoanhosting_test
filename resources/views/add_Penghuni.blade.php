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
                        <h1 class="h3 mb-0 text-gray-800">Penghuni</h1>
                    </div>

                    <!-- Form add house -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Penghuni</h6>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Nama Lengkap</label>
                                            <input type="text" class="form-control" placeholder="Nama Lengkap"
                                                name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Nomor Telepon</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="phone"><img
                                                            src="{{ asset('admin/img/indonesia.png') }}"
                                                            style="width: 20px; height: auto;" alt="indonesia"></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="85*******"
                                                    maxlength="13" minlength="9" aria-describedby="phone" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="family_status">Status Keluarga</label>
                                            <select class="form-control" name="family_status" id="" required>
                                                <option selected disabled>--Pilih Status--</option>
                                                <option>Berkeluarga</option>
                                                <option>Tidak Berkeluarga</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="people_status">Status Kepenghunian</label>
                                            <select class="form-control" name="people_status" id="" required>
                                                <option selected disabled>--Pilih Status--</option>
                                                <option>Tetap</option>
                                                <option>Kontrak</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="custom-file">Upload Foto Penghuni</label>
                                            <div class="input-group mb-3">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input form-control"
                                                        id="inputGroupFile01" aria-describedby="inputGroupFileAddon01"
                                                        required>
                                                    <label class="custom-file-label" for="inputGroupFile01">Pilih File
                                                        Foto</label>
                                                </div>
                                            </div>
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
