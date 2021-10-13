<?php
class Users extends CActiveRecord
{
    /**
     * Returns the static model of the specified AR class.
     * @property integer $id
     * @property string $username
     * @property integer password
     */
     public function rules()
     {
         return array(
             array('username','password','required'),
             array('username','length', 'max'=>50),
             array('password','length','max'=>32),
             array('id, username, password','safe', 'on'=>'search'),
         );
     }
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tablename()
    {
        return 'users';
    }


}


?>