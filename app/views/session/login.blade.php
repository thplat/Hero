@extends('master')

@section('content')
    <form class="form-signin login-container" role="form" method="POST" action="">
        <h2 class="form-signin-heading">Login</h2>

            @include('partials.danger', ['messages' => $errors->all()])

            <div class="form-group">                
                <input type="text" class="form-control" placeholder="Email address" name="email">
            </div>
            <div class="form-group">                
                <input type="password" class="form-control" placeholder="Password" name="password">
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>
@stop