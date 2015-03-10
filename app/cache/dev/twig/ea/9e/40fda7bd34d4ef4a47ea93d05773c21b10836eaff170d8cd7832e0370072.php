<?php

/* EPSINewsBundle:TestTwig:getNews.html.twig */
class __TwigTemplate_ea9e40fda7bd34d4ef4a47ea93d05773c21b10836eaff170d8cd7832e0370072 extends Twig_Template
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
        echo "  
        Les Actus
    ";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
        <h1>Mes super news !</h1>
        <p>Dernieres news parues :</p>

    <div class=\"well\">
        ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["News"]) ? $context["News"] : $this->getContext($context, "News")));
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            // line 14
            echo "            <div class=\"panel panel-default\">
                <div class=\"panel-heading\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "title", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["new"], "date", array()), "M D y"), "html", null, true);
            echo "</div>
                <div class=\"panel-body\">
                    ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "content", array()), "html", null, true);
            echo "
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </div>
    
";
    }

    public function getTemplateName()
    {
        return "EPSINewsBundle:TestTwig:getNews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 21,  69 => 17,  62 => 15,  59 => 14,  55 => 13,  48 => 8,  45 => 7,  37 => 3,  11 => 1,);
    }
}
