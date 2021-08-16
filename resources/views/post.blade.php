<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('POST') }}
        </h2>
    </x-slot>


    <!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Post</title>
    </head>
    <body>
    <!--Here is Form to update Blog-->
    <div class="container ">
        <h1 class="text-center ">Add Post</h1>



        <form action="/post" method="POST">
            @csrf

            <div class="mb-3 col-6">
                <label for="title" class="form-label">Name</label>
                <input type="text" class="form-control" id="title" name="title"  >
            </div>
            <div class="mb-3 col-6 ">
                <label for="body" class="form-label">Description</label>
                <textarea class="form-control" id="body" name="body" rows="3" ></textarea>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">POST</button>
            </div>
        </form>
        <h4 >{{session('status')}}</h4>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>
    </html>

</x-app-layout>
