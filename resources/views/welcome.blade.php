<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .card {
            height: 400px;
        }
    </style>
</head>

<body>
    <div class="container-fluid bg-primary p-5" style="background-image:url('https://images.unsplash.com/photo-1593642634443-44adaa06623a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1225&q=80'); background-repeat:no-repeat;background-size:cover;background-position:center center;">
        <h2 class="text-center text-white ">API Kelompok Zulfa</h2>
        <div class="row mt-4">
            <div class="col-4">
                <div class="card" style="width: 100%;">
                    <img src='https://images.unsplash.com/photo-1622839144198-63bb83ab8722?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80' alt="" height="200">
                    <div class="card-body">
                        <h2 class="text-center">Vendor</h2>
                    </div>
                    <div class="card-footer">
                        <div class="form-group mx-auto" style="width: fit-content;">
                            <a href="{{url('/api/vendor')}}" class="btn btn-danger">Get API</a>
                            <a href="{{route('vendor')}}" class="btn btn-success">Create it!</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 100%;">
                    <img src='https://images.unsplash.com/photo-1622839144198-63bb83ab8722?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80' alt="" height="200">
                    <div class="card-body">
                        <h2 class="text-center">Pengolahan bahan baku</h2>
                    </div>
                    <div class="card-footer">
                        <div class="form-group mx-auto" style="width: fit-content;">
                            <a href="{{url('/api/pengolahan-baku')}}" class="btn btn-danger">Get API</a>
                            <a href="{{route('pengolahan')}}" class="btn btn-success">Create it!</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 100%;">
                    <img src='https://images.unsplash.com/photo-1622839144198-63bb83ab8722?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80' alt="" height="200">
                    <div class="card-body">
                        <h2 class="text-center">Request pengambilan barang</h2>
                    </div>
                    <div class="card-footer">
                        <div class="form-group mx-auto" style="width: fit-content;">
                            <a href="{{url('/api/pengambilan-barang')}}" class="btn btn-danger">Get API</a>
                            <a href="{{route('pengambilan')}}" class="btn btn-success">Create it!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-4">
                <div class="card" style="width: 100%;">
                    <img src='https://images.unsplash.com/photo-1622839144198-63bb83ab8722?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80' alt="" height="200">
                    <div class="card-body">
                        <h2 class="text-center">Anggaran dana</h2>
                    </div>
                    <div class="card-footer">
                        <div class="form-group mx-auto" style="width: fit-content;">
                            <a href="{{url('/api/dana')}}" class="btn btn-danger">Get API</a>
                            <a href="{{route('dana')}}" class="btn btn-success">Create it!</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 100%;">
                    <img src='https://images.unsplash.com/photo-1622839144198-63bb83ab8722?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80' alt="" height="200">
                    <div class="card-body">
                        <h2 class="text-center">Request order bahan baku</h2>
                    </div>
                    <div class="card-footer">
                        <div class="form-group mx-auto" style="width: fit-content;">
                            <a href="{{url('/api/order')}}" class="btn btn-danger">Get API</a>
                            <a href="{{route('order')}}" class="btn btn-success">Create it!</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 100%;">
                    <img src='https://images.unsplash.com/photo-1622839144198-63bb83ab8722?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80' alt="" height="200">
                    <div class="card-body">
                        <h2 class="text-center">Transaksi</h2>
                    </div>
                    <div class="card-footer">
                        <div class="form-group mx-auto" style="width: fit-content;">
                            <a href="{{url('/api/transaksi')}}" class="btn btn-danger">Get API</a>
                            <a href="{{route('transaksi')}}" class="btn btn-success">Create it!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>