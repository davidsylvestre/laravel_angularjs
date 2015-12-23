<?php
namespace DASProject\Repositories\Eloquent;

use DasProject\Models\Client;
use DasProject\Repositories\ClientRepository;
use Prettus\Repository\Eloquent\BaseRepository;


class ClientRepositoryEloquent extends BaseRepository implements ClientRepository
{
    public function model()
    {
        return Client::class;
    }
}