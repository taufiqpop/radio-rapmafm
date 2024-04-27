<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $aboutModel;
    protected $beritawebModel;
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
    protected $minigamesModel;

    public function __construct()
    {
        $this->aboutModel        = new \App\Models\AboutModel();
        $this->beritawebModel    = new \App\Models\BeritaWebModel();
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
        $this->minigamesModel    = new \App\Models\MiniGamesModel();
    }

    public function index()
    {
        // Events
        $events = $this->eventsModel;
        $events->orderBy('id', 'DESC');

        // Achievements
        $achievements = $this->achievementsModel;
        $achievements->orderBy('id', 'DESC');

        // Berita Web
        $beritaweb = $this->beritawebModel;
        $beritaweb->orderBy('id', 'DESC');

        $data = [
            'title'         => 'Rapma FM',
            'about'         => $this->aboutModel->paginate(5, 'about'),
            'beritaweb'     => $beritaweb->paginate(6, 'beritaweb'),
            'achievements'  => $achievements->paginate(100, 'achievements'),
            'member'        => $this->memberModel->paginate(1, 'member'),
            'events'        => $events->paginate(100, 'events'),
            'program'       => $this->programModel->paginate(100, 'program'),
            'structure'     => $this->structureModel->paginate(5, 'structure'),
            'topchart'      => $this->topchartModel->paginate(5, 'topchart'),
            'penyiar'       => $this->penyiarModel->paginate(1, 'penyiar'),
            'minigames'     => $this->minigamesModel->paginate(10, 'minigames'),
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
            'pager'         => $podcast->pager,
            'currentPage'   => $currentPage,
            'settings'      => $this->settingsModel->paginate(1, 'settings'),
        ];

        return view('home/podcasts', $data);
    }

    // Events
    // RAPMAFEST 8
    public function rapmafest8()
    {
        $data = [
            'title' => 'Rapma FM | RAPMAFEST 8',
        ];

        return view('home/events/rapmafest8/index', $data);
    }

    // RAPMADAY 8
    public function rapmaday8()
    {
        $data = [
            'title' => 'Rapma FM | RAPMADAY 8',
        ];

        return view('home/events/rapmaday8/index', $data);
    }

    // RAPMAFEST 9
    public function rapmafest9()
    {
        $data = [
            'title' => 'Rapma FM | RAPMAFEST 9',
        ];

        return view('home/events/rapmafest9/index', $data);
    }

    // RAPMAFEST 10
    public function rapmafest10()
    {
        $data = [
            'title' => 'Rapma FM | RAPMAFEST 10',
        ];

        return view('home/events/rapmafest10/index', $data);
    }

    // Mini Games || Tic Tac Toe
    public function tictactoe()
    {
        $data = [
            'title'     => 'Rapma FM | Tic Tac Toe',
            'settings'  => $this->settingsModel->paginate(1, 'settings'),
        ];

        return view('home/minigames/tictactoe/index', $data);
    }

    // Mini Games || Memory Card
    public function memorycard()
    {
        $data = [
            'title'     => 'Rapma FM | Memory Cards',
            'settings'  => $this->settingsModel->paginate(1, 'settings'),
        ];

        return view('home/minigames/memorycards/index', $data);
    }
}
