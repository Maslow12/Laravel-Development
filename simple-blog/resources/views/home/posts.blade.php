<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbars/">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

<header>
    @extends('includes.nav-bar')
</header>

@section('content')
    <body>
        <div class="container">
            <div class="card border-0">
                <form class="was-validated" action="{{ route("create_posts") }}" method="POST">
                    @csrf
                        <label for="exampleInputEmail1">Post Title</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="title" name="title">
                        <small id="emailHelp" class="form-text text-muted">What you think now...</small>
                        <div class="mb-3">
                            <label for="validationTextarea">Write your post</label>
                            <textarea class="form-control" id="validationTextarea" placeholder="Required example textarea" name="description"></textarea>
                        </div>
                        <input class="btn btn-primary pt-3 mt-3" type="submit" value="Submit">
                </form>
            </div>
            @foreach ($posts as $post)
       
                <div class="card text-center">

                    <div class="card-header">
                        {{ $post->title }}
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{ $post->description }}</p>
                    </div>
                    <div class="card-footer text-muted">
                        {{ $post->timestamps }}
                    </div>
                </div>
            @endforeach
        </div>
    </body>
@endsection