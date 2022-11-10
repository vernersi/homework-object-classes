<?php

class Application
{
    function run()
    {
        while (true) {
            echo "Choose the operation you want to perform \n";
            echo "Choose 0 for EXIT\n";
            echo "Choose 1 to fill video store\n";
            echo "Choose 2 to rent video (as user)\n";
            echo "Choose 3 to return video (as user)\n";
            echo "Choose 4 to list inventory\n";

            $command = (int)readline();

            switch ($command) {
                case 0:
                    echo "Bye!";
                    die;
                case 1:
                    $this->add_movies();
                    break;
                case 2:
                    $this->rent_video();
                    break;
                case 3:
                    $this->return_video();
                    break;
                case 4:
                    $this->list_inventory();
                    break;
                default:
                    echo "Sorry, I don't understand you..";
            }
        }
    }

    private function add_movies()
    {
        $videoCollection=new VideoStore();
        $videoCollection->addVideo('The Matrix');
        $videoCollection->addVideo('Godfather II');
        $videoCollection->addVideo('Star Wars Episode IV: A New Hope');
    }

    private function rent_video($videCollection)
    {
        $videoCollection->checkOutVideo('The Matrix');
        $videoCollection->checkOutVideo('Godfather II');
        $videoCollection->checkOutVideo('Star Wars Episode IV: A New Hope');
        return $videoCollection;
    }

    private function return_video(VideoStore $videoCollection)
    {
        $videoCollection->returnToStore('The Matrix');
        $videoCollection->returnToStore('Godfather II');
        $videoCollection->returnToStore('Star Wars Episode IV: A New Hope');
        return $videoCollection;
    }

    private function list_inventory(VideoStore $videCollection)
    {
        foreach ($videCollection->displayCollection() as $title){
            echo $title.PHP_EOL;
        }
    }
}

class VideoStore
{
    public array $collection;

    public function addVideo($title){
        $this->collection[$title]= new Video($title);
    }

    public function checkOutVideo(string $title) {
        $video = $this->collection[$title];
        $video->checkOut($video);
    }

    public function returnToStore(string $title) {
        $video = $this->collection[$title];
        $video->returnVideo();
    }

    public function rateVideo (string $title) {
        $this->collection[$title]->addRating();
    }

    public function displayCollection():array{
    return array_keys($this->collection);
    }



}

class Video
{
    public string $title;
    public bool $available=true;
    public float $userRating;

    public function __construct($title){
        $this->title=$title;
    }
    public function checkOut()
    {
        $this->available=false;
    }

    public function returnVideo(){
        $this->available=true;
    }

    public function addRating($rating){
        $this->userRating=$rating;
    }




}
$app = new Application();
$app->run();