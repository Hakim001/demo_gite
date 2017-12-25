

<h1>Edition - texte - salut.</h1>
  


<form action="{{route('users.destroy', ['user'=>$user->id])}}" method="POST">
 
  {{csrf_field()}}
  {{method_field('delete')}}
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" name="name">
   
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" placeholder="enter email" name="email">
  </div>
  
 
 
 
  <button type="submit" class="btn btn-danger">Supprimer</button>
</form>



