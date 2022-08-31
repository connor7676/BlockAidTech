<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\RequestMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Invoice;

class PaymentsController extends Controller
{
    //
    public function index()
    {
        // get all invoices for the current user
        $invoices = Invoice::where('user_id', Auth::id())->get();
        return view('pages.request', compact('invoices'));
        // return view('pages.request');
    }

    public function requestmail(Request $request)
    {
        $this->validate($request, [
            'requestName' => 'required',
            'email' => 'required|email',
            'requestAmount' => 'required|numeric',
        ]);
        $data = array(
            'name' => $request->requestName,
            'email' => $request->email,
            'amount' => $request->requestAmount,
            'note' => $request->note,
        );
        // get user bitcoin address from user table
        $user = Auth::user();
        $userbtc = $user->bitcoin_address;
        // if user bitcoin address not set then cancel
        if ($userbtc == null) {
            return redirect()->back()->with('error', 'Please set your bitcoin address');
        }

        // adding invoice to invoice table
        // $invoice = new \App\Models\Invoice();
        $invoice = new Invoice;
        // 3 random numbers and 2 random letters for invoice code
        $invoice->code = substr(str_shuffle("0123456789"), 0, 3) . substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 2);
        $invoice->address = $userbtc;
        $invoice->price = $request->requestAmount;
        $invoice->status = 0;
        $invoice->user_id = Auth::user()->id;
        $invoice->save();

        // get invoice id
        $invoiceid = $invoice->id;
        // create invoice url
        $invoiceurl = url('/invoice/' . $invoiceid);
        // add invoice url to data array
        $data['url'] = $invoiceurl;

        Mail::to($request->email)->send(new RequestMail($data));
        return back()->with('success', 'Request sent successfully!');
    }

    public function invoice($id)
    {
        // get invoice
        $invoice = Invoice::find($id);

        // if invoice not found then redirect to home page
        if ($invoice == null) {
            return redirect('/');
        }

        // get user id from invoice table
        $userid = $invoice->user_id;

        // get user
        $user = User::find($userid);

        // if user not found then redirect to home page
        if ($user == null) {
            return redirect('/');
        }

        // get user bitcoin address from user table
        $userbtc = $user->bitcoin_address;

        // view invoice page
        return view('pages.invoice', compact('invoice', 'userbtc'));
    }
}
