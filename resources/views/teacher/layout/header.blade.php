<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    {{-- css file  --}}
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('teacher/css/style2.css')}}">
    <!-- font awsome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    {{-- chart.js library --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    {{-- js  --}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <!-- Header with Heading -->
    <header class="text-white p-3 head2">
        <h1 class="text-center">Teacher's Portal</h1>
    </header>

    <div class="container-fluid">
        <div class="row">
            @include('teacher.layout.sidebar')
            <!-- Content Area -->
            <main role="main" class="col-md-10 ml-sm-auto col-lg-10 px-4 content">
                <!-- Blank content area. Add your content here -->

            
       