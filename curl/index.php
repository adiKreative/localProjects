<?php

class Download{
    const URL_MAX_LENGTH=2050;

    //clean url
    protected function cleanUrl($url){
        if(isset($url) && !empty($url)){
            if(strlen($url) < self::URL_MAX_LENGTH){
                return strip_tags($url);
            }
        }
    }

    //is_url
    protected function isUrl($url){
        $url = $this->cleanUrl($url);
        if(isset($url)){
            if(filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED)){
                return $url;
            }
        }
    }

    //return file extension
    protected function retExt($url){
        if($this->isUrl($url)){
           // $end = end(preg_split("/[.]+/", $url));
            $tmp = explode('.', $url);
            $end = end($tmp);
            if(isset($end)){
                return $end;
            }
        }
    }

    public function downloadFile($url){
        if($this->isUrl($url)){
            $ext = $this->retExt($url);
            if($ext){
                $curl = curl_init();
                curl_setopt($curl, CURLOPT_URL, $url);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl,CURLOPT_HEADER, false); 
                $result = curl_exec($curl);
                curl_close($curl);

                $destination = "downloads/file.$ext"; 
                $file = fopen($destination, 'w');
                fputs($file, $result);
                if(fclose($file)){
                    echo 'File Downaloaded';
                }
            }

        }
    }

}

$d_image = new Download();

if(isset($_POST['url'])){
    $url = $_POST['url'];
}

?>

<html>
<form action="http://localhost/practice/curl/index.php" method="post">
    <input type="text" name="url" maxlength="2000"/>
    <input type="submit" name="submit" value="Download">

</form>
</html>

<?php
if(isset($url)){
    $d_image->downloadFile($url);
}
