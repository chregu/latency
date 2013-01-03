<?php

namespace Chregu\Latency\Entities;

/**
* @Entity @Table(name="sessions")
**/

class SessionEntry {



    /**
    * @Id
    * @GeneratedValue
    * @Column(type="integer")
    **/
    protected $id;

    /**
    * @Column(type="string")
    */
    protected $userAgent;


    /**
    * @Column(type="string")
    */
    protected $ip;

    /**
    * @Column(type="integer")
    **/
    protected $ts;


    /**
    * @Column(type="decimal", nullable=true, precision=10, scale=4)
    */
    protected $lat = null;
    /**
    * @Column(type="decimal", nullable=true, precision=10, scale=4)
    */
    protected $lng = null;

    /**
    * @Column(type="string", nullable=true)
    **/
    protected $placeName = null;



    function __construct() {
        $this->setTimestamp(time());
    }


    function setUserAgent($int) {
        $this->userAgent = $int;
    }

    function setIp($str) {
        $this->ip = $str;
    }


        function setTimestamp($time) {
        $this->ts = $time;
    }

    function setLongitude($long) {
        $this->lng = round($long, 6);
    }
    function setLatitude($lat) {
        $this->lat = round($lat, 6);
    }

    function getLongitude() {
        return $this->lng;
    }
    function getLatitude() {
        return $this->lat;
    }

    function setPlaceName($name) {
        $this->placeName = $name;
    }

    function getPlaceName() {
        return $this->placeName;
    }

}
