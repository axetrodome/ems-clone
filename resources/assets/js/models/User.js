export default {
	get(then) {
		return axios.get('/user/profile')
				.then(({data}) => then(data))
	}
}