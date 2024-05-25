<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laporan Perawatan</title>

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
      <th>Layanan</th>
      <th>Jam Perawatan</th>
      <th>Catatan</th>
      <th>Biaya</th>
    </tr>
    @foreach ($perawatan as $p)
      <tr>
        <td>{{ $p->invoice }}</td>
        <td>{{ $p->tanggal_perawatan }}</td>
        <td>{{ $p->pelanggan->nama }}</td>
        <td>{{ $p->layanan->nama_layanan }}</td>
        <td>{{ $p->jam_perawatan }}</td>
        <td width="200">{{ $p->catatan }}</td>
        <td>{{ number_format($p->biaya_perawatan, 2, ',', '.') }}</td>
      </tr>
    @endforeach
  </table>
</body>

</html>
