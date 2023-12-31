<?php

namespace App\Events;

use App\Models\Lecturer;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class BulkLecturersCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $lecturer;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Lecturer $lecturer)
    {
        $this->lecturer = $lecturer;
    }

}
