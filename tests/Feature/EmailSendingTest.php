<?php

use App\Mail\WelcomeEmail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class EmailSendingTest extends TestCase
{
    public function testWelcomeEmail()
    {
        // Faking the Mail system to prevent actual emails from being sent
        Mail::fake();

        // Create a user or fetch an existing one (assuming User model exists)
//        $user = User::factory()->create([
//            'name' => 'John Doe',
//            'email' => 'johndoe@example.com',
//        ]);

        // Retrieve an existing user (if it already exists)
         $user = User::where('email', 'xiwangly2@gmail.com')->first();

        // Dispatch the WelcomeEmail mailable
        Mail::to($user->email)->send(new WelcomeEmail($user));

        // Assert that the email was sent
        Mail::assertSent(WelcomeEmail::class, function ($mail) use ($user) {
            return $mail->user->id === $user->id;
        });
    }
}
