<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laporan Penjualan</title>

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
      border: 1px solid black;
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
    <p>Laporan dari tanggal {{ $tanggal_awal }} sampai {{ $tanggal_akhir }}</p>
  </center>
  <hr>
  <table>
    <tr>
      <th>Invoice</th>
      <th>Tanggal</th>
      <th>Pelanggan</th>
      <th>Produk</th>
      <th>Jumlah</th>
      <th>Harga</th>
      <th>Total</th>
      <th>Metode Pembayaran</th>
      <th>Status Pesanan</th>
      <th>Status Pembayaran</th>
    </tr>
    @foreach ($penjualan as $p)
      <tr>
        <td>{{ $p->invoice }}</td>
        <td>{{ $p->tanggal_pesanan }}</td>
        <td>{{ $p->pelanggan->nama }}</td>
        <td>{{ $p->produk->nama_produk }}</td>
        <td>{{ $p->jumlah_produk }} pcs</td>
        <td>Rp{{ number_format($p->produk->harga, 2, ',', '.') }}</td>
        <td>Rp{{ number_format($p->total_biaya, 2, ',', '.') }}</td>
        <td>{{ $p->metode_pembayaran->nama_metode }}</td>
        <td>{{ $p->status_pesanan }}</td>
        <td>{{ $p->status_pembayaran }}</td>
      </tr>
    @endforeach
  </table>
</body>

</html>
