<?php

/* D:\xampp\htdocs\alampuisi/themes/alampuisi/pages/special-offer/free-easy-puisi-package.htm */
class __TwigTemplate_e8dcf5a32848085e8a59dd07acf0497f6311f88519ba686c00c76c3ebb8f4993 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo $this->env->getExtension('CMS')->startBlock('styles'        );
        // line 2
        echo "    <link href=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/vendor/slick/slick.css"));
        // line 4
        echo "\" rel=\"stylesheet\">
";
        // line 1
        echo $this->env->getExtension('CMS')->endBlock(true        );
        // line 6
        echo $this->env->getExtension('CMS')->startBlock('scripts'        );
        // line 7
        echo "    <script src=\"";
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/vendor/slick/slick.js"));
        // line 9
        echo "\"></script>
    <script>
        \$(document).ready(function() {
            \$('#projectImages').slick({
                dots: true,
                infinite: true,
                speed: 500,
                fade: true,
                cssEase: 'linear',
                slidesToShow: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                pauseOnHover: true
            });
        })
    </script>
";
        // line 6
        echo $this->env->getExtension('CMS')->endBlock(true        );
        // line 26
        echo "
<div id=\"imageGallery\">
    <div data-thumb=\"";
        // line 28
        echo url("upload/alampuisi/accomodation/onetwobed/Pool-Villa-7.jpg");
        echo "\">
        <img src=\"";
        // line 29
        echo url("upload/alampuisi/accomodation/onetwobed/Pool-Villa-7.jpg");
        echo "\" />
    </div>
    <div data-thumb=\"";
        // line 31
        echo url("upload/alampuisi/accomodation/onetwobed/Pool-Villa-16.jpg");
        echo "\">
        <img src=\"";
        // line 32
        echo url("upload/alampuisi/accomodation/onetwobed/Pool-Villa-16.jpg");
        echo "\" />
    </div>
    <div data-thumb=\"";
        // line 34
        echo url("upload/alampuisi/accomodation/onetwobed/Pool-Villa-18.jpg");
        echo "\">
        <img src=\"";
        // line 35
        echo url("upload/alampuisi/accomodation/onetwobed/Pool-Villa-18.jpg");
        echo "\" />
    </div>
</div>
<div class=\"row\">
    <div class=\"col-md-12\">
        <div class=\"main-content-box-accom-ruler\" style=\"margin-top:20px;\">&nbsp;</div>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-md-12 p-detail-small\">
        <div class=\"main-head-title title-small\">Free & Easy Puisi Package</div>
        <div class=\"main-head-title title-small\">US\$ 250 For 2 Nights 3 Days</div>
        
        <div id=\"accordion\" class=\"row\">
            <div class=\"col-md-12 text-uppercase\">
                <div class=\"detail-title-box\"><em class=\"fa fa-angle-down\">&nbsp;</em> <a href=\"#collapseOne\" data-toggle=\"collapse\" data-parent=\"#accordion\"> WHY BOOK DIRECTLY TO THE WEBSITE?</a>
                </div>
            </div>
            <div id=\"collapseOne\" class=\"panel-collapse in\">
                <div class=\"col-md-12\">
                   <ul>
                        <li>Two nights stay at One Bedroom Pool Villa</li>
                        <li>Return airport transfer</li>
                        <li>Daily Breakfast for 2 persons</li>
                        <li>Daily free yoga lesson</li>
                        <li>30 minutes foot Therapy for 2 person</li>
                        <li>Daily special tropical fruit basket</li>
                        <li>Welcome drink & fresh cool towel on arrival</li>
                        <li>Free WIFI connection</li>
                        <li>Daily afternoon tea</li>
                        <li>Free 2 bottles of mineral water daily in the room/villa</li>
                        <li>Free scheduled shuttle service to and from Ubud town </li>
                        <li>Free scheduled of activities Balinese canang making during stay</li>
\t\t\t\t\t</ul>
                </div>
            </div>
            <div class=\"col-md-12 text-uppercase\">
                <div class=\"detail-title-box\"><em class=\"fa fa-angle-down\">&nbsp;</em> <a href=\"#collapseTwo\" data-toggle=\"collapse\" data-parent=\"#accordion\"> Terms and Conditions</a>
                </div>
            </div>
            <div id=\"collapseTwo\" class=\"panel-collapse in\">
                <div class=\"col-md-12\">
                    <ul>
                        <li>Rate is inclusive 21% government tax and service charge </li>
                        <li>Additional high season surcharge within period 01 July-31 August at USD 30 per night.</li>
                        <li>Additional peak season surcharge within period 15 December-5 January at USD 35 per night</li>

\t\t\t\t\t</ul>
                </div>
                <div class=\"col-md-12\">
                    <div class=\"footer-button\">
                        <a href=\"#\" onclick=\"document.getElementById('bookingfooter').submit();\" class=\"btn btn-trans text-uppercase\" >Book Now</a>
                        <a href=\"";
        // line 87
        echo url("/enquire");
        echo "\" class=\"btn btn-trans text-uppercase\" >Enquire Now</a>
                    </div>
                </div>
            </div>
        </div>                      
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\alampuisi/themes/alampuisi/pages/special-offer/free-easy-puisi-package.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 87,  80 => 35,  76 => 34,  71 => 32,  67 => 31,  62 => 29,  58 => 28,  54 => 26,  52 => 6,  34 => 9,  31 => 7,  29 => 6,  27 => 1,  24 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% put styles %}*/
/*     <link href="{{ [*/
/*         'assets/vendor/slick/slick.css',*/
/*     ]|theme }}" rel="stylesheet">*/
/* {% endput %}*/
/* {% put scripts %}*/
/*     <script src="{{ [*/
/*         'assets/vendor/slick/slick.js',*/
/*     ]|theme }}"></script>*/
/*     <script>*/
/*         $(document).ready(function() {*/
/*             $('#projectImages').slick({*/
/*                 dots: true,*/
/*                 infinite: true,*/
/*                 speed: 500,*/
/*                 fade: true,*/
/*                 cssEase: 'linear',*/
/*                 slidesToShow: 1,*/
/*                 autoplay: true,*/
/*                 autoplaySpeed: 2000,*/
/*                 pauseOnHover: true*/
/*             });*/
/*         })*/
/*     </script>*/
/* {% endput %}*/
/* */
/* <div id="imageGallery">*/
/*     <div data-thumb="{{url('upload/alampuisi/accomodation/onetwobed/Pool-Villa-7.jpg')}}">*/
/*         <img src="{{url('upload/alampuisi/accomodation/onetwobed/Pool-Villa-7.jpg')}}" />*/
/*     </div>*/
/*     <div data-thumb="{{url('upload/alampuisi/accomodation/onetwobed/Pool-Villa-16.jpg')}}">*/
/*         <img src="{{url('upload/alampuisi/accomodation/onetwobed/Pool-Villa-16.jpg')}}" />*/
/*     </div>*/
/*     <div data-thumb="{{url('upload/alampuisi/accomodation/onetwobed/Pool-Villa-18.jpg')}}">*/
/*         <img src="{{url('upload/alampuisi/accomodation/onetwobed/Pool-Villa-18.jpg')}}" />*/
/*     </div>*/
/* </div>*/
/* <div class="row">*/
/*     <div class="col-md-12">*/
/*         <div class="main-content-box-accom-ruler" style="margin-top:20px;">&nbsp;</div>*/
/*     </div>*/
/* </div>*/
/* <div class="row">*/
/*     <div class="col-md-12 p-detail-small">*/
/*         <div class="main-head-title title-small">Free & Easy Puisi Package</div>*/
/*         <div class="main-head-title title-small">US$ 250 For 2 Nights 3 Days</div>*/
/*         */
/*         <div id="accordion" class="row">*/
/*             <div class="col-md-12 text-uppercase">*/
/*                 <div class="detail-title-box"><em class="fa fa-angle-down">&nbsp;</em> <a href="#collapseOne" data-toggle="collapse" data-parent="#accordion"> WHY BOOK DIRECTLY TO THE WEBSITE?</a>*/
/*                 </div>*/
/*             </div>*/
/*             <div id="collapseOne" class="panel-collapse in">*/
/*                 <div class="col-md-12">*/
/*                    <ul>*/
/*                         <li>Two nights stay at One Bedroom Pool Villa</li>*/
/*                         <li>Return airport transfer</li>*/
/*                         <li>Daily Breakfast for 2 persons</li>*/
/*                         <li>Daily free yoga lesson</li>*/
/*                         <li>30 minutes foot Therapy for 2 person</li>*/
/*                         <li>Daily special tropical fruit basket</li>*/
/*                         <li>Welcome drink & fresh cool towel on arrival</li>*/
/*                         <li>Free WIFI connection</li>*/
/*                         <li>Daily afternoon tea</li>*/
/*                         <li>Free 2 bottles of mineral water daily in the room/villa</li>*/
/*                         <li>Free scheduled shuttle service to and from Ubud town </li>*/
/*                         <li>Free scheduled of activities Balinese canang making during stay</li>*/
/* 					</ul>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-12 text-uppercase">*/
/*                 <div class="detail-title-box"><em class="fa fa-angle-down">&nbsp;</em> <a href="#collapseTwo" data-toggle="collapse" data-parent="#accordion"> Terms and Conditions</a>*/
/*                 </div>*/
/*             </div>*/
/*             <div id="collapseTwo" class="panel-collapse in">*/
/*                 <div class="col-md-12">*/
/*                     <ul>*/
/*                         <li>Rate is inclusive 21% government tax and service charge </li>*/
/*                         <li>Additional high season surcharge within period 01 July-31 August at USD 30 per night.</li>*/
/*                         <li>Additional peak season surcharge within period 15 December-5 January at USD 35 per night</li>*/
/* */
/* 					</ul>*/
/*                 </div>*/
/*                 <div class="col-md-12">*/
/*                     <div class="footer-button">*/
/*                         <a href="#" onclick="document.getElementById('bookingfooter').submit();" class="btn btn-trans text-uppercase" >Book Now</a>*/
/*                         <a href="{{url('/enquire')}}" class="btn btn-trans text-uppercase" >Enquire Now</a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>                      */
/*     </div>*/
/* </div>*/
