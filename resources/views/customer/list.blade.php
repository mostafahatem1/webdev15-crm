
  @extends("master")

  @section("page-title")
     Customers List
  @endsection
    

  @section("page-content")
        <div class="row  mt-4">
           <h1 class="col-12 display-1">Cudtomers List</h1>
        </div>
  
       <div class="row">
        <table class="col-12 table">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Email</th>
            <th>City_id</th>
            <th>Action</th>
        </tr>
        @foreach($customers as $customer)
        <tr>
            <td><img class="cust-profile" src="{{ asset('storage/profile-pictures/customers/' .$customer->image) }}"></td>
            <td>{{$customer->name}}</td>
            <td>{{$customer->phone}}</td>
            <td>{{$customer->address}}</td>
            <td>{{$customer->email}}</td>
            <td>{{$customer->city->name}}</td>
            <td>
                <a class="btn btn-secondary" href="/customer/{{$customer->id}}">View</a>
                <a class="btn btn-primary" href="/customer/{{$customer->id}}/edit">Edit</a>
                <form style="display:inline-block" action="/customer/{{$customer->id}}" method="post">
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
         </table>
       </div>
  @endsection
   