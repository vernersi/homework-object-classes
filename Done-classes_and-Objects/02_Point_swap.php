<?php
class Point {
    public int $x;
    public int $y;
 public function __construct(int $x, int $y){
     $this->x = $x;
     $this->y = $y;
 }

 public function swapPoints($p1, $p2){
     $x2 = $p2->x;
     $y2 = $p2->y;
     $p2->x = $p1->x;
     $p2->y = $p1->y;
     $this->x = $x2;
     $this->y = $y2;
 }


}
$p1 = new Point(5, 2);
$p2 = new Point(-3, 6);
$p1->swapPoints($p1, $p2);

echo "(" . $p1->x . ", " . $p1->y . ")";
echo "(" . $p2->x . ", " . $p2->y . ")";