<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')

</head>
<body>
    <style>
        body {
            background: linear-gradient(135deg, #3498db, #8e44ad);
        }
    </style>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand mb-0 h1"><i class="bi bi-shop"></i> Data Master Barang</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="{{ route('employees.index') }}" class="nav-link">Employee List</a></li>
                    <li class="nav-item"><a href="{{ route('profile') }}" class="btn btn-outline-light"><i class="bi bi-person-circle me-1"></i> My Profile</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container mt-5">
        <form action="{{ route('employees.store') }}" method="POST">
            @csrf
            <div class="p-4 bg-primary text-white rounded-3 border">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $error }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endforeach
                @endif
    
                <h1 class="text-center mb-4">Form Input Barang</h1>
    
                <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('kodeBarang') is-invalid @enderror bg-dark text-white" id="kodeBarang" name="kodeBarang" value="{{ old('kodeBarang') }}" placeholder="Enter product kode">
                    <label for="kodeBarang" class="form-label"><i class="bi bi-tag-fill"></i> Kode Product</label>
                    @error('kodeBarang')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('namaProduk') is-invalid @enderror" id="namaProduk" name="namaProduk" value="{{ old('namaProduk') }}" placeholder="Enter product name">
                    <label for="namaProduk" class="form-label">Nama Product</label>
                    @error('namaProduk')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="input-group mb-3">
                    <span class="input-group-text">Rp</span>
                    <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{ old('harga') }}" aria-label="Amount (without decimal)" step="100">
                    <span class="input-group-text">.00</span>
                    @error('harga')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="form-floating mb-3">
                    <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" rows="3" placeholder="Enter product description">{{ old('deskripsi') }}</textarea>
                    <label for="deskripsi" class="form-label">Deskripsi Product</label>
                    @error('deskripsi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('satuanID') is-invalid @enderror" id="satuanID" name="satuanID" value="{{ old('satuanID') }}" placeholder="Enter Satuan ID">
                    <label for="satuanID" class="form-label">Satuan ID</label>
                    @error('satuanID')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
    
                <!-- Form lainnya tetap seperti semula -->
    
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-success btn-lg"><i class="bi bi-check-circle-fill me-2"></i>Save</button>
                    <a href="{{ route('employees.index') }}" class="btn btn-outline-secondary btn-lg"><i class="bi bi-arrow-left-circle-fill me-2"></i>Cancel</a>
                </div>
            </div>
        </form>
    </div>
    
        </form>
    </div>

    @vite('resources/js/app.js')

</body>
</html>