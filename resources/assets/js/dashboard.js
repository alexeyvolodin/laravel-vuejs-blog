var Vue = require('vue');

Vue.config.devtools = true;

new Vue({
	el: '#dashboard',
	components: {
		'csrf-token' : require('./components/CsrfToken'),
		'dashboard' : require('./components/Dashboard'),
		'sidebar' : require('./components/Sidebar'),
		'modal' : require('./components/Modal'),
		'notification' : require('./components/Notification')
	}
});