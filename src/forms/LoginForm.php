<?php

/**
 * @author Denis Utkin <dizirator@gmail.com>
 * @link   https://github.com/dizirator
 */

namespace setrun\user\forms;

use Yii;
use yii\base\Model;

/**
 * Class LoginForm.
 */
class LoginForm extends Model
{
    /**
     * @var string
     */
    public $username;

    /**
     * @var string
     */
    public $password;

    /**
     * @var bool
     */
    public $rememberMe = true;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username',  'password'], 'required'],
            ['rememberMe', 'boolean'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'username'   => Yii::t('setrun/user', 'Username'),
            'password'   => Yii::t('setrun/user', 'Password'),
            'rememberMe' => Yii::t('setrun/user', 'Remember me')
        ];
    }
}