<?php

// what are the class belong to the controller 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request){
    	$this->validate($request, [
    		'name' => 'required',
    		'email' => 'required'
    		]);

    	//return 'SUCCESS';

    	//Create new Message (model name)
    	$message = new Message;
    	$message->name = $request->input('name');
    	$message->email = $request->input('email');
    	$message->message = $request->input('message');

    	// Save the message
    	$message->save();

    	// Redirect
    	return redirect('/')->with('success', 'Message Sent');
    }

    public function getMessages()
    {
        // getting all the message from "Message" database
        $messages = Message::all();

        // then pass the messages to view from the actual data from the $message variable
        return view('messages')->with('messages', $messages);
    }
}

