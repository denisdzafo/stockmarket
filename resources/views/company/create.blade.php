@extends('welcome')
@section('title','| About')

@section('content')

<form class="form-horizontal" role="form"  method="post" action="{{route ('company.store')}}">
        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <div class="form-group">
          <label class="col-md-4 control-label">Company name</label>
          <div class="col-md-6">
            <input type="text" name="name" class="form-control">
          </div>
        </div>
        <div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">Add Company</button>

							</div>
				</div>
  </form>

@endsection
