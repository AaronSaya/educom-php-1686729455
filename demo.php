<?php

class Factuur{

    private $repository;

    public function __construct(Type $repository) {
        $this->repository = $repository;
    }

    public function getFactuur(){
            //get info from factuur table

            getKlant($id);

            getFactuurRegel($id)
    }

    private function getKlant($id){
        
    }

    private function getFactuurRegel($id){

    }
}