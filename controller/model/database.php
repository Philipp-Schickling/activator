<?php

/*

    Class DB automatically creates a connection to the database (via PDO)

*/


class DB extends PDO {

	public $db;

	function __construct() {

        parent::__construct( "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD );

	}

}





/*

    DB_insert for inserting values into the database

*/


class DB_action extends DB {

    public $result; // prepare variable for select-command – call with $DB_action -> result

    // execute the database demand
    function __construct( $sql, $arguments = array() ) {

        parent::__construct(); // initialize DB{ ... }

        $smt = parent::prepare( $sql );
        $smt -> execute( $arguments );
        $fetch = $smt -> fetchAll( PDO::FETCH_ASSOC );

        // store result of potentially SELECT-demand in $result
        foreach ( $fetch as $iterate ) {
            
            $this -> result[] = $iterate;

        }

        // write the database-log
        $logData = $sql . "\n" . print_r( $arguments, TRUE ) . "\n";
        file_put_contents(DIR_DBLOG ,$logData, FILE_APPEND);  

    }

}





/*

    Create New User

*/


class createUser extends DB_action {

    function __construct( $userData ) {

        // table columns
        $column = array( USER_COL1, USER_COL2, USER_COL3, USER_COL4 );
        // sql command depending on $column
        $sql = "INSERT INTO " . TAB_USER . "( " . implode(", ", $column) . " ) VALUES( " . ":" . implode(", :", $column) . " )";

        $data = array();

        $count = 0;

        // complete array to form "array( ":foo" => "data" )"
        foreach ($userData as &$info) {
        
            $data[ ":" . $column[$count] ] = $info;
            $count++;

        }

        // create random id – store it in database and session in order to validate user on each redirect or request
        $id = md5(uniqid(rand(), true));

        $data[":id"] = $id;

        parent::__construct( $sql, $data );

    }

}





/*

    Store temporarily session id in database

*/

function storeID( $id ) {

    // $sql = "INSERT INTO " . ;
    // $store = new DB_action( );

}

?>