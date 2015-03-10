<?php

/* EPSIUserBundle::login.html.twig */
class __TwigTemplate_86439eb6e51f5886fbb4dffd946eca491270e8d6c8a8fd2a3656a66d2d89dfb2 extends Twig_Template
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
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"well\">
        ";
        // line 5
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("fos_user_security_login"), array());
        // line 6
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "EPSIUserBundle::login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  42 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
