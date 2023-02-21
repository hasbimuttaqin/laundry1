
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tambah Data Produk</title>

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
    <h1 class="h3 mb-2 text-gray-800">Tambah Produk</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header d-sm-flex align-items-center justify-content-between py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Produk</h6>

        </div>
        <div class="card-body">

          <form action="{{ route('tproduk.insert')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Outlet</label>
                <select class="form-select" aria-label="Default select example" name="id_outlet">
                    <option selected>Pilih Outlet</option>
                      @foreach ($outlet as $item)
                         <option value="{{ $item->id }}">{{ $item->nama_outlet}}</option>
                      @endforeach
                  </select>
              </div>

              <div class="mb-4">
                <label for="alamat" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="alamat" name="nama_paket">
              </div>

              <div class="mb-3">
                <label for="jeniskelamin" class="form-label">Jenis Produk</label>
                <select class="form-select" aria-label="Default select example" name="jenis">
                    <option selected>Pilih Jenis Produk</option>
                    <option value="kiloan">kiloan</option>
                    <option value="selimut">selimut</option>
                    <option value="bed_cover">bed_cover</option>
                    <option value="kaos">kaos</option>
                  </select>
              </div>

              <div class="mb-4">
                <label for="alamat" class="form-label">Harga Produk</label>
                <input type="number" class="form-control" id="alamat" name="harga">
              </div>

              <a href="{{ route('produk') }}" class="btn btn-secondary">Back</a>
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
