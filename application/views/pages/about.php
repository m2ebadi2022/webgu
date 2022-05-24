






<div style="width: 95%;" class="container-fluid">

    <div class="card ">
        <div class="card-body">
            <img src="http://<?php echo base_url(); ?>assets/pics/logo.jpg" alt="logo" style=" width: 300px;"><br><br>
            <h5 class="card-title"> سیستم نگهبانی ورژن 1.2</h5>
            <p class="card-text"> طراحی و برنامه نویسی مهدی عبادی (واحد آی تی)- داخلی 102</p>
            <p class="card-text"> پیشنهادات وانتقادات از سیستم نگهبانی</p>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                ارسال پیام
            </button>
        </div>
    </div>

    <div class="card ">
        <div class="card-body">
            <br>
            <h3>پیام ها</h3>
            <?php  if(count($user_msg) >= 1):
                $counter=1;
                ?>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">شماره</th>
                        <th scope="col">تاریخ - ساعت</th>
                        <th scope="col"> پیام من</th>
                        <th scope="col">پاسخ آی تی</th>
                        </tr>
                    </thead>
                    <tbody>

                <?php  foreach ($user_msg as $item): ?>
                    <tr>
                        <th scope="row"><?php echo $counter++; ?></th>
                        <td><?=$item['date'] ?></td>
                        
                        <td><?=$item['matn'] ?></td>
                        <td><?=$item['pasokh'] ?></td>
                    </tr>
                
                <?php endforeach; 
                echo "</tbody></table></div>";
            endif;  ?>
        
        </div>
    </div>

    <!-- The Modal -->
    <div class="modal" id="myModal">
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
</div>

