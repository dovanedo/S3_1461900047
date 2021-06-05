<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', config('app.name'))</title>
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-md bg-dark justify-content-md-center justify-content-start">
        <div class="navbar-collapse collapse justify-content-between align-items-center w-100" id="collapsingNavbar2">
            <ul class="navbar-nav mx-auto text-md-center text-left">
                <li class="nav-item">
                    <a class="nav-link @yield('menu_home')" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @yield('menu_siswa')" href="{{ route('siswa.index') }}">Data Siswa</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-3">
    <h2 class="mt-2">Form Siswa</h2>
<p class="lead">Form Siswa</p>
<form action="{{ route('siswa.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="isikan nama">
    </div>

    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="alamat">
    </div>

    <div class="form-group">
        <input type="submit" value="Save" class="btn btn-success btn-md">
    </div>
</form>
    </div>
    <div class="footer">
		<center>Copyright &copy; 2021 - <a href="https://www.instagram.com/dovaneap">dovanedo</a></center>
	</div>
    </body>

<script src="{{ URL::asset('js/app.js') }}"></script>
</html>