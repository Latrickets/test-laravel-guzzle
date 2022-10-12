<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request as RequestGuzzle;

class ProductController extends Controller
{
    public function index(){
        
        $client = new Client();

        $headers = [
            'Authorization' => 'Bearer ' . '11|VCmmwnjGHuEDahwmVr493D0BZHct3xvRogsHX6EW'
        ];

        $request = new RequestGuzzle('GET', 'https://crud.jonathansoto.mx/api/products', $headers);
        $res = $client->sendAsync($request)->wait();
    
    
        $products = $res->getBody()->getContents();
        $products = json_decode($products);
        //return $products;
        
        return view('index',compact('products'));
    }
    public function get($slug){
        $client = new Client();
        $headers = [
          'Authorization' => 'Bearer ' .'11|VCmmwnjGHuEDahwmVr493D0BZHct3xvRogsHX6EW'
        ];
        $request = new RequestGuzzle('GET', 'https://crud.jonathansoto.mx/api/products/slug/'.$slug, $headers);
        $res = $client->sendAsync($request)->wait();
        $product = $res->getBody()->getContents();
        $product = json_decode($product);
        
        return view('get', compact('product'));
    }
}
