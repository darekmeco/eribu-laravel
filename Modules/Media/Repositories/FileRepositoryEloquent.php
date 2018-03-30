<?php
namespace Modules\Media\Providers;

use Modules\Media\Entities\File;
use Modules\Media\Repositories\FileRepository;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;

/**
 * Class FileRepositoryEloquent.
 *
 * @package namespace Modules\Media\Providers;
 */
class FileRepositoryEloquent extends BaseRepository implements FileRepository
{

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return File::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
