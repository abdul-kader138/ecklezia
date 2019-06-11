
    <h3>Sign In To Ecklezia</h3>
        <div class="group material-input">
            {!! Form::text('email', null, ['class' => '','required autofocus', 'value' => 'old("email")']) !!}
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Email</label>
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <div class="group material-input">
            {!! Form::text('password', null, ['class' => '','required', 'value' => 'old("password")']) !!}
            <span class="highlight"></span>
            <span class="bar"></span>
            <label>Password</label>
        </div>
    <div class="row">
        <div class="col text-left">
            <div class="styled-checkbox">
                <input class="form-check-input" type="checkbox" name="remember" id="remeber" {{ old('remember') ? 'checked' : '' }}>
                <label for="remeber">Remember me</label>
            </div>
        </div>
        <div class="col text-right">
            <a href="">Forgot Password ?</a>
        </div>
    </div>
    <div class="sign-btn text-center">
        <button type="submit" class="btn btn-lg btn-gradient-01">
            Sign In
        </button>
    </div>

    <div class="register">

                            <a href="">All Rights Reserved © 2019 Ecklezia ChMS</a>
                        </div>

<!-- End Sign In -->