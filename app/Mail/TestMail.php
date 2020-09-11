<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;
    
    public $filename;
    public $url;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($filename, $url)
    {
        $this->filename = $filename;
        $this->url = $url;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.test')
            ->with(['url' => $this->ur])
            ->attachFromStorageDisk('s3', $this->filename);
    }
}
