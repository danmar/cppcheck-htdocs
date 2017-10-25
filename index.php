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
for C/C++ code. It provides unique code analysis to detect bugs and focuses on detecting undefined behaviour and
dangerous coding constructs. The goal is to detect only real errors in the code (i.e. have very few false positives).
</p>

<h2 id="download">Download</h2>
<p>
  <h3>Cppcheck 1.81</h3>
  <table border="0" width="50%">
    <tr> <td style="background-color:#369" width="75%"><font style="color:#eee">Platform</td> <td  style="background-color:#369"><font style="color:#eee">File</font></td> </tr>
    <tr> <td  style="background-color:#fff">Windows 64-bit (No XP support)</td> <td style="background-color:#fff"><a href="http://github.com/danmar/cppcheck/releases/download/1.81/cppcheck-1.81-x64-Setup.msi">Installer</a></td> </tr>
    <tr> <td style="background-color:#ccccff">Windows 32-bit (No XP support)</td> <td style="background-color:#ccccff"><a href="http://github.com/danmar/cppcheck/releases/download/1.81/cppcheck-1.81-x86-Setup.msi">Installer</a></td> </tr>
    <tr> <td style="background-color:#fff">Source code (.zip)</td><td style="background-color:#fff"><a href="http://github.com/danmar/cppcheck/releases/download/1.81/cppcheck-1.81.zip">Archive</a></td> </tr>
    <tr> <td style="background-color:#ccccff">Source code (.tar.gz)</td><td style="background-color:#ccccff"><a href="http://github.com/danmar/cppcheck/releases/download/1.81/cppcheck-1.81.tar.gz">Archive</a></td> </tr>
  </table>

  <h3>Packages</h3>
  Cppcheck can also be installed from various package managers; however, you might get an outdated version then.<br>
  Debian: <pre class="cmd">sudo apt-get install cppcheck</pre>
  Fedora: <pre class="cmd">sudo yum install cppcheck</pre>
  Mac: <pre class="cmd">brew install cppcheck</pre>
</p>

<h2 id="features">Features</h2>
<p>Unique code analysis that detect various kinds of bugs in your code.</p>
<p>Both command line interface and graphical user interface are available.</p>

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
<p>The most common types of security vulnerabilities so far in 2017 (CVE count) are:
  <table border="0">
    <tr> <td style="background-color:#369"><font style="color:#eee">Category</td> <td style="background-color:#369">&nbsp;&nbsp;&nbsp;</td> <td style="background-color:#369"><font style="color:#eee"> Amount </font></td> <td style="background-color:#369">&nbsp;&nbsp;&nbsp;</td> <td style="background-color:#369"><font style="color:#eee"> Cppcheck </font></td> </tr>
    <tr> <td  style="background-color:#fff">Buffer Errors</td> <td style="background-color:#fff"></td> <td style="background-color:#fff"><a href="https://nvd.nist.gov/vuln/search/statistics?results_type=statistics&cwe_id=CWE-119">2077</a></td> <td  style="background-color:#fff"></td> <td  style="background-color:#fff">A few</td> </tr>
    <tr> <td style="background-color:#ccccff">Improper Access Control</td> <td style="background-color:#ccccff"></td> <td style="background-color:#ccccff"><a href="https://nvd.nist.gov/vuln/search/statistics?results_type=statistics&cwe_id=CWE-284">1237</a></td> <td style="background-color:#ccccff"></td> <td style="background-color:#ccccff">A few (unintended backdoors)</td> </tr>
    <tr> <td style="background-color:#fff">Information Leak</td> <td  style="background-color:#fff"></td> <td style="background-color:#fff"><a href="https://nvd.nist.gov/vuln/search/statistics?results_type=statistics&cwe_id=CWE-200">1088</a></td> <td  style="background-color:#fff"></td> <td  style="background-color:#fff">A few (unintended backdoors)</td> </tr>
    <tr> <td style="background-color:#ccccff">Permissions, Privileges, and Access Control</td> <td  style="background-color:#ccccff"></td> <td style="background-color:#ccccff"><a href="https://nvd.nist.gov/vuln/search/statistics?results_type=statistics&cwe_id=CWE-264">991</a></td> <td style="background-color:#ccccff"></td> <td style="background-color:#ccccff">A few (unintended backdoors)</td> </tr>
    <tr> <td style="background-color:#fff">Input Validation</td> <td  style="background-color:#fff"></td> <td style="background-color:#fff"><a href="https://nvd.nist.gov/vuln/search/statistics?results_type=statistics&cwe_id=CWE-20">737</a></td> <td  style="background-color:#fff"></td> <td  style="background-color:#fff">No</td> </tr>
  </table>
</p>

<p>A CVE that is found by Cppcheck:<br>
<a href="https://nvd.nist.gov/vuln/detail/CVE-2017-7679">CVE-2017-7679</a> : In Apache httpd 2.2.x before 2.2.33 and 2.4.x before 2.4.26, mod_mime can read one byte past the end of a buffer when sending a malicious Content-Type response header.<br>
The real cause is a mistake in a condition and that is found by Cppcheck.
</p>

<h3>All checks</h3>
<p>For a list of all checks see: <a href="http://sourceforge.net/p/cppcheck/wiki/ListOfChecks">http://sourceforge.net/p/cppcheck/wiki/ListOfChecks</a>.</p>

<h2>Clients and plugins</h2>
<p>Cppcheck is integrated with many popular development tools. For instance:</p>
<ul>
  <li><strong>CLion</strong> - <a href="https://plugins.jetbrains.com/plugin/8143">Cppcheck plugin</a></li>
  <li><strong>Code::Blocks</strong> - <em>integrated</em></li>
  <li><strong>CodeDX</strong> (software assurance tool) - <a href="http://codedx.com/code-dx-standard/">integrated</a></li>
  <li><strong>CodeLite</strong> - <em>integrated</em></li>
  <li><strong>CppDepend 5</strong> - <a href="http://www.cppdepend.com/CppDependV5.aspx">integrated</a></li>
  <li><strong>Eclipse</strong> - <a href="https://github.com/kwin/cppcheclipse/wiki/Installation">Cppcheclipse</a></li>
  <li><strong>KDevelop</strong> - <a href="https://kdevelop.org/">integrated since v5.1</a></li>
  <li><strong>gedit</strong> - <a href="http://github.com/odamite/gedit-cppcheck">gedit plugin</a></li>
  <li><strong>Hudson</strong> - <a href="http://wiki.hudson-ci.org/display/HUDSON/Cppcheck+Plugin">Cppcheck Plugin</a></li>
  <li><strong>Jenkins</strong> - <a href="http://wiki.jenkins-ci.org/display/JENKINS/Cppcheck+Plugin">Cppcheck Plugin</a></li>
  <li><strong>Mercurial (Linux)</strong> - <a href="http://sourceforge.net/p/cppcheck/wiki/mercurialhook/">pre-commit hook</a> - Check for new errors on commit (requires interactive terminal)</li>
  <li><strong>Tortoise SVN</strong> - <a href="http://omerez.com/automatic-static-code-analysis/">Adding a pre-commit hook script</a></li>
  <li><strong>Git (Linux)</strong> - <a href="https://github.com/danmar/cppcheck/blob/master/tools/git-pre-commit-cppcheck">pre-commit hook</a> - Check for errors in files going into commit (requires interactive terminal)</li>
  <li><strong>Visual Studio</strong> - <a href="https://github.com/VioletGiraffe/cppcheck-vs-addin/releases/latest">Visual Studio plugin</a></li>
  <li><strong>QtCreator</strong> - <a href="https://sourceforge.net/projects/qtprojecttool/files">Qt Project Tool (qpt)</a></li>
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
  <li>Ask questions at the IRC channel <a href="irc://irc.freenode.net/#cppcheck">#cppcheck</a></li>
</ul>

<h2 id="contribute">Contribute</h2>
<p>You are welcome to contribute. Help is needed.</p>
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
</body>
</html>
