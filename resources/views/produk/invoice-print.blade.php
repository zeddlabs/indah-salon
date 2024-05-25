<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Invoice Layanan</title>

  <style>
    body {
      font-family: Arial, sans-serif;
      font-size: 14px;
    }

    table {
      border-collapse: collapse;
      width: 100%;
    }

    table,
    th,
    td {
      border: none;
    }

    th,
    td {
      padding: 8px;
      text-align: left;
    }
  </style>

</head>

<body>
  <center>
    <h2>Indah Salon</h2>
    <p><i>Terima kasih telah melakukan pemesanan produk di Indah Salon. Berikut adalah invoice produk yang telah
        anda pesan.</i></p>
  </center>
  <hr>
  <table>
    <tr>
      <td>Invoice</td>
      <td>:</td>
      <td>{{ $penjualan->invoice }}</td>
    </tr>
    <tr>
      <td>Nama Pelanggan</td>
      <td>:</td>
      <td>{{ $penjualan->pelanggan->nama }}</td>
    </tr>
    <tr>
      <td>Tanggal Pesanan</td>
      <td>:</td>
      <td>{{ $penjualan->tanggal_pesanan }}</td>
    </tr>
    <tr>
      <td>Produk</td>
      <td>:</td>
      <td>{{ $penjualan->produk->nama_produk }}</td>
    </tr>
    <tr>
      <td>Harga Produk</td>
      <td>:</td>
      <td>Rp {{ number_format($penjualan->produk->harga, 2, ',', '.') }}</td>
    </tr>
    <tr>
      <td>Jumlah Produk</td>
      <td>:</td>
      <td>{{ $penjualan->jumlah_produk }}</td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td>:</td>
      <td>{{ $penjualan->pelanggan->alamat }}</td>
    </tr>
    <tr>
      <td>Metode Pembayaran</td>
      <td>:</td>
      <td>{{ $penjualan->metode_pembayaran->nama_metode }}</td>
    </tr>
    <tr>
      <td>Status Pembayaran</td>
      <td>:</td>
      <td>{{ $penjualan->status_pembayaran }}</td>
    </tr>
    <tr>
      <td>Status Pesanan</td>
      <td>:</td>
      <td>{{ $penjualan->status_pesanan }}</td>
    </tr>
    <tr>
      <td>Biaya</td>
      <td>:</td>
      <td><b>Rp {{ number_format($penjualan->total_biaya, 2, ',', '.') }}</b></td>
    </tr>
  </table>
</body>

</html>
