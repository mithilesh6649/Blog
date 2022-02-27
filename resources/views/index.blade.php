<?php echo  $data['name'] ?>

{{ $data['name'] }}





@if($data['name'] == 'mithileshl')
	{{'fine'}}
@else
 {{ 'no fine'}}	
@endif


<?php

  if($data['name'] == 'mithilesh'){
  	echo "yes";
  }

?> 

@for($i=0;$i<5;$i++)
  {{$i}}
@endfor


<?php
 for($i=0;$i<5;$i++){
 	echo $i;
 }

?>


@foreach($data as $key => $list)
  'as'
 {{$key}}
 {{$list}}
@endforeach

<?php
 
 foreach ($data as $key => $value) {
  echo $key;
  echo $value;
 }

?>

<IfModule mod_rewrite.c>
    <IfModule mod_negotiation.c>
        Options -MultiViews -Indexes
    </IfModule>

    RewriteEngine On

    # Handle Authorization Header
    RewriteCond %{HTTP:Authorization} .
    RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]

    # Redirect Trailing Slashes If Not A Folder...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_URI} (.+)/$
    RewriteRule ^ %1 [L,R=301]

    # Send Requests To Front Controller...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]
</IfModule>