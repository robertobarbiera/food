<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model->user); ?>

	<div class="row">
		<?php echo $form->labelEx($model->user,'username'); ?>
		<?php echo $form->textField($model->user,'username',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model->user,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model->user,'password'); ?>
		<?php echo $form->passwordField($model->user,'password',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model->user,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model->user,'email'); ?>
		<?php echo $form->textField($model->user,'email',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model->user,'email'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->user->isNewRecord ? 'Create' : 'Save'); ?>
	</div>
	
<!-- RUOLI AZIENDA -->
		<fieldset>
			<legend>Ruoli</legend>
	<div class="wide form">

<?php echo $form->hiddenField($model,'company_id',array()); ?>
<label class="required" for="UserForm_company_name">Company:<span class="required">*</span></label>
<?php $this->widget('zii.widgets.jui.CJuiAutoComplete',
    array(
      'model'=>$model,
      'attribute'=>'company_name',
      'source'=>$this->createUrl('user/autocompleteCompany'),
      'htmlOptions'=>array('placeholder'=>'Any'),
      'options'=>
         array(
               'showAnim'=>'fold',
               'select'=>"js:function(company, ui) {
                  $('#UserForm_company_id').val(ui.item.id);
                         }"
                ),
      'cssFile'=>false,
    )); ?>


		<?php echo CHtml::dropDownList('listname', 
									   $model->cod_role, 
				                       CHtml::listData(Role::model()->findAll(), 
                                                       'cod_role', 
                                                       'descriptionLang')
         ); ?>

	
		<?php echo CHtml::submitButton('Aggiungi azienda', array(
               'submit' =>
				$this->createUrl('user/addCompany', array('id' => $model->user->oid)),
				'type' => 'POST', )
		); ?>
		</div>
		<?php echo $form->errorSummary($model); ?>	
	    
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-company-grid',
	'dataProvider'=>$model->user->searchUserCompanies(),
	'columns'=>array(
		'companyName',
		'roleDescription',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{delete}',
			'deleteConfirmation'=>"js:'Record with ID '+$(this).parent().parent().children(':first-child').text()+' will be deleted! Continue?'",
			'deleteButtonUrl' => 'Yii::app()->createUrl("user/deleteCompany", array("id"=>$data->oid))'
				
		),
	),
)); ?>
</fieldset>
	
	
<?php $this->endWidget(); ?>

</div><!-- form -->