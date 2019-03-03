<template>
	<section class="py-5">
		<div class="card">
			<div class="card-header d-flex flex-row justify-content-between align-items-center">
				<h6 class="text-uppercase mb-0">Articles List</h6>
				<router-link to="/categories" class="btn btn-success rounded">Add Article</router-link>
			</div>
			<div class="card-body">
				<table class="table table-striped card-text">
					<thead>
						<tr>
							<th>#</th>
							<th>Title</th>
							<th>Category</th>
							<th>Author</th>
							<th>Created At</th>
						</tr>
					</thead>
					<tbody>
						<tr v-for="article in articles" :key="article.id">
							<th scope="row">{{ article.number }}</th>
							<td>{{ article.title }}</td>
							<td>
								<span v-for="category in article.categories">
									{{ category.name }},
								</span>
							</td>
							<td>{{ article.user.name }}</td>
							<td>{{ article.created_at }}</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</section>
</template>
<script>
	import axios from 'axios';

	export default {
		name: "Article",
		data() {
			return {
				articles: [],
				data: []
			}
		},
		methods: {
			rownum() {
				this.articles.forEach((article, index) => {
					article.number = index + this.data.from;
				});
			},
			read() {
				axios.get('/api/articles').then(({data}) => {
					this.articles = data.data;
					delete data.data;
					this.data = data;
					this.rownum();
				}).catch(function(error) {
					console.log(error);
				});
			}
		},
		created() {
			this.read();
		}
	}
</script>