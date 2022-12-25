<?php

// use App\Http\Controllers\Controller;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AgentDocument;

class UploadDocuments extends Controller
{
    //
    public function createForm(){
        return view('layouts\upload_documents');
      }

        

    public function fileUpload(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'content' => 'required'
       ]);

      $content = $request->content;
      $dom = new \DomDocument();
      $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
      $imageFile = $dom->getElementsByTagName('img');

      foreach($imageFile as $item => $image){
          $data = $image->getAttribute('src');
          list($type, $data) = explode(';', $data);
          list(, $data)      = explode(',', $data);
          $imgeData = base64_decode($data);
          $image_name= "/uploads/" . time().$item.'.png';
          $path = public_path() . $image_name;
          file_put_contents($path, $imgeData);
          
          $image->removeAttribute('src');
          $image->setAttribute('src', $image_name);
       }

      $content = $dom->saveHTML();
      echo $content;
      $post = Post::create([
           'title' => $request->name,
           'content' => $content
      ]);

      dd($post->toArray());
   }
}