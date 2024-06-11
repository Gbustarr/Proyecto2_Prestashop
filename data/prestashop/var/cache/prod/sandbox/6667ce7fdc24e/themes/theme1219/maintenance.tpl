<!DOCTYPE html>
<html lang="{$language_code|escape:'html':'UTF-8'}">
	<head>
		<meta charset="utf-8">
		<title>{$meta_title|escape:'html':'UTF-8'}</title>
{if isset($meta_description)}
		<meta name="description" content="{$meta_description|escape:'html':'UTF-8'}">
{/if}
{if isset($meta_keywords)}
		<meta name="keywords" content="{$meta_keywords|escape:'html':'UTF-8'}">
{/if}
		<meta name="robots" content="{if isset($nobots)}no{/if}index,follow">
		<link rel="shortcut icon" href="{$favicon_url}">
        <link href="{$css_dir}maintenance.css" rel="stylesheet">
        <link href="{$css_dir}global.css" rel="stylesheet" type="text/css" />
        <link href='//fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet'>
	</head>
    
	<body>
    	<div class="container">
			<div id="maintenance">
				<div class="logo">
                	<img src="{$logo_url}" {if $logo_image_width}width="{$logo_image_width}"{/if} {if $logo_image_height}height="{$logo_image_height}"{/if} alt="logo" />
                </div>
             	{$HOOK_MAINTENANCE}
             	<div id="message">
             		<h1 class="maintenance-heading">{l s='Maintenance mode'}</h1>
					{l s='In order to perform website maintenance, our online store will be temporarily offline.'}
					{l s='We apologize for the inconvenience and ask that you please try again later.'}
			 	</div>
			</div>
        </div>
	</body>
</html>