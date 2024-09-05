<?php

trait Logger
{
    public function log($message)
    {
        // Log a message
        echo "LOG: " . $message;
    }
}