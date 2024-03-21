<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $aboutModel;
    protected $achievementsModel;
    protected $memberModel;
    protected $eventsModel;
    protected $programModel;
    protected $structureModel;
    protected $topchartModel;
    protected $pesanModel;
    protected $podcastModel;
    protected $penyiarModel;
    protected $settingsModel;

    public function __construct()
    {
        $this->aboutModel        = new \App\Models\AboutModel();
        $this->achievementsModel = new \App\Models\AchievementsModel();
        $this->memberModel       = new \App\Models\MemberModel();
        $this->eventsModel       = new \App\Models\EventsModel();
        $this->programModel      = new \App\Models\ProgramModel();
        $this->structureModel    = new \App\Models\StructureModel();
        $this->topchartModel     = new \App\Models\TopChartModel();
        $this->pesanModel        = new \App\Models\PesanModel();
        $this->podcastModel      = new \App\Models\PodcastModel();
        $this->penyiarModel      = new \App\Models\PenyiarModel();
        $this->settingsModel     = new \App\Models\SettingsModel();
    }

    public function index()
    {
        // Events
        $events = $this->eventsModel;
        $events->orderBy('id', 'DESC');

        // Achievements
        $achievements = $this->achievementsModel;
        $achievements->orderBy('id', 'DESC');

        $data = [
            'title'         => 'Rapma FM',
            'about'         => $this->aboutModel->paginate(5, 'about'),
            'achievements'  => $achievements->paginate(100, 'achievements'),
            'member'        => $this->memberModel->paginate(1, 'member'),
            'events'        => $events->paginate(100, 'events'),
            'program'       => $this->programModel->paginate(100, 'program'),
            'structure'     => $this->structureModel->paginate(5, 'structure'),
            'topchart'      => $this->topchartModel->paginate(5, 'topchart'),
            'penyiar'       => $this->penyiarModel->paginate(1, 'penyiar'),
            'settings'      => $this->settingsModel->paginate(5, 'settings'),
        ];

        return view('home/index', $data);
    }

    // Insert Data Messages
    public function insert()
    {
        $data = [
            'name'    => $this->request->getVar('name'),
            'email'   => $this->request->getVar('email'),
            'subject' => $this->request->getVar('subject'),
            'message' => $this->request->getVar('message'),
        ];
        $this->pesanModel->insert($data);

        session()->setFlashdata('pesan', 'Pesan Anda Telan Dikirim! Terima Kasih CampusBrainers!');
        return redirect('index');
    }

    // Podcast
    public function podcasts()
    {
        $currentPage = $this->request->getVar('page_podcast') ? $this->request->getVar('page_podcast') : 1;

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $podcast = $this->podcastModel->search($keyword);
        } else {
            $podcast = $this->podcastModel;
        }

        $podcast->orderBy('tahun', 'DESC');

        $data = [
            'title'         => 'Rapma FM | Podcast',
            'podcast'       => $podcast->paginate(9, 'podcast'),
            'pagerPodcast'  => $podcast->pager,
            'currentPage'   => $currentPage,
            'settings'      => $this->settingsModel->paginate(1, 'settings'),
        ];

        return view('home/podcasts', $data);
    }
}
