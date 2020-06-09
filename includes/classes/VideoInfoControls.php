<?php 
  require_once("includes/classes/ButtonProvider.php");
  class VideoInfoControls{
      
     
    private $video, $userLoggedInObj;

    public function __construct($video, $userLoggedInObj){
        $this->video = $video;
        $this->userLoggedInObj = $userLoggedInObj;
    }

    public function create(){
        $videoLikeButton = $this->videoLikeButton();
        $videoDisLikeButton = $this->videoDisLikeButton();
        return "
           <div class = 'controls'>
              $videoLikeButton
              $videoDisLikeButton
           </div>
        ";
    }
   
    private function videoLikeButton(){

        $text = $this->video->getVideoLikes();
        $videoId = $this->video->getVideoId();
        $action = "likeVideo(this, $videoId)";
        $class = "likeButton";
        $imageSrc = "assets/images/icons/thumb-up.png";
        return ButtonProvider::createButton($text, $imageSrc, $action, $class);
    }
    
    private function videoDisLikeButton(){
        return "<button>DISLIKE</button>";
    }
  }

?>