<?php

/* base_news.html.twig */
class __TwigTemplate_49279a5497c6a5d43cf6f0448610589883ebb2b89e112c139d5c13ad13ee86f4 extends Twig_Template
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
        echo "<nav class=\"affix news-nav\">
    <ul class=\"nav nav-pills nav-stacked\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("epsi_news_get");
        echo "\">Voir les news</a></li>
        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("epsi_news_insert");
        echo "\">Ajouter une news</a></li>
        <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("epsi_news_update");
        echo "\">Modifier une news</a></li>
    </ul>
</nav>
";
        // line 14
        $this->displayBlock('content', $context, $blocks);
    }

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
        return array (  69 => 14,  63 => 11,  59 => 10,  55 => 9,  51 => 7,  48 => 6,  41 => 3,  38 => 2,  11 => 1,);
    }
}
