@extends('layouts.app')

@section('content')
        <div class="px-4 sm:px-6 lg:px-8">
            <div class="sm:flex sm:items-center">
              <div class="sm:flex-auto">
                <h1 class="text-base font-semibold text-gray-900">Inventory</h1>
                <p class="mt-2 text-sm text-gray-700">Your list of articles in stock</p>
              </div>
              <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                <a class="block rounded-md bg-gray-800 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-gray-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" href="{{url('/articles/create')}}">Add Article</a>
              </div>
            </div>
            <div class="-mx-4 mt-10 ring-1 ring-gray-300 sm:mx-0 sm:rounded-lg">
              <table class="min-w-full divide-y divide-gray-300">
                <thead>
                  <tr>
                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">ID</th>
                    <th scope="col" class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">Title</th>
                    <th scope="col" class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">Description</th>
                    <th scope="col" class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">Stock</th>
                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Actions</th>
                    <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                      <span class="sr-only">Select</span>
                    </th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($articles as $article)
                  <tr>
                    <td class="relative py-4 pl-4 pr-3 text-sm sm:pl-6">
                      <div class="font-medium text-gray-900">{{ $article->id }}</div>
                    </td>
                    <td class="hidden px-3 py-3.5 text-sm text-gray-500 lg:table-cell">{{ $article->title }}</td>
                    <td class="hidden px-3 py-3.5 text-sm text-gray-500 lg:table-cell">{{ $article->description }}</td>
                    <td class="hidden px-3 py-3.5 text-sm text-gray-500 lg:table-cell">{{ $article->stock }}</td>
                    <td class="hidden px-3 py-3.5 text-sm text-gray-500 lg:table-cell">
                      <a type="button" href="{{url('/articles/'.$article->id)}}" class="mb-2 inline-flex items-center rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 disabled:cursor-not-allowed disabled:opacity-30 disabled:hover:bg-white">Edit</span></a>
                      <form class="inline-flex" method="POST" action="{{url('/articles/delete/'.$article->id)}}">
                        @csrf
                        <!--Sobre escribimos el metodo de envio de la informacion-->
                        @method('DELETE')
                        <button type="submit" class="items-center rounded-md bg-red-600 px-2.5 py-1.5 text-sm font-semibold text-white shadow-sm ring-1 ring-inset ring-gray-300 disabled:cursor-not-allowed disabled:opacity-30 disabled:hover:bg-white">Delete</span></button>
                      </form>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
@endsection