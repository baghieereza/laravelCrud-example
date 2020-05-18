<?php

namespace App\Repositories;

use App\Models\Docs;

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
       return Docs::where('id',$doc_id)->first();
    }

    /**
     * Get's all docs.
     *
     * @return mixed
     */
    public function all()
    {
        return Docs::get();
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
        return Docs::firstOrCreate(array('subject' => $data['subject'] , 'Number' => $data['Number'] , 'Number' => $data['Number'] , 'exporterReference' => $data['exporterReference'] , 'pageCount' => $data['pageCount'] , ));
    }
}
