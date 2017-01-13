/**
 * Created by rafael.delacruz on 1/13/17.
 */
var app = require('express')();
var server =  require('http').Server(app);
var io = require('socket.io')(server);
//var redis = require('redis');

server.listen(8890);
//server.listen(5858);
io.on('connection', function (socket) {

    console.log("client connected");

    socket.on('chat message',function(e){
        io.emit('chat message',e) ;
    });

    socket.on('disconnect', function() {
    });
});