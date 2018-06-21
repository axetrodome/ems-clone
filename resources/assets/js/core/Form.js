import Errors from './Errors'
class Form{

	constructor(data) {
		this.originalData = data

		for(let field in data) {
			this[field] = data[field]
		}

		this.errors = new Errors()

	}

	data() {

		let data = {}

		for(let propery in this.originalData) {
			data[propery] = this[propery]
		}

		return data;
	}

	reset() {

		for(let field in this.originalData) {
			this[field] = '';
		}

		this.errors.clear()

	}

	post(url) {

		return this.submit('post',url)

	}

	update(url) {
		return this.submit('patch',url)
	}

	delete(url) {

		return this.submit('delete',url)

	}

	submit(requestType,url) {

		return new Promise((resolve, reject) => {

			axios[requestType](url,this.data())
			.then(response => {

				this.onSuccess(response.data,requestType)

				resolve(response.data)

			})
			.catch(error => {

				this.onFail(error.response.data.errors)

				reject(error.response.data)

			})

		})
	}

	onSuccess(data,requestType) {
		
		console.log(data)
		if(requestType == 'patch') {
			return
		}

		this.reset();


	}

	onFail(errors) {

		this.errors.record(errors)
	}
}

export default Form;
