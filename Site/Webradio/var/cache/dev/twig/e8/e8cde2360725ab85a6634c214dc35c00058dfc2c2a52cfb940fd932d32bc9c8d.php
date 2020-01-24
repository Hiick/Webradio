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

/* Dashboard/base.html.twig */
class __TwigTemplate_9736327dfa06e97b132e466e51716d1154e1b717c194183b4e4009507da0ffe1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Dashboard/base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Dashboard/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    ";
        // line 3
        $this->loadTemplate("Dashboard/head.html.twig", "Dashboard/base.html.twig", 3)->display($context);
        // line 4
        echo "<body id=\"page-top\">

<!-- Page Wrapper -->
<div id=\"wrapper\">
    ";
        // line 8
        $this->loadTemplate("Dashboard/sidebar.html.twig", "Dashboard/base.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- Main Content -->
        <div id=\"content\">
            ";
        // line 11
        $this->loadTemplate("Dashboard/navigation.html.twig", "Dashboard/base.html.twig", 11)->display($context);
        // line 12
        echo "            <!-- Begin Page Content -->
            <div class=\"container-fluid text-center\">

                <!-- Page Heading -->
                <div class=\"mb-4\">
                    <h1 class=\"h3 mb-0 text-gray-800\">Dashboard</h1>
                </div>

                <!-- Content Row -->
                <div class=\"row\">
                    <!-- Earnings (Monthly) Card Example -->
                    <div class=\"col-xl-12 col-md-6 mb-4\">
                        <div class=\"card border-left-primary shadow h-100 py-2\">
                            <div class=\"card-body\">
                                <div class=\"row no-gutters align-items-center\">
                                    <div class=\"col mr-2\">
                                        <div style=\"color: #8b8ac2\" class=\"text-xs font-weight-bold text-uppercase mb-1\">Montant total d'argent récoltés</div>
                                        <div id=\"all-sub\" class=\"h5 mb-0 font-weight-bold text-gray-800\">200'000</div>
                                    </div>
                                    <div class=\"col-auto\">
                                        <i class=\"fas fa-euro-sign fa-2x text-gray-300\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Row -->

                <div class=\"row\">
                    <!-- Pie Chart -->
                    <div class=\"col-xl-4 col-lg-5\">
                        <div class=\"card shadow mb-4\">
                            <!-- Card Header - Dropdown -->
                            <div class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                                <h6 style=\"color: #8b8ac2\" class=\"m-0 font-weight-bold\">Emails</h6>
                            </div>
                            <!-- Card Body -->
                            <div class=\"card-body\">
                                <div class=\"chart-pie pt-4 pb-2\">
                                    <canvas id=\"emailChart\"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class=\"sticky-footer bg-white\">
            <div class=\"container my-auto\">
                <div class=\"copyright text-center my-auto\">
                    <span>Copyright &copy; Webradio - Stream - 2020</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class=\"scroll-to-top rounded\" href=\"#page-top\">
    <i class=\"fas fa-angle-up\"></i>
</a>

";
        // line 86
        $this->loadTemplate("Dashboard/script.html.twig", "Dashboard/base.html.twig", 86)->display($context);
        // line 87
        echo "
</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Dashboard/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 87,  139 => 86,  63 => 12,  61 => 11,  57 => 9,  55 => 8,  49 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    {% include 'Dashboard/head.html.twig' %}
<body id=\"page-top\">

<!-- Page Wrapper -->
<div id=\"wrapper\">
    {% include 'Dashboard/sidebar.html.twig' %}
        <!-- Main Content -->
        <div id=\"content\">
            {% include 'Dashboard/navigation.html.twig' %}
            <!-- Begin Page Content -->
            <div class=\"container-fluid text-center\">

                <!-- Page Heading -->
                <div class=\"mb-4\">
                    <h1 class=\"h3 mb-0 text-gray-800\">Dashboard</h1>
                </div>

                <!-- Content Row -->
                <div class=\"row\">
                    <!-- Earnings (Monthly) Card Example -->
                    <div class=\"col-xl-12 col-md-6 mb-4\">
                        <div class=\"card border-left-primary shadow h-100 py-2\">
                            <div class=\"card-body\">
                                <div class=\"row no-gutters align-items-center\">
                                    <div class=\"col mr-2\">
                                        <div style=\"color: #8b8ac2\" class=\"text-xs font-weight-bold text-uppercase mb-1\">Montant total d'argent récoltés</div>
                                        <div id=\"all-sub\" class=\"h5 mb-0 font-weight-bold text-gray-800\">200'000</div>
                                    </div>
                                    <div class=\"col-auto\">
                                        <i class=\"fas fa-euro-sign fa-2x text-gray-300\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Row -->

                <div class=\"row\">
                    <!-- Pie Chart -->
                    <div class=\"col-xl-4 col-lg-5\">
                        <div class=\"card shadow mb-4\">
                            <!-- Card Header - Dropdown -->
                            <div class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                                <h6 style=\"color: #8b8ac2\" class=\"m-0 font-weight-bold\">Emails</h6>
                            </div>
                            <!-- Card Body -->
                            <div class=\"card-body\">
                                <div class=\"chart-pie pt-4 pb-2\">
                                    <canvas id=\"emailChart\"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class=\"sticky-footer bg-white\">
            <div class=\"container my-auto\">
                <div class=\"copyright text-center my-auto\">
                    <span>Copyright &copy; Webradio - Stream - 2020</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class=\"scroll-to-top rounded\" href=\"#page-top\">
    <i class=\"fas fa-angle-up\"></i>
</a>

{% include 'Dashboard/script.html.twig' %}

</body>

</html>
", "Dashboard/base.html.twig", "/Users/alexandremignon/Desktop/Webradio/templates/Dashboard/base.html.twig");
    }
}
