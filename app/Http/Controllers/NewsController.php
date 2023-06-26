<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class NewsController extends Controller
{
    public function index(Request $request){
        $country = $request->country ?? 'us'; //default country is 'id'
        $category = $request->category ?? 'general'; //default category is 'general'
        $url = "https://newsapi.org/v2/top-headlines?country=$country&category=$category&apiKey=a3766a4292ef471f854100011e1fdb6b";
        $client = new Client();
        $response = $client->request('GET', $url);
        $articles = json_decode($response->getBody()->getContents());

        return view('news.index', compact('articles','category','country'));
    }
}
