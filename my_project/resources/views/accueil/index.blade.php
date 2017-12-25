 @extends('accueil.page')
       
@section('title')
 bootstrap - main page
@endsection  
       
                
        
       
      
@section('content')
     <main role="main">
        <h3>mes posts</h3>
 @foreach ($posts as $post)
        {{$post->title}}
        <br/>
        @endforeach 
    <h3>fin de post</h3>   
     <h4>l'utilisateur du post</h4>   
        {{$user->name}}
                          
        @include('partials._jumbotron')

        <div class="row marketing">
          <div class="col-lg-6">
            <h4>Subheading</h4>
            <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

            <h4>Subheading</h4>
            <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

            <h4>Subheading</h4>
            <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
          </div>

          <div class="col-lg-6">
            <h4>Subheading</h4>
            <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

            <h4>Subheading</h4>
            <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

            <h4>Subheading</h4>
            <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
          </div>
        </div>

      </main>

    @endsection     