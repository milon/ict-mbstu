<?php  namespace App\Helpers\HtmlEditor\Summernote;

use App\Helpers\HtmlEditor\HtmlEditor;
use File;
class Summernote implements  HtmlEditor {

    /**
     * Upload directory for summernote to upload files
     *
     * @var string
     */
    private $uploadDir;

    public function __construct()
    {
        $this->uploadDir = 'uploads/summernote/';
    }

    /**
     * Set the upload directory for summernote file upload
     *
     * @return void
     */
    public function setUploadDir($dir)
    {
        if (!File::exists($dir)) {
            File::makeDirectory($dir);
        }        
        $this->uploadDir = $dir;        
    }

    /**
     * Get the upload directory for summernote upload
     *
     * @return string;
     */
    public function getUploadDir()
    {
        return $this->uploadDir;
    }

    /**
     * Take summernote html code and return parsed html      
     * 
     * @param string $html
     * @return string
     */
    public function  parseHtml($html)
    {              
        $imageUrls = [];
        $pattern = '/src=\"data:image\/.*?\"/';
        preg_match_all($pattern, $html, $matches);
        $destinationPath = $this->uploadDir . 'summernote_' . time() . '-' . \Auth::id();
        
        $count = 0;
        foreach ($matches[0] as $imageTag) {
            $imageTag = preg_replace('/\"/', '', $imageTag);
            $path = $destinationPath . '-' . $count++;
            $image = substr($imageTag, 4);
            $imageUrls[] = $this->saveImage($image, $path);
        }

        $count = 0;
        $html = preg_replace_callback( $pattern, function($match) use( $imageUrls, &$count) {
            return ' src="' . $imageUrls[$count++] .'"';
        }, $html);
        
        return $html;
    }

    /**
     * Take image raw data or image path and save it to the destination provided
     *
     * @param string $image, string $destinationPat
     * @return string(image url)
     */
    private function saveImage($image, $destinationPath)
    {
        if (file_exists(substr($image, 1))) {
            return $image;
        }
        $img = \Image::make($image);
        $destinationPath = $destinationPath . '.png';
        $img->save($destinationPath);
        return '/'.$destinationPath;
    }
}