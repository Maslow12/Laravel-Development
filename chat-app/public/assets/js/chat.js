import Echo from "./laravel-echo";

/*$(document).ready(() => {
    window.io = require("socket.io-client");
    window.Echo = new Echo({
        broadcaster: "socket.io",
        host: window.location.hostname + ":6001",
    });

    window.Echo.channel("messages").listen(
        "NewMessageNotification",
        (event) => {
            console.log("New message:", event.message);
        }
    );

    window.Echo.private("private-chat." + receiverId).listen(
        "NewPrivateMessageNotification",
        (event) => {
            console.log("New private message:", event.message);
        }
    );

    const socket = new WebSocket("wss://localhost:8080");
    socket.addEventListener("message", (event) => {
        const data = JSON.parse(event.data);
        const messageBox = $("#chat-box");
        const messageElement = $('<div class="message"></div>');

        console.log(data);
        messageElement.text(data.message);
        messageBox.append(messageElement);
    });
    $("#send-button").click(() => {
        const inputElement = $("#message-input");
        const message = inputElement.val();

        if (message) {
            const dataToSend = { message };
            socket.send(JSON.stringify(dataToSend));
            inputElement.val("");
        }
    });
});*/
