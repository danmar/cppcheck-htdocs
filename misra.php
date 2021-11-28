<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="description" content="MISRA C 2012 Compliance" />
  <meta name="keywords" content="Cppcheck, MISRA" />
  <title>Cppcheck - MISRA C 2012 Compliance</title>
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Orbitron&amp;text=Cppcheck" />
  <link rel="stylesheet" type="text/css" href="/site/css/pack.css" />
  <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
  <link rel="alternate" type="application/rss+xml" title="Project News" href="http://sourceforge.net/p/cppcheck/news/feed" />
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
      <li><a href="/devinfo/" title="Developer Information">Developer Info</a></li>
      <li><a href="/demo/">Online Demo</a></li>
      <li><a href="http://sourceforge.net/projects/cppcheck/">Project page</a></li>
    </ul>
  </div> <!-- .wrap -->
</div> <!-- #tabs -->
<div id="content">
  <div class="wrap">
<h1>Cppcheck - MISRA C 2012 Compliance</h1>
<p>Cppcheck covers almost all the MISRA C 2012 rules. Including the amendments. Together with a C compiler you get full coverage.</p>

<h2>Feature matrix</h2>

<p>In the table below we show checkers that are included/missing in latest Cppcheck.</p>

<p>The rules 1.1 and 1.2 will not be handled by Cppcheck. If you want to enforce these you can use compilers. For instance, you can compile (but not necessarily link) with gcc + msvc + your normal target compiler.</p>

<pre>
1.1     
1.2     
1.3     X (Cppcheck)
2.1     X (Cppcheck)
2.2     X (Addon)
2.3     X (Addon)
2.4     X (Addon)
2.5     X (Addon)
2.6     X (Cppcheck)
2.7     X (Addon)
3.1     X (Addon)
3.2     X (Addon)
4.1     X (Addon)
4.2     X (Addon)
5.1     X (Addon)
5.2     X (Addon)
5.3     X (Cppcheck)
5.4     X (Addon)
5.5     X (Addon)
5.6     X (Addon)
5.7     X (Addon)
5.8     X (Addon)
5.9     X (Addon)
6.1     X (Addon)
6.2     X (Addon)
7.1     X (Addon)
7.2     X (Addon)
7.3     X (Addon)
7.4     X (Addon)
8.1     X (Addon)
8.2     X (Addon)
8.3     X (Cppcheck)
8.4     X (Addon)
8.5     X (Addon)
8.6     X (Addon)
8.7     X (Addon)
8.8     X (Addon)
8.9     X (Addon)
8.10    X (Addon)
8.11    X (Addon)
8.12    X (Addon)
8.13    X (Cppcheck)
8.14    X (Addon)
9.1     X (Cppcheck)
9.2     X (Addon)
9.3     X (Addon)
9.4     X (Addon)
9.5     X (Addon)
10.1    X (Addon)
10.2    X (Addon)
10.3    X (Addon)
10.4    X (Addon)
10.5    X (Addon)
10.6    X (Addon)
10.7    X (Addon)
10.8    X (Addon)
11.1    X (Addon)
11.2    X (Addon)
11.3    X (Addon)
11.4    X (Addon)
11.5    X (Addon)
11.6    X (Addon)
11.7    X (Addon)
11.8    X (Addon)
11.9    X (Addon)
12.1    X (Addon)
12.2    X (Addon)
12.3    X (Addon)
12.4    X (Addon)
13.1    X (Addon)
13.2    X (Cppcheck)
13.3    X (Addon)
13.4    X (Addon)
13.5    X (Addon)
13.6    X (Addon)
14.1    X (Addon)
14.2    X (Addon)
14.3    X (Cppcheck)
14.4    X (Addon)
15.1    X (Addon)
15.2    X (Addon)
15.3    X (Addon)
15.4    X (Addon)
15.5    X (Addon)
15.6    X (Addon)
15.7    X (Addon)
16.1    X (Addon)
16.2    X (Addon)
16.3    X (Addon)
16.4    X (Addon)
16.5    X (Addon)
16.6    X (Addon)
16.7    X (Addon)
17.1    X (Addon)
17.2    X (Addon)
17.3    
17.4    X (Cppcheck)
17.5    X (Cppcheck)
17.6    X (Addon)
17.7    X (Addon)
17.8    X (Addon)
18.1    X (Cppcheck)
18.2    X (Cppcheck)
18.3    X (Cppcheck)
18.4    X (Addon)
18.5    X (Addon)
18.6    X (Cppcheck)
18.7    X (Addon)
18.8    X (Addon)
19.1    X (Cppcheck)
19.2    X (Addon)
20.1    X (Addon)
20.2    X (Addon)
20.3    X (Addon)
20.4    X (Addon)
20.5    X (Addon)
20.6    X (Cppcheck)
20.7    X (Addon)
20.8    X (Addon)
20.9    X (Addon)
20.10   X (Addon)
20.11   X (Addon)
20.12   X (Addon)
20.13   X (Addon)
20.14   X (Addon)
21.1    X (Addon)
21.2    X (Addon)
21.3    X (Addon)
21.4    X (Addon)
21.5    X (Addon)
21.6    X (Addon)
21.7    X (Addon)
21.8    X (Addon)
21.9    X (Addon)
21.10   X (Addon)
21.11   X (Addon)
21.12   X (Addon)
21.13   X (Cppcheck)
21.14   X (Addon)
21.15   X (Addon)
21.16   X (Addon)
21.17   X (Cppcheck)
21.18   X (Cppcheck)
21.19   X (Addon)
21.20   X (Addon)
21.21   X (Addon)
22.1    X (Cppcheck)
22.2    X (Cppcheck)
22.3    X (Cppcheck)
22.4    X (Cppcheck)
22.5    X (Addon)
22.6    X (Cppcheck)
22.7    X (Addon)
22.8    X (Addon)
22.9    X (Addon)
22.10   X (Addon)
</pre>
</div>
</div>
</body>
</html>
