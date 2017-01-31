{!! Theme::asset()->add('chat.css','assets/css/index/chat.css') !!}
{!! Theme::asset()->add('chat.css','assets/css/index/login.css') !!}
<div class="chat-container">
    <div class="chatbox-container-login">
        <div class="panel panel-body">
            {!! Form::open(['url' => 'login', 'id'=>'loginForm']) !!}
            @if (count($errors) > 0)
            <div align="center" style="margin-top:10px;">
                <div class="alert alert-danger errormsg">
                    <strong>Whoops!</strong> Something may have gone wrong<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach

                    </ul>
                </div>
            </div>
            @endif
            <div class="title-section">
                <header>Login</header>
            </div>
            <div class="login-section">
                <div class="input-group">
                    <input type="text" id="username" name="username" class="form-control" placeholder="Username">
                </div>
                <div class="input-group">
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                </div>
                <div align="center">
                    <button type="submit" id="submit" name="submit" class="btn btn-primary btn-md">login</button>
                </div>
                <div class="input-group">
                    <a class="register">Register</a>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

<!-- Modal -->
{!! Form::open(['url' => 'register', 'id'=>'registrationForm']) !!}
<div class="modal fade" id="myModal" role="dialog" data-backdrop="static">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Create New Account</h4>
            </div>
            <div class="modal-body">
                <div class="panel-register">
                    <div class="input-group">
                        <input type="text" id="email" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="input-group">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="input-group">
                        <input type="password" id="confirm" name="confirm" class="form-control" placeholder="Confirm Password">
                    </div>
                    <div class="input-group">
                        <input type="text" id="first_name" name="first_name" class="form-control" placeholder="First Name">
                    </div>
                    <div class="input-group">
                        <input type="text" id="middle_name" name="middle_name" class="form-control" placeholder="Middle Name">
                    </div>
                    <div class="input-group">
                        <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Last Name">
                    </div>
                    <div align="center">
                        <button type="submit" id="btn-register" name="submit" class="btn btn-primary btn-md">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}

<script>
    $(document).ready(function(){
        $('.register').on('click',function(){
            $('#myModal').modal('show');
        });
    });
</script>


