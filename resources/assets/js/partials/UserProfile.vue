<template>
    <form method="POST" @submit.prevent="onSubmit">
        <div class="input-field col s12">
          <input type="text" id="name" name="name" v-model="form.name" class="validate" autofocus>
          <label for="name" class="active">Name</label>
        </div>
        <div class="input-field col s12">
          <input id="email" type="email" name="email" v-model="form.email" class="validate"  autofocus>
          <label for="email" class="active">Email</label>
        </div>
        <div class="right-align">
          <button class="btn waves-effect waves-light" type="submit" name="action">Update
            <i class="material-icons right">send</i>
          </button>
        </div>
    </form>
</template>
<script>
import Form from '../core/Form'
	export default {
		props:['users'],
		data () {
			return {
				form:new Form({
					name:'',
					email:''
				})
			}
		},
		watch: {
		  users(value) {
		  	for(let field in this.form.data()) {
		  		this.form[field] = value[field];
		  	}
		  }
		},
		computed: {
			//
		},
		mounted() {
			console.log(this.form.data()) 
		},
		methods:{
			//
			onSubmit() {
				var SuccessToastHTML = `<b>Success: </b> Profile Updated `;
				var FailedToastHTML = '<b>Error: </b> Whoops! something went wrong';
				
				this.form.update('/user/update')
					.then(res => {
						M.toast({html: SuccessToastHTML,classes:'green darken-1'})
					})
					.catch(err => {
						M.toast({html: FailedToastHTML,classes:'red darken-1',})
					})
			}
		}

	};
</script>