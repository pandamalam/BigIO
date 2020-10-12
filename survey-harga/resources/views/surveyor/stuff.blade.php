@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ $stuff->stuff_name }} Price</div>
                <div class="card-body">
                    <button class="mb-4 btn btn-primary" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        ADD PRICE
                      </button>
                      <div id="accordion">
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <form class="mb-5" method="POST" action="{{ route('surveyor.stuffPrice', $stuff) }}">
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
                    <table class="table table table-striped table-bordered" id="example" style="width:100%">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Stuff</th>
                            <th scope="col">Price</th>
                            <th scope="col">Date</th>
                            <th scope="col">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($stuff->stuff_has_price as $key => $item)
                                <tr>
                                    <th scope="row">{{ ++$key }}</th>
                                    <td>{{ $stuff->stuff_name }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->price_date }}</td>
                                    <td class="text-capitalize">{{ $item->price_status }} 
                                        @if ($item->price_status == 'approved')
                                            <i class="fa fa-check" style="color:#227dc7"></i>
                                        @else
                                            <i class="fa fa-times" style="color:red"></i>
                                        @endif 
                                    </td>
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