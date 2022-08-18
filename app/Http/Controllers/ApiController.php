<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Auth;
use Carbon\Carbon;

class ApiController extends Controller
{
    

    function recurse_copy($src,$dst) { 
        $dir = opendir($src); 
        @mkdir($dst); 
        while(false !== ( $file = readdir($dir)) ) { 
            if (( $file != '.' ) && ( $file != '..' )) { 
                if ( is_dir($src . '/' . $file) ) { 
                    $this->recurse_copy($src . '/' . $file,$dst . '/' . $file); 
                } 
                else { 
                    copy($src . '/' . $file,$dst . '/' . $file); 
                } 
            } 
        } 
        closedir($dir); 
    } 
    public function createProject(Request $request) {

        $path = public_path()."/backend/assets/novi/";
        $dir = $path."projects/".Auth::user()->id."/";
        
            if (!file_exists($dir)) {
                mkdir($dir, 0777);
            }
        $json_project = base64_decode($request->project);
        $projectObj = json_decode($json_project, true);

        $project = new Project;
        $project->name = 'Project_'.Auth::user()->id.'_'.Carbon::now()->timestamp;
        $project->client_id = Auth::user()->id;
        $project->user_id = Auth::user()->id;
        $project->company_id = Auth::user()->company_id;
        $project->status = 'novi';
        $project->save();
  
        $json_project = base64_decode($request->project);
        $projectObj = json_decode($json_project, true);
    
        if (isset($projectObj) && $projectObj != "null") {
            $dir = $path."projects/".Auth::user()->id."/";
            if (!file_exists($dir)) {
                mkdir($dir, 0777);
            }
    
            $dir = $dst = $dir . $project->id."/";
            if (!file_exists($dir)) {
                mkdir($dir, 0777);
            }
            
            $template = $path . $projectObj["dir"];
    
            $this->recurse_copy($template,$dir);
    
            $files    = scandir($dir);
            $fileWhitelist = array("project.json", "sitemap.xml", "robots.txt");
            $newFiles = array();
    
            if (isset($projectObj["filesToDelete"])){
                for ($i = 0; $i < count($projectObj["filesToDelete"]); $i++) {
                    $targetFile = $dir . $projectObj["filesToDelete"][$i];
                     if (file_exists($targetFile)) {
                       unlink($targetFile);
                     }
                }
                unset($projectObj["filesToDelete"]);
            }
    
    
            if (isset($projectObj["pages"])) {
                for ($i = 0; $i < count($projectObj["pages"]); $i++) {
    
                    if (!isset($projectObj["pages"][$i]["html"])) {
                       if (($key = array_search($projectObj["pages"][$i]["path"], $files)) !== false) {
                            unset($files[$key]);
                       }
                        continue;
                    }
    
                    if ($projectObj["pages"][$i]["path"] === "index.html"){
                        $htmlPath = $dir . "/" . $projectObj["pages"][$i]["path"];
                        $fileName = $projectObj["pages"][$i]["path"];
                    }else{
                        $htmlPath = $dir . "/" . $projectObj["pages"][$i]["path"];
                        $fileName = basename($projectObj["pages"][$i]["path"]);
                    }
    
                   if (($key = array_search($fileName, $files)) !== false) {
                        unset($files[$key]);
                    }
    
                    $fp = fopen($htmlPath, "wb");
                    fwrite($fp, $projectObj["pages"][$i]["html"]);
                    fclose($fp);
                    unset($projectObj["pages"][$i]["html"]);
                }
            }
    
            if (!file_exists($dir . "elements")){
                mkdir($dir . "elements", 0777);
            }
    
            if (isset($projectObj["presets"])) {
                $presetsDir   = $dir . "elements";
                $presetsFiles = scandir($presetsDir);
                $newFiles     = array();
                for ($i = 0; $i < count($projectObj["presets"]); $i++) {
                    if (!isset($projectObj["presets"][$i]["html"])) {
                        array_push($newFiles, $projectObj["presets"][$i]["path"]);
                    }
                }
                for ($i = 0; $i < count($projectObj["presets"]); $i++) {
                    if (isset($projectObj["presets"][$i]["html"])) {
                        $title       = preg_replace("/\s+/", "-", strtolower(preg_replace('/[\?|\||\\|\/|\:|\*|\>|\<|\.|\"|\,]/', "", $projectObj["presets"][$i]["title"])));
                        $title = transliterateString($title);
                        $newFileName = $title . ".html";
                        $j           = 0;
                        if (in_array($newFileName, $newFiles)) {
                            $j = 1;
                            while (in_array($title . "-" . $j . ".html", $newFiles)) {
                                $j++;
                            }
                            $newFileName = $title . "-" . $j . ".html";
                        }
                        array_push($newFiles, $newFileName);
                        $projectObj["presets"][$i]["path"] = $newFileName;
                        $htmlPath                          = $presetsDir . "/" . $newFileName;
                        $fileName                          = $newFileName;
                        if (($key = array_search($fileName, $presetsFiles)) !== false) {
                            unset($presetsFiles[$key]);
                        }
                        if (isset($projectObj["presets"][$i]["html"])) {
                            $fp = fopen($htmlPath, "wb");
                            fwrite($fp, $projectObj["presets"][$i]["html"]);
                            fclose($fp);
                        }
    
                        if (isset($projectObj["presets"][$i]["preview"]) && !empty($projectObj["presets"][$i]["preview"]) && file_exists($dir . $projectObj["presets"][$i]["preview"])){
                            $ext     = pathinfo($dir . $projectObj["presets"][$i]["preview"]);
                            $preview = basename($dir . $projectObj["presets"][$i]["preview"], "." . $ext['extension']);
                            if (($j == 0 && $preview != $title) || ($j > 0 && $preview != $title . "-" . $j)) {
                                $ext = "." . $ext["extension"];
                                if ($j > 0) {
                                    $newPreviewName = $title . "-" . $j;
                                } else {
                                    $newPreviewName = $title;
                                }
                                if (file_exists($presetsDir . "/" . $newPreviewName . $ext)) {
                                    $k = 1;
                                    while (file_exists($presetsDir . "/" . $newPreviewName . "-" . $k . $ext)) {
                                        $k++;
                                    }
                                    $newPreviewName = $newPreviewName . "-" . $k;
                                }
                                rename($dir . $projectObj["presets"][$i]["preview"], $presetsDir . "/" . $newPreviewName . $ext);
                                $projectObj["presets"][$i]["preview"] = "elements/" . $newPreviewName . $ext;
                            }
                        }
                        unset($projectObj["presets"][$i]["html"]);
                    }
                }
                $presetsFiles = scandir($presetsDir);
                foreach ($presetsFiles as $key => $value) {
                    if (preg_match("/[^\.]\..*$/", $value)) {
                        if (preg_match('/\.html$/', $value)) {
                            if (!in_array($value, $newFiles)) {
                                $preview = $presetsDir . "/" . basename($value, ".html");
                                if (file_exists($preview . ".jpg")) {
                                    unlink($preview . ".jpg");
                                } else if (file_exists($preview . ".png")) {
                                    unlink($preview . ".png");
                                }
                                unlink($presetsDir . "/" . $value);
                            }
                        } else {
                            $presetFile = basename($value);
                            $removeFile = true;
                            for ($i = 0; $i < count($projectObj["presets"]); $i++) {
                                $presetPreview = basename($projectObj["presets"][$i]["preview"]);
                                if ($presetPreview == $presetFile) {
                                    $removeFile = false;
                                    break;
                                }
                            }
                            if ($removeFile) {
                                if (file_exists($presetsDir . "/" . $value)) {
                                    unlink($presetsDir . "/" . $value);
                                }
                            }
                        }
                    }
                }
            }
    
            foreach ($files as $key => $value) {
                if (preg_match("/[^\.]\..*$/", $value) && !in_array($value, $fileWhitelist)) {
                    unlink($dir . $value);
                }
            }
    
            if (isset($projectObj["files"])) {
                foreach ($projectObj["files"] as $key => $value) {
                        $fp = fopen($dir . "/" . $key, "wb");
                        fwrite($fp, $value["content"]);
                        fclose($fp);
                    unset($projectObj["files"][$key]);
                }
            }
    
    
            $file       = $dir . "project.json";
            $projectObj['dir']  =   "projects/".Auth::user()->id."/". $project->id."/";
            $projectStr = json_encode($projectObj);
            
            echo $projectStr;
    
            $fp         = fopen($file, "wb");
            fwrite($fp, $projectStr);
            fclose($fp);
        }
    }
    public function updateProject($id, Request $request) {

        $path = public_path()."/backend/assets/novi/";
        $dir = $path."projects/".Auth::user()->id."/";
        
            if (!file_exists($dir)) {
                mkdir($dir, 0777);
            }
        $json_project = base64_decode($request->project);
        $projectObj = json_decode($json_project, true);

        $project = Project::find($id);
        $project->client_id = Auth::user()->id;
        $project->update();
  
        $json_project = base64_decode($request->project);
        $projectObj = json_decode($json_project, true);
    
        if (isset($projectObj) && $projectObj != "null") {
            $dir = $path."projects/".Auth::user()->id."/";
            if (!file_exists($dir)) {
                mkdir($dir, 0777);
            }
    
            $dir = $dst = $dir . $project->id."/";
            if (!file_exists($dir)) {
                mkdir($dir, 0777);
            }
            
            $template = $path . $projectObj["dir"];
    
            $this->recurse_copy($template,$dir);
    
            $files    = scandir($dir);
            $fileWhitelist = array("project.json", "sitemap.xml", "robots.txt");
            $newFiles = array();
    
            if (isset($projectObj["filesToDelete"])){
                for ($i = 0; $i < count($projectObj["filesToDelete"]); $i++) {
                    $targetFile = $dir . $projectObj["filesToDelete"][$i];
                     if (file_exists($targetFile)) {
                       unlink($targetFile);
                     }
                }
                unset($projectObj["filesToDelete"]);
            }
    
    
            if (isset($projectObj["pages"])) {
                for ($i = 0; $i < count($projectObj["pages"]); $i++) {
    
                    if (!isset($projectObj["pages"][$i]["html"])) {
                       if (($key = array_search($projectObj["pages"][$i]["path"], $files)) !== false) {
                            unset($files[$key]);
                       }
                        continue;
                    }
    
                    if ($projectObj["pages"][$i]["path"] === "index.html"){
                        $htmlPath = $dir . "/" . $projectObj["pages"][$i]["path"];
                        $fileName = $projectObj["pages"][$i]["path"];
                    }else{
                        $htmlPath = $dir . "/" . $projectObj["pages"][$i]["path"];
                        $fileName = basename($projectObj["pages"][$i]["path"]);
                    }
    
                   if (($key = array_search($fileName, $files)) !== false) {
                        unset($files[$key]);
                    }
    
                    $fp = fopen($htmlPath, "wb");
                    fwrite($fp, $projectObj["pages"][$i]["html"]);
                    fclose($fp);
                    unset($projectObj["pages"][$i]["html"]);
                }
            }
    
            if (!file_exists($dir . "elements")){
                mkdir($dir . "elements", 0777);
            }
    
            if (isset($projectObj["presets"])) {
                $presetsDir   = $dir . "elements";
                $presetsFiles = scandir($presetsDir);
                $newFiles     = array();
                for ($i = 0; $i < count($projectObj["presets"]); $i++) {
                    if (!isset($projectObj["presets"][$i]["html"])) {
                        array_push($newFiles, $projectObj["presets"][$i]["path"]);
                    }
                }
                for ($i = 0; $i < count($projectObj["presets"]); $i++) {
                    if (isset($projectObj["presets"][$i]["html"])) {
                        $title       = preg_replace("/\s+/", "-", strtolower(preg_replace('/[\?|\||\\|\/|\:|\*|\>|\<|\.|\"|\,]/', "", $projectObj["presets"][$i]["title"])));
                        $title = transliterateString($title);
                        $newFileName = $title . ".html";
                        $j           = 0;
                        if (in_array($newFileName, $newFiles)) {
                            $j = 1;
                            while (in_array($title . "-" . $j . ".html", $newFiles)) {
                                $j++;
                            }
                            $newFileName = $title . "-" . $j . ".html";
                        }
                        array_push($newFiles, $newFileName);
                        $projectObj["presets"][$i]["path"] = $newFileName;
                        $htmlPath                          = $presetsDir . "/" . $newFileName;
                        $fileName                          = $newFileName;
                        if (($key = array_search($fileName, $presetsFiles)) !== false) {
                            unset($presetsFiles[$key]);
                        }
                        if (isset($projectObj["presets"][$i]["html"])) {
                            $fp = fopen($htmlPath, "wb");
                            fwrite($fp, $projectObj["presets"][$i]["html"]);
                            fclose($fp);
                        }
    
                        if (isset($projectObj["presets"][$i]["preview"]) && !empty($projectObj["presets"][$i]["preview"]) && file_exists($dir . $projectObj["presets"][$i]["preview"])){
                            $ext     = pathinfo($dir . $projectObj["presets"][$i]["preview"]);
                            $preview = basename($dir . $projectObj["presets"][$i]["preview"], "." . $ext['extension']);
                            if (($j == 0 && $preview != $title) || ($j > 0 && $preview != $title . "-" . $j)) {
                                $ext = "." . $ext["extension"];
                                if ($j > 0) {
                                    $newPreviewName = $title . "-" . $j;
                                } else {
                                    $newPreviewName = $title;
                                }
                                if (file_exists($presetsDir . "/" . $newPreviewName . $ext)) {
                                    $k = 1;
                                    while (file_exists($presetsDir . "/" . $newPreviewName . "-" . $k . $ext)) {
                                        $k++;
                                    }
                                    $newPreviewName = $newPreviewName . "-" . $k;
                                }
                                rename($dir . $projectObj["presets"][$i]["preview"], $presetsDir . "/" . $newPreviewName . $ext);
                                $projectObj["presets"][$i]["preview"] = "elements/" . $newPreviewName . $ext;
                            }
                        }
                        unset($projectObj["presets"][$i]["html"]);
                    }
                }
                $presetsFiles = scandir($presetsDir);
                foreach ($presetsFiles as $key => $value) {
                    if (preg_match("/[^\.]\..*$/", $value)) {
                        if (preg_match('/\.html$/', $value)) {
                            if (!in_array($value, $newFiles)) {
                                $preview = $presetsDir . "/" . basename($value, ".html");
                                if (file_exists($preview . ".jpg")) {
                                    unlink($preview . ".jpg");
                                } else if (file_exists($preview . ".png")) {
                                    unlink($preview . ".png");
                                }
                                unlink($presetsDir . "/" . $value);
                            }
                        } else {
                            $presetFile = basename($value);
                            $removeFile = true;
                            for ($i = 0; $i < count($projectObj["presets"]); $i++) {
                                $presetPreview = basename($projectObj["presets"][$i]["preview"]);
                                if ($presetPreview == $presetFile) {
                                    $removeFile = false;
                                    break;
                                }
                            }
                            if ($removeFile) {
                                if (file_exists($presetsDir . "/" . $value)) {
                                    unlink($presetsDir . "/" . $value);
                                }
                            }
                        }
                    }
                }
            }
    
            foreach ($files as $key => $value) {
                if (preg_match("/[^\.]\..*$/", $value) && !in_array($value, $fileWhitelist)) {
                    unlink($dir . $value);
                }
            }
    
            if (isset($projectObj["files"])) {
                foreach ($projectObj["files"] as $key => $value) {
                        $fp = fopen($dir . "/" . $key, "wb");
                        fwrite($fp, $value["content"]);
                        fclose($fp);
                    unset($projectObj["files"][$key]);
                }
            }
    
    
            $file       = $dir . "project.json";
            $projectObj['dir']  =   "projects/".Auth::user()->id."/". $project->id."/";
            $projectObj['name']  =  $project->name;
            $projectStr = json_encode($projectObj);
            
            echo $projectStr;
    
            $fp         = fopen($file, "wb");
            fwrite($fp, $projectStr);
            fclose($fp);
        }
    }
}