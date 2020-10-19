<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Developer Information - Cppcheck</title>
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Orbitron&amp;text=Cppcheck" />
  <link rel="stylesheet" type="text/css" href="/site/css/pack.css" />
  <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
  <link rel="alternate" type="application/atom+xml" title="Recent Commits to cppcheck:master"
        href="https://github.com/danmar/cppcheck/commits/master.atom" />
  <link rel="alternate" type="application/atom+xml" title="Trac Timeline"
        href="http://trac.cppcheck.net/timeline?changeset=on&amp;ticket=on&amp;milestone=on&amp;wiki=on&amp;max=50&amp;daysback=90&amp;format=rss" />
  <link rel="alternate" type="application/atom+xml" title="Latest Forum Posts"
        href="http://sourceforge.net/p/cppcheck/discussion/feed" />
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" type="text/javascript"></script>
  <script type="text/javascript">
    //<![CDATA[
    window.jQuery || document.write('<script type="text/javascript" src="/site/js/jquery-1.11.0.min.js"><\/script>')
    //]]>
  </script>
  <script src="/site/js/pack.js" type="text/javascript"></script>
  <script type="text/javascript">
    $(function() {
      $("#github-commits").listCommits("danmar", "cppcheck", "master");
    });
  </script>
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
      <li><a href="/">Home</a></li>
      <li><a href="http://sourceforge.net/p/cppcheck/wiki/">Wiki</a></li>
      <li><a href="http://sourceforge.net/p/cppcheck/discussion/">Forum</a></li>
      <li><a href="http://trac.cppcheck.net">Issues</a></li>
      <li><strong><a href="/devinfo/" title="Developer Information">Developer Info</a></strong></li>
      <li><a href="/demo/">Online Demo</a></li>
      <li><a href="http://sourceforge.net/projects/cppcheck/">Project page</a></li>
    </ul>
  </div> <!-- .wrap -->
</div> <!-- #tabs -->
<div id="anchors">
  <div class="wrap">
    <ul>
      <li><a href="#source-code">Source Code</a></li>
      <li><a href="http://trac.cppcheck.net/timeline">Trac Timeline</a></li>
      <li><a href="#latest-forum-posts">Latest Forum Posts</a></li>
      <li><a href="#doxygen">Doxygen</a></li>
      <li><a href="#scan">Scan</a></li>
      <li><a href="#other">Other</a></li>
    </ul>
  </div> <!-- .wrap -->
</div> <!-- #anchors -->
<div id="content">
  <div class="wrap">
<h2 id="source-code">Source Code</h2>
<p>Latest version can be found in the <a href="https://github.com/danmar/cppcheck/">
cppcheck git repository</a>.</p>
<p>To get the source code using git:</p>
<pre class="cmd">git clone git://github.com/danmar/cppcheck.git</pre>
<p>To get the source code using subversion:</p>
<pre class="cmd">svn checkout https://github.com/danmar/cppcheck/trunk</pre>
<p>You can also <a href="https://github.com/danmar/cppcheck/releases">download
the latest sources in a zip or tgz archive</a> from the github website.</p>
<h3>Recent Commits</h3>
<div id="github-commits"><a href="https://github.com/danmar/cppcheck/commits/master">View recent commits&hellip;</a></div>
<p><a href="https://github.com/danmar/cppcheck/commits/master">View all commits&hellip;</a></p>
<h2 id="latest-forum-posts">Latest Forum Posts</h2>
<?php
  require '../site/simplepie/simplepie.php';

  $feed = new SimplePie();
  $feed->set_feed_url('http://sourceforge.net/p/cppcheck/discussion/feed');
  $feed->set_cache_location('../site/simplepie/cache');
  $feed->init();
  print("<ul class=\"rssfeeditems\">\n");
  foreach ($feed->get_items() as $item) { //for the last timeline items...
    if ($author = $item->get_author()) {
      $author = "by <strong>".trim($author->get_name())."</strong>";
    } else {
      $author = null;
    }
    print("  <li><a href=\"".$item->get_link()."\">".$item->get_title()."</a> <em>".$author." on ".$item->get_date('Y-m-d')."</em></li>\n");
  }
  print("</ul>\n");
?>
<p><a href="http://sourceforge.net/p/cppcheck/discussion/">View forum&hellip;</a></p>
<h2 id="doxygen">Doxygen</h2>
<ul>
  <li><a href="doxyoutput/">Output</a></li>
  <li><a href="doxygen-errors.txt">Errors</a></li>
</ul>
<h2 id="scan">Scan</h2>
<ul>
  <li>DACA2@HOME - Scanning Debian with Cppcheck. <a href="http://cppcheck1.osuosl.org:8000">results</a></li>
</ul>

<h2 id="other">Other</h2>
<ul>
  <li><a href="coverage_report/">Coverage report</a></li>
  <li><a hre="https://codecov.io/gh/danmar/cppcheck">Alternative Coverage site</a></li>
  <li><a href="cpd.txt">CPD - copy pasted code</a></li>
  <li><a href="keywords.txt">Trac keywords</a></li>
</ul>
  </div> <!-- .wrap -->
</div> <!-- #content -->
<?php include_once("../analyticstracking.php") ?>
</body>
</html>
