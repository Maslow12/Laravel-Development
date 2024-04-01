<title>Register</title>

<header>
    @extends('includes.nav-bar')
</header>

@section("content")
<section class="vh-100 mt-3" id="main">
    <link href="{{ asset('assets/css/register.css')}}" rel="stylesheet">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                <div class="card" style="border-radius: 15px;">
                    @if ($errors->any())
                    <div class="alert alert-danger p-3 text-center">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <h6>{{ $error }}</h6>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="card-body p-5">
                        <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                        <form action="{{ route('register-submit') }}" method="post">
                            @csrf
                            <div class="form-outline mb-4">
                                <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="name" />
                                <label class="form-label" for="form3Example1cg">Your Name</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="email" id="form3Example3cg" class="form-control form-control-lg" name="email" />
                                <label class="form-label" for="form3Example3cg">Your Email</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" id="form3Example4cg" class="form-control form-control-lg" name="password" />
                                <label class="form-label" for="form3Example4cg">Password</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" id="form3Example4cdg" class="form-control form-control-lg" name="password_2" />
                                <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                            </div>

                            <div class="form-check d-flex justify-content-center mb-5">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                                <label class="form-check-label" for="form2Example3g">
                                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                                </label>
                            </div>

                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-success btn-block btn-lg text-body text-white">Register</button>
                            </div>

                            <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="#!" class="fw-bold text-body"><u href="{{ url('auth/register') }}">Login here</u></a></p>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection