 <style>
#khoshamd {

    position:absolute;
    z-index: 20;
    right: 80px; 
    width: 200px;
    bottom: 400px;
}

@media only screen and (min-width: 600px) {
    #khoshamd {
    position: absolute;
    z-index: 20;
    bottom: 400px;
    right: 80px; 
    width: 200px;
}
}



 </style>



<!-- wallpaper home  -->
<div style="position: absolute;z-index: -1; width: 100%; height: 100%; top:0px; background-image: url('http://<?php echo base_url('assets/pics/bg/3.jpg'); ?>');
    background-size: cover;
    background-repeat: no-repeat; ">

</div>


<div style="width: 90%;" class="container-fluid">

    <!-- خوش آمدید in home  -->    
    <img id="khoshamd" src="http://<?php echo base_url('assets/pics/bg/welcom.png'); ?>" class="img-fluid }" alt="">

    <!-- تقویم و مناسبت   home  -->
    <div style=" position: absolute;right: 10px; bottom: 300px; z-index: 20;background-color: white; width: 350px; padding: 10px; border-radius: 15px;">
       <p style="color: tomato; "> <?php echo ' امروز '.jdate('l j F Y '); ?><br>
        <?php echo($taghvim[0]['monasebat']); ?> </p>
    </div>

    <!-- عکس تقویم ماه home  -->
    <img style=" position: absolute; z-index: 20; bottom: 30px; right: 10px; border-radius: 15px; width: 350px;  " src="http://<?php echo base_url('assets/pics/bg/1401-'.jdate('m','','','','en').'.jpg'); ?>" class="img-fluid }" alt="">
    
   

    


</div>