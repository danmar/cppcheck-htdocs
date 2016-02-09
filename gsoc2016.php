<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="description" content="google summer of code 2016 ideas" />
  <meta name="keywords" content="Cppcheck, google summer of code" />
  <title>google summer of code 2014 ideas</title>
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Orbitron&amp;text=Cppcheck" />
  <link rel="stylesheet" type="text/css" href="/site/css/pack.css" />
  <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
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
<div id="content">
  <div class="wrap">

  <h2>1. Add new checker</h2>

  <p>
    <strong>Description:</strong> There are several tickets in our issue tracker that has ideas for new checkers.
    The subtasks will be: pick a ticket to fix, write test cases, implement new checker, test it against various
    projects.
  </p>

  <h2>2. Refactor and improve our threads code</h2>

  <p>
    <strong>Description:</strong> Currently whole-program analysis can only be used in single-threaded checking.
    For instance the "unused functions" checking only works in single-threaded checking.
  </p>

  </div> <!-- .wrap -->
</div> <!-- #content -->

</body>
</html>
