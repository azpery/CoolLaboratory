<?php

/* AppBundle:Default:index.html.twig */
class __TwigTemplate_6071ac7a5f4f239076ee58f09a8aae3b382e8c32dff7b4d31048258e732244e5 extends Twig_Template
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
        $__internal_d0ed7528ddb921aabdc9ee094a42c24c1c3f24b315e1a1c2718d296b317ea7dd = $this->env->getExtension("native_profiler");
        $__internal_d0ed7528ddb921aabdc9ee094a42c24c1c3f24b315e1a1c2718d296b317ea7dd->enter($__internal_d0ed7528ddb921aabdc9ee094a42c24c1c3f24b315e1a1c2718d296b317ea7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:index.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html>

<head>
  <meta charset=\"UTF-8\">
  <title>Cool Lab</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
  <meta name=\"description\" content=\"Developed By RD & SN\">
  <meta name=\"keywords\" content=\"Admin, Bootstrap 3, Template, Theme, Responsive\">
  <!-- bootstrap 3.0.2 -->
  <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  <!-- font Awesome -->
  <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  <!-- Ionicons -->
  <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/ionicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  <!-- Morris chart -->
  <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/morris/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  <!-- jvectormap -->
  <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/jvectormap/jquery-jvectormap-1.2.2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  <!-- Date Picker -->
  <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/datepicker/datepicker3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  <!-- fullCalendar -->
  <!-- <link href=\"css/fullcalendar/fullcalendar.css\" rel=\"stylesheet\" type=\"text/css\" /> -->
  <!-- Daterange picker -->
  <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/daterangepicker/daterangepicker-bs3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  <!-- iCheck for checkboxes and radio inputs -->
  <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/iCheck/all.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  <!-- bootstrap wysihtml5 - text editor -->
  <!-- <link href=\"css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css\" rel=\"stylesheet\" type=\"text/css\" /> -->
  <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
  <!-- Theme style -->
  <link href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/animations.css"), "html", null, true);
        echo "\">
  <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/custom.css"), "html", null, true);
        echo "\">



</head>

<body class=\"skin-black\" ng-app=\"CoolLab\">
  <header class=\"header\" ng-include='\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/templates/header.html"), "html", null, true);
        echo "\"'></header>
  <div class=\"wrapper row-offcanvas row-offcanvas-left\">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class=\"left-side sidebar-offcanvas\">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class=\"sidebar\">
        <!-- Sidebar user panel -->
        <div class=\"user-panel\">
          <div class=\"pull-left image\">
            <img src=\"img/26115.jpg\" class=\"img-circle\" alt=\"User Image\" />
          </div>
          <div class=\"pull-left info\">
            <p>Salut, Jacquot</p>

            <a ><i class=\"fa fa-circle text-success\"></i> Online</a>
          </div>
        </div>
        <!-- search form -->
        <form action=\"#\" method=\"get\" class=\"sidebar-form\">
          <div class=\"input-group\">
            <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\" />
            <span class=\"input-group-btn\">
                                          <button type='submit' name='seach' id='search-btn' class=\"btn btn-flat\"><i class=\"fa fa-search\"></i></button>
                                      </span>
          </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class=\"sidebar-menu\">
          <li class=\"active\">
            <a href=\"#/index\">
              <i class=\"fa fa-home\"></i> <span>Accueil</span>
            </a>
          </li>
          <li>
            <a href=\"#/travail\">
              <i class=\"fa fa-briefcase\"></i> <span>Mon travail</span>
            </a>
          </li>

          <li>
            <a href=\"#/activite\">
              <i class=\"fa fa-clock-o\"></i> <span>Activité</span>
            </a>
          </li>

          <li>
            <a href=\"#/calendrier\">
              <i class=\"fa fa-calendar\"></i> <span>Calendrier</span>
            </a>
          </li>
          <li>
            <a href=\"#/ressources\">
              <i class=\"fa fa-glass\"></i> <span>Ressources</span>
            </a>
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <aside class=\"right-side\">
<div class=\"view-container\">
      <div ng-view class=\"content view-frame\" >
      </div>
      </div>
    </aside>
    <!-- /.right-side -->

  </div>
  <!-- ./wrapper -->


  <!-- jQuery 2.0.2 -->
  <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js\"></script>
  <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
  <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/bower_components/angular/angular.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"//ajax.googleapis.com/ajax/libs/angularjs/1.2.18/angular-route.min.js\"></script>
  <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/animations.js"), "html", null, true);
        echo "\"></script>

  <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/bower_components/angular-animate/angular-animate.js"), "html", null, true);
        echo "\"></script>

  <!-- jQuery UI 1.10.3 -->
  <script src=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/jquery-ui-1.10.3.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
  <!-- Bootstrap -->
  <script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
  <!-- daterangepicker -->
  <script src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

  <script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/plugins/chart.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

  <!-- datepicker
        <script src=\"js/plugins/datepicker/bootstrap-datepicker.js\" type=\"text/javascript\"></script>-->
  <!-- Bootstrap WYSIHTML5
        <script src=\"js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js\" type=\"text/javascript\"></script>-->
  <!-- iCheck -->
  <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/plugins/iCheck/icheck.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
  <!-- calendar -->
  <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/plugins/fullcalendar/fullcalendar.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

  <!-- Director App -->
  <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/Director/app.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
  <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/lib/angular/angular-cookies.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/lib/angular/angular-resource.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/services.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/controllers.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/filters.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/directives.js"), "html", null, true);
        echo "\"></script>
  <!-- Director dashboard demo (This is only for demo purposes) -->
  <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/Director/dashboard.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
  <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/angular/main.js"), "html", null, true);
        echo "\"></script>
  <script src=\"http://crypto-js.googlecode.com/svn/tags/3.1.2/build/rollups/sha1.js\"></script>
  <script src=\"http://crypto-js.googlecode.com/svn/tags/3.1.2/build/rollups/sha512.js\"></script>
  <script src=\"http://crypto-js.googlecode.com/svn/tags/3.1.2/build/rollups/md5.js\"></script>
  <script src=\"http://crypto-js.googlecode.com/svn/tags/3.1.2/build/components/enc-base64-min.js\"></script>

  <!-- for JavaScript Animations -->
  <!-- Director for demo purposes -->
</body>

</html>
";
        
        $__internal_d0ed7528ddb921aabdc9ee094a42c24c1c3f24b315e1a1c2718d296b317ea7dd->leave($__internal_d0ed7528ddb921aabdc9ee094a42c24c1c3f24b315e1a1c2718d296b317ea7dd_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 152,  261 => 151,  256 => 149,  252 => 148,  248 => 147,  244 => 146,  240 => 145,  236 => 144,  232 => 143,  226 => 140,  221 => 138,  211 => 131,  206 => 129,  201 => 127,  196 => 125,  190 => 122,  185 => 120,  180 => 118,  176 => 117,  98 => 42,  88 => 35,  84 => 34,  80 => 33,  72 => 28,  67 => 26,  60 => 22,  55 => 20,  50 => 18,  45 => 16,  40 => 14,  35 => 12,  22 => 1,);
    }
}
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/* */
/* <head>*/
/*   <meta charset="UTF-8">*/
/*   <title>Cool Lab</title>*/
/*   <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>*/
/*   <meta name="description" content="Developed By RD & SN">*/
/*   <meta name="keywords" content="Admin, Bootstrap 3, Template, Theme, Responsive">*/
/*   <!-- bootstrap 3.0.2 -->*/
/*   <link href="{{ asset('bundles/app/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />*/
/*   <!-- font Awesome -->*/
/*   <link href="{{ asset('bundles/app/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />*/
/*   <!-- Ionicons -->*/
/*   <link href="{{ asset('bundles/app/css/ionicons.min.css') }}" rel="stylesheet" type="text/css" />*/
/*   <!-- Morris chart -->*/
/*   <link href="{{ asset('bundles/app/css/morris/morris.css') }}" rel="stylesheet" type="text/css" />*/
/*   <!-- jvectormap -->*/
/*   <link href="{{ asset('bundles/app/css/jvectormap/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet" type="text/css" />*/
/*   <!-- Date Picker -->*/
/*   <link href="{{ asset('bundles/app/css/datepicker/datepicker3.css') }}" rel="stylesheet" type="text/css" />*/
/*   <!-- fullCalendar -->*/
/*   <!-- <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" /> -->*/
/*   <!-- Daterange picker -->*/
/*   <link href="{{ asset('bundles/app/css/daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet" type="text/css" />*/
/*   <!-- iCheck for checkboxes and radio inputs -->*/
/*   <link href="{{ asset('bundles/app/css/iCheck/all.css') }}" rel="stylesheet" type="text/css" />*/
/*   <!-- bootstrap wysihtml5 - text editor -->*/
/*   <!-- <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" /> -->*/
/*   <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>*/
/*   <!-- Theme style -->*/
/*   <link href="{{ asset('bundles/app/css/style.css') }}" rel="stylesheet" type="text/css" />*/
/*   <link rel="stylesheet" href="{{ asset('bundles/app/css/animations.css') }}">*/
/*   <link rel="stylesheet" href="{{ asset('bundles/app/css/custom.css') }}">*/
/* */
/* */
/* */
/* </head>*/
/* */
/* <body class="skin-black" ng-app="CoolLab">*/
/*   <header class="header" ng-include='"{{ asset('bundles/app/templates/header.html') }}"'></header>*/
/*   <div class="wrapper row-offcanvas row-offcanvas-left">*/
/*     <!-- Left side column. contains the logo and sidebar -->*/
/*     <aside class="left-side sidebar-offcanvas">*/
/*       <!-- sidebar: style can be found in sidebar.less -->*/
/*       <section class="sidebar">*/
/*         <!-- Sidebar user panel -->*/
/*         <div class="user-panel">*/
/*           <div class="pull-left image">*/
/*             <img src="img/26115.jpg" class="img-circle" alt="User Image" />*/
/*           </div>*/
/*           <div class="pull-left info">*/
/*             <p>Salut, Jacquot</p>*/
/* */
/*             <a ><i class="fa fa-circle text-success"></i> Online</a>*/
/*           </div>*/
/*         </div>*/
/*         <!-- search form -->*/
/*         <form action="#" method="get" class="sidebar-form">*/
/*           <div class="input-group">*/
/*             <input type="text" name="q" class="form-control" placeholder="Search..." />*/
/*             <span class="input-group-btn">*/
/*                                           <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>*/
/*                                       </span>*/
/*           </div>*/
/*         </form>*/
/*         <!-- /.search form -->*/
/*         <!-- sidebar menu: : style can be found in sidebar.less -->*/
/*         <ul class="sidebar-menu">*/
/*           <li class="active">*/
/*             <a href="#/index">*/
/*               <i class="fa fa-home"></i> <span>Accueil</span>*/
/*             </a>*/
/*           </li>*/
/*           <li>*/
/*             <a href="#/travail">*/
/*               <i class="fa fa-briefcase"></i> <span>Mon travail</span>*/
/*             </a>*/
/*           </li>*/
/* */
/*           <li>*/
/*             <a href="#/activite">*/
/*               <i class="fa fa-clock-o"></i> <span>Activité</span>*/
/*             </a>*/
/*           </li>*/
/* */
/*           <li>*/
/*             <a href="#/calendrier">*/
/*               <i class="fa fa-calendar"></i> <span>Calendrier</span>*/
/*             </a>*/
/*           </li>*/
/*           <li>*/
/*             <a href="#/ressources">*/
/*               <i class="fa fa-glass"></i> <span>Ressources</span>*/
/*             </a>*/
/*           </li>*/
/*         </ul>*/
/*       </section>*/
/*       <!-- /.sidebar -->*/
/*     </aside>*/
/* */
/*     <aside class="right-side">*/
/* <div class="view-container">*/
/*       <div ng-view class="content view-frame" >*/
/*       </div>*/
/*       </div>*/
/*     </aside>*/
/*     <!-- /.right-side -->*/
/* */
/*   </div>*/
/*   <!-- ./wrapper -->*/
/* */
/* */
/*   <!-- jQuery 2.0.2 -->*/
/*   <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>*/
/*   <script src="{{ asset('bundles/app/js/jquery.min.js') }}" type="text/javascript"></script>*/
/*   <script src="{{ asset('bundles/app/bower_components/angular/angular.min.js') }}"></script>*/
/*   <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.18/angular-route.min.js"></script>*/
/*   <script src="{{ asset('bundles/app/js/animations.js') }}"></script>*/
/* */
/*   <script src="{{ asset('bundles/app/bower_components/angular-animate/angular-animate.js') }}"></script>*/
/* */
/*   <!-- jQuery UI 1.10.3 -->*/
/*   <script src="{{ asset('bundles/app/js/jquery-ui-1.10.3.min.js') }}" type="text/javascript"></script>*/
/*   <!-- Bootstrap -->*/
/*   <script src="{{ asset('bundles/app/js/bootstrap.min.js') }}" type="text/javascript"></script>*/
/*   <!-- daterangepicker -->*/
/*   <script src="{{ asset('bundles/app/js/plugins/daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>*/
/* */
/*   <script src="{{ asset('bundles/app/js/plugins/chart.js') }}" type="text/javascript"></script>*/
/* */
/*   <!-- datepicker*/
/*         <script src="js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>-->*/
/*   <!-- Bootstrap WYSIHTML5*/
/*         <script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>-->*/
/*   <!-- iCheck -->*/
/*   <script src="{{ asset('bundles/app/js/plugins/iCheck/icheck.min.js') }}" type="text/javascript"></script>*/
/*   <!-- calendar -->*/
/*   <script src="{{ asset('bundles/app/js/plugins/fullcalendar/fullcalendar.js') }}" type="text/javascript"></script>*/
/* */
/*   <!-- Director App -->*/
/*   <script src="{{ asset('bundles/app/js/Director/app.js') }}" type="text/javascript"></script>*/
/*   <script src="{{ asset('bundles/app/lib/angular/angular-cookies.min.js') }}"></script>*/
/*   <script src="{{ asset('bundles/app/lib/angular/angular-resource.min.js') }}"></script>*/
/*   <script src="{{ asset('bundles/app/js/services.js') }}"></script>*/
/*   <script src="{{ asset('bundles/app/js/controllers.js') }}"></script>*/
/*   <script src="{{ asset('bundles/app/js/filters.js') }}"></script>*/
/*   <script src="{{ asset('bundles/app/js/directives.js') }}"></script>*/
/*   <!-- Director dashboard demo (This is only for demo purposes) -->*/
/*   <script src="{{ asset('bundles/app/js/Director/dashboard.js') }}" type="text/javascript"></script>*/
/*   <script src="{{ asset('bundles/app/js/angular/main.js') }}"></script>*/
/*   <script src="http://crypto-js.googlecode.com/svn/tags/3.1.2/build/rollups/sha1.js"></script>*/
/*   <script src="http://crypto-js.googlecode.com/svn/tags/3.1.2/build/rollups/sha512.js"></script>*/
/*   <script src="http://crypto-js.googlecode.com/svn/tags/3.1.2/build/rollups/md5.js"></script>*/
/*   <script src="http://crypto-js.googlecode.com/svn/tags/3.1.2/build/components/enc-base64-min.js"></script>*/
/* */
/*   <!-- for JavaScript Animations -->*/
/*   <!-- Director for demo purposes -->*/
/* </body>*/
/* */
/* </html>*/
/* */
