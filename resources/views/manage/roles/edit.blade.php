@extends('layouts.manage')

@section('content')
<div class="flex-container">
	<div class="columns m-t-10">
		<div class="column">
			<h1 class="title">Edit {{$role->display_name}}</h1>
		</div>
		<div class="column">
			<a href="{{route('roles.edit', $role->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i>Edit This Role</a>
		</div>
	</div>
	<hr class="m-t-10">
	
	<form action="{{route('roles.update', $role->id)}}" method="POST">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		<div class="columns">
			<div class="column">
				<div class="box">
					<article class="media">
						<div class="media-content">
							<div class="content">
								<h2 class="title">Role Details:</h2>
								<div class="field">
									<p class="control">
										<label for="display_name" class="label">Name (Human Readable)</label>
										<input type="text" name="display_name" class="input" id="display_name" value="{{$role->display_name}}">
									</p>
								</div>
								<div class="field">
									<p class="control">
										<label for="name" class="label">Slug (Cannot be edited)</label>
										<input type="text" name="name" class="input" id="name" disabled value="{{$role->name}}">
									</p>
								</div>
								<div class="field">
									<p class="control">
										<label for="description" class="label">Description</label>
										<input type="text" name="description" class="input" id="description" value="{{$role->description}}">
									</p>
								</div>
								<input type="hidden" :value="permissionsSelected" name="permissions">
							</div>
						</div>
					</article>
				</div> <!-- end of .box -->
			</div>
		</div> <!-- end of .columns -->

		<div class="columns">
			<div class="column">
				<div class="box">
					<article class="media">
						<div class="media-content">
							<div class="content">
								<h2 class="title">Permissions:</h2>
									@foreach ($permissions as $permission)
										<div class="field">
											<b-checkbox v-model="permissionsSelected" :native-value="{{$permission->id}}">{{$permission->display_name}} <em>({{$permission->description}})</em></b-checkbox>
										</div>
									@endforeach
							</div>
						</div>
					</article>
				</div> <!-- end of .box -->

				<button class="button is-primary">Save Changes to Role</button>
			</div>
		</div> <!-- end of .columns -->
	</form>
</div>
@endsection

@section('scripts')
	<script type="text/javascript">

		window.addEventListener('load', function(){
			var app = new Vue({
				el: '#app',
				data: {
					permissionsSelected: {!! $role->permissions->pluck('id') !!}
				}
			});
		});

	</script>
@endsection