@extends('inc.index')
@section('content')

<main style="margin-top: 58px">
    <div class="container pt-4">
      <!-- Section: Main chart -->
      <section class="mb-4" id="dashboard">
        <div class="card">
          <div class="card-header py-3">
            <h5 class="mb-0 text-center"><strong>Journal</strong></h5>
         
          </div>
          <div class="card-body">
            <!--<canvas class="my-4 w-100" id="myChart" height="380"></canvas>-->
            <!-- <div class="form-group">
                <select name="state" id="maxRows" class="form-control mb-3" style="width:150px ; ">
                    <option value="5000">Show all</option>
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                    <option value="50">50</option>
                    <option value="75">75</option>
                    <option value="100">100</option>
                </select>
            </div> -->
            <div class="overflow-x: auto">
            
                <table  id="myTable" class="table table-hover text-nowrap " style="text-align: center ">

                <thead>
                  <tr style="color:white">
              
                    <th scope="col" class="bg-info" >SN</th>
                 
                    <th scope="col" class="bg-info" >Cryptocurrency</th>
                    <th scope="col" class="bg-info" >Buy</th>
                    <th scope="col" class="bg-info" >Sell</th>
                    <th scope="col" class="bg-info" >Range</th>
                    <th scope="col" class="bg-info" >Profit</th>
                    <th scope="col" class="bg-info" >Peso</th>
                    <th scope="col" class="bg-info" >Status</th>
                    
                  </tr>
                </thead>
              
                <tbody >
                @foreach($trades as $trade)
                  <tr class="table-info">
                    <th scope="row">{{$trade['id']}}</th>
                    <td>{{$trade['cryptocurrency']}}</td>
                    <td>{{$trade['buyDate']}}</td>
                    <td>{{$trade['sellDate']}}</td>
                    <td>{{$trade['range']}} day</td> 
                    <td>{{$trade['profit']}}</td>
                    <td>{{$trade['peso']}}</td>
                    @if($trade['status'] == 'win')
                    <td><span class="badge bg-success">{{$trade['status']}}</span></td>
                    @elseif($trade['status'] == 'loss')
                    <td><span class="badge bg-danger">{{$trade['status']}}</span></td>
                    @else
                    <td><span class="badge bg-info">{{$trade['status']}}</span></td>
                    @endif
                  </tr>
                @endforeach
              
                </tbody>
              </table>
              
          </div>
        </div>
      </section>
      <!-- Section: Main chart -->

    </div>
  </main>



@endsection