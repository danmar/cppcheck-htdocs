<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="description" content="Cppcheck is an analysis tool for C/C++ code.
It detects the types of bugs that the compilers normally fail to detect. The
goal is no false positives." />
  <meta name="keywords" content="Cppcheck, open source, analysis tool, C/C++,
code, errors, bugs, compilers, bounds checking, memory leaks, obsolete functions,
uninitialized variables, unused functions" />
  <title>Cppcheck - A tool for static C/C++ code analysis</title>
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Orbitron&amp;text=Cppcheck" />
  <link rel="stylesheet" type="text/css" href="/site/css/pack.css" />
  <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
  <link rel="alternate" type="application/rss+xml" title="Project News"
        href="http://sourceforge.net/p/cppcheck/news/feed" />
</head>
<body>
<div id="header">
  <div class="wrap">
    <h1><a href="/">Cppcheck</a></h1>
    <p>A tool for static C/C++ code analysis</p>
  </div> <!-- .wrap -->
</div> <!-- #header -->
<div id="tabs">
  <div class="wrap">
    <ul>
      <li><strong><a href="/">Home</a></strong></li>
      <li><a href="http://sourceforge.net/p/cppcheck/wiki/">Wiki</a></li>
      <li><a href="http://sourceforge.net/p/cppcheck/discussion/">Forum</a></li>
      <li><a href="http://trac.cppcheck.net">Issues</a></li>
      <li><a href="/devinfo/" title="Developer Information">Developer Info</a></li>
      <li><a href="/demo/">Online Demo</a></li>
      <li><a href="http://sourceforge.net/projects/cppcheck/">Project page</a></li>
    </ul>
  </div> <!-- .wrap -->
</div> <!-- #tabs -->
<div id="anchors">
  <div class="wrap">
    <ul>
      <li><a href="#download">Download</a></li>
      <li><a href="#features">Features</a></li>
      <li><a href="#news">News</a></li>
      <li><a href="#documentation">Documentation</a></li>
      <li><a href="#support">Support</a></li>
      <li><a href="#contribute">Contribute</a></li>
    </ul>
  </div> <!-- .wrap -->
</div> <!-- #anchors -->
<div id="content">
  <div class="wrap">
<p>
<strong>Cppcheck</strong> is a <a href="http://en.wikipedia.org/wiki/Static_analysis_tool">static analysis tool</a>
for C/C++ code. It provides <a href="#unique">unique code analysis</a> to detect bugs and focuses on detecting undefined behaviour and
dangerous coding constructs. The goal is to have very few false positives.
Cppcheck is designed to be able to analyze your C/C++ code even if it has non-standard syntax (common in embedded projects).
</p>

<h2 id="download">Download</h2>

<h3>Cppcheck 2.6</h3>
<table width="80%" class="table" >
  <tr>
    <th width="75%">Platform</th>
    <th>File</th>
  </tr>
  <tr>
    <td>Windows 64-bit (No XP support)</td>
    <td><a href="https://github.com/danmar/cppcheck/releases/download/2.6/cppcheck-2.6-x64-Setup.msi">Open source</a></td>
  </tr>
  <tr>
    <td>Windows 64-bit (No XP support)</td>
    <td><a href="#premium">Premium</a></td>
  </tr>
  <tr>
    <td>Source code (.zip)</td>
    <td><a href="https://github.com/danmar/cppcheck/archive/2.6.zip">Archive</a></td>
  </tr>
  <tr>
    <td>Source code (.tar.gz)</td>
    <td><a href="https://github.com/danmar/cppcheck/archive/2.6.tar.gz">Archive</a></td>
  </tr>
</table>

<h3 id="premium">Cppcheck Premium</h3>

<p>There is a Premium edition that contains:</p>
<ul>
  <li>Open source command line Cppcheck tool</li>
  <li>Analysis: Extra checking for memory errors, diagnoses one of the bugs reported in CVE-2019-15048.</li>
  <li>Security: Binaries and installer are signed using an organization certificate. This removes the  "Unknown Publisher" warning.</li>
  <li>Currently, Cppcheck Premium only includes a Windows installer. Feel free to contact us if you want Linux binaries.</li>
</ul>

<p>Cppcheck Premium features that will come soon:</p>
<ul>
  <li>Detect more memory errors and other undefined behavior</li>
  <li>Misra rule texts</li>
  <li>Improved Clang import</li>
</ul>

<p>Cppcheck Premium is developed by the swedish company Cppcheck Solutions AB. Cppcheck Solutions AB has ambitious goals for Cppcheck and will actively contribute to the open source Cppcheck project.</p>

<p>To get Cppcheck Premium, contact <a href="mailto:sales@cppchecksolutions.com">sales@cppchecksolutions.com</a></p>

<h3>Packages</h3>
<p>Cppcheck can also be installed from various package managers; however, you might get an outdated version then.</p>
<h4>Debian:</h4>
<pre class="cmd">sudo apt-get install cppcheck</pre>
<h4>Fedora:</h4>
<pre class="cmd">sudo yum install cppcheck</pre>
<h4>Mac:</h4>
<pre class="cmd">brew install cppcheck</pre>

<h2 id="features">Features</h2>
<p>Unique code analysis that detect various kinds of bugs in your code.</p>
<p>Both command line interface and graphical user interface are available.</p>
<p>Cppcheck has a strong focus on detecting undefined behaviour.</p>

<h3 id="unique">Unique analysis</h3>

<p>Using several static analysis tools can be a good idea. There are unique features in each tool. This has been established in many studies.</p>

<p>So what is unique in Cppcheck.</p>

<p>Cppcheck uses unsound flow sensitive analysis. Several other analyzers use path sensitive analysis based on abstract interpretation, that is also great however that has both advantages and disadvantages. In theory by definition, it is better with path sensitive analysis than flow sensitive analysis. But in practice, it means Cppcheck will detect bugs that the other tools do not detect.</p>

<p>In Cppcheck the data flow analysis is not only "forward" but "bi-directional". Most analyzers will diagnose this:</p>

<pre>void foo(int x)
{
    int buf[10];
    if (x == 1000)
        buf[x] = 0; // <- ERROR
}</pre>

<p>Most tools can determine that the array index will be 1000 and there will be overflow.</p>

<p>Cppcheck will also diagnose this:</p>

<pre>void foo(int x)
{
    int buf[10];
    buf[x] = 0; // <- ERROR
    if (x == 1000) {}
}</pre>

<h3>Undefined behaviour</h3>
<ul>
  <li>Dead pointers</li>
  <li>Division by zero</li>
  <li>Integer overflows</li>
  <li>Invalid bit shift operands</li>
  <li>Invalid conversions</li>
  <li>Invalid usage of <acronym title="Standard Template Library">STL</acronym></li>
  <li>Memory management</li>
  <li>Null pointer dereferences</li>
  <li>Out of bounds checking</li>
  <li>Uninitialized variables</li>
  <li>Writing const data</li>
</ul>

<h3 id="security">Security</h3>
<p>The most common types of security vulnerabilities in 2017 (CVE count) was:</p>
<table class="table">
  <tr>
    <th>Category</th>
    <th>Amount</th>
    <th>Detected by Cppcheck</th>
  </tr>
  <tr>
    <td>Buffer Errors</td>
    <td><a href="https://nvd.nist.gov/vuln/search/statistics?results_type=statistics&cwe_id=CWE-119">2530</a></td>
    <td>A few</td>
  </tr>
  <tr>
    <td>Improper Access Control</td>
    <td><a href="https://nvd.nist.gov/vuln/search/statistics?results_type=statistics&cwe_id=CWE-284">1366</a></td>
    <td>A few (unintended backdoors)</td>
  </tr>
  <tr>
    <td>Information Leak</td>
    <td><a href="https://nvd.nist.gov/vuln/search/statistics?results_type=statistics&cwe_id=CWE-200">1426</a></td>
    <td>A few (unintended backdoors)</td>
  </tr>
  <tr>
    <td>Permissions, Privileges, and Access Control</td>
    <td><a href="https://nvd.nist.gov/vuln/search/statistics?results_type=statistics&cwe_id=CWE-264">1196</a></td>
    <td>A few (unintended backdoors)</td>
  </tr>
  <tr>
    <td>Input Validation</td>
    <td><a href="https://nvd.nist.gov/vuln/search/statistics?results_type=statistics&cwe_id=CWE-20">968</a></td>
    <td>No</td>
  </tr>
</table>

<p>CVEs that was found using Cppcheck:</p>
<ul>
<li><a href="https://nvd.nist.gov/vuln/detail/CVE-2017-1000249">CVE-2017-1000249</a> : file : stack based buffer overflow<br>
This was found by Thomas Jarosch using Cppcheck. The cause is a mistake in a condition.</li>
<li><a href="https://nvd.nist.gov/vuln/detail/CVE-2013-6462">CVE-2013-6462</a> : 23 year old stack overflow in X.org that was found with Cppcheck.<br>
This has been described in a few articles (<a href="https://www.theregister.co.uk/2014/01/09/x11_has_privilege_escalation_bug/">link</a>).</li>
<li><a href="https://nvd.nist.gov/vuln/detail/CVE-2012-1147">CVE-2012-1147</a> : readfilemap.c in expat before 2.1.0 allows context-dependent attackers to cause a denial of service (file descriptor consumption) via a large number of crafted XML files..</li>
</ul>

<p>These CVEs are shown when you google "cppcheck CVE". Feel free to compare the search results with other static analysis tools.</p>

<p>Security experts recommend that static analysis is used. And using several tools is the best approach from a security perspective.</p>

<h3 id="coding-standards">Coding standards</h3>
<p>Cert: A few checkers available in addon.</p>
<p>Misra: <a href="misra.php">Feature matrix</a>.</p>

<h3>All checks</h3>
<p>For a list of all checks in Cppcheck see: <a href="http://sourceforge.net/p/cppcheck/wiki/ListOfChecks">http://sourceforge.net/p/cppcheck/wiki/ListOfChecks</a>.</p>

<h2>Clients and plugins</h2>
<p>Cppcheck is integrated with many popular development tools. For instance:</p>
<ul>
  <li><strong>Buildbot</strong> - <a href="https://docs.buildbot.net/latest/manual/configuration/steps/cppcheck.html">integrated</a></li>
  <li><strong>CLion</strong> - <a href="https://plugins.jetbrains.com/plugin/8143">Cppcheck plugin</a></li>
  <li><strong>Code::Blocks</strong> - <em>integrated</em></li>
  <li><strong>CodeDX</strong> (software assurance tool) - <a href="http://codedx.com/code-dx-standard/">integrated</a></li>
  <li><strong>CodeLite</strong> - <em>integrated</em></li>
  <li><strong>CppDepend 5</strong> - <a href="http://www.cppdepend.com/CppDependV5.aspx">integrated</a></li>
  <li><strong>Eclipse</strong> - <a href="https://github.com/kwin/cppcheclipse/wiki/Installation">Cppcheclipse</a></li>
  <li><strong>gedit</strong> - <a href="http://github.com/odamite/gedit-cppcheck">gedit plugin</a></li>
  <li><strong>github</strong> - <a href="https://www.codacy.com/">Codacy</a> and <a href="http://www.softacheck.com/">SoftaCheck</a></li>
  <li><strong>Hudson</strong> - <a href="http://wiki.hudson-ci.org/display/HUDSON/Cppcheck+Plugin">Cppcheck Plugin</a></li>
  <li><strong>Jenkins</strong> - <a href="http://wiki.jenkins-ci.org/display/JENKINS/Cppcheck+Plugin">Cppcheck Plugin</a></li>
  <li><strong>KDevelop</strong> - <a href="https://kdevelop.org/">integrated since v5.1</a></li>
  <li><strong>Mercurial (Linux)</strong> - <a href="http://sourceforge.net/p/cppcheck/wiki/mercurialhook/">pre-commit hook</a> - Check for new errors on commit (requires interactive terminal)</li>
  <li><strong>QtCreator</strong> - <a href="https://sourceforge.net/projects/qtprojecttool/files">Qt Project Tool (qpt)</a></li>
  <li><strong>Tortoise SVN</strong> - <a href="http://omerez.com/automatic-static-code-analysis/">Adding a pre-commit hook script</a></li>
  <li><strong>Visual Studio</strong> - <a href="https://github.com/VioletGiraffe/cppcheck-vs-addin/releases/latest">Visual Studio plugin</a></li>
</ul>

<h2>Other static analysis tools</h2>

<p>Using a battery of tools is better than using one tool. Each tool has unique code analysis and therefore we recommend that you also use other tools.</p>

<p>Cppcheck focus on bugs instead of stylistic issues. Therefore a tool that focus on stylistic issues could be a good addition.</p>

<p>Cppcheck tries very hard to avoid false positives. Sometimes people want to detect all bugs even if there will be many false warnings, for instance when they are working on a release and want to verify that there are no bugs. A tool that is much more noisy than Cppcheck might be a good addition.</p>

<p>Even tools that have the same design goals as Cppcheck will probably be good additions. Static analysis is such a big field, Cppcheck only covers a small fraction of it. No tool covers the whole field. The day when all manual testing will be obsolete because of some tool is very far away.</p>

<h2 id="news">News</h2>
<?php
  require './site/simplepie/simplepie.php';

  $feed = new SimplePie();
  $feed->set_feed_url('http://sourceforge.net/p/cppcheck/news/feed');
  $feed->set_cache_location('./site/simplepie/cache');
  $feed->init();
  print("<ul class=\"rssfeeditems\">\n");
  foreach ($feed->get_items(0, 3) as $item) { //for the last 3 news items...
    print("  <li><a href=\"".$item->get_link()."\">".$item->get_title()."</a> <em>".$item->get_date('Y-m-d')."</em></li>\n");
  }
  print("</ul>\n");
?>
<p><a href="http://sourceforge.net/p/cppcheck/news/">View all news&hellip;</a></p>

<h2 id="documentation">Documentation</h2>
<p>You can read the <a href="manual.pdf">manual</a> or download some
<a href="http://sourceforge.net/projects/cppcheck/files/Articles/">articles</a>.</p>

<h2 id="support">Support</h2>
<ul>
  <li>Use <a href="http://trac.cppcheck.net">Trac</a> to report bugs and feature requests</li>
  <li>Ask questions at the IRC channel <a href="irc://irc.libera.chat/#cppcheck">#cppcheck</a></li>
</ul>

<h2 id="donate">Donate CPU</h2>
<p>The Cppcheck project is a hobby project with limited resources. You can help us by donating CPU (1 core or as many as you like). It is simple:</p>
<ol>
<li>Download (and extract) Cppcheck source code</li>
<li>Run script: python cppcheck/tools/donate-cpu.py</li>
</ol>
<p>The script will analyse debian source code and upload the results to a cppcheck server. We need these results both to improve Cppcheck and to detect regressions.</p>
<p>You can stop the script whenever you like with Ctrl C.</p>

<h2 id="contribute">Contribute</h2>
<p>You are welcome to contribute. Help is needed.</p>
<p>A presentation that might be interesting: <a href="https://www.youtube.com/watch?v=Cc_U1Hil0S4">Contribute to open source static analysis</a></p>
<dl>
  <dt>Testing</dt>
  <dd>Pick a project and test its source with the latest version of Cppcheck.
  Submit tickets to <a href="http://trac.cppcheck.net">Trac</a> about the
  issues you find in Cppcheck.</dd>
  <dt>Developing</dt>
  <dd>Pick a ticket from <a href="http://trac.cppcheck.net">Trac</a>,
  write a test case for it (and write a comment to the ticket for which that
  test case has been created). Alternatively, pick a test case that fails and
  try to fix it. Make a patch and submit it to Trac either inline, if it is
  small, or otherwise - attach it as a file.</dd>
  <dt>Marketing</dt>
  <dd>Write articles, reviews or tell your friends about us. The more users we
  have, the more people we have testing and the better we can become.</dd>
  <dt>Design</dt>
  <dd>Come up with some new good checks, and create tickets in
  <a href="http://trac.cppcheck.net">the Trac instance</a>
  about them.</dd>
  <dt>Integration</dt>
  <dd>Write a plugin for your favorite IDE or create a package for your
  distribution or operating system.</dd>
  <dt>Technical Writing</dt>
  <dd>Write better documentation for the bugs we find. Currently only a few bugs
  have any documentation at all.</dd>
</dl>

</div> <!-- .wrap -->
</div> <!-- #content -->
<?php include_once("analyticstracking.php") ?>
<?php
function getUserIP()
{
    // Get real visitor IP behind CloudFlare network
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
              $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
              $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}

$t = date("Y-m-d h:i:s");
$ip = getUserIP();

$file = fopen("ip.txt","a");
fwrite($file,"$t $ip\n");
fclose($file);
?>
</body>
</html>
