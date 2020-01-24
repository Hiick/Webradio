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

/* Dashboard/navigation.html.twig */
class __TwigTemplate_0c3dcda71b61571e4630ecf70ce22ac1fa33e8eee63ca81858298ad1bcfd1f44 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Dashboard/navigation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Dashboard/navigation.html.twig"));

        // line 1
        echo "<!-- Topbar -->
<nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

    <!-- Sidebar Toggle (Topbar) -->
    <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
        <i class=\"fa fa-bars\"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class=\"navbar-nav ml-auto\">

        <div class=\"topbar-divider d-none d-sm-block\"></div>

        <!-- Nav Item - User Information -->
        <li class=\"nav-item dropdown no-arrow\">
            <a class=\"nav-link dropdown-toggle\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo "\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">Administration</span>
            </a>
        </li>

    </ul>

</nav>
<!-- End of Topbar -->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Dashboard/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 16,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Topbar -->
<nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

    <!-- Sidebar Toggle (Topbar) -->
    <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
        <i class=\"fa fa-bars\"></i>
    </button>

    <!-- Topbar Navbar -->
    <ul class=\"navbar-nav ml-auto\">

        <div class=\"topbar-divider d-none d-sm-block\"></div>

        <!-- Nav Item - User Information -->
        <li class=\"nav-item dropdown no-arrow\">
            <a class=\"nav-link dropdown-toggle\" href=\"{{ path('dashboard') }}\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">Administration</span>
            </a>
        </li>

    </ul>

</nav>
<!-- End of Topbar -->", "Dashboard/navigation.html.twig", "/Users/alexandremignon/Desktop/Webradio/templates/Dashboard/navigation.html.twig");
    }
}
