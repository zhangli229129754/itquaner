<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/common.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
</head>

<body>

<?php $this->widget('bootstrap.widgets.TbNavbar',array(
	'type'=>'inverse',
	'brand'=>'<img src="/css/images/logo.png"> | 互联网技术分享专题',
	'collapse'=>true,
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
			'type'=>'inverse',
            'items'=>array(
                //array('label'=>'首页', 'url'=>array('/index/index')),
				array('label'=>'全部文章', 'url'=>array('/artical/index')),
				//array('label'=>'提交文章', 'url'=>'#myModal', array('data-toggle'=>'myModal')),
                array('label'=>'关于我们', 'url'=>array('/site/page', 'view'=>'about')),
                //array('label'=>'关于我们', 'url'=>array('/site/contact')),
                //array('label'=>'登录', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                //array('label'=>'退出 ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),

		array(
            'class'=>'bootstrap.widgets.TbMenu',
            'htmlOptions'=>array('class'=>'pull-right'),
            'items'=>array(
                array('label'=>'('.Yii::app()->user->name.') 退出', 'url'=>array('/logout'), 'visible'=>!Yii::app()->user->isGuest), 
                array('label'=>'登录', 'url'=>'#', 'visible'=>Yii::app()->user->isGuest,
				'items'=>array(
                    array('label'=>'新浪微博', 'url'=>array('/weibo'), ),
                    //array('label'=>'腾讯微博', 'url'=>'#'),
                    //array('label'=>'', 'url'=>'#'),
                    //'---',
                    //array('label'=>'Separated link', 'url'=>'#'),
                )),
            ),
        ),
    ),
)); ?>


<div class="container" id="page">

	<?php echo $content; ?>

	<div class="clear"></div>

</div><!-- page -->


<footer>
	页脚<br/>
	页脚<br/>
	<?php echo Yii::powered(); ?>
</footer><!-- footer -->
</body>
</html>
