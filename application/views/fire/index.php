<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div>Notification data will receive here if the app is open and focused.</div>
        <div class="message" style="min-height: 80px;"></div>
        <div>Device Token: </div>
    </div>
    <script src="https://www.gstatic.com/firebasejs/9.14.0/firebase-app-compat.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.14.0/firebase-messaging-compat.js"></script>
    <script>
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        const firebaseConfig = {
          apiKey: "AIzaSyCFXaUt4lPVRDyyGJjQ44NKqlg_muVOvuI",
          authDomain: "lowcredit-d11c0.firebaseapp.com",
          projectId: "lowcredit-d11c0",
          storageBucket: "lowcredit-d11c0.appspot.com",
          messagingSenderId: "57374267918",
          appId: "1:57374267918:web:fbb41e8da068bcf7487a5f",
          measurementId: "G-2KL03B1H5W"
        };
        const app = firebase.initializeApp(firebaseConfig)
        const messaging = firebase.messaging()
        // generate device token using public id
        messaging.getToken({ vapidKey: "BDu5wrSQjk1QBTtjXmbH1O_lgqFmITY1czRI9ieF7PCchS3tDWfyXhXh0rZRQ7PVEZad2vlhpb1sBcqvhHoJgg8" }).then((currentToken) => {
            if (currentToken) {
                console.log(currentToken);
                document.querySelector('body').append(currentToken)
                sendTokenToServer(currentToken)
            } else {
                // if token is empty
                setTokenSentToServer(false)
            }
        }).catch((err) => {
            console.log(err);
            // if error
            setTokenSentToServer(false)
        })
        messaging.onMessage((payload) => {
            // if app is open and focus then notification data will receive here
            // keep in mind if message receive here, it will not notify in background
            // so here, use the message data however you want
            console.log('Message received ', payload);
            const messagesElement = document.querySelector('.message')
            const dataHeaderElement = document.createElement('h5')
            const dataElement = document.createElement('pre')
            dataElement.style = "overflow-x: hidden;"
            dataHeaderElement.textContent = "Message Received:"
            dataElement.textContent = JSON.stringify(payload, null, 2)
            messagesElement.appendChild(dataHeaderElement)
            messagesElement.appendChild(dataElement)
        })
        // sent token to server where it is used for sending notification
        function sendTokenToServer(currentToken) {
            // first check it if we already send it or not
            if (!isTokenSentToServer()) {
                console.log('Sending token to server ...');
                // if token is successfully sent to the server
                // then set setTokenSentToServer to true
                setTokenSentToServer(true)
            } else {
                console.log('Token already available in the server');
            }
        }
        function isTokenSentToServer() {
            return window.localStorage.getItem('sentToServer') === '1'
        }

        // we need to set the value of "sentToServer" to true in the localstorage
        // so if we are sending second time, we will check from localstorage
        function setTokenSentToServer(sent) {
            window.localStorage.setItem('sentToServer', sent ? '1' : '0')
        }
    </script>
</body>

</html>

