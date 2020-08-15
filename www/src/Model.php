<?php
require_once '../config/eloquent.php';

use \Illuminate\Database\Eloquent\Model;

class Telegram extends Model {}
class User extends Model {
    public function telegram()
    {
        return $this->hasOne(Telegram::class);
    }
    public function publications()
    {
        return $this->hasMany(Publication::class);
    }
}
class Publication extends Model {
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
class Tag extends Model{
    public function publications()
    {
        return $this->belongsToMany(Publication::class);
    }
}