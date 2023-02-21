<!-- resources/views/invoice.blade.php -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Invoice</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            @page {
                size: A4 portrait;
                margin: 20mm 10mm;
                @bottom-center {
                    content: "Footer";
                }
            }

            @media print {
                .no-print {
                    display: none !important;
                }
            }

            .logo {
                width: 100px;
                height: 100px;
            }
        </style>
    </head>
    <body>
        <header>
            <img src="{{ asset('images/logo.png') }}" class="logo" alt="Logo">
            <h1>Invoice</h1>
        </header>

        <table>
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
                @foreach ($transaksi as $item)
                <tr>
                    <td>1</td>
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
                            <td>{{ $item->pajak }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <button class="no-print" onclick="printInvoice()">Cetak</button>

        <script>
            function printInvoice() {
                window.print();
            }
        </script>
    </body>
</html>
