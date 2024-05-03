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
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary text-light">
        <div class="container">
            <a class="navbar-brand mb-0 h1">Data Master Barang</a>
    
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('home') }}" class="nav-link active">Home</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('employees.index') }}" class="nav-link">List Barang</a></li>
                </ul>
                <a href="{{ route('profile') }}" class="btn btn-outline-light my-2 ms-md-auto" style="background-color: #6c757d;"><i class="bi-person-circle me-1"></i> My Profile</a>
            </div>
        </div>
    </nav>
    
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <h4 class="mb-3">List Barang</h4>
                <div class="col-lg-3 col-xl-3">
                    <div class="d-grid gap-2">
                        <a href="{{ route('employees.create') }}" class="btn btn-danger" style="background-color: #6c757d;">Create Employee</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Kode Barang</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Harga Barang</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Satuan ID</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($barang as $barangs)
                            <tr>
                                <td>{{ $barangs->kode_barang}}</td>
                                <td>{{ $barangs->nama_barang}}</td>
                                <td>{{ $barangs->harga_barang}}</td>
                                <td>{{ $barangs->deskripsi_barang}}</td>
                                <td>{{ $barangs->satuan_id}}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('employees.edit', ['employee' => $barangs->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>
                                        <form action="{{ route('employees.destroy', ['employee' => $barangs->id]) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    

    @vite('resources/js/app.js')
</body>
</html>