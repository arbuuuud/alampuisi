<?php

/* D:\xampp\htdocs\alampuisi/themes/alampuisi/layouts/default.htm */
class __TwigTemplate_cecd9b0a5a7dae7e773c8a4728a4b4ee59c6f5587fd8b08ba6cfa869cfcae0ea extends Twig_Template
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
        <meta http-equiv=\"Copyright\" content=\"mindimedia\" />
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
        <header class=\"big-img\" id=\"big-img\" style=\"background-image: url(\"full_room-celebrity-suite-bedroom\"; transition: 0.15s;\">
            ";
        // line 85
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("nav"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 86
        echo "        </header>


        <!-- Content -->
            ";
        // line 90
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 91
        echo "

        <!-- Footer -->
        <footer>
            ";
        // line 95
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 96
        echo "        </footer>
        </div>

    <!-- JavaScript -->
    <!-- <script src=\"https://maps.googleapis.com/maps/api/js\"></script> -->
        <!-- Scripts -->

        <script src=\"";
        // line 103
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/vendor/alampuisi/js/modernizr.custom.js", 1 => "assets/vendor/alampuisi/js/jquery.js", 2 => "assets/vendor/alampuisi/js/bootstrap.min.js", 3 => "assets/vendor/alampuisi/js/jquery-scrolltofixed-min.js", 4 => "assets/vendor/alampuisi/js/chosen.jquery.min.js", 5 => "assets/vendor/alampuisi/js/datepicker.js", 6 => "assets/vendor/alampuisi/js/bootstrap-timepicker.min.js", 7 => "assets/vendor/alampuisi/owl-carousel/owl.carousel.js", 8 => "assets/vendor/alampuisi/js/toucheffects.js", 9 => "assets/vendor/alampuisi/js/jquery.prettyPhoto.js", 10 => "assets/vendor/alampuisi/js/jquery.scrollbar.min.js", 11 => "assets/vendor/alampuisi/js/lightslider.min.js", 12 => "assets/vendor/alampuisi/js/responsive-menu.min.js", 13 => "assets/vendor/alampuisi/js/main.js"));
        // line 118
        echo "\"></script>
        ";
        // line 119
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 120
        echo "        ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 121
        echo "             <script type=\"text/javascript\">
                        var images = [\"Entrance-1.jpg\",\"accomodation/Pool-Villa-17.jpg\",\"accomodation/onetwobed/Suite-Pool-Villa.jpg\"];
            \$(function () {
                var i = 0;
                \$(\"#big-img\").css(\"background-image\", \"url(upload/alampuisi/\" + images[i] + \")\");
                setInterval(function () {
                    i++;
                    if (i == images.length) {
                        i = 0;
                    }
                    \$(\"#big-img\").stop().animate({opacity: 1}, 2000, function(){
                        \$(this).css({'background-image': \"url(upload/alampuisi/\" + images[i] + \")\"}).animate({opacity: 1},{duration:2000});
                    });
                }, 8000);
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
        return "D:\\xampp\\htdocs\\alampuisi/themes/alampuisi/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 121,  151 => 120,  144 => 119,  141 => 118,  139 => 103,  130 => 96,  126 => 95,  120 => 91,  118 => 90,  112 => 86,  108 => 85,  96 => 75,  94 => 64,  89 => 61,  86 => 60,  31 => 8,  25 => 5,  19 => 1,);
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
/*         <meta http-equiv="Copyright" content="mindimedia" />*/
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
/*         <header class="big-img" id="big-img" style="background-image: url("full_room-celebrity-suite-bedroom"; transition: 0.15s;">*/
/*             {% partial "nav" %}*/
/*         </header>*/
/* */
/* */
/*         <!-- Content -->*/
/*             {% page %}*/
/* */
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
/*         'assets/vendor/alampuisi/js/main.js'*/
/*         ]|theme }}"></script>*/
/*         {% framework extras %}*/
/*         {% scripts %}*/
/*              <script type="text/javascript">*/
/*                         var images = ["Entrance-1.jpg","accomodation/Pool-Villa-17.jpg","accomodation/onetwobed/Suite-Pool-Villa.jpg"];*/
/*             $(function () {*/
/*                 var i = 0;*/
/*                 $("#big-img").css("background-image", "url(upload/alampuisi/" + images[i] + ")");*/
/*                 setInterval(function () {*/
/*                     i++;*/
/*                     if (i == images.length) {*/
/*                         i = 0;*/
/*                     }*/
/*                     $("#big-img").stop().animate({opacity: 1}, 2000, function(){*/
/*                         $(this).css({'background-image': "url(upload/alampuisi/" + images[i] + ")"}).animate({opacity: 1},{duration:2000});*/
/*                     });*/
/*                 }, 8000);*/
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
