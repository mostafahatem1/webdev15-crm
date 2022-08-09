@extends("master")

@section("page-title")
Update Customer
@endsection

@section("page-content")
        <div class="row  mt-4">
           <h1 class="col-12 display-1">Update Cudtomers</h1>
        </div>
        <div class="row">
            <form class="col-12" action="/customer/{{$cust->id}}" method="post" >
                @method('PUT')
                <div class="form-group">
                    <label for="cname">Customer Name:</label>
                    <input type="text" name="cname" id="cname" class="form-control" value="{{$cust->name}}">
                </div>
                <div class="form-group">
                    <label for="cphone">Customer Phone:</label>
                    <input type="text" name="cphone" id="cphone" class="form-control" value="{{$cust->phone}}">
                </div>
                <div class="form-group">
                    <label for="caddress">Customer Address:</label>
                    <input type="text" name="caddress" id="caddress" class="form-control" value="{{$cust->address}}">
                </div>
                <div class="form-group">
                    <label for="cemail">Customer Email:</label>
                    <input type="text" name="cemail" id="cemail" class="form-control" value="{{$cust->email}}">
                </div>
                <div class="form-group">
                    <label  for="ccity">Customer City:</label>
                    <select class="form-control" name="ccity" id="ccity">
                    @foreach($cities as $city)
                    <option value="{{ $city->id }}" @if($city->id == $cust->city_id) {{ 'SELECTED' }} @endif > {{ $city->name }}</option>
                    @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">save</button>
                <a href="/customers" class="btn btn-secondary">Back</a>
            </form>
        </div>
@endsection