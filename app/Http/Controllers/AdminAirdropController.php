<?php

namespace App\Http\Controllers;

use App\Models\Airdrop;
use Illuminate\Http\Request;

class AdminAirdropController extends Controller
{
    //
    protected $airdrop;
    public function __construct(Airdrop $airdrop)
    {
        $this->airdrop = $airdrop;
    }

    public function index(){
        $items =  $this->airdrop->latest()->paginate(5);
        return view('admin.airdrop.index', compact('items'));
    }
}
