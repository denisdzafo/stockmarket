@extends('welcome')
@section('title','| About')

@section('content')

<form class="form-horizontal" role="form"  method="post" action="{{route ('price.store')}}">
        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <div class="form-group">
          <label class="col-md-4 control-label">Stock </label>
          <div class="col-md-6">
            <select class="form-control" name="stock_id">
            @foreach($stocks as $stock)
              <option value="{{$stock->id}}">{{$stock->type}}</option>
            @endforeach
          </select>
          </div>

        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Price</label>
          <div class="col-md-6">
            <input type="text" name="value" class="form-control">
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label">Market </label>
          <div class="col-md-6">
            <select class="form-control" name="market_id">
            @foreach($markets as $market)
              <option value="{{$market->id}}">{{$market->name}}</option>
            @endforeach
          </select>
          </div>

        </div>
        <div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">Add Price</button>

							</div>
				</div>
  </form>

  @endsection
