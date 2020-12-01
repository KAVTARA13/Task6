@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('update') }}">
                    @csrf
                    <input type="hidden" name="id" value="{{$posts->id}}">
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <label for="exampleInputEmail1">title</label>
                    <input type="text" class="form-control"  placeholder="enter title" name="title" value="{{$posts->title}}">
                    <br>
                    <label for="exampleInputEmail1">description</label>
                    <input type="text" class="form-control"  placeholder="enter title" name="description" value="{{$posts->description}}">
                    <button type="submit" class="btn btn-primary">update post</button>
                </form>
@endsection

