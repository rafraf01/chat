
    @foreach (Auth::user()->all() as $logs)
    @if (!(Auth::user()->user_id == $logs->user_id))
    <li class="user-list">
        <div class="users">
            <img class="user-1">
            <span id="user-fullname" data-user-id="{{ $logs->user_id }}">{{ $logs->first_name.' '.$logs->last_name}}</span>
            @if ($logs->status == 1)
            <div class="status online"></div>
            @elseif ($logs->status == 0)
            <div class="status offline"></div>
            @elseif ($logs->status == 2)
            <div class="status away"></div>
            @elseif ($logs->status == 3)
            <div class="status disturb"></div>
            @endif
        </div>
    </li>
    @endif
    @endforeach