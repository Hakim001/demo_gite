@extends('accueil.page')


@section('title')

Categories créer par Laravel many to many


@endsection


@section('content')
   
   
    
    <div>
        <ul>
            @foreach($categories as $category)
              <li><a href="{{route('categories.show', ['id'=>$category->id])}}">{{$category->name}}</a></li>
            @endforeach
        </ul>
        
       
    </div>
@endsection