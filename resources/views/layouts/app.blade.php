<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title','Laravel Crud')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background: #f6f8fb; }
    .card { border: 0; border-radius: 1rem; box-shadow: 0 8px 24px rgba(0,0,0,.06); }
    .navbar { box-shadow: 0 4px 12px rgba(0,0,0,.04); }
    .form-control, .btn { border-radius: .75rem; }
    .table thead th { background:#f0f3f8; }
    .badge-soft { background:#eef5ff; color:#0d6efd; }
  </style>
</head>
<body>
<nav class="navbar navbar-light bg-white mb-4">
  <div class="container">
    <a class="navbar-brand fw-bold" >Laravel Crud</a>
  </div>
</nav>

<div class="container mb-5">
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
