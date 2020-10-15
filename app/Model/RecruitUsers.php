<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property boolean $status
 * @property string $created_at
 * @property string $updated_at
 * @property string $lastlogintime
 */
class RecruitUsers extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'phone', 'email', 'password', 'remember_token', 'status', 'created_at', 'updated_at', 'lastlogintime'];

}
