@extends('welcome')
@section('title','| About')

@section('content')

<form class="form-horizontal" role="form"  method="post" action="{{route ('stock.store')}}">
        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <div class="form-group">
          <label class="col-md-4 control-label">Stock type </label>
          <div class="col-md-6">
            <input type="text" name="type" class="form-control">
          </div>
        </div>


        <div class="form-group">
          <label class="col-md-4 control-label">Company </label>
          <div class="col-md-6">
          <select class="form-control" name="company_id">
          @foreach($companies as $company)
            <option value="{{$company->id}}">{{$company->name}}</option>
          @endforeach
        </select>
      </div>
        </div>
        <div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">Add Stock</button>

							</div>
				</div>
  </form>
@endsection
