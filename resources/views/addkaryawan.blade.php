<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Checkout example · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/checkout/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
 
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="checkout.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container">
        <main>
            <div class="py-5 text-center">
                <h2>Table List Form</h2>
            </div>

            <div class="row g-5">
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Informasi</h4>
                    <form action="{{ route('create.post') }}" method="POST">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="firstName" class="form-label">Name</label>
                                <input name="Name" type="text" class="form-control" id="firstName" placeholder="">
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="firstName" class="form-label">Umur</label>
                                <input name="Umur" type="number" class="form-control" id="firstName" placeholder="">
                                <div class="invalid-feedback">
                                    Valid Umur is required.
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="firstName" class="form-label">Alamat</label>
                                <textarea name="Alamat" class="form-control" id="firstName"></textarea>
                                <div class="invalid-feedback">
                                    Valid Alamat is required.
                                </div>
                            </div>
                             <div class="col-sm-6">
                                <label for="firstName" class="form-label">Notelp</label>
                                <input name="Notelp" type="number" class="form-control" id="firstName" placeholder="">
                                <div class="invalid-feedback">
                                    Valid Umur is required.
                                </div>
                            </div>

                        <hr class="my-4">

                        <button class="w-100 btn btn-primary btn-lg" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </main>

        
    </div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="checkout.js"></script>
</body>

</html>