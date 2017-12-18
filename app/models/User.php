<?php
namespace app\models;
use core\lib\drive\db\pdo\Model;

/**
 * User model
 * @property integer $id
 * @property string $name
 * @property integer $age
 */
class User extends Model
{
    public static function tableName()
    {
        return 'user';
    }
}