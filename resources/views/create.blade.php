<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Insert Data</title>
<link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min
.css">
</head>
<body style="background: lightgray">
<div class="container mt-5 mb-5">
<div class="row">
<div class="col-md-12">
<div class="card border-0 shadow-sm rounded">
<div class="card-body">
<form action="{{ route('bungas.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="form-group">
    <label class="font-weight-bold">Nama Bunga</label>
    <input type="text" class="form-control @error('NamaBunga') is-invalid @enderror" name="NamaBunga" value="{{ old('NamaBunga') }}" placeholder="Nama Bunga">
    <!-- error message untuk nama -->
    @error('Nama Bunga')
    <div class="alert alert-danger mt-2">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="form-group">
    <label class="font-weight-bold">Harga</label>
    <input type="text" class="form-control @error('Harga') is-invalid @enderror" name="Harga" value="{{ old('Harga') }}" placeholder="Harga">
    <!-- error message untuk harga -->
    @error('Harga')
    <div class="alert alert-danger mt-2">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="form-group">
    <label class="font-weight-bold">Stock</label>
    <input type="text" class="form-control @error('Stock') is-invalid @enderror" name="Stock" value="{{ old('Stock') }}" placeholder="Stock">
    <!-- error message untuk stock -->
    @error('Stock')
    <div class="alert alert-danger mt-2">
        {{ $message }}
    </div>
    @enderror
</div>
</div>
<button type="submit" class="btn btn-md btnprimary">SIMPAN</button>
<button type="reset" class="btn btn-md btnwarning">RESET</button>
</form>
</div>
</div>
</div>
</div>
</div>
<script
src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></
script>
<script
src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.j
s"></script>
</body>
</html>