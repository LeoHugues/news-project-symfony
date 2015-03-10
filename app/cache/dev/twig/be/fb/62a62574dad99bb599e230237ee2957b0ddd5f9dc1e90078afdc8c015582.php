<?php

/* EPSINewsBundle:TestTwig:insertNews.html.twig */
class __TwigTemplate_befb62a62574dad99bb599e230237ee2957b0ddd5f9dc1e90078afdc8c015582 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("EPSINewsBundle:Default:index.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EPSINewsBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "        Ajouter une news
    ";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
<h1>Voici la page d'insertion</h1>
    <div class=\"well form-block\">
        ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "
        ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "EPSINewsBundle:TestTwig:insertNews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  53 => 11,  48 => 8,  45 => 7,  40 => 4,  37 => 3,  11 => 1,);
    }
}
