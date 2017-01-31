{!! Theme::asset()->add('chat.css','assets/css/index/chat.css') !!}


<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/emojify.js/1.1.0/css/basic/emojify.min.css" />
<div class="chat-container">
    <div class="chatbox-container">
        <input type="hidden" id="uid" class="UserIsLogged" data-userid="{{ Auth::user()->user_id }}" data-user-status="{{ Auth::user()->status }}"">
        <div class="upper-container">
            <div class="current-user">
                <img id="account-photo" class="account-photo">
                <span class="user-state
                <?php
                    $user_status = Auth::user()->status;
                    if ($user_status == 0){
                        echo 'offline-user';
                    }elseif ($user_status == 1){
                        echo 'active-user';
                    }elseif ($user_status == 2){
                        echo 'away-user';
                    }elseif ($user_status == 3){
                        echo 'disturb-user';
                    }
                ?>" id="user-state" data-toggle="dropdown" data-target="status-menu"></span>
                <ul class="dropdown-menu" id="status-menu" role="menu" aria-labelledby="account-photo">
                    <?php $status = \Illuminate\Support\Facades\DB::table('user_status')->get(); ?>
                    @foreach ($status as $key => $current_state)
                    <li role="presentation" id="status-state"><a role="menuitem" tabindex="-1" href="#" data-status-id="{{ $current_state->user_status_id }}">{{ $current_state->user_status }}</a></li>
                    @endforeach
                </ul>
                <span class="active-fullname">{{  Auth::user()->first_name.' '. Auth::user()->last_name }} </span>
                <a id="add-friend" class="add-friend fa fa-plus"></a>
                <div class="friends-dropdown dropdown2">
                    <span class="triangle"></span>
                    <div class="close-btn">close</div>
                    <input type="text" class="search search-2" placeholder="Search">
                    <h4>Suggested friends</h4>
                    <div class="friend-container">
                        <ul id="friend-list">

                        </ul>
                    </div>
                </div>
                <a class="logout fa fa-sign-out" aria-hidden="true" href="{{ url('logout') }}"></a>
            </div>
        </div>

        <div class="user-container">
            <div class="col-md-12">
                <input type="text" id="search" class="search" placeholder="Search">
            </div>
            <div class="user-lists" style="margin-top:69px;">
                <ul id="users">
                    <!-- Display users -->
                </ul>
            </div>
        </div>

        <div class="panel-body chat-body">
            <div class="msg-upper-container">
                <div class="chat-who">
                    <span class="who"></span>
                </div>
            </div>
            <div id="msgs-container" class="msgs-container">
                <ul>
                    <!-- Display chat message -->
                </ul>
            </div>
            <div class="chat-send-message">
                <div class="col-md-10" style="margin-top:13px;">
                    <textarea id="msg" rows="3" class="form-control" placeholder="Type your message..." data-emojiable="true"></textarea>
                </div>
                <div class="col-md-2">
                    <button id="btn-send" title="Send"><i class="fa fa-paper-plane"></i></button>
                    <div class="emojis">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <button class="smiley emoji"><i class="fa fa-smile-o"></i></button>
                            <button class="emoji"><i class="fa fa-paperclip"></i></button>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="profile-container">
            <div class="profile">
                <div class="profile-photo">
                    <img class="profile-picture" src="../assets/img/rafael.jpg" width="100%" height="150px">
                    <div class="overlay"></div>
                    <span class="fullname">{{ Auth::user()->first_name.' '.Auth::user()->middle_name.' '.Auth::user()->last_name }}</span>
                </div>
                <div class="profile-details">
                    <div class="col-md-12">
                        <span class="country">{{ Auth::user()->country }}</span>
                        <span class="email">{{ Auth::user()->email }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript">

    $(document).ready(function(){

        /* disabled chat on first load */
        $('#msg').prop('disabled',true);
        $('#btn-send').prop('disabled',true);
        $('#btn-send').css('cursor','not-allowed');

        load(); // load active user
        loadFriends(); //load friends

        var socket = io.connect('192.168.1.188:8890'); /*  localhost connection */
        /* send message when BUTTON is clicked */
        $('#btn-send').on('click',function(){
            if ($('#msg').val() == ''){
                return false;
            }
            else {
                socket.emit('chat message', {
                    message:$('#msg').val(),
                    current:$('#uid').data('userid'),
                    logged_user:$('.active-fullname').text()
                });

                save_message();
            }
            return false;
        });



       /* send message when ENTER key is pressed */
       $("#msg").keypress(function(e){
           if(e.which == 13) {
               if ($('#msg').val() == ''){
                   return false;
               }
               else {
                   socket.emit('chat message', {
                       message:$('#msg').val(),
                       current:$('#uid').data('userid'),
                       logged_user:$('.active-fullname').text()
                   });
                   save_message();
               }
               return false;
           }
       });

        socket.emit('active user', {active:true});

        socket.on('active user', function(data){
//            $('body').delegate('#users li.user-list','click', function(){
////                var getdata = $('#users').find("li.active span").text();
////                $('.name').html(getdata);
//            });

            if (data.active){
                load();
            }
        });

        socket.on('chat message', function(msg){

//          var classname = "";

            if (msg.current == $('#uid').data('userid')){
                $('.msgs-container ul').append($(
                    '<li class="chat-send">'+
                        '<div id="chat-status" class="row msg-container base-sent">'+
                        '   <div class="col-md-12">' +
                        '       <div class="col-md-11">'+
                        '           <div class="messages msg-sent">'+
                        '               <div>'+ msg.message +'</div>'+
                        '               <span class="time"><i>'+ msg.logged_user +' &bull;</i></span>'+
                        '           </div>'+
                        '       </div>'+
                        '       <div class="col-md-1 avatar">'+
                        '           <img class="img-responsive " src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg">'+
                        '       </div>'+
                        '   </div>'+
                        '</div>'+
                        '</li>'));

                    /* auto scroll to bottom */
                    var $cont = $('.msgs-container');
                    $cont[0].scrollTop = $cont[0].scrollHeight;
                    $('#msg').val('');

            } else {
                $('.msgs-container ul').append($(
                    '<li class="chat-receiver">'+
                        '<div id="chat-status" class="row msg-container base-receive">'+
                        '   <div class="col-md-12">'+
                        '       <div class="col-md-1 avatar">'+
                        '           <img class="img-responsive " src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg">'+
                        '       </div>'+
                        '       <div class="col-md-11">'+
                        '           <div class="messages msg-receive">'+
                        '               <div>'+ msg.message +'</div>'+
                        '               <span class="time"><i>'+ msg.logged_user +' &bull; </i></span>'+
                        '           </div>'+
                        '       </div>'+
                        '   </div>'+
                        '</div>'+
                        '</li>'));

                    /* auto scroll to bottom */
                    var $cont = $('.msgs-container');
                    $cont[0].scrollTop = $cont[0].scrollHeight;
                    $('#msg').val('');

            }


        });

        $(document).on("click", function(event){
            var $trigger = $(".account-photo");
            if($trigger !== event.target && !$trigger.has(event.target).length){
                $("#status-menu").hide();
            }

        });

        $('.friend-container').mCustomScrollbar({theme:'dark',scrollInertia:110});
        $('.user-lists').mCustomScrollbar({theme:'dark',scrollInertia:110});
    });

        $('.user-state').on('click',function() {
            $('#status-menu').toggle();
        });
        $('.add-friend').on('click',function() {
            $('.dropdown2').toggle("fast");
        });
        $('.close-btn').on('click',function() {
            $('.dropdown2').hide("fast");
        });


        /* focus on selected user list
        *  get room_id
        * */
        $('body').delegate('li.user-list','click',function(){
            $('#msg').prop('disabled',false);
            $('#btn-send').prop('disabled',false);
            $('#btn-send').css('cursor','pointer');

            var getdata = $(this).text();
            var chat_id = $(this).data('chat-room_id');
            var get_location = $(this).data('user-location');
            var get_email = $(this).data('user-email');

            $('.who, .fullname').html(getdata);
            $('.country').html(get_location);
            $('.email').html(get_email);

            $.ajax ({
                url:'/loadMessage',
                type:'GET',
                data: {
                    'room_id': chat_id,
                    '_token' : $('meta[name="csrf_token"]').attr('content')
                },
                success:function(data){
                    $('.msgs-container').html(data);
                }
            });

            $('.user-list').removeClass('active');
            $(this).addClass('active');

        });

        function loadEmoji(){
            emojify.setConfig({

                emojify_tag_type : 'div',           // Only run emojify.js on this element
                only_crawl_id    : null,            // Use to restrict where emojify.js applies
                img_dir          : 'assets/img/emoji',  // Directory for emoji images
                ignored_tags     : {                // Ignore the following tags
                    'SCRIPT'  : 1,
                    'TEXTAREA': 1,
                    'A'       : 1,
                    'PRE'     : 1,
                    'CODE'    : 1
                }
            });
            emojify.run();
        }
        /* load active user */
        function load(){
            $.ajax({
                url:'/loadUserActive',
                type: 'GET',
                success: function (data){
                    $('#users').html(data);
                }
            });
        }

        /* load suggested friends */
        function loadFriends() {
            $.ajax({
                url:'/loadFriendlist',
                type: 'GET',
                success: function (data){
                    $('#friend-list').html(data);
                }
            });
        }

        /* save message function for every user chat*/
        function save_message(){
            $.ajax({
                url: '/saveMessage',
                type: 'POST',
                data: {
                    'user_id':       $('#uid').data('userid'),
                    'chat_room_id':  $('.user-list.active').data('chat-room_id'),
                    '_token' :       $('meta[name="csrf_token"]').attr('content'),
                    'message':       $('#msg').val()
                },
                success:function(data){
                }
            });
        }

        /* get user status */
        function get_user_status() {
            var current_id = $('#status-menu li#status-state a:focus').attr('data-status-id');
            $.ajax({
                url:'/changestate',
                type:'POST',
                data: {
                    'user_id':       $('#uid').data('userid'),
                    '_token' :       $('meta[name="csrf_token"]').attr('content'),
                    'data_status_id':     current_id
                },
                success:function(data){

                }
            });
        }

        /* search ajax */
        $('#search').on('keyup',function(){
            var g = $(this).val().toLowerCase();
            $(".user-lists ul li span").each(function() {
                var s = $(this).text().toLowerCase();
                $(this).closest('.user-list')[ s.indexOf(g) !== -1 ? 'show' : 'hide' ]();
            });
        })
        $('.search-2').on('keyup',function(){
            var g = $(this).val().toLowerCase();
            $(".dropdown2 ul li span").each(function() {
                var s = $(this).text().toLowerCase();
                $(this).closest('.friend-lists')[ s.indexOf(g) !== -1 ? 'show' : 'hide' ]();
            });
        })

        /* display user current status */
        $('body').on('click','li#status-state',function() {
    //            var get_status_state = $(this).text();
    //            $('.change-status').text(get_status_state);

            var curStat = $('#status-menu li#status-state a:focus').attr('data-status-id');
            if (curStat == 0){
                ($('#user-state').attr('class','offline-user'));
            }
            if (curStat == 1) {
                ($('#user-state').attr('class','active-user'));
            }
            if (curStat == 2){
                ($('#user-state').attr('class','away-user'));
            }
            if (curStat == 3){
                ($('#user-state').attr('class','disturb-user'));
            }

            get_user_status();
        });

</script>
<!--@include('modals.add-friend')-->