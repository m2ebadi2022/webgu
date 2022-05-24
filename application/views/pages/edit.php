
<div style="width: 95%;" class="container-fluid">

<?php if($p==1): ?>
    <?php if ($privlege[0]['afrad_write']==1): ?>
    <form method="POST" class="was-validated">
        <fieldset>
            <legend>ویرایش شناسه : </legend><h3><?=$id  ?></h3>

            <hr>
            <div class="form-group row">
                
                <div class="row">
                    <div class="col">
                        <label for="input1" class="form-label">تاریخ</label>
                        <input type="text" class="form-control" id="input1" name="date" value="<?=$data[0]['date'] ?>" disabled >
                    </div>
                    <div class="col">
                        <label for="input2" class="form-label">نام و نام خانوادگی</label>
                        <input type="text" class="form-control" id="input2" name="name" value="<?=$data[0]['name'] ?>" disabled>     
                    </div>
                    <div class="col">
                        <label for="input3" class="form-label">کد پرسنلی</label>
                        <input type="number" class="form-control" id="input3" name="code_personeli" <?php if($data[0]['code_personeli'] !=""){echo 'value="'.$data[0]['code_personeli'].'" disabled';} ?> >
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="input4" class="form-label">ساعت ورود</label>
                        <input type="time" class="form-control" id="input4" name="vorod" <?php if($data[0]['vorod'] !=""){echo 'value="'.$data[0]['vorod'].'" disabled';} ?> >
                    </div>
                    <div class="col">
                        <label for="input5" class="form-label">ساعت خروج</label>
                        <input type="time" class="form-control" id="input5" name="khoroj"  <?php if($data[0]['khoroj'] !=""){echo 'value="'.$data[0]['khoroj'].'" disabled';} ?> >
                    </div>
                    <div class="col">
                        <label for="input6" class="form-label">برگه مرخصی</label>

                        <select id="input6" class="form-control" name="barg_morakhasi"  <?php if($data[0]['barg_morakhasi'] !=""){echo 'disabled';} ?>>
                            <option value=""></option>
                            <option <?php if ($data[0]['barg_morakhasi']=='دارد'){echo 'selected';} ?> value="دارد">دارد</option>
                            <option <?php if ($data[0]['barg_morakhasi']=='ندارد'){echo 'selected';} ?> value="ندارد">ندارد</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="input7" class="form-label">کد نگهبان</label>
                        <input type="number" class="form-control" id="input7" name="code_negahban" <?php if($data[0]['code_negahban'] !=""){echo 'value="'.$data[0]['code_negahban'].'" disabled';} ?> >
                    </div>
                    <div class="col">
                        <label for="input8" class="form-label">توضیحات</label>
                        <input type="text" class="form-control" id="input8" name="tozihat" value="<?=$data[0]['tozihat'] ?>">
                    </div>
                </div>
            </div>

            <div class="form-group row">
                    <button type="submit" class="btn btn-primary" name="save_p1" >ذخیره</button>
                    <button  class="btn btn-primary" onclick="window.close()">لغو</button>
            </div>

        </fieldset>
    </form>

<?php 
endif;
endif;
if($p==2): ?>
<?php if ($privlege[0]['modiran_write']==1): ?>
    <form  method="POST" class="was-validated">
        <fieldset>
        <legend>ویرایش شناسه : </legend><h3><?=$id  ?></h3>
                <hr>
            <div class="form-group row">
                <div class="row">
                    <div class="col">
                        <label for="input1" class="form-label">تاریخ</label>
                        <input type="text" class="form-control" id="input1" name="date" value="<?=$data[0]['date'] ?>" disabled >
                    </div>
                    <div class="col">
                        <label for="input2" class="form-label">نام و نام خانوادگی</label>
                        <input type="text" class="form-control" id="input2" name="name" value="<?=$data[0]['name'] ?>" disabled>     
                    </div>
                </div> 
                <div class="row">   
                    <div class="col">
                        <label for="input4" class="form-label">ساعت ورود</label>
                        <input type="time" class="form-control" id="input4" name="vorod" <?php if($data[0]['vorod'] !=""){echo 'value="'.$data[0]['vorod'].'" disabled';} ?> >
                    </div>
                    <div class="col">
                        <label for="input5" class="form-label">ساعت خروج</label>
                        <input type="time" class="form-control" id="input5" name="khoroj"  <?php if($data[0]['khoroj'] !=""){echo 'value="'.$data[0]['khoroj'].'" disabled';} ?> >
                    </div>
                    <div class="col">
                        <label for="input7" class="form-label">کد نگهبان</label>
                        <input type="number" class="form-control" id="input7" name="code_negahban" <?php if($data[0]['code_negahban'] !=""){echo 'value="'.$data[0]['code_negahban'].'" disabled';} ?> >
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="input8" class="form-label">توضیحات</label>
                        <input type="text" class="form-control" id="input8" name="tozihat" value="<?=$data[0]['tozihat'] ?>">
                    </div>
                </div>
            </div>
            
            <div class="form-group row">
                <button type="submit" class="btn btn-primary" name="save_p2" >ذخیره</button>
                <button  class="btn btn-primary" onclick="window.close()">لغو</button>
            </div>
        </fieldset>
    </form>

<?php
endif;
endif;
if($p==3): ?>
<?php if ($privlege[0]['khodro_write']==1): ?>
    <form  method="POST" class="was-validated">
        <fieldset>
            <legend>ویرایش شناسه : </legend><h3><?=$id  ?></h3>
                <hr>
            <div class="form-group row" >
          
                <div class="row">
                    <div class="col">
                        <label for="input1" class="form-label">تاریخ</label>
                        <input type="text" class="form-control" id="input1" name="date" value="<?=$data[0]['date'] ?>" disabled >
                    </div>
                    <div class="col">
                        <label for="input2" class="form-label">نام و نام خانوادگی</label>
                        <input type="text" class="form-control" id="input2" name="name" value="<?=$data[0]['name'] ?>" disabled>     
                    </div>
                    <div class="col">
                        <label for="input3" class="form-label">شماره پلاک</label>
                        <input type="text" class="form-control" id="input3" name="code_mashin" value="<?=$data[0]['code_mashin'] ?>" disabled >
                    </div>
                </div> 

              <div class="row">
                    <div class="col">
                        <label for="input4" class="form-label">ساعت ورود</label>
                        <input type="time" class="form-control" id="input4" name="vorod" <?php if($data[0]['vorod'] !=""){echo 'value="'.$data[0]['vorod'].'" disabled';} ?> >
                    </div>
                    <div class="col">
                        <label for="input5" class="form-label">ساعت خروج</label>
                        <input type="time" class="form-control" id="input5" name="khoroj"  <?php if($data[0]['khoroj'] !=""){echo 'value="'.$data[0]['khoroj'].'" disabled';} ?> >
                    </div>  
                    <div class="col">
                        <label for="input7" class="form-label">وزن باسکول/تعداد</label>
                        <input type="number" step="0.01" class="form-control" id="input7" name="vazn" <?php if($data[0]['vazn'] !=""){echo 'value="'.$data[0]['vazn'].'" disabled';} ?> >
                    </div>

                    <div class="col">
                        <label for="input11" class="form-label">واحد</label>
                        <input type="text" class="form-control" id="input11" name="vahed" <?php if($data[0]['vahed'] !=""){echo 'value="'.$data[0]['vahed'].'" disabled';} ?> >
                    </div>

                </div>

                <div class="row">
                    <div class="col">
                        <label for="input8" class="form-label">فرستنده</label>
                        <input type="text" class="form-control" id="input8" name="sender" <?php if($data[0]['sender'] !=""){echo 'value="'.$data[0]['sender'].'" disabled';} ?>>
                    </div>
                    <div class="col">
                        <label for="input9" class="form-label">گیرنده</label>
                        <input type="text" class="form-control" id="input9" name="reciver" <?php if($data[0]['reciver'] !=""){echo 'value="'.$data[0]['reciver'].'" disabled';} ?>>
                    </div>
                </div>
                <div class="row">  
                    <div class="col">
                        <label for="input6" class="form-label">شرح</label>
                        <input type="text" class="form-control" id="input6" name="sharh" <?php if($data[0]['sharh'] !=""){echo 'value="'.$data[0]['sharh'].'" disabled';} ?>>
                    </div>
                    <div class="col">
                        <label for="input7" class="form-label">کد نگهبان</label>
                        <input type="number" class="form-control" id="input7" name="code_negahban" <?php if($data[0]['code_negahban'] !=""){echo 'value="'.$data[0]['code_negahban'].'" disabled';} ?> >
                    </div>
                </div>    
                <div class="row">
                    <div class="col">
                        <label for="input8" class="form-label">توضیحات</label>
                        <input type="text" class="form-control" id="input8" name="tozihat" value="<?=$data[0]['tozihat'] ?>">
                    </div>
                </div>

            </div>


            <div class="form-group row">
                <button type="submit" class="btn btn-primary" name="save_p3" >ذخیره</button>
                <button  class="btn btn-primary" onclick="window.close()">لغو</button>
            </div>

         </fieldset>
    </form>

<?php endif;
endif;
if($p==4): ?>
<?php if ($privlege[0]['amval_write']==1): ?>
    <form  method="POST" class="was-validated">
        <fieldset>
            <legend>ویرایش شناسه : </legend><h3><?=$id  ?></h3>
            <hr>
            <div class="form-group row ">
                <div class="row">
                    <div class="col">
                        <label for="input1" class="form-label">تاریخ</label>
                        <input type="text" class="form-control" id="input1" name="date" value="<?=$data[0]['date'] ?>" disabled >
                    </div>
                    <div class="col">
                        <label for="input2" class="form-label">نوع اموال</label>
                        <input type="text" class="form-control" id="input2" name="type" value="<?=$data[0]['type'] ?>" disabled>     
                    </div>
                    <div class="col">
                        <label for="input3" class="form-label">تعداد</label>
                        <input type="text" class="form-control" id="input3" name="count" value="<?=$data[0]['count'] ?>" disabled>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="input4" class="form-label">ساعت ورود/خروج</label>
                        <input type="time" class="form-control" id="input4" name="time" <?php if($data[0]['time'] !=""){echo 'value="'.$data[0]['time'].'" disabled';} ?>>
                    </div>
                    <div class="col">
                        <label for="input5" class="form-label">شرح</label>
                        <input type="text" class="form-control" id="input5" name="sharh" <?php if($data[0]['sharh'] !=""){echo 'value="'.$data[0]['sharh'].'" disabled';} ?>>
                    </div>
                </div>

                <div class="row">    
                    <div class="col">
                        <label for="input6" class="form-label">کد نگهبان</label>
                        <input type="number" class="form-control" id="input6" name="code_negahban" <?php if($data[0]['code_negahban'] !=""){echo 'value="'.$data[0]['code_negahban'].'" disabled';} ?> >
                    </div>
                    <div class="col">
                        <label for="input6" class="form-label">توضیحات</label>
                        <input type="text" class="form-control" id="input6" name="tozihat" value="<?=$data[0]['tozihat'] ?>">
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <button type="submit" class="btn btn-primary" name="save_p4" >ذخیره</button>
                <button  class="btn btn-primary" onclick="window.close()">لغو</button>
            </div>
        
        </fieldset>
    </form>




<?php endif; 
endif;
if($p==7): ?>
<?php if ($privlege[0]['aghlam_write']==1): ?>
    <form method="POST" class="was-validated">
        <fieldset>
            <legend>ویرایش شناسه : </legend><h3><?=$id  ?></h3>

            <hr>
            <div class="form-group row">
                
                <div class="row">
                    <div class="col">
                        <label for="input1" class="form-label">تاریخ</label>
                        <input type="text" class="form-control" id="input1" name="date" value="<?=$data[0]['date'] ?>" disabled >
                    </div>
                    <div class="col">
                        <label for="input2" class="form-label">نام و نام خانوادگی</label>
                        <input type="text" class="form-control" id="input2" name="name" value="<?=$data[0]['name'] ?>" disabled>     
                    </div>
                    <div class="col">
                        <label for="input3" class="form-label">شماره ماشین</label>
                        <input type="text" class="form-control" id="input3" name="code_mashin" <?php if($data[0]['code_mashin'] !=""){echo 'value="'.$data[0]['code_mashin'].'" disabled';} ?> >
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="input4" class="form-label">ساعت ورود</label>
                        <input type="time" class="form-control" id="input4" name="vorod" <?php if($data[0]['vorod'] !=""){echo 'value="'.$data[0]['vorod'].'" disabled';} ?> >
                    </div>
                    <div class="col">
                        <label for="input5" class="form-label">ساعت خروج</label>
                        <input type="time" class="form-control" id="input5" name="khoroj"  <?php if($data[0]['khoroj'] !=""){echo 'value="'.$data[0]['khoroj'].'" disabled';} ?> >
                    </div>
                    <div class="col">
                        <label for="input6" class="form-label">شرح</label>
                        <input type="text" class="form-control" id="input6" name="sharh" <?php if($data[0]['sharh'] !=""){echo 'value="'.$data[0]['sharh'].'" disabled';} ?> >
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="input7" class="form-label">کد نگهبان</label>
                        <input type="number" class="form-control" id="input7" name="code_negahban" <?php if($data[0]['code_negahban'] !=""){echo 'value="'.$data[0]['code_negahban'].'" disabled';} ?> >
                    </div>
                    <div class="col">
                        <label for="input8" class="form-label">توضیحات</label>
                        <input type="text" class="form-control" id="input8" name="tozihat" value="<?=$data[0]['tozihat'] ?>">
                    </div>
                </div>
            </div>

            <div class="form-group row">
                    <button type="submit" class="btn btn-primary" name="save_p7" >ذخیره</button>
                    <button  class="btn btn-primary" onclick="window.close()">لغو</button>
            </div>

        </fieldset>
    </form>

<?php 
endif; 
endif;

if($p==8): ?>
<?php if ($privlege[0]['khozestan_write']==1): ?>
    <form method="POST" class="was-validated">
        <fieldset>
            <legend>ویرایش شناسه : </legend><h3><?=$id  ?></h3>

            <hr>
            <div class="form-group row">
                
                <div class="row">
                    <div class="col">
                        <label for="input1" class="form-label">تاریخ</label>
                        <input type="text" class="form-control" id="input1" name="date" value="<?=$data[0]['date'] ?>" disabled >
                    </div>
                    <div class="col">
                        <label for="input2" class="form-label">نام و نام خانوادگی</label>
                        <input type="text" class="form-control" id="input2" name="name" value="<?=$data[0]['name'] ?>" disabled>     
                    </div>
                    <div class="col">
                        <label for="input3" class="form-label">شماره ماشین </label>
                        <input type="text" class="form-control" id="input3" name="code_mashin" <?php if($data[0]['code_mashin'] !=""){echo 'value="'.$data[0]['code_mashin'].'" disabled';} ?> >
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="input4" class="form-label">ساعت ورود</label>
                        <input type="time" class="form-control" id="input4" name="vorod" <?php if($data[0]['vorod'] !=""){echo 'value="'.$data[0]['vorod'].'" disabled';} ?> >
                    </div>
                    <div class="col">
                        <label for="input5" class="form-label">ساعت خروج</label>
                        <input type="time" class="form-control" id="input5" name="khoroj"  <?php if($data[0]['khoroj'] !=""){echo 'value="'.$data[0]['khoroj'].'" disabled';} ?> >
                    </div>
                    <div class="col">
                        <label for="input6" class="form-label">شرح</label>
                        <input type="text" class="form-control" id="input6" name="sharh"  <?php if($data[0]['sharh'] !=""){echo 'value="'.$data[0]['sharh'].'" disabled';} ?> >      
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="input7" class="form-label">کد نگهبان</label>
                        <input type="number" class="form-control" id="input7" name="code_negahban" <?php if($data[0]['code_negahban'] !=""){echo 'value="'.$data[0]['code_negahban'].'" disabled';} ?> >
                    </div>
                    <div class="col">
                        <label for="input8" class="form-label">توضیحات</label>
                        <input type="text" class="form-control" id="input8" name="tozihat" value="<?=$data[0]['tozihat'] ?>">
                    </div>
                </div>
            </div>

            <div class="form-group row">
                    <button type="submit" class="btn btn-primary" name="save_p8" >ذخیره</button>
                    <button  class="btn btn-primary" onclick="window.close()">لغو</button>
            </div>

        </fieldset>
    </form>

<?php 
endif;
endif;

if($p==9): ?>
    <?php if ($privlege[0]['khodro_pey_write']==1): ?>
        <form  method="POST" class="was-validated">
            <fieldset>
                <legend>ویرایش شناسه : </legend><h3><?=$id  ?></h3>
                    <hr>
                <div class="form-group row" >
              
                    <div class="row">
                        <div class="col">
                            <label for="input1" class="form-label">تاریخ</label>
                            <input type="text" class="form-control" id="input1" name="date" value="<?=$data[0]['date'] ?>" disabled >
                        </div>
                        <div class="col">
                            <label for="input2" class="form-label">نام و نام خانوادگی</label>
                            <input type="text" class="form-control" id="input2" name="name" value="<?=$data[0]['name'] ?>" disabled>     
                        </div>
                        <div class="col">
                            <label for="input3" class="form-label">شماره پلاک</label>
                            <input type="text" class="form-control" id="input3" name="code_mashin" value="<?=$data[0]['code_mashin'] ?>" disabled >
                        </div>
                    </div> 
    
                  <div class="row">
                        <div class="col">
                            <label for="input4" class="form-label">ساعت ورود</label>
                            <input type="time" class="form-control" id="input4" name="vorod" <?php if($data[0]['vorod'] !=""){echo 'value="'.$data[0]['vorod'].'" disabled';} ?> >
                        </div>
                        <div class="col">
                            <label for="input5" class="form-label">ساعت خروج</label>
                            <input type="time" class="form-control" id="input5" name="khoroj"  <?php if($data[0]['khoroj'] !=""){echo 'value="'.$data[0]['khoroj'].'" disabled';} ?> >
                        </div>  
                        <div class="col">
                            <label for="input7" class="form-label">وزن باسکول/تعداد</label>
                            <input  type="number" step="0.01" class="form-control" id="input7" name="vazn" <?php if($data[0]['vazn'] !=""){echo 'value="'.$data[0]['vazn'].'" disabled';} ?> >
                        </div>
                        <div class="col">
                            <label for="input11" class="form-label">واحد</label>
                            <input type="text" class="form-control" id="input11" name="vahed" <?php if($data[0]['vahed'] !=""){echo 'value="'.$data[0]['vahed'].'" disabled';} ?> >
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col">
                            <label for="input8" class="form-label">فرستنده</label>
                            <input type="text" class="form-control" id="input8" name="sender" <?php if($data[0]['sender'] !=""){echo 'value="'.$data[0]['sender'].'" disabled';} ?>>
                        </div>
                        <div class="col">
                            <label for="input9" class="form-label">گیرنده</label>
                            <input type="text" class="form-control" id="input9" name="reciver" <?php if($data[0]['reciver'] !=""){echo 'value="'.$data[0]['reciver'].'" disabled';} ?>>
                        </div>
                    </div>
                    <div class="row">  
                        <div class="col">
                            <label for="input6" class="form-label">شرح</label>
                            <input type="text" class="form-control" id="input6" name="sharh" <?php if($data[0]['sharh'] !=""){echo 'value="'.$data[0]['sharh'].'" disabled';} ?>>
                        </div>
                        <div class="col">
                            <label for="input7" class="form-label">کد نگهبان</label>
                            <input type="number" class="form-control" id="input7" name="code_negahban" <?php if($data[0]['code_negahban'] !=""){echo 'value="'.$data[0]['code_negahban'].'" disabled';} ?> >
                        </div>
                    </div>    
                    <div class="row">
                        <div class="col">
                            <label for="input8" class="form-label">توضیحات</label>
                            <input type="text" class="form-control" id="input8" name="tozihat" value="<?=$data[0]['tozihat'] ?>">
                        </div>
                    </div>
    
                </div>
    
    
                <div class="form-group row">
                    <button type="submit" class="btn btn-primary" name="save_p9" >ذخیره</button>
                    <button  class="btn btn-primary" onclick="window.close()">لغو</button>
                </div>
    
             </fieldset>
        </form>
    
    <?php endif;
    endif;

if($p=='admin'): 
 if ($privlege[0]['admin']==1): ?>
    <form method="POST" class="was-validated">
        <fieldset>
        <?php if($tab=='msg'): ?>
            <legend>پاسخ برای پیام : </legend><h3><?=$id  ?></h3>

            <hr>
            <div class="form-group row">
                <div class="row">
                    <div class="col">
                        <label for="input1" class="form-label">پاسخ</label>
                        
                        <textarea class="form-control" id="input1" name="pasokh" rows="6" cols="50" ><?=$data[0]['pasokh'] ?></textarea>

                    </div>
                </div>
            </div>    
            <div class="form-group row">
                    <button type="submit" class="btn btn-primary" name="save_p_admin_msg" >ذخیره</button>
                    <button  class="btn btn-primary" onclick="window.close()">لغو</button>
            </div>
            <?php elseif ($tab=='user'): ?>

                <legend>ویرایش کاربر  : </legend><h3><?=$id  ?></h3>

            <hr>
            <div class="form-group row">
                <div class="row">
                    <div class="col">
                        <label for="input1" class="form-label">نام </label>
                        <input type="text" class="form-control" id="input1" name="name" value="<?=$data[0]['name'] ?>">
                    </div>
                    <div class="col">
                        <label for="input2" class="form-label">فامیل</label>
                        <input type="text" class="form-control" id="input2" name="famili" value="<?=$data[0]['famili'] ?>">
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <label for="input3" class="form-label">نام کاربری</label>
                        <input type="text" class="form-control" id="input3" name="username" value="<?=$data[0]['username'] ?>" disabled>
                    </div>
                    <div class="col">
                        <label for="input4" class="form-label">پسورد</label>
                        <input type="text" class="form-control" id="input4" name="password" value="<?=$data[0]['password'] ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="input5" class="form-label">عکس</label>
                        <input type="file" class="form-control" id="input5" name="avatar" value="<?=$data[0]['avatar'] ?>" disabled>
                    </div>
                    <div class="col">
                        <label for="input6" class="form-label">وضعیت</label>
                        <input type="text" class="form-control" id="input6" name="state" value="<?=$data[0]['state'] ?>">
                    </div>
                </div>
            </div>    
            <div class="form-group row">
                    <button type="submit" class="btn btn-primary" name="save_p_admin_user" >ذخیره</button>
                    <button  class="btn btn-primary" onclick="window.close()">لغو</button>
            </div>


            <?php elseif ($tab=='privl'): ?>



            <?php endif; ?>
        </fieldset>
    </form>

<?php 
endif;
endif;

if($p=='helpdesk'):
    if ($privlege[0]['admin']==1):
    ?>
    
        <form method="POST" class="was-validated">
            <fieldset>
               
            <legend>ویرایش شناسه : </legend><h3><?=$id  ?></h3>
                
                <div class="form-group col">
                    <div class="row">
                        <div class="col">
                            <label for="input1" class="form-label">تاریخ</label>
                            <input type="text" class="form-control" id="input1" name="date" value="<?=$data[0]['date'] ?>" disabled>
                        </div>
                        
                        <div class="col">
                            <label for="input2" class="form-label">نام</label>
                            <input type="text" class="form-control" id="input2" name="name" value="<?=$data[0]['name'] ?>">     
                        </div>
                      
                        <div class="col">
                            <label for="input3" class="form-label">فامیل</label>
                            <input type="text" class="form-control" id="input3" name="famili" value="<?=$data[0]['famili'] ?>">
                        </div>
                        
                        <div class="col">
                            <label for="input4" class="form-label">gesmat</label>

                            <?php 
                            $gesmat=array('فنی و مهندسی',
                            'برنامه ریزی',
                            'مالی',
                            'فروش',
                            'اداری',
                            'مدیریت',
                            'انبار',
                            'کنترل کیفی',
                            'حراست',
                            'تدارکات',
                            'واحد خوزستان',
                            'دوخت',
                            'تولید'
                        
                        );
                          ?>

                            <select id="input4" class="form-control" name="gesmat">

                            <?php 

                            foreach ($gesmat as $ge){
                                if($data[0]['gesmat']==$ge){echo '<option value="'.$ge.'" selected> '.$ge.'</option>';}
                                else {echo '<option value="'.$ge.'"> '.$ge.'</option>';}
                            }
                            ?>
                              
                            </select>
                        </div>

                        <div class="col-sm-2">
                            <label for="input7" class="form-label">ضرورت</label>
                            <select id="input7" class="form-control" name="zarorat">
                                <option <?php if($data[0]['zarorat']=='عادی'){echo 'selected';} ?> value="عادی">عادی</option>
                                <option <?php if($data[0]['zarorat']=='ضروری'){echo 'selected';} ?> value="ضروری">ضروری</option>
                                <option <?php if($data[0]['zarorat']=='فوری'){echo 'selected';} ?> value="فوری">فوری</option>
                            </select>

                        </div>
                     </div>   

                    <div class="row">
                        <div class="col-sm-3">
                            <label for="input5" class="form-label">عنوان درخواست</label>
                            <input type="text" class="form-control" id="input5" name="title" value="<?=$data[0]['title'] ?>">
                        </div>

                        <div class="col">
                            <label for="input6" class="form-label">متن درخواست</label>
                            <input type="text" class="form-control" id="input6" name="matn" value="<?=$data[0]['matn'] ?>">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="input8" class="form-label">پاسخ آی تی</label>
                            <input type="text" class="form-control" id="input8" name="pasokh" value="<?=$data[0]['pasokh'] ?>">
                        </div>

                        <div class="col-sm-3">
                            <label for="input9" class="form-label">وضعیت</label>
                            <select id="input9" class="form-control" name="vazeat">
                                <option <?php if($data[0]['vazeat']=='درحال بررسی'){echo 'selected';} ?> value="درحال بررسی">درحال بررسی</option>
                                <option <?php if($data[0]['vazeat']=='در حال انجام'){echo 'selected';} ?> value="در حال انجام">در حال انجام</option>
                                <option <?php if($data[0]['vazeat']=='انجام شده'){echo 'selected';} ?> value="انجام شده">انجام شده</option>
                            </select>        
                        </div>
                    
                    </div>
                  
                                    
                </div>

                <div class="form-group">
                     <button type="submit" class="btn btn-primary" name="save_p_helpdesk" >ذخیره</button>
                    <button  class="btn btn-primary" onclick="window.close()">لغو</button>
                    
                </div>
            </fieldset>
        </form>

<?php endif;
endif;
?>

</div>
	
