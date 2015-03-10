<?php

/* base.html.twig */
class __TwigTemplate_752e815d518009038dc73e7d68fc9e70bb76246523957bff94dadda42a7d6ada extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <!-- Bootstrap -->
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bootstrap/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    </head>
    <header>
        <div class=\"page-header\">
            <h1>Bienvenue <small>sur mon site expérimental de News !</small></h1>
        </div>
    </header>
    <body>
        <div class=\"container-fluid\">
            <nav class=\"navbar navbar-inverse\">
                <div class=\"container-fluid\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-9\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("epsi_news_home");
        echo "\">Home</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-9\">
                        <ul class=\"nav navbar-nav\">
                            <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Logout</a></li>
                            <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Login</a></li>
                            <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">s'inscrire</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
            ";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 44
        echo "            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./js/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        </div>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 42
    public function block_body($context, array $blocks = array())
    {
    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 43,  125 => 42,  120 => 6,  114 => 5,  105 => 47,  100 => 45,  97 => 44,  94 => 43,  92 => 42,  84 => 37,  80 => 36,  76 => 35,  67 => 29,  45 => 10,  41 => 9,  35 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }
}
