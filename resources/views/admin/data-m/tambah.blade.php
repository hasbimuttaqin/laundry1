
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tambah Data Member</title>

    @include('template.head')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
          @include('template.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">


                <!-- Topbar -->
                  @include('template.navbar')
                <!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tambah Member</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header d-sm-flex align-items-center justify-content-between py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Member</h6>

        </div>
        <div class="card-body">

          <form action="/insertdata" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Member</label>
                <input type="text" class="form-control" id="nama" name="nama">
                {{-- @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                @enderror --}}
              </div>

            <div class="mb-4">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat">
              </div>

            <div class="mb-3">
                <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
                    <option selected>Pilih Jenis Kelamin</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
              </div>

              <div class="mb-3">
                <label for="notlp" class="form-label">No Telpon</label>
                <input type="number" class="form-control" id="notelp" name="no_tlp">
              </div>

              <a href="{{ route('member') }}" class="btn btn-secondary">Back</a>
              <button type="submit" class="btn btn-primary">Save</button>
          </form>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

            <!-- Footer -->

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

    {{-- JavaScript --}}
      @include('template.script')
    {{-- End-JavaScript --}}

</body>

</html>
