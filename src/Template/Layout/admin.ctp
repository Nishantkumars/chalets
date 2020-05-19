<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>List of Chalets</title>
    <?= $this->Html->meta('icon') ?>

   
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <?= $this->Html->css('admin/bootstrap.min.css') ?>
    <?= $this->Html->css('admin/font-awesome.min.css') ?>
    <?= $this->Html->css('admin/nprogress.css') ?>
    <?= $this->Html->css('admin/green.css') ?>
   <!--  <?= $this->Html->css('admin/prettify.min.css') ?> -->
   <!--  <?= $this->Html->css('admin/select2.min.css') ?> -->
    <?= $this->Html->css('admin/switchery.min.css') ?>
    <!-- <?= $this->Html->css('admin/starrr.css') ?> -->
   <!--  <?= $this->Html->css('admin/daterangepicker.css') ?> -->
   <?= $this->Html->css('admin/dataTables.bootstrap.min.css') ?>
   <?= $this->Html->css('admin/buttons.bootstrap.min.css') ?>
   <?= $this->Html->css('admin/fixedHeader.bootstrap.min.css') ?>
   <?= $this->Html->css('admin/responsive.bootstrap.min.css') ?>
   <?= $this->Html->css('admin/scroller.bootstrap.min.css') ?>
    <?= $this->Html->css('admin/custom.min.css') ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.container1 input[type=text] {
padding:5px 0px;
margin:5px 5px 5px 0px;
}


.add_form_fieldx
{
    background-color: #1c97f3;
    border: none;
    color: white;
    padding: 8px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border:1px solid #186dad;

}
    
    .add_form_field_Photox
{
    background-color: #1c97f3;
    border: none;
    color: white;
    padding: 8px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border:1px solid #186dad;

}

input {
    border: 1px solid #cccccc;
    width: 95%;
    margin: 5px;
    padding: 5px;
}

.delete{
    background-color: #E74C3C;
    border: none;
    color: white;
    padding: 2px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    margin: 4px 2px;
    cursor: pointer;

}
</style>
  </head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
        <?= $this->element('menu');?>
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
         
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <!-- <?= $this->Html->script('admin/jquery.min.js') ?> -->
  <?= $this->Html->script('admin/bootstrap.min.js') ?>
  <?= $this->Html->script('admin/fastclick.js') ?>
  <?= $this->Html->script('admin/nprogress.js') ?>
  <?= $this->Html->script('admin/icheck.min.js') ?>
  <?= $this->Html->script('admin/switchery.min.js') ?>
  <?= $this->Html->script('admin/jquery.dataTables.min.js') ?>
  <?= $this->Html->script('admin/dataTables.bootstrap.min.js') ?>
 <!--  <?= $this->Html->script('admin/dataTables.buttons.min.js') ?> -->
  <?= $this->Html->script('admin/buttons.bootstrap.min.js') ?>
 <!--  <?= $this->Html->script('admin/buttons.flash.min.js') ?> -->
 <!--  <?= $this->Html->script('admin/buttons.html5.min.js') ?> -->
 <!--  <?= $this->Html->script('admin/buttons.print.min.js') ?> -->
 <!--  <?= $this->Html->script('admin/dataTables.fixedHeader.min.js') ?> -->
 <!--  <?= $this->Html->script('admin/dataTables.keyTable.min.js') ?> -->
  <!-- <?= $this->Html->script('admin/dataTables.responsive.min.js') ?> -->
  <?= $this->Html->script('admin/responsive.bootstrap.js') ?>
 <!--  <?= $this->Html->script('admin/dataTables.scroller.min.js') ?> -->
  <!-- <?= $this->Html->script('admin/jszip.min.js') ?>
  <?= $this->Html->script('admin/pdfmake.min.js') ?>
  <?= $this->Html->script('admin/vfs_fonts.js') ?> -->
  <?= $this->Html->script('admin/validator.js') ?>
  <?= $this->Html->script('admin/custom.min.js') ?>
  <script>
$(document).ready(function() {
    var max_fields      = 50;
    var wrapper         = $(".container_Photo"); 
    var add_button      = $(".add_form_field_Photo"); 
    
    var x = 1; 
    $(add_button).click(function(e){ 
        e.preventDefault();
        if(x < max_fields){ 
            x++; 
            $(wrapper).append('<div><input type="file" name="myImage" accept="image/*" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" /><a href="#" class="delete">Delete</a><div class="ln_solid"></div>'); //add input box
        }
        else
        {
        alert('You Reached the limits')
        }
    });
    
    $(wrapper).on("click",".delete", function(e){ 
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
    
    
    
    
    
    
    $(document).ready(function() {
    var max_fields      = 50;
    var wrapper         = $(".container1"); 
    var add_button      = $(".add_form_field"); 
    
    var x = 1; 
    $(add_button).click(function(e){ 
        e.preventDefault();
        if(x < max_fields){ 
            x++; 
            $(wrapper).append('<div><input style="padding: 5px" class="form-control" type="text" name="mytext[]"><a href="#" class="delete">Delete</a><div class="ln_solid"></div>'); //add input box
        }
        else
        {
        alert('You Reached the limits')
        }
    });
    
    $(wrapper).on("click",".delete", function(e){ 
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
    
    
    

</script>
      
</body>
</html>
