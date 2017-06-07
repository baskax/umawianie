<?php

namespace Sports\Controller;

use Sports\Controller\Base;

class Event extends Base
{
    public function addAction($req, $res)
    {
        if ($req->isPost()) {
            $body = $req->getParsedBody();
            $lat = str_replace(',', '.',$body['lat']);
            $lng = str_replace(',', '.',$body['lng']);
            $desc = $body['desc'];
            $type = $body['event_type'];
            $max_users = $body['max_users'];
            $date = $body['date'];
            $id = $this->getUserID();
            $str = "INSERT INTO events (user_id,lat,lng,description,event_type_id,date,status,max_users) VALUES ('$id','$lat','$lng','$desc','$type','$date','1',$max_users)";
            $result = $this->getDB()->Execute($str);
            if ($result) {
                $this->container['flash']->addMessage('success','Event added successfully!');
                $res = $res->withStatus(302)->withHeader('Location', '/panel/events/');
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
        $strQuery = "SELECT
                        `events`.*, DATE_FORMAT(`date`, '%Y-%m-%d %H:%i') AS `event_date`,
                        `events_type`.`name`,
                        count(events_users.user_id) AS 'signed_users',
                        sum(events_users.user_id = ".$userID.") AS 'signed',
                        `events_follow`.`user_id` as 'follow'
                    FROM
                        `events`
                    JOIN `events_type` ON `events`.`event_type_id` = `events_type`.`id`
                    LEFT JOIN `events_users` ON `events`.`id` = `events_users`.`event_id`
                    LEFT JOIN `events_follow` ON `events`.`id` = `events_follow`.`event_id` AND `events_follow`.`user_id` = ".$userID."
                    WHERE
                        `status` = 1
                    GROUP BY
                        `events`.`id`";
        $events = $this->getDB()->getAll($strQuery);

        $vars = [
            'events' => $events
        ];
        return $this->getView()->render($res, 'events/list.html', $vars);
    }

    public function manageAction($req,$res) {
        $userID = $this->getUserID();
        $strQuery = "SELECT
                        `events`.*, DATE_FORMAT(`date`, '%Y-%m-%d %H:%i') AS `event_date`,
                        `events_type`.`name`,
                        count(events_users.user_id) AS 'signed_users',
                        sum(events_users.user_id = ".$userID.") AS 'signed',
                        `events_follow`.`user_id` AS 'follow'
                    FROM
                        `events`
                    JOIN `events_type` ON `events`.`event_type_id` = `events_type`.`id`
                    LEFT JOIN `events_users` ON `events`.`id` = `events_users`.`event_id`
                    LEFT JOIN `events_follow` ON `events`.`id` = `events_follow`.`event_id`
                    AND `events_follow`.`user_id` = ".$userID."
                    WHERE
                        `status` = 1
                    GROUP BY
                        `events`.`id`
                    HAVING
                        `events`.`user_id` = ".$userID."
                    OR `follow` IS NOT NULL
                    OR `signed` IS NOT NULL";
        var_dump($strQuery); die;
        $events = $this->getDB()->getAll($strQuery);

        $vars = [
            'events' => $events
        ];
        return $this->getView()->render($res, 'events/list.html', $vars);
    }

    public function attendAction($req,$res) {
        $userID = $this->getUserID();
        $strQuery = "";


    }
}