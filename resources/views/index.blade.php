<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        .error {
            color: red;
        }

    </style>
</head>
<body>

    <div class="container">
        <h2>Excel File Upload</h2>
        <form action="{{ route('files') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="file">Upload Image</label>
                <input type="file" name="file">
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>

        <!-- error message -->
        @if (count($errors) > 0)
            <div class="alert alert-danger showSweetAlert">
                <button type="button" class="close" data-dismiss="alert">×</button>
                Upload Validation Error *<br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <!-- success message -->
        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block showSweetAlert">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Excel Data</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th> Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                        </tr>
                        @foreach ($sheetData as $val)
                            <tr>
                                <td>{{ $val->name }}</td>
                                <td>{{ $val->email }}</td>
                                <td>{{ $val->phone }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
</body>

</html>
