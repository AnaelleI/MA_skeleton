<?php

/* index.html.twig */
class __TwigTemplate_6566bbf9d20cd827b47367747e363461dace61e6776551e690f4a31221eda0ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'myBody' => array($this, 'block_myBody'),
            'myContent' => array($this, 'block_myContent'),
            'myJavascripts' => array($this, 'block_myJavascripts'),
            'myStylesheets' => array($this, 'block_myStylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_427e4c8fb66acede0a8d14a64cf0d00112c430b8d5c5b14528cd999d44ddb8a7 = $this->env->getExtension("native_profiler");
        $__internal_427e4c8fb66acede0a8d14a64cf0d00112c430b8d5c5b14528cd999d44ddb8a7->enter($__internal_427e4c8fb66acede0a8d14a64cf0d00112c430b8d5c5b14528cd999d44ddb8a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_427e4c8fb66acede0a8d14a64cf0d00112c430b8d5c5b14528cd999d44ddb8a7->leave($__internal_427e4c8fb66acede0a8d14a64cf0d00112c430b8d5c5b14528cd999d44ddb8a7_prof);

    }

    // line 3
    public function block_myBody($context, array $blocks = array())
    {
        $__internal_7a676c6630f6475ff1c39682cc7d8aa8bb0660259958fbefd73263e983d72c16 = $this->env->getExtension("native_profiler");
        $__internal_7a676c6630f6475ff1c39682cc7d8aa8bb0660259958fbefd73263e983d72c16->enter($__internal_7a676c6630f6475ff1c39682cc7d8aa8bb0660259958fbefd73263e983d72c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "myBody"));

        // line 4
        echo "<div id=\"bgCont\"></div>
<div id=\"all\">
    <div id=\"header\">
        <table id=\"logo\"><tr><td><a href=\"/\"><img src=\"/logo/logoMultiagentHeader.png\"></a></td><tr></table>
        <a href=\"http://irtes.utbm.fr\" id=\"logoSetHeader\"><img src=\"/logo/logoIrtes.png\"></a>
    </div>
    <div id=\"global\">
        <div id=\"content\">";
        // line 11
        $this->displayBlock('myContent', $context, $blocks);
        echo "</div>
        <ul id=\"menu\">
            <li id=\"menuTop\"></li>
            <li id='p-Multiagent_Group' >Multiagent Group
                <ul>
                    <li id=\"n-NEWS-.26-EVENTS\"><a href=\"/Events\">NEWS &amp; EVENTS</a></li>
                    <li id=\"n-Research-Activities\"><a href=\"/Research_Activities\">Research Activities</a></li>
                    <li id=\"n-Publications\"><a href=\"/Special:ICAPPublication/-5\">Publications</a></li>
                    <li id=\"n-Projects\"><a href=\"/Projects\">Projects</a></li>
                    <li id=\"n-Platforms-.26-Software\"><a href=\"/Platforms\">Platforms &amp; Software</a></li>
                    <li id=\"n-Patents\"><a href=\"/Patents\">Patents</a></li>
                    <li id=\"n-Partners\"><a href=\"/Partners\">Partners</a></li>
                </ul>
            </li>
            <li id='p-Members' >Members
                <ul>
                    <li id=\"n-Current-Members\"><a href=\"/Internal_Members\">Current Members</a></li>
                    <li id=\"n-Associate-Members\"><a href=\"/External_Members\">Associate Members</a></li>
                    <li id=\"n-Former-Members\"><a href=\"/Former_Members\">Former Members</a></li>
                    <li id=\"n-PhD-Theses\"><a href=\"/PhDThesis\">PhD Theses</a></li>
                    <li id=\"n-Job-Vacancies\"><a href=\"/Jobs\">Job Vacancies</a></li>
                </ul>
            </li>
            <li id='p-Events' >Events
                <ul>
                    <li id=\"n-Conferences-and-Workshops\"><a href=\"/Conferences\">Conferences and Workshops</a></li>
                    <li id=\"n-Seminars\"><a href=\"/Seminars\">Seminars</a></li>
                </ul>
            </li>
            <li id='p-Contact' >Contact
                <ul>
                    <li id=\"n-Venue\"><a href=\"/Venue\">Venue</a></li>
                    <li id=\"n-Contact\"><a href=\"/Contact\">Contact</a></li>
                </ul>
            </li>
            <li>Search<br><form action=\"/index.php\" id=\"searchform\"><div>
            <input type='hidden' name=\"title\" value=\"Special:Search\" />
            <input id=\"searchInput\" name=\"search\" type=\"text\"  title=\"Search MultiAgentWiki [f]\" accesskey=\"f\" value=\"\"/>
            <input type='submit' name=\"go\" class=\"searchButton\" id=\"searchGoButton\"\tvalue=\"Go\"  title=\"Go to a page with this exact name if exists\" />
            <input type='submit' name=\"fulltext\" class=\"searchButton\" id=\"mw-searchButton\" value=\"Search\"  title=\"Search the pages for this text\" />
            </div></form></li>
            <li id='p-For_members' >For members
                <ul>
                    <li id=\"n-Publication-Guidelines\"><a href=\"/Publications\">Publication Guidelines</a></li>
                    <li id=\"n-Developer-Guidelines\"><a href=\"/Development\">Developer Guidelines</a></li>
                </ul>
            </li>
            <li>Toolbox
                <ul>
                    <li id=\"t-whatlinkshere\"><a href=\"/Special:WhatLinksHere/Home\" title=\"List of all wiki pages that link here [j]\" accesskey=\"j\">What links here</a></li>
                    <li id=\"t-recentchangeslinked\"><a href=\"/Special:RecentChangesLinked/Home\" title=\"Recent changes in pages linked from this page [k]\" accesskey=\"k\">Related changes</a></li>
                    <li id=\"t-specialpages\"><a href=\"/Special:SpecialPages\" title=\"List of all special pages [q]\" accesskey=\"q\">Special pages</a></li>
                    <li id=\"t-print\"><a href=\"/index.php?title=Home&amp;printable=yes\" rel=\"alternate\" title=\"Printable version of this page [p]\" accesskey=\"p\">Printable version</a></li>
                    <li id=\"t-permalink\"><a href=\"/index.php?title=Home&amp;oldid=2421\" title=\"Permanent link to this revision of the page\">Permanent link</a></li>
                </ul>
            </li>
            <li id=\"smallLinks\">
                <a href=\"/User:77.132.130.158\" id=\"pt-anonuserpage\"  title=\"The user page for the ip you&#039;re editing as [.]\" accesskey=\".\">77.132.130.158</a><br><a href=\"/User_talk:77.132.130.158\" id=\"pt-anontalk\"  title=\"Discussion about edits from this IP address [n]\" accesskey=\"n\">Talk for this IP</a><br><a href=\"/index.php?title=Special:UserLogin&amp;returnto=Home\" id=\"pt-anonlogin\"  title=\"You are encouraged to log in; however, it is not mandatory [o]\" accesskey=\"o\">Log in / create account</a>
            </li>
        </ul>
    </div>        
    <div id=\"bot\"></div>

    <div id=\"rights\">
        <div>
            This page was last modified on 9 May 2016, at 15:02. This page has been accessed 126,624 times.<br>
            Copyright 2010-2016 &copy; IRTES Institute - UPR EA 7274 - Universit&eacute; de Technologie de Belfort-Montb&eacute;liard
            - <a href=\"privacy\"><a href=\"/MultiAgentWiki:Privacy_policy\" title=\"MultiAgentWiki:Privacy policy\">Privacy policy</a></a>
            <a href=\"http://set.utbm.fr\" class=\"logo\" id=\"logoSet\"><img src=\"/logo/logoSetFooter.png\" alt=\"Laboratoire Syst&egrave;mes et Transports\" /></a>
            <a href=\"http://www.utbm.fr\" class=\"logo\"><img src=\"/logo/logoUtbm.png\" alt=\"Universit&eacute; de Technologie de Belfort-Montb&eacute;liard\" /></a>
        </div>
    </div>
</div>
";
        
        $__internal_7a676c6630f6475ff1c39682cc7d8aa8bb0660259958fbefd73263e983d72c16->leave($__internal_7a676c6630f6475ff1c39682cc7d8aa8bb0660259958fbefd73263e983d72c16_prof);

    }

    public function block_myContent($context, array $blocks = array())
    {
        $__internal_2c87d30f925302fc4be89b52297e209259625e35db9e8a15c5717faf9439abb6 = $this->env->getExtension("native_profiler");
        $__internal_2c87d30f925302fc4be89b52297e209259625e35db9e8a15c5717faf9439abb6->enter($__internal_2c87d30f925302fc4be89b52297e209259625e35db9e8a15c5717faf9439abb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "myContent"));

        
        $__internal_2c87d30f925302fc4be89b52297e209259625e35db9e8a15c5717faf9439abb6->leave($__internal_2c87d30f925302fc4be89b52297e209259625e35db9e8a15c5717faf9439abb6_prof);

    }

    // line 86
    public function block_myJavascripts($context, array $blocks = array())
    {
        $__internal_73abbe561335c503455bdb2d5be329fc884b6cbadd6b90b644dcfdaee7610f58 = $this->env->getExtension("native_profiler");
        $__internal_73abbe561335c503455bdb2d5be329fc884b6cbadd6b90b644dcfdaee7610f58->enter($__internal_73abbe561335c503455bdb2d5be329fc884b6cbadd6b90b644dcfdaee7610f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "myJavascripts"));

        // line 87
        echo "    <script type=\"text/javascript\" src=\"/skins/janus/jquery.js\"></script>
    <script type=\"text/javascript\" src=\"/skins/janus/global.js\"></script>

    <script type=\"text/javascript\">if (window.runOnloadHook) runOnloadHook();</script>
";
        
        $__internal_73abbe561335c503455bdb2d5be329fc884b6cbadd6b90b644dcfdaee7610f58->leave($__internal_73abbe561335c503455bdb2d5be329fc884b6cbadd6b90b644dcfdaee7610f58_prof);

    }

    // line 93
    public function block_myStylesheets($context, array $blocks = array())
    {
        $__internal_c65680bda6f3fd431ed043266db257b702b28eaa3d00a1603b873306d6a5546e = $this->env->getExtension("native_profiler");
        $__internal_c65680bda6f3fd431ed043266db257b702b28eaa3d00a1603b873306d6a5546e->enter($__internal_c65680bda6f3fd431ed043266db257b702b28eaa3d00a1603b873306d6a5546e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "myStylesheets"));

        // line 94
        echo "    <link rel=\"stylesheet\" href=\"/skins/janus/reset.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"/skins/janus/global.css\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"/skins/janus/mw_specific.css\" type=\"text/css\">
";
        
        $__internal_c65680bda6f3fd431ed043266db257b702b28eaa3d00a1603b873306d6a5546e->leave($__internal_c65680bda6f3fd431ed043266db257b702b28eaa3d00a1603b873306d6a5546e_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 94,  160 => 93,  149 => 87,  143 => 86,  52 => 11,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block myBody %}*/
/* <div id="bgCont"></div>*/
/* <div id="all">*/
/*     <div id="header">*/
/*         <table id="logo"><tr><td><a href="/"><img src="/logo/logoMultiagentHeader.png"></a></td><tr></table>*/
/*         <a href="http://irtes.utbm.fr" id="logoSetHeader"><img src="/logo/logoIrtes.png"></a>*/
/*     </div>*/
/*     <div id="global">*/
/*         <div id="content">{% block myContent %}{% endblock %}</div>*/
/*         <ul id="menu">*/
/*             <li id="menuTop"></li>*/
/*             <li id='p-Multiagent_Group' >Multiagent Group*/
/*                 <ul>*/
/*                     <li id="n-NEWS-.26-EVENTS"><a href="/Events">NEWS &amp; EVENTS</a></li>*/
/*                     <li id="n-Research-Activities"><a href="/Research_Activities">Research Activities</a></li>*/
/*                     <li id="n-Publications"><a href="/Special:ICAPPublication/-5">Publications</a></li>*/
/*                     <li id="n-Projects"><a href="/Projects">Projects</a></li>*/
/*                     <li id="n-Platforms-.26-Software"><a href="/Platforms">Platforms &amp; Software</a></li>*/
/*                     <li id="n-Patents"><a href="/Patents">Patents</a></li>*/
/*                     <li id="n-Partners"><a href="/Partners">Partners</a></li>*/
/*                 </ul>*/
/*             </li>*/
/*             <li id='p-Members' >Members*/
/*                 <ul>*/
/*                     <li id="n-Current-Members"><a href="/Internal_Members">Current Members</a></li>*/
/*                     <li id="n-Associate-Members"><a href="/External_Members">Associate Members</a></li>*/
/*                     <li id="n-Former-Members"><a href="/Former_Members">Former Members</a></li>*/
/*                     <li id="n-PhD-Theses"><a href="/PhDThesis">PhD Theses</a></li>*/
/*                     <li id="n-Job-Vacancies"><a href="/Jobs">Job Vacancies</a></li>*/
/*                 </ul>*/
/*             </li>*/
/*             <li id='p-Events' >Events*/
/*                 <ul>*/
/*                     <li id="n-Conferences-and-Workshops"><a href="/Conferences">Conferences and Workshops</a></li>*/
/*                     <li id="n-Seminars"><a href="/Seminars">Seminars</a></li>*/
/*                 </ul>*/
/*             </li>*/
/*             <li id='p-Contact' >Contact*/
/*                 <ul>*/
/*                     <li id="n-Venue"><a href="/Venue">Venue</a></li>*/
/*                     <li id="n-Contact"><a href="/Contact">Contact</a></li>*/
/*                 </ul>*/
/*             </li>*/
/*             <li>Search<br><form action="/index.php" id="searchform"><div>*/
/*             <input type='hidden' name="title" value="Special:Search" />*/
/*             <input id="searchInput" name="search" type="text"  title="Search MultiAgentWiki [f]" accesskey="f" value=""/>*/
/*             <input type='submit' name="go" class="searchButton" id="searchGoButton"	value="Go"  title="Go to a page with this exact name if exists" />*/
/*             <input type='submit' name="fulltext" class="searchButton" id="mw-searchButton" value="Search"  title="Search the pages for this text" />*/
/*             </div></form></li>*/
/*             <li id='p-For_members' >For members*/
/*                 <ul>*/
/*                     <li id="n-Publication-Guidelines"><a href="/Publications">Publication Guidelines</a></li>*/
/*                     <li id="n-Developer-Guidelines"><a href="/Development">Developer Guidelines</a></li>*/
/*                 </ul>*/
/*             </li>*/
/*             <li>Toolbox*/
/*                 <ul>*/
/*                     <li id="t-whatlinkshere"><a href="/Special:WhatLinksHere/Home" title="List of all wiki pages that link here [j]" accesskey="j">What links here</a></li>*/
/*                     <li id="t-recentchangeslinked"><a href="/Special:RecentChangesLinked/Home" title="Recent changes in pages linked from this page [k]" accesskey="k">Related changes</a></li>*/
/*                     <li id="t-specialpages"><a href="/Special:SpecialPages" title="List of all special pages [q]" accesskey="q">Special pages</a></li>*/
/*                     <li id="t-print"><a href="/index.php?title=Home&amp;printable=yes" rel="alternate" title="Printable version of this page [p]" accesskey="p">Printable version</a></li>*/
/*                     <li id="t-permalink"><a href="/index.php?title=Home&amp;oldid=2421" title="Permanent link to this revision of the page">Permanent link</a></li>*/
/*                 </ul>*/
/*             </li>*/
/*             <li id="smallLinks">*/
/*                 <a href="/User:77.132.130.158" id="pt-anonuserpage"  title="The user page for the ip you&#039;re editing as [.]" accesskey=".">77.132.130.158</a><br><a href="/User_talk:77.132.130.158" id="pt-anontalk"  title="Discussion about edits from this IP address [n]" accesskey="n">Talk for this IP</a><br><a href="/index.php?title=Special:UserLogin&amp;returnto=Home" id="pt-anonlogin"  title="You are encouraged to log in; however, it is not mandatory [o]" accesskey="o">Log in / create account</a>*/
/*             </li>*/
/*         </ul>*/
/*     </div>        */
/*     <div id="bot"></div>*/
/* */
/*     <div id="rights">*/
/*         <div>*/
/*             This page was last modified on 9 May 2016, at 15:02. This page has been accessed 126,624 times.<br>*/
/*             Copyright 2010-2016 &copy; IRTES Institute - UPR EA 7274 - Universit&eacute; de Technologie de Belfort-Montb&eacute;liard*/
/*             - <a href="privacy"><a href="/MultiAgentWiki:Privacy_policy" title="MultiAgentWiki:Privacy policy">Privacy policy</a></a>*/
/*             <a href="http://set.utbm.fr" class="logo" id="logoSet"><img src="/logo/logoSetFooter.png" alt="Laboratoire Syst&egrave;mes et Transports" /></a>*/
/*             <a href="http://www.utbm.fr" class="logo"><img src="/logo/logoUtbm.png" alt="Universit&eacute; de Technologie de Belfort-Montb&eacute;liard" /></a>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block myJavascripts %}*/
/*     <script type="text/javascript" src="/skins/janus/jquery.js"></script>*/
/*     <script type="text/javascript" src="/skins/janus/global.js"></script>*/
/* */
/*     <script type="text/javascript">if (window.runOnloadHook) runOnloadHook();</script>*/
/* {% endblock %}*/
/* */
/* {% block myStylesheets %}*/
/*     <link rel="stylesheet" href="/skins/janus/reset.css" type="text/css">*/
/*     <link rel="stylesheet" href="/skins/janus/global.css" type="text/css">*/
/*     <link rel="stylesheet" href="/skins/janus/mw_specific.css" type="text/css">*/
/* {% endblock %}*/
/* */
