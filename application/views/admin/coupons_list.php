	<div id="content" class="span9">
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="<?php echo base_url();?>admin_dashboard">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="">Coupons List</a></li>
			</ul>
			<div class='msg'></div>
			<div class='err'></div>
<?php if($this->session->flashdata('err') != ''){?>
                 <div class="alert alert-block alert-danger fade in">
                     <button data-dismiss="alert" class="close" type="button">
                       ×
                     </button>
                     <p>
                       <?php echo ($this->session->flashdata('err'))?$this->session->flashdata('err'):''?>
                     </p>
                 </div>
             <br>
             <?php }?>
			 <?php if($this->session->flashdata('msg') != ''){?>
                 <div class="alert alert-block alert-info fade in no-margin">
                     <button data-dismiss="alert" class="close" type="button">
                       ×
                     </button>
                     <p>
                       <?php echo ($this->session->flashdata('msg'))?$this->session->flashdata('msg'):''?>
                     </p>
                 </div>
             <br>
             <?php }?>
			 <?php //echo '<pre>';print_r($coupons_list[0]);echo '</pre>';?>
			 <div style='margin-bottom:10px;margin-right:25px; float:right;' > 
			 <a href='<?php echo base_url();?>coupons/AddCoupon' class='btn btn-success'>Add New</a></div>
			 
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white user"></i><span class="break"></span>List of Coupons</h2>
						<div class="box-icon">
							<!--<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>-->
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
                        <thead>
                            <tr>
								<th>Coupon Code</th>
								<th>Added By</th>
                                <th>Added On</th>
								<!--<th>Coupon Type</th>
								<th>Coupon Value</th>
							
								<th>Maximum Discount</th>-->
								<th>Status</th>
                                <th style='width:55px;'>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0;
                            foreach($coupons_list as $coup){$i++; ?>
                            <tr class="odd gradeX">
							
								<td><?php echo ucwords($coup->c_code);?></td>
								<td><?php echo ucwords($coup->first_name).'&nbsp;'.ucwords($coup->lastname);?></td>
								<td><?php echo $coup->added_on;?></td>
								<!--<td><?php if($coup->c_type_percent_cash == 'p')echo 'Percentage'; else echo 'Amount';?></td>
								<td><?php echo $coup->c_value;?></td>
								<td><?php echo $coup->max_disc;?></td>-->
								<td id='act_status<?php echo $coup->c_id;?>'><?php if($coup->c_status == 1)echo 'Active'; else echo 'In-Active';?></td>
								<td id='status<?php echo $coup->c_id; ?>'>
										<?php if($coup->c_status == 1){?><span class='btn btn-success'><i class="halflings-icon minus-sign active_coupon  white" id='coupon_<?php echo $coup->c_id; ?>'title="In-Activate Coupon "></i></span>
										<?php }else{?>
											<span class='btn btn-danger'><i class="halflings-icon plus-sign inactive_coupon white" id='coupon_<?php echo $coup->c_id; ?>'title="Activate Coupon "></i></span>
										<?php }?>
									&nbsp;
									<!--<a class="btn btn-danger "  href="<?php echo base_url();?>coupons/editCoupon/<?php echo $coup->c_id;?>" title="Edit Coupon Details">
										<i class="halflings-icon white trash" style='width:10px; height:12px'></i>
									</a>-->
								</td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script>
$('.active_coupon').click(function(){
	var c_id = this.id;
	var c_array = c_id.split("_");
	var coupon = c_array[1];
		$.ajax({
				type: "POST",
				url: "<?php echo base_url();?>coupons/change_status",
				data: {
					coupon: coupon,
					status: 0,
				},
				success: function (data) {
					//var status = "<span class='btn btn-success'><i class='halflings-icon minus-sign active_coupon  white' id='coupon_"+coupon+"'title='In-Activate Coupon'></i></span>";
					//alert(status);
					//$( "#coupon_"+coupon).removeClass( "active_coupon" );
					//$( "#coupon_"+coupon).addClass( "inactive_coupon" );
					//$( "p" ).last().addClass( "selected" );
					//$('#status'+coupon).html('');
					$('#status'+coupon).html(data);
					$('#act_status'+coupon).html('In-Active');
					$('.msg').html('<div class="alert alert-block alert-info fade in"><button data-dismiss="alert" class="close" type="button">×</button><p>Coupoun Code has successfully InActivated </p></div>');   
                }
				
});
});
$('.inactive_coupon').click(function(){
	var c_id = this.id;
	var c_array = c_id.split("_");
	var coupon = c_array[1];
	$.ajax({
		type: "POST",
		url: "<?php echo base_url();?>coupons/change_status",
		data: {
			coupon: coupon,
			status: 1,
		},
		success: function (data) {
			$('#status'+coupon).html(data);
			$('#act_status'+coupon).html('Active');
			$('.msg').html('<div class="alert alert-block alert-info fade in"><button data-dismiss="alert" class="close" type="button">×</button><p>Coupoun Code has successfully Activated </p></div>');   
		}
	});
});
</script>
<!-- end DASHBOARD CIRCLE TILES -->