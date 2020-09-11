<?php

namespace App\Jobs;

use App\Mail\TestMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class TestJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $filename;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // $url = Storage::disk('s3')->temporaryUrl(
        //     $this->filename,
        //     Carbon::now()->addDays(3),
        //     ['ResponseContentType' => 'application/octet-stream']
        // );
        
        $url = Storage::disk('s3')->url($this->filename);
        return Mail::to('we@test.test')->queue(new TestMail($this->filename, $url));
    }
}
