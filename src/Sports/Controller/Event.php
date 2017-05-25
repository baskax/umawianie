<?php

namespace Sports\Controller;

use Sports\Controller\Base;

class Event extends Base
{

    public function listAction($req, $res)
    {
        $userID = $this->getUserID();
        $strQuery = "SELECT events.*, events_type.name 
                     FROM events JOIN events_type ON events.event_type_id = events_type.id 
                     WHERE user_id = '$userID' AND status = 1";
        $events = $this->getDB()->getAll($strQuery);

        $vars = [
            'events' => $events
        ];
        return $this->getView()->render($res, 'events/list.html', $vars);
    }


}