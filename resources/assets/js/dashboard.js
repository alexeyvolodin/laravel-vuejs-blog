var Vue = require('vue');

Vue.config.devtools = true;

new Vue({
	el: '#dashboard',
	components: {
		'dashboard' : require('./components/Dashboard'),
		'sidebar' : require('./components/Sidebar')
	}
});