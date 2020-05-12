@extends('layouts.app')

@section('content')


       <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        @if($ID===null)
                            Add post
                        @else
                            Edit post: {{ $subStrPost }}
                        @endif
                    </div>

                    <div class="card-body">
                        <form action="/post/add/{{$ID}}" method="POST">
                            @csrf
                            @if($ID!==null)
                                @method('PUT')
                            @endif

                            <textarea
                                id="content"
                                name="content"
                                placeholder="Write something"
                                class="@error('content') is-valid @enderror form-control"
                            >{{$value}}</textarea>

                            @error('content')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            <button type="submit" class="mdc-button foo-button">
                                <div class="mdc-button__ripple"></div>
                                <span class="mdc-button__label">@if($ID) Save @else Add post @endif</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
