<?php
	
	require"db/core.php";
	include('db/mysqlhelper.php');

	if(fn_loggedin()){
			$u_type = fn_get_user_details('U_Type');
        
        if($u_type =='Administrator'){
            header("location:forms/admin/index.php");
        }else if($u_type =='ASHAdministrator'){
            header("location:forms/ash/index.php");
        }else if($u_type =='TLAdministrator'){
            header("location:forms/tl/index.php");
        }else if($u_type =='HRDAdministrator'){
            header("location:forms/hrd/index.php");
        }
        
    }else{
        header("location:forms/login.php");
    }
?>
