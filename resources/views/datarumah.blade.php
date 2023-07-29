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
                    {{-- Tambah Data --}}
                    <div class="d-sm-flex align-items-center justify-content-between mb-2">
                        <a href="#" class="btn btn-primary"><i class="fa-solid fa-plus mr-2"></i>Data
                            Rumah</a>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Rumah</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No. Rumah</th>
                                            <th>Nama Penghuni</th>
                                            <th>Status Hunian</th>
                                            <th>Status Pembayaran</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No. Rumah</th>
                                            <th>Nama Penghuni</th>
                                            <th>Status Hunian</th>
                                            <th>Status Pembayaran</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>B2</td>
                                            <td>Sudirman</td>
                                            <td><span class="badge badge-warning text-xs font-bold">Kosong</span>
                                            </td>
                                            <td><span class="badge badge-success text-xs font-bold">Lunas</span>
                                            </td>
                                            <td>-</td>
                                            <td class="text-center"><a href="" class="btn btn-info"><i
                                                        class="fa-solid fa-pencil "></i></a>
                                                <a href="" class="btn btn-danger" data-toggle="modal"
                                                    data-target="#delete"><i class="fa-solid fa-trash "></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

                {{-- modal hapus --}}
                <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Apakah anda yakin menghapus data penghuni?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <a type="button" class="btn btn-danger">Hapus</a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end modal hapus --}}
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
