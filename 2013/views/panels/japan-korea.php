<?php
set('profile_panel_id', 'japan-korea');
set('panel_title', 'Japan & Korea');
set('speakers', array('debbie-rough', 'shotaro-nakahama', 'jon-voskuil'));
set('moderators', array(false));
?>
{{#short_panel}}<a href="{{base_uri}}panels/{{profile_panel_id}}">{{/short_panel}}
<div class="image"><img src="{{base_uri}}images/panels/japan.jpg" width="200" height="150" alt="Japan panel"><img src="{{base_uri}}images/panels/korea.jpg" width="200" height="150" alt="Korea panel"></div>
{{#short_panel}}<h2>{{panel_title}}</h2></a>{{/short_panel}}

<p>After two lost decades, Japan still seems to be struggling to recover its economic power. What should Japanese companies do to recover their position? How can Japan tap into growing markets across Asia? How can Japan leverage its technology in new era of digital convergence and sustainability?</p>
<p>Korea was one of the fastest countries to recover from the world financial crisis. How was Korea able to recover so quickly? How Korea can leverage its strengths to see continued growth in the next decade?</p>

{{>template/panelists}}