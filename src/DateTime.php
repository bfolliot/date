<?php

namespace BFolliot\Date;


/**
 * Add functionality to \DateTime
 * 
 * @author Bryan Folliot <dev@bryanfolliot.fr>
 */
class DateTime extends \DateTime
{

    /**
     * Format according to locale settings
     * See http://php.net/manual/en/function.strftime.php
     * @param (string) $format : Format accepted by strftime().
     * @return Returns a string formatted according format. Month and weekday names and other language-dependent strings respect the current locale set with setlocale(). 
     */
    public function strftime($format)
    {
        return strftime($format, $this->getTimestamp());
    }

    /**
     * Returns new DateTime object formatted according to the specified format. 
     * See http://php.net/manual/en/datetime.createfromformat.php
     */
    static public function createFromFormat($format, $time, $timeZone = null)
    {
        if($timeZone instanceof \DateTimeZone){
            $parentDateTime = parent::createFromFormat($format, $time, $timeZone);
        } else {            
            $parentDateTime = parent::createFromFormat($format, $time);
        }
        
        if($parentDateTime instanceof \DateTime){
            $dateTime = new static();
            $dateTime->setTimestamp($parentDateTime->getTimestamp());
            return $dateTime;            
        }
        return $parentDateTime;
    } 
}
