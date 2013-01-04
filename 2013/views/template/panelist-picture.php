<?php
if (is_file('images/panelists/'.$profile_id.'.jpg')) {
?>
<div class="image"><img src="{{base_uri}}images/panelists/{{profile_id}}.jpg" width="128" height="160" alt="{{profile_name}}"></div>
<?php
}