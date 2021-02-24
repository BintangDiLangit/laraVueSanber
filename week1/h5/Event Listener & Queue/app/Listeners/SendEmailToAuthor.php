<?php

namespace App\Listeners;

use App\Events\BlogPosted;
use App\Mail\BlogPostedMailAuthor;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendEmailToAuthor implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  BlogPosted  $event
     * @return void
     */
    public function handle(BlogPosted $event)
    {
        Mail::to($event->user)->send(new BlogPostedMailAuthor($event->blog, $event->user));
    }
}
