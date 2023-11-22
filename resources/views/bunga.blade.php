<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pemrograman Web Lanjut</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: lightgray">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h3 class="text-center my-4">Data Bunga</h3>
                        <hr>
                    </div>
                    <div>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('bungas.create') }}" class="btn btn-md btn-success mb-3">TAMBAH</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Nama Bunga</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($bungas as $Bunga)
                                <tr>
                                    <td>{{ $Bunga->NamaBunga }}</td>
                                    <td>{{ $Bunga->Harga }}</td>
                                    <td>{!! $Bunga->Stock !!}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('bungas.destroy', $Bunga->id) }}" method="POST">  
                                            <a href="{{ route('bungas.edit', $Bunga->id) }}" {{ $Bunga->id }} class="btn btn-sm btn-primary">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <div class="alert alert-danger">
                                    Data Post belum Tersedia.
                                </div>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        //message with toastr
        @if(session()->has('success'))
        toastr.success('{{ session('success') }}', 'BERHASIL!');
        @elseif(session()->has('error'))
        toastr.error('{{ session('error') }}', 'GAGAL!');
        @endif
    </script>
</body>
</html>
