<div class="side-menu">
	<aside class="menu m-t-30 m-l-10">
		<p class="menu-label">
			General
		</p>
		<ul class="menu-list">
			<li><a href="{{route('manage.dashboard')}}">Dashboard</a></li>
		</ul>
		<p class="menu-label">
			Administration
		</p>
		<ul class="menu-list">
			<li><a class="is-active" href="{{route('users.index')}}">Manage Users</a></li>
			<li>
				<a href="{{route('permissions.index')}}">Roles &amp; Permissions</a>
				<ul>
					<li><a href="{{route('roles.index')}}">Roles</a></li>
					<li><a href="{{route('permissions.index')}}">Permissions</a></li>
				</ul>
			</li>
			<li>
				<a>Manage Your Team</a>
				<ul>
					<li><a>Members</a></li>
					<li><a>Plugins</a></li>
					<li><a>Add a member</a></li>
				</ul>
			</li>
		</ul>
	</aside>
</div>