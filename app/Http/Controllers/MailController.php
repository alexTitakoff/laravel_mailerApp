<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MailFormValidationRequest;

use App\Http\Requests;
use Input;

use Mail;
use Session;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */




    function __construct()
    {
        $this->middleware('guest'); 
    }




    public function index()
    {
        return view('mail.sendnewmail');
    }







    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function sendmail(MailFormValidationRequest $request)
    {


        if($request -> has('message') && $request -> has('email'))    {
    // $email = $request -> email;
    // $subject = $request -> subject;
    // $message = $request -> message;

            $body = ['message' => $request -> message];

            Mail::send('mail.newmail', ['body' => $body], function ($message) use ($request)      {

                $message -> to($request -> email)-> from('noreply@mailerapp.com', 'Mailer App Service')->subject($request-> subject);  

            }); 
            //send
            Session::flash('flashmessage', "Mail sent succefuly");
            return redirect('mail'); 


        }  // if



    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
