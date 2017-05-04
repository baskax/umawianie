<?php

namespace Sports\Controller;

class Profile
{
    protected $view;
    protected $db;
    protected $flash;

    public function __construct(\Slim\Views\Twig $view, $db, $flash)
    {

        $this->view = $view;
        $this->db = $db;
        $this->flash = $flash;
    }

    public function profileView($request, $response, $args)
    {
        if (!$this->checkIfProfileSet()) return $response->withStatus(302)->withHeader('Location', '/panel/profile/edit');
        $profile = $this->checkIfProfileSet();
        $this->view->render($response, 'profile/view.html',['profile' => $profile]);
        return $response;
    }

    public function profileEdit($request,$response,$args) {
        $this->view->render($response, 'profile/edit.html');
        return $response;
    }

    public function profileEditAction($request,$response,$args) {
        $body = $request->getParsedBody();
        $name = $body['name'];
        $surname = $body['surname'];
        $userid = $_SESSION['user_id'];
        $query = "INSERT INTO profile (user_id,name,surname) VALUES ('$userid','$name','$surname')";
        $result = $this->db->Execute($query);

            $this->flash->addMessage('success', 'Profile updated successfully!');
            $response->withStatus(302)->withHeader('Location', '/panel/profile/');


        return $response;
    }

    private function checkIfProfileSet() {
        $userid = $_SESSION['user_id'];
        $query = "SELECT * FROM profile WHERE user_id='$userid' LIMIT 1";
        $result = $this->db->GetRow($query);
        return $result;
    }

}
