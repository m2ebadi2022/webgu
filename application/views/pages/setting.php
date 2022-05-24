<div style="width: 95%;" class="container-fluid">

    <div class="card ">
        <div class="card-body">
            <h5 class="card-title"> سیستم نگهبانی ورژن 1.2</h5>
            <p class="card-text"> صفحه تنظیمات</p>
            
           

            
        </div>
    </div>
    <br><br>

    <p class="text-right">آخرین ورود شما : <?php  echo $user_setting['0']['last_login'];?></p>


    <div class="card ">
        <div class="card-body">
            <h5 class="card-title"> تغییر رمز ورود</h5>
            <h5 class="card-title"> نام کاربری : <?php echo $user[0]['username'];  ?></h5>
            <form method="POST" class="form-inline" oninput='pass2.setCustomValidity(pass2.value != pass1.value ? "عدم مطابقت" : "")'>
                <label for="pass1">رمز:</label>
                <input type="password" class="form-control" id="pass1" placeholder="رمز جدید" name="pass1" required>
                <label for="pass2">تکرار:</label>
                <input type="password" class="form-control" id="pass2" placeholder="تکرار رمز" name="pass2" required>
                
                <button type="submit" class="btn btn-primary" name="save_pass">ذخیره</button>
            </form>
        </div>
    </div>



    <div class="card ">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    <h4 class="card-title">تغییر عکس پروفایل</h4>
                    <?php echo form_open_multipart('http://'.base_url().'home/page/6');?>
                        <input type="file" name="userfile" accept=".jpg" />
                        <br /><br />
                        <input type="submit" value="ذخیره" name="save_pic" /> <?php echo( $error);?>
                    </form>

                </div>
                <div class="col-sm-2">
                    <img style="vertical-align: middle; width: 50px; height: 50px; border-radius: 50%;" alt="Image avatar" src="http://<?php echo base_url().'assets/pics/avatar/'.$user[0]['avatar']; ?>">
                </div>
            </div>
        </div>
    </div>

                 






</div>