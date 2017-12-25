@extends('accueil.page')


@section('title')

Categories créer par Laravel many to many


@endsection


@section('content')
   
   <h2>Categorie : {{$cat->name}}</h2>
    
    <div>
        <ul>
            @foreach($cat->posts as $post)
              <li>{{$post->title}}</li>
            @endforeach
        </ul>
        
       
    </div>
@endsection