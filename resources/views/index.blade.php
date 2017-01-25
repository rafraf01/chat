
<style type="text/css">
    html,body {
        height:100%;
        width:100%;
    }
        .chat-container {
            width:100%;
            height:100%;
            margin:0 auto;
            padding:0;
        }
            .user-container, .chat-container, .chatbox-container {
                height:100%;
            }
            .user-container {
                width:30%;
                background: #434753;
                float:left;
            }
                .on-active {
                    position: relative;
                    height: 90px;
                }
                    span.active-fullname {
                        display: block;
                        float: left;
                        position: absolute;
                        font-size: 20px;
                        color: #fff;
                        left: 90px;
                        top: 35px;
                    }
                .search {
                    height:45px !important;
                }
                    .search.form-control {
                        margin-top:15px;
                    }
            .user-list {
                position:relative;
                margin-top:25px;
                width:100%;
                height:auto;
                display:block;
            }
                .user-list ul li.active{
                    background: rgba(250,250,250,0.1);
                    -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
                    box-shadow: 0 6px 12px rgba(0,0,0,.175);
                }
                .online, .offline, .away, .disturb {
                    height: 8px !important;
                    width: 8px !important;
                    border-radius: 50%;
                    float: left;
                    position: absolute;
                    bottom: 0;
                    top: 33px;
                    left: 65px;
                    font-style: italic;
                }
                .online { background: green;}
                .offline { background: red;}
                .away {background: #facf00;}
                .disturb {background: red;}
                .online:after , .offline:after, .away:after, .disturb:after {
                    color: grey;
                    display: inline-block;
                    float: left;
                    position: absolute;
                    top: -7px;
                    left: 15px;
                }
                .online:after {
                    content: "online";
                }
                .offline:after {
                    content: "offline";
                }
                .away:after {
                    content: "away";
                }
                .disturb:after {
                    content: "do not disturb";
                    width:90px;
                }
                .user-list ul {padding:0;}
                    .user-list ul li {
                        padding:15px 20px;
                        list-style:none;
                        height:auto;
                        width:100%;
                        margin-bottom:15px;
                    }
                    .users {
                        width: 100%;
                        display: inline-block;
                        height: 50px;
                        position: relative;
                    }
                        .user-list ul > li > .users > span {
                            position: relative;
                            font-size: 15px;
                            top: 8px;
                            color:#fff;
                            left:10px;
                        }
                        .user-list li img {
                            height:55px;
                            width:55px;
                            border:3px solid #696c75;
                            display:block;
                            border-radius:50%;
                            background:#fff;
                            float:left;
                        }
            .chatbox-container {
                width:70%;
                float:left;
            }
                .chat-who {
                    width:100%;
                    height:100px;
                    background: #f1f5f8;
                }
                    .settings {
                        position: absolute;
                        right: 0;
                        font-size: 30px;
                        color: rgba(0,0,0,0.3);
                        top: 30px;
                        right: 10px;
                      }
                        .settings i:active, .settings i:focus {
                            color:#434753;
                        }
                    .receiver {
                        width:250px;
                        height:70px;
                    }
                    .active-chat-receiver {
                        height:70px;
                        width:70px;
                        border:3px solid grey;
                        background: #fff url('https://lh3.googleusercontent.com/-pCSh55YyGfc/AAAAAAAAAAI/AAAAAAAAAAA/hpphxzBOuH0/photo.jpg') no-repeat center/cover;
                        position: relative;
                        border-radius: 50%;
                        top: 14px;
                        left: 14px;
                        display:block;
                    }
                    span.name {
                        display: inline-block;
                        position: absolute;
                        top: 25px;
                        font-size: 18px;
                        margin-left: 25px;
                        font-weight: 700;
                    }
                    .user-state, .active-user , .offline-user, .away-user, .disturb-user{
                        height: 16px !important;
                        width: 16px !important;
                        border-radius: 50%;
                        position: absolute;
                        margin-left: 60px;
                        bottom: 5px;
                    }
                    .active-user { background: #7fba00 url(../assets/img/online.png) no-repeat center /cover; }
                    .offline-user { background: #d3d3d3 url(../assets/img/offline.png) no-repeat center /cover; }
                    .away-user { background: #c8b305 url(../assets/img/away.png) no-repeat center /cover;}
                    .disturb-user { background: #a70004 url(../assets/img/disturb.png) no-repeat center /cover;}

                        span.change-status {
                            display: block;
                            float: right;
                            position: absolute;
                            left: 85px;
                            color: grey;
                            font-style: italic;
                        }
                        ul#status-menu {
                            float: left;
                            margin-left: 60px;
                            font-size: 15px;
                        }
                .chat-body {
                    height: 430px;
                    position: relative;
                    border-top: 1px solid;
                    border-bottom: 1px solid;
                    background: #e5e5e5;
                    margin:0;
                    padding: 0 10px 10px;
                    /*overflow-x: hidden;*/
                }
                    .chat-body ul li {
                        list-style: none;
                    }
                    .chat-body ul {padding:0;}
                    .base-sent {
                        justify-content: flex-end;
                        align-items: flex-end;
                    }
                        .base-sent > .col-md-11 ,.base-sent > .col-md-1, .base-receive > .col-md-1, .base-receive > .col-md-11 {
                            padding:0;
                        }
                        .base-sent > .avatar:after {
                            content: "";
                            position: absolute;
                            bottom:0px;
                            left:0px;
                            width:0px;
                            height:0px;
                            border:5px solid #fff;
                            border-right-color:transparent;
                            border-top-color:transparent;
                            /*box-shadow:1px 1px 2px rgba(0,0,0,0.2);*/
                            /*-webkit-box-shadow:1px 1px 2px rgba(0,0,0,0.2);*/
                            /*-moz-box-shadow: 1px 1px 2px rgba(0,0,0,0.2);*/
                        }
                        .base-receive > .avatar:after {
                            content: "";
                            position: absolute;
                            top: 0;
                            right: 0;
                            width: 0;
                            height: 0;
                            border: 5px solid #FFF;
                            border-left-color: rgba(0, 0, 0, 0);
                            border-bottom-color: rgba(0, 0, 0, 0);
                        }
                    .msg-container {
                       padding:10px;
                       overflow: hidden;
                       display: flex;
                    }
                        .messages {
                            background: #fff;
                            padding:10px;
                            border-radius: 2px;
                            box-shadow: 0px 1px 2px rgba(0,0,0,0.2);
                            -webkit-box-shadow: 0px 5px 4px rgba(0,0,0,0.2);
                            max-width:100%;
                            height:60px;
                        }
                            .messages > p {
                                font-size: 15px;
                                margin: 0px 10px;
                            }
                            .msg-sent > time {float:right;}
                            .messages > time {
                                font-size:13px;
                                color:#ccc;
                                margin-left:10px;
                            }
                        .msg-sent {
                            padding-bottom:20px !important;
                            margin-right: 0px;
                        }
                        .msg-receive {
                            padding-left:0px;
                            margin-left:0px;
                        }
                        .avatar {
                            position: relative;
                        }
                            .avatar > img {
                                display:block;
                                width: 60px;
                                height:60px;
                            }
                    .chat-send-message {
                        /*height: auto;*/
                        width: 100%;
                        background: #f1f5f8;
                        /*position: relative;*/
                        /*top: 30px;*/
                    }
                        .chat-send-message textarea.form-control {
                            margin-top:15px;
                            resize:none;
                            font-size:20px;
                        }
                        .chat-send-message .btn-primary {
                            position: relative;
                            top: 45px;
                        }

    </style>
<div class="chat-container">
    <input type="hidden" id="uid" class="UserIsLogged" value="{{ Auth::user()->user_id }}" data-userid="{{ Auth::user()->user_id }}" data-user-status="{{ Auth::user()->status }}">
    <div class="user-container">
        <div class="col-md-12">
            <div class="on-active">
                <img class="active-chat-receiver">
                <div class="user-state
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
                ?>" id="user-state" data-toggle="dropdown"></div>

                <span class="change-status"></span>
                <ul class="dropdown-menu" id="status-menu" role="menu" aria-labelledby="menu1">
                    <?php $status = \Illuminate\Support\Facades\DB::table('user_status')->get(); ?>
                    @foreach ($status as $key=> $current_state)
                        <li role="presentation" id="status-state"><a role="menuitem" tabindex="-1" href="#" data-status-id="{{ $current_state->user_status_id }}">{{ $current_state->user_status }}</a></li>
                    @endforeach
                </ul>
                <span class="active-fullname">{{  Auth::user()->first_name.' '. Auth::user()->last_name }} </span>
            </div>
            <input type="text" class="search form-control" placeholder="search">
            <div class="user-list">
                <ul id="users">
                    <!-- Display active users -->
                </ul>
            </div>
        </div>
    </div>
    <div class="chatbox-container">
        <div class="chat-who">
<!--            <div class="chat-current">-->
                <div class="settings">
<!--                    <i class="glyphicon glyphicon-cog"></i>-->
                    <a class="logout" href="{{ url('logout') }}">logout</a>
                </div>
                <div class="receiver">
<!--                    <img class="active-chat-receiver">-->
                        <span class="name"><!-- {{ Auth::user()->first_name.' '. Auth::user()->last_name }}--></span>
                </div>
        </div>
<!--            </div>-->
            <div class="panel-body chat-body">
                <ul>
                    <!-- Display Chat Message -->
               </ul>
            </div>

        <div class="chat-send-message">
            <div class="col-md-10">
                <textarea id="msg" rows="3" class="form-control" placeholder="Type your message..."></textarea>
            </div>
            <div class="col-md-2">
                <button id="btn-send" class="btn btn-primary btn-md">Send</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){

        load(); // load function

        var socket = io.connect('192.168.1.188:8890');
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

//        socket.on('select chat',function{
//            socket.emit('select chat',{
//                selected_chat:$('')
//            })
//        });

        socket.emit('active user', {active:true});

        socket.on('active user', function(data){

            $('body').delegate('#users li','click',function(){
//
//                var getdata = $('#users').find("li.active span").text();
//                $('.name').html(getdata);

                $('.user-list').removeClass('active');
                $(this).addClass('active');

            });

            if (data.active){
                load();
            }
        });

        socket.on('chat message', function(msg){
//            var classname = "";

            if (msg.current == $('#uid').data('userid')){
                $('.chat-body ul').append($(
                    '<li class="chat-send">'+
                    '   <div id="chat-status" class="row msg-container base-sent">'+
                    '       <div class="col-md-11">'+
                    '           <div class="messages msg-sent">'+
                    '               <p>'+ msg.message +'</p>'+
                    '               <time datetime="2017-1-16"><i>'+ msg.logged_user +' &bull; 5 seconds ago</i></time>'+
                    '           </div>'+
                    '       </div>'+
                    '       <div class="col-md-1 avatar">'+
                    '           <img class="img-responsive " src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg">'+
                    '       </div>'+
                    '   </div>'+
                    '</li>'));


                $('.chat-body').mCustomScrollbar({
                    theme:"dark"
                }).mCustomScrollbar("scrollTo","bottom",{scrollInertia:0});

//                if ($('.name').text() == msg.logged_user){
//                    save_message(classname);
//                }


            } else {
                $('.chat-body ul').append($(
                    '<li class="chat-receiver">'+
                    '   <div id="chat-status" class="row msg-container base-receive">'+
                    '       <div class="col-md-1 avatar">'+
                    '           <img class="img-responsive " src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg">'+
                    '       </div>'+
                    '       <div class="col-md-11">'+
                    '           <div class="messages msg-receive">'+
                    '               <p>'+ msg.message +'</p>'+
                    '               <time datetime="2017-1-16"><i>'+ msg.logged_user +' &bull; 5 seconds ago</i></time>'+
                    '           </div>'+
                    '       </div>'+
                    '   </div>'+
                    '</li>'));


                $('.chat-body').mCustomScrollbar({
                    theme:"dark"
                }).mCustomScrollbar("scrollTo","bottom",{scrollInertia:0});

//                if ($('.name').text() == msg.logged_user){
//                    save_message(classname);
//                }

            }

        });

        $('.user-state').dropdown();

    });
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

        /* save message function for every user chat*/
        function save_message(){
            $.ajax({
                url: '/saveMessage',
                type: 'POST',
                data: {
                    'user_id':       $('#uid').data('userid'),
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
        $('.search').on('keyup',function(){
            var g = $(this).val().toLowerCase();
            $(".user-list ul li span").each(function() {
                var s = $(this).text().toLowerCase();
                $(this).closest('.user-list')[ s.indexOf(g) !== -1 ? 'show' : 'hide' ]();
            });
        })

        /* display user current status */
        $('body').on('click','li#status-state',function() {
//            var get_status_state = $(this).text();
//            $('.change-status').text(get_status_state);

            var curStat = $('#status-menu li#status-state a:focus').attr('data-status-id');

            if (curStat == 1) {
                ($('#user-state').attr('class','active-user'));
            }
            if (curStat == 0){
                ($('#user-state').attr('class','offline-user'));
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
