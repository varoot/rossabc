{{#short_panel}}
<li><strong>{{#profile_content}}<a href="{{base_uri}}panels/{{profile_panel_id}}#{{profile_id}}">{{/profile_content}}{{profile_name}}{{#profile_title}},{{/profile_title}}{{#profile_content}}</a>{{/profile_content}}</strong> {{profile_title}}</li>
{{/short_panel}}
{{^short_panel}}
<section id="{{profile_id}}">
	<hgroup>
		<h1>{{profile_role}}: {{profile_name}}</h1>
		<h2>{{profile_title}}</h2>
	</hgroup>
	<div class="profile">
		{{>template/panelist-picture}}
		{{{profile_content}}}
	</div>
</section>
{{/short_panel}}
