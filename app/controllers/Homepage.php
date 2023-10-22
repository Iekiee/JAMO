<?php

class Homepage extends BaseController
{

    private HomepageModel $homepageModel;

    public function __construct()
    {
        $this->homepageModel = $this->model('HomepageModel');
    }

    public function index()
    {

        $members = $this->homepageModel->getTeamMembers();
        // $profilepicture = $members->profilepicture;

        $data = [
            'members' => $members
        ];

        $this->view('Homepage/index', $data);
    }
}
