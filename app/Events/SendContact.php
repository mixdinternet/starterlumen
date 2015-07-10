<?php namespace App\Events;

use Illuminate\Http\Request;
use Illuminate\Queue\SerializesModels;

class SendContact extends Event
{
    use SerializesModels;

    public $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }
}