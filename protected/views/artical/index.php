<div class="row">
    <div class="span9">
        <div id="content">
			<?php
			
			$this->breadcrumbs=array(
				'Articals'=>array('index'),
			);
			?>
			<?php if(isset($this->breadcrumbs)):?>
			<?php 
				$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
					'links'=>$this->breadcrumbs,
			)); 
			?><!-- breadcrumbs -->
			<?php endif?>


			<?php
				foreach($dataProvider->data as $item){
			?>
			<div class="media">
				<?php if($item->img){ ?>
				<a class="pull-left" href="#">
					<img class="img-polaroid" src="<?php echo $item->img; ?>" width="200" height="100">
				</a>
				<?php } ?>
				<div class="media-body">
					<h2 class="media-heading"><?php echo $item->title; ?></h2>  
					<p><?php echo $item->content->content; ?></p>
					<a class="btn" href="">read more...<i class="icon-chevron-right"></i></a>
				</div>
				
			</div>

			<div class="page-header"></div>
			<?php
				}
			?>
			<div class="pagination pagination-large">
				<?php $this->widget('XLinkPager', array(
					'pages' => $dataProvider->pagination,
					'header' => '',
					'maxButtonCount'=>6,
					'selectedPageCssClass'=>'disabled',
					'htmlOptions'=>array('class'=>''),
				)) ?>
			</div>

        </div><!-- content -->
    </div>
    <div class="span3">
        <div id="sidebar">
			<?php $this->beginWidget('bootstrap.widgets.TbModal', array('id'=>'myModal')); ?>
 
			<div class="modal-header">
				<a class="close" data-dismiss="modal">&times;</a>
				<h4>分享我觉得不错的文章</h4>
			</div>
			 
			<div class="modal-body">
				<?php echo $this->renderPartial('_form', array('modelArtical'=>$modelArtical, 'modelContent'=>$modelContent)); ?>
			</div>
			 
			<div class="modal-footer">
				<?php 
					/*				
					$this->widget('bootstrap.widgets.TbButton', array(
						'type'=>'primary',
						'label'=>'Save changes',
						'url'=>'#',
						'htmlOptions'=>array('data-dismiss'=>'modal'),
					)); 
					*/
				?>
				<?php $this->widget('bootstrap.widgets.TbButton', array(
					'label'=>'Close',
					'url'=>'#',
					'htmlOptions'=>array('data-dismiss'=>'modal'),
				)); ?>
			</div>
			 
			<?php $this->endWidget(); ?>
			<?php 
				$this->widget('bootstrap.widgets.TbButton', array(
					'label'=>'分享我觉得不错的文章',
					'type'=>'',
					'htmlOptions'=>array(
						'class' => 'btn-large btn-block btn-warning',
						'data-toggle'=>'modal',
						'data-target'=>'#myModal',
					),
				)); 
			?>
        </div><!-- sidebar -->
    </div>
</div>

















