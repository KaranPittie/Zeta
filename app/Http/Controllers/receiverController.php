<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Receiver;
use App\Sender;

class receiverController extends Controller
{

    public function receiverStore(Request $request)
    {
        $pk_receiver = $request->input('rp_key');

        $receiver = new Receiver;
        $receiver->private_key = $pk_receiver;

        $receiver->save();

        $xyz=Receiver::all();
        $abc=Sender::all(); 
        
        return view('decrypt')->with(array('receivers' => $xyz , 'senders' => $abc));
    }

    public function receiverRequest()
    {
        $senders = Sender::all();
        $receivers = Receiver::all();

        foreach ($senders as $sender)
        {
            $pk_sender = $sender->private_key;
            $encrypted_text = $sender->encrypted_text;
        }
        foreach($receivers as $receiver)
        {
            $pk_receiver = $receiver->private_key;
        }

            $r=$pk_sender;
            $s=$pk_receiver;
            $str=$encrypted_text;

             $r1=(pow(3,$r))%17;
             $s1=(pow(3,$s))%17;
             $r2=(pow($s1,$r))%17;
             $s2=(pow($r1,$s))%17;
            $str1="";

 $len= strlen ($str);
for ($y = 0; $y < $len; $y++) {
   //echo $y;
    $swap=0;
     if($str[$y] == 'A' || $str[$y] == 'a')
    {
       $swap=1;
        
    }
    if($str[$y] == 'B' || $str[$y] == 'b')
    {
       $swap=2;
        
    }
    if($str[$y] == 'C' || $str[$y] == 'c')
    {
       $swap=3;
        
    }if($str[$y] == 'D' || $str[$y] == 'd')
    {
       $swap=4;
        
    }if($str[$y] == 'E' || $str[$y] == 'e')
    {
       $swap=5;
        
    }
    if($str[$y] == 'F' || $str[$y] == 'f')
    {
       $swap=6;
        
    }
    if($str[$y] == 'G' || $str[$y] == 'g')
    {
       $swap=7;
        
    }
    if($str[$y] == 'H' || $str[$y] == 'h')
    {
       $swap=8;
        
    }if($str[$y] == 'I' || $str[$y] == 'i')
    {
       $swap=9;
        
    }if($str[$y] == 'J' || $str[$y] == 'j')
    {
       $swap=10;
        
    }
    if($str[$y] == 'K' || $str[$y] == 'k')
    {
       $swap=11;
        
    }
    if($str[$y] == 'L' || $str[$y] == 'l')
    {
       $swap=12;
        
    }
    if($str[$y] == 'M' || $str[$y] == 'm')
    {
       $swap=13;
        
    }if($str[$y] == 'N' || $str[$y] == 'n')
    {
       $swap=14;
        
    }if($str[$y] == 'O' || $str[$y] == 'o')
    {
       $swap=15;
        
    }if($str[$y] == 'P' || $str[$y] == 'p')
    {
       $swap=16;
        
    }

  $c=$swap;
  
  // echo " ".$c;
for($i = 0; $i <= 17; $i++)
{
    if((($s2*$i)%17)==1){
        $x=$i;break;}
}
  $invi=$x;
  $p=($invi*$c)%17;
    
if($p==1)
    {
       $str1=$str1."A"; 
    }
if($p==2)
    {
       $str1=$str1."B"; 
    }
if($p==3)
    {
       $str1=$str1."C"; 
    }
if($p==4)
    {
       $str1=$str1."D"; 
    }
if($p==5)
    {
       $str1=$str1."E"; 
    }
if($p==6)
    {
       $str1=$str1."F"; 
    }
if($p==7)
    {
       $str1=$str1."G"; 
    }
if($p==8)
    {
       $str1=$str1."H"; 
    }
if($p==9)
    {
       $str1=$str1."I"; 
    }
if($p==10)
    {
       $str1=$str1."J"; 
    }
if($p==11)
    {
       $str1=$str1."K"; 
    }
if($p==12)
    {
       $str1=$str1."L"; 
    }
if($p==13)
    {
       $str1=$str1."M";
    }
if($p==14)
    {
       $str1=$str1."N"; 
    }
if($p==15)
    {
       $str1=$str1."O"; 
    }
if($p==16)
    {
       $str1=$str1."P"; 
    }
    

}


        foreach($receivers as $receiver)
        {
            $receiver->decrypted_text = $str1;
            $receiver->save();
        }


        $xyz=Receiver::all();
        $abc=Sender::all();

        return var_dump($receivers);
        /*return redirect('decrypt', array('receivers' => $receivers));*/
        return view('decrypt')->with(array('receivers' => $xyz, 'senders' => $abc));
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        /*$pk_receiver = NULL;
        return redirect ('/receiver/{pk_receiver}');*/
        return redirect ('/receiver');
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