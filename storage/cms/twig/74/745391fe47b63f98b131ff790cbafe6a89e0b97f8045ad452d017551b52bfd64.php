<?php

/* D:\xampp\htdocs\alampuisi/themes/alampuisi/layouts/category.htm */
class __TwigTemplate_af19172004389786b0f90b026ada0ee4376b6836f89ce6c995ac378494b6836f extends Twig_Template
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
        <!-- Your Basic Site Informations -->
        <title>Alam Puisi Villa</title>
       

        

        <!--[if lt IE 9]>
            <script src=\"http://localhost/po-content/alampuisi/js/html5shiv.js\"></script>
              <script src=\"http://localhost/po-content/alampuisi/js/respond.js\"></script>
        <![endif]-->

        <!-- Favicons -->
        <link rel=\"shortcut icon\" href=\"favicon.png\" />


        <!-- <script src=\"https://www.google.com/recaptcha/api.js\"></script> -->

    </head>
    <head>
        <title>Alam Puisi - ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
        <meta name=\"author\" content=\"October CMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 27
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
        // line 79
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 80
        echo "        <!-- Stylesheets -->


        <link href=\"";
        // line 83
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/vendor/alampuisi/css/bootstrap.min.css", 1 => "assets/vendor/alampuisi/css/style.css", 2 => "assets/vendor/alampuisi/font-awesome/css/font-awesome.min.css", 3 => "assets/vendor/alampuisi/css/chosen.css", 4 => "assets/vendor/alampuisi/owl-carousel/owl.carousel.css", 5 => "assets/vendor/alampuisi/owl-carousel/owl.theme.css", 6 => "assets/vendor/alampuisi/css/prettyPhoto.css", 7 => "assets/vendor/alampuisi/css/jquery.scrollbar.css", 8 => "assets/vendor/alampuisi/css/lightslider.css", 9 => "assets/vendor/alampuisi/css/responsive-menu.css"));
        // line 94
        echo "\" rel=\"stylesheet\">

        <link rel=\"shortcut icon\" href=\"favicon.png\" />

    </head>
    <body>

        <!-- Header -->
        <div class=\"wrapper scrollbar-dynamic\">
        <header class=\"big-img\" id=\"big-img\" style=\"background-image: url(upload/alampuisi/Environment-8.jpg);transition: 0.15s;\">
            ";
        // line 104
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("nav"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 105
        echo "        </header>
                

        <div class=\"category-page-title container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"main-head-title\">
                        <div class=\"header-title-main\">";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "</div>
                        <div class=\"header-thin-border\">___</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content -->
            ";
        // line 119
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 120
        echo "

        <!-- Footer -->
        <footer>
            ";
        // line 124
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 125
        echo "        </footer>
        </div>

    <!-- JavaScript -->
    <!-- <script src=\"https://maps.googleapis.com/maps/api/js\"></script> -->
        <!-- Scripts -->

        <script src=\"";
        // line 132
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/vendor/alampuisi/js/modernizr.custom.js", 1 => "assets/vendor/alampuisi/js/jquery.js", 2 => "assets/vendor/alampuisi/js/bootstrap.min.js", 3 => "assets/vendor/alampuisi/js/jquery-scrolltofixed-min.js", 4 => "assets/vendor/alampuisi/js/chosen.jquery.min.js", 5 => "assets/vendor/alampuisi/js/datepicker.js", 6 => "assets/vendor/alampuisi/js/bootstrap-timepicker.min.js", 7 => "assets/vendor/alampuisi/owl-carousel/owl.carousel.js", 8 => "assets/vendor/alampuisi/js/toucheffects.js", 9 => "assets/vendor/alampuisi/js/jquery.prettyPhoto.js", 10 => "assets/vendor/alampuisi/js/jquery.scrollbar.min.js", 11 => "assets/vendor/alampuisi/js/lightslider.min.js", 12 => "assets/vendor/alampuisi/js/responsive-menu.min.js", 13 => "assets/vendor/alampuisi/js/main-category.js"));
        // line 147
        echo "\"></script>
        ";
        // line 148
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 149
        echo "        ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 150
        echo "             

    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\alampuisi/themes/alampuisi/layouts/category.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 150,  183 => 149,  176 => 148,  173 => 147,  171 => 132,  162 => 125,  158 => 124,  152 => 120,  150 => 119,  140 => 112,  131 => 105,  127 => 104,  115 => 94,  113 => 83,  108 => 80,  105 => 79,  50 => 27,  44 => 24,  19 => 1,);
    }
}
/* <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">*/
/* <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">*/
/* <html>*/
/*     <head>*/
/*         <!-- Your Basic Site Informations -->*/
/*         <title>Alam Puisi Villa</title>*/
/*        */
/* */
/*         */
/* */
/*         <!--[if lt IE 9]>*/
/*             <script src="http://localhost/po-content/alampuisi/js/html5shiv.js"></script>*/
/*               <script src="http://localhost/po-content/alampuisi/js/respond.js"></script>*/
/*         <![endif]-->*/
/* */
/*         <!-- Favicons -->*/
/*         <link rel="shortcut icon" href="favicon.png" />*/
/* */
/* */
/*         <!-- <script src="https://www.google.com/recaptcha/api.js"></script> -->*/
/* */
/*     </head>*/
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
/*         <header class="big-img" id="big-img" style="background-image: url(upload/alampuisi/Environment-8.jpg);transition: 0.15s;">*/
/*             {% partial "nav" %}*/
/*         </header>*/
/*                 */
/* */
/*         <div class="category-page-title container">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <div class="main-head-title">*/
/*                         <div class="header-title-main">{{ this.page.title }}</div>*/
/*                         <div class="header-thin-border">___</div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
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
/*         'assets/vendor/alampuisi/js/main-category.js'*/
/*         ]|theme }}"></script>*/
/*         {% framework extras %}*/
/*         {% scripts %}*/
/*              */
/* */
/*     </body>*/
/* </html>*/
