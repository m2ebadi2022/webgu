<div style="width: 95%;" class="container-fluid">




    <div class="card d-print-none ">
        <div class="card-body">
            <h5 class="card-title"> سیستم ثبت درخواست پشتیبانی آی تی</h5>
            <?php if ($privlege[0]['admin']==1): ?>
    <form method="POST" class="was-validated">
            <fieldset>
               
                <legend>افزودن</legend>
                
                <div class="form-group col-sm-10">
                    <div class="row">
                        <div class="col">
                            <label for="input1" class="form-label">تاریخ</label>
                            <input type="text" class="form-control" id="input1" name="date" value="<?=$date_shamsi ?>" required>
                        </div>
                        
                        <div class="col">
                            <label for="input2" class="form-label">نام</label>
                            <input type="text" class="form-control" id="input2" name="name" required>     
                        </div>
                      
                        <div class="col">
                            <label for="input3" class="form-label">فامیل</label>
                            <input type="text" class="form-control" id="input3" name="famili">
                        </div>
                        
                        <div class="col">
                            <label for="input4" class="form-label">gesmat</label>
                            <select id="input4" class="form-control" name="gesmat">
                                <option value="فنی و مهندسی">فنی و مهندسی</option>
                                <option value="برنامه ریزی">برنامه ریزی</option>
                                <option value="مالی">مالی</option>
                                <option value="فروش">فروش</option>
                                <option value="اداری">اداری</option>
                                <option value="مدیریت" >مدیریت</option>
                                <option value="انبار">انبار</option>
                                <option value="کنترل کیفی">کنترل کیفی</option>
                                <option value="حراست">حراست</option>
                                <option value="تدارکات">تدارکات</option>
                                <option value="واحد خوزستان">واحد خوزستان</option>
                                <option value="واحد آرتان">واحد آرتان</option>
                                <option value="دوخت">دوخت</option>
                                <option value="تولید">تولید</option>

                            </select>
                        </div>

                        <div class="col-sm-2">
                            <label for="input7" class="form-label">ضرورت</label>
                            <select id="input7" class="form-control" name="zarorat">
                                <option value="عادی">عادی</option>
                                <option value="ضروری">ضروری</option>
                                <option value="فوری">فوری</option>
                            </select>

                        </div>
                     </div>   

                    <div class="row">
                        <div class="col-sm-3">
                            <label for="input5" class="form-label">عنوان درخواست</label>
                            <input type="text" class="form-control" id="input5" name="title">
                        </div>

                        <div class="col">
                            <label for="input6" class="form-label">متن درخواست</label>
                            <input type="text" class="form-control" id="input6" name="matn">
                        </div>

                        
                        
                    </div>
                  
                </div>

                <div class="form-group">
                     <button type="submit" class="btn btn-primary">ذخیره</button>
                </div>
            </fieldset>
        </form>

        </div>
    </div>


    <div class="card ">
        <div class="card-body">
           
            <h3 class="d-print-none">جدول درخواست ها <span> <input class="form-control" id="myInput" type="text" placeholder="جستجو در همه موارد ..." > </span></h3>
            <div class="d-none d-print-block" align="center"><h3 >سیستم درخواست پشتیبانی آی تی</h3><br> گزارش درخواست های پشتیبانی  مورخ :<?=$date_shamsi ?></div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col"> (ID)شماره</th>
                        <th scope="col">تاریخ</th>
                        <th scope="col">نام</th>
                        <th scope="col">فامیل</th>
                        <th scope="col">قسمت</th>
                        <th scope="col"> عنوان درخواست</th>
                        <th scope="col">متن درخواست</th>
                        <th scope="col">ضرورت</th>
                        <th scope="col"> وضعیت</th>
                        <th scope="col">پاسخ آی تی</th>
                        <th class="d-print-none" scope="col">ویرایش</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">

                <?php  foreach ($all_data as $item): ?>
                    <tr>
                        <th scope="row"><?=$item['id'] ?></th>
                        <td><?=$item['date'] ?></td>
                        <td><?=$item['name'] ?></td>
                        <td><?=$item['famili'] ?></td>
                        <td><?=$item['gesmat'] ?></td>
                        <td><?=$item['title'] ?></td>
                        <td><?=$item['matn'] ?></td>
                        <td <?php if($item['zarorat']=='فوری') echo 'class="text-danger"' ; if($item['zarorat']=='ضروری') echo 'class="text-warning"' ;  ?>><?=$item['zarorat'] ?></td>

                        <td <?php if($item['vazeat']=='انجام شده') echo 'class="text-success"' ; if($item['vazeat']=='در حال انجام') echo 'class="text-primary"' ;  ?> ><?=$item['vazeat'] ?></td>

                        <td><?=$item['pasokh'] ?></td>
                        <td class="d-print-none">
                            <a class="btn" target="popup" onclick="window.open('http://<?php echo base_url(); ?>home/edit?p=<?=$page ?>&id=<?=$item['id'] ?>','popup_edit','toolbar=no,scrollbars=no,resizable=0,top=200,left=500,width=700,height=500')">
                            <i class='far fa-edit' style='font-size:24px'></i></a>
                        </td>
                    </tr>
                
                <?php endforeach; 
                echo "</tbody></table></div>";
             ?>
        
        </div>
    </div>







    <?php 
else:
    echo "دسترسی نا مجاز";
endif; ?>
</div>