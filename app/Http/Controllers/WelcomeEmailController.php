<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WelcomeEmailController extends Controller
{
    //
    public function __construct($recipient, $data)
    {
        $this->to($recipient);
        $this->with(['data' => $data]);
    }
    public function send(): string
    {
        $user = User::find(1);
        Mail::to('recipient@example.com')->queue($user);
        return '邮件发送成功';
    }
}
