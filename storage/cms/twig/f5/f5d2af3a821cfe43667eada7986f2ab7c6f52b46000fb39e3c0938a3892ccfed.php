<?php

/* D:\xampp\htdocs\alampuisi/themes/alampuisi/partials/nav.htm */
class __TwigTemplate_2402f77405fc1ce599b4b9c381ce074a9b874d6d668f7d9f9340d04fa47495af extends Twig_Template
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
        echo "<div class=\"container-fluid header-top\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 col-sm-8\">
                <div class=\"row\">
                    <div class=\"col-sm-3 language-box hidden-xs\">
                        <div class=\"dropdown\">
                            <a class=\"font-small\" data-toggle=\"dropdown\" href=\"#\">
                                Select Language <span class=\"caret\"></span>
                            </a>
                            <ul class=\"dropdown-menu dropdown-lang\" role=\"menu\" aria-labelledby=\"dLabel\">
                                <li><a href=\"javascript:void(0)\" class=\"sellang\" data-lang=\"gb\">English</a></li>
                                <!-- <li><a href=\"javascript:void(0)\" class=\"sellang\" data-lang=\"id\">Indonesia</a></li> -->
                                <!-- <li><a href=\"javascript:void(0)\" class=\"sellang\" data-lang=\"jp\">Japanese</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class=\"col-md-6 col-sm-4\">
                <div class=\"header-top-right\">
                    <a href=\"";
        // line 23
        echo url("/about");
        echo "\" class=\"font-small text-uppercase\" >About Us</a>
                    <a href=\"";
        // line 24
        echo url("/enquire");
        echo "\" class=\"font-small text-uppercase\" >Enquire Now</a>
                    <a href=\"#\" class=\"font-small text-uppercase\" target=\"_blank\">Quick Reservation</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"container-fluid header-menu text-center\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"brand\">
                <a href=\"";
        // line 35
        echo url("/");
        echo "\"><img src=\"";
        echo url("upload/logo.png");
        echo "\" width=\"140\" /></a>
            </div>
            <div class=\"rm-container\">
                <a class=\"rm-toggle rm-button rm-nojs\" href=\"javascript:void(0)\">Menu</a>
                <nav class=\"rm-nav rm-nojs rm-lighten\">
                                                    
                ";
        // line 41
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("mainmenu"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 42
        echo "                                          
                </nav>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\alampuisi/themes/alampuisi/partials/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 42,  72 => 41,  61 => 35,  47 => 24,  43 => 23,  19 => 1,);
    }
}
/* <div class="container-fluid header-top">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-6 col-sm-8">*/
/*                 <div class="row">*/
/*                     <div class="col-sm-3 language-box hidden-xs">*/
/*                         <div class="dropdown">*/
/*                             <a class="font-small" data-toggle="dropdown" href="#">*/
/*                                 Select Language <span class="caret"></span>*/
/*                             </a>*/
/*                             <ul class="dropdown-menu dropdown-lang" role="menu" aria-labelledby="dLabel">*/
/*                                 <li><a href="javascript:void(0)" class="sellang" data-lang="gb">English</a></li>*/
/*                                 <!-- <li><a href="javascript:void(0)" class="sellang" data-lang="id">Indonesia</a></li> -->*/
/*                                 <!-- <li><a href="javascript:void(0)" class="sellang" data-lang="jp">Japanese</a></li> -->*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             */
/*             <div class="col-md-6 col-sm-4">*/
/*                 <div class="header-top-right">*/
/*                     <a href="{{url('/about')}}" class="font-small text-uppercase" >About Us</a>*/
/*                     <a href="{{url('/enquire')}}" class="font-small text-uppercase" >Enquire Now</a>*/
/*                     <a href="#" class="font-small text-uppercase" target="_blank">Quick Reservation</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <div class="container-fluid header-menu text-center">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="brand">*/
/*                 <a href="{{url('/')}}"><img src="{{url('upload/logo.png')}}" width="140" /></a>*/
/*             </div>*/
/*             <div class="rm-container">*/
/*                 <a class="rm-toggle rm-button rm-nojs" href="javascript:void(0)">Menu</a>*/
/*                 <nav class="rm-nav rm-nojs rm-lighten">*/
/*                                                     */
/*                 {% component "mainmenu" %}*/
/*                                           */
/*                 </nav>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
