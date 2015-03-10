<?php

/* EPSINewsBundle:TestTwig:detailNews.html.twig */
class __TwigTemplate_7df61abc353389e34d6a90789a4718ef38c5b82a4523ed944e533a3bfee3f90e extends Twig_Template
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
            'body' => array($this, 'block_body'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"panel panel-default\">
    <!-- Default panel contents -->
    <div class=\"panel-heading\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "title", array()), "html", null, true);
        echo "</div>
    <div class=\"panel-body\">
        <p>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "content", array()), "html", null, true);
        echo "</p>
    </div>

    <!-- List group -->
    <ul class=\"list-group\">
        <li class=\"list-group-item\">";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "date", array()), "M D y"), "html", null, true);
        echo "</li>
        <li class=\"list-group-item\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "categorie", array()), "categorieName", array()), "html", null, true);
        echo "</li>
        <li class=\"list-group-item\">
            ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["new"]) ? $context["new"] : $this->getContext($context, "new")), "tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 17
            echo "                #";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "intitule", array()), "html", null, true);
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        </li>
    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "EPSINewsBundle:TestTwig:detailNews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 19,  69 => 17,  65 => 16,  60 => 14,  56 => 13,  48 => 8,  43 => 6,  39 => 4,  36 => 3,  11 => 1,);
    }
}
