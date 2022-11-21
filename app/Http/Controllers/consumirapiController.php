<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; 
use Codenixsv\CoinGeckoApi\CoinGeckoClient;

class consumirapiController extends Controller
{
    public function index($coin,$data = null)
    {  

        $client = new CoinGeckoClient();
        if($data == true){

            $result = $client->coins()->getHistory($coin, $data);
            dd($result);
        }else{
            $data = date('d-m-Y');
            $result = $client->coins()->getHistory($coin, $data);
            dd($result);
            $result = $client->coins()->getHistory($coin, $data);
            dd($result);
        }
    }
}
