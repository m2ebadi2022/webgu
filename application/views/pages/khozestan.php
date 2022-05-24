
<div style="width: 95%;" class="container-fluid">

        
    <?php if ($privlege[0]['khozestan_write']==1): ?>
        <legend class="d-print-none">افزودن</legend>
        <div class="card  d-print-none">
        <div class="card-body">

        <form method="POST" class="was-validated">
            <fieldset>
              
                <div class="form-group col-sm-12">
                    <div class="row">
                        <div class="col">
                            <label for="input1" class="form-label">تاریخ</label>
                            <input type="text" class="form-control" id="input1" name="date" value="<?=$date_shamsi ?>" required>
                        </div>
                        
                        <div class="col">
                            <label for="input2" class="form-label">نام و نام خانوادگی</label>
                            <input type="text" class="form-control" id="input2" name="name" required>     
                        </div>
                      
                        <div class="col">
                            <label for="input3" class="form-label">شماره پلاک</label>
                            <input type="text" class="form-control" id="input3" name="code_mashin" required>
                        </div>
                        
                        <div class="col">
                            <label for="input4" class="form-label">ساعت ورود</label>
                            <input type="time" class="form-control" id="input4" name="vorod">
                        </div>
                        
                        <div class="col">
                            <label for="input5" class="form-label">ساعت خروج</label>
                            <input type="time" class="form-control" id="input5" name="khoroj">
                        </div>
                     
                    </div>
                   
                    <div class="row">
                        <div class="col-sm-2">
                            <label for="input6" class="form-label">شرح</label>

                            <input type="text" class="form-control" id="input6" name="sharh">

                        </div>
                        <div class="col-sm-2">
                            <label for="input7" class="form-label">کد نگهبان</label>
                            <input type="number" class="form-control" id="input7" name="code_negahban">
                        </div>
                        <div class="col-sm-8">
                            <label for="input8" class="form-label">توضیحات</label>
                            <input type="text" class="form-control" id="input8" name="tozihat">
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
    <?php endif;  ?>
        
        
        
        <?php if ($privlege[0]['khozestan_read']==1): ?>
            <div class="d-none d-print-block" align="center"><h3 >سیستم ورود و خروج نگهبانی</h3><br> گزارش ورود و خروج آذرفدک خوزستان مورخ :<?=$date_shamsi ?></div>
            <br>
        <legend class="d-print-none">جدول داده ها
            <span>
                <button class="btn btn-info" onclick="exportExcel('tblData')">خروجی اکسل</button>
            </span>
        </legend>

            <div class="card ">
            <div class="card-body">

            <div class="d-print-none">
            <ul class="pagination">
                <?php $count_all= ceil(( $count_tbl[0]["COUNT(id)"])); ?>

                <li class="page-item <?php if($page_c==50){echo 'active';} ?>">
                    <a class="page-link" href="http://<?php echo base_url(); ?>home/page/8?p=50">50</a>
                </li>
                <li class="page-item <?php if($page_c==200){echo 'active';} ?>">
                    <a class="page-link" href="http://<?php echo base_url(); ?>home/page/8?p=200">200</a>
                </li>
                <li class="page-item <?php if($page_c==500){echo 'active';} ?>">
                    <a class="page-link" href="http://<?php echo base_url(); ?>home/page/8?p=500">500</a>
                </li>
                <li class="page-item <?php if($page_c==1000){echo 'active';} ?>">
                    <a class="page-link" href="http://<?php echo base_url(); ?>home/page/8?p=1000">1000</a>
                </li>
                <li class="page-item <?php if($page_c==$count_all){echo 'active';} ?>">
                    <a class="page-link" href="http://<?php echo base_url(); ?>home/page/8?p=<?=$count_all ?>">همه (<?=$count_all ?>)</a>
                </li>
                <li class="page-item" style="width: 50%; padding-right: 30px;" >
                    <input class="form-control" id="myInput" type="text" placeholder="جستجو در همه موارد ..." >
                </li>
            </ul>
        </div>   


        <div class="table-responsive">
            <table id="tblData" class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">ردیف</th>
                    <th scope="col">شناسه</th>
                    <th scope="col">تاریخ</th>
                    <th scope="col">نام و نام خانوادگی</th>
                    <th scope="col">شماره ماشین</th>
                    <th scope="col">ساعت ورود</th>
                    <th scope="col">ساعت خروج</th>
                    <th scope="col">شرح</th>
                    <th scope="col">کد نگهبان</th>
                    <th scope="col">توضیحات</th>

                    <?php if ($privlege[0]['khozestan_write']==1): ?>
                        <th class="d-print-none" scope="col">ویرایش</th>
                    <?php endif; ?>

                </tr>
            </thead>
            <tbody id="myTable">

            <?php  $conter=1;  foreach($all_data as $item): ?>
                <tr>
                    <td contenteditable="true"><?=$conter ?></td>
                    <td><?=$item['id'] ?></td>
                    <td><?=$item['date'] ?></td>
                    <td><?=$item['name'] ?></td>
                    <td><?=$item['code_mashin'] ?></td>
                    <td><?=$item['vorod'] ?></td>
                    <td><?=$item['khoroj'] ?></td>
                    <td><?=$item['sharh'] ?></td>
                    <td><?=$item['code_negahban'] ?></td>
                    <td><?=$item['tozihat'] ?></td>

                    <?php if ($privlege[0]['khozestan_write']==1): ?>
                        <td class="d-print-none">
                            <a class="btn" target="popup" onclick="window.open('http://<?php echo base_url(); ?>home/edit?p=<?=$page ?>&id=<?=$item['id'] ?>','popup_edit','toolbar=no,scrollbars=no,resizable=0,top=200,left=500,width=650,height=500')">
                            <i class='far fa-edit' style='font-size:24px'></i></a>
                        </td>
                    <?php endif; ?>

                </tr>
            <?php $conter++;  endforeach; ?>

            </tbody>
        </table>
    </div>

   
            

    <div class="d-print-none">
        <ul class="pagination">
            <li class="page-item <?php if($page_c==50){echo 'active';} ?>">
                <a class="page-link" href="http://<?php echo base_url(); ?>home/page/8?p=50">50</a>
            </li>
            <li class="page-item <?php if($page_c==200){echo 'active';} ?>">
                <a class="page-link" href="http://<?php echo base_url(); ?>home/page/8?p=200">200</a>
            </li>
            <li class="page-item <?php if($page_c==500){echo 'active';} ?>">
                <a class="page-link" href="http://<?php echo base_url(); ?>home/page/8?p=500">500</a>
            </li>
            <li class="page-item <?php if($page_c==1000){echo 'active';} ?>">
                <a class="page-link" href="http://<?php echo base_url(); ?>home/page/8?p=1000">1000</a>
            </li>
            <li class="page-item <?php if($page_c==$count_all){echo 'active';} ?>">
                <a class="page-link" href="http://<?php echo base_url(); ?>home/page/8?p=<?=$count_all ?>">همه (<?=$count_all ?>)</a>
            </li>
        </ul>
    </div>   
    </div>
    </div> 
<?php 
else:
    echo "دسترسی نا مجاز";

endif;  ?>
        

    </div>
	



