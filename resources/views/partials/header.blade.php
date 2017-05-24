<header class="fixed w-100 ph3 pv3 pv4-ns ph4-m ph5-l">
	<a class="f3 brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
	<nav class="f6 fw6 ttu tracked nav-primary">
		@if (has_nav_menu('primary_navigation'))
			{!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
		@endif
	</nav>
</header>