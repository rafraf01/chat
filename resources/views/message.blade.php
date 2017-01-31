<ul data-chat_room_id="{{ $room_id }}">
    @foreach ($chat_message as $key => $messagedata)
    @if (Auth::user()->user_id == $messagedata->chat_from)
        <li class="chat-send">
            <div id="chat-status" class="row msg-container base-sent">
                <div class="col-md-12">
                    <div class="col-md-11">
                        <div class="messages msg-sent">
                           <div>{{ $messagedata->chat_message }}</div>
                            <span class="time"><i>{{App\Http\Controllers\Controller::TimeSpan(strtotime($messagedata->datetime_sent))}} ago</i></span>
                        </div>
                    </div>
                    <div class="col-md-1 avatar">
                        <img class="img-responsive " src="../../assets/img/rafael.jpg">
                    </div>
                </div>
            </div>
        </li>
    @else
        <li class="chat-receiver">
            <div id="chat-status" class="row msg-container base-receive">
                <div class="col-md-12">
                    <div class="col-md-1 avatar">
                        <img class="img-responsive " src="../../assets/img/john_doe.jpg">
                    </div>
                    <div class="col-md-11">
                        <div class="messages msg-receive">
                            <div>{{ $messagedata->chat_message }}</div>
                            <span class="time"><i>{{ App\Http\Controllers\Controller::TimeSpan(strtotime($messagedata->datetime_sent))}} ago</i></span>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    @endif
    @endforeach
</ul>
