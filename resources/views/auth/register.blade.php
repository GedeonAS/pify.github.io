<div class="modal fade" id="exampleModal-2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Sign up</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form class="user-form" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
					<div class="row">
		
						<div class="col-12">
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
								
									<label>User name</label>
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Username" required autofocus>
    
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                
                            </div>
						</div>

						<div class="col-12">
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                
									<label>Email</label>
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required>
    
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                
                            </div>
						</div>
		
						<div class="col-12">
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
								
									<label>Password</label>
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
    
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                
                            </div>
						</div>

						<div class="col-12">
                            <div class="form-group">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                            </div>
						</div>
		
						<div class="col-12">
							<div class="login-action">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
									<label class="form-check-label" for="flexCheckDefault">
										I agree to the <a href="terms-conditions.html">Terms of Use</a> and <a href="privacy-policy.html">Privacy Policy</a>
									</label>
								</div>
							</div>
						</div>
		
						<div class="col-12">
							<button class="default-btn" type="submit">
								Sign up
							</button>
						</div>

		
						<div class="col-12">
                            <p class="create">Already on disilab?  <a href="{{route('login')}}">Login</a></p>  
                        </div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
