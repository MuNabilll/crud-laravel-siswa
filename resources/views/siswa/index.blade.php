<!DOCTYPE html>
<html>
<head>
    <title>haiyya</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">

            <h1 style="text-align: center;">data siswa</h1>

                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>aksi</th>
                                <th>Nama</th>
                                <th>NISN</th>
                                <th>No HP</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $dt)
                            
                            <tr>
                                <td>
                                    <a href="{{ url('siswa/'.$dt->id) }}" class="btn btn-primary btn-sm">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
    
                                    <form method="post" action="{{ url('siswa/'.$dt->id) }}" style="display: inline;">
                                        @csrf
                                        {{ method_field('delete') }}
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data?')">
                                            <i class="fas fa-trash-alt"></i> Hapus
                                        </button>
                                    </form>
                                </td>
                                <td>{{$dt->nama}}</td>
                                <td>{{$dt->nisn}}</td>
                                <td>{{$dt->no_hp}}</td>
                                <td>{{$dt->email}}</td>
                                <td>{{$dt->alamat}}</td>
                                <td>{{$dt->created_at}}</td>
                                <td>{{$dt->updated_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <a href="{{ url('/siswa/create') }}"><button class="btn btn-primary">Tambah</button></a>

            </div>
        </div>
    </div>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
</body>
</html>