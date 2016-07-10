export default{
  /**
   * Name of the component
   * More info: http://vuejs.org/api/#name
   */
  name: 'CsrfToken',

  /**
   * The data object for the component it self
   * More info: http://vuejs.org/api/#data
   */
  data(){
    return {
      token: ''
    }
  },

  /**
   * This is called when the component is ready
   * You can find further documentation : http://vuejs.org/guide/instance.html#Lifecycle-Diagram
   */
  created () {
		this.token = document.querySelector('meta[name=csrf_token]').getAttribute('content')
  },

  /**
   * Child components of this one
   * More info: http://vuejs.org/guide/components.html
   */
  components: {}
}