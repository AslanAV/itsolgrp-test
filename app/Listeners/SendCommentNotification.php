<?php

namespace App\Listeners;

use App\Events\CommentProcessed;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendCommentNotification implements ShouldQueue
{
    /**
     * Время (в секундах) до обработки задания.
     *
     * @var int
     */
    public int $delay = 60;
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(CommentProcessed $event): void
    {
        //
    }
}
