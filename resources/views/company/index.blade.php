@extends('welcome')
@section('title','| About')

@section('content')
<br>
<div class="row">
    <div class="col-md-12">
      <a href="{{route('company.create')}}" class="float-right">Add new company</a>
      <div class="row">
        <div class="col-md-12">
          @foreach($companies as $company)

              <h1>Company: {{$company->name}}</h1>
              @foreach($stocks as $stock)
                @if($company->id==$stock->company_id)
                  <h3>Stock: {{$stock->type}}</h3>
                  @foreach($prices as $price)
                    @if($stock->id==$price->stock_id)
                      @foreach($markets as $market)
                        @if($market->id==$price->market_id)
                          <p>Market:{{$market->name}}    PRice: {{$price->value}}</p>
                        @endif
                      @endforeach
                    @endif
                  @endforeach
                @endif
              @endforeach
              <hr>
          @endforeach
        </div>
      </div>

    </div>
</div>

@endsection
