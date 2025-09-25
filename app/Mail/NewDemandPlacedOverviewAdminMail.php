<?php

namespace App\Mail;

use App\Models\Demand;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewDemandPlacedOverviewAdminMail extends Mailable
{
    use Queueable, SerializesModels;

    public Demand $demand;

    /**
     * Create a new message instance.
     */
    public function __construct(Demand $demand)
    {
        $this->demand = $demand;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Nová poptávka - ' . $this->demand->from . ' → ' . $this->demand->to,
            replyTo: [$this->demand->email],
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.new-demand-admin',
            with: [
                'demand' => $this->demand,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}