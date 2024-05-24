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
    <p><i>Terima kasih telah melakukan pemesanan layanan di Indah Salon. Berikut adalah invoice layanan yang telah
        anda pesan.</i></p>
  </center>
  <hr>
  <p><i><b>Pembayaran dilakukan di lokasi salon. Harap simpan invoice ini. </b></i></p>
  <table>
    <tr>
      <td>Invoice</td>
      <td>:</td>
      <td>{{ $perawatan->invoice }}</td>
    </tr>
    <tr>
      <td>Tanggal Pesan</td>
      <td>:</td>
      <td>{{ $perawatan->created_at->format('Y-m-d') }}</td>
    </tr>
    <tr>
      <td>Nama Layanan</td>
      <td>:</td>
      <td>{{ $perawatan->layanan->nama_layanan }}</td>
    </tr>
    <tr>
      <td>Nama Pelanggan</td>
      <td>:</td>
      <td>{{ $perawatan->pelanggan->nama }}</td>
    </tr>
    <tr>
      <td>Tanggal Perawatan</td>
      <td>:</td>
      <td>{{ $perawatan->tanggal_perawatan }}</td>
    </tr>
    <tr>
      <td>Jam Perawatan</td>
      <td>:</td>
      <td>{{ $perawatan->jam_perawatan }}</td>
    </tr>
    <tr>
      <td>Catatan</td>
      <td>:</td>
      <td>{{ $perawatan->catatan ?? '-' }}</td>
    </tr>
    <tr>
      <td>Durasi</td>
      <td>:</td>
      <td>{{ $perawatan->layanan->durasi }} menit</td>
    </tr>
    <tr>
      <td>Biaya</td>
      <td>:</td>
      <td><b>Rp {{ number_format($perawatan->biaya_perawatan, 2, ',', '.') }}</b></td>
    </tr>
  </table>
</body>

</html>
