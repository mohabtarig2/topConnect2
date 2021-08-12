<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <link href="//db.onlinewebfonts.com/c/19a516eaa6ae19744976e313ea5896f4?family=29LT+Bukra+Variable" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
         crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>
    <body>
        <nav class="navbar" >
            <div class="navbar-container container">
                <input type="checkbox" name="" id="">
                <div class="hamburger-lines">
                    <span class="line line1"></span>
                    <span class="line line2"></span>
                    <span class="line line3"></span>
                </div>
                <ul class="menu-items" >
                    <li><a href="#">من نحن</a></li>
                    <li><a href="#">رؤيتنا</a></li>
                    <li><a href="#">تأسيس الشركات</a></li>
                    <li><a href="#">التاشيرات السياحية</a></li>

                </ul>
                <h1 class="logo"><img src="{{URL::asset('img/logo.png')}}" width="150" class="img-fluid"> </h1>
            </div>
        </nav>

<div class="header">
    <div id="overlay"></div>
<div class="slider">

    <h1 class="text-light text-center mb-4">انشئ شركتك الخاصة</h1>

<p class="btn start text-light">ابدء عملك </p>

</div>

</div>

<section class="who_are_we mt-5 container">
    <div class="row" dir="rtl">
    <div class="col-md-6 col-sm-12">

<h1 class="text-right main-color"> من نحن</h1>
<p class="text-right mt-3 text-muted" style="line-height: 2.5">
    شركة توب كونكت لمتابعة المعاملات تساعدك على جعل هذه المهمة سهلة وسريعة لالمامنا التام بقوانين العمل في دولة
    الامارات العربية المتحدة وذلك لامتلاكنا فريق متخصص من ذوي الخبرة في جميع الدوائر الحكومية ( اقتصادية دبي – وزارة العمل والعمال – الإدارة العامة للجوازات والهجرة والجنسية ) يقومون بتقديم الاستشارة اللازمة لك لبدء نشاطك التجاري.
</p>
</div>

    <div class="col-md-6 col-sm-12">
        <img src="{{URL::asset('img/who_Ar.jpg')}}"  class="img-fluid">
    </div>
</div>
</section>

<section class="vision mt-5 container">
<h1 class="main-color text-center mb-3">   رؤيتنا </h1>

<div class="row" dir="rtl">
 <div class="col-md-4 col-sm-12">
    <div class="card">
        <img src="{{URL::asset('img/eye.svg')}}"  class=" mx-auto d-block img-fluid" width="60">
        <h1 class="main-color text-center">   الشفافية </h1>
        <p class="text-center">  نظام العمل لدينا مبنى على الصدق والنزاهة . لذلك نتعامل مع العميل بنظام فواتير شفاف بدون اي رسوم مخفية .
        </p>
    </div>
</div>

<div class="col-md-4 col-sm-12">
    <div class="card">
        <img src="{{URL::asset('img/speed.svg')}}"  class=" mx-auto d-block img-fluid" width="60">
        <h1 class="main-color text-center">   السرعة </h1>
        <p class="text-center">                تفهمنا لقيمة الوقت في عالم الأعمال يدفعنا لاستنفار جميع ادواتنا لإنجاز المعاملات بسرعة وكفاءة.
        </p>


    </div>
</div>

<div class="col-md-4 col-sm-12">
    <div class="card">
        <img src="{{URL::asset('img/checked.svg')}}"  class=" mx-auto d-block img-fluid" width="60">
        <h1 class="main-color text-center">   الثقة </h1>
        <p class="text-center">
            خبراتنا في المجال تعتبر ركيزة لعميلنا يمكنه الاعتماد عليها لتأسيس اعمالة التجارية ومتابعتها . ثقتك فينا محفزة لفريقنا .

        </p>

    </div>
</div>
</div>

</section>

 <section class="pro mt-5">
<div class="image"></div>

            <h1 class="text-center text-light">خدمة برو للشركات القائمة</h1>
            <p class="text-center text-light">

                نمتلك فريق تنفيذي متميز لخدمة برو يقومون بمتابعة ملف شركتك وإنجاز كافة معاملاتك الحكومية وتقديم تقارير شهرية .
ونضمن لك السرية التامة

            </p>

    </div>
    <div id="timeline-wrap">
        <div id="timeline"></div>


        <div class="marker mlast timeline-icon four">

          <i class="fa fa-pencil"></i>

        </div>

        <div class="marker m3 timeline-icon three">

          <i class="fab fa-cc-visa"></i>
        </div>

        <div class="marker m2 timeline-icon two">
            <i class="fa fa-list"></i>

        </div>
        <!-- / marker -->
        <div class="marker mfirst timeline-icon one">
            <i class="fa fa-check"></i>
        </div>


      </div>


    </section>



    <section class="our_company_services mt-2 container">

<div class="row" >

<div class="col-md-6 col-sm-12">
    <h1 class="text-right main-color mt-4 "> خدمات تأسيس الشركات  </h1>

 <ul>

    <li>  <p class="text-right" >كافة خدمات انشاء الشركات في دبي بأقل التكاليف  <i class="fa fa-check-circle main-color"></i></p> </li>
    <li>
        <p class="text-right" >
        توفير مكاتب بأسعار بسيطة وفي أفضل الأماكن
          <i class="fa fa-check-circle main-color"></i>
        </p>
    </li>

        <p class="text-right" >
            إضافة نشاط اقتصادي جديد أو إلغاء نشاط حالي
                  <i class="fa fa-check-circle main-color"></i>
        </p>
    </li>
    <li>

        <p class="text-right" >
            توفير وكيل خدمات بسعر منافس.
          <i class="fa fa-check-circle main-color"></i>
        </p>
    </li>
    <li>
        <p class="text-right" >
            جميع خدمات رجال الأعمال
          <i class="fa fa-check-circle main-color"></i>
        </p>
    </li>
    <li>
        <p class="text-right" >
            إلغاء الرخص التجارية
            <i class="fa fa-check-circle main-color"></i>
        </p>
    </li>

    <li>
        <p class="text-right" >
            تجميد الرخص التجارية.
            <i class="fa fa-check-circle main-color"></i>
        </p>
    </li>






</ul>

</div>
<div class="col-md-6 col-sm-12">
 <div class="back_comany_image">

    <img src="{{URL::asset('img/workers.jpg')}}"  class=" mx-auto d-block img-fluid" >

</div>
</div>
</div>

    </section>


    <section class="our_document_services mt-2 container">

<div class="row" >


<div class="col-md-6 col-sm-12">

<div class="back_document_image">

    <img src="{{URL::asset('img/workers.jpg')}}"  class=" mx-auto d-block img-fluid" >

</div>
</div>
<div class="col-md-6 col-sm-12">
    <h1 class="text-right green-main-color mt-4 "> خدمات تخليص المعاملات </h1>
    <ul>

       <li>  <p class="text-right" >
        تخليص جميع المعاملات الحكومية
        <i class="fa fa-check-circle green-main-color"></i></p> </li>
       <li>
           <p class="text-right" >
            تخليص معاملات وزارة العمل والعمال (تسهيل)
            <i class="fa fa-check-circle green-main-color"></i>
           </p>
       </li>

           <p class="text-right" >
            تخليص معاملات الجوازات (أمر)
            <i class="fa fa-check-circle green-main-color"></i>
           </p>
       </li>
       <li>

           <p class="text-right" >
            إصدار الإقامات العائلية
            <i class="fa fa-check-circle green-main-color"></i>
           </p>
       </li>
       <li>
           <p class="text-right" >
            تخليص المعاملات بالمحاكم والنيابات
            <i class="fa fa-check-circle green-main-color"></i>
           </p>
       </li>







   </ul>

   </div>
</div>

    </section>
    <section class="our_tourism_services">

        <div class="row" >

            <div class="col-md-6 col-sm-12">
                <h1 class="text-right yello-main-color mt-4 ">  تأشيرات سياحية     </h1>

             <ul>

                <li>
                    <p class="text-right" >
إصدار التأشيرات السياحية                      <i class="fa fa-check-circle yello-main-color"></i>
                    </p>
                </li>

                    <p class="text-right" >
تجديد التأشيرات السياحية
                        <i class="fa fa-check-circle yello-main-color"></i>
                    </p>
                </li>
                <li>






            </ul>

            </div>
            <div class="col-md-6 col-sm-12">
             <div class="back_comany_image">

                <img src="{{URL::asset('img/workers.jpg')}}"  class=" mx-auto d-block img-fluid" >

            </div>
            </div>
            </div>

    </section>
    <div class="container mt-5 mb-5">
        <h1 class="text-center main-color">  شركائنا</h1>
    <div class="owl-carousel">

        <div>  <img src="{{URL::asset('img/tasheel.png')}}"  class=" mx-auto d-block img-fluid" width="50"> </div>
        <div>  <img src="{{URL::asset('img/tasheel.png')}}"  class=" mx-auto d-block img-fluid" width="50"> </div>
        <div>  <img src="{{URL::asset('img/tasheel.png')}}"  class=" mx-auto d-block img-fluid" width="50"> </div>
        <div>  <img src="{{URL::asset('img/tasheel.png')}}"  class=" mx-auto d-block img-fluid" width="50"> </div>

      </div>



    </div>



    <div class="footer" dir="rtl">
        <div class="heading">
            <h1 class="logo"><img src="{{URL::asset('img/logo.png')}}" width="200" class="img-fluid"> </h1>
        </div>
        <div class="contents">
          <div class="services" dir="rtl">
            <h4  class="text-right">خدماتنا</h4>
            <p class="text-right"><a href="#">التأشيرات السياحية</a></p>
            <p class="text-right"><a href="#">خدمات تخليص المعاملات</a></p>
            <p class="text-right"><a href="#">تأشيرات سياحية</a></p>
          </div>
          <div class="social-media" dir="rtl">
            <h4 class="text-right">التواصل الاجتماعي</h4>
            <p class="text-right">
              <a  href="https://www.facebook.com/topconnect.ae"
                ><i class="fab fa-facebook"></i> فيس بوك</a
              >
            </p>
            <p class="text-right">
              <a class="text-right" href="https://twitter.com/TOPCONNECT6"
                ><i class="fab fa-twitter"></i> تويتر</a
              >
            </p>


            <p class="text-right">
              <a href="https://www.instagram.com/topconnect101"
                ><i class="fab fa-instagram"></i> انستغرام</a
              >
            </p>
          </div>
          <div class="links">
            <h4 class="text-right"> روابط مختصرة</h4>
            <p class="text-right"><a href="#">الرئيسية</a></p>
            <p class="text-right"><a href="#">من نحن </a></p>
            <p class="text-right"><a href="#">المدونة</a></p>

          </div>
          <div class="details">
            <h4 class="address text-right">العنوان</h4>
            <p class="text-right">
                مركز دبي للتسوق مقابل ديره <br> سيتي سنتر الطابق الأول مكتب رقم 49
            </p>
            <h4 class="mobile text-right">موبايل</h4>
            <p class="text-right"><a href="#">971561049792+</a></p>
            <h4 class="mail text-right" >ايميل</h4>
            <p  class="text-right"><a href="#">topconnect101@gmail.com</a></p>
          </div>
        </div>
        <footer>
          <hr />

           2021 جميع الحقوق محفوظة &copy; TopConnect
        </footer>
      </div>
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
     crossorigin="anonymous" referrerpolicy="no-referrer"></script>

     <script>
$(document).ready(function(){
  $(".owl-carousel").owlCarousel({
    items:6,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:2000,
    autoplayHoverPause:true

});

});
         </script>
</html>


