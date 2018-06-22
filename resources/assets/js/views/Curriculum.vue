<template>
	<div class="container">
		<h4>Curriculum</h4>
		<table class="highlight responsive-table">
			<thead>
				<tr>
					<th>Subject</th>
					<th>Course</th>
					<th>Year</th>
				</tr>
			</thead>
			<tbody>
				<tr v-for="curriculum in curricula">
					<td v-text="curriculum.subject"></td>
					<td v-text="curriculum.course"></td>
					<td v-text="curriculum.year_level"></td>
				</tr>
			</tbody>
		</table>
	</div>
</template>

<script>
import AddCurriculum from '../components/AddCurriculum.vue'
import Curriculum from '../models/Curriculum'
	export default {
		components:{
		},
		data() {
			return {
				curricula:[]
			}
		},
		created() {
			Curriculum.all(curricula => this.curricula = curricula)
		}
	};
</script>