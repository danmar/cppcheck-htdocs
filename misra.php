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
<p>The MISRA C 2012 compliance checking in cppcheck is a work in progress.</p>

<h2>Kickstarter</h2>

<p>We are currently trying to get funding for misra development through <a href="https://www.kickstarter.com/projects/3300446/improve-misra-checking">kickstarter</a>. Please donate to make the misra addon more complete.</p>

<h2>Feature matrix</h2>

<p>In the table below we show checkers that are included/missing in latest Cppcheck.</p>

<p>The rules 1.1 and 1.2 will not be handled by Cppcheck. If you want to enforce these you can use compilers. For instance, you can compile (but not necessarily link) with gcc + msvc + your normal target compiler.</p>

<p>There are several other missing MISRA checks in the table below. Cppcheck will have these checks too, we will work on that, but if you want to check compliance now you can use a compiler as a complement (for instance gcc cover some of the missing rules).</p>

<pre>
1.1     
1.2     
1.3     X (Cppcheck)
2.1     X (Cppcheck)
2.2     X (Cppcheck)
2.3     
2.4     X (Cppcheck)
2.5     
2.6     X (Cppcheck)
2.7     
3.1     X (Addon)
3.2     
4.1     X (Addon)
4.2     
5.1     X (Addon)
5.2     X (Addon)
5.3     X (Cppcheck)
5.4     X (Addon)
5.5     X (Addon)
5.6     
5.7     
5.8     
5.9     
6.1     
6.2     
7.1     X (Addon)
7.2     
7.3     X (Addon)
7.4     
8.1     
8.2     
8.3     X (Cppcheck)
8.4     
8.5     
8.6     
8.7     
8.8     
8.9     
8.10    
8.11    X (Addon)
8.12    X (Addon)
8.13    
8.14    X (Addon)
9.1     
9.2     
9.3     
9.4     
9.5     X (Addon)
10.1    X (Addon)
10.2    
10.3    
10.4    X (Addon)
10.5    
10.6    X (Addon)
10.7    
10.8    X (Addon)
11.1    
11.2    
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
15.4    
15.5    X (Addon)
15.6    X (Addon)
15.7    X (Addon)
16.1    
16.2    X (Addon)
16.3    X (Addon)
16.4    X (Addon)
16.5    X (Addon)
16.6    X (Addon)
16.7    X (Addon)
17.1    X (Addon)
17.2    
17.3    
17.4    
17.5    X (Cppcheck)
17.6    X (Addon)
17.7    X (Addon)
17.8    X (Addon)
18.1    X (Cppcheck)
18.2    X (Cppcheck)
18.3    X (Cppcheck)
18.4    
18.5    X (Addon)
18.6    X (Cppcheck)
18.7    
18.8    X (Addon)
19.1    
19.2    X (Addon)
20.1    X (Addon)
20.2    X (Addon)
20.3    X (Addon)
20.4    X (Addon)
20.5    X (Addon)
20.6    X (Cppcheck)
20.7    X (Addon)
20.8    
20.9    
20.10   X (Addon)
20.11   
20.12   
20.13   X (Addon)
20.14   X (Addon)
21.1    
21.2    
21.3    X (Addon)
21.4    X (Addon)
21.5    X (Addon)
21.6    X (Addon)
21.7    X (Addon)
21.8    X (Addon)
21.9    X (Addon)
21.10   X (Addon)
21.11   X (Addon)
21.12   
22.1    X (Cppcheck)
22.2    X (Cppcheck)
22.3    
22.4    X (Cppcheck)
22.5    
22.6    X (Cppcheck)
</pre>
</div>
</div>
</body>
</html>
