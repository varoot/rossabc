<?php
set('profile_panel_id', 'japan');
set('panel_title', 'Japan');
set('speakers', array('hitoshi-saimyo', 'ryohei-oikawa', 'shoichiro-nakahama'));
set('moderators', array('kiyoteru-tsutsui'));
?>
{{#short_panel}}<a href="{{base_uri}}panels/{{profile_panel_id}}">{{/short_panel}}
<div class="image"><img src="{{base_uri}}images/panels/japan.jpg" width="200" height="150" alt="Japan panel"></div>
{{#short_panel}}<h2>{{panel_title}}</h2></a>{{/short_panel}}

<p>After two lost decades, Japan still seems to be struggling to recover its economic power. What should Japanese companies do to recover their position? How can Japan tap into growing markets across Asia? How can Japan leverage its technology in new era of digital convergence and sustainability?</p>

{{>template/panelists}}