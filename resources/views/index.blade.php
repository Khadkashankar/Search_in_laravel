<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Search in laravel demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row py-2">
            <div class="col-md-6">
                <h2><a href="" class="btn btn-success">Add New Post</a></h2>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <form action="/search" method="post">
                        @csrf
                        <div class="input-group">
                            <input class="form-control" name="search" placeholder="Search..."
                                value="{{ isset($search) ? $search:'' }} ">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <table class=" table table-striped">
            <thead>
                <tr>
                    <th scope="col">S.N</th>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $key=>$post)
                <tr>
                    <th scope="row">{{ $key+1}}</th>
                    <th>{{ $post->id }}</th>
                    <td>{{ $post->category->name }}</td>
                    <td>{{ $post->user->name }}</td>
                    <td>{{ $post->description }}</td>
                    <td>
                        <a href="" class="btn btn-primary">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>