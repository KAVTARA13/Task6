@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">POSTS</div>

                <form method="POST" action="{{ route('store') }}">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <label for="exampleInputEmail1">title</label>
                    <input type="text" class="form-control"  placeholder="enter title" name="title">
                    <br>
                    <label for="exampleInputEmail1">description</label>
                   <textarea class="form-control" placeholder="enter description" name="description"></textarea><br>
                    <button type="submit" class="btn btn-primary">Create post</button>
                </form>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table">
            <tr>
                <td>#</td>
                <td>TITLE</td>
                <td>DESCRIPTION</td>
            </tr>
            @foreach ($posts as $post)
                <tr>
                <td>{{++$loop->index}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->description}}</td>
                @if ((Auth::user()->id)==($post->user_id))
                <br>
                    <td><a href="{{ route('edit',['id'=>$post->id])}}" class="btn btn-warning">
                        განახლება
                    </a></td>
                @endif
                </tr>
                <br>
            @endforeach
        </table>
    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
