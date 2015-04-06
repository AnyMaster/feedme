<?php
include_once('./simplepie/autoloader.php');
?>
<?php
$feed1 = new SimplePie();
$feed1->set_feed_url('https://community.rapid7.com/Rapid7_RSSFeed');
$feed1->force_feed(true);
$feed1->force_fsockopen(true);
$feed1->init();
$feed1->set_cache_location('cache');
?>
<h4><?php print $feed1->get_title(); ?></h4>
<ul>
<?php foreach ($feed1->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed2 = new SimplePie();
$feed2->set_feed_url('http://www.securitysift.com/feed/');
$feed2->force_feed(true);
$feed2->force_fsockopen(true);
$feed2->init();
$feed2->set_cache_location('cache');
?>
<h4><?php print $feed2->get_title(); ?></h4>
<ul>
<?php foreach ($feed2->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed3 = new SimplePie();
$feed3->set_feed_url('http://www.chs.us/feed/');
$feed3->force_feed(true);
$feed3->force_fsockopen(true);
$feed3->init();
$feed3->set_cache_location('cache');
?>
<h4><?php print $feed3->get_title(); ?></h4>
<ul>
<?php foreach ($feed3->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed4 = new SimplePie();
$feed4->set_feed_url('http://adsecurity.org/?feed=rss2');
$feed4->force_feed(true);
$feed4->force_fsockopen(true);
$feed4->init();
$feed4->set_cache_location('cache');
?>
<h4><?php print $feed4->get_title(); ?></h4>
<ul>
<?php foreach ($feed4->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed5 = new SimplePie();
$feed5->set_feed_url('http://feeds.feedburner.com/pentestmonkey?format=xml');
$feed5->force_feed(true);
$feed5->force_fsockopen(true);
$feed5->init();
$feed5->set_cache_location('cache');
?>
<h4><?php print $feed5->get_title(); ?></h4>
<ul>
<?php foreach ($feed5->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed6 = new SimplePie();
$feed6->set_feed_url('http://carnal0wnage.attackresearch.com/feeds/posts/default');
$feed6->force_feed(true);
$feed6->force_fsockopen(true);
$feed6->init();
$feed6->set_cache_location('cache');
?>
<h4><?php print $feed6->get_title(); ?></h4>
<ul>
<?php foreach ($feed6->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed7 = new SimplePie();
$feed7->set_feed_url('http://feeds.feedburner.com/Room362com');
$feed7->force_feed(true);
$feed7->force_fsockopen(true);
$feed7->init();
$feed7->set_cache_location('cache');
?>
<h4><?php print $feed7->get_title(); ?></h4>
<ul>
<?php foreach ($feed7->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed8 = new SimplePie();
$feed8->set_feed_url('http://blog.g0tmi1k.com/feeds/posts/default');
$feed8->force_feed(true);
$feed8->force_fsockopen(true);
$feed8->init();
$feed8->set_cache_location('cache');
?>
<h4><?php print $feed8->get_title(); ?></h4>
<ul>
<?php foreach ($feed8->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed9 = new SimplePie();
$feed9->set_feed_url('http://www.harmj0y.net/blog/comments/feed/');
$feed9->force_feed(true);
$feed9->force_fsockopen(true);
$feed9->init();
$feed9->set_cache_location('cache');
?>
<h4><?php print $feed9->get_title(); ?></h4>
<ul>
<?php foreach ($feed9->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed10 = new SimplePie();
$feed10->set_feed_url('https://www.corelan.be/index.php/feed/');
$feed10->force_feed(true);
$feed10->force_fsockopen(true);
$feed10->init();
$feed10->set_cache_location('cache');
?>
<h4><?php print $feed10->get_title(); ?></h4>
<ul>
<?php foreach ($feed10->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed11 = new SimplePie();
$feed11->set_feed_url('http://blog.pentests.pl/feeds/posts/default');
$feed11->force_feed(true);
$feed11->force_fsockopen(true);
$feed11->init();
$feed11->set_cache_location('cache');
?>
<h4><?php print $feed11->get_title(); ?></h4>
<ul>
<?php foreach ($feed11->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed12 = new SimplePie();
$feed12->set_feed_url('https://leonjza.github.io/atom.xml');
$feed12->force_feed(true);
$feed12->force_fsockopen(true);
$feed12->init();
$feed12->set_cache_location('cache');
?>
<h4><?php print $feed12->get_title(); ?></h4>
<ul>
<?php foreach ($feed12->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed13 = new SimplePie();
$feed13->set_feed_url('http://rastamouse.me/atom.xml');
$feed13->force_feed(true);
$feed13->force_fsockopen(true);
$feed13->init();
$feed13->set_cache_location('cache');
?>
<h4><?php print $feed13->get_title(); ?></h4>
<ul>
<?php foreach ($feed13->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed14 = new SimplePie();
$feed14->set_feed_url('https://barrebas.github.io/atom.xml');
$feed14->force_feed(true);
$feed14->force_fsockopen(true);
$feed14->init();
$feed14->set_cache_location('cache');
?>
<h4><?php print $feed14->get_title(); ?></h4>
<ul>
<?php foreach ($feed14->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed15 = new SimplePie();
$feed15->set_feed_url('http://jellevergeer.com/feed/');
$feed15->force_feed(true);
$feed15->force_fsockopen(true);
$feed15->init();
$feed15->set_cache_location('cache');
?>
<h4><?php print $feed15->get_title(); ?></h4>
<ul>
<?php foreach ($feed15->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed16 = new SimplePie();
$feed16->set_feed_url('http://fourfourfourfour.co/atom.xml');
$feed16->force_feed(true);
$feed16->force_fsockopen(true);
$feed16->init();
$feed16->set_cache_location('cache');
?>
<h4><?php print $feed16->get_title(); ?></h4>
<ul>
<?php foreach ($feed16->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed17 = new SimplePie();
$feed17->set_feed_url('http://blog.techorganic.com/atom.xml');
$feed17->force_feed(true);
$feed17->force_fsockopen(true);
$feed17->init();
$feed17->set_cache_location('cache');
?>
<h4><?php print $feed17->get_title(); ?></h4>
<ul>
<?php foreach ($feed17->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed18 = new SimplePie();
$feed18->set_feed_url('https://wuala.github.io/atom.xml');
$feed18->force_feed(true);
$feed18->force_fsockopen(true);
$feed18->init();
$feed18->set_cache_location('cache');
?>
<h4><?php print $feed18->get_title(); ?></h4>
<ul>
<?php foreach ($feed18->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed19 = new SimplePie();
$feed19->set_feed_url('https://hackyard.net/feed');
$feed19->force_feed(true);
$feed19->force_fsockopen(true);
$feed19->init();
$feed19->set_cache_location('cache');
?>
<h4><?php print $feed19->get_title(); ?></h4>
<ul>
<?php foreach ($feed19->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed20 = new SimplePie();
$feed20->set_feed_url('http://sugarstack.io/feeds/all.atom.xml');
$feed20->force_feed(true);
$feed20->force_fsockopen(true);
$feed20->init();
$feed20->set_cache_location('cache');
?>
<h4><?php print $feed20->get_title(); ?></h4>
<ul>
<?php foreach ($feed20->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed21 = new SimplePie();
$feed21->set_feed_url('http://vagmour.eu/rss/');
$feed21->force_feed(true);
$feed21->force_fsockopen(true);
$feed21->init();
$feed21->set_cache_location('cache');
?>
<h4><?php print $feed21->get_title(); ?></h4>
<ul>
<?php foreach ($feed21->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed22 = new SimplePie();
$feed22->set_feed_url('http://www.unixawy.com/feed/');
$feed22->force_feed(true);
$feed22->force_fsockopen(true);
$feed22->init();
$feed22->set_cache_location('cache');
?>
<h4><?php print $feed22->get_title(); ?></h4>
<ul>
<?php foreach ($feed22->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed23 = new SimplePie();
$feed23->set_feed_url('http://krebsonsecurity.com/feed/');
$feed23->force_feed(true);
$feed23->force_fsockopen(true);
$feed23->init();
$feed23->set_cache_location('cache');
?>
<h4><?php print $feed23->get_title(); ?></h4>
<ul>
<?php foreach ($feed23->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed24 = new SimplePie();
$feed24->set_feed_url('http://garwarner.blogspot.com/feeds/posts/default');
$feed24->force_feed(true);
$feed24->force_fsockopen(true);
$feed24->init();
$feed24->set_cache_location('cache');
?>
<h4><?php print $feed24->get_title(); ?></h4>
<ul>
<?php foreach ($feed24->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed25 = new SimplePie();
$feed25->set_feed_url('http://feeds.feedburner.com/cyveillance');
$feed25->force_feed(true);
$feed25->force_fsockopen(true);
$feed25->init();
$feed25->set_cache_location('cache');
?>
<h4><?php print $feed25->get_title(); ?></h4>
<ul>
<?php foreach ($feed25->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed26 = new SimplePie();
$feed26->set_feed_url('http://taosecurity.blogspot.com/feeds/posts/default');
$feed26->force_feed(true);
$feed26->force_fsockopen(true);
$feed26->init();
$feed26->set_cache_location('cache');
?>
<h4><?php print $feed26->get_title(); ?></h4>
<ul>
<?php foreach ($feed26->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed27 = new SimplePie();
$feed27->set_feed_url('http://feeds.feedburner.com/darknethackers');
$feed27->force_feed(true);
$feed27->force_fsockopen(true);
$feed27->init();
$feed27->set_cache_location('cache');
?>
<h4><?php print $feed27->get_title(); ?></h4>
<ul>
<?php foreach ($feed27->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed28 = new SimplePie();
$feed28->set_feed_url('http://feeds.feedburner.com/SecurityBloggersNetwork');
$feed28->force_feed(true);
$feed28->force_fsockopen(true);
$feed28->init();
$feed28->set_cache_location('cache');
?>
<h4><?php print $feed28->get_title(); ?></h4>
<ul>
<?php foreach ($feed28->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed29 = new SimplePie();
$feed29->set_feed_url('http://feeds.feedburner.com/TheDarkVisitor');
$feed29->force_feed(true);
$feed29->force_fsockopen(true);
$feed29->init();
$feed29->set_cache_location('cache');
?>
<h4><?php print $feed29->get_title(); ?></h4>
<ul>
<?php foreach ($feed29->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed30 = new SimplePie();
$feed30->set_feed_url('http://feeds.feedburner.com/WhitehatSecurityBlog/');
$feed30->force_feed(true);
$feed30->force_fsockopen(true);
$feed30->init();
$feed30->set_cache_location('cache');
?>
<h4><?php print $feed30->get_title(); ?></h4>
<ul>
<?php foreach ($feed30->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed31 = new SimplePie();
$feed31->set_feed_url('http://blog.cr0.org/feeds/posts/default');
$feed31->force_feed(true);
$feed31->force_fsockopen(true);
$feed31->init();
$feed31->set_cache_location('cache');
?>
<h4><?php print $feed31->get_title(); ?></h4>
<ul>
<?php foreach ($feed31->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed32 = new SimplePie();
$feed32->set_feed_url('http://news.hitb.org/rss.xml');
$feed32->force_feed(true);
$feed32->force_fsockopen(true);
$feed32->init();
$feed32->set_cache_location('cache');
?>
<h4><?php print $feed32->get_title(); ?></h4>
<ul>
<?php foreach ($feed32->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed33 = new SimplePie();
$feed33->set_feed_url('http://www.linuxsecurity.com/static-content/linuxsecurity_hybrid.rss');
$feed33->force_feed(true);
$feed33->force_fsockopen(true);
$feed33->init();
$feed33->set_cache_location('cache');
?>
<h4><?php print $feed33->get_title(); ?></h4>
<ul>
<?php foreach ($feed33->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed34 = new SimplePie();
$feed34->set_feed_url('https://www.ethicalhacker.net/feed');
$feed34->force_feed(true);
$feed34->force_fsockopen(true);
$feed34->init();
$feed34->set_cache_location('cache');
?>
<h4><?php print $feed34->get_title(); ?></h4>
<ul>
<?php foreach ($feed34->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed35 = new SimplePie();
$feed35->set_feed_url('http://shell-storm.org/rss.xml');
$feed35->force_feed(true);
$feed35->force_fsockopen(true);
$feed35->init();
$feed35->set_cache_location('cache');
?>
<h4><?php print $feed35->get_title(); ?></h4>
<ul>
<?php foreach ($feed35->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed36 = new SimplePie();
$feed36->set_feed_url('http://feeds.feedburner.com/novainfosecportalblog');
$feed36->force_feed(true);
$feed36->force_fsockopen(true);
$feed36->init();
$feed36->set_cache_location('cache');
?>
<h4><?php print $feed36->get_title(); ?></h4>
<ul>
<?php foreach ($feed36->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed37 = new SimplePie();
$feed37->set_feed_url('http://feeds2.feedburner.com/security4all');
$feed37->force_feed(true);
$feed37->force_fsockopen(true);
$feed37->init();
$feed37->set_cache_location('cache');
?>
<h4><?php print $feed37->get_title(); ?></h4>
<ul>
<?php foreach ($feed37->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed38 = new SimplePie();
$feed38->set_feed_url('https://www.schneier.com/blog/atom.xml');
$feed38->force_feed(true);
$feed38->force_fsockopen(true);
$feed38->init();
$feed38->set_cache_location('cache');
?>
<h4><?php print $feed38->get_title(); ?></h4>
<ul>
<?php foreach ($feed38->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed39 = new SimplePie();
$feed39->set_feed_url('http://www.exploit-db.com/feed/');
$feed39->force_feed(true);
$feed39->force_fsockopen(true);
$feed39->init();
$feed39->set_cache_location('cache');
?>
<h4><?php print $feed39->get_title(); ?></h4>
<ul>
<?php foreach ($feed39->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed40 = new SimplePie();
$feed40->set_feed_url('http://dougvitale.wordpress.com/feed/');
$feed40->force_feed(true);
$feed40->force_fsockopen(true);
$feed40->init();
$feed40->set_cache_location('cache');
?>
<h4><?php print $feed40->get_title(); ?></h4>
<ul>
<?php foreach ($feed40->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed41 = new SimplePie();
$feed41->set_feed_url('http://feeds.feedburner.com/tenable/qaXL');
$feed41->force_feed(true);
$feed41->force_fsockopen(true);
$feed41->init();
$feed41->set_cache_location('cache');
?>
<h4><?php print $feed41->get_title(); ?></h4>
<ul>
<?php foreach ($feed41->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed42 = new SimplePie();
$feed42->set_feed_url('http://silverstr.ufies.org/blog/index.xml');
$feed42->force_feed(true);
$feed42->force_fsockopen(true);
$feed42->init();
$feed42->set_cache_location('cache');
?>
<h4><?php print $feed42->get_title(); ?></h4>
<ul>
<?php foreach ($feed42->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed43 = new SimplePie();
$feed43->set_feed_url('http://secunia.com/blog_rss/blog.rss');
$feed43->force_feed(true);
$feed43->force_fsockopen(true);
$feed43->init();
$feed43->set_cache_location('cache');
?>
<h4><?php print $feed43->get_title(); ?></h4>
<ul>
<?php foreach ($feed43->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed44 = new SimplePie();
$feed44->set_feed_url('http://blog.osvdb.org/feed/');
$feed44->force_feed(true);
$feed44->force_fsockopen(true);
$feed44->init();
$feed44->set_cache_location('cache');
?>
<h4><?php print $feed44->get_title(); ?></h4>
<ul>
<?php foreach ($feed44->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed45 = new SimplePie();
$feed45->set_feed_url('http://nakedsecurity.sophos.com/feed/');
$feed45->force_feed(true);
$feed45->force_fsockopen(true);
$feed45->init();
$feed45->set_cache_location('cache');
?>
<h4><?php print $feed45->get_title(); ?></h4>
<ul>
<?php foreach ($feed45->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed46 = new SimplePie();
$feed46->set_feed_url('http://resources.infosecinstitute.com/feed/');
$feed46->force_feed(true);
$feed46->force_fsockopen(true);
$feed46->init();
$feed46->set_cache_location('cache');
?>
<h4><?php print $feed46->get_title(); ?></h4>
<ul>
<?php foreach ($feed46->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed47 = new SimplePie();
$feed47->set_feed_url('http://www.commonexploits.com/feed/');
$feed47->force_feed(true);
$feed47->force_fsockopen(true);
$feed47->init();
$feed47->set_cache_location('cache');
?>
<h4><?php print $feed47->get_title(); ?></h4>
<ul>
<?php foreach ($feed47->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed48 = new SimplePie();
$feed48->set_feed_url('http://network-pentest.com/feed/');
$feed48->force_feed(true);
$feed48->force_fsockopen(true);
$feed48->init();
$feed48->set_cache_location('cache');
?>
<h4><?php print $feed48->get_title(); ?></h4>
<ul>
<?php foreach ($feed48->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed49 = new SimplePie();
$feed49->set_feed_url('http://www.inreverse.net/?feed=rss2');
$feed49->force_feed(true);
$feed49->force_fsockopen(true);
$feed49->init();
$feed49->set_cache_location('cache');
?>
<h4><?php print $feed49->get_title(); ?></h4>
<ul>
<?php foreach ($feed49->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed50 = new SimplePie();
$feed50->set_feed_url('http://www.pentestgeek.com/feed/');
$feed50->force_feed(true);
$feed50->force_fsockopen(true);
$feed50->init();
$feed50->set_cache_location('cache');
?>
<h4><?php print $feed50->get_title(); ?></h4>
<ul>
<?php foreach ($feed50->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed51 = new SimplePie();
$feed51->set_feed_url('http://feeds.feedburner.com/IrongeeksSecuritySite');
$feed51->force_feed(true);
$feed51->force_fsockopen(true);
$feed51->init();
$feed51->set_cache_location('cache');
?>
<h4><?php print $feed51->get_title(); ?></h4>
<ul>
<?php foreach ($feed51->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed52 = new SimplePie();
$feed52->set_feed_url('http://www.kali.org/feed/');
$feed52->force_feed(true);
$feed52->force_fsockopen(true);
$feed52->init();
$feed52->set_cache_location('cache');
?>
<h4><?php print $feed52->get_title(); ?></h4>
<ul>
<?php foreach ($feed52->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed53 = new SimplePie();
$feed53->set_feed_url('http://theunl33t.blogspot.com/feeds/posts/default');
$feed53->force_feed(true);
$feed53->force_fsockopen(true);
$feed53->init();
$feed53->set_cache_location('cache');
?>
<h4><?php print $feed53->get_title(); ?></h4>
<ul>
<?php foreach ($feed53->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed54 = new SimplePie();
$feed54->set_feed_url('http://adaywithtape.blogspot.com/feeds/posts/default');
$feed54->force_feed(true);
$feed54->force_fsockopen(true);
$feed54->init();
$feed54->set_cache_location('cache');
?>
<h4><?php print $feed54->get_title(); ?></h4>
<ul>
<?php foreach ($feed54->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed55 = new SimplePie();
$feed55->set_feed_url('http://feeds.feedburner.com/r00tsecblog');
$feed55->force_feed(true);
$feed55->force_fsockopen(true);
$feed55->init();
$feed55->set_cache_location('cache');
?>
<h4><?php print $feed55->get_title(); ?></h4>
<ul>
<?php foreach ($feed55->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed56 = new SimplePie();
$feed56->set_feed_url('http://securityowned.blogspot.com/feeds/posts/default');
$feed56->force_feed(true);
$feed56->force_fsockopen(true);
$feed56->init();
$feed56->set_cache_location('cache');
?>
<h4><?php print $feed56->get_title(); ?></h4>
<ul>
<?php foreach ($feed56->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed57 = new SimplePie();
$feed57->set_feed_url('http://feeds.feedburner.com/hacking-tutorials');
$feed57->force_feed(true);
$feed57->force_fsockopen(true);
$feed57->init();
$feed57->set_cache_location('cache');
?>
<h4><?php print $feed57->get_title(); ?></h4>
<ul>
<?php foreach ($feed57->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed58 = new SimplePie();
$feed58->set_feed_url('http://feeds.feedburner.com/GoogleOnlineSecurityBlog');
$feed58->force_feed(true);
$feed58->force_fsockopen(true);
$feed58->init();
$feed58->set_cache_location('cache');
?>
<h4><?php print $feed58->get_title(); ?></h4>
<ul>
<?php foreach ($feed58->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed59 = new SimplePie();
$feed59->set_feed_url('http://feeds.feedburner.com/Imperviews?format=xml');
$feed59->force_feed(true);
$feed59->force_fsockopen(true);
$feed59->init();
$feed59->set_cache_location('cache');
?>
<h4><?php print $feed59->get_title(); ?></h4>
<ul>
<?php foreach ($feed59->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed60 = new SimplePie();
$feed60->set_feed_url('http://blogs.technet.com/b/mmpc/rss.aspx');
$feed60->force_feed(true);
$feed60->force_fsockopen(true);
$feed60->init();
$feed60->set_cache_location('cache');
?>
<h4><?php print $feed60->get_title(); ?></h4>
<ul>
<?php foreach ($feed60->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed61 = new SimplePie();
$feed61->set_feed_url('http://www.securingthehuman.org/blog/feed/');
$feed61->force_feed(true);
$feed61->force_fsockopen(true);
$feed61->init();
$feed61->set_cache_location('cache');
?>
<h4><?php print $feed61->get_title(); ?></h4>
<ul>
<?php foreach ($feed61->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed62 = new SimplePie();
$feed62->set_feed_url('http://feeds2.feedburner.com/unmaskparasites');
$feed62->force_feed(true);
$feed62->force_fsockopen(true);
$feed62->init();
$feed62->set_cache_location('cache');
?>
<h4><?php print $feed62->get_title(); ?></h4>
<ul>
<?php foreach ($feed62->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed63 = new SimplePie();
$feed63->set_feed_url('http://feeds.feedburner.com/hacking-tutorials');
$feed63->force_feed(true);
$feed63->force_fsockopen(true);
$feed63->init();
$feed63->set_cache_location('cache');
?>
<h4><?php print $feed63->get_title(); ?></h4>
<ul>
<?php foreach ($feed63->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
<?php
$feed64 = new SimplePie();
$feed64->set_feed_url('http://www.n1tr0g3n.com/?feed=rss2');
$feed64->force_feed(true);
$feed64->force_fsockopen(true);
$feed64->init();
$feed64->set_cache_location('cache');
?>
<h4><?php print $feed64->get_title(); ?></h4>
<ul>
<?php foreach ($feed64->get_items(0, 5) as $item): ?>
<li>
<a href="<?php print $item->get_permalink(); ?>">
<?php print $item->get_title(); ?></a>
</li>
<?php endforeach; ?>
</ul>
