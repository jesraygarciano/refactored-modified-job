<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    protected $appends = ['length'];

    public function getLengthAttribute(){
        $from = strtotime($this->attributes['from']);
        $to = strtotime($this->attributes['to']);

        $year = gmdate('Y', $to - $from);
        $month = gmdate('m', $to - $from);

        return ($year > 0 ? $year.' year(s)' : '').' '.($month > 0 ? $month.' month(s)':'');
    }
}
