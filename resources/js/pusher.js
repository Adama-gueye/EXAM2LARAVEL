import Echo from 'laravel-echo';
import Pusher from 'pusher-js';

window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: 'your-app-key',
    cluster: 'your-app-cluster',
    encrypted: true,
    authEndpoint: '/broadcasting/auth',
    auth: {
        headers: {
            'X-CSRF-Token': document.head.querySelector('meta[name="csrf-token"]').content
        }
    }
});
