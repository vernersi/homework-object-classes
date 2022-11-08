<?php
class Movie {
    private string $title;
    private string $studio;
    private string $rating;

    public function __construct(string $title, string $studio, string $rating){
        $this->title=$title;
        $this->studio = $studio;
        $this->rating = $rating;
}


    public static function getPG(array $movies):array{
        $allPgs = [];
        foreach ($movies as $moviesList){
            foreach($moviesList as $movie){
                if ($movie->rating==='PG'){
                    $allPgs[]=$movie->title;
                }
            }
        }
        return $allPgs;
    }

}
$movies [] =[
    new Movie('Casino Royale', 'Eon Productions', 'PG13'),
    new Movie('Glass', 'Buena Vista International', 'PG13'),
    new Movie('Spider-Man: Into the Spider-Verse', 'Columbia Pictures', 'PG')
];
var_dump (Movie::getPG($movies));



/*with the title “Casino Royale”, the studio “Eon Productions” and the rating “PG­13”;
with the title “Glass”, the studio “Buena Vista International” and the rating “PG­13”;
with the title “Spider-Man: Into the Spider-Verse”, the studio “Columbia Pictures” and the rating “PG”.*/

