<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trades;
use Carbon\Carbon;
class MainController extends Controller
{
  

    public function dashboard() {
        $trade = Trades::orderBy('id','desc')->get();
        return view('content.dashboard', ['trades'=> $trade]);
    }

    public function trade() {
        
        $trade = Trades::orderBy('id','desc')->get();
        return view('content.trade',['trades'=> $trade]);
    }
    public function buyTrade(Request $request)
    {
        $request->validate([
            'cryptocurrency'         =>   'required',
            'buyDate'         =>   'required',
            'buyPrice'     =>   'required|numeric',
            'buyUnits'       =>   'required|numeric',
            'leverage'       =>   'required|numeric',
            'buyCommission'       =>   'required|numeric',
                               
    ]);   
        // Buy
      
        $emps = new Trades;
        
        $cryptocurrency     = $request->cryptocurrency;
        $buyDate            = $request->buyDate;
        $buyPrice           = $request->buyPrice;
        $buyUnits           = $request->buyUnits;
        $leverage           = $request->leverage;
        $buyCommission      = $request->buyCommission;
        //calculate
        $buyTotal = $buyUnits * $buyPrice - $buyCommission;

        $emps->cryptocurrency = $cryptocurrency;
        $emps->buyDate = $buyDate;
        $emps->buyPrice = $buyPrice;
        $emps->buyUnits = $buyUnits;
        $emps->buyTotal = $buyTotal;
        $emps->leverage = $leverage;
        $emps->buyCommission = $buyCommission;
        
        $emps->save();
        return back()->with('buy' ,' You succesfully buy an crypto');
    }
    
    public function sellTrade(Request $request)
    {
        $request->validate([
           
            
            'sn'       =>   'required|numeric',
            'sellDate'       =>   'required',
            'sellPrice'         =>   'required|numeric',
            'sellUnits'         =>   'required|numeric',
            'sellCommission'         =>   'required|numeric'
           
                            
    ]);   


        // Sell
        $sn = $request->sn;
        $sellDate = $request->sellDate;
        $sellPrice = $request->sellPrice;
        $sellUnits = $request->sellUnits;
        $sellCommission = $request->sellCommission;
        
        // Buy
        $data = Trades::where('id', $sn)->first();
       
        //Fetch from trades(buy) table
        $buyPrice = $data->buyPrice;
        $buyPrice = $data->buyPrice;
        $buyUnits = $data->buyUnits;
        $leverage = $data->leverage;
        $buyCommission = $data->buyCommission;
       
        //Calculations
        $sellTotal = $sellUnits * $sellPrice - $sellCommission;
        $usdt_gross = $buyPrice * $buyUnits ;
        $usdt_charge_bought = $usdt_gross - $buyCommission;
        $usdt_gross_sell = $sellPrice * $sellUnits;
        $usdt_charge_sold = $usdt_gross_sell - $sellCommission;
        $profit =  ($usdt_charge_sold - $usdt_charge_bought) * $leverage;
        
        //Get status
        $peso = $profit * 50;
        if($peso > 0){
            $status = 'win';
        }
        else{
            $status = 'loss';
        }

        //Get range
        $buyDate = $data->buyDate;
        $sellDate = $request->sellDate;
        $buy  = Carbon::createFromFormat('Y-m-d', $buyDate);
        $sell    = Carbon::createFromFormat('Y-m-d', $sellDate);
        $range = $buy->diffInDays($sell);
       

        Trades::where('id', $sn)->update([
           
            'sellDate' => $sellDate,
            'sellPrice' => $sellPrice,
            'sellUnits' => $sellUnits,
            'sellCommission' => $sellCommission,
            'sellTotal' => $sellTotal,
            'profit' => $profit,
            'range' => $range,
            'peso' => $peso,
            'status' => $status

        ]);
        return back()->with('sell' ,' You succesfully sell you crypto ');
    }
    public function show(){

    }

}
