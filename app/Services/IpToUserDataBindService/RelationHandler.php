<?php


namespace App\Services\IpToUserDataBindService;

class RelationHandler extends IpManager {

    public function __construct($ip, $user_id){
        parent::__construct($ip, $user_id);
    }

    function handleRelation(){
        if ($this->ipExists() && !$this->relationExists()){
            $this->createRelation();
            return;
        }

        if(!$this->ipExists()){
            $this->createVisitor();
            $this->createRelation();
        }
    }
}
