<?php

namespace App\Observers;

class CommonObserver
{
    /**
     * @param $model
     */
    public function updating($model)
    {
        if (auth()->check()) {
            $model->user_id = auth()->user()->id;
        }
    }

    /**
     * @param $model
     */
    public function creating($model)
    {
        if (auth()->check()) {
            $model->user_id = auth()->user()->id;
        }
    }
}