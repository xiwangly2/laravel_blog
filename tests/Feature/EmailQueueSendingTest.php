<?php

use App\Mail\WelcomeEmail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class EmailQueueSendingTest extends TestCase
{
    use DatabaseTransactions; // 使用它在数据库事务中运行测试

    public function testWelcomeEmail()
    {
        // Faking the Mail system to use the "sync" driver for testing
        Mail::fake();

        // Retrieve an existing user (if it already exists)
        $user = User::where('email', 'xiwangly2@gmail.com')->first();

        // Dispatch the WelcomeEmail mailable to the user
        Mail::to($user->email)->queue(new WelcomeEmail($user)); // Use the "queue" method

        // Assert that the email was queued (not sent immediately)
        Mail::assertQueued(WelcomeEmail::class, function ($mail) use ($user) {
            return $mail->user->id === $user->id;
        });
    }
}
