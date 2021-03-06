<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
    <!-- <script src="https://cdn.optimizely.com/js/3986509403.js"></script> -->
    <title>Davison - Turning New Ideas, Inventions, and Patents into New Products.</title>
    <link crossorigin="anonymous" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" rel="stylesheet">
    <meta name="description" content="Davison confidentially works with people to develop their new product ideas. The inventions have sold in Wal-Mart, Target, Lowes, Amazon and more."/>
    <!-- <link rel="canonical" href="http://idea.davison.com/"/> -->
    <link href="{{asset('css/css_ar.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,700,800,900|Open+Sans:400,700" rel="stylesheet">
    <!-- <link rel="shortcut icon" href="images/davison_favicon.ico" /> -->
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=3">



</head>
<body>


<div id="header" class="header">
    <div class="utility disable-sticky">
        <div class="content-wrapper">
            <div class="utility-menu">
            </div>
        </div>
    </div>

    <div class="content-wrapper">
        <div class="nav-top-mobile-wrapper" style="display: inline-block;">
            <a href="https://www.davison.com" class="logo ir" title="Davison's Home Page"><span>Davison's Home Page</span></a>

        </div>

        <ul id="nav" style="display: inline-block;float:left;margin-top: 1.4rem;">
            <li style="display: inline-block;"><a href="{{route('language.change' , 'en')}}" style="text-decoration: none;">EN </a></li>
            <li style="display: inline-block;"><a href="{{route('language.change' , 'ar')}}"  style="text-decoration: none;">AR </a></li>
        </ul>
    </div>
</div>

<main class="page">
    <div class="shape shape-lp-fan">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 283.5 19.6" preserveAspectRatio="none">
            <path class="shape-fill1" style="opacity:0.33" d="M0 0L0 18.8 141.8 4.1 283.5 18.8 283.5 0z"></path>
            <path class="shape-fill2" style="opacity:0.33" d="M0 0L0 12.6 141.8 4 283.5 12.6 283.5 0z"></path>
            <path class="shape-fill2" style="opacity:0.33" d="M0 0L0 6.4 141.8 4 283.5 6.4 283.5 0z"></path>
            <path class="shape-fill4" style="opacity:1" d="M0 0L0 1.2 141.8 4 283.5 1.2 283.5 0z"></path>
        </svg>
        <svg style="width:0;height:0;position:absolute;" aria-hidden="true" focusable="false">
            <linearGradient id="sky-gradient" x2="1" y2="1">
                <stop offset="50%" stop-color="#8cc1e0" />
                <stop offset="100%" stop-color="#3388bb" />
            </linearGradient>
        </svg>
    </div>




    <section class="lp-form">

        <div class="content-wrapper">




            <div class="left form-content">




                <a href="#form-action" class="action-button mobile-button scroll-to">قم بارسال فكرتك</a>
                <h1>قم بارسال فكرتك</h1>
                <img src="{{asset('images/ideas/company_photo.jpg')}}" class="company-photo">









                <div class="text-wrapper">
                    <p>فريق دافيسون ساعد الناس بتحقيق أفكارهم لأكثر من 30 عامًا
                        <br>
                        زطريقتنا في متناول اليد لتحويل أفكار منتجاتهم أو تطبيقاتهم إلى منتجات حقيقية على أرض الواقع. املأ نموذج تقديم الفكرة وسنرسل لك معلومات مجانية حتى تتمكن من البدء بفكرتك
                    </p>
                </div>
                <hr>
                <h3> "لماذا تعتبر  <span>"طريقة أفضل للاختراع</span></h3>
                <div class="video"><iframe src="https://player.vimeo.com/video/303498030" width="640" height="480" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>





                <hr id="form-action">
                <h2>%تظل فكرتك سرية وآمنة بنسبة 100</h2>
                <div style="text-align: right;">
                    <img src="{{asset('images/ideas/security_logos3.png')}}" class="security-logos">

                </div>





            </div>


            <div class="right">



                <div class="form">
                    <div class="form-header">

                        <h1><strong>الخطوة 1: </strong>املأ النموذج لتبدأ بفكرتك</h1>
                    </div>
                    <form id="form" class="form-base" action="{{route('step2')}}">
                        <fieldset class="pair">

                            <div style="float: right; margin-right: 0%">
                                <label for="firstname" style="float: right;">الاسم الأول </label>
                                <input type="text" name="first_name" value="{{Session::get('first_name')}}" tabindex="1">
                                @error('first_name')
                                <span style="color: red; font-size: 16px;">{{ $message }}</span>
                                @enderror
                            </div>

                            <div  style="float: left; margin-right: 3%;">
                                <label for="lastname" style="float: right;">الاسم الأخير</label>
                                <input type="text" name="last_name" value="{{Session::get('last_name')}}" tabindex="2">
                                @error('last_name')
                                <span style="color: red; font-size: 16px;">{{ $message }}</span>
                                @enderror
                            </div>

                        </fieldset>
                        <fieldset class="single">
                            <div>
                                <label for="address" style="float: right;">العنوان</label>
                                <input type="text" name="address" value="{{Session::get('address')}}" tabindex="3">
                                @error('address')
                                <span style="color: red; font-size: 16px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </fieldset>
                        <fieldset>



                            <div class="city" style="float: right;">
                                <label for="city" style="float: right;">المدينة</label>
                                <input type="text" name="city" value="{{Session::get('city')}}" tabindex="4">
                                @error('city')
                                <span style="color: red; font-size: 16px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </fieldset>
                        @php
                            $countries = \App\Country::all();
                        @endphp
                        <fieldset class="single">
                            <div>
                                <label for="country" style="float: right;">الدولة</label>
                                <select id="country" name="country" class="country" tabindex="7">
                                    <option></option>
                                    @foreach($countries as $country)
                                        <option value="{{$country->id}}">{{$country->country_name_ar}}</option>
                                    @endforeach
                                </select>
                                @error('country')
                                <span style="color: red; font-size: 16px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </fieldset>
                        <fieldset class="pair">

                            <div>
                                <label for="phone" style="float: right;">الهاتف</label>
                                <input type="text" name="phone" value="{{Session::get('phone')}}" tabindex="9">
                                @error('phone')
                                <span style="color: red; font-size: 16px;">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="email" style="float: right;">الايميل</label>
                                <input type="email" name="email" value="{{Session::get('email')}}" tabindex="8">
                                @error('email')
                                <span style="color: red; font-size: 16px;">{{ $message }}</span>
                                @enderror
                            </div>
                        </fieldset>





                        <div class="disclaimer">
                            <p><br>
                                من خلال النقر أدناه على زر "التالي" كتوقيع إلكتروني خاص بي، أوافق على الاتصال بي عن طريق مكالمة هاتفية أو مكالمة هاتفية تلقائية بما في ذلك الرسائل الصوتية المسجلة مسبقًا والرسائل النصية والبريد الإلكتروني على أي رقم أو عنوان بريد إلكتروني قمت بتقديمه وذلك بشأن خدمات دافيسون وعلم.
                                <br> .أدرك أن هذه الموافقة ليست شرطًا لشراء الخدمات

                            </p>
                        </div>





                        <fieldset class="submit" style="
                                text-align: right;
                            ">
                            <div>
                                <input name="step" type="hidden" id="step" value="2" />



                                <!-- <input type="submit" value="التالي" class="action-button"> -->
                                <button type="submit"  class="action-button btnStep1" id="step1" style="padding-right: 1rem!important;">التالي<i class="fas fa-caret-left" style="font-size: -17px;margin-right: 21px;font-size: 25px; "></i> </button>
                            </div>



                        </fieldset>
                    </form>
                </div>







            </div>
        </div>
    </section>






    <section class="store-logos-confidential">
        <h2>تم بيع أفكار عملائنا وأفكارنا الخاصة لأكثر من 1200 متجر ومورد صناعي وعبر الإنترنت
        </h2>
        <img src="{{asset('images/ideas/product_pile2019_logos.png')}}" class="store-logos">
        <img src="{{asset('images/ideas/product_pile2019b.jpg')}}" class="product-pile">
    </section>






</main>

<div class="footer firstpage">
    <div class="content-wrapper">
        <div class="legal">
            <p>
                <a href="http://www.davison.com/legal/privacy/" style="color:#38b">سياسة الخصوصية</a>
            </p>
            <p><b>يتم توفير خدمات البحث والتطوير والعرض في دافيسون وعلم مقابل رسوم مقدمة يدفعها العميل ورسوم طارئة (وهي نسبة مئوية من العائد الذي يحصل عليه العميل، إن وجد). يعد تطوير منتج جديد مسعى غير مؤكد ولا يؤدي استخدام خدمات دافيسون وعلم عادة إلى اتفاقية ترخيص أو مبيعات في أي سوق أو ربح للمخترع. لا يقوم دافيسون أو علم بتحليل الجدوى أو التسويق أو براءات الاختراع أو الربحية للأفكار المقدمة إليه</b></p>
            <p>استخدام الأسماء والشعارات والعلامات التجارية لا يمثل مصادقة مالك العلامة التجارية على خدمات أو منتجات دافيسون وعلم</p>
            <p>The Home Depot, Walmart, JC Whitney, Rite Aid, Target, Ace Hardware, Toys 'R Us, KMart, Lowe's, Sky Mall, Sears, amazon.com, Bed Bath & Beyond, Sam's Club, JoAnn Fabrics, Walgreens, Cabela's, Pepboys Auto, Avon, and Kohl's
                <br>
                جميعها علامات تجارية مسجلة لشركاتها المعنية
            </p>


        </div>


        <div class="copyright">&copy; MMXX Davison</div>
    </div>
</div>






<img src="https://secure.adnxs.com/px?id=937950&seg=11046139&t=2" width="1" height="1">





@if(Session::has('country_id'))
    @php

        $country = \App\Country::findOrFail(Session::get('country_id'));
        $countryName = $country->country_name_ar;

    @endphp
    <input  type="hidden" id="hdnSession" value="{{$countryName}}" />

@endif




<script>
    var countries = document.getElementById('country');
    var selectedCountry = document.getElementById('hdnSession').value;

    function selectCountry(country){
        for(let i=0 ; i<countries.options.length ; i++)
        {
            if(countries.options[i].text===selectedCountry  )
            {
                countries.options[i].selected = true;
                return
            }
        }
    }
    selectCountry(selectedCountry)
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="{{asset('js/jquery_ar.validate.min.js')}}"></script>
<script src="{{asset('js/validation.js')}}"></script>
</body>
</html>