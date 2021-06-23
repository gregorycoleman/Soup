<?php

/** 
* namespace Gregorycoleman\Souporm ;
* 
* $t = new Souporm() ;
*
*
* each record has a pointer to previous record
* each record has a computed hash based on previous has
* each record has a blockchain algo version number
* each record has a uuid
* each record has a datafield
* 
* The object is a special type of record that has 
* a uuid , but no value
* Data Key types
*
* +---------------------------------+
* | type |
* +---------------------------------+
* | Object    | object
* | User Data | user
* +---------------------------------+
* 
*/

namespace Gregorycoleman\Souporm ;

use Illuminate\Support\Str ;

class Souporm
{
    public static function hi(){
        echo "Laravel Soup Package" ;
    }

    /**
     * Creates a record. Returns the uuid, but does not save 
     * the object. Sets things like creation time, etc.
     * @return uuid
     */
    public function create() {
        $model_uuid = Str::uuid() ; 
        return($model_uuid) ;
    }

    /**
     * Write all object records to db
     */
    public function save() {

    }

    /**
     * Debugging function
     */
    public function print() {

    }

    /**
     * Sets a key value in the opject, this is a user 
     * defined variable
     */
    public function set($key, $value) {
        $this->setType($key, $value, "user") ;
    }

    /**
     * Sets a key value in the opject
     */
    private function setType($key, $value, $type) {

    }
}
