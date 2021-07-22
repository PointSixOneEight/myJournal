@extends('inc.index')
@section('content')
<main style="margin-top: 58px">
    <div class="container pt-4">
      <!-- Section: Main chart -->
      <section class="mb-4" id="dashboard">
        <div class="card">
          <div class="card-header py-3">
            <h5 class="mb-0 text-center"><strong>Trades</strong></h5>
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add</button>
          </div>
          <div class="card-body">
            <!--<canvas class="my-4 w-100" id="myChart" height="380"></canvas>-->
            <div class="table-responsive-sm">
                <table id="example"class="table table-hover text-nowrap  table-striped" style="text-align: center">
                
                <thead>
                  <tr style="color:white">
                  
                    <th scope="col" class="bg-success">SN</th>
                    
                    <th scope="col" class="bg-success">Cryptocurrency</th>
                    <th scope="col" class="bg-success">Buy Date</th>
                    <th scope="col" class="bg-success">Price</th>
                    <th scope="col" class="bg-success">Units|Filled</th>
                    <th scope="col" class="bg-success">Commission|Fee</th>
                    <th scope="col" class="bg-success">Total|USDT</th>
                 
                   
                    <th scope="col" class="bg-danger">Sell Date</th>
                    <th scope="col" class="bg-danger">Price</th>
                    <th scope="col" class="bg-danger">Units|Filled</th>
                    <th scope="col" class="bg-danger">Commission|Fee</th>
                    <th scope="col" class="bg-danger">Total|USDT</th>

                  </tr>
                </thead>
                <tbody >
            
                  <tr >
                    <th scope="row">1</th>
                    <td >BTC USDT</td>
                    <td>2</td>
                    <td>0.0312</td> 
                    <td>0.0000132</td>
                    <td>0.0000132</td>
                    <td><span class="badge bg-success">WIN </span></td>
                   
                    <td>BTC USDT</td>
                    <td>2</td>
                    <td>0.0312</td> 
                    <td>0.0000132</td>
                    <td>0.0000132</td>
                 
                  </tr>
                  <tr >
                    <th scope="row">1</th>
                    <td>BTC USDT</td>
                    <td>2</td>
                    <td>0.0312</td> 
                    <td>0.0000132</td>
                    <td>0.0000132</td>
                    <td><span class="badge bg-success">WIN </span></td>
                  </tr>
                  <tr >
                    <th scope="row">1</th>
                    <td>BTC USDT</td>
                    <td>2</td>
                    <td>0.0312</td> 
                    <td>0.0000132</td>
                    <td>0.0000132</td>
                    <td><span class="badge bg-success">WIN </span></td>
                  </tr>
                  <tr >
                    <th scope="row">1</th>
                    <td>BTC USDT</td>
                    <td>2</td>
                    <td>0.0312</td> 
                    <td>0.0000132</td>
                    <td>0.0000132</td>
                    <td><span class="badge bg-success">WIN </span></td>
                  </tr>
                  <tr >
                    <th scope="row">1</th>
                    <td>BTC USDT</td>
                    <td>2</td>
                    <td>0.0312</td> 
                    <td>0.0000132</td>
                    <td>0.0000132</td>
                    <td><span class="badge bg-success">WIN </span></td>
                  </tr>
                  <tr >
                    <th scope="row">1</th>
                    <td>BTC USDT</td>
                    <td>2</td>
                    <td>0.0312</td> 
                    <td>0.0000132</td>
                    <td>0.0000132</td>
                    <td><span class="badge bg-success">WIN </span></td>
                  </tr>
                  <tr >
                    <th scope="row">1</th>
                    <td>BTC USDT</td>
                    <td>2</td>
                    <td>0.0312</td> 
                    <td>0.0000132</td>
                    <td>0.0000132</td>
                    <td><span class="badge bg-success">WIN </span></td>
                  </tr>

               
                
                </tbody>
              </table>
          </div>
        </div>
        
      </section>
      <!-- Section: Main chart -->
        <!-- Button trigger modal -->


        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
            </div>
        </div>
        </div>
        <!-- End Modal -->
    </div>
  </main>

 
@endsection