<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Data Bukber Azzahrah 19 April 2023</h1>

<table id="customers">
  <tr>
    <th>No</th>
    <th>Nama</th>
    <th>Generasi</th>
    <th>Metode Pembayaran</th>
  </tr>
  @php
    $no=1;
  @endphp

  @foreach(array_reverse($bukber->toArray()) as $index => $ds)
  <tr>
    <td>{{ $no++ }}</td>
    <td>{{ $ds['nama'] }}</td>
    <td>{{ $ds['generasi'] }}</td>
    <td>{{ $ds['metode_pembayaran'] }}</td>
  </tr>
  @endforeach
</table>

</body>
</html>


