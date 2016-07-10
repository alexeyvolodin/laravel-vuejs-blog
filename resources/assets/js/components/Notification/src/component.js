export default{
  /**
   * Name of the component
   * More info: http://vuejs.org/api/#name
   */
  name: 'Notification',

	/**
	 * Public properties that can be passed to the component
	 */
	props: {
		title: {type: String, default:'' },
		message: {type: String, default:'' },
		type: {type: String, default: 'warning'},
		dismiss: {type: Number, default: null , coerce(value){ return value * 1000 }}
	},

	computed: {
		klass () {
			return {
				'alert-warning': this.type == 'warning',
				'alert-success': this.type == 'success',
				'alert-danger': this.type == 'danger',
				'alert-info': this.type == 'info'
			}
		}
	},

  /**
   * The data object for the component it self
   * More info: http://vuejs.org/api/#data
   */
  data(){
    return {}
  },

  /**
   * This is called when the component is ready
   * You can find further documentation : http://vuejs.org/guide/instance.html#Lifecycle-Diagram
   */
  ready () {

		if(this.dismiss) {
			setTimeout(() => {
				$(this.$el).alert('close')
			}, this.dismiss)
		}
	},

  /**
   * Child components of this one
   * More info: http://vuejs.org/guide/components.html
   */
  components: {}
}