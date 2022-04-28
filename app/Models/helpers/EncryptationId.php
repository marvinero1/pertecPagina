<?php
use App\Helpers\Encryptor;
 
class EncryptationId{

    /*** Funcion que recupera el id del modelo y lo encripta
    * @param $value valor del id autonumerico
    * @return string con el valor del id encriptado
    */

    public function getEncidAttribute(){
        return Encryptor::encrypt($this->attributes['id']);
    }
}
?>