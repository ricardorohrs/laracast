<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model {
    use HasFactory;

    /**
     * @var bool|mixed
     */
    private $completed;

    public function complete() {
        $this->completed = true;
        $this->save();
    }
}
