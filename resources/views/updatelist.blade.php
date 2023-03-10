<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Checkout example · Bootstrap v5.3</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <form action="{{ route('update.list', $list_karyawan->id) }}" method="POST">
        @method('PATCH')
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input name="Name" value="{{ $list_karyawan->Name }}" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Umur</label>
            <input name="Umur" value="{{ $list_karyawan->Umur }}" type="number" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Alamat</label>
            <input name="Alamat" value="{{ $list_karyawan->Alamat }}" type="text" class="form-control">
        </div>
         <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Notelp</label>
            <input name="Notelp" value="{{ $list_karyawan->Notelp }}" type="number" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>
