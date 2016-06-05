<?php

/* D:\xampp\htdocs\alampuisi/themes/alampuisi/layouts/hotel-detail.htm */
class __TwigTemplate_e32ce405ae76ca7273f52a70478a652e90069f8abe8cf483dd768f315dade9dd extends Twig_Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\" lang=\"en\">
<html>
    <head>
        <title>Alam Puisi - ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
        <meta name=\"author\" content=\"October CMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo $this->env->getExtension('CMS')->themeFilter("assets/themes/alampuisi/upload/logo.png");
        echo "\" />
         <meta charset=\"utf-8\" />
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"robots\" content=\"index, follow\" />
        <meta name=\"description\" content=\"Home - Alam Puisi in Ubud - Villas that Capture The Poetry of Nature.\" />
        <meta name=\"keywords\" content=\"\" />
        <meta http-equiv=\"Copyright\" content=\"popojicms\" />
        <meta name=\"author\" content=\"Dwira Survivor\" />
        <meta http-equiv=\"imagetoolbar\" content=\"no\" />
        <meta name=\"language\" content=\"Indonesia\" />
        <meta name=\"revisit-after\" content=\"7\" />
        <meta name=\"webcrawlers\" content=\"all\" />
        <meta name=\"rating\" content=\"general\" />
        <meta name=\"spiders\" content=\"all\" />

        <!-- Social Media Meta -->
        <meta property=\"place:location:latitude\" content=\"13.062616\" /> <!-- Silahkan disesuaikan -->
        <meta property=\"place:location:longitude\" content=\"80.229508\" /> <!-- Silahkan disesuaikan -->
        <meta property=\"business:contact_data:street_address\" content=\"Street Name\" /> <!-- Silahkan disesuaikan -->
        <meta property=\"business:contact_data:locality\" content=\"City Name\" /> <!-- Silahkan disesuaikan -->
        <meta property=\"business:contact_data:postal_code\" content=\"ZIP Code\" /> <!-- Silahkan disesuaikan -->
        <meta property=\"business:contact_data:country_name\" content=\"Country\" /> <!-- Silahkan disesuaikan -->
        <meta property=\"business:contact_data:email\" content=\"contact@mail.com\" /> <!-- Silahkan disesuaikan -->
        <meta property=\"business:contact_data:phone_number\" content=\"+91 1234567890\" /> <!-- Silahkan disesuaikan -->
        <meta property=\"business:contact_data:website\" content=\"index.html\" />

        <meta property=\"og:type\" content=\"article\" /> <!-- Card type bisa di ganti article, website, blog dan profile -->
        <meta property=\"profile:first_name\" content=\"Facebook_First_Name\" /> <!-- Silahkan disesuaikan -->
        <meta property=\"profile:last_name\" content=\"Facebook_Last_Name\" /> <!-- Silahkan disesuaikan -->
        <meta property=\"profile:username\" content=\"Facebook_Username\" /> <!-- Silahkan disesuaikan -->
        <meta property=\"og:title\" content=\"Home - Alam Puisi in Ubud\" />
        <meta property=\"og:description\" content=\"Alam Puisi in Ubud - Villas that Capture The Poetry of Nature.\" />
        
        <meta property=\"og:image\" content=\"favicon.png\" />
        <meta property=\"og:url\" content=\"index.html\" />
        <meta property=\"og:site_name\" content=\"Alam Puisi in Ubud - Villas that Capture The Poetry of Nature.\" />
        <meta property=\"fb:admins\" content=\"Facebook_ID\" /> <!-- Silahkan disesuaikan -->

        <meta name=\"twitter:card\" content=\"summary\" />  <!-- Card type jangan di ganti -->
        <meta name=\"twitter:site\" content=\"Alam Puisi in Ubud - Villas that Capture The Poetry of Nature.\" />
        <meta name=\"twitter:title\" content=\"Home - Alam Puisi in Ubud - Villas that Capture The Poetry of Nature.\" />
        <meta name=\"twitter:description\" content=\"Alam Puisi in Ubud - Villas that Capture The Poetry of Nature.\" />
        <meta name=\"twitter:creator\" content=\"Twitter_Username\" /> <!-- Silahkan disesuaikan -->
        <meta name=\"twitter:image:src\" content=\"favicon.png\" />
        <meta name=\"twitter:domain\" content=\"index.html\" />

        <meta itemprop=\"name\" content=\"Home - Alam Puisi in Ubud - Villas that Capture The Poetry of Nature.\" />
        <meta itemprop=\"description\" content=\"Alam Puisi in Ubud - Villas that Capture The Poetry of Nature.\" />
        <meta itemprop=\"image\" content=\"favicon.png\" />

        <!-- Mobile Specific Meta -->
        ";
        // line 60
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 61
        echo "        <!-- Stylesheets -->


        <link href=\"";
        // line 64
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/vendor/alampuisi/css/bootstrap.min.css", 1 => "assets/vendor/alampuisi/css/style.css", 2 => "assets/vendor/alampuisi/font-awesome/css/font-awesome.min.css", 3 => "assets/vendor/alampuisi/css/chosen.css", 4 => "assets/vendor/alampuisi/owl-carousel/owl.carousel.css", 5 => "assets/vendor/alampuisi/owl-carousel/owl.theme.css", 6 => "assets/vendor/alampuisi/css/prettyPhoto.css", 7 => "assets/vendor/alampuisi/css/jquery.scrollbar.css", 8 => "assets/vendor/alampuisi/css/lightslider.css", 9 => "assets/vendor/alampuisi/css/responsive-menu.css"));
        // line 75
        echo "\" rel=\"stylesheet\">

        <link rel=\"shortcut icon\" href=\"favicon.png\" />

    </head>
    <body>

        <!-- Header -->
        <div class=\"wrapper scrollbar-dynamic\">
        <header class=\"big-img\" id=\"big-img\" style=\"background-image: url(../upload/alampuisi/accomodation/suite/ADHI0236c.jpg);transition: 0.15s;\">
            ";
        // line 85
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("nav"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 86
        echo "        </header>

    
<div class=\"category-page-title container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"main-head-title\">
                <div class=\"header-title-main\">";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</div>
                <div class=\"header-thin-border\">___</div>
            </div>
        </div>
    </div>
</div>
        <!-- Content -->
    <div class=\"container-fluid main-content-box\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-8 main-content-left-detail\">
            ";
        // line 104
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 105
        echo "                </div>
                <div class=\"col-md-4 main-content-right\" style=\"margin-top:20px;\">
                    <div class=\"box-book-right\">
                        <div class=\"main-head-title title-small\"><b>Room Reservation</b></div>
                        <div class=\"thin-border thin-border-right title-small hidden-xs\">___</div>
                        <div class=\"clearfix\">&nbsp;</div>
                        
                        <form name=\"DateSelect\" action=\"http://www.globekey.com/reserve.php\" method=\"POST\" target=\"_self\">

                         <input type=\"hidden\" name=\"settings1\" value=\"daysinAdvance=1;numberNights=1;numberYears=2;numberNightsMin=1;\">
                          <input type=\"hidden\" name=\"settings2\" value=\"wdDisplay=1;numberNightsDisplay=1;departDateDisplay=1;\">
                          <input type=\"hidden\" name=\"sh\" value=\"yes\">
                          <input type=\"hidden\" name=\"lang\" value=\"en\">
                          <input type=\"hidden\" name=\"hid\" value=\"DPS5180\">

                          <input type=\"hidden\" id=\"fd\" name=\"fd\" value=\"4\">
                          <input type=\"hidden\" id=\"fm\" name=\"fm\" value=\"6\">
                          <input type=\"hidden\" id=\"fy\" name=\"fy\" value=\"2016\">
                          <input type=\"hidden\" id=\"td\" name=\"td\" value=\"6\">
                          <input type=\"hidden\" id=\"tm\" name=\"tm\" value=\"6\">
                          <input type=\"hidden\" id=\"ty\" name=\"ty\" value=\"2016\">
                            <div class=\"row\">
                                <div class=\"col-md-6 form-group form-group-book\">
                                    <div class=\"right-inner-addon\">
                                        <i class=\"fa fa-calendar\"></i>

                                        <input type=\"text\" id=\"dayin\" class=\"form-control input-datepicker box-input-book\" data-date-format=\"mm/dd/yyyy\" placeholder=\"Check-In\" />
                                    </div>
                                </div>
                                <div class=\"col-md-6 form-group form-group-book\">
                                    <div class=\"right-inner-addon\">
                                        <i class=\"fa fa-calendar\"></i>
                                         <input type=\"text\" id=\"dayout\" class=\"form-control input-datepicker box-input-book\" data-date-format=\"mm/dd/yyyy\" placeholder=\"Check-Out\" />
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-6 form-group form-group-book\">
                                    <select class=\"form-control box-input-book chosen-select\" name=\"adult\" placeholder=\"Adults\">
                                        <option value=\"1\">Adults</option>
                                        <option value=\"1\">1</option>
                                        <option value=\"2\">2</option>
                                        <option value=\"3\">3</option>
                                        <option value=\"4\">4</option>
                                    </select>
                                </div>
                            <!-- </div>
                            <div class=\"row\"> -->
                                <!-- <div class=\"col-md-6 form-group form-group-book\">
                                    <select class=\"form-control box-input-book chosen-select\" name=\"children\" placeholder=\"Children\">
                                        <option value=\"0\">Children</option>
                                            <option value=\"0\">0</option>
                                            <option value=\"1\">1</option>
                                            <option value=\"2\">2</option>
                                            <option value=\"3\">3</option>
                                            <option value=\"4\">4</option>
                                        </select>
                                </div> -->
                                <div class=\"col-md-6 form-group form-group-book\">
                                    <select class=\"form-control box-input-book chosen-select\" name=\"numrooms\" placeholder=\"Rooms\">
                                        <option value=\"1\">Rooms</option>
                                            <option value=\"1\">1</option>
                                            <option value=\"2\">2</option>
                                            <option value=\"3\">3</option>
                                            <option value=\"4\">4</option>
                                            <option value=\"5\">5</option>
                                        </select>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-md-12 text-center\" style=\"padding-left:5px; padding-right:5px;\">
                                    <button type=\"submit\" class=\"btn btn-trans btn-trans-sm btn-sm btn-trans-red text-uppercase\" style=\"width:100%;\">Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"main-content-box-accom-ruler\">&nbsp;</div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"main-head-title title-small\"><b>Other Room</b></div>
                            <div class=\"thin-border thin-border-right title-small hidden-xs\">___</div>
                            <div class=\"clearfix\">&nbsp;</div>
                        </div>
                        <div class=\"col-md-12 col-sm-6 col-xs-12\">
                            <div class=\"grid3\">
                                <figure class=\"item effect-ruby\">
                                    <img src=\"";
        // line 195
        echo url("upload/alampuisi/accomodation/suite/ADHI0245c.jpg");
        echo "\" />
                                    <figcaption>
                                        <p>
                                            <a href=\"";
        // line 198
        echo url("/roomrates");
        echo "\" class=\"btn btn-trans text-uppercase\">See Room</a>
                                        </p>
                                        <a href=\"";
        // line 200
        echo url("/roomrates");
        echo "\">View more</a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Footer -->
        <footer>
            ";
        // line 213
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 214
        echo "        </footer>
        </div>

    <!-- JavaScript -->
    <!-- <script src=\"https://maps.googleapis.com/maps/api/js\"></script> -->
        <!-- Scripts -->

        <script src=\"";
        // line 221
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/vendor/alampuisi/js/modernizr.custom.js", 1 => "assets/vendor/alampuisi/js/jquery.js", 2 => "assets/vendor/alampuisi/js/bootstrap.min.js", 3 => "assets/vendor/alampuisi/js/jquery-scrolltofixed-min.js", 4 => "assets/vendor/alampuisi/js/chosen.jquery.min.js", 5 => "assets/vendor/alampuisi/js/datepicker.js", 6 => "assets/vendor/alampuisi/js/bootstrap-timepicker.min.js", 7 => "assets/vendor/alampuisi/owl-carousel/owl.carousel.js", 8 => "assets/vendor/alampuisi/js/toucheffects.js", 9 => "assets/vendor/alampuisi/js/jquery.prettyPhoto.js", 10 => "assets/vendor/alampuisi/js/jquery.scrollbar.min.js", 11 => "assets/vendor/alampuisi/js/lightslider.min.js", 12 => "assets/vendor/alampuisi/js/responsive-menu.min.js", 13 => "assets/vendor/alampuisi/js/main-category.js"));
        // line 236
        echo "\"></script>
        ";
        // line 237
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 238
        echo "        ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 239
        echo "         <script type=\"text/javascript\">
            \$(function () {
                \$( \"#dayin\" ).change(function() {
                    var dateddmmyyyy = \$( \"#dayin\" ).val().split('/');
                    \$(\"input[name=fd]\").val(dateddmmyyyy[1]);
                    \$(\"input[name=fm]\").val(dateddmmyyyy[0]);
                    \$(\"input[name=fy]\").val(dateddmmyyyy[2]);
                });
                \$( \"#dayout\" ).change(function() {
                    var dateddmmyyyy = \$( \"#dayout\" ).val().split('/');
                    \$(\"input[name=td]\").val(dateddmmyyyy[1]);
                    \$(\"input[name=tm]\").val(dateddmmyyyy[0]);
                    \$(\"input[name=ty]\").val(dateddmmyyyy[2]);
                });
            });
        </script>

    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\alampuisi/themes/alampuisi/layouts/hotel-detail.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 239,  281 => 238,  274 => 237,  271 => 236,  269 => 221,  260 => 214,  256 => 213,  240 => 200,  235 => 198,  229 => 195,  137 => 105,  135 => 104,  121 => 93,  112 => 86,  108 => 85,  96 => 75,  94 => 64,  89 => 61,  86 => 60,  31 => 8,  25 => 5,  19 => 1,);
    }
}
/* <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">*/
/* <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">*/
/* <html>*/
/*     <head>*/
/*         <title>Alam Puisi - {{ this.page.title }}</title>*/
/*         <meta name="author" content="October CMS">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         <link rel="icon" type="image/png" href="{{ 'assets/themes/alampuisi/upload/logo.png'|theme }}" />*/
/*          <meta charset="utf-8" />*/
/*         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge" />*/
/*         <meta name="robots" content="index, follow" />*/
/*         <meta name="description" content="Home - Alam Puisi in Ubud - Villas that Capture The Poetry of Nature." />*/
/*         <meta name="keywords" content="" />*/
/*         <meta http-equiv="Copyright" content="popojicms" />*/
/*         <meta name="author" content="Dwira Survivor" />*/
/*         <meta http-equiv="imagetoolbar" content="no" />*/
/*         <meta name="language" content="Indonesia" />*/
/*         <meta name="revisit-after" content="7" />*/
/*         <meta name="webcrawlers" content="all" />*/
/*         <meta name="rating" content="general" />*/
/*         <meta name="spiders" content="all" />*/
/* */
/*         <!-- Social Media Meta -->*/
/*         <meta property="place:location:latitude" content="13.062616" /> <!-- Silahkan disesuaikan -->*/
/*         <meta property="place:location:longitude" content="80.229508" /> <!-- Silahkan disesuaikan -->*/
/*         <meta property="business:contact_data:street_address" content="Street Name" /> <!-- Silahkan disesuaikan -->*/
/*         <meta property="business:contact_data:locality" content="City Name" /> <!-- Silahkan disesuaikan -->*/
/*         <meta property="business:contact_data:postal_code" content="ZIP Code" /> <!-- Silahkan disesuaikan -->*/
/*         <meta property="business:contact_data:country_name" content="Country" /> <!-- Silahkan disesuaikan -->*/
/*         <meta property="business:contact_data:email" content="contact@mail.com" /> <!-- Silahkan disesuaikan -->*/
/*         <meta property="business:contact_data:phone_number" content="+91 1234567890" /> <!-- Silahkan disesuaikan -->*/
/*         <meta property="business:contact_data:website" content="index.html" />*/
/* */
/*         <meta property="og:type" content="article" /> <!-- Card type bisa di ganti article, website, blog dan profile -->*/
/*         <meta property="profile:first_name" content="Facebook_First_Name" /> <!-- Silahkan disesuaikan -->*/
/*         <meta property="profile:last_name" content="Facebook_Last_Name" /> <!-- Silahkan disesuaikan -->*/
/*         <meta property="profile:username" content="Facebook_Username" /> <!-- Silahkan disesuaikan -->*/
/*         <meta property="og:title" content="Home - Alam Puisi in Ubud" />*/
/*         <meta property="og:description" content="Alam Puisi in Ubud - Villas that Capture The Poetry of Nature." />*/
/*         */
/*         <meta property="og:image" content="favicon.png" />*/
/*         <meta property="og:url" content="index.html" />*/
/*         <meta property="og:site_name" content="Alam Puisi in Ubud - Villas that Capture The Poetry of Nature." />*/
/*         <meta property="fb:admins" content="Facebook_ID" /> <!-- Silahkan disesuaikan -->*/
/* */
/*         <meta name="twitter:card" content="summary" />  <!-- Card type jangan di ganti -->*/
/*         <meta name="twitter:site" content="Alam Puisi in Ubud - Villas that Capture The Poetry of Nature." />*/
/*         <meta name="twitter:title" content="Home - Alam Puisi in Ubud - Villas that Capture The Poetry of Nature." />*/
/*         <meta name="twitter:description" content="Alam Puisi in Ubud - Villas that Capture The Poetry of Nature." />*/
/*         <meta name="twitter:creator" content="Twitter_Username" /> <!-- Silahkan disesuaikan -->*/
/*         <meta name="twitter:image:src" content="favicon.png" />*/
/*         <meta name="twitter:domain" content="index.html" />*/
/* */
/*         <meta itemprop="name" content="Home - Alam Puisi in Ubud - Villas that Capture The Poetry of Nature." />*/
/*         <meta itemprop="description" content="Alam Puisi in Ubud - Villas that Capture The Poetry of Nature." />*/
/*         <meta itemprop="image" content="favicon.png" />*/
/* */
/*         <!-- Mobile Specific Meta -->*/
/*         {% styles %}*/
/*         <!-- Stylesheets -->*/
/* */
/* */
/*         <link href="{{ [*/
/*         'assets/vendor/alampuisi/css/bootstrap.min.css',*/
/*         'assets/vendor/alampuisi/css/style.css',*/
/*         'assets/vendor/alampuisi/font-awesome/css/font-awesome.min.css',*/
/*         'assets/vendor/alampuisi/css/chosen.css',*/
/*         'assets/vendor/alampuisi/owl-carousel/owl.carousel.css',*/
/*         'assets/vendor/alampuisi/owl-carousel/owl.theme.css',*/
/*         'assets/vendor/alampuisi/css/prettyPhoto.css',*/
/*         'assets/vendor/alampuisi/css/jquery.scrollbar.css',*/
/*         'assets/vendor/alampuisi/css/lightslider.css',*/
/*         'assets/vendor/alampuisi/css/responsive-menu.css'*/
/*         ]|theme }}" rel="stylesheet">*/
/* */
/*         <link rel="shortcut icon" href="favicon.png" />*/
/* */
/*     </head>*/
/*     <body>*/
/* */
/*         <!-- Header -->*/
/*         <div class="wrapper scrollbar-dynamic">*/
/*         <header class="big-img" id="big-img" style="background-image: url(../upload/alampuisi/accomodation/suite/ADHI0236c.jpg);transition: 0.15s;">*/
/*             {% partial "nav" %}*/
/*         </header>*/
/* */
/*     */
/* <div class="category-page-title container">*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <div class="main-head-title">*/
/*                 <div class="header-title-main">{{ this.page.title }}</div>*/
/*                 <div class="header-thin-border">___</div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/*         <!-- Content -->*/
/*     <div class="container-fluid main-content-box">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-8 main-content-left-detail">*/
/*             {% page %}*/
/*                 </div>*/
/*                 <div class="col-md-4 main-content-right" style="margin-top:20px;">*/
/*                     <div class="box-book-right">*/
/*                         <div class="main-head-title title-small"><b>Room Reservation</b></div>*/
/*                         <div class="thin-border thin-border-right title-small hidden-xs">___</div>*/
/*                         <div class="clearfix">&nbsp;</div>*/
/*                         */
/*                         <form name="DateSelect" action="http://www.globekey.com/reserve.php" method="POST" target="_self">*/
/* */
/*                          <input type="hidden" name="settings1" value="daysinAdvance=1;numberNights=1;numberYears=2;numberNightsMin=1;">*/
/*                           <input type="hidden" name="settings2" value="wdDisplay=1;numberNightsDisplay=1;departDateDisplay=1;">*/
/*                           <input type="hidden" name="sh" value="yes">*/
/*                           <input type="hidden" name="lang" value="en">*/
/*                           <input type="hidden" name="hid" value="DPS5180">*/
/* */
/*                           <input type="hidden" id="fd" name="fd" value="4">*/
/*                           <input type="hidden" id="fm" name="fm" value="6">*/
/*                           <input type="hidden" id="fy" name="fy" value="2016">*/
/*                           <input type="hidden" id="td" name="td" value="6">*/
/*                           <input type="hidden" id="tm" name="tm" value="6">*/
/*                           <input type="hidden" id="ty" name="ty" value="2016">*/
/*                             <div class="row">*/
/*                                 <div class="col-md-6 form-group form-group-book">*/
/*                                     <div class="right-inner-addon">*/
/*                                         <i class="fa fa-calendar"></i>*/
/* */
/*                                         <input type="text" id="dayin" class="form-control input-datepicker box-input-book" data-date-format="mm/dd/yyyy" placeholder="Check-In" />*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="col-md-6 form-group form-group-book">*/
/*                                     <div class="right-inner-addon">*/
/*                                         <i class="fa fa-calendar"></i>*/
/*                                          <input type="text" id="dayout" class="form-control input-datepicker box-input-book" data-date-format="mm/dd/yyyy" placeholder="Check-Out" />*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="row">*/
/*                                 <div class="col-md-6 form-group form-group-book">*/
/*                                     <select class="form-control box-input-book chosen-select" name="adult" placeholder="Adults">*/
/*                                         <option value="1">Adults</option>*/
/*                                         <option value="1">1</option>*/
/*                                         <option value="2">2</option>*/
/*                                         <option value="3">3</option>*/
/*                                         <option value="4">4</option>*/
/*                                     </select>*/
/*                                 </div>*/
/*                             <!-- </div>*/
/*                             <div class="row"> -->*/
/*                                 <!-- <div class="col-md-6 form-group form-group-book">*/
/*                                     <select class="form-control box-input-book chosen-select" name="children" placeholder="Children">*/
/*                                         <option value="0">Children</option>*/
/*                                             <option value="0">0</option>*/
/*                                             <option value="1">1</option>*/
/*                                             <option value="2">2</option>*/
/*                                             <option value="3">3</option>*/
/*                                             <option value="4">4</option>*/
/*                                         </select>*/
/*                                 </div> -->*/
/*                                 <div class="col-md-6 form-group form-group-book">*/
/*                                     <select class="form-control box-input-book chosen-select" name="numrooms" placeholder="Rooms">*/
/*                                         <option value="1">Rooms</option>*/
/*                                             <option value="1">1</option>*/
/*                                             <option value="2">2</option>*/
/*                                             <option value="3">3</option>*/
/*                                             <option value="4">4</option>*/
/*                                             <option value="5">5</option>*/
/*                                         </select>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="row">*/
/*                                 <div class="col-md-12 text-center" style="padding-left:5px; padding-right:5px;">*/
/*                                     <button type="submit" class="btn btn-trans btn-trans-sm btn-sm btn-trans-red text-uppercase" style="width:100%;">Book Now</button>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </form>*/
/*                     </div>*/
/*                     <div class="row">*/
/*                         <div class="col-md-12">*/
/*                             <div class="main-content-box-accom-ruler">&nbsp;</div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="row">*/
/*                         <div class="col-md-12">*/
/*                             <div class="main-head-title title-small"><b>Other Room</b></div>*/
/*                             <div class="thin-border thin-border-right title-small hidden-xs">___</div>*/
/*                             <div class="clearfix">&nbsp;</div>*/
/*                         </div>*/
/*                         <div class="col-md-12 col-sm-6 col-xs-12">*/
/*                             <div class="grid3">*/
/*                                 <figure class="item effect-ruby">*/
/*                                     <img src="{{url('upload/alampuisi/accomodation/suite/ADHI0245c.jpg')}}" />*/
/*                                     <figcaption>*/
/*                                         <p>*/
/*                                             <a href="{{url('/roomrates')}}" class="btn btn-trans text-uppercase">See Room</a>*/
/*                                         </p>*/
/*                                         <a href="{{url('/roomrates')}}">View more</a>*/
/*                                     </figcaption>*/
/*                                 </figure>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*         <!-- Footer -->*/
/*         <footer>*/
/*             {% partial "footer" %}*/
/*         </footer>*/
/*         </div>*/
/* */
/*     <!-- JavaScript -->*/
/*     <!-- <script src="https://maps.googleapis.com/maps/api/js"></script> -->*/
/*         <!-- Scripts -->*/
/* */
/*         <script src="{{ [*/
/*         'assets/vendor/alampuisi/js/modernizr.custom.js',*/
/*         'assets/vendor/alampuisi/js/jquery.js',*/
/*         'assets/vendor/alampuisi/js/bootstrap.min.js',*/
/*         'assets/vendor/alampuisi/js/jquery-scrolltofixed-min.js',*/
/*         'assets/vendor/alampuisi/js/chosen.jquery.min.js',*/
/*         'assets/vendor/alampuisi/js/datepicker.js',*/
/*         'assets/vendor/alampuisi/js/bootstrap-timepicker.min.js',*/
/*         'assets/vendor/alampuisi/owl-carousel/owl.carousel.js',*/
/*         'assets/vendor/alampuisi/js/toucheffects.js',*/
/*         'assets/vendor/alampuisi/js/jquery.prettyPhoto.js',*/
/*         'assets/vendor/alampuisi/js/jquery.scrollbar.min.js',*/
/*         'assets/vendor/alampuisi/js/lightslider.min.js',*/
/*         'assets/vendor/alampuisi/js/responsive-menu.min.js',*/
/*         'assets/vendor/alampuisi/js/main-category.js'*/
/*         ]|theme }}"></script>*/
/*         {% framework extras %}*/
/*         {% scripts %}*/
/*          <script type="text/javascript">*/
/*             $(function () {*/
/*                 $( "#dayin" ).change(function() {*/
/*                     var dateddmmyyyy = $( "#dayin" ).val().split('/');*/
/*                     $("input[name=fd]").val(dateddmmyyyy[1]);*/
/*                     $("input[name=fm]").val(dateddmmyyyy[0]);*/
/*                     $("input[name=fy]").val(dateddmmyyyy[2]);*/
/*                 });*/
/*                 $( "#dayout" ).change(function() {*/
/*                     var dateddmmyyyy = $( "#dayout" ).val().split('/');*/
/*                     $("input[name=td]").val(dateddmmyyyy[1]);*/
/*                     $("input[name=tm]").val(dateddmmyyyy[0]);*/
/*                     $("input[name=ty]").val(dateddmmyyyy[2]);*/
/*                 });*/
/*             });*/
/*         </script>*/
/* */
/*     </body>*/
/* </html>*/
