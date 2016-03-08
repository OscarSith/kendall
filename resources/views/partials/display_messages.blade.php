@if (Session::has('success_message'))
<div class="col-100">
	<div class="alert alert-success">
		<span>{{ Session::get('success_message') }}</span>
	</div>
</div>
@elseif (Session::has('error_message'))
<div class="col-100">
	<div class="alert error-message">
		{{ Session::get('error_message') }}
	</div>
</div>
@endif