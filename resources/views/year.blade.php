<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>OAE-Vote</title>
</head>
<body>

<div class="container mt-5 col-md-4">
{{--    <h2>Provide year</h2>--}}
    <form action="year" method="post">
        @csrf
        <div class="form-group">
            <label for="year">Year:</label>
            <input type="number" class="form-control" id="year" placeholder="Enter year" name="year" value="{{old('year')}}" required>
            <p class="help">{{ $errors->first('year') }}</p>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    @if (session('status'))
        <div class="alert alert-success mt-3" role="alert">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{ session('status') }}
        </div>
    @endif

</div>

</body>
</html>
