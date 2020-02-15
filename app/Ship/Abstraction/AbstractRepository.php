<?php


namespace App\Ship\Abstraction;

use Prettus\Repository\Eloquent\BaseRepository;

abstract class AbstractRepository extends BaseRepository
{
    /**
     * @param string $field
     * @return mixed
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function sum(string $field)
    {
        $this->applyCriteria();
        $this->applyScope();

        $result = $this->model->sum($field);

        $this->resetModel();
        $this->resetScope();

        return $result;
    }

    /**
     * @param array $data
     * @return mixed
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function insert(array $data)
    {
        $this->applyCriteria();
        $this->applyScope();

        $result = $this->model->insert($data);

        $this->resetModel();
        $this->resetScope();

        return $result;
    }
}
