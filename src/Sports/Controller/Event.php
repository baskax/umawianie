<?php

namespace Sports\Controller;

use Sports\Controller\Base;

class Event extends Base
{
    public function addAction($req, $res)
    {
        if ($req->isPost()) {
            $body = $req->getParsedBody();
            $lat = $body['lat'];//str_replace('.', ',',$body['lat']);
            $lng = $body['lng'];//str_replace('.', ',',$body['lng']);
            $desc = $body['desc'];
            $type = $body['event_type'];
            $date = $body['date'];
            $id = $this->getUserID();
            $str = "INSERT INTO events ('user_id','lat','lng','desc','event_type_id','date','status') VALUES ('$id','$lat','$lng','$desc','$type','$date',1)";
            //k($str);
            $result = $this->getDB()->Execute($str);
            //kd($result);
            if ($result) {
                $this->container['flash']->addMessage('success','You have to log in first!');
                $res = $res->withStatus(302)->withHeader('Location', '/panel/events');
            } else {
                $this->container['flash']->addMessage('warning','Something went wrong!');
                $res = $res->withStatus(302)->withHeader('Location', '/panel/events/add');
            }
        } else {
            $str = "SELECT id,name FROM events_type";
            $types = $this->getDB()->getAll($str);
            return $this->getView()->render($res, 'events/add.html', ['types' => $types]);
        }
        return $res;
    }


    public function listAction($req, $res)
    {
        $userID = $this->getUserID();
        $strQuery = "SELECT events.*, events_type.name 
                     FROM events JOIN events_type ON events.event_type_id = events_type.id 
                     WHERE status = 1";
        $events = $this->getDB()->getAll($strQuery);

        $vars = [
            'events' => $events
        ];
        return $this->getView()->render($res, 'events/list.html', $vars);
    }

    public function manageAction($req,$res) {
        $userID = $this->getUserID();
        $strQuery = "SELECT events.*, events_type.name 
                     FROM events JOIN events_type ON events.event_type_id = events_type.id 
                     WHERE user_id = $userID AND status = 1";
        $events = $this->getDB()->getAll($strQuery);

        $vars = [
            'events' => $events
        ];
        return $this->getView()->render($res, 'events/list.html', $vars);
    }

}