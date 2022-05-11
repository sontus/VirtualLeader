<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'VirtualLeader') }} | VirtualLeader </title>
    <!-- Favicon icon -->
    {{-- <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png"> --}}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css')}}">
</head>
<body>
   <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('assets/frontend/images/signup.png')}}" alt="main image" class="main-image">
            </div>
            <div class="col-md-6 signup">
                <h2>Virtual<strong>Leader</strong> </h2>
                <form action="{{ route('user-save')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="user_name">User Name</label>
                        <input type="text" class="form-control" name="user_name" placeholder="Ex: Chomak123" id="user_name"/>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="user_email" id="email" placeholder="Ex: Chomak@gmail.com"/>

                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select name="category" id="category" class="form-control">
                            @foreach ($categories as $item)
                                <option value="{{$item->id}}">{{ $item->category_name }}</option>
                            @endforeach
                        </select>

                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="user_password" id="password" placeholder="Ex:123456">
                    </div>
                      <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                </form>
            </div>
        </div>
   </div>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
