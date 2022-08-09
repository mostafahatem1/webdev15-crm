
  @extends("master")

  @section("page-title")
     Customers Trash
  @endsection
    

  @section("page-content")
        <div class="row  mt-4">
           <h1 class="text-danger" class="col-12 display-1">Cudtomers Trash</h1>
        </div>
  
       <div class="row">
        <table class="col-12 table">
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Email</th>
            <th>City_id</th>
            <th>Action</th>
        </tr>
        @foreach($deleted_cust as $customer)
        <tr>
            <td>{{$customer->name}}</td>
            <td>{{$customer->phone}}</td>
            <td>{{$customer->address}}</td>
            <td>{{$customer->email}}</td>
            <td>{{$customer->city->name}}</td>
            <td>
                <a class="btn btn-success" href="/customers/deleted/{{$customer->id}}/restore">Restore</a>
                <a class="btn btn-danger" href="/customers/deleted/{{$customer->id}}/delete_forever">Delete Forever</a>
                
            </td>
        </tr>
        @endforeach
         </table>
       </div>
  @endsection
   