<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!doctype html>
                    <html lang="en">
                    <head>
                        <!-- Required meta tags -->
                        <meta charset="utf-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1">

                        <!-- Bootstrap CSS -->
                        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">


                    </head>
                    <body>




                    <!--Show All Post Here-->
                    <div class="container">
                        <h1 class="text-center ">List of All Posts</h1>
                        <h4 >{{session('value')}}</h4>
                        <h4 >{{session('value1')}}</h4>
                        <h4 class="text-center ">{{session('update')}}</h4>
                        <h4 class="text-center ">{{session('dest')}}</h4>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Post By</th>
                                <th scope="col">Post Title</th>
                                <th scope="col">Post Body</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($post as $posts)
                                <tr>
                                    <td scope="row">{{$posts->user->name}}</td>
                                    <td>{{$posts->title}}</td>
                                    <td>{{$posts->body}}</td>
                                    <td class="d-flex">

                                        <a href="/post/edit/{{$posts->id}}" class="btn btn-primary btn-sm">Edit</a>
                                        <!--<form>
                                            <button class=" btn-sm btn btn-primary ">Update</button>
                                        </form>-->
                                        <form action="/post/destroy/{{$posts->id}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="  btn-sm btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>


                    </body>
                    </html>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
