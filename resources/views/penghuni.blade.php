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

                    <div class="d-sm-flex align-items-center justify-content-between mb-2">
                        <a href="#" class="btn btn-primary"><i class="fa-solid fa-plus mr-2"></i>Data
                            Penghuni</a>
                    </div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Keseluruhan Penghuni</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Rumah</th>
                                            <th>No.Telp</th>
                                            <th>Status Keluarga</th>
                                            <th>Status Penghuni</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Rumah</th>
                                            <th>No.Telp</th>
                                            <th>Status Keluarga</th>
                                            <th>Status Penghuni</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td><img src="{{ asset('admin/img/undraw_profile_3.svg') }}"
                                                    class="rounded-circle mr-2" style="height: auto; width: 40px;"
                                                    alt="" srcset=""><span class="text-sm">Supraman</span>
                                            </td>
                                            <td>Blok 4</td>
                                            <td>08523322056</td>
                                            <td>Menikah</td>
                                            <td class="text-center"><span
                                                    class="badge badge-info text-xs font-bold">Tetap</span>
                                            </td>
                                            <td class="text-center"><a href="" class="btn btn-info"><i
                                                        class="fa-solid fa-pencil "></i></a>
                                                <a href="" class="btn btn-danger" data-target="#delete"
                                                    data-toggle="modal"><i class="fa-solid fa-trash"></i></a>
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