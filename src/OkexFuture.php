<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Okex;


use Lin\Okex\Api\Futures\Accounts;
use Lin\Okex\Api\Futures\Fills;
use Lin\Okex\Api\Futures\Instruments;
use Lin\Okex\Api\Futures\Orders;
use Lin\Okex\Api\Futures\Position;

class OkexFuture
{
    protected $key;
    protected $secret;
    protected $passphrase;
    protected $host;
    
    function __construct(string $key='',string $secret='',string $passphrase='',string $host='https://www.okex.com'){
        $this->key=$key;
        $this->secret=$secret;
        $this->host=$host;
        $this->passphrase=$passphrase;
    }
    
    /**
     *
     * */
    private function init(){
        return [
            'key'=>$this->key,
            'secret'=>$this->secret,
            'passphrase'=>$this->passphrase,
            'host'=>$this->host,
        ];
    }
    
    /**
     *
     * */
    public function account(){
        return new Accounts($this->init());
    }
    
    /**
     *
     * */
    public function fill(){
        return new Fills($this->init());
    }
    
    /**
     *
     * */
    public function instrument(){
        return new Instruments($this->init());
    }
    
    /**
     *
     * */
    public function order(){
        return new Orders($this->init());
    }
    
    /**
     *
     * */
    public function position(){
        return new Position($this->init());
    }
}