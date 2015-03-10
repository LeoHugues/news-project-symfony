<?php

/* EPSINewsBundle:TestTwig:modifyNews.html.twig */
class __TwigTemplate_5f8e901250332a5e26e0579c4f6de4a65ec0d4e5584badf2ef5f2c8c1b159b31 extends Twig_Template
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/epsinews/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    ";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "        
        
            <h1>voici la page de modification</h1>
            <p>Dernieres news parues :</p>

   ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["News"]) ? $context["News"] : $this->getContext($context, "News")));
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            echo " 

        <div class=\"news\">
            <h3>
                ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "title", array()), "html", null, true);
            echo "
            </h3>

            <p>\t
                ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "content", array()), "html", null, true);
            echo "
            <br />
            </p>
        </div>
            
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    
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
        return array (  85 => 27,  73 => 21,  66 => 17,  57 => 13,  50 => 8,  47 => 7,  40 => 4,  37 => 3,  11 => 1,);
    }
}
