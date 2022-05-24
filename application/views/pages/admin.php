<div style="width: 95%;" class="container-fluid">

    <div class="card">
       
        <div class="card-body">
            <h4 class="card-title">صفحه ادمین</h4> <br>
            <a class="btn btn-primary"  href="http://<?php echo site_url('home/page/helpdesk'); ?>">ثبت  درخواست ها</a>
        </div>
    </div>

    <?php if ($privlege[0]['admin']==1): ?>
     <!-- Nav tabs -->
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#msg">پیام ها</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#users"> کاربران</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#privlege">دسترسی ها</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#setting">تنظیمات</a>
    </li>

  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="msg" class=" tab-pane active"><br>
      <h3>پیام ها</h3>
      <div class="table-responsive">
      <table class="table">
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col">تاریخ - ساعت</th>
                <th scope="col">ip</th>
                <th scope="col">کاربر </th>
                <th scope="col">نام </th>
                <th scope="col"> پیام</th>
                <th scope="col"> پاسخ</th>
                <th scope="col">ویرایش</th>
                
                </tr>
            </thead>
            <tbody>
            <?php  foreach ($data_msgs as $item): ?>
                <tr>
                    <th scope="row"><?=$item['id'] ?></th>
                    <td><?=$item['date'] ?></td>
                    <td><?=$item['ip'] ?></td>
                    <td><?=$item['user'] ?></td>
                    <td><?=$item['name'] ?></td>
                    <td><?=$item['matn'] ?></td>
                    <td><?=$item['pasokh'] ?></td>

                    <td>
                    <a class="btn" target="popup" onclick="window.open('http://<?php echo base_url(); ?>home/edit?p=<?=$page ?>&tab=msg&id=<?=$item['id'] ?>','popup_edit','toolbar=no,scrollbars=no,resizable=0,top=200,left=500,width=650,height=500')">
                    <i class='far fa-edit' style='font-size:24px'></i></a>
                </td>
                    
                </tr>
            <?php endforeach;  ?>
            </tbody>
        </table>
      </div>
    </div>

    <div id="users" class=" tab-pane fade"><br>
      <h3>کاربران
      <button class="btn btn-primary" data-toggle="modal" data-target="#Add_User_Modal">افزودن</button>
      </h3>
      <div class="table-responsive">
      <table class="table">
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col">نام</th>
                <th scope="col">فامیل</th>
                <th scope="col">نام کاربری</th>
                <th scope="col">پسورد</th>
                <th scope="col">عکس</th>
                <th scope="col">آخرین ورود</th>
                <th scope="col">وضعیت</th>
                <th scope="col">ویرایش</th>
                </tr>
            </thead>
            <tbody>
            <?php  foreach ($data_users as $item): ?>
                <tr>
                    <th scope="row"><?=$item['id'] ?></th>
                    <td><?=$item['name'] ?></td>
                    <td><?=$item['famili'] ?></td>
                    <td><?=$item['username'] ?></td>
                    <td><?=$item['password'] ?></td>
                    <td> <img style="vertical-align: middle; width: 50px; height: 50px; border-radius: 15px;" alt="Image avatar" src="http://<?php echo base_url('assets/pics/avatar/').$item['avatar']; ?>" data-toggle="tooltip" data-placement="bottom" title="<?=$item['avatar'] ?>"> </td>
                    <td><?=$item['last_login'] ?></td>
                    <td>
                    <?php if($item['state']==0) {echo 'غیر فعال';} elseif($item['state']==1) {echo 'فعال';} elseif($item['state']==2) {echo 'قفل شده';} ?>
                    </td>
                    <td>
                        <a class="btn" target="popup" onclick="window.open('http://<?php echo base_url(); ?>home/edit?p=<?=$page ?>&tab=user&id=<?=$item['id'] ?>','popup_edit','toolbar=no,scrollbars=no,resizable=0,top=200,left=500,width=650,height=500')">
                        <i class='far fa-edit' style='font-size:24px'></i></a>
                    </td>
                </tr>
            <?php endforeach;  ?>
            </tbody>
        </table>
      </div>

    </div>
    <div id="privlege" class=" tab-pane fade"><br>
      <h3>دسترسی ها
      <button class="btn btn-primary" data-toggle="modal" data-target="#Add_priv_Modal">افزودن</button>
      </h3>
      
      
      <div class="table-responsive">
      <table class="table" >
            <thead >
                <tr >
                    <th scope="col"><p style="text-align: center;">یوزر </p></th>
                    <th scope="col"><p style="text-align: center;"> مدیر سیستم</p></th>

                    <th scope="col"><p style="text-align: center;">
                        افراد<br><span style="font-size: small;"> دیدن|ویرایش</span></p>
                    </th>
                    <th scope="col"><p style="text-align: center;">
                    مدیران<br><span style="font-size: small;"> دیدن|ویرایش</span></p>
                    </th>
                    <th scope="col"><p style="text-align: center;">
                    خودرو<br><span style="font-size: small;"> دیدن|ویرایش</span></p>
                    </th>
                    <th scope="col"><p style="text-align: center;">
                    اموال<br><span style="font-size: small;"> دیدن|ویرایش</span></p>
                    </th>
                    <th scope="col"><p style="text-align: center;">
                    اقلام<br><span style="font-size: small;"> دیدن|ویرایش</span></p>
                    </th>
                    <th scope="col"><p style="text-align: center;">
                    خوزستان<br><span style="font-size: small;"> دیدن|ویرایش</span></p>
                    </th>
                    <th scope="col"><p style="text-align: center;">ویرایش</p></th>


                </tr>
            </thead>
            <tbody>
            <?php 
            $ok_icon="<i class='fas fa-check' style='font-size:24px;color:green'></i>";
            $no_icon="<i class='fas fa-times' style='font-size:24px;color:red'></i>";
            foreach ($data_privilege as $item): ?>
                <tr>
                    <th scope="row"><p style="text-align: center;"><?php echo $this->User_model->current_user_id($item['user_id'])[0]['username']; // نام کاربری با استفاده از ای دی ?> </p></th>
                    <td><p style="text-align: center;"><?php if($item['admin']){echo $ok_icon;}else {echo $no_icon;} ?></p></td>

                    <td><p style="text-align: center;"><?php if($item['afrad_read']){echo $ok_icon;}else {echo $no_icon;} ?> 
                    <?php if($item['afrad_write']){echo $ok_icon;}else {echo $no_icon;} ?> </p></td>

                    <td><p style="text-align: center;"><?php if($item['modiran_read']){echo $ok_icon;}else {echo $no_icon;} ?>
                    <?php if($item['modiran_write']){echo $ok_icon;}else {echo $no_icon;} ?></p></td>

                    <td><p style="text-align: center;"><?php if($item['khodro_read']){echo $ok_icon;}else {echo $no_icon;} ?>
                    <?php if($item['khodro_write']){echo $ok_icon;}else {echo $no_icon;} ?></p></td>

                    <td><p style="text-align: center;"><?php if($item['amval_read']){echo $ok_icon;}else {echo $no_icon;} ?>
                    <?php if($item['amval_write']){echo $ok_icon;}else {echo $no_icon;} ?></p></td>

                    <td><p style="text-align: center;"><?php if($item['aghlam_read']){echo $ok_icon;}else {echo $no_icon;} ?>
                    <?php if($item['aghlam_write']){echo $ok_icon;}else {echo $no_icon;} ?></p></td>

                    <td><p style="text-align:center;"><?php if($item['khozestan_read']){echo $ok_icon;}else {echo $no_icon;} ?>
                    <?php if($item['khozestan_write']){echo $ok_icon;}else {echo $no_icon;} ?></p></td>
                    
                    <td><p style="text-align:center;">
                        <a class="btn" target="popup" onclick="window.open('http://<?php echo base_url(); ?>home/edit?p=<?=$page ?>&tab=privl&id=<?=$item['user_id'] ?>','popup_edit','toolbar=no,scrollbars=no,resizable=0,top=200,left=500,width=650,height=500')">
                        <i class='far fa-edit' style='font-size:24px'></i></a></p>
                    </td>
                </tr>
            <?php endforeach;  ?>
            </tbody>
        </table>
      </div>

      


    </div>
    <div id="setting" class=" tab-pane fade"><br>
        <h3>تنظیمات</h3>
      
        <div class="card ">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                        <h4 class="card-title">تغییر عکس پس زمینه</h4>
                        

                    </div>
                    <div class="col-sm-2">
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="card ">
            <div class="card-body">
                <div class="row">
                   <h4 class="card-title">پشتیبان گیری</h4>
                     <div class="col-sm-2">
                        <form method="POST">
                            <input class="btn btn-primary" type="submit" name="backup_now" value="بک آپ" />
                        </form>
                    </div>  
                    <div class="col-sm-8" >                     
                         <?php   echo '<div style="font-size: 24px;" class="p-3 mb-2 bg-info text-white text-center">'.$back_file[0]['option_value'].'</div>'; ?>
                    </div> 
                </div>
            </div>
        </div>


      
                

    </div>
  </div>





    <!-- The Modal Add_User_Modal -->
    <div class="modal" id="Add_User_Modal">
        <div class="modal-dialog">
            <div class="modal-content">
        
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">کاربر جدید</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">

                    <form method="POST">

                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="name">نام :</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="col">
                                    <label for="famili">فامیل :</label>
                                    <input type="text" class="form-control" id="famili" name="famili" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="username">نام کاربری :</label>
                                    <input type="text" class="form-control" id="username" name="username" required>
                                </div>
                                <div class="col">
                                    <label for="password">رمز ورود :</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="avatar">عکس :</label>
                                    <input type="file" class="form-control" id="avatar" name="avatar" required>
                                </div>
                                <div class="col">
                                    <label for="state">وضعیت :</label>
                                    <select id="state" class="form-control" name="state">
                                        <option value="1">فعال</option>
                                        <option value="0">غیر فعال</option>
                                        <option value="2">قفل</option>
                                    </select>
                                    
                                </div>
                            </div>
                        </div>

                        
                        
                        <button type="submit" class="btn btn-default">ذخیره</button>
                    </form>

                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">بستن</button>
                </div>
            
            </div>

        </div>
    </div>


     <!-- The Modal Add_priv_Modal -->
     <div class="modal" id="Add_priv_Modal">
        <div class="modal-dialog">
            <div class="modal-content">
        
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">ارسال پیام</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                
                <!-- Modal body -->
                <div class="modal-body">

                    <form method="POST">

                        <div class="form-group">
                            <label for="title">نام :</label>
                            <input type="text" class="form-control" id="title" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="matn">متن :</label>
                            <textarea class="form-control" id="matn" name="matn" rows="6" cols="50" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-default">ارسال</button>
                    </form>

                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">بستن</button>
                </div>
            
            </div>

        </div>
    </div>
 
<?php 
else:
    echo "دسترسی نا مجاز";
endif; ?>
</div>













