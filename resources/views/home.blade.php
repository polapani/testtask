@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">The Wall</div>

                <div class="card-body">
                    <ul>
                    @foreach($posts as $post)
                       <li>
                           <label>
                               {{$post->user->name}}
                               <small>
                                   {{$post->created_at}}
                               </small>
                               @if($post->user->id === \Auth::user()->id)
                                   <a href="/post/edit/{{$post->id}}" class="">Edit post</a>
                               @endif
                           </label>
                           <p>
                               {{$post->content}}
                           </p>
                       </li>
                    @endforeach
                    </ul>
                </div>
            </div>
            <a href="/post/add" class="pull-right btn btn-success">Add post</a>
        </div>
    </div>
</div>
@endsection
