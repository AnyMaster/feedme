<!DOCTYPE html>
<html>
<head>
  <title>RSS feed service</title>
    <!-- include the Tools -->
  <script src="deniable.js"></script>
  
  <link rel="stylesheet" href="css/tabs.css"
      type="text/css" media="screen" />
<link rel="stylesheet" href="css/tabs-panes.css"
      type="text/css" media="screen" />
</head>
<body><!-- the tabs -->
<h6>Finest blend of the latest IT security news headlines, updated every 4 hours. If you find any issue submit your complains to: &lt;rui at deniable dot org&gt;</h6>
<ul class="tabs">
        <li><a href="#">Infosec News</a></li>
        <li><a href="#">Mailing Lists</a></li>
        <li><a href="#">Social Media</a></li>
        <li><a href="#">Vulnerabilities</a></li>
        <li><a href="#">Cybercrime</a></li>
        <li><a href="#">Blogs</a></li>
        <li><a href="#">Malware</a></li>
	<li><a href="#">CTF</a></li>
        <li><a href="#">Others</a></li>
</ul>

<!-- tab "panes" -->
<div class="panes">
        <div><!-- First tab content. --><?php include_once('tab1.html'); ?></div>
        <div><!-- Second tab content. --><?php include_once('tab2.html'); ?></div>
        <div><!-- Third tab content. --><?php include_once('tab3.html'); ?></div>
        <div><!-- Fourth tab content. --><?php include_once('tab4.html'); ?></div>
        <div><!-- Fifth tab content. --><?php include_once('tab5.html'); ?></div>
        <div><!-- Sixth tab content. --><?php include_once('tab6.html'); ?></div>
        <div><!-- 7th tab content. --><?php include_once('tab7.html'); ?></div>
        <div><!-- 8th tab content. --><?php include_once('tab8.html'); ?></div>
        <div><!-- 9th tab content. --><?php include_once('tab9.html'); ?></div>
</div>

<script>
// perform JavaScript after the document is scriptable.
$(function() {
    // setup ul.tabs to work as tabs for each div directly under div.panes
    $("ul.tabs").tabs("div.panes > div");
});
</script>
<center><h6><a class="author" href="http://www.google.com/">&lt;rui@deniable.org&gt; <br />2015 - All Rights Reserved</h6></a></center>
</body>
</html>
