export default {
	all(then) {
		return axios.get('/user/profile')
				.then(({data}) => then(data))
	}
}