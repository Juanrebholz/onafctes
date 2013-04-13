<?php

/* ::base.html.twig */
class __TwigTemplate_1f09f0faf48d03bac2c091b8403c3bc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'metas' => array($this, 'block_metas'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html lang=\"es-ar\">

<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
    <!-- Title -->
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t
\t";
        // line 9
        $this->displayBlock('metas', $context, $blocks);
        // line 16
        echo "\t
\t<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic' rel='stylesheet' type='text/css'>
  \t<link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>

\t";
        // line 20
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 34
        echo "
\t<!-- Favicon -->
  \t<link rel=\"shortcut icon\" href=\"img/favicon/favicon.png\">
</head>


<body>
    ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 42
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 43
        echo "</body>
</html>";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Onafctes";
    }

    // line 9
    public function block_metas($context, array $blocks = array())
    {
        // line 10
        echo "\t<!-- Description, Keywords -->
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  \t<meta name=\"description\" content=\"\">
  \t<meta name=\"keywords\" content=\"\">
  \t<meta name=\"author\" content=\"\">
\t";
    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 21
        echo "\t<!-- Stylesheets -->
\t<link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  \t<link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/slider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  \t<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/prettyPhoto.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  \t<link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  \t<link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/blue.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">    
\t<link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<!-- HTML5 Support for IE -->
\t<!--[if lt IE 9]>
\t<script src=\"js/html5shim.js\"></script>
\t<![endif]-->
\t";
    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  129 => 42,  124 => 41,  114 => 28,  110 => 27,  106 => 26,  102 => 25,  98 => 24,  94 => 23,  90 => 22,  87 => 21,  84 => 20,  75 => 10,  72 => 9,  66 => 7,  61 => 43,  58 => 42,  56 => 41,  47 => 34,  45 => 20,  39 => 16,  37 => 9,  32 => 7,  24 => 1,);
    }
}
