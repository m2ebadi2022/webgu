
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-primary  ">
  <a style="text-align: center;" class="navbar-brand" href="http://<?php echo base_url(); ?>home">شرکت آذرفدک شبستر<span style="font-size:12px; "><br>( سیستم نگهبانی )</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarColor01">
  
    <ul id="mycllas" class="navbar-nav mr-auto ">
    
      <?php if ($privlege[0]['admin']==1): ?>
        <li class="nav-item <?php if(isset($page) && $page=='admin'){echo "active";}  ?>">
          <a class="nav-link" href="http://<?php echo base_url(); ?>home/page/admin">ادمین</a>
        </li>
      <?php endif; ?>

      <?php if ($privlege[0]['afrad_read']==1): ?>
      <li class="nav-item <?php if(isset($page) && $page==1){echo "active";}  ?>">
        <a class="nav-link" href="http://<?php echo base_url(); ?>home/page/1">افراد</a>
      </li>
      <?php endif; ?>

      <?php if ($privlege[0]['modiran_read']==1): ?>
      <li class="nav-item <?php if(isset($page) && $page==2){echo "active";}  ?>">
        <a class="nav-link" href="http://<?php echo base_url(); ?>home/page/2">مدیران ارشد</a>
      </li>
      <?php endif; ?>

      <?php if ($privlege[0]['khodro_read']==1): ?>
      <li class="nav-item <?php if(isset($page) && $page==3){echo "active";}  ?>">
        <a class="nav-link" href="http://<?php echo base_url(); ?>home/page/3"> بارگیری و تخلیه (خودرو)</a>
      </li>
      <?php endif; ?>

      <?php if ($privlege[0]['amval_read']==1): ?>
      <li class="nav-item <?php if(isset($page) && $page==4){echo "active";}  ?>">
          <a class="nav-link" href="http://<?php echo base_url(); ?>home/page/4">اموال</a>
      </li>
      <?php endif; ?>

      <?php if ($privlege[0]['aghlam_read']==1): ?>
      <li class="nav-item <?php if(isset($page) && $page==7){echo "active";}  ?>">
          <a class="nav-link" href="http://<?php echo base_url(); ?>home/page/7">ورود اقلام مصرفی</a>
      </li>
      <?php endif; ?>

      <?php if ($privlege[0]['khozestan_read']==1): ?>
      <li class="nav-item <?php if(isset($page) && $page==8){echo "active";}  ?>">
          <a class="nav-link" href="http://<?php echo base_url(); ?>home/page/8">آذرفدک خوزستان</a>
      </li>  
      <?php endif; ?>

      <?php if ($privlege[0]['khodro_pey_read']==1): ?>
      <li class="nav-item <?php if(isset($page) && $page==9){echo "active";}  ?>">
        <a class="nav-link" href="http://<?php echo base_url(); ?>home/page/9"> بارگیری و تخلیه خودرو (پیمانکار)</a>
      </li>
      <?php endif; ?>

    </ul>

  </div>
  <div class="dropdown">         
    <a class="btn btn-primary " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding-top: 15px;">
    <i class='far fa-arrow-alt-circle-down' style='font-size:24px'></i>
    </a>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="http://<?php echo base_url(); ?>home/page/5">درباره</a>
      <a class="dropdown-item" href="http://<?php echo base_url(); ?>home/page/6">تنظیمات</a>
      
      <?php if ($privlege[0]['afrad_write']==1): ?>
        <form method="POST">
          <input class="dropdown-item" type="submit" name="backup_now" value="پشتیبان گیری" />
        </form>
      <?php endif; ?>

      <a class="dropdown-item" href="#" data-toggle="modal" data-target="#exitModal">خروج</a>
    </div>
  </div>
  <div> <?php echo $user[0]['name'].' '.$user[0]['famili']; ?> </div>
  <a href="javascript:;" class="avatar avatar-lg rounded-circle" data-toggle="tooltip" data-placement="bottom" title="<?php echo $user[0]['name'].' '.$user[0]['famili']; ?>">
    <img style="vertical-align: middle; width: 50px; height: 50px; border-radius: 50%;" alt="Image avatar" src="http://<?php echo base_url().'assets/pics/avatar/'.$user[0]['avatar']; ?>">
  </a>
              
</nav><div class="d-print-none"><br><br><br><br><br></div>
        

    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exitModal" tabindex="-1" role="dialog" aria-labelledby="exitModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exitModalLabel">خروج از سیستم</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        آیا از سیستم خارج می شوید؟
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">خیر</button>
        <a type="button" class="btn btn-primary" href="http://<?php echo base_url(); ?>login?logout=1">بله</a>
      </div>
    </div>
  </div>
</div>

<?php  
  if (isset($develop)){
    echo '<pre style="background-color: bisque; border: 2px solid black;"><h2 align="center">Development Box</h2>';

  var_dump($develop);
    echo "</pre>";
  }
?>