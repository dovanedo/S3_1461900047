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
        <h2 class="mt-5">Table Siswa</h2>
<p class="lead">Table Siswa</p>
    <div class="d-flex justify-content-between pt-2">
    <div class="d-flex"></div>
        <div class="mr-2 mb-2">
            <a href="{{ route("siswa.create") }}" class="btn btn-primary">Create</a>
        </div>
    </div>
<table class="table table-bordered">
    <thead>
        <tr>    
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <th scope="row">{{ $loop->iteration }} </th>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->alamat }}</td>
            <td>
                <a href="{{ route("siswa.edit", $item->id) }}" class="btn btn-primary btn-sm">edit</a>

                <form method="POST" action="{{ route("siswa.destroy", $item->id) }}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <input type="submit" class="btn btn-danger delete-siswa  btn-sm" value="delete">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
    </div>
    <div class="footer">
		<center>Copyright &copy; 2021 - <a href="https://www.instagram.com/dovaneap">dovanedo</a></center>
	</div>
   </body>

<script src="{{ URL::asset('js/app.js') }}"></script>
</html>