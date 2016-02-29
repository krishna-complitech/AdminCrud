<?php

namespace Illuminate\Foundation\Testing;

trait DatabaseTransactions
{
    /**
     * @before
     */
    public function beginDatabaseTransaction()
    {
        $this->afterApplicationCreated(function () {
            $this->app->make('db')->beginTransaction();
        });

        $this->beforeApplicationDestroyed(function () {
            $this->app->make('db')->rollBack();
        });
    }
}
