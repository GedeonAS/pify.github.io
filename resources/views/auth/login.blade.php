
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Log In</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
                        <form class="user-form" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="row">

                                <div class="{{ $errors->has('email') ? ' has-error' : '' }} col-12">
                                    <div class="form-group">
                                    <label>User Email</label>
                                    <input id="email-login" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="User Email" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                    </div>
                                </div>

                                <div class="{{ $errors->has('password') ? ' has-error' : '' }} col-12">
                                    <div class="form-group">
                                        <input id="password-login" type="password" class="form-control" name="password" placeholder="Password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                {{-- <div class="form-group col-6">
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                            </label>
                                        </div>
                                    </div>
                                </div> --}}

                                <div class="col-12">
                                    <div class="login-action">
                                        <span class="forgot-login">
                                            <a href="{{ route('password.request') }}">Forgot Password?</a>
                                        </span>
                                    </div>
                                </div>
                            
                                <div class="col-12">
                                    <button class="default-btn" type="submit" class="btn btn-primary">
                                        Login
                                    </button>
                                </div>
                            
                                <div class="col-12">
                                    <p class="create">Don't have an account? <a href="{{route('register')}}">Sign Up</a></p>  
                                </div>
                            </div>
                        </form>
                    </div>
				</div>
			</div>
		</div>
