@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('app.css') }}">
@endsection
@section('content')

<div class="container text-center pt-15 pb-5 ">
    <h1 class="text-6xl font-bold">Update topic</h1>

</div>
<div class="container pt-15 pb-5 ">
 <form action="/blog/{{ $post->slug }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
       <label> title</label><br>
       @error('title')
       <span class="text-danger">{{ $message }}</span>
       @enderror
       <input name="title" id="order_date" type="text" value="{{$post->title}}"
         class="w-full h-20 text-6xl rounded-lg shadow-lg border-b p-15 mb-5 form-control"  placeholder="title"   >

    </div>
    <div class="form-group">
        <label> description</label><br>
        @error('description')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        <textarea name="description" id="order_date" type="text"
          class="w-full h-20 text-6xl rounded-lg shadow-lg border-b p-15 mb-5 form-control"  placeholder="description"   >
          {{$post->description}}
        </textarea>

     </div>

     <div class="form-group">
     <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="multiple_files">Upload image</label><br>
     @error('image_path')
     <span class="text-danger">{{ $message }}</span>
     @enderror
     <input class="w-full h-20 text-6xl rounded-lg shadow-lg border-b p-15 mb-5 form-control"
       id="multiple_files" type="file" name="image_path"  multiple>
    </div>
    <div class="form-group text-center">
        <button id="do_add_item_cardd" type="submit" class="btn btn-primary btn-sm"> Edit</button>

      </div>



</form>

</div>



















@endsection
