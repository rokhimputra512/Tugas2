<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Tugas 2 - Pemograman Web</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn3.devexpress.com/jslib/21.2.5/css/dx.common.css" />
    <link rel="stylesheet" href="https://cdn3.devexpress.com/jslib/21.2.5/css/dx.light.css" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn3.devexpress.com/jslib/21.2.5/js/dx.all.js"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                <div class="sidebar-brand-text mx-3">Tugas 2</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="">
                    <i class="fas fa-user"></i>
                    <span>Data Karyawan</span></a>
            </li>

        </ul>
        <!-- End of Sidebar -->

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

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Rokhim Putra</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">                                
                                <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Karyawan</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Jumlah Karyawan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlahKaryawan }}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="container"><br>
                                <!-- <div class="row">
                                    <div class="col-lg-6">
                                        <input id="searchInput" class="form-control" placeholder="Cari...">
                                    </div>
                                    <div class="col-lg-2">
                                        <button name="searchTerm" class="btn" style="background-color: blue; color: white;" onclick="searchData()">Cari</button>
                                    </div>
                                </div> -->
                                <div style="text-align: left;">
                                    <button class="btn" style="background-color: blue; color: white;" onclick="openTambahModal()">+ Tambah Karyawan</button>
                                </div><br>
                                <div id="data-grid"></div><br>
                            </div>
                        </div>

                        <style>
                            .flex-lg-grow-1{
                                background-color: white;
                            }
                            .dx-header-row {
                                background-color: blue !important;
                                color: white !important;
                                height: 40px; /* Adjust the height as needed */
                                line-height: 40px;
                                
                            } 
                            .dx-header-row td:first-child {
                                border-radius: 10px 0px 0px 0px !important;
                            }
                            .dx-header-row td:last-child {
                                border-radius: 0px 10px 0px 0px !important;
                            }
                            .dx-header-filter-empty{
                                color: white !important;
                            }
                        </style>

                        <!-- Modal tambah -->
                        <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="tambahModalLabel">Tambah Data Karyawan</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <form id="tambah" method="POST" action="/api/karyawan-tambah">
                                            @csrf                                           
                                            <div class="form-group">
                                                <label for="editNIP">NIP :</label>
                                                <input type="text" class="form-control" name="NIP" id="editNIP">
                                            </div>
                                            <div class="form-group">
                                                <label for="editNIK">NIK :</label>
                                                <input type="text" class="form-control" name="NIK" id="editNIK">
                                            </div>
                                            <div class="form-group">
                                                <label for="editNama">Nama Lengkap :</label>
                                                <input type="text" class="form-control" name="nama_lengkap" id="editNama">
                                            </div>
                                            <div class="form-group">
                                                <label for="edittempatlahir">Tempat Lahir :</label>
                                                <input type="text" class="form-control" name="tempat_lahir" id="edittempatlahir">
                                            </div>
                                            <div class="form-group">
                                                <label for="edittanggallahir">Tanggal Lahir :</label>
                                                <input type="date" class="form-control" name="tanggal_lahir" id="edittanggallahir">
                                            </div>
                                            <div class="form-group">
                                                <label for="editkelamin">Jenis Kelamin :</label>
                                                <select class="form-control" name="jenis_kelamin" id="editkaryawan">
                                                    <option value=""></option>
                                                    <option value="Laki - Laki">Laki - Laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="editalamat">Alamat :</label>
                                                <input type="text" class="form-control" name="alamat" id="editalamat">
                                            </div>
                                            <div class="form-group">
                                                <label for="edittelp">Nomor handphone :</label>
                                                <input type="text" class="form-control" name="no_telp" id="edittelp">
                                            </div>
                                            <div class="form-group">
                                                <label for="editemail">Email :</label>
                                                <input type="text" class="form-control" name="email" id="editemail">
                                            </div>
                                            <div class="form-group">
                                                <label for="edithobi">Hobi :</label>
                                                <input type="text" class="form-control"  name="hobi" id="edithobi">
                                            </div>
                                            <div class="form-group">
                                                <label for="editnikah">Status Pernikahan :</label>
                                                <select class="form-control" name="status_pernikahan" id="editkaryawan">
                                                    <option value=""></option>
                                                    <option value="Belum Menikah">Belum Menikah</option>
                                                    <option value="Menikah">Menikah</option>
                                                    <option value="Duda / Janda">Duda / Janda</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="editjabatan">Jabatan :</label>
                                                <input type="text" class="form-control" name="jabatan" id="editjabatan">
                                            </div>
                                            <div class="form-group">
                                                <label for="editkaryawan">Status Karyawan:</label>
                                                <select class="form-control" name="status_pegawai" id="editkaryawan">
                                                    <option value=""></option>
                                                    <option value="Tetap">Tetap</option>
                                                    <option value="Kontrak">Kontrak</option>
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Edit -->
                        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel">Edit Data Karyawan</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <form id="editForm" method="POST" action="/api/karyawan/{NIP}">
                                            @csrf                                           
                                            <div class="form-group">
                                                <label for="editNIP">NIP :</label>
                                                <input type="text" class="form-control" id="editNIP">
                                            </div>
                                            <div class="form-group">
                                                <label for="editNIK">NIK :</label>
                                                <input type="text" class="form-control" id="editNIK">
                                            </div>
                                            <div class="form-group">
                                                <label for="editNama">Nama Lengkap :</label>
                                                <input type="text" class="form-control" id="editNama">
                                            </div>
                                            <div class="form-group">
                                                <label for="edittempatlahir">Tempat Lahir :</label>
                                                <input type="text" class="form-control" id="edittempatlahir">
                                            </div>
                                            <div class="form-group">
                                                <label for="editkelamin">Jenis Kelamin :</label>
                                                <input type="text" class="form-control" id="editkelamin">
                                            </div>
                                            <div class="form-group">
                                                <label for="editalamat">Alamat :</label>
                                                <input type="text" class="form-control" id="editalamat">
                                            </div>
                                            <div class="form-group">
                                                <label for="edittelp">Nomor handphone :</label>
                                                <input type="text" class="form-control" id="edittelp">
                                            </div>
                                            <div class="form-group">
                                                <label for="editemail">Email :</label>
                                                <input type="text" class="form-control" id="editemail">
                                            </div>
                                            <div class="form-group">
                                                <label for="edithobi">Hobi :</label>
                                                <input type="text" class="form-control" id="edithobi">
                                            </div>
                                            <div class="form-group">
                                                <label for="editnikah">Status Pernikahan :</label>
                                                <input type="text" class="form-control" id="editnikah">
                                            </div>
                                            <div class="form-group">
                                                <label for="editjabatan">Jabatan :</label>
                                                <input type="text" class="form-control" id="editjabatan">
                                            </div>
                                            <div class="form-group">
                                                <label for="editkaryawan">Status Karyawan :</label>
                                                <input type="text" class="form-control" id="editkaryawan">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Konfirmasi Hapus -->
                        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus Data Karyawan</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Apakah Anda yakin ingin menghapus data karyawan ini?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <button type="button" class="btn btn-danger" id="deleteConfirmBtn">Hapus</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            function openTambahModal() {
                                    $('#tambahModal').modal('show');
                                }
                                
                                function closeTambahModal() {
                                    $('#tambahModal').modal('hide');
                                }
                                
                                function openTambahModal1() {
                                    $('#tambahForm').submit(function (event) {
                                        closeTambahModal();
                                        location.reload();
                                    });
                                }
                        </script>

                        <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                function showEditModal(data) {
                                    $('#editNIP').val(data.NIP);
                                    $('#editNIK').val(data.NIK);
                                    $('#editNama').val(data.nama_lengkap);
                                    $('#edittempatlahir').val(data.tempat_lahir);
                                    $('#editkelamin').val(data.jenis_kelamin);
                                    $('#editalamat').val(data.alamat);
                                    $('#edittelp').val(data.no_telp);
                                    $('#editemail').val(data.email);
                                    $('#edithobi').val(data.hobi);
                                    $('#editjabatan').val(data.jabatan);
                                    $('#editnikah').val(data.status_pernikahan);
                                    $('#editkaryawan').val(data.status_pegawai);
                                    $('#editModal').modal('show');

                                    $('#editForm').submit(function (e) {
                                        e.preventDefault();

                                        var updatedData = {
                                            _token: $('[name="_token"]').val(),
                                            NIP: $('#editNIP').val(),
                                            NIK: $('#editNIK').val(),
                                            nama_lengkap: $('#editNama').val(),
                                            tempat_lahir: $('#edittempatlahir').val(),
                                            jenis_kelamin: $('#editkelamin').val(),
                                            alamat: $('#editalamat').val(),
                                            no_telp: $('#edittelp').val(),
                                            email: $('#editemail').val(),
                                            hobi: $('#edithobi').val(),
                                            jabatan: $('#editjabatan').val(),
                                            status_pernikahan: $('#editnikah').val(),
                                            status_pegawai: $('#editkaryawan').val(),
                                        };

                                        $.ajax({
                                            type: 'POST',                                            
                                            url: '/api/karyawan/' + data.NIP,
                                            data: updatedData,
                                            success: function (response) {
                                                console.log('Data berhasil diperbarui', response);
                                                $('#editModal').modal('hide');
                                                location.reload();
                                            },
                                            error: function (error) {
                                                console.error('Gagal memperbarui data', error);
                                            }
                                        });
                                    });
                                }
                                
                                function showDeleteConfirmationModal(data) {
                                    $('#deleteModal').modal('show');
                                    $('#deleteConfirmBtn').on('click', function () {
                                        deleteDataFromDatabase(data.NIP);
                                        $('#deleteModal').modal('hide');
                                    });
                                }

                                function deleteDataFromDatabase(NIP) {
                                    $.ajax({
                                        type: 'DELETE',
                                        url: '/api/karyawan/' + NIP,
                                        data: {
                                            _token: $('[name="_token"]').val(),
                                        },
                                        success: function (response) {
                                            console.log('Data berhasil dihapus', response);
                                            location.reload();
                                        },
                                        error: function (error) {
                                            console.error('Gagal menghapus data', error);
                                        }
                                    });
                                }

                                fetch('/api/karyawan')
                                    .then(response => response.json())
                                    .then(data => {
                                        const schedules = data;
                                        // Initialize the DataGrid with the retrieved data
                                        const dataGrid = new DevExpress.ui.dxDataGrid("#data-grid", {
                                            dataSource: schedules,
                                            showBorders: true,
                                            showRowLines: true,
                                            hoverStateEnabled: true,
                                            remoteOperations: true,
                                            allowColumnResizing: true,
                                            columnsAutoWidth: true,
                                            allowColumnReordering: true, 
                                            columnResizingMode: 'widget',  
                                            searchPanel: {
                                                visible: true,
                                            },         
                                            filterRow: {
                                            visible: true,
                                            applyFilter: 'auto',
                                            },
                                            headerFilter: {
                                            visible: true,
                                            applyFilter: 'auto',
                                            },
                                            paging: {
                                                pageSize: 50, 
                                                allowedPageSizes: [5, 10, 50, 100], 
                                                showPageSizeSelector: true,
                                            },
                                            columns: [
                                                {
                                                    width: 100,
                                                    dataField: "NIP",
                                                    caption: "NIP",
                                                },
                                                {
                                                    width: 100,
                                                    dataField: "NIK",
                                                    caption: "NIK",
                                                },
                                                {
                                                    width: 200,
                                                    dataField: "nama_lengkap",
                                                    caption: "Nama Lengkap",
                                                },
                                                {
                                                    width: 120,
                                                    dataField: "tempat_lahir",
                                                    caption: "Tempat Lahir",
                                                },
                                                {
                                                    width: 150,
                                                    dataField: "tanggal_lahir",
                                                    caption: "Tanggal Lahir",
                                                    format: "dd MMMM yyyy",
                                                    dataType: "date",
                                                },
                                                {
                                                    width: 125,
                                                    dataField: "jenis_kelamin",
                                                    caption: "Jenis Kelamin",
                                                    lookup: {
                                                        dataSource: [
                                                        'Laki - Laki',
                                                        'Perempuan',
                                                        ],
                                                    },
                                                },
                                                {
                                                    width: 200,
                                                    dataField: "alamat",
                                                    caption: "Alamat",
                                                },
                                                {
                                                    width: 125,
                                                    dataField: "no_telp",
                                                    caption: "No Handphone",
                                                },
                                                {
                                                    width: 125,
                                                    dataField: "email",
                                                    caption: "Email",
                                                },
                                                {
                                                    width: 125,
                                                    dataField: "hobi",
                                                    caption: "Hobi",
                                                },
                                                {
                                                    width: 125,
                                                    dataField: "status_pernikahan",
                                                    caption: "Status Pernikahan",
                                                    lookup: {
                                                        dataSource: [
                                                        'Belum Menikah',
                                                        'Menikah',
                                                        'Duda / Janda',
                                                        ],
                                                    },
                                                },
                                                {
                                                    width: 125,
                                                    dataField: "jabatan",
                                                    caption: "Jabatan",
                                                },
                                                {
                                                    width: 125,
                                                    dataField: "status_pegawai",
                                                    caption: "Status Karyawan",
                                                    lookup: {
                                                        dataSource: [
                                                        'Tetap',
                                                        'Kontrak',
                                                        ],
                                                    },
                                                },
                                                {
                                                    width: 125,
                                                    caption: "Aksi",
                                                    cellTemplate: function(container, options) {
                                                        var editButton = document.createElement("button");
                                                            editButton.className = "btn btn-sm btn-white";
                                                            editButton.type = "button";
                                                            editButton.innerHTML = '<i class="bi bi-eye" style="color: white; font-weight: bold; text-align: center;"></i>';
                                                            editButton.style.color = "white";
                                                            editButton.style.backgroundColor = "green";
                                                            editButton.style.cursor = "pointer";
                                                            editButton.textContent = "Edit";

                                                            editButton.addEventListener("click", function() {
                                                                showEditModal(options.data);
                                                            });

                                                        var deleteButton = document.createElement("button");
                                                            deleteButton.className = "btn btn-sm btn-white";
                                                            deleteButton.type = "button";
                                                            deleteButton.innerHTML = '<i class="bi bi-eye" style="color: white; font-weight: bold; text-align: center;"></i>';
                                                            deleteButton.style.color = "white";
                                                            deleteButton.style.backgroundColor = "red";
                                                            deleteButton.style.cursor = "pointer";
                                                            deleteButton.textContent = "Hapus";

                                                            deleteButton.addEventListener("click", function() {
                                                                showDeleteConfirmationModal(options.data);
                                                            });

                                                        container.append(editButton).append(" | ").append(deleteButton);
                                                    }
                                                }
                                            ],
                                        });
                                    })
                                    .catch(error => {
                                        console.error('Error fetching data:', error);
                                    });
                            });
                        </script>
                        
                        

                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Rokhim Putra 2024</span>
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
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <!-- <script src="{{ asset('vendor/chart.js/Chart.min.js')}}"></script> -->

    <!-- Page level custom scripts -->
    <!-- <script src="{{ asset('js/demo/chart-area-demo.js')}}"></script> -->
    <!-- <script src="{{ asset('js/demo/chart-pie-demo.js')}}"></script>     -->

</body>

</html>