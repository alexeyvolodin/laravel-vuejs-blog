export default{
  /**
   * Name of the component
   * More info: http://vuejs.org/api/#name
   */
  name: 'Sidebar',

  /**
   * The data object for the component it self
   * More info: http://vuejs.org/api/#data
   */
  data(){
    return {
			items: [
				{route: '/dashboard', label: 'Dashboard'},
				{route: '#', label: 'Posts'},
				{route: '#', label: 'Categories'},
				{route: '#', label: 'Tags'},
				{route: '#', label: 'Config'},
			],
			current: '/dashboard'
    }
  },

  /**
   * This is called when the component is ready
   * You can find further documentation : http://vuejs.org/guide/instance.html#Lifecycle-Diagram
   */
  ready () {
  },

  /**
   * Child components of this one
   * More info: http://vuejs.org/guide/components.html
   */
  components: {}
}