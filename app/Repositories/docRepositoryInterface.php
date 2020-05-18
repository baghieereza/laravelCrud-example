<?php
namespace App\Repositories;

interface docRepositoryInterface
{
    /**
     * Get's a post by it's ID
     *
     * @param int
     */
    public function get($post_id);

    /**
     * Get's all posts.
     *
     * @return mixed
     */
    public function all();

    /**
     * Deletes a post.
     *
     * @param int
     */
    public function delete($post_id);

    /**
     * Updates a post.
     *
     * @param int
     * @param array
     */
    public function update($post_id, array $post_data);


    /**
     * search a text
     *
     * @param $subject
     *
     * @return mixed
     */
    public function search($subject);


    /**
     * @param $data
     *
     * @return mixed
     */
    public function create($data);
}
