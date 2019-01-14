<?php

/* search.twig */

class __TwigTemplate_55f7959adb6263e0674f8936dfa33d44d3c4eb8ac28f1f78c229c2e83639d38d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("layout/layout.twig", "search.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body_class' => [$this, 'block_body_class'],
            'page_content' => [$this, 'block_page_content'],
            'js_search' => [$this, 'block_js_search'],
        ];
    }

    public function getSourceContext()
    {
        return new Twig_Source("') {
                        text_content = text_content.substring(0, text_content.length - 1);
                    }
                    contents += text_content;
                }

                contents += '</div></li>';
                container.append(\$(contents);)
            }
        })();
    </script>
{% endblock %}
", "search.twig", "C:\\xampp\\htdocs\\sami_document_generator\\Sami\\Resources\\themes\\default\\search.twig");
    }

    public function block_title($context, array $blocks = [])
    {
        echo "Search | ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 3

    public function block_body_class($context, array $blocks = [])
    {
        echo "search-page";
    }

    // line 4

    public function block_page_content($context, array $blocks = [])
    {
        // line 7
        echo "
    <div class=\"page-header\">
        <h1>Search</h1>
    </div>

    <p>This page allows you to search through the API documentation for
    specific terms. Enter your search words into the box below and click
    \"submit\". The search will be performed on namespaces, classes, interfaces,
    traits, functions, and methods.</p>

    <form class=\"form-inline\" role=\"form\" action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Sami\Renderer\TwigExtension']->pathForStaticFile($context, "search.html"), "html", null, true);
        echo "\" method=\"GET\">
        <div class=\"form-group\">
            <label class=\"sr-only\" for=\"search\">Search</label>
            <input type=\"search\" class=\"form-control\" name=\"search\" id=\"search\" placeholder=\"Search\">
        </div>
        <button type=\"submit\" class=\"btn btn-default\">submit</button>
    </form>

    <h2>Search Results</h2>

    <div class=\"container-fluid\">
        <ul class=\"search-results\"></ul>
    </div>

    ";
        // line 31
        $this->displayBlock("js_search", $context, $blocks);
        echo "

";
    }

    // line 6

    public function block_js_search($context, array $blocks = [])
    {
        // line 36
        echo "') {
                        text_content = text_content.substring(0, text_content.length - 1);
                    }
                    contents += text_content;
                }

                contents += '</div></li>';
                container.append(\$(contents);)
            }
        })();
    </script>
";
    }

    // line 35

    public function getTemplateName()
    {
        return "search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return [93 => 36, 90 => 35, 83 => 31, 66 => 17, 54 => 7, 51 => 6, 45 => 4, 38 => 3, 34 => 1, 32 => 2, 15 => 1,];
    }

    protected function doGetParent(array $context)
    {
        return "layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        $context["__internal_72f03427b9c1316d474c1ac0b5fd5ffbe925de68be81d0d1ae2c79ad19a6de69"] = $this->loadTemplate("macros.twig", "search.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }
}
