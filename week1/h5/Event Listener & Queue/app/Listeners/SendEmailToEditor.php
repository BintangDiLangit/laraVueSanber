<?php

namespace App\Listeners;

use App\Events\BlogPosted;
use App\Mail\BlogPostedMailEditor;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendEmailToEditor implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Handle the event.
     *
     * @param  BlogPosted  $event
     * @return void
     */
    public function handle(BlogPosted $event)
    {
        Mail::to($event->user)->send(new BlogPostedMailEditor($event->blog, $event->user));
    }
}
