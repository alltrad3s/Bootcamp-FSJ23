@extends('layouts.app')

@section('content')
<form method="POST" action="{{ url("/articles/$article->id")}}">
    @csrf
    <!--Sobre escribimos el metodo de envio de la informacion-->
    @method('PUT')
    <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base/7 font-semibold text-gray-900">Update Item - {{ $article->title }}</h2>
        <p class="mt-1 text-sm/6 text-gray-600">Please update the item information.</p>
  
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-3">
            <label class="block text-sm/6 font-medium text-gray-900">Title</label>
            <div class="mt-2">
              <input type="text" id="title" name="title" placeholder="Title" value="{{ $article->title }}" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-gray-900 sm:text-sm/6">
            </div>
          </div>
  
          <div class="sm:col-span-4">
            <label class="block text-sm/6 font-medium text-gray-900">Description</label>
            <div class="mt-2">
              <input name="description" id="description" type="text" placeholder="Item Description" value="{{ $article->description }}" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-gray-900 sm:text-sm/6">
            </div>
          </div>
  
          <div class="sm:col-span-3">
            <label for="country" class="block text-sm/6 font-medium text-gray-900">Stock</label>
            <div class="mt-2 grid grid-cols-1">
                <input type="number" id="stock" name="stock" placeholder="Item Stock" value="{{ $article->stock }}" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-gray-900 sm:text-sm/6">
            </div>
          </div>
        </div>
        <button type="submit" class="block rounded-md mt-6 bg-gray-800 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-gray-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
      </div>
</form>
@endsection