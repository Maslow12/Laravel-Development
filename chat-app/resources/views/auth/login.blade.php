<header>
    @extends('includes.nav-bar')
</header>

<body>
    @section('content')
    <link href="{{ asset('assets/css/login.css') }}" rel="stylesheet">
    <div class="row p-5">
        <div class="col">
        </div>
        <div class="col pt-3">
            @if(session('success'))
            <div class="alert alert-success p-3 text-center">
                <ul>
                    <li>{{ session('success') }}</li>
                </ul>
            </div>
            @endif
            @if ($errors->any())
            <div class="alert alert-danger p-3 text-center">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="container pt-3 m-3">
                <div class="card p-3">
                    <h1 class="text-center">Login</h1>
                    <form action="{{ route('login-submit') }}" method="post">
                        @csrf
                        <div class="form-outline mb-4">
                            <input type="email" id="form3Example3cg" class="form-control form-control-lg" name="email" />
                            <label class="form-label" for="form3Example3cg">Your Email</label>
                        </div>

                        <div class="form-outline mb-4">
                            <input type="password" id="form3Example4cg" class="form-control form-control-lg" name="password" />
                            <label class="form-label" for="form3Example4cg">Password</label>
                        </div>

                        <div class="form-check d-flex justify-content-center mb-5">
                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                            <label class="form-check-label" for="form2Example3g">
                                I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                            </label>
                        </div>

                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-success btn-block btn-lg text-body">Login</button>
                        </div>
                    </form>
                    <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="{{ route('register-index') }}" class="fw-bold text-body"><u>Register</u></a></p>
                </div>
            </div>
        </div>
        <div class="col">
        </div>
    </div>
    @endsection
</body>