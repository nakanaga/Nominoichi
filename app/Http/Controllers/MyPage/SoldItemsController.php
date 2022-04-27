<?php

namespace App\Http\Controllers\MyPage;

use App\Http\Requests\SellRequest;
use App\Models\Item;
use App\Models\ItemCondition;
use App\Models\PrimaryCategory;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\File;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Payjp\Charge;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SoldItemsController extends Controller
{
    public function showSoldItems()
    {
        $user = Auth::user();

        $items = $user->soldItems()->orderBy('id', 'DESC')->get();

        return view('mypage.sold_items')
            ->with('items', $items);
    }
}
