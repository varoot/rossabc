<?php
set('page_title', $errno.' Page Not Found');
?>
<article>
<h1>Page Not Found</h1>
<p>The page <em>{{errstr}}</em> does not exist</p>
<?php
$min_score = 99;
$similar = null;
foreach ($sitemap as $title => $url) {
	$score = levenshtein($errstr, $url);
	if ($score > $min_score) continue;
	$min_score = $score;
	$similar = array('title'=>$title, 'url'=>$url);
}

if (!empty($similar)) {
	echo "<p>Did you mean <a href=\"$base_uri{$similar['url']}\">{$similar['title']}</a>?</p>";
}
?>
</article>