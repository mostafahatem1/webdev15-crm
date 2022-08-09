@extends("master")

  @section("page-title")
     Search By All
  @endsection

  @section("page-content")
        <div class="row  mt-4">
           <h1 class="col-12 display-1">Search By All</h1>
        </div>
        <div class="row mt-4 mb-4">
            <form action="/customer/search_by_all" class=" col-12" method="post">
                <div class="row">
                 <input type="text" name="sc" class="col-9 form-control" value="@if(request('sc')!=null) {{request('sc')}} @endif">
                 <button type="submit" class="btn btn-primary col-3">Search</button>
                </div>
            </form>
        </div>
  
       <div class="row">
        @empty($customers)
          <p class="alert alert-info col-12 text-center">Not Found Data</p>
        @else
         <table class="col-12 table">
           <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Email</th>
            <th>Id</th>
            <th>Action</th>
           </tr>
          @foreach($customers as $customer)
           <tr>
            <td>{{$customer->name}}</td>
            <td>{{$customer->phone}}</td>
            <td>{{$customer->address}}</td>
            <td>{{$customer->email}}</td>
            <td>{{$customer->id}}</td>
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
        @endempty
        </div>
  @endsection