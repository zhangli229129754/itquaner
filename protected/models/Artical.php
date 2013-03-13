<?php

/**
 * This is the model class for table "{{artical}}".
 *
 * The followings are the available columns in table '{{artical}}':
 * @property integer $id
 * @property string $title
 * @property string $source
 * @property integer $user_id
 * @property string $user_name
 * @property string $add_time
 * @property string $update_time
 */
class Artical extends XActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Artical the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{artical}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, source', 'required'),
			array('id, user_id', 'numerical', 'integerOnly'=>true),
			array('title, source, img', 'length', 'max'=>255),
			array('user_name', 'length', 'max'=>30),
			array('user_id', 'default', 'value'=>Yii::app()->user->id),
			array('user_id', 'default', 'value'=>Yii::app()->user->name),
			array('source', 'url', 'allowEmpty'=>true),
			array('add_time, update_time', 'safe'),
			array('add_time,update_time', 'default', 'value'=>date('Y-m-d H:i:s', time())),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, source, user_id, user_name, add_time, update_time', 'safe', 'on'=>'search'),
			
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'content' => array(self::HAS_ONE, 'ArticalContent', 'artical_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => '标题',
			'source' => '来源网址',
			'img' => '缩略图',
			'user_id' => '转载用户',
			'user_name' => '转载用户',
			'add_time' => '转载时间',
			'update_time' => '最后更新时间',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search($pageSize=10)
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('source',$this->source,true);
		$criteria->compare('img',$this->img,true);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('user_name',$this->user_name,true);
		$criteria->compare('add_time',$this->add_time,true);
		$criteria->compare('update_time',$this->update_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			'pagination'=>array(
				'pageSize'=>$pageSize,
			),
			'sort'=>array(
				'defaultOrder'=>'id desc',
			),
		));
	}
}