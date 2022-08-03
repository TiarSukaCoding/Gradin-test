<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kurir Gradin</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- Livewire Styles -->
    @livewireStyles()
    <style>
        body{
            background-color: #30e97d
        }
    </style>
</head>
<body class="">
    <div class="container mt-5">
        <h1 class="text-light"><strong>Kurir</strong></h1>
            <div class="row">
                <livewire:index-kurir></livewire:index-kurir>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-5">
                    {{-- @if ($statusUp)
                        <livewire:update-kurir></livewire:update-kurir>
                    @else
                        <livewire:create-kurir></livewire:create-kurir>
                    @endif --}}
                    <livewire:create-kurir></livewire:create-kurir>
                </div>
                <div class="col-md-5">
                    <livewire:update-kurir></livewire:update-todo>
                </div>
            </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <!-- Livewire Scripts -->
    @livewireScripts()
</body>
</html>
