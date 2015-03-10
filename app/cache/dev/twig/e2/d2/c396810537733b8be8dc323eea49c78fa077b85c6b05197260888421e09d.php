<?php

/* base_news.html.twig */
class __TwigTemplate_e2d2c396810537733b8be8dc323eea49c78fa077b85c6b05197260888421e09d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/epsinews/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"row\">
        <div class=\"col-sm-3\">
            <div class=\"sidebar-nav\">
                <div class=\"navbar navbar-default\" role=\"navigation\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".sidebar-navbar-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <span class=\"visible-xs navbar-brand\">Sidebar menu</span>
                    </div>
                    <div class=\"navbar-collapse collapse sidebar-navbar-collapse\">
                        <ul class=\"nav navbar-nav\">
                            <li><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("epsi_news_get");
        echo "\">Accueil News</a></li>
                            <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("epsi_news_get");
        echo "\">L'actu</a></li>
                            <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("epsi_news_insert");
        echo "\">Ajouter une news</a></li>
                            <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("epsi_news_update");
        echo "\">Gérer mes news</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class=\"col-sm-8\">
";
        // line 32
        $this->displayBlock('content', $context, $blocks);
        // line 33
        echo "        </div>
    </div>
";
    }

    // line 32
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base_news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 32,  92 => 33,  90 => 32,  80 => 25,  76 => 24,  72 => 23,  68 => 22,  51 => 7,  48 => 6,  41 => 3,  38 => 2,  11 => 1,);
    }
}
