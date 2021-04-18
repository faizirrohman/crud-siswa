<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>List Siswa</title>
</head>
<body>
      <a href="{{ route('siswa.create') }}">Tambah Siswa</a>
      <table border="1" cellpadding="2" cellspacing="2">
            <thead>
                  <tr>
                        <th>No</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Rombel</th>
                        <th>Rayon</th>
                        <th>Aksi</th>
                  </tr>
            </thead>
            <tbody>
                  @foreach ($siswa as $item)
                        <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $item->nis }}</td>
                              <td>{{ $item->nama }}</td>
                              <td>{{ $item->rombel }}</td>
                              <td>{{ $item->rayon }}</td>
                              <td>
                                    <form action="{{ route('siswa.destroy', $item->id) }}" method="post">
                                          @csrf
                                          @method('delete')
                                          <button>
                                                Hapus
                                          </button>
                                          <a href="{{ route('siswa.edit', $item->id) }}">
                                                Edit
                                          </a>
                                    </form>
                              </td>
                        </tr>
                  @endforeach
            </tbody>
      </table>
</body>
</html>