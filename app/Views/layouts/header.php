<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | EMR System</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons (Bootstrap Icons) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }

        /* Sidebar */
        .sidebar {
            height: 100vh;
            background-color: #fff;
            border-right: 1px solid #dee2e6;
            position: fixed;
            width: 240px;
            padding-top: 1rem;
        }

        .sidebar .nav-link {
            color: #333;
            font-weight: 500;
            padding: 10px 20px;
        }

        .sidebar .nav-link.active {
            background-color: #f1f5ff;
            color: #0d6efd;
            border-radius: 10px;
        }

        .main-content {
            margin-left: 250px;
            padding: 30px;
        }

        .card-icon {
            font-size: 1.8rem;
            border-radius: 10px;
            padding: 10px;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 45px;
            height: 45px;
            color: white;
        }

        .icon-blue {
            background-color: #e8f0ff;
            color: #0d6efd;
        }

        .icon-green {
            background-color: #e8f9f0;
            color: #198754;
        }

        .icon-purple {
            background-color: #f3e8ff;
            color: #6f42c1;
        }

        .icon-orange {
            background-color: #fff4e5;
            color: #fd7e14;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .activity-dot {
            height: 10px;
            width: 10px;
            border-radius: 50%;
            display: inline-block;
            margin-right: 5px;
        }

        .dot-green {
            background-color: #28a745;
        }

        .dot-blue {
            background-color: #0d6efd;
        }

        .dot-purple {
            background-color: #6f42c1;
        }
    </style>
</head>
<body>