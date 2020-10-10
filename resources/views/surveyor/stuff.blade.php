@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ $stuff->stuff_name }} Price</div>
                <div class="card-body">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        ADD PRICE
                      </button>
                      <div id="accordion">
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <form class="mb-5" method="POST" action="{{ route('stuffPrice', $stuff) }}">
                                @csrf
                                <div class="row">
                                    <div class="form-group col">
                                        <label>Price</label>
                                        <input type="number" class="form-control" name="price" placeholder="Stuff Price">
                                    </div>
                                    <div class="form-group col">
                                        <label>Date</label>
                                        <input type="date" name="price_date" class="form-control">
                                    </div>
                                </div>
                                <input type="submit" class="float-right btn btn-primary" value="Submit Price">
                            </form>
                        </div>
                      </div>
                    <table class="table ">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Stuff</th>
                            <th scope="col">Status</th>
                            <th scope="col">Price</th>
                            <th scope="col">Date</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($stuff->stuff_has_price as $key => $item)
                                <tr>
                                    <th scope="row">{{ ++$key }}</th>
                                    <td>{{ $stuff->stuff_name }}</td>
                                    <td>{{ $item->price_status }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->price_date }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection