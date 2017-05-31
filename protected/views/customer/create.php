		<div class="row">
            <div class="col-lg-4 col-lg-offset-4">
				<br>
				<h2>Create customer</h2>
				<br>
				<div class="form">
				<?php echo CHtml::beginForm(array('customer/store')); ?>				 
				    <?php echo CHtml::errorSummary($customer); ?>				 
				    <div class="row">
				        <?php echo CHtml::activeLabel($customer,'name'); ?>
				        <?php echo CHtml::activeTextField($customer,'name', ['class' => 'form-control']) ?>
				    </div>
				 	<br>
				 	<div class="row">
				        <?php echo CHtml::activeLabel($customer,'email'); ?>
				        <?php echo CHtml::activeTextField($customer,'email', ['class' => 'form-control']) ?>
				    </div>
				    <br>
				    <div class="row submit">				        
				        <?php echo CHtml::link('<i class="fa fa-arrow-left fa-fw"></i>Back', ['customer/index'], ['class' => 'btn btn-primary']) ?>
				        <?php echo CHtml::submitButton('Create +', ['class' => 'btn btn-success']); ?>
				    </div>				 
				<?php echo CHtml::endForm(); ?>
				</div>
			</div>
		</div>		