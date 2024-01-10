<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Bootstrap Page with Cards</title>
    <link rel="stylesheet" href="{{asset('teacher/css/style2.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="path/to/boxicons/css/boxicons.min.css">

</head>

<body>
<!-- Your header with book, message, and logout icons -->
<header class="text-white text-center py-4 heading">
    <div class="d-flex justify-content-between align-items-center">
        <h1><i class="bx bxs-book-open"></i> Teacher's Portal</h1>
        <div class="icon">
            {{-- <a href="#" class="text-white mr-3"><i class="bx bx-envelope bx-lg"></i></a> <!-- Larger Message Icon --> --}}
            <a href="#" class="text-white"><i class="bx bx-log-out bx-lg"></i></a> <!-- Larger Logout Icon -->
        </div>
    </div>
</header>
    <!-- Bootstrap Content Area -->
    <div class="container mt-4">

        <!-- Main Content Area -->
        <main>