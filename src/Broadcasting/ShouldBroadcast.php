<?php

namespace Quagga\Contracts\Broadcasting;

interface ShouldBroadcast
{
    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Quagga\Broadcasting\Channel|\Quagga\Broadcasting\Channel[]
     */
    public function broadcastOn();
}
