<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Laporan Transaksi</title>
</head>
<body>
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="text-center">
                    <h4>Laporan Transaksi Kasirku</h4>
                </div>
                <div class="card-body">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>Nama Barang</th>
                                <th>Jumlah Pembelian</th>
                                <th>Harga Satuan</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($transaction->transactionDetails as $detail)
                                <tr>
                                    <td>{{ $detail->barang['nama_barang'] }}</td>
                                    <td>{{ $detail->harga_satuan }}</td>
                                    <td>{{ $detail->jumlah }}</td>
                                    <td>{{ $detail->harga_satuan * $detail->jumlah }}</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="3"><center><b>Tanggal Transaksi</b></center></td>
                                <td><b>{{ date('d F Y', strtotime($transaction->created_at)) }}</b></td>
                            </tr>
                            <tr>
                                <td colspan="3"><center><b>Total Harga</b></center></td>
                                <td><b>Rp. {{ $transaction->total_harga }}</b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
