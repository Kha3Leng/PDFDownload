@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <table class="table b1">
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Street Address</th>
                        <th>City</th>
                        <th>Zip Code</th>
                        <th>Timestamps</th>
                        <th>Download</th>
                    </tr>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->full_name }}</td>
                            <td>{{ $user->street_address }}</td>
                            <td>{{ $user->city }}</td>
                            <td>{{ $user->zip_code }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td><a href="{{ action('App\Http\Controllers\UserDetailsController@downloadPDF', $user->id) }}">Download
                                    PDF</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
@endsection
