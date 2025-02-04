<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
          <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <style type="text/css">
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }

    </style>
</head>

<body>
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">

                    <img src="https://d38cf3wt06n6q6.cloudfront.net/tyasuitefront/webgpcs/images/warehouse-management-software.png"
                        class="img-fluid" alt="Phone image">

                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <h2 class="text-center text-secondary mb-3">SIGN IN</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            @foreach ($errors->all() as $error )
                            <strong>{{ $error }}</strong> <br>
                            @endforeach
                           
                          </div>
                        @endif
                        
                        <div class="form-outline mb-4">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" autocomplete="email" autofocus
                                placeholder="Email">

                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password"
                                autocomplete="current-password" placeholder="Password">

                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
