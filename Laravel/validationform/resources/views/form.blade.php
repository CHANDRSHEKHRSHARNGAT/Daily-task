<!DOCTYPE html>
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</script>
</head>

<body>
<h1>chnadrashekhar sharnaagt</h1>
<div class="container mt-4">
@if(session('status'))
<div class="alert alert-success">
{{ session('status') }}
</div>
@endif
<div class="card">
<div class="card-header text-center font-weight-bold">

</div>
<div class="card-body">
<form name="employee" id="employee" method="post" action="{{url('store-form')}}">
@csrf
<div class="form-group">
<label for="exampleInputEmail1">Name</label>
<input type="text" id="name" name="name" class="@error('name') is-invalid @enderror form-control">
@error('name')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>  
      
<div class="form-group">
<label for="exampleInputEmail1">Email</label>
<input type="email" id="email" name="email" class="@error('email') is-invalid @enderror form-control">
@error('email')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>  

<div class="form-group">
<label for="exampleInputEmail1">Age</label>
<input type="number" id="age" name="age" class="@error('age') is-invalid @enderror form-control">
@error('age')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>  

<div class="form-group">
<label for="exampleInputEmail1">Contact No</label>
<input type="number" id="contact_no" name="contact_no" class="@error('contact_no') is-invalid @enderror form-control">
@error('contact_no')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>

<div class="form-group">
<label for="exampleInputEmail1">Adress</label>
<input type="text" id="adress" name="adress" class="@error('adress') is-invalid @enderror form-control">
@error('adress')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div> 

<br>
<br>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>  
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{ Config::get('languages')[App::getLocale()] }}
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
    @foreach (Config::get('languages') as $lang => $language)
        @if ($lang != App::getLocale())
                <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"> {{$language}}</a>
        @endif
    @endforeach
    </div>
</li>
</body>
</html>