<?php
set('page_title', 'Sponsors');

$sponsors = array(
	'Gold' => array(
		/*
		'Ross Student Government Association' => array(
			'src'=>'gold-ross-sga.jpg',
			'href'=>'http://ross.campusgroups.com/sga/about/',
		),
		*/
		'Center for Chinese Studies' => array(
			'src'=>'gold-center-chinese-studies.png',
			'href'=>'http://www.ii.umich.edu/ccs',
			'width'=>160,
		),
		'Professor Gunter Dufey' => array(
			'src'=>'gold-gunter-dufey.png',
			'width'=>380,
		),
		'Mitsui Life' => array(
			'src'=>'gold-mitsui-life.jpg',
			'href'=>'http://mitsui.bus.umich.edu/',
		),
	),
	'Silver' => array(
		'Michigan Ross School of Business Global MBA Program' => array(
			'src'=>'silver-global-mba-program.jpg',
			'href'=>'http://www.bus.umich.edu/Academics/Gmba/Whyross.htm',
		),
		'Michigan Ross School of Business Executive Education' => array(
			'src'=>'silver-executive-education.png',
			'href'=>'http://execed.bus.umich.edu/',
			'width'=>240,
		),
	),
	'Bronze' => array(
		'Center for Japanese Studies' => array(
			'src'=>'bronze-center-japanese-studies.png',
			'href'=>'http://www.ii.umich.edu/cjs',
			'width'=>222,
		),
		'Nam Center for Korean Studies' => array(
			'src'=>'bronze-center-korean-studies.png',
			'href'=>'http://www.ii.umich.edu/ncks',
			'width'=>200,
		),
		'Center for Southeast Asian Studies' => array(
			'src'=>'bronze-cseas.png',
			'href'=>'http://www.ii.umich.edu/cseas',
			'width'=>123,
		),
		'LS&A Department of Asian Languages & Cultures' => array(
			'src'=>'bronze-alc.jpg',
			'href'=>'http://www.lsa.umich.edu/asian',
			'width'=>260,
		),
		'Michigan Student Assembly' => array(
			'src'=>'bronze-michigan-student-assembly.png',
			'href'=>'http://www.msa.umich.edu',
			'width'=>120,
		),
		'Confucius Institute' => array(
			'src'=>'bronze-confucius-institute.png',
			'href'=>'http://www.confucius.umich.edu/',
			'width'=>205,
		),

		/*
		'Center for South Asian Studies' => array(
			'src'=>'bronze-center-south-asian-studies.jpg',
			'href'=>'http://www.ii.umich.edu/csas',
		),
		'Asia Pacific American Chamber of Commerce' => array(
			'src'=>'bronze-apacc.jpg',
			'href'=>'http://www.apacc.net/',
		),
		'GE Energy' => array(
			'src'=>'bronze-ge-energy.jpg',
			'href'=>'http://www.ge-energy.com/',
		),
		'NYX Incorporated' => array(
			'src'=>'bronze-nyx.jpg',
			'href'=>'http://www.nyxinc.com/',
		),
		'International Institute University of Michigan' => array(
			'src'=>'bronze-international-institute.jpg',
			'href'=>'http://www.ii.umich.edu/',
		),
		*/
	),
/*
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
*/
);
?>
<article>
<h1>Sponsors</h1>
<?php
	foreach ($sponsors as $title => $sponsorGroup) {
		echo "<h2>$title</h2><ul class=\"sponsors\">";
		foreach ($sponsorGroup as $sponsorTitle => $sponsorData) {
			echo '<li>';
			$logo = "<img src=\"{$base_uri}images/sponsors/{$sponsorData['src']}\"";
			
			if ( ! empty($sponsorData['width']))
			{
				$logo .= " width=\"{$sponsorData['width']}\"";
			}
			
			$logo .= " alt=\"$sponsorTitle\">";

			if ( ! empty($sponsorData['text']))
			{
				$logo = "<div class=\"description\">$logo{$sponsorData['text']}</div>";
			}

			if ( ! empty($sponsorData['href']))
			{
				echo "<a href=\"{$sponsorData['href']}\" target=\"_blank\">$logo</a>";
			}
			else
			{
				echo $logo;
			}
		}
		echo "</ul>";
	}
?>
</article>