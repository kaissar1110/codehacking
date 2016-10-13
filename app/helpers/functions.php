<?php 

function roless(){

	 return App\Role::lists('name', 'id')->all();

	


}






 ?>