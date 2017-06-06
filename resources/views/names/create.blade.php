@extends ('layout')

@section ('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<form method="POST" role="form" action="/names">
            {{ csrf_field() }}
				<div class="form-group">
					 
					<label for="title">
						Title:
					</label>
					<input type="text" class="form-control" id="title" name="title" required>
				</div>
				@if (count($errors))
                <div class="form-group">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endif
                <div class="form-group">
				<button type="submit" class="btn btn-primary">
					Submit
				</button>
                </div>
			</form>
		</div>
	</div>
</div>
@endsection