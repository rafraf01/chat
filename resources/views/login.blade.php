

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
    <br><div class="col-md-2">
        <input type="text" id="username" name="username" class="form-control">
    </div>
    <div class="col-md-2">
        <input type="password" id="password" name="password" class="form-control">
    </div>
    <div class="col-md-1">
        <button type="submit" id="submit" name="submit" class="btn btn-default">login</button>
    </div>

{!! Form::close() !!}
