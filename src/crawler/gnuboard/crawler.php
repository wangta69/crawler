<?php
namespace Pondol\Crawler;
use Goutte\Client;

//refer : https://developers.naver.com/docs/search/news/
class gnuboardCrawerService{

    /**
     * 네이버 뉴스를 가져온다.
     * @param $body Array array(query, display, start, sort)
     * @param $foramt String json/xml
     */
    public function crawer(){
        $client = new Client();
        $crawler = $client->request('GET', 'https://www.symfony.com/blog/');
    }
    

}