<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("page-title")</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/js.js') }}"></script>


</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="{{ asset('img/Apple-Logo.png') }}" id="App-log" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          Customer
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/customers">CustomerList</a>
          <a class="dropdown-item" href="/customer/create">New Customer</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item text-primary" href="/customer/search_by_phone">search_by_phone</a>
          <a class="dropdown-item text-primary" href="/customer/search_by_name">search_by_name</a>
          <a class="dropdown-item text-primary" href="/customer/search_by_field">search_by_field</a>
          <a class="dropdown-item text-primary" href="/customer/search_by_all">search_by_all</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item text-danger" href="/customers/deleted">Customer Trash</a>
        </div>
      </li>
      
    </ul>
    
  </div>
</nav>
<div class="container">
     @yield("page-content")
</div>

</body>
</html>