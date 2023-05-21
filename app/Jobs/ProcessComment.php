<?php

namespace App\Jobs;

use App\Http\Controllers\API\CommentController;
use App\Models\Comment;
use App\Services\AddCommentService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessComment implements ShouldQueue
{
    use Dispatchable;
    use InteractsWithQueue;
    use Queueable;
    use SerializesModels;

    protected array $validated;

    /**
     * Create a new job instance.
     */
    public function __construct(array $validated)
    {
        $this->validated = $validated;
    }

    /**
     * Execute the job.
     */
    public function handle(AddCommentService $service): void
    {
        $service->addComment($this->validated);
    }
}
