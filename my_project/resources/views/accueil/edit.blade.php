@extends('accueil.page')

@section('title')
Edition - Salut
@endsection


@section('content')

<h1>Edition - texte - salut.</h1>
  @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif


<form action="update" method="POST">
 
 {{csrf_field()}}
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" name="name">
   
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" placeholder="enter email" name="email">
  </div>
  
 <div class="form-group">
     <label for="password">Password</label>
     <input type="password" class="form-control" id=password placeholder="Enter password" name="password">
  </div>
  <div class="form-group">
     <label for="password_confirmation">Password confirmation</label>
     <input type="password" class="form-control" id=password placeholder="Enter password" name="password_confirmation">
  </div>
 
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection


