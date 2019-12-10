<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OfferMail extends Mailable
{
    use Queueable, SerializesModels;

    public $quotation_id;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request, $quotation_id)
    {
        $this->quotation_id = $quotation_id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // Als het goed is, wordt hier nu (/straks) een quotation_id meegegeven.


        return $this->markdown('emails.offermail')->with('quotation_id', $this->quotation_id); // Geef nog het quotation_id mee om de mail op te kunnen stellen.
    }
}
