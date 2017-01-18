
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
                .online, .offline {
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
                .online {
                    background: green;
                }
                .offline {
                    background: red;
                }
                .online:after , .offline:after {
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
                        .user-list ul > li > .users > a {
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
                        top: 60px;
                        right: 10px;
                      }
                        .settings i:active, .settings i:focus {
                            color:#434753;
                        }
                    .receiver {
                        width:250px;
                        height:100%;
                    }
                    .active-chat-receiver {
                        height:70px;
                        width:70px;
                        border:3px solid grey;
                        background: #fff;
                        position: relative;
                        border-radius: 50%;
                        top: 14px;
                        left: 14px;
                    }
                    span.name {
                        display: inline-block;
                        position: absolute;
                        top: 25px;
                        font-size: 18px;
                        margin-lefT: 25px;
                        font-weight: 700;
                    }
                .chat-body {
                    height: 430px;
                    position: relative;
                    border-top: 1px solid;
                    border-bottom: 1px solid;
                    top: 30px;
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
                        height: auto;
                        width: 100%;
                        background: #f1f5f8;
                        position: relative;
                        top: 30px;
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
    <input type="hidden" id="uid" class="UserIsLogged" value="{{ Auth::user()->user_id }}" data-userid="{{ Auth::user()->user_id }}">
    <div class="user-container">
        <div class="col-md-12">
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
            <div class="chat-current">
                <div class="settings">
<!--                    <i class="glyphicon glyphicon-cog"></i>-->
                    <a class="logout" href="{{ url('logout') }}">logout</a>
                </div>
                <div class="receiver">
                    <img class="active-chat-receiver">
                       <span class="name">{{ Auth::user()->first_name }}</span>
                </div>
            </div>
            <div class="panel-body chat-body">
                <ul>
                    <!--   message sent-->
<!--                    <li class="chat-send">-->
<!--                        <div class="row msg-container base-sent">-->
<!--                            <div class="col-md-11">-->
<!--                                <div class="messages msg-sent">-->
<!--                                    <p>-->
<!--                                        Hello! I'm Juan dela Cruz from Philippines. <br>-->
<!--                                        Can I have your phone number?-->
<!--                                    </p>-->
<!--                                    <time datetime="2017-1-16">Raf &bull; 5 seconds ago</time>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-md-1 avatar">-->
<!--                                <img class="img-responsive " src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </li>-->
<!--                    <li class="chat-receiver">-->
<!--                        <!-- message receive -->
<!--                        <div class="row msg-container base-receive">-->
<!--                            <div class="col-md-1 avatar">-->
<!--                                <img class="img-responsive " src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg">-->
<!--                            </div>-->
<!--                            <div class="col-md-11">-->
<!--                                <div class="messages msg-receive">-->
<!--                                    <p>-->
<!--                                        I'm sorry. I'm not giving my number to a stranger.<br>-->
<!--                                        Humanap ka na lang ng ibang maloloko mo. Haha!-->
<!--                                    </p>-->
<!--                                    <time datetime="2017-1-16">Angel &bull; 1 minute ago</time>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </li>-->
                </ul>
            </div>
            <div class="chat-send-message">
                <div class="col-md-12">
                    <div class="col-md-10">
                        <textarea id="msg" rows="3" class="form-control" placeholder="Type your message..."></textarea>
                    </div>
                    <div class="col-md-2">
                        <button id="btn-send" class="btn btn-primary btn-lg">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){

        load(); // load function

        var socket = io.connect('192.168.1.188:8890');
        $('#btn-send').on('click',function(){
            save_message();

            socket.emit('chat message', {
                message:$('#msg').val(),
                current:$('#uid').data('userid'),
                logged_user:$('.name').text()
            });
            return false;
        });

        socket.emit('active user', {active:true});

        socket.on('active user', function(data){

            if (data.active){
                load();
            }
        });

        socket.on('chat message', function(msg){
            if (msg.current == $('#uid').data('userid')){
                $('.chat-body ul').append($(
                    '<li class="chat-send">'+
                        '<div class="row msg-container base-sent">'+
                        '   <div class="col-md-11">'+
                        '       <div class="messages msg-sent">'+
                        '           <p>'+ msg.message +'</p>'+
                        '           <time datetime="2017-1-16"><i>'+ msg.logged_user +' &bull; 5 seconds ago</i></time>'+
                        '       </div>'+
                        '   </div>'+
                        '   <div class="col-md-1 avatar">'+
                        '       <img class="img-responsive " src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg">'+
                        '   </div>'+
                        '</div>'+
                        '</li>'));

                $('.chat-body').mCustomScrollbar({
                    theme:"dark"
                }).mCustomScrollbar("scrollTo","bottom",{scrollInertia:0});

            } else {
                $('.chat-body ul').append($(
                    '<li class="chat-receiver">'+
                        '<div class="row msg-container base-receive">'+
                        '   <div class="col-md-1 avatar">'+
                        '       <img class="img-responsive " src="http://www.bitrebels.com/wp-content/uploads/2011/02/Original-Facebook-Geek-Profile-Avatar-1.jpg">'+
                        '   </div>'+
                        '   <div class="col-md-11">'+
                        '       <div class="messages msg-receive">'+
                        '           <p>'+ msg.message +'</p>'+
                        '           <time datetime="2017-1-16"><i>'+ msg.logged_user +' &bull; 5 seconds ago</i></time>'+
                        '       </div>'+
                        '   </div>'+
                        '</div>'+
                        '</li>'));

                $('.chat-body').mCustomScrollbar({
                    theme:"dark"
                }).mCustomScrollbar("scrollTo","bottom",{scrollInertia:0});
            }

        });

    });
        function load(){
            $.ajax({
                url:'/loadUserActive',
                type: 'GET',
                success: function (data){
                    $('#users').html(data);
                }
            });
        }

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


</script>
