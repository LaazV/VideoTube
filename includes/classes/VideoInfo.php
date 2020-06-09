<?php 
   class VideoInfo{

     
    private $conn, $video, $userLoggedInObj;

    public function __construct($conn, $video, $userLoggedInObj){
        $this->video = $video;
        $this->conn = $conn;
        $this->userLoggedInObj = $userLoggedInObj;
    }

    public function create(){
        return $this->getVideoPrimaryInfo() . $this->getVideoSecondaryInfo();        
   }

   private function getVideoPrimaryInfo(){
       $title = $this->video->getVideoTitle();
       $views = $this->video->getVideoViews();

       return "<div class='videoInfo'>
                 <h1> $title</h1>

                 <div class='bottomSection'> 
                   <span class='viewCount'>$views</span> 
                 </div>
               </div>            
       ";
   }

   private function getVideoSecondaryInfo (){
       return "";
   }

}
?>