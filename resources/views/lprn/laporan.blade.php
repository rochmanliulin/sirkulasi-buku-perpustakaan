<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Laporan</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <style type="text/css">
    table tr td, table tr th, p {
      font-size: 9pt;
    }
  </style>
</head>

<body>
  <h5 class="text-center my-5">LAPORAN HASIL STUDI</h5>

  @php
    $user = $laporan->first();
  @endphp
  <p class="mb-1 pt-4">Tahun Ajaran : {{ $user->th_ajaran }} </p>
  <p class="mb-1">Semester : {{ $user->semester }} </p>
  <p class="mb-1">NBI : {{ $user->nbi }} </p>
  <p class="mb-4">Nama : {{ $user->laporan->nama }} </p>

  <table class="table table-bordered table-sm">
    <thead>
      <tr>
        <th>Kode MK</th>
        <th>Nama MK</th>
        <th>SKS</th>
        <th>Nilai</th>
        <th>Bobot</th>
        <th>Total (Bobot*SKS)</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($laporan as $mhs)
      <tr>
        <td>{{ $mhs->kode_mk }}</td>
        <td>{{ $mhs->laporan->nama }}</td>
        <td>{{ $mhs->mata_kuliah->sks }}</td>
        <td>{{ $mhs->nilai }}</td>
        <td>{{ $bobot }}</td>
        <td>{{ $total_bobot }}</td>
      </tr>
      @endforeach
      <tr>
        <th colspan="6">Total</th>
        <td>{{ $total }}</td>
      </tr>
      <tr>
        <th colspan="6">IPS</th>
        <td>{{ $ips }}</td>
      </tr>
    </tbody>
  </table>

</body>

</html>