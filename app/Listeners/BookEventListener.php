<?php

namespace App\Listeners;

use App\Events\BookEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Auth;
use App\Jobs\SendBookEmail;
use App\Mail\BookMail;
class BookEventListener
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
     * @param  BookEvent  $event
     * @return void
     */
    public function handle(BookEvent $event)
    {
        $objBook=$event->objBook;
       $objBook->user_id=Auth::user()->id;
       $bookEmail=
       new BookMail($objBook->user->name,
                route('blog.comentarios',$objBook->slug),$objBook->title);
       SendBookEmail::dispatch($bookEmail);
    }
}
