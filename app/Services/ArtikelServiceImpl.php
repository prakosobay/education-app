<?php


namespace App\Services;

class ArtikelServiceImpl implements ArtikelService {

    public function getArticleByUserId($userId): string
    {
        //elloquent artikelRepo -> findUserid( userid);
        return "";
    }

    public function test(): string
    {
        return 'success';
    }
}
