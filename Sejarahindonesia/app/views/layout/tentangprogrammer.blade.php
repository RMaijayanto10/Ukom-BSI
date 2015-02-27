<html>
    <head>
        <title>BSI. Tentang Programmer</title>
        <meta charset="utf-8" />
   <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
   <!-- Mobile viewport optimized: h5bp.com/viewport -->
   <meta name="viewport" content="width=device-width">
   <meta name="robots" content="noindex, nofollow">
   <meta name="description" content="MetroUI-Web : Simple and complete web UI framework to create web apps with Windows 8 Metro user interface." />
   <meta name="keywords" content="metro, metroui, metro-ui, metro ui, windows 8, metro style, bootstrap, framework, web framework, css, html" />
   <meta name="author" content="AozoraLabs by Marcello Palmitessa"/>
   <!-- remove or comment this line if you want to use the local fonts -->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
   <link rel="shortcut icon" href="ico/favicon.ico">
   <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
   <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
   <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
   <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
   <script src="scripts/modernizr.min.js"></script>

   <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-3182578-6']);
      _gaq.push(['_trackPageview']);
      (function() {
         var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
         ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
         var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
   </script>
        @include("includes.head")
    </head>
    <body data-accent="blue">
        @include("includes.tentangprogrammer")
        @yield("content")
   {{HTML::script("//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js")}}
   <script>window.jQuery || document.write("<script src='scripts/jquery-1.7.2.min.js'>\x3C/script>")</script>
   {{HTML::script("scripts/google-code-prettify/prettify.js")}}
   {{HTML::script("scripts/jquery.mousewheel.js")}}
   {{HTML::script("scripts/jquery.scrollTo.js")}}
   {{HTML::script("scripts/bootstrap.min.js")}}
   {{HTML::script("scripts/bootmetro.js")}}
   {{HTML::script("scripts/bootmetro-charms.js")}}
   {{HTML::script("scripts/demo.js")}}
   {{HTML::script("scripts/holder.js")}}
   <script type="text/javascript">
      $(".metro").metro();
   </script>
    </body>
</html>