<?php $chat_id = \Illuminate\Support\Facades\DB::table('chat_room')
    ->where('chat_user_holder','=', Auth::user()->user_id)
    ->get();

?>
@foreach ($chat_id as $key => $logs)
    @if (!(Auth::user()->user_id == $logs->user_id))
        <?php $user = \Illuminate\Support\Facades\DB::table('users')
            ->where('user_id','=',$logs->user_id)
            ->first();
        ?>
        <li class="user-list" data-chat-room_id="{{ $logs->id }}" data-user_id="{{ $logs->user_id }}" data-user-email="{{ $user->email }}" data-user-location="{{ $user->country }}">
            <div class="users">
                <img class="user-1">
                <span id="user-fullname">{{ $user->first_name.' '.$user->last_name}}</span>
                @if ($user->status == 1)
                <div class="status online"></div>
                @elseif ($user->status == 0)
                <div class="status offline"></div>
                @elseif ($user->status == 2)
                <div class="status away"></div>
                @elseif ($user->status == 3)
                <div class="status disturb"></div>
                @endif
            </div>
        </li>
    @endif
@endforeach
