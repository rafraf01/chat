
    @foreach (Auth::user()->all() as $logs)
        @if (!(Auth::user()->first_name == $logs->first_name))
            <li>
                <div class="users">
                    <img class="user-1">
                    <a>{{ $logs->first_name.' '.$logs->last_name}}</a>
                    <div class="status <?php echo $logs->status == 1 ? 'online' : 'offline'; ?>"></div>
                </div>
            </li>
        @endif
    @endforeach