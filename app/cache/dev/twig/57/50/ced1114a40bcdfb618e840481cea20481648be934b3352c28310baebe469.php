<?php

/* EPSINewsBundle:TestTwig:beRegister.html.twig */
class __TwigTemplate_5750ced1114a40bcdfb618e840481cea20481648be934b3352c28310baebe469 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("base_news.html.twig");
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
        return "base_news.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"jumbotron\">
    <h1>Dommage</h1>
    <p>Vous devez être enregistré pour ajouter une news</p>
    <p><a class=\"btn btn-primary btn-lg\" href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" role=\"button\">S'inscrire</a></p>
</div>
";
    }

    public function getTemplateName()
    {
        return "EPSINewsBundle:TestTwig:beRegister.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  39 => 3,  36 => 2,  11 => 1,);
    }
}
