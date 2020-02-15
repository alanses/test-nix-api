<?php

namespace App\Modules\Orders\Tasks;

use App\Modules\Orders\Repositories\OrderRepository;
use App\Ship\Abstraction\AbstractTask;
use App\Ship\Criterias\Eloquent\BetweenCriteria;
use App\Ship\Criterias\Eloquent\HavingCriteria;

class GetListOrdersTask extends AbstractTask
{
    /**
     * @var OrderRepository
     */
    private $repository;

    public function __construct(OrderRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return mixed
     */
    public function run()
    {
        return $this->repository->get();
    }

    /**
     * @param int $categoryID
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function whereCategoryIS(?int $categoryID)
    {
        if($categoryID) {
            $this->repository->pushCriteria(new HavingCriteria('category_id', '=', $categoryID));
        }
    }

    /**
     * @return OrderRepository
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function groupBy()
    {
        $this->repository->orderBy('category_id');
    }

    public function whereDateBetween($start, $end)
    {
        if($start && $end) {
            $this->repository->pushCriteria(new BetweenCriteria('created_at', $start, $end));
        }
    }
}
