<?



$con=mysql_connect("localhost","buzz","everydaymaniac");
if(!$con)
	die(mysql_error());
	mysql_select_db("buzz",$con);




		

	function getCurrentLevel($name){


		$query = mysql_query(" SELECT level FROM userdata WHERE nick_nm='$name' ");
		list($level)=mysql_fetch_row($query);
	//	echo $level,"  ";
		return $level;





	}

	function incrementLevel($name, $level){
#		echo "got ",$name;
		mysql_query(" UPDATE userdata SET level=$level where nick_nm='$name' ");
		return;





	}



	function generateList(){
		$class=1;
		$query=mysql_query(" SELECT * FROM userdata ORDER BY level DESC,timex ASC");
		if(mysql_num_rows($query) != 0)
		{	$countv=1;
			$count=1;
			echo'<table id="mytable" >';
			echo'<tr><td><b>Rank</b></td><td><b>Name</b></td><td><b>Level</b></td></tr>';
		#		<b>timestamp</b></th></tr>';
			while(list($level,$timex,$nick_nm)= mysql_fetch_row($query))
			{	if($countv%2){
					echo'<tr class="odd">';
				}
				else{
					echo'<tr>';

				}
				echo " <td>$count</td>";
				echo " <td>$nick_nm </td>";
				echo " <td>$level </td>";
			#	echo " <td>$timex </td>";
				echo'</tr>';
				$countv=$countv+1;
				$count=$count+1;
			}
			echo'</table>';
			return;
		}










	}


























	?>
