export default {
	all(then) {
		return axios.get('/curricula')
				.then(({data}) => then(data))
	}
}