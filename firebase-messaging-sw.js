importScripts('https://www.gstatic.com/firebasejs/7.2.1/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/7.2.1/firebase-messaging.js');
// For an optimal experience using Cloud Messaging, also add the Firebase SDK for Analytics. 
importScripts('https://www.gstatic.com/firebasejs/7.2.1/firebase-analytics.js');

// Initialize the Firebase app in the service worker by passing in the
// messagingSenderId.
firebase.initializeApp({
  'messagingSenderId': '57374267918'
});

// Retrieve an instance of Firebase Messaging so that it can handle background
// messages.
const messaging = firebase.messaging();

messaging.setBackgroundMessageHandler(function(payload) {
  console.log('[firebase-messaging-sw.js] Received background message ', payload);

  // Create a promise for the notification handling logic
  const notificationPromise = new Promise((resolve, reject) => {
    // Customize notification here
    const notificationTitle = payload.data.title;
    const notificationOptions = {
      body: payload.data.body,
      data: {
        click_action: payload.data.click_action,
        actions: [
          {
            action: 'applyNowAction',
            title: 'Apply Now'
          },
        ],
      },
    };

    // Check if payload contains 'icon' and 'image' properties
    if ('icon' in payload.data) {
      notificationOptions.icon = payload.data.icon;
    }

    if ('image' in payload.data) {
      notificationOptions.image = payload.data.image;
    }

    // If the client is currently open, show a normal browser notification
    const clientList = self.clients.matchAll({ type: 'window' });
    const isClientFocused = clientList.then(clients => clients.some(client => client.focused));

    isClientFocused.then(focused => {
      if (focused) {
        self.registration.showNotification(notificationTitle, notificationOptions);
      } else {
        // If the client is not focused, do custom handling or show a notification
        // This can be adjusted based on your specific use case
        // You may want to show a different type of notification or trigger a custom action
        self.registration.showNotification(notificationTitle, notificationOptions);
      }

      resolve(); // Resolve the promise after handling the notification
    });
  });

  // Use event.waitUntil to wait for the notificationPromise
  return event.waitUntil(notificationPromise);
});


self.addEventListener('notificationclick', function (event) {
    const action = event.action;
    const notificationData = event.notification.data || {};
    const clickAction = notificationData.click_action;

    event.notification.close();

    if (action === 'applyNowAction' || notificationData.notificationType === 'applyNowNotification') {
        event.waitUntil(
            clients.matchAll({ type: 'window' }).then(clientsArr => {
                const isOpen = clientsArr.some(client => client.url === clickAction);

                if (isOpen) {
                    clientsArr.forEach(client => {
                        if (client.url === clickAction && 'focus' in client) {
                            return client.focus();
                        }
                    });
                } else {
                    return clients.openWindow(clickAction);
                }
            })
        );
    } else if (clickAction) {
        event.waitUntil(
            clients.openWindow(clickAction)
        );
    }
});
