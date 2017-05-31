		<div class="row">
            <div class="col-lg-8 col-lg-offset-2">
				<h2>Customer's List</h2>
				<?php echo CHtml::link('<i class="fa fa-plus fa-fw"></i>Create customer', ['customer/create'], ['class' => 'btn btn-success']) ?>
				<table class="table table-bordered table-striped" style="margin-top: 1%;">
					<tr>
					    <th>Name</th>
					    <th>E-mail</th>
					    <th colspan="2">Actions</th>
					</tr>
					<?php foreach ($customers as $customer) { ?>
					<tr>				
					    <td><?php echo $customer->name; ?></td>
					    <td><?php echo $customer->email; ?></td>
					    <td>
					    	<a class="update" title="Show" href="/customer/show/<?php echo $customer->id; ?>"><i class="fa fa-search fa-fw"></i></a>
					    	<a class="update" title="Update" href="/customer/edit/<?php echo $customer->id; ?>"><i class="fa fa-pencil-square-o fa-fw"></i></a>
					      	<a class="delete" title="Delete" href="/customer/delete/<?php echo $customer->id; ?>"><i class="fa fa-trash-o fa-fw"></i></a>
					    </td>
					</tr>					
					<?php } ?>
				</table>				
			</div>
		</div>		
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script>
			$( document ).ready(function() {
    			$("#dialog-confirm").hide();
			});

			$(".delete").click(function(event) {
        		event.preventDefault();
        		var href = $(this).attr('href');
        		$("#dialog-confirm").dialog({
		        	resizable: false,
		      		height: "auto",
		      		width: 400,
		      		modal: true,
		      		buttons: {
		    	    	"Delete": function() {
		          			$(this).dialog("close");		          			
      						window.location.href = href;
		        		},
		        		Cancel: function() {
			          		$(this).dialog("close");
		        		}
		      		}
		    	});
        	});		    
		</script>
 
		<div id="dialog-confirm" title="Delete customer?">
			<p><span class="ui-icon ui-icon-alert" style="float:left; margin:12px 12px 20px 0;"></span>These customer will be permanently deleted and cannot be recovered. Are you sure?</p>
		</div>