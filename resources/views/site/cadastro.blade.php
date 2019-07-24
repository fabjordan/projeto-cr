@extends('site.partials.header')

@section('content')

<section>
	@include('site.auth.formcadastro')
</section>

@section('script')
<script type="text/javascript">
	
	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				$('#foto')
				.attr('src', e.target.result);
			};

			reader.readAsDataURL(input.files[0]);
		}
	}

	function readURL2(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				$('#foto-Juri')
				.attr('src', e.target.result);
			};

			reader.readAsDataURL(input.files[0]);
		}
	}

	$(document).ready(function() {
		$('.light__input').attr('placeholder', ' ');
	});
</script>
@endsection
@stop