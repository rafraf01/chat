<?php $user_id = \Illuminate\Support\Facades\DB::table('users')
    ->where('user_id','!=', Auth::user()->user_id)
    ->get();
?>
@foreach ($user_id as $key => $users)
    @if (!(Auth::user()->user_id == $users->user_id))
        <li class="friend-lists">
            <div class="img-container">
                <img class="img-friends">
            </div>
            <span class="name">{{ $users->first_name.' '.$users->last_name }}</span>
            <i class="fa fa-plus" title="add friend"></i>
        </li>
    @endif
@endforeach
