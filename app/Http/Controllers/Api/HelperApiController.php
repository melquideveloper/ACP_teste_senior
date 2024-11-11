<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;


class HelperApiController extends Controller
{   

    public static function formatTag()
    {        
        return response()->json(['message' => "Tag não localizada , cadastre a tag! Utilize a rota (GET) ".request()->getSchemeAndHttpHost()."/api/tags para localizar!"]);
    }

    public static function ExistText($id, $data)
    {        
        return response()->json(['message' => "Id ($id) não encontrado a nossa base de dados! Utilize a rota (GET) ".request()->getSchemeAndHttpHost()."/api/$data , para localizar!"]);
    }

    
}
 