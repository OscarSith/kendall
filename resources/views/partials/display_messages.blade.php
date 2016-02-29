<div class="col-sm-12">
	@if (Session::has('success_message'))
		<div class="alert alert-success">
			<span>{{ Session::get('success_message') }}</span>
		</div>
	@elseif (Session::has('error_message'))
		<div class="alert alert-danger">
			<span>{{ Session::get('error_message') }}</span>
		</div>
	@endif
</div>