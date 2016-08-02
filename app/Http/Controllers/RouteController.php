<?php

namespace App\Http\Controllers;
//use App\Http\Controllers;
//use App\Http\Requests;
use Illuminate\Http\RedirectResponse;
use Mail;
//use Illuminate\Support\Facades\Mail;
class RouteController extends Controller{

public function index(){

}
	public function school_info(){
		return view('school_info');
	}

	public function contact(){
		return view('contact');
	}

	public function handleMail(){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$msg=$_POST['comments'];
$message=" ".$name." "."wrote".$msg;

		$addr="itorlewis@gmail.com";
		$subject="Contact Info";

$headers = 'From:'.$email . "\r\n" .
   'Reply-To: '.$addr . "\r\n" .
   'X-Mailer: PHP/' . phpversion();

$result=mail($email,$subject,$message,$headers);

if($result){echo "It worked";}
else{echo "Error Occured";}
		//echo $name. " ". $email. " ". $msg;

/*Mail::send('test', ['name'=>'Lewis Itor'],function($message){
	$message->to('itorlewis@gmail.com','Some Guy')->('welcome');
});
*/

	}
}
?>