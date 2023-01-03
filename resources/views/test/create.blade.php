<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, Create!</title>
</head>

<body>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="row container my-5" action="{{ route('store') }}" method="post">
        @csrf
        <div class="title my-4">
            <h1>Create Trip</h1>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name Trip </label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}" id="name">
        </div>

        <div class="mb-3">
            <label for="destination" class="form-label">Destination</label>
            <input type="text" name="destination" value="{{ old('destination') }}" class="form-control"
                id="destination">
        </div>

        <div class="mb-3 col-4">
            <label for="date_trip" class="form-label"> Day Trip </label>
            <input type="date" name="date_trip" value="{{ old('date_trip') }}" class="form-control" id="date_trip">
        </div>

        <div class="form-check">
            Risk
            <div class="form-check">
                <input class="form-check-input" type="radio" name="risk" value="1" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Yes
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="risk" value="0" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                    No
                </label>
            </div>

        </div>
        <button type="submit" class=" my-4 btn btn-success">Create</button>
    </form>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
