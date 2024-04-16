<?php
namespace App\Http\Controllers;
use App\Models\PurchaseRequest;
use Illuminate\Http\Request;

class PurchaseRequestController extends Controller
{
    public function storePurchaseRequest(Request $request)
    {
        PurchaseRequest::create($request->all());
        return redirect()->back();  
    }
}
