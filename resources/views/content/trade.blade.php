@extends('inc.index')
@section('content')

<main style="margin-top: 58px">
    <div class="container pt-4">
      <!-- Section: Main chart -->
      <section class="mb-4" id="dashboard">
        <div class="card">
        <!-- container header -->
      
          <div class="card-header ">
            <h5 class="mb-0 text-center"><strong>Trades</strong></h5>
          
          </div>
      
        <!-- end container header -->
          <div class="card-body">
            <!--<canvas class="my-4 w-100" id="myChart" height="380"></canvas>-->
            <div class="table-responsive ">
            <!-- Modal Buy Button -->
            @if(Session::has('buy'))
              <div class="alert alert-success mt-5" role="alert">
                {{Session::get('buy')}}
              </div>
            @endif
            <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#theBuy ">Buy</button>
            <!-- End -->
                <table  id="buy" class="table table-hover ">
                <thead>
                  <tr style="color:white">
                  
                    <th scope="col" class="bg-success">SN</th>
                    
                    <th scope="col" class="bg-success">Cryptocurrency</th>
                    <th scope="col" class="bg-success">Buy Date</th>
                    <th scope="col" class="bg-success">Price</th>
                    <th scope="col" class="bg-success">Units|Filled</th>
                    <th scope="col" class="bg-success">Commission|Fee</th>
                    <th scope="col" class="bg-success">Total|USDT</th>
                    <th scope="col" class="bg-success">Action</th>
                   

                  </tr>
                
                </thead>
                <tbody >
                @foreach($trades as $trade)
                  <tr class="table">
                    <th scope="row">{{$trade['id']}}</th>
                    <td>{{$trade['cryptocurrency']}}</td>
                    <td>{{$trade['buyDate']}}</td>
                    <td>{{$trade['buyPrice']}}</td>
                    <td>{{$trade['buyUnits']}}</td> 
                    <td>{{$trade['buyCommission']}}</td>
                    <td>{{$trade['buyTotal']}}</td>
                    <td>
                    <a href="">Sell</a>
                    <a href="">Edit</a>
                    </td>
                  </tr>
                @endforeach
                 
                
                
                </tbody>
              </table>
              
              <div class="table-responsive mt-5">
              <!-- Modal Sell Button -->
              @if(Session::has('sell'))
              <div class="alert alert-success mt-5" role="alert">
                {{Session::get('sell')}}
              </div>
             @endif
              <button type="button" class="btn btn-danger mb-3" data-bs-toggle="modal" data-bs-target="#theSell">Sell</button> 
              <!-- End -->
                <table  id="sell" class="table table-hover text-nowrap" style="text-align: center ">

                <thead>
                  <tr style="color:white">
                  
                    <th scope="col" class="bg-danger">SN</th>
                    <th scope="col" class="bg-danger">Sell Date</th>
                    <th scope="col" class="bg-danger">Price</th>
                    <th scope="col" class="bg-danger">Units|Filled</th>
                    <th scope="col" class="bg-danger">Commission|Fee</th>
                    <th scope="col" class="bg-danger">Total|USDT</th>
                    <th scope="col" class="bg-danger">Action</th>
                    
                   

                  </tr>
                  
                </thead>
                <tbody >
                @foreach($trades as $trade)
                  <tr class="table">
                    <th scope="row">{{$trade['id']}}</th>
                    <td>{{$trade['sellDate']}}</td>
                    <td>{{$trade['sellPrice']}}</td>
                    <td>{{$trade['sellUnits']}}</td> 
                    <td>{{$trade['sellCommission']}}</td>
                    <td>{{$trade['sellTotal']}}</td>
                    <td>
                    <a href="">Sell</a>
                    <a href="">Edit</a>
                    </td>
                  </tr>
                @endforeach
                 
                
                </tbody>
              </table>
          </div>
        </div>
      </section>
      
      <!-- Section: Main chart -->
        <!-- Modal Buy-->
        <div class="modal fade " id="theBuy" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                       
                        <h5 class="modal-title" id="staticBackdropLabel">Buy</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <!-- form -->
                      <form class="row g-3" method="POST" action="{{route('buy.trade')}}">
                      @csrf
                        <div class="row mb-2 mt-3">
                          <div class="col">
                            <input type="text" class="form-control" name="cryptocurrency" placeholder="Cryptocurrency">
                            <span class="badge bg-danger">@error('Cryptocurrency'){{$message}}@enderror</span>
                          </div>
                        </div>

                        <div class="row mb-2">
                          <div class="col">
                            <input type="date" class="form-control" name="buyDate" placeholder="Buy Date">
                            <span class="badge bg-danger">@error('buyDate'){{$message}}@enderror</span>
                          </div>  
                        </div>

                        <div class="row mb-2">
                          <div class="col">
                              <input type="text" class="form-control" name="buyPrice" placeholder="Price">
                          <span class="badge bg-danger">@error('buyPrice'){{$message}}@enderror</span>
                          </div>
                        </div>

                        <div class="row mb-2">
                         <div class="col">
                          <input type="text" class="form-control" name="buyUnits" placeholder="Units | Filled">
                         <span class="badge bg-danger">@error('buyUnits'){{$message}}@enderror</span>
                         </div>
                        </div>

                        <div class="row mb-2">
                          <div class="col">
                            <input type="text" class="form-control" name="leverage" placeholder="Leverage">
                          <span class="badge bg-danger">@error('leverage'){{$message}}@enderror</span>
                          </div>
                        </div>

                        <div class="row">
                        <div class="col">
                          <input type="text" class="form-control" name="buyCommission" placeholder="Commission | Fee">
                        <span class="badge bg-danger">@error('buyCommission'){{$message}}@enderror</span>
                        </div>
                        </div>
                     
                      
                    
                      
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="submit">Buy</button>
                        </form>
                         <!-- form-end -->
                    </div>
                    </div>
                    
                </div>
        </div>
        <!-- End Modal -->
        
        <!-- Modal Sell-->
        <div class="modal fade " id="theSell" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Sell</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form class="row g-3" method="POST" action="{{route('sell.trade')}}">
                    <div class="modal-body">
                      <!-- form -->
                         <!-- form -->
                         
                          @csrf
                            <div class="row mt-2 mb-2">
                              <div class="col">
                                <input type="text" class="form-control" name="sn" placeholder="SN">
                                <span class="badge bg-danger">@error('sn'){{$message}}@enderror</span>
                              </div>  
                            </div>

                            <div class="row mb-2">
                              <div class="col">
                                <input type="date" class="form-control" name="sellDate" placeholder="Sell Date">
                                <span class="badge bg-danger">@error('sellDate'){{$message}}@enderror</span>
                              </div>  
                            </div>

                            <div class="row mb-2">
                              <div class="col">
                                  <input type="text" class="form-control" name="sellPrice" placeholder="Price">
                                  <span class="badge bg-danger">@error('sellPrice'){{$message}}@enderror</span>
                              </div>
                            </div>

                            <div class="row mb-2">
                            <div class="col">
                              <input type="text" class="form-control" name="sellUnits" placeholder="Units | Filled">
                              <span class="badge bg-danger">@error('sellUnits'){{$message}}@enderror</span>
                            </div>
                            </div>

                            <div class="row">
                            <div class="col">
                              <input type="text" class="form-control" name="sellCommission" placeholder="Commission | Fee">
                              <span class="badge bg-danger">@error('sellCommission'){{$message}}@enderror</span>
                            </div>
                            </div>
 
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger" name="submit">Sell</button>
                      
                    </div>
                    </div>
                    </form>
                         <!-- form-end -->
                </div>
        </div>
        <!-- End Modal -->
    </div>
  </main>

 
@endsection