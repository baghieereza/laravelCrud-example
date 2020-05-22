<?php

namespace App\Repositories;

use App\Models\Docs;
use App\Models\Gallery;

/**
 * Class docRepository
 *
 * @package \App\Repositories
 */
class docRepository implements docRepositoryInterface
{

    /**
     * Get's a doc by it's ID
     *
     * @param int
     *
     * @return
     */
    public function get($doc_id)
    {
       return Docs::with('gallery')->where('id',$doc_id)->first();
    }

    /**
     * Get's all docs.
     *
     * @return mixed
     */
    public function all()
    {
        return Docs::with('gallery')->get();
    }

    /**
     * Deletes a doc.
     *
     * @param int
     *
     * @return
     */
    public function delete($doc_id)
    {
       return Docs::destroy($doc_id);
    }

    /**
     * Updates a doc.
     *
     * @param int
     * @param array
     *
     * @return
     */
    public function update($doc_id, array $doc_data)
    {
        return Docs::where('id',$doc_id)->update($doc_data);
    }

    /**
     * search a text
     *
     * @param $subject
     *
     * @return mixed
     */
    public function search($subject)
    {
        return Docs::where('subject',$subject)->get();
    }

    /**
     * @param $data
     *
     * @return mixed
     */
    public function create($data)
    {
        $doc =  Docs::firstOrCreate(array('subject' => $data['subject'] , 'number' => $data['number'] , 'date' => $data['date'] , 'exporterReference' => $data['exporterReference'] , 'pageCount' => $data['pageCount'] , ));
        return $this->saveGallery($doc->id);
    }


    /**
     * @param $doc_id
     *
     * @return bool
     */
    public function saveGallery($doc_id)
    {
        $gallery = session()->get('pics');
        foreach ($gallery as $item){
            Gallery::firstOrCreate(array('link' => asset('uploads/'.$item) , 'doc_id'=>$doc_id));
        }
        return true;
    }
}
