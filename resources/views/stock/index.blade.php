@extends('welcome')
@section('title','| About')

@section('content')
<br>
<div class="row">
    <div class="col-md-12">
      <a href="{{route('stock.create')}}" class="float-right">Add new Stock</a>
      <br>
      <a href="{{route('price.create')}}" class="float-right">Add price for stock on market</a>
      <div class="row">
        <div class="col-md-12">
          @foreach($stocks as $stock)

              <h2>Stock: {{$stock->type}}</h2>
              @foreach($companies as $company)
                @if($company->id==$stock->company_id)
                  <h4>Company: {{$company->name}}</h4>
                  @foreach($prices as $price)
                    @if($stock->id==$price->stock_id)
                      @foreach($markets as $market)
                        @if($market->id==$price->market_id)
                          <p>Highest price: {{$price->value}} on market: <b>{{$market->name}}</b>  </p>
                           @break
                        @endif
                      @endforeach
                      @break
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
