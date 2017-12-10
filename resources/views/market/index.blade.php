@extends('welcome')
@section('title','| About')

@section('content')

<div class="row">
    <div class="col-md-12">
      @foreach($markets as $market)
      <h2>{{$market->name}}</h2>
      <table class="table">
        <thead>
          <th>Company name</th>
          <th>Stock type</th>
          <th>Price</th>
          <th></th>
        </thead>
        <tbody>

          @foreach($prices as $price)
            @if($market->id==$price->market_id)
              @foreach($stocks as $stock)
                @if($stock->id==$price->stock_id)
                  @foreach($companies as $company)
                    @if($company->id==$stock->company_id)
                      <tr>
                        <td>{{$company->name}}</td>
                        <td>{{$stock->type}}</td>
                        <td>{{$price->value}}</td>
                      </tr>
                    @endif
                  @endforeach
                @endif
              @endforeach
            @endif

          @endforeach

        </tbody>
      </table>
      @endforeach
    </div>
</div>


@endsection
