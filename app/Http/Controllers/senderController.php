<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Sender;
use App\Receiver;
use App\Message;

class senderController extends Controller
{
    public function senderStore(Request $request)
    {
        $pk_sender = $request->input('sp_key');
        $messageReceived = $request->input('message');

        $sender = new Sender();
        $sender->private_key = $pk_sender;
        $sender->save();

        $message = new Message();
        $message->text_message = $messageReceived;
        $message->save();

        return redirect('/encrypt');
    }

    public function senderRequest()
    {
        $senders = Sender::all();
        $receivers = Receiver::all();
        $messages = Message::all();
        foreach ($senders as $sender)
        {
            $pk_sender = $sender->private_key;
        }
        foreach($receivers as $receiver)
        {
            $pk_receiver = $receiver->private_key;
        }
        foreach($messages as $message)
        {
            $v = $message->text_message;
        }


$str="";
 $len= strlen ($v);
for ($y = 0; $y < $len; $y++) {
    $swap=0;
     if($v[$y] == 'A' || $v[$y] == 'a')
    {
       $swap=1;
        
    }
    if($v[$y] == 'B' || $v[$y] == 'b')
    {
       $swap=2;
    }
    if($v[$y] == 'C' || $v[$y] == 'c')
    {
       $swap=3;
        
    }
    if($v[$y] == 'D' || $v[$y] == 'd')
    {
       $swap=4;
        
    }if($v[$y] == 'E' || $v[$y] == 'e')
    {
       $swap=5;
        
    }
    if($v[$y] == 'F' || $v[$y] == 'f')
    {
       $swap=6;
        
    }
    if($v[$y] == 'G' || $v[$y] == 'g')
    {
       $swap=7;
        
    }
    if($v[$y] == 'H' || $v[$y] == 'h')
    {
       $swap=8;
        
    }if($v[$y] == 'I' || $v[$y] == 'i')
    {
       $swap=9;
        
    }if($v[$y] == 'J' || $v[$y] == 'j')
    {
       $swap=10;
        
    }
    if($v[$y] == 'K' || $v[$y] == 'k')
    {
       $swap=11;
        
    }
    if($v[$y] == 'L' || $v[$y] == 'l')
    {
       $swap=12;
        
    }
    if($v[$y] == 'M' || $v[$y] == 'm')
    {
       $swap=13;
        
    }
    if($v[$y] == 'N' || $v[$y] == 'n')
    {
       $swap=14;
        
    }if($v[$y] == 'O' || $v[$y] == 'o')
    {
       $swap=15;
        
    }
    if($v[$y] == 'P' || $v[$y] == 'p')
    {
       $swap=16;
    }

 
 $m=$swap;

 $r=$pk_sender;
 $s=$pk_receiver;
 $r1=(pow(3,$r))%17;
 $s1=(pow(3,$s))%17;


 $r2=(pow($s1,$r))%17;
 $s2=(pow($r1,$s))%17;
  $c=($r2*$m)%17;
   
if($c==1)
    {
       $str=$str."A"; 
    }
if($c==2)
    {
       $str=$str."B"; 
    }
if($c==3)
    {
       $str=$str."C"; 
    }
if($c==4)
    {
       $str=$str."D"; 
    }
if($c==5)
    {
       $str=$str."E"; 
    }
if($c==6)
    {
       $str=$str."F"; 
    }
if($c==7)
    {
       $str=$str."G"; 
    }
if($c==8)
    {
       $str=$str."H"; 
    }
if($c==9)
    {
       $str=$str."I"; 
    }
if($c==10)
    {
       $str=$str."J"; 
    }
if($c==11)
    {
       $str=$str."K"; 
    }
if($c==12)
    {
       $str=$str."L"; 
    }
if($c==13)
    {
       $str=$str."M"; 
    }
if($c==14)
    {
       $str=$str."N"; 
    }
if($c==15)
    {
       $str=$str."O"; 
    }
if($c==16)
    {
       $str=$str."P"; 
    }
    

}



        foreach($senders as $sender)
        {
            $sender->encrypted_text = $str;
            $sender->save();
        }
    

        return redirect('/sender');        
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
