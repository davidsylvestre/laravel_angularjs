<?php
namespace DASProject\Repositories\Eloquent;

use DasProject\Entities\Core\Client;
use DasProject\Repositories\ClientRepository;
use Prettus\Repository\Eloquent\BaseRepository;


class ClientRepositoryEloquent extends BaseRepository implements ClientRepository
{
    public function model()
    {
        return Client::class;
    }
}