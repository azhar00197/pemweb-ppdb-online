<?php
// app/Services/Contracts/NosqlServiceInterface.php
namespace App\Services\Contracts;

interface NosqlServiceInterface
{
    /**
     * Create a Document
     *
     * @param string $collection Collection/Table Name
     * @param array  $document   Document
     * @return boolean
     */
    public function create($collection, array $document);

    /**
     * Update a Document
     *
     * @param string $collection Collection/Table Name
     * @param mix    $id         Primary Id
     * @param array  $document   Document
     * @return boolean
     */
    public function update($collection, $id, array $document);

    /**
     * Delete a Document
     *
     * @param string $collection Collection/Table Name
     * @param mix    $id         Primary Id
     * @return boolean
     */
    public function delete($collection, $id);

    /**
     * Search Document(s)
     *
     * @param string $collection Collection/Table Name
     * @param array  $criteria   Key-value criteria
     * @return array
     */
    public function find($collection, array $criteria);
}
