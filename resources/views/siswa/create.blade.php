<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Tambah Siswa</title>
</head>
<body>
      <form action="{{ route('siswa.store') }}" method="post">
            @csrf
            <table>
                  <tr>
                        <td>NIS</td>
                        <td><input type="text" name="nis"></td>
                  </tr>
                  <tr>
                        <td>Nama</td>
                        <td><input type="text" name="nama"></td>
                  </tr>
                  <tr>
                        <td>Rombel</td>
                        <td><input type="text" name="rombel"></td>
                  </tr>
                  <tr>
                        <td>Rayon</td>
                        <td><input type="text" name="rayon"></td>
                  </tr>
                  <tr>
                        <td></td>
                        <td><button type="submit">Simpan</button></td>
                  </tr>
            </table>
      </form>
</body>
</html>