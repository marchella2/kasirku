<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Struk Transaksi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {{-- <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
</head>
<body>
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="text-center">
                    <h4>Struk Belanja Kasirku</h4>
                    {{-- <table width="94%" border="0">
                        <tr>
                            <td><center>Struk Belanja Kasirku</center></td>
                        </tr>
                    </table> --}}
                </div>
                <div class="text-left ml-3">
                    Tanggal = {{ date('d F Y', strtotime($transaction->created_at)) }}
                </div>
                <div class="text-left ml-3">
                    Oleh = {{ auth()->user()->name }}
                </div>
                <div class="card-body">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>Barang</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                                <th>Total</th>
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
                        </tbody>
                    </table>

                    <h6>Total Harga: <b>{{ $transaction->total_harga }}</b></h6>
                    <h6>Total Pembayaran: <b>{{ $transaction->total_bayar }}</b></h6>
                    <h6>Kembalian : <b>{{ $transaction->total_bayar - $transaction->total_harga }}</b></h6>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
