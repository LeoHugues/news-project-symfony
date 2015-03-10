<?php

/* EPSINewsBundle:TestTwig:modifyNews.html.twig */
class __TwigTemplate_f0486e0e3c233883ec8b8fdb8de893fa79b761de0349e9e5e4d06f91366b348f extends Twig_Template
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
            'stylesheets' => array($this, 'block_stylesheets'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/epsinews/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        // line 7
        echo "        Modifier une news
    ";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "
    <h1>voici la page de modification</h1>
    <p>Dernieres news parues :</p>

<div class=\"well\">
    ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["News"]) ? $context["News"] : $this->getContext($context, "News")));
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            // line 17
            echo "        <div class=\"news\">
            <h3>
                ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "title", array()), "html", null, true);
            echo "
            </h3>
            <p>
                ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "content", array()), "html", null, true);
            echo "
            </p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</div>
    
";
    }

    public function getTemplateName()
    {
        return "EPSINewsBundle:TestTwig:modifyNews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 26,  80 => 22,  74 => 19,  70 => 17,  66 => 16,  59 => 11,  56 => 10,  51 => 7,  48 => 6,  41 => 4,  38 => 3,  11 => 1,);
    }
}
