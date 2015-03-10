<?php

/* EPSINewsBundle:News:homeNews.html.twig */
class __TwigTemplate_62bcac20a3c1274b7f89eadbbf867282dffec39b8b9d3cbee71fffbed9adb91c extends Twig_Template
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
            'body' => array($this, 'block_body'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"jumbotron\">
        <h1>Hello, world!</h1>
        <p>Bienvenue sur le nouveau site de l'EPSI, symfony2, PSR2 et full responsive, codé en seulement une poignée de nuits !</br>
            Vous pouvez dès à présent découvrire le système de news mis en place par un codeur hors paire.</br>
        En clickant sur le bouton ci-dessous</p>
        <p><a class=\"btn btn-primary btn-lg\" href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("epsi_news_get");
        echo "\" role=\"button\">EPSI News</a></p>
    </div>
";
    }

    public function getTemplateName()
    {
        return "EPSINewsBundle:News:homeNews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  39 => 3,  36 => 2,  11 => 1,);
    }
}
