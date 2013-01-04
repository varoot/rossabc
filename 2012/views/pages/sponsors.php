<?php
set('page_title', 'Sponsors');

$sponsors = array(
	'Gold' => array(
		'Ross Student Government Association' => array(
			'src'=>'gold-ross-sga.jpg',
			'href'=>'http://ross.campusgroups.com/sga/about/',
		),
	),
	'Silver' => array(
		'Center for Chinese Studies' => array(
			'src'=>'silver-center-chinese-studies.jpg',
			'href'=>'http://www.ii.umich.edu/ccs',
		),
		'Center for Japanese Studies' => array(
			'src'=>'silver-center-japanese-studies.png',
			'href'=>'http://www.ii.umich.edu/cjs',
		),
		'Ford Motor Company' => array(
			'src'=>'silver-ford-motor-company.jpg',
			'href'=>'http://www.ford.com/',
		),
	),
	'Bronze' => array(
		'Asian Languages & Cultures' => array(
			'src'=>'bronze-alc.jpg',
			'href'=>'http://www.lsa.umich.edu/asian',
		),
		'Asia Pacific American Chamber of Commerce' => array(
			'src'=>'bronze-apacc.jpg',
			'href'=>'http://www.apacc.net/',
		),
		'Nam Center for Korean Studies' => array(
			'src'=>'bronze-center-korean-studies.jpg',
			'href'=>'http://www.ii.umich.edu/ncks',
		),
		'Center for South Asian Studies' => array(
			'src'=>'bronze-center-south-asian-studies.jpg',
			'href'=>'http://www.ii.umich.edu/csas',
		),
		'Center for Southeast Asian Studies' => array(
			'src'=>'bronze-cseas.jpg',
			'href'=>'http://www.ii.umich.edu/cseas',
		),
		'GE Energy' => array(
			'src'=>'bronze-ge-energy.jpg',
			'href'=>'http://www.ge-energy.com/',
		),
		'NYX Incorporated' => array(
			'src'=>'bronze-nyx.jpg',
			'href'=>'http://www.nyxinc.com/',
		),
		'Michigan Ross School of Business Executive Education' => array(
			'src'=>'bronze-executive-education.jpg',
			'href'=>'http://execed.bus.umich.edu/',
		),
		'Michigan Ross School of Business Global MBA Program' => array(
			'src'=>'bronze-global-mba-program.jpg',
			'href'=>'http://www.bus.umich.edu/Academics/Gmba/Whyross.htm',
		),
		'International Institute University of Michigan' => array(
			'src'=>'bronze-international-institute.jpg',
			'href'=>'http://www.ii.umich.edu/',
		),
		'Ramson Siagian' => array(
			'src'=>'bronze-ramson-siagian.png',
		),
	),
	'Special Thanks' => array(
		'Ann Arbor T-Shirt Company' => array(
			'src'=>'special-thanks-ann-arbor-t-shirt-company.jpg',
			'text'=>'Custom Screen Printing and Embroidery by the Ann Arbor T-shirt Company',
			'href'=>'http://www.annarbortshirtcompany.com/bid_request/quote',
		),
		'Center for International Business Education and Research' => array(
			'src'=>'special-thanks-ciber.jpg',
			'href'=>'http://www.umich.edu/~cibe/',
		),
	),
);
?>
<article>
<h1>Sponsors</h1>
<?php
	foreach ($sponsors as $title => $sponsorGroup) {
		echo "<h2>$title</h2><div class=\"sponsors\">";
		foreach ($sponsorGroup as $sponsorTitle => $sponsorData) {
			$logo = "<img src=\"{$base_uri}images/sponsors/{$sponsorData['src']}\" alt=\"$sponsorTitle\">";
			if (!empty($sponsorData['text'])) {
				$logo = "<div class=\"description\">$logo{$sponsorData['text']}</div>";
			}
			if (!empty($sponsorData['href'])) {
				echo "<a href=\"{$sponsorData['href']}\" target=\"_blank\">$logo</a>";
			} else {
				echo $logo;
			}
		}
		echo "</div>";
	}
?>
</article>