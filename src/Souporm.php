<?php

/** 
* namespace Gregorycoleman\Souporm;
* 
* $t = new Souporm();
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
* @author     Gregory Coleman <apackagist@raydo.com>
* @copyright  2021 Gregory Coleman
* @license    https://github.com/gregorycoleman/Soup/blob/HEAD/LICENSE.md  AFFERO GENERAL PUBLIC LICENSE Version 1
* @version    Release: @package_version@
* @link       https://packagist.org/packages/gregorycoleman/soup
*/

/**
 * Block Chain Algo
 * type 0
 *   take previous hash
 *   add it to current uuid
 *   save as computer hash
 */



namespace Gregorycoleman\Souporm;

use Illuminate\Support\Str;
use App\Models\SoupData;

class Souporm
{

    public static function hi(){
        echo "Laravel Soup Package";
    }

    /**
     * Creates a record. Returns the uuid, but does not save 
     * the object. Sets things like creation time, etc.
     * @return uuid
     */
    private function create() {
        $cv = new SoupData;
        $cv->uuid = Str::uuid(); 
        $cv->object_id = $cv->uuid; // this is the default to create an object
                            // for most part, this will be overwritten

        // get the last record.
        $lastRecord = SoupData::orderBy('id', 'desc')->first();
        $cv->prev_record = $lastRecord->id;
        $cv->algo_version_number = $lastRecord->algo_version_number;

        $prevhash = $lastRecord->computed_hash;

        switch ($cv->algo_version_number) {
            case 1: 
                if ($newhash = hash('tiger192,3', $prevhash . $cv->uuid ) == false ){
                    // should return an error
                }
                break;
            default:
                // throw error
                break;
        }

        $cd->computed_hash = $newhash ;
        return($cv );
    }



    /**
     * Sets a key value in the opject
     */
    private function setType($parentObjectUuid , $key, $value, $type ) {

        $cv = $this->create();

        if ( $parentObjectUuid != NULL)
        {
            // get the parent object
            $objectrecord = SoupData::where('uuid', $objectUuid )->first();
            $cv->parent_object_uuid = $objectrecord->uuid;
        } else {
            // an object, so doesnt have a parent object id
            $cv->parent_object_uuid = Str::uuid();
        }

        $cv->type  = $type;
        $cv->key   = $key;
        $cv->value = $value;
        $cv->save();
        return ($cv->uuid);
    }

    /****** PUBLIC FUNCTIONS ***********/

    /**
     * Sets a key value in the opject, this is a user 
     * defined variable
     */
    public function storeKeyValue($parentObjectUuid,$key, $value) {
        return ($this->setType($parentObjectUuid,$key, $value, "userdata") );
    }

    public function createObject() {
        return ($this->setType(NULL,'', 'Create Object', "object") );
    }

    /**
     * Sets a key value in the opject, this is a user 
     * defined variable
     */
    public function newObject($parentObjectUuid,$key, $value) {
        return ($this->setType($parentObjectUuid,$key, $value, "userdata") );
    }
}
