@extends('layouts.app')

@section('content')
<div class="container">
    <canvas id="myChart" ></canvas>
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">Price</div>
                <div class="card-body">
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
                            @foreach ($stuff as $key => $item)
                                <tr>
                                    <th scope="row">{{ ++$key }}</th>
                                    <td>{{ $item->price_has_stuff->stuff_name }}</td>
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
@section('script')
<script>
 $.noConflict();
 jQuery( document ).ready(function( $ ) {
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [@foreach($chartDatas as $d) "{{ $d['date'] }}", @endforeach],
            datasets: [{
                label: 'Price Mean',
                data: [@foreach($chartDatas as $v) "{{ $v['data'] }}", @endforeach],
                backgroundColor: [
                    'rgba(38, 166, 154, 0.5)',
                ],
                borderColor: [
                    'rgba(247, 197, 97, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                xAxes: [ {
                  display: true,
                } ],
                yAxes: [{
                    scaleLabel: {
                        display: true,
                        labelString: 'probability'
                    }
                }]
            }
        }
    });
    });
</script>
@endsection