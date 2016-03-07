<div class="col-100">
	@if (Session::has('success_message'))
		<div class="alert alert-success">
			<span>{{ Session::get('success_message') }}</span>
		</div>
	@elseif (Session::has('error_message'))
		<div class="alert error-message">
			{{ Session::get('error_message') }}
		</div>
	@endif
</div>