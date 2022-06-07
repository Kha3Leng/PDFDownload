<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Street Address</th>
                        <th>City</th>
                        <th>Zip Code</th>
                        <th>Timestamps</th>
                    </tr>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->full_name }}</td>
                            <td>{{ $user->street_address }}</td>
                            <td>{{ $user->city }}</td>
                            <td>{{ $user->zip_code }}</td>
                            <td>{{ $user->created_at }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
</body>

</html>
