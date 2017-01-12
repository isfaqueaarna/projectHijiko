<!doctype html>
<html ng-app="hijiko">
<head>
<meta charset="utf-8">
<title>:: Hi Jiko ::</title>
<link href="<?php echo base_url();?>assets/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

<!-- angular Toast -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/angulartoast/angular-toastr.min.css">


<script src="<?php echo base_url();?>assets/js/jquery-1.12.3.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script>

<!-- Angular JS -->
<script src="<?php echo base_url();?>assets/angular/angular.min.js"></script>
<script src="<?php echo base_url();?>assets/angularCtrl/appCtrls.js"></script>
<script src="<?php echo base_url();?>assets/angular/ng-file-upload.min.js"></script>
<script src="<?php echo base_url();?>assets/angular/ng-file-upload-shim.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/lodash.js/2.4.1/lodash.min.js"></script>

<!-- Angular Toast -->
<script src="<?php echo base_url();?>assets/angulartoast/angular-toastr.tpls.min.js"></script>

<!--product tab materials-->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/easy-responsive-tabs.css">
<script src="<?php echo base_url();?>assets/js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>

<!--owl carousel-->

    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.theme.default.min.css" />
    
    <!-- javascript -->
    <script src="<?php echo base_url();?>assets/js/owl.carousel.js"></script>
   
          
          
          <script>
            $(document).ready(function() {
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                margin: 10,
                nav: true,
                loop: true,
				 autoplay: true,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 3
                  },
                  1000: {
                    items: 3
                  }
                }
              })
            })
          </script>

</head>

<body>
</script>
<script>
var main_url = '<?php echo base_url();?>';
</script>