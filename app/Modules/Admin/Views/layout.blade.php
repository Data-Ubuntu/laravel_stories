<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html> 
<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
    <!-- Website Title --> 
    <title>Admin</title>
    <!-- Meta data for SEO -->
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Template stylesheet -->
    <link href="/admin/css/blue/reset.css" rel="stylesheet" type="text/css" media="all">
    <link href="/admin/css/blue/custom.css" rel="stylesheet" type="text/css" media="all">
    <link href="/admin/css/blue/screen.css" rel="stylesheet" type="text/css" media="all">
    <link href="/admin/css/blue/datepicker.css" rel="stylesheet" type="text/css" media="all">
    <link href="/admin/css/tipsy.css" rel="stylesheet" type="text/css" media="all">
    <link href="/admin/js/visualize/visualize.css" rel="stylesheet" type="text/css" media="all">
    <link href="/admin/js/jwysiwyg/jquery.wysiwyg.css" rel="stylesheet" type="text/css" media="all">
    <link href="/admin/js/fancybox/jquery.fancybox-1.3.0.css" rel="stylesheet" type="text/css" media="all">
    <!--[if IE]>
        <link href="css/ie.css" rel="stylesheet" type="text/css" media="all">
        <script type="text/javascript" src="js/excanvas.js"></script>
    <![endif]-->
    <!-- Jquery and plugins -->
    <script type="text/javascript" src="/admin/js/jquery-latest.js"></script>
    <script type="text/javascript" src="/admin/js/jquery-ui.js"></script>
    <script type="text/javascript" src="/admin/js/jquery.img.preload.js"></script>
    <script type="text/javascript" src="/admin/js/hint.js"></script>
    <script type="text/javascript" src="/admin/js/visualize/jquery.visualize.js"></script>
    <script type="text/javascript" src="/admin/js/jwysiwyg/jquery.wysiwyg.js"></script>
    <script type="text/javascript" src="/admin/js/fancybox/jquery.fancybox-1.3.0.js"></script>
    <script type="text/javascript" src="/admin/js/jquery.tipsy.js"></script>
    <script type="text/javascript" src="/admin/js/custom_blue.js"></script>
    <script type="text/javascript" src="/admin/js/mycustom.js"></script>
    <script type="text/javascript" src="/admin/js/izzyColor.js"></script>
    <script type="text/javascript" src="/jpage/js/jPages.js" ></script>
    <script src="http://tinymce.cachefly.net/4.2/tinymce.min.js"></script>
    <script type="text/javascript">
        tinymce.init({
            height : 350,
            selector: "textarea",
            theme: "modern",
            fontsize_formats: "8pt 10pt 12pt 14pt 18pt 24pt 36pt",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern imagetools"
            ],
            toolbar1: "insertfile undo redo | styleselect | fontsizeselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | forecolor backcolor emoticons",
            image_advtab: true,
            templates: [
                {title: 'Test template 1', content: 'Test 1'},
                {title: 'Test template 2', content: 'Test 2'}
            ]
        });
    </script>
</head>
<body>
    <div class="content_wrapper">
    <!-- Begin header -->
    @include('Admin::block.header')
    <!-- End header -->
    <!-- Begin left panel -->
    @include('Admin::block.sidebar')
    <!-- End left panel calendar -->
    </div>
    <!-- End left panel -->
    <!-- Begin content -->
    <div id="content">
        <div class="inner">
            <br class="clear"/>
            @yield('content')
        </div>
    <br class="clear"/>
    </div>
</div>
</body>
</html>