@extends('layouts.app')

@section('content')
<h2 class="mb-4">Tabel Data Mahasiswa</h2>

<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">NIM</th>
      <th scope="col">Year</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Strawberry Shortcake</td>
      <td>3337240070</td>
      <td>2024</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Raspberry Tart</td>
      <td>3337240085</td>
      <td>2024</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Blueberry Jam</td>
      <td>2024</td>
    </tr>
  </tbody>
</table>
@endsection