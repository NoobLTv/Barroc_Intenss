<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class workordermail extends Mailable
{
    use Queueable, SerializesModels;

    public $workorder_id;
    public $workorderproduct_id;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request, $workorder_id, $workorderproduct_id)
    {
        $this->workorder_id = $workorder_id;
        $this->workorderproduct_id = $workorderproduct_id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.workordermail')->with('workorder_id', $this->workorder_id, 'workorderproduct_id', $this->workorderproduct_id);
    }
}
