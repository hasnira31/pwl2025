<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        body {
            background-color: #f0f2f5;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .navbar {
            background-color: #1a73e8;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .navbar-brand {
            color: white;
            font-weight: bold;
            letter-spacing: 0.5px;
        }
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            margin-bottom: 24px;
            overflow: hidden;
        }
        .card-header {
            background-color: #f8f9fa;
            border-bottom: 1px solid #e9ecef;
            font-weight: 600;
            padding: 15px 20px;
        }
        .btn-primary {
            background-color: #1a73e8;
            border-color: #1a73e8;
        }
        .btn-primary:hover {
            background-color: #0d66da;
            border-color: #0d66da;
        }
        .btn-danger {
            background-color: #ea4335;
            border-color: #ea4335;
        }
        .btn-danger:hover {
            background-color: #d33426;
            border-color: #d33426;
        }
        .pagination {
            justify-content: center;
        }
        .table {
            border-radius: 8px;
            overflow: hidden;
        }
        .table thead th {
            background-color: #f8f9fa;
            border-color: #e9ecef;
            font-weight: 600;
            color: #5f6368;
        }
        .form-control:focus {
            border-color: #1a73e8;
            box-shadow: 0 0 0 0.2rem rgba(26, 115, 232, 0.25);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('employees.index') }}">
                <i class="bi bi-people-fill me-2"></i>Sistem Manajemen Pegawai
            </a>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>