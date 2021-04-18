<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Edit Siswa</title>
</head>
<body>
      <form action="{{ route('siswa.update', $siswa->id) }}" method="post">
            @csrf
            @method('PUT')
            <table>
                  <tr>
                        <td>NIS</td>
                        <td><input type="text" name="nis" value="{{ $siswa->nis }}"></td>
                  </tr>
                  <tr>
                        <td>Nama</td>
                        <td><input type="text" name="nama" value="{{ $siswa->nama }}"></td>
                  </tr>
                  <tr>
                        <td>Rombel</td>
                        <td><input type="text" name="rombel" value="{{ $siswa->rombel }}"></td>
                  </tr>
                  <tr>
                        <td>Rayon</td>
                        <td><input type="text" name="rayon" value="{{ $siswa->rayon }}"></td>
                  </tr>
                  <tr>
                        <td></td>
                        <td><button type="submit">Update</button></td>
                  </tr>
            </table>
      </form>
</body>
</html>