		<div class="row">
            <div class="col-lg-4 col-lg-offset-4">
				<br>
				<h2>Customer data</h2>
				<br>
				<p><b>Name: </b><?php echo $customer->name; ?></p>
				<p><b>E-mail:</b> <?php echo $customer->email; ?></p>
				<?php foreach ($contacts as $contact): ?>
					<p><b>Contact: </b><?php echo $contact->phone; ?></p>
				<?php endforeach ?>
				<br>
				<?php echo CHtml::link('<i class="fa fa-arrow-left fa-fw"></i>Back', ['customer/index'], ['class' => 'btn btn-primary']) ?>
			</div>
		</div>