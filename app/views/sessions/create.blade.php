@extends ('default')


@section ('content')
	


	<div class="container form-box" id="login-box">

        <div class="header">
            
            <!-- <i class="fa fa-cubes"></i> <span>Sign In</span> -->
            @if ( Session::get('flash_message'))
            
            <div class="alert alert-warning alert-dismissable"> 
                <i class="fa fa-warning"></i>
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <p>{{ Session::get('flash_message')}}</p>
            </div>

            @endif
    
        </div>
		
		{{ Form::open(['route' => 'sessions.store']) }}


                <div class="col-xs-6 col-xs-offset-3">

                    <h1>Admin Login</h1>
                    <div class="form-group">
                    {{ Form::text('email', '', array('placeholder' => 'Enter Email','class' => 'form-control')) }}
                    </div>
                    <div class="form-group">
                        {{ Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) }}
                    </div> 
                    <p><a href="#">I forgot my password</a></p> 

                {{ Form::submit('Login', array('class' => 'btn btn-success pull-right'))}}

                </div>

       {{ Form:: close()}}


    </div>



    

@stop