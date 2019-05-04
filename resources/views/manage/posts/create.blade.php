@extends('layouts.manage')

@section('content')
<div class="flex-container">
	<div class="columns m-t-10">
		<div class="column">
			<h1 class="title">Add New Blog Post</h1>
		</div>
		<div class="column">
			{{--  <a href="{{route('posts.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i> Create New Post</a> --}}
		</div>
	</div>
	<hr class="m-t-0">

	<form action="{{route('posts.store')}}" method="post">
		{{ csrf_field() }}
		<div class="columns">
			<div class="column is-three-quarters-desktop is-three-quarters-tablet">
				<b-field>
					<b-input type="text" placeholder="Post Title" size="is-large" v-model="title">
					</b-input>
				</b-field>
				
				<slug-widget url="{{url('/')}}" subdirectory="blog" :title="title" @copied="slugCopied" @slug-changed="updateSlug"></slug-widget>
				<input type="hidden" v-model="slug" name="slug" />

				<b-field class="m-t-30">
					<b-input type="textarea" placeholder="Compose your masterpiece.." rows="10">
					</b-input>
				</b-field>
			</div> <!-- end of .column.is-three-quarters -->

			<div class="column is-one-quarter-desktop is-narrow-tablet">
				<div class="card card-widget">
					<div class="author-widget widget-area">
						<div class="selected-author">
							<img src="https://placehold.it/50x50">
							<h4>Huu Tung</h4>
							<p class="subtitle">(tung)</p>
						</div>
					</div>
					<div class="post-status-widget widget-area">
						<div class="status">
							<div class="status-icon">
								<b-icon icon="assignment"></b-icon>
							</div>
							<div class="status-details">
								<h4>Draft Saved</h4>
								<p>A Few Minutes Ago (saved)</p>
							</div>
						</div>
					</div>
					<div class="publish-buttons-widget widget-area">
						<div class="secondary-action-button">
							<button class="button is-info is-outlined is-fullwidth">Save Draft</button>
						</div>
						<div class="primary-action-button">
							<button class="button is-primary is-fullwidth">Publish</button>
						</div>
					</div>
				</div>
			</div> <!-- end of .column.is-one-quarter -->
		</div>
	</form>

</div> <!-- end of .flex-container -->
@endsection

@section('scripts')
<script type="text/javascript">
	window.addEventListener('load', function(){
		var app = new Vue({
		      el: '#app',
		      data: {
		        title: '',
		        slug: '',
		        api_token: '{{Auth::user()->api_token}}'
		      },
		      methods: {
		        updateSlug: function(val) {
		          this.slug = val;
		        },
		        slugCopied: function(type, msg, val) {
		          notifications.toast(msg, {type: `is-${type}`});
		        }
		      }
		});
	});
</script>
@endsection
