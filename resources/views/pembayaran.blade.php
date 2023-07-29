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

                    <!-- DataTales Example -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-2">
                        <a href="" class="btn btn-primary">Tambah Data Pembayaran</a>
                    </div>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Keseluruhan Pembayaran</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Rumah</th>
                                            <th>No.Telp</th>
                                            <th>Pembayaran Kebersihan</th>
                                            <th>Pembayaran Satpam</th>
                                            <th>Tanggal</th>
                                            <th>Ubah Status</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Rumah</th>
                                            <th>No.Telp</th>
                                            <th>Pembayaran Kebersihan</th>
                                            <th>Pembayaran Satpam</th>
                                            <th>Tanggal</th>
                                            <th>Ubah Status</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>Blok 4</td>
                                            <td>08523322056</td>
                                            <td class="text-center"><span
                                                    class="badge badge-danger text-xs font-bold">Belum Lunas</span>
                                            </td>
                                            <td class="text-center"><span
                                                    class="badge badge-success text-xs font-bold">Lunas</span>
                                            </td>
                                            <td>21/05/2023</td>
                                            <td class="text-center"><a href="#" data-target="#Kebersihan"
                                                    data-toggle="modal" class="btn btn-info"><i
                                                        class="fa-solid fa-broom"></i></a>
                                                <a href="" class="btn btn-secondary" data-target="#Keamanan"
                                                    data-toggle="modal"><i class="fa-solid fa-building-shield"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

                {{-- modal kebersihan --}}
                <div class="modal fade" id="Kebersihan" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Ubah Status Pembayaran</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Apakah anda yakin untuk mengubah data <span class="font-weight-bold">pembayaran
                                        kebersihan?</span></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-danger">Belum Membayar</button>
                                <button type="button" class="btn btn-success">Sudah Bayar</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end modal kebersihan --}}

                {{-- modal keamanan --}}
                <div class="modal fade" id="Keamanan" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Ubah Status Pembayaran</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Apakah anda yakin untuk mengubah data <span class="font-weight-bold">pembayaran
                                        keamanan?</span></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-danger">Belum Membayar</button>
                                <button type="button" class="btn btn-success">Sudah Bayar</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end modal keamanan --}}
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
