<?php
set('profile_panel_id', 'entrepreneurship');
set('panel_title', 'Entrepreneurship');
set('speakers', array('edy-sulistyo', 'grace-lee', 'hon-mun-yip'));
set('moderators', array('aneel-karnani'));
?>
{{#short_panel}}<a href="{{base_uri}}panels/{{profile_panel_id}}">{{/short_panel}}
<div class="image"><img src="{{base_uri}}images/panels/{{profile_panel_id}}.jpg" width="200" height="150" alt="{{panel_title}} panel"></div>
{{#short_panel}}<h2>{{panel_title}}</h2></a>{{/short_panel}}

<p>Entrepreneurs and their ventures are becoming a driving force behind financial growth, innovation, and social responsibility within the global economy and Asia specifically. The Entrepreneurship panel will provide a forum to learn from entrepreneurs and academic professionals about their perspectives and experiences in Asia, and how they can be applied to aspiring entrepreneurs.</p>

{{>template/panelists}}