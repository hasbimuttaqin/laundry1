<html>
<head>
    <title>Laporan Transaksi</title>
    <style type="text/css">
          @media print{
            .no-print{
                display: none;
            }
          }
    </style>
</head>
<body>
    <h1>Laporan Transaksi</h1>
    <p>Periode: {{ $tgl}} sampai {{ $batas_waktu }}</p>

    <div class="container">
        <div class="row">
            <table cellpadding="0" cellspacing="10px">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Invoice</th>
                        <th>Outlet</th>
                        <th>Nama Member</th>
                        <th>Nama Produk</th>
                        <th>Qty</th>
                        <th>Tanggal Transaksi</th>
                        <th>Batas Waktu</th>
                        <th>Tanggal Bayar</th>
                        <th>Biaya Tambahan</th>
                        <th>Diskon%</th>
                        <th>Pajak%</th>
                        <th>Status</th>
                        <th>Pembayaran</th>
                        <th>Ket</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1
                    @endphp
                    @foreach ($transaksi as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->kd_invoice }}</td>
                        <td>{{ $item->outletts->nama_outlet}}</td>
                        <td>{{ $item->members->nama }}</td>
                        <td>{{ $item->produks->nama_paket }}</td>
                        <td>{{ $item->qty }}</td>
                        <td>{{ $item->tgl }}</td>
                        <td>{{ $item->batas_waktu }}</td>
                        <td>{{ $item->tgl_bayar }}</td>
                        <td>Rp.{{ $item->biaya_tambahan }}</td>
                        <td>{{ $item->diskon }}%</td>
                        <td>{{ $item->pajak }}%</td>
                        <td>{{ $item->status }}</td>
                        <td>{{ $item->dibayar }}</td>
                        <td>{{ $item->keterangan }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <button class="no-print" onclick="printLaporan()" style="margin-top: 10px">Cetak</button>

    <script>
        function printLaporan() {
            window.print();
        }
    </script>
</body>
</html>
