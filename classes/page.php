<?php
class Page {
    // Properties
    public $lang;
    public $meta_title;
    public $meta_keywords;
    public $description;
    public $author;
    public $arrStyles;
    public $arrScripts;
    public $arrSections;

    function __construct($lang,$meta_title,$meta_keywords,$description,$author,$arrStyles,$arrScripts,$arrSections) {
        $this->lang = $lang;
        $this->meta_title = $meta_title;
        $this->meta_keywords = $meta_keywords;
        $this->description = $description;
        $this->author = $author;
        $this->arrStyles = $arrStyles;
        $this->arrScripts = $arrScripts;
        $this->arrSections = $arrSections;
      }
    function displayPage()
    {
       echo "
       <!DOCTYPE html>
       <html lang='".$this->lang."'>
       <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <meta name='description' content='".$this->description."'>
            <meta name='keywords' content=".$this->meta_keywords."'>
            <meta name='author' content='".$this->author."'>
            <title>".$this->meta_title."</title>";
            foreach($this->arrStyles as $style)
            {
                echo "<link href='assets/style/".$style."' rel='stylesheet' />";
            }
            foreach($this->arrScripts as $script)
            {
                echo "<script src='assets/js/".$script."' defer></script>";
            }  
            echo "</head>";
        echo "<body>
                    ";
                        foreach($this->arrSections as $sectionName)
                        {
                            require "components/".$sectionName;
                        }
        echo"  
             </body>
        </html>";
    }
  }

?>