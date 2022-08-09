@extends("master")

@section("page-title")
Customer Profile
@endsection

@section("page-content")
    <h1 class="displat-1">Customer Profile</h1>
    <ul>
        <li>Name: {{$cust->name}}</li>
        <li>Phone: {{$cust->phone}}</li>
        <li>Address: {{$cust->address}}</li>
        <li>Email: {{$cust->email}}</li>
        <li>City: {{$cust->city->name}}</li>
    </ul>
@endsection