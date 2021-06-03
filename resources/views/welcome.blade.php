<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Project Boring</title>
</head>

<body>
    @include('component.navbar')
    <div class=" bg-dark col-sm" style="height: 2cm"></div>
    <div class="bg-dark text-white">
        <div class="p-5 mb-auto bg-dark">
            <div class="container-fluid py-5">
                <h5 class="display-6 text-white fw-bold">Welcome to Project Boring</h5>
                <h5 class="text-white">Project Boring is a blog project and personal portfolio owned by Arif Budiman
                    Arrosyid, a student at the University of Muhammadiyah Yogyakarta. This project is done using Laravel
                    8 and Laravel Voyager as the admin panel.
                </h5>
            </div>
        </div>
    </div>
    <div class="p-5 bg-dark text-white">
        <h3 class="pb-2">This website will discuss about:</h3>
        <div class="col justify-content-md-evenly">

            <div class="col-md-auto pb-3 ">
                <div class="card text-dark">
                    <h4 class="card-body">
                        1. Flutter
                    </h4>
                </div>
            </div>
            <div class="col-md-auto pb-3 ">
                <div class="card text-dark">
                    <h4 class="card-body">
                        2. Laravel
                    </h4>
                </div>
            </div>
            <div class="col-md-auto pb-3 ">
                <div class="card text-dark">
                    <h4 class="card-body">
                        3. PHP
                    </h4>
                </div>
            </div>
            <div class="col-md-auto pb-3 ">
                <div class="card text-dark">
                    <h4 class="card-body">
                        4. Database
                    </h4>
                </div>
            </div>
            <div class="col-md-auto pb-3 ">
                <div class="card text-dark">
                    <h4 class="card-body">
                        5. UI/UX
                    </h4>
                </div>
            </div>
        </div>
        @include('component.footer')
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>
