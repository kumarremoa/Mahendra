<!DOCTYPE html>
<html>
<head>

<title>My Dashboard | 99 Right Deals</title>

<!-- xxx Head Content xxx -->
<?php echo $this->load->view('common/head');?> 
<!-- xxx End xxx -->

<link rel="stylesheet" href="<?php echo base_url(); ?>j-folder/css/j-forms.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>css/innerpagestyles.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>libs/slider.css">

</head>

<body id="home">

<div class="preloader"><div class="status">&nbsp;</div></div> 

<div id="layout">

<!-- xxx tophead Content xxx -->
<?php echo $this->load->view('common/tophead'); ?> 
<!-- xxx End tophead xxx -->

<div class="section-title-01"><div class="bg_parallax image_01_parallax"></div></div>

<section class="content-central">
<div class="semiboxshadow text-center">
<img src="<?php echo base_url(); ?>img/img-theme/shp.png" class="img-responsive" alt="Shadow" title="Shadow view">
</div>
<div class="content_info">
<div class="paddings">
<div class="container">
<div class="row">
<div class="col-sm-3">
<div class="item-table">
<div class="header-table color-red">
<img src="<?php echo base_url(); ?>img/icons/user_pro.png" alt="user_pro" title="Profile" class="img-responsive pvt-no-img">
<h2><?php echo @$log_name; ?></h2>
</div>
<ul class="dashboard_tag">
<a href='<?php echo base_url(); ?>deals-status'>
<li><img src="<?php echo base_url(); ?>img/icons/status.png" alt="status" title="Deals">Deals Status</li>
</a>
<a href='<?php echo base_url(); ?>deals-administrator'>
<li><img src="<?php echo base_url(); ?>img/icons/admin.png" alt="admin" title="Admin">Deals Administrator</li>
</a>
<a href='<?php echo base_url(); ?>pickup-deals'>
<li><img src="<?php echo base_url(); ?>img/icons/pickup.png" alt="pickup" title="Pickup">Pickup deals</li>
</a>
<a href='<?php echo base_url(); ?>my-wishes'>
<li><img src="<?php echo base_url(); ?>img/icons/seaked.png" alt="favourites" title="Favourites">My Wishes</li>
</a>
<a href='<?php echo base_url(); ?>update-profile'>
<li><img src="<?php echo base_url(); ?>img/icons/updateprofile.png" alt="Update Profile" title="<?php echo base_url(); ?>updateprofile image"> Update Profile</li>
</a>
</ul>
<a class="btn color-red" href="<?php echo base_url(); ?>login/logout">Logout</a>
</div>
</div>
<form id="j-forms" action="#" class="j-forms" method="post">
<div class="col-md-9">
<div class="row">
<div class="col-sm-12">
<h2>Deals Administrator</h2>
<label>Hi <?php echo @$log_name; ?></label>
<hr>
</div>
</div>
<div class="sort-by-container tooltip-hover">
<div class="row">
<div class="col-md-9">
<strong>Sort by:</strong>
<ul>
<li class="deal_admin_top">
<div class="top_bar_top">
<label class="input select">
<select name="dealtitle_sort" class="dealtitle_sort">
<option value="Any">Title</option>
<option value="atoz">A to Z</option>
<option value="ztoa">Z to A</option>
</select>
<i></i>
</label>
</div>
</li>
<li class="deal_admin_top">
<div class="top_bar_top">
<label class="input select">
<select name="price_sort" class="price_sort">
<option value="Any">Pricing</option>
<option value="lowtohigh">Low to High</option>
<option value="hightolow">High to Low</option>
</select>
<i></i>
</label>
</div>
</li>
</ul>
</div>
<div class="col-md-3">
<ul class="style-view">
<li data-toggle="tooltip" title="" data-original-title="BOX VIEW">
<a href="<?php echo base_url(); ?>deals-administrator-box">
<i class="fa fa-th-large"></i>
</a>
</li>
<li data-toggle="tooltip" title="" data-original-title="LIST VIEW" class="active">
<a href="<?php echo base_url(); ?>deals-administrator">
<i class="fa fa-list"></i>
</a>
</li>
</ul>
</div>
</div>
</div>
<div class="first_box_list deals_search_result">
<?php  echo $this->load->view('classified/deals_administrator_box_search'); ?>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</section>

<!-- xxx footer Content xxx -->
<?php echo $this->load->view('common/footer');?> 
<!-- xxx footer End xxx -->

</div>

<script src="<?php echo base_url(); ?>js/jquery.js"></script> 
<script type="text/javascript">
$(function(){
/*search ato z / A to Z*/
$(".dealtitle_sort").change(function(){
var dealtitle = $(".dealtitle_sort option:selected").val();
var dealprice = $(".price_sort option:selected").val();
$.ajax({
type: "POST",
url: "<?php echo base_url();?>deals_administrator_box/my_ads_box_search",
data: {
dealtitle: dealtitle,
dealprice: dealprice
},
success: function (data) {
$(".deals_search_result").html(data);
}
})
});

$(".price_sort").change(function(){
var dealprice = $(".price_sort option:selected").val();
var dealtitle = $(".dealtitle_sort option:selected").val();
$.ajax({
type: "POST",
url: "<?php echo base_url();?>deals_administrator_box/my_ads_box_search",
data: {
dealtitle: dealtitle,
dealprice: dealprice
},
success: function (data) {
$(".deals_search_result").html(data);
}
})
});
});
</script>

<script src="<?php echo base_url();?>j-folder/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>libs/jquery.xuSlider.js"></script>

<script>
$('.xuSlider').xuSlider();
</script>

<script src="<?php echo base_url(); ?>js/jquery.nicescroll.js"></script> 
<script src="<?php echo base_url();?>libs/jquery.mixitup.min.js"></script>
<script src="<?php echo base_url();?>libs/main.js"></script>

<!-- xxx footerscript Content xxx -->
<?php echo $this->load->view('common/footerscript');?> 
<!-- xxx footerscript End xxx -->

</body>
</html>