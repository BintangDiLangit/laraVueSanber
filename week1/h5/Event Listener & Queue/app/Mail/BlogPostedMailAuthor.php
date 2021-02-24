<?php

namespace App\Mail;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class BlogPostedMailAuthor extends Mailable
{
    use Queueable, SerializesModels;
    protected $blog;
    protected $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Blog $blog, User $user)
    {
        $this->blog = $blog;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('example@example.com')
                    ->view('isi_email_author')
                    ->with([
                        'name' => $this->user->name,
                        'judul' => $this->blog->title
                    ]);
    }
}
