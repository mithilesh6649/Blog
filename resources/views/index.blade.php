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
