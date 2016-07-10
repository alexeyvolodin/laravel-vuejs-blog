import CsrfToken from '../../CsrfToken'

export default{
  /**
   * Name of the component
   * More info: http://vuejs.org/api/#name
   */
  name: 'Modal',

  /**
   * The data object for the component it self
   * More info: http://vuejs.org/api/#data
   */
  data(){
    return {
			title: 'Are you sure?',
      msg: 'If you remove this item, you can\'t undo this action.',
			action: ''
    }
  },

  /**
   * This is called when the component is ready
   * You can find further documentation : http://vuejs.org/guide/instance.html#Lifecycle-Diagram
   */
  ready () {
		$('#modal').on('show.bs.modal', (event) => {
			var button = $(event.relatedTarget) // Button that triggered the modal
			this.action = button.data('action')
		})
	},

  /**
   * Child components of this one
   * More info: http://vuejs.org/guide/components.html
   */
  components: {
		'csrf-token' : CsrfToken
	}
}