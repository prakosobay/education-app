<?php

namespace App\Services;

interface ArtikelService {

    public function getArticleByUserId($userId): string;

    public function test():String;

}
