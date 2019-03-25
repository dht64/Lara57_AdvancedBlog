@extends('layouts.manage')

@section('content')
	<div class="flex-container">
		<div class="columns m-t-10">
			<div class="column">
				<h1 class="title">Create New User</h1>
			</div>
		</div>
		<hr class="m-t-10">
		
		<div class="columns">
			<div class="column">
				<form action="{{route('users.update', $user->id)}}" method="POST">
					{{method_field('PUT')}}
					{{csrf_field()}}
					<div class="field">
						<label for="name" class="label">Name</label>
						<p class="control">
							<input type="text" name="name" class="input" id="name" value="{{$user->name}}">
						</p>
					</div>

					<div class="field">
						<label for="email" class="label">Email:</label>
						<p class="control">
							<input type="text" name="email" class="input" id="email" value="{{$user->email}}">
						</p>
					</div>

					<div class="field">
			            <label for="password" class="label">Password</label>
						<div class="block">
							<div class="field">
								<b-radio name="password_options" v-model='password_options' native-value="keep">Do Not Change Password</b-radio>
							</div>
							<div class="field">
								<b-radio name="password_options" v-model='password_options' native-value="auto">Auto-Generate New Password</b-radio>
							</div>
							<div class="field">
								<b-radio name="password_options" v-model='password_options' native-value="manual">Manually Set New Password</b-radio>
								<p class="control m-t-5">
									<input type="password" class="input" name="password" id="password" placeholder="Manually give a password to this user" v-if="password_options == 'manual'">
								</p>
							</div>
						</div>
			            
			        </div>

					<button class="button is-primary">Edit User</button>
				</form>				
			</div>
		</div>

	</div> <!-- end of .flex-container -->
@endsection

@section('scripts')
	<script>

		window.addEventListener('load', function() {
            var app = new Vue({
                el: '#app',
                data: {
                    password_options: 'keep'
                }
            });
        });

	</script>
@endsection