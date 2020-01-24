<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Dashboard/sidebar.html.twig */
class __TwigTemplate_412400c036a4eb3cc006c75d689b22b23deea01ae592aa6e04f5895fe5a57a0e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Dashboard/sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Dashboard/sidebar.html.twig"));

        // line 1
        echo "<!-- Sidebar -->
<ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

    <!-- Sidebar - Brand -->
    <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo "\">
        <div class=\"sidebar-brand-icon rotate-n-15\">
            <i class=\"fas fa-laugh-wink\"></i>
        </div>
        <div class=\"sidebar-brand-text mx-3\">Webradio - Stream</div>
    </a>

    <!-- Divider -->
    <hr class=\"sidebar-divider my-0\">

    <!-- Nav Item - Dashboard -->
    <li class=\"nav-item active\">
        <a class=\"nav-link\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo "\">
            <i class=\"fas fa-fw fa-tachometer-alt\"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class=\"sidebar-divider d-none d-md-block\">


    <!-- Nav Item - Utilisateurs -->
    <li class=\"nav-item active\">
        <a class=\"nav-link\" href=\"";
        // line 29
        echo "\">
            <i class=\"fas fa-fw fa-sign-out-alt\"></i>
            <span>Déconnexion</span></a>
    </li>

</ul>
<!-- End of Sidebar -->


<!-- Content Wrapper -->
<div id=\"content-wrapper\">";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Dashboard/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 29,  64 => 17,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Sidebar -->
<ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

    <!-- Sidebar - Brand -->
    <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"{{ path('dashboard') }}\">
        <div class=\"sidebar-brand-icon rotate-n-15\">
            <i class=\"fas fa-laugh-wink\"></i>
        </div>
        <div class=\"sidebar-brand-text mx-3\">Webradio - Stream</div>
    </a>

    <!-- Divider -->
    <hr class=\"sidebar-divider my-0\">

    <!-- Nav Item - Dashboard -->
    <li class=\"nav-item active\">
        <a class=\"nav-link\" href=\"{{ path('dashboard') }}\">
            <i class=\"fas fa-fw fa-tachometer-alt\"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class=\"sidebar-divider d-none d-md-block\">


    <!-- Nav Item - Utilisateurs -->
    <li class=\"nav-item active\">
        <a class=\"nav-link\" href=\"{# {{ path('logout') }} #}\">
            <i class=\"fas fa-fw fa-sign-out-alt\"></i>
            <span>Déconnexion</span></a>
    </li>

</ul>
<!-- End of Sidebar -->


<!-- Content Wrapper -->
<div id=\"content-wrapper\">", "Dashboard/sidebar.html.twig", "/Users/alexandremignon/Desktop/Webradio/templates/Dashboard/sidebar.html.twig");
    }
}
