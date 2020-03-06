<?php

namespace games\model;
use Illuminate\Database\Eloquent\Model;


class Game extends Model
{
    protected $table = "game";
    protected $primaryKey = "id";
    public $timestamps = false;

    public function Personnages() {
        return $this->belongsToMany('games\model\Character',
             'game2character', 'character_id', 'game_id');
    }

    public function CompanyDev() {
        return $this->belongsToMany('games\model\Company',
            'game_developers', 'comp_id', 'game_id');
    }
}