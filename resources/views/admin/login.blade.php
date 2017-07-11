@extends('layouts.admin')


@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Admin login</div>

                <div class="panel-body">
                    


                    <form lass="form-horizontal" role="form" method="POST" action="{{ url('/admin') }}">

							 {{ csrf_field() }}


					<div class="form-group">	
						 
						<label for="email" class="col-md-4 control-label">E-Mail Address</label>

							<div class="col-md-6">
								<input class="form-control" type="email" name="e-mail" value="{{ old('email') }} "> <br>
							</div>
					</div>


					<div class="form-group">	

						<label for="password" class="col-md-4 control-label">Password</label>

							<div class="col-md-6">
								<input class="form-control" type="password" name="password"><br>
							</div>
					</div>


						<div class="form-group">
					            
					            <div class="col-md-6 col-md-offset-4">
					                       <button type="submit" class="btn btn-success">
					                                    Login
					                        </button>
					             </div>
					     </div>

					</form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
